<?php

namespace App\Http\Livewire\Studio;

use App\Models\Studio;
use Livewire\Component;

class StudioEdit extends Component
{

    public $studio;
    public $name;

    public $listeners = [
        'moveToIndex'
    ];

    public $rules = [
        'name' => 'required'
    ];

    public function mount($id) {
        $this->studio = Studio::find($id);
        $this->name = $this->studio->name;
    }

    public function update() {
        $this->validate();

        $studio = $this->studio->update([
            'name' => $this->name
        ]);

        if($studio) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil Edit',
                'text' => '',
                'timer' => 2000,
                'redirect' => 'moveToIndex'
            ]);
        }


    }

    public function moveToIndex() {
        return redirect()->route('admin.studio.index');
    }

    public function render()
    {
        return view('livewire.studio.studio-edit')->extends('layouts.admin');
    }
}
