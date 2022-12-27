<?php

namespace App\Services\Sms;

use App\Services\Sms\Contracts\SmsContract;
use Kavenegar\KavenegarApi;

class KaveNegar implements SmsContract
{
    private string $sender;

    public function __construct(protected KavenegarApi $kavenegarApi)
    {
        $this->sender = config('sms.kaveNegarSender');
    }

    public function send($receptor, $message)
    {
        return $this->kavenegarApi->Send($this->sender, $receptor, $message);
    }

    public function verify($receptor, $template, ...$token)
    {
        $data = [...[$receptor], ...$token];
        if (!isset($token[1])) $data[2] = '';
        if (!isset($token[2])) $data[3] = '';
        $data[4] = $template;
        return call_user_func_array(array($this->kavenegarApi, 'VerifyLookup'), $data);
    }
}
