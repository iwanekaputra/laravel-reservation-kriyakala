<?php

namespace App\Http\Livewire\Studio;

use App\Models\Booking;
use App\Models\Studio;
use Livewire\Component;
use PhpParser\Node\Expr\Cast\Bool_;

class StudioIndex extends Component
{

    public $studioId;

    public $listeners = [
        'delete'
    ];

    public function confirmDelete($id) {
        $this->studioId = $id;

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'error',
            'message' => 'Apakah yakin untuk dihapus?',
            'text' => 'Ini akan menghapus semua service, additional service, background, dan gallery yang berkaitan dengan studio tersebut',
            'timer' => 2000,
            'action' => 'delete'
        ]);
    }

    public function delete() {
        $studio = Studio::find($this->studioId);

        foreach($studio->services()->get() as $st) {
            foreach($st->servicePackages()->get() as $sp) {

                foreach($sp->galleries()->get() as $gl) {
                    $gl->delete();
                }

                $sp->delete();
            }

            foreach($st->serviceAdditionals()->get() as $sa) {
                $sa->delete();
            }

            foreach($st->backgroundColors()->get() as $bc) {
                $bc->delete();
            }

            $st->delete();
        }

        $studio->delete();

        return redirect()->route('admin.studio.index');

    }

    public function render()
    {
        return view('livewire.studio.studio-index', [
            'studios' => Studio::get(),
            'bookings' => Booking::get()
        ])->extends('layouts.admin');
    }
}
