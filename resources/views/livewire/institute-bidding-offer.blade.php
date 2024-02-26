<div style="margin: 10px">

    @if($current_form=='details')
        <div  class="flex flex-col w-full justify-items-center relative text-gray-500">


            <div class="flex flex-row justify-between items-center flex-wrap font-bold text-xl">
                <div class="items-center flex flex-row mr-5 ">
                    <div class="flex-shrink-0 flex items-center justify-center rounded-full">
                        <img alt="" class="rounded-full w-16 h-16 bg-cover" src="cover.jpg">
                    </div>
                    <div class="px-1   text-left">
                        <p class="  whitespace-pre-wrap">{{$bidding->business->business_name??''}}</p>
                        <p class="  whitespace-pre-wra text-sm">Has invited you to deliver this bid</p>
                    </div>
                </div>
                <p class="text-3xl">${{$bidding->bidding_price}}</p>
            </div>


            <!--bid info-->
            <div class="flex flex-col space-y-2 font-semibold py-5 text-base text-left ">
                <div class="grid grid-cols-6 cursor-pointer border-l border-gray-300  px-2">
                    <div class="col-span-2 truncate ">
                        <div class="mx-auto flex flex-row items-center ">
                            <svg fill="currentColor" class="mr-3 flex-shrink-0  w-5 h-5" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"></path></svg>
                            <span>{{$bidding->course->title??''}}</span>
                        </div>
                    </div>
                    <div class="col-span-2 truncate">
                        <div class="mx-auto flex flex-row items-center ">
                            <svg fill="currentColor" class="mr-3 flex-shrink-0   w-5 h-5" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m23 13h-22a1 1 0 0 1 0-2h22a1 1 0 0 1 0 2zm-4.066-5.874a2.427 2.427 0 0 0 -1.284-2.731l-7.982-3.967a3.3 3.3 0 0 0 -3.268.005 2.809 2.809 0 0 0 -1.4 2.481v3.086a3 3 0 0 0 3 3h8.318a2.538 2.538 0 0 0 2.616-1.874zm-9.306 16.466 8.033-3.992a2.425 2.425 0 0 0 1.273-2.726 2.538 2.538 0 0 0 -2.616-1.874h-8.318a3 3 0 0 0 -3 3v3.085a2.808 2.808 0 0 0 1.4 2.481 3.212 3.212 0 0 0 1.632.434 3.287 3.287 0 0 0 1.596-.408z"></path></svg>
                            <span>Face to Face</span>
                        </div>
                    </div>
                    <div class="col-span-2 truncate ">
                        <div class="mx-auto flex flex-row  flex-shrink-0 items-center ">
                            <svg class="h-5 w-5 flex-shrink-0 " fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512"><g><path d="M0,191.808V384c0.071,58.881,47.786,106.596,106.667,106.667h298.667C464.214,490.596,511.93,442.881,512,384V189.44   L0,191.808z"></path><path d="M405.333,64H266.069c-3.299,0.022-6.56-0.708-9.536-2.133l-67.328-33.792c-8.888-4.426-18.679-6.733-28.608-6.741h-53.931   C47.786,21.404,0.071,69.119,0,128v21.141l509.077-2.368C497.961,98.408,454.959,64.099,405.333,64z"></path></g></svg>
                            <span class="ml-3">Category</span>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 cursor-pointer border-l border-gray-300  px-2">

                    <div class="col-span-2 truncate">
                        <div class="mx-auto flex flex-row items-center ">
                            <svg class="h-5 w-5 flex-shrink-0 " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M32 32C14.3 32 0 46.3 0 64V304v48 80c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V304 152.2c0-18.2-19.4-29.7-35.4-21.1L320 215.4V152.2c0-18.2-19.4-29.7-35.4-21.1L128 215.4V64c0-17.7-14.3-32-32-32H32z"></path></svg>
                            <span class="ml-3">Industry</span>
                        </div>
                    </div>
                    <div class="col-span-2 truncate">
                        <div class="mx-auto flex flex-row items-center ">
                            <svg class="h-5 w-5 flex-shrink-0 " fill="currentColor" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m19 0h-14a5.006 5.006 0 0 0 -5 5v14a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-14a5.006 5.006 0 0 0 -5-5zm-2 10a1 1 0 0 1 -1-1 1 1 0 0 0 -1-1h-2v8h1a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h1v-8h-2a1 1 0 0 0 -1 1 1 1 0 0 1 -2 0 3 3 0 0 1 3-3h6a3 3 0 0 1 3 3 1 1 0 0 1 -1 1z"></path></svg>
                            <span class="ml-3">Language</span>
                        </div>
                    </div>
                </div>


                <div class="mt-[30px] grid grid-cols-6 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2">
                    <div class="col-span-3 relative">
                        <p class="peer"><span class="text-black font-medium text-xs"> From </span>{{$bidding->bidding_start_date}}</p>
                        <p class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">Start Date</p>

                    </div>
                    <div class="col-span-3 relative">
                        <p class="peer"><span class="text-black font-medium text-xs"> To </span>{{$bidding->bidding_end_date}}</p>
                        <p class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">End Date</p>
                    </div>
                </div>

                <div class="py-2 mt-5 flex flex-col cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2 text-justify">
                    <div class="text-sm text-black">
                        Bid Note
                    </div>
                    <div class="truncate whitespace-pre-wrap">
                        {{$bidding->name}}
                    </div>
                </div>
            </div>


            <!--bid files-->
            <div class="flex flex-row justify-between items-center mb-3 truncate">
                <div class="flex flex-row flex-1 border-2 p-5 mr-5 truncate rounded-lg items-center space-x-10 hover:overflow-x-scroll">
                    <a href="#" class="relative hover:text-traivis-500 flex flex-col justify-center">
                        <svg fill="currentColor" class="h-8 peer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z"></path></svg>
                        <p class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">File Name</p>
                    </a>
                    <a href="#" class="relative hover:text-traivis-500 flex flex-col justify-center">
                        <svg fill="currentColor" class="h-8 peer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z"></path></svg>
                        <p class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">File Name</p>
                    </a>
                    <a href="#" class="relative hover:text-traivis-500 flex flex-col justify-center">
                        <svg fill="currentColor" class="h-8 peer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z"></path></svg>
                        <p class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">File Name</p>
                    </a>
                    <a href="#" class="relative hover:text-traivis-500 flex flex-col justify-center">
                        <svg fill="currentColor" class="h-8 peer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z"></path></svg>
                        <p class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">File Name</p>
                    </a>
                    <a href="#" class="relative hover:text-traivis-500 flex flex-col justify-center">
                        <svg fill="currentColor" class="h-8 peer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z"></path></svg>
                        <p class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">File Name</p>
                    </a>
                    <a href="#" class="relative hover:text-traivis-500 flex flex-col justify-center">
                        <svg fill="currentColor" class="h-8 peer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z"></path></svg>
                        <p class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">File Name</p>
                    </a>
                    <a href="#" class="relative hover:text-traivis-500 flex flex-col justify-center">
                        <svg fill="currentColor" class="h-8 peer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z"></path></svg>
                        <p class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">File Name</p>
                    </a>


                </div>
                <a href="#" class="text-traivis-500 hover:text-traivis-400">
                    <svg fill="currentColor" class="h-8" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M18.348,7.23c-1.311-3.151-4.395-5.23-7.848-5.23C5.813,2,2,5.813,2,10.5c0,.551,.053,1.097,.157,1.633-1.347,1.032-2.157,2.646-2.157,4.367,0,3.032,2.243,5.5,5,5.5h11.5c4.136,0,7.5-3.364,7.5-7.5,0-3.467-2.344-6.437-5.652-7.27Zm-4.934,10.184c-.39,.39-.902,.585-1.414,.585s-1.024-.195-1.414-.585l-3.293-3.293,1.414-1.414,2.293,2.293v-6h2v6l2.293-2.293,1.414,1.414-3.293,3.293Z"></path></svg>
                </a>
            </div>
            <!--END bid files-->



            <!--act buttons-->
            <div class="flex flex-row justify-evenly items-center px-3 pt-5 space-x-2">
                <a wire:click="closePopModal()" class="px-3 py-1.5 font-bold text-md rounded-full bg-traivis-50 border border-gray-500 text-gray-500 hover:text-white hover:bg-pink-600 hover:border-pink-500">Reject</a>

                <a wire:click="showApplyForm()" style="cursor: pointer" class="px-3 py-1.5 font-bold text-md rounded-full bg-traivis-500 border border-traivis-500 text-white hover:text-white hover:bg-traivis-600 hover:border-traivis-500">Apply</a>
            </div>
        </div>
    @endif

    @if($current_form=='apply')
        <div class="relative inline-block bg-white rounded-lg  text-left  transform transition-all  align-middle w-full ">


            <h2 class="mx-auto text-center text-xl">My Offer</h2>
            <!--question row-->
            <div class="flex flex-row flex-wrap space-x-2">


                <!--Question title-->
                <div class="w-full h-[120px] flex-col ">
                    <div class="relative group">
                        <textarea wire:model="description" type="text" id="qtitle" required="" class="p-2 w-full border   h-[100px] rounded mt-1 border-gray-300 focus:border-traivis-400 transition-colors peer"></textarea>
                        <label for="qtitle" class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center group-focus-within:font-medium peer-valid:font-medium group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                            Description </label>
                    </div>
                </div>
                <div class="w-1/4 flex-col  ">
                    <div class="relative group">
                        <input wire:model="price"  type="number" id="qtitle" required="" class="p-2 w-full h-10 border rounded mt-1 sm:truncate border-gray-300 focus:border-traivis-400 transition-colors peer">
                        <label for="qtitle" class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center group-focus-within:font-medium peer-valid:font-medium group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                            Price </label>
                    </div>
                </div>
                <!--END Question title-->




            </div>
            <!--end question content-->


            <!-- upload-->
            <p class="mt-4">Upload documents</p>
            <div class=" flex">

                <label class="mt-2 flex justify-center w-full h-[140px] px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                                    <span class="flex items-center space-x-2">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg><span class="font-medium text-gray-600">
                                      Drop files to Attach, or
                                      <span class="text-traivis-600 underline">browse</span>
                                      </span>
                                    </span>
                    <input type="file" name="file_upload" class="hidden"></label>
            </div>
            <!--END upload-->





            <!-- Box buttons -->
            <div class="mt-5 sm:mt-6 flex flex-warp justify-around">

                <button wire:click="closePopModal()" type="button" class="px-3 py-1.5 font-bold text-md rounded-full bg-traivis-50 border border-gray-500 text-gray-500 hover:text-white hover:bg-pink-600 hover:border-pink-500">
                    Cancel
                </button>


                @if($description!="" && $price !="")
                <button wire:click="createOffer()"  type="button" class="px-3 py-1.5 font-bold text-md rounded-full bg-traivis-500 border border-traivis-500 text-white hover:text-white hover:bg-traivis-600 hover:border-traivis-500">
                    Save
                </button>
                @endif

                <p style="color: #0a568c">{{$msg}}</p>
            </div>
            <!--END Box buttons -->

        </div>
    @endif


</div>
