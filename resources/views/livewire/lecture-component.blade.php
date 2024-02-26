<div class="w-full">
    <!--------- Details area ----------->
    <div class="mx-auto max-w-6xl px-10 pb-10 pt-5 text-gray-500">

        <!-- Version statuses -->
        <div class="flex items-center justify-between gap-x-4">

            <!-- Edit button -->
            @if (
                $lecture->content->publish_status == 'Published' &&
                    $lecture->course->publish_status != 'Under review')
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
                            Edit Lecture
                        </span>
                    </button>
                </div>
            @endif
            <!-- End Edit button -->

            <!-- Published Version -->
            @if ($publishedVersion = $lecture->course->contents->where('content_id', $lecture->content->id)->first())
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
                        {{ $lecture->content->version }}
                    </span>
                </h2>
            </div>
            <!-- End Current Version -->

            <!-- Status -->
            <div class="flex w-fit flex-col">
                @php
                    $statusIcon = $statusIconsArray[strtolower($lecture->content->publish_status)];
                @endphp
                <h2 class="flex items-center gap-x-3 text-sm font-bold">
                    Status
                    <span
                        class="text-{{ $statusColorClassesArray[strtolower($lecture->content->publish_status)] }} border-{{ $statusColorClassesArray[strtolower($lecture->content->publish_status)] }} flex w-fit items-center gap-x-1 rounded-full border px-2 py-[2px] text-sm font-bold">
                        <x-dynamic-component :component="$statusIcon" class="inline-block h-4 w-4" />
                        {{ ucfirst($lecture->content->publish_status) }}
                    </span>
                    @if ($lecture->content->publish_status == 'Declined')
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

            {{-- @if ($lecture->content->publish_status == 'Declined')
            <!-- Feedback -->
            <div class="flex w-full flex-col space-y-2 px-2 sm:w-3/5 lg:w-4/5 mb-5">
                <h2>
                    Feedback :
                    <span class="text-red-500">{{ $lecture->content->review_feedback }}</span>
                </h2>
            </div>
            <!-- End Feedback -->
            @endif --}}
            <!-- name - desc -->
            <div class="flex w-full flex-col space-y-2 pr-2 sm:w-3/5 lg:w-4/5">
                <div class="group relative">
                    <input {{ $disableMode ? 'disabled' : '' }} type="text"
                        wire:model.debounce.1000ms="lecture.title" id="lecture_name"
                        class="{{ $this->getErrorClass('lecture.title') }} peer mt-1 h-10 w-full rounded-full border-gray-300 text-2xl font-bold transition-colors focus:border-traivis-400 sm:truncate">
                    <label for="lecture_name"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 text-2xl font-bold transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Lecture Name</label>
                    @error('lecture.title')
                        <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                @if ($this->lecture->delivery_mode == 3)
                    <div class="flex w-full" x-data="{ copied: false }">
                        <div class="group relative flex-1">
                            <input disabled readonly type="text" x-ref="url_lecture_route"
                                placeholder="Lecture URL" value="{{ $this->urlLectureRoute }}"
                                class="peer mt-1 h-10 w-full cursor-text rounded-full border-gray-300 focus:border-traivis-400 sm:truncate">

                            <div x-show="copied"
                                x-transition:enter="transition duration-300 transform ease-out"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition duration-200 transform ease-in"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-2"
                                class="mt-2 rounded-full bg-gray-100 p-2 text-sm text-gray-500">Copied to
                                clipboard!
                            </div>

                        </div>
                        @if (!$lecture->url_lecture)
                            <button
                                class="ml-2 mt-1 h-10 rounded-full bg-traivis-500 px-4 py-2 font-bold text-white hover:bg-traivis-700"
                                wire:click="createMeetingLink">
                                <span wire:loading.remove wire:target="createMeetingLink">
                                    Create
                                </span>
                                <span wire:loading wire:target="createMeetingLink">
                                    Creating
                                </span>
                            </button>
                        @else
                            <button
                                @click="navigator.clipboard.writeText($refs.url_lecture_route.value); copied = true; setTimeout(() => { copied = false }, 5000)"
                                title="Copy"
                                class="ml-2 mt-1 h-10 rounded-full bg-gray-500 px-4 py-2 font-bold text-white hover:bg-gray-700">
                                <x-svg-icons.fi-rr-copy class="h-6 w-6" />
                            </button>
                        @endif
                    </div>
                @endif
                <div class="group relative">
                    <textarea wire:model.debounce.1000ms="lecture.content_lecture" id="lecture_desc"
                        class="{{ $this->getErrorClass('lecture.content_lecture') }} peer mt-1 w-full rounded-lg transition-colors focus:border-traivis-400"
                        rows="4" {{ $disableMode ? 'disabled' : '' }}></textarea>
                    <label for="lecture_desc"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Description </label>
                    @error('lecture.content_lecture')
                        <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                <!-- upload video-->
                @if ($lecture->delivery_mode == 2)
                    <div class="w-full">
                        Main Lecture Video
                        <div class="w-full">
                            <x-input.filepond-large-files required
                                wire:key="lecture-{{ $lecture->id }}-video-uploader"
                                accept="video/ogg,video/mp4,video/quicktime,video/webm,video/3gpp,video/x-msvideo"
                                collection_name="video" :files="$video" :disabled="$disableMode"
                                class="w-full cursor-pointer appearance-none rounded-md border-2 border-dashed transition focus:outline-none" />
                        </div>
                        <!--END upload video-->
                        @if (!$lecture->video)
                            <x-tooltip-arrow-up-validation-error :message="'The Main Video is required'" />
                        @endif
                    </div>
                @endif
                <div class="w-full">
                    Lecture's resources (The user will be able to download these files):
                    <!-- upload-->
                    <div class="w-full">
                        <x-input.filepond-large-files
                            wire:key="lecture-{{ $this->lecture->id }}-resources-uploader" multiple
                            collection_name="resources" :files="$resources" :disabled="$disableMode"
                            class="w-full cursor-pointer appearance-none rounded-md border-2 border-dashed transition focus:outline-none" />
                    </div>
                    <!--END upload-->
                </div>
            </div>

            <!--drip-->
            <div class="relative flex w-full flex-col space-y-2 pl-2 sm:w-2/5 lg:w-1/5">
                <div class="group relative">
                    <select id="delivery_mode" wire:model="lecture.delivery_mode" required
                        {{ $disableMode ? 'disabled' : '' }}
                        class="{{ $this->getErrorClass('lecture.delivery_mode') }} peer mt-1 h-10 w-full rounded-lg transition-colors valid:text-gray-500 invalid:text-white focus-within:text-gray-500 focus:border-traivis-400 sm:truncate">
                        <option value="">Delivery Mode</option>
                        <option value="1">Face to Face</option>
                        <option value="2">Recorded</option>
                        <option value="3">Live</option>
                    </select>
                    <label for="delivery_mode"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Delivery Mode</label>
                    @error('lecture.delivery_mode')
                        <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                </div>
                <div class="group relative">
                    <input wire:model.debounce.1000ms="lecture.drip_datetime" type="datetime-local"
                        id="drip_datetime" required {{ $disableMode ? 'disabled' : '' }}
                        class="{{ $this->getErrorClass('lecture.drip_datetime') }} peer mt-1 h-10 w-full rounded-lg transition-colors valid:text-gray-500 invalid:text-white focus-within:text-gray-500 focus:border-traivis-400 sm:truncate">
                    <label for="drip_datetime"
                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                        Start Date</label>
                    @error('lecture.drip_datetime')
                        <x-tooltip-arrow-up-validation-error :message="$message" />
                    @enderror
                    Date/time in your own timezone
                    {{ auth()->user()->timezone }} time, students in own
                    timezone.
                </div>
                @if ($this->lecture->delivery_mode != 2)
                    <div class="group relative">
                        <input type="number" wire:model="duration_hour" id="duration_hour"
                            placeholder="duration (hours)"
                            class="{{ ($duration_hour > 0 || $duration_min > 0) && $duration_hour >= 0 && ($duration_min >= 0 && $duration_min < 60) ? 'border-green-500' : 'border-red-500' }} peer mt-1 h-10 w-full rounded-lg pr-0 transition-colors focus:border-traivis-400 sm:truncate"
                            min="0" {{ $disableMode ? 'disabled' : '' }}>
                        <label for="duration_hour"
                            class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                            Duration Hours</label>
                    </div>
                    <div class="group relative">
                        <input type="number" wire:model="duration_min" id="duration_min"
                            placeholder="duration (minutes)"
                            class="{{ ($duration_hour > 0 || $duration_min > 0) && $duration_hour >= 0 && ($duration_min >= 0 && $duration_min < 60) ? 'border-green-500' : 'border-red-500' }} peer mt-1 h-10 w-full rounded-lg pr-0 transition-colors focus:border-traivis-400 sm:truncate"
                            min="0" max="59" {{ $disableMode ? 'disabled' : '' }}>
                        <label for="duration_min"
                            class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                            Duration Minutes</label>
                    </div>
                    @if ($duration_hour == 0 && $duration_min == 0)
                        {{-- Message --}}
                        <p class="flex items-start gap-x-2 pb-3 pt-1 text-sm text-red-700">
                            <svg class="my-1 h-3 w-3 shrink-0 fill-red-500" viewBox="0 0 24 24">
                                <path
                                    d="m21.5 14.119-3.483-2.119 3.483-2.119a3.181 3.181 0 1 0 -3.362-5.4l-3.138 2.009v-3.49a3 3 0 0 0 -6 0v3.588l-3.138-2.107a3.181 3.181 0 0 0 -3.362 5.4l3.483 2.119-3.483 2.119a3.181 3.181 0 0 0 3.362 5.4l3.138-2.038v3.519a3 3 0 0 0 6 0v-3.58l3.138 2.1a3.181 3.181 0 0 0 3.362-5.4z" />
                            </svg>
                            <span class="">The Duration is required</span>
                        </p>
                    @elseif($duration_hour < 0 || $duration_min < 0)
                        {{-- Message --}}
                        <p class="flex items-start gap-x-2 pb-3 pt-1 text-sm text-red-700">
                            <svg class="my-1 h-3 w-3 shrink-0 fill-red-500" viewBox="0 0 24 24">
                                <path
                                    d="m21.5 14.119-3.483-2.119 3.483-2.119a3.181 3.181 0 1 0 -3.362-5.4l-3.138 2.009v-3.49a3 3 0 0 0 -6 0v3.588l-3.138-2.107a3.181 3.181 0 0 0 -3.362 5.4l3.483 2.119-3.483 2.119a3.181 3.181 0 0 0 3.362 5.4l3.138-2.038v3.519a3 3 0 0 0 6 0v-3.58l3.138 2.1a3.181 3.181 0 0 0 3.362-5.4z" />
                            </svg>
                            <span class="">The Duration cannot be negative value</span>
                        </p>
                    @elseif($duration_min > 59)
                        {{-- Message --}}
                        <p class="flex items-start gap-x-2 pb-3 pt-1 text-sm text-red-700">
                            <svg class="my-1 h-3 w-3 shrink-0 fill-red-500" viewBox="0 0 24 24">
                                <path
                                    d="m21.5 14.119-3.483-2.119 3.483-2.119a3.181 3.181 0 1 0 -3.362-5.4l-3.138 2.009v-3.49a3 3 0 0 0 -6 0v3.588l-3.138-2.107a3.181 3.181 0 0 0 -3.362 5.4l3.483 2.119-3.483 2.119a3.181 3.181 0 0 0 3.362 5.4l3.138-2.038v3.519a3 3 0 0 0 6 0v-3.58l3.138 2.1a3.181 3.181 0 0 0 3.362-5.4z" />
                            </svg>
                            <span class="">The Duration minutes cannot be more than 59</span>
                        </p>
                    @endif
                @endif
            </div>
            <!--END drip-->
        </div>
        <!--END Details area -->
    </div>
</div>
