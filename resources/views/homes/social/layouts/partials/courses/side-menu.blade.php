<div class="flex flex-col flex-grow border-gray-200 pb-4 bg-white overflow-y-auto transition-colors ">
    <div class="flex-grow flex flex-col">
        <nav class="flex-1 px-7 space-y-1 bg-white transition-colors  pt-1" aria-label="Sidebar" x-data>
            {{-- <div>--}}
                {{--
                <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->--}}
                {{-- <a href="#" --}} {{--
                    class="bg-gray-100 text-gray-900 group w-full flex items-center pl-2 py-2 text-sm font-medium rounded-md transition-colors  ">--}}
                    {{--
                    <!----}}
            {{--                      Heroicon name: outline/home--}}

            {{--                      Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"--}}
            {{--                    -->--}}
                    {{-- @include('homes.social.layouts.partials.svg-icons.fi-rr-graduation-cap', ['svgClass'=>'mr-3
                    flex-shrink-0 h-6 w-6'])--}}
                    {{-- --}}{{-- <svg class="mr-3 flex-shrink-0 h-6 w-6" --}} {{-- --}}{{--
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" --}} {{-- --}}{{--
                        stroke="currentColor" aria-hidden="true">--}}
                        {{-- --}}{{--
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" --}} {{-- --}}{{--
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        --}}
                        {{-- --}}{{--
                    </svg>--}}
                    {{-- {{__('Courses')}}--}}
                    {{--
                </a>--}}
                {{--
            </div>--}}

            {{-- <div class="space-y-1" id="browseCourses" x-data="{open:false}">--}}
                <div class="space-y-1" id="browseCourses"
                    x-data="{open:{{\Route::currentRouteName()=='courses'?'true':'false'}}}">
                    <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                    @include('homes.social.layouts.partials.courses.components.courses-button',[
                    'text'=>'Browse Courses',
                    'icon'=>'svg-icons.fi-sr-graduation-cap',
                    'isActive'=>true,
                    'link'=>'team'
                    ])
                    <!-- Expandable link section, show/hide based on state. -->
                    <div {{-- x-transition:enter="transition ease-out duration-100" --}} {{--
                        x-transition:enter-start="transform opacity-0 scale-95" --}} {{--
                        x-transition:enter-end="transform opacity-100 scale-100" --}} {{--
                        x-transition:leave="transition ease-in duration-75" --}} {{--
                        x-transition:leave-start="transform opacity-100 scale-100" --}} {{--
                        x-transition:leave-end="transform opacity-0 scale-95" --}} {{--
                        x-transition:enter="transition ease-in-out duration-300 transform" --}} {{--
                        x-transition:enter-start="-translate-x-full" --}} {{-- x-transition:enter-end="translate-x-0"
                        --}} {{-- x-transition:leave="transition ease-in-out duration-300 transform" --}} {{--
                        x-transition:leave-start="translate-x-0" --}} {{-- x-transition:leave-end="-translate-x-full"
                        --}} class="space-y-1" id="sub-menu-1" x-show="open" x-cloak x-collapse>
                        {{-- <a href="#" --}} {{--
                            class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">--}}
                            {{-- Overview </a>--}}

                        {{-- <a href="#" --}} {{--
                            class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">--}}
                            {{-- Members </a>--}}

                        {{-- <a href="#" --}} {{--
                            class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">--}}
                            {{-- Calendar </a>--}}

                        {{-- <a href="#" --}} {{--
                            class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">--}}
                            {{-- Settings </a>--}}


                        <livewire:courses-filters-sidemenu />


                    </div>
                </div>

          

        </nav>
    </div>
</div>
<script>
    function test() {
        console.log('test1');
        console.log('test2');
                                                                        this.$el.checked=!$el.checked;
                                                                        this.$refs.categoriesForm.submit();
    }
</script>