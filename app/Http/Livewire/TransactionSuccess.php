<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use App\Models\Service;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class TransactionSuccess extends Component
{

    public function mount()
    {
        if ($_GET['status_code'] == 200) {
            $booking = Booking::where("order_id", $_GET['order_id'])->first();
            $service = Service::where('name', $booking->service)->first();
            if ($service->status_payment == 'Full Payment') {
                $booking->update([
                    'status_payment' => 'Lunas'
                ]);
            } else {
                $booking->update([
                    'status_payment' => 'DP 50%'
                ]);
            }

            $token = "3qKYoN8jh!61WKHwigto";
            $curl = curl_init();

            $additional = "";
            foreach ($booking->additional as $key => $value) {
                if ($value[0] == 'FREE' || $value[0] || '0') {
                    $price =  (string) $value[0];
                } else {

                    $price =  number_format($value[0], 0, ',', '.');
                }

                $additional .= $key . ": Rp. " . $price . "\n";
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
                        "Studio : " . $booking->studio . "\n" . "Layanan : " . $booking->service . "\n" . "Paket : " . $booking->package . " Rp. " . number_format((int) $booking->price_package, 0, ',', '.') . "\n" . "Tambahan : " . "\n" . $additional . "\n" . "Background Utama : " .  $booking->main_background . "\n" .  "Tanggal/waktu : " . $booking->in_date . " " . $booking->time . "\n\n" . "Total Harga : Rp. " . number_format((int) $booking->price_total, 0, ',', '.') . "\n" . "status pembayaran : " . $booking->status_payment . "\n\n" . "Note : Jika ingin melakukan reschedule bisa klik link dibawah" . "\n" . route('reschedule')
                ),
                CURLOPT_HTTPHEADER => array(
                    'Authorization: ' . $token
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
        } else {
            return redirect()->route('form-booking');
        }
    }

    public function render()
    {
        return view('livewire.transaction-success')->extends('layouts.app');
    }
}
