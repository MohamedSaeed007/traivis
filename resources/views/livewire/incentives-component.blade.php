<div>
    <!--content-->
    <section class="">
        <div class="container mx-auto">
            <!--Rank Stats-->
            <div class="w-full lg:w-10/12 flex items-center justify-center mx-auto px-5 py-10">
                <div class="justify-between w-full md:flex space-y-8 mx-auto" x-data="{ stockTicker: stockTicker() }"
                    x-init="stockTicker.renderChart()">
                    <!--Rank Info-->
                    <div class="w-full md:w-4/12 lg:w-5/12 whitespace-nowrap">
                        <div class="text-gray-500">
                            <div class="p-1 mb-2 font-semibold text-lg">
                                My Rank Status
                            </div>
                            <div class="space-y-5 px-3">
                                <div
                                    class="group bg-traivis-50 font-bold relative transition-all flex pl-8 px-3 py-1 cursor-pointer border-l border-gray-300 border-traivis-500">
                                    @if ($business->tier_id == 2)
                                        <img alt=""
                                            class="absolute -left-4 top-0 h-8 rounded-full bg-cover border border-traivis-500"
                                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                    @endif
                                    <p class="w-1/4">
                                        Talented
                                    </p>
                                    <div class="w-full text-right mx-2">
                                        <div class="flex items-center">
                                            <span class="mx-2 w-20">{{ $TalentedPercent }}%</span>
                                            <div class="relative w-full">
                                                <div class="w-full bg-gray-200 rounded-sm h-2">
                                                    <div class="bg-fuchsia-500 h-2 rounded-sm"
                                                        style="width: {{ $TalentedPercent }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Add (relative font-bold) to current Rank -->
                                <div
                                    class="group @if ($TalentedPercent == 100) bg-traivis-50 font-bold @endif relative transition-all flex pl-8 px-3 py-1 cursor-pointer border-l border-gray-300 border-traivis-500">

                                    @if ($business->tier_id == 3)
                                        <img alt=""
                                            class="absolute -left-4 top-0 h-8 rounded-full bg-cover border border-traivis-500"
                                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                    @endif
                                    <p class="w-1/4">
                                        Skilled
                                    </p>
                                    <div class="w-full text-right mx-2">
                                        <div class="flex items-center">
                                            <span class="mx-2 w-20">{{ $SkilledPercent }}%</span>
                                            <div class="relative w-full">
                                                <div class="w-full bg-gray-200 rounded-sm h-2">
                                                    <div class="bg-purple-500 h-2 rounded-sm"
                                                        style="width: {{ $SkilledPercent }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="group @if ($SkilledPercent == 100) bg-traivis-50 font-bold @endif relative transition-all flex pl-8 px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">

                                    @if ($business->tier_id == 4)
                                        <img alt=""
                                            class="absolute -left-4 top-0 h-8 rounded-full bg-cover border border-traivis-500"
                                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                    @endif
                                    <p class="w-1/4">
                                        Expert
                                    </p>
                                    <div class="w-full text-right mx-2">
                                        <div class="flex items-center">
                                            <span class="mx-2 w-20">{{ $ExpertPercent }}%</span>
                                            <div class="relative w-full">
                                                <div class="w-full bg-gray-200 rounded-sm h-2">
                                                    <div class="bg-violet-500 h-2 rounded-sm"
                                                        style="width: {{ $ExpertPercent }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="group @if ($ExpertPercent == 100) bg-traivis-50 font-bold @endif relative transition-all flex pl-8 px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">

                                    @if ($business->tier_id == 5)
                                        <img alt=""
                                            class="absolute -left-4 top-0 h-8 rounded-full bg-cover border border-traivis-500"
                                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                    @endif
                                    <p class="w-1/4">
                                        Master
                                    </p>
                                    <div class="w-full text-right mx-2">
                                        <div class="flex items-center">
                                            <span class="mx-2 w-20">{{ $MasterPercent }}%</span>
                                            <div class="relative w-full">
                                                <div class="w-full bg-gray-200 rounded-sm h-2">
                                                    <div class="bg-indigo-500 h-2 rounded-sm"
                                                        style="width: {{ $MasterPercent }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="group @if ($MasterPercent == 100) bg-traivis-50 font-bold @endif relative transition-all flex pl-8 px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                    @if ($business->tier_id == 6)
                                        <img alt=""
                                            class="absolute -left-4 top-0 h-8 rounded-full bg-cover border border-traivis-500"
                                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                    @endif
                                    <p class="w-1/4">
                                        Partner
                                    </p>
                                    <div class="w-full text-right mx-2">
                                        <div class="flex items-center">
                                            <span class="mx-2 w-20">{{ $PartnerPercent }}%</span>
                                            <div class="relative w-full">
                                                <div class="w-full bg-gray-200 rounded-sm h-2">
                                                    <div class="bg-traivis-500 h-2 rounded-sm"
                                                        style="width: {{ $PartnerPercent }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <!--Rank Graph-->
                    <div class="w-full lg:w-3/5 h-auto lg:pl-10 text-gray-500">
                        <div class="rounded-lg items-center bg-white text-gray-500 hover:scale-[105%] transition-all">
                            <div class="text-center">
                                <!--Start Graph-->
                                <div class="w-full mx-auto " x-data="{ annual: false, graf: true, table: false }">
                                    <!--Graph Content-->
                                    <div class="mb-2">
                                        <!--graph head-->
                                        <div class="flex flex-row items-center justify-evenly space-x-5 mb-6">
                                            <!--Graph Nav-->
                                            <div
                                                class="flex w-fit h-10 max-w-sm  border-4 border-gray-200 rounded-xl font-bold bg-gray-200">
                                                <!--graf-->
                                                <x-tooltip-arrow>
                                                    <button
                                                        class="group relative transition rounded-lg w-full block py-1 px-3 text-sm flex items-center justify-center space-x-2"
                                                        :class="annual == false ? 'bg-white shadow-ios' : 'hover:text-gray-700'"
                                                        @click="annual = false ,graf=true,table=false" type="button">
                                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"
                                                            width="512" height="512">
                                                            <path
                                                                d="M5.5,21A2.5,2.5,0,0,1,3,18.5V1.5A1.5,1.5,0,0,0,1.5,0h0A1.5,1.5,0,0,0,0,1.5v17A5.5,5.5,0,0,0,5.5,24h17A1.5,1.5,0,0,0,24,22.5h0A1.5,1.5,0,0,0,22.5,21Z">
                                                            </path>
                                                            <path
                                                                d="M19.5,18A1.5,1.5,0,0,0,21,16.5v-6a1.5,1.5,0,0,0-3,0v6A1.5,1.5,0,0,0,19.5,18Z">
                                                            </path>
                                                            <path
                                                                d="M7.5,18A1.5,1.5,0,0,0,9,16.5v-6a1.5,1.5,0,0,0-3,0v6A1.5,1.5,0,0,0,7.5,18Z">
                                                            </path>
                                                            <path
                                                                d="M13.5,18A1.5,1.5,0,0,0,15,16.5V5.5a1.5,1.5,0,0,0-3,0v11A1.5,1.5,0,0,0,13.5,18Z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <x-slot name="text">
                                                        Graph
                                                    </x-slot>
                                                </x-tooltip-arrow>
                                                <!--/graf-->

                                                <!--table-->
                                                <x-tooltip-arrow class="block">
                                                    <button
                                                        class="group relative transition rounded-lg w-full block py-1 px-3 text-sm flex items-center justify-center space-x-2"
                                                        :class="annual == true ? 'bg-white shadow-ios' : 'hover:text-gray-700'"
                                                        @click="annual = true ,graf=false,table=true" type="button">
                                                        <svg class="h-5 w-5" fill="currentColor" height="512"
                                                            viewBox="0 0 24 24" width="512"
                                                            xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                                            <path
                                                                d="m0 7h5v4h-5zm5 6h-5v4h5zm6 0h-4v4h4zm0-2v-4h-4v4zm2 0h4v-4h-4zm6 0h5v-4h-5zm-12-6h4v-5h-4zm6-5v5h4v-5zm-2 24v-5h-4v5zm-6-24a5.006 5.006 0 0 0 -5 5h5zm12 19h-4v5h4zm2 5a5.006 5.006 0 0 0 5-5h-5zm-14-5h-5a5.006 5.006 0 0 0 5 5zm8-6v4h4v-4zm6-8h5a5.006 5.006 0 0 0 -5-5zm5 8h-5v4h5z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <x-slot name="text">
                                                        Table
                                                    </x-slot>
                                                </x-tooltip-arrow>
                                                <!--/table-->
                                            </div>
                                            <!--END Graph Nav-->
                                        </div>
                                        <!--END graph head-->

                                        <!--Chart view-->
                                        <div x-show="graf" class="flex items-center justify-center "
                                            style="display: none;">
                                            <!--Chart-->
                                            <div class=" rounded-lg text-gray-900 shadow-xl py-1 px-5 w-full ">
                                                <canvas class="w-full" id="chart"
                                                    style="display: block; box-sizing: border-box; height: 251px; width: 502px;"
                                                    height="251" width="502"></canvas>
                                            </div>
                                            <!--END Chart-->
                                        </div>
                                        <!--END Chart view-->
                                        <!--Table view-->
                                        <div x-show="table" class=" text-gray-900 flex items-center justify-center ">
                                            <table class="w-full table-fixed text-center rounded-lg shadow-xl ">
                                                <!-- Tiers-->
                                                <thead class="   ">
                                                    <tr class=" font-medium ">

                                                        <th class=" px-6 py-3 ">
                                                        </th>

                                                        <!--Talented-->
                                                        <th
                                                            class=" px-6 py-3 {{ $this->business->tier_id == 2 ? 'bg-traivis-50 border-b-4 border-traivis-500' : '' }}">
                                                            <div
                                                                class="group relative flex items-center justify-center whitespace-nowrap">
                                                                <span
                                                                    class="w-2 h-2 bg-fuchsia-500 rounded-full shrink-0"></span>
                                                                <p class="px-2 text-slate-500">Talented</p>
                                                            </div>
                                                        </th>
                                                        <!--/Talented-->

                                                        <!--Skilled-->
                                                        <th
                                                            class=" px-6 py-3 {{ $this->business->tier_id == 3 ? 'bg-traivis-50 border-b-4 border-traivis-500' : '' }} ">
                                                            <div
                                                                class="group relative flex items-center justify-center whitespace-nowrap">
                                                                <span
                                                                    class="w-2 h-2 bg-purple-500 rounded-full shrink-0"></span>
                                                                <p class="px-2 text-slate-500">Skilled</p>
                                                            </div>
                                                        </th>
                                                        <!--/Skilled-->

                                                        <!--Expert-->
                                                        <th
                                                            class=" px-6 py-3 {{ $this->business->tier_id == 5 ? 'bg-traivis-50 border-b-4 border-traivis-500' : '' }}">
                                                            <div
                                                                class="group relative flex items-center justify-center whitespace-nowrap">
                                                                <span
                                                                    class="w-2 h-2 bg-violet-500 rounded-full shrink-0"></span>
                                                                <p class="px-2 text-slate-500">Expert</p>
                                                            </div>
                                                        </th>
                                                        <!--/Expert-->

                                                        <!--Master-->
                                                        <th
                                                            class=" px-6 py-3 {{ $this->business->tier_id == 6 ? 'bg-traivis-50 border-b-4 border-traivis-500' : '' }}">
                                                            <div
                                                                class="group relative flex items-center justify-center whitespace-nowrap">
                                                                <span
                                                                    class="w-2 h-2 bg-indigo-500 rounded-full shrink-0"></span>
                                                                <p class="px-2 text-slate-500">Master</p>
                                                            </div>
                                                        </th>
                                                        <!--/Master-->

                                                        <!--Partner-->
                                                        <th
                                                            class=" px-6 py-3 {{ $this->business->tier_id == 5 ? 'bg-traivis-50 border-b-4 border-traivis-500' : '' }}">
                                                            <div
                                                                class="group relative flex items-center justify-center whitespace-nowrap">
                                                                <span
                                                                    class="w-2 h-2 bg-traivis-500 rounded-full shrink-0"></span>
                                                                <p class="px-2 text-slate-500">Partner</p>
                                                            </div>
                                                        </th>
                                                        <!--/Partner-->

                                                    </tr>
                                                </thead>
                                                <!--/ Tiers-->

                                                <!--Achievements-->
                                                <tbody class="cursor-pointer text-gray-600">
                                                    @foreach ($graphTableData as $key => $achievement)
                                                        <!--Achievement Row-->
                                                        <tr class="hover:bg-slate-50 ">
                                                            <!--Acievement Name-->
                                                            <td
                                                                class="whitespace-nowrap flex flex-wrap xl:flex-nowrap items-center justify-center text-left pl-5 py-3">
                                                                <span>{{ $achievement['displayName'] }}</span>
                                                                <span
                                                                    class="text-xs font-bold px-2">({{ $achievement['unit'] }})</span>
                                                            </td>
                                                            <!--/Acievement Name-->
                                                            @foreach ($achievement['tier'] as $tierKey => $tier)
                                                                <!--Tier Value-->
                                                                <td
                                                                    class="px-6 py-3 whitespace-nowrap {{ $business->tier->name == $tierKey ? 'bg-traivis-50' : '' }}">

                                                            <x-tooltip-arrow direction="up">
                                                                        {{ $achievement['value'] > $tier['allowed'] ? $tier['allowed'] : $achievement['value'] }}
                                                                        {{-- <span
                                                                    class="text-xs">(K)</span> --}}
                                                                <x-slot name="text">
                                                                    My Progress
                                                                </x-slot>
                                                            </x-tooltip-arrow>
                                                            /
                                                            <x-tooltip-arrow direction="up">
                                                                {{$tier['allowed']}}
                                                                <x-slot name="text">
                                                                    Requirement
                                                                        </x-slot>
                                                                    </x-tooltip-arrow>
                                                                </td>
                                                                <!--/Tier Value-->
                                                            @endforeach
                                                        </tr>
                                                        <!--/Achievement Row-->
                                                    @endforeach
                                                </tbody>
                                                <!--/Achievements-->
                                            </table>
                                        </div>
                                        <!--END Table view-->
                                    </div>
                                    <!--END Graph Content-->
                                </div>
                                <!--END Graph-->
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
            <!--End Rank stats-->

            {{-- @if ($CurrentTierIncentives)
                <!--table Section-->
                <div @click.outside="stuOpen = false" @keydown.window.escape.stop="stuOpen = false"
                    class="w-full md:w-4/5 my-10 mx-auto" x-data="{ stuOpen: @entangle('uploadPopup') }">
                    <table class="text-cente w-full">

                        <thead class="border-b-4 border-gray-300 text-gray-500 bg-traivis-50 font-medium">
                            <tr class="">
                                <th class="p-3">
                                    My Incintive
                                </th>
                                <th class="p-3">
                                    Allowed
                                </th>
                                <th class="p-3">
                                    Available
                                </th>
                                <th class="p-3">
                                    <p class="sr-only">Action</p>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="cursor-pointer text-center">
                            @foreach ($CurrentTierIncentives as $incentive)
                                <tr class="hover:bg-traivis-50">
                                    <td class="px-6 py-3 text-left">
                                        {{ $incentive['label'] }}
                                    </td>
                                    <td class="px-6 py-3">
                                        @if ($business->tier_id == 6 && $incentive['label'] == 'Video On TRAIVIS YT')
                                            {{ '3 X 25 ' . $incentive['unit'] }}
                                        @elseif ($business->tier_id == 6 && $incentive['label'] == 'Tweet')
                                            {{ '3 X 48' }} {{ $incentive['unit'] }}
                                        @else
                                            {{ $incentive['allowed'] }} {{ $incentive['unit'] }}
                                        @endif
                                    </td>
                                    <td class="px-6 py-3">
                                        @if ($business->tier_id == 6 && $incentive['label'] == 'Video On TRAIVIS YT')
                                            {{ $incentive['value'] / 25 . ' X 25 ' . $incentive['unit'] }}
                                        @elseif ($business->tier_id == 6 && $incentive['label'] == 'Tweet')
                                            {{ $incentive['value'] / 48 . ' X 48 ' . $incentive['unit'] }}
                                        @else
                                            {{ $incentive['value'] }} {{ $incentive['unit'] }}
                                        @endif
                                    </td>
                                    @if ($incentive['popup'] == 1)
                                        @if ($incentive['value'] > 0)
                                            @if (!App\Models\RewardPost::where('business_id', session('business_id'))->where('reward_key', $incentive['key'])->first())
                                                <td class="px-6 py-3">
                                                    <button @click="stuOpen = !stuOpen"
                                                        wire:click="$set('selectedTierFeatureId','{{ $incentive['key'] }}')"
                                                        class="text-gray-500 hover:text-gray-700 mx-auto"
                                                        href="#" type="button">
                                                        <img src="{{ asset('assets\images\cloud-upload-alt.png') }}"
                                                            width="24" height="24">
                                                    </button>
                                                </td>
                                            @endif
                                        @endif
                                    @endif
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <section x-cloak x-show="stuOpen" x-transition:enter="ease-out duration-100"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">
                        <div aria-labelledby="modal-title" aria-modal="true"
                            class="fixed z-30 inset-0 overflow-y-auto" role="dialog">
                            <div
                                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                <!---over BG---->
                                <div @click="stuOpen = false" aria-hidden="true"
                                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                                </div>
                                <!-- center-->
                                <span aria-hidden="true"
                                    class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                                <!---END over BG---->
                                <!-- popup content-->
                                <div
                                    class="relative inline-block bg-white rounded-lg p-4 text-left shadow-xl transform transition-all my-8 align-middle w-full sm:w-1/3">
                                    <!---->
                                    <div class="">
                                        <div class="w-full h-full overflow-y-auto">
                                            <div class="container p-6 mx-auto rounded-lg bg-white w-full">
                                                <h2 class="m-auto text-center text-2xl text-gray-900">
                                                    Related
                                                    Files</h2>
                                                <!--student summary-->
                                                <div class="flex flex-col items-center">
                                                    <div class="w-full">
                                                        <span x-text="charSive"></span>
                                                        <textarea :class="media ? '' : 'mb-14'"
                                                            class="m-5 pr-10 font-medium leading-none text-gray-600 rounded-lg shadow-sm pl-3 border py-2 text-sm placeholder-gray-500 placeholder:pl-2 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-indigo-500"
                                                            cols="50" placeholder="content of post" rows="8" wire:model="content"></textarea>
                                                        @error('content')
                                                            <div class="text-red-500">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="w-5/6 content-center">
                                                        <label class="mr-0" for="start">upload media
                                                            image/video/gif</label>
                                                        <input accept="gif/*,video/*,image/*" id="Myvideo"
                                                            wire:model="media" name="fileUpload"
                                                            class="datepicker-input border-gray-300 text-sm rounded-lg h-10 hover:border-traivis-500 w-full focus:outline-none my-2 pr-10 font-medium leading-none text-gray-600 bg-white shadow-sm pl-3 p-2 border"
                                                            type="file">
                                                        <x-filepond-chunks-uploader model="media" />
                                                        @error('media')
                                                            <div class="text-red-500">{{ $message }}</div>
                                                        @enderror
                                                        @if ($videoErrorMessage)
                                                            <div class="text-red-500">{{ $videoErrorMessage }}
                                                            </div>
                                                        @endif
                                                        <pre id="infos"></pre>
                                                    </div>
                                                    <div>
                                                        <button wire:click="saveRewardPost()"
                                                            class="rounded-full p-2 w-auto bg-traivis-500 text-white hover:bg-traivis-700 px-6">
                                                            save
                                                        </button>
                                                    </div>

                                                </div>
                                                <!--END student summary-->

                                            </div>
                                        </div>

                                    </div>
                                    <!---->

                                </div>
                                <!--END popup content -->

                            </div>
                        </div>
                    </section>
                </div>
                <!--End Table-->
            @endif --}}
            <div>
                My Current Tier Commission : {{ floatNumber($business->tier->course_fee_commission) }}%
            </div>
            <script src="https://fastly.jsdelivr.net/npm/chart.js"></script>

            <!--Scripts-->
            <script>
                const labelsBarChart = [
                    "Students (N)",
                    "C.Income ($)",
                    "Followers (N)",
                    "P.Courses (N)",
                    "P.Courses (Hrs)",
                    "Blogs (N)",
                    "Notes (N)",
                    "Hints (N)",
                    "F.Courses (Hrs)",
                    "F.Courses (N)",
                ];
                const dataBarChart = {
                    labels: labelsBarChart,
                    datasets: [{
                            label: "My Tier",
                            backgroundColor: "hsl(271,91%,65%)",
                            borderColor: "hsl(271,91%,65%)",
                            data: {{ json_encode($currentTierAchievementsPercentage) }},
                        },
                        {
                            label: "Next Tier",
                            backgroundColor: "hsl(217,91%,60%)",
                            borderColor: "hsl(217,91%,60%)",
                            data: {{ json_encode($nextTierAchievementsPercentage) }},
                        },
                    ],
                };
                const configBarChart = {
                    type: "bar",
                    data: dataBarChart,
                    options: {},
                };
                let stockTicker = function() {
                    return {
                        renderChart: function() {
                            let c = false;
                            Chart.helpers.each(Chart.instances, function(instance) {
                                if (instance.chart.canvas.id == 'chart') {
                                    c = instance;
                                }
                            });
                            if (c) {
                                c.destroy();
                            }
                            let ctx = document.getElementById('chart').getContext('2d');
                            Chart.defaults.scales.linear.min = 0;
                            Chart.defaults.scales.linear.max = 100;
                            let chart = new Chart(ctx, {
                                type: "line",
                                data: dataBarChart,
                                options: {}
                            });
                        }
                    }
                }
            </script>
            <!--End Scripts-->
        </div>
    </section>
    <!--End content-->

</div>

<script>
    var myVideos = [];

    window.URL = window.URL || window.webkitURL;

    document.getElementById('Myvideo').onchange = setFileInfo;

    function setFileInfo() {
        var files = this.files;
        myVideos.push(files[0]);
        var video = document.createElement('video');
        video.preload = 'metadata';

        video.onloadedmetadata = function() {
            window.URL.revokeObjectURL(video.src);
            var duration = video.duration;
            myVideos[myVideos.length - 1].duration = duration;
            updateInfos();
        }

        video.src = URL.createObjectURL(files[0]);
    }


    function updateInfos() {
        var infos = document.getElementById('infos');
        infos.textContent = "";
        for (var i = 0; i < myVideos.length; i++) {
            infos.textContent += myVideos[i].name + " duration: " + myVideos[i].duration + '\n';
        }
    }
</script>
