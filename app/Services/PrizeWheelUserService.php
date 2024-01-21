<?php

namespace App\Services;

use App\Repositories\PrizeWheelUserRepository;
use App\Services\BaseService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PrizeWheelUserService extends BaseService
{
    protected PrizeWheelUserRepository $prizeWheelUserRepository;

    /**
     * @param PrizeWheelUserRepository $prizeWheelUserRepository
     */

    public function __construct(PrizeWheelUserRepository $prizeWheelUserRepository)
    {
        parent::__construct($prizeWheelUserRepository);
        $this->prizeWheelUserRepository = $prizeWheelUserRepository;
    }

    /**
     * @param $phone
     * @return int
     */
    public function checkUser($phone): int
    {
        return $this->prizeWheelUserRepository->count([
            'phone' => $phone
        ]);
    }


}
