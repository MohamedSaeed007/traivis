<?php

namespace App\Models;

use App\Mail\IssueReport\SendIssueReportReply;
use App\Mail\IssueReport\SendIssueReportReplyCreated;
use Assada\Tests\Model\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mail;

class IssueReportReply extends Model
{
    use SoftDeletes;
    protected $fillable = ['body', 'issue_report_id', 'user_id'];

    protected static function booted()
    {
        static::created(function (IssueReportReply $issueReportReply) {
            $issueReportReply->issueReport->touch();
            Mail::to($issueReportReply->issueReport->initiatedByUser)->send(
                new SendIssueReportReplyCreated($issueReportReply),
            );
        });
    }

    public function replyByUser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function issueReport(): BelongsTo
    {
        return $this->belongsTo(IssueReport::class);
    }
}
