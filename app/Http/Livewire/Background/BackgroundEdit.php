<?php

namespace App\Http\Livewire\Background;

use App\Models\BackgroundColor;
use App\Models\Service;
use Livewire\Component;

class BackgroundEdit extends Component
{

    public $service;
    public $name;

    public $backgroundColor;


    public $listeners = [
        'moveToIndex'
    ];

    public $rules = [
        'name' => 'required',
        'service' => 'required',
    ];

    public function mount($id) {
        $this->backgroundColor = BackgroundColor::find($id);
        $this->service = $this->backgroundColor->service_id;
        $this->name = $this->backgroundColor->name;
    }

    public function update() {
        $this->validate();

        $backgroundColor = $this->backgroundColor->update([
            'name' => $this->name,
            'service_id' => $this->service,
        ]);

        if($backgroundColor) {
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
        return redirect()->route('admin.background.index');
    }

    public function render()
    {
        return view('livewire.background.background-edit', [
            'services' => Service::get()
        ])->extends('layouts.admin');
    }
}
