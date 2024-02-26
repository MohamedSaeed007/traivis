<?php

namespace App\Console\Commands;

use App\Mail\SendTestMail as SendTestMailMessage;
use Illuminate\Console\Command;
use Illuminate\Mail\Message;
use Mail;
use Symfony\Component\Mime\Address;

class SendTestMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send:test {--to-name=} {--to-email=} {--message-body=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $toName = $this->option('to-name') ?? $this->ask('To name?', 'Traivis');
        $toEmail = $this->option('to-email') ?? $this->ask('To email?', 'info@traivis.com');
        $messageBody = $this->option('message-body') ?? $this->ask('Message body?', 'Hello World!');
        Mail::raw($messageBody, function (Message $msg) use ($toName, $toEmail, $messageBody) {
            $msg->to($toEmail, $toName)->subject('Test Email');
        });
        return 0;

        $to = $this->ask('To?', 'info@traivis.com');
        Mail::to(new Address($to, 'Test'))->send(new SendTestMailMessage());
    }
}
