<?php

namespace App\Http\Livewire\ServiceAdditional;

use App\Models\Service;
use App\Models\ServiceAdditional;
use Livewire\Component;

class ServiceAdditionalCreate extends Component
{

    public $name;
    public $service;
    public $priceWeekday;
    public $priceWeekend;
    public $discountWeekday;
    public $discountWeekend;

    public $listeners = [
        'moveToIndex'
    ];

    public $rules = [
        'name' => 'required',
        'service' => 'required',
        'priceWeekday' => 'required',
        'priceWeekend' => 'required',
        'discountWeekday' => 'required|max:3',
        'discountWeekend' => 'required|max:3'
    ];

    public function save() {
        $this->validate();

        $additional = ServiceAdditional::create([
            'name' => $this->name,
            'service_id' => $this->service,
            'price_weekday' => $this->priceWeekday,
            'price_weekend' => $this->priceWeekend,
            'discount_weekday' => $this->discountWeekday,
            'discount_weekend' => $this->discountWeekend
        ]);

        if($additional) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil Di tambahkan',
                'text' => '',
                'timer' => 2000,
                'redirect' => 'moveToIndex'
            ]);
        }


    }

    public function moveToIndex() {
        return redirect()->route('admin.additional.index');
    }

    public function render()
    {
        return view('livewire.service-additional.service-additional-create', [
            'services' => Service::get()
        ])->extends('layouts.admin');
    }
}
