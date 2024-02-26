<?php

namespace App\Mail\IssueReport;

use App\Models\EmailTemplate;
use App\Models\IssueReport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendIssueReportStatusUpdated extends Mailable
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
        $templateIssueReportEmail = EmailTemplate::firstWhere('key', 'send-issue-report-created');
        $templateEmail = EmailTemplate::firstWhere('key', 'send-issue-report-status-updated');
        $template = $templateEmail->email_body;

        $template = (string) \Str::of($template)
            ->replace('[new-status]', $this->IssueReport->status)
            ->replace('[old-status]', $this->IssueReport->getOriginal('status'));

        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject($templateIssueReportEmail->subject . ' - ' . $this->IssueReport->number)
            ->view('emails.welcome')
            ->with(['template' => $template]);

        $email = get_option('email_address');

        return $this->from($email)
            ->subject('')
            ->view('emails.issue_report.status_updated');
    }
}
