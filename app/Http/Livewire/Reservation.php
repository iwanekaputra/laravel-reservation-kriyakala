<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use App\Models\ServicePackage;
use Carbon\Carbon;
use Livewire\Component;

class Reservation extends Component
{

    public $invoice;
    public $priceNormal;

    public $currentStep = 1;

    public function mount($orderId) {
        $this->invoice = Booking::where('order_id', $orderId)->first();

        $this->priceNormal = ServicePackage::where('name', $this->invoice->package)->first();

        $selectDate = Carbon::parse(strtotime($this->invoice->in_date));


    }

    public function changeStep($no) {
        $this->currentStep = $no;
    }

    public function render()
    {
        return view('livewire.reservation')->extends('layouts.main');
    }
}
