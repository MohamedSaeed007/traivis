<div>
    <p class="mb-3 font-bold">
        Attendance
        Rate
    </p>
    <div class="shadow-dashboard rounded-xl border">
        {{--        @if ($errors->any()) --}}
        {{--            @dump($errors->getBags()) --}}
        {{--        @endif --}}

        {{--        <button wire:click="$refresh"> refresh</button> --}}
        {{--        @dump($student_attended_lectures) --}}
        <table class="min-w-full text-center">
            <thead class="border-b-4 border-gray-300">
                <tr class="bg-traivis-50 font-medium">
                    <td class="px-6 py-3">
                        Lectures
                    </td>
                    <td class="hidden px-6 py-3 lg:inline-block">
                        Date
                    </td>
                    <td class="px-6 py-3">
                        <span title="Delivery Mode">DM (?)</span>
                    </td>
                    <td class="px-6 py-3">
                        <span title="Attendance Rate">AR (?)</span>
                    </td>
                    <td class="px-6 py-3">
                        <span title="Student Attended Duration">IAD (?)</span>
                        <span title="Instructor Attended Duration">SAD (?)</span>/
                    </td>
                </tr>
            </thead>
            <tbody class="cursor-pointer">
                @forelse ($student_attended_lectures as $index=>$student_attended_lecture)
                    <tr class="hover:bg-traivis-50"
                        wire:key="lecture-record-{{ $student_attended_lecture['id'] }}">
                        <td class="p3-6 py-3">
                            {{ $student_attended_lecture['title'] }}
                        </td>
                        <td class="hidden px-3 py-3 lg:inline-block">
                            {{ Carbon\Carbon::parse($student_attended_lecture['drip_datetime'])->toDateString() }}
                        </td>
                        <td class="px-6 py-3">
                            {{ config('enums.delivery_modes.' . $student_attended_lecture['delivery_mode'] . '.name') }}
                        </td>

                        @php
                            //                            if (isset($student_attended_lecture->users[0])) {
                            //                                $total_student_attended_minutes = $student_attended_lecture->users[0]->pivot->attended_minutes;
                            //                                $lecture_duration = $student_attended_lecture->instructor_attended_minutes == 0 ? $student_attended_lecture->duration : $student_attended_lecture->instructor_attended_minutes;
                            //                            } else {
                            //                                $lecture_duration = 0;
                            //                                $total_student_attended_minutes = 0;
                            //                            }
                        @endphp

                        <td class="px-3 py-3">
                            <span
                                title="Attended: {{ $student_attended_lecture['student_attended_total_minutes'] }} minutes of Lecture duration:{{ $student_attended_lecture['student_attended_total_minutes'] }} minutes">
                                {{ number_format($student_attended_lecture['instructor_attended_total_minutes'] ? ($student_attended_lecture['student_attended_total_minutes'] / $student_attended_lecture['instructor_attended_total_minutes']) * 100 : 0, 2) }}</span>
                            %
                        </td>
                        <td class="px-6">
                            <div>
                                @if ($student_attended_lecture['editable_attended_minutes'])
                                    <span
                                        wire:key="lecture-record-{{ $student_attended_lecture['id'] }}-field">
                                        <input type="number" min="0" max="24"
                                            class="{{ $this->getErrorClass('student_attended_lectures.' . $index . '.student_attended_hours') }} w-16"
                                            wire:model="student_attended_lectures.{{ $index }}.student_attended_hours">:
                                        <input type="number" min="0" max="60"
                                            class="{{ $this->getErrorClass('student_attended_lectures.' . $index . '.student_attended_minutes') }} w-16"
                                            wire:model="student_attended_lectures.{{ $index }}.student_attended_minutes">
                                    </span>
                                @else
                                    <span
                                        wire:key="lecture-record-{{ $student_attended_lecture['id'] }}-hours">
                                        {{ $student_attended_lecture['student_attended_hours'] }}

                                    </span>:<span
                                        wire:key="lecture-record-{{ $student_attended_lecture['id'] }}-minutes">
                                        {{ $student_attended_lecture['student_attended_minutes'] }}

                                    </span>
                                @endif
                                /
                                <input type="number" min="0"
                                    class="{{ $this->getErrorClass('student_attended_lectures.' . $index . '.instructor_attended_hours') }} w-16"
                                    wire:model="student_attended_lectures.{{ $index }}.instructor_attended_hours">:
                                <input type="number" min="0"
                                    class="{{ $this->getErrorClass('student_attended_lectures.' . $index . '.instructor_attended_minutes') }} w-16"
                                    wire:model="student_attended_lectures.{{ $index }}.instructor_attended_minutes">
                            </div>
                            <div>
                                @error('student_attended_lectures.' . $index .
                                    '.student_attended_total_minutes')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            No lectures
                        </td>
                    </tr>
                @endforelse
                @if (count($student_attended_lectures) && $isDirty)
                    <tr>
                        <td colspan="5">
                            <button type="button" wire:click="saveEditedDurations">Save</button>
                            <button type="button" wire:click="cancelEditedDurations">Cancel</button>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
