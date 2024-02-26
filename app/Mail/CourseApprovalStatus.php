<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseApprovalStatus extends Mailable
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
        if ($this->course->publish_status == 'Approved') {
            $emailTemplate = \App\Models\EmailTemplate::where('key', 'course-approved')->first();
        } else {
            $emailTemplate = \App\Models\EmailTemplate::where('key', 'course-declined')->first();
        }
        $this->subject('Traivis - ' . $emailTemplate->subject);
        if ($emailTemplate) {
            $template = $emailTemplate->email_body;
            $template = str_replace('[name]', $this->course->maker->business_name, $template);
            $template = str_replace('[course]', $this->course->title, $template);
            if ($this->course->publish_status == 'Declined') {
                $inCompletedContent = $this->course->contents()->where('publish_status', 'Declined')->get();
                $feedbackTable = "<table>
                <thead>
                    <tr>
                        <th>Content Name</th>
                        <th>Section Name</th>
                        <th>Review Feedback</th>
                    </tr>
                </thead>
                <tbody>";
                if ($this->course->courseDetails->publish_status == 'Declined') {
                    $feedbackTable .= "<tr>
                        <td>Course Details</td>
                        <td>N/A<td>
                        <td>" . $this->course->courseDetails->review_feedback . "</td>
                    </tr>";
                }
                foreach ($inCompletedContent as $content) {
                    $feedbackTable .= "<tr>
                        <td>" . $content->contentable->title . "</td>
                        <td>" . $content->section->section_name . "</td>
                        <td>" . $content->review_feedback . "</td>
                    </tr>";
                }
                $feedbackTable .= "</tbody>
            </table>";
                // dd($feedbackTable);
                $template = str_replace('[declined]', $feedbackTable, $template);
            }
            return $this->from(ENV('MAIL_FROM_ADDRESS'), ENV('MAIL_FROM_NAME'))
                ->view('emails.welcome')->with(['template' => $template]);
        }
    }
}