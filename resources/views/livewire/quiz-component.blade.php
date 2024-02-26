<div>
    <!--------- Details area ----------->
    <div class="mx-auto max-w-6xl px-10 pb-10 pt-5 text-gray-500">

        <!-- Version statuses -->
        <div class="flex items-center justify-between gap-x-4">

            <!-- Edit button -->
            @if ($quiz->content->publish_status == 'Published' && $quiz->course->publish_status != 'Under review')
                <div class="flex w-fit flex-col">
                    <button wire:click="clone" type="button"
                        class="inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                        <svg fill="currentColor" class="h-5 w-5" height="512" viewBox="0 0 24 24"
                            width="512">
                            <path
                                d="m18 9.064a3.049 3.049 0 0 0 -.9-2.164 3.139 3.139 0 0 0 -4.334 0l-11.866 11.869a3.064 3.064 0 0 0 4.33 4.331l11.87-11.869a3.047 3.047 0 0 0 .9-2.167zm-14.184 12.624a1.087 1.087 0 0 1 -1.5 0 1.062 1.062 0 0 1 0-1.5l7.769-7.77 1.505 1.505zm11.872-11.872-2.688 2.689-1.5-1.505 2.689-2.688a1.063 1.063 0 1 1 1.5 1.5zm-10.825-6.961 1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29l-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29zm18.274 14.29-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29l1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29zm-5.382-14.645 1.356-.387.389-1.358a1.042 1.042 0 0 1 2 0l.387 1.356 1.356.387a1.042 1.042 0 0 1 0 2l-1.356.387-.387 1.359a1.042 1.042 0 0 1 -2 0l-.387-1.355-1.358-.389a1.042 1.042 0 0 1 0-2z">
                            </path>
                        </svg>
                        <span class="whitespace-nowrap font-bold">
                            Edit Quiz
                        </span>
                    </button>
                </div>
            @endif
            <!-- End Edit button -->

            <!-- Published Version -->
            @if ($publishedVersion = $quiz->course->contents()->where('content_id', $quiz->content->id)->first())
                <div class="flex w-fit flex-col">
                    <h2 class="flex items-center gap-x-3 text-sm font-bold">
                        Published Version
                        <span class="rounded-full bg-green-500 px-2 py-[2px] text-white">
                            {{ $publishedVersion->version }}</span>
                    </h2>
                </div>
            @endif
            <!-- End Published Version -->

            <!-- Current Version -->
            <div class="flex w-fit flex-col">
                <h2 class="flex items-center gap-x-3 text-sm font-bold">
                    Current Version
                    <span class="rounded-full bg-traivis-500 px-2 py-[2px] text-white">
                        {{ $quiz->content->version }}
                    </span>
                </h2>
            </div>
            <!-- End Current Version -->

            <!-- Status -->
            <div class="flex w-fit flex-col">
                @php
                    $statusIcon = $statusIconsArray[strtolower($quiz->content->publish_status)];
                @endphp
                <h2 class="flex items-center gap-x-3 text-sm font-bold">
                    Status
                    <span
                        class="text-{{ $statusColorClassesArray[strtolower($quiz->content->publish_status)] }} border-{{ $statusColorClassesArray[strtolower($quiz->content->publish_status)] }} flex w-fit items-center gap-x-1 rounded-full border px-2 py-[2px] text-sm font-bold">
                        <x-dynamic-component :component="$statusIcon" class="inline-block h-4 w-4" />
                        {{ ucfirst($quiz->content->publish_status) }}
                    </span>
                    @if ($quiz->content->publish_status == 'Declined')
                        <button wire:click="showFeedback" type="button"
                            class="inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                            <svg fill="currentColor" class="h-5 w-5" height="512" viewBox="0 0 24 24"
                                width="512">
                                <path
                                    d="m18 9.064a3.049 3.049 0 0 0 -.9-2.164 3.139 3.139 0 0 0 -4.334 0l-11.866 11.869a3.064 3.064 0 0 0 4.33 4.331l11.87-11.869a3.047 3.047 0 0 0 .9-2.167zm-14.184 12.624a1.087 1.087 0 0 1 -1.5 0 1.062 1.062 0 0 1 0-1.5l7.769-7.77 1.505 1.505zm11.872-11.872-2.688 2.689-1.5-1.505 2.689-2.688a1.063 1.063 0 1 1 1.5 1.5zm-10.825-6.961 1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29l-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29zm18.274 14.29-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29l1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29zm-5.382-14.645 1.356-.387.389-1.358a1.042 1.042 0 0 1 2 0l.387 1.356 1.356.387a1.042 1.042 0 0 1 0 2l-1.356.387-.387 1.359a1.042 1.042 0 0 1 -2 0l-.387-1.355-1.358-.389a1.042 1.042 0 0 1 0-2z">
                                </path>
                            </svg>
                            <span class="whitespace-nowrap font-bold">
                                Review Feedback
                            </span>
                        </button>
                    @endif
                </h2>
            </div>
            <!-- End Status -->

        </div>
        <!-- End Version statuses -->

        <div class="mt-5 flex flex-row flex-wrap items-start justify-between">

            {{-- @if ($quiz->content->publish_status == 'Declined')
            <!-- Feedback -->
            <div class="flex w-full flex-col space-y-2 px-2 sm:w-3/5 lg:w-4/5 mb-5">
                <h2>
                    Feedback :
                    <span class="text-red-500">{{ $quiz->content->review_feedback }}</span>
                </h2>
            </div>
            <!-- End Feedback -->
            @endif --}}
            <!-- left col (Quiz content -->
            <div class="flex w-full flex-col space-y-2 pr-2 sm:w-3/5 lg:w-4/5">

                {{--
                <x-input.file-upload wire:model="image_file" id="image_file" accept="image/png,image/jpeg">
                    <span class="h-12 w-12 overflow-hidden rounded bg-gray-100">
                        @if ($image_file && $image_file->isPreviewable())
                        <img src="{{ $image_file->temporaryUrl() }}" alt="image_file)">
                        @else
                        select an image
                        @endif
                    </span>
                </x-input.file-upload>
                @error('image_file')
                <span class="bg-red-100 text-red-800">{{ $message }}</span>
                @enderror
                --}}

                <!--Quiz name-->
                <div class="group relative">
                    <input type="text" id="quizname" required
                        class="{{ $this->getErrorClass('quiz.title') }} peer mt-1 h-10 w-full rounded-full text-2xl font-bold transition-colors sm:truncate"
                        wire:model.debounce="quiz.title" {{ $disableMode ? 'disabled' : '' }}>
                    <label for="quizname"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 text-2xl font-bold transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Quiz Title</label>
                    @error('quiz.title')
                        <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                <!--END Quiz name-->

                <!--Quiz Description-->
                <div class="group relative">
                    <textarea {{ $disableMode ? 'disabled' : '' }} wire:model.debounce="quiz.description"
                        class="{{ $this->getErrorClass('quiz.description') }} peer mt-1 w-full rounded-lg border-gray-300 transition-colors focus:border-traivis-400"></textarea>
                    <label for="quizdesc"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Description </label>
                    @error('quiz.description')
                        <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                <!--Quiz Description-->

                @livewire('quiz-questions-component', ['quiz' => $quiz])
            </div>
            <!--END left col (Quiz content)-->

            <!--Right Col (Quiz Setting) -->
            <div class="mt-3 flex w-full flex-col space-y-2 pl-2 sm:mt-0 sm:w-2/5 lg:w-1/5">

                <!--Score-->
                <div class="group relative">
                    <input {{ $disableMode ? 'disabled' : '' }} type="number" id="quizscore" required
                        min="1" max="100" wire:model.debounce="quiz.options.passing_score"
                        class="{{ $this->getErrorClass('quiz.options.passing_score') }} peer mt-1 w-full rounded-lg pr-0 transition-colors sm:truncate">
                    <label for="quizscore"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Passing Score</label>
                    <div class="absolute right-6 top-3.5 flex">
                        <span class="inline-flex items-center font-semibold"> % </span>
                    </div>
                    @error('quiz.options.passing_score')
                        <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                <!--END Score-->

                <!--Ques limit-->
                <div class="group relative">
                    <input {{ $disableMode ? 'disabled' : '' }} type="number" id="queslimit" required
                        min="1" wire:model.debounce="quiz.options.questions_limit"
                        class="{{ $this->getErrorClass('quiz.options.questions_limit') }} peer mt-1 w-full rounded-lg pr-0 transition-colors sm:truncate">
                    <label for="queslimit"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Questions Limit</label>
                </div>
                @error('quiz.options.questions_limit')
                    <x-tooltip-arrow-up-validation-error :message="$message" />
                @enderror
                <!--END Ques limit-->
                <!--Attempts limit-->
                <div class="group relative">
                    <input {{ $disableMode ? 'disabled' : '' }} type="number" id="attemptsLimit"
                        required min="1" wire:model.debounce="quiz.options.attempts_limit"
                        class="{{ $this->getErrorClass('quiz.options.attempts_limit') }} peer mt-1 w-full rounded-lg pr-0 transition-colors sm:truncate">
                    <label for="attemptsLimit"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Attempts limit</label>
                </div>
                @error('quiz.options.attempts_limit')
                    <x-tooltip-arrow-up-validation-error :message="$message" />
                @enderror

                <!--END Ques limit-->

                <!--Time limit-->
                <div class="group relative">
                    <input {{ $disableMode ? 'disabled' : '' }} type="number" id="timelimit" required
                        wire:model.debounce="quiz.options.time_limit"
                        class="{{ $this->getErrorClass('quiz.options.time_limit') }} peer mt-1 w-full rounded-lg pr-0 transition-colors sm:truncate">
                    <label for="timelimit"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Time Limit</label>
                    <div class="absolute right-6 top-3.5 flex">
                        <span class="inline-flex items-center font-semibold">Min</span>
                    </div>
                </div>
                @error('quiz.options.time_limit')
                    <x-tooltip-arrow-up-validation-error :message="$message" />
                @enderror
                <!--END Time limit-->

                <!--toggles-->

                {{--
                <div class="flex items-center justify-between px-1"
                    x-data="{ enabled: @entangle('quiz.options.is_gradable') }">
                    <span class="mr-3" id="Qgradable">
                        <span class="text-sm font-medium text-gray-500">Quiz Gradable</span>
                    </span>
                    <button @click="enabled = !enabled" type="button"
                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only">Use setting</span>
                        <span aria-hidden="true"
                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                            :class="enabled && 'translate-x-5'"></span>
                    </button>
                </div>

                <div class="flex items-center justify-between px-1"
                    x-data="{ enabled: @entangle('quiz.options.show_remaining_time') }">
                    <span class="mr-3" id="Qremaining">
                        <span class="text-sm font-medium text-gray-500">Show remaining Time </span>
                    </span>
                    <button @click="enabled = !enabled" type="button"
                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only">Use setting</span>
                        <span aria-hidden="true"
                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                            :class="enabled && 'translate-x-5'"></span>
                    </button>
                </div>
                --}}

                <!--toggles-->

            </div>
            <!--END Right Col ()Quiz Setting-->

        </div>
    </div>
    <!--END Details area -->
</div>
