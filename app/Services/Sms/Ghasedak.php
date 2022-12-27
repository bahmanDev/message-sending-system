<?php

namespace App\Services\Sms;

use App\Services\Sms\Contracts\SmsContract;
use Ghasedak\GhasedakApi;

class Ghasedak implements SmsContract
{
    protected string $lineNumber;

    public function __construct(protected GhasedakApi $ghasedak)
    {
        $this->lineNumber = config('sms.ghasedakSender');
    }

    public function send(string $receptor, string $message)
    {
        return $this->ghasedak->SendSimple($receptor, $message, $this->lineNumber);
    }

    public function verify($receptor, $template, ...$token)
    {
        $data = [$receptor, $template];
        $data = [...$data, ...$token];
        return call_user_func_array(array($this->ghasedak, 'Verify'), $data);
    }
}
