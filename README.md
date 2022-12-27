<p align="center"><a href="https://github.com/bahmanDev/message-sending-system" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/sms-text-message-icon-0.png" width="150" alt="sms Text Message icon" /></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Message sending system

Message sending service in 2 normal message sending methods and template method, this service is implemented by 2 web services Ghasedak and Kavenagar.
You can also switch between these 2 web services by changing the provider in the env file

To call this service, you can call the Sms facade method and use the send and verify methods

## Steps
```text
sudo docker-compose up -d
```
```text
composer install
```

Set the .env file
```dotenv
SMS_PROVIDER=ghasedak

KAVE_NEGAR_SENDER=
KAVE_NEGAR_API_KEY=

GHASEDAK_SENDER=
GHASEDAK_API_KEY=

```
Serve [http://localhost:9000](http://localhost:9000)

## Methods use
```php
\App\Facades\Sms::send(09121234567, 'Write something');

//or

\App\Facades\Sms::verify(09121234567, 'template_name', 21322)
```

## Test method with command
You can choose which service you want to test
```php
php artisan message:send
```



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
