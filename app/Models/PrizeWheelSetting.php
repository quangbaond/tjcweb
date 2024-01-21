<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrizeWheelSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'facebook_state',
        'auto_messenger',
    ];
}
