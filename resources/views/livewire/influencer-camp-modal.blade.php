<section class="p-2 w-full z-[999]"
         x-data="{  Topen : @entangle('tOpen'), stuOpen:false, NewInf:false, EndInf:false, ConfEndInf:false,}"
         @keydown.window.escape.stop="Topen = false"
         @click.outside="Topen = false"
>
    <div class="flex ">
        <!----- popup----------->
        <section x-show="Topen"
                 x-transition:enter="ease-out duration-100"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" class=""
        >


            <div aria-labelledby="modal-title" aria-modal="true" class="fixed z-30 inset-0 overflow-y-auto" role="dialog">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                    <!---over BG---->
                    <div @click="Topen = false" aria-hidden="true" class=" fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                    <!-- center-->
                    <span aria-hidden="true" class="hidden sm:inline-block sm:align-middle sm:h-screen">&ZeroWidthSpace;</span>
                    <!---END over BG---->


                    <!-- popup content-->
                    <div class="relative inline-block bg-gradient-to-t from-indigo-50  to-white rounded-lg p-4 text-left shadow-xl transform transition-all my-8 align-middle w-full sm:w-5/6 lg:w-2/3">

                        <div class="">
                            <div class="w-full h-full ">
                                <div class="container xl:p-6 mx-auto rounded-lg  w-full">

                                    <!--stepper bar-->
                                    <div class="mx-auto flex justify-center items-center text-center py-5">
                                        <ul data-te-stepper-init="" class="relative w-1/2 m-0 flex list-none justify-between overflow-hidden p-0 transition-[height] duration-200 ease-in-out">
                                        </ul>
                                    </div>
                                    <!--/stepper bar-->
                                    <!--Influencer header-->
                                    <div class="text-gray-500 flex flex-row items-center justify-between">
                                        <div class="flex items-center gap-x-4">
                                            <div class="shrink-0 relative">
                                                <svg class="h-10 w-10 fill-current" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"></path></svg>
                                                <svg class="absolute -right-2 -bottom-1 bg-white rounded-full p-1 h-6 w-6 border border-gray-500 fill-current" viewBox="0 0 24 24"><path d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z"></path></svg>
                                            </div>
                                            <div class="flex flex-col">
                                                <a class="whitespace-nowrap font-bold" href="#">{{ $modalCourse?->title }}</a>
                                                <p class="whitespace-nowrap font-medium text-gray-900">Influencer Campaigns</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <p class="whitespace-nowrap flex items-center justify-end gap-x-2 font-bold">
                                                <span class="text-sm">Sale Price</span>
                                                <span class="text-2xl ">${{ $modalCourse?->sale_price }}</span>
                                            </p>
                                            <p class="whitespace-nowrap flex items-center justify-end line-through">
                                                <span class="text-sm">Original Price&nbsp;</span>
                                                <span class="">${{ $modalCourse?->price }}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--/ Influencer header-->
                                    <!--Old campaigns-->
                                    @if(!empty($influencerCampaigns) && !empty(!empty($influencerCampaigns->count())))
                                    <div class="rounded-xl shadow-dashboard border my-5 overflow-x-auto">
                                        <table class="w-full text-center font-bold text-gray-500 text-gray-500">

                                            <thead class=" border-b-4 border-gray-300 ">
                                            <tr class="text-sm">
                                                <th class="px-2 py-3"></th>
                                                <th class="px-2 py-3">Offer Date</th>
                                                <th class="px-2 py-3">Commission</th>
                                                <th class="px-2 py-3">Discount</th>
                                                <th class="px-2 py-3 border-l-4">Success Enrolled</th>
                                                <th class="px-2 py-3">Reached People</th>
                                                <th class="px-2 py-3">Influencers</th>
                                                <th class="px-2 py-3">Status</th>
                                                <th class="px-2 py-3 sr-only">End</th>
                                            </tr>
                                            </thead>
                                            <tbody class="cursor-pointer">
                                                @foreach($influencerCampaigns as $influencerCampaign)
                                                <tr class=" hover:bg-indigo-50">
                                                    <td class=" px-2 py-8 text-center">
                                                        <svg class="mx-3 h-4 w-4 shrink-0  fill-current" viewBox="0 0 24 24"><path d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z"></path></svg>
                                                    </td>
                                                    <td class=" px-2 py-8 text-center font-semibold">
                                                        {{ \Carbon\Carbon::parse($influencerCampaign->offer_end_date)->format('d/m/Y') }}
                                                    </td>
                                                    <td class="px-2 py-8 text-center font-semibold">
                                                        {{ $influencerCampaign->commission }}%
                                                    </td>

                                                    <td class="px-2 py-8 text-center font-semibold">
                                                        {{ $influencerCampaign->student_discount }}%
                                                    </td>
                                                    <td class="px-2 py-8 text-center text-indigo-400 border-l-4">
                                                        {{ !empty($influencerCampaign->influencerOffers) ? $influencerCampaign->influencerOffers->sum('enrolled') : 0}}
                                                    </td>
                                                    <td class="px-2 py-8 text-center">
                                                        {{ !empty($influencerCampaign->influencerOffers) ? $influencerCampaign->influencerOffers->sum('reached') : 0}}
                                                    </td>
                                                    <td class="px-2 py-8 text-center text-indigo-400">
                                                        {{ !empty($influencerCampaign->influencerOffers) ? $influencerCampaign->influencerOffers->count() : 0}}
                                                    </td>

                                                    <td class=" px-2 py-8 text-center font-semibold">
                                                        <div class="flex flex-col justify-center items-center">
                                                            @if(empty($influencerCampaign->end_date))
                                                            <div class="bg-indigo-500 text-sm px-2 rounded-full text-white">Active</div>
                                                            @else
                                                            <div class="bg-red-500 text-sm px-2 rounded-full text-white">Ended</div>
                                                            @endif

                                                        </div>
                                                    </td>

                                                    <td class=" px-2 py-8 text-center  w-48">
                                                        <div class="flex  justify-center">
                                                            @if(empty($influencerCampaign->end_date))
                                                            <div  class="group flex items-center rounded-full px-2 py-1 bg-slate-500 hover:bg-red-500 text-white transition-all">
                                                                <button @click="EndInf = true" class="h-5 flex items-center justify-between space-x-2 text-base">
                                                                    <svg class="rounded-full h-5 w-5 fill-current" viewBox="0 0 24 24"><path d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z"></path></svg>
                                                                    <p class="font-bold">End!</p>
                                                                </button>
                                                            </div>
                                                                <div x-show="EndInf" class="z-40 absolute bottom-1/2 translate-y-1/2 right-1/2 translate-x-1/2 rounded-lg bg-slate-100 border border-gray-200 shadow-lg p-5 px-10" style="display: none;">

                                                                    <div class="flex flex-col justify-center mb-5">
                                                                        <p class=" font-bold my-3 text-lg">Important: Ended Campaign Profit Shar</p>
                                                                        <p class=" font-medium text-sm text-gray-900 text-justify text-center">Ending the current campaign and creating a new one for the same course will still entitle influencers from the previous campaign to profit share for a week after the old campaign ends. Their earnings will apply to students who enrol during this period.
                                                                            Proceed with ending the campaign and creating a new one?</p>
                                                                    </div>

                                                                    <div class="flex items-center justify-evenly text-sm font-bold gap-x-2">
                                                                        <div class="group flex items-center rounded-full px-2 py-1.5 bg-slate-100 hover:bg-slate-200 border border-gray-300 hover:border-gray-400 text-gray-500 hover:text-gray-800 transition-all">
                                                                            <button @click="EndInf = false" class="h-5 flex items-center justify-between space-x-2 text-base">
                                                                                <svg fill="currentColor" class="shrink-0 h-5 w-5" viewBox="0 0 24 24" width="512" height="512"><path d="M16,8a1,1,0,0,0-1.414,0L12,10.586,9.414,8A1,1,0,0,0,8,9.414L10.586,12,8,14.586A1,1,0,0,0,9.414,16L12,13.414,14.586,16A1,1,0,0,0,16,14.586L13.414,12,16,9.414A1,1,0,0,0,16,8Z"></path><path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z"></path></svg>
                                                                                <span>Cancel</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="group flex items-center rounded-full px-2 py-1.5 bg-indigo-500 hover:bg-indigo-600 text-white transition-all">
                                                                            <button @click="EndInf = false"  wire:click="endCampaign({{ $influencerCampaign->id }})"  class="h-5 flex items-center justify-between space-x-2 text-base">
                                                                                <svg fill="currentColor" class="shrink-0 h-5 w-5" viewBox="0 0 24 24" width="512" height="512"><path d="m18.214,9.098c.387.394.381,1.027-.014,1.414l-4.426,4.345c-.783.768-1.791,1.151-2.8,1.151-.998,0-1.996-.376-2.776-1.129l-1.899-1.867c-.394-.387-.399-1.02-.012-1.414.386-.395,1.021-.4,1.414-.012l1.893,1.861c.776.75,2.001.746,2.781-.018l4.425-4.344c.393-.388,1.024-.381,1.414.013Zm5.786,2.902c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-2,0c0-5.514-4.486-10-10-10S2,6.486,2,12s4.486,10,10,10,10-4.486,10-10Z"></path></svg>
                                                                                <span>End and Create New Campaign</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            @else
                                                            <div   class="bg-red-500 text-sm px-2 rounded-full text-white">
                                                                {{ \Carbon\Carbon::parse($influencerCampaign->end_date)->format('d/m/Y') }}</div>
                                                            @endif

                                                        </div>
                                                    </td>
                                            </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
                                    <!--/Old campaigns-->

                                    @if(empty($influencerCampaigns) || $influencerCampaigns->count() <3)
                                    <!--New Inf campaign Button-->
                                    <div class="flex w-full justify-center gap-x-2 mt-12">
                                        <button x-show="!NewInf" @click="NewInf = true" class="flex justify-center items-center gap-x-2 w-fit p-2 px-4 text-white bg-indigo-500 hover:bg-indigo-700 rounded-full ">
                                            <svg class="rounded-full h-6 w-6 fill-current" viewBox="0 0 24 24"><path d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z"></path></svg>
                                            <p class="font-bold">New Campaign!</p>
                                        </button>
                                    </div>
                                    <!--/New Inf campaign Button-->
                                    <!--New Inf campaign Button-->
                                    <div class="flex w-full justify-center gap-x-2 mt-12">
                                        <button x-show="!NewInf" wire:click="openTeaserCampaignModal" class="flex justify-center items-center gap-x-2 w-fit p-2 px-4 text-white bg-indigo-500 hover:bg-indigo-700 rounded-full ">
                                            <svg class="rounded-full h-6 w-6 fill-current" viewBox="0 0 24 24"><path d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z"></path></svg>
                                            <p class="font-bold">Skip</p>
                                        </button>
                                    </div>
                                    <!--/New Inf campaign Button-->


                                    <!--New Inf campaign form-->
                                    <div x-show="NewInf" class=" " style="display: none;">

                                        <!--Campaign form header-->
                                        <div class="text-gray-500">
                                            <div class="flex items-center gap-x-3 relative">
                                                <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z"></path></svg>
                                                <p class="whitespace-nowrap font-bold">New influencer campaign</p>
                                            </div>
                                        </div>
                                        <!--/ Campaign form header-->
                                            <form wire:submit.prevent="storeCampaign()">
                                                @csrf
                                        <div class="flex flex-row justify-between flex-wrap items-center my-5">
                                            <!--Commission-->
                                            <div class="md:w-1/3 w-full p-3 px-5">
                                                <div class="relative group ">
                                                    <input wire:model.lazy="influencerCampaignNew.commission"  type="number" id="Commission"   class="pr-0 w-full rounded-lg mt-1 sm:truncate border-gray-300 focus:border-indigo-400 transition-colors peer">
                                                    <label for="Commission" class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                                                        Commission
                                                    </label>
                                                    <div class="absolute top-3.5 right-6 flex ">
                                                        <span class="inline-flex items-center font-bold"> % </span>
                                                    </div>
                                                    @if ($errors->has('influencerCampaignNew.commission'))
                                                        <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerCampaignNew.commission') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--/Commission-->

                                            <!--Discount-->
                                            <div class="md:w-1/3 w-full p-3 px-5">
                                                <div class="relative group ">
                                                    <input  wire:model.lazy="influencerCampaignNew.student_discount"  type="number" id="Discount"   class="pr-0 w-full rounded-lg mt-1 sm:truncate border-gray-300 focus:border-indigo-400 transition-colors peer">
                                                    <label for="Discount" class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                                                        Discount
                                                    </label>
                                                    <div class="absolute top-3.5 right-6 flex ">
                                                        <span class="inline-flex items-center font-bold"> % </span>
                                                    </div>
                                                    @if ($errors->has('influencerCampaignNew.student_discount'))
                                                        <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerCampaignNew.student_discount') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--/Discount-->
                                            <!--Expiry Date-->
                                            <div class="md:w-1/3 w-full p-3 px-5">
                                                <div class="relative group ">
                                                    <input  wire:model.lazy="influencerCampaignNew.offer_end_date"  type="date" id="Expiry"   class="h-10 w-full rounded-lg mt-1 sm:truncate border-gray-300 text-white valid:text-gray-500 focus-within:text-gray-500 focus:border-indigo-400 transition-colors peer">
                                                    <label for="Expiry" class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 focus-visible: peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                                                        Expiry Date
                                                    </label>
                                                    @if ($errors->has('influencerCampaignNew.offer_end_date'))
                                                        <div  class="text-red-500 block flex w-full items-left  gap-x-0">{{ $errors->first('influencerCampaignNew.offer_end_date') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--/Expiry Date-->
                                            @if(!empty($activeValidation))
                                                <div class=" w-full p-3 px-5">
                                                    <p class="text-center text-red-600">{{ $activeValidation }}</p>
                                                </div>
                                            @endif

                                            <!--save & cancel-->
                                            <div class="w-full flex flex-row justify-evenly mt-12">
                                                <button @click="NewInf = false" class="w-44 p-2 px-4 text-slate-500 bg-slate-100 hover:bg-slate-200 border border-slate-300 rounded-full">
                                                    Cancel
                                                </button>

                                                <button type="submit"  class="w-44 p-2 px-4 text-white bg-indigo-500 hover:bg-indigo-700 rounded-full ">
                                                    Save
                                                </button>
                                            </div>
                                            <!--/ save & cancel-->
                                        </div>
                                            </form>
                                    </div>
                                    <!--/New Inf campaign form-->
                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END popup content -->
                </div>
            </div>
        </section>
        <!-----/ popup----------->
    </div>
</section>