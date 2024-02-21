<?php

namespace App\Http\Livewire\Booking;

use App\Models\Booking;
use Livewire\Component;
use Livewire\WithPagination;

class BookingIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $bookingId;

    public $listeners = [
        'delete'
    ];

    public function confirmDelete($id) {
        $this->bookingId= $id;


        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'error',
            'message' => 'Apakah yakin untuk dihapus?',
            'text' => '',
            'timer' => 2000,
            'action' => 'delete'
        ]);
    }

    public function delete() {
        $booking = Booking::find($this->bookingId);

        $booking->delete();

        return redirect()->route('admin.booking.index');
    }

    public function render()
    {
        return view('livewire.booking.booking-index', [
            'bookings' => Booking::orderBy('status_payment')->paginate(10)
        ])->extends('layouts.admin');
    }
}
