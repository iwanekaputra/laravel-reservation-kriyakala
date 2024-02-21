<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceAdditional extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];
    public $with = ['service'];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
