<?php

namespace App\Http\Livewire\Booking;

use App\Models\Booking;
use App\Models\ServicePackage;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use Livewire\WithPagination;

class BookingIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $bookingId;

    public $startDate;
    public $endDate;

    public $bookings;

    public $filterDate;

    public $listeners = [
        'delete',
        'deleteBooking',
        'filter'
    ];


    public function mount()
    {

        if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
            $startDa = explode("-", $_GET['startDate']);
            $endDa = explode("-", $_GET['endDate']);
            $this->filterDate = $startDa[1] . '/' . $startDa[2] . '/' . $startDa[0] . ' - ' . $endDa[1] . '/' . $endDa[2] . '/' . $endDa[0];

            $this->bookings = Booking::orderBy('in_date')->whereBetween('created_at', [$_GET['startDate'], $_GET['endDate']])->get();
        } else {
            $this->bookings = Booking::orderBy('in_date', 'DESC')->get();
        }
    }

    public function filter($data)
    {

        $this->startDate = $data['start'];
        $this->endDate = $data['end'];

        $this->dispatchBrowserEvent('okelah', [
            'startDate' => $data['start'],
            'endDate' => $data['end']
        ]);
        // return redirect()->route('admin.booking.index', '');
    }

    public function deleteBooking($id)
    {
        Booking::find($id)->delete();

        return redirect()->route('admin.booking.index');
    }

    public function confirmDelete($id)
    {
        $this->bookingId = $id;


        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'error',
            'message' => 'Apakah yakin untuk dihapus?',
            'text' => '',
            'timer' => 2000,
            'action' => 'delete'
        ]);
    }

    public function delete()
    {
        $booking = Booking::where('order_id', $this->bookingId)->get();

        foreach ($booking as $bo) {
            $bo->delete();
        }

        return redirect()->route('admin.booking.index');
    }

    public function render()
    {

        // $booking = Booking::whereBetween('created_at', ['2024-02-05', '2024-02-06'])->get();
        // dd($booking->count());
        // dd(Carbon::now()->startOfMonth());

        return view('livewire.booking.booking-index', [
            // 'bookings' => Booking::orderBy('in_date')->get(),
            'servicePackages' => ServicePackage::orderBy('service_id')->get()

        ])->extends('layouts.admin');
    }
}
