
    <!-----View Employees popup----------->
    <div
        <!----- New Task popup----------->

        <div  class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">




        <!-- popup content-->
                <div style="width: 100% !important" class="relative inline-block bg-white rounded-lg p-4 text-left shadow-xl transform transition-all my-8 align-middle w-full sm:w-5/6 lg:w-2/3">

                    <div class="">
                        <div class="w-full h-full overflow-y-auto">
                            <div class="container xl:p-6 mx-auto rounded-lg bg-white w-full">


                                <!--employee header-->
                                <div x-data="{openSetting:false}" class=" flex flex-row items-center justify-between">

                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img alt="" class="h-10 w-10 rounded-full bg-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                        </div>

                                        <div class="ml-4 flex flex-col">
                                            <a class="whitespace-nowrap font-medium text-gray-900" href="#">{{$instructor->business_name}}</a>
                                            <b class="whitespace-nowrap font-medium text-gray-900" >Joind On:{{$joined_at}}</b>
                                        </div>

                                        <div class=" relative ml-4">
                                            <div class="deleteButton mt-1">
                                                <!-- start dropdown modal brand  -->
                                                <div x-data="{
                                                                                        open: false,
                                                                                        toggle() {
                                                                                            if (this.open) {
                                                                                                return this.close()
                                                                                            }

                                                                                            this.open = true
                                                                                            },
                                                                                            close(focusAfter) {
                                                                                                this.open = false
                                                                                                focusAfter &amp;&amp; focusAfter.focus()
                                                                                            }
                                                                                        }"
                                                     x-on:keydown.escape.prevent.stop="close($refs.button)" x-on:focusin.window="! $refs.panel.contains($event.target) &amp;&amp; close()" x-id="['dropdown-button']" class="relative">
                                                    <!-- Button -->
                                                    <button x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')" type="button" class="border-0 capitalize text-gray-700" aria-expanded="true" aria-controls="dropdown-button-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                        </svg>
                                                    </button>

                                                    <!-- Panel -->
                                                    <div x-ref="panel" x-show="open" x-transition.origin.top.left="" x-on:click.outside="close($refs.button)" :id="$id('dropdown-button')" class="absolute bg-gray-100   w-[200px] mt-2 z-20 rounded" id="dropdown-button-3">
                                                        <div>
                                                            <button class="flex items-center capitalize  text-gray-600 font-semibold w-full  p-4  rounded hover:bg-traivis-500 hover:text-white hover:fill-white">
                                                                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" class="w-5 mr-2 h-5" viewBox="0 0 24 24" width="25" height="25"><path d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z"></path><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z"></path><path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"></path></svg>
                                                                Remove from team
                                                            </button>
                                                            <button class="flex items-center capitalize text-gray-600 font-semibold w-full  p-4  rounded hover:bg-traivis-500 hover:text-white hover:fill-white">
                                                                <svg class="h-5 mr-2 w-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M24,16v5a3,3,0,0,1-3,3H16a8,8,0,0,1-6.92-4,10.968,10.968,0,0,0,2.242-.248A5.988,5.988,0,0,0,16,22h5a1,1,0,0,0,1-1V16a5.988,5.988,0,0,0-2.252-4.678A10.968,10.968,0,0,0,20,9.08,8,8,0,0,1,24,16ZM17.977,9.651A9,9,0,0,0,8.349.023,9.418,9.418,0,0,0,0,9.294v5.04C0,16.866,1.507,18,3,18H8.7A9.419,9.419,0,0,0,17.977,9.651Zm-4.027-5.6a7.018,7.018,0,0,1,2.032,5.46A7.364,7.364,0,0,1,8.7,16H3c-.928,0-1-1.275-1-1.666V9.294A7.362,7.362,0,0,1,8.49,2.018Q8.739,2,8.988,2A7.012,7.012,0,0,1,13.95,4.051Z"></path>
                                                                </svg>                                                                            Message
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-center">
                                        <div class="ml-4 flex flex justify-end flex-col">
                                            <div class="whitespace-nowrap font-medium shadow-sm text-gray-900">
                                                <div class=" flex flex-row justify-between items-center ">

                                                                                        <span class="">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-cyan-500" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z"></path></svg>
                                                                                        </span>
                                                    <span class="rounded-full p-1 bg-cyan-500 text-white ml-2 px-2">{{$type}}</span>
                                                </div>
                                            </div>
                                            <div class="whitespace-nowrap font-medium  mt-3 shadow-sm text-gray-900" >
                                                <h3 class="rounded-full border text-center items-center px-1 group-hover:border-cyan-500 transition-colors border-cyan-500">Admin</h3>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/ employee header-->


                                <!--employee summary-->
                                <div class=" ">
                                    <div class="flex flex-col md:flex-row justify-evenly flex-wrap items-center text-gray-500">

                                        <div class="cursor-pointer w-full max-w-fit lg:w-1/3 p-10 border-b-4 border-transparent hover:border-traivis-500 transition-all">
                                            <div class="w-fit items-center flex md:flex-row flex-col rounded-lg ">
                                                <div class="flex flex-col md:mr-5 md:mb-0 md:mt-0 mb-2">
                                                    <h2 class="text-center font-semibold text-6xl tracking-tighter">
                                                        {{$courses_hours}} </h2>
                                                    <h3 class="text-3xl text-gray-600 font-light">
                                                        Hour</h3>
                                                </div>
                                                <div class="flex md:flex-col flex-row gap-x-3">
                                                    <p class="whitespace-nowrap w-fit mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-traivis-50 hover:text-traivis-500 hover:border-traivis-500 border border-gray-300 font-bold text-xs">
                                                        <span class="pr-2">{{$f2f_hours}}</span>F2F</p>
                                                    <p class="whitespace-nowrap w-fit mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-pink-50 hover:text-indigo-500 hover:border-indigo-500 border border-gray-300 font-bold text-xs">
                                                        <span class="pr-2">{{$live_hours}}</span>Live</p>
                                                    <p class="whitespace-nowrap w-fit mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-gray-50 hover:text-gray-500 hover:border-gray-500 border border-gray-300 font-bold text-xs">
                                                        <span class="pr-2">{{$recorded_hours}}</span>Recorded</p>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="cursor-pointer w-full max-w-fit lg:w-1/3 p-10 border-b-4 border-transparent hover:border-traivis-500 transition-all">
                                            <div class="w-fit items-center flex md:flex-row flex-col rounded-lg ">
                                                <div class="flex flex-col md:mr-5 md:mb-0 md:mt-0 mb-2">
                                                    <h2 class="text-center font-semibold text-6xl tracking-tighter">
                                                        {{$courses_count}} </h2>
                                                    <h3 class="text-3xl text-gray-600 font-light">
                                                        Course</h3>
                                                </div>
<!--                                                <div class="flex md:flex-col flex-row gap-x-3">-->
<!---->
<!--                                                    <p class="whitespace-nowrap w-fit mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-pink-50 hover:text-indigo-500 hover:border-indigo-500 border border-gray-300 font-bold text-xs">-->
<!--                                                        <span class="pr-2">3</span>Delivery</p>-->
<!--                                                    <p class="whitespace-nowrap w-fit mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-gray-50 hover:text-gray-500 hover:border-gray-500 border border-gray-300 font-bold text-xs">-->
<!--                                                        <span class="pr-2">2</span>In progress</p>-->
<!--                                                </div>-->


                                            </div>
                                        </div>

                                        <div class="cursor-pointer w-full max-w-fit lg:w-1/3 p-10 border-b-4 border-transparent hover:border-traivis-500 transition-all">
                                            <div class="w-fit items-center flex md:flex-row flex-col rounded-lg ">
                                                <div class="flex flex-col md:mr-5 md:mb-0 md:mt-0 mb-2">
                                                    <h2 class="text-center font-semibold text-6xl tracking-tighter">
                                                        {{$tasks_count}}</h2>
                                                    <h3 class="text-3xl text-gray-600 font-light">
                                                        Task</h3>
                                                </div>
                                                <div class="flex md:flex-col flex-row gap-x-3">

                                                    <p class="whitespace-nowrap w-fit mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-pink-50 hover:text-indigo-500 hover:border-indigo-500 border border-gray-300 font-bold text-xs">
                                                        <span class="pr-2"> {{$tasks_approved_count}}</span>Approved</p>
                                                    <p class="whitespace-nowrap w-fit mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-gray-50 hover:text-gray-500 hover:border-gray-500 border border-gray-300 font-bold text-xs">
                                                        <span class="pr-2"> {{$tasks_progress_count}}</span>In progress</p>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--/ employee summary-->


                                <!-- Courses Section-->
                                <div x-data="{addCourse:false, EditCourse:false, courses:true, CourseId:true}"
                                     class="text-gray-700 my-16 border-l-2 border-gray-400 hover:border-traivis-500 focus-within:border-traivis-500 px-4 transition-all">

                                    <!-- Courses header-->
                                    <div class="flex flex-row justify-between mb-4 items-center ">
                                        <h2 :class="addCourse ? 'hidden' : 'block'"
                                            class="text-2xl font-bold text-gray-500">Courses </h2>

                                        <h2 :class="addCourse ? 'block' : 'hidden'"
                                            class="text-2xl font-bold text-gray-500">Assign New Course </h2>

                                        <!--add course Buttons -->
                                        <div class="flex gap-x-5">
                                            <button @click="addCourse=true, courses=false"
                                                    :class="addCourse ? 'hidden' : 'block'"
                                                    class=" w-auto p-2 px-4  text-white bg-traivis-500   hover:bg-traivis-700   mt-4 mr-1  rounded-full">Assign New Course</button>

                                            <button @click="addCourse=false, courses=true"
                                                    :class="addCourse ? 'block' : 'hidden'"
                                                    class="w-auto p-2 px-4 bg-gray-50 border hover:text-white hover:bg-gray-400 hover:border-indigo-500px-6 mt-4 mr-1 rounded-full">Cancel</button>

                                            <button @click="addCourse=false, courses=true"
                                                    :class="addCourse ? 'block' : 'hidden'"
                                                    class="w-auto p-2 px-4  text-white bg-traivis-500   hover:bg-traivis-700   mt-4 mr-1  rounded-full">Assign</button>
                                        </div>
                                        <!--/ add course Buttons -->

                                    </div>
                                    <!--/ Courses header-->

                                    <!--add course Form-->
                                    <div x-show="addCourse" class="p-2 flex flex-row flex-wrap ">

                                        <!--Course Details-->
                                        <div class="w-full whitespace-nowrap mb-5">

                                            <!--label-->
                                            <div class="py-3 font-bold text-sm text-gray-500 items-center flex gap-x-2">
                                                <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24" width="512" height="512"><path d="M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5,5,2.24,5,5-2.24,5-5,5Z"/></svg>
                                                Course Details
                                            </div>
                                            <!--/label-->

                                            <!--Form-->
                                            <div class="flex flex-wrap justify-center px-3 gap-y-3">
                                                <div class="w-full md:w-1/2  flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                    <p class="w-full">
                                                        <label for="">Name</label>
                                                    </p>
                                                    <div class=" w-full">
                                                        <div x-data="{cName:false ,cSelected:''}"  class="w-full float-left  rounded border border-gray-300 shadow-sm p-3 ">

                                                            <div class="w-full ">
                                                                <select wire:model="assign_course.course_id" id="projectes" x-model="cSelected" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">

                                                                    <option value="" readonly="" >Select Course Name </option>
                                                                    @foreach($allcourses as $course)
                                                                    <option value="{{$course->id}}">{{substr($course->title,100)}}</option>
                                                                    @endforeach

                                                                </select>


                                                            </div>

                                                            <div class="p-2 flex flex-row justify-between items-center">
                                                                <div class="w-1/4">
                                                                    or
                                                                </div>
                                                                <div @click="cName=true" class="w-3/4 flex justify-end gap-2 items-center ">
                                                                    <span class="">Add new course</span>
                                                                    <svg id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" class="w-5 h-5">
                                                                        <path d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>

                                                                <input wire:model="assign_course.title"  type="text"  placeholder="course name" class="shadow rounded w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors     ">




                                                        </div>



                                                    </div>

                                                </div>


                                                <div  class="w-full md:w-1/2 flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                    <p class="w-full">
                                                        <label for="">Description</label>
                                                    </p>
                                                    <p class=" w-full">
                                                        <textarea wire:model="assign_course.short_description"  placeholder="course description " cols="48" rows="9" class="  shadow rounded w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 font-medium leading-none text-gray-600   border-gray-300 py-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800   " ></textarea>

                                                    </p>

                                                </div>

                                                <div class="w-full md:w-1/2 flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                    <p class="w-full">
                                                        <label for="">Level</label>


                                                    </p>
                                                    <p class=" w-full">
                                                        <select wire:model="assign_course.course_level"  id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">

                                                            <option value="US">Level One</option>
                                                            <option value="CA">Level Tow</option>
                                                            <option value="FR">Level Three</option>
                                                        </select>
                                                    </p>

                                                </div>

                                                <div class="w-full md:w-1/2 flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                    <p class="w-full">
                                                        <label for="">Seats</label>

                                                    </p>
                                                    <p class=" w-full">
                                                        <input wire:model="assign_course.seats"  type="number"  placeholder="course seats" class="shadow rounded w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors     ">
                                                    </p>

                                                </div>


                                                <div class="w-full md:w-1/2 flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                    <p class="w-1/4">

                                                        <label for=""> Delivery Mode</label>
                                                    </p>
                                                    <div class="text-left w-full">
                                                        <div class="w-full flex flex-col items-center h-fit mx-auto " x-data="dropdown()" x-init="loadOptions()">
                                                            <input wire:model="assign_course.delivery_mode"  name="values" type="hidden" x-bind:value="selectedValues()" value="">

                                                            <div class="inline-block relative w-full ">
                                                                <div class="flex flex-col items-center relative">

                                                                    <!--input area-->
                                                                    <div class="w-full" x-on:click="open">
                                                                        <div class="mt-1 px-1 flex border border-gray-300 bg-white rounded-lg">
                                                                            <div class="flex flex-auto h-10  truncate flex-row overflow-x-visible">


                                                                                <!--selected-->
                                                                                <template :key="options[option].value" x-for="(option,index) in selected">
                                                                                    <div class="flex justify-center items-center m-1 font-medium px-2 bg-white rounded-full bg-traivis-100 border border-traivis-500">

                                                                                        <div class="font-normal leading-none max-w-full flex-initial " x-html="options[option].text" x-model="options[option]">
                                                                                        </div>

                                                                                        <div class="flex flex-auto flex-row-reverse">
                                                                                            <div x-on:click.stop="remove(index,option)">
                                                                                                <svg class="fill-current h-4 w-4 " role="button" viewBox="0 0 20 20">
                                                                                                    <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                                                                                                            c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                                                                                                            l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                                                                                                            C14.817,13.62,14.817,14.38,14.348,14.849z"></path>
                                                                                                </svg>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </template>
                                                                                <!---->

                                                                                <!--input-->
                                                                                <div class="flex-1" x-show="selected.length == 0">
                                                                                    <input  class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800" placeholder="Delivery Mode" x-bind:value="selectedValues()">
                                                                                </div>
                                                                            </div>


                                                                            <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center justify-end border-gray-200 svelte-1l8159u">
                                                                                <button class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none" type="button" x-on:click="open" x-show="isOpen() === true" style="display: none;">
                                                                                    <svg class="fill-current h-4 w-4" version="1.1" viewBox="0 0 20 20"><path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z"></path></svg>
                                                                                </button>

                                                                                <button @click="close" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none" type="button" x-show="isOpen() === false">
                                                                                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20"><path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z"></path></svg>
                                                                                </button>
                                                                            </div>

                                                                        </div>
                                                                    </div>


                                                                    <div class="w-full px-4">
                                                                        <div class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select" x-on:click.away="close" x-show.transition.origin.top="isOpen()" style="display: none;">
                                                                            <div class="flex flex-col w-full overflow-y-auto h-fit">


                                                                                <template :key="option" class="overflow-auto" x-for="(option,index) in options">
                                                                                    <div @click="select(index,$event)" class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100">
                                                                                        <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">

                                                                                            <div class="w-full items-center flex justify-between">
                                                                                                <div class="mx-2 leading-6" x-html="option.text" x-model="option"></div>
                                                                                                <div x-show="option.selected">
                                                                                                    <svg class="svg-icon" viewBox="0 0 20 20"><path d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z" fill="none"></path></svg>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </template>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full md:w-1/2 flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                    <p class="w-full">
                                                        <label for="">Duration</label>
                                                    </p>
                                                    <p class=" w-full">
                                                        <input wire:model="assign_course.course_duration"  type="number"  placeholder="course hours" class="shadow rounded w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors     ">
                                                    </p>
                                                </div>



                                            </div>
                                            <!--/Form-->

                                        </div>
                                        <!--/Course Details-->


                                        <!--Add Course Tasks-->
                                        <div class="w-full overflow-x-auto overflow-y-hidden whitespace-nowrap mb-5" x-data="{tasksNum :1}">

                                            <!--label-->
                                            <div class="py-3 font-bold text-sm text-gray-500 items-center flex gap-x-2">
                                                <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24" width="512" height="512"><path d="M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5,5,2.24,5,5-2.24,5-5,5Z"/></svg>
                                                Course Tasks
                                                <span class="p-3 w-5 h-5 flex items-center justify-center inline-block rounded-full bg-traivis-100 text-lg">
                                                                                          {{--  {{$assign_tasks}} --}}
                                                                                        </span>
                                            </div>
                                            <!--/label-->

                                            <!--Tasks Table-->
                                            <div class=" rounded-xl shadow-dashboard border">
                                                <table class="w-full text-center">

                                                    <thead class=" border-b-4 border-gray-300 ">
                                                    <tr class="font-medium ">
                                                        <td  class="text-center px-6 py-3">
                                                            Name
                                                        </td>
                                                        <td  class="text-center px-6 py-3">
                                                            Description
                                                        </td>

                                                        <td  class="text-center px-6 py-3">
                                                            Target Date
                                                        </td>
                                                        <td  class="text-center px-6 py-3">
                                                            Action
                                                        </td>
                                                    </tr>
                                                    </thead>

                                                    <tbody class="cursor-pointer">


                                                        <tr class=" hover:bg-traivis-50 ">
                                                            <td class=" px-2 py-3 text-center">
                                                                <select wire:model="assign_task_name"  id="countries" class="h-10 bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                    <option readonly selected value="">Please Select Task Type</option>
                                                                    @foreach($taskTypes as $type)
                                                                    <option value="{{$type['value']}}">{{$type['value']}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>

                                                            <td class=" px-2 py-3 text-center">
                                                                <textarea wire:model="assign_task_desc"  placeholder=" description " cols="25" rows="" class="h-10  shadow rounded w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 font-medium leading-none text-gray-600   border-gray-300 py-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800   " ></textarea>
                                                            </td>

                                                            <td class=" px-2 py-3 text-center">
                                                                <input wire:model="assign_target_date"  type="date"   class="h-10 w-full shadow rounded  bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-800 font-medium leading-none text-gray-600   border-gray-300 py-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 ">
                                                            </td>

                                                            <td class=" text-center">
                                                                <button  class="  cursor-pointer hover:bg-traivis-500 hover:fill-white p-3 rounded-full">
                                                                    <svg class="m-auto" id="Outline" viewBox="0 0 24 24" width="25" height="25"><path d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z"></path><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z"></path><path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"></path></svg>
                                                                </button>
                                                            </td>
                                                        </tr>


                                                    </tbody>

                                                </table>
                                            </div>
                                            <!--/ Tasks Table-->

                                            <!--Add task button-->
                                            <div class="group cursor-pointer mr-4"  @click="tasksNum +=1">
                                                <div wire:click="addMoreTask()" class="w-full flex justify-end gap-2 items-center mt-4">
                                                    <span class="">Add more tasks</span>
                                                    <svg id="Layer_1" height="512" viewBox="0 0 24 24" width="512" class="w-5 h-5">
                                                        <path d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <!--/Add task button-->

                                        </div>

                                        <!--/ ADD Course Tasks-->


                                        <!--save & cancel-->
                                        <div class="w-full flex flex-row justify-evenly">
                                            <button  class=" w-auto p-2 px-4 bg-gray-50 border hover:text-white hover:bg-gray-400 hover:border-indigo-500px-6 mt-4 mr-1 rounded-full"
                                                     @click="addCourse=false, courses=true">
                                                Cancel
                                            </button>

                                            <button wire:click="assignCourseTasks()" class=" w-auto p-2 px-4  text-white bg-traivis-500   hover:bg-traivis-700   mt-4 mr-1  rounded-full">
                                                Assign
                                            </button>
                                        </div>
                                        <!--/ save & cancel-->


                                    </div>
                                    <!--/ add course Form-->

                                    @foreach($courses as $course)
                                    <!-- Course 1 Content (Collapse) -->
                                    <div style="width: 100 % !important;" x-show="courses" class="mt-5 border-2 hover:border-gray-300 rounded-lg transition-all group/c relative"
                                         :class="open ? 'border-gray-300' : 'border-gray-200'"
                                         x-data="{open:false}">

                                        <!--Collapse header-->
                                        <div @click="open = !open" class=" flex gap-x-5 cursor-pointer p-5 items-center text-gray-500 rounded-lg transition-all">

                                            <div class="">
                                                <svg class="w-5 h-5" fill="currentColor" height="512" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                                                                            <path d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z"></path>
                                                                                        </svg>
                                            </div>

                                            <div class="flex-grow font-bold flex flex-1 items-center justify-start gap-x-5">
                                                <div class="group/d relative">
                                                    <div class="truncate xl:w-44 w-28">
                                                        <span class="whitespace-nowrap">{{$course->title}}</span>
                                                    </div>
                                                    <div class="z-50 font-normal w-56 flex-wrap pointer-events-none absolute top-8 left-1/2 -translate-x-1/2  rounded bg-black px-2 py-1 text-white opacity-0 transition before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover/d:opacity-100">
                                                        {{$course->short_description}}
                                                    </div>
                                                </div>

                                                <!--info bar-->
                                                <div class="w-fit items-center gap-x-6 hidden sm:flex">

                                                    <!--Level-->
                                                    <div class="relative group focus-within:z-10 ">
                                                        <div class=" inset-y-0  flex items-center pointer-events-none">
                                                            <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24" width="512" height="512"><path d="M12,6A3,3,0,0,0,9,9V21a3,3,0,0,0,6,0V9A3,3,0,0,0,12,6Zm1,15a1,1,0,0,1-2,0V9a1,1,0,0,1,2,0Z"></path><path d="M21,0a3,3,0,0,0-3,3V21a3,3,0,0,0,6,0V3A3,3,0,0,0,21,0Zm1,21a1,1,0,0,1-2,0V3a1,1,0,0,1,2,0Z"></path><path d="M3,12a3,3,0,0,0-3,3v6a3,3,0,0,0,6,0V15A3,3,0,0,0,3,12Z"></path></svg>
                                                            <span class="font-normal ml-3 block truncate hidden md:block sr-only"> Beginners </span>
                                                        </div>

                                                        <span class="z-50 font-normal pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                                                                Level : Beginners
                                                                                                </span>
                                                    </div>
                                                    <!--/ Level-->

                                                    <!--Seats-->
                                                    <div class="relative group focus-within:z-10 ">
                                                        <div class=" inset-y-0  flex items-center pointer-events-none">
                                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 512 512" ><g><path d="M255.302,207.587c42.904-32.404,98.392-43.122,150.277-29.028c0.361-4.247,0.764-8.281,0.764-12.507   c0.01-83.653-67.796-151.474-151.448-151.484c-83.653-0.01-151.474,67.796-151.485,151.448v0.036c0,4.247,0.404,8.494,0.786,12.741   C156.306,164.46,212.116,175.094,255.302,207.587z"></path><path d="M239.334,295.158c10.582,1.268,21.28,1.225,31.852-0.127c-4.156-9.917-9.512-19.288-15.947-27.902   C248.815,275.789,243.473,285.202,239.334,295.158z"></path><path d="M448.953,223.411c-8.317-5.992-17.222-11.124-26.577-15.315c-13.313,52.191-50.108,95.239-99.59,116.514   c0.895,6.894,1.363,13.837,1.401,20.789c0.093,46.492-18.689,91.03-52.046,123.415c67.766,48.825,162.282,33.471,211.108-34.296   C532.075,366.753,516.72,272.237,448.953,223.411z"></path><polygon points="422.376,208.097 422.376,208.097 422.376,208.097  "></polygon><path d="M186.46,345.399c0.027-6.816,0.474-13.624,1.338-20.385c-49.73-20.945-86.853-63.877-100.397-116.111   C11.617,244.075-21.305,334.021,13.867,409.804c35.171,75.783,125.118,108.705,200.901,73.534   c8.479-3.935,16.575-8.648,24.184-14.077C205.319,436.843,186.362,392.112,186.46,345.399z"></path><path d="M281.4,336.693c-17.277,2.682-34.86,2.732-52.152,0.149c-0.212,2.867-0.319,5.733-0.319,8.494   c-0.07,28.377,9.206,55.988,26.395,78.568c17.191-22.578,26.467-50.19,26.395-78.568   C281.718,342.533,281.612,339.602,281.4,336.693z"></path><path d="M198.075,283.31c6.368-16.582,15.257-32.081,26.352-45.952c-26.437-18.05-58.584-25.759-90.332-21.659   C146.427,245.307,169.192,269.364,198.075,283.31z"></path><path d="M286.199,237.358c11.022,13.762,19.86,29.139,26.203,45.591c28.473-14.055,50.887-37.955,63.088-67.271   C344.079,211.786,312.328,219.495,286.199,237.358z"></path></g></svg>
                                                            <span class="font-normal ml-3 block truncate hidden md:block sr-only"> 25 </span>
                                                        </div>

                                                        <span class="z-50 font-normal pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                                                                Seats : 25
                                                                                               </span>
                                                    </div>
                                                    <!--/Seats-->


                                                    <!--delivery mode-->
                                                    <div class="relative group focus-within:z-10 ">
                                                        <div class=" inset-y-0  flex items-center pointer-events-none">
                                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" width="512" height="512"><path d="M5,20H13c2.757,0,5-2.243,5-5v-6c0-2.757-2.243-5-5-5H5C2.243,4,0,6.243,0,9v6C0,17.757,2.243,20,5,20ZM24,8.313v7.319c0,.757-.42,1.437-1.097,1.775-.283,.141-.587,.211-.889,.211-.421,0-.837-.135-1.189-.399-.037-.028-.825-.81-.825-.81V7.544s.786-.789,.825-.818c.604-.454,1.399-.527,2.078-.188s1.097,1.018,1.097,1.775Z"/></svg>
                                                            <span class="font-normal ml-3 block truncate hidden md:block sr-only"> Recorded </span>
                                                        </div>

                                                        <span class="z-50 font-normal pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                                                                Delivery Mode : Recorded
                                                                                                </span>
                                                    </div>
                                                    <!--/delivery mode-->

                                                    <!--duration-->
                                                    <div class="relative group focus-within:z-10 ">
                                                        <div class=" inset-y-0  flex items-center pointer-events-none">
                                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm4,13h-4c-.552,0-1-.447-1-1V6c0-.553,.448-1,1-1s1,.447,1,1v5h3c.553,0,1,.447,1,1s-.447,1-1,1Z"></path></svg>
                                                            <span class="font-normal ml-3 block truncate hidden md:block sr-only"> 60 hrs </span>
                                                        </div>

                                                        <span class="z-50 font-normal pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                                                                Duration : 60 hrs
                                                                                                </span>
                                                    </div>
                                                    <!--/duration-->

                                                </div>
                                                <!--/ info bar-->
                                            </div>


                                            <div class="ml-5 ">
                                                <svg :class="open ? 'rotate-90' : 'rotate-0'" class="w-5 h-5 transition-transform rotate-0" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <!--/ Collapse header-->

                                        <!--Edit Course - buttons-->
                                        <div>
                                            <button @click="EditCourse = true, CourseId = false, open = true"
                                                    :class="EditCourse ? 'invisible' : 'visible'"
                                                    class="group/x absolute top-2 right-12 z-50 cursor-pointer hover:bg-traivis-500 fill-gray-500 hover:fill-white p-3 rounded-full transition-all">
                                                <svg viewBox="0 0 24 24" width="25" height="25"><path d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z"></path><path d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z"></path></svg>
                                                <span class="absolute -bottom-8 -left-1 hidden group-hover/x:block rounded-lg bg-black text-white px-2 py-1 text-sm">Edit</span>
                                            </button>

                                            <button  @click="EditCourse=false, CourseId=true, open = true"
                                                     :class="EditCourse ? 'visible' : 'invisible'"
                                                     class="group/x absolute top-2 right-12 z-50 cursor-pointer hover:bg-traivis-500 fill-green-600 hover:fill-white p-3 rounded-full transition-all">
                                                <svg viewBox="0 0 24 24" width="25" height="25"><path d="M12,24c-1.626,0-3.16-.714-4.208-1.959-1.54,.176-3.127-.405-4.277-1.555-1.149-1.15-1.729-2.74-1.59-4.362-1.211-.964-1.925-2.498-1.925-4.124s.714-3.16,1.96-4.208c-.175-1.537,.405-3.127,1.555-4.277,1.15-1.15,2.737-1.733,4.361-1.59,.964-1.21,2.498-1.925,4.124-1.925s3.16,.714,4.208,1.959c1.542-.173,3.127,.405,4.277,1.555,1.149,1.15,1.729,2.74,1.59,4.362,1.211,.964,1.925,2.498,1.925,4.124s-.714,3.16-1.96,4.208c.175,1.537-.405,3.127-1.555,4.277-1.151,1.15-2.741,1.726-4.361,1.59-.964,1.21-2.498,1.925-4.124,1.925Zm-4.127-3.924c.561,0,1.081,.241,1.448,.676,.668,.793,1.644,1.248,2.679,1.248s2.011-.455,2.679-1.248c.403-.479,.99-.721,1.616-.67,1.034,.087,2.044-.28,2.776-1.012,.731-.731,1.1-1.743,1.012-2.776-.054-.624,.19-1.213,.67-1.617,.792-.667,1.247-1.644,1.247-2.678s-.455-2.011-1.247-2.678c-.479-.403-.724-.993-.67-1.617,.088-1.033-.28-2.045-1.012-2.776s-1.748-1.094-2.775-1.012c-.626,.056-1.214-.191-1.617-.669-.668-.793-1.644-1.248-2.679-1.248s-2.011,.455-2.679,1.248c-.404,.479-.993,.719-1.616,.67-1.039-.09-2.044,.28-2.776,1.012-.731,.731-1.1,1.743-1.012,2.776,.054,.624-.19,1.213-.67,1.617-.792,.667-1.247,1.644-1.247,2.678s.455,2.011,1.247,2.678c.479,.403,.724,.993,.67,1.617-.088,1.033,.28,2.045,1.012,2.776,.732,.731,1.753,1.095,2.775,1.012,.057-.005,.113-.007,.169-.007Zm4.928-4.941l4.739-4.568c.397-.383,.409-1.017,.025-1.414-.383-.397-1.016-.409-1.414-.026l-4.752,4.581c-.391,.391-1.022,.391-1.44-.025l-2.278-2.117c-.402-.375-1.036-.353-1.413,.052-.376,.404-.353,1.037,.052,1.413l2.252,2.092c.586,.586,1.357,.879,2.126,.879,.765,0,1.526-.289,2.104-.866Z"/></svg>
                                                <span class="absolute -bottom-8 -left-1 hidden group-hover/x:block rounded-lg bg-black text-white px-2 py-1 text-sm">Save</span>
                                            </button>

                                            <button  @click="EditCourse=false, CourseId=true, open = true"
                                                     :class="EditCourse ? 'visible' : 'invisible'"
                                                     class="group/x absolute top-2 right-24 mx-2 z-50 cursor-pointer hover:bg-traivis-500 fill-red-500 hover:fill-white p-3 rounded-full transition-all">
                                                <svg viewBox="0 0 24 24" width="25" height="25"><path d="M16,8a1,1,0,0,0-1.414,0L12,10.586,9.414,8A1,1,0,0,0,8,9.414L10.586,12,8,14.586A1,1,0,0,0,9.414,16L12,13.414,14.586,16A1,1,0,0,0,16,14.586L13.414,12,16,9.414A1,1,0,0,0,16,8Z"/><path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z"/></svg>
                                                <span class="absolute -bottom-8 -left-1 hidden group-hover/x:block rounded-lg bg-black text-white px-2 py-1 text-sm">Cancel</span>
                                            </button>
                                        </div>
                                        <!--/ Edit Course - buttons-->

                                        <!--collapse content-->
                                        <div class="p-2 rounded-b-lg" style="display: none;"
                                             x-show="open"
                                             x-transition:enter="transition-opacity ease-linear"
                                             x-transition:enter-end="opacity-100"
                                             x-transition:enter-start="opacity-0"
                                             x-transition:leave="transition-opacity ease-linear"
                                             x-transition:leave-end="opacity-0"
                                             x-transition:leave-start="opacity-100">

                                            <!--Course 1-->
                                            <div x-show="CourseId" class="p-2 flex flex-row flex-wrap ">

                                                <!--course Details-->
                                                <div class=" overflow-x-clip ">
                                                    <div class="flex flex-col w-full gap-y-10 mt-5">

                                                        <!--Course name-->
                                                        <div class="whitespace-normal relative px-5 py-3 rounded-lg border border-gray-300 ">
                                                                                                        <span class="absolute bg-white -top-2.5 left-2 h-fit px-3 pl-0 font-bold text-sm text-gray-500 items-center flex gap-x-3">
                                                                                                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24" width="512" height="512"><path d="M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5,5,2.24,5,5-2.24,5-5,5Z"/></svg>
                                                                                                            Course Name
                                                                                                        </span>
                                                            <span class="mt-1 flex">
                                                                                                          {{$course->title}}
                                                                                                        </span>
                                                        </div>
                                                        <!--/ Course name-->

                                                        <!--Course Description-->
                                                        <div class="whitespace-normal relative px-5 py-3 rounded-lg border border-gray-300 ">
                                                                                                        <span class="absolute bg-white -top-2.5 left-2 h-fit px-3 pl-0 font-bold text-sm text-gray-500 items-center flex gap-x-3">
                                                                                                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24" width="512" height="512"><path d="M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5,5,2.24,5,5-2.24,5-5,5Z"/></svg>
                                                                                                            Course Description
                                                                                                        </span>

                                                            <span class="mt-1 flex-wrap flex w-full text-justify"> {{$course->short_description}}
                                                                                                        </span>
                                                        </div>
                                                        <!--/ Course Description-->

                                                        <!--Course info-->
                                                        <div class="whitespace-normal relative px-5 py-3 rounded-lg border border-gray-300 ">
                                                                                                        <span class="absolute bg-white -top-2.5 left-2 h-fit px-3 pl-0 font-bold text-sm text-gray-500 items-center flex gap-x-2">
                                                                                                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24" width="512" height="512"><path d="M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5,5,2.24,5,5-2.24,5-5,5Z"/></svg>
                                                                                                            Course Info
                                                                                                        </span>
                                                            <div class="mt-1 flex  flex-wrap gap-y-4 flex-row items-center justify-between gap-x-3">

                                                                <!--Level-->
                                                                <div class="relative group focus-within:z-10 ">
                                                                    <div class=" inset-y-0  flex items-center pointer-events-none">
                                                                        <div class="flex items-center">
                                                                            <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24" width="512" height="512"><path d="M12,6A3,3,0,0,0,9,9V21a3,3,0,0,0,6,0V9A3,3,0,0,0,12,6Zm1,15a1,1,0,0,1-2,0V9a1,1,0,0,1,2,0Z"></path><path d="M21,0a3,3,0,0,0-3,3V21a3,3,0,0,0,6,0V3A3,3,0,0,0,21,0Zm1,21a1,1,0,0,1-2,0V3a1,1,0,0,1,2,0Z"></path><path d="M3,12a3,3,0,0,0-3,3v6a3,3,0,0,0,6,0V15A3,3,0,0,0,3,12Z"></path></svg>
                                                                            <span class="font-normal ml-3 block truncate "> Beginners </span>
                                                                        </div>
                                                                    </div>

                                                                    <span class="z-50 font-normal pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                                                                            Level : Beginners
                                                                                                            </span>
                                                                </div>
                                                                <!--/ Level-->

                                                                <!--Seats-->
                                                                <div class="relative group focus-within:z-10 ">
                                                                    <div class=" inset-y-0  flex items-center pointer-events-none">
                                                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 512 512" ><g><path d="M255.302,207.587c42.904-32.404,98.392-43.122,150.277-29.028c0.361-4.247,0.764-8.281,0.764-12.507   c0.01-83.653-67.796-151.474-151.448-151.484c-83.653-0.01-151.474,67.796-151.485,151.448v0.036c0,4.247,0.404,8.494,0.786,12.741   C156.306,164.46,212.116,175.094,255.302,207.587z"></path><path d="M239.334,295.158c10.582,1.268,21.28,1.225,31.852-0.127c-4.156-9.917-9.512-19.288-15.947-27.902   C248.815,275.789,243.473,285.202,239.334,295.158z"></path><path d="M448.953,223.411c-8.317-5.992-17.222-11.124-26.577-15.315c-13.313,52.191-50.108,95.239-99.59,116.514   c0.895,6.894,1.363,13.837,1.401,20.789c0.093,46.492-18.689,91.03-52.046,123.415c67.766,48.825,162.282,33.471,211.108-34.296   C532.075,366.753,516.72,272.237,448.953,223.411z"></path><polygon points="422.376,208.097 422.376,208.097 422.376,208.097  "></polygon><path d="M186.46,345.399c0.027-6.816,0.474-13.624,1.338-20.385c-49.73-20.945-86.853-63.877-100.397-116.111   C11.617,244.075-21.305,334.021,13.867,409.804c35.171,75.783,125.118,108.705,200.901,73.534   c8.479-3.935,16.575-8.648,24.184-14.077C205.319,436.843,186.362,392.112,186.46,345.399z"></path><path d="M281.4,336.693c-17.277,2.682-34.86,2.732-52.152,0.149c-0.212,2.867-0.319,5.733-0.319,8.494   c-0.07,28.377,9.206,55.988,26.395,78.568c17.191-22.578,26.467-50.19,26.395-78.568   C281.718,342.533,281.612,339.602,281.4,336.693z"></path><path d="M198.075,283.31c6.368-16.582,15.257-32.081,26.352-45.952c-26.437-18.05-58.584-25.759-90.332-21.659   C146.427,245.307,169.192,269.364,198.075,283.31z"></path><path d="M286.199,237.358c11.022,13.762,19.86,29.139,26.203,45.591c28.473-14.055,50.887-37.955,63.088-67.271   C344.079,211.786,312.328,219.495,286.199,237.358z"></path></g></svg>
                                                                        <span class="font-normal ml-3 block truncate "> 25 </span>
                                                                    </div>

                                                                    <span class="z-50 font-normal pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                                                                            Seats : 25
                                                                                                           </span>
                                                                </div>
                                                                <!--/Seats-->


                                                                <!--delivery mode-->
                                                                <div class="relative group focus-within:z-10 ">
                                                                    <div class=" inset-y-0  flex items-center pointer-events-none">
                                                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" width="512" height="512"><path d="M5,20H13c2.757,0,5-2.243,5-5v-6c0-2.757-2.243-5-5-5H5C2.243,4,0,6.243,0,9v6C0,17.757,2.243,20,5,20ZM24,8.313v7.319c0,.757-.42,1.437-1.097,1.775-.283,.141-.587,.211-.889,.211-.421,0-.837-.135-1.189-.399-.037-.028-.825-.81-.825-.81V7.544s.786-.789,.825-.818c.604-.454,1.399-.527,2.078-.188s1.097,1.018,1.097,1.775Z"/></svg>
                                                                        <span class="font-normal ml-3 block truncate "> Recorded </span>
                                                                    </div>

                                                                    <span class="z-50 font-normal pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                                                                            Delivery Mode : Recorded
                                                                                                            </span>
                                                                </div>
                                                                <!--/delivery mode-->

                                                                <!--duration-->
                                                                <div class="relative group focus-within:z-10 ">
                                                                    <div class=" inset-y-0  flex items-center pointer-events-none">
                                                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm4,13h-4c-.552,0-1-.447-1-1V6c0-.553,.448-1,1-1s1,.447,1,1v5h3c.553,0,1,.447,1,1s-.447,1-1,1Z"></path></svg>
                                                                        <span class="font-normal ml-3 block truncate "> 60 hrs </span>
                                                                    </div>

                                                                    <span class="z-50 font-normal pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                                                                            Duration : 60 hrs
                                                                                                            </span>
                                                                </div>
                                                                <!--/duration-->

                                                            </div>
                                                        </div>
                                                        <!--/ Course info-->

                                                        <!-- Course Tasks -->
                                                        <div class="whitespace-nowrap relative px-5 py-3 pb-0 rounded-lg border border-gray-300 ">
                                                            <div class="absolute bg-white -top-2.5 left-2 h-fit px-3 pl-0 font-bold text-sm text-gray-500 items-center flex gap-x-2">
                                                                <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24" width="512" height="512"><path d="M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5,5,2.24,5,5-2.24,5-5,5Z"/></svg>
                                                                Course Tasks
                                                                <span class="p-3 w-5 h-5 flex items-center justify-center inline-block rounded-full bg-traivis-100 text-lg">
                                                                                                                4
                                                                                                            </span>
                                                            </div>

                                                            <!-- Tasks Table-->
                                                            <div class="mt-1 overflow-x-auto overflow-y-hidden">

                                                                <table class="w-full text-center">
                                                                    <thead class=" border-b-4 border-gray-300 ">
                                                                    <tr class="font-medium text-gray-500">
                                                                        <th class=" px-2 py-3">
                                                                            Name
                                                                        </th>
                                                                        <th  class="  px-2 py-3">
                                                                            Target Date
                                                                        </th>
                                                                        <th  class="  px-2 py-3">
                                                                            Completion Date
                                                                        </th>
                                                                        <th class=" px-2 py-3">
                                                                            Task Progress
                                                                        </th>
<!--                                                                        <th class=" px-2 py-3">-->
<!--                                                                            Approval-->
<!--                                                                        </th>-->
                                                                    </tr>
                                                                    </thead>


                                                                    <tbody class="cursor-pointer">
                                                                    @forelse(App\Models\CourseTask::where('course_id',$course->id)
                                                                    ->where('instructor_id',$instructor->id)
                                                                    ->get() as $task)
                                                                    <tr class=" hover:bg-traivis-50 ">
                                                                        <td class=" px-2 py-3 text-center">
                                                                            <div class="flex flex-row justify-start items-center">

                                                                                <div class="text-3xl text-red-500 mr-8"></div>
                                                                                <div>{{$task->task_name}}</div>
                                                                            </div>
                                                                        </td>
                                                                        <td class=" px-2 py-3 text-center">
                                                                            {{$task->target_date}}
                                                                        </td>
                                                                        <td class=" px-2 py-3 text-center">
                                                                            {{$task->updated_at}}
                                                                        </td>
                                                                        <td class=" px-2 py-3 text-center items-center   ">
                                                                            <span class="bg-gray-400 px-2 py-1 rounded-full text-white">{{$task->task_status}}</span>
                                                                        </td>
<!--                                                                        <td class=" px-2 py-3 text-center">-->
<!--                                                                                                            <span class="mr-4 cursor-pointer text-center m-auto   p-3 rounded-full">-->
<!--                                                                                                                <svg class="m-auto w-5 h-5 fill-traivis-500"   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"  xml:space="preserve"  width="30" height="30"><g><path d="M405.333,0H106.667C47.786,0.071,0.071,47.786,0,106.667v298.667C0.071,464.214,47.786,511.93,106.667,512h298.667   C464.214,511.93,511.93,464.214,512,405.333V106.667C511.93,47.786,464.214,0.071,405.333,0z M426.667,172.352L229.248,369.771   c-16.659,16.666-43.674,16.671-60.34,0.012c-0.004-0.004-0.008-0.008-0.012-0.012l-83.563-83.541   c-8.348-8.348-8.348-21.882,0-30.229s21.882-8.348,30.229,0l83.541,83.541l197.44-197.419c8.348-8.318,21.858-8.294,30.176,0.053   C435.038,150.524,435.014,164.034,426.667,172.352z"/></g></svg>-->
<!--                                                                                                            </span>-->
<!--                                                                        </td>-->
                                                                    </tr>
                                                                    @empty
                                                                    <tr><td colspan="4">No Tasks</td></tr>
                                                                    @endforelse





                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--/ Tasks Table-->

                                                        </div>
                                                        <!--/ Course Tasks -->

                                                    </div>
                                                </div>
                                                <!--/ course Details  -->

                                            </div>
                                            <!--/ Course 1-->

                                            <!--Edit course 1 Form-->
                                            <div x-show="EditCourse" class="p-2   flex flex-row flex-wrap ">

                                                <!--Course Details-->
                                                <div class="w-full whitespace-nowrap mb-5">

                                                    <!--label-->
                                                    <div class="py-3 font-bold text-sm text-gray-500 items-center flex gap-x-2">
                                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24" width="512" height="512"><path d="M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5,5,2.24,5,5-2.24,5-5,5Z"/></svg>
                                                        Course Details
                                                    </div>
                                                    <!--/label-->

                                                    <!--Form-->
                                                    <div class="flex flex-wrap justify-center px-3 gap-y-3">
                                                        <div class="w-full md:w-1/2  flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                            <p class="w-full">
                                                                <label for="">Name</label>
                                                            </p>
                                                            <div class=" w-full">
                                                                <div x-data="{cName:false ,cSelected:''}"  class="w-full float-left  rounded border border-gray-300 shadow-sm p-3 ">

                                                                    <div class="w-full ">
                                                                        <select id="projectes" x-model="cSelected" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                            <option value="" >Course Name </option>
                                                                            <option value="Ahmed">Ahmed</option>
                                                                            <option value="Ibrahim">Ibrahim</option>
                                                                            <option value="Ammar">Ammar</option>

                                                                        </select>


                                                                    </div>

                                                                    <div class="p-2 flex flex-row justify-between items-center">
                                                                        <div class="w-1/4">
                                                                            or
                                                                        </div>
                                                                        <div @click="cName=true" class="w-3/4 flex justify-end gap-2 items-center ">
                                                                            <span class="">Add new course</span>
                                                                            <svg id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" class="w-5 h-5">
                                                                                <path d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <template x-if="cSelected==''">
                                                                        <input  type="text"  placeholder="course name" class="shadow rounded w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors     ">

                                                                    </template>


                                                                </div>



                                                            </div>

                                                        </div>


                                                        <div  class="w-full md:w-1/2 flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                            <p class="w-full">
                                                                <label for="">Description</label>
                                                            </p>
                                                            <p class=" w-full">
                                                                <textarea placeholder="course description " cols="48" rows="9" class="  shadow rounded w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 font-medium leading-none text-gray-600   border-gray-300 py-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800   " ></textarea>

                                                            </p>

                                                        </div>

                                                        <div class="w-full md:w-1/2 flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                            <p class="w-full">
                                                                <label for="">Level</label>


                                                            </p>
                                                            <p class=" w-full">
                                                                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">

                                                                    <option value="US">Level One</option>
                                                                    <option value="CA">Level Tow</option>
                                                                    <option value="FR">Level Three</option>
                                                                </select>
                                                            </p>

                                                        </div>

                                                        <div class="w-full md:w-1/2 flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                            <p class="w-full">
                                                                <label for="">Seats</label>

                                                            </p>
                                                            <p class=" w-full">
                                                                <input type="number"  placeholder="course seats" class="shadow rounded w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors     ">
                                                            </p>

                                                        </div>


                                                        <div class="w-full md:w-1/2 flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                            <p class="w-1/4">

                                                                <label for=""> Delivery Mode</label>
                                                            </p>
                                                            <div class="text-left w-full">
                                                                <div class="w-full flex flex-col items-center h-fit mx-auto " x-data="dropdown()" x-init="loadOptions()">
                                                                    <input name="values" type="hidden" x-bind:value="selectedValues()" value="">

                                                                    <div class="inline-block relative w-full ">
                                                                        <div class="flex flex-col items-center relative">

                                                                            <!--input area-->
                                                                            <div class="w-full" x-on:click="open">
                                                                                <div class="mt-1 px-1 flex border border-gray-300 bg-white rounded-lg">
                                                                                    <div class="flex flex-auto h-10  truncate flex-row overflow-x-visible">


                                                                                        <!--selected-->
                                                                                        <template :key="options[option].value" x-for="(option,index) in selected">
                                                                                            <div class="flex justify-center items-center m-1 font-medium px-2 bg-white rounded-full bg-traivis-100 border border-traivis-500">

                                                                                                <div class="font-normal leading-none max-w-full flex-initial " x-html="options[option].text" x-model="options[option]">
                                                                                                </div>

                                                                                                <div class="flex flex-auto flex-row-reverse">
                                                                                                    <div x-on:click.stop="remove(index,option)">
                                                                                                        <svg class="fill-current h-4 w-4 " role="button" viewBox="0 0 20 20">
                                                                                                            <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                                                                                                            c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                                                                                                            l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                                                                                                            C14.817,13.62,14.817,14.38,14.348,14.849z"></path>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </template>
                                                                                        <!---->

                                                                                        <!--input-->
                                                                                        <div class="flex-1" x-show="selected.length == 0">
                                                                                            <input class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800" placeholder="Delivery Mode" x-bind:value="selectedValues()">
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center justify-end border-gray-200 svelte-1l8159u">
                                                                                        <button class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none" type="button" x-on:click="open" x-show="isOpen() === true" style="display: none;">
                                                                                            <svg class="fill-current h-4 w-4" version="1.1" viewBox="0 0 20 20"><path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z"></path></svg>
                                                                                        </button>

                                                                                        <button @click="close" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none" type="button" x-show="isOpen() === false">
                                                                                            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20"><path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z"></path></svg>
                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>


                                                                            <div class="w-full px-4">
                                                                                <div class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select" x-on:click.away="close" x-show.transition.origin.top="isOpen()" style="display: none;">
                                                                                    <div class="flex flex-col w-full overflow-y-auto h-fit">


                                                                                        <template :key="option" class="overflow-auto" x-for="(option,index) in options">
                                                                                            <div @click="select(index,$event)" class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100">
                                                                                                <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">

                                                                                                    <div class="w-full items-center flex justify-between">
                                                                                                        <div class="mx-2 leading-6" x-html="option.text" x-model="option"></div>
                                                                                                        <div x-show="option.selected">
                                                                                                            <svg class="svg-icon" viewBox="0 0 20 20"><path d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z" fill="none"></path></svg>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </template>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full md:w-1/2 flex flex-col px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                            <p class="w-full">
                                                                <label for="">Duration</label>
                                                            </p>
                                                            <p class=" w-full">
                                                                <input type="number"  placeholder="course hours" class="shadow rounded w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors     ">
                                                            </p>
                                                        </div>



                                                    </div>
                                                    <!--/Form-->

                                                </div>
                                                <!--/Course Details-->


                                                <!--Add Course Tasks-->
                                                <div class="w-full overflow-x-auto overflow-y-hidden whitespace-nowrap mb-5" x-data="{tasksNum :1}">

                                                    <!--label-->
                                                    <div class="py-3 font-bold text-sm text-gray-500 items-center flex gap-x-2">
                                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24" width="512" height="512"><path d="M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5,5,2.24,5,5-2.24,5-5,5Z"/></svg>
                                                        Course Tasks
                                                        <span class="p-3 w-5 h-5 flex items-center justify-center inline-block rounded-full bg-traivis-100 text-lg">
                                                                                                    4
                                                                                                </span>
                                                    </div>
                                                    <!--/label-->

                                                    <!--Tasks Table-->
                                                    <div class=" rounded-xl shadow-dashboard border">
                                                        <table class="w-full text-center">

                                                            <thead class=" border-b-4 border-gray-300 ">
                                                            <tr class="font-medium ">
                                                                <td  class="text-center px-6 py-3">
                                                                    Name
                                                                </td>
                                                                <td  class="text-center px-6 py-3">
                                                                    Description
                                                                </td>

                                                                <td  class="text-center px-6 py-3">
                                                                    Target Date
                                                                </td>
                                                                <td  class="text-center px-6 py-3">
                                                                    Action
                                                                </td>
                                                            </tr>
                                                            </thead>

                                                            <tbody class="cursor-pointer">
                                                            <template x-for="i in tasksNum">

                                                                <tr class=" hover:bg-traivis-50 ">
                                                                    <td class=" px-2 py-3 text-center">
                                                                        <select id="countries" class="h-10 bg-gray-50 border border-gray-300 text-gray-900  text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                            <option value="US">Task One</option>
                                                                            <option value="CA">Task Tow</option>
                                                                            <option value="FR">Task Three</option>
                                                                        </select>
                                                                    </td>

                                                                    <td class=" px-2 py-3 text-center">
                                                                        <textarea placeholder=" description " cols="25" rows="" class="h-10  shadow rounded w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 font-medium leading-none text-gray-600   border-gray-300 py-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800   " ></textarea>
                                                                    </td>

                                                                    <td class=" px-2 py-3 text-center">
                                                                        <input type="date"   class="h-10 w-full shadow rounded  bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-800 font-medium leading-none text-gray-600   border-gray-300 py-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 ">
                                                                    </td>

                                                                    <td class=" text-center">
                                                                        <button class="  cursor-pointer hover:bg-traivis-500 hover:fill-white p-3 rounded-full">
                                                                            <svg class="m-auto" id="Outline" viewBox="0 0 24 24" width="25" height="25"><path d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z"></path><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z"></path><path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"></path></svg>
                                                                        </button>
                                                                    </td>
                                                                </tr>

                                                            </template>
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                    <!--/ Tasks Table-->

                                                    <!--Add task button-->
                                                    <div class="group cursor-pointer mr-4"  @click="tasksNum +=1">
                                                        <div class="w-full flex justify-end gap-2 items-center mt-4">
                                                            <span class="">Add more tasks</span>
                                                            <svg id="Layer_1" height="512" viewBox="0 0 24 24" width="512" class="w-5 h-5">
                                                                <path d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <!--/Add task button-->

                                                </div>
                                                <!--/ ADD Course Tasks-->


                                                <!--save & cancel-->
                                                <div class="w-full flex flex-row justify-evenly">
                                                    <button  class=" w-auto p-2 px-4 bg-gray-50 border hover:text-white hover:bg-gray-400 hover:border-indigo-500px-6 mt-4 mr-1 rounded-full"
                                                             @click="EditCourse=false, CourseId=true">
                                                        Cancel
                                                    </button>

                                                    <button  class=" w-auto p-2 px-4  text-white bg-traivis-500   hover:bg-traivis-700   mt-4 mr-1  rounded-full">
                                                        Save
                                                    </button>
                                                </div>
                                                <!--/ save & cancel-->


                                            </div>
                                            <!--/ Edit course 1 Form-->


                                        </div>
                                        <!--/ collapse content-->
                                    </div>
                                    <!--/ Course 1 Content (Collapse) -->

                                    @endforeach


                                </div>
                                <!--/ courses Section-->


                                <!-- Roles Section-->
                                <div x-data="{addRole:false}" class="text-gray-700 my-16 border-l-2 border-gray-400 hover:border-traivis-500 focus-within:border-traivis-500 px-4 transition-all">

                                    <!--Roles header-->
                                    <div class="flex flex-row justify-between mb-4 items-center ">
                                        <h2 class="text-2xl font-bold text-gray-500">Roles &amp; Permissions</h2>
                                        <button @click="addRole=true" class=" w-auto p-2 px-4  text-white bg-traivis-500   hover:bg-traivis-700   mt-4 mr-1  rounded-full">Assign a Role</button>
                                    </div>
                                    <!--/ header-->

                                    <!--add new role-->
                                    <div x-show="addRole" class="p-2 border justify-center  flex flex-row flex-wrap ">



                                        <div
                                                class="relative inline-block bg-white rounded-lg P-2 text-left shadow transform transition-all  align-middle w-full ">
                                            <div action="" class="flex p-2  flex-row flex-wrap justify-center" >


                                                <div class="flex w-full flex-wrap justify-center ">
                                                    <label for="name" class="m-2 w-full">select a role</label>

                                                    <select id="positions"  class="m-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">

                                                        <option selected value="US">User </option>
                                                        <option value="CA">Admin</option>
                                                        <option value="FR">France</option>
                                                        <option value="DE">Germany</option>
                                                    </select>
                                                </div>
                                                <div class="w-full">
                                                    <label for="name" class="m-2">select & deselect permissions</label>
                                                    <div class="w-full h-[250px] overflow-y-auto flex flex-wrap justify-center m-2 px-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5   ">
                                                        <div class="w-full h-[70px] text-center items-center sm:w-1/2 lg:w-1/4    p-1">
                                                            <li class="flex items-cente rm-1 border justify-between py-2 px-2">

                                                                <!---label--->
                                                                <div class="flex flex-col">
                                                                    <p class="text-sm text-gray-500" id="privacy-option-description-3" contenteditable="false">Restrict The Comments.</p>
                                                                </div>

                                                                <!---option--->
                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                <button x-data="{toggle2:false}"
                                                                        class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                        :class="{ 'bg-traivis-300': toggle2 }" x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                    <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                         :class="{ 'transform translate-x-full ': toggle2 }">
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </div>
                                                        <div class="w-full h-[70px] text-center items-center sm:w-1/2 lg:w-1/4    p-1">
                                                            <li class="flex items-cente rm-1 border justify-between py-2 px-2">

                                                                <!---label--->
                                                                <div class="flex flex-col">
                                                                    <p class="text-sm text-gray-500" id="privacy-option-description-3" contenteditable="false">Restrict The Comments.</p>
                                                                </div>

                                                                <!---option--->
                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                <button x-data="{toggle2:false}"
                                                                        class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                        :class="{ 'bg-traivis-300': toggle2 }" x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                    <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                         :class="{ 'transform translate-x-full ': toggle2 }">
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </div>
                                                        <div class="w-full h-[70px] text-center items-center sm:w-1/2 lg:w-1/4    p-1">
                                                            <li class="flex items-cente rm-1 border justify-between py-2 px-2">

                                                                <!---label--->
                                                                <div class="flex flex-col">
                                                                    <p class="text-sm text-gray-500" id="privacy-option-description-3" contenteditable="false">Restrict The Comments.</p>
                                                                </div>

                                                                <!---option--->
                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                <button x-data="{toggle2:false}"
                                                                        class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                        :class="{ 'bg-traivis-300': toggle2 }" x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                    <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                         :class="{ 'transform translate-x-full ': toggle2 }">
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </div>
                                                        <div class="w-full h-[70px] text-center items-center sm:w-1/2 lg:w-1/4    p-1">
                                                            <li class="flex items-cente rm-1 border justify-between py-2 px-2">

                                                                <!---label--->
                                                                <div class="flex flex-col">
                                                                    <p class="text-sm text-gray-500" id="privacy-option-description-3" contenteditable="false">Restrict The Comments.</p>
                                                                </div>

                                                                <!---option--->
                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                <button x-data="{toggle2:false}"
                                                                        class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                        :class="{ 'bg-traivis-300': toggle2 }" x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                    <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                         :class="{ 'transform translate-x-full ': toggle2 }">
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </div>
                                                        <div class="w-full h-[70px] text-center items-center sm:w-1/2 lg:w-1/4    p-1">
                                                            <li class="flex items-cente rm-1 border justify-between py-2 px-2">

                                                                <!---label--->
                                                                <div class="flex flex-col">
                                                                    <p class="text-sm text-gray-500" id="privacy-option-description-3" contenteditable="false">Restrict The Comments.</p>
                                                                </div>

                                                                <!---option--->
                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                <button x-data="{toggle2:false}"
                                                                        class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                        :class="{ 'bg-traivis-300': toggle2 }" x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                    <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                         :class="{ 'transform translate-x-full ': toggle2 }">
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </div>
                                                        <div class="w-full h-[70px] text-center items-center sm:w-1/2 lg:w-1/4    p-1">
                                                            <li class="flex items-cente rm-1 border justify-between py-2 px-2">

                                                                <!---label--->
                                                                <div class="flex flex-col">
                                                                    <p class="text-sm text-gray-500" id="privacy-option-description-3" contenteditable="false">Restrict The Comments.</p>
                                                                </div>

                                                                <!---option--->
                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                <button x-data="{toggle2:false}"
                                                                        class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                        :class="{ 'bg-traivis-300': toggle2 }" x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                    <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                         :class="{ 'transform translate-x-full ': toggle2 }">
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </div>
                                                        <div class="w-full h-[70px] text-center items-center sm:w-1/2 lg:w-1/4    p-1">
                                                            <li class="flex items-cente rm-1 border justify-between py-2 px-2">

                                                                <!---label--->
                                                                <div class="flex flex-col">
                                                                    <p class="text-sm text-gray-500" id="privacy-option-description-3" contenteditable="false">Restrict The Comments.</p>
                                                                </div>

                                                                <!---option--->
                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                <button x-data="{toggle2:false}"
                                                                        class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                        :class="{ 'bg-traivis-300': toggle2 }" x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                    <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                         :class="{ 'transform translate-x-full ': toggle2 }">
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </div>
                                                        <div class="w-full h-[70px] text-center items-center sm:w-1/2 lg:w-1/4    p-1">

                                                        </div>
                                                        <div class="w-full h-[70px] text-center items-center sm:w-1/2 lg:w-1/4    p-1">
                                                            <li class="flex items-cente rm-1 border justify-between py-2 px-2">

                                                                <!---label--->
                                                                <div class="flex flex-col">
                                                                    <p class="text-sm text-gray-500" id="privacy-option-description-3" contenteditable="false">Restrict The Comments.</p>
                                                                </div>

                                                                <!---option--->
                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                <button x-data="{toggle2:false}"
                                                                        class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                        :class="{ 'bg-traivis-300': toggle2 }" x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                    <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                         :class="{ 'transform translate-x-full ': toggle2 }">
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </div>
                                                    </div>
                                                </div>


                                                </form>
                                            </div>
                                            <!--END Question Box -->

                                        </div>
                                        <!---->





                                        <div class="w-full flex flex-row justify-center">
                                            <button  class=" w-auto p-2 px-4  bg-gray-100 border   hover:text-white bg-indigo-500 hover:bg-pink-700 hover:border-indigo-500px-6    mt-4 mr-1  rounded-full"
                                                     @click="addRole=false"
                                            >
                                                cancel
                                            </button>
                                            <button  class=" w-auto p-2 px-4  text-white bg-traivis-500   hover:bg-traivis-700   mt-4 mr-1  rounded-full"

                                            >
                                                save
                                            </button>
                                        </div>

                                        <!--End Tables-->
                                    </div>
                                    <!--/ add new role-->

                                    <!--Roles-->
                                    <div class="mt-8 flex flex-col">
                                        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                                    <table class="min-w-full divide-y divide-gray-300">
                                                        <thead class="bg-gray-50">
                                                        <tr>
                                                            <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Role</th>
                                                            <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Number of Permissions</th>
                                                            <th scope="col" class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">Assigned on</th>
                                                            <th scope="col" class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">Status</th>

                                                            <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Action</th>


                                                        </tr>
                                                        </thead>
                                                        <tbody class="divide-y divide-gray-200 bg-white">
                                                        <tr>

                                                            <td class="whitespace-nowrap text-center px-3 py-4 text-sm text-gray-500">Member</td>

                                                            <td class="whitespace-nowrap text-center px-3 py-4 text-sm text-gray-500">
                                                                15

                                                            </td>
                                                            <td class="whitespace-nowrap text-center px-3 py-4 text-sm text-gray-500">20/10/2022</td>
                                                            <td class="whitespace-nowrap text-center px-3 py-4 text-sm text-gray-500">Active</td>



                                                            <td class="relative whitespace-nowrap py-4 text-center  text-right text-sm font-medium ">

                                                                <div class="flex flex-row justify-center">
                                                                                                    <span class="mr-4 cursor-pointer hover:bg-traivis-500 hover:fill-white p-3 rounded-full">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="25" height="25"><path d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z"></path><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z"></path><path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"></path></svg>
                                                                                                    </span>
                                                                    <span class="mr-4 cursor-pointer hover:bg-traivis-500 hover:fill-white p-3 rounded-full">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="25" height="25"><path d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z"></path><path d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z"></path></svg>

                                                                                                    </span>
                                                                </div>
                                                            </td>
                                                        </tr>


                                                        <!-- More people... -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Roles-->

                                </div>
                                <!--/ Roles Section-->


                                <!--payments Section-->
                                <div class="text-gray-700 my-16 border-l-2 border-gray-400 hover:border-traivis-500 focus-within:border-traivis-500 px-4 transition-all">

                                    <!--payments header-->
                                    <div class="flex flex-row justify-between mb-4 items-center ">
                                        <h2 class="text-2xl font-bold text-gray-500">Payments</h2>
                                    </div>
                                    <!--/ payments header-->


                                    <!-- payments content-->
                                    <div class="w-full overflow-x-auto overflow-y-hidden whitespace-nowrap mb-5">

                                        <div class=" rounded-xl shadow-dashboard border">
                                            <table class="w-full text-center">
                                                <thead class=" border-b-4 border-gray-300 ">

                                                <tr class="text-gray-500">
                                                    <th class="px-2 py-3">Offer Date</th>
                                                    <th class="px-2 py-3">Offered Price</th>
                                                    <th class="px-2 py-3 border-l-4">Instructor Reply</th>
                                                    <th class="px-2 py-3">Reply Status</th>
                                                    <th class="px-2 py-3 border-r-4">Instructor Price</th>
                                                    <th class="px-2 py-3">Agreed Price</th>
                                                    <th class="px-2 py-3">Payment Status</th>
                                                </tr>

                                                </thead>

                                                <tbody class="cursor-pointer">

                                                <tr class=" hover:bg-traivis-50 ">
                                                    <td class=" px-2 py-8 text-center">
                                                        12/10/2022
                                                    </td>
                                                    <td class=" px-2 py-8 text-center">
                                                        25$
                                                    </td>
                                                    <td class="border-l-4 px-2 py-8 text-center">
                                                        12/10/2022
                                                    </td>

                                                    <td class=" px-2 py-8 text-center items-center   ">
                                                        <span class="bg-gray-400 px-2 py-1 rounded-full text-white">Pending</span>
                                                    </td>
                                                    <td class="border-r-4 px-2 py-8 text-center">
                                                        22$
                                                    </td>
                                                    <td class=" px-2 py-8 text-center">
                                                        23$
                                                    </td>
                                                    <td class=" px-2 py-8 text-center text-traivis-400 font-bold">
                                                        paid
                                                    </td>
                                                </tr>




                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <!-- / payments content-->


                                </div>
                                <!--/ payments Section-->



                            </div>
                        </div>
                    </div>

                </div>
                <!--/ popup content -->

            </div>
        </div>

    <!-----/View Employees popup----------->

