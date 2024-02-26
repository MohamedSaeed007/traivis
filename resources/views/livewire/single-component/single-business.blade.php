<div class=" w-[300px] bg-white items-center text-center mx-auto  mt-5 shadow-dashboard rounded-lg pt-3 border-t border-b-2 hover:bg-slate-50 hover:scale-[1.02] hover:border-traivis-500 group transition-all  ">
    <div class="py-2 px-3 flex items-center mb-[50px] justify-between text-xs font-bold group-hover:text-indigo-500 transition-colors  text-gray-400 ">
        <!-- Heroicon name: outline/fire -->
        <div class=" flex flex-row justify-start items-center ">
            <span class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-indigo-500" id="Layer_1"
                     data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
                    <path
                            d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z"/>
                </svg>
            </span>
            <span class="rounded-full p-1 bg-green-500 text-white ml-2 px-2">My space</span>
        </div>

        <x-tooltip-arrow direction="down">
            <button class="mx-1 inline-flex items-center rounded-full border border-gray-300 bg-gray-100 px-2 py-0.5 text-sm text-gray-500">
                <svg class="mr-2 h-3 w-3" fill="currentColor" viewBox="0 0 24 24"
                     xml:space="preserve">
                            <path
                                    d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                            </path>
                        </svg>
                {{ $business->getFinalRatingValue() }}
            </button>

            <x-slot name="text">
                <div class="flex justify-center itrms-center gap-x-2">
                    <span>{{ $business->getReviewsCount() }}</span>
                    Reviews
                </div>
                <div class="flex justify-center gap-1 whitespace-nowrap drop-shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                             xml:space="preserve" fill="currentColor"
                             class="{{ $business->getFinalRatingValue() >= 1 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                            d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                             xml:space="preserve" fill="currentColor"
                             class="{{ $business->getFinalRatingValue() >= 2 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                            d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                             xml:space="preserve" fill="currentColor"
                             class="{{ $business->getFinalRatingValue() >= 3 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                            d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                             xml:space="preserve" fill="currentColor"
                             class="{{ $business->getFinalRatingValue() >= 4 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                            d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                             xml:space="preserve" fill="currentColor"
                             class="{{ $business->getFinalRatingValue() >= 5 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                            d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                        <div class="ml-2 font-bold">{{ $business->getFinalRatingValue() }} / 5</div>
                    </div>

            </x-slot>
        </x-tooltip-arrow>
    </div>

    <div class="flex flex-col mb-[10px]  justify-center items-center border-b px-4 -mt-7 border-gray-100 ">
        <img class="mb-4 h-20 rounded-full w-20 object-cover"
             src="{{$business->avatar}}"
             alt="">
        <div class="min-w-0 flex flex-row flex-1 items-center justify-center ">
            <a href="{{route('business-profile-social',$business->id)}}">
                <h1 class="font-bold truncate mr-2 text-gray-500 ">
                    {{$business->business_name}}</h1>
            </a>
            @if($business->is_verified)
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     class="my-auto h-5 text-indigo-500  transition-colors" version="1.1"
                     width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path
                            d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"
                            class=""></path>
                </svg>
            @endif
        </div>


        <div class="flex justify-evenly items-center gap-x-3">
            @if($business->created_by == auth()->id())
            <!--Dashboard button-->
            <button type="button"
                    wire:click="goToDashboard({{$business->id}})"
                    class="group/but my-3 inline-flex rounded-full justify-center px-4 py-2 shadow-sm text-sm font-medium border
                    border-gray-300 text-gray-500 bg-white focus:outline-none focus:ring-2 focus:ring-traivis-300
                    group-hover:border-traivis-400 hover:bg-traivis-500 hover:text-white transition-all">
                <!-- Heroicon name: solid/mail -->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     version="1.1"
                     id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512"
                     style="enable-background:new 0 0 512 512;"
                     xml:space="preserve" fill="currentColor"
                     class="-ml-1 mr-2 h-5 w-5 transition-all  group-hover/but:text-white">
                    <path
                            d="M224.4,231.4c111-2.9,111-165.4,0-168.3C113.5,66,113.5,228.5,224.4,231.4z M224.4,100.5c61.5,1.1,61.4,92.4,0,93.5  C163,192.9,163,101.6,224.4,100.5z M415.3,271.9c-21.4-17.8-49.4-25.2-76.7-20.2l-71.5,13c-17.1,3.1-31.9,11.9-42.7,24.1  c-10.8-12.3-25.6-21-42.7-24.1l-71.5-13c-27.3-4.9-55.3,2.4-76.6,20.2S0,315.9,0,343.7v52.2c0,45.2,32.3,83.9,76.8,92l117.5,21.4  c20,3.6,40.2,3.6,60.2,0l117.6-21.4c44.5-8.1,76.8-46.8,76.8-92v-52.2C448.9,315.9,436.6,289.7,415.3,271.9L415.3,271.9z   M205.7,473.3c-1.6-0.2-3.1-0.5-4.7-0.8L83.5,451.1c-26.7-4.9-46.1-28.1-46.1-55.2v-52.2c0-16.7,7.4-32.4,20.2-43.1  c12.8-10.7,29.7-15.1,46-12.1l71.5,13c17.8,3.2,30.7,18.7,30.7,36.8V473.3z M411.5,395.9c0,27.1-19.4,50.4-46.1,55.2l-117.6,21.4  c-1.6,0.3-3.1,0.5-4.7,0.8v-135c0-18.1,12.9-33.6,30.7-36.8l71.5-13c16.4-3,33.2,1.4,46,12.1c12.8,10.7,20.1,26.4,20.1,43.1V395.9  L411.5,395.9z">
                    </path>
                    <path
                            d="M491,63.8h-42.1V21.7c0-11.6-9.4-21-21-21c-11.6,0-21,9.4-21,21v42.1h-42.1c-11.6,0-21,9.4-21,21s9.4,21,21,21h42.1V148  c0,11.6,9.4,21,21,21c11.6,0,21-9.4,21-21v-42.1H491c11.6,0,21-9.4,21-21S502.6,63.8,491,63.8z">
                    </path>
                </svg>
                <span
                        class="transition-all  group-hover/but:text-white">
                    Dashboard
                </span>
            </button>
            <!--/Dashboard button-->
            @endif
            <!--Profile button-->
            <button type="button"
                    wire:click="goToProfile({{$business->id}})"
                    class="group/but my-3 inline-flex rounded-full justify-center px-4 py-2 shadow-sm text-sm font-medium border
                           border-gray-300 text-gray-500 bg-white focus:outline-none focus:ring-2 focus:ring-traivis-300
                           group-hover:border-traivis-400 hover:bg-traivis-500 hover:text-white transition-all">
                <!-- Heroicon name: solid/mail -->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     version="1.1"
                     id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512"
                     style="enable-background:new 0 0 512 512;"
                     xml:space="preserve" fill="currentColor"
                     class="-ml-1 mr-2 h-5 w-5 transition-all  group-hover/but:text-white">
                    <path
                            d="M224.4,231.4c111-2.9,111-165.4,0-168.3C113.5,66,113.5,228.5,224.4,231.4z M224.4,100.5c61.5,1.1,61.4,92.4,0,93.5  C163,192.9,163,101.6,224.4,100.5z M415.3,271.9c-21.4-17.8-49.4-25.2-76.7-20.2l-71.5,13c-17.1,3.1-31.9,11.9-42.7,24.1  c-10.8-12.3-25.6-21-42.7-24.1l-71.5-13c-27.3-4.9-55.3,2.4-76.6,20.2S0,315.9,0,343.7v52.2c0,45.2,32.3,83.9,76.8,92l117.5,21.4  c20,3.6,40.2,3.6,60.2,0l117.6-21.4c44.5-8.1,76.8-46.8,76.8-92v-52.2C448.9,315.9,436.6,289.7,415.3,271.9L415.3,271.9z   M205.7,473.3c-1.6-0.2-3.1-0.5-4.7-0.8L83.5,451.1c-26.7-4.9-46.1-28.1-46.1-55.2v-52.2c0-16.7,7.4-32.4,20.2-43.1  c12.8-10.7,29.7-15.1,46-12.1l71.5,13c17.8,3.2,30.7,18.7,30.7,36.8V473.3z M411.5,395.9c0,27.1-19.4,50.4-46.1,55.2l-117.6,21.4  c-1.6,0.3-3.1,0.5-4.7,0.8v-135c0-18.1,12.9-33.6,30.7-36.8l71.5-13c16.4-3,33.2,1.4,46,12.1c12.8,10.7,20.1,26.4,20.1,43.1V395.9  L411.5,395.9z">
                    </path>
                    <path
                            d="M491,63.8h-42.1V21.7c0-11.6-9.4-21-21-21c-11.6,0-21,9.4-21,21v42.1h-42.1c-11.6,0-21,9.4-21,21s9.4,21,21,21h42.1V148  c0,11.6,9.4,21,21,21c11.6,0,21-9.4,21-21v-42.1H491c11.6,0,21-9.4,21-21S502.6,63.8,491,63.8z">
                    </path>
                </svg>
                <span
                        class="transition-all  group-hover/but:text-white">
                    Profile
                </span>
            </button>
            <!--/Profile button-->
        </div>

    </div>
    <div class="flex bg-gray-50 group-hover:bg-traivis-100 justify-between items-center">

        <div class="w-full md:w-1/2">

            <div
                    class="flex text-center group-hover:text-indigo-500 transition-colors text-gray-500   bg-white ">
                <p class="mx-auto mb-1 text-sm flex-row flex items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                         viewBox="0 0 24 24"
                         width="512" height="512" fill="currentColor" aria-hidden="true"
                         class="h-3 w-3 mr-2">
                        <path
                                d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                        </path>
                    </svg>
                    <span>{{$business->posts->count()}} </span>
                </p>
            </div>

        </div>
        <div class="md:w-1/2 w-full">

            <div
                    class="flex text-center group-hover:text-indigo-500 transition-colors text-gray-500   bg-white ">
                <p class="mx-auto mb-1 text-sm flex flex-row items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512"
                         height="512"
                         fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-2">
                        <g>
                            <circle cx="256" cy="128" r="128"></circle>
                            <path
                                    d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z">
                            </path>
                        </g>
                    </svg>
                    <span>{{$business->followers->count()}} </span>
                </p>
            </div>

        </div>
    </div>

</div>
