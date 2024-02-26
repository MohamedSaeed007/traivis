<div>
    {{-- @if ($errors->any())
        @dump($errors->getBags())
    @endif --}}
    <div class="text-traivis-500"></div>
    <!-- Course-->
    <div class="mx-auto flex w-full" x-data="{
        smOpen: true,
        trOpen: true,
        publishPopup: false,
        isUploadingOverviewVideo: false,
        courseSlug: @entangle('course.slug'),
        availableSeats: @entangle('available_seats'),
        editSlug: false,
        progress: 0
    }"
        x-on:livewire-upload-start="isUploadingOverviewVideo = true"
        x-on:livewire-upload-finish="isUploadingOverviewVideo = false"
        x-on:livewire-upload-error="isUploadingOverviewVideo = false"
        x-on:livewire-upload-progress="isUploadingOverviewVideo = $event.detail.progress">
        <main class="flex min-w-0 flex-1 border-t border-gray-200">

            <!-- Left column (Course Nav) -->
            <aside class="absolute z-10 flex-shrink-0 bg-white transition lg:relative">

                <div :class="smOpen ? '' : '-ml-80 opacity-0'"
                    class="-ml-0 block flex h-screen w-80 flex-col overflow-y-auto pb-56 opacity-100 transition-all duration-200">

                    <!-- left col Header -->
                    <div class="group/tr relative">
                        <!--instructor -->
                        <div class="border-b-2 pb-6 transition-all"
                            :class="trOpen ? 'mb-5' : '-mt-[350px] mb-0'">
                            <div class="flex flex-col items-center">

                                <!--styling-->
                                <div class="h-24 w-full bg-blue-100"></div>
                                <!--styling-->

                                <!--avatar-->
                                <div class="-mt-20 flex items-end space-x-5">
                                    <img class="h-32 w-32 rounded-full ring-4 ring-white drop-shadow-md"
                                        src="{{ $maker->avatar }}" alt="{{ $maker->name }}">
                                </div>
                                <!--/avatar-->

                                <!--name and rates-->
                                <div>
                                    <!--name-->
                                    <div class="mt-4 flex min-w-0">
                                        <h1 class="w-44 truncate text-2xl font-bold text-gray-900">
                                            {{ $maker->name }}</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                            fill="currentColor"
                                            class="dropshadow-lg ml-2 w-5 text-blue-600">
                                            <path
                                                d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <!--/name-->
                                </div>
                                <!--/name and rates-->

                                <!--Trainer info-->
                                <div class="mt-5 flex flex-wrap justify-center gap-y-2 px-2">

                                    <x-tooltip-arrow direction="down">
                                        <button
                                            class="group relative mx-1 inline-flex items-center rounded-full border border-gray-300 bg-gray-100 px-2 py-0.5 text-sm text-gray-500">
                                            <svg class="mr-2 h-3 w-3" fill="currentColor"
                                                viewbox="0 0 24 24" xml:space="preserve">
                                                <path
                                                    d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                </path>
                                            </svg>
                                            {{ $makerRating }}
                                        </button>
                                        <x-slot name="text">
                                            <p class="itrms-center flex justify-center gap-x-2">
                                                <span>{{ $makerReviewCount }}</span>
                                                Reviews
                                            </p>
                                            <div
                                                class="flex justify-center gap-1 whitespace-nowrap drop-shadow-md">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor"
                                                    class="{{ $makerRating >= 1 ? 'text-yellow-500' : 'text-white' }} w-4">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor"
                                                    class="{{ $makerRating >= 2 ? 'text-yellow-500' : 'text-white' }} w-4">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor"
                                                    class="{{ $makerRating >= 3 ? 'text-yellow-500' : 'text-white' }} w-4">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor"
                                                    class="{{ $makerRating >= 4 ? 'text-yellow-500' : 'text-white' }} w-4">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor"
                                                    class="{{ $makerRating >= 5 ? 'text-yellow-500' : 'text-white' }} w-4">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <div class="ml-2 font-bold">{{ $makerRating }} / 5
                                                </div>
                                            </div>
                                        </x-slot>
                                    </x-tooltip-arrow>

                                    <x-tooltip-arrow>
                                        <button wire:ignore
                                            class="mx-1 inline-flex items-center rounded-full border border-gray-300 bg-gray-100 px-2 py-0.5 text-sm text-gray-500">
                                            <svg class="mr-2 h-3 w-3" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM5.683,16H1a1,1,0,0,1-1-1A6.022,6.022,0,0,1,5.131,9.084a1,1,0,0,1,1.1,1.266A6.009,6.009,0,0,0,6,12a5.937,5.937,0,0,0,.586,2.57,1,1,0,0,1-.9,1.43ZM17,24H7a1,1,0,0,1-1-1,6,6,0,0,1,12,0A1,1,0,0,1,17,24ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8Zm17,8H18.317a1,1,0,0,1-.9-1.43A5.937,5.937,0,0,0,18,12a6.009,6.009,0,0,0-.236-1.65,1,1,0,0,1,1.105-1.266A6.022,6.022,0,0,1,24,15,1,1,0,0,1,23,16Z">
                                                </path>
                                            </svg>
                                            {{ $this->round_big_number('followers') }}
                                        </button>
                                        <x-slot name="text">
                                            Followers
                                        </x-slot>
                                    </x-tooltip-arrow>

                                    <x-tooltip-arrow>
                                        <button wire:ignore
                                            class="group relative mx-1 inline-flex items-center rounded-full border border-gray-300 bg-gray-100 px-2 py-0.5 text-sm text-gray-500">
                                            <svg class="mr-2 h-3 w-3" fill="currentColor"
                                                viewBox="0 0 24 24" xml:space="preserve">
                                                <path
                                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                </path>
                                            </svg>
                                            {{ $this->round_big_number('courses') }}
                                        </button>
                                        <x-slot name="text">
                                            Courses
                                        </x-slot>
                                    </x-tooltip-arrow>

                                    {{--                                    @dump($maker->toArray()) --}}
                                </div>
                                <!--Trainer info-->
                            </div>
                        </div>
                        <!--/instructor -->

                        <!--instructor toggle Button-->
                        <button @click="trOpen = ! trOpen"
                            :class="trOpen ? 'top-[250px]' : 'top-0 duration-500'"
                            class="absolute left-36 z-30 block rounded-full border border-gray-300 bg-slate-500 p-1.5 text-white shadow-lg transition-all">
                            <svg fill="currentColor" class="h-4 w-4" viewBox="0 0 24 24">
                                <path
                                    d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z">
                                </path>
                            </svg>
                        </button>
                        <!--/ instructor toggle Button-->

                    </div>
                    <!--END left col Header -->

                    <!------ left col (Course Structure) ------>
                    <div class="h-full">

                        <!-------Course Details-------->
                        <div
                            class="border-b border-l-4 border-gray-200 border-l-transparent p-5 text-sm font-medium text-gray-500 transition-colors focus-within:border-l-blue-500 focus-within:bg-blue-50 focus-within:text-gray-700 hover:border-l-blue-500 hover:bg-blue-50 hover:text-gray-700">
                            <span class="flex cursor-pointer items-center"
                                wire:click.stop="getCourseDetails()">
                                <div class="mr-5">
                                    <svg fill="currentColor" class="h-5 w-5" viewbox="0 0 24 24"
                                        xml:space="preserve">
                                        <path
                                            d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="flex flex-grow items-center gap-x-2 py-1 font-bold">Course
                                    details
                                    @if ($courseDetails->publish_status)
                                        @php
                                            $statusIcon = $statusIconsArray[strtolower($courseDetails->publish_status)];
                                        @endphp
                                        <span
                                            class="text-{{ $statusColorClassesArray[strtolower($courseDetails->publish_status)] }} border-{{ $statusColorClassesArray[strtolower($courseDetails->publish_status)] }} flex w-fit items-center gap-x-1 rounded-full border px-2 py-[2px] text-sm font-bold">
                                            <x-dynamic-component :component="$statusIcon"
                                                class="inline-block h-4 w-4" />
                                            {{ ucfirst($courseDetails->publish_status) }}</span>
                                    @endif
                                    <Span wire:loading><x-svg-icons.fi-rr-rotate-right
                                            class="-mt-2 ml-2 inline-block h-5 w-5 animate-spin text-traivis" /></Span>
                                </div>
                            </span>
                        </div>
                        <!-------/ Course Details-------->
                        @if (count($sections))
                            <div wire:sortable="updateSectionsOrder"
                                wire:sortable-group="updateContentsOrder" wire:key="course-sections">
                                @foreach ($sections as $i => $section)
                                    <!-------New Course section (with no items)-------->
                                    <div class="group/section relative border-b border-l-4 border-gray-200 border-l-transparent pb-5 pl-0 pt-5 text-sm font-medium text-gray-500 transition-colors hover:border-l-blue-500 hover:bg-blue-50 hover:text-gray-700"
                                        wire:key="section-{{ $section->id }}"
                                        @if ($i != 0) wire:sortable.item="{{ $section->id }}" @endif
                                        :class="isOpen ? 'bg-blue-50 border-l-blue-500 text-gray-700' : ''"
                                        @if ($selected_content && $selected_content->section_id == $section->id) x-data="{ isOpen: true }"
                                        @else
                                             x-data="{ isOpen: false }" @endif>
                                        <!--Section Collapse header-->
                                        <div class="group/section-title flex cursor-pointer items-center"
                                            @click.stop="isOpen = !isOpen" x-data="{ edit: false }">
                                            <span
                                                class="invisible cursor-ns-resize group-hover/section-title:visible"
                                                @if ($i != 0) wire:sortable.handle @endif
                                                wire:key="section-{{ $section->id }}-sort-handle">
                                                <x-svg-icons.fi-rr-drag-dots-vertical class="h-5 w-5" />
                                            </span>

                                            <span class="mr-5">
                                                <svg fill="currentColor" class="h-5 w-5"
                                                    height="512" viewBox="0 0 24 24" width="512">
                                                    <path
                                                        d="m22.2 2.163a5 5 0 0 0 -4.157-1.069l-1.764.432a4 4 0 0 0 -3.279 3.935v15.467a6.909 6.909 0 0 1 -2 0v-15.467a3.981 3.981 0 0 0 -3.226-3.923l-1.874-.456a5 5 0 0 0 -5.9 4.918v10.793a5 5 0 0 0 4.105 4.919l6.286 1.143a9 9 0 0 0 3.218 0l6.291-1.143a5 5 0 0 0 4.1-4.919v-10.793a4.983 4.983 0 0 0 -1.8-3.837z" />
                                                </svg>
                                            </span>

                                            <div class="flex flex-grow items-center gap-x-2 py-1 font-bold"
                                                x-show="!edit">
                                                {{ $section->section_name }}
                                                @if ($this->getSectionStatus($section) != '')
                                                    @php
                                                        $statusIcon = $statusIconsArray[strtolower($this->getSectionStatus($section))];
                                                    @endphp
                                                    <span
                                                        class="text-{{ $statusColorClassesArray[strtolower($this->getSectionStatus($section))] }} border-{{ $statusColorClassesArray[strtolower($this->getSectionStatus($section))] }} flex w-fit items-center gap-x-1 rounded-full border px-2 py-[2px] text-sm font-bold">
                                                        <x-dynamic-component :component="$statusIcon"
                                                            class="inline-block h-4 w-4" />
                                                        {{ ucfirst($this->getSectionStatus($section)) }}
                                                    </span>
                                                @endif
                                            </div>
                                            <span class="relative" x-show="edit" x-trap="edit">
                                                <input type="text" @blur="edit=false"
                                                    wire:model.debounce.1000ms="sections.{{ $i }}.section_name" />
                                                @error('sections.' . $i . '.section_name')
                                                    <span x-show="edit"
                                                        class="pointer-events-none absolute left-1/2 top-10 z-50 -translate-x-1/2 whitespace-nowrap rounded bg-red-200 px-2 py-1 text-xs font-normal text-red-800 opacity-100 transition-all before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-red-200 before:content-['']">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </span>
                                            @if (!$disableMode && $i != 0)
                                                <!--Control Buttons-->
                                                <div x-show="!edit"
                                                    class="absolute right-10 hidden items-center space-x-3 group-hover/section:flex">

                                                    <!--Edit-->
                                                    <x-tooltip-arrow>
                                                        <button type="button"
                                                            @click.stop="edit = !edit"
                                                            class="rounded-full bg-blue-50 p-2 text-slate-500 transition-all hover:bg-blue-500 hover:text-white">
                                                            <svg fill="currentColor" class="h-3 w-3"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                                <path
                                                                    d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                                            </svg>
                                                        </button>
                                                        <x-slot name="text">
                                                            Edit
                                                        </x-slot>
                                                    </x-tooltip-arrow>

                                                    <!--/Edit-->

                                                    <!--Delete-->
                                                    <x-tooltip-arrow>
                                                        <button type="button"
                                                            @click.stop="confirm('Are you sure you want to delete \'{{ $section->section_name }}\' section?') && $wire.deleteSection('{{ $section->id }}')"
                                                            class="rounded-full bg-blue-50 p-2 text-red-500 transition-all hover:bg-red-500 hover:text-white">
                                                            <svg fill="currentColor" class="h-3 w-3"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M17,4V2a2,2,0,0,0-2-2H9A2,2,0,0,0,7,2V4H2V6H4V21a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V6h2V4ZM11,17H9V11h2Zm4,0H13V11h2ZM15,4H9V2h6Z" />
                                                            </svg>
                                                        </button>
                                                        <x-slot name="text">
                                                            Delete
                                                        </x-slot>
                                                    </x-tooltip-arrow>
                                                    <!--/Delete-->

                                                </div>
                                                <!--/Control Buttons-->
                                            @endif
                                            <div class="ml-5">
                                                <svg viewbox="0 0 24 24" fill="currentColor"
                                                    class="h-5 w-5 rotate-0 transition-transform"
                                                    :class="isOpen ? 'rotate-90' : 'rotate-0'">
                                                    <path
                                                        d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <!--Section Collapse header-->

                                        <!--Section Collapse Content -->
                                        <div class="mt-5" x-cloak x-show="isOpen"
                                            x-transition:enter="transition-opacity ease-linear"
                                            x-transition:enter-start="opacity-0"
                                            x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition-opacity ease-linear"
                                            x-transition:leave-start="opacity-100"
                                            x-transition:leave-end="opacity-0" style="display: none;">

                                            <div wire:sortable-group.item-group="{{ $section->id }}">
                                                @foreach ($section->contents()->whereNull('content_id')->get() as $n => $content)
                                                    <!-- Content -->

                                                    <div x-data="{ edit: false }"
                                                        wire:click.stop="selectContent('{{ $content->id }}')"
                                                        wire:key="content-{{ $content->id }}"
                                                        wire:sortable-group.item="{{ $content->id }}"
                                                        class="@if ($selected_content && $selected_content->id == $content->id) bg-gradient-to-r from-blue-200 @endif group/content group/contentTitle -ml-2 flex cursor-pointer items-center justify-between border-b border-slate-200 pb-5 pl-0 pt-5 text-sm font-medium text-gray-500 hover:bg-white hover:bg-opacity-50 hover:text-gray-700">

                                                        <!--Title-->
                                                        <span x-trap="edit"
                                                            class="ml-2 flex cursor-pointer items-center">
                                                            @if (is_array(optional($selected_content)->contentable))
                                                                @dd($content->contentable)
                                                            @endif
                                                            @php
                                                                $contentable = class_basename(get_class($content->contentable));
                                                            @endphp

                                                            <span
                                                                class="invisible cursor-ns-resize group-hover/contentTitle:visible"
                                                                wire:sortable-group.handle
                                                                wire:key="section-{{ $section->id }}-sort-group-handle">
                                                                <x-svg-icons.fi-rr-drag-dots-vertical
                                                                    class="h-5 w-5" />
                                                            </span>

                                                            <span title="{{ $contentable }}"
                                                                class="ml-2 mr-5">
                                                                @switch(strtolower($contentable))
                                                                    @case('lecture')
                                                                        <svg fill="currentColor"
                                                                            class="h-5 w-5" viewBox="0 0 24 24"
                                                                            width="512" height="512">
                                                                            <path
                                                                                d="M20,10.5a10.01,10.01,0,0,0-2,.273A5.006,5.006,0,0,0,13,6h-.272A9.929,9.929,0,0,0,13,4,4,4,0,0,0,5,4a9.929,9.929,0,0,0,.272,2H5a5,5,0,0,0-5,5v8a5,5,0,0,0,5,5H6.224a.772.772,0,0,0,.748-.975C6.623,21.766,6,21,6,20a3,3,0,0,1,6,0c0,1-.632,1.768-.973,3.029a.772.772,0,0,0,.748.971H13a5,5,0,0,0,5-5v-.772a10.02,10.02,0,0,0,2,.272,4,4,0,0,0,0-8Z" />
                                                                        </svg>
                                                                    @break

                                                                    @case('assignment')
                                                                        <svg fill="currentColor"
                                                                            class="h-5 w-5" viewBox="0 0 24 24"
                                                                            width="512" height="512">
                                                                            <path
                                                                                d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z" />
                                                                        </svg>
                                                                    @break

                                                                    @case('quiz')
                                                                        <svg fill="currentColor"
                                                                            class="h-5 w-5" viewBox="0 0 24 24"
                                                                            width="512" height="512">
                                                                            <path
                                                                                d="M12.836,.028C9.361-.202,5.961,1.066,3.509,3.521,1.057,5.977-.211,9.378,.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.096,.454,12.836,.028Zm-.933,18.972c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5,.672,1.5,1.5-.672,1.5-1.5,1.5Zm1.928-6.512c-.521,.287-.928,.951-.928,1.512,0,.553-.448,1-1,1s-1-.447-1-1c0-1.285,.807-2.627,1.963-3.264,.763-.42,1.157-1.254,1.004-2.125-.138-.786-.81-1.458-1.596-1.596-.605-.107-1.196,.049-1.657,.435-.454,.382-.714,.94-.714,1.532,0,.553-.448,1-1,1s-1-.447-1-1c0-1.185,.521-2.301,1.428-3.063,.908-.762,2.107-1.078,3.289-.874,1.613,.283,2.938,1.607,3.221,3.221,.298,1.699-.509,3.396-2.009,4.223Z" />
                                                                        </svg>
                                                                    @break
                                                                @endswitch
                                                            </span>
                                                            <span class="relative" x-show="edit"
                                                                x-trap="edit">
                                                                <input type="text"
                                                                    class="flex-grow py-1"
                                                                    x-show="edit" @blur="edit=false"
                                                                    wire:model.debounce.1000ms="sections.{{ $i }}.contents.{{ $n }}.contentable.title" />

                                                                @error('sections.' . $i . '.contents.' .
                                                                    $n . '.contentable.title')
                                                                    <span
                                                                        class="relative mb-4 rounded border border-red-300 bg-red-200 px-3 py-3 text-red-800">{{ $message }}</span>
                                                                @enderror
                                                            </span>
                                                            <div class="flex w-52 flex-grow items-center gap-x-2 truncate py-1 font-bold"
                                                                x-show="!edit">
                                                                {{ $content->contentable->title }}
                                                                @php
                                                                    $statusIcon = $statusIconsArray[strtolower($content->publish_status)];
                                                                @endphp
                                                                <span
                                                                    class="text-{{ $statusColorClassesArray[strtolower($content->publish_status)] }} border-{{ $statusColorClassesArray[strtolower($content->publish_status)] }} flex w-fit items-center gap-x-1 rounded-full border px-2 py-[2px] text-sm font-bold">
                                                                    <x-dynamic-component
                                                                        :component="$statusIcon"
                                                                        class="inline-block h-4 w-4" />
                                                                    {{ ucfirst($content->publish_status) }}
                                                                </span>
                                                            </div>
                                                        </span>
                                                        <!--/Title-->
                                                        @if (!$disableMode)
                                                            <!--Control Buttons-->
                                                            <div x-show="!edit"
                                                                class="hidden items-center space-x-3 group-hover/content:flex">

                                                                <!--Edit-->
                                                                {{--                                                            <button type="button" --}}
                                                                {{--                                                                @click.stop="edit = !edit" --}}
                                                                {{--                                                                class="group/t relative rounded-full p-2 text-slate-500 transition-all hover:bg-blue-500 hover:text-white"> --}}
                                                                {{--                                                                <svg fill="currentColor" --}}
                                                                {{--                                                                    class="h-3 w-3" --}}
                                                                {{--                                                                    viewBox="0 0 24 24"> --}}
                                                                {{--                                                                    <path --}}
                                                                {{--                                                                        d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" /> --}}
                                                                {{--                                                                    <path --}}
                                                                {{--                                                                        d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" /> --}}
                                                                {{--                                                                </svg> --}}
                                                                {{--                                                                <span --}}
                                                                {{--                                                                    class="pointer-events-none absolute left-1/2 top-8 z-50 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-xs font-normal text-white opacity-0 transition-all before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover/t:opacity-100"> --}}
                                                                {{--                                                                    Edit --}}
                                                                {{--                                                                </span> --}}
                                                                {{--                                                            </button> --}}
                                                                <!--/Edit-->

                                                                <!--Delete-->
                                                                <x-tooltip-arrow>
                                                                    <button type="button"
                                                                        @click.stop="confirm('Are you sure you want to delete \'{{ $content->contentable->title }}\' {{ strtolower($contentable) }}?') && $wire.deleteContent('{{ $content->id }}')"
                                                                        class="rounded-full p-2 text-red-500 transition-all hover:bg-red-500 hover:text-white">
                                                                        <svg fill="currentColor"
                                                                            class="h-3 w-3"
                                                                            viewBox="0 0 24 24">
                                                                            <path
                                                                                d="M17,4V2a2,2,0,0,0-2-2H9A2,2,0,0,0,7,2V4H2V6H4V21a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V6h2V4ZM11,17H9V11h2Zm4,0H13V11h2ZM15,4H9V2h6Z" />
                                                                        </svg>
                                                                    </button>
                                                                    <x-slot name="text">
                                                                        Delete
                                                                    </x-slot>
                                                                </x-tooltip-arrow>

                                                                <!--/Delete-->

                                                            </div>
                                                            <!--/Control Buttons-->
                                                        @endif
                                                    </div>
                                                    <!--END Content -->
                                                @endforeach
                                            </div>
                                            @if (!$disableMode)
                                                <!-- add items to sections -->
                                                <div
                                                    class="mt-5 flex items-center justify-center space-x-2 font-bold">
                                                    <!--Add Lecture-->
                                                    <button type="button"
                                                        wire:click="addLecture({{ $section->id }})"
                                                        class="group inline-flex h-10 w-10 items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-2 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-blue-500 hover:w-fit hover:border-blue-500 hover:bg-blue-500 hover:px-3.5 hover:text-white focus:w-fit focus:border-blue-500 focus:px-3.5 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            wire:loading.class="animate-spin"
                                                            wire:target="addLecture({{ $section->id }})"
                                                            fill="currentColor" class="h-5 w-5"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M13,24H11.431a1,1,0,0,1-.957-1.291A11.2,11.2,0,0,0,11,20a2,2,0,0,0-4,0,11.2,11.2,0,0,0,.526,2.709A1,1,0,0,1,6.569,24H5a5.006,5.006,0,0,1-5-5V11A5.006,5.006,0,0,1,5,6h.272A9.929,9.929,0,0,1,5,4a4,4,0,0,1,8,0,9.929,9.929,0,0,1-.272,2H13a5.006,5.006,0,0,1,5,4.773,10.01,10.01,0,0,1,2-.273,4,4,0,0,1,0,8,10.02,10.02,0,0,1-2-.272V19A5.006,5.006,0,0,1,13,24Zm-.272-2H13a3,3,0,0,0,3-3V16.931a1,1,0,0,1,1.291-.957A11.224,11.224,0,0,0,20,16.5a2,2,0,0,0,0-4,11.224,11.224,0,0,0-2.709.526A1,1,0,0,1,16,12.069V11a3,3,0,0,0-3-3H11.431a1,1,0,0,1-.957-1.291A11.2,11.2,0,0,0,11,4,2,2,0,0,0,7,4a11.2,11.2,0,0,0,.526,2.709A1,1,0,0,1,6.569,8H5a3,3,0,0,0-3,3v8a3,3,0,0,0,3,3h.272A9.929,9.929,0,0,1,5,20a4,4,0,0,1,8,0A9.929,9.929,0,0,1,12.728,22Z" />
                                                        </svg>
                                                        <span
                                                            class="hidden whitespace-nowrap font-bold group-hover:block group-focus:block">+
                                                            Lecture</span>
                                                    </button>
                                                    <!--/Add Lecture-->

                                                    <!--Add assignment-->

                                                    <button type="button"
                                                        wire:click="addAssignment({{ $section->id }})"
                                                        class="group inline-flex h-10 w-10 items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-2 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-blue-500 hover:w-fit hover:border-blue-500 hover:bg-blue-500 hover:px-3.5 hover:text-white focus:w-fit focus:border-blue-500 focus:px-3.5 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                                                        <svg fill="currentColor" class="h-5 w-5"
                                                            wire:loading.class="animate-spin"
                                                            wire:target="addAssignment({{ $section->id }})"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M10.5,17a2,2,0,0,1-1.416-.586L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424l-6.793,6.707A1.983,1.983,0,0,1,10.5,17ZM24,19V12.34A12.209,12.209,0,0,0,12.836.028,12,12,0,0,0,.029,12.854C.471,19.208,6.082,24,13.083,24H19A5.006,5.006,0,0,0,24,19ZM12.7,2.024A10.2,10.2,0,0,1,22,12.34V19a3,3,0,0,1-3,3H13.083C7.049,22,2.4,18.1,2.025,12.716A10,10,0,0,1,12.016,2C12.243,2,12.472,2.009,12.7,2.024Z" />
                                                        </svg>
                                                        <span
                                                            class="hidden whitespace-nowrap font-bold group-hover:block group-focus:block">+
                                                            Assignment</span>
                                                    </button>

                                                    <!--/Add assignment-->

                                                    <!--Add quiz-->
                                                    <button type="button"
                                                        wire:click="addQuiz({{ $section->id }})"
                                                        class="group inline-flex h-10 w-10 items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-2 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-blue-500 hover:w-fit hover:border-blue-500 hover:bg-blue-500 hover:px-3.5 hover:text-white focus:w-fit focus:border-blue-500 focus:px-3.5 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                                                        <svg fill="currentColor" class="h-5 w-5"
                                                            wire:loading.class="animate-spin"
                                                            wire:target="addQuiz({{ $section->id }})"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M11.904,16c.828,0,1.5,.672,1.5,1.5s-.672,1.5-1.5,1.5-1.5-.672-1.5-1.5,.672-1.5,1.5-1.5Zm1-2c0-.561,.408-1.225,.928-1.512,1.5-.826,2.307-2.523,2.009-4.223-.283-1.613-1.607-2.938-3.221-3.221-1.182-.204-2.38,.112-3.289,.874-.907,.763-1.428,1.879-1.428,3.063,0,.553,.448,1,1,1s1-.447,1-1c0-.592,.26-1.15,.714-1.532,.461-.386,1.052-.542,1.657-.435,.787,.138,1.458,.81,1.596,1.596,.153,.871-.241,1.705-1.004,2.125-1.156,.637-1.963,1.979-1.963,3.264,0,.553,.448,1,1,1s1-.447,1-1Zm11.096,5v-6.66C24,5.861,19.096,.454,12.836,.028,9.361-.202,5.961,1.066,3.509,3.521,1.057,5.977-.211,9.378,.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5ZM12.701,2.024c5.215,.354,9.299,4.885,9.299,10.315v6.66c0,1.654-1.346,3-3,3h-5.917c-6.035,0-10.686-3.904-11.059-9.284-.201-2.899,.855-5.735,2.899-7.781,1.882-1.885,4.435-2.934,7.092-2.934,.228,0,.457,.008,.685,.023Z" />
                                                        </svg>
                                                        <span
                                                            class="hidden whitespace-nowrap font-bold group-hover:block group-focus:block">
                                                            + Quiz</span>
                                                    </button>

                                                    <!--/Add quiz-->
                                                </div>
                                                <!--/add items to sections  -->
                                            @endif
                                        </div>
                                        <!-- END Section Collapse Content -->
                                    </div>
                                    <!-------/ New Course section (with no items)-------->
                                @endforeach
                            </div>
                        @endif
                        @if (!$course->id)
                            <div class="mx-4 mt-5">
                                Please, fill up the main course fields: title, description, etc. in order
                                to start.
                            </div>
                        @else
                            @if (!$disableMode)
                                <!-- add Section Button-->
                                <div class="mt-5 flex items-center justify-center pb-40 font-bold">

                                    <button type="button" wire:key="button_add_section"
                                        wire:click.stop="addSection"
                                        class="inline-flex items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-blue-500 hover:border-blue-500 hover:bg-blue-500 hover:text-white focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                                        <span>
                                            <x-svg-icons.fi-rr-rotate-right wire:loading
                                                wire:target="addSection"
                                                class="h-5 w-5 animate-spin" />
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                wire:loading.remove wire:target="addSection"
                                                class="h-5 w-5" viewBox="0 0 24 24" width="512"
                                                height="512">
                                                <path
                                                    d="M22.2,2.163a4.992,4.992,0,0,0-4.1-1.081l-3.822.694A4,4,0,0,0,12,3.065,4,4,0,0,0,9.716,1.776L5.9,1.082A5,5,0,0,0,0,6V16.793a5,5,0,0,0,4.105,4.919l6.286,1.143a9,9,0,0,0,3.218,0L19.9,21.712A5,5,0,0,0,24,16.793V6A4.983,4.983,0,0,0,22.2,2.163ZM11,20.928c-.084-.012-.168-.026-.252-.041L4.463,19.745A3,3,0,0,1,2,16.793V6A3,3,0,0,1,5,3a3.081,3.081,0,0,1,.54.049l3.82.7A2,2,0,0,1,11,5.712Zm11-4.135a3,3,0,0,1-2.463,2.952l-6.285,1.142c-.084.015-.168.029-.252.041V5.712a2,2,0,0,1,1.642-1.968l3.821-.7A3,3,0,0,1,22,6Z" />
                                            </svg>
                                        </span>
                                        <span class="whitespace-nowrap font-bold">+ Section</span>
                                    </button>

                                </div>
                                <!--/ add Section Button-->
                            @endif

                            <!--Sidebar Footer-->
                            <div
                                class="fixed bottom-0 flex h-fit w-80 flex-col items-center justify-evenly gap-y-5 border-t-4 bg-blue-50 pb-5">
                                @if (config('traivis.education_institute_enabled'))
                                    <!--Approvals-->
                                    <div class="w-full border-b border-l-4 border-gray-200 border-l-transparent bg-white text-sm font-medium text-gray-500 transition-colors hover:border-l-blue-500 hover:bg-blue-50 hover:text-gray-700"
                                        :class="isOpen ? 'bg-blue-50 border-l-blue-500 text-gray-700' : ''"
                                        @if ($selected_task || $open == 'tasks') x-data="{ isOpen: true }"
                                         @else
                                             x-data="{ isOpen: false }" @endif>
                                        <div class="flex cursor-pointer items-center p-5"
                                            @click="isOpen = !isOpen">
                                            <a href="#" class="mr-5">
                                                <svg fill="currentColor" class="h-5 w-5"
                                                    height="512" viewBox="0 0 24 24" width="512">
                                                    <path
                                                        d="m4 22a2.982 2.982 0 0 1 -2.122-.879l-1.544-1.374a1 1 0 0 1 1.332-1.494l1.585 1.414a1 1 0 0 0 1.456.04l3.6-3.431a1 1 0 1 1 1.378 1.448l-3.585 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2zm-19-7a2.982 2.982 0 0 1 -2.122-.879l-1.585-1.585a1 1 0 0 1 1.414-1.414l1.586 1.585a1.023 1.023 0 0 0 1.414 0l3.6-3.431a1 1 0 1 1 1.382 1.448l-3.589 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2zm-19-7a2.982 2.982 0 0 1 -2.122-.879l-1.544-1.374a1 1 0 0 1 1.332-1.494l1.585 1.414a1 1 0 0 0 1.456.04l3.604-3.431a1 1 0 0 1 1.378 1.448l-3.589 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2z" />
                                                </svg>
                                            </a>

                                            <div class="flex flex-grow py-1 font-bold">Task Approvals
                                            </div>
                                            <div class="ml-5">
                                                <svg viewbox="0 0 24 24" fill="currentColor"
                                                    class="h-5 w-5 rotate-0 transition-transform"
                                                    :class="isOpen ? 'rotate-90' : 'rotate-0'">
                                                    <path
                                                        d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>

                                        <!--Approvals Content -->
                                        <div class="" x-cloak x-show="isOpen"
                                            x-transition:enter="transition-opacity ease-linear"
                                            x-transition:enter-start="opacity-0"
                                            x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition-opacity ease-linear"
                                            x-transition:leave-start="opacity-100"
                                            x-transition:leave-end="opacity-0" style="display: none;">

                                            <!--Tasks-->
                                            <ul class="h-52 overflow-auto">
                                                {{--                                        task_id --}}
                                                @foreach ($course->tasks as $task)
                                                    <!-- Task -->
                                                    <li wire:click="selectTask({{ $task->id }})"
                                                        @if ($selected_task && $selected_task->id == $task->id) class=" bg-gradient-to-r from-blue-200"
                                                        x-data
                                                        x-init="$nextTick(() => $el.scrollIntoView())" @endif>
                                                        <a
                                                            class="flex cursor-pointer items-center gap-x-3 border-b border-gray-200 p-5 text-sm font-medium text-gray-500 transition-colors hover:text-gray-700">
                                                            <x-svg-icons.fi-rr-rotate-right wire:loading
                                                                wire:target="selectTask({{ $task->id }})"
                                                                class="h-5 w-5 animate-spin" />
                                                            <svg wire:loading.remove
                                                                wire:target="selectTask({{ $task->id }})"
                                                                fill="currentColor" class="h-5 w-5"
                                                                height="512" viewBox="0 0 24 24"
                                                                width="512">
                                                                <path
                                                                    d="m10 23a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1z">
                                                                </path>
                                                                <path
                                                                    d="m1 20h6a1 1 0 0 0 0-2h-6a1 1 0 0 0 0 2z">
                                                                </path>
                                                                <path
                                                                    d="m1 16h4a1 1 0 0 0 0-2h-4a1 1 0 0 0 0 2z">
                                                                </path>
                                                                <path
                                                                    d="m12 0a12 12 0 0 0 -12 12c0 .061.008.12.009.181a2.966 2.966 0 0 1 .991-.181h4a2.99 2.99 0 0 1 2.78 4.116 2.975 2.975 0 0 1 2 4 2.949 2.949 0 0 1 2.039 3.875c.061 0 .12.009.181.009a12 12 0 0 0 0-24zm3.707 15.707a1 1 0 0 1 -1.414 0l-3-3a1 1 0 0 1 -.293-.707v-5a1 1 0 0 1 2 0v4.586l2.707 2.707a1 1 0 0 1 0 1.414z">
                                                                </path>
                                                            </svg>

                                                            <div class="flex-grow py-1 font-bold">
                                                                {{ $task->task_name }}</div>

                                                            @switch($task->task_status)
                                                                @case('progress')
                                                                    <svg fill="currentColor"
                                                                        class="text ml-auto h-5 w-5"
                                                                        height="30" viewBox="0 0 24 24"
                                                                        width="30"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 1">
                                                                        <path
                                                                            d="m21 24h-18v-3a12.2 12.2 0 0 1 4.442-9 12.2 12.2 0 0 1 -4.442-9 3 3 0 0 1 3-3h12a3 3 0 0 1 3 3 12.221 12.221 0 0 1 -4.425 9 12.221 12.221 0 0 1 4.425 9zm-16-2h14v-1c0-3.774-2.5-6.552-4.592-8.217l-.984-.783.984-.783c2.092-1.665 4.592-4.443 4.592-8.217a1 1 0 0 0 -1-1h-12a1 1 0 0 0 -1 1c0 3.774 2.508 6.551 4.612 8.216l.988.784-.991.784c-2.101 1.665-4.609 4.442-4.609 8.216zm7.018-6.018a10.065 10.065 0 0 1 1.943 2.018h-3.893m1.946-4.487c-1.637 1.073-4.429 3.33-4.934 6.487h9.842c-.5-3.184-3.288-5.43-4.908-6.487z">
                                                                        </path>
                                                                    </svg>
                                                                @break

                                                                @case('extended')
                                                                    <svg fill="currentColor"
                                                                        class="text ml-auto h-5 w-5"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z">
                                                                        </path>
                                                                        <path
                                                                            d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z">
                                                                        </path>
                                                                    </svg>
                                                                @break

                                                                @case('delayed')
                                                                    <svg fill="currentColor"
                                                                        class="text ml-auto h-5 w-5"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z">
                                                                        </path>
                                                                        <path
                                                                            d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z">
                                                                        </path>
                                                                    </svg>
                                                                @break

                                                                @case('completed')
                                                                    <svg fill="currentColor"
                                                                        class="ml-auto h-5 w-5 text-green-600"
                                                                        viewBox="0 0 24 24" width="512"
                                                                        height="512">
                                                                        <path
                                                                            d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                                                        </path>
                                                                    </svg>
                                                                @break

                                                                @case('extension_request')
                                                                    <svg fill="currentColor"
                                                                        class="text ml-auto h-5 w-5"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z">
                                                                        </path>
                                                                        <path
                                                                            d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z">
                                                                        </path>
                                                                    </svg>
                                                                @break

                                                                @case('extension_rejected')
                                                                    <svg fill="red"
                                                                        class="text ml-auto h-5 w-5"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z">
                                                                        </path>
                                                                        <path
                                                                            d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z">
                                                                        </path>
                                                                    </svg>
                                                                @break

                                                                @case('complete_request')
                                                                    <svg fill="gray"
                                                                        class="ml-auto h-5 w-5 text-green-600"
                                                                        viewBox="0 0 24 24" width="512"
                                                                        height="512">
                                                                        <path
                                                                            d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                                                        </path>
                                                                    </svg>
                                                                @break

                                                                @case('complete_rejected')
                                                                    <svg fill="red"
                                                                        class="ml-auto h-5 w-5 text-green-600"
                                                                        viewBox="0 0 24 24" width="512"
                                                                        height="512">
                                                                        <path
                                                                            d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                                                        </path>
                                                                    </svg>
                                                                @break
                                                            @endswitch

                                                        </a>

                                                    </li>
                                                    <!--END Task -->
                                                @endforeach

                                            </ul>
                                            <!--/Tasks-->

                                            <!-- add Task -->
                                            <div
                                                class="mt-5 flex items-center justify-center space-x-2 font-bold">
                                                <button type="button"
                                                    wire:click='$emit("openModal", "add-course-task", {{ json_encode([
                                                        'course_id' => $course_id,
                                                    ]) }})'
                                                    class="group flex inline-flex h-10 w-fit items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-2 px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-blue-500 hover:border-blue-500 hover:bg-blue-500 hover:text-white focus:w-fit focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                                                    <svg fill="currentColor" class="h-5 w-5"
                                                        height="512" viewBox="0 0 24 24"
                                                        width="512">
                                                        <path
                                                            d="m9 24h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2z" />
                                                        <path
                                                            d="m7 20h-6a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2z" />
                                                        <path
                                                            d="m5 16h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z" />
                                                        <path
                                                            d="m13 23.955a1 1 0 0 1 -.089-2 10 10 0 1 0 -10.87-10.865 1 1 0 0 1 -1.992-.18 12 12 0 0 1 23.951 1.09 11.934 11.934 0 0 1 -10.91 11.951c-.03.003-.061.004-.09.004z" />
                                                        <path
                                                            d="m12 6a1 1 0 0 0 -1 1v5a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414l-2.707-2.707v-4.586a1 1 0 0 0 -1-1z" />
                                                    </svg>
                                                    <span class="whitespace-nowrap font-bold">+
                                                        Task</span>
                                                </button>

                                            </div>
                                            <!--END add Task  -->

                                        </div>
                                        <!-- END Course Section Content -->

                                    </div>
                                    <!---/Approvals-->
                                @endif
                                <!--publish button-->

                                <div class="flex flex-col items-center justify-evenly gap-y-2">
                                    {{-- prettier-ignore --}}

                                    <!-- Status -->
                                    @if ($course->publish_status)
                                        @php
                                            $statusIcon = $statusIconsArray[strtolower($course->publish_status)];
                                        @endphp
                                        <h2 class="flex items-center gap-x-2 py-3 text-sm">
                                            Status
                                            <span
                                                class="text-{{ $statusColorClassesArray[strtolower($course->publish_status)] }} border-{{ $statusColorClassesArray[strtolower($content->publish_status)] }} flex w-fit items-center gap-x-1 rounded-full border px-2 py-[2px] text-sm font-bold">
                                                <x-dynamic-component :component="$statusIcon"
                                                    class="inline-block h-4 w-4" />
                                                {{ ucfirst($course->publish_status) }}</span>
                                        </h2>
                                    @endif
                                    <!-- End Status -->

                                    @if (strtolower($course->publish_status) == 'ready for review' ||
                                            strtolower($course->publish_status) == 'approved' ||
                                            strtolower($course->publish_status) == 'scheduled to publish')
                                        <button wire:click="publishCourse" {{-- wire:click="$emitTo('publish-course', 'openModal',{{ json_encode(['course_id' => $course_id]) }})" --}}
                                            type="button"
                                            class="inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-blue-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                                            <svg fill="currentColor" class="h-5 w-5" height="512"
                                                viewBox="0 0 24 24" width="512">
                                                <path
                                                    d="m18 9.064a3.049 3.049 0 0 0 -.9-2.164 3.139 3.139 0 0 0 -4.334 0l-11.866 11.869a3.064 3.064 0 0 0 4.33 4.331l11.87-11.869a3.047 3.047 0 0 0 .9-2.167zm-14.184 12.624a1.087 1.087 0 0 1 -1.5 0 1.062 1.062 0 0 1 0-1.5l7.769-7.77 1.505 1.505zm11.872-11.872-2.688 2.689-1.5-1.505 2.689-2.688a1.063 1.063 0 1 1 1.5 1.5zm-10.825-6.961 1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29l-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29zm18.274 14.29-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29l1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29zm-5.382-14.645 1.356-.387.389-1.358a1.042 1.042 0 0 1 2 0l.387 1.356 1.356.387a1.042 1.042 0 0 1 0 2l-1.356.387-.387 1.359a1.042 1.042 0 0 1 -2 0l-.387-1.355-1.358-.389a1.042 1.042 0 0 1 0-2z" />
                                            </svg>
                                            <span class="whitespace-nowrap font-bold">
                                                @switch(strtolower($course->publish_status))
                                                    {{-- @case ('draft')
                                                        Uncompleted tasks
                                                    @break --}}
                                                    @case ('ready for review')
                                                        Submit for review
                                                    @break

                                                    @case ('approved')
                                                        Publish Course
                                                    @break

                                                    @case ('scheduled to publish')
                                                        Publish Course
                                                    @break
                                                @endswitch
                                            </span>
                                        </button>
                                    @endif
                                    <span class="text-sm font-bold text-gray-400"
                                        title="Updated at: {{ $course->updated_at }}"> Last saved
                                        {{ $course->updated_at->diffForHumans() }}
                                    </span>
                                </div>
                                <!--/publish button-->

                            </div>

                        @endif

                        <!--END Sidebar Footer-->

                    </div>
                    <!--END left col (Course Nav content) -->

                </div>
            </aside>
            <!--END Left column (Course nav) -->

            <!-- Primary column (Content area)-->
            <section aria-labelledby="primary-heading"
                class="flex h-full min-w-0 flex-1 overflow-y-auto lg:order-last">
                <h1 id="primary-heading" class="sr-only">Create New Course</h1>
                <div class="flex h-full min-w-0 flex-1 overflow-hidden">

                    <!-- Content area -->
                    <div class="flex-grow">

                        <!---------Course Header----------->
                        <div class="justify-between">

                            <!-- Cover -->
                            <div class="bg-gray-500 bg-cover bg-center px-5 pt-2 text-white"
                                id="cover"
                                @if ($cover) style="background-image: url('{{ $cover->preview_url }}')"
                                 wire:key="cover-{{ $cover->id }}" @endif>

                                <!--cover top-->
                                <div class="relative min-w-0 flex-1">

                                    <!--course name / price row-->
                                    <div class="flex flex-row flex-wrap items-center">
                                        <div
                                            class="relative flex w-full items-center sm:w-1/3 lg:ml-0 lg:w-1/2">
                                            <label for="Cname" class="mt-2 w-6">
                                                <svg class="h-5 w-5 drop-shadow-md" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                    viewBox="0 0 24 24" width="512" height="512">
                                                    <path
                                                        d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                    <path
                                                        d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                                </svg>
                                            </label>

                                            <input id="Cname" type="text"
                                                class="mt-2 h-10 w-full rounded-full border-0 bg-transparent text-2xl font-bold placeholder-white drop-shadow-md transition-colors hover:bg-white hover:bg-opacity-50 focus:bg-white focus:text-gray-700 focus:placeholder-gray-700 sm:truncate sm:text-3xl lg:w-1/2"
                                                placeholder="Course name..." maxlength="200"
                                                wire:model.debounce.1000ms="courseDetails.title"
                                                {{ $disableMode ? 'disabled' : '' }}>
                                            @error('courseDetails.title')
                                                <x-tooltip-arrow-up-validation-error-cover
                                                    :message="$message" />
                                            @enderror
                                        </div>
                                        <!---->

                                        <!--price-->
                                        <div
                                            class="mt-2 flex w-full flex-row items-center justify-end sm:ml-[33%] sm:w-1/3 lg:ml-0 lg:w-1/4">
                                            {{-- <label class="mr-3">
                                                @if ($this->is_paid)
                                                    Is paid
                                                @else
                                                    Is free
                                                @endif
                                            </label> --}}
                                            <label for="price" class="mr-3">Price</label>

                                            <div class="relative">
                                                <input type="number" autocomplete="off"
                                                    min="0"
                                                    wire:model.debounce.1000ms="courseDetails.price"
                                                    name="price" id="price"
                                                    class="number-arrows-off cloc peer h-10 w-56 truncate rounded-full border-0 bg-transparent pl-7 pr-12 text-2xl font-bold placeholder-white drop-shadow-md transition-colors hover:bg-white hover:bg-opacity-50 focus:bg-white focus:text-gray-700 focus:placeholder-gray-700 sm:text-3xl"
                                                    placeholder="0.00"
                                                    {{ $disableMode ? 'disabled' : '' }}>

                                                <div
                                                    class="pointer-events-none absolute inset-y-0 left-0 order-first flex items-center pl-3 peer-focus-visible:text-gray-700">
                                                    <span class="font-bold"> $ </span>
                                                </div>

                                                <div
                                                    class="absolute inset-y-0 right-0 flex items-center peer-focus-visible:text-white">
                                                    <label for="currency"
                                                        class="sr-only">Currency</label>

                                                    <select id="currency" name="currency"
                                                        {{ $disableMode ? 'disabled' : '' }}
                                                        class="h-full rounded-full border-0 bg-transparent py-0 pl-2 pr-7 font-bold placeholder-white drop-shadow-md transition-colors hover:bg-white hover:bg-opacity-50 focus:bg-white focus:text-gray-700 focus:placeholder-gray-700 sm:truncate sm:text-sm">
                                                        <option>USD</option>
                                                        <option>CAD</option>
                                                        <option>EUR</option>
                                                    </select>
                                                </div>
                                                @error('courseDetails.price')
                                                    <x-tooltip-arrow-up-validation-error-cover
                                                        :message="$message" />
                                                @enderror

                                            </div>
                                        </div>
                                        <!---->

                                        <!---->

                                        <!--sale_price-->
                                        <div
                                            class="mt-2 flex w-full flex-row items-center justify-end sm:w-1/3 lg:w-1/4">
                                            <label for="price" class="mr-3">Sale price</label>

                                            <div class="relative">

                                                <input type="number" autocomplete="off"
                                                    min="0"
                                                    wire:model.debounce.1000ms="courseDetails.sale_price"
                                                    name="sale_price" id="sale_price"
                                                    class="number-arrows-off cloc peer h-10 w-56 truncate rounded-full border-0 bg-transparent pl-7 pr-12 text-2xl font-bold placeholder-white drop-shadow-md transition-colors hover:bg-white hover:bg-opacity-50 focus:bg-white focus:text-gray-700 focus:placeholder-gray-700 sm:text-3xl"
                                                    placeholder="0.00"
                                                    {{ $disableMode ? 'disabled' : '' }}>

                                                <div
                                                    class="pointer-events-none absolute inset-y-0 left-0 order-first flex items-center pl-3 peer-focus-visible:text-gray-700">
                                                    <span class="font-bold"> $ </span>
                                                </div>

                                                <div
                                                    class="absolute inset-y-0 right-0 flex items-center peer-focus-visible:text-gray-700">
                                                    <label for="currency"
                                                        class="sr-only">Currency</label>

                                                    <select id="currency" name="currency"
                                                        {{ $disableMode ? 'disabled' : '' }}
                                                        class="h-full rounded-full border-0 bg-transparent py-0 pl-2 pr-7 font-bold placeholder-white drop-shadow-md transition-colors hover:bg-white hover:bg-opacity-50 focus:bg-white focus:text-gray-700 focus:placeholder-gray-700 sm:truncate sm:text-sm">
                                                        <option>USD</option>
                                                        <option>CAD</option>
                                                        <option>EUR</option>
                                                    </select>
                                                </div>
                                                @error('courseDetails.sale_price')
                                                    <x-tooltip-arrow-up-validation-error-cover
                                                        :message="$message" />
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <!--slug-->
                                    <div class="flex flex-row items-start" x-trap="editSlug">
                                        {{--                                        <label for="course_slug" class="mt-5 hidden w-6 md:block" --}}
                                        {{--                                            --}}{{--                                            @click="editSlug=!editSlug" title="Edit slug" --}}{{-- > --}}
                                        {{--                                            <svg class="h-3 w-3 drop-shadow-md" fill="currentColor" --}}
                                        {{--                                                xmlns="http://www.w3.org/2000/svg" id="Filled" --}}
                                        {{--                                                viewBox="0 0 24 24" width="512" height="512"> --}}
                                        {{--                                                <path --}}
                                        {{--                                                    d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" /> --}}
                                        {{--                                                <path --}}
                                        {{--                                                    d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" /> --}}
                                        {{--                                            </svg> --}}
                                        {{--                                        </label> --}}

                                        <a :href="'{{ route('course') }}/' + courseSlug"
                                            x-text="'{{ route('course') }}/' + courseSlug"
                                            target="_blank"
                                            class="max-w-96 mb-2 ml-11 mt-4 inline-block rounded-lg border-0 bg-transparent placeholder-white drop-shadow-md transition-colors hover:bg-white hover:bg-opacity-50"
                                            x-show="courseSlug"></a>
                                        {{--                                        <input id="course_slug" --}}
                                        {{--                                            class="mt-2 w-96 rounded-lg border-0 bg-transparent placeholder-white drop-shadow-md transition-colors hover:bg-white hover:bg-opacity-50 focus:overflow-auto focus:bg-white focus:text-gray-700 focus:placeholder-gray-700" --}}
                                        {{--                                            wire:model.defer="course.slug" type="text" --}}
                                        {{--                                            x-show="editSlug"> --}}

                                        {{--                                        <span x-show="editSlug" class="mt-2"> --}}

                                        {{--                                            <button --}}
                                        {{--                                                @click="$wire.set('course.slug', courseSlug);editSlug=false">Ok</button> --}}
                                        {{--                                            <button @click="editSlug=false">Cancel</button> --}}
                                        {{--                                        </span> --}}

                                    </div>

                                    <!--description-->
                                    <div class="flex flex-row items-start space-x-2">
                                        <label for="course_description"
                                            class="mt-5 hidden w-6 md:block">
                                            <svg class="h-3 w-3 drop-shadow-md" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                <path
                                                    d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                            </svg>
                                        </label>
                                        <textarea wire:model.debounce.1000ms="courseDetails.meta_description"
                                            class="mt-2 w-4/5 resize-none rounded-lg border-0 bg-transparent placeholder-white drop-shadow-md transition-colors hover:bg-white hover:bg-opacity-50 focus:overflow-auto focus:bg-white focus:text-gray-700 focus:placeholder-gray-700"
                                            placeholder="Course meta description..." rows="5" maxlength="160"
                                            {{ $disableMode ? 'disabled' : '' }}></textarea>
                                        @error('courseDetails.meta_description')
                                            <x-tooltip-arrow-up-validation-error-cover :message="$message" />
                                        @enderror

                                    </div>
                                    <!---->
                                    @if (!$disableMode)
                                        <!--change cover-->
                                        <div class="absolute -right-8 bottom-5 lg:-right-8">

                                            @if ($cover)
                                                <button
                                                    @click="confirm('Delete the cover image?') && @this.deleteCover">
                                                    <x-svg-icons.fi-sr-trash
                                                        class="h-3 w-3 text-red-500 drop-shadow-md" />
                                                </button>
                                            @endif
                                            <button type="button"
                                                class="inline-flex items-center space-x-2 rounded-full rounded-r-none border border-transparent bg-blue-500 px-3.5 py-2 pr-5 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                                                <label
                                                    class="cursor-pointer whitespace-nowrap font-bold">
                                                    <x-svg-icons.fi-rr-rotate-right wire:loading
                                                        wire:target="cover"
                                                        class="mr-2 inline-block h-5 w-5 animate-spin" />
                                                    Cover pic
                                                    <input type="file" class="hidden"
                                                        accept="image/png, image/jpeg"
                                                        wire:model="cover">
                                                </label>
                                            </button>
                                            @error('cover')
                                                <x-tooltip-arrow-up-validation-error-cover
                                                    arrow-side="right" :message="$message" />
                                            @enderror

                                        </div>
                                        <!---->
                                    @endif

                                </div>
                                <!--END cover top-->

                                <!-- Cover footer (Info Bar) -->
                                <div
                                    class="flex h-fit w-full flex-row flex-wrap items-center justify-evenly gap-y-2 border-gray-300 py-2 font-bold text-white">

                                    <!-- course level-->
                                    <div
                                        class="{{--                                        hover:bg-white hover:text-gray-500 --}} {{--                                        focus:bg-white focus:text-gray-500 --}} relative flex items-center text-white">
                                        <select {{ $disableMode ? 'disabled' : '' }}
                                            class="rounded-md border border-gray-300 bg-transparent shadow-sm hover:bg-white hover:text-gray-500 focus:bg-white focus:text-gray-500"
                                            wire:model="courseDetails.course_level">
                                            {{--                                            <option value="">Level</option> --}}
                                            <option value="beginners">Beginners</option>
                                            <option value="intermediate">Intermediate</option>
                                            <option value="expert">Expert</option>
                                        </select>

                                        @error('courseDetails.course_level')
                                            <x-tooltip-arrow-up-validation-error :message="$message" />
                                        @enderror

                                        <!-- dropdown-->
                                        {{-- <div x-data="{ jopen: false }" --}} {{--
                @keydown.window.escape.stop="jopen = false" --}}
                                        {{--
                @click.outside="jopen = false" class="relative h-10 w-36"> --}}

                                        {{--
                                    <!--button--> --}}
                                        {{-- <button type="button" @click="jopen = !jopen" --}} {{--
                    class="relative w-full cursor-default rounded-md border border-gray-300 py-2 pl-3 pr-10 text-left shadow-sm hover:bg-white hover:text-gray-500 focus:border-blue-500 focus:bg-white focus:text-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
                    --}}
                                        {{-- aria-haspopup="listbox" aria-expanded="true" --}}
                                        {{--
                                        aria-labelledby="listbox-label"> --}}

                                        {{-- <span class="flex items-center"> --}}
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" --}} {{--
                            viewbox="0 0 512.051 512.051" xml:space="preserve" --}}
                                        {{--
                            fill="currentColor" class="h-5"> --}}
                                        {{-- <path --}} {{--
                                d="M21.359,101.359h58.368c11.52,42.386,55.219,67.408,97.605,55.888c27.223-7.399,48.489-28.665,55.888-55.888h257.472   c11.782,0,21.333-9.551,21.333-21.333s-9.551-21.333-21.333-21.333H233.22C221.7,16.306,178.001-8.716,135.615,2.804   c-27.223,7.399-48.489,28.665-55.888,55.888H21.359c-11.782,0-21.333,9.551-21.333,21.333S9.577,101.359,21.359,101.359z">
                                --}}
                                        {{-- </path> --}}
                                        {{-- <path --}} {{--
                                d="M490.692,234.692h-58.368c-11.497-42.38-55.172-67.416-97.552-55.92c-27.245,7.391-48.529,28.674-55.92,55.92H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h257.493c11.497,42.38,55.172,67.416,97.552,55.92   c27.245-7.391,48.529-28.674,55.92-55.92h58.368c11.782,0,21.333-9.551,21.333-21.333   C512.025,244.243,502.474,234.692,490.692,234.692z">
                                --}}
                                        {{-- </path> --}}
                                        {{-- <path --}} {{--
                                d="M490.692,410.692H233.22c-11.52-42.386-55.219-67.408-97.605-55.888c-27.223,7.399-48.489,28.665-55.888,55.888H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h58.368c11.52,42.386,55.219,67.408,97.605,55.888   c27.223-7.399,48.489-28.665,55.888-55.888h257.472c11.782,0,21.333-9.551,21.333-21.333   C512.025,420.243,502.474,410.692,490.692,410.692z">
                                --}}
                                        {{-- </path> --}}
                                        {{-- </svg> --}}
                                        {{-- <span class="ml-3 block truncate"> Level </span> --}}
                                        {{-- </span> --}}

                                        {{-- <span --}} {{--
                        class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                        --}}
                                        {{--
                                            <!-- Heroicon name: solid/selector --> --}}
                                        {{-- <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                --}} {{-- viewBox="0 0 20 20" fill="currentColor" --}}
                                        {{--
                            aria-hidden="true"> --}}
                                        {{--
                                                <path fill-rule="evenodd" --}} {{--
                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                --}}
                                        {{-- clip-rule="evenodd" /> --}}
                                        {{--
                                            </svg> --}}
                                        {{--
                                        </span> --}}
                                        {{-- </button> --}}
                                        {{-- --}}
                                        {{--
                                    <!--menu--> --}}
                                        {{-- <ul
                                        class="absolute z-10 mt-1 max-h-56 w-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                                        --}} {{-- x-cloak x-show="jopen" --}}
                                        {{--
                    x-transition:enter="transition ease-out duration-100" --}}
                                        {{--
                                        x-transition:enter-start="transform opacity-0 scale-95" --}} {{--
                    x-transition:enter-end="transform opacity-100 scale-100" --}}
                                        {{--
                    x-transition:leave="transition ease-in duration-75" --}}
                                        {{--
                                        x-transition:leave-start="transform opacity-100 scale-100" --}} {{--
                    x-transition:leave-end="transform opacity-0 scale-95" --}}
                                        {{--
                    tabindex="-1" role="listbox" --}}
                                        {{--
                                        aria-labelledby="listbox-label" --}} {{--
                    aria-activedescendant="listbox-option-1"> --}}

                                        {{--
                                        <!--option--> --}}
                                        {{-- <li
                                            class="relative cursor-pointer select-none py-2 pl-3 pr-9 text-gray-500 hover:bg-blue-500 hover:text-white"
                                            --}} {{-- id="listbox-option-1" role="option"> --}}
                                        {{-- <div class="flex items-center"> --}}
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" --}} {{--
                                fill="currentColor" class="h-5 w-5" --}}
                                        {{-- id="Bold"
                                viewBox="0 0 24 24" --}}
                                        {{-- width="512" height="512">
                                                    --}}
                                        {{--
                                                    <path --}} {{--
                                    d="M12,6A3,3,0,0,0,9,9V21a3,3,0,0,0,6,0V9A3,3,0,0,0,12,6Zm1,15a1,1,0,0,1-2,0V9a1,1,0,0,1,2,0Z" />
                                --}}
                                        {{--
                                                    <path --}} {{--
                                    d="M21,0a3,3,0,0,0-3,3V21a3,3,0,0,0,6,0V3A3,3,0,0,0,21,0Zm1,21a1,1,0,0,1-2,0V3a1,1,0,0,1,2,0Z" />
                                --}}
                                        {{--
                                                    <path --}} {{--
                                    d="M3,12a3,3,0,0,0-3,3v6a3,3,0,0,0,6,0V15A3,3,0,0,0,3,12Z" />
                                --}}
                                        {{--
                                                </svg> --}}
                                        {{-- <span class="ml-3 block truncate font-normal"> --}}
                                        {{-- Beginners </span> --}}
                                        {{-- </div> --}}

                                        {{-- </li> --}}
                                        {{--
                                        <!--END option--> --}}

                                        {{--
                                        <!--option--> --}}
                                        {{-- <li
                                            class="relative cursor-pointer select-none py-2 pl-3 pr-9 text-gray-500 hover:bg-blue-500 hover:text-white"
                                            --}} {{-- id="listbox-option-2" role="option"> --}}
                                        {{-- <div class="flex items-center"> --}}
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" --}} {{--
                                fill="currentColor" class="h-5 w-5" --}}
                                        {{-- id="Bold"
                                viewBox="0 0 24 24" --}}
                                        {{-- width="512" height="512">
                                                    --}}
                                        {{--
                                                    <path --}} {{--
                                    d="M12,6A3,3,0,0,0,9,9V21a3,3,0,0,0,6,0V9A3,3,0,0,0,12,6Z" />
                                --}}
                                        {{--
                                                    <path --}} {{--
                                    d="M21,0a3,3,0,0,0-3,3V21a3,3,0,0,0,6,0V3A3,3,0,0,0,21,0Zm1,21a1,1,0,0,1-2,0V3a1,1,0,0,1,2,0Z" />
                                --}}
                                        {{--
                                                    <path --}} {{--
                                    d="M3,12a3,3,0,0,0-3,3v6a3,3,0,0,0,6,0V15A3,3,0,0,0,3,12Z" />
                                --}}
                                        {{--
                                                </svg> --}}
                                        {{-- <span class="ml-3 block truncate font-normal"> --}}
                                        {{-- Intermediate </span> --}}
                                        {{-- </div> --}}

                                        {{-- </li> --}}
                                        {{--
                                        <!--END option--> --}}

                                        {{--
                                        <!--option--> --}}
                                        {{-- <li
                                            class="relative cursor-pointer select-none py-2 pl-3 pr-9 text-gray-500 hover:bg-blue-500 hover:text-white"
                                            --}} {{-- id="listbox-option-3" role="option"> --}}
                                        {{-- <div class="flex items-center"> --}}
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" --}} {{--
                                fill="currentColor" class="h-5 w-5" --}}
                                        {{-- id="Bold"
                                                    viewBox="0 0 24 24" --}} {{-- width="512" height="512">
                                --}}
                                        {{--
                                                    <path --}} {{--
                                    d="M12,6A3,3,0,0,0,9,9V21a3,3,0,0,0,6,0V9A3,3,0,0,0,12,6Z" />
                                --}}
                                        {{--
                                                    <path --}} {{--
                                    d="M21,0a3,3,0,0,0-3,3V21a3,3,0,0,0,6,0V3A3,3,0,0,0,21,0Z" />
                                --}}
                                        {{--
                                                    <path --}} {{--
                                    d="M3,12a3,3,0,0,0-3,3v6a3,3,0,0,0,6,0V15A3,3,0,0,0,3,12Z" />
                                --}}
                                        {{--
                                                </svg> --}}
                                        {{-- <span class="ml-3 block truncate font-normal"> --}}
                                        {{-- Expert </span> --}}
                                        {{-- </div> --}}

                                        {{--
                                            <!--check for selected items--> --}}
                                        {{-- <span --}} {{--
                            class="absolute inset-y-0 right-0 flex items-center pr-4 text-blue-600">
                            --}}
                                        {{-- <svg class="h-5 w-5" --}} {{--
                                xmlns="http://www.w3.org/2000/svg" --}}
                                        {{--
                                                    viewBox="0 0 20 20" fill="currentColor" --}} {{--
                                aria-hidden="true"> --}}
                                        {{--
                                                    <path fill-rule="evenodd" --}} {{--
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    --}}
                                        {{-- clip-rule="evenodd" /> --}}
                                        {{--
                                                </svg> --}}
                                        {{-- </span> --}}
                                        {{--
                                        </li> --}}
                                        {{--
                                        <!--END option--> --}}

                                        {{--
                                        <!-- More items... --> --}}
                                        {{--
                                    </ul> --}}
                                        {{--
                                </div> --}}
                                        <!--End dropdown-->
                                    </div>
                                    <!--end course level-->

                                    <!-- course seats-->
                                    <div class="flex items-center">
                                        <div class="flex h-10 w-fit rounded-md border border-gray-300 shadow-sm hover:bg-white hover:text-gray-500 focus:bg-white focus:text-gray-500"
                                            x-data="{ seatsNum: '' }">

                                            <x-tooltip-arrow
                                                class="flex flex-grow items-stretch focus-within:z-10">
                                                <div
                                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        viewbox="0 0 512 512" xml:space="preserve"
                                                        fill="currentColor" class="mr-2 h-5">
                                                        <g>
                                                            <path
                                                                d="M255.302,207.587c42.904-32.404,98.392-43.122,150.277-29.028c0.361-4.247,0.764-8.281,0.764-12.507   c0.01-83.653-67.796-151.474-151.448-151.484c-83.653-0.01-151.474,67.796-151.485,151.448v0.036c0,4.247,0.404,8.494,0.786,12.741   C156.306,164.46,212.116,175.094,255.302,207.587z">
                                                            </path>
                                                            <path
                                                                d="M239.334,295.158c10.582,1.268,21.28,1.225,31.852-0.127c-4.156-9.917-9.512-19.288-15.947-27.902   C248.815,275.789,243.473,285.202,239.334,295.158z">
                                                            </path>
                                                            <path
                                                                d="M448.953,223.411c-8.317-5.992-17.222-11.124-26.577-15.315c-13.313,52.191-50.108,95.239-99.59,116.514   c0.895,6.894,1.363,13.837,1.401,20.789c0.093,46.492-18.689,91.03-52.046,123.415c67.766,48.825,162.282,33.471,211.108-34.296   C532.075,366.753,516.72,272.237,448.953,223.411z">
                                                            </path>
                                                            <polygon
                                                                points="422.376,208.097 422.376,208.097 422.376,208.097  ">
                                                            </polygon>
                                                            <path
                                                                d="M186.46,345.399c0.027-6.816,0.474-13.624,1.338-20.385c-49.73-20.945-86.853-63.877-100.397-116.111   C11.617,244.075-21.305,334.021,13.867,409.804c35.171,75.783,125.118,108.705,200.901,73.534   c8.479-3.935,16.575-8.648,24.184-14.077C205.319,436.843,186.362,392.112,186.46,345.399z">
                                                            </path>
                                                            <path
                                                                d="M281.4,336.693c-17.277,2.682-34.86,2.732-52.152,0.149c-0.212,2.867-0.319,5.733-0.319,8.494   c-0.07,28.377,9.206,55.988,26.395,78.568c17.191-22.578,26.467-50.19,26.395-78.568   C281.718,342.533,281.612,339.602,281.4,336.693z">
                                                            </path>
                                                            <path
                                                                d="M198.075,283.31c6.368-16.582,15.257-32.081,26.352-45.952c-26.437-18.05-58.584-25.759-90.332-21.659   C146.427,245.307,169.192,269.364,198.075,283.31z">
                                                            </path>
                                                            <path
                                                                d="M286.199,237.358c11.022,13.762,19.86,29.139,26.203,45.591c28.473-14.055,50.887-37.955,63.088-67.271   C344.079,211.786,312.328,219.495,286.199,237.358z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    <span> {{ $course->seats - $users_count }}
                                                    </span>
                                                </div>

                                                <div class="w-10 px-3" x-text="seatsNum">
                                                </div>

                                                <x-slot name="text">
                                                    Available Seats
                                                </x-slot>
                                            </x-tooltip-arrow>

                                            <x-tooltip-arrow
                                                class="w-25 group relative inline-flex w-fit items-center rounded-r-md border border-0 border-r-0 border-gray-300 bg-transparent pl-1 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                                                <span class="mx-3">/</span>
                                                <input wire:model.debounce.1000ms="courseDetails.seats"
                                                    type="number" name="seats" max="999"
                                                    min="{{ $users_count }}"
                                                    class="w-20 rounded-none rounded-l-md border-0 border-r-0 border-gray-300 bg-transparent placeholder-white hover:placeholder-gray-500 focus:border-blue-500 focus:ring-blue-500"
                                                    placeholder="0"
                                                    {{ $disableMode ? 'disabled' : '' }}>
                                                <x-slot name="text">
                                                    Seats
                                                </x-slot>
                                            </x-tooltip-arrow>

                                        </div>
                                    </div>
                                    <!--END course seats-->

                                    <!-- course mode-->
                                    <div
                                        class="z-10 flex h-10 w-fit items-center justify-center whitespace-nowrap rounded-md border border-gray-300 px-4 hover:bg-white hover:text-gray-500 focus:bg-white focus:text-gray-500">

                                        <x-tooltip-arrow>
                                            <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" class="mr-2 h-5">
                                                <path
                                                    d="m22 12v-7a5.006 5.006 0 0 0 -5-5h-10a5.006 5.006 0 0 0 -5 5v7z">
                                                </path>
                                                <path
                                                    d="m23 14h-22a1 1 0 0 0 0 2h10v4h-2a3 3 0 0 0 -3 3 1 1 0 0 0 2 0 1 1 0 0 1 1-1h6a1 1 0 0 1 1 1 1 1 0 0 0 2 0 3 3 0 0 0 -3-3h-2v-4h10a1 1 0 0 0 0-2z">
                                                </path>
                                            </svg>
                                            <x-slot name="text">
                                                Delivery mode
                                            </x-slot>
                                        </x-tooltip-arrow>

                                        @if (count($course->delivery_modes))
                                            @foreach ($course->delivery_modes as $deliveryMode)
                                                <x-tooltip-arrow class="group relative">
                                                    {{ $deliveryMode['code'] }}
                                                    <x-slot name="text">
                                                        {{ $deliveryMode['name'] }}
                                                    </x-slot>
                                                </x-tooltip-arrow>

                                                @if (!$loop->last)
                                                    /
                                                @endif
                                            @endforeach
                                        @else
                                            <x-tooltip-arrow>
                                                <span class="sr-only">Not Applicable Yet</span>
                                                <x-slot name="text">
                                                    N/A
                                                </x-slot>
                                            </x-tooltip-arrow>
                                        @endif

                                    </div>
                                    <!--END course mode-->

                                    <!-- course lectures-->
                                    <div
                                        class="flex h-10 w-fit flex-row items-center justify-center whitespace-nowrap rounded-md border border-gray-300 px-4 hover:bg-white hover:text-gray-500 focus:bg-white focus:text-gray-500">
                                        <span class="group relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                fill="currentColor" class="mr-2 h-5">&gt;
                                                <path
                                                    d="M20,10.5a10.01,10.01,0,0,0-2,.273A5.006,5.006,0,0,0,13,6h-.272A9.929,9.929,0,0,0,13,4,4,4,0,0,0,5,4a9.929,9.929,0,0,0,.272,2H5a5,5,0,0,0-5,5v8a5,5,0,0,0,5,5H6.224a.772.772,0,0,0,.748-.975C6.623,21.766,6,21,6,20a3,3,0,0,1,6,0c0,1-.632,1.768-.973,3.029a.772.772,0,0,0,.748.971H13a5,5,0,0,0,5-5v-.772a10.02,10.02,0,0,0,2,.272,4,4,0,0,0,0-8Z">
                                                </path>
                                            </svg>
                                        </span>
                                        @if ($lectures_count == 0)
                                            <span class="mr-1">No</span>
                                            <span>lectures</span>
                                        @else
                                            <span class="">{{ $lectures_count }}</span>
                                        @endif
                                    </div>
                                    <!--END course lectures-->

                                    <!-- course duration-->
                                    <div class="flex h-10 w-fit items-center justify-center whitespace-nowrap rounded-md border border-gray-300 px-4 hover:bg-white hover:text-gray-500 focus:bg-white focus:text-gray-500"
                                        title="Duration">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                            fill="currentColor" class="mr-2 h-5">
                                            <path
                                                d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm4,13h-4c-.552,0-1-.447-1-1V6c0-.553,.448-1,1-1s1,.447,1,1v5h3c.553,0,1,.447,1,1s-.447,1-1,1Z">
                                            </path>
                                        </svg>

                                        <span class="mr-1">
                                            {{ $this->hours }}</span>

                                    </div>
                                    <!--END course duration-->

                                </div>
                                <!--END Info Bar -->

                            </div>
                            <!--END Cover -->
                            <div x-data="{
                                init() {
                                    let el = $(this.$refs.select2);
                                    el.select2({
                                            placeholder: '{{ __('Select a tag') }}',
                                            allowClear: true
                                        });
                                    el.on('change', function(e) {
                                        @this.tags = $(this).val();
                                    });
                                }
                            }" wire:ignore>
                                <select x-ref="select2" wire:model="tags" multiple style="width: 100%">
                                    @foreach ($available_tags as $available_tag)
                                        <option value="{{ $available_tag }}">
                                            {{ $available_tag }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--<div>
                                <div>Categories</div>
                                <div x-data="{
                                    init() {
                                        let el = $(this.$refs.categoriesSelect);
                                        el.select2({
                                            placeholder: '{{ __('Select a category') }}',
                                            allowClear: true
                                        });
                                        el.on('change', function(e) { @this.categories = $(this).val(); });
                                    }
                                }" wire:ignore>
                                    <select x-ref="categoriesSelect" wire:model="categories" multiple
                                        style="width:100%">
                                        @foreach (Category::pluck('category_name', 'id') as $available_category_id => $available_category_name)
                                            <option value="{{ $available_category_id }}">
                                                {{ $available_category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>--}}
                            {{--<div>
                                <div>Categories</div>
                                <div x-data="{
                                    init() {
                                        let el = $(this.$refs.categoriesSelect);
                                        el.select2({
                                            placeholder: '{{ __('Select a category') }}',
                                            allowClear: true
                                        });
                                        el.on('change', function(e) { @this.categories = $(this).val(); });
                                    }
                                }" wire:ignore>
                                    <select x-ref="categoriesSelect" wire:model="categories" multiple
                                        style="width:100%">
                                        @foreach (Industry::pluck('en_name', 'id'); as $available_industry_id => $available_industry_name)
                                            <option value="{{ $available_industry_id }}">
                                                {{ $available_industry_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>--}}
                            {{--
                            <!-- Actions Bar and tags-->
                            <div
                                class="flex h-14 flex-row items-center justify-between border-b-4 bg-blue-50 px-4">

                                <!--tags-->
                                <div @tags-update="console.log('tags updated', $event.detail.tags)"
                                    class="mr-5 flex w-full flex-wrap p-1" data-tags='[]' x-data>

                                    <div @click.outside="clearSearch()" class="w-full"
                                        @keydown.escape="clearSearch()" x-data="tagSelect()">

                                        <div @keydown.enter.prevent="addTag(textInput)"
                                            class="relative w-full">

                                            <!--input-->
                                            <input @input="search($event.target.value)" type="text"
                                                {{ $disableMode ? 'disabled' : '' }}
                                                class="h-10 w-full rounded-lg border border-gray-50 bg-transparent px-3 text-gray-500 hover:border-blue-300 hover:bg-white focus:border-blue-100 focus:bg-white focus:outline-none"
                                                placeholder="Add some tags ..." x-model="textInput"
                                                x-ref="textInput">

                                            <!--add button-->
                                            <div x-cloak :class="[isOpen ? 'block' : 'hidden']">
                                                <div class="absolute left-0 z-40 mt-0 w-full">
                                                    <div
                                                        class="max-w-xs rounded-lg border border-gray-300">

                                                        <a @click.prevent="addTag(textInput)"
                                                            class="block cursor-pointer truncate rounded-lg bg-white px-5 py-2 hover:bg-blue-500 hover:text-white">
                                                            Add tag "<span class="font-semibold"
                                                                x-text="textInput"></span>"
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- selections -->
                                            <div
                                                class="absolute right-0 top-0 flex h-10 items-center overflow-y-auto">
                                                <template x-for="(tag, index) in tags">

                                                    <div
                                                        class="mr-1 inline-flex items-center rounded-full border border-blue-300 bg-blue-100 text-sm">
                                                        <span
                                                            class="ml-2 mr-1 max-w-xs truncate leading-relaxed"
                                                            x-text="tag">
                                                        </span>

                                                        <button @click.prevent="removeTag(index)"
                                                            class="inline-block h-8 w-6 align-middle text-gray-500 hover:text-gray-600 focus:outline-none">
                                                            <svg class="mx-auto h-6 w-6 fill-current"
                                                                viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"
                                                                    fill-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>

                                                </template>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!--tags js-->
                                <script defer>
                                    function tagSelect() {
                                        return {
                                            isOpen: false,
                                            textInput: '',
                                            tags: @entangle('tags'),
                                            addTag(tag) {

                                                tag = tag.trim()
                                                if (tag != "" && !this.hasTag(tag)) {
                                                    this.tags.push(tag)
                                                    --}}
                            {{-- @this.addTag(tag); --}}{{--

                                                }
                                                this.clearSearch()
                                                this.$refs.textInput.focus()
                                                this.fireTagsUpdateEvent()
                                            },
                                            fireTagsUpdateEvent() {
                                                this.$el.dispatchEvent(new CustomEvent('tags-update', {
                                                    detail: {
                                                        tags: this.tags
                                                    },
                                                    bubbles: true,
                                                }));
                                            },
                                            hasTag(tagName) {
                                                let tag = this.tags.find(e => {
                                                    return e.toLowerCase() === tagName.toLowerCase()
                                                })
                                                return tag != undefined
                                            },
                                            removeTag(index) {
                                                this.tags.splice(index, 1)
                                                this.fireTagsUpdateEvent()
                                            },
                                            search(q) {
                                                if (q.includes(",")) {
                                                    q.split(",").forEach(function(val) {
                                                        this.addTag(val)
                                                    }, this)
                                                }
                                                this.toggleSearch()
                                            },
                                            clearSearch() {
                                                this.textInput = ''
                                                this.toggleSearch()
                                            },
                                            toggleSearch() {
                                                this.isOpen = this.textInput != ''
                                            }
                                        }
                                    }
                                </script>
                                <!--End tags-->

                                <!--Actions-->
                                <div class="flex items-center gap-x-8 p-1 font-bold text-gray-500">

                                    --}}
                            {{--
                                    <button class="flex gap-1 hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                            fill="currentColor" class="h-6 w-6">
                                            <path
                                                d="M24,16v5a3,3,0,0,1-3,3H16a8,8,0,0,1-6.92-4,10.968,10.968,0,0,0,2.242-.248A5.988,5.988,0,0,0,16,22h5a1,1,0,0,0,1-1V16a5.988,5.988,0,0,0-2.252-4.678A10.968,10.968,0,0,0,20,9.08,8,8,0,0,1,24,16ZM17.977,9.651A9,9,0,0,0,8.349.023,9.418,9.418,0,0,0,0,9.294v5.04C0,16.866,1.507,18,3,18H8.7A9.419,9.419,0,0,0,17.977,9.651Zm-4.027-5.6a7.018,7.018,0,0,1,2.032,5.46A7.364,7.364,0,0,1,8.7,16H3c-.928,0-1-1.275-1-1.666V9.294A7.362,7.362,0,0,1,8.49,2.018Q8.739,2,8.988,2A7.012,7.012,0,0,1,13.95,4.051Z">
                                            </path>
                                        </svg>
                                        Message
                                    </button>

                                    <button class="flex gap-1 hover:text-pink-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                            class="h-6 w-6" fill="currentColor">
                                            <path
                                                d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                            </path>
                                        </svg>
                                        Save
                                    </button>

                                    <button class="flex gap-1 hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                            fill="currentColor" class="h-6 w-6">
                                            <path
                                                d="M19.333,14.667a4.66,4.66,0,0,0-3.839,2.024L8.985,13.752a4.574,4.574,0,0,0,.005-3.488l6.5-2.954a4.66,4.66,0,1,0-.827-2.643,4.633,4.633,0,0,0,.08.786L7.833,8.593a4.668,4.668,0,1,0-.015,6.827l6.928,3.128a4.736,4.736,0,0,0-.079.785,4.667,4.667,0,1,0,4.666-4.666ZM19.333,2a2.667,2.667,0,1,1-2.666,2.667A2.669,2.669,0,0,1,19.333,2ZM4.667,14.667A2.667,2.667,0,1,1,7.333,12,2.67,2.67,0,0,1,4.667,14.667ZM19.333,22A2.667,2.667,0,1,1,22,19.333,2.669,2.669,0,0,1,19.333,22Z">
                                            </path>
                                        </svg>
                                        Share
                                    </button>
--}}{{--


                                </div>
                                <!--END Actions-->

                            </div>
                            <!--END Actions Bar -->
--}}

                        </div>
                        <!---------End course Header----------->
                        @if ($selected_content)
                            @switch(get_class($selected_content->contentable))
                                @case(\App\Models\Lecture::class)
                                    <livewire:lecture-component :lecture="$selected_content->contentable"
                                        wire:key="lecture-details-{{ $selected_content->contentable->id }}" />
                                @break

                                @case(\App\Models\Assignment::class)
                                    <livewire:course-assignments :assignment="$selected_content->contentable"
                                        wire:key="assignment-details-{{ $selected_content->contentable->id }}" />
                                @break

                                @case(\App\Models\Quiz::class)
                                    <livewire:quiz-component :quiz="$selected_content->contentable"
                                        wire:key="quiz-details-{{ $selected_content->contentable->id }}" />
                                @break
                            @endswitch
                        @elseif($selected_task)
                            <livewire:course-task-component :task="$selected_task"
                                wire:key="task-details-{{ $selected_task->id }}" />
                        @else
                            <!--Start Details Content -->
                            <div class="mx-auto max-w-6xl px-10 pb-10 pt-5 text-gray-500">

                                <!-- Version statuses -->
                                <div class="flex items-center justify-between gap-x-4">

                                    <!-- Edit button -->
                                    @if ($courseDetails->publish_status == 'Published' && $course->publish_status != 'Under review')
                                        <div class="flex w-fit flex-col">
                                            <button wire:click="clone" type="button"
                                                class="inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                                                <svg fill="currentColor" class="h-5 w-5"
                                                    height="512" viewBox="0 0 24 24" width="512">
                                                    <path
                                                        d="m18 9.064a3.049 3.049 0 0 0 -.9-2.164 3.139 3.139 0 0 0 -4.334 0l-11.866 11.869a3.064 3.064 0 0 0 4.33 4.331l11.87-11.869a3.047 3.047 0 0 0 .9-2.167zm-14.184 12.624a1.087 1.087 0 0 1 -1.5 0 1.062 1.062 0 0 1 0-1.5l7.769-7.77 1.505 1.505zm11.872-11.872-2.688 2.689-1.5-1.505 2.689-2.688a1.063 1.063 0 1 1 1.5 1.5zm-10.825-6.961 1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29l-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29zm18.274 14.29-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29l1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29zm-5.382-14.645 1.356-.387.389-1.358a1.042 1.042 0 0 1 2 0l.387 1.356 1.356.387a1.042 1.042 0 0 1 0 2l-1.356.387-.387 1.359a1.042 1.042 0 0 1 -2 0l-.387-1.355-1.358-.389a1.042 1.042 0 0 1 0-2z">
                                                    </path>
                                                </svg>
                                                <span class="whitespace-nowrap font-bold">
                                                    Edit Course
                                                </span>
                                            </button>
                                        </div>
                                    @endif
                                    <!-- End Edit button -->

                                    <!-- Published Version -->
                                    @if ($publishedVersion = $courseDetails->original)
                                        <div class="flex w-fit flex-col">
                                            <h2 class="flex items-center gap-x-3 text-sm font-bold">
                                                Published Version
                                                <span
                                                    class="rounded-full bg-green-500 px-2 py-[2px] text-white">
                                                    {{ $publishedVersion->version }}
                                                </span>
                                            </h2>
                                        </div>
                                    @endif
                                    <!-- End Published Version -->

                                    <!-- Current Version -->
                                    <div class="flex w-fit flex-col">
                                        <h2 class="flex items-center gap-x-3 text-sm font-bold">
                                            Current Version
                                            <span
                                                class="rounded-full bg-traivis-500 px-2 py-[2px] text-white">
                                                {{ $courseDetails->version }}
                                            </span>
                                        </h2>
                                    </div>
                                    <!-- End Current Version -->

                                    <!-- Status -->
                                    @if ($courseDetails->publish_status)
                                        <div class="flex w-fit flex-col">
                                            @php
                                                $statusIcon = $statusIconsArray[strtolower($courseDetails->publish_status)];
                                            @endphp
                                            <h2 class="flex items-center gap-x-3 text-sm font-bold">
                                                Status
                                                <span
                                                    class="text-{{ $statusColorClassesArray[strtolower($courseDetails->publish_status)] }} border-{{ $statusColorClassesArray[strtolower($courseDetails->publish_status)] }} flex w-fit items-center gap-x-1 rounded-full border px-2 py-[2px] text-sm font-bold">
                                                    <x-dynamic-component :component="$statusIcon"
                                                        class="inline-block h-4 w-4" />
                                                    {{ ucfirst($courseDetails->publish_status) }}
                                                </span>

                                                @if ($courseDetails->publish_status == 'Declined')
                                                    <button wire:click="showFeedback" type="button"
                                                        class="inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-blue-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                                                        <svg fill="currentColor" class="h-5 w-5"
                                                            height="512" viewBox="0 0 24 24"
                                                            width="512">
                                                            <path
                                                                d="m18 9.064a3.049 3.049 0 0 0 -.9-2.164 3.139 3.139 0 0 0 -4.334 0l-11.866 11.869a3.064 3.064 0 0 0 4.33 4.331l11.87-11.869a3.047 3.047 0 0 0 .9-2.167zm-14.184 12.624a1.087 1.087 0 0 1 -1.5 0 1.062 1.062 0 0 1 0-1.5l7.769-7.77 1.505 1.505zm11.872-11.872-2.688 2.689-1.5-1.505 2.689-2.688a1.063 1.063 0 1 1 1.5 1.5zm-10.825-6.961 1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29l-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29zm18.274 14.29-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29l1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29zm-5.382-14.645 1.356-.387.389-1.358a1.042 1.042 0 0 1 2 0l.387 1.356 1.356.387a1.042 1.042 0 0 1 0 2l-1.356.387-.387 1.359a1.042 1.042 0 0 1 -2 0l-.387-1.355-1.358-.389a1.042 1.042 0 0 1 0-2z">
                                                            </path>
                                                        </svg>
                                                        <span class="whitespace-nowrap font-bold">
                                                            Show Review Feedback
                                                        </span>
                                                    </button>
                                                @endif
                                            </h2>
                                        </div>
                                    @endif
                                    <!-- End Status -->

                                </div>
                                <!-- End Version statuses -->

                                {{-- @if (strtolower($courseDetails->publish_status) == 'declined')
                                <!-- Feedback -->
                                <div class="flex w-full flex-col space-y-2 px-2 sm:w-3/5 lg:w-4/5 mb-5">
                                    <h2>
                                        Feedback :
                                        <span class="text-red-500">{{ ucfirst($courseDetails->review_feedback) }}</span>
                                    </h2>
                                </div>
                                <!-- End Feedback -->
                                @endif --}}

                                <!-------Video section-------->
                                <div class="mt-5 rounded-lg border border-gray-200 p-5"
                                    x-data="{ open: true }">

                                    <!-- Header-->
                                    <div class="flex cursor-pointer" @click="open = !open">
                                        <div class="mr-5">
                                            <svg fill="currentColor" class="h-5 w-5"
                                                viewBox="0 0 24 24" width="512"
                                                data-name="Layer 1">
                                                <path
                                                    d="m19.051 0h-14a5.006 5.006 0 0 0 -5 5v14a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-14a5.006 5.006 0 0 0 -5-5zm1 11h2v2h-2zm0-2v-2h2v2zm-16 4h-2v-2h2zm1.949 0v-2h12v2zm-1.949-4h-2v-2h2zm-2 6h2v2h-2zm18 0h2v2h-2zm2-10h-2v-2.816a3 3 0 0 1 2 2.816zm-18-2.816v2.816h-2a3 3 0 0 1 2-2.816zm-2 16.816h2v2.816a3 3 0 0 1 -2-2.816zm18 2.816v-2.816h2a3 3 0 0 1 -2 2.816z" />
                                            </svg>
                                        </div>

                                        <div class="flex-grow font-bold"> Overview Video
                                            <x-svg-icons.fi-rr-rotate-right wire:loading
                                                wire:target="overview_video"
                                                class="-mt-2 ml-2 inline-block h-5 w-5 animate-spin text-traivis" />
                                        </div>
                                        <div class="ml-5">

                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                fill="currentColor"
                                                class="h-5 w-5 rotate-0 transition-transform"
                                                :class="open ? 'rotate-90' : 'rotate-0'">
                                                <path
                                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                </path>
                                            </svg>

                                        </div>
                                    </div>
                                    <!--END Header-->

                                    <div class="mt-5" x-show="open"
                                        x-transition:enter="transition-opacity ease-linear"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-linear"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0" style="display: none;">

                                        <!--section content-->
                                        {{--                                        @dump($overview_video?->toArray()) --}}
                                        <div class="flex flex-row items-start space-x-2">
                                            @if (!$disableMode)
                                                <span class="relative mt-5 w-6">
                                                    @if ($overview_video)
                                                        <button
                                                            @click="confirm('Delete the overview video?') && @this.deleteOverviewVideo"><x-svg-icons.fi-sr-trash
                                                                class="h-3 w-3 text-red-500 drop-shadow-md" />
                                                        </button>
                                                    @endif

                                                    <!-- Progress Bar -->
                                                    <label>
                                                        <input type="file" class="hidden"
                                                            accept="video/mp4, video/quicktime"
                                                            wire:model="overview_video">

                                                        <svg class="h-3 w-3 cursor-pointer drop-shadow-md hover:text-gray-700"
                                                            fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            id="Filled" viewBox="0 0 24 24"
                                                            width="512" height="512">
                                                            <path
                                                                d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                            <path
                                                                d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                                        </svg>
                                                    </label>
                                                    @error('overview_video')
                                                        <x-tooltip-arrow-up-validation-error
                                                            :message="$message" />
                                                    @enderror
                                                </span>
                                            @endif
                                            @if ($overview_video)
                                                <video controls class="w-full"
                                                    poster="@if ($overview_video->preview_url) {{ $overview_video->preview_url }} @else {{ asset('uploads/placeholder-image.png') }} @endif"
                                                    wire:key="cover-{{ $overview_video->id }}">
                                                    <source src="{{ $overview_video->original_url }}"
                                                        type="{{ $overview_video->mime_type }}">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @else
                                                No Overview Video Yet
                                            @endif
                                        </div>
                                        <!--END section content-->

                                    </div>

                                </div>
                                <!-------END Video section-------->

                                <!-------Description section-------->
                                <div class="relative mt-5 rounded-lg border border-gray-200 p-5"
                                    x-data="{ open: false }">

                                    <!-- Header-->
                                    <div class="flex cursor-pointer" @click="open = !open">
                                        <div class="mr-5">
                                            <svg fill="currentColor" class="h-5 w-5"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M19,0H5C2.24,0,0,2.24,0,5v14c0,2.76,2.24,5,5,5h14c2.76,0,5-2.24,5-5V5c0-2.76-2.24-5-5-5ZM6,5h6c.55,0,1,.45,1,1s-.45,1-1,1H6c-.55,0-1-.45-1-1s.45-1,1-1Zm0,4H15c.55,0,1,.45,1,1s-.45,1-1,1H6c-.55,0-1-.45-1-1s.45-1,1-1Zm3,10h-3c-.55,0-1-.45-1-1s.45-1,1-1h3c.55,0,1,.45,1,1s-.45,1-1,1Zm9-4H6c-.55,0-1-.45-1-1s.45-1,1-1h12c.55,0,1,.45,1,1s-.45,1-1,1Z" />
                                            </svg>
                                        </div>

                                        <div class="flex-grow font-bold">Description</div>
                                        <div class="ml-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                fill="currentColor"
                                                class="h-5 w-5 rotate-0 transition-transform"
                                                :class="open ? 'rotate-90' : 'rotate-0'">
                                                <path
                                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <!--END Header-->

                                    <div class="mt-5" x-show="open"
                                        x-transition:enter="transition-opacity ease-linear"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-linear"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0" style="display: none;">

                                        <!--section content-->
                                        <div class="flex flex-row items-start space-x-2"
                                            x-data="{ textareaHeight: 'auto' }">
                                            <span class="mt-5 w-6">
                                                <svg class="h-3 w-3 drop-shadow-md" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                    viewBox="0 0 24 24" width="512" height="512">
                                                    <path
                                                        d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                    <path
                                                        d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                                </svg>
                                            </span>

                                            <textarea x-bind:style="'height: ' + textareaHeight + ';'" {{ $disableMode ? 'disabled' : '' }}
                                                @input="textareaHeight = $el.scrollHeight + 'px'" @focus="textareaHeight = $el.scrollHeight + 'px'"
                                                class="mt-2 w-full rounded-lg border-0 bg-transparent drop-shadow-md transition-colors focus:bg-white focus:bg-opacity-80 focus:text-gray-700 focus:placeholder-gray-700"
                                                placeholder="Description..." wire:model.debounce.1000ms="courseDetails.short_description"></textarea>

                                        </div>
                                        <!--END section content-->

                                    </div>
                                    @error('courseDetails.short_description')
                                        <x-tooltip-arrow-up-validation-error :message="$message" />
                                    @enderror

                                </div>
                                <!-------END Description section-------->

                                <!-------Course Content section-------->
                                <div class="relative mt-5 rounded-lg border border-gray-200 p-5"
                                    x-data="{ open: false }">

                                    <!-- Header-->
                                    <div class="flex cursor-pointer" @click="open = !open">
                                        <div class="mr-5">
                                            <svg fill="currentColor" class="h-5 w-5"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M0,19H5v5H3c-1.657,0-3-1.343-3-3v-2ZM5,5V0H3C1.343,0,0,1.343,0,3v2H5Zm7,0V3c0-1.657-1.343-3-3-3h-2V5h5ZM0,7v10H5V7H0Zm7,0v10h5V7H7Zm0,17h2c1.657,0,3-1.343,3-3v-2H7v5ZM13.424,7.478l3.639,10.944,5.412-1.795-3.639-10.944-5.412,1.795Zm4.27,12.841l.792,2.312c.348,1.048,1.48,1.615,2.528,1.267l1.615-.535c1.049-.348,1.617-1.481,1.268-2.529l-.791-2.309-5.412,1.795ZM12.793,5.58l5.412-1.795-.803-2.415c-.348-1.048-1.48-1.616-2.528-1.268l-1.615,.535c-1.048,.348-1.616,1.48-1.268,2.528l.803,2.415Z" />
                                            </svg>
                                        </div>
                                        <div class="flex-grow font-bold">What you will learn</div>
                                        <div class="ml-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                fill="currentColor"
                                                class="h-5 w-5 rotate-0 transition-transform"
                                                :class="open ? 'rotate-90' : 'rotate-0'">
                                                <path
                                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <!--END Header-->

                                    <div class="mt-5" x-show="open"
                                        x-transition:enter="transition-opacity ease-linear"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-linear"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0" style="display: none;">

                                        <!--section content-->
                                        <div class="relative flex flex-row items-start space-x-2"
                                            x-data="{ textareaHeight: 'auto' }">
                                            <span class="mt-5 w-6">
                                                <svg class="h-3 w-3 drop-shadow-md" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                    viewBox="0 0 24 24" width="512" height="512">
                                                    <path
                                                        d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                    <path
                                                        d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                                </svg>
                                            </span>

                                            <textarea x-bind:style="'height: ' + textareaHeight + ';'" {{ $disableMode ? 'disabled' : '' }}
                                                @input="textareaHeight = $el.scrollHeight + 'px'" @focus="textareaHeight = $el.scrollHeight + 'px'"
                                                class="mt-2 w-full rounded-lg border-0 bg-transparent drop-shadow-md transition-colors focus:bg-white focus:bg-opacity-80 focus:text-gray-700 focus:placeholder-gray-700"
                                                placeholder="What you will learn..." wire:model.debounce.1000ms="courseDetails.description"></textarea>

                                        </div>

                                        <!--END section content-->

                                    </div>
                                    @error('courseDetails.description')
                                        <x-tooltip-arrow-up-validation-error :message="$message" />
                                    @enderror

                                </div>
                                <!-------END Course Content section-------->

                                <!-------Includes Section-------->
                                <div class="mt-5 rounded-lg border border-gray-200 p-5"
                                    x-data="{ open: false }">

                                    <!-- Header-->
                                    <div class="flex cursor-pointer" @click="open = !open">
                                        <div class="mr-5">
                                            <svg fill="currentColor" class="h-5 w-5"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="m17,0H6.967C4.224,0,2,2.229,2,4.973v12.052c.699-.527,1.525-.86,2.395-.964.199-.041.402-.061.605-.061h17V5c0-2.761-2.239-5-5-5Zm-7.304,7.528c-.114.285-.39.472-.697.472s-.583-.187-.697-.472l-.523-1.308-1.308-.523c-.285-.114-.472-.39-.472-.697s.187-.583.472-.697l1.308-.523.523-1.308c.114-.285.39-.472.697-.472s.583.187.697.472l.52,1.301,1.299.492c.287.108.479.381.484.687.005.307-.176.586-.459.705l-1.318.556-.526,1.316Zm7.563,3.899l-1.432.385-.357,1.43c-.111.445-.511.757-.97.757s-.859-.312-.97-.757l-.354-1.418-1.418-.354c-.445-.111-.757-.511-.757-.97s.312-.859.757-.97l1.418-.354.354-1.418c.111-.445.511-.757.97-.757s.859.312.97.757l.351,1.406,1.404.325c.447.103.767.498.775.956.008.459-.297.865-.74.984Zm-12.26,6.572h17v1c0,2.761-2.239,5-5,5H5c-1.657,0-3-1.343-3-3s1.343-3,3-3Z" />
                                            </svg>
                                        </div>

                                        <div class="flex-grow font-bold">What's Included</div>
                                        <div class="ml-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                fill="currentColor"
                                                class="h-5 w-5 rotate-0 transition-transform"
                                                :class="open ? 'rotate-90' : 'rotate-0'">
                                                <path
                                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <!--END Header-->

                                    <div class="mt-5" x-show="open"
                                        x-transition:enter="transition-opacity ease-linear"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-linear"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0" style="display: none;">

                                        <!--section content-->
                                        <div class="flex flex-row items-start space-x-2"
                                            x-data="{ textareaHeight: 'auto' }">
                                            <span class="mt-5 w-6">
                                                <svg class="h-3 w-3 drop-shadow-md" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                    viewBox="0 0 24 24" width="512" height="512">
                                                    <path
                                                        d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                    <path
                                                        d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                                </svg>
                                            </span>

                                            <textarea x-bind:style="'height: ' + textareaHeight + ';'" {{ $disableMode ? 'disabled' : '' }}
                                                @input="textareaHeight = $el.scrollHeight + 'px'" @focus="textareaHeight = $el.scrollHeight + 'px'"
                                                class="mt-2 w-full rounded-lg border-0 bg-transparent drop-shadow-md transition-colors focus:bg-white focus:bg-opacity-80 focus:text-gray-700 focus:placeholder-gray-700"
                                                placeholder="What's Included..." wire:model.debounce.1000ms="courseDetails.benefits"></textarea>
                                        </div>
                                        <!--END section content-->

                                    </div>

                                </div>
                                <!-------END Includes Section-------->

                                <!-------Curriculum section-------->
                                <div class="mt-5 rounded-lg border border-gray-200 p-5"
                                    x-data="{ open: false }">

                                    <!-- Header-->
                                    <div class="flex cursor-pointer" @click="open = !open">
                                        <div class="mr-5">
                                            <svg fill="currentColor" class="h-5 w-5"
                                                viewBox="0 0 24 24" width="512"
                                                data-name="Layer 1">
                                                <path
                                                    d="m22.2 2.163a5 5 0 0 0 -4.157-1.069l-1.764.432a4 4 0 0 0 -3.279 3.935v15.467a6.909 6.909 0 0 1 -2 0v-15.467a3.981 3.981 0 0 0 -3.226-3.923l-1.874-.456a5 5 0 0 0 -5.9 4.918v10.793a5 5 0 0 0 4.105 4.919l6.286 1.143a9 9 0 0 0 3.218 0l6.291-1.143a5 5 0 0 0 4.1-4.919v-10.793a4.983 4.983 0 0 0 -1.8-3.837z" />
                                            </svg>
                                        </div>

                                        <div class="flex-grow font-bold">Curriculum</div>
                                        <div class="ml-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                fill="currentColor"
                                                class="h-5 w-5 rotate-0 transition-transform"
                                                :class="open ? 'rotate-90' : 'rotate-0'">
                                                <path
                                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <!--END Header-->

                                    <div class="mt-5" x-show="open"
                                        x-transition:enter="transition-opacity ease-linear"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-linear"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0" style="display: none;">

                                        <!--section content-->
                                        <div class="flex flex-row items-start space-x-2"
                                            x-data="{ textareaHeight: 'auto' }">
                                            <span class="mt-5 w-6">
                                                <svg class="h-3 w-3 drop-shadow-md" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                    viewBox="0 0 24 24" width="512" height="512">
                                                    <path
                                                        d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                    <path
                                                        d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                                </svg>
                                            </span>

                                            <textarea x-bind:style="'height: ' + textareaHeight + ';'" {{ $disableMode ? 'disabled' : '' }}
                                                @input="textareaHeight = $el.scrollHeight + 'px'" @focus="textareaHeight = $el.scrollHeight + 'px'"
                                                class="mt-2 w-full rounded-lg border-0 bg-transparent drop-shadow-md transition-colors focus:bg-white focus:bg-opacity-80 focus:text-gray-700 focus:placeholder-gray-700"
                                                placeholder="Curriculum..." wire:model.debounce.1000ms="courseDetails.cert_accr"></textarea>
                                        </div>
                                        <!--END section content-->

                                    </div>

                                </div>
                                <!-------END Curriculum section-------->

                                <!-------Requirements section-------->
                                <div class="mt-5 rounded-lg border border-gray-200 p-5"
                                    x-data="{ open: false }">

                                    <!-- Header-->
                                    <div class="flex cursor-pointer" @click="open = !open">
                                        <div class="mr-5">
                                            <svg fill="currentColor" class="h-5 w-5"
                                                viewBox="0 0 24 24" width="512"
                                                data-name="Layer 1">
                                                <path
                                                    d="m21.5 14.119-3.483-2.119 3.483-2.119a3.181 3.181 0 1 0 -3.362-5.4l-3.138 2.009v-3.49a3 3 0 0 0 -6 0v3.588l-3.138-2.107a3.181 3.181 0 0 0 -3.362 5.4l3.483 2.119-3.483 2.119a3.181 3.181 0 0 0 3.362 5.4l3.138-2.038v3.519a3 3 0 0 0 6 0v-3.58l3.138 2.1a3.181 3.181 0 0 0 3.362-5.4z" />
                                            </svg>
                                        </div>

                                        <div class="flex-grow font-bold">Requirements</div>
                                        <div class="ml-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                fill="currentColor"
                                                class="h-5 w-5 rotate-0 transition-transform"
                                                :class="open ? 'rotate-90' : 'rotate-0'">
                                                <path
                                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <!--END Header-->

                                    <div class="mt-5" x-show="open"
                                        x-transition:enter="transition-opacity ease-linear"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-linear"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0" style="display: none;">

                                        <!--section content-->
                                        <div class="flex flex-row items-start space-x-2"
                                            x-data="{ textareaHeight: 'auto' }">
                                            <span class="mt-5 w-6">
                                                <svg class="h-3 w-3 drop-shadow-md" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                    viewBox="0 0 24 24" width="512" height="512">
                                                    <path
                                                        d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                    <path
                                                        d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                                </svg>
                                            </span>

                                            <textarea x-bind:style="'height: ' + textareaHeight + ';'" {{ $disableMode ? 'disabled' : '' }}
                                                @input="textareaHeight = $el.scrollHeight + 'px'" @focus="textareaHeight = $el.scrollHeight + 'px'"
                                                class="mt-2 w-full rounded-lg border-0 bg-transparent drop-shadow-md transition-colors focus:bg-white focus:bg-opacity-80 focus:text-gray-700 focus:placeholder-gray-700"
                                                placeholder="Requirements..." wire:model.debounce.1000ms="courseDetails.requirements"></textarea>
                                        </div>
                                        <!--END section content-->

                                    </div>

                                </div>
                                <!-------END Requirements section-------->

                                <!-------Details section-------->
                                {{--
                                <div class="mt-5 rounded-lg border border-gray-200 p-5"
                                    x-data="{ open: false }">

                                    <div class="flex cursor-pointer" @click="open = !open">
                                        <div class="mr-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                fill="currentColor" class="h-5 w-5">
                                                <path
                                                    d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                                </path>
                                            </svg>
                                        </div>

                                        <div class="flex-grow font-bold">Instructors</div>
                                        <div class="ml-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                fill="currentColor"
                                                class="h-5 w-5 rotate-0 transition-transform"
                                                :class="open ? 'rotate-90' : 'rotate-0'">
                                                <path
                                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="mt-5" x-show="open"
                                        x-transition:enter="transition-opacity ease-linear"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-linear"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0" style="display: none;">

                                        <!--section content-->
                                        <div class="flex flex-row items-start space-x-2">
                                            <span class="mt-5 w-6">
                                                <svg class="h-3 w-3 drop-shadow-md" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                    viewBox="0 0 24 24" width="512" height="512">
                                                    <path
                                                        d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                    <path
                                                        d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                                </svg>
                                            </span>

                                            <textarea
                                                class="mt-2 w-full rounded-lg border-0 bg-transparent drop-shadow-md transition-colors focus:bg-white focus:bg-opacity-80 focus:text-gray-700 focus:placeholder-gray-700"
                                                placeholder="Instructors..." ></textarea>
                                        </div>
                                        <!--END section content-->

                                    </div>

                                </div>
--}}
                                <!-------END Details section-------->

                                <!-------Details section-------->
                                {{--
                                <div class="mt-5 rounded-lg border border-gray-200 p-5"
                                    x-data="{ open: false }">

                                    <div class="flex cursor-pointer" @click="open = !open">
                                        <div class="mr-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                fill="currentColor" class="h-5 w-5">
                                                <path
                                                    d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                                </path>
                                            </svg>
                                        </div>

                                        <div class="flex-grow font-bold">Reviews</div>
                                        <div class="ml-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                fill="currentColor"
                                                class="h-5 w-5 rotate-0 transition-transform"
                                                :class="open ? 'rotate-90' : 'rotate-0'">
                                                <path
                                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="mt-5" x-show="open"
                                        x-transition:enter="transition-opacity ease-linear"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-linear"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0" style="display: none;">

                                        <!--section content-->
                                        <div class="flex flex-row items-start space-x-2">
                                            <span class="mt-5 w-6">
                                                <svg class="h-3 w-3 drop-shadow-md" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                    viewBox="0 0 24 24" width="512" height="512">
                                                    <path
                                                        d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                    <path
                                                        d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                                </svg>
                                            </span>

                                            <textarea
                                                class="mt-2 w-full rounded-lg border-0 bg-transparent drop-shadow-md transition-colors focus:bg-white focus:bg-opacity-80 focus:text-gray-700 focus:placeholder-gray-700"
                                                placeholder="Reviews..."></textarea>
                                        </div>
                                        <!--END section content-->

                                    </div>

                                </div>
--}}
                                <!-------END Details section-------->

                            </div>
                            <!--END Details Content -->
                        @endif

                    </div>
                    <!--END Content area -->

                </div>

            </section>
            <!--END Primary column (Content area)-->

        </main>
    </div>
    @once
        @push('header_scripts')
            <script>
                window.addEventListener("DOMContentLoaded", function() {
                    Livewire.emit("openInfluencerModal");
                });
            </script>

            {{--            <script src="{{ asset(mix('js/filepond.js'), true) }}"></script> --}}
            {{--            <script> --}}
            {{--                console.log('Course edit'); --}}
            {{--            </script> --}}

            <link href="https://unpkg.com/filepond@^4/dist/filepond.min.css" rel="stylesheet" />
            <link
                href="https://unpkg.com/filepond-plugin-image-preview@^4/dist/filepond-plugin-image-preview.min.css"
                rel="stylesheet" />
            <link
                href="https://unpkg.com/filepond-plugin-file-poster@^2/dist/filepond-plugin-file-poster.min.css"
                rel="stylesheet" />

            <script
                src="https://unpkg.com/filepond-plugin-file-validate-type@^1/dist/filepond-plugin-file-validate-type.min.js">
            </script>
            <script src="https://unpkg.com/filepond-plugin-file-poster@^2/dist/filepond-plugin-file-poster.min.js">
            </script>
            <script
                src="https://unpkg.com/filepond-plugin-file-validate-size@^2/dist/filepond-plugin-file-validate-size.min.js">
            </script>
            <script
                src="https://unpkg.com/filepond-plugin-image-preview@^4/dist/filepond-plugin-image-preview.min.js">
            </script>
            <script src="https://unpkg.com/filepond@^4/dist/filepond.min.js"></script>
        @endpush
    @endonce
    {{--        @push('header_styles') --}}
    {{--            <script> --}}
    {{--                console.log('Loaded once'); --}}
    {{--            </script> --}}
    {{--        @endpush --}}
    <!--End Course-->
    @livewire('publish-course')
    @livewire('show-review-feedback')
    @livewire('publish-course-teaser-campaign')
    @livewire('influencer-camp-modal')
</div>
