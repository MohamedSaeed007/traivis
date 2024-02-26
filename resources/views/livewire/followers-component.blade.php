<div class="w-full">
    <!-- dash Content -->
    <div class="flex w-full flex-col px-4 sm:px-6 lg:px-8">

        <!--head-->
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">My Followers</h1>
                <p class="mt-2 text-sm text-gray-700"></p>
            </div>
        </div>
        <!--END header-->

        <!--content-->
        <section class="">
            <div class="container mx-auto">

                <div class="w-full mx-auto container max-w-4xl">
                    <ul class="grid md:grid-cols-2 grid-cols-1 gap-x-5" role="list">

                        @forelse($followers as $key => $follower)
                            <li class="px-4 py-2 flex flex-row items-center w-full transition-all rounded-sm hover:shadow-md hover:border-l-4 hover:border-traivis-500 hover:bg-traivis-50">
                                <img alt="" class="h-14 w-14 rounded-full bg-cover"
                                     src="{{ $follower['follower']['avatar'] }}">
                                <div class="ml-3 flex-1 space-y-1">
                                    <p class="text-sm font-medium text-gray-900">{{$follower['follower']['user_name']}}</p>
                                    <p class="text-sm text-gray-500">{{ $follower['follower']['user_email'] }}</p>
                                    <div class="text-sm text-gray-500 group relative">
                                        <p>{{$follower['follower']['post_views_count'] + $follower['follower']['course_views_count']}}
                                            views</p>
                                        <div
                                                class="z-10 hidden absolute shadow-md group-hover:block flex flex-col items-center border rounded-lg space-y-2 p-2 text-sm font-semibold bg-white">
                                            @foreach($follower['courses'] as $c => $course)
                                                <a href="{{ route('course',$course['slug']) }}"
                                                   class="flex justify-between items-center">
                                            <span class="flex flex-row items-center">
                                                <svg fill="currentColor" class="h-4 w-4" id="Layer_1" height="512"
                                                     viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"
                                                     data-name="Layer 1">
                                                    <path
                                                            d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"/>
                                                </svg>
                                                <p class="px-2 truncate w-40">{{$course['title']}}
                                                </p>
                                            </span>
                                                    <p class="text-base px-2 rounded-full border text-white bg-traivis-500 ">
                                                        {{ $course['views_count'] }}
                                                    </p>
                                                </a>
                                            @endforeach
                                            @foreach($follower['posts'] as $p => $post)
                                                <a href="{{ route('post.show',$p) }}"
                                                   class="flex justify-between items-center">
                                            <span class="flex flex-row items-center">
                                                @if ($post['type'] == 'blog')
                                                    <svg fill="currentColor" class="h-4 w-4"
                                                         xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                         viewBox="0 0 24 24"
                                                         width="512" height="512">
                                                    <path
                                                            d="M18,19v4.7a4.968,4.968,0,0,0,1.879-1.164l2.656-2.658A4.954,4.954,0,0,0,23.7,18H19A1,1,0,0,0,18,19Z">
                                                    </path>
                                                    <path
                                                            d="M7.172,13.828A4,4,0,0,0,6,16.657V18H7.343a4,4,0,0,0,2.829-1.172L21.5,5.5a2.121,2.121,0,0,0-3-3Z">
                                                    </path>
                                                    <path
                                                            d="M24,4.952a4.087,4.087,0,0,1-1.08,1.962L11.586,18.243A5.961,5.961,0,0,1,7.343,20H6a2,2,0,0,1-2-2V16.657a5.957,5.957,0,0,1,1.758-4.242L17.086,1.086A4.078,4.078,0,0,1,19.037,0c-.013,0-.024,0-.037,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16V19a3,3,0,0,1,3-3h5V5C24,4.984,24,4.969,24,4.952Z">
                                                    </path>
                                                </svg>
                                                @endif
                                                @if ($post['type'] == 'note' || $post['type'] == 'course')
                                                    <svg fill="currentColor" class="h-4 w-4"
                                                         xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                         data-name="Layer 1"
                                                         viewBox="0 0 24 24" width="512" height="512">
                                                    <path
                                                            d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                                                    </path>
                                                </svg>
                                                @endif
                                                @if ($post['type'] == 'hint')
                                                    <svg fill="currentColor" class="h-4 w-4"
                                                         xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                         viewBox="0 0 24 24"
                                                         width="512" height="512">
                                                    <path
                                                            d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                                                    </path>
                                                </svg>
                                                @endif
                                                <p class="px-2 truncate w-40">{{$post['title']}}
                                                </p>
                                            </span>
                                                    <p class="text-base px-2 rounded-full border text-white bg-traivis-500 ">
                                                        {{ $post['views_count'] }}
                                                    </p>
                                                </a>
                                            @endforeach
                                            {{--@if ($showMore[$key]==null)
                                            <a href="" wire:click.prevent="$set('showMore.{{ $key }}',1)"
                                                class="flex justify-between items-center">
                                                <span class="flex flex-row items-center">
                                                    <p class="px-2 truncate w-40">
                                                        Show More
                                                    </p>
                                                </span>
                                            </a>
                                            @endif--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 pr-2">
                                    <a type="button"
                                       href="{{route('chat-conversations',['id'=>$follower['follower']['id'],'type'=>'p'])}}"
                                       class="group transition-all inline-flex justify-end px-2 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-full text-gray-500 bg-white hover:bg-traivis-500 hover:text-white focus:bg-traivis-500 focus:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500 ">
                                        <svg class="h-5 w-5 group-hover:hidden group-focus:hidden" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                             viewBox="0 0 24 24" width="512" height="512">
                                            <path
                                                    d="M24,16v5a3,3,0,0,1-3,3H16a8,8,0,0,1-6.92-4,10.968,10.968,0,0,0,2.242-.248A5.988,5.988,0,0,0,16,22h5a1,1,0,0,0,1-1V16a5.988,5.988,0,0,0-2.252-4.678A10.968,10.968,0,0,0,20,9.08,8,8,0,0,1,24,16ZM17.977,9.651A9,9,0,0,0,8.349.023,9.418,9.418,0,0,0,0,9.294v5.04C0,16.866,1.507,18,3,18H8.7A9.419,9.419,0,0,0,17.977,9.651Zm-4.027-5.6a7.018,7.018,0,0,1,2.032,5.46A7.364,7.364,0,0,1,8.7,16H3c-.928,0-1-1.275-1-1.666V9.294A7.362,7.362,0,0,1,8.49,2.018Q8.739,2,8.988,2A7.012,7.012,0,0,1,13.95,4.051Z"/>
                                        </svg>
                                        <svg class="h-5 w-5 hidden group-hover:block group-focus:block"
                                             fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                             viewBox="0 0 24 24" width="512" height="512">
                                            <path
                                                    d="M8.7,18H3c-1.493,0-3-1.134-3-3.666V9.294A9.418,9.418,0,0,1,8.349.023a9,9,0,0,1,9.628,9.628A9.419,9.419,0,0,1,8.7,18ZM20,9.08h-.012c0,.237,0,.474-.012.712C19.59,15.2,14.647,19.778,9.084,19.981l0,.015A8,8,0,0,0,16,24h5a3,3,0,0,0,3-3V16A8,8,0,0,0,20,9.08Z"/>
                                        </svg>
                                    </a>
                                    <button type="button" wire:click="block({{ $follower['follower']['id'] }})"
                                      
                                       class="group transition-all inline-flex justify-end px-2 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-full text-gray-500 bg-white hover:bg-traivis-500 hover:text-white focus:bg-traivis-500 focus:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500 ">
                                        block
                                    </button>
                                </div>
                            </li>
                            @empty
                            <p>No follwers</p>
                        @endforelse
                    </ul>
                </div>

            </div>
        </section>
        <!--End content-->


    </div>
    <!-- dash Content -->
</div>
