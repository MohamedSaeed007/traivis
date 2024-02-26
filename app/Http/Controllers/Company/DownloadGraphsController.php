<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyDepartment;
use App\Models\CompanyPosition;
use App\Models\CompanyProject;
use App\Models\CompanyRequiredCourse;
use Illuminate\Support\Facades\Session;

class DownloadGraphsController extends Controller
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
            ->size(['width' => 340, 'height' => 100])
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
            ->size(['width' => 350, 'height' => 100])
            ->labels(['Required', 'Valid & Expired'])
            ->datasets([
                [
                    'label'                => 'Required',
                    'backgroundColor'      => ['rgba(0,123,255,0.8)', 'rgba(0,128,0,0.7)'],
                    // 'borderColor' => ['rgba(54, 162, 235, 0.6)', 'rgba(0,128,0,0.6)'],
                    'hoverBackgroundColor' => ['rgba(0,123,255,1)', 'rgba(0,128,0,1)'],
                    'data'                 => [$total_n, $valid_n],
                ],
                [
                    'label'                => 'Expired',
                    'backgroundColor'      => ['rgba(255,0,0,0.7)', 'rgba(255,0,0,0.7)'],
                    // 'borderColor' => ['rgba(255,0,0,0.6)', 'rgba(255,0,0,0.6)'],
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
        // return $projectNames;
        //return $expiredCerts;
        // return $validCerts;
        // return $aboutToExpiredCerts;
        // return $withoutCerts;

        // return $totalCerts;

        $graph3 = app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 100])
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
                    'data'                      => $totalCerts,
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

        $graph4 = app()->chartjs
            ->name('barChart1')
            ->type('bar')
            ->size(['width' => 400, 'height' => 100])
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

        return view('company.downloadGraphs', compact('graph1', 'graph2', 'graph3', 'graph4', 'graph5', 'positions'));
    }
}
