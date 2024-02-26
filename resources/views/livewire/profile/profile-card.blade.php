<div x-data=""
    x-on:refresh-event.window="let error = document.querySelector('.error'); if(error){error.scrollIntoView();}">
    <!-------Close / Save----------->
    <form wire:submit.prevent='save'>
        <div class="absolute -ml-32 justify-center justify-evenly pr-2 pt-4 sm:pr-4">

            <button type="submit"
                class="w-15 group -mt-3 inline-flex w-20 justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
                <!-- Heroicon name: solid/mail -->
                <span>Save</span>
            </button>

            <div class="mt-6 space-y-3 sm:flex-row sm:space-x-4 sm:space-y-0">

                <button type="button"
                    class="group -mt-3 inline-flex w-20 justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
                    <!-- Heroicon name: solid/mail -->
                    <span contenteditable="false" @click="header=false">Close</span>
                </button>

            </div>
        </div>
        <!-------END Close / Save ----------->
        <div class="">
            <p
                class="my-3 flex w-full text-2xl font-bold text-gray-500 transition-colors   ">
                {{ $user->first_name . ' ' . $user->last_name }} <x-svg-icons.fi-rr-rotate-right
                    class="ml-3 inline-block h-8 w-5 animate-spin" wire:loading wire:target="save" />
            </p>

        </div>

        <!------END-Profile name----------->

        <!-------Personal info----------->

        <!--main grid-->
        <div class="flex grid-cols-12 flex-col gap-2 px-3 md:px-6 lg:flex-row">

            <!-------personal info LEFT Col----------->
            <div class="flex-grow grid-cols-12 space-y-6">

                <!-------Nemes------------>
                <div class="grid grid-cols-12 gap-2">

                    <div class="col-span-12 sm:col-span-4">
                        <label
                            class="block text-base font-medium text-gray-500 transition-colors "
                            for="first_name"></label>

                        <input wire:model.defer="user.first_name"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 pr-3 shadow-sm focus:outline-none sm:text-sm"
                            type="text" name="first_name" placeholder="First Name (Required)">
                        @error('user.first_name')
                            <p class="error mt-2 text-sm text-red-600 ">{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-4">
                        <label
                            class="block text-base font-medium text-gray-500 transition-colors  "
                            for="middle_name" contenteditable="false"></label>

                        <input wire:model.defer="user.middle_name"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" name="middle_name" placeholder="Middle Name">
                        @error('user.middle_name')
                            <p class="error mt-2 text-sm text-red-600 ">{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-4">
                        <label
                            class="block text-base font-medium text-gray-500 transition-colors  "
                            for="last_name"></label>

                        <input wire:model.defer="user.last_name"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" name="last_name" placeholder="Last Name">
                        @error('user.last_name')
                            <p class="error mt-2 text-sm text-red-600 ">{{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>

                <!------END-Nemes------------>

                <!-------Email setting----------->

                {{-- <div class="grid grid-cols-12 gap-2">

                    <div class="col-span-12 sm:col-span-8">
                        <input
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 block w-full rounded-md border border-gray-300 shadow-sm focus:outline-none sm:text-sm"
                            id="email" type="text" name="email" autocomplete="email"
                            placeholder="Email Address (Required)">
                    </div>

                    <div class="col-span-12 my-auto flex flex-row justify-between sm:col-span-4 md:justify-end">

                        <p class="w-xl my-auto text-base font-medium text-gray-500 transition-colors "
                            id="privacy-option-description-2" contenteditable="false">
                            Public
                        </p>

                        <button
                            class="focus:ring-light-traivis-500 relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-gray-200 transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2"
                            type="button" aria-pressed="false" aria-labelledby="privacy-option-label-2"
                            aria-describedby="privacy-option-description-2">

                            <span class="sr-only">User setting</span>
                            <!-- On: "translate-x-5", Off: "translate-x-0"-->

                            <span
                                class="inline-block h-5 w-5 translate-x-0 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                aria-hidden="true"></span>
                        </button>

                    </div>

                </div> --}}
                <!------END-Email setting----------->
                <!--change cover-->
                {{-- <div class="absolute top-1" style="right: 5px;">
                    <button type="button"
                        class="inline-flex items-center space-x-2 rounded-full rounded-r-none border border-transparent bg-traivis-500 px-3.5 py-2 pr-5 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                        <label class="whitespace-nowrap font-bold">Cover pic
                            <input wire:model="cover_pic" type="file" style="display: none">
                        </label>
                    </button>

                </div> --}}
                <!---->
                <!-------About----------->
                <div class="-mt-2">

                    <label
                        class="block text-base font-medium text-gray-500 transition-colors "
                        for="about">
                    </label>

                    <div class="mt-1">
                        <textarea wire:model.defer="user.description"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm"
                            id="about" name="about" rows="3"
                            placeholder="A Brief Description About Yourself (Required)"></textarea>
                        @error('user.description')
                            <p class="error mt-2 text-sm text-red-600 ">{{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>
                <!------END-About----------->
                <!-------Timezone----------->
                <div class="-mt-2">

                    <label
                        class="block text-base font-medium text-gray-500 transition-colors "
                        for="timezone">
                    </label>

                    <div class="mt-1">
                        <div class="flex" x-data="{
                            userTimezone: @entangle('user.timezone').defer,
                            detect: function() { this.userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone }
                        }">
                            <select x-model="userTimezone"
                                class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full grow rounded-md border-gray-300 shadow-sm sm:text-sm">
                                @foreach ($timezones as $timezoneValue => $timezoneName)
                                    <option value="{{ $timezoneValue }}"
                                        @if ($timezoneValue == $user->timezone) class="font-bold" @endif>
                                        {{ $timezoneName }}</option>
                                @endforeach

                            </select>
                            <button type="button" @click="detect()">auto detect</button>
                        </div>
                        @error('user.timezone')
                            <p class="error mt-2 text-sm text-red-600 ">{{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>
                <!------END-About----------->

            </div>
            <!------END-personal info LEFT COL----------->

            <!------profile pic-RIGHT COL---------->

            <div class="mt-6 flex-grow lg:ml-6 lg:mt-0 lg:flex-shrink-0 lg:flex-grow-0">
                <p class="flex justify-center text-base font-medium text-gray-500 "
                    aria-hidden="true">
                </p>

                <!------md-only--------->
                <div class="mt-1 lg:hidden">
                    <div class="flex items-center">

                        <div class="inline-block h-12 w-12 flex-shrink-0 overflow-hidden rounded-full"
                            aria-hidden="true">
                            <img class="h-full w-full rounded-full object-cover"
                                src="{{ $profile_pic ? $profile_pic?->temporaryUrl() : $user->avatar }}"
                                alt="">
                        </div>

                        <div class="ml-5 rounded-md shadow-sm">
                            <div
                                class="focus-within:ring-light-traivis-500 group relative flex items-center justify-center rounded-md border border-gray-300 px-3 py-2 focus-within:ring-2 focus-within:ring-offset-2 hover:bg-gray-50">

                                <label
                                    class="pointer-events-none relative text-sm font-medium leading-4 text-gray-700"
                                    for="user_photo">
                                    <span>Change</span>
                                    <span class="sr-only">user photo</span>
                                </label>

                                <input
                                    class="absolute h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0"
                                    wire:model='profile_pic' name="user_photo" type="file">
                                @error('profile_pic')
                                    <p class="error mt-2 text-sm text-red-600 ">
                                        {{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <!-----END-md-only--------->

                <!------LG-only--------->
                <div class="relative hidden overflow-hidden rounded-full lg:block">
                    <img class="relative h-40 w-40 rounded-full object-cover"
                        src="{{ $profile_pic ? $profile_pic?->temporaryUrl() : $user->avatar }}"
                        alt=""><label
                        class="absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-75 text-sm font-medium text-white opacity-0 focus-within:opacity-100 hover:opacity-100"
                        for="user-photo">
                        <span>Change</span>
                        <span class="sr-only">user photo</span>
                        <input accept="image/*"
                            class="absolute inset-0 h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0"
                            wire:model='profile_pic' type="file" name="user-photo"></label>

                </div>
                @error('profile_pic')
                    <p class="error mt-2 text-sm text-red-600 ">{{ $message }}</p>
                @enderror
                <!-----END-LG-only--------->

            </div>
            <!-----END-- profile pic --RIGHT COL---------->

        </div>
        <!------END-Personal info----------->

        <!-------Education info----------->

        <!--main dt-->
        <div x-data="{ show: true }">

            <dt class="leading-7">
                <button x-on:click="show=!show" type="button"
                    class="group mt-5 flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white text-left transition-colors hover:border-gray-500 hover:text-gray-700 focus:text-gray-900 focus:outline-none group-hover:text-gray-700   ">

                    <span
                        class="group inline-flex items-center truncate border-transparent px-1 py-4 text-lg font-bold text-gray-500 transition-colors group-hover:text-gray-700   "
                        contenteditable="false">Education Information</span>

                    <!-- <span x-html="show?'&and;':'&or;'"></span> -->
                    <svg :class="show ? 'rotate-0' : '-rotate-90'"
                        class="mt-10 h-6 w-6 -rotate-90 transform text-lg font-bold text-gray-500 transition-all group-hover:text-gray-700  "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"></path>
                    </svg>

                </button>
            </dt>
            <!--END-main dt-->

            <!--Main Grid-->
            <div x-show="show" class="mt-6 grid grid-cols-12 gap-2 px-6" contenteditable="false">
                @forelse ($education as $index => $educate)
                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <label
                            class="block text-base font-medium text-gray-500 transition-colors "
                            contenteditable="false"></label>
                        <select wire:model.defer="education.{{ $index }}.level"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option value="">please select</option>
                            @foreach (config('select-options.Levels_of_education') as $level)
                                <option>{{ $level }}</option>
                            @endforeach
                        </select>
                        {{-- <input wire:model.defer="education.{{ $index }}.level "
                        class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                        type="text" placeholder="Highest Level of Education"> --}}
                        @error("education.$index.level")
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>
                        <select wire:model.defer="education.{{ $index }}.major"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option value="">please select</option>
                            @foreach (config('select-options.EDUCATIONAL_MAJORS') as $key => $majors)
                                <optgroup label="{{ $key }}">
                                    @foreach ($majors as $major)
                                        <option>{{ $major }}</option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                        {{-- <input wire:model.defer="education.{{ $index }}.major"
                        class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                        placeholder="Education major (select more than one if required)"> --}}
                        @error("education.$index.major")
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>

                        <input wire:model.defer="education.{{ $index }}.name"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="School/ University Name (Required)">
                        @error("education.$index.name")
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>
                        <select wire:model.defer="education.{{ $index }}.location"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option value="">School/ University Location</option>
                            @foreach ($countries as $country)
                                <option>{{ $country->name }}</option>
                            @endforeach
                        </select>
                        {{-- <input wire:model.defer="education.{{ $index }}.location"
                        class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                        type="text" placeholder="School/ University Location"> --}}
                        @error("education.$index.location")
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <br class="col-span-12" />
                    <hr class="col-span-12" />
                @empty

                @endforelse
                @if ($neweducation)
                    <div class="col-span-12 sm:col-span-6">
                        <label
                            class="block text-base font-medium text-gray-500 transition-colors "
                            contenteditable="false"></label>
                        <select wire:model.defer="neweducation.level"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option value="">please select</option>
                            @foreach (config('select-options.Levels_of_education') as $level)
                                <option>{{ $level }}</option>
                            @endforeach
                        </select>
                        {{-- <input wire:model.defer="neweducation.level"
                        class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                        type="text" placeholder="Highest Level of Education"> --}}
                        @error('neweducation.level')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>
                        <select wire:model.defer="neweducation.major"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option>please select</option>
                            @foreach (config('select-options.EDUCATIONAL_MAJORS') as $key => $majors)
                                <optgroup>{{ $key }}</optgroup>
                                @foreach ($majors as $major)
                                    <option>{{ $major }}</option>
                                @endforeach
                            @endforeach
                        </select>
                        {{-- <input wire:model.defer="neweducation.major"
                        class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                        placeholder="Education major (select more than one if required)"> --}}
                        @error('neweducation.major')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>
                        <input wire:model.defer="neweducation.name"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="School/ University Name (Required)">
                        @error('neweducation.name')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>
                        <select wire:model.defer="neweducation.location"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option value="">School/ University Location</option>
                            @foreach ($countries as $country)
                                <option>{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('neweducation.location')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-12 flex justify-center">
                        <button class="flex p-2" aria-expanded="false" type="button"
                            wire:click='saveNewEducation'>
                            <label class="px-2 text-base">Add more</label>
                            <span class="sr-only">Add more</span>
                            <!-- Icon when menu is closed.-->
                            <!-- Heroicon name: menu Menu open: "hidden", Menu closed: "block" -->
                            <svg id="Layer_1" height="512" viewBox="0 0 24 24" width="512"
                                xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                fill="currentColor" class="h-6 w-6 group-hover:rotate-45">
                                <path
                                    d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                @else
                    <!--field-->
                    <div class="col-span-12 sm:col-span-6">

                        <!--add more-->
                        <div
                            class="group float-right flex grid-cols-2 items-center justify-center font-medium text-gray-500 transition-colors hover:text-traivis-500 ">

                            <button class="flex p-2" aria-expanded="false" type="button"
                                wire:click='AddMoreEducation'>
                                <label class="px-2 text-base">Add more</label>
                                <span class="sr-only">Add more</span>
                                <!-- Icon when menu is closed.-->
                                <!-- Heroicon name: menu Menu open: "hidden", Menu closed: "block" -->
                                <svg id="Layer_1" height="512" viewBox="0 0 24 24" width="512"
                                    xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                    fill="currentColor" class="h-6 w-6 group-hover:rotate-45">
                                    <path
                                        d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <!--add more-->

                    </div>
                @endif
            </div>
        </div>
        <!------END-Education info----------->

        <!-------Work Experience----------->

        <!--main dt-->
        <div x-data="{ show: true }">

            <dt class="leading-7">
                <button x-on:click="show=!show" type="button"
                    class="group mt-5 flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white text-left text-lg font-bold text-gray-500 transition-colors hover:border-gray-500 group-hover:text-gray-700    ">

                    <span
                        class="group inline-flex items-center border-transparent px-1 py-4 text-lg font-bold text-gray-500 transition-colors hover:text-gray-700 group-hover:text-gray-700   "
                        contenteditable="false">Work Experience</span>

                    <svg :class="show ? 'rotate-0' : '-rotate-90'"
                        class="mt-10 h-6 w-6 -rotate-90 transform text-lg font-bold text-gray-500 transition-all group-hover:text-gray-700  "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"></path>
                    </svg>

                </button>
            </dt>
            <!--END-main dt-->
            @forelse ($workExperiences as $index => $workExperience)
                <!------Current Jobs-dt----->
                @if ($index < 2)
                    <dt class="">
                        <button type="button"
                            class="group mt-2 flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white px-5 text-left text-lg text-gray-500 transition-colors hover:border-gray-500 hover:text-gray-700 focus:text-gray-900 focus:outline-none group-hover:text-gray-700  ">

                            <span class="inline-block flex w-full"
                                contenteditable="false">{{ $index == 0 ? 'Current' : 'Previous' }}
                                Job
                            </span>

                            <span class="ml-6 flex h-7 items-center">
                                <svg class="h-6 w-6 -rotate-180 transform" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 9l-7 7-7-7">
                                    </path>
                                </svg></span>

                        </button>
                    </dt>
                @endif
                <!-----END--dt-->

                <!--Current Jobs--Main Grid--->
                <div x-show="show" class="my-6 grid grid-cols-12 gap-2 px-3 md:px-6">

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>
                        <select
                            wire:model.defer="workExperiences.{{ $index }}.employment_status"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option value="">Please Select</option>
                            @foreach (config('select-options.Employment_status') as $option)
                                <option>{{ $option }}</option>
                            @endforeach
                        </select>
                        {{-- <input wire:model.defer="workExperiences.{{ $index }}.employment_status"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="Employment Status (Required)"> --}}
                        @error("workExperiences.$index.employment_status")
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>
                        <select wire:model.defer="workExperiences.{{ $index }}.industry"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option disabled value="">select Industry</option>
                            @foreach ($industries as $industry)
                                <option value="{{ $industry->id }}">{{ $industry->en_name }}</option>
                            @endforeach
                        </select>
                        @error("workExperiences.$index.industry")
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>

                        <input wire:model.defer="workExperiences.{{ $index }}.position"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" autocomplete="given-name" placeholder="Position">
                        @error("workExperiences.$index.position")
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>

                        <input wire:model.defer="workExperiences.{{ $index }}.experience"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="Experience Level">
                        @error("workExperiences.$index.experience")
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>

                        <input wire:model.defer="workExperiences.{{ $index }}.employer_name"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="Employer Name (Required)">
                        @error("workExperiences.$index.employer_name")
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>
                        <select wire:model.defer="workExperiences.{{ $index }}.location"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option disabled value="">select Job Location</option>
                            @foreach ($countries as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error("workExperiences.$index.location")
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>

                        <input wire:model.defer="workExperiences.{{ $index }}.url"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="Organisation Website URL">
                        @error("workExperiences.$index.url")
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-12 grid grid-cols-12 gap-2 md:col-span-6">

                        <div class="col-span-12 sm:col-span-6">
                            <label
                                class="block inline-flex grid-rows-1 text-base font-medium text-gray-500 "
                                for="Start date" contenteditable="false">Starting
                                Date</label>

                            <input wire:model.defer="workExperiences.{{ $index }}.start"
                                class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                                type="date">
                            @error("workExperiences.$index.start")
                                <p class="error mt-2 text-sm text-red-600 ">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label
                                class="ml-2 block inline-grid text-base font-medium text-gray-500 "
                                for="End date" contenteditable="false">End Date
                            </label>

                            <input wire:model.defer="workExperiences.{{ $index }}.end"
                                class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                                type="date">
                            @error("workExperiences.$index.end")
                                <p class="error mt-2 text-sm text-red-600 ">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>
                </div>
                <!--END-- Current Jobs --Main Grid--->
                <br class="col-span-12" />
                <hr class="col-span-12" />
            @empty

            @endforelse
            <!--Current Jobs--Main Grid--->
            @if ($newWorkExperiences)
                <div x-show="show" class="my-6 grid grid-cols-12 gap-2 px-3 md:px-6">

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>
                        <select wire:model.defer="newWorkExperiences.employment_status"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option value="">Please Select</option>
                            @foreach (config('select-options.Employment_status') as $option)
                                <option>{{ $option }}</option>
                            @endforeach
                        </select>
                        {{--  <input wire:model.defer="newWorkExperiences.employment_status"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="Employment Status (Required)">  --}}
                        @error('newWorkExperiences.employment_status')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>
                        <select wire:model.defer="newWorkExperiences.industry"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option disabled value="">select Industry</option>
                            @foreach ($industries as $industry)
                                <option value="{{ $industry->id }}">{{ $industry->en_name }}</option>
                            @endforeach
                        </select>
                        @error('newWorkExperiences.industry')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>

                        <input wire:model.defer="newWorkExperiences.position"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" autocomplete="given-name" placeholder="Position">
                        @error('newWorkExperiences.position')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>

                        <input wire:model.defer="newWorkExperiences.experience"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="Experience Level">
                        @error('newWorkExperiences.experience')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>

                        <input wire:model.defer="newWorkExperiences.employer_name"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="Employer Name (Required)">
                        @error('newWorkExperiences.employer_name')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>
                        <select wire:model.defer="newWorkExperiences.location"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option disabled value="">select Job Location</option>
                            @foreach ($countries as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('newWorkExperiences.location')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label class="block text-base font-medium text-gray-500 "
                            contenteditable="false"></label>

                        <input wire:model.defer="newWorkExperiences.url"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="Organisation Website URL">
                        @error('newWorkExperiences.url')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-12 grid grid-cols-12 gap-2 md:col-span-6">

                        <div class="col-span-12 sm:col-span-6">
                            <label
                                class="block inline-flex grid-rows-1 text-base font-medium text-gray-500 "
                                for="Start date" contenteditable="false">Starting
                                Date</label>

                            <input wire:model.defer="newWorkExperiences.start"
                                class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                                type="date">
                            @error('newWorkExperiences.start')
                                <p class="error mt-2 text-sm text-red-600 ">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label
                                class="ml-2 block inline-grid text-base font-medium text-gray-500 "
                                for="End date" contenteditable="false">End Date
                            </label>

                            <input wire:model.defer="newWorkExperiences.end"
                                class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                                type="date">
                            @error('newWorkExperiences.end')
                                <p class="error mt-2 text-sm text-red-600 ">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-span-12 flex justify-center">
                            <button class="flex p-2" aria-expanded="false" type="button"
                                wire:click='saveNewWorkExperience'>
                                <label class="px-2 text-base">Add more</label>
                                <span class="sr-only">Add more</span>
                                <!-- Icon when menu is closed.-->
                                <!-- Heroicon name: menu Menu open: "hidden", Menu closed: "block" -->
                                <svg id="Layer_2" height="512" viewBox="0 0 24 24" width="512"
                                    xmlns="http://www.w3.org/2000/svg" data-name="Layer 2"
                                    fill="currentColor" class="h-6 w-6 group-hover:rotate-45">
                                    <path
                                        d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                    </path>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            @else
                <div class="col-span-12 sm:col-span-6">

                    <!--add more-->
                    <div
                        class="group flex grid-cols-2 items-center justify-center font-medium text-gray-500 transition-colors hover:text-traivis-500 ">

                        <button class="flex p-2" aria-expanded="false" type="button"
                            wire:click='AddMorenewWorkExperiences'>
                            <label class="px-2 text-base">Add more</label>
                            <span class="sr-only">Add more</span>
                            <!-- Icon when menu is closed.-->
                            <!-- Heroicon name: menu Menu open: "hidden", Menu closed: "block" -->
                            <svg id="Layer_2" height="512" viewBox="0 0 24 24" width="512"
                                xmlns="http://www.w3.org/2000/svg" data-name="Layer 2"
                                fill="currentColor" class="h-6 w-6 group-hover:rotate-45">
                                <path
                                    d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <!--add more-->

                </div>
            @endif
            <!--END-- Current Jobs --Main Grid--->

        </div>
        {{--
        <!------ Previous Jobs --dt-->
        <dt class="">
            <button
                class="group mt-2 flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white px-5 text-left text-lg text-gray-500 transition-colors hover:border-gray-500 hover:text-gray-700 focus:text-gray-900 focus:outline-none group-hover:text-gray-700  ">

                <span class="inline-block flex w-full" contenteditable="false">Previous
                    Jobs</span>

                <span class="ml-6 flex h-7 items-center">
                    <svg class="h-6 w-6 -rotate-180 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></span>

            </button>
        </dt>
        <!-----END--dt-->

        <!------Previous Jobs--Main Grid--->
        <div class="my-6 grid grid-cols-12 gap-2 px-3 md:px-6">

            <div class="col-span-12 sm:col-span-6">
                <label class="block text-base font-medium text-gray-500 " for="first_name"
                    contenteditable="false"></label>

                <input
                    class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                    id="first_name" type="text" name="first_name" autocomplete="given-name"
                    placeholder="Employer Name (required)">
            </div>

            <div class="col-span-12 sm:col-span-6">
                <label class="block text-base font-medium text-gray-500 " for="last_name"
                    contenteditable="false"></label>

                <input
                    class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                    id="last_name" type="text" name="last_name" autocomplete="family-name" placeholder="Industry">
            </div>

            <div class="col-span-12 sm:col-span-6">
                <label class="block text-sm text-base font-medium text-gray-500 " for="first_name"
                    contenteditable="false"></label>

                <input
                    class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                    id="first_name" type="text" name="first_name" autocomplete="given-name" placeholder="Position">
            </div>

            <div class="col-span-12 sm:col-span-6">
                <label class="block text-base font-medium text-gray-500 " for="last_name"
                    contenteditable="false"></label>

                <input
                    class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                    id="last_name" type="text" name="last_name" autocomplete="family-name"
                    placeholder="Experiance Level">
            </div>

            <div class="col-span-12 sm:col-span-6">
                <label class="block text-base font-medium text-gray-500 " for="first_name"
                    contenteditable="false"></label>

                <input
                    class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                    id="first_name" type="text" name="first_name" autocomplete="given-name"
                    placeholder="Organisation website URL">
            </div>

            <div class="col-span-12 sm:col-span-6">
                <label class="block text-base font-medium text-gray-500 " for="last_name"
                    contenteditable="false"></label>

                <input
                    class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                    id="last_name" type="text" name="last_name" autocomplete="family-name" placeholder="Job Location">
            </div>

            <div class="col-span-12 grid grid-cols-12 gap-2 md:col-span-6">

                <div class="col-span-12 sm:col-span-6">
                    <label class="block inline-flex grid-rows-1 text-base font-medium text-gray-500 "
                        for="Start date" contenteditable="false">Starting
                        Date</label>

                    <input
                        class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                        id="date" type="date" name="date">
                </div>

                <div class="col-span-12 sm:col-span-6">
                    <label class="ml-2 block inline-grid text-base font-medium text-gray-500 "
                        for="End date" contenteditable="false">End Date
                    </label>

                    <input
                        class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                        id="date" type="date" name="date">
                </div>

            </div>

            <div class="col-span-12 flex justify-end md:col-span-6">

                <!--add more-->
                <div
                    class="group float-right flex grid-cols-2 items-center justify-center font-medium text-gray-500 transition-colors hover:text-traivis-500 ">

                    <label class="text-base">Add more</label>

                    <button class="inline-grid p-2" aria-expanded="false">
                        <span class="sr-only">Add more</span>
                        <!-- Icon when menu is closed.-->
                        <!-- Heroicon name: menu Menu open: "hidden", Menu closed: "block" -->
                        <svg id="Layer_1" height="512" viewBox="0 0 24 24" width="512"
                            xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" fill="currentColor"
                            class="h-6 w-6 group-hover:rotate-45">
                            <path
                                d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                            </path>
                        </svg>
                    </button>
                </div>
                <!--add more-->

            </div>

        </div>
        <!--END-- Previous Jobs --Main Grid---> --}}

        <!--END-- Work Experience ----------->

        <!-------Career Information----------->
        <div x-data="{ show: true }">

            <dt class="leading-7">
                <button x-on:click="show=!show" type="button"
                    class="group mt-5 flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white text-left text-lg font-bold text-gray-500 transition-colors hover:border-gray-500 focus:outline-none group-hover:text-gray-700    ">

                    <span
                        class="group inline-flex items-center border-transparent px-1 py-4 text-lg text-sm font-bold text-gray-500 transition-colors hover:text-gray-700 group-hover:text-gray-700  "
                        contenteditable="false">Career Information</span>

                    <svg :class="show ? 'rotate-0' : '-rotate-90'"
                        class="mt-10 h-6 w-6 -rotate-90 transform text-lg font-bold text-gray-500 transition-all group-hover:text-gray-700  "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </dt>

            <div x-show="show" class="flex justify-start gap-1 py-3">

                <p class="flex justify-center text-base font-medium text-gray-500 "
                    id="privacy-option-description-2" contenteditable="false">
                    Open for Job Opportunities </p>

                <div class="flex items-center justify-between px-1" x-data="{ enabled: @entangle('careerInformation.open_for_job') }">
                    <span class="mr-3">
                    </span>
                    <button wire:click="$set('careerInformation.open_for_job',!enabled)"
                        @click="enabled = !enabled" type="button"
                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200 '" role="switch"
                        aria-checked="false">
                        <span class="sr-only">setting</span>
                        <span aria-hidden="true"
                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                            :class="enabled && 'translate-x-5'"></span>
                    </button>
                </div>

            </div>

            <!--main grid-->
            <div x-show="show" class="my-6 grid grid-cols-12 gap-2 px-3 md:px-6">

                <div class="col-span-12 sm:col-span-6">
                    <label class="block text-base font-medium text-gray-500 "
                        for="first_name" contenteditable="false"></label>

                    <input wire:model.lazy="careerInformation.position"
                        class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                        type="text" name="first_name" autocomplete="given-name"
                        placeholder="preferred Position (required)">
                    @error('careerInformation.position')
                        <p class="error mt-2 text-sm text-red-600 ">{{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="col-span-12 sm:col-span-6">
                    <label class="block text-base font-medium text-gray-500 "
                        for="last_name" contenteditable="false"></label>

                    <input wire:model.lazy="careerInformation.industry"
                        class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                        type="text" name="last_name" autocomplete="family-name"
                        placeholder="Prefered Industry">
                    @error('careerInformation.industry')
                        <p class="error mt-2 text-sm text-red-600 ">{{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="col-span-12">
                    <label class="block text-base font-medium text-gray-500 "
                        for="url" contenteditable="false"></label>

                    <input wire:model.lazy="careerInformation.skills"
                        class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                        type="text" name="url"
                        placeholder="What are the skills required for your dream job ? (Required)">
                    @error('careerInformation.skills')
                        <p class="error mt-2 text-sm text-red-600 ">{{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="col-span-12 sm:col-span-6">
                </div>

            </div>
        </div>
        <!------END-Career Information----------->

        <!-------Courses Preferences----------->
        <div x-data="{ show: true }">

            <dt class="leading-7">
                <button x-on:click="show=!show" type="button"
                    class="group mt-5 flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white text-left text-lg font-bold text-gray-500 transition-colors hover:border-gray-500 group-hover:text-gray-700    ">

                    <span
                        class="group inline-flex items-center border-transparent px-1 py-4 text-lg text-sm font-bold text-gray-500 transition-colors hover:text-gray-700 group-hover:text-gray-700  "
                        contenteditable="false">Courses Preferences</span>

                    <svg :class="show ? 'rotate-0' : '-rotate-90'"
                        class="mt-10 h-6 w-6 -rotate-90 transform text-lg font-bold text-gray-500 transition-all group-hover:text-gray-700  "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </dt>

            <!--main grid-->
            <div x-show="show" class="my-6 grid grid-cols-12 gap-2 px-3 md:px-6">

                <div class="col-span-12 sm:col-span-6">
                    <!--Language-->
                    <div class="my-8">
                        <div class="relative inline-block w-full" x-data="{
                            selected: [],
                            show: false,
                            open() {
                                this.show = true
                            },
                            close() {
                                this.show = false
                            },
                            isOpen() {
                                return this.show === true
                            },
                            add(id) {
                                let element = document.getElementById(id)
                                if (element.checked) {
                                    if (element.type === 'radio') {
                                        this.selected = [];
                                    }
                                    this.selected.push(element.getAttribute('data-text'));
                                } else {
                                    this.selected.splice(this.selected.indexOf(element.getAttribute('data-text'), 1));
                                }
                            }
                        }"
                            x-init="const langArr = $wire.selectedLanguagesname;
                            
                            Object.values(langArr).map(item => {
                                selected.push(item);
                            })">
                            <div class="relative flex flex-col items-center">
                                <!--input area-->
                                <div class="group w-full" x-on:click="open">
                                    <div
                                        class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-4 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                                        <div
                                            class="flex flex-auto flex-row overflow-x-visible truncate">
                                            <!---->
                                            <!--input-->
                                            <div class="group relative flex-1">
                                                <input
                                                    class="h-full w-full cursor-pointer appearance-none border-0 bg-transparent p-1 px-2 text-gray-800 outline-none"
                                                    placeholder="Language ">
                                                <div :class="selected.length > 0 ?
                                                    'py-2 w-full' : ''"
                                                    class="absolute left-0 top-0 bg-white">
                                                    <template x-for="(option,index) in selected">
                                                        <span
                                                            class="m-1 rounded-full bg-gray-200 p-1 px-2"
                                                            x-text="option"></span>
                                                    </template>
                                                </div>
                                            </div>
                                            <!---->
                                        </div>
                                        <!--dropdown button-->
                                        <div
                                            class="svelte-1l8159u flex w-8 items-center justify-end border-l border-gray-200 py-1 pl-2 pr-1 text-gray-300">
                                            <button
                                                class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                type="button" x-on:click="open"
                                                x-show="isOpen() === true" style="display: none;">
                                                <svg class="h-4 w-4 fill-current" version="1.1"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <button @click="close"
                                                class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                type="button" x-show="isOpen() === false">
                                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                                                    <path
                                                        d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                                <!--select menu-->
                                <div class="w-full px-4">
                                    <div class="max-h-select absolute right-1/2 top-14 z-40 w-[90%] translate-x-1/2 rounded-b-lg bg-white"
                                        x-on:click.away="close"
                                        x-show.transition.origin.top="isOpen()">
                                        <div class="flex h-fit w-full flex-col overflow-y-auto">
                                            <ul class="h-52 space-y-3 overflow-y-auto p-3 text-sm text-gray-700 "
                                                aria-labelledby="dropdownCheckboxButton">
                                                @foreach ($languages as $language)
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input
                                                                id="checkbox-item-language-{{ $language->id }}"
                                                                @click="add('checkbox-item-language-{{ $language->id }}')"
                                                                data-text="{{ $language->display_name }}"
                                                                wire:model="selectedLanguages"
                                                                type="checkbox"
                                                                value="{{ $language->id }}"
                                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                                            <label for="checkbox-item-1"
                                                                class="ml-2 text-sm font-medium text-gray-900 ">{{ $language->display_name }}</label>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                @error('selectedLanguages')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--Language-->

                    <label class="block text-base font-medium text-gray-500 "
                        for="first_name" contenteditable="false"></label>

                    <!--Industry-->
                    <div class="my-8">
                        <div class="relative inline-block w-full" x-data="{
                            selected: [],
                            show: false,
                            open() {
                                this.show = true
                            },
                            close() {
                                this.show = false
                            },
                            isOpen() {
                                return this.show === true
                            },
                            add(id) {
                                let element = document.getElementById(id)
                                if (element.checked) {
                                    if (element.type === 'radio') {
                                        this.selected = [];
                                    }
                                    this.selected.push(element.getAttribute('data-text'));
                                } else {
                                    this.selected.splice(this.selected.indexOf(element.getAttribute('data-text'), 1));
                                }
                            }
                        }"
                            x-init="const langArr = $wire.selectedIndustriesnames;
                            console.log(langArr, 'langArr')
                            Object.values(langArr).map(item => {
                                selected.push(item);
                            })">
                            <div class="relative flex flex-col items-center">
                                <!--input area-->
                                <div class="group w-full" x-on:click="open">
                                    <div
                                        class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-4 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                                        <div
                                            class="flex flex-auto flex-row overflow-x-visible truncate">
                                            <!--input-->
                                            <div class="group relative flex-1">
                                                <input
                                                    class="h-full w-full cursor-pointer appearance-none border-0 bg-transparent p-1 px-2 text-gray-800 outline-none"
                                                    placeholder="Industry ">
                                                <div :class="selected.length > 0 ?
                                                    'py-2 w-full' : ''"
                                                    class="absolute left-0 top-0 bg-white">
                                                    <template x-for="(option,index) in selected">
                                                        <span
                                                            class="m-1 rounded-full bg-gray-200 p-1 px-2"
                                                            x-text="option"></span>
                                                    </template>
                                                </div>
                                            </div>
                                            <!---->
                                        </div>
                                        <!--dropdown button-->
                                        <div
                                            class="svelte-1l8159u flex w-8 items-center justify-end border-l border-gray-200 py-1 pl-2 pr-1 text-gray-300">
                                            <button
                                                class="mx h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                type="button" x-on:click="open"
                                                x-show="isOpen() === true">
                                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                                                    <path
                                                        d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button @click="close"
                                                class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                type="button" x-show="isOpen() === false">
                                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                                                    <path
                                                        d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                                <!--select menu-->
                                <div class="w-full px-4">
                                    <div class="max-h-select absolute right-1/2 top-14 z-40 w-[90%] translate-x-1/2 rounded-b-lg bg-white"
                                        x-on:click.away="close"
                                        x-show.transition.origin.top="isOpen()">
                                        <div class="flex h-fit w-full flex-col overflow-y-auto">
                                            <ul class="h-52 space-y-3 overflow-y-auto p-3 text-sm text-gray-700 "
                                                aria-labelledby="dropdownCheckboxButton">
                                                @foreach ($industries as $industry)
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input
                                                                id="checkbox-item-industry-{{ $industry->id }}"
                                                                @click="add('checkbox-item-industry-{{ $industry->id }}')"
                                                                data-text="{{ $industry->en_name }}"
                                                                type="checkbox"
                                                                wire:model="selectedIndustries"
                                                                value="{{ $industry->id }}"
                                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                                            <label for="checkbox-item-4"
                                                                class="ml-2 text-sm font-medium text-gray-900 ">{{ $industry->en_name }}</label>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                @error('selectedIndustries')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--/Industry-->

                </div>

                <div class="col-span-12 sm:col-span-6">
                    <label class="block text-base font-medium text-gray-500 "
                        for="last_name" contenteditable="false"></label>

                    <!--Delivery Mode-->
                    <div class="my-8">

                        <div class="relative inline-block w-full" x-data="{
                            selected: [],
                            show: false,
                            open() {
                                this.show = true
                            },
                            close() {
                                this.show = false
                            },
                            isOpen() {
                                return this.show === true
                            },
                            add(id) {
                                let element = document.getElementById(id)
                                if (element.checked) {
                                    if (element.type === 'radio') {
                                        this.selected = [];
                                    }
                                    this.selected.push(element.getAttribute('data-text'));
                                } else {
                                    this.selected.splice(this.selected.indexOf(element.getAttribute('data-text'), 1));
                                }
                            }
                        }"
                            x-init="const item = $wire.deliverMode;
                            const confArr = {{ json_encode(config('enums.delivery_modes')) }};
                            let res = Object.values(confArr).find(x => {
                                return x.code == item;
                            })
                            selected.push(res.name);">
                            <div class="relative flex flex-col items-center">

                                <!--input area-->
                                <div class="group w-full" x-on:click="open">

                                    <div
                                        class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-4 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">

                                        <div
                                            class="flex flex-auto flex-row overflow-x-visible truncate">

                                            <!--input-->
                                            <div class="group relative flex-1">
                                                <input
                                                    class="h-full w-full cursor-pointer appearance-none border-0 bg-transparent p-1 px-2 text-gray-800 outline-none"
                                                    placeholder="Delivery Mode ">
                                                <div :class="selected.length > 0 ?
                                                    'py-2 w-full' : ''"
                                                    class="absolute left-0 top-0 bg-white">
                                                    <template x-for="(option,index) in selected">
                                                        <span
                                                            class="m-1 rounded-full bg-gray-200 p-1 px-2"
                                                            x-text="option"></span>
                                                    </template>
                                                </div>
                                            </div>
                                            <!---->
                                        </div>

                                        <!--dropdown button-->
                                        <div
                                            class="svelte-1l8159u flex w-8 items-center justify-end border-l border-gray-200 py-1 pl-2 pr-1 text-gray-300">
                                            <button
                                                class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                type="button" x-on:click="open"
                                                x-show="isOpen() === true" style="display: none;">
                                                <svg class="h-4 w-4 fill-current" version="1.1"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <button @click="close"
                                                class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                type="button" x-show="isOpen() === false">
                                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                                                    <path
                                                        d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!---->

                                    </div>
                                </div>
                                <!--select menu-->
                                <div class="w-full px-4">
                                    <div class="max-h-select absolute left-0 top-12 z-40 w-full rounded-b-lg border border-t-0 border-gray-300 bg-white shadow-md"
                                        x-on:click.away="close"
                                        x-show.transition.origin.top="isOpen()" style="display: none;">
                                        <div class="flex h-fit w-full flex-col overflow-y-auto">
                                            <ul class="space-y-3 p-3 text-sm text-gray-700 "
                                                aria-labelledby="dropdownCheckboxButton">
                                                @foreach (config('enums.delivery_modes') as $mode)
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input
                                                                id="checkbox-item-mode-{{ $mode['code'] }}"
                                                                @click="add('checkbox-item-mode-{{ $mode['code'] }}')"
                                                                data-text="{{ $mode['name'] }}"
                                                                wire:model="deliverMode"
                                                                name="delivery" type="radio"
                                                                value="{{ $mode['code'] }}"
                                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                                            <label for="checkbox-item-7"
                                                                class="ml-2 text-sm font-medium text-gray-900 ">{{ $mode['name'] }}</label>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                @error('deliverMode')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--/Delivery Mode-->

                    <!--Categories-->
                    <div class="my-8">
                        <div class="relative inline-block w-full" x-data="{
                            selected: [],
                            show: false,
                            open() {
                                this.show = true
                            },
                            close() {
                                this.show = false
                            },
                            isOpen() {
                                return this.show === true
                            },
                            add(id) {
                                let element = document.getElementById(id)
                                if (element.checked) {
                                    if (element.type === 'radio') {
                                        this.selected = [];
                                    }
                                    this.selected.push(element.getAttribute('data-text'));
                                } else {
                                    this.selected.splice(this.selected.indexOf(element.getAttribute('data-text'), 1));
                                }
                            }
                        }"
                            x-init="const langArr = $wire.selectedLanguagesname;
                            
                            Object.values(langArr).map(item => {
                                selected.push(item);
                            })">
                            <div class="relative flex flex-col items-center">
                                <!--input area-->
                                <div class="group w-full" x-on:click="open">
                                    <div
                                        class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-4 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                                        <div
                                            class="flex flex-auto flex-row overflow-x-visible truncate">
                                            <!--input-->
                                            <div class="group relative flex-1">
                                                <input
                                                    class="h-full w-full cursor-pointer appearance-none border-0 bg-transparent p-1 px-2 text-gray-800 outline-none"
                                                    placeholder="What course topics are you interested in ?">
                                                <div :class="selected.length > 0 ?
                                                    'py-2 w-full' : ''"
                                                    class="absolute left-0 top-0 bg-white">
                                                    <template x-for="(option,index) in selected">
                                                        <span
                                                            class="m-1 rounded-full bg-gray-200 p-1 px-2"
                                                            x-text="option"></span>
                                                    </template>
                                                </div>
                                            </div>
                                            <!---->
                                        </div>
                                        <!--dropdown button-->
                                        <div
                                            class="svelte-1l8159u flex w-8 items-center justify-end border-l border-gray-200 py-1 pl-2 pr-1 text-gray-300">
                                            <button
                                                class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                type="button" x-on:click="open"
                                                x-show="isOpen() === true" style="display: none;">
                                                <svg class="h-4 w-4 fill-current" version="1.1"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button @click="close"
                                                class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                type="button" x-show="isOpen() === false">
                                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                                                    <path
                                                        d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                                <!--select menu-->
                                <div class="w-full px-4">
                                    <div class="max-h-select absolute right-1/2 top-14 z-40 w-[90%] translate-x-1/2 rounded-b-lg bg-white"
                                        x-on:click.away="close"
                                        x-show.transition.origin.top="isOpen()" style="display: none;">
                                        <div class="flex h-fit w-full flex-col overflow-y-auto">
                                            <ul class="h-40 space-y-3 overflow-y-auto p-3 text-sm text-gray-700 "
                                                aria-labelledby="dropdownCheckboxButton">
                                                @foreach ($categories as $category)
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input
                                                                id="checkbox-item-category-{{ $category->id }}"
                                                                @click="add('checkbox-item-category-{{ $category->id }}')"
                                                                data-text="{{ $category->category_name }}"
                                                                wire:model="selectedCategories"
                                                                type="checkbox"
                                                                value="{{ $category->id }}"
                                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                                            <label for="checkbox-item-7"
                                                                class="ml-2 text-sm font-medium text-gray-900 ">{{ $category->category_name }}</label>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                @error('selectedCategories')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <!--/Categories-->

                </div>

            </div>
        </div>
        <!------END-Courses Preferences----------->

        <!-------Personal Information-2----------->
        <div x-data="{ show: true }">
            <dt class="text-lg leading-7">
                <button x-on:click="show=!show" type="button"
                    class="group mt-5 flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white text-left text-lg font-bold text-gray-500 transition-colors hover:border-gray-500 group-hover:text-gray-700    ">

                    <span
                        class="group inline-flex items-center border-transparent px-1 py-4 text-lg font-bold text-gray-500 transition-colors hover:text-gray-700 group-hover:text-gray-700  "
                        contenteditable="false">Personal Information</span>
                    <svg :class="show ? 'rotate-0' : '-rotate-90'"
                        class="mt-10 h-6 w-6 -rotate-90 transform text-lg font-bold text-gray-500 transition-all group-hover:text-gray-700  "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </dt>

            <p class="mt-1 text-base font-medium text-gray-500 "
                contenteditable="false">This
                information
                will
                be kept
                confidential within TRAIVIS Database and will not be public
            </p>

            <!--main grid-->
            <div x-show="show" class="my-6 grid grid-cols-12 gap-2 px-3 md:px-6">

                <!--left-->
                <div class="col-span-12 sm:col-span-6">
                    <div class="">
                        <label
                            class="block text-base font-medium text-gray-500 transition-colors "></label>

                        <input wire:model.defer="user.phone"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 pr-3 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="Phone Number">
                        @error('user.phone')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="">
                        <label
                            class="block text-base font-medium text-gray-500 transition-colors  "
                            contenteditable="false"></label>
                        <select wire:model.defer="user.country"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option value="">Please select</option>
                            @foreach (config('select-options.counties') as $county)
                                <option>{{ $county }}</option>
                            @endforeach
                        </select>
                        {{-- <input wire:model.defer="user.country"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="Country of Risednece"> --}}
                        @error('user.country')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="">
                        <label
                            class="block text-base font-medium text-gray-500 transition-colors  "></label>

                        <input wire:model.defer="user.city"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="City (required)">
                        @error('user.city')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <!--right-->
                <div class="col-span-12 sm:col-span-6">

                    <div class="">
                        <label
                            class="block text-base font-medium text-gray-500 transition-colors "></label>

                        <input wire:model.defer="user.date_of_birth"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:outline-none sm:text-sm"
                            type="date" autocomplete="given-name"
                            placeholder="Date of Birth (Required)">
                        @error('user.date_of_birth')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="">
                        <label
                            class="block text-base font-medium text-gray-500 transition-colors  "
                            contenteditable="false"></label>
                        <select wire:model.defer="user.gender"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                            <option value="">Please Select</option>
                            @foreach (config('select-options.gender') as $option)
                                <option>{{ $option }}</option>
                            @endforeach
                        </select>
                        {{-- <input wire:model.defer="user.gender"
                            class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm"
                            type="text" placeholder="Gender"> --}}
                        @error('user.gender')
                            <p class="error mt-2 text-sm text-red-600 ">
                                {{ $message }}</p>
                        @enderror
                    </div>

                </div>

            </div>
        </div>

        <!------END-Personal Information-2----------->
        <!-------Start-Social----------->
        <div x-data="{ show: true }">
            <dt class="text-lg leading-8">
                <button x-on:click="show=!show" type="button"
                    class="group mt-5 flex w-full items-start justify-center justify-between border-b border-gray-200 bg-white text-left text-lg font-bold text-gray-500 transition-colors hover:border-gray-500 group-hover:text-gray-700    ">

                    <span
                        class="group inline-flex items-center border-transparent px-1 py-4 text-lg font-bold text-gray-500 transition-colors hover:text-gray-700 group-hover:text-gray-700  "
                        contenteditable="false">Social Information</span>
                    <svg :class="show ? 'rotate-0' : '-rotate-90'"
                        class="mt-10 h-6 w-6 -rotate-90 transform text-lg font-bold text-gray-500 transition-all group-hover:text-gray-700  "
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </dt>

            <!--main grid-->
            <div x-show="show" class="my-6 block flex flex-col items-center justify-between gap-y-4">

                <div
                    class="block flex w-full flex-col items-center justify-between gap-x-3 gap-y-4 md:flex-row">
                    <div class="group relative w-full">
                        <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                            fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve"
                            width="512" height="512">
                            <g>
                                <path
                                    d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z">
                                </path>
                            </g>
                        </svg>

                        <input wire:model.defer="socilaMedia.facebook" placeholder="Facebook URL"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                            type="text">
                    </div>

                    <div class="group relative w-full">
                        <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                            fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve"
                            width="512" height="512">
                            <g>
                                <path
                                    d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z">
                                </path>
                                <path
                                    d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z">
                                </path>
                                <circle cx="18.406" cy="5.594" r="1.44">
                                </circle>
                            </g>
                        </svg>
                        <input wire:model.defer="socilaMedia.instagram" placeholder="Instagram URL"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                            type="text">
                    </div>
                </div>

                <div
                    class="block flex w-full flex-col items-center justify-between gap-x-3 gap-y-4 md:flex-row">
                    <div class="group relative w-full">
                        <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                            fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve"
                            width="512" height="512">
                            <path id="Logo_00000038394049246713568260000012923108920998390947_"
                                d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z">
                            </path>
                        </svg>
                        <input wire:model.defer="socilaMedia.twitter" placeholder="Twitter URL"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                            type="text">
                    </div>

                    <div class="group relative w-full">
                        <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                            fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve"
                            width="512" height="512">
                            <g>
                                <path
                                    d="M12.01,0C5.388,0,0.02,5.368,0.02,11.99c0,5.082,3.158,9.424,7.618,11.171c-0.109-0.947-0.197-2.408,0.039-3.444   c0.217-0.938,1.401-5.961,1.401-5.961s-0.355-0.72-0.355-1.776c0-1.668,0.967-2.911,2.171-2.911c1.026,0,1.52,0.77,1.52,1.688   c0,1.026-0.651,2.566-0.997,3.997c-0.286,1.194,0.602,2.171,1.776,2.171c2.132,0,3.77-2.25,3.77-5.487   c0-2.872-2.062-4.875-5.013-4.875c-3.414,0-5.418,2.556-5.418,5.201c0,1.026,0.395,2.132,0.888,2.734   C7.52,14.615,7.53,14.724,7.5,14.842c-0.089,0.375-0.296,1.194-0.336,1.362c-0.049,0.217-0.178,0.266-0.405,0.158   c-1.5-0.701-2.438-2.882-2.438-4.648c0-3.78,2.743-7.253,7.924-7.253c4.155,0,7.391,2.961,7.391,6.928   c0,4.135-2.605,7.461-6.217,7.461c-1.214,0-2.359-0.632-2.743-1.382c0,0-0.602,2.289-0.75,2.852   c-0.266,1.046-0.997,2.349-1.49,3.148C9.562,23.812,10.747,24,11.99,24c6.622,0,11.99-5.368,11.99-11.99C24,5.368,18.632,0,12.01,0   z">
                                </path>
                            </g>
                        </svg>
                        <input wire:model.defer="socilaMedia.pinterest" placeholder="Pinterest URL"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                            type="text">
                    </div>
                </div>

                <div
                    class="block flex w-full flex-col items-center justify-between gap-x-3 gap-y-4 md:flex-row">
                    <div class="group relative w-full">
                        <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                            fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve"
                            width="512" height="512">
                            <g>
                                <path id="Path_2525"
                                    d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262">
                                </path>
                                <path id="Path_2520"
                                    d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463">
                                </path>
                                <path id="Path_2526"
                                    d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031">
                                </path>
                            </g>
                        </svg>
                        <input wire:model.defer="socilaMedia.linkedin" placeholder="LinkedIn URL"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                            type="text">
                    </div>

                    <div class="group relative w-full">
                        <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                            fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve"
                            width="512" height="512">
                            <g id="PRIMARY_-_GHOST">
                                <path
                                    d="M23.914,17.469c-0.167-0.454-0.484-0.697-0.846-0.898c-0.068-0.04-0.131-0.072-0.184-0.097   c-0.108-0.056-0.218-0.11-0.328-0.166c-1.127-0.598-2.008-1.352-2.619-2.246c-0.173-0.252-0.324-0.518-0.45-0.797   c-0.052-0.149-0.049-0.233-0.012-0.311c0.037-0.06,0.086-0.111,0.144-0.15c0.194-0.128,0.394-0.258,0.529-0.346   c0.241-0.157,0.433-0.28,0.556-0.368c0.463-0.324,0.787-0.668,0.989-1.052c0.286-0.537,0.323-1.172,0.104-1.74   c-0.307-0.807-1.069-1.308-1.992-1.308c-0.195,0-0.389,0.021-0.579,0.061c-0.051,0.011-0.102,0.023-0.151,0.036   c0.008-0.552-0.004-1.134-0.053-1.708c-0.174-2.016-0.88-3.072-1.616-3.915c-0.471-0.528-1.026-0.975-1.643-1.322   C14.647,0.505,13.38,0.181,12,0.181c-1.38,0-2.64,0.324-3.758,0.961C7.624,1.49,7.067,1.938,6.596,2.467   C5.86,3.309,5.154,4.368,4.98,6.382C4.931,6.955,4.919,7.541,4.927,8.089c-0.05-0.013-0.1-0.024-0.15-0.036   c-0.191-0.041-0.385-0.061-0.58-0.061c-0.924,0-1.687,0.501-1.993,1.308c-0.221,0.568-0.184,1.204,0.101,1.742   c0.203,0.385,0.526,0.728,0.99,1.052c0.123,0.086,0.315,0.21,0.556,0.368c0.13,0.085,0.321,0.209,0.508,0.332   c0.066,0.042,0.121,0.098,0.163,0.164c0.039,0.081,0.04,0.167-0.018,0.326c-0.124,0.273-0.272,0.534-0.442,0.78   C3.465,14.94,2.61,15.68,1.519,16.273c-0.578,0.307-1.179,0.511-1.433,1.201c-0.192,0.521-0.067,1.113,0.42,1.612   c0.178,0.186,0.385,0.343,0.613,0.464c0.474,0.26,0.978,0.462,1.5,0.6c0.108,0.028,0.21,0.074,0.303,0.136   c0.177,0.155,0.152,0.389,0.388,0.731c0.119,0.177,0.269,0.33,0.444,0.451c0.495,0.342,1.052,0.363,1.642,0.386   c0.533,0.02,1.137,0.044,1.827,0.271c0.286,0.094,0.583,0.277,0.927,0.491c0.826,0.508,1.957,1.202,3.849,1.202   c1.892,0,3.031-0.698,3.863-1.208c0.342-0.21,0.637-0.391,0.915-0.483c0.69-0.228,1.294-0.251,1.827-0.271   c0.59-0.022,1.147-0.044,1.642-0.386c0.207-0.144,0.38-0.333,0.505-0.552c0.17-0.289,0.165-0.491,0.325-0.632   c0.087-0.059,0.183-0.103,0.285-0.13c0.53-0.139,1.041-0.342,1.521-0.606c0.242-0.129,0.46-0.3,0.644-0.504l0.006-0.008   C23.986,18.552,24.101,17.977,23.914,17.469z M22.59,18.046c-0.03,0.093-0.133,0.202-0.358,0.327   c-1.026,0.567-1.708,0.506-2.238,0.848c-0.197,0.127-0.257,0.318-0.289,0.512c-0.014,0.08-0.022,0.161-0.034,0.238   c-0.025,0.161-0.063,0.305-0.188,0.391c-0.402,0.278-1.591-0.019-3.127,0.488c-1.267,0.419-2.075,1.623-4.353,1.623   c-2.279,0-3.068-1.202-4.356-1.626c-1.533-0.507-2.724-0.21-3.128-0.487c-0.327-0.225-0.061-0.851-0.511-1.141   c-0.531-0.341-1.213-0.281-2.238-0.844c-0.33-0.182-0.398-0.329-0.358-0.443c0-0.003,0.001-0.005,0.003-0.008   c0.043-0.109,0.184-0.188,0.29-0.239c1.742-0.843,2.798-1.902,3.43-2.809c0.127-0.182,0.236-0.357,0.331-0.524   c0.442-0.778,0.562-1.36,0.574-1.45c0.032-0.249,0.067-0.446-0.208-0.699c-0.265-0.246-1.443-0.975-1.77-1.203   c-0.223-0.156-0.454-0.343-0.578-0.592c-0.27-0.541,0.153-1.068,0.71-1.068c0.099,0,0.198,0.012,0.295,0.033   c0.593,0.129,1.17,0.426,1.503,0.506c0.22,0.053,0.364-0.047,0.351-0.276c-0.038-0.65-0.13-1.915-0.028-3.098   c0.05-0.581,0.167-1.171,0.381-1.721c0.206-0.529,0.535-1.001,0.906-1.426c0.3-0.343,1.705-1.828,4.395-1.828   c2.1,0,3.42,0.903,4.04,1.461c0.989,0.909,1.533,2.18,1.645,3.507c0.102,1.183,0.014,2.449-0.028,3.098   c-0.014,0.221,0.141,0.33,0.351,0.277c0.334-0.081,0.91-0.378,1.504-0.507c0.438-0.095,0.946,0.039,1.066,0.521   c0.099,0.413-0.141,0.759-0.638,1.106c-0.327,0.228-1.505,0.956-1.77,1.202c-0.275,0.254-0.239,0.45-0.207,0.7   c0.015,0.116,0.203,1.022,1.003,2.113c0.001,0.001,0.001,0.002,0.002,0.002c0.033,0.045,0.067,0.091,0.103,0.137   c0.18,0.234,0.389,0.476,0.63,0.719c0.624,0.628,1.466,1.266,2.597,1.812c0.093,0.045,0.2,0.101,0.261,0.187   C22.593,17.916,22.612,17.984,22.59,18.046z">
                                </path>
                            </g>
                        </svg>
                        <input wire:model.defer="socilaMedia.snapchat" placeholder="Snap Chat URL"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                            type="text">
                    </div>
                </div>

                <div
                    class="block flex w-full flex-col items-center justify-between gap-x-3 gap-y-4 md:flex-row">
                    <div class="group relative w-full">
                        <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                            fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve"
                            width="512" height="512">
                            <g id="XMLID_184_">
                                <path
                                    d="M23.498,6.186c-0.276-1.039-1.089-1.858-2.122-2.136C19.505,3.546,12,3.546,12,3.546s-7.505,0-9.377,0.504   C1.591,4.328,0.778,5.146,0.502,6.186C0,8.07,0,12,0,12s0,3.93,0.502,5.814c0.276,1.039,1.089,1.858,2.122,2.136   C4.495,20.454,12,20.454,12,20.454s7.505,0,9.377-0.504c1.032-0.278,1.845-1.096,2.122-2.136C24,15.93,24,12,24,12   S24,8.07,23.498,6.186z M9.546,15.569V8.431L15.818,12L9.546,15.569z">
                                </path>
                            </g>
                        </svg>
                        <input wire:model.defer="socilaMedia.youtube" placeholder="Youtube URL"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                            type="text">
                    </div>

                    <div class="group relative w-full">
                        <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                            fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve"
                            width="512" height="512">
                            <path
                                d="M23.988,6.412c-0.107,2.341-1.739,5.546-4.895,9.614c-3.263,4.249-6.024,6.374-8.282,6.374c-1.399,0-2.583-1.294-3.55-3.882  c-0.646-2.372-1.291-4.744-1.937-7.117C4.606,8.814,3.836,7.519,3.013,7.519c-0.18,0-0.808,0.379-1.883,1.133L0,7.195  c1.185-1.043,2.353-2.085,3.503-3.129c1.58-1.368,2.766-2.087,3.556-2.16c1.868-0.18,3.018,1.099,3.449,3.838  c0.466,2.955,0.789,4.792,0.97,5.511c0.538,2.451,1.131,3.675,1.778,3.675c0.502,0,1.257-0.795,2.263-2.385  c1.005-1.59,1.543-2.8,1.616-3.631c0.143-1.372-0.395-2.06-1.616-2.06c-0.575,0-1.167,0.132-1.776,0.394  c1.179-3.871,3.433-5.751,6.759-5.644C22.968,1.677,24.13,3.279,23.988,6.412z">
                            </path>
                        </svg>
                        <input wire:model.defer="socilaMedia.vimeo" placeholder="Vimeo URL"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                            type="text">
                    </div>
                </div>

                <div
                    class="block flex w-full flex-col items-center justify-between gap-x-3 gap-y-4 md:flex-row">
                    <div class="group relative w-full">
                        <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                            fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve"
                            width="512" height="512">
                            <g id="WA_Logo">
                                <g>
                                    <path style="fill-rule:evenodd;clip-rule:evenodd;"
                                        d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <input wire:model.defer="socilaMedia.whatsapp" placeholder="Whatsapp Number"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                            type="text">
                    </div>

                    <div class="group relative w-full">
                        <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                            fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve"
                            width="512" height="512">
                            <g id="Artboard">
                                <path style="fill-rule:evenodd;clip-rule:evenodd;"
                                    d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z    M17.562,8.161c-0.18,1.897-0.962,6.502-1.359,8.627c-0.168,0.9-0.5,1.201-0.82,1.23c-0.697,0.064-1.226-0.461-1.901-0.903   c-1.056-0.692-1.653-1.123-2.678-1.799c-1.185-0.781-0.417-1.21,0.258-1.911c0.177-0.184,3.247-2.977,3.307-3.23   c0.007-0.032,0.015-0.15-0.056-0.212s-0.174-0.041-0.248-0.024c-0.106,0.024-1.793,1.139-5.062,3.345   c-0.479,0.329-0.913,0.489-1.302,0.481c-0.428-0.009-1.252-0.242-1.865-0.442c-0.751-0.244-1.349-0.374-1.297-0.788   c0.027-0.216,0.324-0.437,0.892-0.663c3.498-1.524,5.831-2.529,6.998-3.015c3.333-1.386,4.025-1.627,4.477-1.635   C17.472,7.214,17.608,7.681,17.562,8.161z">
                                </path>
                            </g>
                        </svg>
                        <input wire:model.defer="socilaMedia.telegram" placeholder="Telegram Number"
                            class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                            type="text">
                    </div>
                </div>

            </div>
        </div>

        <!------END-Social----------->
    </form>
</div>
