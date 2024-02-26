<?php

namespace App\Console\Commands;

use App\Models\Business;
use App\Models\ChatConversation;
use App\Models\User;
use Illuminate\Console\Command;

class TestChatMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:chat';

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
        //        $participantFrom = Business::find(1);
        $participantFrom = Business::find(random_int(1, 10));
        $participantTo = User::find(1);
        $conversation = ChatConversation::getWhatBetweenOrCreateOne($participantFrom, $participantTo);

        $conversation->addChatMessage('test ' . time(), $participantFrom);
        return 0;
    }
}
