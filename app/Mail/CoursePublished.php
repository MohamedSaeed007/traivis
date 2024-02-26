<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CoursePublished extends Mailable
{
    use Queueable, SerializesModels;

    private $course;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($course)
    {
        $this->course = $course;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $emailTemplate = \App\Models\EmailTemplate::where('key', 'course-published')->first();
        if ($emailTemplate) {
            $this->subject('Traivis - ' . $emailTemplate->subject);
            $template = $emailTemplate->email_body;
            $template = str_replace('[name]', $this->course->maker->business_name, $template);
            $template = str_replace('[course]', $this->course->title, $template);
            return $this->from(ENV('MAIL_FROM_ADDRESS'), ENV('MAIL_FROM_NAME'))
                ->view('emails.welcome')->with(['template' => $template]);
        }
    }
}