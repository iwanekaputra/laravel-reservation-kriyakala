<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TesController extends Controller
{
    public function tes()
    {
        $response = Http::post('https://gpar.web.id/api/callback/otomax', [
            'code' => 'oke',
        ]);

        dd($response->status());
    }
}
