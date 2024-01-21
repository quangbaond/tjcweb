<?php

namespace App\Repositories;

use App\Repositories\Eloquent\BaseRepository;

class PrizeWheelUserRepository extends Eloquent\BaseRepository
{

    /**
     * @inheritDoc
     */
    public function model(): string
    {
        return \App\Models\PrizeWheelUser::class;
    }
}
