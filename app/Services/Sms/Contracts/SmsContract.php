<?php

namespace App\Services\Sms\Contracts;

interface SmsContract
{
    /**
     * @param string $receptor
     * @param string $message
     * @return mixed
     */
    public function send(string $receptor, string $message): mixed;

    /**
     * @param string $receptor
     * @param string $template
     * @param ...$token `One parameter is required`
     * @return mixed
     */
    public function verify(string $receptor, string $template, ...$token): mixed;
}
