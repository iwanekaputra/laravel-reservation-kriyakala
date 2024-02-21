<?php

namespace App\Http\Livewire;

use App\Models\ServicePackage;
use Facade\Ignition\Support\Packagist\Package;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'packages' => ServicePackage::paginate(3)
        ])->extends('layouts.main');
    }
}
