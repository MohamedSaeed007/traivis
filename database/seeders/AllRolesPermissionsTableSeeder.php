<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class AllRolesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            //Social Permissions
            'note_create',
            'note_edit',
            'note_show',
            'note_delete',
            'note_access',
            'hint_create',
            'hint_edit',
            'hint_show',
            'hint_delete',
            'hint_access',
            'blog_create',
            'blog_edit',
            'blog_show',
            'blog_delete',
            'blog_access',
            'comment_create',
            'comment_edit',
            'comment_show',
            'comment_delete',
            'comment_access',
            'bidding_offer_create',
            'bidding_offer_edit',
            'bidding_offer_show',
            'bidding_offer_delete',
            'bidding_offer_access',
            //Remain Permissions
            'view_contacts',
            'message_contacts',
            'create_admin',
            'edit_admin',
            'delete_admin',
            'admins_access',
            'roles_access',
            'roles_user_assign',
            'roles_user_de_assign',
            'managing_mkt_portals',
            'managing_financials',
            'freelances_access',
            'freelance_create',
            'freelance_edit',
            'freelance_delete',
            'freelance_show',
            'claim_rewards_access',
            'claim_rewards_show',
            'claim_rewards_create',
            'claim_rewards_edit',
            'claim_rewards_delete',
            'calenders_access',
            'calender_create',
            'calender_edit',
            'calender_show',
            'calender_delete',
            'courses_access',
            'course_create',
            'course_edit',
            'course_delete',
            'course_show',
            'course_assign',
            'students_access',
            'student_assign',
            'students_enrolled_access',
            'upload_certs',
            'approve_course_created_by_instructor',
            'approve_certs',
            'create_teaners',
            'approve_teaners',
            'managing_space_privacy',
            'edit_space_details',
            'close_pause_space',
            'instructors_access', //From Me
            'followers_access', //From Me

            'organization_structure_access',
            'organization_structure_show',
            'organization_workforce_create',
            'organization_workforce_edit',
            'organization_workforce_show',
            'organization_workforce_delete',
            'organization_workforce_access',
            'organization_assign_role',
            'training_matrices_access',
        ];

        $userPermissions = require base_path('database/permissions/user.php');
        $contractorPermissions = require base_path('database/permissions/contractor.php');
        $projectMangerPermissions = require base_path('database/permissions/projectManager.php');
        $trainingManagerPermissions = require base_path('database/permissions/trainingManager.php');
        $biddingManagerPermissions = require base_path('database/permissions/biddingManager.php');
        $internalInstructorPermissions = require base_path(
            'database/permissions/internalInstructor.php',
        );

        $permissions = array_unique(
            array_merge(
                $permissions,
                $userPermissions,
                $contractorPermissions,
                $projectMangerPermissions,
                $trainingManagerPermissions,
                $biddingManagerPermissions,
                $internalInstructorPermissions,
            ),
        );

        //Create All Permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        //Create Roles
        $user = Role::firstOrCreate(['name' => 'user']);
        $owner = Role::firstOrCreate(['name' => 'owner']);
        $super_admin = Role::firstOrCreate(['name' => 'super_admin']);
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $mgr_marketing = Role::firstOrCreate(['name' => 'mgr_marketing']);
        $mgr_training = Role::firstOrCreate(['name' => 'mgr_training']);
        $instructor = Role::firstOrCreate(['name' => 'instructor']);
        $contractor_manger = Role::firstOrCreate(['name' => 'contractor_manger']);
        $training_manager = Role::firstOrCreate(['name' => 'training_manager']);
        $bidding_manager = Role::firstOrCreate(['name' => 'bidding_manager']);
        $project_manager = Role::firstOrCreate(['name' => 'project_manager']);
        $internal_instracture = Role::firstOrCreate(['name' => 'internal_instracture']);
        //Assign Permissions To Each Role
        $owner->syncPermissions($permissions);

        $super_admin->syncPermissions($permissions);

        $admin->syncPermissions([
            //Social Permissions
            'note_create',
            'note_edit',
            'note_show',
            'note_delete',
            'note_access',
            'hint_create',
            'hint_edit',
            'hint_show',
            'hint_delete',
            'hint_access',
            'blog_create',
            'blog_edit',
            'blog_show',
            'blog_delete',
            'blog_access',
            'comment_create',
            'comment_edit',
            'comment_show',
            'comment_delete',
            'comment_access',
            'bidding_offer_create',
            'bidding_offer_edit',
            'bidding_offer_show',
            'bidding_offer_delete',
            'bidding_offer_access',
            //Remain Permissions
            'view_contacts',
            'message_contacts',
            'roles_access',
            'roles_user_assign',
            'roles_user_de_assign',
            'managing_mkt_portals',
            'freelances_access',
            'freelance_create',
            'freelance_edit',
            'freelance_delete',
            'freelance_show',
            'claim_rewards_access',
            'claim_rewards_show',
            'claim_rewards_create',
            'claim_rewards_edit',
            'claim_rewards_delete',
            'calenders_access',
            'calender_create',
            'calender_edit',
            'calender_show',
            'calender_delete',
            'courses_access',
            'course_edit',
            'course_delete',
            'course_show',
            'course_assign',
            'students_access',
            'student_assign',
            'students_enrolled_access',
            'upload_certs',
            'approve_course_created_by_instructor',
            'approve_certs',
            'create_teaners',
            'approve_teaners',
            'managing_space_privacy',
            'edit_space_details',
        ]);

        $mgr_marketing->syncPermissions([
            //Social Permissions
            'note_create',
            'note_edit',
            'note_show',
            'note_delete',
            'note_access',
            'hint_create',
            'hint_edit',
            'hint_show',
            'hint_delete',
            'hint_access',
            'blog_create',
            'blog_edit',
            'blog_show',
            'blog_delete',
            'blog_access',
            'comment_create',
            'comment_edit',
            'comment_show',
            'comment_delete',
            'comment_access',

            //Remain Permissions
            'view_contacts',
            'message_contacts',
            'managing_mkt_portals',
            'freelances_access',
            'freelance_create',
            'freelance_edit',
            'freelance_delete',
            'freelance_show',
            'claim_rewards_access',
            'claim_rewards_show',
            'claim_rewards_create',
            'claim_rewards_edit',
            'claim_rewards_delete',
            'calenders_access',
            'calender_create',
            'calender_edit',
            'calender_show',
            'calender_delete',
            'courses_access',
            'course_edit',
            'course_delete',
            'course_show',
            'students_access',
            'student_assign',
            'create_teaners',
            'approve_teaners',
            'edit_space_details',
        ]);

        $mgr_training->syncPermissions([
            //Social Permissions
            'note_create',
            'note_edit',
            'note_show',
            'note_delete',
            'note_access',
            'hint_create',
            'hint_edit',
            'hint_show',
            'hint_delete',
            'hint_access',
            'blog_create',
            'blog_edit',
            'blog_show',
            'blog_delete',
            'blog_access',
            'comment_create',
            'comment_edit',
            'comment_show',
            'comment_delete',
            'comment_access',
            'bidding_offer_create',
            'bidding_offer_edit',
            'bidding_offer_show',
            'bidding_offer_delete',
            'bidding_offer_access',
            //Remain Permissions
            'view_contacts',
            'message_contacts',
            'freelances_access',
            'freelance_create',
            'freelance_edit',
            'freelance_delete',
            'freelance_show',
            'calenders_access',
            'calender_create',
            'calender_edit',
            'calender_show',
            'calender_delete',
            'courses_access',
            'course_edit',
            'course_delete',
            'course_show',
            'course_assign',
            'students_access',
            'student_assign',
            'students_enrolled_access',
            'upload_certs',
            'approve_course_created_by_instructor',
            'approve_certs',
            'create_teaners',
            'approve_teaners',
        ]);

        $instructor->syncPermissions([
            'calenders_access',
            'students_enrolled_access',
            'upload_certs',
            'create_teaners',
        ]);

        $user->syncPermissions($userPermissions);
        $contractor_manger->syncPermissions($contractorPermissions);
        $training_manager->syncPermissions($trainingManagerPermissions);
        $bidding_manager->syncPermissions($biddingManagerPermissions);
        $project_manager->syncPermissions($projectMangerPermissions);
        $internal_instracture->syncPermissions($internalInstructorPermissions);
    }

    /**
     * @param  array  $permissions
     * @param  \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder  $role
     * @return void
     */
    private function givePermissionsTo(
        \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder $role,
        array $permissions,
    ): void {
        foreach ($permissions as $permission) {
            $role->givePermissionTo($permission);
        }
    }
}
