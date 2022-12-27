<?php

namespace App\Console\Commands;

use App\Facades\Sms;
use App\Services\Sms\Contracts\SmsContract;
use Illuminate\Console\Command;

class MessageSender extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'message:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send sms message service';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $smsService = $this->choice('Select sms Services', ['Normal', 'Verify'], 'Normal');
        $receptorNumber = $this->ask('Add receptor number');

        if ($smsService === 'Normal') {
            $message = $this->ask('Write message');
            Sms::send($receptorNumber, $message);
            return $this->info('Send message success');
        }

        Sms::verify($receptorNumber, 'nick', '14010323');
        return $this->info('Send message success');
    }
}
