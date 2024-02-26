@extends('homes.social.layouts.base')
@section('title', __('Instructor Dashboard'))

@section('body')
@include('homes.social.business.navbars.instructor')

@can('managing_mkt_portals')
<!-- dash Content -->
<div class="flex w-full flex-col px-4 sm:px-6 lg:px-8">

    <!--head-->
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Marketing Manager</h1>
            <p class="mt-2 text-sm text-gray-700">Teaser & Ads Campaigns</p>
        </div>
    </div>
    <!--END header-->

    <!--content-->
    <section class=""
        x-data="{qopen:false, Topen:false, stuOpen:false, NewInf:false, EndInf:false, ConfEndInf:false, CountUp:false,}">
        <div class="container mx-auto">

            <!--Start Marketing Manager-->
            <div class="flex items-start flex-wrap mt-5 w-full">

                <!--Total Count Stats-->
                <div class="w-full xl:w-1/2 h-auto p-3 flex flex-col md:flex-row items-center gap-x-5">

                    @livewire('influencer-mkt-deshboard')

                    <!--Teaser Campaigns-->
                    <div
                        class="w-full md:w-1/2  group/s p-5 shadow-sm hover:shadow-lg rounded-lg shadow-dashboard items-center text-gray-500 hover:scale-[105%] focus-within:bg-white hover:text-indigo-500 focus-within:text-indigo-500 transition-all">
                        <div class="flex justify-center">

                            <div class="w-3/5 p-5 flex flex-col text-center justify-center">
                                <p class="w-full self-center font-semibold text-6xl mx-auto tracking-tighter p-1">
                                    {{$count_campaigins}}
                                </p>
                                <p class="w-full text-3xl p-1">Teaser Campaigns</p>
                            </div>
                            <div class="w-2/5 p-5 mx-6 space-y-8 whitespace-nowrap">
                                <a href="#"
                                    class="w-[140px] px-3 py-1 flex justify-between text-slate-500 font-bold bg-white items-center rounded-full transition-all border border-slate-300 hover:text-slate-400 focus:text-slate-400 hover:border-slate-400 focus:border-slate-400 focus:bg-slate-50">
                                    <svg class="h-4 w-4 group-hover/s:text-slate-400 shrink-0" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z">
                                        </path>
                                    </svg>
                                    <div class="w-full pl-2 justify-between flex items-center gap-x1">
                                        <p class="text-sm">In Progress </p>
                                        <p class="">
                                            {{$count_on_going}}
                                        </p>
                                    </div>
                                </a>
                                <a href="#"
                                    class="w-[140px] px-3 py-1 flex justify-between text-slate-500 font-bold bg-white items-center rounded-full transition-all border border-slate-300 hover:text-green-600 focus:text-green-600 hover:border-green-300 focus:border-green-600 focus:bg-green-50">
                                    <svg class="h-4 w-4 group-hover/s:text-green-600 shrink-0" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                        </path>
                                    </svg>
                                    <div class="w-full pl-2 justify-between flex items-center gap-x1">
                                        <p class="text-sm">Published </p>
                                        <p class="">{{$count_finished}}</p>
                                    </div>
                                </a>
                                <a href="#"
                                    class="w-[140px] px-3 py-1 flex justify-between text-slate-500 font-bold bg-white items-center rounded-full transition-all border border-slate-300 hover:text-red-500 focus:text-red-500 hover:border-red-300 focus:border-red-500 focus:bg-red-50">
                                    <svg class="h-4 w-4 group-hover/s:text-red-600 shrink-0" fill="currentColor" x="0px"
                                        y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
                                        <g>
                                            <path
                                                d="M256,512c141.385,0,256-114.615,256-256S397.385,0,256,0S0,114.615,0,256C0.153,397.322,114.678,511.847,256,512z    M234.667,128c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333v170.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V128z M256,384c11.782,0,21.333,9.551,21.333,21.333 s-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333S244.218,384,256,384z">
                                            </path>
                                        </g>
                                    </svg>
                                    <div class="w-full pl-2 justify-between flex items-center gap-x1">
                                        <p class="text-sm">Declined </p>
                                        <p class="">{{$count_finished}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/ Teaser Campaigns-->

                </div>
                <!---->

                <!--Graph Stats-->
                <div class="w-full xl:w-1/2 h-auto p-3 text-gray-500">
                    <div class="p-5 rounded-lg items-center bg-white text-gray-500 hover:scale-[105%] transition-all">
                        <!--<h3 class="m-auto text-center text-2xl text-gray-900">Slots</h3>-->
                        <div class="text-center py-4">
                            <!--Start Graph-->
                            <div class="w-full mx-auto p-4" x-data="{ annual: false, graf: true, table: false }">
                                <!--Graph stats Content-->
                                <div class="mb-2" x-data="{ cardOpen: false, cardData: cardData() }">
                                    <!--graph head-->
                                    <div class="flex flex-row items-center justify-evenly space-x-5 mb-6">
                                        <!--Slots count-->
                                        <div class="flex flex-row items-center space-x-2 text-gray-500">
                                            <h4 class="text-3xl lg:text-4xl font-semibold leading-tight inline-block">
                                                {{$totalSlots}}
                                            </h4>
                                            <h3 class="text-xl font-semibold leading-tight">Slots</h3>
                                        </div>
                                        <!--Slots count-->
                                        <!--Graph Nav-->
                                        <div
                                            class="flex w-fit h-10 max-w-sm border-4 border-gray-200 rounded-xl font-bold bg-gray-200">

                                            <x-tooltip-arrow>
                                                <button class="group relative transition rounded-lg w-full block py-1 px-3 text-sm flex items-center justify-center space-x-2"
                                                        :class="annual == false ? 'bg-white shadow-ios' :
                                                        'hover:text-gray-700'"
                                                        @click="annual = false ,graf=true,table=false" type="button">
                                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" width="512"
                                                         height="512">
                                                        <path
                                                                d="M5.5,21A2.5,2.5,0,0,1,3,18.5V1.5A1.5,1.5,0,0,0,1.5,0h0A1.5,1.5,0,0,0,0,1.5v17A5.5,5.5,0,0,0,5.5,24h17A1.5,1.5,0,0,0,24,22.5h0A1.5,1.5,0,0,0,22.5,21Z" />
                                                        <path
                                                                d="M19.5,18A1.5,1.5,0,0,0,21,16.5v-6a1.5,1.5,0,0,0-3,0v6A1.5,1.5,0,0,0,19.5,18Z" />
                                                        <path
                                                                d="M7.5,18A1.5,1.5,0,0,0,9,16.5v-6a1.5,1.5,0,0,0-3,0v6A1.5,1.5,0,0,0,7.5,18Z" />
                                                        <path
                                                                d="M13.5,18A1.5,1.5,0,0,0,15,16.5V5.5a1.5,1.5,0,0,0-3,0v11A1.5,1.5,0,0,0,13.5,18Z" />
                                                    </svg>
                                                </button>
                                                <x-slot name="text">
                                                    Graph
                                                </x-slot>
                                            </x-tooltip-arrow>

                                            <x-tooltip-arrow>
                                                <button class="group relative transition rounded-lg w-full block py-1 px-3 text-sm flex items-center justify-center space-x-2"
                                                        :class="annual == true ? 'bg-white shadow-ios' :
                                                        'hover:text-gray-700'"
                                                        @click="annual = true ,graf=false,table=true" type="button">
                                                    <svg class="h-5 w-5" fill="currentColor" height="512"
                                                         viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"
                                                         data-name="Layer 1">
                                                        <path
                                                                d="m0 7h5v4h-5zm5 6h-5v4h5zm6 0h-4v4h4zm0-2v-4h-4v4zm2 0h4v-4h-4zm6 0h5v-4h-5zm-12-6h4v-5h-4zm6-5v5h4v-5zm-2 24v-5h-4v5zm-6-24a5.006 5.006 0 0 0 -5 5h5zm12 19h-4v5h4zm2 5a5.006 5.006 0 0 0 5-5h-5zm-14-5h-5a5.006 5.006 0 0 0 5 5zm8-6v4h4v-4zm6-8h5a5.006 5.006 0 0 0 -5-5zm5 8h-5v4h5z" />
                                                    </svg>
                                                </button>
                                                <x-slot name="text">
                                                    Table
                                                </x-slot>
                                            </x-tooltip-arrow>

                                        </div>
                                        <!--END Graph Nav-->
                                    </div>
                                    <!--END graph head-->

                                    <!--graph view-->
                                    <div x-show="graf" class="text-gray-900 flex items-center justify-center py-1">

                                        <!--graph table-->
                                        <div class="rounded-lg text-gray-900 shadow-xl py-1 px-5 w-full" x-init="$watch('cardOpen', value => value ? (cardData.countUp($refs.total, 0, 11602, null, 0.8), cardData.sessions.forEach((el, i) => cardData.countUp($refs[`device${i}`], 0, cardData.sessions[i].size, null, 1.6))) : null);
                                                setTimeout(() => { cardOpen = true }, 100)">
                                            <div class="flex w-full">
                                                <div class="relative h-5 leading-none">
                                                    <button class="text-xl text-gray-900 h-6 focus:outline-none"
                                                        @click.prevent="cardOpen=!cardOpen">
                                                        <i class="mdi" :class="'mdi-chevron-' + (cardOpen ? 'up' :
                                                                    'down')"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="relative overflow-hidden transition-all duration-500"
                                                x-ref="card"
                                                x-bind:style="`max-height:${cardOpen?$refs.card.scrollHeight:0}px; opacity:${cardOpen?1:0}`">
                                                <div>

                                                    <div class="pb-4 lg:pb-6">
                                                        <div class="overflow-hidden rounded-full h-3 bg-gray-800 flex transition-all duration-500"
                                                            :class="cardOpen ? 'w-full' : 'w-0'">
                                                            <template x-for="(item,index) in cardData.sessions">
                                                                <div class="h-full" :class="`bg-${item.color}`"
                                                                    :style="`width:${item.size}%`"></div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                    <div class="flex -mx-4">
                                                        <template x-for="(item,index) in cardData.sessions">
                                                            <div class="w-1/3 px-4" :class="{ 'border-l border-gray-700': index !==
                                                                            0 }">
                                                                <div class="text-sm">
                                                                    <span
                                                                        class="inline-block w-2 h-2 rounded-full mr-1 align-middle"
                                                                        :class="`bg-${item.color}`">&nbsp;</span>
                                                                    <span class="align-middle"
                                                                        x-text="item.label">&nbsp;</span>
                                                                </div>
                                                                <div class="font-medium text-lg text-gray-800">
                                                                    <span x-text="item.size"
                                                                        :x-ref="`device${index}`">0</span>%
                                                                </div>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--END graph table-->
                                    </div>
                                    <!--END graph view-->

                                    <!--Table view-->
                                    <div x-show="table" class="text-gray-900">
                                        <table class="w-full text-center mt-6 rounded-xl shadow-xl">
                                            <thead class="">
                                                <tr class="font-medium">
                                                    <th class="px-6 py-3">
                                                        <x-tooltip-arrow class="flex items-center justify-center whitespace-nowrap">
                                                            <svg class="h-8 text-blue-500" fill="currentColor"
                                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                 xml:space="preserve" width="512" height="512">
                                                                <g>
                                                                    <path
                                                                            d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" />
                                                                </g>
                                                            </svg>
                                                            <x-slot name="text">
                                                                Facebook
                                                            </x-slot>
                                                        </x-tooltip-arrow>
                                                    </th>
                                                    <th class="px-6 py-3">
                                                        <x-tooltip-arrow class="flex items-center justify-center whitespace-nowrap">
                                                            <svg class="h-8 text-sky-400" fill="currentColor"
                                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                 xml:space="preserve" width="512" height="512">
                                                                <path
                                                                        id="Logo_00000038394049246713568260000012923108920998390947_"
                                                                        d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z" />
                                                            </svg>
                                                            <x-slot name="text">
                                                                Twitter
                                                            </x-slot>
                                                        </x-tooltip-arrow>

                                                    </th>
                                                    <th class="px-6 py-3">
                                                        <x-tooltip-arrow class="flex items-center justify-center whitespace-nowrap">
                                                            <svg class="h-8 text-sky-500" fill="currentColor"
                                                                 viewBox="0 0 24 24" xml:space="preserve" width="512"
                                                                 height="512">
                                                                <g id="Artboard">
                                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;"
                                                                          d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z    M17.562,8.161c-0.18,1.897-0.962,6.502-1.359,8.627c-0.168,0.9-0.5,1.201-0.82,1.23c-0.697,0.064-1.226-0.461-1.901-0.903   c-1.056-0.692-1.653-1.123-2.678-1.799c-1.185-0.781-0.417-1.21,0.258-1.911c0.177-0.184,3.247-2.977,3.307-3.23   c0.007-0.032,0.015-0.15-0.056-0.212s-0.174-0.041-0.248-0.024c-0.106,0.024-1.793,1.139-5.062,3.345   c-0.479,0.329-0.913,0.489-1.302,0.481c-0.428-0.009-1.252-0.242-1.865-0.442c-0.751-0.244-1.349-0.374-1.297-0.788   c0.027-0.216,0.324-0.437,0.892-0.663c3.498-1.524,5.831-2.529,6.998-3.015c3.333-1.386,4.025-1.627,4.477-1.635   C17.472,7.214,17.608,7.681,17.562,8.161z" />
                                                                </g>
                                                            </svg>
                                                            <x-slot name="text">
                                                                Telegram
                                                            </x-slot>
                                                        </x-tooltip-arrow>
                                                    </th>
                                                    <th class="px-6 py-3">
                                                        <x-tooltip-arrow class="flex items-center justify-center whitespace-nowrap">
                                                            <svg class="h-8 bg-green-500 rounded-full text-white"
                                                                 fill="currentColor" viewBox="0 0 24 24"
                                                                 xml:space="preserve" width="512" height="512">
                                                                <g id="WA_Logo">
                                                                    <g>
                                                                        <path
                                                                                style="fill-rule:evenodd;clip-rule:evenodd;"
                                                                                d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            <x-slot name="text">
                                                                What’s App
                                                            </x-slot>

                                                        </x-tooltip-arrow>
                                                    </th>
                                                    <th class="px-6 py-3">
                                                        <x-tooltip-arrow lass="flex items-center justify-center whitespace-nowrap">
                                                            <svg class="h-8 text-red-500" fill="currentColor"
                                                                 viewBox="0 0 24 24" xml:space="preserve" width="512"
                                                                 height="512">
                                                                <g>
                                                                    <path
                                                                            d="M12.01,0C5.388,0,0.02,5.368,0.02,11.99c0,5.082,3.158,9.424,7.618,11.171c-0.109-0.947-0.197-2.408,0.039-3.444   c0.217-0.938,1.401-5.961,1.401-5.961s-0.355-0.72-0.355-1.776c0-1.668,0.967-2.911,2.171-2.911c1.026,0,1.52,0.77,1.52,1.688   c0,1.026-0.651,2.566-0.997,3.997c-0.286,1.194,0.602,2.171,1.776,2.171c2.132,0,3.77-2.25,3.77-5.487   c0-2.872-2.062-4.875-5.013-4.875c-3.414,0-5.418,2.556-5.418,5.201c0,1.026,0.395,2.132,0.888,2.734   C7.52,14.615,7.53,14.724,7.5,14.842c-0.089,0.375-0.296,1.194-0.336,1.362c-0.049,0.217-0.178,0.266-0.405,0.158   c-1.5-0.701-2.438-2.882-2.438-4.648c0-3.78,2.743-7.253,7.924-7.253c4.155,0,7.391,2.961,7.391,6.928   c0,4.135-2.605,7.461-6.217,7.461c-1.214,0-2.359-0.632-2.743-1.382c0,0-0.602,2.289-0.75,2.852   c-0.266,1.046-0.997,2.349-1.49,3.148C9.562,23.812,10.747,24,11.99,24c6.622,0,11.99-5.368,11.99-11.99C24,5.368,18.632,0,12.01,0   z" />
                                                                </g>
                                                            </svg>
                                                            <x-slot name="text">
                                                                Pininterest
                                                            </x-slot>
                                                        </x-tooltip-arrow>

                                                    </th>
                                                    <th class="px-6 py-3">
                                                        <x-tooltip-arrow class="flex items-center justify-center whitespace-nowrap">
                                                            <svg class="h-8 text-sky-600" fill="currentColor"
                                                                 viewBox="0 0 24 24" xml:space="preserve" width="512"
                                                                 height="512">
                                                                <g>
                                                                    <path id="Path_2525"
                                                                          d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262" />
                                                                    <path id="Path_2520"
                                                                          d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463" />
                                                                    <path id="Path_2526"
                                                                          d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031" />
                                                                </g>
                                                            </svg>
                                                            <x-slot name="text">
                                                                LinkedIn
                                                            </x-slot>
                                                        </x-tooltip-arrow>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody class="cursor-pointer">
                                                <tr class="hover:bg-traivis-50">
                                                    <template x-for="(item,index) in cardData.sessions">
                                                        <td class="px-6 py-3">
                                                            <span x-text="item.size"></span>
                                                            <span>%</span>
                                                        </td>
                                                    </template>
                                                </tr>

                                                <tr class="hover:bg-traivis-50">

                                                    <td class="px-6 py-3">
                                                        {{$facebookSlots}}

                                                        <span></span>
                                                        <span>slots</span>
                                                    </td>
                                                    <td class="px-6 py-3">
                                                        {{$twitterSlots}}

                                                        <span></span>
                                                        <span>slots</span>
                                                    </td>
                                                    <td class="px-6 py-3">
                                                        {{$telegramSlots}}

                                                        <span></span>
                                                        <span>slots</span>
                                                    </td>
                                                    <td class="px-6 py-3">
                                                        {{$whatsappSlots}}

                                                        <span></span>
                                                        <span>slots</span>
                                                    </td>
                                                    <td class="px-6 py-3">
                                                        {{$pinterestSlots}}

                                                        <span></span>
                                                        <span>slots</span>
                                                    </td>
                                                    <td class="px-6 py-3">
                                                        {{$linkedinSlots}}

                                                        <span></span>
                                                        <span>slots</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--END Table view-->

                                </div>
                                <!--END Graph stats Content-->
                            </div>
                            <!--END Graph-->

                        </div>
                    </div>
                </div>
                <!---->

                <!--Table-->
                <div x-data="{ stuOpen: false }" @click.outside="stuOpen = false"
                    @keydown.window.escape.stop="stuOpen = false"
                    class="mt-5 mb-16 w-full rounded-xl shadow-dashboard border overflow-x-auto h-[50vh]">
                    <table class="w-full text-center">
                        <thead class="border-b-4 border-gray-300">
                            <tr class="font-bold text-sm text-gray-500">
                                <th class=" px-6 py-3 text-left">
                                    Course
                                </th>
                                <th class=" px-6 py-3">
                                    <div class="flex items-center gap-x-3 justify-center">
                                        <svg class="h-5 w-5" fill="currentColor" id="Layer_1" height="512"
                                            viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"
                                            data-name="Layer 1">
                                            <path
                                                d="m17 0a1 1 0 0 0 -1 1c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a3.979 3.979 0 0 0 1.514 3.109l3.572 7.972a3.233 3.233 0 0 0 2.953 1.919 2.982 2.982 0 0 0 2.72-4.2l-2.2-4.8h2.441c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0v-18a1 1 0 0 0 -1-1zm-8.063 20.619a.983.983 0 0 1 -.898 1.381 1.232 1.232 0 0 1 -1.126-.734l-2.808-6.266h2.254zm7.063-6.019a7.723 7.723 0 0 0 -5-1.6h-7a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h7a7.723 7.723 0 0 0 5-1.595zm7.9.852a1 1 0 0 1 -1.342.448l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 .448 1.337zm-3.79-9a1 1 0 0 1 .448-1.342l2-1a1 1 0 1 1 .894 1.79l-2 1a1 1 0 0 1 -1.342-.448zm-.11 3.548a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1 -1-1z">
                                            </path>
                                        </svg>
                                        <span class="">Influencer Campaigns</span>
                                    </div>
                                </th>
                                <th class=" px-6 py-3">
                                    <div class="flex items-center gap-x-3 justify-center">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="m21 18a2.986 2.986 0 0 0 -2.077.844l-2.96-1.481a2.9 2.9 0 0 0 .037-.363 2.9 2.9 0 0 0 -.037-.363l2.96-1.481a2.994 2.994 0 1 0 -.923-2.156 2.9 2.9 0 0 0 .037.363l-2.96 1.481a3 3 0 1 0 0 4.312l2.96 1.481a2.9 2.9 0 0 0 -.037.363 3 3 0 1 0 3-3zm0-6a1 1 0 1 1 -1 1 1 1 0 0 1 1-1zm-8 6a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm8 4a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm-9 0a1 1 0 0 1 -1 1h-5.321a5.841 5.841 0 0 1 -5.622-4.7 5.443 5.443 0 0 1 2.885-5.651 7.652 7.652 0 0 1 -.8-5.18 8 8 0 0 1 15.49-.842 1.09 1.09 0 0 0 .722.735 1 1 0 1 1 -.588 1.911 3.1 3.1 0 0 1 -2.044-2.053 6 6 0 1 0 -11.06 4.513 1.994 1.994 0 0 1 -.792 2.686 3.468 3.468 0 0 0 -1.835 3.6 3.807 3.807 0 0 0 3.644 2.981h5.321a1 1 0 0 1 1 1z" />
                                        </svg>
                                        <span>Teaser Campaigns</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="cursor-pointer">
                            @forelse($courses as $course)

                            <tr class="hover:bg-indigo-50 text-gray-500 hover:text-gray-700">

                                <!--Campaign Course-->
                                <td class=" px-6 py-3 text-left">
                                    <div
                                        class="flex items-center gap-x-3 whitespace-nowrap max-w-[300px] min-w-[100px] truncate">
                                        <span class="font-bold">{{$course->title}}</span>
                                    </div>
                                </td>
                                <!--/Campaign Course-->

                                <!--Influencer-->
                                <td class=" px-6 py-3">
                                    <div
                                        class="flex items-center justify-center whitespace-nowrap w-fit gap-x-6 mx-auto rounded-full">

                                        <!--Influencers-->
                                        <div class="flex gap-x-2 items-center relative group/t">
                                            <svg class="shrink-0 h-4 w-4 fill-current" viewBox="0 0 24 24">
                                                <path
                                                    d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z">
                                                </path>
                                            </svg>
                                            <span>{{ $influencerOffers->where('course_id', $course->id)->count() }}
                                            </span>
                                            <span
                                                class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] ">
                                                Influencers
                                            </span>
                                        </div>
                                        <!--/Influencers-->

                                        <!--Reach-->
                                        <div class="flex gap-x-2 items-center relative group/t">
                                            <svg class="shrink-0 h-4 w-4 fill-current" x="0px" y="0px"
                                                viewBox="0 0 512.19 512.19"
                                                style="enable-background:new 0 0 512.19 512.19;" xml:space="preserve"
                                                width="512" height="512">
                                                <g>
                                                    <circle cx="256.095" cy="256.095" r="85.333"></circle>
                                                    <path
                                                        d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>{{ $influencerOffers->where('course_id', $course->id)->sum('reached')
                                                }} </span>
                                            <span
                                                class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] ">
                                                Reach
                                            </span>
                                        </div>
                                        <!--/Reach-->


                                        <!--Enrolled-->
                                        <div class="flex gap-x-2 items-center relative group/t">
                                            <svg class="shrink-0 h-4 w-4 fill-current" x="0px" y="0px"
                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                xml:space="preserve" width="512" height="512">
                                                <g>
                                                    <circle cx="256" cy="128" r="128"></circle>
                                                    <path
                                                        d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>{{ $influencerOffers->where('course_id', $course->id)->sum('enrolled')
                                                }} </span>
                                            <span
                                                class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] ">
                                                Enrolled
                                            </span>
                                        </div>
                                        <!--/Enrolled-->
                                        <!----- View / Edit button----------->
                                        @livewire('influencer-camp-modal-btn',['course_id'=>$course->id])
                                        <!-----END View / Edit button----------->

                                    </div>
                                </td>
                                <!--/Influencer-->

                                <!--Teaser-->
                                <td class=" px-6 py-3">
                                    @livewire('teaser-campaign-modal-btn',['course_id'=>$course->id])
                                </td>
                                <!--/Teaser-->

                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" style="text-align: center">No Campaigns found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!--Table-->

            </div>
            <!--End Marketing Manager-->

            <!--Marketing Manager Scripts-->
            <script>
                let cardData = function() {
                            return {
                                countUp: function(target, startVal, endVal, decimals, duration) {
                                    const countUp = new CountUp(target, startVal || 0, endVal, decimals || 0,
                                        duration || 2);
                                    countUp.start();
                                },
                                size: 20,
                                sessions: [{
                                    "label": "Facebook",
                                    "size": {{number_format($face_percent,2)}},
                                    "color": "blue-500"
                                },
                                    {
                                        "label": "Twitter",
                                        "size": {{number_format($twitter_percent,2)}},
                                        "color": "sky-400"
                                    },
                                    {
                                        "label": "Telegram",
                                        "size": {{number_format($telegram_percent,2)}},
                                        "color": "sky-500"
                                    },
                                    {
                                        "label": "What’s app",
                                        "size": {{number_format($whats_percent,2)}},
                                        "color": "green-500"
                                    },
                                    {
                                        "label": "Pininterest",
                                        "size": {{number_format($pinterest_percent,2)}},
                                        "color": "red-500"
                                    },
                                    {
                                        "label": "LinkedIn",
                                        "size": {{number_format($linkedin_percent,2)}},
                                        "color": "sky-600"
                                    }
                                ]
                            }
                        }
            </script>
            <!--End Marketing Manager Scripts-->




        </div>
    </section>
    <!--End content-->
    {{-- @livewire('mkt-manager-new-campaign-button') --}}
    @livewire('publish-course-teaser-campaign')
    @livewire('influencer-camp-modal')
</div>
<!-- dash Content -->
@endcan
@endsection