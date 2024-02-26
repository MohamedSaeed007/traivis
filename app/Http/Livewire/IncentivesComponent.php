<?php

namespace App\Http\Livewire;

use App\Achievements\GotFollowers;
use App\Achievements\GotStudents;
use App\Achievements\GotUsdCoursesIncome;
use App\Achievements\PublishedBlogs;
use App\Achievements\PublishedCourses;
use App\Achievements\PublishedFreeCourses;
use App\Achievements\PublishedHints;
use App\Achievements\PublishedHrsOfCourses;
use App\Achievements\PublishedHrsOfFreeCourses;
use App\Achievements\PublishedNotes;
use App\Achievements\Tier0\Published3FreeCourses;
use App\Achievements\Tier0\Published3HrsOfFreeCourses;
use App\Achievements\Tier0\Got50UsdCoursesIncome;
use App\Achievements\Tier0\Got6Students;
use App\Achievements\Tier0\Got99Followers;
use App\Achievements\Tier0\Published30Notes;
use App\Achievements\Tier0\Published32Hints;
use App\Achievements\Tier0\Published6Courses;
use App\Achievements\Tier0\Published6HrsOfCourses;
use App\Achievements\Tier0\Published9Blogs;
use App\Achievements\Tier0Chain;
use App\Achievements\Tier1\Published6FreeCourses;
use App\Achievements\Tier1\Published12HrsOfFreeCourses;
use App\Achievements\Tier1\Got125UsdCoursesIncome;
use App\Achievements\Tier1\Got20Students;
use App\Achievements\Tier1\Got299Followers;
use App\Achievements\Tier1\Published10Courses;
use App\Achievements\Tier1\Published19Blogs;
use App\Achievements\Tier1\Published24HrsOfCourses;
use App\Achievements\Tier1\Published65Notes;
use App\Achievements\Tier1\Published89Hints;
use App\Achievements\Tier2\Published11FreeCourses;
use App\Achievements\Tier2\Published22HrsOfFreeCourses;
use App\Achievements\Tier2\Got190UsdCoursesIncome;
use App\Achievements\Tier2\Got499Followers;
use App\Achievements\Tier2\Got49Students;
use App\Achievements\Tier2\Published129Hints;
use App\Achievements\Tier2\Published29Blogs;
use App\Achievements\Tier2\Published29Courses;
use App\Achievements\Tier2\Published59HrsOfCourses;
use App\Achievements\Tier2\Published99Notes;
use App\Achievements\Tier3\Published16FreeCourses;
use App\Achievements\Tier3\Published32HrsOfFreeCourses;
use App\Achievements\Tier3\Got380UsdCoursesIncome;
use App\Achievements\Tier3\Got699Followers;
use App\Achievements\Tier3\Got79Students;
use App\Achievements\Tier3\Published139Notes;
use App\Achievements\Tier3\Published189Hints;
use App\Achievements\Tier3\Published39Blogs;
use App\Achievements\Tier3\Published43Courses;
use App\Achievements\Tier3\Published89HrsOfCourses;
use App\Achievements\Tier4\Published23FreeCourses;
use App\Achievements\Tier4\Published41HrsOfFreeCourses;
use App\Achievements\Tier4\Got499UsdCoursesIncome;
use App\Achievements\Tier4\Got999Followers;
use App\Achievements\Tier4\Got99Students;
use App\Achievements\Tier4\Published100HrsOfCourses;
use App\Achievements\Tier4\Published199Notes;
use App\Achievements\Tier4\Published249Hints;
use App\Achievements\Tier4\Published60Courses;
use App\Achievements\Tier4\Published69Blogs;
use App\Models\AchievementDetail;
use App\Models\Business;
use App\Models\RewardPost;
use App\Models\Tier;
use App\Models\TierFeature;
use App\Models\TierFeaturePost;
use getID3;
use Livewire\Component;
use Livewire\WithFileUploads;

class IncentivesComponent extends Component
{
    use WithFileUploads;
    public
        $business,
        $TalentedPercent,
        $SkilledPercent,
        $ExpertPercent,
        $MasterPercent,
        $PartnerPercent,
        $NoTierSpecifications,
        $TalentedTierSpecifications,
        $SkilledTierSpecifications,
        $ExpertTierSpecifications,
        $MasterTierSpecifications,
        $PartnerTierSpecifications,
        $CurrentTierIncentives,
        $media,
        $content,
        $nextTier,
        $prevTier,
        $graphTableData,
        $currentTierAchievementsPercentage,
        $nextTierAchievementsPercentage,
        $selectedTierFeatureId,
        $videoErrorMessage,
        $uploadPopup,
        $tiersFeatures;


    protected function rules()
    {
        $validation = [
            'content' => 'required|string',
            'media' =>  $this->selectedTierFeatureId == 4 ? 'required|mimes:mp4,mkv' : 'nullable|mimes:mp4,mkv,jpg,png'
        ];
        return $validation;
    }

    public function mount()
    {
        $this->business = Business::find(session('business_id'));
        /* $this->TalentedPercent = 0;
        $this->SkilledPercent = 0;
        $this->ExpertPercent = 0;
        $this->MasterPercent = 0;
        $this->PartnerPercent = 0; */
    }
    public function render()
    {

        /******************For Testing Only******************/
        // $tierId = 2;
        // $this->business->tier_id = 2;
        // $this->business->save();
        // $achievements = AchievementDetail::all();
        // foreach ($achievements as $key => $a) {
        //     $a->update(['tier_id' => $tierId]);
        //     if ($key == 9 || $key == 19 || $key == 29 || $key == 39) {
        //         $tierId++;
        //     }
        // }
        // $this->business->addProgress(new GotStudents(), 10);
        // $this->business->addProgress(new GotFollowers(), 10);
        // $this->business->addProgress(new GotUsdCoursesIncome(), 1000);
        // $this->business->addProgress(new PublishedCourses(), 10);
        // $this->business->addProgress(new PublishedHrsOfCourses(), 6000);
        // $this->business->addProgress(new PublishedNotes(), 10);
        // $this->business->addProgress(new PublishedBlogs(), 10);
        // $this->business->addProgress(new PublishedHints(), 10);
        // $this->business->addProgress(new PublishedHrsOfFreeCourses(), 6000);
        // $this->business->addProgress(new PublishedFreeCourses(), 10);
        /******************For Testing Only******************/

        //Talented Tier0
        $Got6Students = $this->business->achievementProgressPercentage(new Got6Students());
        $Got50UsdCoursesIncome = $this->business->achievementProgressPercentage(new Got50UsdCoursesIncome());
        $Got99Followers = $this->business->achievementProgressPercentage(new Got99Followers());
        $Published6Courses = $this->business->achievementProgressPercentage(new Published6Courses());
        $Published6HrsOfCourses = $this->business->achievementProgressPercentage(new Published6HrsOfCourses());
        $Published9Blogs = $this->business->achievementProgressPercentage(new Published9Blogs());
        $Published30Notes = $this->business->achievementProgressPercentage(new Published30Notes());
        $Published32Hints = $this->business->achievementProgressPercentage(new Published32Hints());
        $Published3HrsOfFreeCourses = $this->business->achievementProgressPercentage(new Published3HrsOfFreeCourses());
        $Published3FreeCourses = $this->business->achievementProgressPercentage(new Published3FreeCourses());

        $TalentedCount = ($Got6Students + $Got50UsdCoursesIncome + $Got99Followers + $Published6Courses + $Published6HrsOfCourses +
            $Published9Blogs + $Published30Notes + $Published32Hints + $Published3HrsOfFreeCourses + $Published3FreeCourses);

        $this->TalentedPercent = ($TalentedCount > 0) ? ($TalentedCount / 10) : 0;

        //Skilled Tier1
        $Got20Students = $this->business->achievementProgressPercentage(new Got20Students());
        $Got125UsdCoursesIncome = $this->business->achievementProgressPercentage(new Got125UsdCoursesIncome());
        $Got299Followers = $this->business->achievementProgressPercentage(new Got299Followers());
        $Published10Courses = $this->business->achievementProgressPercentage(new Published10Courses());
        $Published24HrsOfCourses = $this->business->achievementProgressPercentage(new Published24HrsOfCourses());
        $Published19Blogs = $this->business->achievementProgressPercentage(new Published19Blogs());
        $Published65Notes = $this->business->achievementProgressPercentage(new Published65Notes());
        $Published89Hints = $this->business->achievementProgressPercentage(new Published89Hints());
        $Published12HrsOfFreeCourses = $this->business->achievementProgressPercentage(new Published12HrsOfFreeCourses());
        $Published6FreeCourses = $this->business->achievementProgressPercentage(new Published6FreeCourses());

        $SkilledCount = ($Got20Students + $Got125UsdCoursesIncome + $Got299Followers + $Published10Courses + $Published19Blogs +
            $Published24HrsOfCourses + $Published65Notes + $Published89Hints + $Published12HrsOfFreeCourses + $Published6FreeCourses);

        $this->SkilledPercent = ($SkilledCount > 0) ? ($SkilledCount / 10) : 0;

        //End Skilled

        //Expert Tier2
        $Got49Students = $this->business->achievementProgressPercentage(new Got49Students());
        $Got190UsdCoursesIncome = $this->business->achievementProgressPercentage(new Got190UsdCoursesIncome());
        $Got499Followers = $this->business->achievementProgressPercentage(new Got499Followers());
        $Published29Courses = $this->business->achievementProgressPercentage(new Published29Courses());
        $Published59HrsOfCourses = $this->business->achievementProgressPercentage(new Published59HrsOfCourses());
        $Published29Blogs = $this->business->achievementProgressPercentage(new Published29Blogs());
        $Published99Notes = $this->business->achievementProgressPercentage(new Published99Notes());
        $Published129Hints = $this->business->achievementProgressPercentage(new Published129Hints());
        $Published22HrsOfFreeCourses = $this->business->achievementProgressPercentage(new Published22HrsOfFreeCourses());
        $Published11FreeCourses = $this->business->achievementProgressPercentage(new Published11FreeCourses());

        $ExpertCount = ($Got49Students + $Got190UsdCoursesIncome + $Got499Followers + $Published29Blogs + $Published29Courses +
            $Published59HrsOfCourses + $Published99Notes + $Published129Hints + $Published11FreeCourses + $Published22HrsOfFreeCourses);

        $this->ExpertPercent = ($ExpertCount > 0) ? ($ExpertCount / 10) : 0;

        //End Expert

        //Master Tier3
        $Got79Students = $this->business->achievementProgressPercentage(new Got79Students());
        $Got380UsdCoursesIncome = $this->business->achievementProgressPercentage(new Got380UsdCoursesIncome());
        $Got699Followers = $this->business->achievementProgressPercentage(new Got699Followers());
        $Published43Courses = $this->business->achievementProgressPercentage(new Published43Courses());
        $Published89HrsOfCourses = $this->business->achievementProgressPercentage(new Published89HrsOfCourses());
        $Published39Blogs = $this->business->achievementProgressPercentage(new Published39Blogs());
        $Published139Notes = $this->business->achievementProgressPercentage(new Published139Notes());
        $Published189Hints = $this->business->achievementProgressPercentage(new Published189Hints());
        $Published32HrsOfFreeCourses = $this->business->achievementProgressPercentage(new Published32HrsOfFreeCourses());
        $Published16FreeCourses = $this->business->achievementProgressPercentage(new Published16FreeCourses());

        $MasterCount = ($Got79Students + $Got380UsdCoursesIncome + $Got699Followers + $Published39Blogs + $Published43Courses +
            $Published89HrsOfCourses + $Published139Notes + $Published189Hints + $Published16FreeCourses + $Published32HrsOfFreeCourses);

        $this->MasterPercent = ($MasterCount > 0) ? ($MasterCount / 10) : 0;

        //End Master

        //Partner Tier4
        $Got99Students = $this->business->achievementProgressPercentage(new Got99Students());
        $Got499UsdCoursesIncome = $this->business->achievementProgressPercentage(new Got499UsdCoursesIncome());
        $Got999Followers = $this->business->achievementProgressPercentage(new Got999Followers());
        $Published60Courses = $this->business->achievementProgressPercentage(new Published60Courses());
        $Published100HrsOfCourse = $this->business->achievementProgressPercentage(new Published100HrsOfCourses());
        $Published69Blogs = $this->business->achievementProgressPercentage(new Published69Blogs());
        $Published199Notes = $this->business->achievementProgressPercentage(new Published199Notes());
        $Published249Hints = $this->business->achievementProgressPercentage(new Published249Hints());
        $Published41HrsOfFreeCourses = $this->business->achievementProgressPercentage(new Published41HrsOfFreeCourses());
        $Published23FreeCourses = $this->business->achievementProgressPercentage(new Published23FreeCourses());

        $PartnerCount = ($Got99Students + $Got499UsdCoursesIncome + $Got999Followers + $Published60Courses + $Published69Blogs +
            $Published100HrsOfCourse + $Published199Notes + $Published249Hints + $Published41HrsOfFreeCourses + $Published23FreeCourses);

        $this->PartnerPercent = ($PartnerCount > 0) ? ($PartnerCount / 10) : 0;
        //End Partner

        //START table in graph work (Students)
        if ($Got6Students != 100) {
            $this->graphTableData['Students']['value'] =  $this->business->achievementStatus(new Got6Students())->points;
        } elseif ($Got20Students != 100) {
            $this->graphTableData['Students']['value'] =  $this->business->achievementStatus(new Got20Students())->points;
        } elseif ($Got49Students != 100) {
            $this->graphTableData['Students']['value'] =  $this->business->achievementStatus(new Got49Students())->points;
        } elseif ($Got79Students != 100) {
            $this->graphTableData['Students']['value'] =  $this->business->achievementStatus(new Got79Students())->points;
        } else {
            $this->graphTableData['Students']['value'] =  $this->business->achievementStatus(new Got99Students())->points;
        }
        $this->graphTableData['Students']['unit'] = "N";
        $this->graphTableData['Students']['displayName'] = "Students";
        $this->graphTableData['Students']['tier']['Talented']['allowed'] = (new Got6Students())->getPoints();
        $this->graphTableData['Students']['tier']['Skilled']['allowed'] = (new Got20Students())->getPoints();
        $this->graphTableData['Students']['tier']['Expert']['allowed'] = (new Got49Students())->getPoints();
        $this->graphTableData['Students']['tier']['Master']['allowed'] = (new Got79Students())->getPoints();
        $this->graphTableData['Students']['tier']['Partner']['allowed'] = (new Got99Students())->getPoints();
        //END table in graph work (Students)
        //START table in graph work (Income)
        if ($Got50UsdCoursesIncome != 100) {
            $this->graphTableData['Income']['value'] =  number_format($this->business->achievementStatus(new Got50UsdCoursesIncome())->points / 100);
        } elseif ($Got125UsdCoursesIncome != 100) {
            $this->graphTableData['Income']['value'] =  number_format($this->business->achievementStatus(new Got125UsdCoursesIncome())->points / 100);
        } elseif ($Got190UsdCoursesIncome != 100) {
            $this->graphTableData['Income']['value'] =  number_format($this->business->achievementStatus(new Got190UsdCoursesIncome())->points / 100);
        } elseif ($Got380UsdCoursesIncome != 100) {
            $this->graphTableData['Income']['value'] = number_format($this->business->achievementStatus(new Got380UsdCoursesIncome())->points / 100);
        } else {
            $this->graphTableData['Income']['value'] =  number_format($this->business->achievementStatus(new Got499UsdCoursesIncome())->points / 100);
        }
        $this->graphTableData['Income']['unit'] = "$";
        $this->graphTableData['Income']['displayName'] = "C.Income";
        $this->graphTableData['Income']['tier']['Talented']['allowed'] = number_format((new Got50UsdCoursesIncome())->getPoints() / 100);
        $this->graphTableData['Income']['tier']['Skilled']['allowed'] = number_format((new Got125UsdCoursesIncome())->getPoints() / 100);
        $this->graphTableData['Income']['tier']['Expert']['allowed'] = number_format((new Got190UsdCoursesIncome())->getPoints() / 100);
        $this->graphTableData['Income']['tier']['Master']['allowed'] = number_format((new Got380UsdCoursesIncome())->getPoints() / 100);
        $this->graphTableData['Income']['tier']['Partner']['allowed'] = number_format((new Got499UsdCoursesIncome())->getPoints() / 100);
        //END table in graph work (Income)
        //START table in graph work (Followers)
        if ($Got99Followers != 100) {
            $this->graphTableData['Followers']['value'] =  $this->business->achievementStatus(new Got99Followers())->points;
        } elseif ($Got299Followers != 100) {
            $this->graphTableData['Followers']['value'] =  $this->business->achievementStatus(new Got299Followers())->points;
        } elseif ($Got499Followers != 100) {
            $this->graphTableData['Followers']['value'] =  $this->business->achievementStatus(new Got499Followers())->points;
        } elseif ($Got699Followers != 100) {
            $this->graphTableData['Followers']['value'] =  $this->business->achievementStatus(new Got699Followers())->points;
        } else {
            $this->graphTableData['Followers']['value'] =  $this->business->achievementStatus(new Got999Followers())->points;
        }
        $this->graphTableData['Followers']['unit'] = "N";
        $this->graphTableData['Followers']['displayName'] = "Followers";
        $this->graphTableData['Followers']['tier']['Talented']['allowed'] = (new Got99Followers())->getPoints();
        $this->graphTableData['Followers']['tier']['Skilled']['allowed'] = (new Got299Followers())->getPoints();
        $this->graphTableData['Followers']['tier']['Expert']['allowed'] = (new Got499Followers())->getPoints();
        $this->graphTableData['Followers']['tier']['Master']['allowed'] = (new Got699Followers())->getPoints();
        $this->graphTableData['Followers']['tier']['Partner']['allowed'] = (new Got999Followers())->getPoints();
        //END table in graph work (Followers)
        //START table in graph work (Courses)
        if ($Published6Courses != 100) {
            $this->graphTableData['Courses']['value'] =  $this->business->achievementStatus(new Published6Courses())->points;
        } elseif ($Published10Courses != 100) {
            $this->graphTableData['Courses']['value'] =  $this->business->achievementStatus(new Published10Courses())->points;
        } elseif ($Published29Courses != 100) {
            $this->graphTableData['Courses']['value'] =  $this->business->achievementStatus(new Published29Courses())->points;
        } elseif ($Published43Courses != 100) {
            $this->graphTableData['Courses']['value'] =  $this->business->achievementStatus(new Published43Courses())->points;
        } else {
            $this->graphTableData['Courses']['value'] =  $this->business->achievementStatus(new Published60Courses())->points;
        }
        $this->graphTableData['Courses']['unit'] = "N";
        $this->graphTableData['Courses']['displayName'] = "P.Courses";
        $this->graphTableData['Courses']['tier']['Talented']['allowed'] = (new Published6Courses())->getPoints();
        $this->graphTableData['Courses']['tier']['Skilled']['allowed'] = (new Published10Courses())->getPoints();
        $this->graphTableData['Courses']['tier']['Expert']['allowed'] = (new Published29Courses())->getPoints();
        $this->graphTableData['Courses']['tier']['Master']['allowed'] = (new Published43Courses())->getPoints();
        $this->graphTableData['Courses']['tier']['Partner']['allowed'] = (new Published60Courses())->getPoints();
        //END table in graph work (Courses)
        //START table in graph work (Courses Hours)
        if ($Published6HrsOfCourses != 100) {
            $this->graphTableData['Courses Hours']['value'] =  gmdate("H", $this->business->achievementStatus(new Published6HrsOfCourses())->points);
        } elseif ($Published24HrsOfCourses != 100) {
            $this->graphTableData['Courses Hours']['value'] =  gmdate("H", $this->business->achievementStatus(new Published24HrsOfCourses())->points);
        } elseif ($Published59HrsOfCourses != 100) {
            $this->graphTableData['Courses Hours']['value'] =  gmdate("H", $this->business->achievementStatus(new Published59HrsOfCourses())->points);
        } elseif ($Published89HrsOfCourses != 100) {
            $this->graphTableData['Courses Hours']['value'] =  gmdate("H", $this->business->achievementStatus(new Published89HrsOfCourses())->points);
        } else {
            $this->graphTableData['Courses Hours']['value'] =  gmdate("H", $this->business->achievementStatus(new Published100HrsOfCourses())->points);
        }
        $this->graphTableData['Courses Hours']['unit'] = "Hrs";
        $this->graphTableData['Courses Hours']['displayName'] = "P.Courses";
        $this->graphTableData['Courses Hours']['tier']['Talented']['allowed'] = gmdate("H", (new Published6HrsOfCourses())->getPoints());
        $this->graphTableData['Courses Hours']['tier']['Skilled']['allowed'] = gmdate("H", (new Published24HrsOfCourses())->getPoints());
        $this->graphTableData['Courses Hours']['tier']['Expert']['allowed'] = gmdate("H", (new Published59HrsOfCourses())->getPoints());
        $this->graphTableData['Courses Hours']['tier']['Master']['allowed'] = gmdate("H", (new Published89HrsOfCourses())->getPoints());
        $this->graphTableData['Courses Hours']['tier']['Partner']['allowed'] = gmdate("H", (new Published100HrsOfCourses())->getPoints());
        //END table in graph work (Courses Hours)
        //START table in graph work (Blogs)
        if ($Published9Blogs != 100) {
            $this->graphTableData['Blogs']['value'] =  $this->business->achievementStatus(new Published9Blogs())->points;
        } elseif ($Published19Blogs != 100) {
            $this->graphTableData['Blogs']['value'] =  $this->business->achievementStatus(new Published19Blogs())->points;
        } elseif ($Published29Blogs != 100) {
            $this->graphTableData['Blogs']['value'] =  $this->business->achievementStatus(new Published29Blogs())->points;
        } elseif ($Published39Blogs != 100) {
            $this->graphTableData['Blogs']['value'] =  $this->business->achievementStatus(new Published39Blogs())->points;
        } else {
            $this->graphTableData['Blogs']['value'] =  $this->business->achievementStatus(new Published69Blogs())->points;
        }
        $this->graphTableData['Blogs']['unit'] = "N";
        $this->graphTableData['Blogs']['displayName'] = "Blogs";
        $this->graphTableData['Blogs']['tier']['Talented']['allowed'] = (new Published9Blogs())->getPoints();
        $this->graphTableData['Blogs']['tier']['Skilled']['allowed'] = (new Published19Blogs())->getPoints();
        $this->graphTableData['Blogs']['tier']['Expert']['allowed'] = (new Published29Blogs())->getPoints();
        $this->graphTableData['Blogs']['tier']['Master']['allowed'] = (new Published39Blogs())->getPoints();
        $this->graphTableData['Blogs']['tier']['Partner']['allowed'] = (new Published69Blogs())->getPoints();
        //END table in graph work (Blogs)
        //START table in graph work (Notes)
        if ($Published30Notes != 100) {
            $this->graphTableData['Notes']['value'] =  $this->business->achievementStatus(new Published30Notes())->points;
        } elseif ($Published65Notes != 100) {
            $this->graphTableData['Notes']['value'] =  $this->business->achievementStatus(new Published65Notes())->points;
        } elseif ($Published99Notes != 100) {
            $this->graphTableData['Notes']['value'] =  $this->business->achievementStatus(new Published99Notes())->points;
        } elseif ($Published139Notes != 100) {
            $this->graphTableData['Notes']['value'] =  $this->business->achievementStatus(new Published139Notes())->points;
        } else {
            $this->graphTableData['Notes']['value'] =  $this->business->achievementStatus(new Published199Notes())->points;
        }
        $this->graphTableData['Notes']['unit'] = "N";
        $this->graphTableData['Notes']['displayName'] = "Notes";
        $this->graphTableData['Notes']['tier']['Talented']['allowed'] = (new Published30Notes())->getPoints();
        $this->graphTableData['Notes']['tier']['Skilled']['allowed'] = (new Published65Notes())->getPoints();
        $this->graphTableData['Notes']['tier']['Expert']['allowed'] = (new Published99Notes())->getPoints();
        $this->graphTableData['Notes']['tier']['Master']['allowed'] = (new Published139Notes())->getPoints();
        $this->graphTableData['Notes']['tier']['Partner']['allowed'] = (new Published199Notes())->getPoints();
        //END table in graph work (Notes)
        //START table in graph work (Hints)
        if ($Published32Hints != 100) {
            $this->graphTableData['Hints']['value'] =  $this->business->achievementStatus(new Published32Hints())->points;
        } elseif ($Published89Hints != 100) {
            $this->graphTableData['Hints']['value'] =  $this->business->achievementStatus(new Published89Hints())->points;
        } elseif ($Published129Hints != 100) {
            $this->graphTableData['Hints']['value'] =  $this->business->achievementStatus(new Published129Hints())->points;
        } elseif ($Published189Hints != 100) {
            $this->graphTableData['Hints']['value'] =  $this->business->achievementStatus(new Published189Hints())->points;
        } else {
            $this->graphTableData['Hints']['value'] =  $this->business->achievementStatus(new Published249Hints())->points;
        }
        $this->graphTableData['Hints']['unit'] = "N";
        $this->graphTableData['Hints']['displayName'] = "Hints";
        $this->graphTableData['Hints']['tier']['Talented']['allowed'] = (new Published32Hints())->getPoints();
        $this->graphTableData['Hints']['tier']['Skilled']['allowed'] = (new Published89Hints())->getPoints();
        $this->graphTableData['Hints']['tier']['Expert']['allowed'] = (new Published129Hints())->getPoints();
        $this->graphTableData['Hints']['tier']['Master']['allowed'] = (new Published189Hints())->getPoints();
        $this->graphTableData['Hints']['tier']['Partner']['allowed'] = (new Published249Hints())->getPoints();
        //END table in graph work (Hints)
        //START table in graph work (Free Courses Hours)
        if ($Published3HrsOfFreeCourses != 100) {
            $this->graphTableData['Free Courses Hours']['value'] =  gmdate("H", $this->business->achievementStatus(new Published3HrsOfFreeCourses())->points);
        } elseif ($Published12HrsOfFreeCourses != 100) {
            $this->graphTableData['Free Courses Hours']['value'] =  gmdate("H", $this->business->achievementStatus(new Published12HrsOfFreeCourses())->points);
        } elseif ($Published22HrsOfFreeCourses != 100) {
            $this->graphTableData['Free Courses Hours']['value'] =  gmdate("H", $this->business->achievementStatus(new Published22HrsOfFreeCourses())->points);
        } elseif ($Published32HrsOfFreeCourses != 100) {
            $this->graphTableData['Free Courses Hours']['value'] =  gmdate("H", $this->business->achievementStatus(new Published32HrsOfFreeCourses())->points);
        } else {
            $this->graphTableData['Free Courses Hours']['value'] =  gmdate("H", $this->business->achievementStatus(new Published41HrsOfFreeCourses())->points);
        }
        $this->graphTableData['Free Courses Hours']['unit'] = "Hrs";
        $this->graphTableData['Free Courses Hours']['displayName'] = "F.Courses";
        $this->graphTableData['Free Courses Hours']['tier']['Talented']['allowed'] = gmdate("H", (new Published3HrsOfFreeCourses())->getPoints());
        $this->graphTableData['Free Courses Hours']['tier']['Skilled']['allowed'] = gmdate("H", (new Published12HrsOfFreeCourses())->getPoints());
        $this->graphTableData['Free Courses Hours']['tier']['Expert']['allowed'] = gmdate("H", (new Published22HrsOfFreeCourses())->getPoints());
        $this->graphTableData['Free Courses Hours']['tier']['Master']['allowed'] = gmdate("H", (new Published32HrsOfFreeCourses())->getPoints());
        $this->graphTableData['Free Courses Hours']['tier']['Partner']['allowed'] = gmdate("H", (new Published41HrsOfFreeCourses())->getPoints());
        //END table in graph work (Free Courses Hours)
        //START table in graph work (Free Courses)
        if ($Published3FreeCourses != 100) {
            $this->graphTableData['Free Courses']['value'] =  $this->business->achievementStatus(new Published3FreeCourses())->points;
        } elseif ($Published6FreeCourses != 100) {
            $this->graphTableData['Free Courses']['value'] =  $this->business->achievementStatus(new Published6FreeCourses())->points;
        } elseif ($Published11FreeCourses != 100) {
            $this->graphTableData['Free Courses']['value'] =  $this->business->achievementStatus(new Published11FreeCourses())->points;
        } elseif ($Published16FreeCourses != 100) {
            $this->graphTableData['Free Courses']['value'] =  $this->business->achievementStatus(new Published16FreeCourses())->points;
        } else {
            $this->graphTableData['Free Courses']['value'] =  $this->business->achievementStatus(new Published23FreeCourses())->points;
        }
        $this->graphTableData['Free Courses']['unit'] = "N";
        $this->graphTableData['Free Courses']['displayName'] = "F.Courses";
        $this->graphTableData['Free Courses']['tier']['Talented']['allowed'] = (new Published3FreeCourses())->getPoints();
        $this->graphTableData['Free Courses']['tier']['Skilled']['allowed'] = (new Published6FreeCourses())->getPoints();
        $this->graphTableData['Free Courses']['tier']['Expert']['allowed'] = (new Published11FreeCourses())->getPoints();
        $this->graphTableData['Free Courses']['tier']['Master']['allowed'] = (new Published16FreeCourses())->getPoints();
        $this->graphTableData['Free Courses']['tier']['Partner']['allowed'] = (new Published23FreeCourses())->getPoints();
        //END table in graph work (Free Courses)

        if ($this->business->tier_id != 1) {
            //START Graph Work
            foreach ($this->business->tier->achievements as $ach) {
                $this->currentTierAchievementsPercentage[] = $this->business->achievementProgressPercentage(new $ach->class_name());
            }
            //END Graph Work
            //START Features Table Work
            foreach ($this->business->tier->features as $feature) {
                $this->tiersFeatures[$feature->id] =
                    ["key" => $feature->id, "label" => $feature->label, "value" => $feature->consumable ? number_format($feature->pivot->allowed - $this->business->tierTierFeatures()->where('tier_tier_feature_id', $feature->pivot->id)->first()->pivot->consumed) : '-', 'unit' => $feature->unit, 'allowed' => $feature->consumable ? number_format($feature->pivot->allowed) : ($feature->pivot->allowed ? 'Yes' : 'No'), "popup" => $feature->popup];
            }
            //END Features Table Work
        } else {
            $this->currentTierAchievementsPercentage = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        }
        $this->CurrentTierIncentives = $this->tiersFeatures;



        //START Graph Work
        $nextTierId = $this->business->tier_id + 1;
        $nextTier = Tier::find($nextTierId);
        if ($nextTier) {
            foreach ($nextTier->achievements as $n) {
                $this->nextTierAchievementsPercentage[] = $this->business->achievementProgressPercentage(new $n->class_name());
            }
        }
        //END Graph Work
        // dd($this->nextTierAchievementsPercentage,$this->currentTierAchievementsPercentage);


        return view('livewire.incentives-component');
    }

    public function saveRewardPost()
    {
        $this->validate();
        $this->videoErrorMessage = null;
        // $tierFeature = TierFeature::find($this->selectedTierFeatureId);
        $tierFeaturePost = TierFeaturePost::create([
            'content' => $this->content,
            'tier_feature_id' => $this->selectedTierFeatureId,
        ]);

        //increment Consumed
        $tierTierFeature = $this->business->tier->features()->where('tier_feature_id', $this->selectedTierFeatureId)->first()->pivot;
        $businessTierTierFeature = $this->business->tierTierFeatures()->where('tier_tier_feature_id', $tierTierFeature->id)->first()->pivot;

        if ($this->media) {
            $extension = strtolower($this->media->getClientOriginalExtension());
            $video_validate_arr = ['mp4', 'mkv'];
            //handle Video
            if (in_array($extension, $video_validate_arr)) {
                $track = (new GetId3())->analyze($this->media->getRealPath());
                $duration = $track['playtime_seconds'];
                $isValidated = (round($duration) > 1500) ? false : true;
                if ($isValidated) {
                    $tierFeaturePost->addMedia($this->media->getRealPath())
                        ->usingName($this->media->getClientOriginalName())
                        ->preservingOriginal()
                        ->toMediaCollection();
                } else {
                    return $this->videoErrorMessage = 'The Video Duration is bigger than 25 Minute';
                }
            } else {
                $tierFeaturePost->addMedia($this->media->getRealPath())
                    ->usingName($this->media->getClientOriginalName())
                    ->preservingOriginal()
                    ->toMediaCollection();
            }
        }
        if ($this->selectedTierFeatureId == 4) {
            if ($this->business->tier_id == 6) {
                $businessTierTierFeature->increment('consumed', 25);
            } else {
                $businessTierTierFeature->increment('consumed', $tierTierFeature->allowed);
            }
        } elseif ($this->selectedTierFeatureId == 5) {
            if ($this->business->tier_id == 6) {
                $businessTierTierFeature->increment('consumed', 48);
            } else {
                $businessTierTierFeature->increment('consumed', $tierTierFeature->allowed);
            }
        } else {
            $businessTierTierFeature->increment('consumed');
        }
        $this->uploadPopup = false;
        $this->reset('content', 'media');
        // return redirect(request()->header('Referer'));
    }
}
