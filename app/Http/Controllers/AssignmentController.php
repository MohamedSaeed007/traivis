<?php

namespace App\Http\Controllers;

use App\Models\AssignmentSubmission;
use App\Models\Content;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AssignmentController extends Controller
{
    /**
     * @return Factory|View
     *
     * Assignments for the instructors
     */
    public function index(Request $request)
    {
        $title = __t('assignments');
        $user = Auth::user();
        $assignmentType = $request->assignment_type;
        $courses = $user->courses()->has('assignments')->get();
        if ($assignmentType == 'assignment_type') {
            $courses = $user->assignedTrainerCourses()->has('assignments')->get();
        }

        return view(theme('dashboard.assignments.index'), compact('title', 'courses'));
    }

    /**
     * @param $course_id
     * @return Factory|View
     *
     * View all assignments
     */
    public function assignmentsByCourse($course_id)
    {
        $title = __t('assignments');
        $course = Course::find($course_id);
        $assignments = $course->assignments()->with('submissions')->paginate(50);

        return view(theme('dashboard.assignments.assignments'), compact('title', 'course', 'assignments'));
    }

    public function submissions($assignment_id)
    {
        $title = __('assignment_submissions');
        $assignment = Content::find($assignment_id);
        $submissions = $assignment->submissions()->paginate(50);

        return view(theme('dashboard.assignments.submissions'), compact('title', 'assignment', 'submissions'));
    }

    /**
     * @param $submission_id
     * @return Factory|View
     *
     * All submission for the quiz
     */
    public function submission($submission_id)
    {
        $title = __t('submission');
        $submission = AssignmentSubmission::find($submission_id);

        return view(theme('dashboard.assignments.submission'), compact('title', 'submission'));
    }

    /**
     * @param  Request  $request
     * @param $submission_id
     * @return RedirectResponse
     *
     * @throws ValidationException
     *
     * Evaluating the quiz
     */
    public function evaluation(Request $request, $submission_id)
    {
        $submission = AssignmentSubmission::find($submission_id);
        $max_number = $submission->assignment->option('total_number');

        $rules = ['give_numbers' => "required|numeric|max:{$max_number}"];
        $this->validate($request, $rules);

        $user_id = Auth::user()->id;
        $time_now = Carbon::now()->toDateTimeString();

        $data = [
            'instructor_id'    => $user_id,
            'earned_numbers'   => $request->give_numbers,
            'instructors_note' => clean_html($request->evaluation_notes),
            'is_evaluated'     => 1,
            'evaluated_at'     => $time_now,
        ];

        $submission->update($data);

        return redirect()->back();
    }
}
