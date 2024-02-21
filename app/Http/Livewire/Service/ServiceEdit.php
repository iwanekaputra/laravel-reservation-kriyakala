<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use App\Models\Studio;
use Livewire\Component;

class ServiceEdit extends Component
{

    public $studio;
    public $name;
    public $statusPayment;

    public $service;


    public $listeners = [
        'moveToIndex'
    ];

    public $rules = [
        'name' => 'required',
        'studio' => 'required',
        'statusPayment' => 'required'
    ];

    public function mount($id) {
        $this->service = Service::find($id);
        $this->studio = $this->service->studio_id;
        $this->name = $this->service->name;
        $this->statusPayment = $this->service->status_payment;
    }

    public function update() {
        $this->validate();

        $service = $this->service->update([
            'name' => $this->name,
            'studio_id' => $this->studio,
            'status_payment' => $this->statusPayment
        ]);

        if($service) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil Diedit',
                'text' => '',
                'timer' => 2000,
                'redirect' => 'moveToIndex'
            ]);
        }


    }

    public function moveToIndex() {
        return redirect()->route('admin.service.index');
    }

    public function render()
    {
        return view('livewire.service.service-edit', [
            'studios' => Studio::get()
        ])->extends('layouts.admin');
    }
}
