<?php

namespace App\Repositories;

use App\Repositories\Eloquent\BaseRepository;

class PrizeWheelRepository extends Eloquent\BaseRepository
{

    /**
     * @inheritDoc
     */
    public function model(): string
    {
        return \App\Models\PrizeWheel::class;
    }
}
