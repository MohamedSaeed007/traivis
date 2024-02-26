<div >
    <form  wire:submit.prevent='save'>

   
    <!------- Close / Save ----------->
    <div class="pt-4 pr-2 sm:pr-4 absolute -ml-32 justify-center justify-evenly">

        <button @click="privacy = false" type="button" class="group justify-center px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-full text-gray-700 bg-white hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500 transition-colors inline-flex py-2 -mt-3 w-15 w-20">
            <span>Close</span>
        </button>

        <div @click="privacy = false" class="mt-6 space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
            <button class="group justify-center px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-full text-gray-700 bg-white hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500 transition-colors   inline-flex py-2 -mt-3 w-20">
                <span>Save</span>
            </button>
        </div>

    </div>
    <!-------END Close / Save ----------->


    <!-------Profile name----------->
    <div class="">
        <h2 class="my-3 text-2xl text-gray-500 font-bold w-full truncate transition-colors    flex" id="slide-over-title">{{ $user->name }}</h2>
    </div>
    <!------END-Profile name----------->


    <!------- General Privacy section ----------->
    <div x-data="{collapse: true}" class="">

        <!--Collapse button-->
        <dt class="leading-7 bg-white z-10">
            <button type="button" @click="collapse = !collapse" class="text-left w-full flex justify-between items-start focus:outline-none focus:text-gray-900 border-b border-gray-200 justify-center transition-colors bg-white  hover:border-gray-500 hover:text-gray-700 group group-hover:text-gray-700 ">
                <span class="border-transparent text-gray-500 group inline-flex items-center py-4 px-1 transition-colors   font-bold group-hover:text-gray-700 text-lg ">
                    General Privacy Settings
                </span>
                <span class="ml-6 h-7 flex items-center">
                    <svg :class="collapse ? 'rotate-0' : '-rotate-90'" class="h-6 w-6 transform mt-10 text-lg font-bold text-gray-500 group-hover:text-gray-700 transition-all   rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></span>
            </button>
        </dt>
        <!--/Collapse button-->

        <!--Collapse Content-->
        <div x-show="collapse" class="" x-transition:enter="transition " x-transition:enter-start="transform scale-y-0 " x-transition:enter-end="transform scale-y-100 " x-transition:leave="transition" x-transition:leave-start="transform scale-y-100 " x-transition:leave-end="transform scale-y-0 ">

            <!---------option --------------->
            <li x-data="{enabled: @entangle('privacy.general_account_privacy')}" class="flex items-center justify-between px-4 py-2">

                <!---label--->
                <div class="flex flex-col">
                    <p class="font-bold transition-colors block text-gray-500  text-base">Account
                        Privacy </p>
                    <p class="text-sm text-gray-500">Keep My Profile Private. Only My Connections Can See The Profile
                        Public Details </p>
                </div>

                <!---buttons--->
                <button type="button" @click="enabled = !enabled" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                    <span class="sr-only">setting</span>
                    <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled &amp;&amp; 'translate-x-5'"></span>
                </button>
                <!---/buttons--->
            </li>
            <!---------option --------------->
            <li x-data="{enabled:  @entangle('privacy.general_profile_picture_visibility')}" class="flex items-center justify-between px-4 py-2">

                <!---label--->
                <div class="flex flex-col">
                    <p class="font-bold transition-colors block text-gray-500  text-base">Profile
                        Picture Visibility </p>
                    <p class="text-sm text-gray-500">Keep My Profile Picture Private. Only My Connection Can See It</p>
                </div>

                <!---buttons--->
                <button type="button" @click="enabled = !enabled" type="button" class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                    <span class="sr-only"> setting</span>
                    <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled &amp;&amp; 'translate-x-5'"></span>
                </button>
                <!---/buttons--->
            </li>
            <!---------option --------------->
            <li x-data="{enabled: @entangle('privacy.general_comments')}" class="flex items-center justify-between py-2 px-4">

                <!---label--->
                <div class="flex flex-col">
                    <p class="font-bold transition-colors block text-gray-500  text-base" id="privacy-option-label-3">Comments</p>
                    <p class="text-sm text-gray-500" id="privacy-option-description-3">Restrict The Comments On My Hints
                        And Notes.</p>
                </div>

                <!---buttons--->
                <button type="button" @click="enabled = !enabled" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                    <span class="sr-only"> setting</span>
                    <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled &amp;&amp; 'translate-x-5'"></span>
                </button>
                <!---/buttons--->
            </li>
            <!---------option --------------->
            {{--  <li x-data="{enabled: @entangle('privacy.general_mentions')}" class="flex items-center justify-between py-2 px-4">

                <!---label--->
                <div class="flex flex-col">
                    <p class="font-bold transition-colors block text-gray-500  text-base" id="privacy-option-label-4">Mentions</p>
                    <p class="text-sm text-gray-500" id="privacy-option-description-4">Restrict Tagging And Mentioning
                        My Profile In The Conversations, Article, Hints And Notes</p>
                </div>

                <!---buttons--->
                <button type="button" @click="enabled = !enabled" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                    <span class="sr-only"> setting</span>
                    <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled &amp;&amp; 'translate-x-5'"></span>
                </button>
                <!---/buttons--->
            </li>  --}}
            <!---------option --------------->
            <li class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                <!---label--->
                <div class="">
                    <p class="font-bold block text-base">Enrolled Courses</p>
                </div>


                <!---buttons--->
                <div x-data="{enabled: @entangle('privacy.general_enrolled_courses')}">
                    <div  class="flex flex-row justify-between items-center my-2">
                        <p class="text-sm">Show to Public</p>

                        <button type="button" @click="enabled = 'public'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'public' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                            <span class="sr-only"> setting</span>
                            <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'public' ? 'translate-x-5':''"></span>
                        </button>
                    </div>


                    <div class="flex flex-row justify-between items-center my-2">
                        <p class="text-sm">My Connections (Only)</p>

                        <button @click="enabled = 'connections'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'connections' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                            <span class="sr-only"> setting</span>
                            <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'connections' ?'translate-x-5':''"></span>
                        </button>
                    </div>


                    <div  class="flex flex-row justify-between items-center my-2">
                        <p class="text-sm">Me (Only)</p>

                        <button @click="enabled = 'me'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'me' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                            <span class="sr-only"> setting</span>
                            <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'me' ? 'translate-x-5':''"></span>
                        </button>
                    </div>
                </div>

                <div x-data="{enabled: false}" class="flex flex-row justify-between items-center">
                    <p class="text-sm">Create a Link for Sharing The Analytics Privately </p>

                    <button @click="enabled = !enabled" type="button" class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled &amp;&amp; 'bg-traivis-500'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled &amp;&amp; 'translate-x-5'"></span>
                    </button>
                </div>
                <!---/buttons--->

                <!---option link--->
                <div class="group flex items-center justify-between text-sm text-gray-400 hover:text-gray-700 border border-gray-200 rounded-full">
                    <div class="w-0 flex-1 flex items-center">
                        <svg class="flex-shrink-0 h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                        </svg><span class="ml-2 flex-1 w-0 truncate"> link here </span>
                    </div>

                    <div class="flex items-center rounded-full px-1 border border-gray-400 group-hover:border-gray-400 ">
                        <a href="#" class="text-base mr-3">Copy</a>
                        <svg class="flex-shrink-0 h-4 w-4" fill="currentColor" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                            <path d="m15 20h-10a5.006 5.006 0 0 1 -5-5v-10a5.006 5.006 0 0 1 5-5h10a5.006 5.006 0 0 1 5 5v10a5.006 5.006 0 0 1 -5 5zm-10-18a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-10a3 3 0 0 0 -3-3zm19 17v-13a1 1 0 0 0 -2 0v13a3 3 0 0 1 -3 3h-13a1 1 0 0 0 0 2h13a5.006 5.006 0 0 0 5-5z">
                            </path>
                        </svg>
                    </div>
                </div>

            </li>
            <!---------option --------------->
            {{--  <li class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                <!---label--->
                <div class="">
                    <p class="font-bold block text-base">Analytics</p>
                </div>

                <div x-data="{enabled: @entangle('privacy.general_analytics')}">
                <!---buttons--->
                <div  class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Show to Public</p>

                    <button @click="enabled = 'public'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'public' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'public' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div  class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">My Connections (Only)</p>

                    <button @click="enabled = 'connections'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'connections' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'connections' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div  class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Me (Only)</p>

                    <button @click="enabled = 'me'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled  == 'me' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled  == 'me' ? 'translate-x-5':''"></span>
                    </button>
                </div>
                </div>

                <div x-data="{enabled: false}" class="flex flex-row justify-between items-center">
                    <p class="text-sm">Create a Link for Sharing The Analytics Privately </p>

                    <button @click="enabled = !enabled" type="button" class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled ? 'bg-traivis-500' :'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled &amp;&amp; 'translate-x-5'"></span>
                    </button>
                </div>
                <!---/buttons--->

                <!---option link--->
                <div class="group flex items-center justify-between text-sm text-gray-400 hover:text-gray-700 border border-gray-200 rounded-full">
                    <div class="w-0 flex-1 flex items-center">
                        <svg class="flex-shrink-0 h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                        </svg><span class="ml-2 flex-1 w-0 truncate"> link here </span>
                    </div>

                    <div class="flex items-center rounded-full px-1 border border-gray-400 group-hover:border-gray-400 ">
                        <a href="#" class="text-base mr-3">Copy</a>
                        <svg class="flex-shrink-0 h-4 w-4" fill="currentColor" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                            <path d="m15 20h-10a5.006 5.006 0 0 1 -5-5v-10a5.006 5.006 0 0 1 5-5h10a5.006 5.006 0 0 1 5 5v10a5.006 5.006 0 0 1 -5 5zm-10-18a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-10a3 3 0 0 0 -3-3zm19 17v-13a1 1 0 0 0 -2 0v13a3 3 0 0 1 -3 3h-13a1 1 0 0 0 0 2h13a5.006 5.006 0 0 0 5-5z">
                            </path>
                        </svg>
                    </div>
                </div>

            </li>  --}}
            <!---------option --------------->
            {{--  <li x-data="{enabled: false}" class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                <!---label--->
                <div class="">
                    <p class="font-bold block text-base">Business Environment</p>
                </div>


                <!---buttons--->
                <div x-data="{enabled: @entangle('privacy.general_business_env')}">
                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Show to Public</p>

                    <button @click="enabled = 'public'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'public' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'public' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">My Connections (Only)</p>

                    <button @click="enabled = 'connections'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'connections' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'connections' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Me (Only)</p>

                    <button @click="enabled = 'me'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'me' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'me' ? 'translate-x-5':''"></span>
                    </button>
                </div>
                </div>

                <div x-data="{enabled: false}" class="flex flex-row justify-between items-center">
                    <p class="text-sm">Create a Link for Sharing The Analytics Privately </p>

                    <button @click="enabled = !enabled" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled ? 'bg-traivis-500': 'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled &amp;&amp; 'translate-x-5'"></span>
                    </button>
                </div>
                <!---/buttons--->

                <!---option link--->
                <div class="group flex items-center justify-between text-sm text-gray-400 hover:text-gray-700 border border-gray-200 rounded-full">
                    <div class="w-0 flex-1 flex items-center">
                        <svg class="flex-shrink-0 h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                        </svg><span class="ml-2 flex-1 w-0 truncate"> link here </span>
                    </div>

                    <div class="flex items-center rounded-full px-1 border border-gray-400 group-hover:border-gray-400 ">
                        <a href="#" class="text-base mr-3">Copy</a>
                        <svg class="flex-shrink-0 h-4 w-4" fill="currentColor" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                            <path d="m15 20h-10a5.006 5.006 0 0 1 -5-5v-10a5.006 5.006 0 0 1 5-5h10a5.006 5.006 0 0 1 5 5v10a5.006 5.006 0 0 1 -5 5zm-10-18a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-10a3 3 0 0 0 -3-3zm19 17v-13a1 1 0 0 0 -2 0v13a3 3 0 0 1 -3 3h-13a1 1 0 0 0 0 2h13a5.006 5.006 0 0 0 5-5z">
                            </path>
                        </svg>
                    </div>
                </div>

            </li>  --}}
            <!---------option --------------->
            <li class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                <!---label--->
                <div class="">
                    <p class="font-bold block text-base">Rewards Deals</p>
                </div>

                <div x-data="{enabled: @entangle('privacy.general_rewards_deals')}">
                <!---buttons--->
                <div  class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Show to Public</p>

                    <button @click="enabled = 'public'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'public' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'public' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">My Connections (Only)</p>

                    <button @click="enabled = 'connections'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'connections' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'connections' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Me (Only)</p>

                    <button @click="enabled = 'me'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled  == 'me' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled  == 'me' ? 'translate-x-5':''"></span>
                    </button>
                </div>
                </div>

                <div x-data="{enabled: false}" class="flex flex-row justify-between items-center">
                    <p class="text-sm">Create a Link for Sharing The Analytics Privately </p>

                    <button @click="enabled = !enabled" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled ? 'bg-traivis-500' :'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled &amp;&amp; 'translate-x-5'"></span>
                    </button>
                </div>
                <!---/buttons--->

                <!---option link--->
                <div class="group flex items-center justify-between text-sm text-gray-400 hover:text-gray-700 border border-gray-200 rounded-full">
                    <div class="w-0 flex-1 flex items-center">
                        <svg class="flex-shrink-0 h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                        </svg><span class="ml-2 flex-1 w-0 truncate"> link here </span>
                    </div>

                    <div class="flex items-center rounded-full px-1 border border-gray-400 group-hover:border-gray-400 ">
                        <a href="#" class="text-base mr-3">Copy</a>
                        <svg class="flex-shrink-0 h-4 w-4" fill="currentColor" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                            <path d="m15 20h-10a5.006 5.006 0 0 1 -5-5v-10a5.006 5.006 0 0 1 5-5h10a5.006 5.006 0 0 1 5 5v10a5.006 5.006 0 0 1 -5 5zm-10-18a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-10a3 3 0 0 0 -3-3zm19 17v-13a1 1 0 0 0 -2 0v13a3 3 0 0 1 -3 3h-13a1 1 0 0 0 0 2h13a5.006 5.006 0 0 0 5-5z">
                            </path>
                        </svg>
                    </div>
                </div>

            </li>

        </div>
        <!--/Collapse Content-->

    </div>
    <!-------END General Privacy section ----------->




    <!------- Connections & Messages section----------->
    <div x-data="{collapse: false}" class="">

        <!--Collapse button-->
        <dt class="leading-7 bg-white z-10">
            <button type="button" @click="collapse = !collapse" class="text-left w-full flex justify-between items-start focus:outline-none focus:text-gray-900 border-b border-gray-200 justify-center transition-colors bg-white  hover:border-gray-500 hover:text-gray-700 group group-hover:text-gray-700 ">
                <span class="border-transparent text-gray-500 group inline-flex items-center py-4 px-1 transition-colors   font-bold group-hover:text-gray-700 text-lg ">
                    My Connections &amp; Messages
                </span>
                <span class="ml-6 h-7 flex items-center">
                    <svg :class="collapse ? 'rotate-0' : '-rotate-90'" class="h-6 w-6 transform mt-10 text-lg font-bold text-gray-500 group-hover:text-gray-700 transition-all   -rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></span>
            </button>
        </dt>
        <!--/Collapse button-->

        <!--Collapse Content-->
        <div x-show="collapse" class="" x-transition:enter="transition " x-transition:enter-start="transform scale-y-0 " x-transition:enter-end="transform scale-y-100 " x-transition:leave="transition" x-transition:leave-start="transform scale-y-100 " x-transition:leave-end="transform scale-y-0 " style="display: none;" wfd-invisible="true">

            <!---------option --------------->
            <li class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                <!---label--->
                <div class="">
                    <p class="font-bold block text-base">My Connections Visibilities</p>
                </div>

                <div x-data="{enabled: @entangle('privacy.connections_visibility')}">
                
                <!---buttons--->
                <div  class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Show to Public</p>

                    <button @click="enabled = 'public'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'public' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'public' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">My Connections (Only)</p>

                    <button @click="enabled = 'connections'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'connections' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'connections' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Me (Only)</p>

                    <button @click="enabled = 'me'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'me' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'me' ? 'translate-x-5':''"></span>
                    </button>
                </div>
                <!---/buttons--->
                </div>

            </li>
            <!---------option --------------->
            <li x-data="{enabled: false}" class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                <!---label--->
                <div class="">
                    <p class="font-bold block text-base">Blocked Connections</p>
                </div>

                <div x-data="{enabled: @entangle('privacy.connections_block')}">

                
                <!---buttons--->
                <div  class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Show to Public</p>

                    <button @click="enabled = 'public'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'public' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'public' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">My Connections (Only)</p>

                    <button @click="enabled = 'connections'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'connections' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'connections' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Me (Only)</p>

                    <button @click="enabled = 'me'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'me' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'me' ? 'translate-x-5':''"></span>
                    </button>
                </div>
                <!---/buttons--->
                </div>

            </li>

        </div>
        <!--/Collapse Content-->
    </div>
    <!-------END Connections & Messages section----------->





    <!------- Social Activities section ----------->
    <div x-data="{collapse: false}" class="">

        <!--Collapse button-->
        <dt class="leading-7 bg-white z-10">
            <button type="button" @click="collapse = !collapse" class="text-left w-full flex justify-between items-start focus:outline-none focus:text-gray-900 border-b border-gray-200 justify-center transition-colors bg-white  hover:border-gray-500 hover:text-gray-700 group group-hover:text-gray-700 ">
                <span class="border-transparent text-gray-500 group inline-flex items-center py-4 px-1 transition-colors   font-bold group-hover:text-gray-700 text-lg ">
                    My Social Activities
                </span>
                <span class="ml-6 h-7 flex items-center">
                    <svg :class="collapse ? 'rotate-0' : '-rotate-90'" class="h-6 w-6 transform mt-10 text-lg font-bold text-gray-500 group-hover:text-gray-700 transition-all   -rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></span>
            </button>
        </dt>
        <!--/Collapse button-->

        <!--Collapse Content-->
        <div x-show="collapse" class="" x-transition:enter="transition " x-transition:enter-start="transform scale-y-0 " x-transition:enter-end="transform scale-y-100 " x-transition:leave="transition" x-transition:leave-start="transform scale-y-100 " x-transition:leave-end="transform scale-y-0 " style="display: none;" wfd-invisible="true">

            <!---------option --------------->
            <li class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                <!---label--->
                <div class="">
                    <p class="font-bold block text-base">My Notes</p>
                </div>

                <div x-data="{enabled: @entangle('privacy.social_notes')}">
                
                <!---buttons--->
                <div  class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Show to Public</p>

                    <button @click="enabled = 'public'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'public' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'public' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">My Connections (Only)</p>

                    <button @click="enabled = 'connections'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'connections' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'connections' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Me (Only)</p>

                    <button @click="enabled = 'me'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'me' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'me' ? 'translate-x-5':''"></span>
                    </button>
                </div>
                <!---/buttons--->
                </div>

            </li>
            <!---------option --------------->
            <li class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                <!---label--->
                <div class="">
                    <p class="font-bold block text-base">My Hints</p>
                </div>

                <div x-data="{enabled: @entangle('privacy.social_hints')}">
                
                <!---buttons--->
                <div  class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Show to Public</p>

                    <button @click="enabled = 'public'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'public' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'public' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">My Connections (Only)</p>

                    <button @click="enabled = 'connections'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'connections' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'connections' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center my-2">
                    <p class="text-sm">Me (Only)</p>

                    <button @click="enabled = 'me'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'me' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'me' ? 'translate-x-5':''"></span>
                    </button>
                </div>
                <!---/buttons--->
                </div>

            </li>
            <!---------option --------------->
            <li class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                <!---label--->
                <div class="">
                    <p class="font-bold block text-base">My Blogs</p>
                </div>

                <div x-data="{enabled: @entangle('privacy.social_blogs')}">
                
                <!---buttons--->
                <div  class="flex flex-row justify-between items-center">
                    <p class="text-sm">Show to Public</p>

                    <button @click="enabled =  'public'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'public' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'public' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center">
                    <p class="text-sm">My Connections (Only)</p>

                    <button @click="enabled ='connections' " type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'connections' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'connections' ? 'translate-x-5':''"></span>
                    </button>
                </div>


                <div class="flex flex-row justify-between items-center">
                    <p class="text-sm">Me (Only)</p>

                    <button @click="enabled ='me'" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled == 'me' ? 'bg-traivis-500':'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled == 'me' ? 'translate-x-5':''"></span>
                    </button>
                </div>
                <!---/buttons--->
                </div>

            </li>

        </div>
        <!--/Collapse Content-->

    </div>
    <!-------END Social Activities section ----------->





    <!------- TRAIML Algorithms section ----------->
    <div x-data="{collapse: false}" class="">

        <!--Collapse button-->
        <dt class="leading-7 bg-white z-10">
            <button type="button" @click="collapse = !collapse" class="text-left w-full flex justify-between items-start focus:outline-none focus:text-gray-900 border-b border-gray-200 justify-center transition-colors bg-white  hover:border-gray-500 hover:text-gray-700 group group-hover:text-gray-700 ">
                <div class="flex items-center">
                    <span class="border-transparent text-gray-500 group inline-flex items-center py-4 px-1 transition-colors   font-bold group-hover:text-gray-700 text-lg ">
                        TRAIML Algorithms
                    </span>
                    <span>
                        <svg fill="currentColor" class="w-5 h-5 ml-3 text-gray-500 hover:text-gray-700" viewBox="0 0 24 24" width="512" height="512">
                            <path d="M12.836,.028C9.361-.202,5.961,1.066,3.509,3.521,1.057,5.977-.211,9.378,.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.096,.454,12.836,.028Zm-.933,18.972c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5,.672,1.5,1.5-.672,1.5-1.5,1.5Zm1.928-6.512c-.521,.287-.928,.951-.928,1.512,0,.553-.448,1-1,1s-1-.447-1-1c0-1.285,.807-2.627,1.963-3.264,.763-.42,1.157-1.254,1.004-2.125-.138-.786-.81-1.458-1.596-1.596-.605-.107-1.196,.049-1.657,.435-.454,.382-.714,.94-.714,1.532,0,.553-.448,1-1,1s-1-.447-1-1c0-1.185,.521-2.301,1.428-3.063,.908-.762,2.107-1.078,3.289-.874,1.613,.283,2.938,1.607,3.221,3.221,.298,1.699-.509,3.396-2.009,4.223Z">
                            </path>
                        </svg>
                    </span>
                </div>
                <span class="ml-6 h-7 flex items-center">
                    <svg :class="collapse ? 'rotate-0' : '-rotate-90'" class="h-6 w-6 transform mt-10 text-lg font-bold text-gray-500 group-hover:text-gray-700 transition-all   -rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></span>
            </button>
        </dt>
        <!--/Collapse button-->

        <!--Collapse Content-->
        <div x-show="collapse" class="" x-transition:enter="transition " x-transition:enter-start="transform scale-y-0 " x-transition:enter-end="transform scale-y-100 " x-transition:leave="transition" x-transition:leave-start="transform scale-y-100 " x-transition:leave-end="transform scale-y-0 " style="display: none;" wfd-invisible="true">

            <!---------options part--------------->
            <li class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                <!---label--->
                <div class="">
                    <p class="font-bold block text-base">* TRAIVIS Artificial Intelligence- Machine Learning
                        Algorithms </p>
                </div>


                <!---buttons--->
                <div x-data="{enabled: @entangle('privacy.traiml_algorithms')}" class="flex flex-row justify-between items-center">
                    <p class="text-sm">Disable TRAIML Algorithms (T &amp; C Applied)
                        <span>For Accurate Results, We Recommend Not to Disable TRAIML Algorithms</span>
                    </p>

                    <button @click="enabled = !enabled" type="button" class=" relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500" :class="enabled ? 'bg-traivis-500' : 'bg-gray-200'" role="switch" aria-checked="false">
                        <span class="sr-only"> setting</span>
                        <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200" :class="enabled &amp;&amp; 'translate-x-5'"></span>
                    </button>
                </div>


            </li>

        </div>
        <!--/Collapse Content-->

    </div>
    <!-------END TRAIML Algorithms section ----------->
</form>

</div>
