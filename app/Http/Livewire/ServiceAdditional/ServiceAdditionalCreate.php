<?php

namespace App\Http\Livewire\ServiceAdditional;

use App\Models\Service;
use App\Models\ServiceAdditional;
use App\Models\ServicePackage;
use Livewire\Component;

class ServiceAdditionalCreate extends Component
{

    public $name;
    public $package;
    public $priceWeekday;
    public $priceWeekend;
    public $discountWeekday;
    public $discountWeekend;
    public $typeInput;
    public $defaultValue;
    public $maxValue;

    public $listeners = [
        'moveToIndex'
    ];

    public $rules = [
        'name' => 'required',
        'package' => 'required',
        'priceWeekday' => 'required',
        'priceWeekend' => 'required',
        'discountWeekday' => 'required|max:3',
        'discountWeekend' => 'required|max:3',
        'typeInput' => 'required',
        'defaultValue' => 'required',
        'maxValue' => 'nullable'
    ];

    public function save()
    {
        $this->validate();

        $additional = ServiceAdditional::create([
            'name' => $this->name,
            'service_package_id' => $this->package,
            'price_weekday' => $this->priceWeekday,
            'price_weekend' => $this->priceWeekend,
            'discount_weekday' => $this->discountWeekday,
            'discount_weekend' => $this->discountWeekend,
            'type_input' => $this->typeInput,
            'default_value' => $this->defaultValue,
            'max_value' => $this->maxValue
        ]);

        if ($additional) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil Di tambahkan',
                'text' => '',
                'timer' => 2000,
                'redirect' => 'moveToIndex'
            ]);
        }
    }

    public function moveToIndex()
    {
        return redirect()->route('admin.additional.index');
    }

    public function render()
    {
        return view('livewire.service-additional.service-additional-create', [
            'packages' => ServicePackage::get()
        ])->extends('layouts.admin');
    }
}
