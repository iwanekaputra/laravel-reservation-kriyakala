<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use App\Models\Time;
use Carbon\Carbon;
use Livewire\Component;

class Reschedule extends Component
{

    public $search;
    public $booking;
    public $message;
    public $appointment;
    public $time;

    public $studio;
    public $selectService;

    public $times;

    protected $listeners = [
        'moveToIndex'
    ];

    public function searchBooking() {
        $this->booking = Booking::where('order_id', $this->search)->first();
        if($this->booking == null) {
            return $this->message = 'Invoice tidak ditemukan';
        }
        $this->appointment = $this->booking->in_date;
        $this->studio = $this->booking->studio;
        $this->selectService = $this->booking->service;
        $this->time = $this->booking->time;
        $this->updatedAppointment();
    }

    public function updatedAppointment() {
        $selectDate = Carbon::parse(strtotime($this->appointment));

        $getBooking = Booking::where('in_date', $this->appointment)->whereNotIn('time', [$this->time])->where('studio', $this->studio);
        if($selectDate->isWeekday()) {
            $this->times = Time::whereHas('service', function($query) {
                $query->where('name', $this->selectService);
                $query->whereHas('studio', function($query) {
                    $query->where("name", $this->studio);
                });
            })->where('type', 'weekday')->whereNotIn('hour', $getBooking->pluck('time'))->get();
        }

        if($selectDate->isWeekend()) {
            $this->times = Time::whereHas('service', function($query) {
                $query->where('name', $this->selectService);
                $query->whereHas('studio', function($query) {
                    $query->where("name", $this->studio);
                });
            })->where('type', 'weekend')->whereNotIn('hour', $getBooking->pluck('time'))->get();
        }
    }

    public function reschedule() {
        $this->booking->update([
            'time' => $this->time,
            'in_date' => $this->appointment
        ]);

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Berhasil reschedule',
            'text' => '',
            'timer' => 3000,
            'redirect' => 'moveToIndex'
        ]);

    }

    public function moveToIndex() {
        return redirect()->route('reschedule');

    }

    public function render()
    {
        return view('livewire.reschedule')->extends('layouts.app');
    }
}
