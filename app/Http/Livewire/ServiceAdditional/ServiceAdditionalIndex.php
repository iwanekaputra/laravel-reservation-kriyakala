<?php

namespace App\Http\Livewire\ServiceAdditional;

use App\Models\ServiceAdditional;
use Livewire\Component;

class ServiceAdditionalIndex extends Component
{

    public $additionalId;

    public $listeners = [
        'delete'
    ];

    public function confirmDelete($id) {
        $this->additionalId = $id;

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'error',
            'message' => 'Apakah yakin untuk dihapus?',
            'text' => '',
            'timer' => 2000,
            'action' => 'delete'
        ]);
    }

    public function delete() {
        $additional = ServiceAdditional::find($this->additionalId);

        $additional->delete();

        return redirect()->route('admin.additional.index');

    }
    public function render()
    {
        return view('livewire.service-additional.service-additional-index', [
            'serviceAdditionals' => ServiceAdditional::orderBy('service_id')->get()
        ])->extends('layouts.admin');
    }
}
