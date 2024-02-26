<?php

namespace Database\Seeders;

use App\Models\Course;
use Artisan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ZZZZServerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        //        $this->call(ActivitiesTableSeeder::class);
        $this->call(AdminModulesTableSeeder::class);
        $this->call(AllLanguagesTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        //        $this->call(AssignmentSubmissionsTableSeeder::class);
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
        //        $this->call(LectureTableSeeder::class);
        $this->call(CompletesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        //        $this->call(ContentsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CouponCodeTableSeeder::class);
        $this->call(CourseAssignTrainersTableSeeder::class);
        $this->call(CourseIndustriesTableSeeder::class);
        $this->call(CourseOccupationsTableSeeder::class);
        $this->call(CoursePurchasesTableSeeder::class);
        $this->call(CourseSkillsTableSeeder::class);
        //        $this->call(CourseUserTableSeeder::class);
        //        $this->call(CoursesTableSeeder::class);
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
        //        $this->call(ReviewsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        //        $this->call(SectionsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SubscriptionFunctionalitiesTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(TcLanguagesTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(TrLanguagesTableSeeder::class);
        $this->call(TrainersTableSeeder::class);
        $this->call(TrainingCentersTableSeeder::class);
        $this->call(UserNotificationsTableSeeder::class);
        $this->call(ZZZZServerUsersTableSeeder::class);
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
        $this->call(ZZZZServerBusinessesTableSeeder::class);
        $this->call(CertificationTableSeeder::class);
        $this->call(RewardTableSeeder::class);
        $this->call(BusinessFollowTableSeeder::class);
        //        $this->call(ZZZZServerBusinessCourses::class);
        //        $this->call(ZZZZServerBusinessIncentivesSeeder::class);
        $this->call(BusinessAppSettings::class);
        $this->call(SocialMediaSeeder::class);
        $this->call(PromoCodeTableSeeder::class);
        $this->call(CourseCategoriesSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(TierFeatureSeeder::class);

        //        $tag1 = Tag::create(['name' => 'tag 1']);
        //        $tag2 = Tag::create(['name' => 'tag 2']);

        \DB::table('codes')->truncate();
        Artisan::call('code:generate', [
            '--count' => 100,
            '--status' => 'public',
        ]);

        //        $this->call(OrdersTableSeeder::class);
        //        $this->call(TransactionsTableSeeder::class);
        //        $this->call(AssignmentTableSeeder::class);
        //        $this->call(QuizTableSeeder::class);
        //        $this->call(QuestionOptionTableSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
