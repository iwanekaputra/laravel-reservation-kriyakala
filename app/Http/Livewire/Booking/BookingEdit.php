<?php

namespace App\Http\Livewire\Booking;

use App\Models\BackgroundColor;
use App\Models\Booking;
use App\Models\Service;
use App\Models\ServiceAdditional;
use App\Models\ServicePackage;
use App\Models\Studio;
use App\Models\Time;
use Carbon\Carbon;
use Livewire\Component;

class BookingEdit extends Component
{

    public $name, $email, $nowa, $studio, $selectService, $package, $mainBackground, $additionalBackground = 0, $appointment, $time;

    public $selectedServiceAdditional = [];

    public $booking;
    public $bookingId;
    public $isShowAppointment = false;
    public $isShowLoading = false;

    public $services;
    public $servicePackages;
    public $serviceAdditionals;
    public $times;

    public $snapToken;

    protected $listeners = [
        'moveToIndex'
    ];


    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'nowa' => 'required',
        'studio' => 'required',
        'selectService' => 'required',
        'package' => 'required',
        'mainBackground' => 'required',
        'appointment' => 'required',
        'time' => 'required'
    ];

    public function mount($id) {
        $this->booking = Booking::find($id);
        $this->name = $this->booking->name;
        $this->email = $this->booking->email;
        $this->nowa = $this->booking->nowa;
        $this->studio = $this->booking->studio;
        $this->mainBackground = $this->booking->main_background;
        $this->additionalBackground = $this->booking->additional_background;
        $this->selectService = $this->booking->service;
        $this->appointment = $this->booking->in_date;

        $this->updatedStudio();
        $this->selectService = $this->booking->service;
        $this->time = $this->booking->time;


        $this->updatedSelectService();

        $this->updatedAppointment();
        $date = strtotime($this->booking->in_date);

        $additional = [];
        if(Carbon::parse($date)->isWeekday())  {
            foreach($this->booking->additional as $key => $value) {
               $additionaPackage =  ServiceAdditional::where('name', $key)->where('price_weekday', $value)->first();
                $additional[$additionaPackage->id] = $key;
            }
        }


        if(Carbon::parse($date)->isWeekend())  {
            foreach($this->booking->additional as $key => $value) {
               $additionaPackage =  ServiceAdditional::where('name', $key)->where('price_weekday', $value)->first();
                $additional[$additionaPackage->id] = $key;
            }
        }

        $this->selectedServiceAdditional = $additional;
        $this->appointment = $this->booking->in_date;
        $this->bookingId = $this->booking->id;


        $this->package = $this->booking->package;
    }



    public function updatedStudio() {
        $this->services = Service::whereHas('studio', function($query) {
            $query->where("name", $this->studio);
        })->get();

        if($this->servicePackages) {
            $this->servicePackages = null;
        }
        if($this->serviceAdditionals) {
            $this->serviceAdditionals = null;
        }

        if($this->selectService) {
            $this->selectService = null;
        }
        if($this->times) {
            $this->times = null;
        }

        if($this->isShowAppointment) {
            $this->isShowAppointment = false;
            $this->appointment = null;
        } else {
            $this->isShowAppointment = true;
        }
        if($this->times) {
            $this->times = null;
        }

    }
    public function updatedSelectService() {
            $this->servicePackages = ServicePackage::whereHas('service', function($query) {
                $query->where('name', $this->selectService);
            })->get();
            $this->serviceAdditionals = ServiceAdditional::whereHas('service', function($query) {
                $query->where('name', $this->selectService);
            })->get();

        if($this->isShowAppointment) {
            $this->isShowAppointment = false;
            $this->isShowAppointment = true;
            // $this->appointment = null;
        } else {
            $this->isShowAppointment = true;
        }
        if($this->times) {
            $this->times = null;
        }



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




    public function update() {

        $this->validate();

        $dataBooking = Booking::find($this->bookingId);


        $this->isShowLoading = true;

        $selectDate = Carbon::parse(strtotime($this->appointment));

        $pricePackage = ServicePackage::where('name', $this->package)->first();
        $serviceAdditional = [];
        $priceAdditional = 0;

        if($selectDate->isWeekday()) {
            $pricePackage = $pricePackage->price_weekday;
            foreach($this->selectedServiceAdditional as $id => $value) {
                $getDataAdditional = ServiceAdditional::find($id);
                $serviceAdditional[$value] = $getDataAdditional->price_weekday;
                if($value != 'FREE' || $value != '0') {
                    $priceAdditional += (int) $getDataAdditional->price_weekday;
                }
            }

        } else if($selectDate->isWeekend()) {
            $pricePackage = $pricePackage->price_weekend;
            foreach($this->selectedServiceAdditional as $id => $value) {
                $getDataAdditional = ServiceAdditional::find($id);
                $serviceAdditional[$value] = $getDataAdditional->price_weekend;
                if($value != 'FREE' || $value != '0') {
                    $priceAdditional += (int) $getDataAdditional->price_weekend;
                }
            }
        }


        $priceTotal = (int) $pricePackage + $priceAdditional;
        $booking =             $dataBooking->update([
            'order_id' => $dataBooking->order_id,
            'price_total' => (string) $priceTotal,
            'price_package' => $pricePackage,
            'name' => $this->name,
            'studio' => $this->studio,
            'nowa' => $this->nowa,
            'email' => $this->email,
            'in_date' => $this->appointment,
            'time' => $this->time,
            'service' => $this->selectService,
            'package' => $this->package,
            'additional' => $serviceAdditional,
            'main_background' => $this->mainBackground,
            'additional_background' => $this->additionalBackground,
            'status_payment' => $dataBooking->status_payment
        ]);

        if($booking) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil edit',
                'text' => '',
                'timer' => 3000,
                'redirect' => 'moveToIndex'
            ]);
        }




    }

    public function moveToIndex()
    {
        return redirect()->route('admin.booking.index');
    }

    public function render()
    {
        return view('livewire.booking.booking-edit', [
            'studios' => Studio::get(),
            'backgroundColors' => BackgroundColor::get(),
        ])->extends('layouts.admin');
    }
}
