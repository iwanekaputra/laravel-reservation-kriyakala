<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use App\Models\Studio;
use App\Models\Time;
use Livewire\Component;

class ServiceCreate extends Component
{

    public $name;
    public $studio;
    public $statusPayment;

    public $listeners = [
        'moveToIndex'
    ];

    public $rules = [
        'name' => 'required',
        'studio' => 'required',
        'statusPayment' => 'required'
    ];

    public function save() {

        $this->validate();

        $service = Service::create([
            'studio_id' => $this->studio,
            'name' => $this->name,
            'status_payment' => $this->statusPayment
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => $service->id,
            'hour' => '12:15',
            'type' => 'weekday',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekday',
            'hour' => '19:00',
        ]);


        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '10:00',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '10:15',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '10:30',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '10:45',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => $service->id,
            'hour' => '12:15',
            'type' => 'weekend',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '19:00',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '19:15',
        ]);
        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '19:30',
        ]);

        Time::create([
            'service_id' => $service->id,
            'type' => 'weekend',
            'hour' => '19:45',
        ]);

        if($service) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil Di tambahkan',
                'text' => '',
                'timer' => 2000,
                'redirect' => 'moveToIndex'
            ]);
        }


    }

    public function moveToIndex() {
        return redirect()->route('admin.service.index');
    }

    public function render()
    {
        return view('livewire.service.service-create', [
            'studios' => Studio::get()
        ])->extends("layouts.admin");
    }
}
