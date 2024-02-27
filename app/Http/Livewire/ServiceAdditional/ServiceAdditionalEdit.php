<?php

namespace App\Http\Livewire\ServiceAdditional;

use App\Models\Service;
use App\Models\ServiceAdditional;
use App\Models\ServicePackage;
use Livewire\Component;

class ServiceAdditionalEdit extends Component
{

    public $name;
    public $package;
    public $priceWeekday;
    public $priceWeekend;
    public $discountWeekday;
    public $discountWeekend;
    public $additional;
    public $typeInput;
    public $defaultValue;

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
        'defaultValue' => 'required'
    ];

    public function mount($id)
    {
        $this->additional = ServiceAdditional::find($id);

        $this->name = $this->additional->name;
        $this->package = $this->additional->service_package_id;
        $this->priceWeekday = $this->additional->price_weekday;
        $this->priceWeekend = $this->additional->price_weekend;
        $this->discountWeekday = $this->additional->discount_weekday;
        $this->discountWeekend = $this->additional->discount_weekend;
        $this->typeInput = $this->additional->type_input;
        $this->defaultValue = $this->additional->default_value;
    }

    public function update()
    {
        $this->validate();

        $serviceAdditional = $this->additional->update([
            'name' => $this->name,
            'service_package_id' => $this->package,
            'price_weekday' => $this->priceWeekday,
            'price_weekend' => $this->priceWeekend,
            'discount_weekday' => $this->discountWeekday,
            'discount_weekend' => $this->discountWeekend,
            'type_input' => $this->typeInput,
            'default_value' => $this->defaultValue
        ]);

        if ($serviceAdditional) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil di edit',
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
        return view('livewire.service-additional.service-additional-edit', [
            'packages' => ServicePackage::get()
        ])->extends('layouts.admin');
    }
}
