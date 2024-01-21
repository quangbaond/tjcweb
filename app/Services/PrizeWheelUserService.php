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

    /**
     * @param $user
     * @param $setting
     * @return string|bool
     */
    public function sendMessenger($user, $setting): string|bool
    {
        $facebook = $user->facebook;

        // get id facebook
        $id = '100054849063273';
        // send messenger to user by webhook
        $url = "https://graph.facebook.com/v11.0/page_id/messages?access_token=" . $setting->facebook_access_token;
        $jsonData = '{
            "recipient":{
                "id":"' . $id . '"
            },
            "messaging_type": "RESPONSE",
            "message":{
                "text":"Chúc mừng bạn đã trúng thưởng. Vui lòng liên hệ với chúng tôi để nhận quà."
            }
        }';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;

    }


}
