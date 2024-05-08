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

    public $name, $email, $nowa, $mainBackground, $additionalBackground = 0, $appointment, $time;

    public $isShowForm = false;

    public $selectedServiceAdditional;

    public $package;
    public $serviceAdditionals = [];
    public $backgroundColors = [];
    public $times = [];

    public $service;
    public $studio;

    public $isDisable = [];

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'nowa' => 'required',
        // 'mainBackground' => 'required',
        'appointment' => 'required',
        'time' => 'required'
    ];

    public function mount($id)
    {

        $this->package = ServicePackage::find($id);
        $this->service = $this->package->service->name;
        $this->studio = $this->package->service->studio->name;
        $this->serviceAdditionals = ServiceAdditional::where('service_package_id', $this->package->id)->orderBy('type_input', 'DESC')->get();

        $this->selectedServiceAdditional = [];
        foreach ($this->serviceAdditionals as $serviceAdditional) {
            $this->isDisable[$serviceAdditional->name] = false;
            $this->selectedServiceAdditional[$serviceAdditional->name] = $serviceAdditional->default_value == 'false' ? false : $serviceAdditional->default_value;
        }

        $this->backgroundColors = BackgroundColor::whereHas('service', function ($query) {
            $query->where('name', $this->service);
        })->get();
    }

    public function showForm()
    {
        $this->isShowForm = true;
    }





    public function updatedAppointment()
    {
        $selectDate = Carbon::parse(strtotime($this->appointment));

        $getBooking = Booking::where('in_date', $this->appointment)->where('studio', $this->studio);

        if ($selectDate->isWeekday()) {
            $this->times = Time::whereHas('service', function ($query) {
                $query->where('name', $this->service);
                $query->whereHas('studio', function ($query) {
                    $query->where("name", $this->studio);
                });
            })->where('type', 'weekday')->whereNotIn('hour', $getBooking->pluck('time'))->get();
        }

        if ($selectDate->isWeekend()) {
            $this->times = Time::whereHas('service', function ($query) {
                $query->where('name', $this->service);
                $query->whereHas('studio', function ($query) {
                    $query->where("name", $this->studio);
                });
            })->where('type', 'weekend')->whereNotIn('hour', $getBooking->pluck('time'))->get();
        }
    }

    public function save()
    {
        $this->validate();
        $selectDate = Carbon::parse(strtotime($this->appointment));

        $serviceAdditional = [];
        $priceAdditional = 0;

        $discountPackage = 0;

        $outTime = '';

        $perMinute = 15;

        $sesi = '';

        $week = '';

        if ($selectDate->isWeekday()) {
            $week = 'weekday';
            $this->package->discount_weekday ? $discountPackage = $this->package->discount_weekday : null;
            $pricePackage = $this->package->discount_weekday != 0 ? (int) $this->package->price_weekday - (int) $this->package->price_weekday * $this->package->discount_weekday / 100 : $this->package->price_weekday;
            foreach ($this->selectedServiceAdditional as $name => $value) {
                if (empty($value)) {
                    continue;
                }


                $getDataAdditional = ServiceAdditional::where('name', $name)->where('service_package_id', $this->package->id)->first();

                if (is_bool($value) && $value == true) {
                    $serviceAdditional[$getDataAdditional->name] = [$getDataAdditional->discount_weekday != 0 ? ((int) $getDataAdditional->price_weekday - ((int) $getDataAdditional->price_weekday * $getDataAdditional->discount_weekday / 100)) : (int)$getDataAdditional->price_weekday, '1'];

                    if ($getDataAdditional->name != 'FREE' || $getDataAdditional->name != '0') {
                        $priceAdditional += $getDataAdditional->discount_weekday != 0 ? ((int) $getDataAdditional->price_weekday - ((int) $getDataAdditional->price_weekday * $getDataAdditional->discount_weekday / 100)) : (int)$getDataAdditional->price_weekday;
                    }
                } else if (is_bool($value) && $value == false) {
                    continue;
                } else {

                    // additional package sesi 5 menit
                    if (strtolower($getDataAdditional->name) == 'sesi foto 5 menit') {
                        $addMinute = (5 * (int)$value) + $perMinute;
                        $sesi = $value;
                        $outTime =  Carbon::parse('2018-06-15 ' . $this->time)->addMinute($addMinute)->format('H:i');
                    }

                    if ((int)$value - (int)$getDataAdditional->default_value != 0) {
                        $serviceAdditional[$getDataAdditional->name] = [$getDataAdditional->discount_weekday != 0 ? ((int) $getDataAdditional->price_weekday - ((int) $getDataAdditional->price_weekday * $getDataAdditional->discount_weekday / 100)) * ((int)$value - (int)$getDataAdditional->default_value) : (int)$getDataAdditional->price_weekday * ((int)$value - (int)$getDataAdditional->default_value), (int)$value - (int)$getDataAdditional->default_value];
                        if ($getDataAdditional->name != 'FREE' || $getDataAdditional->name != '0') {
                            $priceAdditional += $getDataAdditional->discount_weekday != 0 ? ((int) $getDataAdditional->price_weekday - ((int) $getDataAdditional->price_weekday * $getDataAdditional->discount_weekday / 100)) * ((int)$value - (int)$getDataAdditional->default_value) : (int)$getDataAdditional->price_weekday * ((int)$value - (int)$getDataAdditional->default_value);
                        }
                    }
                }
            }
        } else if ($selectDate->isWeekend()) {
            $week = 'weekend';

            $this->package->discount_weekend ? $discountPackage = $this->package->discount_weekend : null;

            $pricePackage = $this->package->discount_weekend != 0 ? (int) $this->package->price_weekend - (int) $this->package->price_weekend * $this->package->discount_weekend / 100 : $this->package->price_weekend;
            foreach ($this->selectedServiceAdditional as $name => $value) {
                if (empty($value)) {
                    continue;
                }


                $getDataAdditional = ServiceAdditional::where('name', $name)->where('service_package_id', $this->package->id)->first();

                if (is_bool($value) && $value == true) {
                    $serviceAdditional[$getDataAdditional->name] = [$getDataAdditional->discount_weekend != 0 ? ((int) $getDataAdditional->price_weekend - ((int) $getDataAdditional->price_weekend * $getDataAdditional->discount_weekend / 100)) : (int)$getDataAdditional->price_weekday, '1'];
                    if ($getDataAdditional->name != 'FREE' || $getDataAdditional->name != '0') {
                        $priceAdditional += $getDataAdditional->discount_weekend != 0 ? ((int) $getDataAdditional->price_weekend - ((int) $getDataAdditional->price_weekend * $getDataAdditional->discount_weekend / 100)) : (int)$getDataAdditional->price_weekend;
                    }
                } else if (is_bool($value) && $value == false) {
                    continue;
                } else {
                    if (strtolower($getDataAdditional->name) == 'sesi foto 5 menit') {
                        $addMinute = (5 * (int)$value) + $perMinute;
                        $sesi = $value;

                        $outTime =  Carbon::parse('2018-06-15 ' . $this->time)->addMinute($addMinute)->format('H:i');
                    }

                    if ((int)$value - (int)$getDataAdditional->default_value != 0) {
                        $serviceAdditional[$getDataAdditional->name] = [$getDataAdditional->discount_weekend != 0 ? ((int) $getDataAdditional->price_weekend - ((int) $getDataAdditional->price_weekend * $getDataAdditional->discount_weekend / 100)) * ((int)$value - (int)$getDataAdditional->default_value) : (int)$getDataAdditional->price_weekend * ((int)$value - (int)$getDataAdditional->default_value), (int)$value - (int)$getDataAdditional->default_value];
                        if ($getDataAdditional->name != 'FREE' || $getDataAdditional->name != '0') {
                            $priceAdditional += $getDataAdditional->discount_weekend != 0 ? ((int) $getDataAdditional->price_weekend - ((int) $getDataAdditional->price_weekend * $getDataAdditional->discount_weekend / 100)) * ((int)$value - (int)$getDataAdditional->default_value) : (int)$getDataAdditional->price_weekend * ((int)$value - (int)$getDataAdditional->default_value);
                        }
                    }
                }
            }
        }

        $priceTotal = (int) $pricePackage + $priceAdditional;
        $service = Service::where('name', $this->service)->first();
        if ($service->status_payment != 'Full Payment') {
            $dp = ((int) $pricePackage + $priceAdditional) * 50 / 100;
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
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        if (empty($sesi) || $sesi == '0') {
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
                'out_time' => empty($outTime) ? Carbon::parse('2018-06-15 ' . $this->time)->addMinute(15)->format('H:i') : $outTime,
                'service' => $this->service,
                'package' => $this->package->name,
                'additional' => $serviceAdditional,
                'main_background' => $this->mainBackground ?? '0',
                'additional_background' => $this->additionalBackground,
                'status_payment' => 'Proses',
                'dp' => $dp ?? null,
                'discount_package' => $discountPackage,
                'link_payment' => $paymentUrl
            ]);

            $this->sendWa($booking);

            if ($booking) {
                return redirect()->route('reservation', $booking->order_id);
            }
        } else if (!empty($sesi)) {
            $sesiMinute = $this->time;

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
                'out_time' => empty($outTime) ? Carbon::parse('2018-06-15 ' . $this->time)->addMinute(15)->format('H:i') : $outTime,
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

            for ($i = 1; $i <= (int)$sesi; $i += 3) {
                $time = Time::where('hour', $sesiMinute)->where('type', $week)->first();
                $timeNext = $time->next();
                $sesiMinute = $timeNext->hour;

                $booking = Booking::create([
                    'order_id' => $invoice,
                    'price_total' => (string) $priceTotal,
                    'price_package' => $pricePackage,
                    'name' => $this->name,
                    'studio' => $this->studio,
                    'nowa' => $this->nowa,
                    'email' => $this->email,
                    'in_date' => $this->appointment,
                    'time' => $timeNext->hour,
                    'out_time' => empty($outTime) ? Carbon::parse('2018-06-15 ' . $this->time)->addMinute(15)->format('H:i') : $outTime,
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
            }

            $this->sendWa($booking);

            if ($booking) {
                return redirect()->route('reservation', $booking->order_id);
            }
        }
    }

    public function sendWa($booking)
    {
        $token = "9d@LLbhYD9+oWueUDtx9";
        $curl = curl_init();

        $additional = "";

        if (!empty($booking->additional)) {
            foreach ($booking->additional as $key => $value) {
                if ($value[0] == 'FREE' || $value[0] || '0') {
                    $price =  (string) $value[0];
                } else {

                    $price =  number_format($value[0], 0, ',', '.');
                }

                $additional .= $key . ": Rp. " . $price . "\n";
            }
        }



        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $booking->nowa,
                'message' => 'No Invoice : ' . $booking->order_id . "\n" . 'Nama : ' . $booking->name . "\n" . 'email : ' . $booking->email . "\n\n" .
                    "Studio : " . $booking->studio . "\n" . "Layanan : " . $booking->service . "\n" . "Paket : " . $booking->package . " Rp. " . number_format((int) $booking->price_package, 0, ',', '.') . "\n" . "Tambahan : " . "\n" . $additional . "\n" . "Background Utama : " .  $booking->main_background . "\n" . "Tanggal/waktu : " . $booking->in_date . " " . $booking->time . "\n\n" . "Total Harga : Rp. " . number_format((int) $booking->price_total, 0, ',', '.') . "\n" . "status pembayaran : " . $booking->status_payment . "\n\n" . "Note : Jika ingin melanjutkan pembayaran silakan klik link ini" . "\n" . $booking->link_payment
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $token
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
    }

    public function render()
    {
        return view('livewire.product-show', [
            'relatedProducts' => ServicePackage::where('service_id', $this->package->service_id)->get()
        ])->extends('layouts.main');
    }
}
