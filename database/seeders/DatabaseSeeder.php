<?php

use App\Models\Admin;
use App\Models\Course;
use Database\Seeders\ActivitiesTableSeeder;
use Database\Seeders\AdminModulesTableSeeder;
use Database\Seeders\AllLanguagesTableSeeder;
use Database\Seeders\AllRolesPermissionsTableSeeder;
use Database\Seeders\AnswersTableSeeder;
use Database\Seeders\AssignmentSubmissionsTableSeeder;
use Database\Seeders\AssignmentTableSeeder;
use Database\Seeders\AttachmentsTableSeeder;
use Database\Seeders\AttemptsTableSeeder;
use Database\Seeders\BannersTableSeeder;
use Database\Seeders\BiddingsTableSeeder;
use Database\Seeders\BlogTableSeeder;
use Database\Seeders\BranchTableSeeder;
use Database\Seeders\BusinessAppSettings;
use Database\Seeders\BusinessCourses;
use Database\Seeders\BusinessFollowTableSeeder;
use Database\Seeders\BusinessTableSeeder;
use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\CertificateUploadsTableSeeder;
use Database\Seeders\CertificationTableSeeder;
use Database\Seeders\ChatsTableSeeder;
use Database\Seeders\CommentTableSeeder;
use Database\Seeders\CompaniesTableSeeder;
use Database\Seeders\CompanyContactDetailsTableSeeder;
use Database\Seeders\CompanyDepartmentsTableSeeder;
use Database\Seeders\CompanyIndividualRequestsTableSeeder;
use Database\Seeders\CompanyIndustriesTableSeeder;
use Database\Seeders\CompanyLanguagesTableSeeder;
use Database\Seeders\CompanyOccupationsTableSeeder;
use Database\Seeders\CompanyPositionsTableSeeder;
use Database\Seeders\CompanyProjectsTableSeeder;
use Database\Seeders\CompanyPurchaseTemporaryTableSeeder;
use Database\Seeders\CompanyRequiredCoursesTableSeeder;
use Database\Seeders\CompanyUsersTableSeeder;
use Database\Seeders\CompanyWorkforceTableSeeder;
use Database\Seeders\CompletesTableSeeder;
use Database\Seeders\ContactsTableSeeder;
use Database\Seeders\ContentsTableSeeder;
use Database\Seeders\CountriesTableSeeder;
use Database\Seeders\CouponCodeTableSeeder;
use Database\Seeders\CourseAssignTrainersTableSeeder;
use Database\Seeders\CourseCategoriesSeeder;
use Database\Seeders\CourseIndustriesTableSeeder;
use Database\Seeders\CourseOccupationsTableSeeder;
use Database\Seeders\CoursePurchasesTableSeeder;
use Database\Seeders\CourseSkillsTableSeeder;
use Database\Seeders\CoursesTableSeeder;
use Database\Seeders\CourseUserTableSeeder;
use Database\Seeders\DepartmentTableSeeder;
use Database\Seeders\DiscussionsTableSeeder;
use Database\Seeders\EarningsTableSeeder;
use Database\Seeders\EductionInformationSeeder;
use Database\Seeders\EmailTemplatesTableSeeder;
use Database\Seeders\EnrollsTableSeeder;
use Database\Seeders\EnterpriseRequiredCourseSeeder;
use Database\Seeders\FailedJobsTableSeeder;
use Database\Seeders\FreeResourcesLanguagesTableSeeder;
use Database\Seeders\FreeResourcesSkillsTableSeeder;
use Database\Seeders\FreeResourcesTableSeeder;
use Database\Seeders\FunctionalitiesTableSeeder;
use Database\Seeders\GroupTableSeeder;
use Database\Seeders\HighestDegreesTableSeeder;
use Database\Seeders\HomeBannersTableSeeder;
use Database\Seeders\HomeSectionsTableSeeder;
use Database\Seeders\IndividualCurrentJobDetailsTableSeeder;
use Database\Seeders\IndividualIndustriesTableSeeder;
use Database\Seeders\IndividualLanguagesTableSeeder;
use Database\Seeders\IndividualOccupationsTableSeeder;
use Database\Seeders\IndividualPreferedJobDetailsTableSeeder;
use Database\Seeders\IndividualSkillsWantedTableSeeder;
use Database\Seeders\IndividualsTableSeeder;
use Database\Seeders\IndividualTopSkillsTableSeeder;
use Database\Seeders\IndustryTableSeeder;
use Database\Seeders\InstructorTrainersTableSeeder;
use Database\Seeders\JobsTableSeeder;
use Database\Seeders\LanguagesTableSeeder;
use Database\Seeders\LectureCourseTypeSeeder;
use Database\Seeders\LectureTableSeeder;
use Database\Seeders\LiveSchedulesTableSeeder;
use Database\Seeders\LiveScheduleUsersTableSeeder;
use Database\Seeders\MajorsTableSeeder;
use Database\Seeders\MediaTableSeeder;
use Database\Seeders\OccupationTableSeeder;
use Database\Seeders\OptionsTableSeeder;
use Database\Seeders\OrdersTableSeeder;
use Database\Seeders\PackageFunctionalitiesTableSeeder;
use Database\Seeders\PackagesTableSeeder;
use Database\Seeders\PageSectionImagesTableSeeder;
use Database\Seeders\PageSectionTableSeeder;
use Database\Seeders\PagesTableSeeder;
use Database\Seeders\PaymentsTableSeeder;
use Database\Seeders\PermissionRoleTableSeeder;
use Database\Seeders\PermissionsTableSeeder;
use Database\Seeders\PersonalInformationSeeder;
use Database\Seeders\PositionTableSeeder;
use Database\Seeders\PostsTableSeeder;
use Database\Seeders\ProfileTableSeeder;
use Database\Seeders\ProjectTableSeeder;
use Database\Seeders\PromoCodeTableSeeder;
use Database\Seeders\QuestionOptionsTableSeeder;
use Database\Seeders\QuestionOptionTableSeeder;
use Database\Seeders\QuestionsTableSeeder;
use Database\Seeders\QuizTableSeeder;
use Database\Seeders\ReelTableSeeder;
use Database\Seeders\RequiredCourseDepartmentsTableSeeder;
use Database\Seeders\RequiredCoursePositionsTableSeeder;
use Database\Seeders\RequiredCourseProjectsTableSeeder;
use Database\Seeders\RequiredCourseWorkforcesTableSeeder;
use Database\Seeders\ReviewsTableSeeder;
use Database\Seeders\RewardTableSeeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\SectionsTableSeeder;
use Database\Seeders\SkillsTableSeeder;
use Database\Seeders\SocialMediaSeeder;
use Database\Seeders\SubscriptionFunctionalitiesTableSeeder;
use Database\Seeders\SubscriptionsPlanSeeder;
use Database\Seeders\SubscriptionsTableSeeder;
use Database\Seeders\TagsSeeder;
use Database\Seeders\TcLanguagesTableSeeder;
use Database\Seeders\TestimonialsTableSeeder;
use Database\Seeders\TierFeatureSeeder;
use Database\Seeders\TierTableSeeder;
use Database\Seeders\TrainersTableSeeder;
use Database\Seeders\TrainingCentersTableSeeder;
use Database\Seeders\TransactionsTableSeeder;
use Database\Seeders\TrLanguagesTableSeeder;
use Database\Seeders\UserNotificationsTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\VimeoVideosTableSeeder;
use Database\Seeders\WishlistsTableSeeder;
use Database\Seeders\WithdrawsTableSeeder;
use Database\Seeders\WorkforceDepartmentsTableSeeder;
use Database\Seeders\WorkforcePositionsTableSeeder;
use Database\Seeders\WorkforceProjectsTableSeeder;
use Database\Seeders\WorkingPlaceTableSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $this->call(ActivitiesTableSeeder::class);
        $this->call(AdminModulesTableSeeder::class);
        $this->call(AllLanguagesTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(AssignmentSubmissionsTableSeeder::class);
        $this->call(AttachmentsTableSeeder::class);
        //        $this->call(AttemptsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(BiddingsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CertificateUploadsTableSeeder::class);
        $this->call(ChatsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(CompanyContactDetailsTableSeeder::class);
        $this->call(CompanyDepartmentsTableSeeder::class);
        $this->call(CompanyIndividualRequestsTableSeeder::class);
        $this->call(CompanyIndustriesTableSeeder::class);
        $this->call(CompanyLanguagesTableSeeder::class);
        $this->call(CompanyOccupationsTableSeeder::class);
        $this->call(CompanyPositionsTableSeeder::class);
        $this->call(CompanyProjectsTableSeeder::class);
        $this->call(CompanyPurchaseTemporaryTableSeeder::class);
        $this->call(CompanyRequiredCoursesTableSeeder::class);
        $this->call(CompanyUsersTableSeeder::class);
        $this->call(CompanyWorkforceTableSeeder::class);
        $this->call(LectureCourseTypeSeeder::class);
        $this->call(LectureTableSeeder::class);
        $this->call(CompletesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CouponCodeTableSeeder::class);
        $this->call(CourseAssignTrainersTableSeeder::class);
        $this->call(CourseIndustriesTableSeeder::class);
        $this->call(CourseOccupationsTableSeeder::class);
        $this->call(CoursePurchasesTableSeeder::class);
        $this->call(CourseSkillsTableSeeder::class);
        //        $this->call(CourseUserTableSeeder::class);
        $this->call(DiscussionsTableSeeder::class);
        $this->call(EarningsTableSeeder::class);
        $this->call(EmailTemplatesTableSeeder::class);
        $this->call(EnrollsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(FreeResourcesTableSeeder::class);
        $this->call(FreeResourcesLanguagesTableSeeder::class);
        $this->call(FreeResourcesSkillsTableSeeder::class);
        $this->call(FunctionalitiesTableSeeder::class);
        $this->call(HighestDegreesTableSeeder::class);
        $this->call(HomeBannersTableSeeder::class);
        $this->call(HomeSectionsTableSeeder::class);
        $this->call(IndividualCurrentJobDetailsTableSeeder::class);
        $this->call(IndividualIndustriesTableSeeder::class);
        $this->call(IndividualLanguagesTableSeeder::class);
        $this->call(IndividualOccupationsTableSeeder::class);
        $this->call(IndividualPreferedJobDetailsTableSeeder::class);
        $this->call(IndividualSkillsWantedTableSeeder::class);
        $this->call(IndividualTopSkillsTableSeeder::class);
        $this->call(IndividualsTableSeeder::class);
        $this->call(IndustryTableSeeder::class);
        $this->call(InstructorTrainersTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(LiveScheduleUsersTableSeeder::class);
        $this->call(LiveSchedulesTableSeeder::class);
        $this->call(MajorsTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(OccupationTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(PackageFunctionalitiesTableSeeder::class);
        $this->call(PackagesTableSeeder::class);
        $this->call(PageSectionTableSeeder::class);
        $this->call(PageSectionImagesTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        //        $this->call(QuestionOptionsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(RequiredCourseDepartmentsTableSeeder::class);
        $this->call(RequiredCoursePositionsTableSeeder::class);
        $this->call(RequiredCourseProjectsTableSeeder::class);
        $this->call(RequiredCourseWorkforcesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SubscriptionFunctionalitiesTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(TcLanguagesTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(TrLanguagesTableSeeder::class);
        $this->call(TrainersTableSeeder::class);
        $this->call(TrainingCentersTableSeeder::class);
        $this->call(UserNotificationsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(BranchTableSeeder::class);
        $this->call(EnterpriseRequiredCourseSeeder::class);
        $this->call(VimeoVideosTableSeeder::class);
        $this->call(WishlistsTableSeeder::class);
        $this->call(WithdrawsTableSeeder::class);
        $this->call(WorkforceDepartmentsTableSeeder::class);
        $this->call(WorkforcePositionsTableSeeder::class);
        $this->call(WorkforceProjectsTableSeeder::class);
        $this->call(PersonalInformationSeeder::class);
        $this->call(EductionInformationSeeder::class);
        $this->call(ProfileTableSeeder::class);
        $this->call(WorkingPlaceTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ReelTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        //        $this->call(LikeTableSeeder::class);
        $this->call(GroupTableSeeder::class);
        $this->call(AllRolesPermissionsTableSeeder::class);
        $this->call(TierTableSeeder::class);
        $this->call(SubscriptionsPlanSeeder::class);
        $this->call(BusinessTableSeeder::class);
        $this->call(CoursesTableSeeder::class);

        $this->call(CertificationTableSeeder::class);
        $this->call(RewardTableSeeder::class);
        $this->call(BusinessFollowTableSeeder::class);
        $this->call(BusinessCourses::class);
        //        $this->call(BusinessIncentivesSeeder::class);
        $this->call(BusinessAppSettings::class);
        $this->call(SocialMediaSeeder::class);
        $this->call(PromoCodeTableSeeder::class);
        $this->call(CourseCategoriesSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(TierFeatureSeeder::class);

        //        $tag1 = Tag::create(['name' => 'tag 1']);
        //        $tag2 = Tag::create(['name' => 'tag 2']);

        Course::find(1)
            ->courseDetails
            ->tags()
            ->sync([1, 2]);

        DB::table('codes')->truncate();
        Artisan::call('code:generate', [
            '--count' => 100,
            '--status' => 'public',
        ]);

        $this->call(OrdersTableSeeder::class);
        // $this->call(TransactionsTableSeeder::class);
        $this->call(AssignmentTableSeeder::class);
        $this->call(QuizTableSeeder::class);
        //        $this->call(QuestionOptionTableSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}