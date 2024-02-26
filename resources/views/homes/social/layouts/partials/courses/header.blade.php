<div class="sticky top-0 z-50 shadow-sm">

    <div id="mobileMenu" x-data="{ isMenuOn: false }" class="transition-colors ">

        <header class="bg-white shadow-sm transition-colors  ">
            <div class="mx-auto px-8">
                <div class="relative flex items-center justify-between lg:gap-8 xl:grid xl:grid-cols-12">
                    <div class="col-span-3 flex w-full items-center justify-start gap-x-3 pr-8 md:w-auto md:pr-0">
                        <div class="flex flex-shrink-0 items-center">
                            <a href="#">

                                {{-- <img class="block h-8 w-auto" --}} {{--
                                src="https://tailwindui.com/img/logos/workflow-mark.svg?color=#1A73E8&shade=600" --}}
                                {{-- alt="Workflow"> --}}
                                <pan class="text-traivis ">
                                    <x-svg-icons.logo-square class="block h-8 w-auto" />
                                </pan>
                            </a>
                        </div>
                        <div class="min-w-0 flex-1 lg:px-0">
                            <div class="flex items-center px-0 py-4">
                                <div class="w-full">
                                    {{-- @isset($no_result_panel_for_global_search) --}}
                                    <livewire:global-search />
                                    {{-- @endisset --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden min-w-0 flex-1 md:block md:px-8 lg:px-0 xl:col-span-6">
                        <div
                            class="flex items-center justify-center px-0 py-4 md:mx-auto md:max-w-3xl lg:mx-0 lg:max-w-none xl:px-0">
                            <div class="{{-- md:ml-6 --}} md:flex md:space-x-8">
                                <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->

                                <a href="{{ route('home') }}"
                                    class="{{ \Route::current()->getName() == 'home' ? 'border-traivis-500 text-gray-900 ' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 ' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium transition-colors">
                                    <span class="hidden md:block">Home</span>
                                    <span class="block md:hidden">
                                        <svg class="mx-2 h-6 w-6" fill="currentColor" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M256,319.841c-35.346,0-64,28.654-64,64v128h128v-128C320,348.495,291.346,319.841,256,319.841z" />
                                                <g>
                                                    <path
                                                        d="M362.667,383.841v128H448c35.346,0,64-28.654,64-64V253.26c0.005-11.083-4.302-21.733-12.011-29.696l-181.29-195.99    c-31.988-34.61-85.976-36.735-120.586-4.747c-1.644,1.52-3.228,3.103-4.747,4.747L12.395,223.5    C4.453,231.496-0.003,242.31,0,253.58v194.261c0,35.346,28.654,64,64,64h85.333v-128c0.399-58.172,47.366-105.676,104.073-107.044    C312.01,275.383,362.22,323.696,362.667,383.841z" />
                                                    <path
                                                        d="M256,319.841c-35.346,0-64,28.654-64,64v128h128v-128C320,348.495,291.346,319.841,256,319.841z" />
                                                </g>
                                            </g>
                                        </svg> </span>
                                </a>
                                <a href="{{ route('courses') }}"
                                    class="{{ in_array(\Route::current()->getName(), ['course', 'courses']) ? 'border-traivis-500 text-gray-900 ' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 ' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium transition-colors">
                                    <span class="hidden md:block">Courses</span>
                                    <span class="block md:hidden">
                                        <svg class="mx-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                            xml:space="preserve">
                                            <path
                                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                                <a href="{{ route('educators') }}"
                                    class="{{ \Route::current()->getName() == 'educators' ? 'border-traivis-500 text-gray-900 ' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 ' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium transition-colors">

                                    <span class="hidden md:block">Educators</span>
                                    <span class="block md:hidden">
                                        <svg class="mx-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z">
                                            </path>
                                        </svg> </span>
                                </a>
                                {{-- <a href="#"
                                class="{{ \Route::current()->getName() == 'learning-war' ? 'border-traivis-500 text-gray-900 ' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 ' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium transition-colors ">
                                Learning war </a>
                            <a href="#"
                                class="{{ \Route::current()->getName() == 'resources' ? 'border-traivis-500 text-gray-900 ' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 ' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium transition-colors ">
                                Resources </a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-span-3 flex items-center justify-end">
                        @auth

                            {{-- ENABLE THIS IN v2 --}}
                            {{-- @include('homes.social.layouts.partials.dark-mode-toggle-1') --}}

                            {{-- @include('homes.social.layouts.partials.dark-mode-toggle-2') --}}

                            {{-- <a href="#" --}} {{--
                        class="ml-2 md:ml-5 flex-shrink-0 bg-white transition-colors  rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500 relative inline-block">
                        --}}
                            {{-- <span class="sr-only">View notifications</span> --}}
                            {{-- @include('homes.social.layouts.partials.svg-icons.outline.bell') --}}
                            {{-- <span
                            class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">99</span>
                        --}}
                            {{-- </a> --}}

                            <!-- cart livewire component here -->
                            @if (Route::current()->getName() != 'checkout.page')
                                @livewire('cart')
                            @endif

                            <!--Messages dropdown-->
                            @livewire('chat-component', ['mode' => 'icon'])
                            <!--END Messages dropdown-->

                            <!--notifications dropdown-->
                            @livewire('social.notification-drop-down')
                            <!--END notifications dropdown-->

                            {{-- <a href="#"
                        class="group/x relative ml-2 md:ml-5 inline-block flex-shrink-0 rounded-full bg-white p-1 text-gray-400 transition-colors hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 ">
                        <span class="sr-only">View notifications</span>
                        <x-svg-icons.fi-rr-comments class="h-5 w-5" />
                        <span
                            class="group-hover/x:bg-traivis-600 absolute top-0 right-0 inline-flex translate-x-1/2 -translate-y-1/2 transform items-center justify-center rounded-full bg-traivis-500 px-2 py-1 text-xs font-bold leading-none text-white">99</span>
                    </a>
                    <a href="#"
                        class="group/x relative ml-2 md:ml-5 inline-block flex-shrink-0 rounded-full bg-white p-1 text-gray-400 transition-colors hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 ">
                        <span class="sr-only">View notifications</span>
                        <x-svg-icons.fi-rr-bell class="h-5 w-5" />
                        <span
                            class="group-hover/x:bg-traivis-600 absolute top-0 right-0 inline-flex translate-x-1/2 -translate-y-1/2 transform items-center justify-center rounded-full bg-traivis-500 px-2 py-1 text-xs font-bold leading-none text-white">99</span>
                    </a> --}}
                            @if (auth()->user()->businesses->count() > 0)
                                <livewire:social.act-as-business-header-switcher />
                            @endif
                            <!-- Profile dropdown -->

                            <div class="relative ml-2 flex flex-shrink-0 md:ml-5" id="profile" x-data="{ open: false }"
                                @keydown.window.escape.stop="open = false" @click.outside="open = false;">

                                <div>
                                    <button type="button"
                                        class="flex rounded-full bg-white transition-colors focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 "
                                        id="user-menu-button" aria-expanded="false" :aria-expanded="open.toString()"
                                        aria-haspopup="true" @click="open = !open">
                                        <span class="sr-only">Open user menu</span>
                                        @auth
                                            @php
                                                $entity = \App\Classes\Helper::getCurrentEntity(1);
                                            @endphp
                                            <img class="h-8 w-8 rounded-full object-contain" src="{{ $entity->avatar }}"
                                                alt="{{ $entity->name }}">
                                        @endauth
                                        @guest
                                            <img class="h-8 w-8 rounded-full object-contain" src="" alt="">
                                        @endguest
                                    </button>
                                </div>

                                <div class="absolute right-0 top-12 z-20 transform bg-white" x-show="open"
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95">
                                    <div
                                        class="flex grid w-60 items-center justify-center overflow-hidden rounded-b-lg shadow-lg ring-1 ring-black ring-opacity-5 transition-colors ">

                                        <div class="border-b-2 border-gray-300 py-4 text-center">
                                            <div class="font-bold">{{ $entity->name }}</div>
                                            @if ($entity instanceof \App\Models\Business)
                                                <div class="text-xs capitalize"><a
                                                        href="{{ route($entity->business_type . '-dashboard') }}">{{ $entity->business_type }}</a>
                                                </div>
                                                <pre class="text-sm">#{{ $entity->business_number }}</pre>
                                            @endif
                                        </div>

                                        <a href="{{ auth()->user()->isActingAsBusiness()
                                            ? route(
                                                'business-profile-social',
                                                $entity->id,
                                            )
                                            : route('user-profile-social', auth()->id()) }}"
                                            class="flex w-auto items-start border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 transition transition-colors duration-150 ease-in-out hover:w-full hover:border-gray-300 hover:text-gray-700   ">
                                            <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                                id="Outline" viewbox="0 0 24 24" width="512" height="512"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z">
                                                </path>
                                                <path
                                                    d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z">
                                                </path>
                                            </svg>
                                            <div class="ml-4">
                                                <span>My Profile</span>
                                            </div>
                                        </a>
                                        @if (auth()->id() == 1)
                                            <livewire:social.act-as-business />
                                        @endif
                                        @if (!auth()->user()->isActingAsBusiness())
                                            <a href="{{ url('/business-space') }}"
                                                class="group flex w-full items-start border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 transition transition-colors duration-150 ease-in-out hover:w-full hover:border-gray-300 hover:text-gray-700   ">
                                                <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 512 512"
                                                    xml:space="preserve" fill="currentColor" aria-hidden="true">
                                                    <path d="M448.4,286.4c-16.5,0-32.3,6.4-44.1,17.9l-25.1-12.6c20.5-67.2-17.4-138.3-84.6-158.8c-24.6-7.5-50.9-7.4-75.4,0.4
                          l-14.7-26.6c23.6-25.9,21.8-66-4.1-89.6c-25.9-23.6-66-21.8-89.6,4.1c-23.6,25.9-21.8,66,4.1,89.6c11.7,10.7,27.1,16.6,43,16.6
                          c3.1-0.1,6.1-0.4,9.1-0.9l14.6,26.4c-55.3,41-67.7,118.6-27.9,174.8L91.8,387c-32.8-14.7-71.3,0-85.9,32.8
                          c-14.7,32.8,0,71.3,32.8,85.9c32.8,14.7,71.3,0,85.9-32.8c8.2-18.3,7.5-39.3-1.9-57l60.6-58.2c56.6,41,135.7,28.4,176.7-28.2
                          l25.4,12.7c-0.4,2.6-0.6,5.1-0.7,7.7c0,35.1,28.5,63.6,63.6,63.6s63.6-28.5,63.6-63.6C512,314.9,483.5,286.4,448.4,286.4z
                          M256.1,360.9c-58,0-104.9-47-104.9-104.9c0-58,47-104.9,104.9-104.9c58,0,104.9,47,104.9,104.9C361,313.9,314,360.9,256.1,360.9z
                          M295.1,211.7H289c-2.6-13-14.1-22.3-27.4-22.4h-11.2c-13.3,0-24.7,9.4-27.4,22.4h-6.2c-15.4,0-27.9,12.5-28,28v28v15v12.9
                          c0,15.4,12.5,28,28,28h78.3c15.4,0,28-12.5,28-28v-12.9v-15v-28C323.1,224.3,310.6,211.8,295.1,211.7z M250.4,200.6h11.2
                          c7.1,0,13.4,4.5,15.8,11.2h-42.7C237,205.1,243.3,200.6,250.4,200.6z">
                                                    </path>
                                                </svg>
                                                <div class="ml-4">
                                                    <span> My Business Env.</span>
                                                </div>
                                            </a>
                                        @endif

                                        <a href="#"
                                            class="group flex w-full items-start border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 transition transition-colors duration-150 ease-in-out hover:w-full hover:border-gray-300 hover:text-gray-700   ">
                                            <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                                id="Outline" viewbox="0 0 24 24" width="512" height="512"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z">
                                                </path>
                                                <path
                                                    d="M21.294,13.9l-.444-.256a9.1,9.1,0,0,0,0-3.29l.444-.256a3,3,0,1,0-3-5.2l-.445.257A8.977,8.977,0,0,0,15,3.513V3A3,3,0,0,0,9,3v.513A8.977,8.977,0,0,0,6.152,5.159L5.705,4.9a3,3,0,0,0-3,5.2l.444.256a9.1,9.1,0,0,0,0,3.29l-.444.256a3,3,0,1,0,3,5.2l.445-.257A8.977,8.977,0,0,0,9,20.487V21a3,3,0,0,0,6,0v-.513a8.977,8.977,0,0,0,2.848-1.646l.447.258a3,3,0,0,0,3-5.2Zm-2.548-3.776a7.048,7.048,0,0,1,0,3.75,1,1,0,0,0,.464,1.133l1.084.626a1,1,0,0,1-1,1.733l-1.086-.628a1,1,0,0,0-1.215.165,6.984,6.984,0,0,1-3.243,1.875,1,1,0,0,0-.751.969V21a1,1,0,0,1-2,0V19.748a1,1,0,0,0-.751-.969A6.984,6.984,0,0,1,7.006,16.9a1,1,0,0,0-1.215-.165l-1.084.627a1,1,0,1,1-1-1.732l1.084-.626a1,1,0,0,0,.464-1.133,7.048,7.048,0,0,1,0-3.75A1,1,0,0,0,4.79,8.992L3.706,8.366a1,1,0,0,1,1-1.733l1.086.628A1,1,0,0,0,7.006,7.1a6.984,6.984,0,0,1,3.243-1.875A1,1,0,0,0,11,4.252V3a1,1,0,0,1,2,0V4.252a1,1,0,0,0,.751.969A6.984,6.984,0,0,1,16.994,7.1a1,1,0,0,0,1.215.165l1.084-.627a1,1,0,1,1,1,1.732l-1.084.626A1,1,0,0,0,18.746,10.125Z">
                                                </path>
                                            </svg>
                                            <div class="ml-4">
                                                <span>Settings/Security</span>
                                            </div>
                                        </a>
                                        @if (!session('business_id'))
                                            <a href="{{ route('student-payments') }}"
                                                class="group flex inline-flex items-center border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 transition transition-colors duration-150 ease-in-out hover:border-gray-300 hover:text-gray-700   ">
                                                <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                                    id="Outline" viewbox="0 0 24 24" width="512" height="512"
                                                    fill="currentColor" aria-hidden="true">
                                                    <rect x="3" y="6" width="18" height="13" rx="2"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M3 10H20.5" stroke="#000000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 15H9" stroke="#000000" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="ml-4">
                                                    <span>Payments</span>
                                                </div>
                                            </a>
                                        @endif
                                        <a href="#"
                                            class="group flex inline-flex items-center border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 transition transition-colors duration-150 ease-in-out hover:border-gray-300 hover:text-gray-700   ">
                                            <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                                id="Outline" viewbox="0 0 24 24" width="512" height="512"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z"
                                                    class=""></path>
                                                <path
                                                    d="M12.717,5.063A4,4,0,0,0,8,9a1,1,0,0,0,2,0,2,2,0,0,1,2.371-1.967,2.024,2.024,0,0,1,1.6,1.595,2,2,0,0,1-1,2.125A3.954,3.954,0,0,0,11,14.257V15a1,1,0,0,0,2,0v-.743a1.982,1.982,0,0,1,.93-1.752,4,4,0,0,0-1.213-7.442Z">
                                                </path>
                                                <rect x="11" y="17" width="2" height="2" rx="1"></rect>
                                            </svg>
                                            <div class="ml-4">
                                                <span>Support</span>
                                            </div>
                                        </a>

                                        {{-- <a href="#"
                                    class="group flex w-full items-start border-t-2 border-b-2 border-traivis-500 border-transparent px-1 py-4 text-sm font-medium text-gray-500 transition transition-colors duration-150 ease-in-out hover:w-full hover:border-gray-300 hover:text-gray-700   ">
                                    <div class="ml-4">
                                        <span>Logout</span>
                                    </div>
                                </a> --}}

                                        <x-logout-link
                                            class="group flex border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 ease-in-out hover:border-gray-300 hover:text-gray-700"
                                            class3="group flex w-full items-start border-t-2 border-b-2 border-traivis-500 border-transparent px-1 py-4 text-sm font-medium text-gray-500 transition transition-colors duration-150 ease-in-out hover:w-full hover:border-gray-300 hover:text-gray-700   ">
                                            <x-svg-icons.fi-rr-sign-out-alt class="h-5 w-5 flex-shrink-0" />
                                            <div class="ml-4">
                                                {{ __('Log Out') }}
                                            </div>
                                        </x-logout-link>

                                    </div>
                                </div>

                                <!--Avatar drop down-->
                            </div>

                            {{-- <div class="relative ml-5 flex-shrink-0" id="profile" x-data="{ open: false }">
                        <div>
                            <button @click="open =! open" type="button"
                                class="flex rounded-full bg-white transition-colors focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 "
                                id="user-menu-button" aria-expanded="false" :aria-expanded="open.toString()"
                                aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full object-contain"
                                    src="{{ auth()->user()?->avatar }}"
                                    alt="">
                            </button>
                        </div>
                        <!--
                              Dropdown menu, show/hide based on menu state.

                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                        <div x-show="open" style="display: none" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" --}}{{--
                            x-transition:enter="transition ease-in-out duration-300 transform" --}}{{-- --}}{{--
                            x-transition:enter-start="-translate-y-full" --}}{{-- --}}{{--
                            x-transition:enter-end="translate-y-0" --}}{{-- --}}{{--
                            x-transition:leave="transition ease-in-out duration-300 transform" --}}{{-- --}}{{--
                            x-transition:leave-start="translate-y-0" --}}{{-- --}}{{--
                            x-transition:leave-end="-translate-y-full" --}}{{-- @click.outside="open = false"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 transition-colors focus:outline-none "
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#" class="block py-2 px-4 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-0">Your Profile</a>

                            <a href="#" class="block py-2 px-4 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-1">Settings</a>

                            <a href="#" class="block py-2 px-4 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-2">Sign out</a>
                        </div>
                    </div> --}}
                            {{-- <a href="#" --}} {{--
                        class="ml-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500">
                        --}}
                            {{-- New Project </a> --}}

                        @endauth
                        @guest
                            <a href="{{ route('login', ['_redirect_back_to' => request()->fullUrl()]) }}">Login</a>
                        @endguest
                    </div>
                </div>
                <div class="relative flex md:hidden">
                    <div class="flex-1">
                        <div class="mx-auto flex items-center justify-center pb-2">
                            <div class="{{-- md:ml-6 --}} flex w-full items-center justify-center gap-x-8">
                                <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                                <a href="{{ route('home') }}"
                                    class="{{ \Route::current()->getName() == 'home' ? 'border-traivis-500 text-gray-900 ' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 ' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium transition-colors">
                                    <span class="">Home</span>
                                    <!-- <span class="block md:hidden">
                                        <svg class="mx-2 h-6 w-6" fill="currentColor" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><path d="M256,319.841c-35.346,0-64,28.654-64,64v128h128v-128C320,348.495,291.346,319.841,256,319.841z"/><g><path d="M362.667,383.841v128H448c35.346,0,64-28.654,64-64V253.26c0.005-11.083-4.302-21.733-12.011-29.696l-181.29-195.99    c-31.988-34.61-85.976-36.735-120.586-4.747c-1.644,1.52-3.228,3.103-4.747,4.747L12.395,223.5    C4.453,231.496-0.003,242.31,0,253.58v194.261c0,35.346,28.654,64,64,64h85.333v-128c0.399-58.172,47.366-105.676,104.073-107.044    C312.01,275.383,362.22,323.696,362.667,383.841z"/><path d="M256,319.841c-35.346,0-64,28.654-64,64v128h128v-128C320,348.495,291.346,319.841,256,319.841z"/></g></g></svg>
                                    </span> -->
                                </a>
                                <a href="{{ route('courses') }}"
                                    class="{{ in_array(\Route::current()->getName(), ['course', 'courses']) ? 'border-traivis-500 text-gray-900 ' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 ' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium transition-colors">
                                    <span class="">Courses</span>
                                    <!-- <span class="block md:hidden">
                                        <svg class="mx-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xml:space="preserve"><path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"></path></svg>
                                    </span> -->
                                </a>
                                <a href="{{ route('educators') }}"
                                    class="{{ \Route::current()->getName() == 'educators' ? 'border-traivis-500 text-gray-900 ' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 ' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium transition-colors">

                                    <span class="">Educators</span>
                                    <!-- <span class="block md:hidden">
                                        <svg class="mx-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z"></path></svg>
                                    </span> -->
                                </a>
                                {{-- <a href="#"
                                    class="{{ \Route::current()->getName() == 'learning-war' ? 'border-traivis-500 text-gray-900 ' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 ' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium transition-colors ">
                                    Learning war </a>
                                <a href="#"
                                    class="{{ \Route::current()->getName() == 'resources' ? 'border-traivis-500 text-gray-900 ' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 ' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium transition-colors ">
                                    Resources </a> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header>
    </div>

</div>
