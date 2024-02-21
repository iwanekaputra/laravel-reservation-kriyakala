<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class ServiceIndex extends Component
{
    public $serviceId;

    public $listeners = [
        'delete'
    ];

    public function confirmDelete($id) {
        $this->serviceId = $id;

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'error',
            'message' => 'Apakah yakin untuk dihapus?',
            'text' => 'Ini akan menghapus semua additional service, background, dan gallery yang berkaitan dengan service tersebut',
            'timer' => 2000,
            'action' => 'delete'
        ]);
    }

    public function delete() {
        $service = Service::find($this->serviceId);

        foreach($service->serviceAdditionals()->get() as $sa) {
            $sa->delete();
        }
        foreach($service->servicePackages()->get() as $sp) {
            $sp->delete();
        }

        foreach($service->backgroundColors()->get() as $bc) {
            $bc->delete();
        }

        $service->delete();

        return redirect()->route('admin.service.index');

    }

    public function render()
    {
        return view('livewire.service.service-index', [
            'services' => Service::get()
        ])->extends('layouts.admin');
    }
}
