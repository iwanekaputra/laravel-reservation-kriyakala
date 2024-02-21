<?php

namespace App\Http\Livewire\Background;

use App\Models\BackgroundColor;
use App\Models\Service;
use Livewire\Component;

class BackgroundCreate extends Component
{

    public $name;
    public $service;

    public $listeners = [
        'moveToIndex'
    ];

    public $rules = [
        'name' => 'required',
        'service' => 'required'
    ];

    public function save() {
        $this->validate();

        $background = BackgroundColor::create([
            'name' => $this->name,
            'service_id' => $this->service
        ]);

        if($background) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil Ditambahkan',
                'text' => '',
                'timer' => 2000,
                'redirect' => 'moveToIndex'
            ]);
        }


    }

    public function moveToIndex() {
        return redirect()->route('admin.background.index');
    }

    public function render()
    {
        return view('livewire.background.background-create', [
            'services' => Service::get()
        ])->extends('layouts.admin');
    }
}
