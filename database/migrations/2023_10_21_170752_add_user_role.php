<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

return new class extends Migration {
    public function up(): void
    {
        $user = Role::firstOrCreate(['name' => 'user']);
        $userPermissions = require base_path('database/permissions/user.php');
        foreach ($userPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
        $user->syncPermissions($userPermissions);
        // Shelved because of the error SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'business_id' cannot be null (SQL: insert into `social_model_has_roles` (`business_id`, `model_id`, `model_type`, `role_id`) values (?, 1, App\Models\User, 12)) {"exception":"[object] (Illuminate\\Database\\QueryException(code: 23000): SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'business_id' cannot be null (SQL: insert into `social_model_has_roles` (`business_id`, `model_id`, `model_type`, `role_id`) values (?, 1, App\\Models\\User, 12))
        //        User::chunk(10, function ($users) {
        //            foreach ($users as $user) {
        //                /** @var User $user */
        //                $user->assignRole('user');
        //            }
        //        });
    }
};
