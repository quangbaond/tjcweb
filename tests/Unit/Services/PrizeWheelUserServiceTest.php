<?php

namespace Services;

use App\Models\PrizeWheelSetting;
use App\Services\PrizeWheelUserService;
use Illuminate\Contracts\Container\BindingResolutionException;
use PHPUnit\Framework\TestCase;

class PrizeWheelUserServiceTest extends TestCase
{

    /**
     * @throws BindingResolutionException
     */
    public function testSendMessenger()
    {
        $url = 'https://graph.facebook.com/v18.0/61555524403906/messages?access_token=EAAOz1amGBLIBOzw9dXZBNymmk9nHEnFrtGHQv1QI2VYKE2zwg8nFJjCRrYjaztYciTKY7ZA6ZC63bj75m27ZAg0M5Q2pAxaEyuyzJTrxtQhhUwK9lzM4gplS2zFP0VMyZA2j563Fxjit8R7enivCpAbsdAImXzhBT58levxIqs2hegzcCGe8ZCZAyCtCo6I9DY56aFYCJijxdPlZCs9ljAZDZD';
        $dataTest = [
            'phone' => '0123456789',
            'prize' => 'test',
            'full_name' => 'test',
            'address' => 'test',
            'facebook' => 'https://www.facebook.com/quangbaond/',
        ];
        $data = [
            'messaging_type' => 'RESPONSE',
            'recipient' => [
                'id' => '100054849063273',
                'user_ref' => 'random_string',
            ],
            'message' => ['text' => 'Chúc mừng bạn đã trúng thưởng. Vui lòng liên hệ để nhận quà.'],
        ];

        $options = [
            'http' => [
                'method' => 'POST',
                'content' => json_encode($data),
                'header' => "Content-Type: application/json\r\n",
            ],
        ];

        $context = stream_context_create($options);

        $result = file_get_contents($url, false, $context);


        $this->assertEquals($result, $result);


    }
}
