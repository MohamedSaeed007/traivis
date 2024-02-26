<?php

namespace App\Models;

use App\Mail\IssueReport\SendIssueReportCreated;
use App\Mail\IssueReport\SendIssueReportStatusUpdated;
use Assada\Tests\Model\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Faker\Factory as FakerFactory;
use Mail;

class IssueReport extends Model
{
    use SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'debug_info',
        'severity',
        'status',
        'user_id',
        'has_payload',
    ];

    /**
     * @return void
     */
    protected static function booted(): void
    {
        static::created(function (IssueReport $issue) {
            Mail::to($issue->initiatedByUser)->send(new SendIssueReportCreated($issue));
        });
        static::updated(function (IssueReport $issue) {
            if ($issue->getOriginal('status') != $issue->status) {
                Mail::to($issue->initiatedByUser)->send(new SendIssueReportStatusUpdated($issue));
            }
        });
        static::creating(function (IssueReport $issue) {
            if (!$issue->severity) {
                $issue->severity = config('traivis.issue_reports.severities.default');
            }
            if (!$issue->status) {
                $issue->status = config('traivis.issue_reports.statuses.default');
            }

            $faker = FakerFactory::create();

            $letters = [
                'A',
                'B',
                'C',
                'D',
                'E',
                'F',
                'G',
                'H',
                'J',
                'K',
                'L',
                'M',
                'N',
                'P',
                'Q',
                'R',
                'S',
                'T',
                'U',
                'V',
                'W',
                'X',
                'Y',
                'Z',
            ];
            $numbers = ['2', '3', '4', '5', '6', '7', '8', '9'];

            // Generate a random string by combining letters and non-similar numbers
            $issue->number =
                implode($faker->randomElements($letters, 5)) .
                '-' .
                implode($faker->randomElements($numbers, 3));

            //            $issue->number = $faker->bothify('???#####');
        });
    }

    /**
     * @return BelongsTo
     */
    public function initiatedByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return HasMany
     */
    public function replies(): HasMany
    {
        return $this->hasMany(IssueReportReply::class, 'issue_report_id')->orderByDesc('id');
    }
}
