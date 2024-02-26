<div>
    <div class="bottom-1/2 translate-y-1/2 absolute" :class="SMopen ? '-right-5' : '-right-16'">
        <x-tooltip-arrow direction="left" class="">
            <x-slot name="text">
                Show/Hide Navigator
            </x-slot>
            <button x-on:click="SMopen = ! SMopen" :class="SMopen ? 'text-traivis-500 hover:text-gray-500 bg-traivis-50 hover:bg-slate-100 -right-5' : 'text-gray-500 hover:text-traivis-500 hover:bg-traivis-50 -right-16 shadow-md'"
                    class="duration-200 h-fit w-fit transition-all group border z-50 block p-3 border-slate-300 bg-white rounded-full focus-within:ring-0 hover:shadow-md">

                    <svg :class="SMopen ? 'block' : 'hidden'" class="h-5 w-5" fill="currentColor" x="0px" y="0px" viewBox="0 0 512.051 512.051" style="enable-background:new 0 0 512.051 512.051;" xml:space="preserve" width="512" height="512"><g><path d="M21.359,101.359h58.368c11.52,42.386,55.219,67.408,97.605,55.888c27.223-7.399,48.489-28.665,55.888-55.888h257.472   c11.782,0,21.333-9.551,21.333-21.333s-9.551-21.333-21.333-21.333H233.22C221.7,16.306,178.001-8.716,135.615,2.804   c-27.223,7.399-48.489,28.665-55.888,55.888H21.359c-11.782,0-21.333,9.551-21.333,21.333S9.577,101.359,21.359,101.359z"/><path d="M490.692,234.692h-58.368c-11.497-42.38-55.172-67.416-97.552-55.92c-27.245,7.391-48.529,28.674-55.92,55.92H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h257.493c11.497,42.38,55.172,67.416,97.552,55.92   c27.245-7.391,48.529-28.674,55.92-55.92h58.368c11.782,0,21.333-9.551,21.333-21.333   C512.025,244.243,502.474,234.692,490.692,234.692z"/><path d="M490.692,410.692H233.22c-11.52-42.386-55.219-67.408-97.605-55.888c-27.223,7.399-48.489,28.665-55.888,55.888H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h58.368c11.52,42.386,55.219,67.408,97.605,55.888   c27.223-7.399,48.489-28.665,55.888-55.888h257.472c11.782,0,21.333-9.551,21.333-21.333   C512.025,420.243,502.474,410.692,490.692,410.692z"/></g></svg>
                    <svg :class="SMopen ? 'hidden' : 'block'" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" ><path d="M1,4.75H3.736a3.728,3.728,0,0,0,7.195,0H23a1,1,0,0,0,0-2H10.931a3.728,3.728,0,0,0-7.195,0H1a1,1,0,0,0,0,2ZM7.333,2a1.75,1.75,0,1,1-1.75,1.75A1.752,1.752,0,0,1,7.333,2Z"/><path d="M23,11H20.264a3.727,3.727,0,0,0-7.194,0H1a1,1,0,0,0,0,2H13.07a3.727,3.727,0,0,0,7.194,0H23a1,1,0,0,0,0-2Zm-6.333,2.75A1.75,1.75,0,1,1,18.417,12,1.752,1.752,0,0,1,16.667,13.75Z"/><path d="M23,19.25H10.931a3.728,3.728,0,0,0-7.195,0H1a1,1,0,0,0,0,2H3.736a3.728,3.728,0,0,0,7.195,0H23a1,1,0,0,0,0-2ZM7.333,22a1.75,1.75,0,1,1,1.75-1.75A1.753,1.753,0,0,1,7.333,22Z"/></svg>
            </button>
        </x-tooltip-arrow>
    </div>

    <div :class="SMopen ? 'shadow-none' : '-ml-80 opacity-0'"
                         class="duration-200 opacity-100 h-full relative flex flex-col w-80 overflow-y-auto pb-20 transition-all -ml-0 block">
        <nav class="flex-1 px-7 space-y-1 bg-white transition-colors  pt-1"
            aria-label="Sidebar" x-data>

            <div class="space-y-1" id="myCourses" x-data="{ open: false }">
                <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                @include(
                    'homes.social.layouts.partials.courses.components.courses-button',
                    [
                        'text' => __('My Courses'),
                        'icon' => 'svg-icons.fi-rr-briefcase',
                        'link' => 'team',
                    ]
                )

                <!-- Expandable link section, show/hide based on state. -->
                <div class="space-y-1" id="sub-menu-2" x-show="open" x-cloak x-collapse @click.outside="open = false">
                    <a href="{{ route('user-profile-courses',['id'=>$user->id,'filter'=>'','filterType'=>'']) }}"
                        class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900  ">
                        <x-svg-icons.fi-sr-heart
                            class="mr-2 h-5 w-5 text-traivis group-hover:text-traivis-700  " />
                        {{ __('Wishlist') }}
                    </a>
                    
                    <a  href="{{ route('user-profile-courses',['id'=>$user->id,'filter'=>'entolled','filterType'=>'']) }}"
                        class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900  ">
                        <x-svg-icons.fi-sr-book-open-reader
                            class="mr-2 h-5 w-5 text-traivis group-hover:text-traivis-700  " />
                        {{ __('Enrolled') }}
                    </a>
                    <a href="{{ route('user-profile-courses',['id'=>$user->id,'filter'=>'entolled','filterType'=>'']) }}"
                        class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900  ">
                        <x-svg-icons.fi-sr-badge-check
                            class="mr-2 h-5 w-5 text-traivis group-hover:text-traivis-700  " />
                        {{ __('Completed') }}
                    </a>
                </div>
            </div>
            <a href="{{ route('user-profile-book-mark',['id'=>$user->id]) }}" 
                class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900  ">
                <svg fill="currentColor" stroke="rgb(59 130 246)" stroke-width="1.5"
                class="mr-2  h-5 w-5 text-traivis group-hover:text-traivis-700  "
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25">
                    </path>
                </svg>
                {{ __('BookMark') }}
            </a>
            <div class="space-y-1" id="myQuizzes" x-data="{ open: false }">

                @include(
                    'homes.social.layouts.partials.courses.components.courses-button',
                    [
                        'text' => __('My Quizzes'),
                        'icon' => 'svg-icons.fi-rr-test',
                        'link' => 'team',
                    ]
                )

                <!-- Expandable link section, show/hide based on state. -->
                <div class="space-y-1" id="sub-menu-3" x-show="open" x-cloak x-collapse @click.outside="open = false">
                    @forelse ($user->courses as $course)
                        @forelse ($course->quizzes as $quiz)
                            <a
                                href="{{ route('user-profile-courses',['id'=>$user->id,'filter'=>$quiz->id,'filterType'=>'quiz']) }}"
                                class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                {{ $quiz->title }} </a>
                        @empty
                        @endforelse
                    @empty
                    @endforelse

                </div>
            </div>

            <div class="space-y-1" id="myCertificates" x-data="{ open: false }">
                <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                @include(
                    'homes.social.layouts.partials.courses.components.courses-button',
                    [
                        'text' => 'My Certificates',
                        'icon' => 'svg-icons.fi-rr-diploma',
                        'link' => 'team',
                    ]
                )

                <!-- Expandable link section, show/hide based on state. -->
                <div class="space-y-1" id="sub-menu-4" x-show="open" x-cloak x-collapse @click.outside="open = false">
                    @forelse ($certificates as $certificate)
                        <a
                            href="{{ route('user-profile-courses',['id'=>$user->id,'filter'=>$certificate->course_id,'filterType'=>'cert']) }}"
                            class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                            {{ $certificate->course->title }} </a>
                    @empty
                    @endforelse

                </div>
            </div>

        </nav>
    </div>
</div>
