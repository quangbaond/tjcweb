<?php

namespace App\Repositories;

use App\Repositories\Eloquent\BaseRepository;

class PrizeWheelSettingRepository extends Eloquent\BaseRepository
{

    /**
     * @inheritDoc
     */
    public function model(): string
    {
        return \App\Models\PrizeWheelSetting::class;
    }
}
