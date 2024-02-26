<div>

    <!------- Close ----------->
    <div class="absolute -ml-32 justify-center justify-evenly pr-2 pt-4 sm:pr-4">

        <button @click="header=false" type="button"
            class="w-15 group -mt-3 inline-flex w-20 justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
            <span>Close</span>
        </button>

    </div>
    <!-------END Close ----------->

    <!-------Profile name----------->
    <div class="flex flex-row gap-x-3">
        <div class="mt-1">
            <div class="flex items-center">

                <div class="inline-block h-12 w-12 flex-shrink-0 overflow-hidden rounded-full"
                    aria-hidden="true">
                    <img class="h-full w-full rounded-full object-cover" src="{{ $user?->avatar }}"
                        alt="">
                </div>

            </div>
        </div>
        <h2 class="my-3 flex w-full truncate text-2xl font-bold text-gray-500 transition-colors   "
            id="slide-over-title">User Name</h2>
    </div>
    <!------END-Profile name----------->

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
                        {{ $user->first_name }}</p>
                </div>

                <div class="col-span-12 sm:col-span-4">
                    <label
                        class="block text-base font-medium text-gray-500 transition-colors  "
                        for="last_name" contenteditable="false"></label>

                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="last_name">
                        {{ $user->middle_name }}</p>
                </div>

                <div class="col-span-12 sm:col-span-4">
                    <label
                        class="block text-base font-medium text-gray-500 transition-colors  "
                        for="last_name"></label>

                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="last_name">
                        {{ $user->last_name }}</p>
                </div>

            </div>
            <!------END-Nemes------------>

            <!-------Email ----------->
            <div class="grid grid-cols-12 gap-2">

                <div class="col-span-12 sm:col-span-8">
                    <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="last_name">
                        {{ $user->email }}</p>
                </div>

            </div>
            <!------END-Email ----------->

            <!-------About----------->
            {{--  <div class=" flex flex-row w-full">
          <p class="text-justify py-2 px-3 sm:text-sm w-fit overflow-hidden">
            Description Description Description Description Description Description Description Description Description Description Description Description
            Description Description Description Description Description Description Description Description Description Description Description Description

          </p>
        </div>  --}}
            <!------END-About----------->

        </div>
        <!------END-personal info LEFT COL----------->

    </div>
    <!-------END Personal Info ----------->

    <!------- Education Info----------->
    <div class="my-5">

        <!-- label-->
        <dt class="z-10 bg-white leading-7">
            <p
                class="flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white text-left transition-colors focus:text-gray-900 focus:outline-none   ">
                <span
                    class="inline-flex items-center border-transparent px-1 py-4 text-lg font-bold text-gray-500 transition-colors  ">
                    Education Info
                </span>
            </p>
        </dt>
        <!--/ label-->

        <!-- Content-->
        <div>

            <!--Education Info Content-->
            <div class="grid grid-cols-12 gap-2 px-6" contenteditable="false">

                @forelse ($education as $index => $educate)
                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm" id="last_name">
                            {{ $education[$index]->level }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            {{ $education[$index]?->major }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            {{ $education[$index]?->name }}
                        </p>
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                            {{ $education[$index]->location }}
                        </p>
                    </div>
                @empty
                    <p>Not defined</p>
                @endforelse
            </div>
            <!--/ Education Info Content-->

        </div>
        <!--/ Content-->

    </div>
    <!-------END Education Info----------->

    <!--Work Experience-->
    <div class="my-5">
        <!--Work Experience Label-->
        <p
            class="group items-center border-b px-1 py-4 text-lg font-bold text-gray-500 transition-colors group-hover:text-gray-700   ">
            Work Experience
        </p>
        <!--/Work Experience Label-->
        <!--Work Experience Content-->
        <div class="">
            @forelse ($workExperiences as $index => $workExperience)
                <!------- Current Job ----------->
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

                        <!--Current Jobs Content-->
                        <div class="grid grid-cols-12 gap-2 px-3 md:px-6">

                            <div class="col-span-12 sm:col-span-6">
                                <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                    {{ $workExperiences[$index]->employment_status }}
                                </p>
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                    {{ $workExperiences[$index]->industry }}
                                </p>
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                    {{ $workExperiences[$index]->position }}
                                </p>
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                    {{ $workExperiences[$index]->experience }}
                                </p>
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                    {{ $workExperiences[$index]->employer_name }}
                                </p>
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                    {{ $workExperiences[$index]->location }}
                                </p>
                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <p class="mt-1 block w-full px-3 py-2 sm:text-sm">
                                    {{ $workExperiences[$index]->url }}
                                </p>
                            </div>

                        </div>
                        <!--/ Current Jobs Content-->

                    </div>
                    <!--/Collapse Content-->

                </div>
                <!-------END Current Job ----------->
            @empty
                <p>Not defined</p>
            @endforelse

        </div>
        <!--/Work Experience Content-->

    </div>
    <!--/Work Experience-->

</div>
