<div x-data="{
    openModal: @entangle('openModal'),
    privateLinkStatus: @entangle('privateLinkStatus'),
    copied: false
}">
    <section x-show="openModal" x-transition:enter="ease-out duration-100"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" class="">
        <div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-[111111111] overflow-y-auto"
            role="dialog">
            <div class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">
                <!---over BG---->
                <div @click="openModal = false" aria-hidden="true"
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                </div>
                <!-- center-->
                <span aria-hidden="true" class="hidden sm:inline-block sm:h-screen sm:align-middle">​</span>
                <!---END over BG---->
                @if ($isCourseReadyToPublish)
                <!-- popup content-->
                <div
                    class="relative my-8 inline-block w-full max-w-3xl transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">
                    <!-- label-->
                    <div class="flex items-center justify-center">
                        <p
                            class="absolute -top-6 left-auto right-auto z-10 mx-auto flex items-center gap-x-3 rounded-full border border-b-0 border-gray-300 bg-white px-5 py-2 text-lg font-bold group-hover:border-traivis-400">
                            <svg fill="currentColor" class="h-8 w-8" height="512" viewBox="0 0 24 24" width="512">
                                <path
                                    d="m12.883 15.216-7.935 7.935a2.9 2.9 0 1 1 -4.1-4.1l7.935-7.935zm4.217-8.316a2.967 2.967 0 0 0 -4.1 0l-2.8 2.8 4.1 4.1 2.8-2.8a2.9 2.9 0 0 0 0-4.1zm-12.237-1.755 1.55.442.442 1.55a1.191 1.191 0 0 0 2.29 0l.442-1.55 1.55-.442a1.191 1.191 0 0 0 0-2.29l-1.55-.442-.442-1.55a1.191 1.191 0 0 0 -2.29 0l-.442 1.55-1.55.442a1.191 1.191 0 0 0 0 2.29zm12 12 1.55.442.442 1.55a1.191 1.191 0 0 0 2.29 0l.442-1.55 1.55-.442a1.191 1.191 0 0 0 0-2.29l-1.55-.442-.442-1.55a1.191 1.191 0 0 0 -2.29 0l-.442 1.55-1.55.442a1.191 1.191 0 0 0 0 2.29zm.893-12.645 1.355.387.389 1.357a1.042 1.042 0 0 0 2 0l.387-1.355 1.357-.389a1.042 1.042 0 0 0 0-2l-1.355-.387-.389-1.357a1.042 1.042 0 0 0 -2 0l-.387 1.355-1.357.389a1.042 1.042 0 0 0 0 2z" />
                            </svg>
                            Publish Course
                        </p>
                    </div>
                    <!--/ label-->
                    @if($showSuccessStep)

                    <!--Start Marketing form-->
                    <div class=" text-gray-500">
                        <div class="h-full w-full overflow-y-auto">
                            <div class="container mx-auto w-full rounded-lg bg-white p-3">

                                <!-- header-->
                                <div class="flex justify-center py-3 text-center text-lg font-bold text-slate-500">
                                    @if ($schedule_date)
                                        <p class="text-green-500 mx-auto">{{ $schedule_msg }}</p>
                                    @else
                                        <p class="text-gray-500 mx-auto">Create a marketing campaigm</p>
                                    @endif
                                </div>
                                <!--END  header-->

                                <!--Publish Or Save-->
                                <div class="mt-5">

                                    <div class="flex gap-x-3 justify-evenly">
                                        <button wire:click="openTeaserCampaignPopup"
                                                class="group inline-flex justify-end gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                                type="button">
                                            <svg class="shrink-0 h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="m21 18a2.986 2.986 0 0 0 -2.077.844l-2.96-1.481a2.9 2.9 0 0 0 .037-.363 2.9 2.9 0 0 0 -.037-.363l2.96-1.481a2.994 2.994 0 1 0 -.923-2.156 2.9 2.9 0 0 0 .037.363l-2.96 1.481a3 3 0 1 0 0 4.312l2.96 1.481a2.9 2.9 0 0 0 -.037.363 3 3 0 1 0 3-3zm0-6a1 1 0 1 1 -1 1 1 1 0 0 1 1-1zm-8 6a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm8 4a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm-9 0a1 1 0 0 1 -1 1h-5.321a5.841 5.841 0 0 1 -5.622-4.7 5.443 5.443 0 0 1 2.885-5.651 7.652 7.652 0 0 1 -.8-5.18 8 8 0 0 1 15.49-.842 1.09 1.09 0 0 0 .722.735 1 1 0 1 1 -.588 1.911 3.1 3.1 0 0 1 -2.044-2.053 6 6 0 1 0 -11.06 4.513 1.994 1.994 0 0 1 -.792 2.686 3.468 3.468 0 0 0 -1.835 3.6 3.807 3.807 0 0 0 3.644 2.981h5.321a1 1 0 0 1 1 1z"></path></svg>
                                            <span>Create teaser campaign</span>
                                        </button>
                                        <button wire:click="openInfluencerCampaignPopup"
                                                class="group inline-flex justify-end gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                                type="button">
                                            <svg class="shrink-0 h-5 w-5" fill="currentColor" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m17 0a1 1 0 0 0 -1 1c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a3.979 3.979 0 0 0 1.514 3.109l3.572 7.972a3.233 3.233 0 0 0 2.953 1.919 2.982 2.982 0 0 0 2.72-4.2l-2.2-4.8h2.441c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0v-18a1 1 0 0 0 -1-1zm-8.063 20.619a.983.983 0 0 1 -.898 1.381 1.232 1.232 0 0 1 -1.126-.734l-2.808-6.266h2.254zm7.063-6.019a7.723 7.723 0 0 0 -5-1.6h-7a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h7a7.723 7.723 0 0 0 5-1.595zm7.9.852a1 1 0 0 1 -1.342.448l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 .448 1.337zm-3.79-9a1 1 0 0 1 .448-1.342l2-1a1 1 0 1 1 .894 1.79l-2 1a1 1 0 0 1 -1.342-.448zm-.11 3.548a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1 -1-1z"></path></svg>
                                            <span>Create Influencer campaign</span>
                                        </button>
                                    </div>

                                    <div class="mt-5 w-fit ml-auto">
                                        <button class="inline-flex justify-end gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                                @click="openModal=false">Skip
                                        </button>
                                    </div>

                                </div>
                                <!--/ Publish Or Save-->
                            </div>
                        </div>
                    </div>
                    <!--End Marketing form-->

                    @else

                    <!--Start publish form-->
                    <div class=" text-gray-500">
                        <div class="h-full w-full overflow-y-auto">
                            <div class="container mx-auto w-full rounded-lg bg-white p-3">


                                <!--Choose Publish Date-->
                                <div class="mt-5 flex md:flex-row flex-col md:justify-between items-start md:items-center rounded-lg p-3 gap-y-5 border-gray-300 hover:border-traivis-300 bg-slate-0 hover:bg-traivis-0 transition-all">

                                    <!--Q-->
                                    <div class="flex flex-col md:text-left text-center md:gap-y-0 gap-y-2 md:mx-0 mx-auto">
                                        <p class="text-base font-bold">
                                            When do you want to publish this course?
                                        </p>

                                        @error('schedule_date')
                                        <x-tooltip-arrow-up-validation-error :message="$message" />
                                        @else
                                        <p class="text-sm text-green-700">{{ $schedule_msg }}</p>
                                        @enderror
                                    </div>
                                    <!--END Q-->

                                    <div class="flex justify-between items-center gap-x-5 md:mx-0 mx-auto">
                                        <button wire:click="$set('schedule_date',null)" class="inline-flex justify-end gap-x-2 rounded-full border border-gray-300 h-9 bg-white px-4 py-2 text-sm font-bold text-gray-500 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-offset-1 focus:ring-2 focus:ring-traivis-500  ">
                                            Now
                                        </button>
                                        <div class="group relative mr-[81px] flex cursor-pointer flex-row items-center">
                                            <input wire:model="schedule_date" type="datetime-local" id="Tdate"
                                                x-ref="schedule_date" required=""
                                                class="peer z-10 h-[35px] w-[35px] rounded-full border-slate-300 p-2 text-white transition-colors focus:ring-traivis-300">
                                            <label for="Tdate" class="sr-only">add dates</label>
                                            <button @click="$refs.schedule_date.showPicker()"
                                                class="font-bold absolute bottom-1/2 translate-y-1/2 right-[-81px] z-0 inline-flex h-9 cursor-pointer items-center rounded-full border border-gray-300 bg-white px-3.5 py-2 pl-11 text-sm leading-4 shadow-sm transition after:bg-traivis-500 hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-1 peer-focus-within:ring-2 peer-focus-within:ring-offset-1 peer-focus-visible:inline-flex @error('schedule_date') text-red-500 peer-focus-within:ring-red-500 focus:ring-red-500 ring-2 ring-offset-1 ring-red-500  @else ('schedule_date') text-slate-500 peer-focus-within:ring-traivis-500 focus:ring-traivis-500 @enderror">
                                                Schedule
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Choose Publish Date-->

                                <!-- Private Link fields-->
                                <div class="flex flex-col gap-y-2 mt-4 rounded-lg p-3 hover:border-traivis-300 hover:bg-traivis-50 transition-all"
                                     :class="privateLinkStatus ? 'border-traivis-300 bg-traivis-50 ' : 'border-gray-300 bg-slate-0'" role="switch">

                                    <!---private toggle--->
                                    <label for="private" class="flex items-center justify-between px-1 cursor-pointer">

                                        <p class="text-base font-bold">
                                            Private Course <span class="text-sm font-medium"> ( show only for who has the link )</span>
                                        </p>
                                        <button id="private" @click="privateLinkStatus = !privateLinkStatus" type="button"
                                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                            :class="privateLinkStatus ? 'bg-traivis-400' : 'bg-gray-200'" role="switch"
                                            aria-checked="false">
                                            <span class="sr-only">Use setting</span>
                                            <span aria-hidden="true"
                                                class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                :class="privateLinkStatus ? 'translate-x-5' : ''"></span>
                                        </button>
                                    </label>
                                    <!---->
                                    <!---private link--->
                                    <div x-show="privateLinkStatus"
                                        class="group flex items-center justify-between rounded-full text-sm text-gray-400 hover:text-gray-700">
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <input disabled readonly type="text" x-ref="course_route"
                                                value="{{ optional($course)->url }}"
                                                class="ml-2 w-0 flex-1 truncate border-none">

                                            <div x-show="copied"
                                                x-transition:enter="transition duration-300 transform ease-out"
                                                x-transition:enter-start="opacity-0 translate-y-2"
                                                x-transition:enter-end="opacity-100 translate-y-0"
                                                x-transition:leave="transition duration-200 transform ease-in"
                                                x-transition:leave-start="opacity-100 translate-y-0"
                                                x-transition:leave-end="opacity-0 translate-y-2"
                                                class="mt-2 rounded-full bg-gray-100 p-2 text-sm text-gray-500">
                                                Copied to
                                                clipboard!
                                            </div>
                                        </div>
                                        <div class="flex items-center">

                                            <button
                                                @click="navigator.clipboard.writeText($refs.course_route.value); copied = true; setTimeout(() => { copied = false }, 5000)"
                                                title="Copy" class="ml-2 mt-1 h-10 px-4 py-2 font-bold">
                                                <x-svg-icons.fi-rr-copy class="h-6 w-6" />
                                            </button>

                                        </div>
                                    </div>
                                    <!---->
                                </div>
                                <!--END Private Link fields-->

                                <!--Publish Or Save-->
                                <div class="mt-5 flex justify-evenly items-center">

                                    <button class="inline-flex justify-end gap-x-2 rounded-full border border-gray-300 px-4 py-2 text-sm font-bold text-gray-500 shadow-sm transition-colors bg-slate-100 hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                            wire:click="saveAsDraft">Save as draft
                                    </button>
                                    <button wire:click="publishCourse"
                                        class="h-10 transition-all w-fit inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-bold rounded-full shadow-sm space-x-2 text-white bg-traivis-500 hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                                        type="button">
                                        <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" height="512"
                                            viewBox="0 0 24 24" width="512">
                                            <path
                                                d="m18 9.064a3.049 3.049 0 0 0 -.9-2.164 3.139 3.139 0 0 0 -4.334 0l-11.866 11.869a3.064 3.064 0 0 0 4.33 4.331l11.87-11.869a3.047 3.047 0 0 0 .9-2.167zm-14.184 12.624a1.087 1.087 0 0 1 -1.5 0 1.062 1.062 0 0 1 0-1.5l7.769-7.77 1.505 1.505zm11.872-11.872-2.688 2.689-1.5-1.505 2.689-2.688a1.063 1.063 0 1 1 1.5 1.5zm-10.825-6.961 1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29l-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29zm18.274 14.29-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29l1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29zm-5.382-14.645 1.356-.387.389-1.358a1.042 1.042 0 0 1 2 0l.387 1.356 1.356.387a1.042 1.042 0 0 1 0 2l-1.356.387-.387 1.359a1.042 1.042 0 0 1 -2 0l-.387-1.355-1.358-.389a1.042 1.042 0 0 1 0-2z">
                                            </path>
                                        </svg>
                                        <span>Publish</span>
                                    </button>
                                </div>
                                <!--/ Publish Or Save-->

                            </div>
                        </div>
                    </div>
                    <!--End publish form-->

                    @endif
                </div>
                <!--END popup content -->
                @else
                <!-- popup content-->
                <div
                    class="relative my-8 inline-block w-full max-w-3xl transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">
                    <!-- label-->
                    <div class="flex items-center justify-center">
                        <p
                            class="absolute -top-6 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold group-hover:border-traivis-400">
                            <svg fill="currentColor" class="mr-3 h-8 w-8" height="512" viewBox="0 0 24 24" width="512">
                                <path
                                    d="m12.883 15.216-7.935 7.935a2.9 2.9 0 1 1 -4.1-4.1l7.935-7.935zm4.217-8.316a2.967 2.967 0 0 0 -4.1 0l-2.8 2.8 4.1 4.1 2.8-2.8a2.9 2.9 0 0 0 0-4.1zm-12.237-1.755 1.55.442.442 1.55a1.191 1.191 0 0 0 2.29 0l.442-1.55 1.55-.442a1.191 1.191 0 0 0 0-2.29l-1.55-.442-.442-1.55a1.191 1.191 0 0 0 -2.29 0l-.442 1.55-1.55.442a1.191 1.191 0 0 0 0 2.29zm12 12 1.55.442.442 1.55a1.191 1.191 0 0 0 2.29 0l.442-1.55 1.55-.442a1.191 1.191 0 0 0 0-2.29l-1.55-.442-.442-1.55a1.191 1.191 0 0 0 -2.29 0l-.442 1.55-1.55.442a1.191 1.191 0 0 0 0 2.29zm.893-12.645 1.355.387.389 1.357a1.042 1.042 0 0 0 2 0l.387-1.355 1.357-.389a1.042 1.042 0 0 0 0-2l-1.355-.387-.389-1.357a1.042 1.042 0 0 0 -2 0l-.387 1.355-1.357.389a1.042 1.042 0 0 0 0 2z" />
                            </svg>
                            Incomplete Course
                        </p>
                    </div>
                    <!--/ label-->
                    <!---->
                    <div class="">
                        <div class="h-full w-full overflow-y-auto">
                            <div class="container mx-auto w-full rounded-lg bg-white p-3">
                                <!-- header-->
                                @if ($course->publish_status=='published')
                                <p class="py-3 text-center text-lg font-semibold text-slate-500">
                                    Your Course is already published but you have uncompleted contents that will not
                                    published until complete them
                                </p>
                                @else
                                <p class="py-3 text-center text-lg font-semibold text-slate-500">
                                    You need to complete the following tasks inorder to publish this course
                                </p>
                                @endif
                                <!--END  header-->
                                <!-- Incompleted Tasks-->
                                <div class="flex flex-col gap-y-4 pt-5">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Content Name</th>
                                                <th>Section Name</th>
                                                <th>Review Feedback</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($courseDetails->publish_status=='Declined')
                                            <tr>
                                                <td>Course Details</td>
                                                <td>N/A<td>
                                                <td>{{ $courseDetails->review_feedback }}</td>
                                            </tr>
                                            @endif
                                            @foreach ($inCompletedContent as $content)
                                            <tr>
                                                <td>{{ $content->contentable->title }}</td>
                                                <td>{{ $content->section->section_name }}</td>
                                                <td>{{ $content->review_feedback }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!--END Incompleted Tasks-->
                                <!--Cancel Button-->
                                <div class="mt-5 flex justify-center">
                                    <button
                                        class="inline-flex justify-center gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                        @click="openModal = false">Exit</button>
                                </div>
                                <!--/ Cancel Button-->
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--END popup content -->
                @endif
            </div>
        </div>
    </section>
</div>