<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServicePackage;
use Livewire\Component;
use Livewire\WithPagination;

class Product extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $serviceId;

    public $servicePackages;

    public function mount()
    {
        if (isset($_GET['service'])) {
            $this->serviceId = $_GET['service'];
        }
    }

    public function updatedServiceId()
    {
        $this->resetPage();
    }

    public function render()
    {

        return view('livewire.product', [
            'services' => Service::orderBy('order_number')->get(),
            'packages' => $this->serviceId == null || $this->serviceId == '0' ? ServicePackage::orderBy('price_weekday')->paginate(9) : ServicePackage::where('service_id', $this->serviceId)->orderBy('price_weekday')->paginate(9)
        ])->extends('layouts.main');
    }
}
