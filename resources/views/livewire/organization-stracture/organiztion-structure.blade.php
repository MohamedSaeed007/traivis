<div class="w-full">
    <!-- Page Content -->
    <div class="flex w-full flex-col px-4 sm:px-6 lg:px-8 relative" 
    @if ($activeTabStructure && $assignRoles)
    x-data="{
        tabs: [
            { id: 1, title: 'Manage Structure', active: true  },
            { id: 2, title: 'Manage workForce', active: false },
            { id: 3, title: 'Assign Managers', active: false },
        ],
    }"
    @elseif ($activeTabStructure )
    x-data="{
        tabs: [
            { id: 1, title: 'Manage Structure', active: true  },
            { id: 2, title: 'Manage workForce', active: false },
        ],
    }"
    @else
    x-data="{
        tabs: [
            { id: 2, title: 'Manage workForce', active: true },
        ],
    }"
    @endif
    
    
    >

        <!--page header-->
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Organization Structure</h1>
                <p class="flex flex-row  items-center mt-2 mb-5  text-sm font-semibold">
                    Total
                    <span
                        class=" rounded-full p-3.5 px-1.5 w-fit h-5 flex justify-center items-center mx-2 bg-gray-400  font-bold text-white">
                        {{ $workForceCount }}
                    </span>
                    Employees
                </p>
            </div>
        </div>
        <!--END page header-->

        <!--Main Tabs Buttons-->
        <nav class="relative bg-white flex justify-evenly w-full overflow-hidden  rounded-t-lg shadow capitalize"
            aria-label="Tabs">
            <template x-for="(tab, ix) in tabs" :key="tab.id">
                <a href="#"
                    class="group relative min-w-0 overflow-hidden py-3 px-3 rounded-t-lg focus:z-10 hover:bg-traivis-50"
                    :class="tab.active ? 'text-gray-500 font-bold' : 'bg-white'"
                    :aria-current="tab.active ? 'page' : 'undefined'"
                    @click.prevent="tabs.forEach(tab => tab.active = false); tabs[ix].active = true">

                    <span x-text="tab.title"></span>

                    <span class="absolute inset-x-0 bottom-0 h-1 " aria-hidden="true"
                        :class="tab.active ? 'bg-traivis-500 ' : 'bg-traivis-50 group-hover:bg-traivis-100'">
                    </span>
                </a>
            </template>
        </nav>
        <!--END Main Tabs Buttons-->

        <!--content-->
        <section class="">
            <div class="container mx-auto">
                <div class="flex w-full flex-col">

                    <!-- main tabs content -->
                    <div class="mt-2 mb-4">
                        <main class="flex flex-wrap justify-center w-full">
                            @if (auth()->user()->can('organization_workforce_show'))
                            <!-------- Structure tab content -------->
                            <section class="p-2 w-full flex flex-row justify-cnter " x-data="{ addCourses: false }"
                                x-show="tabs.find(tab => tab.id === 1).active">
                                <div class="flex flex-wrap mb-32 " :class="addCourses ? 'w-3/4' : 'w-full'">

                                    <!-- Position Section-->
                                    <div class="mb-4 w-full sm:w-1/2 lg:w-1/4 md:mb-0">
                                        <section class="py-10 group">
                                            <div class="container px-4 mx-auto relative">
                                                @if (auth()->user()->can('organization_workforce_delete'))
                                                <!--Delete-->
                                                <button
                                                    class="hidden group/del group-hover:block cursor-pointer absolute mx-0 px-0 left-0 right-0 w-full -bottom-10 text-gray-500 hover:text-traivis-500 z-10"
                                                    x-show="tabs.find(tab => tab.id === 1).active"
                                                    x-data="{ deletable: null }" x-on:dragover.prevent="" x-on:drop=""
                                                    x-on:drop.prevent="
                                                           deletable = JSON.parse( event.dataTransfer.getData('text')) ;

                                                           $dispatch('delete-item' , { id : deletable.id
                                                           })
                                                           $dispatch('delete-item-in-depart' , { id : deletable.ref , meta : {
                                                            su : deletable.su ,
                                                            orgId : deletable.orgId ,
                                                            depId : deletable.departId,
                                                            projectId:deletable.projectId
                                                      } })


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
                                                @endif
                                                <!--Positions Head-->
                                                <div class="max-w-4xl mx-auto mb-4 text-center">
                                                    <h3
                                                        class="flex flex-row items-center justify-center text-gray-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500 transition-all mb-4 text-xl md:text-3xl leading-tight font-bold tracking-tighter">
                                                        <svg class="h-6 w-6 mr-2 group-focus-within:hidden"
                                                            fill="currentColor" viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5c0,.017,0,.035,.001,.052,.028,1.63,1.362,2.948,2.999,2.948h7v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7c1.637,0,2.971-1.318,2.999-2.948,0-.017,.001-.034,.001-.052v-5Zm-2,0v2.172c-.313-.111-.649-.172-1-.172h-1v-4c1.103,0,2,.897,2,2ZM7,5c0-1.654,1.346-3,3-3h4c1.654,0,3,1.346,3,3V13H7V5Zm-2,4v4h-1c-.351,0-.687,.061-1,.172v-2.172c0-1.103,.897-2,2-2Zm15,8H4c-.551,0-1-.448-1-1s.449-1,1-1H20c.551,0,1,.448,1,1s-.449,1-1,1Z" />
                                                        </svg>
                                                        <svg class="h-6 w-6 mr-2 hidden group-focus-within:block"
                                                            fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"
                                                            width="512" height="512">
                                                            <path
                                                                d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z" />
                                                        </svg>

                                                        Positions
                                                    </h3>
                                                    <p class="mt-2 text-sm text-gray-500">Drag and drop Position to Department.</p>
                                                </div>
                                                <!--END Positions Head-->

                                                <!--Positions Column-->
                                                <div class="flex flex-col bg-traivis-50 p-2 h-96 overflow-y-auto rounded-lg border-2 border-gray-200"
                                                    id="pos" x-data="{
                                                        element: '',
                                                        dragging: false,
                                                        positionName: @entangle('positions'),
                                                        openAddNew: false,
                                                        openAddButton: true,
                                                        coursesItems: []
                                                    }">

                                                    <!-- Each Position -->
                                                    @foreach ($positions as $position )



                                                        <!--Position Item-->
                                                        <div class="positions border border-gray-300 hover:border-gray-500 focus-within:border-traivis-500 active:border-traivis-500 active:border-2 active:shadow-md bg-white rounded-lg transition duration-200 flex col-span-2 justify-between p-1 mb-2"
                                                            :class="{ 'cursor-move': dragging, 'cursor-move': !dragging }"
                                                            :id="`position-{{ $position->id }}`"
                                                            @delete-item.window="

                                                            if($event.detail.id == `position-{{ $position->id }}`){
                                                                 $wire.deletePosition({{ $position->id }});

                                                            }"
                                                            x-on:dragstart.self="
                                                             dragging = true;
                                                             event.dataTransfer.clearData();
                                                             event.dataTransfer.setData('text',JSON.stringify({id:`position-{{ $position->id }}`}) );
                                                             "
                                                            x-on:dragend="dragging = false" draggable="true">

                                                            <div class="flex items-center w-full grid">
                                                                <div class="rounded overflow-hidden">

                                                                    <!--Department accordion-tab  -->
                                                                    <div class="outline-none" tabindex="1"
                                                                        x-data="{ expanded: false, sender: '' }"
                                                                        @delete-item-in-depart.window="
                                                                         console.log($event.detail)
                                                                         if ($event.detail.id == `position-container-{{ $position->id }}`){


                                                                                 if (  $event.detail.meta.su == 'courses' ){

                                                                                    $wire.deleteCourseFromPosition({{ $position->id }},$event.detail.meta.orgId);
                                                                                    {{-- coursesItems =coursesItems.filter(item => item.positionId !=`position-{{ $position->id }}` || item.orgId != $event.detail.meta.orgId  ) --}}


                                                                                 }else {
                                                                                     return coursesItems ;
                                                                                 }
                                                                            
                                                                         }  "
                                                                        x-on:drop.prevent="
                                                                             sender  = document.getElementById(JSON.parse( event.dataTransfer.getData('text')).id);
                                                                             

                                                                                 if( sender.classList.contains('courses')){
                                                                                     if(!coursesItems.find((item) => item.orgId == sender.id && item.positionId == `position-{{ $position->id }}`)){
                                                                                        $wire.attachCourseToPosition({{ $position->id }},sender.id)
                                                                                        {{-- coursesItems.push(  { positionId:`position-${i}` , orgId :  sender.id , text : sender.innerText  }) --}}
                                                                                     }
                                                                                 }
                                                                             
                                                                         "
                                                                        x-on:dragover.prevent="expanded = true">

                                                                        <!--Department accordion head -->
                                                                        <div @click="expanded = !expanded "
                                                                            class="ease bg-white flex justify-between py-1.5 items-center text-gray-900 font-semibold transition duration-500 cursor-pointer relative">
                                                                            <div
                                                                                class="flex-1 flex flex-row items-center truncate text-clip space-x-2">
                                                                                <svg class="h-4 w-4 mx-1 flex-shrink-0"
                                                                                    fill="currentColor"
                                                                                    data-name="Layer 1"
                                                                                    viewBox="0 0 24 24" width="512"
                                                                                    height="512">
                                                                                    <path
                                                                                        d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z" />
                                                                                </svg>

                                                                                <div
                                                                                    class="flex-1 truncate text-clip flex group-focus:text-black transition duration-500">
                                                                                    <p >{{ $position->position_name_en }}</p>
                                                                                </div>


                                                                            </div>

                                                                            <div :class=" expanded ? 'rotate-90' : ''"
                                                                                class="mx-2 ease border border-gray-700 rounded-full items-center inline-flex justify-center transform transition duration-500 group-focus:text-black ">
                                                                                <svg class="h-5 w-5 -rotate-90"
                                                                                    fill="currentColor"
                                                                                    viewBox="0 0 24 24" width="512"
                                                                                    height="512">
                                                                                    <path
                                                                                        d="M6.414,9H17.586a1,1,0,0,1,.707,1.707l-5.586,5.586a1,1,0,0,1-1.414,0L5.707,10.707A1,1,0,0,1,6.414,9Z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <!--END Department accordion head -->

                                                                        <!--Department accordion Content -->
                                                                        <div x-show="expanded" x-collapse
                                                                            class="ease bg-white border-t border-gray-200 px-4 overflow-hidden duration-500">
                                                                            <div class="center">

                                                                                <!--Department accordion label-->
                                                                                @if (!$position->enterpriseRequiredCourses->isEmpty())


                                                                                <h2
                                                                                    class="w-full p-2">
                                                                                    Courses
                                                                                </h2>
                                                                                @endif
                                                                                <!--END Department accordion label-->

                                                                                <!--Department accordion each items-->
                                                                                <div class="flex flex-wrap">

                                                                                            @foreach ($position->enterpriseRequiredCourses as $course )


                                                                                            <div :class="{
                                                                                                'cursor-move': dragging,
                                                                                                'cursor-move':
                                                                                                    !dragging
                                                                                               }"
                                                                                                x-on:dragstart.self="
                                                                                             dragging = true;
                                                                                             event.dataTransfer.clearData();
                                                                                             event.dataTransfer.setData('text/plain', JSON.stringify({ ref : `position-container-{{ $position->id }}` , su : 'courses' , orgId : {{ $course->id }}   }));
                                                                                             "
                                                                                                x-on:dragend="dragging = false"
                                                                                                draggable="true">

                                                                                                <!--Department items label-->
                                                                                                <button

                                                                                                    class="bg-traivis-100 border hover:border-traivis-500 focus:bg-traivis-500 focus:text-white active:shadow-md px-2 py-1 m-1 block text-sm rounded-full w-fit">
                                                                                                {{ $course->en_course_name }}
                                                                                                </button>
                                                                                                <!--END Department items label-->

                                                                                            </div>
                                                                                            @endforeach


                                                                                </div>
                                                                                <!--END Department accordion each items-->

                                                                            </div>


                                                                        </div>
                                                                        <!--END Department accordion Content -->

                                                                    </div>
                                                                    <!--END Department accordion-tab -->

                                                                </div>
                                                            </div>
                                                            <!--END Position name -->

                                                        </div>
                                                        <!--END Position Item-->
                                                    @endforeach

                                                    <!--END Each Position-->
                                                        @if (auth()->user()->can('organization_workforce_create'))
                                                        <!-- Add position -->
                                                        <div class="group cursor-pointer" x-show="openAddButton"
                                                            @click="openAddNew = ! openAddNew , openAddButton= false , element=''">
    
                                                            <div
                                                                class="w-full flex justify-center gap-2 items-center my-2">
                                                                <svg class="w-5 h-5" fill="currentColor" height="512"
                                                                    viewBox="0 0 24 24" width="512"
                                                                    data-name="Layer 1">
                                                                    <path
                                                                        d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                                                    </path>
                                                                </svg>
                                                                <span class="">Add More</span>
                                                            </div>
                                                        </div>
                                                        <!-- END Add position -->
                                                        @endif
                                                    

                                                    <!-- input position-->
                                                    <div x-show="openAddNew" x-transition.duration.500ms
                                                        class="rounded flex w-full">
                                                        <input x-model="element" type="text"
                                                            wire:model.defer='position_name_en'
                                                            placeholder="position name"
                                                            class="shadow rounded-md w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors   ">
                                                        <button wire:click='addPosition'
                                                            class="bg-traivis-500 text-white ml-2 rounded-md hover:bg-traivis-700 pr-3 pl-3"
                                                            @click="openAddNew = ! openAddNew , openAddButton= true">
                                                            Add
                                                        </button>
                                                    </div>
                                                    <!-- END input position -->

                                                </div>
                                                <!--END Positions Column-->

                                            </div>
                                        </section>
                                    </div>
                                    <!-- END Positions Section -->



                                    <!-- Departments section-->
                                    <div class="mb-4 md:mb-0 w-full sm:w-1/2 lg:w-1/4">
                                        <section class="py-10 group">
                                            <div class="container px-4 relative">
                                                @if (auth()->user()->can('organization_workforce_delete'))
                                                <!--Delete-->
                                                <button
                                                    class="hidden group/del group-hover:block cursor-pointer absolute mx-0 px-0 left-0 right-0 w-full -bottom-10 text-gray-500 hover:text-traivis-500 z-10"
                                                    x-show="tabs.find(tab => tab.id === 1).active"
                                                    x-data="{ deletable: null }" x-on:dragover.prevent=""
                                                    x-on:drop=""
                                                    x-on:drop.prevent="
                                                            {{-- console.log(event.dataTransfer); --}}
                                                           deletable = JSON.parse( event.dataTransfer.getData('text')) ;
                                                           {{-- console.log(deletable); --}}

                                                           $dispatch('delete-item-in-depart' , { id : deletable.ref , meta : {
                                                                 su : deletable.su ,
                                                                 orgId : deletable.orgId ,
                                                                 depId : deletable.departId,
                                                                 projectId:deletable.projectId
                                                           } });


                                                           $dispatch('delete-depart' , { id : deletable.ref ,condition:'yes'});









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
                                                @endif
                                                <!--Departments Head-->
                                                <div class="max-w-4xl mx-auto mb-4 text-center">
                                                    <h3
                                                        class="flex flex-row items-center justify-center text-gray-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500 transition-all mb-4 text-xl md:text-3xl leading-tight font-bold tracking-tighter">
                                                        <svg class="h-6 w-6 mr-2 group-focus-within:hidden"
                                                            fill="currentColor" viewBox="0 0 384 512">
                                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                            <path
                                                                d="M88 104C88 95.16 95.16 88 104 88H152C160.8 88 168 95.16 168 104V152C168 160.8 160.8 168 152 168H104C95.16 168 88 160.8 88 152V104zM280 88C288.8 88 296 95.16 296 104V152C296 160.8 288.8 168 280 168H232C223.2 168 216 160.8 216 152V104C216 95.16 223.2 88 232 88H280zM88 232C88 223.2 95.16 216 104 216H152C160.8 216 168 223.2 168 232V280C168 288.8 160.8 296 152 296H104C95.16 296 88 288.8 88 280V232zM280 216C288.8 216 296 223.2 296 232V280C296 288.8 288.8 296 280 296H232C223.2 296 216 288.8 216 280V232C216 223.2 223.2 216 232 216H280zM0 64C0 28.65 28.65 0 64 0H320C355.3 0 384 28.65 384 64V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64zM48 64V448C48 456.8 55.16 464 64 464H144V400C144 373.5 165.5 352 192 352C218.5 352 240 373.5 240 400V464H320C328.8 464 336 456.8 336 448V64C336 55.16 328.8 48 320 48H64C55.16 48 48 55.16 48 64z" />
                                                        </svg>
                                                        <svg class="h-6 w-6 mr-2 hidden group-focus-within:block"
                                                            fill="currentColor" viewBox="0 0 384 512">
                                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                            <path
                                                                d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" />
                                                        </svg>

                                                        Departments
                                                    </h3>
                                                    <p class="mt-2 text-sm text-gray-500">Drag and drop  Department to Project.</p>
                                                </div>
                                                <!--END Departments Head-->

                                                <!--Departments Column-->
                                                <div class="flex flex-col bg-traivis-50 p-2 h-96 overflow-y-auto rounded-lg border-2 border-gray-200"
                                                    x-data="{
                                                        element: '',
                                                        dragging: false,
                                                        coursesItems: [],
                                                        departName: @entangle('departments'),
                                                        positionsItems: @entangle('departmentPositions'),
                                                        openAddNew: false,
                                                        openAddButton: true
                                                    }">

                                                    <!-- Each Department -->
                                                    @forelse ($departments as $key => $department )
                                                        <!--Department Item-->
                                                        <div class="departs border border-gray-300 hover:border-gray-500 focus-within:border-traivis-500 active:border-traivis-500 active:border-2 active:shadow-md bg-white rounded-lg transition duration-200 flex col-span-2 justify-between p-1 mb-2"
                                                            :class="{ 'cursor-move': dragging, 'cursor-move': !dragging }"
                                                            id="department-{{ $key }}"
                                                            @delete-depart.window="
                                                      
                                                              if ($event.detail.id == `department-{{ $key }}`){
                                                                  $wire.deleteDepartment({{ $key }});
                                                                  {{-- departName = departName.filter((item,i)  => i !=$event.detail.id.match(/\d+/)[0] ) --}}
                                                              }
                                                              return{departName}
                                                           "
                                                            x-on:dragstart.self="
                                                              dragging = true;
                                                              event.dataTransfer.clearData();
                                                              event.dataTransfer.setData('text/plain',  JSON.stringify(
                                                                { ref : `department-{{ $key }}` ,
                                                                departName: `{{ $department }}` ,
                                                                positionsInProject:[positionsItems],
                                                                courcesInProject:[coursesItems] }));
                                                          "
                                                            x-on:dragend="dragging = false" draggable="true">

                                                            <!-- Department Item content-->
                                                            <div class="flex items-center w-full grid">
                                                                <div class="rounded overflow-hidden">

                                                                    <!--Department accordion-tab  -->
                                                                    <div class="outline-none" tabindex="1"
                                                                        x-data="{ expanded: false, sender: '' }"
                                                                        @delete-item-in-depart.window="

                                                                      if ($event.detail.id == `departments-container-{{ $key }}`){
                                                                                                                                                          
                                                                        
                                                                              if ( $event.detail.meta.su =='positions'  ){

                                                                                  $wire.deleteDepartmentPosition({{ $key }},$event.detail.meta.orgId);
                                                                                
                                                                                  {{-- positionsItems =positionsItems.filter(item => item.departId !=`department-{{ $key }}` || item.orgId != $event.detail.meta.orgId  ) --}}

                                                                              }else if($event.detail.meta.su =='courses' ) {
                                                                                 console.log($event.detail)
                                                                                  $wire.deleteCourseFromDepartment({{ $key }},$event.detail.meta.orgId)
                                                                                  {{-- coursesItems =coursesItems.filter(item => item.departId !=`department-{{ $key }}` || item.orgId != $event.detail.meta.orgId  ) --}}

                                                                              }
                                                                          
                                                                      }  
                                                                      
                                                                      "
                                                                        x-on:drop.prevent="
                                                                          sender  = document.getElementById(JSON.parse( event.dataTransfer.getData('text')).id);
                                                                         

                                                                              if( sender.classList.contains('courses')){
                                                                                  
                                                                                      
                                                                                  if(!coursesItems.find((item) => item.orgId == sender.id && item.departId == `department-{{ $key }}}`)){
                                                                                      $wire.attachCourseToDepartment({{ $key }},sender.id);
                                                                                      {{-- coursesItems.push(  { departId:`department-{{ $key }}` , orgId :  sender.id , text : sender.innerText  }) --}}
                                                                                  }

                                                                                  
                                                                                 
                                                                                 
                                                                              }
                                                                              else if(sender.classList.contains('positions')){
                                                                                  if(!positionsItems.find((item) => item.orgId == sender.id && item.departId == `department-{{ $key }}`)){
                                                                                      $wire.positionsItemsPush({{ $key }} , sender.id);
                                                                                      {{-- positionsItems.push(  { departId:`department-${i}` , orgId :  sender.id , text : sender.innerText  }) --}}
                                                                                      }


                                                                              }
                                                                         


                                                                       

                                                                      "
                                                                        x-on:dragover.prevent="expanded = true">

                                                                        <!--Department accordion head -->
                                                                        <div @click="expanded = !expanded "
                                                                            class="ease bg-white flex justify-between py-1.5 items-center text-gray-900 font-semibold transition duration-500 cursor-pointer relative">
                                                                            <div
                                                                                class="flex-1 flex flex-row items-center truncate text-clip space-x-2">
                                                                                <svg class="h-4 w-4 mx-1 flex-shrink-0"
                                                                                    fill="currentColor"
                                                                                    viewBox="0 0 384 512">
                                                                                    <path
                                                                                        d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" />
                                                                                </svg>

                                                                                <div
                                                                                    class="flex-1 truncate text-clip flex group-focus:text-black transition duration-500">
                                                                                    <p>{{ $department }}</p>
                                                                                </div>

                                                                                <div
                                                                                    class="mr-0 flex flex-row items-center rounded-xl text-gray-400 text-sm font-bold capitalize">
                                                                                    <svg class="h-4 w-4 mx-1 flex-shrink-0"
                                                                                        fill="currentColor"
                                                                                        data-name="Layer 1"
                                                                                        viewBox="0 0 24 24"
                                                                                        width="512" height="512">
                                                                                        <path
                                                                                            d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z" />
                                                                                    </svg>
                                                                                    @php
                                                                                        
                                                                                    @endphp
                                                                                    <p>{{ count($departmentPositions->where('departId', 'department-' . $key)) }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                            <div :class=" expanded ? 'rotate-90' : ''"
                                                                                class="mx-2 ease border border-gray-700 rounded-full items-center inline-flex justify-center transform transition duration-500 group-focus:text-black ">
                                                                                <svg class="h-5 w-5 -rotate-90"
                                                                                    fill="currentColor"
                                                                                    viewBox="0 0 24 24" width="512"
                                                                                    height="512">
                                                                                    <path
                                                                                        d="M6.414,9H17.586a1,1,0,0,1,.707,1.707l-5.586,5.586a1,1,0,0,1-1.414,0L5.707,10.707A1,1,0,0,1,6.414,9Z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <!--END Department accordion head -->

                                                                        <!--Department accordion Content -->
                                                                        <div x-show="expanded" x-collapse
                                                                            class="ease bg-white border-t border-gray-200 px-4 overflow-hidden duration-500">
                                                                            <div class="center">


                                                                                <!--Department accordion label-->

                                                                                @if ($departmentPositions->where('orgIdInt',$key))
                                                                                    <h2 class="w-full p-2">
                                                                                        Positions
                                                                                    </h2>
                                                                                @endif

                                                                                <!--END Department accordion label-->

                                                                                <!--Department accordion each items-->
                                                                                {{-- if(posdept.id==depertid) --}}
                                                                                <div class="flex flex-wrap">
                                                                                    @foreach ($departmentPositions as $dPosition)
                                                                                        {{-- @dd($dPosition) --}}
                                                                                        @if ($dPosition['departId'] == 'department-' . $key)
                                                                                            <div :class="{
                                                                                                'cursor-move': dragging,
                                                                                                'cursor-move':
                                                                                                    !dragging
                                                                                            }"
                                                                                                x-on:dragstart.self="
                                                                                          dragging = true;
                                                                                          event.dataTransfer.clearData();
                                                                                          event.dataTransfer.setData('text/plain', JSON.stringify({ ref : `departments-container-{{ $key }}` , su : 'positions', orgId : {{ $dPosition['orgIdInt'] }}   }));
                                                                                          "
                                                                                                x-on:dragend="dragging = false"
                                                                                                draggable="true">

                                                                                                <!--Department items label-->
                                                                                                <button
                                                                                                    class="bg-traivis-100 border hover:border-traivis-500 focus:bg-traivis-500 focus:text-white active:shadow-md px-2 py-1 m-1 block text-sm rounded-full w-fit">
                                                                                                    {{ $dPosition['text'] }}
                                                                                                </button>
                                                                                                <!--END Department items label-->

                                                                                            </div>
                                                                                        @endif
                                                                                    @endforeach
                                                                                </div>
                                                                                <!--END Department accordion each items-->

                                                                            </div>
                                                                            <div class="center"
                                                                                >

                                                                                <h2
                                                                                    class="w-full p-2">
                                                                                    Courses
                                                                                </h2>
                                                                                <!--Department accordion label-->


                                                                                <!--END Department accordion label-->

                                                                                <!--Department accordion each items-->
                                                                                <div class="flex flex-wrap">

                                                                                    @php
                                                                                        $department = $departmentCourses->where('id',$key)->first();
                                                                                        // dd($department)
                                                                                    @endphp

                                                                                    @foreach ($department->enterpriseRequiredCourses as $course )
                                                                                    <div :class="{
                                                                                        'cursor-move': dragging,
                                                                                        'cursor-move':
                                                                                            !dragging
                                                                                        }"
                                                                                        x-on:dragstart.self="
                                                                                        dragging = true;
                                                                                        event.dataTransfer.clearData();
                                                                                        event.dataTransfer.setData('text/plain', JSON.stringify({ ref : `departments-container-{{ $department->id }}` , su : 'courses' , orgId : {{ $course->id }}   }));
                                                                                        "
                                                                                        x-on:dragend="dragging = false"
                                                                                        draggable="true">

                                                                                        <!--Department items label-->
                                                                                        <button
                                                                                            class="bg-traivis-100 border hover:border-traivis-500 focus:bg-traivis-500 focus:text-white active:shadow-md px-2 py-1 m-1 block text-sm rounded-full w-fit">
                                                                                            {{ $course->en_course_name }}
                                                                                        </button>
                                                                                        <!--END Department items label-->

                                                                                    </div>
                                                                                    @endforeach




                                                                                </div>
                                                                                <!--END Department accordion each items-->

                                                                            </div>



                                                                        </div>
                                                                        <!--END Department accordion Content -->

                                                                    </div>
                                                                    <!--END Department accordion-tab -->

                                                                </div>
                                                            </div>
                                                            <!--END Department Item content-->

                                                        </div>
                                                        <!--END Department Item-->
                                                    @empty

                                                    @endforelse



                                                    <!--END Each Department -->
                                                        @if (auth()->user()->can('organization_workforce_create')) 
                                                        <!-- Add Department -->
                                                        <div class="group cursor-pointer" x-show="openAddButton"
                                                            @click="openAddNew = ! openAddNew , openAddButton= false , element=''">
    
                                                            <div
                                                                class="w-full flex justify-center gap-2 items-center my-2">
                                                                <svg class="w-5 h-5" fill="currentColor" height="512"
                                                                    viewBox="0 0 24 24" width="512"
                                                                    data-name="Layer 1">
                                                                    <path
                                                                        d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                                                    </path>
                                                                </svg>
                                                                <span class="">Add More</span>
                                                            </div>
                                                        </div>
                                                        <!-- END Add Department -->
                                                        @endif

                                                    <!-- input Department -->
                                                    <div x-show="openAddNew" x-transition.duration.800ms
                                                        class="rounded flex justify-between">
                                                        <input type="text" x-model="element"
                                                            wire:model.defer='department_name_en'
                                                            placeholder="Department name"
                                                            class="shadow rounded-md w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors   ">
                                                        <button wire:click="addDepartment"
                                                            @click="openAddNew = ! openAddNew , openAddButton= true"
                                                            class="ml-2 bg-traivis-500 text-white rounded-md hover:bg-traivis-700 pr-3 pl-3">
                                                            add
                                                        </button>
                                                    </div>
                                                    <!--END input Department -->

                                                </div>
                                                <!--END Departments Column -->

                                            </div>
                                        </section>
                                    </div>
                                    <!-- end Departments section-->



                                    <!-- Projects section-->
                                    <div class="mb-4 md:mb-0 w-full sm:w-1/2 lg:w-1/4">
                                        <section class="py-10 group">
                                            <div class="container px-4 relative">
                                                @if (auth()->user()->can('organization_workforce_delete'))
                                                <!--Delete-->
                                                <button
                                                    class="hidden group/del group-hover:block cursor-pointer absolute mx-0 px-0 left-0 right-0 w-full -bottom-10 text-gray-500 hover:text-traivis-500 z-10"
                                                    {{-- x-show="tabs.find(tab => tab.id === 1).active" --}} x-data="{ deletable: null }"
                                                    x-on:dragover.prevent="" x-on:drop=""
                                                    x-on:drop.prevent="
                                                           deletable = JSON.parse( event.dataTransfer.getData('text')) ;
                                                           console.log(deletable)
                                                           {{--




                                                           $dispatch('delete-item' , { id : deletable.id
                                                           })



                                                           $dispatch('delete-branch' , { id : deletable.ref ,name:deletable.name
                                                           }) --}}
                                                           $dispatch('delete-item-in-depart' , { id : deletable.ref , meta : {
                                                            su : deletable.su ,
                                                            orgId : deletable.orgId ,
                                                            depId : deletable.departId,
                                                            projectId:deletable.projectId
                                                      } })

                                                           $dispatch('delete-depart' , { id : deletable.ref ,condition:'yes'
                                                        })

                                                           $dispatch('delete-project' , { id : deletable.id ,projectName:deletable.element
                                                           })

                                                           $dispatch('delete-depart-in-project' , { id : deletable.id ,name:deletable.name ,depId:deletable.ref
                                                           })
                                                           {{-- $dispatch('delete-project-in-branch' , { branchId : deletable.ref  ,projectId:deletable.id
                                                           })

                                                           --}}

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
                                                @endif
                                                <!--Projects Head-->
                                                <div class="max-w-4xl mx-auto mb-4 text-center">
                                                    <h3
                                                        class="flex flex-row items-center justify-center text-gray-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500 transition-all mb-4 text-xl md:text-3xl leading-tight font-bold tracking-tighter">
                                                        <svg class="h-6 w-6 mr-2 group-focus-within:hidden"
                                                            fill="currentColor" viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z" />
                                                            <path
                                                                d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z" />
                                                            <path
                                                                d="M12,14.773a2.976,2.976,0,0,1-1.531-.425L.485,8.357a1,1,0,0,1,0-1.714L10.469.652a2.973,2.973,0,0,1,3.062,0l9.984,5.991a1,1,0,0,1,0,1.714l-9.984,5.991A2.976,2.976,0,0,1,12,14.773ZM2.944,7.5,11.5,12.633a.974.974,0,0,0,1,0L21.056,7.5,12.5,2.367a.974.974,0,0,0-1,0h0Z" />
                                                        </svg>
                                                        <svg class="h-6 w-6 mr-2 hidden group-focus-within:block"
                                                            fill="currentColor" viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z" />
                                                            <path
                                                                d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z" />
                                                            <path
                                                                d="M.485,8.357l9.984,5.991a2.97,2.97,0,0,0,3.062,0l9.984-5.991a1,1,0,0,0,0-1.714L13.531.652a2.973,2.973,0,0,0-3.062,0L.485,6.643a1,1,0,0,0,0,1.714Z" />
                                                        </svg>

                                                        Projects
                                                    </h3>
                                                    <p class="mt-2 text-sm text-gray-500">Drag and drop Project to Branche.</p>
                                                </div>
                                                <!--END Projects Head-->

                                                <!--Projects Column-->
                                                <div class="flex flex-col bg-traivis-50 p-2 h-96 overflow-y-auto rounded-lg border-2 border-gray-200"
                                                    x-data="{ element: '',
                                                    projectName: @entangle('projectsArray'),
                                                    openAddNew: false,
                                                    openAddButton: true,
                                                    dragging: false,
                                                    projectDeparts:@entangle('projectDeparts'),
                                                    projectCourses: [],
                                                    positionsInProjectDeparts: [],
                                                    coursesInProjectDeparts: [],
                                                    departsName: @entangle('departNames'),
                                                    sender: '',
                                                    filterableIndex: -1 }">

                                                    <!-- Each project -->
                                                    @foreach ($projectsArray as $key =>  $project )

                                                        <div class="projects border border-gray-300 focus-within:border-traivis-500 hover:border-gray-500 active:border-traivis-500 active:border-2 active:shadow-md bg-white rounded-lg transition duration-200 flex col-span-2 justify-between p-1 mb-2"
                                                            :class="{
                                                                'cursor-move': dragging,
                                                                'cursor-move':
                                                                    !dragging
                                                            }"
                                                            :id="`project-{{ $key }}`"
                                                            @delete-project.window="
                                                            {{-- console.log($event.detail,'project') --}}
                                                             if($event.detail.id == {{ $key }}  ){
                                                                if($event.detail.projectName ){

                                                                    $wire.deleteProject($event.detail.id)
                                                                    }
                                                                }

                                                            ">

                                                            <!-- project Item content-->
                                                            <div class="flex items-center w-full grid">
                                                                <div class="rounded overflow-hidden">

                                                                    <!--project accordion-tab  -->
                                                                    <div class="accordion-section outline-none"
                                                                        tabindex="1" x-data="{ expanded: false }"
                                                                        x-on:dragstart.self="
                                                                        dragging = true;
                                                                        event.dataTransfer.clearData();
                                                                        event.dataTransfer.setData('text/plain',  JSON.stringify({
                                                                             id  : {{ $key }} ,
                                                                             name: projectName[{{ $key }}] ,
                                                                             ref : {{ $key }},
                                                                             element:`project-{{ $key }}`
                                                                            }),

                                                                           );
                                                                        "
                                                                        x-on:drop="expanded = true;"
                                                                        x-on:dragend="dragging = false"
                                                                        draggable="true"
                                                                        x-on:drop.prevent="
                                                                      
                                                                        {{-- console.log(event.dataTransfer.getData('text/plain')) --}}
                                                                        if(!JSON.parse(event.dataTransfer.getData('text/plain')).ref){
                                                                            {{-- sender  = document.getElementById(JSON.parse(event.dataTransfer.getData('text/plain')).{{ $key }}); --}}
                                                                            sender  = document.getElementById(JSON.parse(event.dataTransfer.getData('text/plain')).id);
                                                                            console.log(sender.classList)
                                                                                if( sender.classList.contains('courses')){
                                                                                    if(!projectCourses.find((item) => item.orgId == sender.id  ) ){
                                                                                        $wire.attachCourseToProject({{ $key }},sender.id)
                                                                                        {{-- projectCourses.push({ orgId :  sender.id , text : sender.innerText,projectId: {{ $key }} }) --}}
                                                                                    }
                                                                                    else{
                                                                                        courcesIds=[]
                                                                                        projectCourses.forEach( (item)=>{
                                                                                            courcesIds.push(item.projectId+item.orgId)

                                                                                        })
                                                                                        if(!courcesIds.includes({{ $key }}+sender.id)){
                                                                                            {{-- $wire.addItem(5555) --}}
                                                                                            {{-- projectCourses.push({ orgId :  sender.id , text : sender.innerText,projectId: {{ $key }} }) --}}
                                                                                        }
                                                                                    }
                                                                                }
                                                                        }

                                                                        else {
                                                                            {{-- console.log(event.dataTransfer.getData('text/plain')) --}}
                                                                            positionsInProject =JSON.parse(event.dataTransfer.getData('text/plain')).positionsInProject[0]
                                                                            courcesInProject = JSON.parse(event.dataTransfer.getData('text/plain')).courcesInProject[0]
                                                                            positionsInProject.forEach((posetion) => {
                                                                                if(!positionsInProjectDeparts.includes(posetion)){
                                                                                    posetion.positionProjectId =`project_{{ $key }}`
                                                                                    if(positionsInProjectDeparts.length > 0){
                                                                                        itemsIds=[]
                                                                                        positionsInProjectDeparts.forEach((item)=>{
                                                                                            itemsIds.push(item.orgId+item.departId+item.positionProjectId)
                                                                                        })

                                                                                        if(!itemsIds.includes(posetion.orgId+posetion.departId+posetion.positionProjectId)){
                                                                                            posetion.departName =JSON.parse(event.dataTransfer.getData('text/plain')).departName
                                                                                            {{-- $wire.addItem(1) --}}
                                                                                            {{-- positionsInProjectDeparts.push(posetion) --}}

                                                                                        }
                                                                                    }
                                                                                    else {
                                                                                        posetion.departName =JSON.parse(event.dataTransfer.getData('text/plain')).departName
                                                                                        {{-- $wire.addItem(2) --}}
                                                                                        positionsInProjectDeparts.push(posetion)
                                                                                    }
                                                                                }
                                                                            })

                                                                            courcesInProject.forEach((course) => {

                                                                                if(!coursesInProjectDeparts.includes(course)){

                                                                                    course.positionProjectId =`project_{{ $key }}`
                                                                                    if(coursesInProjectDeparts.length > 0){
                                                                                        itemsIds=[]


                                                                                        coursesInProjectDeparts.forEach((item)=>{

                                                                                            itemsIds.push(item.orgId+item.departId+item.positionProjectId)

                                                                                        })
                                                                                        if(!itemsIds.includes(course.orgId+course.departId+course.positionProjectId)){
                                                                                            course.departName =JSON.parse(event.dataTransfer.getData('text/plain')).departName
                                                                                            {{-- $wire.addItem('11') --}}
                                                                                            coursesInProjectDeparts.push(course)
                                                                                        }
                                                                                    }
                                                                                    else {
                                                                                        {{-- $wire.addItem('58') --}}
                                                                                        course.departName =JSON.parse(event.dataTransfer.getData('text/plain')).departName
                                                                                        {{-- $wire.addItem('222') --}}
                                                                                        {{-- coursesInProjectDeparts.push(course ) --}}
                                                                                    }
                                                                                }
                                                                            })

                                                                            {{-- departsName.push({name:JSON.parse(event.dataTransfer.getData('text/plain')).departName ,depId:JSON.parse(event.dataTransfer.getData('text/plain')).ref , id:`project-depart-{{ $key }}` }) --}}


                                                                            {{-- console.log(event.dataTransfer.getData('text/plain')) --}}
                                                                            sender  = document.getElementById(JSON.parse(event.dataTransfer.getData('text/plain')).ref);
                                                                            {{-- console.log(event.dataTransfer.getData('text/plain')) --}}
                                                                                if( sender.classList.contains('departs')){
                                                                                    if(!projectDeparts.find((item) => item.orgId == sender.id  ) ){
                                                                                        $wire.attachDepartmentToProject({{ $key }},sender.id);
                                                                                        {{-- projectDeparts.push({ projectId:project_{{ $key }} ,orgId :  sender.id , text : sender.innerText  }) --}}
                                                                                    }
                                                                                    else{
                                                                                        departsIds=[]
                                                                                        projectDeparts.forEach( (item)=>{
                                                                                            departsIds.push(item.projectId+item.orgId)

                                                                                        })
                                                                                        if(!departsIds.includes(`project_{{ $key }}`+sender.id)){
                                                                                            $wire.attachDepartmentToProject({{ $key }},sender.id);
                                                                                            {{-- projectDeparts.push({ projectId:`project_{{ $key }}` ,orgId :  sender.id , text : sender.innerText  }) --}}
                                                                                        }
                                                                                    }
                                                                                }
                                
                                                                            
                                                                        }
                                                                        
                                                                        "
                                                                        x-on:dragover.prevent="expanded = true">

                                                                        <!--Project accordion head -->
                                                                        <div @click="expanded = !expanded "
                                                                            class="ease bg-white flex justify-between py-1.5 items-center text-gray-900 font-semibold transition duration-500 cursor-pointer relative">
                                                                            <div
                                                                                class="flex-1 flex flex-row items-center truncate text-clip space-x-2">
                                                                                <svg class="h-4 w-4 mx-1 flex-shrink-0"
                                                                                    fill="currentColor"
                                                                                    viewBox="0 0 24 24" width="512"
                                                                                    height="512">
                                                                                    <path
                                                                                        d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z" />
                                                                                    <path
                                                                                        d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z" />
                                                                                    <path
                                                                                        d="M.485,8.357l9.984,5.991a2.97,2.97,0,0,0,3.062,0l9.984-5.991a1,1,0,0,0,0-1.714L13.531.652a2.973,2.973,0,0,0-3.062,0L.485,6.643a1,1,0,0,0,0,1.714Z" />
                                                                                </svg>

                                                                                <div
                                                                                    class="flex-1 truncate text-clip flex group-focus:text-black transition duration-500">
                                                                                    <p>{{ $project }}</p>
                                                                                </div>

                                                                                <div
                                                                                    class="mr-0 flex flex-row items-center rounded-xl text-gray-400 text-sm font-bold capitalize">
                                                                                    <svg class="h-4 w-4 mx-1 flex-shrink-0"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 384 512">
                                                                                        <path
                                                                                            d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" />
                                                                                    </svg>

                                                                                    @php
                                                                                        $theProject = $projects->find($key);
                                                                                    @endphp
                                                                                    <p>{{ count($theProject->departments) }}
                                                                                    </p>
                                                                                </div>

                                                                                <div
                                                                                    class="mr-0 flex flex-row items-center rounded-xl text-gray-400 text-sm font-bold capitalize">
                                                                                    <svg class="h-4 w-4 mx-1 flex-shrink-0"
                                                                                        fill="currentColor"
                                                                                        data-name="Layer 1"
                                                                                        viewBox="0 0 24 24"
                                                                                        width="512" height="512">
                                                                                        <path
                                                                                            d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z" />
                                                                                    </svg>
                                                                                    @php
                                                                                        $numberOfPosition = 0;
                                                                                        foreach ($theProject->departments as $department) {
                                                                                            $numberOfPosition+= $department->positions->count();
                                                                                        }

                                                                                    @endphp

                                                                                    <p>{{ $numberOfPosition }}</p>
                                                                                </div>
                                                                            </div>

                                                                            <div :class=" expanded ? 'rotate-90' : ''"
                                                                                class="mx-2 ease border border-gray-700 rounded-full items-center inline-flex justify-center transform transition duration-500 group-focus:text-black ">
                                                                                <svg class="h-5 w-5 -rotate-90"
                                                                                    fill="currentColor"
                                                                                    viewBox="0 0 24 24" width="512"
                                                                                    height="512">
                                                                                    <path
                                                                                        d="M6.414,9H17.586a1,1,0,0,1,.707,1.707l-5.586,5.586a1,1,0,0,1-1.414,0L5.707,10.707A1,1,0,0,1,6.414,9Z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <!--END Project accordion head -->


                                                                        <!--Project accordion Content -->
                                                                        <div x-show="expanded" x-collapse
                                                                            class="ease bg-white border-t border-gray-200 px-4 overflow-hidden duration-500">

                                                                            <div x-show="projectDeparts.length > 0 ">
                                                                                {{-- @dd($theProject->departments) --}}
                                                                                <!--Project accordion content label-->
                                                                                @if (!$theProject->departments->isEmpty())


                                                                                <h2 class="w-full p-2">
                                                                                    Departments
                                                                                </h2>
                                                                                @endif
                                                                                <!--END Project accordion content label-->

                                                                                <!--Projects * Departments-->
                                                                                <div>
                                                                                    <!--Projects * each Department-->

                                                                                    @foreach ($theProject->departments as $department)
                                                                                        <div :class="{
                                                                                            'cursor-move': dragging,
                                                                                            'cursor-move':
                                                                                                !dragging
                                                                                            }"
                                                                                            :id="`departsName[index_i].id`"
                                                                                            @delete-depart-in-project.window="
                                                                                                            console.log($event.detail,'project depart')
                                                                                                           {{-- projectDeparts.forEach((item ,inx) =>{ --}}
                                                                                                               if($event.detail.depId=={{ $department->id }} && $event.detail.id == {{ $key }}){
                                                                                                                   $wire.deleteProjectDepartment({{ $key }},{{ $department->id }})
                                                                                                                   {{-- projectDeparts.splice(inx,1)
                                                                                                                   departsName.splice(inx,1) --}}
                                                                                                               }
                                                                                                           {{-- }) --}}
                                                                                                           "
                                                                                            x-on:dragstart.self="
                                                                                                        dragging = true;
                                                                                                        event.dataTransfer.clearData();
                                                                                                        event.dataTransfer.setData('text/plain',  JSON.stringify({
                                                                                                             ref :{{ $department->id }},
                                                                                                             id:{{ $theProject->id }},
                                                                                                             name:`{{ $department->department_name_en }}`,
                                                                                                            }));
                                                                                                        "
                                                                                            draggable="true"
                                                                                            x-on:dragend="dragging = false">


                                                                                            <!-- Project * Department items-->
                                                                                            <span
                                                                                                class="departs border border-gray-300 bg-traivis-50 hover:border-traivis-500 active:bg-traivis-100 focus-within:border-traivis-500 active:border-traivis-500 active:border-2 active:shadow-md bg-white rounded-lg transition duration-200 flex col-span-2 justify-between p-1 mb-2">

                                                                                                <!--Project * Department Item content-->
                                                                                                <div
                                                                                                    class="flex items-center w-full grid">
                                                                                                    <div
                                                                                                        class="rounded overflow-hidden">

                                                                                                        <!--Project * Department accordion-tab  -->
                                                                                                        <div class="outline-none"
                                                                                                            tabindex="1"
                                                                                                            x-data="{ expanded: false, sender: '', filterableIndex: -1 }"
                                                                                                            @delete-item-in-depart.window="

                                                                                                                    if ($event.detail.id == {{ $department->id }}){
                                                                                                                        if ( $event.detail.meta.su =='positions'  ){

                                                                                                                            $wire.deleteProjectPosition($event.detail.meta.projectId,$event.detail.meta.depId,$event.detail.meta.orgId)
                                                                                                                            {{-- positionsInProjectDeparts =positionsInProjectDeparts.filter(item => item.departId != $event.detail.meta.depId || item.orgId != $event.detail.meta.orgId || item.positionProjectId  != $event.detail.meta.projectId  ) --}}

                                                                                                                        }else if($event.detail.meta.su =='courses' ) {
                                                                                                                            $wire.deleteProjectDepartmentCourse($event.detail.meta.projectId,$event.detail.meta.depId,$event.detail.meta.orgId)
                                                                                                                            coursesInProjectDeparts =coursesInProjectDeparts.filter(item => item.departId != $event.detail.meta.depId || item.orgId != $event.detail.meta.orgId || item.positionProjectId  != $event.detail.meta.projectId )
                                
                                                                                                                        }
                        
                                                                                                                    } 
                                                                                                                    "
                                                                                                                x-on:drop="expanded = true;"
                                                                                                                x-on:drop.prevent="
                                                                                                                        sender  = document.getElementById(JSON.parse( event.dataTransfer.getData('text')).id);
                                                                                                                        

                                                                                                                                if( sender.classList.contains('positions')){
                                                                                                                                    if(!positionsInProjectDeparts.find((item) => item.orgId == sender.id  )){
                                                                                                                                        $wire.attachPositionToProject({{ $key }},{{ $department->id }}, sender.id)
                                                                                                                                        {{-- positionsInProjectDeparts.push(  {positionProjectId :{{ $key }}, departName :departsName[{{ $department->id }}].name , departId:{{ $department->id }}  , orgId :  sender.id , text : sender.innerText  }) --}}
                                                                                                                                    }

                                                                                                                                    else {
                                                                                                                                        itemsIds=[]
                                                                                                                                        positionsInProjectDeparts.forEach((item_)=>{
                                                                                                                                            itemsIds.push(item_.orgId+item_.departId+item_.positionProjectId)
                                                                                                                                        })

                                                                                                                                        if(!itemsIds.includes(sender.id+item.orgId+{{ $key }})){
                                                                                                                                            {{-- positionsInProjectDeparts.push(  {positionProjectId :{{ $key }}, departName :departsName[{{ $department->id }}].name , departId: item.orgId , orgId :  sender.id , text : sender.innerText  }) --}}
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                }
                                                                                                                                else if(sender.classList.contains('courses')){
                                                                                                                                    if(!coursesInProjectDeparts.find((item) => item.orgId == sender.id  )){

                                                                                                                                        $wire.attachCourseToDepartmentProject({{ $key }},{{ $department->id }}, sender.id);
                                                                                                                                        {{-- coursesInProjectDeparts.push(  {positionProjectId :{{ $key }}, departName :departsName[{{ $department->id }}].name , departId: `department-{{ $department->id }}` , orgId :  sender.id , text : sender.innerText  }) --}}
                                                                                                                                    }

                                                                                                                                    else {
                                                                                                                                        itemsIds=[]
                                                                                                                                        coursesInProjectDeparts.forEach((item_)=>{
                                                                                                                                            itemsIds.push(item_.orgId+item_.departId+item_.positionProjectId)
                                                                                                                                        })

                                                                                                                                        if(!itemsIds.includes(sender.id+item.orgId+{{ $key }})){
                                                                                                                                            coursesInProjectDeparts.push(  {positionProjectId :{{ $key }}, departName :departsName[{{ $department->id }}].name , departId: {{ $department->id }} , orgId :  sender.id , text : sender.innerText  })
                                                                                                                                        }
                                                                                                                                    }

                                                                                                                                }
                                                                                                                        
                                                                                                                    "
                                                                                                                x-on:dragover.prevent="expanded = true">

                                                                                                            <!--Project * Department accordion Head-->
                                                                                                            <div @click="expanded = !expanded "
                                                                                                                class="ease flex justify-between px-2 py-1.5 items-center text-gray-900 font-semibold transition duration-500 cursor-pointer relative">
                                                                                                                <div
                                                                                                                    class="w-4/5 flex flex-row items-center truncate text-clip space-x-2">
                                                                                                                    <div
                                                                                                                        class="w-4/5 truncate text-clip flex group-focus:text-black transition duration-500">
                                                                                                                        <p>
                                                                                                                            {{ $department->department_name_en }}
                                                                                                                        </p>
                                                                                                                    </div>

                                                                                                                    <div
                                                                                                                        class=" flex flex-row items-center rounded-xl text-gray-400 text-sm font-bold capitalize">
                                                                                                                        <svg class="h-4 w-4 mx-1 flex-shrink-0"
                                                                                                                            fill="currentColor"
                                                                                                                            data-name="Layer 1"
                                                                                                                            viewBox="0 0 24 24"
                                                                                                                            width="512"
                                                                                                                            height="512">
                                                                                                                            <path
                                                                                                                                d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z" />
                                                                                                                        </svg>

                                                                                                                        <p>{{ $department->positions->count() }}
                                                                                                                        </p>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                                <div :class=" expanded
                                                                                                                     ?
                                                                                                                     'rotate-90' :
                                                                                                                     ''"
                                                                                                                    class="ease border border-gray-700 rounded-full items-center inline-flex justify-center transform transition duration-500 group-focus:text-black ">
                                                                                                                    <svg class="h-5 w-5 -rotate-90"
                                                                                                                        fill="currentColor"
                                                                                                                        viewBox="0 0 24 24"
                                                                                                                        width="512"
                                                                                                                        height="512">
                                                                                                                        <path
                                                                                                                            d="M6.414,9H17.586a1,1,0,0,1,.707,1.707l-5.586,5.586a1,1,0,0,1-1.414,0L5.707,10.707A1,1,0,0,1,6.414,9Z" />
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!--END Project * Department accordion Head-->

                                                                                                            <!--Project * Department accordion Content -->
                                                                                                            <div x-show="expanded"
                                                                                                                x-collapse
                                                                                                                class="ease border-t border-gray-200 px-4 overflow-hidden duration-500">

                                                                                                                <div
                                                                                                                    class="center">

                                                                                                                    <!--Project * Department accordion label-->
                                                                                                                    @if (!$department->positions->isEmpty() || !empty($projectPositions))
                                                                                                                        <h2 x-text="'Positions'"
                                                                                                                            class="w-full p-2">
                                                                                                                        </h2>
                                                                                                                    @endif
                                                                                                                    <!--Project * END Department accordion label-->

                                                                                                                    <!--Project * Department accordion * each items-->
                                                                                                                    <div
                                                                                                                        class="flex flex-wrap">


                                                                                                                        @foreach ($department->positions as $position)
                                                                                                                            <div :class="{
                                                                                                                                'cursor-move': dragging,
                                                                                                                                'cursor-move':
                                                                                                                                    !
                                                                                                                                    dragging
                                                                                                                            }"
                                                                                                                                x-on:dragstart.self="
                                                                                                                                                dragging = false;
                                                                                                                                                event.dataTransfer.clearData();
                                                                                                                                                event.dataTransfer.setData('text/plain', JSON.stringify({ ref : {{ $department->id }} , su : 'positions', orgId : {{ $position->id }} ,departId:{{ $department->id }}, projectId:{{ $theProject->id }} }));
                                                                                                                                                "
                                                                                                                                x-on:dragend="dragging = false"
                                                                                                                                draggable="false">

                                                                                                                                <!--Position * Department items label-->
                                                                                                                                <button
                                                                                                                                    class="bg-traivis-100 border hover:border-traivis-500 focus:bg-traivis-500 focus:text-white active:shadow-md px-2 py-1 m-1 block text-sm rounded-full w-fit">
                                                                                                                                    {{ $position->position_name_en }}
                                                                                                                                </button>
                                                                                                                                <!--END Position * Department items label-->


                                                                                                                            </div>
                                                                                                                        @endforeach
                                                                                                                        @php
                                                                                                                            if (isset($projectPositions)) {
                                                                                                                                $projectId = $theProject->id;
                                                                                                                                $departId = $department->id;
                                                                                                                                $positionsForProject = array_filter($projectPositions, function ($value) use ($projectId, $departId) {
                                                                                                                                    return $value['positionProjectId'] == $projectId && $value['departmentId'] == $departId;
                                                                                                                                });


                                                                                                                            }

                                                                                                                            if (isset($projectDepartmentCourses)) {
                                                                                                                                $departmentCourses= array_filter($projectDepartmentCourses, function ($value) use ($projectId, $departId) {
                                                                                                                                    return $value['positionProjectId'] == $projectId && $value['departmentId'] == $departId;
                                                                                                                                });
                                                                                                                                // dd($departmentCourses);
                                                                                                                            }

                                                                                                                        @endphp

                                                                                                                        @foreach ($positionsForProject as $position)
                                                                                                                            <div :class="{
                                                                                                                                'cursor-move': dragging,
                                                                                                                                'cursor-move':
                                                                                                                                    !
                                                                                                                                    dragging
                                                                                                                            }"
                                                                                                                                x-on:dragstart.self="
                                                                                        dragging = true;
                                                                                        event.dataTransfer.clearData();
                                                                                        event.dataTransfer.setData('text/plain', JSON.stringify({ ref : {{ $department->id }} , su : 'positions', orgId : {{ $position['positionId'] }} ,departId:{{ $department->id }}, projectId:{{ $theProject->id }} }));
                                                                                         "
                                                                                                                                x-on:dragend="dragging = false"
                                                                                                                                draggable="true">

                                                                                                                                <!--Position * Department items label-->
                                                                                                                                <button
                                                                                                                                    class="bg-traivis-100 border hover:border-traivis-500 focus:bg-traivis-500 focus:text-white active:shadow-md px-2 py-1 m-1 block text-sm rounded-full w-fit">
                                                                                                                                    {{ $position['text'] }}
                                                                                                                                </button>
                                                                                                                                <!--END Position * Department items label-->


                                                                                                                            </div>
                                                                                                                        @endforeach





                                                                                                                    </div>
                                                                                                                    <!--Project * END Department accordion * each items-->


                                                                                                                </div>

                                                                                                                <div class="center">

                                                                                                                    <!--Project * Department accordion label-->
                                                                                                                    <h2
                                                                                                                        class="w-full p-2">
                                                                                                                        Courses
                                                                                                                    </h2>
                                                                                                                    <!--Project * END Department accordion label-->
                                                                                                                    <div
                                                                                                                    class="flex flex-wrap">

                                                                                                                            @foreach ($department->enterpriseRequiredCourses as $course )


                                                                                                                            <div :class="{
                                                                                                                                'cursor-move': dragging,
                                                                                                                                'cursor-move':
                                                                                                                                    !
                                                                                                                                    dragging
                                                                                                                              }"
                                                                                                                                x-on:dragstart.self="

                                                                                                                                            event.dataTransfer.clearData();
                                                                                                                                            event.dataTransfer.setData('text/plain', JSON.stringify({ ref : {{ $department->id }} , su : 'courses', orgId : {{ $course->id }},departId:{{ $theProject->id }} }));
                                                                                                                                            "
                                                                                                                                x-on:dragend="dragging = false"
                                                                                                                                >

                                                                                                                                <!--Position * Department items label-->
                                                                                                                                <button

                                                                                                                                    class="bg-traivis-100 border hover:border-traivis-500 focus:bg-traivis-500 focus:text-white active:shadow-md px-2 py-1 m-1 block text-sm rounded-full w-fit">
                                                                                                                                    {{ $course->en_course_name }}
                                                                                                                                </button>
                                                                                                                                <!--END Position * Department items label-->


                                                                                                                            </div>
                                                                                                                            @endforeach

                                                                                                                </div>
                                                                                                                    <!--Project * Department accordion * each items-->
                                                                                                                    <div
                                                                                                                        class="flex flex-wrap">

                                                                                                                                @foreach ($departmentCourses as $course )


                                                                                                                                <div :class="{
                                                                                                                                    'cursor-move': dragging,
                                                                                                                                    'cursor-move':
                                                                                                                                        !
                                                                                                                                        dragging
                                                                                                                                  }"
                                                                                                                                    x-on:dragstart.self="
                                                                                                                                                dragging = true;
                                                                                                                                                event.dataTransfer.clearData();
                                                                                                                                                event.dataTransfer.setData('text/plain', JSON.stringify({ ref : {{ $course['departmentId'] }} , su : 'courses', orgId : {{ $course['positionId'] }},departId:{{ $course['departmentId'] }}, projectId:{{ $course['positionProjectId'] }} }));
                                                                                                                                                "
                                                                                                                                    x-on:dragend="dragging = false"
                                                                                                                                    draggable="true">

                                                                                                                                    <!--Position * Department items label-->
                                                                                                                                    <button
                                                                                                                                    class="bg-traivis-100 border hover:border-traivis-500 focus:bg-traivis-500 focus:text-white active:shadow-md px-2 py-1 m-1 block text-sm rounded-full w-fit">
                                                                                                                                        {{ $course['text'] }}
                                                                                                                                    </button>
                                                                                                                                    <!--END Position * Department items label-->


                                                                                                                                </div>
                                                                                                                                @endforeach

                                                                                                                    </div>
                                                                                                                    <!--Project * END Department accordion * each items-->


                                                                                                                </div>


                                                                                                            </div>
                                                                                                            <!--END Project * Department accordion Content -->


                                                                                                        </div>
                                                                                                        <!--Project * Department accordion-tab  -->

                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--END Project * Department Item content-->

                                                                                            </span>
                                                                                            <!--END Project * Department items-->

                                                                                        </div>
                                                                                    @endforeach



                                                                                    <!--END Projects * each Department-->


                                                                                </div>
                                                                                <!--END Projects * Departments-->

                                                                            </div>

                                                                            <div >

                                                                                @if (!$theProject->enterpriseRequiredCourses->isEmpty())

                                                                                <h2
                                                                                    class="w-full p-2">
                                                                                    Courses
                                                                                </h2>
                                                                                @endif


                                                                                <!--END Project accordion content label-->

                                                                                <!--Projects * Departments-->
                                                                                <div>


                                                                                    <!--Projects * each Course-->
                                                                                    @foreach ($theProject->enterpriseRequiredCourses as $course )


                                                                                            <div class="text-gray-500"
                                                                                                :class="{
                                                                                                    'cursor-move': dragging,
                                                                                                    'cursor-move':
                                                                                                        !dragging
                                                                                                }"
                                                                                                @delete-cources-in-project.window="

                                                                                                            if($event.detail.id=={{ $course->id }} && $event.detail.depId=={{ $theProject->id }}){
                                                                                                                $wire.deleteCourseFromProject({{ $theProject->id }},{{ $course->id }})
                                                                                                                {{-- projectCourses.splice(inx,1) --}}
                                                                                                            }

                                                                                                        "
                                                                                                x-on:dragstart.self="
                                                                                                        dragging = true;
                                                                                                        event.dataTransfer.clearData();
                                                                                                        event.dataTransfer.setData('text/plain', JSON.stringify({  name : 'courses', ref : {{ $course->id }} , projectId:{{ $theProject->id }} }));
                                                                                                        "
                                                                                                x-on:dragend="dragging = false"
                                                                                                draggable="true">

                                                                                                <button

                                                                                                    class="bg-traivis-100 border hover:border-traivis-500 focus:bg-traivis-500 focus:text-white active:shadow-md px-2 py-1 m-1 block text-sm rounded-full w-fit">
                                                                                                    {{ $course->en_course_name }}
                                                                                                </button>

                                                                                            </div>
                                                                                    @endforeach
                                                                                    <!--END Projects * each Course-->

                                                                                </div>
                                                                                <!--END Projects * Departments-->

                                                                            </div>

                                                                        </div>
                                                                        <!--END Project accordion Content -->

                                                                    </div>
                                                                    <!--END project accordion-tab -->

                                                                </div>
                                                            </div>
                                                            <!--END project Item content-->

                                                        </div>
                                                    @endforeach

                                                        <!--project Item-->

                                                        <!--END project Item-->


                                                    <!--END Each project -->
                                                    @if (auth()->user()->can('organization_workforce_create')) 
                                                    <!-- ADD project -->
                                                    <div class="group cursor-pointer" x-show="openAddButton"
                                                        @click="openAddNew = ! openAddNew , openAddButton= false , element=''">

                                                        <div
                                                            class="w-full flex justify-center gap-2 items-center my-2">
                                                            <svg class="w-5 h-5" fill="currentColor" height="512"
                                                                viewBox="0 0 24 24" width="512"
                                                                data-name="Layer 1">
                                                                <path
                                                                    d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                                                </path>
                                                            </svg>
                                                            <span class="">Add More</span>
                                                        </div>
                                                    </div>
                                                    <!--END ADD project -->
                                                    @endif

                                                    <!-- input project -->
                                                    <div x-show="openAddNew" x-transition.duration.800ms
                                                        class="rounded flex justify-between">
                                                        <input type="text" x-model="element" wire:model.defer='project_name_en'
                                                            placeholder="project name"
                                                            class="shadow w-full rounded-md bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors   ">
                                                        <button wire:click='addProject'
                                                            @click="openAddNew = ! openAddNew , openAddButton= true"
                                                            class="ml-2 bg-traivis-500 text-white rounded-md hover:bg-traivis-700 pr-3 pl-3">
                                                            add
                                                        </button>
                                                    </div>
                                                    <!--END input project -->

                                                </div>
                                                <!--END Projects Column-->

                                            </div>
                                        </section>
                                    </div>
                                    <!--end Projects section-->



                                    <!-- Branches section-->
                                    <div class="mb-4 md:mb-0 w-full sm:w-1/2 lg:w-1/4">
                                        <section class="py-10 group">
                                            <div class="container px-4 relative">
                                                @if (auth()->user()->can('organization_workforce_delete'))
                                                <!--Delete-->
                                                <button
                                                    class="hidden group/del group-hover:block cursor-pointer absolute mx-0 px-0 left-0 right-0 w-full -bottom-10 text-gray-500 hover:text-traivis-500 z-10"
                                                    x-show="tabs.find(tab => tab.id === 1).active"
                                                    x-data="{ deletable: null }" x-on:dragover.prevent=""
                                                    x-on:drop=""
                                                    x-on:drop.prevent="
                                                           deletable = JSON.parse( event.dataTransfer.getData('text')) ;
                                                           console.log(deletable)
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
                                                           $dispatch('delete-project-in-branch' , { branchId : deletable.ref  ,projectId:deletable.id ,cName:deletable.cName,pName:deletable.pName
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
                                                @endif
                                                <!--Branches Head-->
                                                <div class="max-w-4xl mx-auto mb-4 text-center">
                                                    <h3
                                                        class="flex flex-row items-center justify-center text-gray-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500 transition-all mb-4 text-xl md:text-3xl leading-tight font-bold tracking-tighter">
                                                        <svg class="h-6 w-6 mr-2 group-focus-within:hidden"
                                                            fill="currentColor" data-name="Layer 1"
                                                            viewBox="0 0 24 24" width="512" height="512">
                                                            <path
                                                                d="M12,12A4,4,0,1,0,8,8,4,4,0,0,0,12,12Zm0-6a2,2,0,1,1-2,2A2,2,0,0,1,12,6ZM16,22.03l8,1.948V13.483a3,3,0,0,0-2.133-2.871l-2.1-.7A8.037,8.037,0,0,0,20,8.006a8,8,0,0,0-16,0,8.111,8.111,0,0,0,.1,1.212A2.992,2.992,0,0,0,0,12v9.752l7.983,2.281ZM7.757,3.764a6,6,0,0,1,8.493,8.477L12,16.4,7.757,12.249a6,6,0,0,1,0-8.485ZM2,12a.985.985,0,0,1,.446-.832A1.007,1.007,0,0,1,3.43,11.1l1.434.518a8.036,8.036,0,0,0,1.487,2.056L12,19.2l5.657-5.533a8.032,8.032,0,0,0,1.4-1.882l2.217.741a1,1,0,0,1,.725.961v7.949L16,19.97l-7.98,2L2,20.246Z" />
                                                        </svg>
                                                        <svg class="h-6 w-6 mr-2 hidden group-focus-within:block"
                                                            fill="currentColor" data-name="Layer 1"
                                                            viewBox="0 0 24 24" width="512" height="512">
                                                            <path
                                                                d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z" />
                                                        </svg>

                                                        Branches
                                                    </h3>
                                                    <p class="mt-2 text-sm text-gray-500">Go to WorkForce to Add Employee.</p>
                                                </div>
                                                <!--END Branches Head-->

                                                <!--Branches Column-->
                                                <div class="flex flex-col bg-traivis-50 p-2 h-96 overflow-y-auto rounded-lg border-2 border-gray-200"
                                                    x-data="{ element: '', branshName: [], projectsInBransh: @entangle('branchProjects'), coursesInBransh: [], dragging: false, openAddNew: false, openAddButton: true }">

                                                    <!-- Each Branches -->

                                                        @foreach ($branches as $branch)
                                                            <div wire:key="branch-{{ $branch->id }}" class="branches border border-gray-300 hover:border-gray-500 focus-within:border-traivis-500 active:border-traivis-500 active:border-2 active:shadow-md bg-white rounded-lg transition duration-200 flex col-span-2 justify-between p-1 mb-2"
                                                                x-data="{ expanded: false }"
                                                                :class="{
                                                                    'cursor-move': dragging,
                                                                    'cursor-move':
                                                                        !dragging
                                                                }"
                                                                :id="`branch-{{ $branch->id }}`"
                                                                @delete-branch.window="
                                                             if($event.detail.name == `branch-{{ $branch->id }}`){
                                                                 $wire.deleteBranch({{ $branch->id }});
                                                             }
                                                            "
                                                                draggable="true" x-on:drop="expanded = true;">

                                                                <!-- Branches Item content-->
                                                                <div class="flex items-center w-full grid">
                                                                    <div class="rounded overflow-hidden">

                                                                        <!--Branches accordion-tab  -->
                                                                        <div class="accordion-section outline-none"
                                                                           >

                                                                            <!--Branches accordion Head container -->
                                                                            <div class=""
                                                                                :class="{
                                                                                    'cursor-move': dragging,
                                                                                    'cursor-move': !
                                                                                        dragging
                                                                                }"
                                                                                @delete-project-in-branch.window="
                                                                                    if($event.detail.cName){
                                                                                        console.log('omar');


                                                                                            if($event.detail.branchId=={{ $branch->id }}){
                                                                                                $wire.deleteCourseFromBranch({{ $branch->id }},$event.detail.projectId)
                                                                                            }

                                                                                    }
                                                                                    else if($event.detail.pName) {

                                                                                        projectsInBransh.forEach((item ,inx) =>{
                                                                                            if($event.detail.branchId==item.branchId && $event.detail.projectId==item.projectId){
                                                                                                $wire.deleteBranchProject({{ $branch->id }},$event.detail.projectId);
                                                                                                {{-- projectsInBransh.splice(inx,1) --}}
                                                                                            }
                                                                                        })
                                                                                    }


                                                                                        "
                                                                                x-on:drop.prevent="

                                                                                    sender  = document.getElementById(JSON.parse( event.dataTransfer.getData('text')).element);

                                                                                    courseSender  = document.getElementById(JSON.parse( event.dataTransfer.getData('text')).id);

                                                                                    if(sender){

                                                                                            if( sender.classList.contains('projects')){
                                                                                                if(!projectsInBransh.find((item) => item.ProjectId == JSON.parse( event.dataTransfer.getData('text')).id  ) ){
                                                                                                    $wire.attachProjectToBranch({{ $branch->id }},JSON.parse( event.dataTransfer.getData('text')).id);
                                                                                                    {{-- projectsInBransh.push(  {projectId :JSON.parse( event.dataTransfer.getData('text')).id,  orgId :  JSON.parse( event.dataTransfer.getData('text')).ref , name : JSON.parse( event.dataTransfer.getData('text')).name ,branchId:b_i }) --}}
                                                                                                }
                                                                                                else{
                                                                                                    branchesIds=[]
                                                                                                    projectsInBransh.forEach((item)=>{
                                                                                                        $wire.addItem(2);
                                                                                                        branchesIds.push(item.branchId+''+item.ProjectId)

                                                                                                    })

                                                                                                    if(!branchesIds.includes({{ $branch->id }}+''+JSON.parse( event.dataTransfer.getData('text')).id)){

                                                                                                        projectsInBransh.push(  {ProjectId :JSON.parse( event.dataTransfer.getData('text')).id,  orgId :  JSON.parse( event.dataTransfer.getData('text')).ref , name : JSON.parse( event.dataTransfer.getData('text')).name ,branchId:b_i })

                                                                                                    }
                                                                                                }
                                                                                            }

                                                                                    }
                                                                                    else if(!sender)
                                                                                            {

                                                                                            if( courseSender.classList.contains('courses')){
                                                                                                if(!coursesInBransh.find((item) => item.courseId == JSON.parse( event.dataTransfer.getData('text')).id  ) ){

                                                                                                    $wire.attachCourseToBranch({{ $branch->id }},JSON.parse( event.dataTransfer.getData('text')).id)

                                                                                                }
                                                                                            }

                                                                                    }

                                                                                    "
                                                                                x-on:dragstart.self="
                                                                                    dragging = true;
                                                                                    event.dataTransfer.clearData();
                                                                                    event.dataTransfer.setData('text/plain', JSON.stringify({ref:{{ $branch->id }} ,name:`branch-{{ $branch->id }}`}));
                                                                                    "
                                                                                x-on:dragend="dragging = false"
                                                                                draggable="true"
                                                                                x-on:dragover.prevent="expanded = true">


                                                                                <!--branche accordion head -->
                                                                                <div @click="expanded = !expanded "
                                                                                    class="ease bg-white flex justify-between py-1.5 items-center text-gray-900 font-semibold transition duration-500 cursor-pointer relative">
                                                                                    <div
                                                                                        class="flex-1 flex flex-row items-center truncate text-clip space-x-2">
                                                                                        <svg class="h-4 w-4 mx-1 flex-shrink-0"
                                                                                            fill="currentColor"
                                                                                            data-name="Layer 1"
                                                                                            viewBox="0 0 24 24"
                                                                                            width="512"
                                                                                            height="512">
                                                                                            <path
                                                                                                d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z" />
                                                                                        </svg>

                                                                                        <div
                                                                                            class="flex-1 truncate text-clip flex group-focus:text-black transition duration-500">
                                                                                            <p >{{ $branch->branch_name_en }}</p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="mr-0 flex flex-row items-center rounded-xl text-gray-400 text-sm font-bold capitalize">
                                                                                            <svg class="h-4 w-4 mx-1 flex-shrink-0"
                                                                                                fill="currentColor"
                                                                                                viewBox="0 0 24 24"
                                                                                                width="512"
                                                                                                height="512">
                                                                                                <path
                                                                                                    d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z" />
                                                                                                <path
                                                                                                    d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z" />
                                                                                                <path
                                                                                                    d="M.485,8.357l9.984,5.991a2.97,2.97,0,0,0,3.062,0l9.984-5.991a1,1,0,0,0,0-1.714L13.531.652a2.973,2.973,0,0,0-3.062,0L.485,6.643a1,1,0,0,0,0,1.714Z" />
                                                                                            </svg>

                                                                                            <p>{{ $branch->projects->count() }}</p>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div :class=" expanded ? 'rotate-90' : ''"
                                                                                        class="mx-2 ease border border-gray-700 rounded-full items-center inline-flex justify-center transform transition duration-500 group-focus:text-black ">
                                                                                        <svg class="h-5 w-5 -rotate-90"
                                                                                            fill="currentColor"
                                                                                            viewBox="0 0 24 24"
                                                                                            width="512"
                                                                                            height="512">
                                                                                            <path
                                                                                                d="M6.414,9H17.586a1,1,0,0,1,.707,1.707l-5.586,5.586a1,1,0,0,1-1.414,0L5.707,10.707A1,1,0,0,1,6.414,9Z" />
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                                <!--END branche accordion head -->

                                                                            </div>
                                                                            <!--End Branches accordion Head container -->

                                                                            <!--Branches accordion content -->
                                                                            <div x-show="expanded" x-collapse
                                                                                class="ease bg-white border-t border-gray-200 px-4 overflow-hidden duration-500">

                                                                                @if (!$branch->projects->isEmpty())
                                                                                <h2
                                                                                class="w-full p-2">
                                                                                projects
                                                                                </h2>
                                                                                @endif

                                                                                <!--END Branches accordion content label-->

                                                                                <!--Branches * Projects-->


                                                                                @foreach ($branch->projects as $project )


                                                                                <!--Branches * Projects item-->

                                                                                <div class="ease my-2 bg-traivis-50 border border-gray-300 hover:border-traivis-500 active:border-2 active:bg-traivis-100 rounded-lg flex justify-between px-4 py-1.5 items-center text-gray-900 font-semibold transition duration-500 cursor-pointer relative"
                                                                                    x-on:dragstart.self="dragging = true;
                                                                                        event.dataTransfer.clearData();
                                                                                        event.dataTransfer.setData('text/plain', JSON.stringify({  ref : {{ $branch->id }} , id : {{ $project->id }} ,pName:`{{ $project->project_name_en }}`}));
                                                                                        "
                                                                                    x-on:dragend="dragging = false"
                                                                                    draggable="true">

                                                                                    <!--Branches * Project head -->
                                                                                    <div
                                                                                        class="w-4/5 truncate text-clip flex group-focus:text-black transition duration-500">
                                                                                        <p>
                                                                                            {{ $project->project_name_en }}
                                                                                        </p>
                                                                                    </div>

                                                                                    <div
                                                                                        class="mx-1 flex flex-row items-center rounded-xl text-gray-400 text-sm font-bold capitalize">
                                                                                        <svg class="h-4 w-4 mx-1 flex-shrink-0"
                                                                                            fill="currentColor"
                                                                                            viewBox="0 0 384 512">
                                                                                            <path
                                                                                                d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" />
                                                                                        </svg>

                                                                                        <p>{{ $project->departments->count()}}</p>
                                                                                    </div>

                                                                                    <div
                                                                                        class="mx-1 flex flex-row items-center rounded-xl text-gray-400 text-sm font-bold capitalize">
                                                                                        <svg class="h-4 w-4 mx-1 flex-shrink-0"
                                                                                            fill="currentColor"
                                                                                            data-name="Layer 1"
                                                                                            viewBox="0 0 24 24"
                                                                                            width="512"
                                                                                            height="512">
                                                                                            <path
                                                                                                d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z" />
                                                                                        </svg>
                                                                                        {{-- @dd($project) --}}
                                                                                        <p></p>
                                                                                    </div>
                                                                                    <!--END Branches *Project head -->

                                                                                </div>

                                                                                <!--END Branches * Projects item-->
                                                                                @endforeach


                                                                               @if (!$branch->enterpriseRequiredCourses->isEmpty())
                                                                               <h2
                                                                               class="w-full p-2">
                                                                                 Courses
                                                                               </h2>
                                                                               @endif

                                                                                @foreach ($branch->enterpriseRequiredCourses as $course )


                                                                                    <!--Branches * Projects item-->
                                                                                    <div class="ease my-2 bg-traivis-50 border border-gray-300 hover:border-traivis-500 active:border-2 active:bg-traivis-100 rounded-lg flex justify-between px-4 py-1.5 items-center text-gray-900 font-semibold transition duration-500 cursor-pointer relative"
                                                                                        x-on:dragstart.self="dragging = true;
                                                                                            event.dataTransfer.clearData();
                                                                                            event.dataTransfer.setData('text/plain', JSON.stringify({  ref : {{ $branch->id }} , id : {{ $course->id }} ,cName:'courses' }));
                                                                                            "
                                                                                        x-on:dragend="dragging = false"
                                                                                        draggable="true">

                                                                                        <!--Branches * Project head -->
                                                                                        <div
                                                                                            class="w-4/5 truncate text-clip flex group-focus:text-black transition duration-500">
                                                                                            <p>
                                                                                                {{ $course->en_course_name }}
                                                                                            </p>
                                                                                        </div>




                                                                                        <!--END Branches *Project head -->

                                                                                    </div>
                                                                                    <!--END Branches * Projects item-->


                                                                                @endforeach

                                                                                <!--END Branches * Projects-->

                                                                            </div>
                                                                            <!--END Branches accordion content -->

                                                                        </div>
                                                                        <!--Branches accordion-tab -->

                                                                    </div>
                                                                </div>
                                                                <!--END Branches Item content-->

                                                            </div>
                                                        @endforeach
                                                        <!--Branche Item-->

                                                        <!--END Branche Item-->


                                                    <!--END Each Branches -->
                                                    @if (auth()->user()->can('organization_workforce_create')) 
                                                    <!-- Add Branche -->
                                                    <div class="group cursor-pointer" x-show="openAddButton"
                                                        @click="openAddNew = ! openAddNew , openAddButton= false , element=''">

                                                        <div
                                                            class="w-full flex justify-center gap-2 items-center my-2">
                                                            <svg class="w-5 h-5" fill="currentColor" height="512"
                                                                viewBox="0 0 24 24" width="512"
                                                                data-name="Layer 1">
                                                                <path
                                                                    d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                                                </path>
                                                            </svg>
                                                            <span class="">Add More</span>
                                                        </div>
                                                    </div>
                                                    <!--END Add Branche -->
                                                    @endif

                                                    <!-- Input Branche -->
                                                    <div x-show="openAddNew" x-transition.duration.800ms
                                                        class="rounded flex justify-between">
                                                        <input type="text" wire:model.defer='branch_name_en'
                                                            x-model="element" placeholder="Branch Name"
                                                            class="shadow w-full rounded-md bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors   ">
                                                        <button
                                                            @click="openAddNew = ! openAddNew , openAddButton= true"
                                                            wire:click='addBranch'
                                                            class="ml-2 bg-traivis-500 text-white rounded-md hover:bg-traivis-700 pr-3 pl-3">
                                                            add
                                                        </button>
                                                    </div>
                                                    <!--END Input Branche -->

                                                </div>
                                                <!--END Branches Column-->

                                            </div>
                                        </section>
                                    </div>
                                    <!-- END Branches section-->





                                </div>

                                <!-- Add courses -->
                                <div x-cloak x-show="addCourses" @click.outside="addCourses = false"
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
                                                @if (auth()->user()->can('organization_workforce_delete'))
                                                <!--Delete-->
                                                <button
                                                    class=" group/del group-hover:block cursor-pointer absolute mx-0 px-0 left-0 right-0 w-full bottom-10 text-gray-500 hover:text-traivis-500 z-10"
                                                    x-show="tabs.find(tab => tab.id === 1).active"
                                                    x-data="{ deletable: null }" x-on:dragover.prevent=""
                                                    x-on:drop=""
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
                                                @endif

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
                                                                fill="currentColor" height="512"
                                                                viewBox="0 0 24 24" width="512"
                                                                data-name="Layer 1">
                                                                <path
                                                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                                            </svg>

                                                            Courses
                                                        </h3>
                                                        <button @click="qopen = !qopen" wire:click='setFormToCreate'
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
                                                                    <form wire:submit.prevent='{{ $coursesFormMethod }}'
                                                                        class="flex flex-col justify-center space-y-3">

                                                                        <div class="relative group ">
                                                                            <input wire:model.defer='en_course_name' value="{{ $en_course_name }}"
                                                                                class="w-full text-2xl font-bold h-10  rounded-full mt-1 sm:truncate border-gray-300 focus:border-traivis-400 transition-colors peer"
                                                                                id="Hero"

                                                                                type="text">
                                                                            <label
                                                                                class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center text-2xl font-bold group-focus-within:font-medium peer-valid:font-medium  group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                                                                for="Hero">
                                                                                course name</label>
                                                                        </div>
                                                                        <div class=" mx-auto px-4 py-3 text-red-700">
                                                                            @error('en_course_name')
                                                                                <p>{{ $message }}</p>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="relative group ">
                                                                            <input wire:model.defer='validity'
                                                                                class="  w-full rounded-lg mt-1 sm:truncate border-gray-300 text-white focus:text-black valid:text-black focus:border-traivis-400 transition-colors peer  "

                                                                                type="number">
                                                                            <p
                                                                                class="absolute right-10 top-4 font-bold text-gray-500 text-sm">
                                                                                / Months</p>
                                                                            <label
                                                                                class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                                                                for="textN">
                                                                                validation</label>

                                                                        </div>
                                                                        <div class=" mx-auto px-4 py-3 text-red-700">
                                                                            @error('validity')
                                                                                <p>{{ $message }}</p>
                                                                            @enderror
                                                                        </div>


                                                                        <div
                                                                            class="flex items-center justify-evenly py-3">

                                                                            <div class="flex items-center">
                                                                                <label for="internal">internal</label>
                                                                                <input
                                                                                    wire:model='type'
                                                                                    type="radio" id="internal"
                                                                                    class="ml-3" value="1"
                                                                                    name="type"
                                                                                >
                                                                            </div>

                                                                            <div class="flex items-center">
                                                                                <label for="external"
                                                                                    class="ml-4">external</label>
                                                                                <input wire:model='type'
                                                                                    type="radio" id="external"
                                                                                    class="ml-3" value="2"
                                                                                    name="type">
                                                                            </div>
                                                                        </div>
                                                                        <div class=" mx-auto px-4 py-3 text-red-700">
                                                                            @error('type')
                                                                                <p>{{ $message }}</p>
                                                                            @enderror
                                                                        </div>

                                                                        <button  type="submit"
                                                                            class="mx-auto bg-traivis-500 w-auto px-3 py-1 text-white hover:bg-traivis-700 rounded-full"
                                                                        >
                                                                        {{ ($coursesFormMethod=='updateCourse')?'Edit':'Add' }}
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


                                                            @foreach ($courses as $course )


                                                            <!--items-->
                                                            {{-- @dd($course->id) --}}
                                                            <button
                                                                class="courses px-3 mx-3 flex items-center justify-between relative w-auto text-center border border-gray-300 hover:border-gray-500 focus-within:border-traivis-500 active:border-traivis-500 active:border-2 active:shadow-md bg-white rounded-full transition duration-200    p-1 mb-2 cursor-move h-10"
                                                                :class="{ 'cursor-move': dragging, 'cursor-move': !dragging }"
                                                                :id="`course-{{ $course->id }}`"
                                                                @delete-item.window="

                                                                     if($event.detail.id == `course-{{ $course->id }}`){
                                                                        $wire.deleteCourse({{ $course->id }})
                                                                     }

                                                                     "
                                                                x-on:dragstart.self="
                                                                     dragging = true;
                                                                     event.dataTransfer.clearData();
                                                                     event.dataTransfer.setData('text',JSON.stringify({id:`course-{{ $course->id }}`}) );

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
                                                                                >{{ $course->en_course_name }} </span>
                                                                        </div>
                                                                        <span class="cursor-pointer ml-auto" wire:click='editCourse({{ $course->id }})'
                                                                            @click="
                                                                                  qopen=true

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
                                                                                >{{ $course->validity }}</p>
                                                                            Months
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-row whitespace-nowrap items-center">
                                                                            <span >{{ $course->type }}</span>
                                                                            <span

                                                                                class="px-1">Course</span>
                                                                        </div>


                                                                    </div>
                                                                    <!--END Course tooltip-->

                                                                </div>

                                                            </button>
                                                            @endforeach
                                                            <!--END items-->


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
                                @if (auth()->user()->can('organization_workforce_create'))
                                <div @click="addCourses = !addCourses "
                                    class="fixed group bottom-10 right-10 transition-all ease-in-out duration-500 z-20">

                                    <button
                                        class="items-center flex flex-col text-traivis-500 ring-0 p-2 transition-colors group-hover:text-gray-500 ">
                                        <svg class="h-12 w-12 rounded-lg" fill="currentColor" x="0px"
                                            y="0px" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M300.8,412c0-13,2.2-25.4,6.3-36.9c-16.2,5.7-33.3,8.7-50.6,8.6v0c-27.3,0.1-54.1-7.1-77.8-20.7l-93.4-44.6v57.6c0,46.7,30.4,88,75.1,101.9c31.1,8.9,63.3,13.3,95.6,12.9c23.9,0.3,47.8-2.1,71.2-6.9C310.7,464.4,300.8,439.4,300.8,412z" />
                                                <path
                                                    d="M475.7,433.3H433V476c0,11.8-9.6,21.3-21.3,21.3c-11.8,0-21.3-9.6-21.3-21.3v-42.7h-42.7c-11.8,0-21.3-9.6-21.3-21.3c0-11.8,9.6-21.3,21.3-21.3h42.7V348c0-11.8,9.6-21.3,21.3-21.3c11.8,0,21.3,9.6,21.3,21.3v42.7h42.7c11.8,0,21.3,9.6,21.3,21.3C497,423.7,487.5,433.3,475.7,433.3z" />
                                                <path
                                                    d="M469.3,250.7v66.4c18.4,11.2,33.4,27.7,42.7,47.3V180.9h0c-0.4-28.9-16.2-55.4-41.5-69.3L313.2,36.6c-34.6-20.7-77.7-21-112.7-1L41.5,111.6c-0.6,0.3-1.2,0.6-1.8,1c-12.8,7.3-23.3,18.1-30.3,31.1c-20.6,38.3-6.2,86,32.1,106.6l157.4,74.9c17.4,10.3,37.3,15.8,57.6,15.8c19.3,0.1,38.3-5,55-14.8L469.3,250.7z" />
                                            </g>
                                        </svg>
                                        <span class="font-bold">+ Courses</span>
                                    </button>
                                </div>
                                @endif
                                <!--END courses-->
                            </section>
                            <!--------End Structure tab content-------->
                            @endif
                            @if (auth()->user()->can('organization_workforce_show'))
                            <!-- workforce tab content -->
                            @livewire('organization-stracture.enterprise-workforce')
                            <!--END workforce tab content -->
                            @endif
                            @if (auth()->user()->can('organization_assign_role'))
                            <section class="p-2 w-full" x-show="tabs.find(tab => tab.id === 3).active">
                                @livewire('organization-stracture.enterprise-manger')
                            </section>
                            @endif
                        </main>
                    </div>
                    <!--End main tabs content-->
                </div>
            </div>
        </section>
        <!--End content-->
        <!--END Scripts-->
    </div>
    <!-- Page Content -->
</div>
