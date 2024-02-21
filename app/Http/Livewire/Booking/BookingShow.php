<?php

namespace App\Http\Livewire\Booking;

use App\Models\Booking;
use Livewire\Component;

class BookingShow extends Component
{

    public $booking;

    public function mount($id) {
        $this->booking = Booking::find($id);
    }

    public function render()
    {
        return view('livewire.booking.booking-show')->extends("layouts.admin");
    }
}
