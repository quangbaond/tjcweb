<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PrizeWheelEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function setting()
    {
        return $this->hasOne(PrizeWheelSetting::class);
    }

    public function prizes()
    {
        return $this->hasMany(PrizeWheel::class);
    }

    public function users()
    {
        return $this->hasMany(PrizeWheelUser::class);
    }
}
