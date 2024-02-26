<div>
    @if ($isMaker)
        <div class="bg-green-50 py-1 text-center capitalize text-green-500">The Instructor’s view</div>
    @endif

    @if ($enrolled || $isMaker)
        @if ($quiz->content->section->id == $quiz->course->sections()->first()->id)
            <div class="relative px-6 text-gray-500">
                <!--name-->
                <p class="flex items-center gap-x-3 truncate bg-white text-2xl font-bold">
                    <svg fill="currentColor" class="h-6 w-6 shrink-0" viewBox="0 0 24 24">
                        <path
                            d="M20,10.5a10.01,10.01,0,0,0-2,.273A5.006,5.006,0,0,0,13,6h-.272A9.929,9.929,0,0,0,13,4,4,4,0,0,0,5,4a9.929,9.929,0,0,0,.272,2H5a5,5,0,0,0-5,5v8a5,5,0,0,0,5,5H6.224a.772.772,0,0,0,.748-.975C6.623,21.766,6,21,6,20a3,3,0,0,1,6,0c0,1-.632,1.768-.973,3.029a.772.772,0,0,0,.748.971H13a5,5,0,0,0,5-5v-.772a10.02,10.02,0,0,0,2,.272,4,4,0,0,0,0-8Z">
                        </path>
                    </svg>
                    You will be eligable for coruse refund after this content
                </p>
                <!--/name-->
            </div>
        @else
            @if ($quiz->course->transactions()->where('payerable_id', $user->id)->first()->is_refundable)
                @livewire('confirm-continue-course', ['courseId' => $quiz->course->id])
            @endif
        @endif
        <!-- Quiz -->
        <div class="relative px-6 text-gray-500" x-data="{
            Start: @entangle('quizStarted'),
            Status: @entangle('status'),
            endTimeValue: @entangle('endTime'),
            quizSubmitted: @entangle('quizSubmitted'),
            Score: '',
            quizEnded: 0,
            endTime: null,
            remaining: null,
            init() {
                this.endTime = new Date(this.endTimeValue * 1000);
                this.setRemaining();
                if (this.Start) {
                    this.startTimer();
                }
            },
            startTimer() {
                setInterval(() => {
                    if (!this.quizEnded && this.Status == 'Active') {
                        this.setRemaining();
                    } else {
                        if (this.Status == 'Active') {
                            this.Status = 'Expired';
                        }
                    }
                }, 1000);
            },
            setRemaining() {
                const diff = this.endTime - new Date().getTime();
                this.remaining = parseInt(diff / 1000);
                if (diff <= 0) {
                    this.remaining = 0;
                    this.quizEnded = 1;
                }
            },
            days() {
                return {
                    value: this.remaining / 86400,
                    remaining: this.remaining % 86400
                };
            },
            hours() {
                return {
                    value: this.days().remaining / 3600,
                    remaining: this.days().remaining % 3600
                };
            },
            minutes() {
                return {
                    value: this.hours().remaining / 60,
                    remaining: this.hours().remaining % 60
                };
            },
            seconds() {
                return {
                    value: this.minutes().remaining,
                };
            },
            format(value) {
                return ('0' + parseInt(value)).slice(-2)
            },
            time() {
                return {
                    days: this.format(this.days().value),
                    hours: this.format(this.hours().value),
                    minutes: this.format(this.minutes().value),
                    seconds: this.format(this.seconds().value),
                }
            }
        }">
            <!-- header -->
            <div
                class="sticky top-0 z-10 flex w-full flex-1 flex-wrap items-center justify-between gap-y-3 bg-white py-4">
                <!--info-->
                <div
                    class="flex w-full flex-row items-center justify-center gap-x-8 gap-y-3 md:justify-between lg:w-auto">
                    <!--Name-->
                    <div class="">
                        <p
                            class="flex items-center gap-x-3 truncate whitespace-nowrap bg-white text-2xl">
                            <svg fill="currentColor" class="h-6 w-6 shrink-0" viewBox="0 0 24 24">
                                <path
                                    d="M12.836,.028C9.361-.202,5.961,1.066,3.509,3.521,1.057,5.977-.211,9.378,.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.096,.454,12.836,.028Zm-.933,18.972c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5,.672,1.5,1.5-.672,1.5-1.5,1.5Zm1.928-6.512c-.521,.287-.928,.951-.928,1.512,0,.553-.448,1-1,1s-1-.447-1-1c0-1.285,.807-2.627,1.963-3.264,.763-.42,1.157-1.254,1.004-2.125-.138-.786-.81-1.458-1.596-1.596-.605-.107-1.196,.049-1.657,.435-.454,.382-.714,.94-.714,1.532,0,.553-.448,1-1,1s-1-.447-1-1c0-1.185,.521-2.301,1.428-3.063,.908-.762,2.107-1.078,3.289-.874,1.613,.283,2.938,1.607,3.221,3.221,.298,1.699-.509,3.396-2.009,4.223Z">
                                </path>
                            </svg>
                            <span class="text-justify font-bold">{{ $quiz->title }}</span>
                        </p>
                    </div>
                    <!--/Name-->
                    <!--info-->
                    <div class="hidden sm:block">
                        <div
                            class="flex flex-row items-center justify-between gap-x-5 bg-white font-semibold">
                            <!--Attempts-->
                            <x-tooltip-arrow-up text="Attempts"
                                class="flex w-fit items-center justify-center gap-x-2 whitespace-nowrap">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="m23 11a1 1 0 0 0 -1 1 10.034 10.034 0 1 1 -2.9-7.021.862.862 0 0 1 -.1.021h-3a1 1 0 0 0 0 2h3a3 3 0 0 0 3-3v-3a1 1 0 0 0 -2 0v2.065a11.994 11.994 0 1 0 4 8.935 1 1 0 0 0 -1-1z">
                                    </path>
                                    <path
                                        d="m12 6a1 1 0 0 0 -1 1v5a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414l-2.707-2.707v-4.586a1 1 0 0 0 -1-1z">
                                    </path>
                                </svg>
                                <p class="">{{ $quiz->attempts->count() }}<span class=""> /
                                    </span>{{ $quiz->options['attempts_limit'] }}
                                </p>
                            </x-tooltip-arrow-up>
                            <!--/Attempts-->

                            <!--Duration-->
                            <x-tooltip-arrow-up text="Duration"
                                class="group relative flex w-fit items-center justify-center gap-x-2 whitespace-nowrap">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm4,13h-4c-.552,0-1-.447-1-1V6c0-.553,.448-1,1-1s1,.447,1,1v5h3c.553,0,1,.447,1,1s-.447,1-1,1Z">
                                    </path>
                                </svg>
                                <p class="">{{ $quiz->options['time_limit'] }}<span
                                        class="text-xs">
                                        Min</span></p>
                            </x-tooltip-arrow-up>
                            <!--/Duration-->

                            <!--Pass Points-->
                            <x-tooltip-arrow-up text="Pass Points"
                                class="group relative flex w-fit items-center justify-center gap-x-2 whitespace-nowrap">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="m18,12c-3.314,0-6,2.686-6,6s2.686,6,6,6,6-2.686,6-6-2.686-6-6-6Zm3.192,6.202l-2.213,2.124c-.452.446-1.052.671-1.653.671s-1.203-.225-1.663-.674l-1.132-1.109c-.395-.387-.4-1.02-.014-1.414.386-.396,1.019-.401,1.414-.014l1.131,1.108c.144.142.379.139.522-.002l2.223-2.134c.397-.382,1.031-.371,1.414.029.382.398.369,1.031-.029,1.414Zm-11.192-.202c0-2.39,1.048-4.534,2.709-6h-7.709c-.553,0-1-.447-1-1s.447-1,1-1h8c.553,0,1,.447,1,1,0,.024-.001.048-.003.072,1.177-.682,2.544-1.072,4.003-1.072v-5c0-2.757-2.243-5-5-5H5C2.243,0,0,2.243,0,5v14c0,2.757,2.243,5,5,5h7.709c-1.661-1.466-2.709-3.61-2.709-6ZM5,5h8c.553,0,1,.447,1,1s-.447,1-1,1H5c-.553,0-1-.447-1-1s.447-1,1-1Zm2,12h-2c-.553,0-1-.447-1-1s.447-1,1-1h2c.553,0,1,.447,1,1s-.447,1-1,1Z">
                                    </path>
                                </svg>
                                <p class="">{{ $quiz->options['passing_score'] }}<span
                                        class="text-xs">
                                        Ps</span></p>
                            </x-tooltip-arrow-up>
                            <!--/Pass Points-->

                            <!--Total Points-->
                            <x-tooltip-arrow-up text="Total Points"
                                class="group relative flex w-fit items-center justify-center gap-x-2 whitespace-nowrap">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="m14 7v-6.54a6.977 6.977 0 0 1 2.465 1.59l3.484 3.486a6.954 6.954 0 0 1 1.591 2.464h-6.54a1 1 0 0 1 -1-1zm8 3.485v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515c.163 0 .324.013.485.024v6.976a3 3 0 0 0 3 3h6.976c.011.161.024.322.024.485zm-5.276 3.826a1 1 0 0 0 -1.413-.035l-3.6 3.431a1 1 0 0 1 -1.456-.04l-1.589-1.414a1 1 0 0 0 -1.332 1.494l1.544 1.374a3 3 0 0 0 4.226.017l3.585-3.414a1 1 0 0 0 .035-1.413z">
                                    </path>
                                </svg>
                                <p class="">{{ $quiz->questions->sum('score') }}<span
                                        class="text-xs">
                                        Ps</span></p>
                            </x-tooltip-arrow-up>
                            <!--/Total Points-->
                        </div>
                    </div>
                    <!--/info-->
                </div>
                <!--/info-->
                <!--Countdown-->
                <x-tooltip-arrow-up text="Remaining Time" class="w-full md:w-auto">
                    <div
                        class="group relative cursor-pointer rounded-lg border border-slate-300 bg-slate-100 bg-opacity-50 px-3 transition-all hover:scale-105 hover:bg-white">
                        <!--Percentage-->
                        <div
                            class="group-hover: absolute inset-0 -z-10 w-[80%] rounded-lg bg-gradient-to-r from-traivis-200 via-violet-200 to-pink-200 transition-all">
                        </div>
                        <!--/Percentage-->

                        <!--Counts-->
                        <div class="z-0 flex w-full items-center justify-between gap-x-6">
                            <div class="flex items-center justify-center gap-x-1">
                                <p class="text-lg font-bold" x-text="time().days">00</p>
                                <p class="text-sm font-semibold">Days</p>
                            </div>
                            <div class="flex items-center justify-center gap-x-1">
                                <p class="text-lg font-bold" x-text="time().hours">23</p>
                                <p class="text-sm font-semibold">Hrs</p>
                            </div>
                            <div class="flex items-center justify-center gap-x-1">
                                <p class="text-lg font-bold" x-text="time().minutes">59</p>
                                <p class="text-sm font-semibold">Mins</p>
                            </div>
                            <div class="flex items-center justify-center gap-x-1">
                                <p class="text-lg font-bold" x-text="time().seconds">43</p>
                                <p class="text-sm font-semibold">Secs</p>
                            </div>
                        </div>
                        <!--/Counts-->
                    </div>
                </x-tooltip-arrow-up>
                <!--/Countdown-->
            </div>
            <!-- /header -->
            <!--Content-->
            <div class="container mx-auto mt-5 flex flex-col gap-y-10">
                <!--  desc -->
                <div class="">
                    <p class="bg-white font-bold">
                        Description
                    </p>
                    <p class="bg-white">
                        {{ $quiz->description }} </p>
                </div>
                <!--END  desc-->

                @auth
                    <!--Start Quiz-->
                    @if ($quiz->attempts->count() < $quiz->options['attempts_limit'])
                        <div x-show="!Start || Status === 'Failed' || Status === 'Expired'"
                            class="mb-20 flex justify-center">
                            <button wire:click="startQuiz"
                                class="group/r peer z-0 mx-auto inline-flex w-fit items-center justify-center gap-x-2 rounded-full border border-transparent bg-gradient-to-br from-traivis-500 to-violet-500 px-2 py-2 text-base font-medium leading-4 text-white shadow-sm transition hover:scale-110 hover:to-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                type="button">
                                <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                    <path
                                        d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                                    </path>
                                </svg>
                                <span class="whitespace-nowrap font-bold"
                                    x-text="Status === 'Failed' || Status === 'Expired' ? 'New Attempt' : 'Start Quiz'"></span>
                            </button>
                        </div>
                    @endif
                    <!--/Start Quiz-->
                    <!--Questions content-->
                    <div x-show="Start" class="mt-10 flex w-full flex-col" style="display: none;">
                        <!--Questions label-->
                        <p class="mb-8 py-4 text-center text-lg font-bold text-slate-500">Please answer the
                            following questions</p>
                        <!--/Questions label-->
                        <!--Questions-->
                        <div class="flex w-full flex-col gap-y-8">
                            @foreach ($quiz->questions as $questionKey => $question)
                                <div class="group/q relative mx-auto flex w-full max-w-4xl flex-col justify-between rounded-lg border p-5 transition-all"
                                    id="q-{{ $question->id }}" x-data="{
                                        qAnswer: @entangle('answers.' . $question->id . '.answer'),
                                        openQ: @entangle('answersExpanded.' . $question->id),
                                        isCorrect: @entangle('answers.' . $question->id . '.is_correct'),
                                        Comment: false
                                    }"
                                    :class="quizSubmitted ? [
                                        (isCorrect === false ?
                                            'border-red-500' : isCorrect === true ?
                                            'border-green-600' : ''),
                                        (qAnswer && isCorrect == null ? 'border-yellow-500' : '')
                                    ] : 'border-slate-300'">
                                    <!--Q Description-->
                                    <p
                                        class="absolute -top-2.5 left-3 rounded-full bg-white px-3 text-sm font-semibold transition-all hover:scale-105">
                                        {{ $question->type == 'opened' ? 'Type your answer' : 'Choose the correct answer' }}
                                        {{ $questionConditions[$question->id] == null
                                            ? ''
                                            : '(' .
                                                ($questionConditions[$question->id] == 'multiple_corrects'
                                                    ? 'Multi-correct answers'
                                                    : 'A single correct answer') .
                                                ')' }}
                                    </p>
                                    <!--/Q Description-->
                                    <!--Q header-->
                                    <button @click="openQ = !openQ"
                                        class="flex flex-row items-center justify-between">
                                        <!--The Question-->
                                        <p class="flex items-center gap-x-3 bg-white font-bold">
                                            <span
                                                :class="[(openQ ? 'bg-traivis-500' : 'bg-slate-400'), (
                                                    isCorrect ===
                                                    false &&
                                                    quizSubmitted ?
                                                    'bg-red-500 group-hover/q:bg-red-500' :
                                                    'bg-traivis-500'
                                                ), (isCorrect && quizSubmitted ?
                                                    'bg-green-600 group-hover/q:bg-green-600 animate-[bounce_0.7s_ease-in-out_1]' :
                                                    'bg-traivis-500'), (qAnswer && isCorrect ===
                                                    null &&
                                                    quizSubmitted ?
                                                    'bg-yellow-500 group-hover/q:bg-yellow-500 animate-[bounce_0.7s_ease-in-out_1]' :
                                                    'bg-traivis-500')]"
                                                class="flex h-7 w-7 items-center justify-center rounded-full border border-transparent text-white shadow-sm transition-all hover:border-traivis-500 group-hover/q:scale-105 group-hover/q:bg-traivis-500">
                                                {{ $questionKey + 1 }}
                                            </span>
                                            <span
                                                class="text-lg font-semibold">{{ $question->title }}</span>
                                        </p>
                                        <div class="flex flex-row">
                                            <div
                                                class="group relative block cursor-pointer overflow-hidden rounded-lg bg-gray-100">
                                                <!--Media Here-->
                                                <img src="{{ $question->getFirstMediaUrl() }}"
                                                    width="100px"
                                                    class="rounded-lg object-cover object-center transition-all">
                                                <!--/Media Here-->
                                            </div>
                                        </div>
                                        <!--The Question-->
                                        <!--Q icons-->
                                        <span class="flex items-center gap-x-3">
                                            <svg :class="qAnswer && isCorrect === null && quizSubmitted ? 'block' :
                                                'hidden'"
                                                class="h-5 w-5 text-yellow-500" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z">
                                                </path>
                                            </svg>
                                            <svg :class="isCorrect === true && quizSubmitted ? 'block' : 'hidden'"
                                                class="h-5 w-5 text-green-600" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                                                </path>
                                            </svg>
                                            <svg :class="isCorrect === false && quizSubmitted ? 'block' : 'hidden'"
                                                class="h-5 w-5 text-red-500" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12.836,.028C9.356-.207,5.961,1.067,3.509,3.521,1.057,5.977-.211,9.378,.029,12.854c.441,6.354,6.053,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.097,.454,12.836,.028Zm2.871,14.265c.391,.391,.391,1.023,0,1.414-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293l-2.293-2.293-2.293,2.293c-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.293-2.293-2.293-2.293c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.293,2.293,2.293-2.293c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414l-2.293,2.293,2.293,2.293Z">
                                                </path>
                                            </svg>
                                        </span>
                                        <!--/Q icons-->
                                    </button>
                                    <!--/Q header-->
                                    @if ($question->type == 'closed')
                                        <!--Q2 Text-Choices-->
                                        <!--Q Content-->
                                        <div x-show="openQ" class="mt-10 flex flex-col"
                                            style="display: none;">
                                            <!--Question Box-->
                                            <div x-show="!quizSubmitted"
                                                class="flex w-full flex-col gap-3">
                                                <!--text Choices-->
                                                <div class="flex flex-row flex-wrap justify-center gap-3">

                                                    @foreach ($question->options as $option)
                                                        <!--Choice-->
                                                        <div>
                                                            @if ($questionConditions[$question->id] == 'multiple_corrects')
                                                                <input id="{{ $option->id }}"
                                                                    type="checkbox"
                                                                    wire:model="answers.{{ $question->id }}.answer"
                                                                    class="peer hidden"
                                                                    value="{{ $option->id }}">
                                                            @elseif($questionConditions[$question->id] == 'single_correct')
                                                                <input id="{{ $option->id }}"
                                                                    type="radio"
                                                                    wire:model="answers.{{ $question->id }}.answer.0"
                                                                    class="peer hidden"
                                                                    value="{{ $option->id }}">
                                                            @endif
                                                            <label for="{{ $option->id }}"
                                                                class="block cursor-pointer select-none rounded-xl p-2 text-center transition-all hover:bg-slate-100 active:scale-105 peer-checked:bg-traivis-500 peer-checked:font-bold peer-checked:text-white">
                                                                <div
                                                                    class="flex w-32 flex-col justify-center">
                                                                    @if ($option->d_pref == 'image' || $option->d_pref == 'both')
                                                                        <div class="mb-2 px-3">
                                                                            <div
                                                                                class="group relative block cursor-pointer overflow-hidden rounded-lg bg-gray-100">
                                                                                <!--Media Here-->
                                                                                <img src="{{ $option->getFirstMediaUrl() }}"
                                                                                    width="100px"
                                                                                    class="rounded-lg object-cover object-center transition-all">
                                                                                <!--/Media Here-->
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($option->d_pref == 'text' || $option->d_pref == 'both')
                                                                        <p class="text-center text-sm">
                                                                            {{ $option->title }}</p>
                                                                    @endif
                                                                </div>

                                                            </label>
                                                        </div>
                                                        <!--/Choice-->
                                                    @endforeach
                                                </div>
                                                <!--/text Choices-->
                                            </div>
                                            <!--/Question Box-->
                                            <!--Answer Box-->
                                            <div x-show="quizSubmitted" class="flex w-full flex-col gap-3"
                                                style="display: none;">
                                                <!--Correct Answer-->
                                                <div class="flex flex-col justify-center gap-y-3">
                                                    <!--label-->
                                                    <div
                                                        class="mx-auto flex w-full items-center justify-center gap-x-3 bg-white text-center font-semibold">
                                                        <svg :class="isCorrect === true && quizSubmitted === true ?
                                                            'block' :
                                                            'hidden'"
                                                            class="h-5 w-5 text-green-600"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                                                            </path>
                                                        </svg>
                                                        <span
                                                            :class="isCorrect === true && quizSubmitted ===
                                                                true ?
                                                                'block' :
                                                                'hidden'">Correct
                                                            answer</span>
                                                        <svg :class="isCorrect === false && quizSubmitted === true ?
                                                            'block' :
                                                            'hidden'"
                                                            class="h-5 w-5 text-red-500"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12.836,.028C9.356-.207,5.961,1.067,3.509,3.521,1.057,5.977-.211,9.378,.029,12.854c.441,6.354,6.053,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.097,.454,12.836,.028Zm2.871,14.265c.391,.391,.391,1.023,0,1.414-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293l-2.293-2.293-2.293,2.293c-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.293-2.293-2.293-2.293c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.293,2.293,2.293-2.293c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414l-2.293,2.293,2.293,2.293Z">
                                                            </path>
                                                        </svg>
                                                        <span
                                                            :class="isCorrect === false && quizSubmitted ===
                                                                true ?
                                                                'block' :
                                                                'hidden'">Wrong
                                                            answer</span>
                                                    </div>
                                                    <!--/label-->
                                                    <!--the answer-->
                                                    <div x-show="quizSubmitted"
                                                        class="flex w-full flex-col justify-center">
                                                        <label
                                                            class="block cursor-pointer select-none rounded-xl bg-traivis-50 p-2 text-center font-bold transition-all hover:bg-slate-100">
                                                            <div class="flex flex-row items-center gap-x-3">
                                                                @php
                                                                    $qOptions = \App\Models\QuestionOption::whereIn('id', $answers[$question->id]['answer'])->get();
                                                                @endphp
                                                                @foreach ($qOptions as $qOption)
                                                                    <p
                                                                        class="mx-auto px-3 text-center text-justify text-base">
                                                                        {{ $qOption->title }}
                                                                    </p>
                                                                @endforeach
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <!--/the answer-->
                                                </div>
                                                <!--/Correct Answer-->
                                            </div>
                                            <!--/Answer Box-->
                                        </div>
                                        <!--/Q Content-->
                                        <!--/Q2 - Text-Choices-->
                                    @endif
                                    @if ($question->type == 'opened')
                                        <!--Q3 - Writing Answer-->
                                        <!--Q Content-->
                                        <div x-show="openQ" class="mt-10 flex flex-col"
                                            style="display: none;">
                                            <!--Question Box-->
                                            <div x-show="!quizSubmitted"
                                                class="flex w-full flex-col gap-3">
                                                <!--text Answer-->
                                                <div>
                                                    <textarea wire:ignore id="{{ $question->id }}"
                                                        wire:model.debounce="answers.{{ $question->id }}.answer" placeholder="Type your answer here"
                                                        class="w-full rounded-md border-slate-300 ring-0 focus:border-green-600 focus:ring-0"></textarea>
                                                </div>
                                                <!--/text Answer-->
                                            </div>
                                            <!--/Question Box-->
                                            <!--Answer Box-->
                                            <div x-show="quizSubmitted" class="flex w-full flex-col gap-3"
                                                style="display: none;">
                                                <!--Pending Result-->
                                                <div class="flex flex-col justify-center gap-y-3">
                                                    <!--label-->
                                                    <div
                                                        class="mx-auto flex w-full items-center justify-center gap-x-3 bg-white text-center font-semibold">
                                                        <svg class="h-5 w-5 text-yellow-500"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z">
                                                            </path>
                                                        </svg>
                                                        <span class="">Your answer is pending on
                                                            review</span>
                                                    </div>
                                                    <!--/label-->
                                                    <!--current answer-->
                                                    <div
                                                        class="group relative flex w-full flex-col justify-center">
                                                        <label
                                                            class="block cursor-pointer select-none rounded-xl bg-traivis-50 p-2 text-center font-bold transition-all hover:bg-slate-100">
                                                            <div class="flex flex-row items-center gap-x-3">
                                                                <p class="mx-auto px-3 text-center text-base"
                                                                    x-html="qAnswer">
                                                                </p>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <!--/current answer-->
                                                </div>
                                                <!--/Pending Result-->
                                            </div>
                                            <!--/Answer Box-->
                                        </div>
                                        <!--/Q Content-->
                                        <!--/Q3 - Writing Answer-->
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <!--/Questions-->
                    </div>
                    <!--/Questions content-->
                    <!--End of Content-->
                    <div x-show="Start" class="h-screen">
                        <p class="text-center">End of Content</p>
                    </div>
                    <!--/End of Content-->
                    <!--Navigation-->
                    <div x-data="{
                        disabled: @entangle('questionsCompleted')
                    }"
                        class="group sticky bottom-16 z-10 mx-auto w-full max-w-3xl rounded-t-3xl border border-slate-400 bg-white bg-white bg-opacity-20 px-5 py-3 pb-4 transition-all duration-300 ease-out hover:pb-7">
                        {{--                @dump($answers) --}}
                        {{--                @dump($answerResults) --}}
                        {{--                @dump($questionsCompleted) --}}
                        {{--                @dump($quizSubmitted) --}}
                        {{--                @dump($answersExpanded) --}}

                        <div class="flex flex-row items-center justify-between">
                            <!--Previous-->
                            <div class="">
                                <button type="button"
                                    :class="disabled ? 'bg-gray-500 focus:ring-gray-600 hover:bg-gray-700' :
                                        'bg-traivis-500 hover:bg-traivis-600 focus:ring-traivis-500'"
                                    class="peer z-20 inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:scale-110 focus:outline-none focus:ring-2 focus:ring-offset-1">
                                    <svg fill="currentColor" class="-ml-2 h-5 w-5" viewBox="0 0 24 24">
                                        <path
                                            d="M13.293,18.586,7.707,13a1,1,0,0,1,0-1.414L13.293,6A1,1,0,0,1,15,6.707V17.879A1,1,0,0,1,13.293,18.586Z">
                                        </path>
                                    </svg>
                                    <span class="whitespace-nowrap font-bold">Prev</span>
                                </button>
                            </div>
                            <!--/Previous-->
                            <!--submit-->
                            <div>
                                <button
                                    :disabled="disabled || Status === 'Passed' || Status === 'Failed' || Status ===
                                        'Expired'"
                                    wire:click="submitAttempt" type="button"
                                    class="group/r peer z-20 inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent px-2 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:scale-110 hover:px-4 focus:outline-none focus:ring-2 focus:ring-offset-1"
                                    :class="[(disabled || Status === 'Expired' ?
                                            'bg-gray-500 focus:ring-gray-600 hover:bg-gray-700' : ''),
                                        (Status === 'Active' && !disabled ?
                                            'bg-traivis-500 focus:ring-traivis-500 hover:bg-traivis-600' :
                                            ''
                                        ),
                                        (Status === 'Passed' && !disabled ?
                                            'bg-green-600 focus:ring-green-600 hover:bg-green-700' : ''),
                                        (Status === 'Pending' && !disabled ?
                                            'bg-yellow-600 focus:ring-yellow-600 hover:bg-yellow-700' :
                                            ''),
                                        (Status === 'Failed' && !disabled ?
                                            'bg-red-600 focus:ring-red-600 hover:bg-red-700' : '')
                                    ]">
                                    <svg fill="currentColor" class="h-5 w-5" x="0px"
                                        y="0px" viewBox="0 0 512.308 512.308"
                                        style="enable-background:new 0 0 512.308 512.308;"
                                        xml:space="preserve">
                                        <g>
                                            <path
                                                d="M505.878,36.682L110.763,431.69c8.542,4.163,17.911,6.351,27.413,6.4h67.669c5.661-0.015,11.092,2.236,15.083,6.251   l36.672,36.651c19.887,20.024,46.936,31.295,75.157,31.317c11.652-0.011,23.224-1.921,34.261-5.653   c38.05-12.475,65.726-45.46,71.403-85.099l72.085-342.4C513.948,64.89,512.311,49.871,505.878,36.682z">
                                            </path>
                                            <path
                                                d="M433.771,1.652L92.203,73.61C33.841,81.628-6.971,135.44,1.047,193.802c3.167,23.048,13.782,44.43,30.228,60.885   l36.651,36.651c4.006,4.005,6.255,9.439,6.251,15.104v67.669c0.049,9.502,2.237,18.872,6.4,27.413L475.627,6.41   C462.645,0.03,447.853-1.651,433.771,1.652z">
                                            </path>
                                        </g>
                                    </svg>
                                    <span
                                        x-text="Status === 'Active' || Status === null? 'Submit': Status"></span>
                                </button>
                                <p x-show="Status === 'Passed' || Status === 'Failed'">Your Score
                                    : {{ $this->result }}/{{ $quiz->questions->sum('score') }}</p>
                            </div>
                            <!--/submit-->
                            <!--Next-->
                            <div class="">
                                <button type="button"
                                    :class="disabled ? 'bg-gray-500 focus:ring-gray-600 hover:bg-gray-700' :
                                        'bg-traivis-500 hover:bg-traivis-600 focus:ring-traivis-500'"
                                    class="peer z-20 inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:scale-110 focus:outline-none focus:ring-2 focus:ring-offset-1">
                                    <span class="whitespace-nowrap font-bold">Next</span>
                                    <svg fill="currentColor" class="-mr-2 h-5 w-5" viewBox="0 0 24 24">
                                        <path
                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <!--/Next-->
                        </div>
                    </div>
                @endauth
                <!--/Navigation-->
            </div>
            <!--/Content-->
        </div>
        <!-- END Quiz -->
    @else
        @auth
            <!-- Enroll section -->
            <div class="container relative mx-auto px-10 pb-32 text-gray-500">
                <div
                    class="mt-5 flex h-52 flex-col items-center justify-evenly gap-y-3 rounded-lg border border-traivis-200 bg-traivis-100 p-5">
                    <p class="font-bold">Please enroll first to access this part of the course</p>
                    <!--Book-->
                    <div class="">
                        <button type="button"
                            wire:click.prevent="$emit('addToCartEmit',{{ $quiz->course->id }})"
                            class="inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                            <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 512 512">
                                <path
                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                                </path>
                            </svg>
                            <span class="whitespace-nowrap font-bold">Enroll Now</span>
                        </button>
                    </div>
                    <!--/Book-->
                </div>
            </div>
            <!-- End Enroll section -->
        @endauth
        @guest
            <div class="container relative mx-auto px-10 text-gray-500">
                <div
                    class="mt-5 flex h-52 flex-col items-center justify-evenly gap-y-3 rounded-lg border border-traivis-200 bg-traivis-100 p-5">
                    <a class="font-bold"
                        href="{{ route('login', ['_redirect_back_to' => request()->fullUrl()]) }}">Login</a>
                </div>
            </div>
        @endguest
    @endif
</div>
