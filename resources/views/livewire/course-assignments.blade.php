<div>
    <!--------- Details area ----------->
    <div class="mx-auto max-w-6xl px-10 pb-10 pt-5 text-gray-500">



        <!-- Version statuses -->
        <div class="flex items-center justify-between gap-x-4">

            <!-- Edit button -->
            @if ($assignment->content->publish_status == 'Published' && $assignment->course->publish_status != 'Under review')
                <div class="flex w-fit flex-col">
                    <button wire:click="clone" type="button"
                            class="inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                        <svg fill="currentColor" class="h-5 w-5" height="512" viewBox="0 0 24 24" width="512">
                            <path
                                    d="m18 9.064a3.049 3.049 0 0 0 -.9-2.164 3.139 3.139 0 0 0 -4.334 0l-11.866 11.869a3.064 3.064 0 0 0 4.33 4.331l11.87-11.869a3.047 3.047 0 0 0 .9-2.167zm-14.184 12.624a1.087 1.087 0 0 1 -1.5 0 1.062 1.062 0 0 1 0-1.5l7.769-7.77 1.505 1.505zm11.872-11.872-2.688 2.689-1.5-1.505 2.689-2.688a1.063 1.063 0 1 1 1.5 1.5zm-10.825-6.961 1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29l-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29zm18.274 14.29-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29l1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29zm-5.382-14.645 1.356-.387.389-1.358a1.042 1.042 0 0 1 2 0l.387 1.356 1.356.387a1.042 1.042 0 0 1 0 2l-1.356.387-.387 1.359a1.042 1.042 0 0 1 -2 0l-.387-1.355-1.358-.389a1.042 1.042 0 0 1 0-2z">
                            </path>
                        </svg>
                        <span class="whitespace-nowrap font-bold">
                        Edit Assignment
                    </span>
                    </button>
                </div>
            @endif
            <!-- End Edit button -->

            <!-- Published Version -->
            @if ($publishedVersion = $assignment->course->contents->where('content_id',$assignment->content->id)->first())
                <div class="flex w-fit flex-col">
                    <h2 class="font-bold text-sm flex items-center gap-x-3">
                        Published Version :
                        <span class="px-2 py-[2px] bg-green-500 rounded-full text-white">
                        {{ $publishedVersion->version }}</span>
                    </h2>
                </div>
            @endif
            <!-- End Published Version -->

            <!-- Current Version -->
            <div class="flex w-fit flex-col">
                <h2 class="font-bold text-sm flex items-center gap-x-3">
                    Current Version
                    <span class="px-2 py-[2px] bg-traivis-500 rounded-full text-white">
                        {{ $assignment->content->version }}
                    </span>
                </h2>
            </div>
            <!-- End Current Version -->

            <!-- Status -->
            <div class="flex w-fit flex-col">
                @php
                    $statusIcon = $statusIconsArray[strtolower($assignment->content->publish_status)];
                @endphp
                <h2 class="font-bold text-sm flex items-center gap-x-3">
                    Status
                    <span class="text-{{ $statusColorClassesArray[strtolower($assignment->content->publish_status)] }} flex items-center gap-x-1 w-fit text-sm font-bold px-2 py-[2px] rounded-full border border-{{ $statusColorClassesArray[strtolower($assignment->content->publish_status)] }}">
                        <x-dynamic-component :component="$statusIcon" class="inline-block h-4 w-4" />
                        {{ ucfirst($assignment->content->publish_status) }}
                    </span>
                    @if ($assignment->content->publish_status=='Declined')
                        <button wire:click="showFeedback" type="button"
                                class="inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                            <svg fill="currentColor" class="h-5 w-5" height="512" viewBox="0 0 24 24" width="512">
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



            {{-- @if (strtolower($assignment->content->publish_status) == 'declined')
            <!-- Feedback -->
            <div class="flex w-full flex-col space-y-2 px-2 sm:w-3/5 lg:w-4/5 mb-5">
                <h2>
                    Feedback :
                    <span class="text-red-500">{{ ucfirst($assignment->content->review_feedback) }}</span>
                </h2>
            </div>
            <!-- End Feedback -->
            @endif --}}
            <!-- name - desc -->
            <div class="flex w-full flex-col space-y-2 pr-2 sm:w-3/5 lg:w-4/5">
                <div class="group relative">
                    <input {{ $disableMode ? 'disabled' : '' }} type="text"
                        wire:model.debounce.1000ms="assignment.title" id="lecture_name" required
                        class="{{ $this->getErrorClass('assignment.title') }} peer mt-1 h-10 w-full rounded-full border-gray-300 text-2xl font-bold transition-colors focus:border-traivis-400 sm:truncate">
                    <label for="lecture_name"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 text-2xl font-bold transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Assignment Name</label>
                    @error('assignment.title')
                    <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror

                </div>

                <div class="group relative">
                    <textarea {{ $disableMode ? 'disabled' : '' }} type="text"
                        wire:model.debounce.1000ms="assignment.text" id="lecture_desc" required
                        class="{{ $this->getErrorClass('assignment.text') }} peer mt-1 w-full rounded-lg border-gray-300 transition-colors focus:border-traivis-400"
                        maxlength="200" rows="4"></textarea>
                    <label for="lecture_desc"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Description *</label>
                    @error('assignment.text')
                    <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>

                <div class="w-full">
                    Assignment's resources (The user will be able to download these files):
                    <!-- upload-->
                    <div class="w-full">
                        <x-input.filepond-large-files :disabled="$disableMode" multiple collection_name="resources"
                            :files="$resources"
                            class="w-full cursor-pointer appearance-none rounded-md border-2 border-dashed transition focus:outline-none" />
                    </div>
                    <!--END upload-->
                </div>

            </div>
            <!--END name - desc-->

            <!--drip-->
            <div class="mt-3 flex w-full flex-col space-y-2 pl-2 sm:mt-0 sm:w-2/5 lg:w-1/5">

                <!--Validity-->
                <div class="group relative">
                    <select {{ $disableMode ? 'disabled' : '' }} wire:model="validity_option" type="text" required
                        class="{{ $this->getErrorClass('validity_option') }} peer mt-1 w-full rounded-lg border-gray-300 pr-0 transition-colors focus:border-traivis-400 sm:truncate">
                        <option value="until">Valid until</option>
                        <option value="for">Valid for</option>
                    </select>
                    @error('validity_option')
                    <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                <!--End validity-->

                {{--
                <div class="group relative">
                    <div x-data="{ durationValue: 1, durationType: 'days' }">
                        <label for="durationValue"
                            class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                            Duration </label>

                        <input type="number" id="durationValue" x-model="durationValue"
                            class="mt-1 rounded-lg border-gray-300 pr-0 transition-colors focus:border-traivis-400 sm:truncate" />

                        <select x-model="durationType">
                            <option value="minutes">Minutes</option>
                            <option value="hours">Hours</option>
                            <option value="days">Days</option>
                        </select>

                        <p>Duration: <span x-text="durationValue"></span> <span x-text="durationType"></span></p>
                    </div>
                </div>
                --}}

                @if ($validity_option == 'for')
                <!--Duration-->
                <div class="group relative">
                    <input {{ $disableMode ? 'disabled' : '' }} type="number"
                        wire:model.debounce.1000ms="assignment.options.duration" id="duration" required
                        class="{{ $this->getErrorClass('assignment.options.duration') }} peer mt-1 w-full rounded-lg border-gray-300 pr-0 transition-colors focus:border-traivis-400 sm:truncate">
                    <label for="duration"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Duration </label>
                    @error('assignment.options.duration')
                    <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                <!--END Duration-->

                <!--Duration type-->
                <div class="group relative">
                    <select {{ $disableMode ? 'disabled' : '' }} wire:model="assignment.options.duration_type"
                        type="text" id="dumethod" required
                        class="{{ $this->getErrorClass('assignment.options.duration_type') }} peer mt-1 w-full rounded-lg border-gray-300 pr-0 transition-colors focus:border-traivis-400 sm:truncate">
                        <option value="">Duration type...</option>
                        <option value="weeks">Weeks</option>
                        <option value="days">Days</option>
                        <option value="hrs">Hours</option>
                    </select>
                    @error('assignment.options.duration_type')
                    <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                <!--END Duration type-->
                @else
                <!--until-->
                <div class="group relative">
                    <input {{ $disableMode ? 'disabled' : '' }} type="datetime-local"
                        wire:model.debounce.1000ms="assignment.options.until" id="duration" required
                        class="{{ $this->getErrorClass('assignment.options.until') }} peer mt-1 h-10 w-full rounded-lg transition-colors valid:text-gray-500 focus-within:text-gray-500 focus:border-traivis-400 sm:truncate invalid:text-white">
                    <label for="drip_datetime"
                           class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Start Date</label>
                    @error('assignment.options.until')
                    <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                <!--END until-->
                @endif
                <!--Total Points-->
                <div class="group relative">
                    <input {{ $disableMode ? 'disabled' : '' }}
                        wire:model.debounce.1000ms="assignment.options.total_points" type="number" id="totalpts"
                        required
                        class="{{ $this->getErrorClass('assignment.options.total_points') }} peer mt-1 w-full rounded-lg border-gray-300 pr-0 transition-colors focus:border-traivis-400 sm:truncate">
                    <label for="totalpts"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Total Points </label>
                    <div class="absolute right-6 top-3.5 flex">
                        <span class="inline-flex items-center font-semibold"> pts </span>
                    </div>
                    @error('assignment.options.total_points')
                    <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                <!--END Total Points-->

                <!--Pass Points-->
                <div class="group relative">
                    <input {{ $disableMode ? 'disabled' : '' }}
                        wire:model.debounce.1000ms="assignment.options.pass_points" type="number" id="passpts" required
                        class="{{ $this->getErrorClass('assignment.options.pass_points') }} peer mt-1 w-full rounded-lg border-gray-300 pr-0 transition-colors focus:border-traivis-400 sm:truncate">
                    <label for="passpts"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Pass Points </label>
                    <div class="absolute right-6 top-3.5 flex">
                        <span class="inline-flex items-center font-semibold"> pts </span>
                    </div>
                    @error('assignment.options.pass_points')
                    <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                <!--END Pass Points-->
            </div>
            <!--END drip-->

        </div>
    </div>

    <!--END Details area -->
</div>