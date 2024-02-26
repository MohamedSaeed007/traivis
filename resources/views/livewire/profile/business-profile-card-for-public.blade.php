<div>

    <!------- Close ----------->
    <div class="absolute -ml-32 justify-center justify-evenly pr-2 pt-4 sm:pr-4">

        <button @click="header = false" type="button"
            class="w-15 group -mt-3 inline-flex w-20 justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
            <span>Close</span>
        </button>

    </div>
    <!-------END Close ----------->

    <!-------Space name----------->
    <div class="flex flex-row gap-x-3">
        <div class="mt-1">
            <div class="flex items-center">

                <div class="inline-block h-12 w-12 flex-shrink-0 overflow-hidden rounded-full"
                    aria-hidden="true">
                    <img class="h-full w-full rounded-full object-cover" src="{{ $business?->avatar }}"
                        alt="">
                </div>

            </div>
        </div>
        <h2 class="my-3 flex w-full truncate text-2xl font-bold text-gray-500 transition-colors   "
            id="slide-over-title">{{ $business->business_name }}</h2>
    </div>
    <!------END-Space name----------->

    <!------- Personal Info ----------->
    <div class="flex grid-cols-12 flex-col gap-2 lg:flex-row">

        <!-------personal info LEFT Col----------->
        <div class="flex-grow grid-cols-12 space-y-6">

            <!-------Nemes------------>
            <div class="grid grid-cols-12 gap-2">

                <div class="col-span-12 sm:col-span-4">
                    <label
                        class="block text-base font-medium text-gray-500 transition-colors "
                        for="first_name"></label>

                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="first_name">
                        {{ $business->business_name }}</p>
                </div>

                <div class="col-span-12 sm:col-span-4">
                    <label
                        class="block text-base font-medium text-gray-500 transition-colors  "
                        for="last_name" contenteditable="false"></label>

                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="last_name">
                        {{ $business->categories?->pluck('category_name')->implode(', ') }}</p>
                </div>

                <div class="col-span-12 sm:col-span-4">
                    <label
                        class="block text-base font-medium text-gray-500 transition-colors  "
                        for="last_name"></label>

                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="last_name">
                        {{ $business->industries?->pluck('en_name')->implode(', ') }}</p>
                </div>

            </div>
            <!------END-Nemes------------>

            <!-------Email ----------->
            <div class="grid grid-cols-12 gap-2">
                @if ($professionalInformation?->show_email)
                    <div class="col-span-12 sm:col-span-8">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="last_name">
                            {{ $business?->business_email }}</p>
                    </div>
                @endif

            </div>
            <!------END-Email ----------->

            <!-------Phone Number ----------->
            <div class="grid grid-cols-12 gap-2">
                @if ($professionalInformation?->show_phone)
                    <div class="col-span-12 sm:col-span-8">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="last_name">
                            {{ $business?->business_phone_one }}</p>
                    </div>
                @endif
            </div>
            <!------END-Phone Number ----------->

            <!-------About----------->
            <div class="flex w-full flex-row">
                <p class="w-fit overflow-hidden px-3 py-2 text-justify sm:text-sm">
                    {{ $business->description }}
                </p>
            </div>
            <!------END-About----------->

        </div>
        <!------END-personal info LEFT COL----------->

    </div>
    <!-------END Personal Info ----------->

    <!------- Georgraphical Infpormation----------->
    <div class="my-5">

        <!-- label-->
        <dt class="z-10 bg-white leading-7">
            <p
                class="flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white text-left transition-colors focus:text-gray-900 focus:outline-none   ">
                <span
                    class="inline-flex items-center border-transparent px-1 py-4 text-lg font-bold text-gray-500 transition-colors  ">
                    Georgraphical Information
                </span>
            </p>
        </dt>
        <!--/ label-->

        <!-- Content-->
        <div>

            <!--Georgraphical Info Content-->
            <div class="grid grid-cols-12 gap-2 px-6" contenteditable="false">

                <!--field-->
                <div class="col-span-12 sm:col-span-6">
                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="last_name">
                        {{ $business?->country?->name }}
                    </p>
                </div>

                <!--field-->
                <div class="col-span-12 sm:col-span-6">
                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                        {{ $business?->city }}
                    </p>
                </div>

            </div>
            <!--/ Georgraphical Info Content-->

        </div>
        <!--/ Content-->

    </div>
    <!-------END Georgraphical Infpormation----------->

    @if ($business->professionalInformation)
        <!------- Professional Info----------->
        <div class="my-5">

            <!-- label-->
            <dt class="z-10 bg-white leading-7">
                <p
                    class="flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white text-left transition-colors focus:text-gray-900 focus:outline-none   ">
                    <span
                        class="inline-flex items-center border-transparent px-1 py-4 text-lg font-bold text-gray-500 transition-colors  ">
                        Professional Information
                    </span>
                </p>
            </dt>
            <!--/ label-->

            <!-- Content-->
            <div>

                <!--Professional Info Content-->
                <div class="grid grid-cols-12 gap-2 px-6" contenteditable="false">

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="last_name">
                            {{ $business?->business_type }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            {{ $business?->professionalInformation?->industry }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            Year Of Experience in Teaching :
                            {{ $business?->professionalInformation?->teaching_years }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            Preferred Teaching Languages :
                            {{ $business?->professionalInformation?->preferred_languages }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            Preferred Subjects :
                            {{ $business?->professionalInformation?->preferred_subjects }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            Preferred Teaching Delivery Modes :
                            {{ $business?->professionalInformation?->preferred_teaching_mode }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            Personal Website :
                            {{ $business?->professionalInformation?->personal_website }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            Teaching Hourly Rate :
                            {{ $business?->professionalInformation?->teaching_hourly_rate }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            Accerditions and memberships :
                            {{ $business?->professionalInformation?->accerditions }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            Asscoited link : {{ $business?->professionalInformation?->asscoited_link }}
                        </p>
                    </div>

                </div>
                <!--/ Professional Info Content-->

            </div>
            <!--/ Content-->

        </div>
        <!-------END Professional Info----------->
    @endif

    @if ($business->educationInfos && $business->educationInfos->count() > 0)
        <!------- Education Info----------->
        <div class="my-5">

            <!-- label-->
            <dt class="z-10 bg-white leading-7">
                <p
                    class="flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white text-left transition-colors focus:text-gray-900 focus:outline-none   ">
                    <span
                        class="inline-flex items-center border-transparent px-1 py-4 text-lg font-bold text-gray-500 transition-colors  ">
                        Educational Information
                    </span>
                </p>
            </dt>
            <!--/ label-->

            <!-- Content-->
            <div>
                @forelse ($business->educationInfos as $educationInfo)
                    <!--Education Info Content-->
                    <div class="grid grid-cols-12 gap-2 px-6" contenteditable="false">

                        <!--field-->
                        <div class="col-span-12 sm:col-span-6">
                            <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="last_name">
                                {{ $educationInfo->name }}
                            </p>
                        </div>

                        <!--field-->
                        <div class="col-span-12 sm:col-span-6">
                            <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                {{ $educationInfo->major }}
                            </p>
                        </div>

                        <!--field-->
                        <div class="col-span-12 sm:col-span-6">
                            <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                {{ $educationInfo->level }}
                            </p>
                        </div>

                        <!--field-->
                        <div class="col-span-12 sm:col-span-6">
                            <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                {{ $educationInfo->location }}
                            </p>
                        </div>

                    </div>
                    <!--/ Education Info Content-->
                    <hr />
                @empty
                @endforelse
            </div>
            <!--/ Content-->

        </div>
        <!-------END Education Info----------->
    @endif

    @if ($business->workExperiences && $business->workExperiences->count() > 0)
        <!--Work Experience-->
        <div class="my-5">
            <!--Work Experience Label-->
            <span
                class="group inline-flex items-center border-transparent px-1 py-4 text-lg font-bold text-gray-500 transition-colors group-hover:text-gray-700   ">
                Work Experience
            </span>
            <!--/Work Experience Label-->

            <!--Work Experience Content-->
            <div class="">
                @forelse ($business->workExperiences->sortByDesc('id') as $index => $workExperience)
                    <!------- Previous Jobs ----------->
                    <div class="">
                        @if ($index < 2)
                            <!-- label-->
                            <dt class="z-10 bg-white leading-7">
                                <p
                                    class="flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white text-left transition-colors focus:text-gray-900 focus:outline-none   ">
                                    <span
                                        class="inline-flex items-center border-transparent px-1 py-4 text-lg font-semibold text-gray-500 transition-colors  ">
                                        {{ $index == 0 ? 'Current' : 'Previous' }} Job
                                    </span>
                                </p>
                            </dt>
                            <!--/ label-->
                        @endif
                        <!--Collapse Content-->
                        <div>

                            <!--Previous Jobs Content-->
                            <div class="grid grid-cols-12 gap-2 px-3 md:px-6">

                                <div class="col-span-12 sm:col-span-6">
                                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                        {{ $workExperience->employer_name }}
                                    </p>
                                </div>

                                <div class="col-span-12 sm:col-span-6">
                                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                        {{ $workExperience->industry }}
                                    </p>
                                </div>

                                <div class="col-span-12 sm:col-span-6">
                                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                        {{ $workExperience->position }}
                                    </p>
                                </div>

                                <div class="col-span-12 sm:col-span-6">
                                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                        {{ $workExperience->employment_status }}
                                    </p>
                                </div>

                                <div class="col-span-12 sm:col-span-6">
                                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                        {{ $workExperience->url }}
                                    </p>
                                </div>

                                <div class="col-span-12 sm:col-span-6">
                                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                        {{ $workExperience->location }}
                                    </p>
                                </div>

                                <div class="col-span-12 sm:col-span-6">
                                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                        {{ $workExperience->start }}
                                    </p>
                                </div>

                                <div class="col-span-12 sm:col-span-6">
                                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                        {{ $workExperience->end }}
                                    </p>
                                </div>

                            </div>
                            <!--/ Previous Jobs Content-->

                        </div>
                        <!--/Collapse Content-->

                    </div>
                    <!-------END Previous Jobs ----------->
                @empty
                @endforelse
            </div>
            <!--/Work Experience Content-->

        </div>
        <!--/Work Experience-->
    @endif

    <!-------END Card Container ----------->

</div>
