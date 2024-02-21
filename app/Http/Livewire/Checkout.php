<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use App\Models\Service;
use App\Models\ServicePackage;
use Carbon\Carbon;
use Livewire\Component;

class Checkout extends Component
{

    public $invoice;
    public $priceNormal;

    public function mount($orderId) {
        $this->invoice = Booking::where('order_id', $orderId)->first();

        $this->priceNormal = ServicePackage::where('name', $this->invoice->package)->first();

        $selectDate = Carbon::parse(strtotime($this->invoice->in_date));


    }

    public function pay() {


    }

    public function render()
    {
        return view('livewire.checkout')->extends("layouts.app");
    }
}
