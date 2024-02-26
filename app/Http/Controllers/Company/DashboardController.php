<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyRequiredCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        if (session()->has('language')) {
            $value = Session::get('language');
        }

        return $value;
    }

    public function getComplianceGraphData(Request $request)
    {
        $company_id = Session::get('company_id');

        $data = CompanyRequiredCourse::leftjoin('required_course_workforces as CW', 'CW.course_id',
            'company_required_courses.id')
            ->where('company_id', $company_id)
            ->where('company_required_courses.status', 1)->get();

        $arrChart = [];
        $i = 0;

        foreach ($data as $item) {
            $total_count = 0;
            $expired_count = 0;
            $expiring_count = 0;
            $valid_count = 0;
            $arrChart[$i]['valid'] = $valid_count;
            $arrChart[$i]['expired'] = $total_count;
            $arrChart[$i]['expiring'] = $expired_count;
            $i++;
        }

        return $arrChart;
    }

    public function graphs()
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
            // ->size(['width' => 340, 'height' => 200])
            ->labels(['Total Expired Courses', 'Close To Be Expired', 'Total Valid Courses'])
            ->datasets([
                [
                    'backgroundColor'      => ['rgba(255, 0, 0, 0.7)', 'rgba(255,255,0,0.7)	', 'rgba(0,128,0,0.7)'],
                    'hoverBackgroundColor' => ['rgba(255, 0, 0,1)', 'rgba(255,255,0,1)', 'rgba(0,128,0,1)'],
                    'data'                 => [$ex_percentage, $about_percentage, $valid_percentage],
                ],
            ])
            ->options([]);

        return view('company.company-dashboard', compact('graph1'));
    }
}
