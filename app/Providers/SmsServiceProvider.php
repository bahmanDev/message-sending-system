<?php

namespace App\Providers;

use App\Services\Sms\Contracts\SmsContract;
use App\Services\Sms\KaveNegar;
use Ghasedak\GhasedakApi;
use Illuminate\Support\ServiceProvider;
use Kavenegar\KavenegarApi;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $kaveNegarApiKey = config('sms.kaveNegarApiKey');
        $this->app->singleton(KavenegarApi::class, fn ($app) => new KavenegarApi($kaveNegarApiKey));

        $ghasedakApiKey = config('sms.ghasedakApiKey');
        $this->app->singleton(GhasedakApi::class, fn ($app) => new GhasedakApi($ghasedakApiKey));

        $smsProvider = config('sms.provider');
        $this->app->singleton(SmsContract::class, config("sms.providers.$smsProvider"));
        $this->app->singleton('Sms', config("sms.providers.$smsProvider"));
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
