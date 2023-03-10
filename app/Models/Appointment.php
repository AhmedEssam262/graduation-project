<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'booked_from',
        'booked_time',
        'schedule_from',
        'rate',
        'feedback',
        'schedule_date',
        'slot_time',
        'appointment_state'


    ];
}
