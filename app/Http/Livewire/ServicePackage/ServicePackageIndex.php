<?php

namespace App\Http\Livewire\ServicePackage;

use App\Models\ServicePackage;
use Livewire\Component;

class ServicePackageIndex extends Component
{

    public $packageId;

    public $listeners = [
        'delete'
    ];

    public function confirmDelete($id) {
        $this->packageId = $id;

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'error',
            'message' => 'Apakah yakin untuk dihapus?',
            'text' => 'Ini akan menghapus gambar paket juga',
            'timer' => 2000,
            'action' => 'delete'
        ]);
    }

    public function delete() {
        $package = ServicePackage::find($this->packageId);

        foreach($package->galleries()->get() as $gl) {
            $gl->delete();
        }
        $package->delete();

        return redirect()->route('admin.package.index');

    }

    public function render()
    {
        return view('livewire.service-package.service-package-index', [
            'servicePackages' => ServicePackage::orderBy('service_id')->get()
        ])->extends("layouts.admin");
    }
}
