<?php

use App\Services\Sms\Ghasedak;
use App\Services\Sms\KaveNegar;

return [
    'provider' => env('SMS_PROVIDER'),

    'kaveNegarSender' => env('KAVE_NEGAR_SENDER'),
    'kaveNegarApiKey' => env('KAVE_NEGAR_API_KEY'),


    'ghasedakApiKey' => env('GHASEDAK_API_KEY'),
    'ghasedakSender' => env('GHASEDAK_SENDER'),

    'providers' => [
        'kavenegar' => KaveNegar::class,
        'ghasedak' => Ghasedak::class
    ]
];
