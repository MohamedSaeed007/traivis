<div>
    <!--collapse content-->
    <div class="p-4 m-2 bg-white flex flex-wrap items-start">


        <!--Facebook-->
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 xl:w-1/6 p-2">
            <li x-data="{linked:@entangle('facebookSocialKey')}"
                :class="linked ? 'bg-traivis-50 border border-gray-300 rounded-lg' : 'bg-white'"
                class="flex flex-col p-4 text-gray-500 transition-colors">


                <!--Set Account-->
                <div :class="linked ? 'hidden' : 'block'" class="space-y-3 flex flex-col items-center">

                    <!--Save-->
                    <button wire:click="connectFacebook"
                        class="group transition-all inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-traivis-500 text-gray-500 bg-white border-gray-400 hover:bg-traivis-500 hover:text-white hover:border-traivis-500 focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                        type="button">
                        <svg class="h-5 w-5 text-traivis-500 group-hover:text-white transition-all" fill="currentColor"
                            x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                            xml:space="preserve" width="512" height="512">
                            <g>
                                <path
                                    d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" />
                            </g>
                        </svg>
                        <span class="whitespace-nowrap font-bold">Connect</span>
                    </button>
                    <!---->

                </div>
                <!--END Set Account-->

                <!--Linked Account-->
                <div :class="linked ? 'block' : 'hidden'"
                    class="flex flex-col space-y-3 justify-center items-center font-semibold">

                    <!--<p class="font-bold text-green-600">
                        Facebook Connected
                    </p>-->

                    <div class="flex flex-row space-x-3 items-center text-lg">
                        <!--                        <img src="cover.jpg" class="w-10 h-10 rounded-full bg-cover">-->
                        <p class="whitespace-nowrap truncate">
                            {{$business->business_name}}
                        </p>
                    </div>

                    <button wire:click="disconnectFacebook"
                        class="transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 text-white bg-traivis-500 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                        type="button">
                        <svg class="h-5 w-5" fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve" width="512" height="512">
                            <g>
                                <path
                                    d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" />
                            </g>
                        </svg>
                        <span class="whitespace-nowrap font-bold">Disconnect</span>
                    </button>

                </div>
                <!--END Linked Account-->


            </li>
        </div>
        <!--END Facebook-->


        <!--Twitter-->
        {{-- <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 xl:w-1/6 p-2">
            <li x-data="{linked:@entangle('twitterSocialKey')}"
                :class="linked ? 'bg-traivis-50 border border-gray-300 rounded-lg' : 'bg-white'"
                class="flex flex-col p-4 text-gray-500 transition-colors">


                <!--Set Account-->
                <div :class="linked ? 'hidden' : 'block'" class="space-y-3 flex flex-col items-center">

                    <!--Save-->
                    <button wire:click="connectTwitter"
                        class="group transition-all inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-traivis-400 text-gray-500 bg-white border-gray-400 hover:bg-traivis-400 hover:text-white hover:border-traivis-400 focus:border-traivis-400 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-400"
                        type="button">
                        <svg class="h-5 w-5 text-traivis-400 group-hover:text-white transition-all" fill="currentColor"
                            x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                            xml:space="preserve" width="512" height="512">
                            <path id="Logo_00000038394049246713568260000012923108920998390947_"
                                d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z" />
                        </svg>
                        <span class="whitespace-nowrap font-bold">Connect</span>
                    </button>
                    <!---->

                </div>
                <!--END Set Account-->

                <!--Linked Account-->
                <div :class="linked ? 'block' : 'hidden'"
                    class="flex flex-col space-y-3 justify-center items-center font-semibold">

                    <!--<p class="font-bold text-green-600">
                        Facebook Connected
                    </p>-->

                    <div class="flex flex-row space-x-3 items-center text-lg">
                        <!--                        <img src="cover.jpg" class="w-10 h-10 rounded-full bg-cover">-->
                        <p class="whitespace-nowrap truncate">
                            {{$business->business_name}}
                        </p>
                    </div>

                    <button wire:click="disconnectTwitter"
                        class="transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 text-white bg-traivis-400 hover:bg-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-400"
                        type="button">
                        <svg class="h-5 w-5" fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve" width="512" height="512">
                            <path id="Logo_00000038394049246713568260000012923108920998390947_"
                                d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z" />
                        </svg>
                        <span class="whitespace-nowrap font-bold">Disconnect</span>
                    </button>

                </div>
                <!--END Linked Account-->


            </li>
        </div> --}}
        <!--END Twitter-->


        <!--Telegram-->
        {{-- <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 xl:w-1/6 p-2">
            <li x-data="{linked:false}" :class="linked ? 'bg-traivis-50 border border-gray-300 rounded-lg' : 'bg-white'"
                class="flex flex-col p-4 text-gray-500 transition-colors">


                <!--Set Account-->
                <div :class="linked ? 'hidden' : 'block'" class="space-y-3 flex flex-col items-center">

                    <!--Save-->
                    <button @click="linked = !linked"
                        class="group transition-all inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-sky-500 text-gray-500 bg-white border-gray-400 hover:bg-sky-500 hover:text-white hover:border-sky-500 focus:border-sky-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-sky-500"
                        type="button">
                        <svg class="h-5 w-5 text-sky-500 group-hover:text-white transition-all" fill="currentColor"
                            x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                            xml:space="preserve" width="512" height="512">
                            <g id="Artboard">
                                <path style="fill-rule:evenodd;clip-rule:evenodd;"
                                    d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z    M17.562,8.161c-0.18,1.897-0.962,6.502-1.359,8.627c-0.168,0.9-0.5,1.201-0.82,1.23c-0.697,0.064-1.226-0.461-1.901-0.903   c-1.056-0.692-1.653-1.123-2.678-1.799c-1.185-0.781-0.417-1.21,0.258-1.911c0.177-0.184,3.247-2.977,3.307-3.23   c0.007-0.032,0.015-0.15-0.056-0.212s-0.174-0.041-0.248-0.024c-0.106,0.024-1.793,1.139-5.062,3.345   c-0.479,0.329-0.913,0.489-1.302,0.481c-0.428-0.009-1.252-0.242-1.865-0.442c-0.751-0.244-1.349-0.374-1.297-0.788   c0.027-0.216,0.324-0.437,0.892-0.663c3.498-1.524,5.831-2.529,6.998-3.015c3.333-1.386,4.025-1.627,4.477-1.635   C17.472,7.214,17.608,7.681,17.562,8.161z" />
                            </g>
                        </svg>
                        <span class="whitespace-nowrap font-bold">Connect</span>
                    </button>
                    <!---->

                </div>
                <!--END Set Account-->

                <!--Linked Account-->
                <div :class="linked ? 'block' : 'hidden'"
                    class="flex flex-col space-y-3 justify-center items-center font-semibold">

                    <!--<p class="font-bold text-green-600">
                        Facebook Connected
                    </p>-->

                    <div class="flex flex-row space-x-3 items-center text-lg">
                        <!--                        <img src="cover.jpg" class="w-10 h-10 rounded-full bg-cover">-->
                        <p class="whitespace-nowrap truncate">
                            Maisara Hammad
                        </p>
                    </div>

                    <button @click="linked = false"
                        class="transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 text-white bg-sky-500 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-sky-500"
                        type="button">
                        <svg class="h-5 w-5" fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve" width="512" height="512">
                            <g id="Artboard">
                                <path style="fill-rule:evenodd;clip-rule:evenodd;"
                                    d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z    M17.562,8.161c-0.18,1.897-0.962,6.502-1.359,8.627c-0.168,0.9-0.5,1.201-0.82,1.23c-0.697,0.064-1.226-0.461-1.901-0.903   c-1.056-0.692-1.653-1.123-2.678-1.799c-1.185-0.781-0.417-1.21,0.258-1.911c0.177-0.184,3.247-2.977,3.307-3.23   c0.007-0.032,0.015-0.15-0.056-0.212s-0.174-0.041-0.248-0.024c-0.106,0.024-1.793,1.139-5.062,3.345   c-0.479,0.329-0.913,0.489-1.302,0.481c-0.428-0.009-1.252-0.242-1.865-0.442c-0.751-0.244-1.349-0.374-1.297-0.788   c0.027-0.216,0.324-0.437,0.892-0.663c3.498-1.524,5.831-2.529,6.998-3.015c3.333-1.386,4.025-1.627,4.477-1.635   C17.472,7.214,17.608,7.681,17.562,8.161z" />
                            </g>
                        </svg>
                        <span class="whitespace-nowrap font-bold">Disconnect</span>
                    </button>

                </div>
                <!--END Linked Account-->


            </li>
        </div> --}}
        <!--END Telegram-->


        <!--whatsapp-->
        {{-- <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 xl:w-1/6 p-2">
            <li x-data="{linked:false}" :class="linked ? 'bg-traivis-50 border border-gray-300 rounded-lg' : 'bg-white'"
                class="flex flex-col p-4 text-gray-500 transition-colors">


                <!--Set Account-->
                <div :class="linked ? 'hidden' : 'block'" class="space-y-3 flex flex-col items-center">

                    <!--Save-->
                    <button @click="linked = !linked"
                        class="group transition-all inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-green-500 text-gray-500 bg-white border-gray-400 hover:bg-green-500 hover:text-white hover:border-green-500 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-green-500"
                        type="button">
                        <svg class="h-5 w-5 text-green-500 group-hover:text-white transition-all" fill="currentColor"
                            x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                            xml:space="preserve" width="512" height="512">
                            <g id="WA_Logo">
                                <g>
                                    <path style="fill-rule:evenodd;clip-rule:evenodd;"
                                        d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z" />
                                </g>
                            </g>
                        </svg>
                        <span class="whitespace-nowrap font-bold">Connect</span>
                    </button>
                    <!---->

                </div>
                <!--END Set Account-->

                <!--Linked Account-->
                <div :class="linked ? 'block' : 'hidden'"
                    class="flex flex-col space-y-3 justify-center items-center font-semibold">

                    <!--<p class="font-bold text-green-600">
                        Facebook Connected
                    </p>-->

                    <div class="flex flex-row space-x-3 items-center text-lg">
                        <!--                        <img src="cover.jpg" class="w-10 h-10 rounded-full bg-cover">-->
                        <p class="whitespace-nowrap truncate">
                            Maisara Hammad
                        </p>
                    </div>

                    <button @click="linked = false"
                        class="transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-green-500"
                        type="button">
                        <svg class="h-5 w-5" fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve" width="512" height="512">
                            <g id="WA_Logo">
                                <g>
                                    <path style="fill-rule:evenodd;clip-rule:evenodd;"
                                        d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z" />
                                </g>
                            </g>
                        </svg>
                        <span class="whitespace-nowrap font-bold">Disconnect</span>
                    </button>

                </div>
                <!--END Linked Account-->


            </li>
        </div> --}}
        <!--END whatsapp-->


        <!--Pininterest-->
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 xl:w-1/6 p-2">
            <li x-data="{linked:@entangle('pinterestSocialKey')}"
                :class="linked ? 'bg-traivis-50 border border-gray-300 rounded-lg' : 'bg-white'"
                class="flex flex-col p-4 text-gray-500 transition-colors">


                <!--Set Account-->
                <div :class="linked ? 'hidden' : 'block'" class="space-y-3 flex flex-col items-center">

                    <!--Save-->
                    <button wire:click="connectPinterest"
                        class="group transition-all inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-red-500 text-gray-500 bg-white border-gray-400 hover:bg-red-500 hover:text-white hover:border-red-500 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-red-500"
                        type="button">
                        <svg class="h-5 w-5 text-red-500 group-hover:text-white transition-all" fill="currentColor"
                            x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                            xml:space="preserve" width="512" height="512">
                            <g>
                                <path
                                    d="M12.01,0C5.388,0,0.02,5.368,0.02,11.99c0,5.082,3.158,9.424,7.618,11.171c-0.109-0.947-0.197-2.408,0.039-3.444   c0.217-0.938,1.401-5.961,1.401-5.961s-0.355-0.72-0.355-1.776c0-1.668,0.967-2.911,2.171-2.911c1.026,0,1.52,0.77,1.52,1.688   c0,1.026-0.651,2.566-0.997,3.997c-0.286,1.194,0.602,2.171,1.776,2.171c2.132,0,3.77-2.25,3.77-5.487   c0-2.872-2.062-4.875-5.013-4.875c-3.414,0-5.418,2.556-5.418,5.201c0,1.026,0.395,2.132,0.888,2.734   C7.52,14.615,7.53,14.724,7.5,14.842c-0.089,0.375-0.296,1.194-0.336,1.362c-0.049,0.217-0.178,0.266-0.405,0.158   c-1.5-0.701-2.438-2.882-2.438-4.648c0-3.78,2.743-7.253,7.924-7.253c4.155,0,7.391,2.961,7.391,6.928   c0,4.135-2.605,7.461-6.217,7.461c-1.214,0-2.359-0.632-2.743-1.382c0,0-0.602,2.289-0.75,2.852   c-0.266,1.046-0.997,2.349-1.49,3.148C9.562,23.812,10.747,24,11.99,24c6.622,0,11.99-5.368,11.99-11.99C24,5.368,18.632,0,12.01,0   z" />
                            </g>
                        </svg>
                        <span class="whitespace-nowrap font-bold">Connect</span>
                    </button>
                    <!---->

                </div>
                <!--END Set Account-->

                <!--Linked Account-->
                <div :class="linked ? 'block' : 'hidden'"
                    class="flex flex-col space-y-3 justify-center items-center font-semibold">

                    <!--<p class="font-bold text-green-600">
                        Facebook Connected
                    </p>-->

                    <div class="flex flex-row space-x-3 items-center text-lg">
                        <!--                        <img src="cover.jpg" class="w-10 h-10 rounded-full bg-cover">-->
                        <p class="whitespace-nowrap truncate">
                            {{$business->business_name}}
                        </p>
                    </div>

                    <button wire:click="disconnectPinterest"
                        class="transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-red-500"
                        type="button">
                        <svg class="h-5 w-5" fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve" width="512" height="512">
                            <g>
                                <path
                                    d="M12.01,0C5.388,0,0.02,5.368,0.02,11.99c0,5.082,3.158,9.424,7.618,11.171c-0.109-0.947-0.197-2.408,0.039-3.444   c0.217-0.938,1.401-5.961,1.401-5.961s-0.355-0.72-0.355-1.776c0-1.668,0.967-2.911,2.171-2.911c1.026,0,1.52,0.77,1.52,1.688   c0,1.026-0.651,2.566-0.997,3.997c-0.286,1.194,0.602,2.171,1.776,2.171c2.132,0,3.77-2.25,3.77-5.487   c0-2.872-2.062-4.875-5.013-4.875c-3.414,0-5.418,2.556-5.418,5.201c0,1.026,0.395,2.132,0.888,2.734   C7.52,14.615,7.53,14.724,7.5,14.842c-0.089,0.375-0.296,1.194-0.336,1.362c-0.049,0.217-0.178,0.266-0.405,0.158   c-1.5-0.701-2.438-2.882-2.438-4.648c0-3.78,2.743-7.253,7.924-7.253c4.155,0,7.391,2.961,7.391,6.928   c0,4.135-2.605,7.461-6.217,7.461c-1.214,0-2.359-0.632-2.743-1.382c0,0-0.602,2.289-0.75,2.852   c-0.266,1.046-0.997,2.349-1.49,3.148C9.562,23.812,10.747,24,11.99,24c6.622,0,11.99-5.368,11.99-11.99C24,5.368,18.632,0,12.01,0   z" />
                            </g>
                        </svg>
                        <span class="whitespace-nowrap font-bold">Disconnect</span>
                    </button>

                </div>
                <!--END Linked Account-->


            </li>
        </div>
        <!--END Pininterest-->

        <!--LinkedIn-->
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/5 xl:w-1/6 p-2">
            <li x-data="{linked:@entangle('linkedinSocialKey')}"
                :class="linked ? 'bg-traivis-50 border border-gray-300 rounded-lg' : 'bg-white'"
                class="flex flex-col p-4 text-gray-500 transition-colors">


                <!--Set Account-->
                <div :class="linked ? 'hidden' : 'block'" class="space-y-3 flex flex-col items-center">

                    <!--Save-->
                    <button wire:click="connectLinkedin"
                        class="group transition-all inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-sky-600 text-gray-500 bg-white border-gray-400 hover:bg-sky-600 hover:text-white hover:border-sky-600 focus:border-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-sky-600"
                        type="button">
                        <svg class="h-5 w-5 text-sky-600 group-hover:text-white transition-all" fill="currentColor"
                            x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                            xml:space="preserve" width="512" height="512">
                            <g>
                                <path id="Path_2525"
                                    d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262" />
                                <path id="Path_2520"
                                    d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463" />
                                <path id="Path_2526"
                                    d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031" />
                            </g>
                        </svg>
                        <span class="whitespace-nowrap font-bold">Connect</span>
                    </button>
                    <!---->

                </div>
                <!--END Set Account-->

                <!--Linked Account-->
                <div :class="linked ? 'block' : 'hidden'"
                    class="flex flex-col space-y-3 justify-center items-center font-semibold">

                    <!--<p class="font-bold text-green-600">
                        Linkedin Connected
                    </p>-->

                    <div class="flex flex-row space-x-3 items-center text-lg">
                        <!--                        <img src="cover.jpg" class="w-10 h-10 rounded-full bg-cover">-->
                        <p class="whitespace-nowrap truncate">
                            {{$business->business_name}}
                        </p>
                    </div>

                    <button wire:click="disconnectLinkedin"
                        class="transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-sky-600"
                        type="button">
                        <svg class="h-5 w-5" fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24"
                            style="enable-background:new 0 0 24 24;" xml:space="preserve" width="512" height="512">
                            <g>
                                <path id="Path_2525"
                                    d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262" />
                                <path id="Path_2520"
                                    d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463" />
                                <path id="Path_2526"
                                    d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031" />
                            </g>
                        </svg>
                        <span class="whitespace-nowrap font-bold">Disconnect</span>
                    </button>

                </div>
                <!--END Linked Account-->


            </li>
        </div>
        <!--END LinkedIn-->


    </div>
    <!--END collapse content-->
</div>