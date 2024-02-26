<?php

namespace App\Mail\IssueReport;

use App\Models\EmailTemplate;
use App\Models\IssueReportReply;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendIssueReportReplyCreated extends Mailable
{
    use Queueable, SerializesModels;

    private IssueReportReply $IssueReportReply;

    /**
     * Create a new message instance.
     *
     * @param  IssueReportReply  $IssueReportReply
     */
    public function __construct(IssueReportReply $IssueReportReply)
    {
        $this->IssueReportReply = $IssueReportReply;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $templateIssueReportEmail = EmailTemplate::firstWhere('key', 'send-issue-report-created');
        $templateEmail = EmailTemplate::firstWhere('key', 'send-issue-report-reply-created');
        $template = $templateEmail->email_body;

        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject(
                $templateIssueReportEmail->subject .
                    ' - ' .
                    $this->IssueReportReply->issueReport->number,
            )
            ->view('emails.welcome')
            ->with(['template' => $template]);
    }
}
