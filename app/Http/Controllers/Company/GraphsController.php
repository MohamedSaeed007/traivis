<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyDepartment;
use App\Models\CompanyPosition;
use App\Models\CompanyProject;
use App\Models\CompanyRequiredCourse;
use App\Models\RequiredCourseWorkforce;
use App\Models\User;
use App\Models\WorkforceDepartment;
use App\Models\WorkforcePosition;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GraphsController extends Controller
{
    public function index()
    {

        //*************************************************************percentage of all certs in all depts********************************************************************* */
        $company_id = Session::get('company_id');
        // return $company_id;
        $courses = CompanyRequiredCourse::with('expiredWorkForceCourse', 'validWorkForceCourse', 'aboutToExpireCourse',
            'totaldWorkForceCourse')->where('company_id', $company_id)->get();
        foreach ($courses as $course) {
            $total[] = count($course->totaldWorkForceCourse);
            $valid[] = count($course->validWorkForceCourse);
            $expired[] = count($course->expiredWorkForceCourse);
            $about[] = count($course->aboutToExpireCourse);
        }
        if ($total[] = 0) {
            $total = 0;
        } else {
        }
        if ($valid[] = 0) {
            $valid = 0;
        } else {
        }
        if ($expired[] = 0) {
            $expired = 0;
        } else {
        }
        if ($about[] = 0) {
            $about = 0;
        } else {
        }
        // return $total;
        $total_n = array_sum($total);

        $valid_n = array_sum($valid);
        $expired_n = array_sum($expired);
        $about_n = array_sum($about);
        if ($total_n > 0) {
            $ex_percentage = number_format(array_sum($expired) / $total_n * 100, 2);
            $valid_percentage = number_format(array_sum($valid) / $total_n * 100, 2);
            $about_percentage = number_format(array_sum($about) / $total_n * 100, 2);
        } else {
            $ex_percentage = 0;
            $valid_percentage = 0;
            $about_percentage = 0;
        }

        $graph1 = app()->chartjs
            ->name('pieChartTest')
            ->type('polarArea')
            ->size(['width' => 340, 'height' => 200])
            ->labels([
                'Total Expired Courses ('.$ex_percentage.'%)',
                'Close To Be Expired ('.$about_percentage.'%)',
                'Total Valid Courses ('.$valid_percentage.'%)',
            ])
            ->datasets([
                [
                    'backgroundColor'      => ['rgba(255, 0, 0, 0.7)', 'rgba(255,255,0,0.7)	', 'rgba(0,128,0,0.7)'],
                    'hoverBackgroundColor' => ['rgba(255, 0, 0,1)', 'rgba(255,255,0,1)', 'rgba(0,128,0,1)'],
                    'data'                 => [$ex_percentage, $about_percentage, $valid_percentage],
                ],
            ])
            ->options([

            ]);

        // return view('company.test_graphs', compact('graph1'));
        //*********************************************************end of percentage of all certs in all depts********************************************************************* */

        //*************************************************************percentage of expired certs in all depts********************************************************************* */
        $ninteenDay = date('Y-m-d', strtotime('+90 days'));

        //5   blue
        //return $req_certificates ;
        $graph2 = app()->chartjs
            ->name('barChartTest')
            ->type('bar')
            ->size(['width' => 350, 'height' => 140])
            ->labels(['Required', 'Valid & Expired'])
            ->datasets([
                [
                    'label'                => 'Required',
                    'backgroundColor'      => ['rgba(0,123,255,0.8)', 'rgba(0,128,0,0.7)'],
                    'hoverBackgroundColor' => ['rgba(0,123,255,1)', 'rgba(0,128,0,1)'],
                    'data'                 => [$total_n, $valid_n],
                ],
                [
                    'label'                => 'Expired',
                    'backgroundColor'      => ['rgba(255,0,0,0.7)', 'rgba(255,0,0,0.7)'],
                    'hoverBackgroundColor' => ['rgba(255,0,0,1)', 'rgba(255,0,0,1)'],
                    'data'                 => [0, $expired_n],
                ],

            ])
            ->options([
                // 'borderWidth' => 3,
                'indexAxis' => 'y',
                'y'         => [
                    'stacked' => true,

                ],
                'x'         => [
                    'stacked' => true,

                ],
            ]);
        //*********************************************************end of percentage of expired certs in all depts********************************************************************* */
        //*************************************************************all certs in all projects********************************************************************* */
        $projects = CompanyProject::with('total_coursesWorkForce', 'expired_courses', 'valid_courses',
            'aboutToExpireCourse')
            ->where('company_id', $company_id)->get();
        foreach ($projects as $project) {
            $projectNames[] = $project->en_project;
            $totalCerts[] = count($project->total_coursesWorkForce);
            $expiredCerts[] = count($project->expired_courses);
            $validCerts[] = count($project->valid_courses);
            $aboutToExpiredCerts[] = count($project->aboutToExpireCourse);
        }
        if ($projectNames[] = '' || $totalCerts[] = '' || $expiredCerts[] = '' || $validCerts[] = '' || $aboutToExpiredCerts[] = '') {
            $projectNames = '';
            $totalCerts = '';
            $expiredCerts = '';
            $validCerts = '';
            $aboutToExpiredCerts = '';
        } else {
        }

        $graph3 = app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 170])
            ->labels($projectNames)
            ->datasets([
                [
                    'label'                     => 'Total',
                    'backgroundColor'           => 'rgba(0,123,255,1)',
                    'borderColor'               => 'rgba(0,123,255,1)',
                    'pointBorderColor'          => 'rgba(0,123,255,1)',
                    'pointBackgroundColor'      => 'rgba(0,123,255,1)',
                    'pointHoverBackgroundColor' => 'rgba(0,123,255,1)',
                    'pointHoverBorderColor'     => 'rgba(0,123,255,1)',

                    'data' => $totalCerts,
                ],
                [
                    'label'                     => 'Total',
                    'backgroundColor'           => 'rgba(0,128,0,1)',
                    'borderColor'               => 'rgba(0,128,0,1)',
                    'pointBorderColor'          => 'rgba(0,128,0,1)',
                    'pointBackgroundColor'      => 'rgba(0,128,0,1)',
                    'pointHoverBackgroundColor' => 'rgba(0,128,0,1)',
                    'pointHoverBorderColor'     => 'rgba(0,128,0,1)',
                    'data'                      => $validCerts,
                ],
                [
                    'label'                     => 'Close To Expire',
                    'backgroundColor'           => 'rgba(255,255,0,1)',
                    'borderColor'               => 'rgba(255,255,0,1)',
                    'pointBorderColor'          => 'rgba(255,255,0,1)',
                    'pointBackgroundColor'      => 'rgba(255,255,0,1)',
                    'pointHoverBackgroundColor' => 'rgba(255,255,0,1)',
                    'pointHoverBorderColor'     => 'rgba(255,255,0,1)',
                    'data'                      => $aboutToExpiredCerts,
                ],
                [
                    'label'                     => 'Total',
                    'backgroundColor'           => 'rgba(255,0,0,1)',
                    'borderColor'               => 'rgba(255,0,0,1)',
                    'pointBorderColor'          => 'rgba(255,0,0,1)',
                    'pointBackgroundColor'      => 'rgba(255,0,0,1)',
                    'pointHoverBackgroundColor' => 'rgba(255,0,0,1)',
                    'pointHoverBorderColor'     => 'rgba(255,0,0,1)',
                    'data'                      => $expiredCerts,
                ],

            ])
            ->options([

            ]);
        //*************************************************************End of all certs in all projects********************************************************************* */

        //*************************************************************all certs in all positions********************************************************************* */
        $positions = CompanyPosition::with('total_coursesWorkForce', 'expired_courses', 'valid_courses',
            'aboutToExpireCourse')
            ->where('company_id', $company_id)->get();
        foreach ($positions as $position) {
            $positionsNames[] = $position->position_en;
            $totalPositionCerts[] = count($position->total_coursesWorkForce);
            $expiredPositionCerts[] = count($position->expired_courses);
            $validPositionCerts[] = count($position->valid_courses);
            $aboutToExpiredPositionCerts[] = count($position->aboutToExpireCourse);
        }
        if ($positionsNames[] = '' || $totalPositionCerts[] = '' || $expiredPositionCerts[] = '' || $validPositionCerts[] = '' || $aboutToExpiredPositionCerts[] = '') {
            $positionsNames = '';
            $totalPositionCerts = '';
            $expiredPositionCerts = '';
            $validPositionCerts = '';
            $aboutToaboutToExpiredPositionCertsExpiredCerts = '';
        } else {
        }
        $graph4 = app()->chartjs
            ->name('barChart1')
            ->type('bar')
            ->size(['width' => 400, 'height' => 170])
            ->labels($positionsNames)
            ->datasets([
                [
                    'label'                => 'Total',
                    'backgroundColor'      => ['rgba(0,123,255,0.9)'],
                    // 'borderColor' => ['rgba(54, 162, 235, 0.6)'],
                    'hoverBackgroundColor' => ['rgba(0,123,255,1)'],
                    'data'                 => $totalPositionCerts,
                ],
                [
                    'label'                => 'Valid',
                    'backgroundColor'      => ['rgba(0,128,0,0.7)'],
                    // 'borderColor' => ['rgba(0,128,0,0.6)'],
                    'hoverBackgroundColor' => ['rgba(0,128,0,1)'],
                    'data'                 => $validPositionCerts,
                ],
                [
                    'label'                => 'Close To Expire',
                    'backgroundColor'      => ['rgba(255,255,0,0.7)'],
                    // 'borderColor' => ['rgba(255,255,0,0.7)'],
                    'hoverBackgroundColor' => ['rgba(255,255,0,1)'],
                    'data'                 => $aboutToExpiredPositionCerts,
                ],
                [
                    'label'                => 'Expired',
                    'backgroundColor'      => ['rgba(255,0,0,0.7)'],
                    // 'borderColor' => ['rgba(255,0,0,0.6)'],
                    'hoverBackgroundColor' => ['rgba(255,0,0,1)'],
                    'data'                 => $expiredPositionCerts,
                ],

            ])
            ->options([
                // 'borderWidth' => 2,
            ]);
        //*************************************************************End of all certs in all positions********************************************************************* */

        //************************************************percentage of valid an ex certs for all departments********************************************************************* */
        $departments = CompanyDepartment::with('total_coursesWorkForce')->where('company_id', $company_id)->get();
        foreach ($departments as $department) {
            $departmentsNames[] = $department->en_department;
            $departmentsIds[] = $department->id;

            $perDepartmentsTotalCerts[] = $department->total_coursesWorkForce->count();
            if ($total_n > 0) {
                $expiredDepartmentsCerts[] = number_format(count($department->expired_courses) / $total_n * 100, 2);
            } else {
                $expiredDepartmentsCerts[] = 0;
            }
        }
        if ($departmentsNames[] = '' || $expiredDepartmentsCerts[] = '') {
            $departmentsNames = '';
            $expiredDepartmentsCerts = '';
        } else {
        }
        // return $expiredDepartmentsCerts;
        $graph5 = app()->chartjs
            ->name('pieChartTest3')
            ->type('radar')
            ->size(['width' => 400, 'height' => 200])
            ->labels($departmentsNames)
            ->datasets([
                [
                    'label'           => 'Expired',
                    'backgroundColor' => ['rgba(255, 0, 0, 0.3)'],
                    'borderColor'     => ['rgba(255, 0, 0,0.5)'],
                    'data'            => $expiredDepartmentsCerts,
                ],

            ])
            ->options([
                'borderWidth' => 3,
                'propagate'   => false,
                'target'      => 'chart-analyser',
                'intersect'   => false,
                'type'        => 'time',

            ]);
        //********************************************End of percentage of valid an ex certs for all departments********************************************************************* */

        return view('company.company-dashboard',
            compact('graph1', 'graph2', 'graph3', 'graph4', 'graph5', 'positions'));
    }

    public function show($id)
    {
        //*************************************************************certs for each positions********************************************************************* */
        $company_id = Session::get('company_id');
        $positions = CompanyPosition::with('total_coursesWorkForce', 'expired_courses', 'valid_courses',
            'aboutToExpireCourse')
            ->where('company_id', $company_id)
            ->find($id);

        $perPositionTotalCerts = $positions->total_coursesWorkForce->count();
        if ($perPositionTotalCerts > 0) {
            $perPositionValidCerts = $positions->valid_courses->count();
            $perPositionAboutToExCerts = $positions->aboutToExpireCourse->count();
            $perPositionExCerts = $positions->expired_courses->count();

            $positionTotalPercent = number_format($perPositionTotalCerts / $perPositionTotalCerts * 100, 2);
            $positionValidPercent = number_format($perPositionValidCerts / $perPositionTotalCerts * 100, 2);
            $positionAboutToExPercent = number_format($perPositionAboutToExCerts / $perPositionTotalCerts * 100, 2);
            $positionExPercent = number_format($perPositionExCerts / $perPositionTotalCerts * 100, 2);
        } else {
            $perPositionTotalCerts = 0;
            $perPositionValidCerts = 0;
            $perPositionAboutToExCerts = 0;
            $perPositionExCerts = 0;
            $positionTotalPercent = 0;
            $positionValidPercent = 0;
            $positionAboutToExPercent = 0;
            $positionExPercent = 0;
        }

        // return $perPositionTotalCerts;

        $graph6 = app()->chartjs
            ->name('pieChart')
            ->type('doughnut')
            ->size(['width' => 400, 'height' => 200])
            ->labels([
                'Total Expired Certificates '.'('.$positionExPercent.'%)',
                'About To Be Expired Certificates '.'('.$positionAboutToExPercent.'%)',
                'Total Valid Certificates '.'('.$positionValidPercent.'%)',
            ])
            ->datasets([
                [
                    'backgroundColor'      => ['rgba(255, 0, 0, 0.7)', 'rgba(255,255,0,0.7)	', 'rgba(0,128,0,0.7)'],
                    'hoverBackgroundColor' => ['rgba(255, 0, 0,1)', 'rgba(255,255,0,1)', 'rgba(0,128,0,1)'],
                    'data'                 => [$positionExPercent, $positionAboutToExPercent, $positionValidPercent],

                ],
            ])
            ->options([

            ]);
        //*************************************************End of certs for per positions********************************************************************* */
        //****************************************************Employees certs In Each Position********************************************************************* */

        $users = WorkforcePosition::with('users')->where('position_id', $id)->orderBy('user_id')->get();
        foreach ($users as $item) {
            $users_names[] = $item->users->name;
            $users_ids[] = $item->users->id;
        }
        //return $users_ids;
        $data = User::with('expiredWorkForceCourse', 'validWorkForceCourse', 'aboutToExpireCourse')->whereIn('id',
            $users_ids)->get();
        foreach ($data as $item) {
            $users_ex_certs[] = '-'.count($item->expiredWorkForceCourse);
            $users_valid_certs[] = count($item->validWorkForceCourse);
            $users_about_certs[] = count($item->aboutToExpireCourse);
        }
        // return $users_valid_certs;

        $graph9 = app()->chartjs
            ->name('barChart9')
            ->type('bar')
            ->size(['width' => 400, 'height' => 187.5])
            ->labels($users_names)
            ->datasets([
                [
                    'label'           => 'Expired',
                    'backgroundColor' => ['rgba(255, 0, 0, 0.6)'],
                    'data'            => $users_ex_certs,
                ],
                [
                    'label'           => 'Valid',
                    'backgroundColor' => ['rgba(0,128,0,0.7)'],
                    'data'            => $users_valid_certs,
                ],
                [
                    'label'           => 'Close to Ex',
                    'backgroundColor' => ['rgba(255,255,0,0.6)'],
                    'data'            => $users_about_certs,
                ],

            ])
            ->options([
                'y'       => [
                    'stacked' => true,
                ],
                'x'       => [
                    'stacked' => true,
                ],
                'plugins' => [
                    'title' => [
                        'display' => true,

                    ],
                ],

            ]);

        //****************************************************End Of Employees certs In Each Position********************************************************************* */

        return view(
            'company.graphPositionsShow',
            compact('positions', 'data', 'positionTotalPercent', 'positionValidPercent', 'positionExPercent',
                'positionAboutToExPercent', 'graph6', 'graph9')
        );
    }

    public function downloadPosition($id)
    {
        //*************************************************************certs for each positions********************************************************************* */
        $company_id = Session::get('company_id');
        $positions = CompanyPosition::with('total_coursesWorkForce', 'expired_courses', 'valid_courses',
            'aboutToExpireCourse')
            ->where('company_id', $company_id)
            ->find($id);

        $perPositionTotalCerts = $positions->total_coursesWorkForce->count();
        if ($perPositionTotalCerts > 0) {
            $perPositionValidCerts = $positions->valid_courses->count();
            $perPositionAboutToExCerts = $positions->aboutToExpireCourse->count();
            $perPositionExCerts = $positions->expired_courses->count();

            $positionTotalPercent = number_format($perPositionTotalCerts / $perPositionTotalCerts * 100, 2);
            $positionValidPercent = number_format($perPositionValidCerts / $perPositionTotalCerts * 100, 2);
            $positionAboutToExPercent = number_format($perPositionAboutToExCerts / $perPositionTotalCerts * 100, 2);
            $positionExPercent = number_format($perPositionExCerts / $perPositionTotalCerts * 100, 2);
        } else {
            $perPositionTotalCerts = 0;
            $perPositionValidCerts = 0;
            $perPositionAboutToExCerts = 0;
            $perPositionExCerts = 0;
            $positionTotalPercent = 0;
            $positionValidPercent = 0;
            $positionAboutToExPercent = 0;
            $positionExPercent = 0;
        }

        // return $perPositionTotalCerts;

        $graph6 = app()->chartjs
            ->name('pieChart')
            ->type('doughnut')
            ->size(['width' => 400, 'height' => 200])
            ->labels([
                'Total Expired Certificates '.'('.$positionExPercent.'%)',
                'About To Be Expired Certificates '.'('.$positionAboutToExPercent.'%)',
                'Total Valid Certificates '.'('.$positionValidPercent.'%)',
            ])
            ->datasets([
                [
                    'backgroundColor'      => ['rgba(255, 0, 0, 0.7)', 'rgba(255,255,0,0.7)	', 'rgba(0,128,0,0.7)'],
                    'hoverBackgroundColor' => ['rgba(255, 0, 0,1)', 'rgba(255,255,0,1)', 'rgba(0,128,0,1)'],
                    'data'                 => [$positionExPercent, $positionAboutToExPercent, $positionValidPercent],

                ],
            ])
            ->options([

            ]);
        //*************************************************End of certs for per positions********************************************************************* */
        //****************************************************Employees certs In Each Position********************************************************************* */

        $users = WorkforcePosition::with('users')->where('position_id', $id)->orderBy('user_id')->get();
        foreach ($users as $item) {
            $users_names[] = $item->users->name;
            $users_ids[] = $item->users->id;
        }
        //return $users_ids;
        $data = User::with('expiredWorkForceCourse', 'validWorkForceCourse', 'aboutToExpireCourse')->whereIn('id',
            $users_ids)->get();
        foreach ($data as $item) {
            $users_ex_certs[] = '-'.count($item->expiredWorkForceCourse);
            $users_valid_certs[] = count($item->validWorkForceCourse);
            $users_about_certs[] = count($item->aboutToExpireCourse);
        }
        // return $users_valid_certs;

        $graph9 = app()->chartjs
            ->name('barChart9')
            ->type('bar')
            ->size(['width' => 400, 'height' => 140])
            ->labels($users_names)
            ->datasets([
                [
                    'label'           => 'Expired',
                    'backgroundColor' => ['rgba(255, 0, 0, 0.6)'],
                    'data'            => $users_ex_certs,
                ],
                [
                    'label'           => 'Valid',
                    'backgroundColor' => ['rgba(0,128,0,0.7)'],
                    'data'            => $users_valid_certs,
                ],
                [
                    'label'           => 'Close to Ex',
                    'backgroundColor' => ['rgba(255,255,0,0.6)'],
                    'data'            => $users_about_certs,
                ],

            ])
            ->options([
                'y'       => [
                    'stacked' => true,
                ],
                'x'       => [
                    'stacked' => true,
                ],
                'plugins' => [
                    'title' => [
                        'display' => true,

                    ],
                ],

            ]);

        //****************************************************End Of Employees certs In Each Position********************************************************************* */

        return view(
            'company.downloadPosition',
            compact('positions', 'data', 'positionTotalPercent', 'positionValidPercent', 'positionExPercent',
                'positionAboutToExPercent', 'graph6', 'graph9')
        );
    }

    public function showProject($id)
    {
        //********************************************************get all depts(its certs) in a specific project********************************************************************* */
        $projects = CompanyProject::find($id);
        $deptsInAproject = DB::table('company_projects')
            ->where('company_projects.id', $id)
            ->join('required_course_workforces', 'required_course_workforces.project_id', 'company_projects.id')
            ->join('company_departments', 'required_course_workforces.department_id', 'company_departments.id')
            ->distinct()
            ->select('company_departments.en_department', 'company_departments.id')
            ->orderBy('id')
            ->get();
        foreach ($deptsInAproject as $dept) {
            $deptsBelongsToAproject[] = $dept->en_department;
            $res_id[] = $dept->id;
        }
        // return $res_id;
        $ss = RequiredCourseWorkforce::where('project_id', $id)->distinct()->get('project_id');
        //return $ss;
        $ExpiredCoursesInDepts = CompanyDepartment::with('total_coursesWorkForce', 'expired_courses', 'valid_courses',
            'aboutToExpireCourse')
            ->whereIn('company_departments.id', $res_id)
            ->get();
        foreach ($ExpiredCoursesInDepts as $item) {
            $total_ARR[] = count($item->total_coursesWorkForce);
            $valid_ARR[] = count($item->valid_courses);
            $AboutToEx_ARR[] = count($item->aboutToExpireCourse);
            $ex_ARR[] = count($item->expired_courses);
        }
        //return $ex_ARR;
        $graph7 = app()->chartjs
            ->name('barChart7')
            ->type('bar')
            ->size(['width' => 400, 'height' => 187.5])
            ->labels($deptsBelongsToAproject)
            ->datasets([
                [
                    'label'           => 'Total',
                    'backgroundColor' => ['rgba(54, 162, 235, 0.7)'],

                    'hoverBackgroundColor' => ['rgba(54, 162, 235, 1)'],
                    'data'                 => $total_ARR,
                ],
                [
                    'label'           => 'Valid',
                    'backgroundColor' => ['rgba(0,128,0,0.7)'],

                    'hoverBackgroundColor' => ['rgba(0,128,0,1)'],
                    'data'                 => $valid_ARR,
                ],
                [
                    'label'           => 'Close To Expire',
                    'backgroundColor' => ['rgba(255,255,0,0.7)'],

                    'hoverBackgroundColor' => ['rgba(255,255,0,1)'],
                    'data'                 => $AboutToEx_ARR,
                ],
                [
                    'label'           => 'Expired',
                    'backgroundColor' => ['rgba(255,0,0,0.7)'],

                    'hoverBackgroundColor' => ['rgba(255,0,0,1)'],
                    'data'                 => $ex_ARR,
                ],
            ])
            ->options([

            ]);
        //********************************************************end of get all depts(its certs) in a specific project********************************************************************* */
        //********************************************************get all positions(its certs) in a specific project********************************************************************* */
        $positionsInAproject = DB::table('company_projects')
            ->where('company_projects.id', $id)
            ->join('required_course_workforces', 'required_course_workforces.project_id', 'company_projects.id')
            ->join('company_positions', 'required_course_workforces.position_id', 'company_positions.id')
            ->distinct()
            ->select('company_positions.position_en', 'company_positions.id')
            ->orderBy('id')
            ->get();
        foreach ($positionsInAproject as $position) {
            $positionsBelongsToAproject[] = $position->position_en;
            $res_positions_id[] = $position->id;
        }
        //return $res_positions_id;

        $ExpiredCoursesInPositions = CompanyPosition::with('total_coursesWorkForce', 'aboutToExpireCourse')
            ->whereIn('id', $res_positions_id)->get();
        foreach ($ExpiredCoursesInPositions as $item) {
            $total_positions_ARR[] = count($item->total_coursesWorkForce);

            $AboutToEx_positions_ARR[] = count($item->aboutToExpireCourse);
            $ex_positions_ARR[] = count($item->expired_courses);
        }
        // return $AboutToEx_positions_ARR;
        $graph8 = app()->chartjs
            ->name('pieChart3')
            ->type('radar')
            ->size(['width' => 400, 'height' => 200])
            ->labels($positionsBelongsToAproject)
            ->datasets([
                [
                    'label'           => 'Expired',
                    'backgroundColor' => ['rgba(255, 0, 0, 0.3)'],
                    'borderColor'     => ['rgba(255, 0, 0,0.5)'],
                    'data'            => $ex_positions_ARR,
                ],
                [
                    'label'           => 'Close To Expired',
                    'backgroundColor' => ['rgba(255,255,0,0.3)'],
                    'borderColor'     => ['rgba(255,255,0,0.5)'],
                    'data'            => $AboutToEx_positions_ARR,
                ],

            ])
            ->options([
                'borderWidth' => 3,
                'propagate'   => false,
                'target'      => 'chart-analyser',
                'intersect'   => false,
                'type'        => 'time',

            ]);

        //****************************************************end of get all positions(its certs) in a specific project********************************************************************* */

        return view('company.graphProjectsShow',
            compact('projects', 'graph7', 'deptsInAproject', 'ExpiredCoursesInDepts', 'ExpiredCoursesInPositions',
                'graph8'));
    }

    public function downloadProject($id)
    {
        //********************************************************get all depts(its certs) in a specific project********************************************************************* */
        $projects = CompanyProject::find($id);
        $deptsInAproject = DB::table('company_projects')
            ->where('company_projects.id', $id)
            ->join('required_course_workforces', 'required_course_workforces.project_id', 'company_projects.id')
            ->join('company_departments', 'required_course_workforces.department_id', 'company_departments.id')
            ->distinct()
            ->select('company_departments.en_department', 'company_departments.id')
            ->orderBy('id')
            ->get();
        foreach ($deptsInAproject as $dept) {
            $deptsBelongsToAproject[] = $dept->en_department;
            $res_id[] = $dept->id;
        }
        // return $res_id;
        $ss = RequiredCourseWorkforce::where('project_id', $id)->distinct()->get('project_id');
        //return $ss;
        $ExpiredCoursesInDepts = CompanyDepartment::with('total_coursesWorkForce', 'expired_courses', 'valid_courses',
            'aboutToExpireCourse')
            ->whereIn('company_departments.id', $res_id)
            ->get();
        foreach ($ExpiredCoursesInDepts as $item) {
            $total_ARR[] = count($item->total_coursesWorkForce);
            $valid_ARR[] = count($item->valid_courses);
            $AboutToEx_ARR[] = count($item->aboutToExpireCourse);
            $ex_ARR[] = count($item->expired_courses);
        }
        //return $ex_ARR;
        $graph7 = app()->chartjs
            ->name('barChart7')
            ->type('bar')
            ->size(['width' => 400, 'height' => 187.5])
            ->labels($deptsBelongsToAproject)
            ->datasets([
                [
                    'label'           => 'Total',
                    'backgroundColor' => ['rgba(54, 162, 235, 0.7)'],

                    'hoverBackgroundColor' => ['rgba(54, 162, 235, 1)'],
                    'data'                 => $total_ARR,
                ],
                [
                    'label'           => 'Valid',
                    'backgroundColor' => ['rgba(0,128,0,0.7)'],

                    'hoverBackgroundColor' => ['rgba(0,128,0,1)'],
                    'data'                 => $valid_ARR,
                ],
                [
                    'label'           => 'Close To Expire',
                    'backgroundColor' => ['rgba(255,255,0,0.7)'],

                    'hoverBackgroundColor' => ['rgba(255,255,0,1)'],
                    'data'                 => $AboutToEx_ARR,
                ],
                [
                    'label'           => 'Expired',
                    'backgroundColor' => ['rgba(255,0,0,0.7)'],

                    'hoverBackgroundColor' => ['rgba(255,0,0,1)'],
                    'data'                 => $ex_ARR,
                ],
            ])
            ->options([

            ]);
        //********************************************************end of get all depts(its certs) in a specific project********************************************************************* */
        //********************************************************get all positions(its certs) in a specific project********************************************************************* */
        $positionsInAproject = DB::table('company_projects')
            ->where('company_projects.id', $id)
            ->join('required_course_workforces', 'required_course_workforces.project_id', 'company_projects.id')
            ->join('company_positions', 'required_course_workforces.position_id', 'company_positions.id')
            ->distinct()
            ->select('company_positions.position_en', 'company_positions.id')
            ->orderBy('id')
            ->get();
        foreach ($positionsInAproject as $position) {
            $positionsBelongsToAproject[] = $position->position_en;
            $res_positions_id[] = $position->id;
        }
        //return $res_positions_id;

        $ExpiredCoursesInPositions = CompanyPosition::with('total_coursesWorkForce', 'aboutToExpireCourse')
            ->whereIn('id', $res_positions_id)->get();
        foreach ($ExpiredCoursesInPositions as $item) {
            $total_positions_ARR[] = count($item->total_coursesWorkForce);

            $AboutToEx_positions_ARR[] = count($item->aboutToExpireCourse);
            $ex_positions_ARR[] = count($item->expired_courses);
        }
        // return $AboutToEx_positions_ARR;
        $graph8 = app()->chartjs
            ->name('pieChart3')
            ->type('radar')
            ->size(['width' => 400, 'height' => 200])
            ->labels($positionsBelongsToAproject)
            ->datasets([
                [
                    'label'           => 'Expired',
                    'backgroundColor' => ['rgba(255, 0, 0, 0.3)'],
                    'borderColor'     => ['rgba(255, 0, 0,0.5)'],
                    'data'            => $ex_positions_ARR,
                ],
                [
                    'label'           => 'Close To Expired',
                    'backgroundColor' => ['rgba(255,255,0,0.3)'],
                    'borderColor'     => ['rgba(255,255,0,0.5)'],
                    'data'            => $AboutToEx_positions_ARR,
                ],

            ])
            ->options([
                'borderWidth' => 3,
                'propagate'   => false,
                'target'      => 'chart-analyser',
                'intersect'   => false,
                'type'        => 'time',

            ]);

        //****************************************************end of get all positions(its certs) in a specific project********************************************************************* */

        return view('company.downloadProject',
            compact('projects', 'graph7', 'deptsInAproject', 'ExpiredCoursesInDepts', 'ExpiredCoursesInPositions',
                'graph8'));
    }

    public function showDepartment($id)
    {
        //****************************************************Employees certs In Each Department********************************************************************* */
        $departments = CompanyDepartment::find($id);
        $users = WorkforceDepartment::with('users')->where('department_id', $id)->orderBy('user_id')->get();
        foreach ($users as $item) {
            $users_depts_names[] = $item->users->name;
            $users_depts_ids[] = $item->users->id;
        }
        // return $users_depts_ids;
        $data_depts = User::with('expiredWorkForceCourse', 'validWorkForceCourse', 'aboutToExpireCourse')->whereIn('id',
            $users_depts_ids)->get();
        foreach ($data_depts as $item) {
            $users_depts_ex_certs[] = count($item->expiredWorkForceCourse);
            $users_depts_valid_certs[] = count($item->validWorkForceCourse);
            $users_depts_about_certs[] = count($item->aboutToExpireCourse);
        }

        $graph10 = app()->chartjs
            ->name('barChart10')
            ->type('bar')
            ->size(['width' => 400, 'height' => 200])
            ->labels($users_depts_names)
            ->datasets([

                [
                    'label'           => 'Valid',
                    'backgroundColor' => ['rgba(0,128,0,0.7)'],
                    'data'            => $users_depts_valid_certs,
                ],
                [
                    'label'           => 'Close to Ex',
                    'backgroundColor' => ['rgba(255,255,0,0.6)'],
                    'data'            => $users_depts_about_certs,
                ],
                [
                    'label'           => 'Expired',
                    'backgroundColor' => ['rgba(255, 0, 0, 0.6)'],
                    'data'            => $users_depts_ex_certs,
                ],

            ])
            ->options([

                'indexAxis' => 'y',
                'y'         => [
                    'stacked' => true,

                ],
                'x'         => [
                    'stacked' => true,

                ],
            ]);
        //****************************************************End Of Employees certs In Each Department********************************************************************* */
        return view('company.graphDepartmentsShow', compact('graph10', 'departments', 'data_depts'));
    }

    public function downloadDepartment($id)
    {
        //****************************************************Employees certs In Each Department********************************************************************* */
        $departments = CompanyDepartment::find($id);
        $users = WorkforceDepartment::with('users')->where('department_id', $id)->orderBy('user_id')->get();
        foreach ($users as $item) {
            $users_depts_names[] = $item->users->name;
            $users_depts_ids[] = $item->users->id;
        }
        // return $users_depts_ids;
        $data_depts = User::with('expiredWorkForceCourse', 'validWorkForceCourse', 'aboutToExpireCourse')->whereIn('id',
            $users_depts_ids)->get();
        foreach ($data_depts as $item) {
            $users_depts_ex_certs[] = count($item->expiredWorkForceCourse);
            $users_depts_valid_certs[] = count($item->validWorkForceCourse);
            $users_depts_about_certs[] = count($item->aboutToExpireCourse);
        }

        $graph10 = app()->chartjs
            ->name('barChart10')
            ->type('bar')
            ->size(['width' => 400, 'height' => 200])
            ->labels($users_depts_names)
            ->datasets([

                [
                    'label'           => 'Valid',
                    'backgroundColor' => ['rgba(0,128,0,0.7)'],
                    'data'            => $users_depts_valid_certs,
                ],
                [
                    'label'           => 'Close to Ex',
                    'backgroundColor' => ['rgba(255,255,0,0.6)'],
                    'data'            => $users_depts_about_certs,
                ],
                [
                    'label'           => 'Expired',
                    'backgroundColor' => ['rgba(255, 0, 0, 0.6)'],
                    'data'            => $users_depts_ex_certs,
                ],

            ])
            ->options([

                'indexAxis' => 'y',
                'y'         => [
                    'stacked' => true,

                ],
                'x'         => [
                    'stacked' => true,

                ],
            ]);
        //****************************************************End Of Employees certs In Each Department********************************************************************* */
        return view('company.downloadDepartment', compact('graph10', 'departments', 'data_depts'));
    }
}
