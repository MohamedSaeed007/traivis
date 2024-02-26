<div>
    @forelse ($user->posts as $post)
        <ul role="list" class="space-y-4">
            <li class="mb-20 bg-white p-4 transition-colors  sm:rounded-lg drop-shadow-[0_1px_1px_rgba(0,0,0,0.15)]">
                <article aria-labelledby="question-title-81614">
                    <!--------- feed part--------->
                    <div>

                        <!---------feed header--------->
                        <div class="flex space-x-3">

                            <div class="relative">
                                <!-- User Avatar -->
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>
                                <!-- Online Status Dot -->
                                <div class="absolute -right-3 bottom-5 h-5 w-5 rounded-full border-4 border-white bg-green-400 sm:invisible sm:top-2 md:visible"
                                    title="User is online"></div>
                            </div>

                            <div class="min-w-0 flex-1">
                                <div class="flex h-8 flex-row">
                                    <!-- Username -->
                                    <a href="https://github.com/EgoistDeveloper/" target="_blank">
                                        <h2 class="text-lg font-semibold">{{ $user->name }}</h2>
                                    </a>

                                    <!-- User Verified -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        class="my-auto ml-2 h-5 text-traivis-500" width="24"
                                        height="24" viewbox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="text-sm text-gray-500">
                                    <a href="#" class="hover:underline">
                                        <time
                                            datetime="2020-12-09T11:43:00">{{ $post->created_at }}</time>
                                    </a>
                                </p>
                            </div>

                            <!--------- feed Dropdown--------->
                            <div class="flex flex-shrink-0 self-center">
                                <div class="relative inline-block text-left">

                                    <!--- Dropdown button---->
                                    <div>
                                        <button id="post-menu-button" type="button"
                                            class="-m-2 flex items-center rounded-full p-2 text-gray-400 hover:text-gray-600"
                                            aria-expanded="false" aria-haspopup="true">
                                            <span class="sr-only">Open options</span>
                                            <!-- Heroicon name: solid/dots-vertical -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                viewbox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <!---END Dropdown button---->

                                    <!--
                                                      Dropdown menu, show/hide based on menu state.
                                                      Entering: "transition ease-out duration-100"
                                                      From: "transform opacity-0 scale-95"
                                                      To: "transform opacity-100 scale-100"
                                                      Leaving: "transition ease-in duration-75"
                                                      From: "transform opacity-100 scale-100"
                                                      To: "transform opacity-0 scale-95"  -->

                                    <!--- Dropdown content ---->

                                    <div id="post-dropdown"
                                        class="absolute right-0 mt-2 hidden w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 transition-colors focus:outline-none "
                                        role="menu" aria-orientation="vertical"
                                        aria-labelledby="options-menu-0-button" tabindex="-1">

                                        <div class="py-1" role="none">

                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->

                                            <a href="#"
                                                class="flex px-4 py-2 text-sm text-gray-700"
                                                role="menuitem" tabindex="-1"
                                                id="options-menu-0-item-1">
                                                <!-- Heroicon name: solid/code -->
                                                <svg class="mr-3 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 20 20" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span>Embed</span>
                                            </a>
                                            <a href="#"
                                                class="flex px-4 py-2 text-sm text-gray-700"
                                                role="menuitem" tabindex="-1"
                                                id="options-menu-0-item-2">
                                                <!-- Heroicon name: solid/flag -->
                                                <svg class="mr-3 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 20 20" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span>Report content</span>
                                            </a>
                                        </div>

                                    </div>
                                    <!---END Dropdown content ---->

                                </div>
                            </div>
                            <!---END feed Dropdown ---->

                        </div>
                        <!---------END feed header--------->

                        <!--------- feed content--------->
                        <h2 id="question-title-81614"
                            class="py-4 text-lg font-medium text-gray-900   wo break-words">
                            {{ $post->post_content }} </h2>
                        <div
                            class="w-full rounded-lg bg-slate-100 shadow-md transition-colors  ">
                            <a href="#" class="">
                                <img class=""
                                    src="https://static.shuffle.dev/uploads/files/c9/c9b13f1e0b524ac382ae7f04346f27f35d7ed86f/277115884-501974324884451-1513276597889860700-n.jpg"
                                    alt="product image"></a>
                        </div>

                        <!---------END feed content--------->

                    </div>
                    <!---------END feed part--------->

                    <!--------- START Engagement part --------->
                    <div
                        class="mb-5 flex flex-col justify-items-center border-b-2 border-gray-200">
                        <div class="flex items-center justify-between justify-items-center p-3 gap-x-8 text-gray-400">

                            <span class="inline-flex items-center gap-x-8 text-sm">
                                <button type="button"
                            
                                    wire:click.prevent="likeToParentPost({{ $post->id }})"
                                    class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                    <!-- Heroicon name: solid/thumb-up -->
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                        viewbox="0 0 24 24" width="512" height="512"
                                        fill="currentColor" aria-hidden="true" class="h-5 w-5">
                                        <path
                                            d="M22.773,7.721A4.994,4.994,0,0,0,19,6H15.011l.336-2.041A3.037,3.037,0,0,0,9.626,2.122L7.712,6H5a5.006,5.006,0,0,0-5,5v5a5.006,5.006,0,0,0,5,5H18.3a5.024,5.024,0,0,0,4.951-4.3l.705-5A5,5,0,0,0,22.773,7.721ZM2,16V11A3,3,0,0,1,5,8H7V19H5A3,3,0,0,1,2,16Zm19.971-4.581-.706,5A3.012,3.012,0,0,1,18.3,19H9V7.734a1,1,0,0,0,.23-.292l2.189-4.435A1.07,1.07,0,0,1,13.141,2.8a1.024,1.024,0,0,1,.233.84l-.528,3.2A1,1,0,0,0,13.833,8H19a3,3,0,0,1,2.971,3.419Z">
                                        </path>
                                    </svg>
                                    <span
                                        class="font-medium text-gray-900  ">{{ $post->likes->count() }}</span>
                                    <span class="sr-only">likes</span>
                                </button>

                                <button type="button"
                                    wire:click.prevent="disLikeToParentPost({{ $post->id }})"
                                    class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                    <!-- Heroicon name: solid/thumb-up -->
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                        viewbox="0 0 24 24" width="512" height="512"
                                        fill="currentColor" aria-hidden="true" class="h-5 w-5">
                                        <path
                                            d="M23.951,12.3l-.705-5A5.024,5.024,0,0,0,18.3,3H5A5.006,5.006,0,0,0,0,8v5a5.006,5.006,0,0,0,5,5H7.712l1.914,3.878a3.037,3.037,0,0,0,5.721-1.837L15.011,18H19a5,5,0,0,0,4.951-5.7ZM5,5H7V16H5a3,3,0,0,1-3-3V8A3,3,0,0,1,5,5Zm16.264,9.968A3,3,0,0,1,19,16H13.833a1,1,0,0,0-.987,1.162l.528,3.2a1.024,1.024,0,0,1-.233.84,1.07,1.07,0,0,1-1.722-.212L9.23,16.558A1,1,0,0,0,9,16.266V5h9.3a3.012,3.012,0,0,1,2.97,2.581l.706,5A3,3,0,0,1,21.264,14.968Z">
                                        </path>
                                    </svg><span
                                        class="font-medium text-gray-900  ">{{ $post->disLikes->count() }}</span>
                                    <span class="sr-only">dislikes</span>
                                </button>
                            </span>

                            <span class="inline-flex items-center gap-x-8 text-sm">
                                <button type="button"
                                @click="
                                comments = document.getElementById('{{strtolower(class_basename($post))}}-{{$post->id}}-comments')
                                if(comments.style.display=='none'){
                                    comments.style.display='block'
                                    
                                } 
                                else  comments.style.display='none'
                                
                                "
                                    class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                    <!-- Heroicon name: solid/chat-alt -->
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                        data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                        height="512" fill="currentColor" aria-hidden="true"
                                        class="h-5 w-5">
                                        <path
                                            d="M12.009,23.665c-.476,0-.955-.168-1.337-.507l-3.748-3.157h-2.923c-2.206,0-4-1.794-4-4V4C0,1.794,1.794,0,4,0H20c2.206,0,4,1.794,4,4v12c0,2.206-1.794,4-4,4h-2.852l-3.847,3.18c-.362,.322-.825,.484-1.293,.484ZM4,2c-1.103,0-2,.897-2,2v12c0,1.103,.897,2,2,2h3.289c.236,0,.464,.083,.645,.235l4.047,3.41,4.17-3.416c.18-.148,.405-.229,.638-.229h3.212c1.103,0,2-.897,2-2V4c0-1.103-.897-2-2-2H4Z">
                                        </path>
                                    </svg><span
                                        class="font-medium text-gray-900  ">{{ $post->comments->count() }}</span>
                                    <span class="sr-only">replies</span>
                                </button>

                                <button type="button"
                                    class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                    <!-- Heroicon name: solid/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                        id="Capa_1" x="0px" y="0px"
                                        viewbox="0 0 512.19 512.19"
                                        style="enable-background:new 0 0 512.19 512.19;"
                                        xml:space="preserve" width="512" height="512"
                                        fill="currentColor" aria-hidden="true" class="h-5 w-5">
                                        <g>
                                            <circle cx="256.095" cy="256.095" r="85.333">
                                            </circle>
                                            <path
                                                d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z">
                                            </path>
                                        </g>
                                    </svg><span
                                        class="font-medium text-gray-900  ">2.7k</span>
                                    <span class="sr-only">views</span>
                                </button>
                            </span>

                            <span class="inline-flex items-center text-sm ml-auto">
                                <button type="button"
                                    class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                    <!-- Heroicon name: solid/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                        viewbox="0 0 24 24" width="512" height="512"
                                        fill="currentColor" aria-hidden="true" class="h-5 w-5">
                                        <path
                                            d="M20.137,24a2.8,2.8,0,0,1-1.987-.835L12,17.051,5.85,23.169a2.8,2.8,0,0,1-3.095.609A2.8,2.8,0,0,1,1,21.154V5A5,5,0,0,1,6,0H18a5,5,0,0,1,5,5V21.154a2.8,2.8,0,0,1-1.751,2.624A2.867,2.867,0,0,1,20.137,24ZM6,2A3,3,0,0,0,3,5V21.154a.843.843,0,0,0,1.437.6h0L11.3,14.933a1,1,0,0,1,1.41,0l6.855,6.819a.843.843,0,0,0,1.437-.6V5a3,3,0,0,0-3-3Z">
                                        </path>
                                    </svg><span
                                        class="hidden font-medium text-gray-900  ">Save</span>
                                </button>
                            </span>

                            <span class="inline-flex items-center text-sm">
                                <button type="button"
                                    class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                    <!-- Heroicon name: solid/share -->
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                        viewbox="0 0 24 24" width="512" height="512"
                                        fill="currentColor" aria-hidden="true" class="h-5 w-5">
                                        <path
                                            d="M19.333,14.667a4.66,4.66,0,0,0-3.839,2.024L8.985,13.752a4.574,4.574,0,0,0,.005-3.488l6.5-2.954a4.66,4.66,0,1,0-.827-2.643,4.633,4.633,0,0,0,.08.786L7.833,8.593a4.668,4.668,0,1,0-.015,6.827l6.928,3.128a4.736,4.736,0,0,0-.079.785,4.667,4.667,0,1,0,4.666-4.666ZM19.333,2a2.667,2.667,0,1,1-2.666,2.667A2.669,2.669,0,0,1,19.333,2ZM4.667,14.667A2.667,2.667,0,1,1,7.333,12,2.67,2.67,0,0,1,4.667,14.667ZM19.333,22A2.667,2.667,0,1,1,22,19.333,2.669,2.669,0,0,1,19.333,22Z">
                                        </path>
                                    </svg><span
                                        class="hidden font-medium text-gray-900  ">Share</span>
                                </button>
                            </span>

                        </div>
                    </div>
                    <!--------- END Engagement part--------->

                    <livewire:comments :model="$post" />

                </article>
            </li>
        </ul>
    @empty
    @endforelse
</div>
