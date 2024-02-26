<div class="p-5" style="display: none;" x-show="open" x-transition:enter="transition-opacity ease-linear"
    x-transition:enter-end="opacity-100" x-transition:enter-start="opacity-0"
    x-transition:leave="transition-opacity ease-linear" x-transition:leave-end="opacity-0"
    x-transition:leave-start="opacity-100">

    <!--collapse content-->
    <div class="flex flex-row flex-wrap p-2">

        <!--course information-->
        <div class="mb-5 w-full whitespace-nowrap md:w-1/2">
            <div class="mb-2 p-1 text-sm font-bold text-gray-500">
                Enroll
                Info
            </div>

            <div class="space-y-3 px-3">

                <div
                    class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                    <p class="w-1/2">
                        Booked
                        on
                    </p>
                    <p class="w-1/2">
                        {{ Carbon\Carbon::parse($course->launch_at)->format('Y-m-d') }}
                    </p>
                </div>

                <div
                    class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                    <p class="w-1/2">
                        Completed
                        on
                    </p>
                    <p class="w-1/2">
                        @if ($complete = $course->completes()->where('user_id', $studentId)->first())
                            {{ Carbon\Carbon::parse($complete->completed_at)->format('Y-m-d') }}
                        @endif
                    </p>
                </div>

                <div
                    class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                    <p class="w-1/2">
                        Highest
                        Score
                    </p>
                    <p class="w-1/2">
                        {{ $course->attempts->where('user_id', $studentId)->max('earned_percentage') }}
                        %
                    </p>
                </div>

                <div
                    class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                    <p class="w-1/2">
                        Course
                        Price
                    </p>
                    <p class="w-1/2">
                        @php
                            $course_price = optional($course->transactions->where('payerable_id', $studentId)->where('payerable_type', User::class))->product_price ?? 0;
                        @endphp
                        <span class="text-sm font-bold text-green-500">
                            {{ $course_price > 0 ? '$' . $course_price : 'Free' }}
                        </span>
                    </p>
                </div>

                <div @click="openTab = 'quiz'"
                    class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                    <p class="w-1/2">
                        Quiz
                        Attempts
                    </p>
                    <p class="w-1/2">
                        {{ $course->attempts->where('user_id', $studentId)->count() }}
                    </p>
                </div>

                <div @click="openTab = 'assign'"
                    class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                    <p class="w-1/2">
                        Assignments
                    </p>
                    <p class="w-1/2">
                        {{ $course->assignments->where('user_id', $studentId)->count() }}
                    </p>
                </div>

                <div @click="openTab = 'attends'"
                    class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                    <p class="w-1/2">
                        Attendance
                        Rate
                    </p>
                    <p class="w-1/2">
                        @php
                            $lecture_durations = 0;
                            $total_student_attended_minutes = 0;
                            $attending_lectures = $course
                                ->lectures()
                                ->with([
                                    'users' => function ($q) use ($studentId) {
                                        $q->where('users.id', $studentId);
                                    },
                                ])
                                ->get();
                            $total_student_attended_minutes_ratio = 0;
                            foreach ($attending_lectures as $single_lecture) {
                                if (!isset($single_lecture->users[0])) {
                                    continue;
                                }
                                $lecture_durations = $lecture_durations + ($single_lecture->instructor_attended_minutes == 0 ? $single_lecture->duration : $single_lecture->instructor_attended_minutes);
                                $total_student_attended_minutes = $total_student_attended_minutes + $single_lecture->users[0]->pivot->attended_minutes;
                                $total_student_attended_minutes_ratio = $lecture_durations == 0 ? 0 : $total_student_attended_minutes / $lecture_durations;
                            }
                        @endphp
                        <span
                            title="Attended: {{ $total_student_attended_minutes }} minutes of Lecture total durations: {{ $lecture_durations }} minutes">
                            {{ number_format($total_student_attended_minutes_ratio * 100, 2) }}
                        </span>
                        %
                    </p>
                </div>

                <div @click="openTab = 'cert'"
                    class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                    <p class="w-1/2">
                        Certificate
                    </p>
                    <p class="w-1/2">

                    </p>
                </div>

            </div>
        </div>

        <!--tables-->
        <div class="w-full whitespace-nowrap md:w-1/2">

            <!--Quiz Attempts-->
            <div x-show="openTab === 'quiz'" class="overflow-y-auto" x-data="{ stuQuiz: false }">
                <p class="mb-3 font-bold">
                    Quiz
                    Attempts
                </p>
                <div class="shadow-dashboard rounded-xl border">
                    <table class="min-w-full text-center">
                        <thead class="border-b-4 border-gray-300">
                            <tr class="bg-traivis-50 font-medium">
                                <td class="px-6 py-3">
                                    Quiz
                                </td>
                                <td class="hidden px-6 py-3 lg:inline-block">
                                    Attempt
                                    Date
                                </td>
                                <td class="px-6 py-3">
                                    Score
                                </td>
                                <td class="px-6 py-3">
                                    Status
                                </td>
                            </tr>
                        </thead>

                        <tbody class="cursor-pointer">
                            @foreach ($course->attempts->where('user_id', $studentId) as $attempt)
                                <tr class="hover:bg-traivis-50"
                                    wire:click="$emit('openQuizReviewModal','{{ $attempt->id }}')">
                                    <td class="p3-6 py-3">
                                        {{ $attempt->quiz->title ?? '' }}
                                    </td>
                                    <td class="hidden px-3 py-3 lg:inline-block">
                                        {{ \Carbon\Carbon::parse($attempt->created_at)->format('Y-m-d') }}
                                    </td>
                                    <td class="px-3 py-3">
                                        {{ $attempt->status != 'pending' ? $attempt->earned_percentage : 0 }}
                                        %
                                    </td>
                                    <td
                                        class="{{ $attempt->status == 'passed' ? 'text-green-500 font-bold' : '' }} {{ $attempt->status == 'failed' ? 'text-red-500 font-bold' : '' }} {{ $attempt->status == 'pending' ? 'text-yellow-500 font-bold' : '' }} px-6 py-3">
                                        {{ $attempt->status }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!---->

            <!-- Assignments-->
            <div x-show="openTab === 'assign'" class="overflow-y-auto">
                <p class="mb-3 font-bold">
                    Assignments
                </p>
                <div class="shadow-dashboard rounded-xl border">
                    <table class="min-w-full text-center">
                        <thead class="border-b-4 border-gray-300">
                            <tr class="bg-traivis-50 font-medium">
                                <td class="px-3 py-3">
                                    Assignment
                                </td>
                                <td class="px-3 py-3">
                                    Due
                                    Date
                                </td>
                                <td class="px-3 py-3">
                                    Status
                                </td>
                            </tr>
                        </thead>
                        <tbody class="cursor-pointer">
                            {{-- @foreach ($student->assignments->where('course_id', $course->id) as $assignment)
                            <tr wire:click="$emit('openAssignmentReviewModal','{{ $assignment->id }}')"
                                class="hover:bg-traivis-50">
                                <td class="p3-6 py-3">
                                    {{ $assignment->title ?? '' }}
                                </td>
                                <td class="px-3 py-3">
                                    @if ($assignment->options['validity_option'] == 'until')
                                        {{ \Carbon\Carbon::parse($assignment->options['until'])->format('Y-m-d') }}
                                    @else
                                        {{ $assignment->pivot->end_time ? \Carbon\Carbon::parse($assignment->pivot->end_time)->format('Y-m-d') : 'Not Started' }}
                                    @endif
                                </td>
                                <td class="px-3 py-3">
                                    @if ($assignment->pivot?->assignment_submission_date)
                                        @if ($assignment->pivot->status == 'Accepted')
                                            <p class="font-bold text-green-500">
                                                Passed
                                                <br>
                                                Grade
                                                :
                                                {{ $assignment->pivot->grade }}
                                            </p>
                                        @endif
                                        @if ($assignment->pivot->status == 'Rejected')
                                            <p class="font-bold text-red-500">
                                                Failed
                                                <br>
                                                Grade
                                                :
                                                {{ $assignment->pivot->grade }}
                                            </p>
                                        @endif
                                        @if ($assignment->pivot->status == 'Pending')
                                            <p class="font-bold text-yellow-500">
                                                Submitted
                                                <br>
                                                {{ \Carbon\Carbon::parse($assignment->pivot->assignment_submission_date)->format('Y-m-d') }}
                                            </p>
                                        @endif
                                    @else
                                        @if ($assignment->pivot->end_time && \Carbon\Carbon::parse($assignment->pivot->end_time)->format('Y-m-d') < now())
                                            <p class="font-bold text-red-500">
                                                Expired
                                            </p>
                                        @else
                                            <p class="font-bold">
                                                Viewed
                                                by
                                                student<br>
                                                but
                                                not
                                                submitted
                                                yet
                                            </p>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
            <!---->

            <!--Attendance Rate-->
            {{-- <div x-show="openTab === 'attends'" class="overflow-y-auto">
            <livewire:dashboard.students.course-enroll-info-attendance-rate-component :course_id="$course->id"
                :student_id="$studentId" wire:key="c-{{ $course->id }}-s-{{ $studentId }}-attends" />
        </div> --}}
            <!---->

            <!-- Certificates-->
            {{-- <div x-show="openTab === 'cert'" class="">
            <livewire:dashboard.students.course-enroll-info-certificate-component :attendance_ratio="$total_student_attended_minutes_ratio"
                :course="$course" :studentId="$studentId"
                wire:key="c-{{ $course->id }}-s-{{ $studentId }}-certs" />
        </div> --}}
            <!---->

        </div>
        <!--End Tables-->

    </div>
    <!--END collapse content-->
</div>
