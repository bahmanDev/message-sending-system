<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed send(string $receptor, string $message)
 * @method static mixed verify(string $receptor, string $template, ...$token)
 */

class Sms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Sms';
    }
}
