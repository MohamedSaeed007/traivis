<div class="w-full" >

  <!-- dash Content -->
    <div class="flex w-full flex-col px-4 sm:px-6 lg:px-8">

        <!--head-->
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">My Instructors</h1>
                <p class="flex flex-row  items-center mt-2 mb-5  text-sm font-semibold">
                    Total
                    <span class=" rounded-full p-3.5 px-1.5 w-fit h-5 flex justify-center items-center mx-2 bg-gray-400  font-bold text-white">
                        {{$allCount}}
                        </span>
                    Instructors
                </p>
            </div>
        </div>
        <!--END header-->



        <!--content-->
        <section class="">
            <div class="container mx-auto">
                <div class="mt-2 mb-4">

                    <main class="" x-cloak
                          x-data="{ tabs: [
                        { id: 1, title: 'workForce', active: true },
                        { id: 2, title: 'Invitations', active: false },
                        ], activeTab: 1 }">

                        <section class="flex flex-wrap justify-center">

                            <!-- Tabs buttons-->
                            <nav class="relative sticky bg-white z-20 top-16 flex justify-evenly w-full overflow-hidden  rounded-t-lg shadow capitalize"
                                 aria-label="Tabs">
                                <template x-for="(tab, ix) in tabs" :key="tab.id">
                                    <a href="#" :class="tab.active ? 'text-gray-500 font-bold' : 'bg-white'"
                                       class="group relative min-w-0 overflow-hidden py-3 px-3 rounded-t-lg focus:z-10 hover:bg-traivis-50"
                                       :aria-current="tab.active ? 'page' : 'undefined'"
                                       @click.prevent="tabs.forEach(tab => tab.active = false); tabs[ix].active = true">

                                        <span x-text="tab.title">
                                        </span>

                                        <span class="absolute inset-x-0 bottom-0 h-1" aria-hidden="true"
                                              :class="tab.active ? 'bg-traivis-500 ' : 'bg-traivis-50 group-hover:bg-traivis-100'">
                                        </span>
                                    </a>
                                </template>
                            </nav>
                            <!-- / Tabs buttons-->


                            <!--Tabs Content-->
                            <div class="flex w-full">

                                <!-- workforce tab-->
                                <section class="p-2 w-full" x-show="tabs.find(tab => tab.id === 1).active">
                                    <div x-data="{qopen:false}" @keydown.window.escape.stop="qopen = false"
                                         @click.outside="qopen = false" class="flex flex-wrap flex-col p-6">


                                        <!-- Employees filters -->
                                        <div x-data="{FInactive:false, FFreelancer:false, FStaff:false}"
                                             class="flex w-full my-5 flex-row justify-center items-center gap-x-2 sm:gap-x-10 gap-y-3 text-sm text-gray-500 font-bold flex-1 flex-wrap">

                                            <button  wire:click="ActiveTab('staff')" class="cursor-pointer flex justify-between items-center px-1 py-1 rounded-full border border-gray-300 hover:bg-cyan-50 hover:text-cyan-500 hover:border-cyan-500"
                                                    :class="FStaff ? 'bg-cyan-50 text-cyan-500 border-cyan-500' : ''">

                                                <span class="flex flex-row items-center">
                                                    <svg class="w-5 h-5 fill-cyan-500" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z"/></svg>
                                                    <p class="px-2">Staff</p>
                                                </span>
                                                <p class="text-base px-2 rounded-full border text-white bg-cyan-500">{{$staffCount}}</p>
                                            </button>

                                            <button  wire:click="ActiveTab('activeFreeLancers')"  class="cursor-pointer flex justify-between items-center px-1 py-1 rounded-full border border-gray-300 hover:bg-pink-50 hover:text-indigo-500 hover:border-indigo-500"
                                                    :class="FFreelancer ? 'bg-pink-50 text-indigo-500 border-indigo-500' : ''">

                                                <span class="flex flex-row items-center">
                                                    <svg class="w-5 h-5 fill-indigo-500" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z"/></svg>
                                                    <p class="px-2"> Freelances</p>
                                                </span>
                                                <p class="text-base px-2 rounded-full border text-white bg-indigo-500">{{$activeFreelancersCount}}</p>
                                            </button>

                                            <button  wire:click="ActiveTab('inActiveFreeLancers')" class="cursor-pointer flex justify-between items-center px-1 py-1 rounded-full border border-gray-300 hover:bg-pink-50 hover:text-indigo-500 hover:border-indigo-500"
                                                    :class="FInactive ? 'bg-pink-50 text-indigo-500 border-indigo-500' : ''">

                                                <span class="flex flex-row items-center">
                                                    <svg class="w-5 h-5 fill-indigo-500" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z"/></svg>
                                                    <p class="px-2">Inactive</p>
                                                </span>
                                                <p class="text-base px-2 rounded-full border text-white bg-indigo-500">{{$inActiveFreelancerCount}}</p>
                                            </button>

                                        </div>

                                        <!--/ Employees filters-->


                                        <!---->
                                        <div @click.outside="stuOpen = false ,addInstruc=false" @keydown.window.escape.stop="stuOpen = false ,addInstruc=false" class="max-w-6xl w-full mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 m-6 mb-32 container gap-x-6 gap-y-4" x-data="{stuOpen:false ,addInstruc:false}">






                                            @forelse($instructors as $instructor)

                                            <!-- single card -->
                                            <div class="bg-white shadow-dashboard rounded-md pt-3 border-t border-b-2 border-indigo-500 group hover:border-indigo-500 transition-colors  ">

                                                <div class="py-2 px-3 flex flex-row justify-between mb-[50px] flex items-center text-xs font-bold group-hover:text-indigo-500 transition-colors  text-gray-400 ">
                                                    <!-- Heroicon name: outline/fire -->
                                                    <span class="rounded-full border px-1 group-hover:border-indigo-500 transition-colors border-indigo-500">@if($instructor->worker_type=="staff") Admin @endif</span>
                                                    <div class=" flex flex-row justify-between items-center ">


                                                <span class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-indigo-500" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z"/></svg>
                                                </span>
                                                        <span class="rounded-full px-1 border border-indigo-500   bg-indigo-500 text-white ml-2">{{$instructor->worker_type}}</span>
                                                    </div>

                                                </div>

                                                <div class="flex flex-col mb-[50px]  justify-center items-center border-b px-4 -mt-7 border-gray-100 ">
                                                    <img class="mb-4 h-20 rounded-full w-20 object-cover" src="https://images.unsplash.com/photo-1532012197267-da84d127e765?crop=entropy&amp;cs=tinysrgb&amp;fm=jpg&amp;ixid=MnwzMzIzMzB8MHwxfHNlYXJjaHw1fHxlZHVjYXRpb258ZW58MHx8fHwxNjYyNTgzNzQ4&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1920" alt=""><div class="min-w-0 flex flex-row flex-1 items-center justify-center ">
                                                        <h1 class="font-bold truncate mr-2 text-gray-500 ">{{$instructor->instructor->business_name}}</h1>
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="my-auto h-5 text-indigo-500  transition-colors" version="1.1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" class=""></path></svg></div>




                                                </div>

                                                <div class="flex bg-gray-50 group-hover:bg-traivis-100 items-center justify-between">

                                                    <div class="w-full md:w-1/2">

                                                        <div class="flex text-center group-hover:text-cyan-500 transition-colors text-gray-500    bg-white">
                                                            <p class="mx-auto mb-1 text-sm flex flex-row items-center">

                                                                <button

                                                                        class="rounded-full bg-white text-black  hover:bg-indigo-500 hover:fill-white p-2  m-2"><?xml version="1.0" encoding="UTF-8"?>
                                                                    <svg aria-hidden="true"  height="30" id="Outline" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M24,16v5a3,3,0,0,1-3,3H16a8,8,0,0,1-6.92-4,10.968,10.968,0,0,0,2.242-.248A5.988,5.988,0,0,0,16,22h5a1,1,0,0,0,1-1V16a5.988,5.988,0,0,0-2.252-4.678A10.968,10.968,0,0,0,20,9.08,8,8,0,0,1,24,16ZM17.977,9.651A9,9,0,0,0,8.349.023,9.418,9.418,0,0,0,0,9.294v5.04C0,16.866,1.507,18,3,18H8.7A9.419,9.419,0,0,0,17.977,9.651Zm-4.027-5.6a7.018,7.018,0,0,1,2.032,5.46A7.364,7.364,0,0,1,8.7,16H3c-.928,0-1-1.275-1-1.666V9.294A7.362,7.362,0,0,1,8.49,2.018Q8.739,2,8.988,2A7.012,7.012,0,0,1,13.95,4.051Z"></path>
                                                                    </svg>
                                                                </button>
                                                        </div>

                                                    </div>
                                                    <div class="w-full md:w-1/2">

                                                        <div class="flex text-center group-hover:text-cyan-500 transition-colors text-gray-500    bg-white">
                                                            <p class="mx-auto mb-1 text-sm flex flex-row items-center">

                                                                <button
                                                                        wire:click='$emit("openModal", "employee-details", {{ json_encode(["instructor"=> $instructor ]) }})'

                                                                        class="rounded-full bg-white text-black  hover:bg-indigo-500 hover:fill-white p-2  m-2"><?xml version="1.0" encoding="UTF-8"?>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><g id="_01_align_center" data-name="01 align center"><path d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z"></path><path d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"></path></g></svg>
                                                                </button>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- single card -->
                                            @empty
                                            No Data
                                            @endforelse


                                            <!-- add new card -->
                                            <div x-data="{instructType:'staff'}">

                                                <!--New Card buttons-->
                                                <div id="add-member" class="fixed bottom-10 right-10 items-center text-center m-auto mx-auto flex justify-center cursor-pointer bg-white shadow-dashboard pt-3 "
                                                     x-data="{
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

                                                    }" x-on:keydown.escape.prevent.stop="close($refs.button)" x-on:focusin.window="! $refs.panel.contains($event.target) &amp;&amp; close()" x-id="['dropdown-button']">


                                                    <!--Corner button-->
                                                    <div class="flex flex-col relative  text-traivis-500 ring-1 ring-white transition-colors hover:text-gray-500   justify-center items-center  px-4  "
                                                         x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')">
                                                        <span class="absolute -top-5 right-2 mx-auto font-bold text-[32px]">+</span>
                                                        <svg fill="currentColor" class="h-12 w-12" viewBox="0 0 24 24" width="512" height="512"><path d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z"></path></svg>
                                                    </div>
                                                    <!--Corner button-->


                                                    <!--Corner button Dropdown-->
                                                    <div class=" relative ">
                                                        <div class="deleteButton mt-1">

                                                            <div x-ref="panel" x-show="open" x-transition.origin.top.left="" x-on:click.outside="close($refs.button)" :id="$id('dropdown-button')" class="absolute bg-gray-50 shadow top-[-104px] left-[-160px]  w-[100px] mt-2 z-20 rounded" id="dropdown-button-1">
                                                            <span wire:click="activePopup('staff')">
                                                                <button  @click="addInstruc=true ,instructType='staff'" class="flex items-center capitalize text-gray-600 font-semibold w-full  p-2  rounded hover:bg-cyan-500 hover:text-white">
                                                                    Staff
                                                                </button>
                                                                </span>

                                                                <button wire:click="activePopup('freelance')" @click="addInstruc=true ,instructType='freelance'" class="flex items-center capitalize  text-gray-600 font-semibold w-full  p-2  rounded hover:bg-indigo-500 hover:text-white">
                                                                    Freelance
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!--/Corner button Dropdown-->

                                                </div>
                                                <!--/New Card buttons-->


                                                <!--New Card Popup-->
                                                <section x-show="addInstruc" class="mt-10"  style="display: none;">

                                                    <div aria-labelledby="modal-title" aria-modal="true" class="fixed z-30 inset-0 overflow-y-auto" role="dialog">
                                                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                                                            <!---over BG---->
                                                            <div @click="addInstruc = false" aria-hidden="true" class=" fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                                                            </div>
                                                            <!-- center-->
                                                            <span aria-hidden="true" class="hidden sm:inline-block sm:align-middle sm:h-screen">​</span>
                                                            <!---END over BG---->


                                                            <!-- popup content-->
                                                            <div class="relative inline-block bg-white rounded-lg p-4 text-left shadow-xl transform transition-all my-8 align-middle w-full sm:w-1/2">

                                                                <!---->




                                                                    <div class="w-full h-full overflow-y-auto">
                                                                        <div class="container p-6 mx-auto rounded-lg bg-white w-full">


                                                                                <div  class=" w-full items-center text-center"  >
                                                                                    <h2 class="text-xl text-left mb-5">
                                                                                       @if($popup=="staff")
                                                                                        Add Staff
                                                                                        @elseif($popup=="freelance")
                                                                                        Invite Freelancer

                                                                                        @endif
                                                                                    </h2>
                                                                                    <div  class="w-full  shadow-sm p-3 ">

                                                                                        <div class="w-full ">
                                                                                            @if($popup=="staff")
                                                                                            <input wire:model="searchStaffInput" wire:keyup="Employeesearch()" type="text"  placeholder="Search by name,email,id.."  class="shadow rounded-full w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-indigo-500 sm:text-sm transition-colors     ">

                                                                                            @else
                                                                                            <input wire:model="searchFreelancerInput" wire:keyup="Employeesearch()" type="text"  placeholder="Search by name,email,id.."  class="shadow rounded-full w-full bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-indigo-500 sm:text-sm transition-colors     ">

                                                                                            @endif


                                                                                        </div>



                                                                                            <div>
                                                                                                <div class="p-2 flex flex-row justify-between items-center">
                                                                                                    <div class="w-1/4">
                                                                                                        or
                                                                                                    </div>

                                                                                                </div>
                                                                                                <div class="flex flex-row flex-wrap">
                                                                                                    <label class="w-full bg-white text-gray-800 text-left" for="">Invite By Email</label>
                                                                                                    <div class="w-full flex flex-row justify-between ">
                                                                                                        @if($popup=="staff")
                                                                                                        <input wire:model="searchStaffEmail" type="text"  placeholder="email" class="shadow rounded w-4/5 bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-indigo-500 sm:text-sm transition-colors     ">
                                                                                                        @else
                                                                                                        <input wire:model="searchFreelanceEmail" type="text"  placeholder="email" class="shadow rounded w-4/5 bg-white text-gray-800 border border-gray-300 py-2 pr-3 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-indigo-500 sm:text-sm transition-colors     ">

                                                                                                        @endif
                                                                                                        <div class="w-1/5">
                                                                                                            <button wire:click="AddNewEmployee()" class=" w-auto p-2 px-4  text-white bg-indigo-500   hover:bg-indigo-700    rounded-full">
                                                                                                                send
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>





                                                                                    </div>

                                                                                    @foreach($searchResult as $result)
                                                                                        <div class="bg-white w-[250px] items-center text-center mx-auto  mt-5 shadow-dashboard rounded-md pt-3 border-t border-b-2 border-indigo-500 group hover:border-indigo-500 transition-colors  ">

                                                                                            <div class="py-2 px-3 flex items-center mb-[50px] justify-end text-xs font-bold group-hover:text-indigo-500 transition-colors  text-gray-400 ">
                                                                                                <!-- Heroicon name: outline/fire -->
                                                                                                <div class=" flex flex-row justify-end items-center ">


                                                                                                    <span class="">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-indigo-500" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z"/></svg>
                                                                                                    </span>
                                                                                                    <span class="rounded-full p-1 bg-indigo-500 text-white ml-2 px-2">
                                                                                                        @if($popup=="staff")
                                                                                                        Staff
                                                                                                        @else
                                                                                                        Freelancer
                                                                                                        @endif
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="flex flex-col mb-[10px]  justify-center items-center border-b px-4 -mt-7 border-gray-100 ">
                                                                                                <img class="mb-4 h-20 rounded-full w-20 object-cover" src="https://images.unsplash.com/photo-1532012197267-da84d127e765?crop=entropy&amp;cs=tinysrgb&amp;fm=jpg&amp;ixid=MnwzMzIzMzB8MHwxfHNlYXJjaHw1fHxlZHVjYXRpb258ZW58MHx8fHwxNjYyNTgzNzQ4&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1920" alt=""><div class="min-w-0 flex flex-row flex-1 items-center justify-center ">
                                                                                                <h1 class="font-bold truncate mr-2 text-gray-500 ">{{$result->business_name}}</h1>
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="my-auto h-5 text-indigo-500  transition-colors" version="1.1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" class=""></path></svg></div>





                                                                                            </div>

                                                                                            <div class="flex bg-gray-50 group-hover:bg-traivis-100 justify-between items-center">

                                                                                                <div class="w-full md:w-1/2">

                                                                                                    <div class="flex text-center group-hover:text-indigo-500 transition-colors text-gray-500   bg-white ">
                                                                                                        <p class="mx-auto mb-1 text-sm flex-row flex items-center">

                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-2"><path d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z"></path></svg><span>420  </span></p>
                                                                                                    </div>

                                                                                                </div>
                                                                                                <div class="md:w-1/2 w-full">

                                                                                                    <div class="flex text-center group-hover:text-indigo-500 transition-colors text-gray-500   bg-white ">
                                                                                                        <p class="mx-auto mb-1 text-sm flex flex-row items-center">

                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512" fill="currentColor" aria-hidden="true" class="h-3 w-3 mr-2"><g><circle cx="256" cy="128" r="128"></circle><path d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z"></path></g></svg><span>20k  </span></p>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                        </div>

                                                                                    @endforeach



                                                                                </div>


                                                                            <!--End employee courses-->


                                                                        </div>
                                                                    </div>


                                                                <!---->

                                                            </div>
                                                            <!--END popup content -->

                                                        </div>
                                                    </div>
                                                </section>
                                                <!--/New Card Popup-->

                                            </div>
                                            <!--/ add new card -->



                                        </div>
                                        <!---->

                                    </div>
                                </section>
                                <!--/ workforce tab-->



                                <!--invitations tab-->
                                <section class="bg-white p-2 w-full" x-show="tabs.find(tab => tab.id === 2).active" x-clock>
                                    <div class="relative inline-block bg-white text-left transition-all my-5 w-full ">
                                            <div class="mx-auto py-6 px-4 max-w-7xl ">



                                                        <!--Start List-->
                                                        <ul role="list" class="grid gap-y-10 lg:grid-cols-2 lg:gap-x-16">
                                                            @forelse($invitations as $invitation)
                                                            <li>
                                                                <div class="flex items-center justify-between space-x-4 ">
                                                                    <div class="flex items-center space-x-4 lg:space-x-6 ">
                                                                        <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                                                        <div class="font-medium text-lg leading-6 space-y-1">
                                                                            <h3>{{$invitation->instructor->business_name}}</h3>
                                                                            <p class="text-gray-400">Sent on {{$invitation->sent_on}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class=" m-2 flex flex-row justify-center items-center  ">


                                                                        <span class="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-indigo-500" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z"></path></svg>
                                                                        </span>
                                                                            <span class="rounded-full p-1 px-2  bg-indigo-500 text-white ml-2">Freelacer</span>

                                                                        </div>
                                                                        <div class=" m-2 p-2 bg-gray-400 text-white rounded-full text-center items-center">{{$invitation->status}}</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            @empty
                                                            <li>No Invitations</li>
                                                            @endforelse
                                                        </ul>
                                                        <!--/ List-->



                                            </div>
                                    </div>
                                </section>
                                <!--/invitations tab-->


                            </div>
                            <!--/Tabs Content-->

                        </section>

                    </main>

                </div>
            </div>
        </section>
        <!--/ content-->


    </div>
    <!-- dash Content -->
</div>
