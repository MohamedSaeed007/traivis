    <div class="w-full border-b border-gray-200 p-5 text-sm font-medium text-gray-500 border-l-transparent border-l-4 bg-white hover:bg-traivis-50 hover:border-l-traivis-500 hover:text-gray-700 transition-colors" :class="open ? 'bg-traivis-50 border-l-traivis-500 text-gray-700' : ''" x-data="{open:false}">
        <div class="flex cursor-pointer items-center" @click="open = !open">
            <a href="tasks.html" class="mr-5">
                <svg fill="currentColor" class="h-5 w-5" height="512" viewBox="0 0 24 24" width="512"><path d="m4 22a2.982 2.982 0 0 1 -2.122-.879l-1.544-1.374a1 1 0 0 1 1.332-1.494l1.585 1.414a1 1 0 0 0 1.456.04l3.6-3.431a1 1 0 1 1 1.378 1.448l-3.585 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2zm-19-7a2.982 2.982 0 0 1 -2.122-.879l-1.585-1.585a1 1 0 0 1 1.414-1.414l1.586 1.585a1.023 1.023 0 0 0 1.414 0l3.6-3.431a1 1 0 1 1 1.382 1.448l-3.589 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2zm-19-7a2.982 2.982 0 0 1 -2.122-.879l-1.544-1.374a1 1 0 0 1 1.332-1.494l1.585 1.414a1 1 0 0 0 1.456.04l3.604-3.431a1 1 0 0 1 1.378 1.448l-3.589 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2z"></path></svg>
            </a>

            <div class="py-1 flex-grow font-bold">Task Approvals</div>
            <div class="ml-5">
                <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition-transform rotate-0" :class="open ? 'rotate-90' : 'rotate-0'">
                    <path d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z"></path>
                </svg>
            </div>
        </div>

        <!--Approvals Content -->
        <div class="mt-5" x-show="open" x-transition:enter="transition-opacity ease-linear" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">


            <!--Tasks-->
            <ul class="">

                <!-- Task -->
                <li class="">
                    <a @click="
                                                tasks=true
                                                courseDetails=false
                                                console.log(courseDetails)
                                                " class="items-center flex gap-x-3 cursor-pointer border-b border-gray-200 p-5 text-sm font-medium text-gray-500 hover:text-gray-700 transition-colors">
                        <svg fill="currentColor" class="h-5 w-5" height="512" viewBox="0 0 24 24" width="512"><path d="m10 23a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1z"></path><path d="m1 20h6a1 1 0 0 0 0-2h-6a1 1 0 0 0 0 2z"></path><path d="m1 16h4a1 1 0 0 0 0-2h-4a1 1 0 0 0 0 2z"></path><path d="m12 0a12 12 0 0 0 -12 12c0 .061.008.12.009.181a2.966 2.966 0 0 1 .991-.181h4a2.99 2.99 0 0 1 2.78 4.116 2.975 2.975 0 0 1 2 4 2.949 2.949 0 0 1 2.039 3.875c.061 0 .12.009.181.009a12 12 0 0 0 0-24zm3.707 15.707a1 1 0 0 1 -1.414 0l-3-3a1 1 0 0 1 -.293-.707v-5a1 1 0 0 1 2 0v4.586l2.707 2.707a1 1 0 0 1 0 1.414z"></path></svg>

                        <div class="py-1 flex-grow font-bold">Task 1</div>

                        <svg fill="currentColor" class="h-5 w-5 ml-auto text-green-600" viewBox="0 0 24 24" width="512" height="512"><path d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z"></path></svg>
                    </a>

                </li>
                <!--END Task -->


                <!-- Task -->
                <li class="">
                    <a href="course-tasks.html" class="items-center flex gap-x-3 cursor-pointer border-b border-gray-200 p-5 text-sm font-medium text-gray-500 hover:text-gray-700 transition-colors">
                        <svg fill="currentColor" class="h-5 w-5" height="512" viewBox="0 0 24 24" width="512"><path d="m10 23a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1z"></path><path d="m1 20h6a1 1 0 0 0 0-2h-6a1 1 0 0 0 0 2z"></path><path d="m1 16h4a1 1 0 0 0 0-2h-4a1 1 0 0 0 0 2z"></path><path d="m12 0a12 12 0 0 0 -12 12c0 .061.008.12.009.181a2.966 2.966 0 0 1 .991-.181h4a2.99 2.99 0 0 1 2.78 4.116 2.975 2.975 0 0 1 2 4 2.949 2.949 0 0 1 2.039 3.875c.061 0 .12.009.181.009a12 12 0 0 0 0-24zm3.707 15.707a1 1 0 0 1 -1.414 0l-3-3a1 1 0 0 1 -.293-.707v-5a1 1 0 0 1 2 0v4.586l2.707 2.707a1 1 0 0 1 0 1.414z"></path></svg>
                        <div class="py-1 flex-grow font-bold">Task 2</div>

                        <svg fill="currentColor" class="h-5 w-5 ml-auto text" viewBox="0 0 24 24"><path d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z"></path><path d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z"></path></svg>
                    </a>
                </li>
                <!--END Task -->


                <!-- Task -->
                <li class="">
                    <a href="course-tasks.html" class="items-center flex gap-x-3 cursor-pointer border-b border-gray-200 p-5 text-sm font-medium text-gray-500 hover:text-gray-700 transition-colors">
                        <svg fill="currentColor" class="h-5 w-5" height="512" viewBox="0 0 24 24" width="512"><path d="m10 23a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1z"></path><path d="m1 20h6a1 1 0 0 0 0-2h-6a1 1 0 0 0 0 2z"></path><path d="m1 16h4a1 1 0 0 0 0-2h-4a1 1 0 0 0 0 2z"></path><path d="m12 0a12 12 0 0 0 -12 12c0 .061.008.12.009.181a2.966 2.966 0 0 1 .991-.181h4a2.99 2.99 0 0 1 2.78 4.116 2.975 2.975 0 0 1 2 4 2.949 2.949 0 0 1 2.039 3.875c.061 0 .12.009.181.009a12 12 0 0 0 0-24zm3.707 15.707a1 1 0 0 1 -1.414 0l-3-3a1 1 0 0 1 -.293-.707v-5a1 1 0 0 1 2 0v4.586l2.707 2.707a1 1 0 0 1 0 1.414z"></path></svg>
                        <div class="py-1 flex-grow font-bold">Task 3</div>

                        <svg fill="currentColor" class="h-5 w-5 ml-auto text" height="30" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m21 24h-18v-3a12.2 12.2 0 0 1 4.442-9 12.2 12.2 0 0 1 -4.442-9 3 3 0 0 1 3-3h12a3 3 0 0 1 3 3 12.221 12.221 0 0 1 -4.425 9 12.221 12.221 0 0 1 4.425 9zm-16-2h14v-1c0-3.774-2.5-6.552-4.592-8.217l-.984-.783.984-.783c2.092-1.665 4.592-4.443 4.592-8.217a1 1 0 0 0 -1-1h-12a1 1 0 0 0 -1 1c0 3.774 2.508 6.551 4.612 8.216l.988.784-.991.784c-2.101 1.665-4.609 4.442-4.609 8.216zm7.018-6.018a10.065 10.065 0 0 1 1.943 2.018h-3.893m1.946-4.487c-1.637 1.073-4.429 3.33-4.934 6.487h9.842c-.5-3.184-3.288-5.43-4.908-6.487z"></path></svg>
                    </a>
                </li>
                <!--END Task -->

            </ul>
            <!--/Tasks-->


            <!-- add items to sections -->
            <div class="flex justify-center items-center mt-5 font-bold space-x-2">


                    <button onclick='Livewire.emit("openModal", "add-course-task", {{ json_encode(["course_id" => 1]) }})' type="button" class="transition inline-flex items-center px-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm group h-10 w-fit flex space-x-2 focus:w-fit focus-within:text-traivis-500 px-3.5
                                             text-gray-500 bg-white border-gray-400 hover:bg-traivis-500 hover:text-white hover:border-traivis-500 focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500">
                        <svg fill="currentColor" class="h-5 w-5" height="512" viewBox="0 0 24 24" width="512"><path d="m10 23a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1z"></path><path d="m1 20h6a1 1 0 0 0 0-2h-6a1 1 0 0 0 0 2z"></path><path d="m1 16h4a1 1 0 0 0 0-2h-4a1 1 0 0 0 0 2z"></path><path d="m12 0a12 12 0 0 0 -12 12c0 .061.008.12.009.181a2.966 2.966 0 0 1 .991-.181h4a2.99 2.99 0 0 1 2.78 4.116 2.975 2.975 0 0 1 2 4 2.949 2.949 0 0 1 2.039 3.875c.061 0 .12.009.181.009a12 12 0 0 0 0-24zm3.707 15.707a1 1 0 0 1 -1.414 0l-3-3a1 1 0 0 1 -.293-.707v-5a1 1 0 0 1 2 0v4.586l2.707 2.707a1 1 0 0 1 0 1.414z"></path></svg>
                        <span class="whitespace-nowrap font-bold">+ Task</span>
                    </button>


            </div>
            <!--END add items to sections  -->

        </div>
        <!-- END Course Section Content -->

    </div>
