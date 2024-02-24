<?php

namespace App\Http\Livewire;

use App\Models\BackgroundColor;
use App\Models\Booking;
use App\Models\Service;
use App\Models\ServiceAdditional;
use App\Models\ServicePackage;
use App\Models\Time;
use Carbon\Carbon;
use Livewire\Component;

class ProductShow extends Component
{

    public $name, $email, $nowa, $mainBackground, $additionalBackground = 0,$appointment,$time;

    public $isShowForm = false;

    public $selectedServiceAdditional = [];

    public $package;
    public $serviceAdditionals = [];
    public $backgroundColors = [];
    public $times = [];

    public $service;
    public $studio;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'nowa' => 'required',
        'mainBackground' => 'required',
        'appointment' => 'required',
        'time' => 'required'
    ];

    public function mount($id) {
        $this->package = ServicePackage::find($id);
        $this->service = $this->package->service->name;
        $this->studio = $this->package->service->studio->name;
        $this->serviceAdditionals = ServiceAdditional::whereHas('service', function($query) {
            $query->where('name', $this->service);
        })->get();
        $this->backgroundColors = BackgroundColor::whereHas('service', function($query) {
            $query->where('name', $this->service);
        })->get();

    }

    public function showForm() {
        $this->isShowForm = true;
    }

    public function updatedAppointment() {
        $selectDate = Carbon::parse(strtotime($this->appointment));

        $getBooking = Booking::where('in_date', $this->appointment)->where('studio', $this->studio);

        if($selectDate->isWeekday()) {
            $this->times = Time::whereHas('service', function($query) {
                $query->where('name', $this->service);
                $query->whereHas('studio', function($query) {
                    $query->where("name", $this->studio);
                });
            })->where('type', 'weekday')->whereNotIn('hour', $getBooking->pluck('time'))->get();
        }

        if($selectDate->isWeekend()) {
            $this->times = Time::whereHas('service', function($query) {
                $query->where('name', $this->service);
                $query->whereHas('studio', function($query) {
                    $query->where("name", $this->studio);
                });
            })->where('type', 'weekend')->whereNotIn('hour', $getBooking->pluck('time'))->get();
        }

    }

    public function save() {
        $this->validate();
        $selectDate = Carbon::parse(strtotime($this->appointment));

        $serviceAdditional = [];
        $priceAdditional = 0;

        $discountPackage = 0;

        if($selectDate->isWeekday()) {
            $this->package->discount_weekday ? $discountPackage = $this->package->discount_weekday : null;
            $pricePackage = $this->package->discount_weekday != 0 ? (int) $this->package->price_weekday - (int) $this->package->price_weekday * $this->package->discount_weekday/100 : $this->package->price_weekday;
            foreach($this->selectedServiceAdditional as $id => $value) {
                $getDataAdditional = ServiceAdditional::find($value);
                $serviceAdditional[$getDataAdditional->name] = $getDataAdditional->discount_weekday != 0 ? (int) $getDataAdditional->price_weekday - ((int) $getDataAdditional->price_weekday * $getDataAdditional->discount_weekday/100) : $getDataAdditional->price_weekday;
                if($getDataAdditional->name != 'FREE' || $getDataAdditional->name != '0') {
                    $priceAdditional += $getDataAdditional->discount_weekday != 0 ? (int) $getDataAdditional->price_weekday - ((int)$getDataAdditional->price_weekday * $getDataAdditional->discount_weekday/100) : (int) $getDataAdditional->price_weekday;
                }
            }

        } else if($selectDate->isWeekend()) {
            $this->package->discount_weekend ? $discountPackage = $this->package->discount_weekend : null;

            $pricePackage = $this->package->discount_weekend != 0 ? (int) $this->package->price_weekend - (int) $this->package->price_weekend * $this->package->discount_weekend/100 : $this->package->price_weekend;
            foreach($this->selectedServiceAdditional as $id => $value) {
                $getDataAdditional = ServiceAdditional::find($value);
                $serviceAdditional[$getDataAdditional->name] = $getDataAdditional->discount_weekend != 0 ? (int) $getDataAdditional->price_weekend - ((int) $getDataAdditional->price_weekend * $getDataAdditional->discount_weekend/100) : $getDataAdditional->price_weekend;
                if($getDataAdditional->name != 'FREE' || $getDataAdditional->name != '0') {
                    $priceAdditional += $getDataAdditional->discount_weekend != 0 ? (int) $getDataAdditional->price_weekend - ((int)$getDataAdditional->price_weekend * $getDataAdditional->discount_weekend/100) : (int) $getDataAdditional->price_weekend;
                }
            }
        }



        $priceTotal = (int) $pricePackage + $priceAdditional;
        $service = Service::where('name', $this->service)->first();
        if($service->status_payment != 'Full Payment') {
            $dp = ((int) $pricePackage + $priceAdditional) * 50/100;
        }



        $invoice = 'INV-' . rand();

          // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = config('midtrans.is_sanitized');
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = config('midtrans.is_3ds');

                $params = array(
                    'transaction_details' => array(
                        'order_id' => $invoice,
                        'gross_amount' => $dp ?? $priceTotal,
                    )
                );

                try {
                // Get Snap Payment Page URL
                $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;

                }
                catch (Exception $e) {
                echo $e->getMessage();
                }

        $booking = Booking::create([
            'order_id' => $invoice,
            'price_total' => (string) $priceTotal,
            'price_package' => $pricePackage,
            'name' => $this->name,
            'studio' => $this->studio,
            'nowa' => $this->nowa,
            'email' => $this->email,
            'in_date' => $this->appointment,
            'time' => $this->time,
            'service' => $this->service,
            'package' => $this->package->name,
            'additional' => $serviceAdditional,
            'main_background' => $this->mainBackground,
            'additional_background' => $this->additionalBackground,
            'status_payment' => 'Proses',
            'dp' => $dp ?? null,
            'discount_package' => $discountPackage,
            'link_payment' => $paymentUrl
        ]);

        if($booking) {
            return redirect()->route('reservation', $booking->order_id);
        }
    }

    public function render()
    {
        return view('livewire.product-show', [
            'relatedProducts' => ServicePackage::where('service_id', $this->package->service_id)->get()
        ])->extends('layouts.main');
    }
}
