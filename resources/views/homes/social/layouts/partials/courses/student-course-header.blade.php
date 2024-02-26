<div class="z-10 flex-col justify-between">
    @push('scripts')
    <script src="{{ asset('assets/js/likely.js') }}" type="text/javascript"></script>
    @endpush
    <!-- Cover -->
    <div class="bg-gray-500 bg-cover bg-center px-5 pt-2 text-white"
        style="background-image: url({{ $course->image }})">
        <!--cover top-->
        <div class="relative flex flex-row items-start justify-between">
            <!--course name and review -->
            <div class="flex flex-col items-start gap-y-2">
                <!--Name-->
                <p class="mt-2 h-10 w-full border-0 bg-transparent pl-0 text-2xl font-bold drop-shadow-[0_1px_2px_rgba(0,0,0,0.50)] transition-all sm:truncate sm:text-3xl"
                    :class="SMopen ? 'pl-0' : 'pl-12'">
                    {{ Str::limit($course->title, $enrolled ? 50 : 30) }}
                </p>
                <!--/Name-->
                <!--Reviews-->
                <div class="flex items-center gap-x-3 z-[999]">
                    <!--Rate-->
                    <x-tooltip-arrow direction="left">
                    <button class="inline-flex items-center rounded-full border border-gray-300 bg-gray-100 px-2 py-0.5 text-sm text-gray-500">

                        <!--tooltips-->
                        <x-slot name="text">

                            <p class="flex items-center text-center gap-x-2 justify-center"> <span>{{ $course->reviews->count() }}</span>
                            Reviews</p>
                            <div class="flex justify-center gap-1 whitespace-nowrap drop-shadow-md">
                                <svg viewBox="0 0 24 24" fill="currentColor"
                                    class="{{ $rating >= 1 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                                <svg viewBox="0 0 24 24" fill="currentColor"
                                    class="{{ $rating >= 2 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                                <svg viewBox="0 0 24 24" fill="currentColor"
                                    class="{{ $rating >= 3 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                                <svg viewBox="0 0 24 24" fill="currentColor"
                                    class="{{ $rating >= 4 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                                <svg viewBox="0 0 24 24" fill="currentColor"
                                    class="{{ $rating >= 5 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                                <div class="ml-2 font-bold">{{ $rating }} / 5</div>
                            </div>
                        </x-slot>
                        <!--/tooltips-->

                        <!---->
                        <svg viewBox="0 0 24 24" fill="currentColor" class="mr-2 w-4 text-yellow-500">
                            <path
                                d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                            </path>
                        </svg>
                        <span>{{ $rating }}</span>
                        <!---->

                    </button>
                    </x-tooltip-arrow>
                    <!--/Rate-->

                    <!--Students-->
                    @auth
                    <div x-data="{ Topen: false }" class="group/s relative">

                        <!--Tooltip-->
                        <p class="absolute right-1/2 top-10 z-50 hidden translate-x-1/2 whitespace-nowrap rounded-md bg-white px-1.5 py-0.5 text-sm text-black group-hover/s:block">
                            Enrolled Students</p>
                        <!--/Tooltip-->

                        @if ($enrolledStudents->count() > 0)
                        <!--Students aria-->
                        <div class="flex flex w-full items-center justify-center space-x-3">

                            <!--Enrolled Students-->
                            <div class="flex flex-shrink-0 gap-x-2 whitespace-nowrap">
                                @foreach ($enrolledStudents as $key => $student)
                                @if ($student->id == $user->id)
                                @continue
                                @endif

                                <x-tooltip-arrow direction="down">
                                    <a class="" href="{{ route('user-profile-social', $student->id) }}">
                                    <img alt="Tom Warner" class="iblock h-8 w-8 rounded-full bg-cover"
                                        src="{{ $student->avatar }}">

                                    <x-slot name="text">
                                        {{ $student->name }}
                                    </x-slot>
                                    </a>
                                </x-tooltip-arrow>

                                @if ($key == 2)
                                @break
                                @endif
                                @endforeach
                            </div>
                            <!--END Enrolled Students-->

                            <!--Show all-->
                            <x-tooltip-arrow direction="down">
                                <div class="flex items-center justify-center">
                                    <!----- button----------->
                                    <button @click="Topen = !Topen" aria-label="Add team member"
                                        class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-400 border-transparent bg-white text-sm font-medium text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                        type="button">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM5.683,16H1a1,1,0,0,1-1-1A6.022,6.022,0,0,1,5.131,9.084a1,1,0,0,1,1.1,1.266A6.009,6.009,0,0,0,6,12a5.937,5.937,0,0,0,.586,2.57,1,1,0,0,1-.9,1.43ZM17,24H7a1,1,0,0,1-1-1,6,6,0,0,1,12,0A1,1,0,0,1,17,24ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8Zm17,8H18.317a1,1,0,0,1-.9-1.43A5.937,5.937,0,0,0,18,12a6.009,6.009,0,0,0-.236-1.65,1,1,0,0,1,1.105-1.266A6.022,6.022,0,0,1,24,15,1,1,0,0,1,23,16Z">
                                            </path>
                                        </svg>
                                        <p class="mx-2 text-sm font-bold">
                                            +{{ $enrolledStudents->count() - 3 < 0 ? 0 : $enrolledStudents->count() - 3
                                                }}
                                        </p>
                                    </button>
                                    <!-----END button----------->
                                </div>

                                <x-slot name="text">
                                    Show All
                                </x-slot>
                            </x-tooltip-arrow>
                            <!--Show all-->
                        </div>
                        <!--END Students aria-->
                        @endif
                        <!-----Start student popup----------->
                        <div class="fixed bottom-[10%] left-0 right-0 top-[15%] mx-auto h-fit w-full rounded-2xl bg-white p-6 shadow-2xl md:w-4/5 lg:w-4/6"
                            style="z-index: 99; display: none;" x-show="Topen"
                            @keydown.window.escape.stop="Topen = false" @click.away="Topen = false">
                            <div class="relative flex w-full flex-col justify-items-center text-gray-500">
                                <!-- Students header-->
                                <div class="flex flex-row items-center justify-between text-xl font-bold">
                                    <div class="mr-5 flex flex-row items-center">
                                        <div class="flex flex-shrink-0 items-center justify-center rounded-full">
                                            <img alt="" class="h-16 w-16 rounded-full bg-cover"
                                                src="{{ $course->image }}">
                                        </div>
                                        <div class="space-y-1 truncate px-3 text-left">
                                            <div class="mx-auto flex flex-row items-center">
                                                <p class="mr-2">{{ Str::limit($course->title, 50) }}
                                                </p>
                                                <span class="sr-only px-2 text-lg font-normal sm:not-sr-only">
                                                    (Enrolled Students)</span>
                                            </div>
                                            <div class="mx-auto flex flex-row items-center text-sm">
                                                <svg fill="currentColor" class="mr-3 h-4 w-4" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z">
                                                    </path>
                                                </svg>
                                                <span>{{ $course->maker?->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-1 text-right text-sm">
                                        <div class="relative">
                                            <p class="peer"><span class="text-xs font-medium text-black">
                                                    From
                                                </span>{{ Carbon\Carbon::parse($course->created_at)->format('Y-m-d') }}
                                            </p>
                                            <p
                                                class="absolute bottom-6 hidden rounded-full bg-black px-2 py-1 text-xs text-white peer-hover:block">
                                                Start Date</p>
                                        </div>
                                        <div class="relative">
                                            <p class="peer"><span class="text-xs font-medium text-black">
                                                    To </span>{{ now()->format('Y-m-d') }}</p>
                                            <p
                                                class="absolute bottom-6 hidden rounded-full bg-black px-2 py-1 text-xs text-white peer-hover:block">
                                                End Date</p>
                                        </div>
                                    </div>
                                </div>
                                <!--END  Students header-->
                                <!-------Students window------->
                                <div class="flex flex-1 flex-col justify-center">
                                    <!--Search and filters-->
                                    <div
                                        class="sticky top-0 flex w-full flex-row flex-wrap items-center justify-between bg-white p-1 md:h-14 md:flex-nowrap md:py-10">
                                        <!--filters-->
                                        <div x-data="{ FInactive: false, FFreelancer: false, FStaff: false }"
                                            class="my-5 flex w-full flex-row items-center justify-evenly gap-x-2 gap-y-3 text-sm font-bold text-gray-500 sm:gap-x-5 md:justify-start">
                                            <button @click="FStaff = !FStaff,FFreelancer=false"
                                                wire:click="setEnrolledFilter('connections')"
                                                class="flex cursor-pointer items-center justify-between rounded-full border border-gray-50 px-1 py-1 hover:border-traivis-100 hover:bg-traivis-50 hover:text-traivis-500"
                                                :class="FStaff ?
                                                    'bg-traivis-50 text-traivis-500 border-traivis-400' :
                                                    'border-gray-50 hover:border-traivis-100 '">
                                                <span class="flex flex-row items-center">
                                                    <svg class="h-5 w-5 fill-traivis-500" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM5.683,16H1a1,1,0,0,1-1-1A6.022,6.022,0,0,1,5.131,9.084a1,1,0,0,1,1.1,1.266A6.009,6.009,0,0,0,6,12a5.937,5.937,0,0,0,.586,2.57,1,1,0,0,1-.9,1.43ZM17,24H7a1,1,0,0,1-1-1,6,6,0,0,1,12,0A1,1,0,0,1,17,24ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8Zm17,8H18.317a1,1,0,0,1-.9-1.43A5.937,5.937,0,0,0,18,12a6.009,6.009,0,0,0-.236-1.65,1,1,0,0,1,1.105-1.266A6.022,6.022,0,0,1,24,15,1,1,0,0,1,23,16Z">
                                                        </path>
                                                    </svg>
                                                    <p class="whitespace-nowrap px-2">
                                                        Connections</p>
                                                </span>
                                                <p
                                                    class="flex h-5 w-auto items-center rounded-full border border-traivis-300 bg-traivis-50 p-1.5 text-center text-base text-xs">
                                                    {{ $connectionEnrolledStudentsCount }}</p>
                                            </button>
                                            <button @click="FFreelancer = !FFreelancer,FStaff=false"
                                                wire:click="setEnrolledFilter('nearBy')"
                                                class="flex cursor-pointer items-center justify-between rounded-full border border-gray-50 px-1 py-1 hover:border-traivis-100 hover:bg-traivis-50 hover:text-traivis-500"
                                                :class="FFreelancer ?
                                                    'bg-traivis-50 text-traivis-500 border-traivis-400' :
                                                    'border-gray-50 hover:border-traivis-100 '">
                                                <span class="flex flex-row items-center">
                                                    <svg class="h-5 w-5 fill-traivis-500" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12,.042a9.992,9.992,0,0,0-9.981,9.98c0,2.57,1.99,6.592,5.915,11.954a5.034,5.034,0,0,0,8.132,0c3.925-5.362,5.915-9.384,5.915-11.954A9.992,9.992,0,0,0,12,.042ZM12,14a4,4,0,1,1,4-4A4,4,0,0,1,12,14Z">
                                                        </path>
                                                    </svg>
                                                    <p class="whitespace-nowrap px-2">
                                                        Near you</p>
                                                </span>
                                                <p
                                                    class="flex h-5 w-auto items-center rounded-full border border-traivis-300 bg-traivis-50 p-1.5 text-center text-base text-xs">
                                                    {{ $nearByEnrolledStudentsCount }}</p>
                                            </button>
                                            {{-- <button @click="FInactive = !FInactive"
                                                class="cursor-pointer flex justify-between items-center px-1 py-1 rounded-full border hover:bg-traivis-50 hover:text-traivis-500 border-gray-50 hover:border-traivis-100"
                                                :class="FInactive ? 'bg-traivis-50 text-traivis-500 border-traivis-400' : 'border-gray-50 hover:border-traivis-100 '">
                                                <span class="flex flex-row items-center">
                                                    <svg class="w-5 h-5 fill-traivis-500" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M10,19c0-1.1,.9-2,2-2s2,.9,2,2-.9,2-2,2-2-.9-2-2Zm13.68-9.46c.41-.38,.43-1.01,.05-1.41-3.02-3.25-7.3-5.12-11.73-5.12S3.29,4.87,.27,8.12c-.38,.41-.35,1.04,.05,1.41,.4,.38,1.04,.35,1.41-.05,2.64-2.85,6.38-4.48,10.27-4.48s7.62,1.63,10.27,4.48c.2,.21,.46,.32,.73,.32,.24,0,.49-.09,.68-.27Zm-5.01,4.81c.41-.38,.43-1.01,.05-1.41-1.73-1.87-4.18-2.94-6.72-2.94s-4.99,1.07-6.72,2.94c-.38,.4-.35,1.04,.05,1.41,.4,.38,1.04,.35,1.41-.05,1.35-1.46,3.27-2.29,5.26-2.29s3.9,.84,5.26,2.29c.2,.21,.46,.32,.73,.32,.24,0,.49-.09,.68-.27Z">
                                                        </path>
                                                    </svg>
                                                    <p class="px-2 whitespace-nowrap">
                                                        Online</p>
                                                </span>
                                                <p
                                                    class="text-base h-5 w-auto text-center flex items-center rounded-full border border-traivis-300 bg-traivis-50 text-xs p-1.5">
                                                    8</p>
                                            </button> --}}
                                        </div>
                                        <!--filters-->
                                        <!--search-->
                                        <div class="relative w-full">
                                            <label class="sr-only" for="stusearch">Search
                                                Workforce</label>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                <svg aria-hidden="true" class="h-5 w-5 text-gray-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path clip-rule="evenodd"
                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                        fill-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input wire:model="searchEnrolled"
                                                class="block w-full rounded-full border border-gray-300 bg-white py-2 pl-10 pr-3 text-sm text-gray-800 placeholder-gray-500 transition-colors focus:border-traivis-500 focus:text-gray-800 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-traivis-500 sm:text-sm"
                                                id="stusearch" placeholder="Search" type="search">
                                        </div>
                                        <!--search-->
                                    </div>
                                    <!--END search and filters-->
                                    <!--Students Area-->
                                    <div class="relative h-80 w-full overflow-y-scroll text-left text-sm">
                                        <!--Students List-->
                                        <div clas="">
                                            <ul class="grid grid-cols-1 gap-x-5 md:grid-cols-2" role="list">
                                                @foreach ($enrolledStudents as $student)
                                                @if ($student->id == $user->id)
                                                @continue
                                                @endif
                                                <li
                                                    class="flex w-full cursor-pointer flex-row items-center rounded-md border border-transparent px-4 py-2 transition-all hover:border-traivis-100 hover:bg-traivis-50 hover:pl-6">
                                                    <img alt="" class="h-12 w-12 rounded-full bg-cover"
                                                        src="{{ $student->avatar }}">
                                                    <div class="ml-3 flex-1 space-y-1">
                                                        <p
                                                            class="w-4/5 truncate text-clip whitespace-nowrap text-sm font-medium text-gray-900">
                                                            {{ $student->name }}</p>

                                                        <p
                                                            class="w-4/5 truncate text-clip whitespace-nowrap text-sm text-gray-500">
                                                            {{ $student->email }}
                                                        </p>

                                                        <div
                                                            class="group relative w-4/5 truncate text-clip whitespace-nowrap text-sm text-gray-500">
                                                            <p>Enrolled in
                                                                <span>{{
                                                                    $student->courses()->whereCourseId($course->id)->first()->pivot->created_at
                                                                    }}</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="flex-shrink-0 pr-2">
                                                        <a
                                                            href="{{ route('chat-conversations', ['id' => $student->id, 'type' => 'p']) }}">
                                                            <button type="button"
                                                                class="group inline-flex justify-end rounded-full border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 shadow-sm transition-all hover:bg-traivis-500 hover:text-white focus:bg-traivis-500 focus:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
                                                                <svg class="h-5 w-5 group-hover:hidden group-focus:hidden"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                                    data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                                                    height="512">
                                                                    <path
                                                                        d="M24,16v5a3,3,0,0,1-3,3H16a8,8,0,0,1-6.92-4,10.968,10.968,0,0,0,2.242-.248A5.988,5.988,0,0,0,16,22h5a1,1,0,0,0,1-1V16a5.988,5.988,0,0,0-2.252-4.678A10.968,10.968,0,0,0,20,9.08,8,8,0,0,1,24,16ZM17.977,9.651A9,9,0,0,0,8.349.023,9.418,9.418,0,0,0,0,9.294v5.04C0,16.866,1.507,18,3,18H8.7A9.419,9.419,0,0,0,17.977,9.651Zm-4.027-5.6a7.018,7.018,0,0,1,2.032,5.46A7.364,7.364,0,0,1,8.7,16H3c-.928,0-1-1.275-1-1.666V9.294A7.362,7.362,0,0,1,8.49,2.018Q8.739,2,8.988,2A7.012,7.012,0,0,1,13.95,4.051Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="hidden h-5 w-5 group-hover:block group-focus:block"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                                    data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                                                    height="512">
                                                                    <path
                                                                        d="M8.7,18H3c-1.493,0-3-1.134-3-3.666V9.294A9.418,9.418,0,0,1,8.349.023a9,9,0,0,1,9.628,9.628A9.419,9.419,0,0,1,8.7,18ZM20,9.08h-.012c0,.237,0,.474-.012.712C19.59,15.2,14.647,19.778,9.084,19.981l0,.015A8,8,0,0,0,16,24h5a3,3,0,0,0,3-3V16A8,8,0,0,0,20,9.08Z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </a>
                                                    </div>

                                                </li>
                                                @endforeach

                                            </ul>

                                        </div>
                                        <!--END Students List-->

                                    </div>
                                    <!--End Students Area-->

                                </div>
                                <!-------/Students window------->

                            </div>
                        </div>
                        <div x-show="Topen" class="fixed inset-0 z-50 h-screen bg-black opacity-50"
                            style="display: none;"></div>
                        <!-----END student popup----------->

                    </div>
                    @endauth
                    <!--Students-->
                </div>
                <!--/Reviews-->

            </div>
            <!--End course name and review-->
            @if (!$enrolled)
            <!--Price and Book-->
            <div class="group mt-6 flex items-center gap-x-3">
                @if ($course->final_price != $course->price)
                <!--Discount-->
                <div
                    class="w-50 absolute -right-5 -top-2 h-0 border-l-[30px] border-t-[25px] border-l-transparent border-t-green-500 border-opacity-80 px-5 transition-all group-hover:border-opacity-70">
                    <div class="-mt-[25px] flex items-center">
                        <p class="mr-3">Save
                            {{ ($course->price - $course->final_price) / $course->price * 100 }}
                            %</p>
                        <div class="">
                            <p
                                class="truncate font-bold line-through decoration-4 drop-shadow-md transition-all group-hover:no-underline">
                                <span class="text-base font-bold"> $ </span>
                                {{ $course->price }}
                            </p>
                        </div>
                    </div>
                </div>
                <!--/Discount-->
                @endif
                <!--price-->
                <div class="flex items-center gap-x-2 drop-shadow-[0_2px_1px_rgba(2,6,23,0.6)]">
                    <p class="">Price</p>
                    <p class="truncate text-2xl font-bold drop-shadow-md transition-colors sm:text-3xl">
                        @if ($course->price == 0)
                        Free
                        @else
                        <span class="text-base font-bold"> $ </span> {{ $course->final_price }}
                        @endif
                    </p>
                </div>
                <!--/price-->
            </div>
            <!--End Price and Book-->
            @endif
        </div>
        <!--END cover top-->

        <!--description-->
        <div class="flex flex-row">
            <p id="cdesc"
                class="my-2 rounded-lg border-0 bg-transparent px-3 py-3 text-justify bg-blend-color-burn drop-shadow-[0_2px_1px_rgba(2,6,23,0.6)] transition-all duration-700 hover:bg-slate-500 hover:bg-opacity-30 hover:drop-shadow-none">
                {{ $course->meta_description }}
            </p>
        </div>
        <!---->

        <!-- Cover footer (Info Bar) -->
        <div
            class="flex h-fit w-full flex-row flex-wrap items-center justify-evenly gap-y-2 border-gray-300 py-2 font-bold text-white xl:justify-between">

            <!-- course level-->
            <div class="group flex items-center">
                <x-tooltip-arrow direction="down"
                    class="relative flex w-full cursor-default items-center justify-between rounded-md border border-gray-300 bg-slate-500 bg-opacity-20 px-3 py-2 shadow-sm transition-all hover:bg-white hover:text-gray-500 focus:border-traivis-500 focus:bg-white focus:text-gray-500 focus:outline-none focus:ring-1 focus:ring-traivis-500">
                    <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                        <path
                            d="M12,6A3,3,0,0,0,9,9V21a3,3,0,0,0,6,0V9A3,3,0,0,0,12,6Zm1,15a1,1,0,0,1-2,0V9a1,1,0,0,1,2,0Z">
                        </path>
                        <path
                            d="M21,0a3,3,0,0,0-3,3V21a3,3,0,0,0,6,0V3A3,3,0,0,0,21,0Zm1,21a1,1,0,0,1-2,0V3a1,1,0,0,1,2,0Z">
                        </path>
                        <path d="M3,12a3,3,0,0,0-3,3v6a3,3,0,0,0,6,0V15A3,3,0,0,0,3,12Z">
                        </path>
                    </svg>
                    <span class="ml-3 truncate"> {{ $course->course_level }} </span>
                    <x-slot name="text">
                        Level
                    </x-slot>
                </x-tooltip-arrow>
            </div>
            <!--end course level-->

            <!-- course seats-->
            <div class="flex items-center">
                <button type="button"
                    class="relative flex w-full cursor-default items-center justify-between rounded-md border border-gray-300 bg-slate-500 bg-opacity-20 px-3 py-2 shadow-sm transition-all hover:bg-white hover:text-gray-500 focus:border-traivis-500 focus:bg-white focus:text-gray-500 focus:outline-none focus:ring-1 focus:ring-traivis-500">
                    <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 512 512" xml:space="preserve">
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
                            <polygon points="422.376,208.097 422.376,208.097 422.376,208.097  ">
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
                    <span class="ml-3 truncate"> Seats </span>

                    <span class="ml-2 flex items-center gap-x-1">
                        <x-tooltip-arrow>
                            <div class="">
                                {{ $course->seats - $enrolledStudentsCount < 0 ? 0 : $course->seats -
                                    $enrolledStudentsCount }}
                            </div>
                            <x-slot name="text">
                                Available Seats
                            </x-slot>
                        </x-tooltip-arrow>

                        <span>/</span>

                        <x-tooltip-arrow>
                            <div class="">
                                {{ $course->seats ?? 0 }}
                            </div>
                            <x-slot name="text">
                                Total Seats
                            </x-slot>
                        </x-tooltip-arrow>
                    </span>
                </button>
            </div>

            <!--END course seats-->

            <!-- course mode-->
            <button class="z-10 flex h-10 w-fit items-center justify-center whitespace-nowrap rounded-md border border-gray-300 bg-slate-500 bg-opacity-20 px-4 hover:bg-white hover:text-gray-500 focus:bg-white focus:text-gray-500">

                <x-tooltip-arrow>
                    <svg fill="currentColor" class="mr-3 h-5" viewBox="0 0 24 24">
                        <path d="m22 12v-7a5.006 5.006 0 0 0 -5-5h-10a5.006 5.006 0 0 0 -5 5v7z">
                        </path>
                        <path
                            d="m23 14h-22a1 1 0 0 0 0 2h10v4h-2a3 3 0 0 0 -3 3 1 1 0 0 0 2 0 1 1 0 0 1 1-1h6a1 1 0 0 1 1 1 1 1 0 0 0 2 0 3 3 0 0 0 -3-3h-2v-4h10a1 1 0 0 0 0-2z">
                        </path>
                    </svg>
                    <x-slot name="text">
                        Delivery mode
                    </x-slot>
                </x-tooltip-arrow>

                {{-- @dd($course->sections) --}}
                @foreach ($course->delivery_modes as $deliverMode)
                <x-tooltip-arrow>
                    <x-slot name="text">
                        {{ $deliverMode['name'] }}
                    </x-slot>
                    {{ $deliverMode['code'] }}
                </x-tooltip-arrow>
                @if (!$loop->last)
                /
                @endif
                @endforeach
            </button>
            <!--END course mode-->

            <!-- course lectures-->
            <x-tooltip-arrow
                class=" flex h-10 w-fit items-center justify-center whitespace-nowrap rounded-md border border-gray-300 bg-slate-500 bg-opacity-20 px-4 hover:bg-white hover:text-gray-500 focus:bg-white focus:text-gray-500">
                <svg fill="currentColor" class="mr-2 h-5" viewBox="0 0 24 24">
                    <path
                        d="M20,10.5a10.01,10.01,0,0,0-2,.273A5.006,5.006,0,0,0,13,6h-.272A9.929,9.929,0,0,0,13,4,4,4,0,0,0,5,4a9.929,9.929,0,0,0,.272,2H5a5,5,0,0,0-5,5v8a5,5,0,0,0,5,5H6.224a.772.772,0,0,0,.748-.975C6.623,21.766,6,21,6,20a3,3,0,0,1,6,0c0,1-.632,1.768-.973,3.029a.772.772,0,0,0,.748.971H13a5,5,0,0,0,5-5v-.772a10.02,10.02,0,0,0,2,.272,4,4,0,0,0,0-8Z">
                    </path>
                </svg>
                <span class="mr-1">{{ $course->lectures()->count() }}</span>
                Lectures
                <x-slot name="text">
                    Lectures
                </x-slot>
            </x-tooltip-arrow>
            <!--END course lectures-->

            <!-- course duration-->
            <x-tooltip-arrow
                class="group relative flex h-10 w-fit items-center justify-center whitespace-nowrap rounded-md border border-gray-300 bg-slate-500 bg-opacity-20 px-4 hover:bg-white hover:text-gray-500 focus:bg-white focus:text-gray-500">
                <svg viewBox="0 0 24 24" fill="currentColor" class="mr-2 h-5">
                    <path
                        d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm4,13h-4c-.552,0-1-.447-1-1V6c0-.553,.448-1,1-1s1,.447,1,1v5h3c.553,0,1,.447,1,1s-.447,1-1,1Z">
                    </path>
                </svg>
                <span class="mr-1">{{ $course->duration }}</span>
                hrs
                <x-slot name="text">
                    Durations
                </x-slot>
            </x-tooltip-arrow>
            <!--END course duration-->

            <!-- Students number-->
            <x-tooltip-arrow
                class="group relative flex h-10 w-fit items-center justify-center whitespace-nowrap rounded-md border border-gray-300 bg-slate-500 bg-opacity-20 px-4 hover:bg-white hover:text-gray-500 focus:bg-white focus:text-gray-500">
                <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM5.683,16H1a1,1,0,0,1-1-1A6.022,6.022,0,0,1,5.131,9.084a1,1,0,0,1,1.1,1.266A6.009,6.009,0,0,0,6,12a5.937,5.937,0,0,0,.586,2.57,1,1,0,0,1-.9,1.43ZM17,24H7a1,1,0,0,1-1-1,6,6,0,0,1,12,0A1,1,0,0,1,17,24ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8Zm17,8H18.317a1,1,0,0,1-.9-1.43A5.937,5.937,0,0,0,18,12a6.009,6.009,0,0,0-.236-1.65,1,1,0,0,1,1.105-1.266A6.022,6.022,0,0,1,24,15,1,1,0,0,1,23,16Z">
                    </path>
                </svg>
                <span class="mr-1">{{ $enrolledStudentsCount }}</span>
                <x-slot name="text">
                    Enrolled Students
                </x-slot>
            </x-tooltip-arrow>
            <!--END Students number-->

        </div>
        <!--END Info Bar -->

    </div>
    <!--END Cover -->

    <!-- Actions Bar and tags-->
    <div class="flex h-14 flex-row items-center justify-between border-b-4 bg-traivis-50 px-4">

        <!--tags-->
        <div class="overflow-x-auto whitespace-nowrap">
            @foreach ($course->tags as $tag)
            <button
                class="mx-1 inline-flex items-center rounded-full border border-traivis-300 bg-traivis-100 px-3 py-2 text-sm text-traivis-500">
                <svg class="mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M21.526,8.284L13.937,.879C13.278,.219,12.33-.104,11.409,.028L4.521,.97c-.547,.075-.93,.579-.855,1.126,.075,.547,.578,.929,1.127,.855l6.889-.942c.306-.042,.622,.063,.851,.292l7.59,7.405c1.045,1.045,1.147,2.68,.323,3.847-.234-.467-.523-.912-.911-1.3l-7.475-7.412c-.658-.658-1.597-.975-2.528-.851l-6.889,.942c-.454,.062-.808,.425-.858,.881l-.765,6.916c-.1,.911,.214,1.804,.864,2.453l7.416,7.353c.944,.945,2.199,1.464,3.534,1.464h.017c1.342-.004,2.6-.532,3.543-1.487l3.167-3.208c.927-.939,1.393-2.159,1.423-3.388l.577-.576c1.925-1.95,1.914-5.112-.032-7.057Zm-15.526,1.716c-.552,0-1-.448-1-1,.006-1.308,1.994-1.307,2,0,0,.552-.448,1-1,1Z">
                    </path>
                </svg>
                {{ $tag->name }}
            </button>
            @endforeach
        </div>
        <!--/tags-->

        <!--Actions-->
        <div x-data="{ openShareMenu: false }" @click.outside="openShareMenu = false"
            class="flex items-center gap-x-8 p-1 font-bold text-gray-500">

            <a href="{{ route('chat-conversations', ['id' => $this->maker->id, 'type' => 'b']) }}">
                <button class="flex gap-1 hover:text-traivis-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                        <path
                            d="M24,16v5a3,3,0,0,1-3,3H16a8,8,0,0,1-6.92-4,10.968,10.968,0,0,0,2.242-.248A5.988,5.988,0,0,0,16,22h5a1,1,0,0,0,1-1V16a5.988,5.988,0,0,0-2.252-4.678A10.968,10.968,0,0,0,20,9.08,8,8,0,0,1,24,16ZM17.977,9.651A9,9,0,0,0,8.349.023,9.418,9.418,0,0,0,0,9.294v5.04C0,16.866,1.507,18,3,18H8.7A9.419,9.419,0,0,0,17.977,9.651Zm-4.027-5.6a7.018,7.018,0,0,1,2.032,5.46A7.364,7.364,0,0,1,8.7,16H3c-.928,0-1-1.275-1-1.666V9.294A7.362,7.362,0,0,1,8.49,2.018Q8.739,2,8.988,2A7.012,7.012,0,0,1,13.95,4.051Z">
                        </path>
                    </svg>
                    Message
                </button>
            </a>

            @auth
            <button wire:click="toggleWishList"
                class="{{ $wishlist ? 'text-pink-500' : '' }} flex gap-1 hover:text-pink-500">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor">
                    <path
                        d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                    </path>
                </svg>
                {{ $wishlist ? 'Saved' : 'Save' }}
            </button>
            @endauth
            @guest
            <a href="{{ route('login', ['_redirect_back_to' => request()->fullUrl()]) }}">
                <button class="flex gap-1 hover:text-traivis-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor">
                        <path
                            d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                        </path>
                    </svg>
                </button>
            </a>

            @endguest

            <button @click="openShareMenu=!openShareMenu" class="flex gap-1 hover:text-traivis-500">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                    <path
                        d="M19.333,14.667a4.66,4.66,0,0,0-3.839,2.024L8.985,13.752a4.574,4.574,0,0,0,.005-3.488l6.5-2.954a4.66,4.66,0,1,0-.827-2.643,4.633,4.633,0,0,0,.08.786L7.833,8.593a4.668,4.668,0,1,0-.015,6.827l6.928,3.128a4.736,4.736,0,0,0-.079.785,4.667,4.667,0,1,0,4.666-4.666ZM19.333,2a2.667,2.667,0,1,1-2.666,2.667A2.669,2.669,0,0,1,19.333,2ZM4.667,14.667A2.667,2.667,0,1,1,7.333,12,2.67,2.67,0,0,1,4.667,14.667ZM19.333,22A2.667,2.667,0,1,1,22,19.333,2.669,2.669,0,0,1,19.333,22Z">
                    </path>
                </svg>
                Share
            </button>
            <!--Share Menu-->
            <div class="w-25 absolute -right-1 z-50 mt-24 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95" false="" x-show="openShareMenu" role="menu"
                aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="likely flex flex-row-reverse py-1" role="none" data-url="{{ $url }}">
                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                    <a href="#" @click="openShareMenu=false"
                        class="facebook block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                        role="menuitem" tabindex="-1" id="menu-item-0">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xml:space="preserve"
                            fill="currentColor" class="h-5 w-5">
                            <path
                                d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z">
                            </path>
                        </svg> --}}
                    </a>
                    <a href="#" @click="openShareMenu=false"
                        class="twitter block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                        role="menuitem" tabindex="-1" id="menu-item-1">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xml:space="preserve"
                            fill="currentColor" class="h-5 w-5">
                            <path
                                d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z">
                            </path>
                        </svg> --}}
                    </a>
                    {{-- <a href="#" @click="openShareMenu=false"
                        class="linkedin block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                        role="menuitem" tabindex="-1" id="menu-item-2">
                        --}}{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xml:space="preserve"
                            fill="currentColor" class="h-5 w-5">
                            <path
                                d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262">
                            </path>
                            <path
                                d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463">
                            </path>
                            <path
                                d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031">
                            </path>
                        </svg> --}}{{--
                    </a> --}}
                    <a href="#" @click="openShareMenu=false"
                        class="whatsapp block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                        role="menuitem" tabindex="-1" id="menu-item-3">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xml:space="preserve"
                            fill="currentColor" class="h-5 w-5">
                            <path
                                d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z">
                            </path>
                        </svg> --}}
                    </a>
                    <a href="#" @click="openShareMenu=false"
                        class="telegram block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                        role="menuitem" tabindex="-1" id="menu-item-4">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xml:space="preserve"
                            fill="currentColor" class="h-5 w-5">
                            <path style="fill-rule:evenodd;clip-rule:evenodd;"
                                d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z    M17.562,8.161c-0.18,1.897-0.962,6.502-1.359,8.627c-0.168,0.9-0.5,1.201-0.82,1.23c-0.697,0.064-1.226-0.461-1.901-0.903   c-1.056-0.692-1.653-1.123-2.678-1.799c-1.185-0.781-0.417-1.21,0.258-1.911c0.177-0.184,3.247-2.977,3.307-3.23   c0.007-0.032,0.015-0.15-0.056-0.212s-0.174-0.041-0.248-0.024c-0.106,0.024-1.793,1.139-5.062,3.345   c-0.479,0.329-0.913,0.489-1.302,0.481c-0.428-0.009-1.252-0.242-1.865-0.442c-0.751-0.244-1.349-0.374-1.297-0.788   c0.027-0.216,0.324-0.437,0.892-0.663c3.498-1.524,5.831-2.529,6.998-3.015c3.333-1.386,4.025-1.627,4.477-1.635   C17.472,7.214,17.608,7.681,17.562,8.161z">
                            </path>
                        </svg> --}}
                    </a>
                </div>
            </div>
            <!--END Share Menu-->
        </div>
        <!--END Actions-->

    </div>
    <!--END Actions Bar -->

</div>