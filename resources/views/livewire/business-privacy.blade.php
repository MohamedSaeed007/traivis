<div>
    <section class="">
        <div class="container mx-auto">

            <!---->

            <div class="h-full w-full overflow-y-auto">
                <div class="container mx-auto mb-52 w-full bg-white p-2">
                    <section class="text-gray-500">
                        <div class="container mx-auto">

                            <div class="px-1 text-gray-700">

                                <div class="mt-5 rounded-lg border border-gray-200"
                                    x-data="{ open: false }">

                                    <!--Collapse Head-->
                                    <div @click="open = !open"
                                        class="flex cursor-pointer items-center bg-traivis-50 p-4 text-gray-500">

                                        <div class="mr-5">
                                        </div>

                                        <div class="flex-grow font-bold">
                                            Space Details
                                        </div>

                                        <div class="ml-5">
                                            <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                                class="h-5 w-5 rotate-0 rotate-90 transition-transform"
                                                fill="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                </path>
                                            </svg>
                                        </div>

                                    </div>
                                    <!--END Collapse Head-->

                                    <!--Collapse Box-->
                                    <div class="p-0" x-show="open"
                                        x-transition:enter="transition-opacity ease-linear"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:leave="transition-opacity ease-linear"
                                        x-transition:leave-end="opacity-0"
                                        x-transition:leave-start="opacity-100" style="">

                                        <!--collapse content-->
                                        <div class="m-2 flex flex-wrap items-start bg-white p-4">

                                            <!--General Details-->
                                            <div class="w-full p-5 lg:w-1/2 xl:w-1/3">
                                                <li
                                                    class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                                    <!--- label--->
                                                    <p
                                                        class="block flex items-center text-base font-bold">
                                                        <svg class="mr-3 h-5 w-5" fill="currentColor"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M12,24A12,12,0,1,0,0,12,12.013,12.013,0,0,0,12,24ZM12,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12,5Zm-1,5h1a2,2,0,0,1,2,2v6a1,1,0,0,1-2,0V12H11a1,1,0,0,1,0-2Z">
                                                            </path>
                                                        </svg>
                                                        General Details
                                                    </p>
                                                    <!--END  label-->

                                                    <!--- Content--->
                                                    <div class="">

                                                        <!--form-->
                                                        <form
                                                            class="mt-5 block flex flex-col items-center justify-between gap-y-3">

                                                            <input
                                                                wire:model.lazy="businessModel.business_name"
                                                                placeholder="Space Name"
                                                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 pr-3 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                type="text" />
                                                                @error('businessModel.business_name')
                                                                <span class="bg-red-100 text-red-800">{{ $message }}</span>
                                                                @enderror
                                                          
                                                                <div style="{width: 100%;}" class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">
                                                                    <x-input.select2 wire:model="businessCategories" model="businessCategories" >
                                                                        @foreach ($categories as $category)
                                                                            <option wire:key='cat.{{$category->id  }}'
                                                                                value="{{ $category->id }}">
                                                                                {{ $category->category_name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </x-input.select2>
                                                                </div>
                                                                <div style="{width: 100%;}" class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">
                                                                    <x-input.select2 wire:model="businessIndustries" model="businessIndustries">
                                                                        @foreach ($industries as $industry)
                                                                            <option wire:key='ind.{{$industry->id  }}'
                                                                                value="{{ $industry->id }}">
                                                                                {{ $industry->en_name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </x-input.select2>
                                                                </div>
                                                                
                     

                                                            <div class="flex w-full flex-row items-center justify-between gap-x-6">
                                                                <input 
                                                                wire:model="businessModel.business_email"
                                                                placeholder="Email Address"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">

                                                                <x-tooltip-arrow direction="down">
                                                                    <div x-data="{ enabled: @entangle('profileInformation.show_email') }"
                                                                        class="flex items-center gap-x-3">
                                                                        <label for="Email" @click="enabled = !enabled">
                                                                            <svg :class="enabled ? 'text-traivis-500' :
                                                                                'text-gray-300'"
                                                                                class="h-5 w-5"
                                                                                fill="currentColor"
                                                                                x="0px"
                                                                                y="0px"
                                                                                viewBox="0 0 512.19 512.19"
                                                                                style="enable-background:new 0 0 512.19 512.19;"
                                                                                xml:space="preserve">
                                                                                <g>
                                                                                    <path
                                                                                        d="M496.543,200.771c-19.259-31.537-43.552-59.707-71.915-83.392l59.733-59.733c8.185-8.475,7.95-21.98-0.525-30.165   c-8.267-7.985-21.374-7.985-29.641,0l-64.96,65.045c-40.269-23.918-86.306-36.385-133.141-36.053   c-132.075,0-207.339,90.411-240.448,144.299c-20.862,33.743-20.862,76.379,0,110.123c19.259,31.537,43.552,59.707,71.915,83.392   l-59.733,59.733c-8.475,8.185-8.71,21.691-0.525,30.165c8.185,8.475,21.691,8.71,30.165,0.525c0.178-0.172,0.353-0.347,0.525-0.525   l65.109-65.109c40.219,23.915,86.201,36.402,132.992,36.117c132.075,0,207.339-90.411,240.448-144.299   C517.405,277.151,517.405,234.515,496.543,200.771z M128.095,255.833c-0.121-70.575,56.992-127.885,127.567-128.006   c26.703-0.046,52.75,8.275,74.481,23.793l-30.976,30.976c-13.004-7.842-27.887-12.022-43.072-12.096   c-47.128,0-85.333,38.205-85.333,85.333c0.074,15.185,4.254,30.068,12.096,43.072l-30.976,30.976   C136.414,308.288,128.096,282.394,128.095,255.833z M256.095,383.833c-26.561-0.001-52.455-8.319-74.048-23.787l30.976-30.976   c13.004,7.842,27.887,12.022,43.072,12.096c47.128,0,85.333-38.205,85.333-85.333c-0.074-15.185-4.254-30.068-12.096-43.072   l30.976-30.976c41.013,57.434,27.702,137.242-29.732,178.255C308.845,375.558,282.798,383.879,256.095,383.833z">
                                                                                    </path>
                                                                                </g>
                                                                            </svg>
                                                                        </label>
                                                                        {{--  <button @click="enabled = !enabled"
                                                                            id="Email" type="button"
                                                                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent  transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                                            :class="enabled ?'bg-traivis-400':'bg-gray-200'"
                                                                            role="switch"
                                                                            aria-checked="false">
                                                                            <span class="sr-only">Use
                                                                                setting</span>
                                                                            <span aria-hidden="true"
                                                                                class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                                                :class="enabled ? 'translate-x-5' : ''"></span>
                                                                        </button> --}}
                                                                        <x-slot name="text">
                                                                            Hide to Public
                                                                        </x-slot>
                                                                    </div>
                                                                </x-tooltip-arrow>
                                                            </div>

                                                            <div class="flex w-full flex-row items-center justify-between gap-x-6">
                                                                <input
                                                                    wire:model="businessModel.business_phone_one"
                                                                    placeholder="Phone Number"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">

                                                                <x-tooltip-arrow direction="down">
                                                                    <div x-data="{ enabled: @entangle('profileInformation.show_phone') }"
                                                                        class="group relative flex items-center gap-x-3">
                                                                        <label for="phone" @click="enabled = !enabled">
                                                                            <svg :class="enabled ? 'text-traivis-500' :
                                                                                'text-gray-300'"
                                                                                class="h-5 w-5"
                                                                                fill="currentColor"
                                                                                x="0px"
                                                                                y="0px"
                                                                                viewBox="0 0 512.19 512.19"
                                                                                style="enable-background:new 0 0 512.19 512.19;"
                                                                                xml:space="preserve">
                                                                                <g>
                                                                                    <path
                                                                                        d="M496.543,200.771c-19.259-31.537-43.552-59.707-71.915-83.392l59.733-59.733c8.185-8.475,7.95-21.98-0.525-30.165   c-8.267-7.985-21.374-7.985-29.641,0l-64.96,65.045c-40.269-23.918-86.306-36.385-133.141-36.053   c-132.075,0-207.339,90.411-240.448,144.299c-20.862,33.743-20.862,76.379,0,110.123c19.259,31.537,43.552,59.707,71.915,83.392   l-59.733,59.733c-8.475,8.185-8.71,21.691-0.525,30.165c8.185,8.475,21.691,8.71,30.165,0.525c0.178-0.172,0.353-0.347,0.525-0.525   l65.109-65.109c40.219,23.915,86.201,36.402,132.992,36.117c132.075,0,207.339-90.411,240.448-144.299   C517.405,277.151,517.405,234.515,496.543,200.771z M128.095,255.833c-0.121-70.575,56.992-127.885,127.567-128.006   c26.703-0.046,52.75,8.275,74.481,23.793l-30.976,30.976c-13.004-7.842-27.887-12.022-43.072-12.096   c-47.128,0-85.333,38.205-85.333,85.333c0.074,15.185,4.254,30.068,12.096,43.072l-30.976,30.976   C136.414,308.288,128.096,282.394,128.095,255.833z M256.095,383.833c-26.561-0.001-52.455-8.319-74.048-23.787l30.976-30.976   c13.004,7.842,27.887,12.022,43.072,12.096c47.128,0,85.333-38.205,85.333-85.333c-0.074-15.185-4.254-30.068-12.096-43.072   l30.976-30.976c41.013,57.434,27.702,137.242-29.732,178.255C308.845,375.558,282.798,383.879,256.095,383.833z">
                                                                                    </path>
                                                                                </g>
                                                                            </svg>
                                                                        </label>
                                                                        {{--  <button @click="enabled = !enabled"
                                                                            id="phone" type="button"
                                                                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent  transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                                            :class="enabled ? 'bg-traivis-400':'bg-gray-200'"
                                                                            role="switch"
                                                                            aria-checked="false">
                                                                            <span class="sr-only">Use
                                                                                setting</span>
                                                                            <span aria-hidden="true"
                                                                                class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                                                :class="enabled ?'translate-x-5':''"></span>
                                                                        </button>  --}}
                                                                        <x-slot name="text">
                                                                            Hide to Public
                                                                        </x-slot>
                                                                    </div>
                                                                </x-tooltip-arrow>


                                                            </div>

                                                            <textarea wire:model.lazy="businessModel.description" placeholder="About ( Brief Description About Your Space)"
                                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-traivis-500 focus:ring-traivis-500 sm:text-sm"
                                                                id="about" name="about" rows="3"></textarea>
                                                            @error('businessModel.description')
                                                            <span class="bg-red-100 text-red-800">{{ $message }}</span>
                                                            @enderror
                                                        </form>
                                                        <!--END form-->

                                                    </div>
                                                    <!-- Content-->

                                                </li>
                                            </div>
                                            <!--END General Details-->

                                            <!-- Georgraphical Infpormation-->
                                            <div class="w-full p-5 lg:w-1/2 xl:w-1/3">
                                                <li
                                                    class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                                    <!--- label--->
                                                    <p
                                                        class="block flex items-center text-base font-bold">
                                                        <svg class="mr-3 h-5 w-5" fill="currentColor"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M12,24A12,12,0,1,0,0,12,12.013,12.013,0,0,0,12,24ZM12,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12,5Zm-1,5h1a2,2,0,0,1,2,2v6a1,1,0,0,1-2,0V12H11a1,1,0,0,1,0-2Z">
                                                            </path>
                                                        </svg>
                                                        Georgraphical Infpormation
                                                    </p>
                                                    <!--END  label-->

                                                    <!--- Content--->
                                                    <div class="">

                                                        <!--form-->
                                                        <form
                                                            class="mt-5 block flex flex-col items-center justify-between gap-y-3">
                                                            <select
                                                                wire:model="businessModel.country_id"
                                                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->id }}">
                                                                        {{ $country->name }}
                                                                    </option> 
                                                                    @endforeach
                                                                </select>
                                                            {{--  <input placeholder="Address"
                                                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 pr-3 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                type="text">  --}}

                                                            <input 
                                                            wire:model="businessModel.city"
                                                            placeholder="City"
                                                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                type="text">

                                                            {{--  <input placeholder="Postcode"
                                                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                type="text">  --}}
                                                            
                                                                {{--  <input placeholder="Country" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm" type="text">  --}}

                                                        </form>
                                                        <!--END form-->

                                                    </div>
                                                    <!-- Content-->

                                                </li>
                                            </div>
                                            <!--END  Georgraphical Infpormation-->
                                            @if ($businessModel->business_type == 'instructor')
                                                
                                            
                                            <!--Professional Information -->
                                            <div class="w-full p-5 lg:w-1/2 xl:w-1/3">
                                                <li
                                                    class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                                    <!--- label--->
                                                    <p
                                                        class="block flex items-center text-base font-bold">
                                                        <svg class="mr-3 h-5 w-5" fill="currentColor"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M12,24A12,12,0,1,0,0,12,12.013,12.013,0,0,0,12,24ZM12,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12,5Zm-1,5h1a2,2,0,0,1,2,2v6a1,1,0,0,1-2,0V12H11a1,1,0,0,1,0-2Z">
                                                            </path>
                                                        </svg>
                                                        Professional Information
                                                    </p>
                                                    <!--END  label-->

                                                    <!--- Content--->
                                                    <div class="">

                                                        <!--form-->
                                                        <form
                                                            class="mt-5 block flex flex-col items-center justify-between gap-y-3">

                                                            {{--  <div
                                                                class="mt-1 block flex h-[38px] w-full cursor-pointer items-center rounded-md border border-gray-300 py-2 pl-3 shadow-sm hover:bg-slate-50 focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm">
                                                                <input id="sType" type="checkbox" wire:model.lazy="profileInformation.is_freelancer"
                                                                    class="h-4 w-4 cursor-pointer rounded border-gray-300 bg-gray-100 text-traivis-500 focus:ring-1 focus:ring-traivis-500 focus:ring-offset-0">
                                                                <label for="sType"
                                                                    class="w-full cursor-pointer px-2 ">Am
                                                                    I a Freelancer Instructor ?</label>
                                                            </div>  --}}

                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">
                                                                <select wire:model.lazy="profileInformation.industry"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">
                                                                    <option hidden=""
                                                                        selected=""
                                                                        wfd-invisible="true"> Industry
                                                                    </option>
                                                                    @forelse ($industries as $industry)
                                                                    <option>{{ $industry->en_name }}</option>
                                                                    @empty
                                                                        
                                                                    @endforelse
                                                                </select>
                                                                
                                                                <input wire:model.lazy="profileInformation.teaching_years"
                                                                    placeholder="Teaching Years Experience"
                                                                    class="mt-1 block h-[38px] w-full rounded-md border border-gray-300 px-3 py-0 pr-0 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="number" max="99">
                                                            </div>

                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">
                                                                <input wire:model.lazy="profileInformation.preferred_languages"
                                                                    placeholder="Preferred Teaching Languages"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">

                                                                <input placeholder="Preferred Subjects" wire:model.lazy="profileInformation.preferred_subjects"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">
                                                            </div>

                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">


                                                                <!--Delivery Mode-->
                                                                <div class="my-8">
                    
                                                                    <div class="relative inline-block w-full"
                                                                        x-data="{
                                                                            selected: [],
                                                                            show: false,
                                                                            open() {
                                                                                this.show = true
                                                                            },
                                                                            close() {
                                                                                this.show = false
                                                                            },
                                                                            isOpen() {
                                                                                return this.show === true
                                                                            },
                                                                            add(id) {
                                                                                console.log(id);
                                                                                let element = document.getElementById(id)
                                                                                console.error(element)
                                                                                console.error(element.getAttribute('data-text'))
                                                                                if (element.checked) {
                                                                                    if (element.type === 'radio') {
                                                                                        this.selected = [];
                                                                                    }
                                                                                    this.selected.push(element.getAttribute('data-text'));
                                                                                    console.log(this.selected);
                                                                                } else {
                                                                                    console.log(this.selected.indexOf(element.getAttribute('data-text')));
                                                                                    this.selected.splice(this.selected.indexOf(element.getAttribute('data-text'), 1));
                                                                                }
                                                                            }
                                                                        }">
                                                                        <div class="relative flex flex-col items-center">
                    
                                                                            <!--input area-->
                                                                            <div class="group w-full" x-on:click="open">
                    
                                                                                <div
                                                                                    class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-4 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                    
                                                                                    <div
                                                                                        class="flex flex-auto flex-row overflow-x-visible truncate">
                    
                                                                                        <!--input-->
                                                                                        <div class="group relative flex-1">
                                                                                            <input
                                                                                                class="h-full w-full cursor-pointer appearance-none border-0 bg-transparent p-1 px-2 text-gray-800 outline-none"
                                                                                                placeholder="Delivery Mode ">
                                                                                            <div :class="selected.length > 0 ?
                                                                                                'py-2 w-full' : ''"
                                                                                                class="absolute left-0 top-0 bg-white">
                                                                                                <template
                                                                                                    x-for="(option,index) in selected">
                                                                                                    <span
                                                                                                        class="m-1 rounded-full bg-gray-200 p-1 px-2"
                                                                                                        x-text="option"></span>
                                                                                                </template>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!---->
                                                                                    </div>
                    
                                                                                    <!--dropdown button-->
                                                                                    <div
                                                                                        class="svelte-1l8159u flex w-8 items-center justify-end border-l border-gray-200 py-1 pl-2 pr-1 text-gray-300">
                                                                                        <button
                                                                                            class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                                                            type="button"
                                                                                            x-on:click="open"
                                                                                            x-show="isOpen() === true"
                                                                                            style="display: none;">
                                                                                            <svg class="h-4 w-4 fill-current"
                                                                                                version="1.1"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path
                                                                                                    d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </button>
                    
                                                                                        <button @click="close"
                                                                                            class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                                                            type="button"
                                                                                            x-show="isOpen() === false">
                                                                                            <svg class="h-4 w-4 fill-current"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path
                                                                                                    d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <!---->
                    
                                                                                </div>
                                                                            </div>
                                                                            <!--select menu-->
                                                                            <div class="w-full px-4">
                                                                                <div class="max-h-select absolute left-0 top-12 z-40 w-full rounded-b-lg border border-t-0 border-gray-300 bg-white shadow-md"
                                                                                    x-on:click.away="close"
                                                                                    x-show.transition.origin.top="isOpen()"
                                                                                    style="display: none;">
                                                                                    <div
                                                                                        class="flex h-fit w-full flex-col overflow-y-auto">
                                                                                        <ul class="space-y-3 p-3 text-sm text-gray-700 "
                                                                                            aria-labelledby="dropdownCheckboxButton">
                                                                                            @foreach (config('enums.delivery_modes') as $mode)
                                                                                                <li>
                                                                                                    <div
                                                                                                        class="flex items-center">
                                                                                                        <input
                                                                                                            id="checkbox-item-mode-{{ $mode['code'] }}"
                                                                                                            @click="add('checkbox-item-mode-{{ $mode['code'] }}')"
                                                                                                            data-text="{{ $mode['name'] }}"
                                                                                                            wire:model="profileInformation.preferred_teaching_mode"
                                                                                                            name="delivery"
                                                                                                            type="radio"
                                                                                                            value="{{ $mode['code'] }}"
                                                                                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                                                                                        <label
                                                                                                            for="checkbox-item-7"
                                                                                                            class="ml-2 text-sm font-medium text-gray-900 ">{{ $mode['name'] }}</label>
                                                                                                    </div>
                                                                                                </li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!---->
                                                                            @error('profileInformation.preferred_teaching_mode')
                                                                                <span
                                                                                    class="text-red-500">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/Delivery Mode-->

                                                            </div>
                                                                <div
                                                                class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">

                                                                <input wire:model.lazy="profileInformation.teaching_hourly_rate"
                                                                    placeholder="Teaching Hourly Rate "
                                                                    class="mt-1 block h-[38px] w-full rounded-md border border-gray-300 px-3 py-0 pr-0 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="number" max="99">
                                                            </div>

                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">
                                                                <input placeholder="Personal Website" wire:model.lazy="profileInformation.personal_website"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">

                                                                <input placeholder="Asscoited link" wire:model.lazy="profileInformation.asscoited_link"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">
                                                            </div>

                                                            <!--<input placeholder="Teaching Hourly Rate  " class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm" type="text">-->

                                                            <input wire:model.lazy="profileInformation.accerditions"
                                                                placeholder="Accerditions and memberships"
                                                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                type="text">

                                                            <div class="flex justify-end">
                                                                <label
                                                                    class="block inline-grid items-center justify-center text-sm font-medium text-gray-500">Add
                                                                    More</label>
                                                                <button
                                                                    class="float-right flex items-center justify-center p-2 text-gray-500 group-hover:text-traivis-500">
                                                                    <span class="sr-only">Add
                                                                        More</span>
                                                                    <svg class="float-right flex h-5 w-5 transform text-gray-500 hover:rotate-45 hover:text-traivis-500"
                                                                        fill="currentColor"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>

                                                        </form>
                                                        <!--END form-->

                                                    </div>
                                                    <!-- Content-->

                                                </li>
                                            </div>
                                            <!--END Professional Information -->

                                            <!--Educational Information -->
                                            <div class="w-full p-5 lg:w-1/2 xl:w-1/3">
                                                <li
                                                    class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                                    <!--- label--->
                                                    <div class="flex items-center justify-between">
                                                        <p
                                                            class="block flex items-center text-base font-bold">
                                                            <svg class="mr-3 h-5 w-5"
                                                                fill="currentColor"
                                                                viewBox="0 0 24 24" width="512"
                                                                height="512">
                                                                <path
                                                                    d="M12,24A12,12,0,1,0,0,12,12.013,12.013,0,0,0,12,24ZM12,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12,5Zm-1,5h1a2,2,0,0,1,2,2v6a1,1,0,0,1-2,0V12H11a1,1,0,0,1,0-2Z">
                                                                </path>
                                                            </svg>
                                                            Educational Information 
                                                        </p>

                                                        <div class="group relative flex">
                                                            <p class="absolute bottom-1/2 right-20 mx-auto hidden w-fit translate-y-1/2 whitespace-nowrap rounded-md bg-black px-3 py-1 text-sm text-white group-hover:block"
                                                                wfd-invisible="true">
                                                                Import It from My Personal Profile
                                                            </p>
                                                            <button type="button" wire:click="importEducational"
                                                                class="inline-flex h-6 items-center justify-center rounded-full border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-500 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
                                                                Import
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!--END  label-->

                                                    <!--- Content--->
                                                    <div class="">

                                                        <!--form-->
                                                        <form
                                                            class="mt-5 block flex flex-col items-center justify-between gap-y-3">

                                                            <!--<div class="inline-block flex items-center justify-between gap-y-3 sm:flex-row sm:space-x-4 sm:space-y-0">
                                                                <span class="text-sm font-medium">Import It from My Personal Profile </span>
            
                                                                <button type="button" class="inline-flex h-6 items-center justify-center rounded-full border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-500 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
                                                                    Import
                                                                </button>
                                                            </div>-->

                                                            @forelse ($education as $index => $educate)
                                                            <!--field-->
                                                            <div style="width: 100%;" class="col-span-12 sm:col-span-6">
                                                                <label class="block text-base font-medium text-gray-500 transition-colors "  contenteditable="false"></label>
                                                                <select wire:model.lazy="education.{{ $index }}.level" class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                                                                    <option value="">please select</option>
                                                                    @foreach (config('select-options.Levels_of_education') as $level)
                                                                        <option>{{  $level }}</option>
                                                                    @endforeach
                                                                </select>
                                                                {{--  <input wire:model.lazy="education.{{ $index }}.level " class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"  type="text"  placeholder="Highest Level of Education">  --}}
                                                                @error("education.$index.level")
                                                                <p class="mt-2 text-sm text-red-600 ">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                
                                                            <!--field-->
                                                            
                                                            <div style="width: 100%;" class="col-span-12 sm:col-span-6">
                                                                <label  class="block text-base font-medium text-gray-500 " contenteditable="false"></label>
                                                                <select  wire:model.lazy="education.{{ $index }}.major" class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                                                                    <option value="">please select</option>
                                                                    @foreach (config('select-options.EDUCATIONAL_MAJORS') as $key=> $majors)
                                                                    <optgroup label="{{ $key }}">
                                                                        @foreach ($majors as $major)
                                                                            <option>{{ $major }}</option>
                                                                        @endforeach
                                                                    </optgroup>
                                                                    @endforeach
                                                                </select>
                                                                {{--  <input wire:model.lazy="education.{{ $index }}.major"   class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm" placeholder="Education major (select more than one if required)">  --}}
                                                                @error("education.$index.major")
                                                                <p class="mt-2 text-sm text-red-600 ">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                            <div class="flex space-x-2">
                                                                <!--field-->
                                                                <div style="width: 100%" class="col-span-12 sm:col-span-6">
                                                                    <label class="block text-base font-medium text-gray-500 "  contenteditable="false"></label>
                                                    
                                                                    <input wire:model.lazy="education.{{ $index }}.name" class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm" type="text" placeholder="School/ University Name (Required)">
                                                                    @error("education.$index.name")
                                                                    <p class="mt-2 text-sm text-red-600 ">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                                <div style="width: 100%" class="col-span-12 sm:col-span-6">
                                                                    <label class="block text-base font-medium text-gray-500 "  contenteditable="false"></label>
                                                    


                                                                    <select
                                                                    wire:model.lazy="education.{{ $index }}.location"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    @foreach ($countries as $country)
                                                                        <option value="{{ $country->id }}">
                                                                            {{ $country->name }}
                                                                        </option> 
                                                                        @endforeach
                                                                    </select>

                                                                    
                                                                    @error("education.$index.location")
                                                                    <p class="mt-2 text-sm text-red-600 ">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            
                                                            <br class="col-span-12" />
                                                            <hr class="col-span-12" />
                                                            @empty
                                                                
                                                            @endforelse
                                                            @if($neweducation)
                                                            <div style="width: 100%" class="col-span-12 sm:col-span-6">
                                                                <label class="block text-base font-medium text-gray-500 transition-colors "  contenteditable="false"></label>
                                                                <select wire:model.lazy="neweducation.level" class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                                                                    <option value="">please select</option>
                                                                    @foreach (config('select-options.Levels_of_education') as $level)
                                                                        <option>{{  $level }}</option>
                                                                    @endforeach
                                                                </select>
                                                                {{--  <input wire:model.lazy="neweducation.level" class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm"  type="text"  placeholder="Highest Level of Education">  --}}
                                                                @error("neweducation.level")
                                                                <p class="mt-2 text-sm text-red-600 ">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                
                                                            <!--field-->
                                                            <div style="width: 100%" class="col-span-12 sm:col-span-6">
                                                                <label  class="block text-base font-medium text-gray-500 " contenteditable="false"></label>
                                                                <select  wire:model.lazy="neweducation.major" class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 px-3 shadow-sm focus:outline-none sm:text-sm">
                                                                    <option>please select</option>
                                                                    @foreach (config('select-options.EDUCATIONAL_MAJORS') as $key=> $majors)
                                                                    <optgroup>{{ $key }}</optgroup>
                                                                        @foreach ($majors as $major)
                                                                            <option>{{ $major }}</option>
                                                                        @endforeach
                                                                    @endforeach
                                                                </select>
                                                                {{--  <input wire:model.lazy="neweducation.major"   class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm" placeholder="Education major (select more than one if required)">  --}}
                                                                @error("neweducation.major")
                                                                <p class="mt-2 text-sm text-red-600 ">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                
                                                            <!--field-->
                                                            <div style="width: 100%" class="col-span-12 sm:col-span-6">
                                                                <label class="block text-base font-medium text-gray-500 "  contenteditable="false"></label>
                                                
                                                                <input wire:model.lazy="neweducation.name" class="focus:ring-light-traivis-500 focus:border-light-traivis-500 mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:outline-none sm:text-sm" type="text" placeholder="School/ University Name (Required)">
                                                                @error("neweducation.name")
                                                                <p class="mt-2 text-sm text-red-600 ">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                            <div style="width: 100%" class="col-span-12 sm:col-span-6">
                                                                <label class="block text-base font-medium text-gray-500 "  contenteditable="false"></label>
                                                                <select
                                                                    wire:model.lazy="neweducation.location"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    @foreach ($countries as $country)
                                                                        <option value="{{ $country->id }}">
                                                                            {{ $country->name }}
                                                                        </option> 
                                                                        @endforeach
                                                                    </select>
                                                                @error("neweducation.location")
                                                                <p class="mt-2 text-sm text-red-600 ">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                            @else
                                                            <!--field-->
                                                            <div class="col-span-12 sm:col-span-6">
                                                                
                                                                <!--add more-->
                                                                <div class="group float-right flex grid-cols-2 items-center justify-center font-medium text-gray-500 transition-colors hover:text-traivis-500 ">
                                                
                                                                    <label class="text-base">Add more</label>
                                                
                                                                    <button class="inline-grid p-2" aria-expanded="false" type="button" wire:click='AddMoreEducation'>
                                                                        <span class="sr-only">Add more</span>
                                                                        <!-- Icon when menu is closed.-->
                                                                        <!-- Heroicon name: menu Menu open: "hidden", Menu closed: "block" -->
                                                                        <svg id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" fill="currentColor" class="h-6 w-6 group-hover:rotate-45">
                                                                            <path d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <!--add more-->
                                                
                                                            </div>
                                                            @endif

                                                            

                                                        </form>
                                                        <!--END form-->

                                                    </div>
                                                    <!-- Content-->

                                                </li>
                                            </div>
                                            <!--END Educational Information -->

                                            <!--Work Experience -->
                                            <div class="w-full p-5 lg:w-1/2 xl:w-1/3">
                                                <li
                                                    class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                                    <!--- label--->
                                                    <div class="flex items-center justify-between">
                                                        <p
                                                            class="block flex items-center text-base font-bold">
                                                            <svg class="mr-3 h-5 w-5"
                                                                fill="currentColor"
                                                                viewBox="0 0 24 24" width="512"
                                                                height="512">
                                                                <path
                                                                    d="M12,24A12,12,0,1,0,0,12,12.013,12.013,0,0,0,12,24ZM12,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12,5Zm-1,5h1a2,2,0,0,1,2,2v6a1,1,0,0,1-2,0V12H11a1,1,0,0,1,0-2Z">
                                                                </path>
                                                            </svg>
                                                            Work Experience
                                                        </p>

                                                        <div class="group relative flex">
                                                            <p class="absolute bottom-1/2 right-20 mx-auto hidden w-fit translate-y-1/2 whitespace-nowrap rounded-md bg-black px-3 py-1 text-sm text-white group-hover:block"
                                                                wfd-invisible="true">
                                                                Import It from My Personal Profile
                                                            </p>
                                                            <button type="button" wire:click="importWork"
                                                                class="inline-flex h-6 items-center justify-center rounded-full border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-500 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
                                                                Import
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!--END  label-->

                                                    <!--- Content--->
                                                    <div class="">

                                                        <!--form-->
                                                        <form 
                                                            class="mt-5 block flex flex-col items-center justify-between gap-y-3">
                                                            @forelse ($workExperiences as $index => $workExperience)
                                                            @if ($index < 2)
                                                            <p class="font-bold text-slate-400">{{ $index == 0 ? 'Current' : 'Previous' }}
                                                                Job </p>
                                                                @endif
                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">

                                                                    <select wire:model.lazy="workExperiences.{{ $index }}.employment_status" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 pr-3 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm">
                                                                        <option value="">Please Select</option>
                                                                        @foreach (config('select-options.Employment_status') as $option )
                                                                            <option>{{ $option }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <select wire:model.lazy="workExperiences.{{ $index }}.industry"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">
                                                                    <option hidden=""
                                                                        selected=""
                                                                        wfd-invisible="true"> Industry
                                                                    </option>
                                                                    @forelse ($industries as $industry)
                                                                    <option>{{ $industry->en_name }}</option>
                                                                    @empty
                                                                        
                                                                    @endforelse
                                                                </select>
                                                            </div>

                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">
                                                                <input placeholder="Position" wire:model.lazy="workExperiences.{{ $index }}.position"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">

                                                                <input placeholder="Experiance Level" wire:model.lazy="workExperiences.{{ $index }}.experience"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">
                                                            </div>

                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">
                                                                <input placeholder="Employer Name *" wire:model.lazy="workExperiences.{{ $index }}.employer_name"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">
                                                                    <select
                                                                    wire:model.lazy="workExperiences.{{ $index }}.location"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    @foreach ($countries as $country)
                                                                        <option value="{{ $country->id }}">
                                                                            {{ $country->name }}
                                                                        </option> 
                                                                        @endforeach
                                                                    </select>
                                                            </div>

                                                            <input wire:model.lazy="workExperiences.{{ $index }}.url"
                                                                placeholder="Organisation website URL"
                                                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                type="text">
                                                                <hr/>
                                                            @empty
                                                            @endforelse
                                                            @if($newWorkExperiences)
                                                            <div
                                                            class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">

                                                                <select wire:model.lazy="newWorkExperiences.employment_status" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 pr-3 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm">
                                                                    <option value="">Please Select</option>
                                                                    @foreach (config('select-options.Employment_status') as $option )
                                                                        <option>{{ $option }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <select wire:model.lazy="newWorkExperiences.industry"
                                                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                    type="text">
                                                                    <option hidden=""
                                                                        selected=""
                                                                        wfd-invisible="true"> Industry
                                                                    </option>
                                                                    @forelse ($industries as $industry)
                                                                    <option>{{ $industry->en_name }}</option>
                                                                    @empty
                                                                        
                                                                    @endforelse
                                                                </select>
                                                        </div>

                                                        <div
                                                            class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">
                                                            <input placeholder="Position" wire:model.lazy="newWorkExperiences.position"
                                                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                type="text">

                                                            <input placeholder="Experiance Level" wire:model.lazy="newWorkExperiences.experience"
                                                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                type="text">
                                                        </div>

                                                        <div
                                                            class="block flex w-full flex-col items-center justify-between gap-3 md:flex-row">
                                                            <input placeholder="Employer Name *" wire:model.lazy="newWorkExperiences.employer_name"
                                                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                type="text">
                                                                <select
                                                                wire:model.lazy="newWorkExperiences.location"
                                                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->id }}">
                                                                        {{ $country->name }}
                                                                    </option> 
                                                                    @endforeach
                                                                </select>
                                                        </div>

                                                        <input wire:model.lazy="newWorkExperiences.url"
                                                            placeholder="Organisation website URL"
                                                            class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                            type="text">

                                                            @else
                                                            <div class="flex justify-end">
                                                                <label 
                                                                    class="block inline-grid items-center justify-center text-sm font-medium text-gray-500">Add
                                                                    More</label>
                                                                <button wire:click="AddMorenewWorkExperiences" type="button"
                                                                    class="float-right flex items-center justify-center p-2 text-gray-500 group-hover:text-traivis-500">
                                                                    <span class="sr-only">Add
                                                                        More</span>
                                                                    <svg class="float-right flex h-5 w-5 transform text-gray-500 hover:rotate-45 hover:text-traivis-500"
                                                                        fill="currentColor"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm1-11h4v2h-4v4h-2v-4h-4v-2h4v-4h2z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            @endif

                                                        </form>
                                                        <!--END form-->

                                                    </div>
                                                    <!-- Content-->

                                                </li>
                                            </div>
                                            <!--END Work Experience -->
                                            @endif
                                            <!--Social Media-->
                                            <div class="w-full p-5 lg:w-1/2 xl:w-1/3">
                                                <li
                                                    class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                                    <!--- label--->
                                                    <p
                                                        class="block flex items-center text-base font-bold">
                                                        <svg class="mr-3 h-5 w-5" fill="currentColor"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M12,24A12,12,0,1,0,0,12,12.013,12.013,0,0,0,12,24ZM12,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12,5Zm-1,5h1a2,2,0,0,1,2,2v6a1,1,0,0,1-2,0V12H11a1,1,0,0,1,0-2Z">
                                                            </path>
                                                        </svg>
                                                        Social Media
                                                    </p>
                                                    <!--END  label-->

                                                    <!--- Content--->
                                                    <div class="">

                                                        <!--form-->
                                                        <form
                                                            class="mt-6 block flex flex-col items-center justify-between gap-y-4">

                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-x-3 gap-y-4 md:flex-row">
                                                                <div class="group relative w-full">
                                                                    <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                                        fill="currentColor"
                                                                        x="0px" y="0px"
                                                                        viewBox="0 0 24 24"
                                                                        style="enable-background:new 0 0 24 24;"
                                                                        xml:space="preserve"
                                                                        width="512"
                                                                        height="512">
                                                                        <g>
                                                                            <path
                                                                                d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>

                                                                    <input wire:model.lazy="socilaMedia.facebook" placeholder="Facebook URL"
                                                                        class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                        type="text">
                                                                </div>

                                                                <div class="group relative w-full">
                                                                    <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                                        fill="currentColor"
                                                                        x="0px" y="0px"
                                                                        viewBox="0 0 24 24"
                                                                        style="enable-background:new 0 0 24 24;"
                                                                        xml:space="preserve"
                                                                        width="512"
                                                                        height="512">
                                                                        <g>
                                                                            <path
                                                                                d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z">
                                                                            </path>
                                                                            <path
                                                                                d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z">
                                                                            </path>
                                                                            <circle cx="18.406"
                                                                                cy="5.594"
                                                                                r="1.44">
                                                                            </circle>
                                                                        </g>
                                                                    </svg>
                                                                    <input wire:model.lazy="socilaMedia.instagram" placeholder="Instagram URL"
                                                                        class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                        type="text">
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-x-3 gap-y-4 md:flex-row">
                                                                <div class="group relative w-full">
                                                                    <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                                        fill="currentColor"
                                                                        x="0px" y="0px"
                                                                        viewBox="0 0 24 24"
                                                                        style="enable-background:new 0 0 24 24;"
                                                                        xml:space="preserve"
                                                                        width="512"
                                                                        height="512">
                                                                        <path
                                                                            id="Logo_00000038394049246713568260000012923108920998390947_"
                                                                            d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z">
                                                                        </path>
                                                                    </svg>
                                                                    <input wire:model.lazy="socilaMedia.twitter" placeholder="Twitter URL"
                                                                        class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                        type="text">
                                                                </div>

                                                                <div class="group relative w-full">
                                                                    <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                                        fill="currentColor"
                                                                        x="0px" y="0px"
                                                                        viewBox="0 0 24 24"
                                                                        style="enable-background:new 0 0 24 24;"
                                                                        xml:space="preserve"
                                                                        width="512"
                                                                        height="512">
                                                                        <g>
                                                                            <path
                                                                                d="M12.01,0C5.388,0,0.02,5.368,0.02,11.99c0,5.082,3.158,9.424,7.618,11.171c-0.109-0.947-0.197-2.408,0.039-3.444   c0.217-0.938,1.401-5.961,1.401-5.961s-0.355-0.72-0.355-1.776c0-1.668,0.967-2.911,2.171-2.911c1.026,0,1.52,0.77,1.52,1.688   c0,1.026-0.651,2.566-0.997,3.997c-0.286,1.194,0.602,2.171,1.776,2.171c2.132,0,3.77-2.25,3.77-5.487   c0-2.872-2.062-4.875-5.013-4.875c-3.414,0-5.418,2.556-5.418,5.201c0,1.026,0.395,2.132,0.888,2.734   C7.52,14.615,7.53,14.724,7.5,14.842c-0.089,0.375-0.296,1.194-0.336,1.362c-0.049,0.217-0.178,0.266-0.405,0.158   c-1.5-0.701-2.438-2.882-2.438-4.648c0-3.78,2.743-7.253,7.924-7.253c4.155,0,7.391,2.961,7.391,6.928   c0,4.135-2.605,7.461-6.217,7.461c-1.214,0-2.359-0.632-2.743-1.382c0,0-0.602,2.289-0.75,2.852   c-0.266,1.046-0.997,2.349-1.49,3.148C9.562,23.812,10.747,24,11.99,24c6.622,0,11.99-5.368,11.99-11.99C24,5.368,18.632,0,12.01,0   z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                    <input wire:model.lazy="socilaMedia.pinterest" placeholder="Pinterest URL"
                                                                        class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                        type="text">
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-x-3 gap-y-4 md:flex-row">
                                                                <div class="group relative w-full">
                                                                    <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                                        fill="currentColor"
                                                                        x="0px" y="0px"
                                                                        viewBox="0 0 24 24"
                                                                        style="enable-background:new 0 0 24 24;"
                                                                        xml:space="preserve"
                                                                        width="512"
                                                                        height="512">
                                                                        <g>
                                                                            <path id="Path_2525"
                                                                                d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262">
                                                                            </path>
                                                                            <path id="Path_2520"
                                                                                d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463">
                                                                            </path>
                                                                            <path id="Path_2526"
                                                                                d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                    <input wire:model.lazy="socilaMedia.linkedin" placeholder="LinkedIn URL"
                                                                        class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                        type="text">
                                                                </div>

                                                                <div class="group relative w-full">
                                                                    <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                                        fill="currentColor"
                                                                        x="0px" y="0px"
                                                                        viewBox="0 0 24 24"
                                                                        style="enable-background:new 0 0 24 24;"
                                                                        xml:space="preserve"
                                                                        width="512"
                                                                        height="512">
                                                                        <g id="PRIMARY_-_GHOST">
                                                                            <path
                                                                                d="M23.914,17.469c-0.167-0.454-0.484-0.697-0.846-0.898c-0.068-0.04-0.131-0.072-0.184-0.097   c-0.108-0.056-0.218-0.11-0.328-0.166c-1.127-0.598-2.008-1.352-2.619-2.246c-0.173-0.252-0.324-0.518-0.45-0.797   c-0.052-0.149-0.049-0.233-0.012-0.311c0.037-0.06,0.086-0.111,0.144-0.15c0.194-0.128,0.394-0.258,0.529-0.346   c0.241-0.157,0.433-0.28,0.556-0.368c0.463-0.324,0.787-0.668,0.989-1.052c0.286-0.537,0.323-1.172,0.104-1.74   c-0.307-0.807-1.069-1.308-1.992-1.308c-0.195,0-0.389,0.021-0.579,0.061c-0.051,0.011-0.102,0.023-0.151,0.036   c0.008-0.552-0.004-1.134-0.053-1.708c-0.174-2.016-0.88-3.072-1.616-3.915c-0.471-0.528-1.026-0.975-1.643-1.322   C14.647,0.505,13.38,0.181,12,0.181c-1.38,0-2.64,0.324-3.758,0.961C7.624,1.49,7.067,1.938,6.596,2.467   C5.86,3.309,5.154,4.368,4.98,6.382C4.931,6.955,4.919,7.541,4.927,8.089c-0.05-0.013-0.1-0.024-0.15-0.036   c-0.191-0.041-0.385-0.061-0.58-0.061c-0.924,0-1.687,0.501-1.993,1.308c-0.221,0.568-0.184,1.204,0.101,1.742   c0.203,0.385,0.526,0.728,0.99,1.052c0.123,0.086,0.315,0.21,0.556,0.368c0.13,0.085,0.321,0.209,0.508,0.332   c0.066,0.042,0.121,0.098,0.163,0.164c0.039,0.081,0.04,0.167-0.018,0.326c-0.124,0.273-0.272,0.534-0.442,0.78   C3.465,14.94,2.61,15.68,1.519,16.273c-0.578,0.307-1.179,0.511-1.433,1.201c-0.192,0.521-0.067,1.113,0.42,1.612   c0.178,0.186,0.385,0.343,0.613,0.464c0.474,0.26,0.978,0.462,1.5,0.6c0.108,0.028,0.21,0.074,0.303,0.136   c0.177,0.155,0.152,0.389,0.388,0.731c0.119,0.177,0.269,0.33,0.444,0.451c0.495,0.342,1.052,0.363,1.642,0.386   c0.533,0.02,1.137,0.044,1.827,0.271c0.286,0.094,0.583,0.277,0.927,0.491c0.826,0.508,1.957,1.202,3.849,1.202   c1.892,0,3.031-0.698,3.863-1.208c0.342-0.21,0.637-0.391,0.915-0.483c0.69-0.228,1.294-0.251,1.827-0.271   c0.59-0.022,1.147-0.044,1.642-0.386c0.207-0.144,0.38-0.333,0.505-0.552c0.17-0.289,0.165-0.491,0.325-0.632   c0.087-0.059,0.183-0.103,0.285-0.13c0.53-0.139,1.041-0.342,1.521-0.606c0.242-0.129,0.46-0.3,0.644-0.504l0.006-0.008   C23.986,18.552,24.101,17.977,23.914,17.469z M22.59,18.046c-0.03,0.093-0.133,0.202-0.358,0.327   c-1.026,0.567-1.708,0.506-2.238,0.848c-0.197,0.127-0.257,0.318-0.289,0.512c-0.014,0.08-0.022,0.161-0.034,0.238   c-0.025,0.161-0.063,0.305-0.188,0.391c-0.402,0.278-1.591-0.019-3.127,0.488c-1.267,0.419-2.075,1.623-4.353,1.623   c-2.279,0-3.068-1.202-4.356-1.626c-1.533-0.507-2.724-0.21-3.128-0.487c-0.327-0.225-0.061-0.851-0.511-1.141   c-0.531-0.341-1.213-0.281-2.238-0.844c-0.33-0.182-0.398-0.329-0.358-0.443c0-0.003,0.001-0.005,0.003-0.008   c0.043-0.109,0.184-0.188,0.29-0.239c1.742-0.843,2.798-1.902,3.43-2.809c0.127-0.182,0.236-0.357,0.331-0.524   c0.442-0.778,0.562-1.36,0.574-1.45c0.032-0.249,0.067-0.446-0.208-0.699c-0.265-0.246-1.443-0.975-1.77-1.203   c-0.223-0.156-0.454-0.343-0.578-0.592c-0.27-0.541,0.153-1.068,0.71-1.068c0.099,0,0.198,0.012,0.295,0.033   c0.593,0.129,1.17,0.426,1.503,0.506c0.22,0.053,0.364-0.047,0.351-0.276c-0.038-0.65-0.13-1.915-0.028-3.098   c0.05-0.581,0.167-1.171,0.381-1.721c0.206-0.529,0.535-1.001,0.906-1.426c0.3-0.343,1.705-1.828,4.395-1.828   c2.1,0,3.42,0.903,4.04,1.461c0.989,0.909,1.533,2.18,1.645,3.507c0.102,1.183,0.014,2.449-0.028,3.098   c-0.014,0.221,0.141,0.33,0.351,0.277c0.334-0.081,0.91-0.378,1.504-0.507c0.438-0.095,0.946,0.039,1.066,0.521   c0.099,0.413-0.141,0.759-0.638,1.106c-0.327,0.228-1.505,0.956-1.77,1.202c-0.275,0.254-0.239,0.45-0.207,0.7   c0.015,0.116,0.203,1.022,1.003,2.113c0.001,0.001,0.001,0.002,0.002,0.002c0.033,0.045,0.067,0.091,0.103,0.137   c0.18,0.234,0.389,0.476,0.63,0.719c0.624,0.628,1.466,1.266,2.597,1.812c0.093,0.045,0.2,0.101,0.261,0.187   C22.593,17.916,22.612,17.984,22.59,18.046z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                    <input wire:model.lazy="socilaMedia.snapchat" placeholder="Snap Chat URL"
                                                                        class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                        type="text">
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-x-3 gap-y-4 md:flex-row">
                                                                <div class="group relative w-full">
                                                                    <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                                        fill="currentColor"
                                                                        x="0px" y="0px"
                                                                        viewBox="0 0 24 24"
                                                                        style="enable-background:new 0 0 24 24;"
                                                                        xml:space="preserve"
                                                                        width="512"
                                                                        height="512">
                                                                        <g id="XMLID_184_">
                                                                            <path
                                                                                d="M23.498,6.186c-0.276-1.039-1.089-1.858-2.122-2.136C19.505,3.546,12,3.546,12,3.546s-7.505,0-9.377,0.504   C1.591,4.328,0.778,5.146,0.502,6.186C0,8.07,0,12,0,12s0,3.93,0.502,5.814c0.276,1.039,1.089,1.858,2.122,2.136   C4.495,20.454,12,20.454,12,20.454s7.505,0,9.377-0.504c1.032-0.278,1.845-1.096,2.122-2.136C24,15.93,24,12,24,12   S24,8.07,23.498,6.186z M9.546,15.569V8.431L15.818,12L9.546,15.569z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                    <input wire:model.lazy="socilaMedia.youtube" placeholder="Youtube URL"
                                                                        class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                        type="text">
                                                                </div>

                                                                <div class="group relative w-full">
                                                                    <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                                        fill="currentColor"
                                                                        x="0px" y="0px"
                                                                        viewBox="0 0 24 24"
                                                                        style="enable-background:new 0 0 24 24;"
                                                                        xml:space="preserve"
                                                                        width="512"
                                                                        height="512">
                                                                        <path
                                                                            d="M23.988,6.412c-0.107,2.341-1.739,5.546-4.895,9.614c-3.263,4.249-6.024,6.374-8.282,6.374c-1.399,0-2.583-1.294-3.55-3.882  c-0.646-2.372-1.291-4.744-1.937-7.117C4.606,8.814,3.836,7.519,3.013,7.519c-0.18,0-0.808,0.379-1.883,1.133L0,7.195  c1.185-1.043,2.353-2.085,3.503-3.129c1.58-1.368,2.766-2.087,3.556-2.16c1.868-0.18,3.018,1.099,3.449,3.838  c0.466,2.955,0.789,4.792,0.97,5.511c0.538,2.451,1.131,3.675,1.778,3.675c0.502,0,1.257-0.795,2.263-2.385  c1.005-1.59,1.543-2.8,1.616-3.631c0.143-1.372-0.395-2.06-1.616-2.06c-0.575,0-1.167,0.132-1.776,0.394  c1.179-3.871,3.433-5.751,6.759-5.644C22.968,1.677,24.13,3.279,23.988,6.412z">
                                                                        </path>
                                                                    </svg>
                                                                    <input wire:model.lazy="socilaMedia.vimeo" placeholder="Vimeo URL"
                                                                        class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                        type="text">
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="block flex w-full flex-col items-center justify-between gap-x-3 gap-y-4 md:flex-row">
                                                                <div class="group relative w-full">
                                                                    <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                                        fill="currentColor"
                                                                        x="0px" y="0px"
                                                                        viewBox="0 0 24 24"
                                                                        style="enable-background:new 0 0 24 24;"
                                                                        xml:space="preserve"
                                                                        width="512"
                                                                        height="512">
                                                                        <g id="WA_Logo">
                                                                            <g>
                                                                                <path
                                                                                    style="fill-rule:evenodd;clip-rule:evenodd;"
                                                                                    d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    <input wire:model.lazy="socilaMedia.whatsapp"
                                                                        placeholder="Whatsapp Number"
                                                                        class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                        type="text">
                                                                </div>

                                                                <div class="group relative w-full">
                                                                    <svg class="absolute bottom-1/2 left-2 h-5 w-5 translate-y-1/2 text-slate-400"
                                                                        fill="currentColor"
                                                                        x="0px" y="0px"
                                                                        viewBox="0 0 24 24"
                                                                        style="enable-background:new 0 0 24 24;"
                                                                        xml:space="preserve"
                                                                        width="512"
                                                                        height="512">
                                                                        <g id="Artboard">
                                                                            <path
                                                                                style="fill-rule:evenodd;clip-rule:evenodd;"
                                                                                d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z    M17.562,8.161c-0.18,1.897-0.962,6.502-1.359,8.627c-0.168,0.9-0.5,1.201-0.82,1.23c-0.697,0.064-1.226-0.461-1.901-0.903   c-1.056-0.692-1.653-1.123-2.678-1.799c-1.185-0.781-0.417-1.21,0.258-1.911c0.177-0.184,3.247-2.977,3.307-3.23   c0.007-0.032,0.015-0.15-0.056-0.212s-0.174-0.041-0.248-0.024c-0.106,0.024-1.793,1.139-5.062,3.345   c-0.479,0.329-0.913,0.489-1.302,0.481c-0.428-0.009-1.252-0.242-1.865-0.442c-0.751-0.244-1.349-0.374-1.297-0.788   c0.027-0.216,0.324-0.437,0.892-0.663c3.498-1.524,5.831-2.529,6.998-3.015c3.333-1.386,4.025-1.627,4.477-1.635   C17.472,7.214,17.608,7.681,17.562,8.161z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                    <input wire:model.lazy="socilaMedia.telegram"
                                                                        placeholder="Telegram Number"
                                                                        class="block w-full rounded-md border border-gray-300 px-3 py-2 pl-8 shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-traivis-500 sm:text-sm"
                                                                        type="text">
                                                                </div>
                                                            </div>

                                                        </form>
                                                        <!--END form-->

                                                    </div>
                                                    <!-- Content-->

                                                </li>
                                            </div>
                                            <!--END Social Media-->

                                        </div>
                                        <!--END collapse content-->
                                    </div>
                                    <!--END Collapse box-->

                                </div>
                            </div>

                        </div>
                    </section>
                    <!--course-->
                    <div class="px-1 text-gray-700">

                        <div class="mt-5 rounded-lg border border-gray-200" x-data="{ open: false }">

                            <div @click="open = !open"
                                class="flex cursor-pointer items-center bg-traivis-50 p-4 text-gray-500">
                                <div class="mr-5">

                                </div>

                                <div class="flex-grow font-bold">
                                    General Privacy Settings
                                </div>

                                <div class="ml-5">
                                    <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                        class="h-5 w-5 rotate-0 transition-transform" fill="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                        </path>
                                    </svg>
                                </div>

                            </div>

                            <div class="p-0" style="display: none;" x-show="open"
                                x-transition:enter="transition-opacity ease-linear"
                                x-transition:enter-end="opacity-100" x-transition:enter-start="opacity-0"
                                x-transition:leave="transition-opacity ease-linear"
                                x-transition:leave-end="opacity-0"
                                x-transition:leave-start="opacity-100">

                                <!--collapse content-->
                                <div class="m-2 flex flex-wrap items-center bg-white p-4"
                                    style="align-items:baseline ;">
                                    <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li class="mt-6 flex items-center justify-between px-4 py-2">

                                            <!---label--->
                                            <div class="flex w-full flex-col">
                                                <p class="mb-4 block text-base font-medium text-gray-600 transition-colors "
                                                    id="privacy-option-label-2" contenteditable="false">
                                                    Account Privacy
                                                </p>
                                                <p class="text-sm text-gray-500"
                                                    id="privacy-option-description-2"
                                                    contenteditable="false">Keep My Space Private. Only
                                                    My Followers Can
                                                    See It.</p>
                                            </div>

                                            <div class="flex items-center justify-between px-1"
                                                x-data="{ enabled: @entangle('private_space') }">
                                                <span class="mr-3">
                                                </span>
                                                <button wire:click="updatePrivacySpace"
                                                    @click="enabled = !enabled" type="button"
                                                    class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                    :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                    role="switch" aria-checked="false">
                                                    <span class="sr-only">setting</span>
                                                    <span aria-hidden="true"
                                                        class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                        :class="enabled && 'translate-x-5'"></span>
                                                </button>
                                            </div>

                                        </li>
                                        <!---option link--->
                                        <div x-data="{ enabled: @entangle('private_space') }"
                                                x-show="enabled"
                                            class="group flex items-center justify-between rounded-full border border-gray-200 text-sm text-gray-400 hover:text-gray-700">
                                            <div class="flex w-0 flex-1 items-center">
                                                <svg class="h-5 w-5 flex-shrink-0" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 20 20" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                        clip-rule="evenodd"></path>
                                                </svg><span class="ml-2 w-0 flex-1 truncate"> {{ $private_space_link ??'copy to create link' }}
                                                </span>
                                            </div>

                                            <div wire:click="CopyPrivateSpaceLink"
                                                class="flex items-center rounded-full border border-gray-400 px-1 group-hover:border-gray-400">
                                                <button  class="mr-3 text-base">Copy</button>
                                                <svg class="h-4 w-4 flex-shrink-0" fill="currentColor"
                                                    id="Layer_1" height="512" viewbox="0 0 24 24"
                                                    width="512" xmlns="http://www.w3.org/2000/svg"
                                                    data-name="Layer 1">
                                                    <path
                                                        d="m15 20h-10a5.006 5.006 0 0 1 -5-5v-10a5.006 5.006 0 0 1 5-5h10a5.006 5.006 0 0 1 5 5v10a5.006 5.006 0 0 1 -5 5zm-10-18a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-10a3 3 0 0 0 -3-3zm19 17v-13a1 1 0 0 0 -2 0v13a3 3 0 0 1 -3 3h-13a1 1 0 0 0 0 2h13a5.006 5.006 0 0 0 5-5z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li class="flex items-center justify-between px-4 py-2">

                                            <!---label--->
                                            <div class="flex w-full flex-col">
                                                <p class="mb-4 block text-base font-medium text-gray-600 transition-colors "
                                                    id="privacy-option-label-3" contenteditable="false">
                                                    Comments</p>
                                                <p class="text-sm text-gray-500"
                                                    id="privacy-option-description-3"
                                                    contenteditable="false">Restrict The Comments On My
                                                    Hints And Notes
                                                    To The Followers Only.</p>
                                            </div>

                                            <div class="flex items-center justify-between px-1"
                                                x-data="{ enabled: @entangle('restrict_comments') }">
                                                <span class="mr-3">
                                                    <!--                            <span class="text-sm font-medium text-gray-500">Quiz Gradable</span>-->
                                                </span>
                                                <button wire:click="updateRestrictComment"
                                                    @click="enabled = !enabled" type="button"
                                                    class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                    :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                    role="switch" aria-checked="false">
                                                    <span class="sr-only"> setting</span>
                                                    <span aria-hidden="true"
                                                        class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                        :class="enabled && 'translate-x-5'"></span>
                                                </button>
                                            </div>

                                        </li>
                                    </div>
                                    {{--  <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li class="flex items-center justify-center px-4 py-2">

                                            <!---label--->
                                            <div class="flex w-full flex-col">
                                                <p class="mb-4 block text-base font-medium text-gray-600 transition-colors "
                                                    id="privacy-option-label-4">Mentions</p>
                                                <p class="text-sm text-gray-500"
                                                    id="privacy-option-description-4"
                                                    contenteditable="true">Restrict Tagging And
                                                    Mentioning My Profile
                                                    In
                                                    The Conversations, Article, Hints And Notes To The
                                                    Followers Only.
                                                </p>
                                            </div>

                                            <div class="flex items-center justify-between px-1"
                                                x-data="{ enabled: @entangle('restrict_tagging') }">
                                                <span class="mr-3">
                                                </span>
                                                <button wire:click="updateRestrictTagging"
                                                    @click="enabled = !enabled" type="button"
                                                    class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                    :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                    role="switch" aria-checked="false">
                                                    <span class="sr-only">setting</span>
                                                    <span aria-hidden="true"
                                                        class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                        :class="enabled && 'translate-x-5'"></span>
                                                </button>
                                            </div>
                                        </li>
                                    </div>  --}}
                                    {{--  <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---label--->
                                            <div class="">
                                                <p
                                                    class="mb-4 block text-base font-medium text-gray-600">
                                                    Analytics
                                                </p>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Share To Public</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('show_analytics_public') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateShowAnalytics('public')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm" contenteditable="false">Show To My
                                                    Followers (Only)
                                                </p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('show_analytics_followers') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button
                                                        wire:click="updateShowAnalytics('followers')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm" contenteditable="false">Show To Me
                                                    (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('show_analytics_me') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateShowAnalytics('me')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm" contenteditable="false">Create a
                                                    Link for Sharing
                                                    The
                                                    Analytics Privately.</p>

                                                <button x-data="{ toggle2: false }"
                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                    :class="{ 'bg-traivis-300': toggle2 }"
                                                    x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                        :class="{ 'transform translate-x-full ': toggle2 }">
                                                    </div>
                                                </button>
                                            </div>

                                            <!---option link--->
                                            <div
                                                class="group flex items-center justify-between rounded-full border border-gray-200 text-sm text-gray-400 hover:text-gray-700">
                                                <div class="flex w-0 flex-1 items-center">
                                                    <svg class="h-5 w-5 flex-shrink-0"
                                                        fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewbox="0 0 20 20" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                            clip-rule="evenodd"></path>
                                                    </svg><span class="ml-2 w-0 flex-1 truncate"> link
                                                        here </span>
                                                </div>

                                                <div
                                                    class="flex items-center rounded-full border border-gray-400 px-1 group-hover:border-gray-400">
                                                    <a href="#" class="mr-3 text-base">Copy</a>
                                                    <svg class="h-4 w-4 flex-shrink-0"
                                                        fill="currentColor" id="Layer_1"
                                                        height="512" viewbox="0 0 24 24"
                                                        width="512"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        data-name="Layer 1">
                                                        <path
                                                            d="m15 20h-10a5.006 5.006 0 0 1 -5-5v-10a5.006 5.006 0 0 1 5-5h10a5.006 5.006 0 0 1 5 5v10a5.006 5.006 0 0 1 -5 5zm-10-18a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-10a3 3 0 0 0 -3-3zm19 17v-13a1 1 0 0 0 -2 0v13a3 3 0 0 1 -3 3h-13a1 1 0 0 0 0 2h13a5.006 5.006 0 0 0 5-5z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>

                                        </li>
                                    </div>  --}}
                                    {{--  <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---label--->
                                            <div class="">
                                                <p
                                                    class="mb-4 block text-base font-medium text-gray-600">
                                                    Business Environment</p>
                                            </div>

                                            <!---option--->
                                            <div class="flex items-center justify-between px-1"
                                                x-data="{ enabled: @entangle('business_environment_public') }">

                                                <p class="text-sm">Show To Public</p>
                                                <span class="mr-3">
                                                </span>
                                                <button wire:click="updateBusinessEnvironment('public')"
                                                    @click="enabled = !enabled" type="button"
                                                    class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                    :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                    role="switch" aria-checked="false">
                                                    <span class="sr-only">setting</span>
                                                    <span aria-hidden="true"
                                                        class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                        :class="enabled && 'translate-x-5'"></span>
                                                </button>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show To My Followers (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('business_environment_followers') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button
                                                        wire:click="updateBusinessEnvironment('followers')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Me (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('business_environment_me') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateBusinessEnvironment('me')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>

                                    </div>  --}}
                                    {{--  <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---label--->
                                            <div class="">
                                                <p
                                                    class="mb-4 block text-base font-medium text-gray-600">
                                                    Rewards Deals
                                                </p>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Share To Public</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('rewards_deals_public') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateRewardsDeals('public')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show To My Followers (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('rewards_deals_followers') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateRewardsDeals('followers')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Me (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('rewards_deals_me') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateRewardsDeals('me')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            --}}
                                            <!---option--->
                                            {{--  <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Create a Link for Sharing The
                                                    Analytics Privately
                                                </p>

                                                <button x-data="{ toggle2: false }"
                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                    :class="{ 'bg-traivis-300': toggle2 }"
                                                    x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                        :class="{ 'transform translate-x-full ': toggle2 }">
                                                    </div>
                                                </button>
                                            </div>
                                            
                                            <div
                                                class="group flex items-center justify-between rounded-full border border-gray-200 text-sm text-gray-400 hover:text-gray-700">
                                                <div class="flex w-0 flex-1 items-center">
                                                    <svg class="h-5 w-5 flex-shrink-0"
                                                        fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewbox="0 0 20 20" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                            clip-rule="evenodd"></path>
                                                    </svg><span class="ml-2 w-0 flex-1 truncate"> link
                                                        here </span>
                                                </div>

                                                <div
                                                    class="flex items-center rounded-full border border-gray-400 px-1 group-hover:border-gray-400">
                                                    <a href="#" class="mr-3 text-base">Copy</a>
                                                    <svg class="h-4 w-4 flex-shrink-0"
                                                        fill="currentColor" id="Layer_1"
                                                        height="512" viewbox="0 0 24 24"
                                                        width="512"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        data-name="Layer 1">
                                                        <path
                                                            d="m15 20h-10a5.006 5.006 0 0 1 -5-5v-10a5.006 5.006 0 0 1 5-5h10a5.006 5.006 0 0 1 5 5v10a5.006 5.006 0 0 1 -5 5zm-10-18a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-10a3 3 0 0 0 -3-3zm19 17v-13a1 1 0 0 0 -2 0v13a3 3 0 0 1 -3 3h-13a1 1 0 0 0 0 2h13a5.006 5.006 0 0 0 5-5z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>  --}}

                                        {{-- </li>
                                    </div>  --}}

                                </div>
                                <!--END collapse content-->
                            </div>

                        </div>
                    </div>
                    <!--end course-->

                    <!---->
                    <div class="px-1 text-gray-700">

                        <div class="mt-5 rounded-lg border border-gray-200" x-data="{ open: false }">

                            <div @click="open = !open"
                                class="flex cursor-pointer items-center bg-traivis-50 p-4 text-gray-500">
                                <div class="mr-5">

                                </div>

                                <div class="flex-grow font-bold">
                                    My Followers &amp; Messages
                                </div>

                                <div class="ml-5">
                                    <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                        class="h-5 w-5 rotate-0 transition-transform"
                                        fill="currentColor" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                        </path>
                                    </svg>
                                </div>

                            </div>

                            <div class="p-0" style="display: none;" x-show="open"
                                x-transition:enter="transition-opacity ease-linear"
                                x-transition:enter-end="opacity-100"
                                x-transition:enter-start="opacity-0"
                                x-transition:leave="transition-opacity ease-linear"
                                x-transition:leave-end="opacity-0"
                                x-transition:leave-start="opacity-100">

                                <!--collapse content-->

                                <div x-data="{ qopen: false }"
                                    class="m-2 flex flex-wrap items-center bg-white p-4"
                                    style="align-items:baseline ;">
                                    <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---label--->
                                            <div class="">
                                                <p class="mb-4 block text-base font-medium text-gray-600"
                                                    contenteditable="false">My Followers Visibility</p>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show to Public</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('followers_visibility_public') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button
                                                        wire:click="updateFollowersVisibility('public')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200 '"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show To My Followers (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('followers_visibility_followers') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button
                                                        wire:click="updateFollowersVisibility('followers')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show To Me (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('followers_visibility_me') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateFollowersVisibility('me')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                        </li>
                                    </div>

                                    <section x-cloak x-show="qopen"
                                        x-transition:enter="ease-out duration-100"
                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave="ease-in duration-200"
                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

                                        <div class="fixed inset-0 z-10 overflow-y-auto"
                                            aria-labelledby="modal-title" role="dialog"
                                            aria-modal="true">
                                            <div
                                                class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

                                                <!---over BG---->
                                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                    aria-hidden="true" @click="qopen = false">
                                                </div>
                                                <!-- center tricj-->
                                                <span
                                                    class="hidden sm:inline-block sm:h-screen sm:align-middle"
                                                    aria-hidden="true">&#8203;</span>
                                                <!---END over BG---->

                                                <!-- Question Box -->
                                                <div
                                                    class="relative my-8 inline-block w-full transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-3/4">
                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                    <div class="mx-auto text-center">
                                                        <a href="#"
                                                            class="mb-4 block text-base font-medium text-gray-600">Blocked
                                                            Connections</a>
                                                    </div>
                                                    <div class="bg-white">
                                                        <div
                                                            class="mx-auto max-w-7xl px-4 py-2 sm:px-6 lg:px-8 lg:py-24">

                                                            <div
                                                                class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-8">

                                                                <div class="lg:col-span-2">
                                                                    <ul role="list"
                                                                        class="space-y-12 lg:grid lg:grid-cols-2 lg:gap-12 lg:gap-x-8 lg:space-y-0">
                                                                       @forelse ($blocked as $item)
                                                                       <li>
                                                                        <div
                                                                            class="flex items-center space-x-4 lg:space-x-6">
                                                                            <img class="h-16 w-16 rounded-full lg:h-20 lg:w-20"
                                                                                src="{{ $item->user->avatar }}"
                                                                                alt="">
                                                                            <div
                                                                                class="space-y-1 text-lg font-medium leading-6">
                                                                                <h3>{{ $item->user->name  }}
                                                                                </h3>
                                                                                <p
                                                                                    class="text-gray-400">
                                                                                    Blocked on
                                                                                    {{ $item->updated_at->format('Y-m-d') }}</p>
                                                                            </div>
                                                                            <button wire:click="unblock({{ $item->id }}) "
                                                                                class="ml-5 mr-1 mt-4 w-auto rounded-full bg-traivis-500 p-2 px-4 text-white hover:bg-traivis-700">Unblock</button>

                                                                        </div>
                                                                    </li>
                                                                       @empty
                                                                           
                                                                       @endforelse
                                                                        
                                                                        

                                                                        <!-- More people... -->
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--END Question Box -->

                                                </div>
                                            </div>
                                    </section>
                                    <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---label--->
                                            <div class="">
                                                <p class="mb-4 block text-base font-medium text-gray-600"
                                                    contenteditable="false">Who Can Message Me? </p>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Anyone</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('message_ability_public') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateMessageAbility('public')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">My Followers (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('message_ability_followers') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button
                                                        wire:click="updateMessageAbility('followers')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">No One</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('message_ability_me') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateMessageAbility('me')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                        </li>
                                    </div>
                                    <div class="w-full items-center text-center">
                                        <li
                                            class="flex flex-row items-center space-y-2 px-4 py-4 text-center text-gray-500 transition-colors ">

                                            <!---label--->
                                            <div class="">
                                                <a href="#"
                                                    class="mb-4 mt-4 block items-center text-center text-base font-medium text-gray-600">Show
                                                    Blocked Connections</a>
                                            </div>

                                            <button @click="qopen=true"
                                                class="ml-8 flex h-12 w-12 cursor-pointer items-center items-center rounded-full p-3 text-center transition duration-300 ease-in-out hover:bg-traivis-500 hover:fill-white">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" width="512" height="512">
                                                    <g id="_01_align_center"
                                                        data-name="01 align center">
                                                        <path
                                                            d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                        </path>
                                                        <path
                                                            d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </button>

                                        </li>
                                    </div>

                                </div>
                                <!--END collapse content-->
                            </div>

                        </div>
                    </div>
                    <!---->

                    <!---->
                    <div class="px-1 text-gray-700">

                        <div class="mt-5 rounded-lg border border-gray-200" x-data="{ open: false }">

                            <div @click="open = !open"
                                class="flex cursor-pointer items-center bg-traivis-50 p-4 text-gray-500">
                                <div class="mr-5">

                                </div>

                                <div class="flex-grow font-bold">
                                    My Social Activities
                                </div>

                                <div class="ml-5">
                                    <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                        class="h-5 w-5 rotate-0 transition-transform"
                                        fill="currentColor" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                        </path>
                                    </svg>
                                </div>

                            </div>

                            <div class="p-0" style="display: none;" x-show="open"
                                x-transition:enter="transition-opacity ease-linear"
                                x-transition:enter-end="opacity-100"
                                x-transition:enter-start="opacity-0"
                                x-transition:leave="transition-opacity ease-linear"
                                x-transition:leave-end="opacity-0"
                                x-transition:leave-start="opacity-100">

                                <!--collapse content-->
                                <div class="m-2 flex flex-wrap items-center bg-white p-4"
                                    style="align-items:baseline ;">
                                    <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---label--->
                                            <div class="">
                                                <p
                                                    class="mb-4 block text-base font-medium text-gray-600">
                                                    My Notes</p>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show to Public</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('notes_visibility_public') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateNotesVisibility('public')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show To My Followers (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('notes_visibility_followers') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button
                                                        wire:click="updateNotesVisibility('followers')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200 '"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show To Me (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('notes_visibility_me') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateNotesVisibility('me')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                        </li>
                                    </div>
                                    <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---label--->
                                            <div class="">
                                                <p
                                                    class="mb-4 block text-base font-medium text-gray-600">
                                                    My Hints</p>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show to Public</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('hint_visibility_public') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateHintsVisibility('public')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">My Connections (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('hint_visibility_followers') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button
                                                        wire:click="updateHintsVisibility('followers')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show To Me (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('hint_visibility_me') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateHintsVisibility('me')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                        </li>
                                    </div>
                                    <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---label--->
                                            <div class="">
                                                <p
                                                    class="mb-4 block text-base font-medium text-gray-600">
                                                    My Blogs</p>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show to Public</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('blog_visibility_public') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateBlogVisibility('public')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show To My Followers (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('blog_visibility_followers') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button
                                                        wire:click="updateBlogVisibility('followers')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="text-sm">Show To Me (Only)</p>

                                                <div class="flex items-center justify-between px-1"
                                                    x-data="{ enabled: @entangle('blog_visibility_me') }">
                                                    <span class="mr-3">
                                                    </span>
                                                    <button wire:click="updateBlogVisibility('me')"
                                                        @click="enabled = !enabled" type="button"
                                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                        role="switch" aria-checked="false">
                                                        <span class="sr-only">setting</span>
                                                        <span aria-hidden="true"
                                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                            :class="enabled && 'translate-x-5'"></span>
                                                    </button>
                                                </div>
                                            </div>

                                        </li>
                                    </div>
                                </div>
                                <!--END collapse content-->
                            </div>

                        </div>
                    </div>
                    <!---->

                    <!---->
                    {{--  <div class="px-1 text-gray-700">

                        <div class="mt-5 rounded-lg border border-gray-200" x-data="{ open: false }">

                            <div @click="open = !open"
                                class="flex cursor-pointer items-center bg-traivis-50 p-4 text-gray-500">
                                <div class="mr-5">

                                </div>

                                <div class="flex-grow font-bold">
                                    TRAIML Algorithms
                                </div>

                                <div class="ml-5">
                                    <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                        class="h-5 w-5 rotate-0 transition-transform"
                                        fill="currentColor" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                        </path>
                                    </svg>
                                </div>

                            </div>

                            <div class="p-0" style="display: none;" x-show="open"
                                x-transition:enter="transition-opacity ease-linear"
                                x-transition:enter-end="opacity-100"
                                x-transition:enter-start="opacity-0"
                                x-transition:leave="transition-opacity ease-linear"
                                x-transition:leave-end="opacity-0"
                                x-transition:leave-start="opacity-100">

                                <!--collapse content-->
                                <div class="m-2 flex flex-wrap items-center bg-white p-4"
                                    style="align-items:baseline ;">
                                    <div class="w-full p-5 sm:w-1/2 lg:w-1/2">
                                        <li
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---label--->
                                            <div class="">
                                                <p
                                                    class="mb-4 block text-base font-medium text-gray-600">
                                                    * TRAIVIS’s
                                                    Artificial Intelligence- Machine Learning Algorithms
                                                </p>
                                            </div>

                                            <!---option--->
                                            <div class="flex flex-row items-center justify-between">
                                                <p class="w-full text-sm">Disable TRAIML Algorithms (T
                                                    &amp; C Applied)
                                                    <span>For Accurate Results, We Recommend Not to
                                                        Disable TRAIML
                                                        Algorithms</span>
                                                </p>

                                                <div class="flex flex-row items-center justify-between">
                                                    <p class="text-sm">Show to Public</p>

                                                    <div class="flex items-center justify-between px-1"
                                                        x-data="{ enabled: @entangle('traivis_algorithms') }">
                                                        <span class="mr-3">
                                                        </span>
                                                        <button wire:click="updateTraivisAlgorithm"
                                                            @click="enabled = !enabled" type="button"
                                                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                                            :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'"
                                                            role="switch" aria-checked="false">
                                                            <span class="sr-only">Use setting</span>
                                                            <span aria-hidden="true"
                                                                class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                                                :class="enabled && 'translate-x-5'"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                    </div>

                                </div>
                                <!--END collapse content-->
                            </div>

                        </div>
                    </div>  --}}
                    <!---->

                    <!---->
                    {{--  <div class="px-1 text-gray-700">

                        <div class="mt-5 rounded-lg border border-gray-200" x-data="{ open: false }">

                            <div @click="open = !open"
                                class="flex cursor-pointer items-center bg-traivis-50 p-4 text-gray-500">
                                <div class="mr-5">

                                </div>

                                <div class="flex-grow font-bold">
                                    Roles &amp; Permissions
                                </div>

                                <div class="ml-5">
                                    <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                        class="h-5 w-5 rotate-0 transition-transform"
                                        fill="currentColor" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                        </path>
                                    </svg>
                                </div>

                            </div>

                            <div class="p-0" style="display: none;" x-show="open"
                                x-transition:enter="transition-opacity ease-linear"
                                x-transition:enter-end="opacity-100"
                                x-transition:enter-start="opacity-0"
                                x-transition:leave="transition-opacity ease-linear"
                                x-transition:leave-end="opacity-0"
                                x-transition:leave-start="opacity-100">

                                <!--inside collapse content-->

                                <div class="m-2 flex flex-wrap items-center bg-white p-4"
                                    style="align-items:baseline ;">
                                    <div class="w-full px-1 text-gray-700">

                                        <div class="mt-5 rounded-lg border border-gray-200"
                                            x-data="{ open: false }">

                                            <div @click="open = !open"
                                                class="flex cursor-pointer items-center bg-traivis-50 p-4 text-gray-500">
                                                <div class="mr-5">

                                                </div>

                                                <div class="flex-grow font-bold">
                                                    show the list of available Roles &amp; Permissions
                                                </div>

                                                <div class="ml-5">
                                                    <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                                        class="h-5 w-5 rotate-0 transition-transform"
                                                        fill="currentColor" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                        </path>
                                                    </svg>
                                                </div>

                                            </div>

                                            <div class="p-0" style="display: none;" x-show="open"
                                                x-transition:enter="transition-opacity ease-linear"
                                                x-transition:enter-end="opacity-100"
                                                x-transition:enter-start="opacity-0"
                                                x-transition:leave="transition-opacity ease-linear"
                                                x-transition:leave-end="opacity-0"
                                                x-transition:leave-start="opacity-100">

                                                <!--collapse content-->

                                                <div class="m-2 flex flex-wrap items-center overflow-x-auto bg-white p-4"
                                                    style="align-items:baseline ;">
                                                    <table class="w-full">
                                                        <tbody>
                                                            <thead
                                                                class="border-coolGray-100 h-11 whitespace-nowrap border-b bg-gray-100">
                                                                <tr class="flex justify-between">

                                                                    <th class="text-coolGray-800 w-1/2 whitespace-nowrap p-4 text-center font-semibold"
                                                                        contenteditable="false">All
                                                                        Roles</th>

                                                                    <th class="text-coolGray-800 w-1/2 whitespace-nowrap p-4 text-center font-semibold"
                                                                        contenteditable="false">All
                                                                        Permissions</th>

                                                                </tr>

                                                            </thead>
                                                            <tr
                                                                class="border-coolGray-100 flex h-auto justify-between border-b bg-white">
                                                                <th
                                                                    class="text-coolGray-800 flex w-1/2 flex-wrap justify-start whitespace-nowrap p-3 text-center font-semibold">
                                                                    @forelse ($rolesAndPermissions as $role =>
                                                                    $premissions)
                                                                        <span
                                                                            class="m-2 h-[48px] rounded-full border bg-traivis-50 p-2 text-gray-500">{{ str_replace('_', ' ', $role) }}</span>
                                                                    @empty
                                                                    @endforelse

                                                                </th>

                                                                <th
                                                                    class="text-coolGray-800 flex w-1/2 flex-wrap justify-center whitespace-nowrap p-3 text-center font-semibold">

                                                                    @forelse ($rolesAndPermissions as $role =>
                                                                    $premissions)

                                                                        @forelse ($premissions as $premission)
                                                                            <span
                                                                                class="m-2 h-[48px] rounded-full border bg-traivis-50 p-2 text-gray-500">{{ str_replace('_', ' ', $premission) }}</span>
                                                                        @empty
                                                                        @endforelse
                                                                    @empty

                                                                    @endforelse

                                                                </th>

                                                            </tr>
                                                            <tr
                                                                class="border-coolGray-100 flex h-11 justify-between whitespace-nowrap border-b bg-gray-100">

                                                                <th class="text-coolGray-800 w-1/2 whitespace-nowrap p-4 text-left font-semibold"
                                                                    contenteditable="false">Role</th>

                                                                <th class="text-coolGray-800 w-1/2 whitespace-nowrap p-4 text-left font-semibold"
                                                                    contenteditable="false">Permissions
                                                                </th>

                                                            </tr>
                                                            @forelse ($rolesAndPermissions as $role => $premissions)

                                                                <!-- each role -->
                                                                <tr
                                                                    class="border-coolGray-100 flex h-auto justify-between border-b bg-white">
                                                                    <th
                                                                        class="text-coolGray-800 flex w-1/2 flex-wrap justify-start whitespace-nowrap text-center font-semibold">

                                                                        <span
                                                                            class="p-2 text-gray-500">{{ str_replace('_', ' ', $role) }}</span>

                                                                    </th>

                                                                    <th
                                                                        class="text-coolGray-800 flex w-1/2 flex-wrap justify-center whitespace-nowrap p-3 text-center font-semibold">
                                                                        @forelse ($premissions as $premission)
                                                                            <span
                                                                                class="m-2 rounded-full bg-traivis-50 p-2 text-left text-gray-500">{{ str_replace('_', ' ', $premission) }}</span>
                                                                        @empty
                                                                        @endforelse

                                                                    </th>

                                                                </tr>
                                                                <!-- end each role -->
                                                            @empty

                                                            @endforelse

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--END collapse content-->
                                            </div>

                                        </div>
                                    </div>
                                    <div class="w-full px-1 text-gray-700">

                                        <div class="mt-5 rounded-lg border border-gray-200"
                                            x-data="{ open: false }">

                                            <div @click="open = !open"
                                                class="flex cursor-pointer items-center bg-traivis-50 p-4 text-gray-500">
                                                <div class="mr-5">

                                                </div>

                                                <div class="flex-grow font-bold">
                                                    Roles &amp; Permissions manager
                                                </div>

                                                <div class="ml-5">
                                                    <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                                        class="h-5 w-5 rotate-0 transition-transform"
                                                        fill="currentColor" viewbox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                        </path>
                                                    </svg>
                                                </div>

                                            </div>

                                            <div class="p-0" style="display: none;" x-show="open"
                                                x-transition:enter="transition-opacity ease-linear"
                                                x-transition:enter-end="opacity-100"
                                                x-transition:enter-start="opacity-0"
                                                x-transition:leave="transition-opacity ease-linear"
                                                x-transition:leave-end="opacity-0"
                                                x-transition:leave-start="opacity-100">

                                                <!--collapse content-->

                                                <div x-data="{ qopen: false }"
                                                    class="m-2 flex flex-wrap items-center bg-white p-4"
                                                    style="align-items:baseline ;">
                                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                                    <div class="w-full px-4 sm:px-6 lg:px-8">
                                                        <div class="sm:flex sm:items-center">
                                                            <div class="sm:flex-auto">
                                                                <h1
                                                                    class="text-xl font-semibold text-gray-900">
                                                                    Users
                                                                </h1>
                                                            </div>
                                                            <div
                                                                class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                                                <button @click="qopen=true"
                                                                    type="button"
                                                                    class="inline-flex items-center justify-center rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                                                                    user</button>
                                                            </div>
                                                            <section x-cloak x-show="qopen"
                                                                x-transition:enter="ease-out duration-100"
                                                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                                x-transition:leave="ease-in duration-200"
                                                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

                                                                <div class="fixed inset-0 top-[250px] z-10 overflow-y-auto"
                                                                    aria-labelledby="modal-title"
                                                                    role="dialog" aria-modal="true">
                                                                    <div
                                                                        class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

                                                                        <!---over BG---->
                                                                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                                            aria-hidden="true"
                                                                            @click="qopen = false">
                                                                        </div>
                                                                        <!-- center tricj-->
                                                                        <span
                                                                            class="hidden sm:inline-block sm:h-screen sm:align-middle"
                                                                            aria-hidden="true">&#8203;</span>
                                                                        <!---END over BG---->

                                                                        <!-- Question Box -->
                                                                        <div
                                                                            class="relative my-8 inline-block w-full transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-3/4">
                                                                            <div action=""
                                                                                class="flex flex-row flex-wrap justify-center">
                                                                                <div
                                                                                    class="mt-3 flex w-1/2 flex-wrap justify-center">
                                                                                    <label
                                                                                        for="name"
                                                                                        class="mt-3 w-full">select
                                                                                        a
                                                                                        name</label>

                                                                                    <select
                                                                                        id="positions"
                                                                                        class="m-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-traivis-500 focus:ring-traivis-500">

                                                                                        <option selected
                                                                                            value="US">
                                                                                            User
                                                                                        </option>
                                                                                        <option
                                                                                            value="CA">
                                                                                            Admin
                                                                                        </option>
                                                                                        <option
                                                                                            value="FR">
                                                                                            France
                                                                                        </option>
                                                                                        <option
                                                                                            value="DE">
                                                                                            Germany
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <div
                                                                                    class="mt-3 flex w-1/2 flex-wrap justify-center">
                                                                                    <label
                                                                                        for="name"
                                                                                        class="mt-3 w-full">select
                                                                                        a
                                                                                        role</label>

                                                                                    <select
                                                                                        id="positions"
                                                                                        class="m-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-traivis-500 focus:ring-traivis-500">

                                                                                        <option selected
                                                                                            value="US">
                                                                                            User
                                                                                        </option>
                                                                                        <option
                                                                                            value="CA">
                                                                                            Admin
                                                                                        </option>
                                                                                        <option
                                                                                            value="FR">
                                                                                            France
                                                                                        </option>
                                                                                        <option
                                                                                            value="DE">
                                                                                            Germany
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="w-full">
                                                                                    <label
                                                                                        for="name"
                                                                                        class="mt-3">select
                                                                                        &
                                                                                        deselect
                                                                                        permissions</label>
                                                                                    <div
                                                                                        class="block flex h-[250px] w-full w-full flex-wrap justify-center overflow-y-auto rounded-lg border border-gray-300 bg-gray-50 p-2.5 px-4 text-sm text-gray-900 focus:border-traivis-500 focus:ring-traivis-500">
                                                                                        <div
                                                                                            class="h-[70px] w-full items-center p-1 text-center sm:w-1/2 lg:w-1/4">
                                                                                            <li
                                                                                                class="items-cente rm-1 flex justify-between border px-2 py-2">

                                                                                                <!---label--->
                                                                                                <div
                                                                                                    class="flex flex-col">
                                                                                                    <p class="text-sm text-gray-500"
                                                                                                        id="privacy-option-description-3"
                                                                                                        contenteditable="false">
                                                                                                        Restrict
                                                                                                        The
                                                                                                        Comments.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <!---option--->
                                                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                                                <button
                                                                                                    x-data="{ toggle2: false }"
                                                                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                                                                    :class="{ 'bg-traivis-300': toggle2 }"
                                                                                                    x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                                                                        :class="{ 'transform translate-x-full ': toggle2 }">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </li>
                                                                                        </div>
                                                                                        <div
                                                                                            class="h-[70px] w-full items-center p-1 text-center sm:w-1/2 lg:w-1/4">
                                                                                            <li
                                                                                                class="items-cente rm-1 flex justify-between border px-2 py-2">

                                                                                                <!---label--->
                                                                                                <div
                                                                                                    class="flex flex-col">
                                                                                                    <p class="text-sm text-gray-500"
                                                                                                        id="privacy-option-description-3"
                                                                                                        contenteditable="false">
                                                                                                        Restrict
                                                                                                        The
                                                                                                        Comments.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <!---option--->
                                                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                                                <button
                                                                                                    x-data="{ toggle2: false }"
                                                                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                                                                    :class="{ 'bg-traivis-300': toggle2 }"
                                                                                                    x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                                                                        :class="{ 'transform translate-x-full ': toggle2 }">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </li>
                                                                                        </div>
                                                                                        <div
                                                                                            class="h-[70px] w-full items-center p-1 text-center sm:w-1/2 lg:w-1/4">
                                                                                            <li
                                                                                                class="items-cente rm-1 flex justify-between border px-2 py-2">

                                                                                                <!---label--->
                                                                                                <div
                                                                                                    class="flex flex-col">
                                                                                                    <p class="text-sm text-gray-500"
                                                                                                        id="privacy-option-description-3"
                                                                                                        contenteditable="false">
                                                                                                        Restrict
                                                                                                        The
                                                                                                        Comments.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <!---option--->
                                                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                                                <button
                                                                                                    x-data="{ toggle2: false }"
                                                                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                                                                    :class="{ 'bg-traivis-300': toggle2 }"
                                                                                                    x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                                                                        :class="{ 'transform translate-x-full ': toggle2 }">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </li>
                                                                                        </div>
                                                                                        <div
                                                                                            class="h-[70px] w-full items-center p-1 text-center sm:w-1/2 lg:w-1/4">
                                                                                            <li
                                                                                                class="items-cente rm-1 flex justify-between border px-2 py-2">

                                                                                                <!---label--->
                                                                                                <div
                                                                                                    class="flex flex-col">
                                                                                                    <p class="text-sm text-gray-500"
                                                                                                        id="privacy-option-description-3"
                                                                                                        contenteditable="false">
                                                                                                        Restrict
                                                                                                        The
                                                                                                        Comments.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <!---option--->
                                                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                                                <button
                                                                                                    x-data="{ toggle2: false }"
                                                                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                                                                    :class="{ 'bg-traivis-300': toggle2 }"
                                                                                                    x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                                                                        :class="{ 'transform translate-x-full ': toggle2 }">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </li>
                                                                                        </div>
                                                                                        <div
                                                                                            class="h-[70px] w-full items-center p-1 text-center sm:w-1/2 lg:w-1/4">
                                                                                            <li
                                                                                                class="items-cente rm-1 flex justify-between border px-2 py-2">

                                                                                                <!---label--->
                                                                                                <div
                                                                                                    class="flex flex-col">
                                                                                                    <p class="text-sm text-gray-500"
                                                                                                        id="privacy-option-description-3"
                                                                                                        contenteditable="false">
                                                                                                        Restrict
                                                                                                        The
                                                                                                        Comments.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <!---option--->
                                                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                                                <button
                                                                                                    x-data="{ toggle2: false }"
                                                                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                                                                    :class="{ 'bg-traivis-300': toggle2 }"
                                                                                                    x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                                                                        :class="{ 'transform translate-x-full ': toggle2 }">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </li>
                                                                                        </div>
                                                                                        <div
                                                                                            class="h-[70px] w-full items-center p-1 text-center sm:w-1/2 lg:w-1/4">
                                                                                            <li
                                                                                                class="items-cente rm-1 flex justify-between border px-2 py-2">

                                                                                                <!---label--->
                                                                                                <div
                                                                                                    class="flex flex-col">
                                                                                                    <p class="text-sm text-gray-500"
                                                                                                        id="privacy-option-description-3"
                                                                                                        contenteditable="false">
                                                                                                        Restrict
                                                                                                        The
                                                                                                        Comments.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <!---option--->
                                                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                                                <button
                                                                                                    x-data="{ toggle2: false }"
                                                                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                                                                    :class="{ 'bg-traivis-300': toggle2 }"
                                                                                                    x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                                                                        :class="{ 'transform translate-x-full ': toggle2 }">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </li>
                                                                                        </div>
                                                                                        <div
                                                                                            class="h-[70px] w-full items-center p-1 text-center sm:w-1/2 lg:w-1/4">
                                                                                            <li
                                                                                                class="items-cente rm-1 flex justify-between border px-2 py-2">

                                                                                                <!---label--->
                                                                                                <div
                                                                                                    class="flex flex-col">
                                                                                                    <p class="text-sm text-gray-500"
                                                                                                        id="privacy-option-description-3"
                                                                                                        contenteditable="false">
                                                                                                        Restrict
                                                                                                        The
                                                                                                        Comments.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <!---option--->
                                                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                                                <button
                                                                                                    x-data="{ toggle2: false }"
                                                                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                                                                    :class="{ 'bg-traivis-300': toggle2 }"
                                                                                                    x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                                                                        :class="{ 'transform translate-x-full ': toggle2 }">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </li>
                                                                                        </div>
                                                                                        <div
                                                                                            class="h-[70px] w-full items-center p-1 text-center sm:w-1/2 lg:w-1/4">
                                                                                            <li
                                                                                                class="items-cente rm-1 flex justify-between border px-2 py-2">

                                                                                                <!---label--->
                                                                                                <div
                                                                                                    class="flex flex-col">
                                                                                                    <p class="text-sm text-gray-500"
                                                                                                        id="privacy-option-description-3"
                                                                                                        contenteditable="false">
                                                                                                        Restrict
                                                                                                        The
                                                                                                        Comments.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <!---option--->
                                                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                                                <button
                                                                                                    x-data="{ toggle2: false }"
                                                                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                                                                    :class="{ 'bg-traivis-300': toggle2 }"
                                                                                                    x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                                                                        :class="{ 'transform translate-x-full ': toggle2 }">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </li>
                                                                                        </div>
                                                                                        <div
                                                                                            class="h-[70px] w-full items-center p-1 text-center sm:w-1/2 lg:w-1/4">
                                                                                            <li
                                                                                                class="items-cente rm-1 flex justify-between border px-2 py-2">

                                                                                                <!---label--->
                                                                                                <div
                                                                                                    class="flex flex-col">
                                                                                                    <p class="text-sm text-gray-500"
                                                                                                        id="privacy-option-description-3"
                                                                                                        contenteditable="false">
                                                                                                        Restrict
                                                                                                        The
                                                                                                        Comments.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <!---option--->
                                                                                                <!-- On: "bg-teal-500", Off: "bg-gray-200"-->
                                                                                                <button
                                                                                                    x-data="{ toggle2: false }"
                                                                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                                                                    :class="{ 'bg-traivis-300': toggle2 }"
                                                                                                    x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                                                                        :class="{ 'transform translate-x-full ': toggle2 }">
                                                                                                    </div>
                                                                                                </button>
                                                                                            </li>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div
                                                                                    class="flex w-1/4 flex-row justify-between">
                                                                                    <button
                                                                                        class="hover:border-pink-500px-6 mr-1 mt-4 w-auto rounded-full border bg-traivis-50 bg-pink-600 p-2 px-4 text-white hover:bg-pink-700">
                                                                                        cancel
                                                                                    </button>
                                                                                    <button
                                                                                        class="mr-1 mt-4 w-auto rounded-full bg-traivis-500 p-2 px-4 text-white hover:bg-traivis-700">
                                                                                        save
                                                                                    </button>
                                                                                </div>
                                                                                </form>
                                                                            </div>
                                                                            <!--END Question Box -->

                                                                        </div>
                                                                    </div>
                                                            </section>
                                                        </div>
                                                        <div class="mt-8 flex flex-col">
                                                            <div
                                                                class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                                <div
                                                                    class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                                    <div
                                                                        class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                                                        <table
                                                                            class="min-w-full divide-y divide-gray-300">
                                                                            <thead class="bg-gray-50">
                                                                                <tr>
                                                                                    <th scope="col"
                                                                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                                                        Name</th>
                                                                                    <th scope="col"
                                                                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                                        Role</th>
                                                                                    <th scope="col"
                                                                                        class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">
                                                                                        Action</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody
                                                                                class="divide-y divide-gray-200 bg-white">
                                                                                @forelse ($users as $user)
                                                                                    <tr>
                                                                                        <td
                                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                                                                            <div
                                                                                                class="flex items-center">
                                                                                                <div
                                                                                                    class="h-10 w-10 flex-shrink-0">
                                                                                                    <img class="h-10 w-10 rounded-full"
                                                                                                        src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ml-4">
                                                                                                    <div
                                                                                                        class="font-medium text-gray-900">
                                                                                                        {{ $user->name }}
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td
                                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                                            {{ $user->roles?->where('social_model_has_roles.business_id', session('business_id'))?->first()?->name }}
                                                                                        </td>

                                                                                        <td
                                                                                            class="relative whitespace-nowrap py-4 text-right text-sm font-medium">

                                                                                            <div
                                                                                                class="flex flex-row justify-end">
                                                                                                <span
                                                                                                    class="mr-4 cursor-pointer rounded-full p-3 hover:bg-traivis-500 hover:fill-white">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        id="Outline"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        width="25"
                                                                                                        height="25">
                                                                                                        <path
                                                                                                            d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                                                                                                        <path
                                                                                                            d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                                                                                                        <path
                                                                                                            d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                                                                                                    </svg>
                                                                                                </span>
                                                                                                <span
                                                                                                    class="mr-4 cursor-pointer rounded-full p-3 hover:bg-traivis-500 hover:fill-white">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        id="Outline"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        width="25"
                                                                                                        height="25">
                                                                                                        <path
                                                                                                            d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z" />
                                                                                                        <path
                                                                                                            d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z" />
                                                                                                    </svg>

                                                                                                </span>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                @empty
                                                                                @endforelse

                                                                                <!-- More people... -->
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--END collapse content-->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--END collapse content-->
                            </div>

                        </div>
                    </div>  --}}
                    <!---->

                    <!--Get paid-->
                    <div class="px-1 text-gray-700">

                        <div class="mt-5 rounded-lg border border-gray-200" x-data="{ open: false }">

                            <!--Collapse Head-->
                            <div @click="open = !open"
                                class="flex cursor-pointer items-center bg-traivis-50 p-4 text-gray-500">

                                <div class="mr-5">
                                </div>

                                <div class="flex-grow font-bold">
                                    Get Paid
                                </div>

                                <div class="ml-5">
                                    <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                        class="h-5 w-5 rotate-0 transition-transform"
                                        fill="currentColor" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                        </path>
                                    </svg>
                                </div>

                            </div>
                            <!--END Collapse Head-->

                            <!--Collapse Box-->
                            <div class="p-0" style="display: none;" x-show="open"
                                x-transition:enter="transition-opacity ease-linear"
                                x-transition:enter-end="opacity-100"
                                x-transition:enter-start="opacity-0"
                                x-transition:leave="transition-opacity ease-linear"
                                x-transition:leave-end="opacity-0"
                                x-transition:leave-start="opacity-100">

                                <!--collapse content-->
                                <div class="m-2 flex flex-wrap items-center bg-white p-4"
                                    style="align-items:baseline ;">

                                    <!--Bank-->
                                    <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li x-data="{ toggle2: false, linked: false }"
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---toggle label--->
                                            <label for="Bank"
                                                :class="toggle2 ? 'text-traivis-500' : 'text-gray-500'"
                                                class="mb-4 flex cursor-pointer flex-row items-center justify-between">
                                                <p class="block flex items-center text-base font-bold">
                                                    <svg class="mr-3 h-5 w-5" fill="currentColor"
                                                        height="512" viewBox="0 0 24 24"
                                                        width="512" data-name="Layer 1">
                                                        <path
                                                            d="m.291 8.552a2.443 2.443 0 0 1 .153-2.566 4.716 4.716 0 0 1 1.668-1.5l7.501-3.904a5.174 5.174 0 0 1 4.774 0l7.5 3.907a4.716 4.716 0 0 1 1.668 1.5 2.443 2.443 0 0 1 .153 2.566 2.713 2.713 0 0 1 -2.416 1.445h-18.584a2.713 2.713 0 0 1 -2.417-1.448zm22.709 13.448a2 2 0 0 0 -2-2v-8h-2v8h-3v-8h-2v8h-4v-8h-2v8h-3v-8h-2v8a2 2 0 0 0 -2 2 1 1 0 0 0 0 2h22a1 1 0 0 0 0-2z" />
                                                    </svg>
                                                    </svg>
                                                    Direct to Local Bank
                                                </p>

                                                <button id="Bank"
                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                    :class="{ 'bg-traivis-500': toggle2 }"
                                                    x-on:click="toggle2 = !toggle2">

                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                        :class="{ 'transform translate-x-full': toggle2 }">
                                                    </div>
                                                </button>

                                            </label>
                                            <!--END toggle label-->

                                            <!---toggle Content--->
                                            <div class="" x-show="toggle2">

                                                <!--Set Account-->
                                                <form :class="linked ? 'hidden' : 'block'"
                                                    class="flex flex-col items-center justify-between space-y-3">

                                                    <input type="number"
                                                        placeholder="Account Number"
                                                        class="form-input h-10 rounded-lg">

                                                    <input type="text" placeholder="Company Name"
                                                        class="form-input h-10 rounded-lg">

                                                    <input type="text" placeholder="First Name"
                                                        class="form-input h-10 rounded-lg">

                                                    <input type="text" placeholder="Last Name"
                                                        class="form-input h-10 rounded-lg">

                                                    <input type="text" placeholder="Name on Card"
                                                        class="form-input h-10 rounded-lg">

                                                    <input type="text" placeholder="Address"
                                                        class="form-input h-10 rounded-lg">

                                                    <input type="text"
                                                        placeholder="City & State / Province"
                                                        class="form-input h-10 rounded-lg">

                                                    <input type="text" placeholder="Country"
                                                        class="form-input h-10 rounded-lg">

                                                    <input type="tel" placeholder="Phone Number"
                                                        class="form-input h-10 rounded-lg">

                                                    <!--Save-->
                                                    <button @click="linked = !linked"
                                                        class="inline-flex items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                                        type="button">
                                                        <svg class="h-5 w-5" fill="currentColor"
                                                            height="512" viewBox="0 0 24 24"
                                                            width="512" data-name="Layer 1">
                                                            <path
                                                                d="m.291 8.552a2.443 2.443 0 0 1 .153-2.566 4.716 4.716 0 0 1 1.668-1.5l7.501-3.904a5.174 5.174 0 0 1 4.774 0l7.5 3.907a4.716 4.716 0 0 1 1.668 1.5 2.443 2.443 0 0 1 .153 2.566 2.713 2.713 0 0 1 -2.416 1.445h-18.584a2.713 2.713 0 0 1 -2.417-1.448zm22.709 13.448a2 2 0 0 0 -2-2v-8h-2v8h-3v-8h-2v8h-4v-8h-2v8h-3v-8h-2v8a2 2 0 0 0 -2 2 1 1 0 0 0 0 2h22a1 1 0 0 0 0-2z" />
                                                        </svg>
                                                        </svg>
                                                        <span
                                                            class="whitespace-nowrap font-bold">Save</span>
                                                    </button>
                                                    <!---->

                                                </form>
                                                <!--END Set Account-->

                                                <!--Linked Account-->
                                                <div :class="linked ? 'block' : 'hidden'"
                                                    class="flex flex-col items-center justify-center space-y-3 font-semibold">
                                                    <p class="font-bold text-green-600">
                                                        Linked Bank Account
                                                    </p>
                                                    <p
                                                        class="rounded-lg border border-gray-300 px-2 py-1 text-lg hover:border-green-500 hover:text-green-600">
                                                        CIB Egypt
                                                    </p>
                                                    <p
                                                        class="rounded-lg border border-gray-300 px-2 py-1 text-lg hover:border-green-500 hover:text-green-600">
                                                        1234 4567 8910 1112
                                                    </p>

                                                    <button @click="linked = false"
                                                        class="inline-flex items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                                        type="button">
                                                        <svg class="h-5 w-5" fill="currentColor"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M22.853,1.148a3.626,3.626,0,0,0-5.124,0L1.465,17.412A4.968,4.968,0,0,0,0,20.947V23a1,1,0,0,0,1,1H3.053a4.966,4.966,0,0,0,3.535-1.464L22.853,6.271A3.626,3.626,0,0,0,22.853,1.148ZM5.174,21.122A3.022,3.022,0,0,1,3.053,22H2V20.947a2.98,2.98,0,0,1,.879-2.121L15.222,6.483l2.3,2.3ZM21.438,4.857,18.932,7.364l-2.3-2.295,2.507-2.507a1.623,1.623,0,1,1,2.295,2.3Z" />
                                                        </svg>
                                                        <span
                                                            class="whitespace-nowrap font-bold">Edit</span>
                                                    </button>
                                                </div>
                                                <!--END Linked Account-->

                                            </div>
                                            <!--toggle Content-->

                                        </li>
                                    </div>
                                    <!--END Bank-->

                                    <!--PayPal-->
                                    <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li x-data="{ toggle2: false, linked: false }"
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---toggle label--->
                                            <label for="PayPal"
                                                :class="toggle2 ? 'text-traivis-500' : 'text-gray-500'"
                                                class="mb-4 flex cursor-pointer flex-row items-center justify-between">
                                                <p class="block flex items-center text-base font-bold">
                                                    <svg class="mr-3 h-5 w-5" fill="currentColor"
                                                        viewBox="0 0 384 512">
                                                        <path
                                                            d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4.7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9.7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z" />
                                                    </svg>
                                                    PayPal
                                                </p>

                                                <button id="PayPal"
                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                    :class="{ 'bg-traivis-500': toggle2 }"
                                                    x-on:click="toggle2 = !toggle2">

                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                        :class="{ 'transform translate-x-full': toggle2 }">
                                                    </div>
                                                </button>

                                            </label>
                                            <!--END toggle label-->

                                            <!---toggle Content--->
                                            <div class="" x-show="toggle2">

                                                <!--Set Account-->
                                                <form :class="linked ? 'hidden' : 'block'"
                                                    class="flex flex-col items-center justify-between space-y-3">

                                                    <input type="email" placeholder="PayBal Email"
                                                        class="form-input h-10 rounded-lg">

                                                    <!--Save-->
                                                    <button @click="linked = !linked"
                                                        class="inline-flex items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                                        type="button">
                                                        <svg class="h-5 w-5" fill="currentColor"
                                                            viewBox="0 0 384 512">
                                                            <path
                                                                d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4.7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9.7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z" />
                                                        </svg>
                                                        <span
                                                            class="whitespace-nowrap font-bold">Connect</span>
                                                    </button>
                                                    <!---->

                                                </form>
                                                <!--END Set Account-->

                                                <!--Linked Account-->
                                                <div :class="linked ? 'block' : 'hidden'"
                                                    class="flex flex-col items-center justify-center space-y-3 font-semibold">
                                                    <p class="font-bold text-green-600">
                                                        Linked PayPal Account
                                                    </p>
                                                    <p
                                                        class="rounded-lg border border-gray-300 px-2 py-1 text-lg hover:border-green-500 hover:text-green-600">
                                                        Maisara@gmail.com
                                                    </p>

                                                    <button @click="linked = false"
                                                        class="inline-flex items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                                        type="button">
                                                        <svg class="h-5 w-5" fill="currentColor"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M22.853,1.148a3.626,3.626,0,0,0-5.124,0L1.465,17.412A4.968,4.968,0,0,0,0,20.947V23a1,1,0,0,0,1,1H3.053a4.966,4.966,0,0,0,3.535-1.464L22.853,6.271A3.626,3.626,0,0,0,22.853,1.148ZM5.174,21.122A3.022,3.022,0,0,1,3.053,22H2V20.947a2.98,2.98,0,0,1,.879-2.121L15.222,6.483l2.3,2.3ZM21.438,4.857,18.932,7.364l-2.3-2.295,2.507-2.507a1.623,1.623,0,1,1,2.295,2.3Z" />
                                                        </svg>
                                                        <span
                                                            class="whitespace-nowrap font-bold">Edit</span>
                                                    </button>
                                                </div>
                                                <!--END Linked Account-->

                                            </div>
                                            <!--toggle Content-->

                                        </li>
                                    </div>
                                    <!--END PayBal-->

                                    <!--Payoneer-->
                                    <div class="w-full p-5 sm:w-1/2 lg:w-1/3">
                                        <li x-data="{ toggle2: false, linked: false }"
                                            class="flex flex-col space-y-2 px-4 py-4 text-gray-500 transition-colors ">

                                            <!---toggle label--->
                                            <label for="payoneer"
                                                :class="toggle2 ? 'text-traivis-500' : 'text-gray-500'"
                                                class="mb-4 flex cursor-pointer flex-row items-center justify-between">
                                                <p class="block flex items-center text-base font-bold">
                                                    <svg class="mr-3 h-5 w-5" fill="currentColor"
                                                        x="0px" y="0px"
                                                        viewBox="0 0 321.4 321.4"
                                                        style="enable-background:new 0 0 321.4 321.4;"
                                                        xml:space="preserve">
                                                        <style type="text/css">
                                                            .st0 {
                                                                fill-rule: evenodd;
                                                                clip-rule: evenodd;
                                                            }
                                                        </style>
                                                        <g>
                                                            <g>
                                                                <path class="st0"
                                                                    d="M160.7,3.2C73.7,3.2,3.2,73.7,3.2,160.7s70.5,157.5,157.5,157.5s157.5-70.5,157.5-157.5S247.6,3.2,160.7,3.2z M160.7,290.6c-71.8,0-130-58.2-130-130s58.2-130,130-130s130,58.2,130,130S232.5,290.6,160.7,290.6z" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    payoneer
                                                </p>

                                                <button id="payoneer"
                                                    class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                    :class="{ 'bg-traivis-500': toggle2 }"
                                                    x-on:click="toggle2 = !toggle2">

                                                    <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                        :class="{ 'transform translate-x-full': toggle2 }">
                                                    </div>
                                                </button>

                                            </label>
                                            <!--END toggle label-->

                                            <!---toggle Content--->
                                            <div class="" x-show="toggle2">

                                                <!--Set Account-->
                                                <form :class="linked ? 'hidden' : 'block'"
                                                    class="flex flex-col items-center justify-between space-y-3">

                                                    <input type="email"
                                                        placeholder="Payoneer Email"
                                                        class="form-input h-10 rounded-lg">

                                                    <!--Save-->
                                                    <button @click="linked = !linked"
                                                        class="inline-flex items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                                        type="button">
                                                        <svg class="h-5 w-5" fill="currentColor"
                                                            x="0px" y="0px"
                                                            viewBox="0 0 321.4 321.4"
                                                            style="enable-background:new 0 0 321.4 321.4;"
                                                            xml:space="preserve">
                                                            <style type="text/css">
                                                                .st0 {
                                                                    fill-rule: evenodd;
                                                                    clip-rule: evenodd;
                                                                }
                                                            </style>
                                                            <g>
                                                                <g>
                                                                    <path class="st0"
                                                                        d="M160.7,3.2C73.7,3.2,3.2,73.7,3.2,160.7s70.5,157.5,157.5,157.5s157.5-70.5,157.5-157.5S247.6,3.2,160.7,3.2z M160.7,290.6c-71.8,0-130-58.2-130-130s58.2-130,130-130s130,58.2,130,130S232.5,290.6,160.7,290.6z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span
                                                            class="whitespace-nowrap font-bold">Connect</span>
                                                    </button>
                                                    <!---->

                                                </form>
                                                <!--END Set Account-->

                                                <!--Linked Account-->
                                                <div :class="linked ? 'block' : 'hidden'"
                                                    class="flex flex-col items-center justify-center space-y-3 font-semibold">
                                                    <p class="font-bold text-green-600">
                                                        Linked Payoneer Account
                                                    </p>
                                                    <p
                                                        class="rounded-lg border border-gray-300 px-2 py-1 text-lg hover:border-green-500 hover:text-green-600">
                                                        Maisara@gmail.com
                                                    </p>

                                                    <button @click="linked = false"
                                                        class="inline-flex items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                                        type="button">
                                                        <svg class="h-5 w-5" fill="currentColor"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M22.853,1.148a3.626,3.626,0,0,0-5.124,0L1.465,17.412A4.968,4.968,0,0,0,0,20.947V23a1,1,0,0,0,1,1H3.053a4.966,4.966,0,0,0,3.535-1.464L22.853,6.271A3.626,3.626,0,0,0,22.853,1.148ZM5.174,21.122A3.022,3.022,0,0,1,3.053,22H2V20.947a2.98,2.98,0,0,1,.879-2.121L15.222,6.483l2.3,2.3ZM21.438,4.857,18.932,7.364l-2.3-2.295,2.507-2.507a1.623,1.623,0,1,1,2.295,2.3Z" />
                                                        </svg>
                                                        <span
                                                            class="whitespace-nowrap font-bold">Edit</span>
                                                    </button>
                                                </div>
                                                <!--END Linked Account-->

                                            </div>
                                            <!--toggle Content-->

                                        </li>
                                    </div>
                                    <!--END payoneer-->

                                </div>
                                <!--END collapse content-->
                            </div>
                            <!--END Collapse box-->

                        </div>
                    </div>
                    <!--END Get paid-->

                    <!--Social Accounts-->
                    <div class="px-1 text-gray-700">

                        <div class="mt-5 rounded-lg border border-gray-200" x-data="{ open: false }">

                            <!--Collapse Head-->
                            <div @click="open = !open"
                                class="flex cursor-pointer items-center bg-traivis-50 p-4 text-gray-500">

                                <div class="mr-5">
                                </div>

                                <div class="flex-grow font-bold">
                                    Connected Social Media
                                </div>

                                <div class="ml-5">
                                    <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                        class="h-5 w-5 rotate-0 transition-transform"
                                        fill="currentColor" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                        </path>
                                    </svg>
                                </div>

                            </div>
                            <!--END Collapse Head-->

                            <!--Collapse Box-->
                            <div class="p-0" style="display: none;" x-show="open"
                                x-transition:enter="transition-opacity ease-linear"
                                x-transition:enter-end="opacity-100"
                                x-transition:enter-start="opacity-0"
                                x-transition:leave="transition-opacity ease-linear"
                                x-transition:leave-end="opacity-0"
                                x-transition:leave-start="opacity-100">

                                @livewire('social-poster', ['business' => $business])

                            </div>
                            <!--END Collapse box-->

                        </div>
                    </div>
                    <!--END Get paid-->
                    

                </div>
            </div>

            <!---->

        </div>
    </section>
</div>
@push('scripts')
<script>
    Livewire.on('copyToClipBoard', textToCopy => {
        navigator.clipboard.writeText(textToCopy)
    
    })
</script>
@endpush
