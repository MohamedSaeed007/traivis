
                             <!-- Add courses -->
                             <div x-cloak x-show="addCourses" 
                             @click.outside="addCourses = false"
                                 @keydown.window.escape.stop="addCourses = false" x-data="{ jopen: false }"
                                 x-transition:enter="transform transition ease-in-out duration-500 sm:duration-500"
                                 x-transition:enter-end="translate-x-0" x-transition:enter-start="translate-x-full"
                                 x-transition:leave="transform transition ease-in-out duration-500 sm:duration-500"
                                 x-transition:leave-end="translate-x-full" x-transition:leave-start="translate-x-0"
                                 class=" overflow-hidden z-50 w-1/4" :class="jopen ? '' : ''"
                                 aria-labelledby="slide-over-title" aria-modal="true" role="dialog">

                                 <div class="overflow-hidden">


                                     <!--add course button-->

                                     <!--END add course button-->


                                     <!--Slider content-->
                                     <div
                                         class=" pointer-events-none fixed right-0 top-0 bottom-0 inset-y-0 flex pl-10 sm:pl-16 ">



                                         <div class="pointer-events-auto ">
                                             <!--Delete-->
                                             <button
                                                 class=" group/del group-hover:block cursor-pointer absolute mx-0 px-0 left-0 right-0 w-full bottom-10 text-gray-500 hover:text-traivis-500 z-10"
                                                 x-show="tabs.find(tab => tab.id === 1).active"
                                                 x-data="{ deletable: null }" x-on:dragover.prevent="" x-on:drop=""
                                                 x-on:drop.prevent="
                                              deletable = JSON.parse( event.dataTransfer.getData('text')) ;


                                              $dispatch('delete-item-in-depart' , { id : deletable.ref , meta : {
                                                    su : deletable.su ,
                                                    orgId : deletable.orgId ,
                                                    depId : deletable.departId,
                                                    projectId:deletable.projectId
                                              } })


                                              $dispatch('delete-depart' , { id : deletable.ref ,condition:'yes'
                                              })

                                              $dispatch('delete-item' , { id : deletable.id
                                              })

                                              $dispatch('delete-project' , { id : deletable.id ,name:deletable.name
                                              })

                                              $dispatch('delete-branch' , { id : deletable.ref ,name:deletable.name
                                              })

                                              $dispatch('delete-depart-in-project' , { id : deletable.ref ,name:deletable.name ,depId:deletable.id
                                              })
                                              $dispatch('delete-project-in-branch' , { branchId : deletable.ref  ,projectId:deletable.id
                                              })

                                              $dispatch('delete-cources-in-project' , { id : deletable.ref ,name:deletable.name ,depId:deletable.projectId
                                              })


                                              ">

                                                 <span class="w-full flex justify-center mx-auto">
                                                     <svg class="w-7 h-7 " fill="currentColor" x="0px"
                                                         y="0px" viewBox="0 0 512 512"
                                                         style="enable-background:new 0 0 512 512;"
                                                         xml:space="preserve" width="512" height="512">
                                                         <g>
                                                             <path
                                                                 d="M448,85.333h-66.133C371.66,35.703,328.002,0.064,277.333,0h-42.667c-50.669,0.064-94.327,35.703-104.533,85.333H64   c-11.782,0-21.333,9.551-21.333,21.333S52.218,128,64,128h21.333v277.333C85.404,464.214,133.119,511.93,192,512h128   c58.881-0.07,106.596-47.786,106.667-106.667V128H448c11.782,0,21.333-9.551,21.333-21.333S459.782,85.333,448,85.333z    M234.667,362.667c0,11.782-9.551,21.333-21.333,21.333C201.551,384,192,374.449,192,362.667v-128   c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333V362.667z M320,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333v-128c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M174.315,85.333c9.074-25.551,33.238-42.634,60.352-42.667h42.667   c27.114,0.033,51.278,17.116,60.352,42.667H174.315z" />
                                                         </g>
                                                     </svg>
                                                     <span
                                                         class="absolute  top-8 px-2 hidden group-hover/del:block bg-black text-white text-sm font-bold rounded-full whitespace-nowrap w-fit">
                                                         Drag Here to Delete
                                                     </span>
                                                 </span>
                                             </button>
                                             <!--END Delete-->


                                             <!---->
                                             <!-- courses modal -->
                                             <div class="group/cr text-center bg-traivis-50 shadow-3xl h-screen w-96 border-l-2"
                                                 style="z-index: 999" x-data="{ dragging: false, qopen: false, qopenEdit: false, courses: [], course: { method: 'Add', courseId: 0, item: { name: '', validation: '', type: '' } } }"
                                                 @keydown.window.escape.stop="qopen = false ,qopenEdit=false"
                                                 @click.outside="qopen = false ,qopenEdit=false">

                                                 <!--Courses Head-->
                                                 <div
                                                     class="w-full flex flex-col lg:flex-row space-x-2 items-center justify-center lg:justify-between mx-auto p-3 text-center">
                                                     <h3
                                                         class="flex flex-row items-center justify-center text-gray-500 group-hover/cr:text-traivis-500 group-focus-within/cr:text-traivis-500 transition-all text-xl md:text-3xl leading-tight font-bold tracking-tighter">
                                                         <svg class="h-6 w-6 mr-2 group-focus-within/cr:hidden"
                                                             fill="currentColor" x="0px" y="0px"
                                                             viewBox="0 0 512 512"
                                                             style="enable-background:new 0 0 512 512;"
                                                             xml:space="preserve" width="512" height="512">
                                                             <path
                                                                 d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z" />
                                                         </svg>
                                                         <svg class="h-6 w-6 mr-2 hidden group-focus-within/cr:block"
                                                             fill="currentColor" height="512" viewBox="0 0 24 24"
                                                             width="512" data-name="Layer 1">
                                                             <path
                                                                 d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                                         </svg>

                                                         Courses
                                                     </h3>
                                                     <button @click="qopen = !qopen"
                                                         class="flex items-center justify-center py-1 px-2 mx-auto font-semibold whitespace-nowrap bg-traivis-500 text-white hover:bg-traivis-700 rounded-full">
                                                         + New Course
                                                     </button>
                                                 </div>
                                                 <!--END Courses Head-->

                                                 <!-- courses header -->


                                                 <!-----Start window----------->
                                                 <section x-cloak x-show="qopen"
                                                     x-transition:enter="ease-out duration-100"
                                                     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                     x-transition:leave="ease-in duration-200"
                                                     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                     x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

                                                     <div class="fixed z-10 inset-0 overflow-y-auto"
                                                         aria-labelledby="modal-title" role="dialog"
                                                         aria-modal="true">
                                                         <div
                                                             class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                                                             <!---over BG---->
                                                             <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                                 aria-hidden="true" @click="qopen = false">
                                                             </div>
                                                             <!-- center tricj-->
                                                             <span
                                                                 class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                                 aria-hidden="true">&#8203;</span>
                                                             <!---END over BG---->

                                                             <!--  Box -->
                                                             <div
                                                                 class="capitalize text-gray-500 relative inline-block bg-white rounded-lg p-6 text-left shadow-xl transform transition-all my-8 align-middle w-full sm:w-1/4">
                                                                 <form action=""
                                                                     class="flex flex-col justify-center space-y-3">

                                                                     <div class="relative group ">
                                                                         <input
                                                                             class="w-full text-2xl font-bold h-10  rounded-full mt-1 sm:truncate border-gray-300 focus:border-traivis-400 transition-colors peer"
                                                                             id="Hero" required
                                                                             x-model="course.item.name"
                                                                             type="text">
                                                                         <label
                                                                             class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center text-2xl font-bold group-focus-within:font-medium peer-valid:font-medium  group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                                                             for="Hero">
                                                                             course name</label>
                                                                     </div>

                                                                     <div class="relative group ">
                                                                         <input
                                                                             class="  w-full rounded-lg mt-1 sm:truncate border-gray-300 text-white focus:text-black valid:text-black focus:border-traivis-400 transition-colors peer  "
                                                                             id="textN" required
                                                                             x-model="course.item.validation"
                                                                             type="number">
                                                                         <p
                                                                             class="absolute right-10 top-4 font-bold text-gray-500 text-sm">
                                                                             / Months</p>
                                                                         <label
                                                                             class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                                                             for="textN">
                                                                             validation</label>

                                                                     </div>


                                                                     <div
                                                                         class="flex items-center justify-evenly py-3">

                                                                         <div class="flex items-center">
                                                                             <label for="internal">internal</label>
                                                                             <input x-model="course.item.type"
                                                                                 type="radio" id="internal"
                                                                                 class="ml-3" value="internal"
                                                                                 name="type">
                                                                         </div>

                                                                         <div class="flex items-center">
                                                                             <label for="external"
                                                                                 class="ml-4">external</label>
                                                                             <input x-model="course.item.type"
                                                                                 type="radio" id="external"
                                                                                 class="ml-3" value="external"
                                                                                 name="type">
                                                                         </div>
                                                                     </div>

                                                                     <button x-text="course.method"
                                                                         class="mx-auto bg-traivis-500 w-auto px-3 py-1 text-white hover:bg-traivis-700 rounded-full"
                                                                         @click.prevent="
                                                               if(course.method == 'Add'){
                                                                courses.push(course.item) ,
                                                                course.item ={} ,
                                                                 qopen = !qopen

                                                               }
                                                               else if(course.method == 'Update') {
                                                                courses.splice(courseId , 1,course.item)
                                                                course.item ={}
                                                                qopen = !qopen
                                                                course.method = 'Add'


                                                               }





                                                               ">

                                                                     </button>
                                                                 </form>
                                                             </div>
                                                             <!--END  Box -->

                                                         </div>
                                                     </div>
                                                 </section>
                                                 <!-----END  window----------->

                                                 <!-- start Courses items -->
                                                 <div
                                                     class="capitalize mt-10 flex flex-col content-center justify-start w-full h-auto ">

                                                     <template x-for="(element , i  ) in courses ">

                                                         <!--items-->
                                                         <button
                                                             class="courses px-3 mx-3 flex items-center justify-between relative w-auto text-center border border-gray-300 hover:border-gray-500 focus-within:border-traivis-500 active:border-traivis-500 active:border-2 active:shadow-md bg-white rounded-full transition duration-200    p-1 mb-2 cursor-move h-10"
                                                             :class="{ 'cursor-move': dragging, 'cursor-move': !dragging }"
                                                             :id="`course-${i}`"
                                                             @delete-item.window="
                                                                    if($event.detail.id == `course-${i}`){
                                                                        return {  courses : courses.splice($event.detail.id.match(/\d+/)[0],1 )}

                                                                    }


                                                                    "
                                                             x-on:dragstart.self="
                                                                    dragging = true;
                                                                    event.dataTransfer.clearData();
                                                                    event.dataTransfer.setData('text',JSON.stringify({id:`course-${i}`}) );

                                                                "
                                                             x-on:dragend="dragging = false" draggable="true">

                                                             <div class="group inline w-full">
                                                                 <div
                                                                     class="flex flex-nowrap items-center justify-between ">
                                                                     <div
                                                                         class="flex flex-row items-center space-x-2 w-4/5">
                                                                         <svg class="h-4 w-4 flex-shrink-0"
                                                                             height="512" viewBox="0 0 24 24"
                                                                             width="512" data-name="Layer 1">
                                                                             <path
                                                                                 d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                                                         </svg>
                                                                         <span class="truncate "
                                                                             x-text="element.name"> </span>
                                                                     </div>
                                                                     <span class="cursor-pointer ml-auto"
                                                                         @click="
                                                                                 qopen=true,
                                                                                 courseId = i,
                                                                                 course.item.name =element.name ,
                                                                                 course.item.validation =element.validation ,
                                                                                 course.item.type =element.type ,
                                                                                 course.method = 'Update'
                                                                                 ">
                                                                         <svg class="h-3 w-3 flex-shrink-0"
                                                                             viewBox="0 0 24 24" width="512"
                                                                             height="512">
                                                                             <path
                                                                                 d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                                             <path
                                                                                 d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                                                         </svg>
                                                                     </span>
                                                                 </div>

                                                                 <!--Course tooltip-->
                                                                 <div role="tooltip" aria-hidden="true"
                                                                     class="capitalize invisible group-hover:visible absolute -top-12 mx-auto z-10 space-y-1 bg-black text-white text-sm rounded-lg px-2 py-1 w-fit shadow-md">

                                                                     <div
                                                                         class="flex flex-row whitespace-nowrap items-center">
                                                                         Valid For
                                                                         <p class="px-1"
                                                                             x-text="element.validation"></p>
                                                                         Months
                                                                     </div>
                                                                     <div
                                                                         class="flex flex-row whitespace-nowrap items-center">
                                                                         <span x-text="element.type"></span>
                                                                         <span
                                                                             :class="{ 'block': element.type, 'hidden': !element
                                                                                     .type }"
                                                                             class="px-1">Course</span>
                                                                     </div>


                                                                 </div>
                                                                 <!--END Course tooltip-->

                                                             </div>

                                                         </button>
                                                         <!--END items-->

                                                     </template>

                                                 </div>
                                                 <!-----END Courses items----------->

                                             </div>
                                             <!--END courses modal-->
                                             <!---->


                                         </div>



                                     </div>
                                     <!--END Slider content-->

                                 </div>
                             </div>