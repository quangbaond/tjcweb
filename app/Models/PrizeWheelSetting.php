<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrizeWheelSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'facebook_access_token',
        'facebook_page_id',
        'auto_messenger',
    ];
}
