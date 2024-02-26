<div x-data="{InfluencerReg:false}" class="" >
    <!--Influencer Button-->
    @if($showInfluencerButton)
        <div class="group relative flex mx-auto justify-center">
            <button @click="InfluencerReg = true" type="button" class="group animate-zooming hover:animate-none focus-within:animate-none inline-flex gap-x-2 items-center justify-center rounded-full border border-transparent bg-traivis-500 px-5 py-2 font-bold text-white shadow-sm hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 transition-all ">
                <svg class="shrink-0 h-5 w-5 fill-current" viewBox="0 0 24 24"><path d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z"></path></svg>
                <span class=""> Influence</span>
            </button>
            <span class="opacity-0 group-hover:opacity-100 transition-all duration-500 absolute -top-8 right-1/2 translate-x-1/2 bg-gray-800 rounded-lg text-white px-2 whitespace-nowrap">Get be influence and start earning</span>
        </div>
    @endif
    <!--/Influencer Button-->

    <!--Influencer popup-->
    <section x-show="InfluencerReg" x-transition:enter="ease-out duration-100" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:leave="ease-in duration-200" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" style="display: none;">

        <div aria-labelledby="modal-title" aria-modal="true" class="fixed z-[999] inset-0 overflow-y-auto" role="dialog">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <!---over BG---->
                <div @click="InfluencerReg = false" aria-hidden="true" class=" fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity ">
                </div>
                <!-- center-->
                <span aria-hidden="true" class="hidden sm:inline-block sm:align-middle sm:h-screen">​</span>
                <!---END over BG---->
                <!-- popup content-->
                <div class="relative inline-block bg-white rounded-lg p-4 text-left shadow-xl transform transition-all my-8 align-middle w-full max-w-xl sm:w-2/3">
                    <!---->
                    <div class="">
                        <div class="w-full h-full overflow-y-auto">

                                <form wire:submit.prevent="storeInfo()">
                                @csrf
                                <div class="container w-full flex flex-col gap-y-4 p-3 mx-auto rounded-lg bg-white">

                                    <!-- header-->
                                    <h1 class="text-center font-bold text-lg text-slate-500 py-3 -mb-14">
                                        Welcome to the Influencer Program
                                    </h1>
                                    <!--END  header-->

                                    <!-- Content-->
                                    <div class="my-6  block flex flex-col items-center justify-between gap-y-4">
                                        <p class="text-center font-semibold text-lg text-slate-500 py-3">
                                            Please prove your social media followers first
                                        </p>
                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            <div class="group relative w-full">
                                                <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400" fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" width="512" height="512">
                                                    <g><path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z"> </path></g>
                                                </svg>
                                                <input wire:model.lazy="influencerInfo.facebook_url" placeholder="Facebook URL" class="block w-full rounded-l-full border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm" type="text">
                                            </div>
                                            <div class="group relative w-1/4">
                                                <input wire:model="influencerInfo.facebook_followers" placeholder="Followers" class="block w-full rounded-r-full border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm" type="number">
                                            </div>
                                        </div>
                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            @if ($errors->has('influencerInfo.facebook_url'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.facebook_url') }}</div>
                                            @endif
                                            @if ($errors->has('influencerInfo.facebook_followers'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.facebook_followers') }}</div>
                                            @endif
                                        </div>

                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            <div class="group relative w-full">
                                                <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400" fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" width="512" height="512">
                                                    <g><path d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z"></path><path d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z"></path><circle cx="18.406" cy="5.594" r="1.44"></circle></g>
                                                </svg>
                                                <input wire:model="influencerInfo.instagram_url" placeholder="Instagram URL" class="block w-full rounded-l-full border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm" type="text">
                                            </div>

                                            <div class="group relative w-1/4">
                                                <input wire:model="influencerInfo.instagram_followers" placeholder="Followers" class="block w-full rounded-r-full border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm" type="number">
                                            </div>
                                        </div>
                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            @if ($errors->has('influencerInfo.instagram_url'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.instagram_url') }}</div>
                                            @endif
                                            @if ($errors->has('influencerInfo.instagram_followers'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.instagram_followers') }}</div>
                                            @endif
                                        </div>


                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            <div class="group relative w-full">
                                                <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                     fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                                                     style="enable-background:new 0 0 24 24;" xml:space="preserve"
                                                     width="512" height="512">
                                                    <path id="Logo_00000038394049246713568260000012923108920998390947_"
                                                          d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z"></path>
                                                </svg>
                                                <input wire:model="influencerInfo.twitter_url" placeholder="Twitter URL"
                                                       class="block w-full rounded-l-full border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                       type="text">
                                            </div>
                                            <div class="group relative w-1/4">
                                                <input wire:model="influencerInfo.twitter_followers" placeholder="Followers"
                                                       class="block w-full rounded-r-full border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                       type="number">
                                            </div>
                                        </div>
                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            @if ($errors->has('influencerInfo.twitter_url'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.twitter_url') }}</div>
                                            @endif
                                            @if ($errors->has('influencerInfo.twitter_followers'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.twitter_followers') }}</div>
                                            @endif
                                        </div>


                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            <div class="group relative w-full">
                                                <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                     fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                                                     style="enable-background:new 0 0 24 24;" xml:space="preserve"
                                                     width="512" height="512">
                                                                <g id="XMLID_184_">
                                                                    <path d="M23.498,6.186c-0.276-1.039-1.089-1.858-2.122-2.136C19.505,3.546,12,3.546,12,3.546s-7.505,0-9.377,0.504   C1.591,4.328,0.778,5.146,0.502,6.186C0,8.07,0,12,0,12s0,3.93,0.502,5.814c0.276,1.039,1.089,1.858,2.122,2.136   C4.495,20.454,12,20.454,12,20.454s7.505,0,9.377-0.504c1.032-0.278,1.845-1.096,2.122-2.136C24,15.93,24,12,24,12   S24,8.07,23.498,6.186z M9.546,15.569V8.431L15.818,12L9.546,15.569z"></path>
                                                                </g>
                                                            </svg>

                                                <input placeholder="Youtube URL" wire:model="influencerInfo.youtube_url"
                                                       class="block w-full rounded-l-full border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                       type="text">
                                            </div>

                                            <div class="group relative w-1/4">
                                                <input placeholder="Followers" wire:model="influencerInfo.youtube_followers"
                                                       class="block w-full rounded-r-full border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                       type="number">
                                            </div>
                                        </div>
                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            @if ($errors->has('influencerInfo.youtube_url'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.youtube_url') }}</div>
                                            @endif
                                            @if ($errors->has('influencerInfo.youtube_followers'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.youtube_followers') }}</div>
                                            @endif
                                        </div>


                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            <div class="group relative w-full">
                                                <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                     fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                                                     style="enable-background:new 0 0 24 24;" xml:space="preserve"
                                                     width="512" height="512">
                                                                <g id="PRIMARY_-_GHOST">
                                                                    <path d="M23.914,17.469c-0.167-0.454-0.484-0.697-0.846-0.898c-0.068-0.04-0.131-0.072-0.184-0.097   c-0.108-0.056-0.218-0.11-0.328-0.166c-1.127-0.598-2.008-1.352-2.619-2.246c-0.173-0.252-0.324-0.518-0.45-0.797   c-0.052-0.149-0.049-0.233-0.012-0.311c0.037-0.06,0.086-0.111,0.144-0.15c0.194-0.128,0.394-0.258,0.529-0.346   c0.241-0.157,0.433-0.28,0.556-0.368c0.463-0.324,0.787-0.668,0.989-1.052c0.286-0.537,0.323-1.172,0.104-1.74   c-0.307-0.807-1.069-1.308-1.992-1.308c-0.195,0-0.389,0.021-0.579,0.061c-0.051,0.011-0.102,0.023-0.151,0.036   c0.008-0.552-0.004-1.134-0.053-1.708c-0.174-2.016-0.88-3.072-1.616-3.915c-0.471-0.528-1.026-0.975-1.643-1.322   C14.647,0.505,13.38,0.181,12,0.181c-1.38,0-2.64,0.324-3.758,0.961C7.624,1.49,7.067,1.938,6.596,2.467   C5.86,3.309,5.154,4.368,4.98,6.382C4.931,6.955,4.919,7.541,4.927,8.089c-0.05-0.013-0.1-0.024-0.15-0.036   c-0.191-0.041-0.385-0.061-0.58-0.061c-0.924,0-1.687,0.501-1.993,1.308c-0.221,0.568-0.184,1.204,0.101,1.742   c0.203,0.385,0.526,0.728,0.99,1.052c0.123,0.086,0.315,0.21,0.556,0.368c0.13,0.085,0.321,0.209,0.508,0.332   c0.066,0.042,0.121,0.098,0.163,0.164c0.039,0.081,0.04,0.167-0.018,0.326c-0.124,0.273-0.272,0.534-0.442,0.78   C3.465,14.94,2.61,15.68,1.519,16.273c-0.578,0.307-1.179,0.511-1.433,1.201c-0.192,0.521-0.067,1.113,0.42,1.612   c0.178,0.186,0.385,0.343,0.613,0.464c0.474,0.26,0.978,0.462,1.5,0.6c0.108,0.028,0.21,0.074,0.303,0.136   c0.177,0.155,0.152,0.389,0.388,0.731c0.119,0.177,0.269,0.33,0.444,0.451c0.495,0.342,1.052,0.363,1.642,0.386   c0.533,0.02,1.137,0.044,1.827,0.271c0.286,0.094,0.583,0.277,0.927,0.491c0.826,0.508,1.957,1.202,3.849,1.202   c1.892,0,3.031-0.698,3.863-1.208c0.342-0.21,0.637-0.391,0.915-0.483c0.69-0.228,1.294-0.251,1.827-0.271   c0.59-0.022,1.147-0.044,1.642-0.386c0.207-0.144,0.38-0.333,0.505-0.552c0.17-0.289,0.165-0.491,0.325-0.632   c0.087-0.059,0.183-0.103,0.285-0.13c0.53-0.139,1.041-0.342,1.521-0.606c0.242-0.129,0.46-0.3,0.644-0.504l0.006-0.008   C23.986,18.552,24.101,17.977,23.914,17.469z M22.59,18.046c-0.03,0.093-0.133,0.202-0.358,0.327   c-1.026,0.567-1.708,0.506-2.238,0.848c-0.197,0.127-0.257,0.318-0.289,0.512c-0.014,0.08-0.022,0.161-0.034,0.238   c-0.025,0.161-0.063,0.305-0.188,0.391c-0.402,0.278-1.591-0.019-3.127,0.488c-1.267,0.419-2.075,1.623-4.353,1.623   c-2.279,0-3.068-1.202-4.356-1.626c-1.533-0.507-2.724-0.21-3.128-0.487c-0.327-0.225-0.061-0.851-0.511-1.141   c-0.531-0.341-1.213-0.281-2.238-0.844c-0.33-0.182-0.398-0.329-0.358-0.443c0-0.003,0.001-0.005,0.003-0.008   c0.043-0.109,0.184-0.188,0.29-0.239c1.742-0.843,2.798-1.902,3.43-2.809c0.127-0.182,0.236-0.357,0.331-0.524   c0.442-0.778,0.562-1.36,0.574-1.45c0.032-0.249,0.067-0.446-0.208-0.699c-0.265-0.246-1.443-0.975-1.77-1.203   c-0.223-0.156-0.454-0.343-0.578-0.592c-0.27-0.541,0.153-1.068,0.71-1.068c0.099,0,0.198,0.012,0.295,0.033   c0.593,0.129,1.17,0.426,1.503,0.506c0.22,0.053,0.364-0.047,0.351-0.276c-0.038-0.65-0.13-1.915-0.028-3.098   c0.05-0.581,0.167-1.171,0.381-1.721c0.206-0.529,0.535-1.001,0.906-1.426c0.3-0.343,1.705-1.828,4.395-1.828   c2.1,0,3.42,0.903,4.04,1.461c0.989,0.909,1.533,2.18,1.645,3.507c0.102,1.183,0.014,2.449-0.028,3.098   c-0.014,0.221,0.141,0.33,0.351,0.277c0.334-0.081,0.91-0.378,1.504-0.507c0.438-0.095,0.946,0.039,1.066,0.521   c0.099,0.413-0.141,0.759-0.638,1.106c-0.327,0.228-1.505,0.956-1.77,1.202c-0.275,0.254-0.239,0.45-0.207,0.7   c0.015,0.116,0.203,1.022,1.003,2.113c0.001,0.001,0.001,0.002,0.002,0.002c0.033,0.045,0.067,0.091,0.103,0.137   c0.18,0.234,0.389,0.476,0.63,0.719c0.624,0.628,1.466,1.266,2.597,1.812c0.093,0.045,0.2,0.101,0.261,0.187   C22.593,17.916,22.612,17.984,22.59,18.046z"></path>
                                                                </g>
                                                            </svg>

                                                <input placeholder="Snap Chat URL" wire:model="influencerInfo.snap_chat_url"
                                                       class="block w-full rounded-l-full border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                       type="text">
                                            </div>

                                            <div class="group relative w-1/4">
                                                <input placeholder="Followers" wire:model="influencerInfo.snap_chat_followers"
                                                       class="block w-full rounded-r-full border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                       type="number">
                                            </div>
                                        </div>
                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            @if ($errors->has('influencerInfo.snap_chat_url'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.snap_chat_url') }}</div>
                                            @endif
                                            @if ($errors->has('influencerInfo.snap_chat_followers'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.snap_chat_followers') }}</div>
                                            @endif
                                        </div>

                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            <div class="group relative w-full">
                                                <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                     xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                                                     height="100" viewBox="0,0,256,256">
                                                    <g fill="#b1bbc9" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                       stroke-linecap="butt" stroke-linejoin="miter"
                                                       stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                       font-family="none" font-weight="none" font-size="none"
                                                       text-anchor="none" style="mix-blend-mode: normal">
                                                        <g transform="scale(5.12,5.12)">
                                                            <path d="M41,4h-32c-2.757,0 -5,2.243 -5,5v32c0,2.757 2.243,5 5,5h32c2.757,0 5,-2.243 5,-5v-32c0,-2.757 -2.243,-5 -5,-5zM37.006,22.323c-0.227,0.021 -0.457,0.035 -0.69,0.035c-2.623,0 -4.928,-1.349 -6.269,-3.388c0,5.349 0,11.435 0,11.537c0,4.709 -3.818,8.527 -8.527,8.527c-4.709,0 -8.527,-3.818 -8.527,-8.527c0,-4.709 3.818,-8.527 8.527,-8.527c0.178,0 0.352,0.016 0.527,0.027v4.202c-0.175,-0.021 -0.347,-0.053 -0.527,-0.053c-2.404,0 -4.352,1.948 -4.352,4.352c0,2.404 1.948,4.352 4.352,4.352c2.404,0 4.527,-1.894 4.527,-4.298c0,-0.095 0.042,-19.594 0.042,-19.594h4.016c0.378,3.591 3.277,6.425 6.901,6.685z"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <input placeholder="Tiktok URL" wire:model="influencerInfo.tiktok_url"
                                                       class="block w-full rounded-l-full border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                       type="text">
                                            </div>

                                            <div class="group relative w-1/4">
                                                <input placeholder="Tiktok" wire:model="influencerInfo.tiktok_followers"
                                                       class="block w-full rounded-r-full border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                       type="number">
                                            </div>
                                        </div>
                                        <div class="block flex w-full items-center justify-between gap-x-0">
                                            @if ($errors->has('influencerInfo.tiktok_url'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.tiktok_url') }}</div>
                                            @endif
                                            @if ($errors->has('influencerInfo.tiktok_followers'))
                                                <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.tiktok_followers') }}</div>
                                            @endif
                                        </div>

                                        <div class="block w-full items-center justify-between gap-x-0">
                                            <label class="text-slate-500">Message</label>
                                            <textarea wire:model="influencerInfo.message"
                                                    class="focus:border-primary-500 focus:ring-primary-500  mb-2 block w-full rounded-lg border-gray-300 text-gray-900 shadow-sm outline-none transition duration-75 focus:ring-1 focus:ring-inset disabled:opacity-70  "
                                                    rows="2"></textarea>
                                        </div>
                                        @if ($errors->has('influencerInfo.message'))
                                            <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerInfo.message') }}</div>
                                        @endif


                                        @if($canSubmit)
                                        <div class="flex w-full items-center justify-center my-3">
                                            <input  wire:model="influencerInfo.status" value="1" id="terms" type="checkbox"
                                                   class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                            <label for="terms"
                                                   class="ml-2 text-base font-bold text-gray-500 ">
                                                Accept the
                                                <a class="text-traivis-500" href="#">terms of service</a>
                                                and
                                                <a class="text-traivis-500" href="#">privacy policy </a>
                                            </label>
                                        </div>

                                        @if ($errors->has('influencerInfo.status'))
                                            <div  class="text-red-500 block flex w-full items-center text-center gap-x-0">Accept the terms of service and privacy policy.</div>
                                        @endif

                                        @endif
                                    </div>
                                    <!--END Content-->
                                    <!--Button-->
                                    <div class="w-full justify-evenly flex items-center">
                                        <button @click="InfluencerReg = false" type="button"
                                                class="transition inline-flex items-center px-8 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm gap-x-2 justify-center text-gray-500 hover:text-gray-700 bg-slate-200 hover:bg-slate-300 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500">
                                            <span class="whitespace-nowrap h-5 font-bold">Cancel</span>
                                        </button>
                                        @if($canSubmit)
                                            <button type="submit"
                                                    class="transition inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm gap-x-2 justify-center text-white bg-traivis-500 hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500">
                                                <svg fill="currentColor" class="h-5 w-5" x="0px" y="0px"
                                                     viewBox="0 0 512.308 512.308"
                                                     style="enable-background:new 0 0 512.308 512.308;"
                                                     xml:space="preserve"><g>
                                                        <path d="M505.878,36.682L110.763,431.69c8.542,4.163,17.911,6.351,27.413,6.4h67.669c5.661-0.015,11.092,2.236,15.083,6.251   l36.672,36.651c19.887,20.024,46.936,31.295,75.157,31.317c11.652-0.011,23.224-1.921,34.261-5.653   c38.05-12.475,65.726-45.46,71.403-85.099l72.085-342.4C513.948,64.89,512.311,49.871,505.878,36.682z"></path>
                                                        <path d="M433.771,1.652L92.203,73.61C33.841,81.628-6.971,135.44,1.047,193.802c3.167,23.048,13.782,44.43,30.228,60.885   l36.651,36.651c4.006,4.005,6.255,9.439,6.251,15.104v67.669c0.049,9.502,2.237,18.872,6.4,27.413L475.627,6.41   C462.645,0.03,447.853-1.651,433.771,1.652z"></path>
                                                    </g></svg>
                                                <span class="whitespace-nowrap font-bold">Submit</span>
                                            </button>
                                        @else
                                            @if($influencerInfo->status == 1)
                                                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                                                    Your information submitted successfully.
                                                </div>
                                            @endif
                                            @if($influencerInfo->status == 2)
                                                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                                                    Your information approved successfully.
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                    <!--/ Button-->

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Influencer popup-->
</div>




