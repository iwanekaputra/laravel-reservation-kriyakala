<?php

namespace Database\Seeders;

use App\Models\BackgroundColor;
use App\Models\Service;
use App\Models\ServiceAdditional;
use App\Models\ServicePackage;
use App\Models\Studio;
use App\Models\Time;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Studio::create([
            'name' => 'Studio 1 (self-foto)'
        ]);
        Studio::create([
            'name' => 'Studio 2 (Graduation, Family, Group, Maternity, Prewedding)'
        ]);

        Service::create([
            'name' => 'self-foto',
            'studio_id' => 1
        ]);

        Service::create([
            'name' => 'Graduation',
            'studio_id' => 2
        ]);
        Service::create([
            'name' => 'Family',
            'studio_id' => 2
        ]);
        Service::create([
            'name' => 'Group',
            'studio_id' => 2
        ]);
        Service::create([
            'name' => 'Maternity',
            'studio_id' => 2
        ]);
        Service::create([
            'name' => 'Prewedding',
            'studio_id' => 2
        ]);

        ServicePackage::create([
            'service_id' => 1,
            'name' => 'Dynamic Duo',
            'price_weekday' => '55000',
            'price_weekend' => '65000',
            'price_promo' => '20000'
        ]);
        ServicePackage::create([
            'service_id' => 1,
            'name' => 'One Man Show',
            'price_weekday' => '25000',
            'price_weekend' => '35000',
            'price_promo' => '0'
        ]);


        ServicePackage::create([
            'service_id' => 1,
            'name' => 'Three Musketeers',
            'price_weekday' => '80000',
            'price_weekend' => '90000',
            'price_promo' => '0'

        ]);

        ServicePackage::create([
            'service_id' => 1,
            'name' => 'Fantastic Four',
            'price_weekday' => '100000',
            'price_weekend' => '110000',
            'price_promo' => '0'

        ]);

        ServicePackage::create([
            'service_id' => 1,
            'name' => 'Fifth Harmony',
            'price_weekday' => '115000',
            'price_weekend' => '125000',
            'price_promo' => '0'

        ]);

        ServicePackage::create([
            'service_id' => 1,
            'name' => 'Sixth Sensing',
            'price_weekday' => '125000',
            'price_weekend' => '135000',
            'price_promo' => '0'

        ]);
        ServicePackage::create([
            'service_id' => 2,
            'name' => 'Graduation Glory',
            'price_weekday' => '250000',
            'price_weekend' => '300000',
            'price_promo' => '0'

        ]);

        ServicePackage::create([
            'service_id' => 3,
            'name' => 'Intimate Family',
            'price_weekday' => '250000',
            'price_weekend' => '300000',
            'price_promo' => '0'

        ]);
        ServicePackage::create([
            'service_id' => 4,
            'name' => 'Tiny Trible',
            'price_weekday' => '250000',
            'price_weekend' => '300000',
            'price_promo' => '0'

        ]);
        ServicePackage::create([
            'service_id' => 4,
            'name' => 'Fusion Spectrum',
            'price_weekday' => '450000',
            'price_weekend' => '500000',
            'price_promo' => '0'

        ]);
        ServicePackage::create([
            'service_id' => 5,
            'name' => "Life's Miracle",
            'price_weekday' => '500000',
            'price_weekend' => '500000',
            'price_promo' => '0'

        ]);
        ServicePackage::create([
            'service_id' => 6,
            'name' => "Simple Love Stories",
            'price_weekday' => '1200000',
            'price_weekend' => '1200000',
            'price_promo' => '0'

        ]);


        ServiceAdditional::create([
            'service_id' => 1,
            'name' => '1 Orang (<1 Tahun)',
            'price_weekday' => 'FREE',
            'price_weekend' => 'FREE',
            'price_promo' => '0'

        ]);
        ServiceAdditional::create([
            'service_id' => 1,
            'name' => '1 Orang (1-4 Tahun)',
            'price_weekday' => '5000',
            'price_weekend' => '10000',
            'price_promo' => '1000'

        ]);
        ServiceAdditional::create([
            'service_id' => 1,
            'name' => '1 Orang (4 Tahun Keatas)',
            'price_weekday' => '25000',
            'price_weekend' => '30000',
            'price_promo' => '0'

        ]);
        ServiceAdditional::create([
            'service_id' => 1,
            'name' => 'Sesi Foto 5 Menit',
            'price_weekday' => '45000',
            'price_weekend' => '50000',
            'price_promo' => '0'

        ]);
        ServiceAdditional::create([
            'service_id' => 1,
            'name' => 'Spotlight',
            'price_weekday' => '25000',
            'price_weekend' => '35000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 2,
            'name' => '1 Orang',
            'price_weekday' => '25000',
            'price_weekend' => '35000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 2,
            'name' => 'Sesi Foto 5 Menit',
            'price_weekday' => '45000',
            'price_weekend' => '50000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 2,
            'name' => '1 Konsep/Background',
            'price_weekday' => '45000',
            'price_weekend' => '50000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 2,
            'name' => 'Spotlight',
            'price_weekday' => '55000',
            'price_weekend' => '60000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 3,
            'name' => '1 Orang',
            'price_weekday' => '25000',
            'price_weekend' => '30000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 3,
            'name' => 'Sesi Foto 5 Menit',
            'price_weekday' => '45000',
            'price_weekend' => '50000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 3,
            'name' => '1 Konsep/Background',
            'price_weekday' => '45000',
            'price_weekend' => '50000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 3,
            'name' => 'Spotlight',
            'price_weekday' => '55000',
            'price_weekend' => '60000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 4,
            'name' => '1 Konsep/Background',
            'price_weekday' => '45000',
            'price_weekend' => '50000',
            'price_promo' => '0'

        ]);
        ServiceAdditional::create([
            'service_id' => 4,
            'name' => 'Sesi Foto 5 Menit',
            'price_weekday' => '45000',
            'price_weekend' => '50000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 5,
            'name' => 'Sesi Foto 5 Menit',
            'price_weekday' => '50000',
            'price_weekend' => '50000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 5,
            'name' => '1 Konsep/Background',
            'price_weekday' => '100000',
            'price_weekend' => '100000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 5,
            'name' => 'Spotlight',
            'price_weekday' => '100000',
            'price_weekend' => '100000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 6,
            'name' => 'Sesi Foto 1 Jam',
            'price_weekday' => '200000',
            'price_weekend' => '200000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 6,
            'name' => '1 Konsep/Background',
            'price_weekday' => '150000',
            'price_weekend' => '150000',
            'price_promo' => '0'

        ]);

        ServiceAdditional::create([
            'service_id' => 6,
            'name' => 'Spotlight',
            'price_weekday' => '60000',
            'price_weekend' => '60000',
            'price_promo' => '0'

        ]);




        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => 1,
            'hour' => '12:15',
            'type' => 'weekday',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekday',
            'hour' => '19:00',
        ]);


        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '10:00',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '10:15',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '10:30',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '10:45',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => 1,
            'hour' => '12:15',
            'type' => 'weekend',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '19:00',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '19:15',
        ]);
        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '19:30',
        ]);

        Time::create([
            'service_id' => 1,
            'type' => 'weekend',
            'hour' => '19:45',
        ]);




        // graduation
        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => 2,
            'hour' => '12:15',
            'type' => 'weekday',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekday',
            'hour' => '19:00',
        ]);


        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '10:00',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '10:15',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '10:30',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '10:45',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => 2,
            'hour' => '12:15',
            'type' => 'weekend',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '19:00',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '19:15',
        ]);
        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '19:30',
        ]);

        Time::create([
            'service_id' => 2,
            'type' => 'weekend',
            'hour' => '19:45',
        ]);


        // family
        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => 3,
            'hour' => '12:15',
            'type' => 'weekday',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekday',
            'hour' => '19:00',
        ]);


        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '10:00',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '10:15',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '10:30',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '10:45',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => 3,
            'hour' => '12:15',
            'type' => 'weekend',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '19:00',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '19:15',
        ]);
        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '19:30',
        ]);

        Time::create([
            'service_id' => 3,
            'type' => 'weekend',
            'hour' => '19:45',
        ]);


        // group
        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => 4,
            'hour' => '12:15',
            'type' => 'weekday',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekday',
            'hour' => '19:00',
        ]);


        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '10:00',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '10:15',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '10:30',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '10:45',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => 4,
            'hour' => '12:15',
            'type' => 'weekend',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '19:00',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '19:15',
        ]);
        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '19:30',
        ]);

        Time::create([
            'service_id' => 4,
            'type' => 'weekend',
            'hour' => '19:45',
        ]);



        // maternity
        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => 5,
            'hour' => '12:15',
            'type' => 'weekday',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekday',
            'hour' => '19:00',
        ]);


        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '10:00',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '10:15',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '10:30',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '10:45',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '11:00',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '11:15',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '11:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '11:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '12:00',
        ]);
        Time::create([
            'service_id' => 5,
            'hour' => '12:15',
            'type' => 'weekend',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '12:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '12:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '13:00',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '13:15',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '13:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '13:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '14:15',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '14:30',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '14:45',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '15:00',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '15:15',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '15:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '15:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '16:00',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '16:15',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '16:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '16:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '17:00',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '17:15',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '17:30',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '17:45',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '18:00',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '18:15',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '18:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '18:45',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '19:00',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '19:15',
        ]);
        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '19:30',
        ]);

        Time::create([
            'service_id' => 5,
            'type' => 'weekend',
            'hour' => '19:45',
        ]);


        // prewedding
        Time::create([
            'service_id' => 6,
            'type' => 'weekday',
            'hour' => '11:00',
        ]);

        Time::create([
            'service_id' => 6,
            'type' => 'weekday',
            'hour' => '14:00',
        ]);

        Time::create([
            'service_id' => 6,
            'type' => 'weekday',
            'hour' => '17:00',
        ]);


        Time::create([
            'service_id' => 6,
            'type' => 'weekend',
            'hour' => '10:00',
        ]);


        Time::create([
            'service_id' => 6,
            'type' => 'weekend',
            'hour' => '13:00',
        ]);


        Time::create([
            'service_id' => 6,
            'type' => 'weekend',
            'hour' => '16:00',
        ]);


        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);


















    }
}
