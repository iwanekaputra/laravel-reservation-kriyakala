<?php

namespace App\Http\Livewire\ServicePackage;

use App\Models\Gallery;
use App\Models\Service;
use App\Models\ServicePackage;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServicePackageEdit extends Component
{

    use WithFileUploads;

    public $name;
    public $service;
    public $priceWeekday;
    public $priceWeekend;
    public $discountWeekday;
    public $discountWeekend;
    public $image;
    public $imageEdit;
    public $description;
    public $additionalDescription;

    public $package;


    public $listeners = [
        'moveToIndex'
    ];

    public $rules = [
        'name' => 'required',
        'service' => 'required',
        'priceWeekday' => 'required',
        'priceWeekend' => 'required',
        'discountWeekday' => 'required|max:3',
        'discountWeekend' => 'required|max:3',
        'imageEdit' => 'nullable|image|max:1024',
    ];

    public function mount($id) {
        $this->package = ServicePackage::find($id);
        $this->name = $this->package->name;
        $this->service = $this->package->service_id;
        $this->priceWeekday = $this->package->price_weekday;
        $this->priceWeekend = $this->package->price_weekend;
        $this->discountWeekday = $this->package->discount_weekday;
        $this->discountWeekend = $this->package->discount_weekend;
        $this->image = $this->package->galleries->first()->image ?? null;
        $this->description = $this->package->description;
        $this->additionalDescription = $this->package->additional_description;
    }

    public function update() {
        $this->validate();

        $name = '';

        if($this->imageEdit) {
            $name = md5($this->imageEdit . microtime()) . '.' . $this->imageEdit->extension();
            Storage::delete('galleries/' . $this->image);
            $this->imageEdit->storeAs('galleries', $name);
        } else {
            $name = $this->image;
        }



        $package = $this->package->update([
            'name' => $this->name,
            'service_id' => $this->service,
            'price_weekday' => $this->priceWeekday,
            'price_weekend' => $this->priceWeekend,
            'discount_weekday' => $this->discountWeekday,
            'discount_weekend' => $this->discountWeekend,
            'description' => $this->description,
            'additional_description' => $this->additionalDescription
        ]);

        if($this->imageEdit) {
            $imageEdit = Gallery::where('service_package_id', $this->package->id)->first();

            if($imageEdit) {
                $imageEdit->update([
                    'image' => $name
                ]);
            } else {
                Gallery::create([
                    'service_package_id' => $this->package->id,
                    'image' => $name
                ]);
            }

        }


        if($package) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil diedit',
                'text' => '',
                'timer' => 2000,
                'redirect' => 'moveToIndex'
            ]);
        }


    }

    public function moveToIndex() {
        return redirect()->route('admin.package.index');
    }

    public function render()
    {
        return view('livewire.service-package.service-package-edit', [
            'services' => Service::get()
        ])->extends('layouts.admin');
    }
}
