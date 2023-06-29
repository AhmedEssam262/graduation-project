<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'illnesses_history',
        'test_results',
        'current_issue',
        'allergies',
        'immunizations',
        'surgeries'
    ];
}