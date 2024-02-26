<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('notifications', function (Blueprint $table) {
            $doctrineTable = Schema::getConnection()
                ->getDoctrineSchemaManager()
                ->introspectTable('notifications');
            foreach ($doctrineTable->getForeignKeys() as $fkId => $fk) {
                if ($fk->getForeignTableName() == 'users') {
                    $table->dropForeign($fkId);
                }
            }

            $table->nullableMorphs('notifierable');
        });

        foreach (
            \App\Models\Notification::whereNull('notifierable_type')
                ->whereNull('notifierable_id')
                ->get()
            as $aNotification
        ) {
            $aNotification->notifierable_id = $aNotification->user_id;
            $aNotification->notifierable_type = User::class;
            $aNotification->save();
        }

        Schema::table('notifications', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }

    public function down(): void
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropmorphs('notifierable');
        });
    }
};
