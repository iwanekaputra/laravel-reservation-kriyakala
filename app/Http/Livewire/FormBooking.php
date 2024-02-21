<?php

namespace App\Http\Livewire;

use App\Models\BackgroundColor;
use App\Models\Booking;
use App\Models\Service;
use App\Models\ServiceAdditional;
use App\Models\ServicePackage;
use App\Models\Studio;
use App\Models\Time;
use Carbon\Carbon;
use Livewire\Component;
use Midtrans\Snap;

class FormBooking extends Component
{
    public $name, $email, $nowa, $studio, $selectService, $package, $mainBackground, $additionalBackground = 0, $appointment, $time;

    public $selectedServiceAdditional = [];
    public $backgroundColors = [];


    public $isShowAppointment = false;
    public $isShowLoading = false;

    public $services;
    public $servicePackages;
    public $serviceAdditionals;
    public $times;

    public $snapToken;

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
        if($this->backgroundColors) {
            $this->backgroundColors = null;
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
            $this->backgroundColors = BackgroundColor::whereHas('service', function($query) {
                $query->where('name', $this->selectService);
            })->get();


        if($this->isShowAppointment) {
            $this->isShowAppointment = false;
            $this->isShowAppointment = true;
            $this->appointment = null;
        } else {
            $this->isShowAppointment = true;
        }
        if($this->times) {
            $this->times = null;
        }



    }

    public function updatedAppointment() {
        $selectDate = Carbon::parse(strtotime($this->appointment));

        $getBooking = Booking::where('in_date', $this->appointment)->where('studio', $this->studio);

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

    public function save() {

        $this->validate();

        $this->isShowLoading = true;

        $selectDate = Carbon::parse(strtotime($this->appointment));

        $package = ServicePackage::where('name', $this->package)->first();
        $serviceAdditional = [];
        $priceAdditional = 0;

        $discountPackage = 0;

        if($selectDate->isWeekday()) {
            $package->discount_weekday ? $discountPackage = $package->discount_weekday : null;
            $pricePackage = $package->discount_weekday != 0 ? (int) $package->price_weekday - (int) $package->price_weekday * $package->discount_weekday/100 : $package->price_weekday;
            foreach($this->selectedServiceAdditional as $id => $value) {
                $getDataAdditional = ServiceAdditional::find($id);
                $serviceAdditional[$value] = $getDataAdditional->discount_weekday != 0 ? (int) $getDataAdditional->price_weekday - ((int) $getDataAdditional->price_weekday * $getDataAdditional->discount_weekday/100) : $getDataAdditional->price_weekday;
                if($value != 'FREE' || $value != '0') {
                    $priceAdditional += $getDataAdditional->discount_weekday != 0 ? (int) $getDataAdditional->price_weekday - ((int)$getDataAdditional->price_weekday * $getDataAdditional->discount_weekday/100) : (int) $getDataAdditional->price_weekday;
                }
            }

        } else if($selectDate->isWeekend()) {
            $package->discount_weekend ? $discountPackage = $package->discount_weekend : null;

            $pricePackage = $package->discount_weekend != 0 ? (int) $package->price_weekend - (int) $package->price_weekend * $package->discount_weekend/100 : $package->price_weekend;
            foreach($this->selectedServiceAdditional as $id => $value) {
                $getDataAdditional = ServiceAdditional::find($id);
                $serviceAdditional[$value] = $getDataAdditional->discount_weekend != 0 ? (int) $getDataAdditional->price_weekend - ((int) $getDataAdditional->price_weekend * $getDataAdditional->discount_weekend/100) : $getDataAdditional->price_weekend;
                if($value != 'FREE' || $value != '0') {
                    $priceAdditional += $getDataAdditional->discount_weekend != 0 ? (int) $getDataAdditional->price_weekend - ((int)$getDataAdditional->price_weekend * $getDataAdditional->discount_weekend/100) : (int) $getDataAdditional->price_weekend;
                }
            }
        }



        $priceTotal = (int) $pricePackage + $priceAdditional;
        $service = Service::where('name', $this->selectService)->first();
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
            'service' => $this->selectService,
            'package' => $this->package,
            'additional' => $serviceAdditional,
            'main_background' => $this->mainBackground,
            'additional_background' => $this->additionalBackground,
            'status_payment' => 'Proses',
            'dp' => $dp ?? null,
            'discount_package' => $discountPackage,
            'link_payment' => $paymentUrl
        ]);

        if($booking) {
            $this->isShowLoading = false;
            return redirect()->route('checkout', $booking->order_id);
        }




    }




    public function render()
    {
        return view('livewire.form-booking', [
            'studios' => Studio::get(),

        ])->extends("layouts.app");
    }
}
