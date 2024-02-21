<?php

namespace App\Http\Livewire\ServicePackage;

use App\Models\Gallery;
use App\Models\Service;
use App\Models\ServicePackage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServicePackageCreate extends Component
{

    use WithFileUploads;


    public $name;
    public $service;
    public $priceWeekday;
    public $priceWeekend;
    public $discountWeekday;
    public $discountWeekend;
    public $image;
    public $description;
    public $additionalDescription;



    public $listeners = [
        'moveToIndex'
    ];

    public $rules = [
        'name' => 'required',
        'service' => 'required',
        'priceWeekday' => 'required',
        'priceWeekend' => 'required',
        'discountWeekday' => 'required',
        'discountWeekend' => 'required',
        'image' => 'image|max:1024',

    ];

    public function save() {
        $this->validate();
        $name = md5($this->image . microtime()) . '.' . $this->image->extension();
        $this->image->storeAs('galleries', $name);



        $package = ServicePackage::create([
            'service_id' => $this->service,
            'name' => $this->name,
            'price_weekday' => $this->priceWeekday,
            'price_weekend' => $this->priceWeekend,
            'discount_weekday' => $this->discountWeekday,
            'discount_weekend' => $this->discountWeekend,
            'description' => $this->description,
            'additional_description' => $this->additionalDescription
        ]);

        Gallery::create([
            'service_package_id' => $package->id,
            'image' => $name
        ]);



        if($package) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil di tambahkan',
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
        return view('livewire.service-package.service-package-create', [
            'services' =>   Service::get()
        ])->extends('layouts.admin');
    }
}
