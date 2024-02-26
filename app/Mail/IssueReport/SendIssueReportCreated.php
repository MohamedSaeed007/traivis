<?php

namespace App\Mail\IssueReport;

use App\Models\EmailTemplate;
use App\Models\IssueReport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendIssueReportCreated extends Mailable
{
    use Queueable, SerializesModels;

    private IssueReport $IssueReport;

    /**
     * Create a new message instance.
     *
     * @param  IssueReport  $IssueReport
     */
    public function __construct(IssueReport $IssueReport)
    {
        $this->IssueReport = $IssueReport;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $templateEmail = EmailTemplate::firstWhere('key', 'send-issue-report-created');
        $template = $templateEmail->email_body;

        $template = (string) \Str::of($template)->replace('[number]', $this->IssueReport->number);

        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject($templateEmail->subject . ' - ' . $this->IssueReport->number)
            ->view('emails.welcome')
            ->with(['template' => $template]);
    }
}
