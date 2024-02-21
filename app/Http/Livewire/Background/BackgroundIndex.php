<?php

namespace App\Http\Livewire\Background;

use App\Models\BackgroundColor;
use Livewire\Component;
use Livewire\WithPagination;

class BackgroundIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $backgroundColorId;


    public $listeners = [
        'delete'
    ];



    public function confirmDelete($id) {
        $this->backgroundColorId = $id;

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'error',
            'message' => 'Apakah yakin untuk dihapus?',
            'text' => '',
            'timer' => 2000,
            'action' => 'delete'
        ]);
    }

    public function delete() {
        $backgroundColor = BackgroundColor::find($this->backgroundColorId);

        $backgroundColor->delete();

        return redirect()->route('admin.background.index');

    }

    public function render()
    {
        return view('livewire.background.background-index', [
            'backgroundColors' => BackgroundColor::orderBy('service_id')->paginate(10)
        ])->extends('layouts.admin');
    }
}
