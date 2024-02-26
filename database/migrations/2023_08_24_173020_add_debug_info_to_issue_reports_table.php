<?php

use App\Models\EmailTemplate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('issue_reports', function (Blueprint $table) {
            $table
                ->longText('debug_info')
                ->nullable()
                ->after('description');
        });

        EmailTemplate::updateOrInsert(
            ['key' => 'send-issue-report-created'],
            [
                'subject' => 'Issue report created',
                'title' => 'Issue report created',
                'email_body' => 'An issue report ([number]) has been created by Traivis\' Support Team',
                'is_show' => true,
                'created_by' => 1,
            ],
        );
        EmailTemplate::updateOrInsert(
            ['key' => 'send-issue-report-reply-created'],
            [
                'subject' => 'Issue report reply created',
                'title' => 'Issue report reply created',
                'email_body' => 'Your issue report ([number]) has been updated.<br><br>[reply]',
                'is_show' => true,
                'created_by' => 1,
            ],
        );
        EmailTemplate::updateOrInsert(
            ['key' => 'send-issue-report-status-updated'],
            [
                'subject' => 'Issue report status updated',
                'title' => 'Issue report status updated',
                'email_body' => 'Issue report status has been changed from [old-status] to [new-status]',
                'is_show' => true,
                'created_by' => 1,
            ],
        );
    }

    public function down(): void
    {
        Schema::table('issue_reports', function (Blueprint $table) {
            $table->dropColumn('debug_info');
        });
    }
};
