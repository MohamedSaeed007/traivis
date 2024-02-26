<!--Create Tender Slide Bar-->

<div x-data="{ jopen: @entangle('showForm') }" @click.outside="jopen = false" @keydown.window.escape.stop="jopen = false"
    class="fixed inset-auto overflow-hidden z-50" :class="jopen ? 'inset-0' : ''" aria-labelledby="slide-over-title"
    aria-modal="true" role="dialog">

    <div class="absolute inset-0 overflow-hidden">

        <!--add Tender button-->
        <form wire:submit.prevent='addTenderButton'>
            <div @click="jopen = !jopen" class="fixed group bottom-16 right-16 transition-all ease-in-out duration-500"
                :class="jopen ? 'opacity-0 mr 96' : 'opacity-100 mr-0'">

                <button
                    class="items-center flex flex-col text-traivis-500 ring-0 p-2 bg-white rounded-lg transition-colors group-hover:text-gray-500 ">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewbox="0 0 24 24"
                        width="512" height="512" class="h-12 w-12" fill="currentColor" aria-hidden="true">
                        <path
                            d="M23,15h-.667c-.25,0-.498,.019-.745,.057l-7.046-5.284,1.688-1.616c.399-.382,.413-1.016,.031-1.414-.383-.399-1.017-.412-1.414-.031l-4.173,3.995c-.208,.208-.491,.315-.788,.29-.298-.024-.56-.175-.739-.425-.274-.38-.19-.975,.168-1.334l4.703-4.429c.891-.837,2.284-1.042,3.374-.495l2.316,1.158c.69,.345,1.464,.527,2.235,.527h1.056c.553,0,1-.447,1-1s-.447-1-1-1h-1.056c-.463,0-.928-.109-1.342-.316l-2.314-1.158c-1.824-.913-4.153-.574-5.641,.828l-.618,.582-.7-.638c-.919-.837-2.109-1.298-3.39-1.298-.771,0-1.54,.182-2.227,.525l-2.314,1.158c-.415,.207-.88,.316-1.343,.316H1c-.553,0-1,.447-1,1s.447,1,1,1h1.056c.771,0,1.545-.183,2.236-.527l2.316-1.158c1.022-.514,2.458-.375,3.374,.462l.587,.535-2.646,2.492c-1.073,1.072-1.244,2.767-.398,3.938,.52,.723,1.553,1.259,2.444,1.259,.793,0,1.554-.312,2.104-.863l1.006-.963,6.346,4.759c-.031,.022-6.198,4.646-6.198,4.646-.723,.562-1.732,.562-2.47-.011l-6.091-4.568c-.859-.645-1.925-1-3-1h-.667c-.553,0-1,.447-1,1s.447,1,1,1h.667c.645,0,1.284,.213,1.8,.6l6.077,4.558c.725,.564,1.594,.846,2.461,.846,.862,0,1.723-.279,2.437-.835l6.093-4.568c.515-.387,1.154-.6,1.799-.6h.667c.553,0,1-.447,1-1s-.447-1-1-1Z">
                        </path>
                    </svg>
                    <p class="sr-only">
                        Create new Tender</p>
                    <p class="font-bold">+ Tender</p>
                </button>
            </div>
        </form>

        <!--END add Tender button-->
    </div>

    <!-- Background overlay -->
    <div :class="jopen ? 'opacity-50' : 'opacity-0'" @click="jopen = false" x-cloak aria-hidden="true"
        class="absolute inset-0 duration-700 bg-gray-500 transition-all ">
    </div>
    <!---->

    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16 ">

        <!--Slider content-->
        <div class="pointer-events-auto w-screen max-w-md " x-show="jopen" x-cloak
            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:enter-end="translate-x-0" x-transition:enter-start="translate-x-full"
            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:leave-end="translate-x-full" x-transition:leave-start="translate-x-0">

            <div class="flex-1 h-0 overflow-y-auto capitalize">

                <header class="space-y-1 py-6 px-4 bg-traivis-500 sm:px-6">
                    <div class="flex items-center justify-between space-x-3">
                        <h2 class="text-lg leading-7 font-medium text-white" contenteditable="false">
                            {{ $formActionMethod }} a tender</h2>
                        <div class="h-7 flex items-center">
                            <button aria-label="Close panel" @click="jopen=false"
                                class="text-traivis-200 hover:text-white transition ease-in-out duration-150">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                    <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm leading-5 text-traivis-50" contenteditable="false">Get started
                            by filling in the information below to create your new tender.</p>
                    </div>
                </header>

            </div>
            <form class="flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl"
                wire:submit.prevent='{{ $formActionMethod }}'>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                @csrf
                <div class="flex-1 h-0 overflow-y-auto capitalize">

                    <div>
                        <header class="space-y-1 py-6 px-4 bg-traivis-500 sm:px-6">
                            <div class="flex items-center justify-between space-x-3">
                                <h2 class="text-lg leading-7 font-medium text-white" contenteditable="false">
                                    {{ $formActionMethod }} a tender
                                </h2>

                                <div class="h-7 flex items-center">
                                    <button aria-label="Close panel" @click="jopen=false"
                                        class="text-traivis-200 hover:text-white transition ease-in-out duration-150">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </button>
                                </div>

                            </div>
                            <div>
                                @if ($formActionMethod == 'create')
                                    <p class="text-sm leading-5 text-traivis-50" contenteditable="false">Get started
                                        by filling in the information below to create your new tender.</p>
                                @else
                                    <p class="text-sm leading-5 text-traivis-50" contenteditable="false">
                                        Update your tender.</p>
                                @endif

                            </div>
                        </header>
                    </div>



                    <div class="flex-1 flex flex-col justify-between">
                        <div class="px-4 divide-y divide-gray-200 sm:px-6">

                            <!--Start Form-->
                            <div class="space-y-6 pt-6 pb-5 text-gray-500">

                                <div class="relative group ">
                                    <input
                                        class="w-full text-2xl font-bold h-10  rounded-full mt-1 sm:truncate border-gray-300 focus:border-traivis-400 transition-colors peer"
                                        id="Tender" wire:model='name' type="text">
                                    <label
                                        class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center text-2xl font-bold
                                       group-focus-within:font-medium peer-valid:font-medium  group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                        for="Tender">
                                        Tender Name</label>
                                    <div class=" mx-auto px-4 py-3 text-red-700">
                                        @error('name')
                                            <p>{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>


                                <!--Category -->


                                <div class="group w-full flex flex-row items-center h-fit mx-auto ">
                                    <label for="default"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">
                                        <div x-on:click="open"
                                            class="mx-2 group-focus:text-traivis-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500">
                                            <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M32 32C14.3 32 0 46.3 0 64V304v48 80c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V304 152.2c0-18.2-19.4-29.7-35.4-21.1L320 215.4V152.2c0-18.2-19.4-29.7-35.4-21.1L128 215.4V64c0-17.7-14.3-32-32-32H32z">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                    <div wire:ignore style="width: 100%;">
                                        <x-input.select2 wire:model="categories" model="categories" >
                                            @forelse ($categoriesList as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->category_name }}
                                                </option>
                                            @empty
                                            @endforelse
                                        </x-input.select2>
                                        <div class=" mx-auto px-4 py-3 text-red-700">
                                            @error('categories')
                                                <p>{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>

                                </div>

                                <!--END Category -->



                                <!--Industry -->
                                <div class="group w-full flex flex-row items-center h-fit mx-auto ">
                                    <label for="default"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">
                                        <div x-on:click="open"
                                            class="mx-2 group-focus:text-traivis-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500">
                                            <svg class="h-5 w-5" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                                style="enable-background:new 0 0 512 512;" xml:space="preserve"
                                                width="512" height="512">
                                                <g>
                                                    <path
                                                        d="M0,191.808V384c0.071,58.881,47.786,106.596,106.667,106.667h298.667C464.214,490.596,511.93,442.881,512,384V189.44   L0,191.808z">
                                                    </path>
                                                    <path
                                                        d="M405.333,64H266.069c-3.299,0.022-6.56-0.708-9.536-2.133l-67.328-33.792c-8.888-4.426-18.679-6.733-28.608-6.741h-53.931   C47.786,21.404,0.071,69.119,0,128v21.141l509.077-2.368C497.961,98.408,454.959,64.099,405.333,64z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                    </label>
                                    <div wire:ignore style="width: 100%;">
                                        <x-input.select2 wire:model="industries" model="industries" >
                                            @forelse ($industriesList as $industry)
                                                <option value="{{ $industry->id }}">{{ $industry->en_name }}
                                                </option>
                                            @empty
                                            @endforelse
                                        </x-input.select2>
                                        <div class=" mx-auto px-4 py-3 text-red-700">
                                            @error('industries')
                                                <p>{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>




                                </div>
                                <!---->




                                <!--Language -->
                                <div class="group w-full flex flex-row items-center h-fit mx-auto ">

                                    <label for="default"
                                        class="block mt-4 text-sm font-medium text-gray-900 ">
                                        <div x-on:click="open"
                                            class="mx-2 group-focus:text-traivis-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500">
                                            <svg class="h-5 w-5" fill="currentColor" id="Layer_1" height="512"
                                                viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"
                                                data-name="Layer 1">
                                                <path
                                                    d="m19 0h-14a5.006 5.006 0 0 0 -5 5v14a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-14a5.006 5.006 0 0 0 -5-5zm-2 10a1 1 0 0 1 -1-1 1 1 0 0 0 -1-1h-2v8h1a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h1v-8h-2a1 1 0 0 0 -1 1 1 1 0 0 1 -2 0 3 3 0 0 1 3-3h6a3 3 0 0 1 3 3 1 1 0 0 1 -1 1z" />
                                            </svg>
                                        </div>
                                    </label>
                                    <div class="flex justify-center">
                                        <div class="mb-3 w-80">
                                            <select wire:model.defer="language"
                                                class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-traivis-600 focus:outline-none"
                                                aria-label="Default select example">
                                                <option class="capitalize" selected>@lang('choose language')</option>
                                                @forelse ($languagesList as $language)
                                                    <option value="{{ $language->code }}"
                                                        {{ $language == $language->code ? 'selected' : '' }}>
                                                        {{ $language->display_name }}</option>
                                                @empty
                                                @endforelse

                                            </select>
                                            <div class=" mx-auto px-4 py-3 text-red-700">
                                                @error('language')
                                                    <p>{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---->






                                <!--Text area-->
                                <div class="relative group ">
                                    <textarea
                                        class="w-full resize rounded-lg mt-1 border-gray-300 focus:border-traivis-400 transition-colors peer"
                                        cols="100" id="area" maxlength="" wire:model.defer='message' rows="" type="text"></textarea>
                                    <label
                                        class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center
                                                group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                        for="area">
                                        @lang('Description') </label>
                                    <div class=" mx-auto px-4 py-3 text-red-700">
                                        @error('message')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <!--END Text area-->

                                <div class="space-y-2">
                                    <div>
                                    </div>
                                </div>

                                <!--Date-->
                                <div class="flex flex-row justify-between">
                                    <div class="relative group basis-1/2">
                                        <input
                                            class="h-10 w-full rounded-lg mt-1 sm:truncate border-gray-300 text-white valid:text-gray-500 focus-within:text-gray-500 focus:border-traivis-400 transition-colors peer"
                                            id="Strt" wire:model.defer='bidding_start_date' type="date">
                                        <label
                                            class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center
                                                 group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 focus-visible: peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                            for="Strt">
                                            Start Date</label>
                                        <div class=" mx-auto px-4 py-3 text-red-700">
                                            @error('bidding_start_date')
                                                <p>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="relative group basis-1/2">
                                        <input
                                            class="h-10 w-full rounded-lg mt-1 sm:truncate border-gray-300 text-white valid:text-gray-500 focus-within:text-gray-500 focus:border-traivis-400 transition-colors peer"
                                            id="End" type="date" wire:model.defer='bidding_end_date'>
                                        <label
                                            class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center
                                                    group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 focus-visible: peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                            for="End">
                                            End Date</label>
                                        <div class=" mx-auto px-4 py-3 text-red-700">
                                            @error('bidding_end_date')
                                                <p>{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>




                                </div>
                                <!---->


                                <!--upload box-->
                                <div class="w-full md:flex-1 ">
                                    <label class="block text-sm mb-3 font-medium leading-5 text-gray-900"
                                        for="tuploat">Tender Documents</label>


                                    <div class="flex relative items-center justify-center w-full">
                                        @if (!$documents)
                                            <label for="dropzone-file"
                                                class="flex flex-col items-center justify-center w-full  border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                        </path>
                                                    </svg>
                                                    <p class="mb-2 text-sm text-gray-500 "><span
                                                            class="font-semibold">Click to upload</span> or drag and
                                                        drop
                                                    </p>
                                                    <p class="text-xs text-gray-500 ">
                                                        doc,docx,pdf,xls
                                                    </p>
                                                </div>
                                                <input id="dropzone-file" type="file" wire:model='documents'
                                                    multiple class="hidden" />

                                                <div class=" mx-auto px-4 py-3 text-red-700">
                                                    @error('documents')
                                                        <p>{{ $message }}</p>
                                                    @enderror
                                                </div>



                                            </label>
                                        @else
                                            <label for="dropzone-file"
                                                class="flex flex-col items-center justify-center w-full  border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                        </path>
                                                    </svg>
                                                    <p class="mb-2 text-sm text-gray-500 "><span
                                                            class="font-semibold">Click to upload</span> or drag and
                                                        drop
                                                    </p>
                                                    <p class="text-xs text-gray-500 ">
                                                        doc,docx,pdf,xls
                                                    </p>
                                                </div>
                                                <input id="dropzone-file" type="file" wire:model='newDocuments'
                                                    multiple class="hidden" />

                                                <div class=" mx-auto px-4 py-3 text-red-700">
                                                    @error('documents')
                                                        <p>{{ $message }}</p>
                                                    @enderror
                                                </div>



                                            </label>
                                        @endif


                                    </div>
                                    @if ($documents)

                                        <div class="overflow-hidden bg-white shadow sm:rounded-lg">

                                            <div class="border-t border-gray-200">
                                                <dl class="grid grid-cols-12 gap-4">



                                                    <div class="  py-5  sm:px-3">
                                                        <div>
                                                            <dt class="text-sm font-medium text-gray-500">
                                                                Attachments</dt>
                                                        </div>
                                                        <div>
                                                            <dd
                                                                class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                                <ul role="list"
                                                                    class="divide-y divide-gray-200 rounded-md border border-gray-200">
                                                                    @foreach ($documents as $key => $document)
                                                                        {{-- @if ($key == 2)
                                                                            @dd($document->getClientOriginalName())
                                                                        @endif --}}
                                                                        <li
                                                                            class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                                            <div class="flex  flex-1 items-center">
                                                                                <!-- Heroicon name: mini/paper-clip -->
                                                                                <svg class="h-5 w-5 flex-shrink-0 text-gray-400"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 20 20"
                                                                                    fill="currentColor"
                                                                                    aria-hidden="true">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                                                        clip-rule="evenodd" />
                                                                                </svg>
                                                                                <span
                                                                                    class="ml-2 w-50 flex-1 truncate">

                                                                                    @if (is_object($document))
                                                                                        {{ $document->getClientOriginalName() }}
                                                                                    @else
                                                                                        {{ $document['name'] }}
                                                                                    @endif


                                                                                </span>
                                                                            </div>
                                                                            <div class="ml-10 relative flex-shrink-0">
                                                                                @php
                                                                                    if (!is_object($document)) {
                                                                                        // dd('gfdghdg');
                                                                                        $hasName = true;
                                                                                        $id = $document['id'];
                                                                                        $name = $document['name'];
                                                                                    } else {
                                                                                        $hasName = false;
                                                                                    }
                                                                                    
                                                                                @endphp
                                                                                <span
                                                                                    wire:click="{{ $hasName ? "removeMediaLibraryFile($id)" : "removeFileFromUploadedFile($key,1)" }}"
                                                                                    class="absolute inset-y-0 right-0 flex items-center hover:scale-110 mr-4">
                                                                                    <svg class="w-4 h-4 fill-current"
                                                                                        role="button"
                                                                                        viewBox="0 0 20 20">
                                                                                        <path
                                                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                                            clip-rule="evenodd"
                                                                                            fill-rule="evenodd">
                                                                                        </path>
                                                                                    </svg>
                                                                                </span>
                                                                            </div>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </dd>
                                                        </div>



                                                    </div>
                                                </dl>
                                            </div>
                                        </div>
                                    @endif








                                </div>
                                <!---->




                                <div>
                                    <!--Privacy-->
                                    <div class="space-y-5" x-data="{ isSelected: false }">
                                        <p class="block text-sm mb-3 font-medium leading-5 text-gray-900">
                                            Privacy
                                        </p>
                                        <div class="flex justify-start">
                                            <div>
                                                <div class="form-check my-2">
                                                    <input wire:model='privacy'
                                                        {{ $privacy == 'public' ? 'checked' : '' }} value='public'
                                                        @click="isSelected = false"
                                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-traivis-600 checked:border-traivis-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                        type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label inline-block text-gray-800"
                                                        for="flexRadioDefault1">
                                                        Public Tender
                                                    </label>
                                                </div>


                                                <div class="flex flex-col">

                                                    <!--Radio-->
                                                    <div class="group relative flex items-start">
                                                        <div class="absolute flex items-center h-5">
                                                            <input
                                                                aria-describedby="privacy_private-to-project_description"
                                                                class="form-radio h-4 w-4 text-traivis-600 transition duration-150 ease-in-out"
                                                                id="privacy_private-to-project" name="privacy"
                                                                wire:model='privacy' type="radio"
                                                                @click="isSelected = !isSelected"
                                                                 value='specific'>
                                                        </div>

                                                        <div class="pl-7 text-sm leading-5">
                                                            <label class="font-medium text-gray-900"
                                                                for="privacy_private-to-project"
                                                                contenteditable="false">Private to specific contractors
                                                            </label>

                                                            <p
                                                                class="z-10 absolute left-0 -top-10 bg-black text-justify text-white p-2 rounded-lg text-xs hidden group-hover:inline-block peer-focus-within:inline-block">
                                                                Only mentioned contractors would be able to access.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--End radio-->

                                                    <!--contractors-->
                                                    <div class="pl-7" x-show="isSelected">
                                                        <h3 class="text-sm font-medium leading-5 text-gray-500 py-3"
                                                            contenteditable="false">Select Contractors
                                                        </h3>

                                                        <!--Contractors aria-->
                                                        <div class="flex space-x-3 items-center">

                                                            <!--selected contractors-->
                                                            <div>

                                                                @if ($theSelectedBusinessesData)

                                                                    @foreach ($theSelectedBusinessesData as $theselectedBusinessData)
                                                                        <a>
                                                                            <img class="inline-block h-8 rounded-full bg-cover" alt="{{ $theselectedBusinessData->business_name }}"
                                                                                                                        src="{{ asset('assets/images/cover.jpg') }} "
                                                                                                                       >
                                                                            {{-- <img 
                                                                                class="inline-block h-8 rounded-full bg-cover"
                                                                                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.25&amp;w=256&amp;h=256&amp;q=80"> --}}
                                                                        </a>
                                                                    @endforeach

                                                                @endif
                                                            </div>
                                                            <!--END selected contractors-->

                                                            <!--Add Contractors-->
                                                            <!--add new popup-->
                                                            <div class="">
                                                                <div @click.outside="Topen = false"
                                                                    @keydown.window.escape.stop="Topen = false"
                                                                    class="flex justify-center"
                                                                    x-data="{ Topen: false }">

                                                                    <!----- button----------->
                                                                    <button @click="Topen = !Topen"
                                                                        aria-label="Add team member"
                                                                        class="h-9 w-9 transition flex items-center justify-center border border-transparent text-sm font-medium rounded-full shadow-sm focus-within:text-traivis-500 text-gray-500 bg-white border-gray-400 hover:bg-traivis-500 hover:text-white hover:border-traivis-500 focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                                                                        type="button">
                                                                        <svg class="h-5 w-5" fill="currentColor"
                                                                            viewBox="0 0 20 20">
                                                                            <path clip-rule="evenodd"
                                                                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <!-----END button----------->

                                                                    <!-----Start popup window----------->
                                                                    <div class="fixed top-12 left-0 right-0 lg:w-4/6 md:w-4/5 w-full h-fit p-6 pb-0 mx-auto bg-white rounded-2xl shadow-2xl"
                                                                        style="z-index: 99;" x-show="Topen"
                                                                        @keydown.window.escape.stop="Topen = false"
                                                                        @click.outside="Topen = false">
                                                                        <div
                                                                            class="flex flex-col w-full justify-items-center relative text-gray-500">


                                                                            <!--New Tender header-->
                                                                            <div
                                                                                class="flex flex-row justify-between items-center font-bold text-xl">
                                                                                <div
                                                                                    class="items-center flex flex-row mr-5 ">
                                                                                    <div
                                                                                        class="flex-shrink-0 flex items-center justify-center rounded-full">
                                                                                        <img alt=""
                                                                                            class="rounded-full w-16 h-16 bg-cover"
                                                                                            src="{{ asset('assets/images/cover.jpg') }} ">
                                                                                    </div>
                                                                                    <div
                                                                                        class="px-3 truncate text-left space-y-1">
                                                                                        <div
                                                                                            class="mx-auto flex  flex-row items-center">
                                                                                            <p class="mr-2">
                                                                                                {{ $name ? $name : '-' }}
                                                                                            </p>

                                                                                        </div>
                                                                                        <div
                                                                                            class="mx-auto flex flex-row items-center text-sm ">
                                                                                            <svg fill="currentColor"
                                                                                                class="mr-3  w-4 h-4"
                                                                                                id="Layer_1"
                                                                                                height="512"
                                                                                                viewBox="0 0 24 24"
                                                                                                width="512"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                data-name="Layer 1">
                                                                                                <path
                                                                                                    d="m23 13h-22a1 1 0 0 1 0-2h22a1 1 0 0 1 0 2zm-4.066-5.874a2.427 2.427 0 0 0 -1.284-2.731l-7.982-3.967a3.3 3.3 0 0 0 -3.268.005 2.809 2.809 0 0 0 -1.4 2.481v3.086a3 3 0 0 0 3 3h8.318a2.538 2.538 0 0 0 2.616-1.874zm-9.306 16.466 8.033-3.992a2.425 2.425 0 0 0 1.273-2.726 2.538 2.538 0 0 0 -2.616-1.874h-8.318a3 3 0 0 0 -3 3v3.085a2.808 2.808 0 0 0 1.4 2.481 3.212 3.212 0 0 0 1.632.434 3.287 3.287 0 0 0 1.596-.408z">
                                                                                                </path>
                                                                                            </svg>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div
                                                                                    class="flex flex-col text-sm text-right space-y-1 ">
                                                                                    <div class=" relative">
                                                                                        <p class="peer"><span
                                                                                                class="text-black font-medium text-xs">
                                                                                                @lang('From')
                                                                                            </span>{{ $bidding_start_date ? $bidding_start_date : __('Select Start Date') }}
                                                                                        </p>
                                                                                        <p
                                                                                            class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                            @lang('Start Date')</p>

                                                                                    </div>

                                                                                    <div class=" relative">
                                                                                        <p class="peer"><span
                                                                                                class="text-black font-medium text-xs">
                                                                                                @lang('To')
                                                                                            </span>{{ $bidding_end_date ? $bidding_end_date : __('Select End Date') }}
                                                                                        </p>
                                                                                        <p
                                                                                            class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                            @lang('End Date')</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--END New Tender header-->





                                                                            <!-------Assign Privacy window------->
                                                                            <div
                                                                                class="flex flex-1 flex-col justify-center">

                                                                                <!--institutes filter buttons-->
                                                                                <div
                                                                                    class="w-full flex my-5 pb-3 justify-between text-sm ">



                                                                                    <!--Category -->
                                                                                    <div
                                                                                        class="group w-1/3 min-w-[33%] flex flex-row items-center h-fit px-1  ">


                                                                                        <div
                                                                                            class="flex w-full relative">

                                                                                            <label for="default"
                                                                                                class="block mt-1 text-sm font-medium text-gray-900 ">
                                                                                                <div x-on:click="open"
                                                                                                    class="mx-2 group-focus:text-traivis-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500">
                                                                                                    <svg class="h-5 w-5"
                                                                                                        fill="currentColor"
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        viewBox="0 0 512 512">
                                                                                                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                                        <path
                                                                                                            d="M32 32C14.3 32 0 46.3 0 64V304v48 80c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V304 152.2c0-18.2-19.4-29.7-35.4-21.1L320 215.4V152.2c0-18.2-19.4-29.7-35.4-21.1L128 215.4V64c0-17.7-14.3-32-32-32H32z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </label>
                                                                                            <div wire:ignore
                                                                                                style="width: 100%;">
                                                                                                <select
                                                                                                    style="width: 100%; padding: 12px 20px;border-radius:10px"
                                                                                                    class="form-control categoriesFilter "
                                                                                                    wire:model.defer="categoriesFilter"
                                                                                                    name="categoriesFilter[]"
                                                                                                    multiple="multiple">

                                                                                                    @forelse ($categoriesList as $category)
                                                                                                        <option
                                                                                                            value="{{ $category->id }}">
                                                                                                            {{ $category->category_name }}
                                                                                                        </option>
                                                                                                    @empty
                                                                                                    @endforelse

                                                                                                </select>
                                                                                                <div
                                                                                                    class=" mx-auto px-4 py-3 text-red-700">
                                                                                                    @error('categories')
                                                                                                        <p>{{ $message }}
                                                                                                        </p>
                                                                                                    @enderror

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <!--multiselect js-->

                                                                                    <!--END Category -->



                                                                                    <!--Industry -->
                                                                                    <div
                                                                                        class="group w-1/3 min-w-[33%] flex flex-row items-center h-fit px-1">


                                                                                        <div
                                                                                            class="flex w-full relative">


                                                                                            <label for="default"
                                                                                                class="block mt-1 text-sm font-medium text-gray-900 ">
                                                                                                <div x-on:click="open"
                                                                                                    class="mx-2 group-focus:text-traivis-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500">
                                                                                                    <svg class="h-5 w-5"
                                                                                                        fill="currentColor"
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                        version="1.1"
                                                                                                        id="Capa_1"
                                                                                                        x="0px"
                                                                                                        y="0px"
                                                                                                        viewBox="0 0 512 512"
                                                                                                        style="enable-background:new 0 0 512 512;"
                                                                                                        xml:space="preserve"
                                                                                                        width="512"
                                                                                                        height="512">
                                                                                                        <g>
                                                                                                            <path
                                                                                                                d="M0,191.808V384c0.071,58.881,47.786,106.596,106.667,106.667h298.667C464.214,490.596,511.93,442.881,512,384V189.44   L0,191.808z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                d="M405.333,64H266.069c-3.299,0.022-6.56-0.708-9.536-2.133l-67.328-33.792c-8.888-4.426-18.679-6.733-28.608-6.741h-53.931   C47.786,21.404,0.071,69.119,0,128v21.141l509.077-2.368C497.961,98.408,454.959,64.099,405.333,64z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </label>
                                                                                            <div wire:ignore.self
                                                                                                style="width: 100%;">
                                                                                                <select
                                                                                                    style="width: 100%; padding: 12px 20px;border-radius:10px"
                                                                                                    class="industriesFilter form-control  "
                                                                                                    wire:model="industriesFilter"
                                                                                                    name="industriesList[]"
                                                                                                    multiple="multiple">
                                                                                                    @forelse ($industriesList as $industry)
                                                                                                        <option
                                                                                                            value="{{ $industry->id }}">
                                                                                                            {{ $industry->en_name }}
                                                                                                        </option>
                                                                                                    @empty
                                                                                                    @endforelse

                                                                                                </select>
                                                                                                <div
                                                                                                    class=" mx-auto px-4 py-3 text-red-700">
                                                                                                    @error('industries')
                                                                                                        <p>{{ $message }}
                                                                                                        </p>
                                                                                                    @enderror

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>




                                                                                    <!--Language -->
                                                                                    <div>
                                                                                        <div
                                                                                            class="group w-1/3 min-w-[33%] flex flex-row items-center h-fit px-1 ">




                                                                                            <div
                                                                                                class="flex w-full relative">

                                                                                                <label for="default"
                                                                                                    class="block mb-4 text-sm font-medium text-gray-900 ">
                                                                                                    <div x-on:click="open"
                                                                                                        class="mx-2 group-focus:text-traivis-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500">
                                                                                                        <svg class="h-5 w-5"
                                                                                                            fill="currentColor"
                                                                                                            id="Layer_1"
                                                                                                            height="512"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            width="512"
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            data-name="Layer 1">
                                                                                                            <path
                                                                                                                d="m19 0h-14a5.006 5.006 0 0 0 -5 5v14a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-14a5.006 5.006 0 0 0 -5-5zm-2 10a1 1 0 0 1 -1-1 1 1 0 0 0 -1-1h-2v8h1a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h1v-8h-2a1 1 0 0 0 -1 1 1 1 0 0 1 -2 0 3 3 0 0 1 3-3h6a3 3 0 0 1 3 3 1 1 0 0 1 -1 1z" />
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </label>
                                                                                                <div
                                                                                                    class="flex justify-center">
                                                                                                    <div
                                                                                                        class="mb-3 w-80">
                                                                                                        <select
                                                                                                            wire:model.defer="languageFilter"
                                                                                                            class="form-select appearance-none
                                                                                                                block
                                                                                                                w-full
                                                                                                                px-3
                                                                                                                py-1.5
                                                                                                                text-base
                                                                                                                font-normal
                                                                                                                text-gray-700
                                                                                                                bg-white bg-clip-padding bg-no-repeat
                                                                                                                border border-solid border-gray-300
                                                                                                                rounded
                                                                                                                transition
                                                                                                                ease-in-out
                                                                                                                m-0
                                                                                                                focus:text-gray-700 focus:bg-white focus:border-traivis-600 focus:outline-none"
                                                                                                            aria-label="Default select example">
                                                                                                            <option
                                                                                                                class="capitalize"
                                                                                                                selected>
                                                                                                                @lang('choose language')
                                                                                                            </option>
                                                                                                            @forelse ($languagesList as $language)
                                                                                                                <option
                                                                                                                    value="{{ $language->code }}"
                                                                                                                    {{ $this->language == $language->code ? 'selected' : '' }}>
                                                                                                                    {{ $language->display_name }}
                                                                                                                </option>
                                                                                                            @empty
                                                                                                            @endforelse

                                                                                                        </select>
                                                                                                        <div
                                                                                                            class=" mx-auto px-4 py-3 text-red-700">
                                                                                                            @error('language')
                                                                                                                <p>{{ $message }}
                                                                                                                </p>
                                                                                                            @enderror
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>

                                                                                        </div>

                                                                                    </div>



                                                                                </div>
                                                                                <!--END institutes filter buttons-->




                                                                                <!--Contractors Area-->
                                                                                <div
                                                                                    class="relative w-full text-sm text-left overflow-y-scroll h-96">

                                                                                    <!--Search-->
                                                                                    <div
                                                                                        class="sticky bg-white h-14 top-0 p-1 w-full flex flex-row py-2 items-center justify-between space-x-3">

                                                                                        <div
                                                                                            class="flex flex-row items-center space-x-3 text-sm">
                                                                                            <button type="reset"
                                                                                                class="whitespace-nowrap px-2 py-1 font-semibold rounded-full border border-gray-300 hover:text-traivis-500 hover:border-traivis-500 focus-within:text-traivis-500 focus-within:border-traivis-500">
                                                                                                Select All
                                                                                            </button>
                                                                                            <button type="reset"
                                                                                                class="whitespace-nowrap px-2 py-1 font-semibold rounded-full border border-gray-300 hover:text-traivis-500 hover:border-traivis-500 focus-within:text-traivis-500 focus-within:border-traivis-500">
                                                                                                Reset
                                                                                            </button>
                                                                                        </div>

                                                                                        <div
                                                                                            class="relative w-full md:w-1/2">
                                                                                            <label class="sr-only"
                                                                                                for="WFsearch">Search
                                                                                                Workforce</label>
                                                                                            <div
                                                                                                class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                                                                                <svg aria-hidden="true"
                                                                                                    class="h-5 w-5 text-gray-400"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        clip-rule="evenodd"
                                                                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                                                                        fill-rule="evenodd">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <input
                                                                                                class="  block bg-white text-gray-800 border border-gray-300 py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors    rounded-lg w-full"
                                                                                                id="WFsearch"
                                                                                                placeholder="Search Workforce"
                                                                                                type="search"
                                                                                                wire:model='nameFilter'>
                                                                                        </div>

                                                                                    </div>
                                                                                    <!--END search-->

                                                                                    <!--Contractors List-->

                                                                                    <div class="">
                                                                                        <fieldset class="">

                                                                                            <ul
                                                                                                class="flex flex-row flex-wrap items-center whitespace-nowrap gap-y-8 justify-evenly">
                                                                                                
                                                                                                
                                                                                                @forelse ($businesses as $business)
                                                                                                    <li
                                                                                                        class="lg:w-1/4 md:w-1/3 sm:w-1/2 w-full px-2">
                                                                                                        <input
                                                                                                            id="react-option{{ $business->id }}"
                                                                                                            class="hidden peer"
                                                                                                            wire:model="selectedBusinesses"
                                                                                                            wire:loading.attr="disabled"
                                                                                                            value="{{ $business->id }}"
                                                                                                            type="checkbox"
                                                                                                            name="{{ $business->business_name }}"
                                                                                                            >
                                                                                                       

                                                                                                        <label
                                                                                                            for="react-option{{ $business->id }}"
                                                                                                            class="block bg-white shadow-dashboard pt-3 border-t border-b-2 border-gray-300 rounded-md group hover:border-traivis-300 transition-colors peer-checked:bg-traivis-50 peer-checked:border-traivis-600 peer-checked:border-2  ">

                                                                                                            <div
                                                                                                                class="">
                                                                                                                <div
                                                                                                                    class="flex justify-center items-center mt-2 mb-8 px-4 border-b flex-col  border-gray-100 ">
                                                                                                                    <img class="my-4 h-16 w-16 rounded-full object-cover"
                                                                                                                        src="{{ asset('assets/images/cover.jpg') }} "
                                                                                                                        alt="">
                                                                                                                    <div
                                                                                                                        class="min-w-0 flex flex-row flex-1 items-center justify-center ">
                                                                                                                        <h1
                                                                                                                            class="font-bold truncate mr-2 text-gray-500 ">
                                                                                                                            {{ $business->business_name }}
                                                                                                                        </h1>
                                                                                                                        <svg class="my-auto h-5 text-traivis-500  transition-colors"
                                                                                                                            width="24"
                                                                                                                            height="24"
                                                                                                                            viewBox="0 0 24 24"
                                                                                                                            fill="currentColor">
                                                                                                                            <path
                                                                                                                                d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"
                                                                                                                                class="">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                    </div>

                                                                                                                  
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </label>
                                                                                                    </li>
                                                                                                @empty
                                                                                                    <div
                                                                                                        class="flex h-screen">
                                                                                                        <div
                                                                                                            class="m-auto">
                                                                                                            <p
                                                                                                                class="mt-auto h-56 text-center w-full text-zinc-800 font-medium font-semibold">
                                                                                                                @lang('No Items Found')
                                                                                                            </p>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                @endforelse 




                                                                                            </ul>

                                                                                        </fieldset>
                                                                                    </div>
                                                                                    <!--END Contractors List-->


                                                                                </div>
                                                                                <!--End Contractors Area-->

                                                                            </div>
                                                                            <!-------Assign Privacy window------->



                                                                            <!--act buttons-->
                                                                            <div x-show="false"
                                                                                class="flex flex-row justify-evenly items-center px-3 py-5 space-x-2">
                                                                                <a href="#"
                                                                                    class="px-3 py-1.5 font-bold text-md rounded-full bg-traivis-50 border border-gray-500 text-gray-500 hover:text-traivis-500 hover:bg-traivis-50 hover:border-traivis-500">Cancel</a>

                                                                                <a href="#"
                                                                                    class="px-3 py-1.5 font-bold text-md rounded-full bg-traivis-500 border border-traivis-500 text-white hover:text-white hover:bg-traivis-600 hover:border-traivis-500">Assign</a>
                                                                            </div>
                                                                            <!---->
                                                                        </div>

                                                                    </div>
                                                                    <div x-show="Topen"
                                                                        class="bg-black opacity-50 inset-0 fixed h-screen z-50">
                                                                    </div>
                                                                    <!-----END popup window----------->

                                                                </div>
                                                            </div>
                                                            <!--End add new popup-->
                                                            <!--Add Contractors-->

                                                        </div>
                                                        <!--END Contractors aria-->

                                                    </div>
                                                    <!--End contractors-->


                                                </div>




                                                <div class="form-check my-2">
                                                    <input wire:model='privacy' value='private'
                                                        {{ $privacy == 'private' ? 'checked' : '' }}
                                                        @click="isSelected = false"
                                                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-traivis-600 checked:border-traivis-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                        type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label inline-block text-gray-800"
                                                        for="flexRadioDefault1">
                                                        Private Tender
                                                    </label>
                                                    @if ($privacy == 'private')
                                                        @if ($formActionMethod == 'create')
                                                            <div>
                                                                You Must Copy link After Creation From Link Column
                                                            </div>
                                                        @else
                                                            <div class="my-4 lable">Copy Link:</div>
                                                            <div class="bg-white max-w-sm p-5 rounded shadow-md mb-3">
                                                                <input
                                                                    class="border-traivis-500 border-solid border rounded py-2 px-4"
                                                                    type="text" placeholder="Enter some text"
                                                                    id="copyMe" />
                                                                <button id='copy-btn'
                                                                    class="bg-traivis-500 hover:bg-traivis-700 text-white font-bold py-2 px-4 border border-traivis-700 rounded"
                                                                   >
                                                                    Copy
                                                                </button>
                                                            </div>
                                                           



                                                        @endif

                                                    @endif

                                                </div>
                                            </div>
                                        </div>


                                        <div class=" mx-auto px-4 py-3 text-red-700">
                                            @error('privacy')
                                                <p>{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                    <!--END Privacy-->
                                </div>




                            </div>
                            <!--End form-->

                            <div class="space-y-4 pt-4 pb-6">
                                <div class="flex text-sm leading-5">
                                    <a class="group space-x-2 inline-flex items-center text-gray-500 hover:text-gray-900 transition ease-in-out duration-150"
                                        href="#">
                                        <svg class="h-5 w-5 text-gray-400 group-hover:text-gray-500 transition ease-in-out duration-150"
                                            fill="currentColor" viewbox="0 0 20 20">
                                            <path clip-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                        <span>Learn more about sharing</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--fixed buttons-->
                <div class="flex-shrink-0 px-4 py-4 space-x-4 flex justify-end">
                    <div class="inline-flex rounded-md shadow-sm">
                        <button @click="jopen=false"
                            class="py-2 px-4 border border-gray-300 rounded-full text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-gray-500 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out"
                            type="button">Cancel
                        </button>
                    </div>

                    <div class="inline-flex rounded-md shadow-sm">
                        <button
                            class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-full text-white bg-traivis-600 hover:bg-traivis-500 focus:outline-none focus:border-traivis-500 focus:shadow-outline-blue active:bg-traivis-700 transition duration-150 ease-in-out"
                            type="submit">Publish
                        </button>
                    </div>
                </div>
                <!---->


            </form>
        </div>
        <!--END Slider content-->


    </div>
</div>

<script>
    const copyText = document.querySelector("#copyMe");
    const showText = document.querySelector("p");

    const copyMeOnClipboard = () => {
        copyText.select();
        copyText.setSelectionRange(0, 99999); // used for mobile phone
        document.execCommand("copy");
        showText.innerHTML = `${copyText.value} is copied`
        setTimeout(() => {
            showText.innerHTML = ""
        }, 1000);
    }

