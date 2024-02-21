<?php

namespace App\Http\Livewire\Studio;

use App\Models\Studio;
use Livewire\Component;

class StudioCreate extends Component
{
    public $name;

    public $listeners = [
        'moveToIndex'
    ];

    public $rules = [
        'name' => 'required'
    ];

    public function save() {
        $this->validate();

        $studio = Studio::create([
            'name' => $this->name
        ]);

        if($studio) {
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
        return redirect()->route('admin.studio.index');
    }

    public function render()
    {
        return view('livewire.studio.studio-create')->extends("layouts.admin");
    }
}
