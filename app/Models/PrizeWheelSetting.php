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
        'background_pc',
        'background_mobile',
        'background_wheel',
        'event_id',
    ];

    public function event()
    {
        return $this->belongsTo(PrizeWheelEvent::class);
    }
}
