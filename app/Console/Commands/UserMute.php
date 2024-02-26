<?php

namespace App\Console\Commands;

use App\Models\Lecture;
use Illuminate\Console\Command;

class UserMute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:mute {--lecture-id= : The ID of the lecture} {--user-id= : The ID of the user}';

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
        $lectureId = $this->option('lecture-id');
        $userId = $this->option('user-id');

        if (!$lectureId) {
            $lectureId = $this->ask('Please provide the lecture ID');
        } else {
            foreach (Lecture::all() as $lecture) {
                $this->info("{$lecture->id}- {$lecture->title}");
            }
            $lectureId = $this->ask('Select a lecture ID');
        }
        $lecture = Lecture::find($lectureId);
        if ($lecture) {
            $this->info("Lecture Title: {$lecture->title}");
            $this->info("Lecture ID: {$lecture->id}");
        } else {
            $this->error('Lecture not found.');
            return 1;
        }

        if (!$userId) {
            $userId = $this->ask('Please provide the user ID');
        } else {
            foreach ($lecture->course->users as $user) {
                $this->info("{$user->id}- {$user->name}");
            }

            $userId = $this->ask('Select a user ID');
        }

        $user = $lecture->course->users()->find($userId);
        if ($user) {
            $this->info("User Name: {$user->name}");
            $this->info("User ID: {$user->id}");
        } else {
            $this->error('User not found.');
            return 1;
        }

        $lecture->muteUser($user);
        $this->info("User {$user->id}- {$user->name}, muted by user.");

        return 0;
    }
}
