<div x-data="{jopen:false, Refund:false, ConfirmRefund:false}" class="flex w-full flex-col px-4 sm:px-6 lg:px-8">
    <!--header-->
    <div class="flex items-center justify-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">My Wallet</h1>
            <p class="mt-2 text-sm text-gray-700">Account ID: #13</p>
        </div>
        <!--withdraw button-->
        <button @click="jopen = !jopen"
            class="flex items-center justify-between gap-x-2 text-base rounded-lg px-3 py-2 font-bold bg-indigo-500 hover:bg-indigo-600 active:scale-90 text-white transition-all">
            <svg class="shrink-0 h-6 w-6 fill-current" viewBox="0 0 24 24">
                <path
                    d="M16,12.01c0-2.21-1.79-4-4-4s-4,1.79-4,4,1.79,4,4,4,4-1.79,4-4Zm-4,2c-1.1,0-2-.9-2-2s.9-2,2-2,2,.9,2,2-.9,2-2,2ZM20,0H4C1.79,0,0,1.8,0,4.01v1C0,7.21,1.79,9.01,4,9.01v10c0,2.76,2.24,5,5,5h6c2.76,0,5-2.24,5-5V9.01c2.21,0,4-1.79,4-4v-1C24,1.8,22.21,0,20,0Zm2,5c0,1.1-.9,2-2,2v-2c0-.55-.45-1-1-1s-1,.45-1,1v14c0,1.65-1.35,3-3,3h-6c-1.65,0-3-1.35-3-3V5.01c0-.55-.45-1-1-1s-1,.45-1,1v2c-1.1,0-2-.9-2-2v-1c0-1.1,.9-2,2-2H20c1.1,0,2,.9,2,2v1Zm-5,14.5c0,.83-.67,1.5-1.5,1.5s-1.5-.67-1.5-1.5,.67-1.5,1.5-1.5,1.5,.67,1.5,1.5Zm-7,0c0,.83-.67,1.5-1.5,1.5s-1.5-.67-1.5-1.5,.67-1.5,1.5-1.5,1.5,.67,1.5,1.5Z">
                </path>
            </svg>
            <span>Withdraw</span>
        </button>
        <!--END withdraw button-->
    </div>
    <!--END header-->

    <!--content-->
    <section class="">
        <div class="container mx-auto my-8">
            <!--stats and withdraw-->
            <div class="w-full flex justify-between">

                <!--Stats-->
                <div class="w-full grid grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-5 justify-between items-center">

                    <!--Balance-->
                    <div class="w-full h-full col-span-3 md:col-span-2 lg:col-span-1 flex items-center justify-between gap-x-6 px-5 py-3 lg:py-5 border text-gray-500 bg-gray-50 hover:bg-white focus-within:bg-white transition-all rounded-lg">

                        <!--Total-->
                        <div class="w-1/2 flex flex-col items-center justify-between text-center h-full gap-y-3">
                            <div class="flex flex-col items-center justify-center h-full">
                                <h3 class=" xl:text-xl text-base flex gap-x-2 items-center font-bold">
                                    <svg fill="currentColor" class="h-6 w-6 shrink-0" viewBox="0 0 24 24" width="512" height="512"><path d="M21,6H5c-.859,0-1.672-.372-2.235-.999,.55-.614,1.349-1.001,2.235-1.001H23c1.308-.006,1.307-1.995,0-2H5C2.239,2,0,4.239,0,7v10c0,2.761,2.239,5,5,5H21c1.657,0,3-1.343,3-3V9c0-1.657-1.343-3-3-3Zm-1,9c-1.308-.006-1.308-1.994,0-2,1.308,.006,1.308,1.994,0,2Z"/></svg>
                                    Current Balance
                                </h3>
                                <h2 class="text-center font-bold whitespace-nowrap xl:text-5xl lg:text-4xl text-2xl text-gray-500 tracking-tighter">
                                    <span class="xl:text-3xl lg:text-xl text-base"> $ </span> {{ $total_balance }}
                                </h2>
                            </div>


                            <!--Total Balance Details-->
                            <div class="w-full flex items-center justify-between gap-x-3">

                                <!--Available-->
                                <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-lg border border-gray-300 gap-y-2 w-1/2 px-2 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600 flex-col">
                                    <span class="flex flex-row items-center truncate px-1 w-full">
                                        <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24"><path d="M13.053,5.079c.971-.909,2.344-2.36,2.894-3.744,.255-.641-.257-1.335-.947-1.335h-6c-.69,0-1.202,.693-.947,1.335,.55,1.384,1.923,2.835,2.894,3.744C5.569,5.878,1,12.618,1,18c0,3.309,2.691,6,6,6h10c3.309,0,6-2.691,6-6,0-5.382-4.569-12.122-9.947-12.921Zm-2.409,8.682l3.042,.507c1.341,.223,2.315,1.373,2.315,2.733,0,1.654-1.346,3-3,3v1c0,.552-.448,1-1,1s-1-.448-1-1v-1h-.268c-1.068,0-2.063-.574-2.598-1.499-.276-.478-.113-1.089,.365-1.366,.476-.277,1.089-.114,1.366,.365,.178,.308,.511,.5,.867,.5h2.268c.551,0,1-.449,1-1,0-.378-.271-.698-.644-.76l-3.042-.507c-1.341-.223-2.315-1.373-2.315-2.733,0-1.654,1.346-3,3-3v-1c0-.552,.448-1,1-1s1,.448,1,1v1h.268c1.067,0,2.063,.575,2.598,1.5,.276,.478,.113,1.089-.365,1.366-.477,.277-1.089,.114-1.366-.365-.179-.309-.511-.5-.867-.5h-2.268c-.551,0-1,.449-1,1,0,.378,.271,.698,.644,.76Z"/></svg>
                                        <p class="px-2">Available</p>
                                    </span>
                                    <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                        {{ $available_balance }}
                                    </p>
                                </button>
                                <!--/Available-->

                                <!--On hold-->
                                <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-lg border border-gray-300 gap-y-2 w-1/2 px-2 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600 flex-col">
                                    <span class="flex flex-row items-center truncate px-1 w-full">
                                        <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24"><path d="M16,9c0,1.654-1.346,3-3,3v1c-.005,1.308-1.995,1.307-2,0v-1h-.268c-1.067,0-2.063-.574-2.598-1.499-.277-.479-.113-1.09,.364-1.366,.479-.279,1.091-.114,1.366,.364,.179,.31,.511,.501,.867,.501h2.268c.998,.065,1.443-1.55,.355-1.761l-3.04-.506c-3.501-.651-2.748-5.753,.685-5.733V1c.005-1.308,1.995-1.307,2,0v1h.268c1.067,0,2.063,.574,2.598,1.499,.277,.479,.113,1.09-.364,1.366-.48,.277-1.091,.113-1.366-.364-.179-.31-.511-.501-.867-.501h-2.268c-.998-.065-1.443,1.55-.355,1.761l3.04,.506c1.342,.224,2.315,1.374,2.315,2.733Zm3.102-6h-1.276c.202,.566,.232,1.18,.073,1.774-.145,.54-.429,1.018-.824,1.394,1.906,2.424,.67,6.387-2.137,7.441-.617,3.087-5.12,3.167-5.851,.11-1.114-.39-2.077-1.169-2.684-2.219-.401-.691-.509-1.5-.302-2.275,.145-.54,.429-1.018,.824-1.394-1.01-1.307-1.208-3.322-.497-4.832h-1.53C1.621,2.904-.255,7.109,1.985,9.487l7.015,7.893v2.62c0,.314,.148,.611,.4,.8l4,3c.303,.229,.709,.263,1.047,.095,.339-.17,.553-.516,.553-.895v-5.62l7.015-7.892c2.24-2.38,.365-6.584-2.913-6.488Z"/></svg>

                                        <p class="px-2">On hold</p>
                                    </span>
                                    <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                        {{ $on_hold_balance }}
                                    </p>
                                </button>
                                <!--/On hold-->

                            </div>
                            <!--/Total Balance Details-->

                        </div>
                        <!--/Total-->

                        <!--Details-->
                        <div class="w-2/6 flex flex-col items-center justify-between gap-y-3">

                            <!--Earning-->
                            <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-full border border-gray-300 px-1 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center truncate px-1 w-full">
                                    <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24">
                                        <path d="M9,4c0-2.209,3.358-4,7.5-4s7.5,1.791,7.5,4-3.358,4-7.5,4-7.5-1.791-7.5-4Zm7.5,6c-1.027,0-2.001-.115-2.891-.315-1.359-1.019-3.586-1.685-6.109-1.685-4.142,0-7.5,1.791-7.5,4s3.358,4,7.5,4,7.5-1.791,7.5-4c0-.029-.007-.057-.008-.086h.008v2.086c0,2.209-3.358,4-7.5,4S0,16.209,0,14v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v2c0,2.209-3.358,4-7.5,4S0,20.209,0,18v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v-.08c.485,.052,.986,.08,1.5,.08,4.142,0,7.5-1.791,7.5-4v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.209-3.358,4-7.5,4Z">
                                        </path>
                                    </svg>
                                    <p class="px-2">Earning</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $total_earnings }}
                                </p>
                            </button>
                            <!--/Earning-->

                            <!--Withdrawal-->
                            <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-full border border-gray-300 px-1 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center truncate px-1 w-full">
                                    <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24">
                                    <path d="M20,5c0-.55-.45-1-1-1H5c-.55,0-1,.45-1,1v14c0,2.76,2.24,5,5,5h6c2.76,0,5-2.24,5-5V5ZM8.5,21c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5,1.5,.67,1.5,1.5-.67,1.5-1.5,1.5Zm-.5-9c0-2.21,1.79-4,4-4s4,1.79,4,4-1.79,4-4,4-4-1.79-4-4Zm7.5,9c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5,1.5,.67,1.5,1.5-.67,1.5-1.5,1.5Zm-1.5-9c0,1.1-.9,2-2,2s-2-.9-2-2,.9-2,2-2,2,.9,2,2ZM24,4v1c0,1.47-.81,2.75-2,3.44V4c0-1.1-.9-2-2-2H4c-1.1,0-2,.9-2,2v4.44c-1.19-.69-2-1.97-2-3.44v-1C0,1.79,1.79,0,4,0H20c2.21,0,4,1.79,4,4Z">
                                    </path>
                                </svg>
                                    <p class="px-2">Withdrawal</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $completed_withdrawals }}
                                </p>
                            </button>
                            <!--/Withdrawal-->

                            <!--Purchased-->
                            <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-full border border-gray-300 px-1 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center truncate px-1 w-full">
                                    <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24" width="512" height="512"><path d="M9,22c0,1.1-.9,2-2,2s-2-.9-2-2,.9-2,2-2,2,.9,2,2Zm8-2c-1.1,0-2,.9-2,2s.9,2,2,2,2-.9,2-2-.9-2-2-2Zm6.32-15.9c-.57-.7-1.42-1.1-2.32-1.1h-7v6.5l1.32-1.23c.41-.38,1.04-.36,1.41,.05,.38,.4,.35,1.04-.05,1.41l-1.59,1.48c-.57,.57-1.33,.86-2.09,.86s-1.54-.29-2.13-.88l-1.56-1.46c-.4-.38-.42-1.01-.05-1.41,.38-.4,1.01-.43,1.41-.05l1.32,1.23V3H5.24l-.04-.35c-.18-1.51-1.46-2.65-2.98-2.65H1C.45,0,0,.45,0,1s.45,1,1,1h1.22c.51,0,.93,.38,.99,.88l1.38,11.7c.3,2.52,2.43,4.42,4.97,4.42h9.44c.55,0,1-.45,1-1s-.45-1-1-1H9.56c-1.29,0-2.4-.83-2.82-2h11.42c2.38,0,4.44-1.69,4.9-4.02l.88-4.39c.18-.88-.05-1.79-.62-2.49Z"/></svg>
                                    <p class="px-2">Purchased</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $purchased_courses }}
                                </p>
                            </button>
                            <!--/Purchased-->

                            <!--Refunded-->
                            <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-full border border-gray-300 px-1 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center truncate px-1 w-full">
                                    <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24"><path d="M15,7H10.17V5.414A2,2,0,0,0,6.756,4L.876,9.879a3,3,0,0,0,0,4.242L6.756,20a2,2,0,0,0,3.414-1.414V17H16a6.006,6.006,0,0,1,6,6,1,1,0,0,0,2,0V16A9.01,9.01,0,0,0,15,7Z"/></svg>
                                    <p class="px-2">Refunded</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    Non
                                </p>
                            </button>
                            <!--/Refunded-->

                        </div>
                        <!--/Details-->
                    </div>
                    <!--/Balance-->

                    <!--Earnings-->
                    <div class="w-full h-full col-span-3 md:col-span-1 flex items-center justify-between gap-x-6 px-5 py-3 lg:py-5 border text-gray-500 bg-gray-50 hover:bg-white focus-within:bg-white transition-all rounded-lg">

                        <!--Total-->
                        <div class="w-1/2 flex flex-col items-center justify-center text-center">
                            <h3 class=" xl:text-xl text-base flex gap-x-2 items-center font-bold">
                                <svg fill="currentColor" class="h-6 w-6 shrink-0"viewBox="0 0 24 24">
                                    <path
                                            d="M9,4c0-2.209,3.358-4,7.5-4s7.5,1.791,7.5,4-3.358,4-7.5,4-7.5-1.791-7.5-4Zm7.5,6c-1.027,0-2.001-.115-2.891-.315-1.359-1.019-3.586-1.685-6.109-1.685-4.142,0-7.5,1.791-7.5,4s3.358,4,7.5,4,7.5-1.791,7.5-4c0-.029-.007-.057-.008-.086h.008v2.086c0,2.209-3.358,4-7.5,4S0,16.209,0,14v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v2c0,2.209-3.358,4-7.5,4S0,20.209,0,18v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v-.08c.485,.052,.986,.08,1.5,.08,4.142,0,7.5-1.791,7.5-4v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.209-3.358,4-7.5,4Z">
                                    </path>
                                </svg>
                                Total Earnings
                            </h3>
                            <h2
                                class="text-center font-bold whitespace-nowrap xl:text-5xl lg:text-4xl text-2xl text-gray-500 tracking-tighter">
                                <span class="xl:text-3xl lg:text-xl text-base"> $ </span> {{ $total_earnings }}
                            </h2>
                        </div>
                        <!--/Total-->

                        <!--Details-->
                        <div class="w-2/6 flex flex-col items-center justify-between gap-y-3">

                            <!--Courses-->
                            <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-full border border-gray-300 px-1 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center truncate px-1 w-full">
                                    <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24">
                                        <path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                        </path>
                                    </svg>
                                    <p class="px-2">Courses</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $courses_income }}
                                </p>
                            </button>
                            <!--/Courses-->

                            <!--Influence-->
                            <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-full border border-gray-300 px-1 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center truncate px-1 w-full">
                                    <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24"><path d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z"></path></svg>
                                    <p class="px-2">Influence</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $influencer_income }}
                                </p>
                            </button>
                            <!--/Influence-->

                            <!--Karma-->
                            <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-full border border-gray-300 px-1 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center truncate px-1 w-full">
                                    <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24">
                                        <path d="M23,13.5C23,8.355,16.021,2.372,13.881.661a3,3,0,0,0-3.762,0C7.979,2.372,1,8.354,1,13.5A6.272,6.272,0,0,0,7,20a5.82,5.82,0,0,0,3.93-1.659C10.75,20.805,10.115,22,8,22H5v2H19V22H16c-2.115,0-2.75-1.2-2.93-3.659A5.82,5.82,0,0,0,17,20,6.272,6.272,0,0,0,23,13.5Z"></path>
                                    </svg>
                                    <p class="px-2">Karma</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $karma_income }}
                                </p>
                            </button>
                            <!--/Karma-->

                            <!--Canceled-->
                            <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-full border border-gray-300 px-1 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center truncate px-1 w-full">
                                    <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24" width="512" height="512">
                                            <path d="M16,8a1,1,0,0,0-1.414,0L12,10.586,9.414,8A1,1,0,0,0,8,9.414L10.586,12,8,14.586A1,1,0,0,0,9.414,16L12,13.414,14.586,16A1,1,0,0,0,16,14.586L13.414,12,16,9.414A1,1,0,0,0,16,8Z">
                                            </path>
                                            <path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z">
                                            </path>
                                        </svg>
                                    <p class="px-2">Canceled</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    Non
                                </p>
                            </button>
                            <!--/Canceled-->

                        </div>
                        <!--/Details-->

                    </div>
                    <!--/Earnings-->

                    <!--Withdrawals-->
                    <div class="w-full h-full col-span-3 md:col-span-1 flex items-center justify-between gap-x-6 px-5 py-3 lg:py-5 border text-gray-500 bg-gray-50 hover:bg-white focus-within:bg-white transition-all rounded-lg">

                        <!--Total-->
                        <div class="w-1/2 flex flex-col items-center justify-center text-center">
                            <h3 class=" xl:text-xl text-base flex gap-x-2 items-center font-bold">
                                <svg fill="currentColor" class="h-6 w-6 shrink-0" viewBox="0 0 24 24" width="512" height="512">
                                    <path d="M20,5c0-.55-.45-1-1-1H5c-.55,0-1,.45-1,1v14c0,2.76,2.24,5,5,5h6c2.76,0,5-2.24,5-5V5ZM8.5,21c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5,1.5,.67,1.5,1.5-.67,1.5-1.5,1.5Zm-.5-9c0-2.21,1.79-4,4-4s4,1.79,4,4-1.79,4-4,4-4-1.79-4-4Zm7.5,9c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5,1.5,.67,1.5,1.5-.67,1.5-1.5,1.5Zm-1.5-9c0,1.1-.9,2-2,2s-2-.9-2-2,.9-2,2-2,2,.9,2,2ZM24,4v1c0,1.47-.81,2.75-2,3.44V4c0-1.1-.9-2-2-2H4c-1.1,0-2,.9-2,2v4.44c-1.19-.69-2-1.97-2-3.44v-1C0,1.79,1.79,0,4,0H20c2.21,0,4,1.79,4,4Z">
                                    </path>
                                </svg>
                                Total Withdrawals
                            </h3>
                            <h2
                                class="text-center font-bold whitespace-nowrap xl:text-5xl lg:text-4xl text-2xl text-gray-500 tracking-tighter">
                                <span class="xl:text-3xl lg:text-xl text-base"> $ </span> {{ $completed_withdrawals }}
                            </h2>
                        </div>
                        <!--/Total-->

                        <!--Details-->
                        <div class="w-2/6 flex flex-col items-center justify-between gap-y-3">

                            <!--Completed-->
                            <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-full border border-gray-300 px-1 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center truncate px-1 w-full">
                                    <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24">
                                        <path
                                                d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                        </path>
                                    </svg>
                                    <p class="px-2">Completed</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $completed_withdrawals }}
                                </p>
                            </button>
                            <!--/Completed-->

                            <!--Pending-->
                            <button class="flex cursor-pointer whitespace-nowrap items-center justify-between rounded-full border border-gray-300 px-1 py-1 md:text-sm text-xs focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center truncate px-1 w-full">
                                    <svg fill="currentColor" class="h-4 w-4 shrink-0" viewBox="0 0 24 24">
                                        <path
                                                d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z">
                                        </path>
                                    </svg>
                                    <p class="px-2">Pending</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $pending_withdrawals }}
                                </p>
                            </button>
                            <!--/Pending-->

                        </div>
                        <!--/Details-->

                    </div>
                    <!--/Withdrawals-->



                </div>
                <!--Stats-->

                <!--Withdraw Sidebar-->
                <div @keydown.window.escape.stop="jopen = false" class="fixed inset-auto overflow-hidden z-50"
                    :class="jopen ? 'inset-0' : ''" aria-labelledby="slide-over-title" aria-modal="true" role="dialog">
                    <div class="absolute inset-0 overflow-hidden">
                        <!-- Background overlay -->
                        <div x-show="jopen" :class="jopen ? 'opacity-50' : 'opacity-0'" @click="jopen = false"
                            aria-hidden="true"
                            class="absolute inset-0 duration-700 bg-gray-500 transition-all opacity-0"
                            style="display: none;">
                        </div>
                        <!--/ -->
                        <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16 ">
                            <!--Withdraw Sidebar-->
                            <div class="pointer-events-auto w-screen max-w-md " @click.away="jopen = false"
                                x-show="jopen"
                                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-500"
                                x-transition:enter-end="translate-x-0" x-transition:enter-start="translate-x-full"
                                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-500"
                                x-transition:leave-end="translate-x-full" x-transition:leave-start="translate-x-0"
                                style="display: none;">
                                <form class="flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl">
                                    <!--Sidebar Content-->
                                    <div class="flex-1 h-0 overflow-y-auto capitalize">
                                        <!--Sidebar Header-->
                                        <header class="space-y-1 py-6 px-4 bg-indigo-500 sm:px-6">
                                            <div class="flex items-center justify-between space-x-3">
                                                <h2 class="text-lg leading-7 font-medium text-white"
                                                    contenteditable="false">
                                                    New Withdrawal</h2>
                                                <div class="h-7 flex items-center">
                                                    <button aria-label="Close panel"
                                                        class="text-indigo-200 hover:text-white transition ease-in-out duration-150">
                                                        <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-sm leading-5 text-indigo-50" contenteditable="false">
                                                </p>
                                            </div>
                                        </header>
                                        <!--/Sidebar Header-->
                                        <!--Sidebar Content-->
                                        <div class="w-full flex flex-col justify-center gap-y-4 px-4 sm:px-6">

                                            <!--Manage Payment Methods-->
                                            <div class="text-gray-700 px-1">

                                                <div class="mt-5 border border-gray-200 rounded-lg "
                                                    x-data="{open:false}">

                                                    <!--Collapse Head-->
                                                    <div @click="open = !open"
                                                        class="flex cursor-pointer p-4 items-center text-gray-500">

                                                        <div class="mr-5">
                                                        </div>

                                                        <div class="flex-grow font-bold">
                                                            Manage Payment Methods
                                                        </div>

                                                        <div class="ml-5">
                                                            <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                                                class="w-5 h-5 transition-transform rotate-0"
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
                                                    <div class="p-0" style="display: none;" x-show="open"
                                                        x-transition:enter="transition-opacity ease-linear"
                                                        x-transition:enter-end="opacity-100"
                                                        x-transition:enter-start="opacity-0"
                                                        x-transition:leave="transition-opacity ease-linear"
                                                        x-transition:leave-end="opacity-0"
                                                        x-transition:leave-start="opacity-100">


                                                        <!--collapse content-->
                                                        <ul
                                                            class="p-4 m-2 bg-white flex flex-col justify-between items-center">

                                                            <!--Bank-->
                                                            <div class="w-full">
                                                                <li x-data="{toggle2:true, linked:false}"
                                                                    class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">
                                                                    <!---toggle label--->
                                                                    <label for="Bank"
                                                                        :class="toggle2 ? 'text-indigo-500' : 'text-gray-500'"
                                                                        class="cursor-pointer mb-4 flex flex-row justify-between items-center text-gray-500">
                                                                        <p
                                                                            class="font-bold block text-base flex items-center">
                                                                            <svg class="w-5 h-5 mr-3 shrink-0"
                                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="m.291 8.552a2.443 2.443 0 0 1 .153-2.566 4.716 4.716 0 0 1 1.668-1.5l7.501-3.904a5.174 5.174 0 0 1 4.774 0l7.5 3.907a4.716 4.716 0 0 1 1.668 1.5 2.443 2.443 0 0 1 .153 2.566 2.713 2.713 0 0 1 -2.416 1.445h-18.584a2.713 2.713 0 0 1 -2.417-1.448zm22.709 13.448a2 2 0 0 0 -2-2v-8h-2v8h-3v-8h-2v8h-4v-8h-2v8h-3v-8h-2v8a2 2 0 0 0 -2 2 1 1 0 0 0 0 2h22a1 1 0 0 0 0-2z">
                                                                                </path>
                                                                            </svg>
                                                                            Direct to Local Bank
                                                                        </p>

                                                                        <button id="Bank"
                                                                            class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                            :class="{ 'bg-indigo-500': toggle2 }"
                                                                            x-on:click="toggle2 = !toggle2">

                                                                            <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                                :class="{ 'transform translate-x-full': toggle2 }">
                                                                            </div>
                                                                        </button>

                                                                    </label>
                                                                    <!--END toggle label-->


                                                                    <!---toggle Content--->
                                                                    <div class="" x-show="toggle2"
                                                                        style="display: none;">

                                                                        <!--Linked Account-->
                                                                        <div :class="linked ? 'hidden' : 'block'"
                                                                            class="flex flex-col space-y-3 justify-center items-center font-semibold">
                                                                            <p class="font-bold text-green-600">
                                                                                Linked Bank Account
                                                                            </p>
                                                                            <p
                                                                                class="text-lg px-2 py-1 border border-gray-300 hover:border-green-500 hover:text-green-600 rounded-lg">
                                                                                Account Id
                                                                            </p>
                                                                            <p
                                                                                class="text-lg px-2 py-1 border border-gray-300 hover:border-green-500 hover:text-green-600 rounded-lg">
                                                                                {{ $user->stripe_account_id ?? 'No Account Linked' }}
                                                                            </p>

                                                                            <!--Save-->
                                                                            <button {{-- @click="linked = !linked" --}}
                                                                                wire:click="addStripeAccount"
                                                                                class="transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-indigo-500 text-gray-500 bg-white border-gray-400 hover:bg-indigo-500 hover:text-white hover:border-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-indigo-500"
                                                                                type="button">
                                                                                <svg class="h-5 w-5" fill="currentColor"
                                                                                    height="512" viewBox="0 0 24 24"
                                                                                    width="512" data-name="Layer 1">
                                                                                    <path
                                                                                        d="m.291 8.552a2.443 2.443 0 0 1 .153-2.566 4.716 4.716 0 0 1 1.668-1.5l7.501-3.904a5.174 5.174 0 0 1 4.774 0l7.5 3.907a4.716 4.716 0 0 1 1.668 1.5 2.443 2.443 0 0 1 .153 2.566 2.713 2.713 0 0 1 -2.416 1.445h-18.584a2.713 2.713 0 0 1 -2.417-1.448zm22.709 13.448a2 2 0 0 0 -2-2v-8h-2v8h-3v-8h-2v8h-4v-8h-2v8h-3v-8h-2v8a2 2 0 0 0 -2 2 1 1 0 0 0 0 2h22a1 1 0 0 0 0-2z">
                                                                                    </path>
                                                                                </svg>

                                                                                <span
                                                                                    class="whitespace-nowrap font-bold">{{
                                                                                    $user->stripe_account_id ? 'Change'
                                                                                    : 'Connect' }}</span>
                                                                            </button>
                                                                            <!---->

                                                                        </div>
                                                                        <!--END Linked Account-->

                                                                    </div>
                                                                    <!--toggle Content-->



                                                                </li>
                                                            </div>
                                                            <!--END Bank-->


                                                            <!--PayPal-->
                                                            <div class="w-full">
                                                                <li x-data="{toggle2:true, linked:false}"
                                                                    class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                                                                    <!---toggle label--->
                                                                    <label for="PayPal"
                                                                        :class="toggle2 ? 'text-indigo-500' : 'text-gray-500'"
                                                                        class="cursor-pointer mb-4 flex flex-row justify-between items-center text-gray-500">
                                                                        <p
                                                                            class="font-bold block text-base flex items-center">
                                                                            <svg class="w-5 h-5 mr-3 shrink-0"
                                                                                fill="currentColor"
                                                                                viewBox="0 0 384 512">
                                                                                <path
                                                                                    d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4.7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9.7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z">
                                                                                </path>
                                                                            </svg>
                                                                            PayPal
                                                                        </p>

                                                                        <button id="PayPal"
                                                                            class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                            :class="{ 'bg-indigo-500': toggle2 }"
                                                                            x-on:click="toggle2 = !toggle2">

                                                                            <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                                :class="{ 'transform translate-x-full': toggle2 }">
                                                                            </div>
                                                                        </button>

                                                                    </label>
                                                                    <!--END toggle label-->


                                                                    <!---toggle Content--->
                                                                    <div class="" x-show="toggle2"
                                                                        style="display: none;">

                                                                        <!--Set Account-->
                                                                        <form class="">
                                                                            <div :class="linked ? 'hidden' : 'block'"
                                                                                class="space-y-3 flex flex-col justify-between items-center block">

                                                                                <input type="email"
                                                                                    wire:model="paypal_email"
                                                                                    placeholder="PayBal Email"
                                                                                    class="rounded-lg h-10 form-input">

                                                                                <!--Save-->
                                                                                <button @click="linked = !linked"
                                                                                    wire:click="addPaypalEmail"
                                                                                    class="transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-indigo-500 text-gray-500 bg-white border-gray-400 hover:bg-indigo-500 hover:text-white hover:border-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-indigo-500"
                                                                                    type="button">
                                                                                    <svg class="h-5 w-5"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 384 512">
                                                                                        <path
                                                                                            d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4.7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9.7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <span
                                                                                        class="whitespace-nowrap font-bold">{{
                                                                                        $paypal_email ? 'Change' :
                                                                                        'Connect' }}</span>
                                                                                </button>
                                                                                <!---->

                                                                            </div>
                                                                        </form>
                                                                        <!--END Set Account-->

                                                                        <!--Linked Account-->
                                                                        <div :class="linked ? 'block' : 'hidden'"
                                                                            class="flex flex-col space-y-3 justify-center items-center font-semibold hidden">
                                                                            <p class="font-bold text-green-600">
                                                                                Linked PayPal Account
                                                                            </p>
                                                                            <p
                                                                                class="text-lg px-2 py-1 border border-gray-300 hover:border-green-500 hover:text-green-600 rounded-lg">
                                                                                {{ $user->paypal_email }}
                                                                            </p>

                                                                            <button @click="linked = false"
                                                                                class="transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-indigo-500 text-gray-500 bg-white border-gray-400 hover:bg-indigo-500 hover:text-white hover:border-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-indigo-500"
                                                                                type="button">
                                                                                <svg class="h-5 w-5" fill="currentColor"
                                                                                    viewBox="0 0 24 24" width="512"
                                                                                    height="512">
                                                                                    <path
                                                                                        d="M22.853,1.148a3.626,3.626,0,0,0-5.124,0L1.465,17.412A4.968,4.968,0,0,0,0,20.947V23a1,1,0,0,0,1,1H3.053a4.966,4.966,0,0,0,3.535-1.464L22.853,6.271A3.626,3.626,0,0,0,22.853,1.148ZM5.174,21.122A3.022,3.022,0,0,1,3.053,22H2V20.947a2.98,2.98,0,0,1,.879-2.121L15.222,6.483l2.3,2.3ZM21.438,4.857,18.932,7.364l-2.3-2.295,2.507-2.507a1.623,1.623,0,1,1,2.295,2.3Z">
                                                                                    </path>
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
                                                            {{-- <div class="w-full">
                                                                <li x-data="{toggle2:false, linked:false}"
                                                                    class="flex flex-col py-4 px-4 space-y-2 text-gray-500  transition-colors">

                                                                    <!---toggle label--->
                                                                    <label for="payoneer"
                                                                        :class="toggle2 ? 'text-indigo-500' : 'text-gray-500'"
                                                                        class="cursor-pointer mb-4 flex flex-row justify-between items-center text-gray-500">
                                                                        <p
                                                                            class="font-bold block text-base flex items-center">
                                                                            <svg class="w-5 h-5 mr-3 shrink-0"
                                                                                fill="currentColor" x="0px" y="0px"
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
                                                                                            d="M160.7,3.2C73.7,3.2,3.2,73.7,3.2,160.7s70.5,157.5,157.5,157.5s157.5-70.5,157.5-157.5S247.6,3.2,160.7,3.2z M160.7,290.6c-71.8,0-130-58.2-130-130s58.2-130,130-130s130,58.2,130,130S232.5,290.6,160.7,290.6z">
                                                                                        </path>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                            payoneer
                                                                        </p>

                                                                        <button id="payoneer"
                                                                            class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                            :class="{ 'bg-indigo-500': toggle2 }"
                                                                            x-on:click="toggle2 = !toggle2">

                                                                            <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                                :class="{ 'transform translate-x-full': toggle2 }">
                                                                            </div>
                                                                        </button>

                                                                    </label>
                                                                    <!--END toggle label-->


                                                                    <!---toggle Content--->
                                                                    <div class="" x-show="toggle2"
                                                                        style="display: none;">

                                                                        <!--Set Account-->
                                                                        <form class="">
                                                                            <div :class="linked ? 'hidden' : 'block'"
                                                                                class="space-y-3 flex flex-col justify-between items-center block">

                                                                                <input type="email"
                                                                                    placeholder="Payoneer Email"
                                                                                    class="rounded-lg h-10 form-input">

                                                                                <!--Save-->
                                                                                <button @click="linked = !linked"
                                                                                    class="transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-indigo-500 text-gray-500 bg-white border-gray-400 hover:bg-indigo-500 hover:text-white hover:border-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-indigo-500"
                                                                                    type="button">
                                                                                    <svg class="h-5 w-5"
                                                                                        fill="currentColor" x="0px"
                                                                                        y="0px"
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
                                                                                                    d="M160.7,3.2C73.7,3.2,3.2,73.7,3.2,160.7s70.5,157.5,157.5,157.5s157.5-70.5,157.5-157.5S247.6,3.2,160.7,3.2z M160.7,290.6c-71.8,0-130-58.2-130-130s58.2-130,130-130s130,58.2,130,130S232.5,290.6,160.7,290.6z">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <span
                                                                                        class="whitespace-nowrap font-bold">Connect</span>
                                                                                </button>
                                                                                <!---->

                                                                            </div>
                                                                        </form>
                                                                        <!--END Set Account-->

                                                                        <!--Linked Account-->
                                                                        <div :class="linked ? 'block' : 'hidden'"
                                                                            class="flex flex-col space-y-3 justify-center items-center font-semibold hidden">
                                                                            <p class="font-bold text-green-600">
                                                                                Linked Payoneer Account
                                                                            </p>
                                                                            <p
                                                                                class="text-lg px-2 py-1 border border-gray-300 hover:border-green-500 hover:text-green-600 rounded-lg">
                                                                                Maisara@gmail.com
                                                                            </p>
                                                                            <button @click="linked = false"
                                                                                class="transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-indigo-500 text-gray-500 bg-white border-gray-400 hover:bg-indigo-500 hover:text-white hover:border-indigo-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-indigo-500"
                                                                                type="button">
                                                                                <svg class="h-5 w-5" fill="currentColor"
                                                                                    viewBox="0 0 24 24" width="512"
                                                                                    height="512">
                                                                                    <path
                                                                                        d="M22.853,1.148a3.626,3.626,0,0,0-5.124,0L1.465,17.412A4.968,4.968,0,0,0,0,20.947V23a1,1,0,0,0,1,1H3.053a4.966,4.966,0,0,0,3.535-1.464L22.853,6.271A3.626,3.626,0,0,0,22.853,1.148ZM5.174,21.122A3.022,3.022,0,0,1,3.053,22H2V20.947a2.98,2.98,0,0,1,.879-2.121L15.222,6.483l2.3,2.3ZM21.438,4.857,18.932,7.364l-2.3-2.295,2.507-2.507a1.623,1.623,0,1,1,2.295,2.3Z">
                                                                                    </path>
                                                                                </svg>
                                                                                <span
                                                                                    class="whitespace-nowrap font-bold">Edit</span>
                                                                            </button>
                                                                        </div>
                                                                        <!--END Linked Account-->

                                                                    </div>
                                                                    <!--toggle Content-->

                                                                </li>
                                                            </div> --}}
                                                            <!--END payoneer-->

                                                        </ul>
                                                        <!--END collapse content-->
                                                    </div>
                                                    <!--END Collapse box-->

                                                </div>
                                            </div>
                                            <!--/Manage Payment Methods-->

                                            <!--Payment Methods-->
                                            <div class="grid w-full grid-cols-2 gap-2 rounded-lg bg-slate-50 p-2">
                                                @if ($user->stripe_account_status)
                                                <div>
                                                    <input type="radio" wire:model="payout_method" name="option" id="1"
                                                        value="stripe" class="peer hidden" checked="">
                                                    <label for="1"
                                                        class="flex items-center justify-center cursor-pointer select-none rounded-lg p-2 text-center peer-checked:bg-indigo-500 peer-checked:font-bold peer-checked:text-white peer-hover:font-bold border border-transparent peer-hover:border-indigo-500 peer-active:scale-90 transition-all">
                                                        <svg class="w-5 h-5 mr-3 shrink-0" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="m.291 8.552a2.443 2.443 0 0 1 .153-2.566 4.716 4.716 0 0 1 1.668-1.5l7.501-3.904a5.174 5.174 0 0 1 4.774 0l7.5 3.907a4.716 4.716 0 0 1 1.668 1.5 2.443 2.443 0 0 1 .153 2.566 2.713 2.713 0 0 1 -2.416 1.445h-18.584a2.713 2.713 0 0 1 -2.417-1.448zm22.709 13.448a2 2 0 0 0 -2-2v-8h-2v8h-3v-8h-2v8h-4v-8h-2v8h-3v-8h-2v8a2 2 0 0 0 -2 2 1 1 0 0 0 0 2h22a1 1 0 0 0 0-2z">
                                                            </path>
                                                        </svg>
                                                        <span class="">Bank</span>
                                                    </label>
                                                </div>
                                                @endif
                                                @if ($user->paypal_email)
                                                <div>
                                                    <input type="radio" wire:model="payout_method" name="option" id="2"
                                                        value="paypal" class="peer hidden">
                                                    <label for="2"
                                                        class="flex items-center justify-center cursor-pointer select-none rounded-lg p-2 text-center peer-checked:bg-indigo-500 peer-checked:font-bold peer-checked:text-white peer-hover:font-bold border border-transparent peer-hover:border-indigo-500 peer-active:scale-90 transition-all">
                                                        <svg class="w-5 h-5 mr-3 shrink-0" fill="currentColor"
                                                            viewBox="0 0 384 512">
                                                            <path
                                                                d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4.7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9.7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z">
                                                            </path>
                                                        </svg>
                                                        <span class="">Paypal</span>
                                                    </label>
                                                </div>
                                                @endif
                                                {{-- <div>
                                                    <input type="radio" wire:model="payout_method" name="option" id="3"
                                                        value="3" class="peer hidden">
                                                    <label for="3"
                                                        class="flex items-center justify-center cursor-pointer select-none rounded-lg p-2 text-center peer-checked:bg-indigo-500 peer-checked:font-bold peer-checked:text-white peer-hover:font-bold border border-transparent peer-hover:border-indigo-500 peer-active:scale-90 transition-all">
                                                        <svg class="w-5 h-5 mr-3 shrink-0" fill="currentColor" x="0px"
                                                            y="0px" viewBox="0 0 321.4 321.4"
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
                                                                        d="M160.7,3.2C73.7,3.2,3.2,73.7,3.2,160.7s70.5,157.5,157.5,157.5s157.5-70.5,157.5-157.5S247.6,3.2,160.7,3.2z M160.7,290.6c-71.8,0-130-58.2-130-130s58.2-130,130-130s130,58.2,130,130S232.5,290.6,160.7,290.6z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="">Payoneer</span>
                                                    </label>
                                                </div> --}}
                                                @error('payout_method')
                                                <p class="text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <!--/Payment Methods-->
                                            <div class="relative group ">
                                                <input wire:model="withdraw_amount"
                                                    class="pr-0 w-full text-2xl font-bold h-10 rounded-lg mt-1 sm:truncate border-gray-300 focus:border-indigo-400 transition-colors peer"
                                                    id="withdrawal" required="" type="number">
                                                <label
                                                    class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center text-2xl font-bold group-focus-within:font-medium peer-valid:font-medium  group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                                    for="withdrawal">
                                                    Withdraw Amount
                                                </label>
                                                @error('withdraw_amount')
                                                <p class="text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div>
                                                @if (session('error'))
                                                <div class="mb-3 inline-flex w-full items-center rounded-lg bg-red-100 px-6 py-5 text-base text-red-700"
                                                    role="alert">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="times-circle" class="mr-2 h-4 w-4 fill-current"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="currentColor"
                                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                                        </path>
                                                    </svg>
                                                    {{ session('error') }}
                                                </div>
                                                @endif
                                                @if (session('success'))
                                                <div class="mb-3 inline-flex w-full items-center rounded-lg bg-green-100 px-6 py-5 text-base text-green-700"
                                                    role="alert">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="times-circle" class="mr-2 h-4 w-4 fill-current"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="currentColor"
                                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                                        </path>
                                                    </svg>
                                                    {{ session('success') }}
                                                </div>
                                                @endif
                                            </div>
                                            <!--withdraw button-->
                                            <button wire:click.prevent="withdrawRequest"
                                                class="flex items-center justify-between gap-x-2 text-base rounded-lg px-3 py-2 font-bold bg-indigo-500 hover:bg-indigo-600 active:scale-90 text-white transition-all">
                                                <svg class="shrink-0 h-6 w-6 fill-current" viewBox="0 0 24 24">
                                                    <path
                                                        d="M16,12.01c0-2.21-1.79-4-4-4s-4,1.79-4,4,1.79,4,4,4,4-1.79,4-4Zm-4,2c-1.1,0-2-.9-2-2s.9-2,2-2,2,.9,2,2-.9,2-2,2ZM20,0H4C1.79,0,0,1.8,0,4.01v1C0,7.21,1.79,9.01,4,9.01v10c0,2.76,2.24,5,5,5h6c2.76,0,5-2.24,5-5V9.01c2.21,0,4-1.79,4-4v-1C24,1.8,22.21,0,20,0Zm2,5c0,1.1-.9,2-2,2v-2c0-.55-.45-1-1-1s-1,.45-1,1v14c0,1.65-1.35,3-3,3h-6c-1.65,0-3-1.35-3-3V5.01c0-.55-.45-1-1-1s-1,.45-1,1v2c-1.1,0-2-.9-2-2v-1c0-1.1,.9-2,2-2H20c1.1,0,2,.9,2,2v1Zm-5,14.5c0,.83-.67,1.5-1.5,1.5s-1.5-.67-1.5-1.5,.67-1.5,1.5-1.5,1.5,.67,1.5,1.5Zm-7,0c0,.83-.67,1.5-1.5,1.5s-1.5-.67-1.5-1.5,.67-1.5,1.5-1.5,1.5,.67,1.5,1.5Z">
                                                    </path>
                                                </svg>
                                                <span>Withdraw</span>
                                            </button>
                                            <!--END withdraw button-->
                                            <!--/Withdraw Form-->


                                        </div>
                                        <!--/Sidebar Content-->

                                    </div>
                                </form>
                                <!--/Sidebar  Content-->

                                <!--Sidebar buttons-->
                                <div class="flex-shrink-0 px-4 py-4 space-x-4 flex justify-end">
                                    <div class="inline-flex rounded-md shadow-sm">
                                        <button @click="jopen = false"
                                            class="py-2 px-4 border border-gray-300 rounded-full text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-gray-500 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out"
                                            type="button">Cancel
                                        </button>
                                    </div>

                                    <div class="inline-flex rounded-md shadow-sm">
                                        <button
                                            class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-full text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-500 focus:shadow-outline-blue active:bg-indigo-700 transition duration-150 ease-in-out"
                                            type="submit">Publish
                                        </button>
                                    </div>
                                </div>
                                <!--/Sidebar buttons-->


                            </div>
                            <!--END Withdraw Sidebar-->


                        </div>
                    </div>
                </div>
                <!--Withdraw Sidebar-->

            </div>
            <!--/ stats and withdraw-->

            <!--search-->
            <div class="w-full my-8 flex items-center justify-center">
                <label class="sr-only" for="paysearch">Search Payments</label>
                <div class="relative w-full md:w-fit">
                    <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                        <!-- Heroicon name: solid/search -->
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input wire:model="search"
                        class="h-10 block bg-white text-gray-800 border border-gray-300 py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-colors    rounded-full w-full"
                        id="paysearch" placeholder="Search" type="search">
                </div>
            </div>
            <!---->

            <!-- Table -->
            <div class="overflow-hidden overflow-x-auto">
                <!-- Table Header-->
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="">
                        <tr class="text-center bg-white text-sm font-semibold text-gray-500">

                            <th class="whitespace-nowrap px-2 py-3.5 text-left"> Payment Type</th>

                            <th class="whitespace-nowrap px-2 py-3.5"> Product Price</th>
                            <th class="whitespace-nowrap px-2 py-3.5"> Discount</th>
                            <th class="whitespace-nowrap px-2 py-3.5"> Total Paid</th>

                            <th class="whitespace-nowrap px-2 py-3.5"> Payer</th>

                            <th class="whitespace-nowrap px-2 py-3.5"> Payee</th>

                            <th class="whitespace-nowrap px-2 py-3.5"> Course / Service</th>

                            {{-- <th class="whitespace-nowrap px-2 py-3.5"> Source</th> --}}

                            <th class="whitespace-nowrap px-2 py-3.5"> Traivis Commission</th>

                            <th class="whitespace-nowrap px-2 py-3.5"> MKT Commission</th>

                            <th class="whitespace-nowrap px-2 py-3.5"> Income</th>

                            <th class="whitespace-nowrap px-2 py-3.5"> Date</th>

                            <th class="whitespace-nowrap px-2 py-3.5"> Status </th>

                            <th class="whitespace-nowrap px-2 py-3.5"> Method</th>

                            <th class="whitespace-nowrap px-2 py-3.5"> Actions</th>

                        </tr>

                    </thead>

                    <!-- Table Raw -->
                    <tbody class="">
                        @foreach ($payments as $payment)
                        <tr
                            class="group/r text-center bg-white hover:bg-indigo-50 text-gray-500 hover:text-gray-900 font-semibold transition-all">
                            <td class="whitespace-nowrap px-2 py-4 text-left">
                                <div class="flex items-center gap-x-3 text-purple-500 relative group/t">
                                    @if ($payment->transaction_type=='Spending')
                                    <svg class="fill-current shrink-0 h-6 w-6 -scale-y-100" viewBox="0 0 24 24"
                                        width="512" height="512">
                                        <path
                                            d="M20,5c0-.55-.45-1-1-1H5c-.55,0-1,.45-1,1v14c0,2.76,2.24,5,5,5h6c2.76,0,5-2.24,5-5V5ZM8.5,21c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5,1.5,.67,1.5,1.5-.67,1.5-1.5,1.5Zm-.5-9c0-2.21,1.79-4,4-4s4,1.79,4,4-1.79,4-4,4-4-1.79-4-4Zm7.5,9c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5,1.5,.67,1.5,1.5-.67,1.5-1.5,1.5Zm-1.5-9c0,1.1-.9,2-2,2s-2-.9-2-2,.9-2,2-2,2,.9,2,2ZM24,4v1c0,1.47-.81,2.75-2,3.44V4c0-1.1-.9-2-2-2H4c-1.1,0-2,.9-2,2v4.44c-1.19-.69-2-1.97-2-3.44v-1C0,1.79,1.79,0,4,0H20c2.21,0,4,1.79,4,4Z">
                                        </path>
                                    </svg>
                                    @endif
                                    @if ($payment->transaction_type=='Income')
                                    <svg class="fill-current shrink-0 h-6 w-6" viewBox="0 0 24 24" width="512"
                                        height="512">
                                        <path
                                            d="M20,5c0-.55-.45-1-1-1H5c-.55,0-1,.45-1,1v14c0,2.76,2.24,5,5,5h6c2.76,0,5-2.24,5-5V5ZM8.5,21c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5,1.5,.67,1.5,1.5-.67,1.5-1.5,1.5Zm-.5-9c0-2.21,1.79-4,4-4s4,1.79,4,4-1.79,4-4,4-4-1.79-4-4Zm7.5,9c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5,1.5,.67,1.5,1.5-.67,1.5-1.5,1.5Zm-1.5-9c0,1.1-.9,2-2,2s-2-.9-2-2,.9-2,2-2,2,.9,2,2ZM24,4v1c0,1.47-.81,2.75-2,3.44V4c0-1.1-.9-2-2-2H4c-1.1,0-2,.9-2,2v4.44c-1.19-.69-2-1.97-2-3.44v-1C0,1.79,1.79,0,4,0H20c2.21,0,4,1.79,4,4Z">
                                        </path>
                                    </svg>
                                    @endif
                                    @if ($payment->transaction_type=='Earning')
                                    <svg class="fill-current shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            d="M9,4c0-2.209,3.358-4,7.5-4s7.5,1.791,7.5,4-3.358,4-7.5,4-7.5-1.791-7.5-4Zm7.5,6c-1.027,0-2.001-.115-2.891-.315-1.359-1.019-3.586-1.685-6.109-1.685-4.142,0-7.5,1.791-7.5,4s3.358,4,7.5,4,7.5-1.791,7.5-4c0-.029-.007-.057-.008-.086h.008v2.086c0,2.209-3.358,4-7.5,4S0,16.209,0,14v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v2c0,2.209-3.358,4-7.5,4S0,20.209,0,18v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v-.08c.485,.052,.986,.08,1.5,.08,4.142,0,7.5-1.791,7.5-4v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.209-3.358,4-7.5,4Z">
                                        </path>
                                    </svg>
                                    @endif
                                    @if ($payment->transaction_type=='Withdrawal')
                                    <p class="w-fit font-bold border-current border bg-purple-100 px-2 rounded-full">
                                        <span class="">Withdrawal</span>
                                    </p>
                                    @endif
                                    @if ($payment->transaction_type!='Withdrawal')
                                    <span
                                        class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                        {{ $payment->transaction_type }}
                                    </span>
                                    @endif
                                </div>
                            </td>

                            <td class="whitespace-nowrap px-2 py-4 font-bold">
                                <span class="text-sm">$ </span>
                                {{ $payment->product_price }}
                            </td>

                            <td class="whitespace-nowrap px-2 py-4 font-bold">
                                <span class="text-sm">$ </span>
                                {{ $payment->discount_amount }}
                            </td>
                            <td class="whitespace-nowrap px-2 py-4 font-bold">
                                <span class="text-sm">$ </span>
                                {{ $payment->amount_after_discount }}
                            </td>

                            <td class="whitespace-nowrap px-2 py-4">
                                @if ($payment->payerable)
                                <div class="flex flex-row gap-x-3 justify-center items-center">
                                    <div class="h-6 w-6 flex-shrink-0">
                                        <img alt="" class="h-7 w-7 rounded-full"
                                            src="{{ $payment->payerable->avatar }}">
                                    </div>
                                    <a class="" href="{{ $payment->payerable->url }}">{{ $payment->payerable->name}}</a>
                                </div>
                                @else
                                N/A
                                @endif
                            </td>

                            <td class="whitespace-nowrap px-2 py-4">
                                @if ($payment->payeeable)
                                <div class="flex flex-row gap-x-3 justify-center items-center">
                                    <div class="h-7 w-7 flex-shrink-0">
                                        <img alt="" class="h-7 w-7 rounded-full"
                                            src="{{ $payment->payeeable->avatar }}">
                                    </div>
                                    <a class="" href="{{ $payment->payeeable->url }}">{{ $payment->payeeable->name}}</a>
                                </div>
                                @else
                                N/A
                                @endif
                            </td>

                            <td class="whitespace-nowrap px-2 py-4">
                                @if ($payment->productable)
                                <div class="flex flex-row gap-x-3 justify-center items-center">
                                    <svg class="fill-current shrink-0 w-4 h-4" viewBox="0 0 24 24">
                                        <path
                                            d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                        </path>
                                    </svg>
                                    <a class="" href="{{ $payment->productable->url }}">{{
                                        Str::limit($payment->productable->title, 20, '...') }}</a>
                                </div>
                                @else
                                N/A
                                @endif
                            </td>

                            {{-- <td class="whitespace-nowrap px-2 py-4">
                                <div class="flex items-center gap-x-3 justify-center">
                                    @if ($payment->productable_type == \App\Models\Course::class)
                                    <div class="flex gap-x-2 items-center relative group/t">
                                        <svg class="fill-current shrink-0 mx-auto w-4 h-4" viewBox="0 0 24 24">
                                            <path
                                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                            </path>
                                        </svg>
                                        <span
                                            class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            Sales
                                        </span>
                                    </div>
                                    @endif

                                    <div class="flex gap-x-2 items-center relative group/t">
                                        <svg class="fill-current shrink-0 mx-auto w-4 h-4" viewBox="0 0 24 24">
                                            <path
                                                d="M23,13.5C23,8.355,16.021,2.372,13.881.661a3,3,0,0,0-3.762,0C7.979,2.372,1,8.354,1,13.5A6.272,6.272,0,0,0,7,20a5.82,5.82,0,0,0,3.93-1.659C10.75,20.805,10.115,22,8,22H5v2H19V22H16c-2.115,0-2.75-1.2-2.93-3.659A5.82,5.82,0,0,0,17,20,6.272,6.272,0,0,0,23,13.5Z">
                                            </path>
                                        </svg>
                                        <span
                                            class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            Karma
                                        </span>
                                    </div>
                                    <div class="flex gap-x-2 items-center relative group/t">
                                        <svg class="fill-current shrink-0 mx-auto w-4 h-4" viewBox="0 0 24 24">
                                            <path
                                                d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z">
                                            </path>
                                        </svg>
                                        <span
                                            class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            Influencers
                                        </span>
                                    </div>
                                </div>
                            </td> --}}
                            <td class="px-2 py-4 font-bold">
                                @if ($payment->transaction_type =='Income' || $payment->transaction_type =='Withdrawal')
                                <span class="text-sm">$ </span>{{ $payment->traivis_commission }}
                                @else
                                <span>N/A</span>
                                @endif
                            </td>
                            <td class="px-2 py-4 font-bold">
                                @if ($payment->transaction_type != 'Spending' && $payment->transaction_type !='Withdrawal')
                                <span class="text-sm">$ </span>{{ $payment->mkt_commission ?? 0 }}
                                @if ($payment->transaction_type =='Earning' && $payment->traivis_commission_from_mkt)
                                <span class="text-sm">($ {{ $payment->mkt_commission -
                                    $payment->traivis_commission_from_mkt }})</span>
                                @endif
                                @else
                                <span>N/A</span>
                                @endif
                            </td>
                            <td class="px-2 py-4 font-bold">
                                @if ($payment->transaction_type =='Income' || $payment->transaction_type =='Withdrawal')
                                <span class="text-sm">$ </span>{{ $payment->final_amount }}
                                @elseif ($payment->transaction_type == 'Earning')
                                <span class="text-sm">$ </span>{{ $payment->mkt_commission -
                                $payment->traivis_commission_from_mkt }}
                                @else
                                <span>N/A</span>
                                @endif
                            </td>

                            <td class="whitespace-nowrap px-2 py-4">
                                {{ $payment->created_at }}
                            </td>

                            <td class="whitespace-nowrap px-2 py-4">
                                <div class="flex items-center gap-x-3 justify-center">
                                    @if ($payment->transaction_status ==2)
                                    @if ($payment->transaction_type =='Spending')
                                    <div class="flex gap-x-2 items-center relative group/t">
                                        <svg class="fill-green-600 shrink-0 mx-auto w-4 h-4" viewBox="0 0 24 24">
                                            <path
                                                d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                            </path>
                                        </svg>
                                        <span
                                            class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            Completed
                                        </span>
                                    </div>
                                    @else
                                    <div class="flex gap-x-2 items-center relative group/t">
                                        <svg class="fill-green-600 shrink-0 mx-auto w-4 h-4" viewBox="0 0 24 24"
                                            width="512" height="512">
                                            <path
                                                d="M20,5c0-.55-.45-1-1-1H5c-.55,0-1,.45-1,1v14c0,2.76,2.24,5,5,5h6c2.76,0,5-2.24,5-5V5ZM8.5,21c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5,1.5,.67,1.5,1.5-.67,1.5-1.5,1.5Zm-.5-9c0-2.21,1.79-4,4-4s4,1.79,4,4-1.79,4-4,4-4-1.79-4-4Zm7.5,9c-.83,0-1.5-.67-1.5-1.5s.67-1.5,1.5-1.5,1.5,.67,1.5,1.5-.67,1.5-1.5,1.5Zm-1.5-9c0,1.1-.9,2-2,2s-2-.9-2-2,.9-2,2-2,2,.9,2,2ZM24,4v1c0,1.47-.81,2.75-2,3.44V4c0-1.1-.9-2-2-2H4c-1.1,0-2,.9-2,2v4.44c-1.19-.69-2-1.97-2-3.44v-1C0,1.79,1.79,0,4,0H20c2.21,0,4,1.79,4,4Z">
                                            </path>
                                        </svg>
                                        <span
                                            class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            Ready
                                        </span>
                                    </div>
                                    @endif
                                    @endif
                                    @if ($payment->transaction_status == 3)
                                    <div class="flex gap-x-2 items-center relative group/t">
                                        <svg class="fill-red-500 shrink-0 mx-auto w-4 h-4" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                            xml:space="preserve" width="512" height="512">
                                            <g>
                                                <path
                                                    d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256C511.847,114.678,397.322,0.153,256,0z    M341.333,311.189c8.669,7.979,9.229,21.475,1.25,30.144c-7.979,8.669-21.475,9.229-30.144,1.25c-0.434-0.399-0.85-0.816-1.25-1.25   L256,286.165l-55.168,55.168c-8.475,8.185-21.98,7.95-30.165-0.525c-7.984-8.267-7.984-21.373,0-29.64L225.835,256l-55.168-55.168   c-8.185-8.475-7.95-21.98,0.525-30.165c8.267-7.984,21.373-7.984,29.64,0L256,225.835l55.189-55.168   c7.979-8.669,21.475-9.229,30.144-1.25c8.669,7.979,9.229,21.475,1.25,30.144c-0.399,0.434-0.816,0.85-1.25,1.25L286.165,256   L341.333,311.189z">
                                                </path>
                                            </g>
                                        </svg>
                                        <span
                                            class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            {{ $payment->transaction_type =='Spending' ? 'Refunded' : 'Canceled' }}
                                        </span>
                                    </div>
                                    @endif
                                    @if ($payment->transaction_status == 1)
                                    @if ($payment->transaction_type =='Spending')
                                    <div class="flex gap-x-2 items-center relative group/t">
                                        <svg class="fill-green-600 shrink-0 mx-auto w-4 h-4" viewBox="0 0 24 24">
                                            <path
                                                d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                            </path>
                                        </svg>
                                        <span
                                            class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            Completed
                                        </span>
                                    </div>
                                    @else
                                    <div class="flex gap-x-2 items-center relative group/t">
                                        <svg class="fill-yellow-500 shrink-0 mx-auto w-4 h-4" viewBox="0 0 24 24"><path d="M16,9c0,1.654-1.346,3-3,3v1c-.005,1.308-1.995,1.307-2,0v-1h-.268c-1.067,0-2.063-.574-2.598-1.499-.277-.479-.113-1.09,.364-1.366,.479-.279,1.091-.114,1.366,.364,.179,.31,.511,.501,.867,.501h2.268c.998,.065,1.443-1.55,.355-1.761l-3.04-.506c-3.501-.651-2.748-5.753,.685-5.733V1c.005-1.308,1.995-1.307,2,0v1h.268c1.067,0,2.063,.574,2.598,1.499,.277,.479,.113,1.09-.364,1.366-.48,.277-1.091,.113-1.366-.364-.179-.31-.511-.501-.867-.501h-2.268c-.998-.065-1.443,1.55-.355,1.761l3.04,.506c1.342,.224,2.315,1.374,2.315,2.733Zm3.102-6h-1.276c.202,.566,.232,1.18,.073,1.774-.145,.54-.429,1.018-.824,1.394,1.906,2.424,.67,6.387-2.137,7.441-.617,3.087-5.12,3.167-5.851,.11-1.114-.39-2.077-1.169-2.684-2.219-.401-.691-.509-1.5-.302-2.275,.145-.54,.429-1.018,.824-1.394-1.01-1.307-1.208-3.322-.497-4.832h-1.53C1.621,2.904-.255,7.109,1.985,9.487l7.015,7.893v2.62c0,.314,.148,.611,.4,.8l4,3c.303,.229,.709,.263,1.047,.095,.339-.17,.553-.516,.553-.895v-5.62l7.015-7.892c2.24-2.38,.365-6.584-2.913-6.488Z"/></svg>
                                        <span
                                            class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            {{ $payment->transaction_type == 'Withdrawal' ? 'Pending' : 'On hold' }}
                                        </span>
                                    </div>
                                    @endif
                                    @endif
                                </div>
                            </td>

                            <td class="whitespace-nowrap px-2 py-4">
                                <div class="flex items-center gap-x-3 justify-center">
                                    @if ($payment->payment_method == 1)
                                    <div class="flex gap-x-2 items-center relative group/t">
                                        <svg class="fill-current shrink-0 mx-auto w-4 h-4" viewBox="0 0 24 24">
                                            <path
                                                d="m.291 8.552a2.443 2.443 0 0 1 .153-2.566 4.716 4.716 0 0 1 1.668-1.5l7.501-3.904a5.174 5.174 0 0 1 4.774 0l7.5 3.907a4.716 4.716 0 0 1 1.668 1.5 2.443 2.443 0 0 1 .153 2.566 2.713 2.713 0 0 1 -2.416 1.445h-18.584a2.713 2.713 0 0 1 -2.417-1.448zm22.709 13.448a2 2 0 0 0 -2-2v-8h-2v8h-3v-8h-2v8h-4v-8h-2v8h-3v-8h-2v8a2 2 0 0 0 -2 2 1 1 0 0 0 0 2h22a1 1 0 0 0 0-2z">
                                            </path>
                                        </svg>
                                        <span
                                            class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            Card
                                        </span>
                                    </div>
                                    @endif
                                        @if ($payment->payment_method == 2)
                                    <div class="flex gap-x-2 items-center relative group/t">
                                        <svg class="fill-current shrink-0 mx-auto w-4 h-4" viewBox="0 0 384 512">
                                            <path
                                                d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4.7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9.7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z">
                                            </path>
                                        </svg>
                                        <span
                                            class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            Paypal
                                        </span>
                                    </div>
                                        @endif
                                        @if ($payment->payment_method == 3)
                                            <div class="flex gap-x-2 items-center relative group/t">
                                                <svg class="fill-current shrink-0 mx-auto w-4 h-4" viewBox="0 0 384 512">
<g>
    <g>
        <path d="M806.582,235.309L766.137,87.125l-137.434,37.51L571.451,9.072L114.798,235.309H0v725.105h907.137V764.973h62.35v-337.53
			h-62.352V235.309H806.582z M718.441,170.63l17.654,64.68h-52.561h-75.887h-126.19l111.159-30.339l66.848-18.245L718.441,170.63z
			 M839.135,892.414H68V522.062v-129.13v-10.233v-69.787v-9.602h35.181h27.538h101.592h409.025h75.889h37.43h35.242h35.244h13.994
			v51.272v72.86h-15.357h-35.244h-87.85H547.508h-55.217v27.356v75.888v8.758v35.244v35.244v155.039h346.846v127.441H839.135z
			 M901.486,696.973h-28.352h-34H560.291V591.375v-35.244v-35.244v-23.889v-1.555h3.139h90.086h129.129h56.492h34h4.445h23.904
			V696.973z M540.707,100.191l21.15,42.688l-238.955,65.218L540.707,100.191z"/>
        <polygon points="614.146,564.57 614.146,576.676 614.146,631.152 680.73,631.152 680.73,564.57 658.498,564.57 		"/>
    </g>
</g>
</svg>
                                                <span
                                                        class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            Wallet
                                        </span>
                                            </div>
                                        @endif
{{--                                    <div class="flex gap-x-2 items-center relative group/t">--}}
{{--                                        <svg class="fill-current shrink-0 mx-auto w-4 h-4" x="0px" y="0px"--}}
{{--                                            viewBox="0 0 321.4 321.4" style="enable-background:new 0 0 321.4 321.4;"--}}
{{--                                            xml:space="preserve">--}}
{{--                                            <style type="text/css">--}}
{{--                                                .st0 {--}}
{{--                                                    fill-rule: evenodd;--}}
{{--                                                    clip-rule: evenodd;--}}
{{--                                                }--}}
{{--                                            </style>--}}
{{--                                            <g>--}}
{{--                                                <g>--}}
{{--                                                    <path class="st0"--}}
{{--                                                        d="M160.7,3.2C73.7,3.2,3.2,73.7,3.2,160.7s70.5,157.5,157.5,157.5s157.5-70.5,157.5-157.5S247.6,3.2,160.7,3.2z M160.7,290.6c-71.8,0-130-58.2-130-130s58.2-130,130-130s130,58.2,130,130S232.5,290.6,160.7,290.6z">--}}
{{--                                                    </path>--}}
{{--                                                </g>--}}
{{--                                            </g>--}}
{{--                                        </svg>--}}
{{--                                        <span--}}
{{--                                            class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">--}}
{{--                                            Payoneer--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
                                </div>
                            </td>
                            <td class="whitespace-nowrap px-2 py-4 cursor-pointer">
                                <div class="flex items-center gap-x-3 justify-cente">
                                    @if ($payment->is_refundable && $payment->payerable?->id == $user->id)
                                    <button @keyup.escape="Refund = false" @click="Refund = true"
                                        wire:click="$set('transactionId','{{ $payment->id }}')"
                                        class="flex items-center rounded-full p-1 justify-between text-sm text-white font-bold bg-slate-400 hover:bg-slate-500 active:scale-90 transition-all">
                                        <svg fill="currentColor" class="shrink-0 h-5 w-5" viewBox="0 0 24 24"><path d="M15,7H10.17V5.414A2,2,0,0,0,6.756,4L.876,9.879a3,3,0,0,0,0,4.242L6.756,20a2,2,0,0,0,3.414-1.414V17H16a6.006,6.006,0,0,1,6,6,1,1,0,0,0,2,0V16A9.01,9.01,0,0,0,15,7Z"/></svg>
                                        <span class="px-1">Refund</span>
                                    </button>
                                    @endif
                                    <a href="{{ route('transaction-invoice-for-user',$payment->id) }}">
                                        <svg class="shrink-0 mx-auto w-5 h-5" viewBox="0 0 24 24">
                                            <g data-name="01 align center" id="_01_align_center">
                                                <path
                                                    d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                </path>
                                                <path
                                                    d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                </path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!---->

    <!--Refund Popup-->
    <div class="">

        <!---Overlay BG---->
        <div x-show="Refund" x-transition:enter="ease-out " x-transition:enter-end="opacity-100 "
            x-transition:enter-start="opacity-0" x-transition:leave="ease-in " x-transition:leave-end="opacity-0"
            x-transition:leave-start="opacity-100 "
            class="pointer-events-non fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            style="display: none;">
        </div>
        <!---/Overlay BG---->

        <div x-show="Refund" x-transition:enter="ease-out duration-300" x-transition:enter-end="opacity-100 scale-100"
            x-transition:enter-start="opacity-0 sm:translate-y-0 scale-95" x-transition:leave="ease-in duration-100"
            x-transition:leave-end="opacity-0 sm:translate-y-0 scale-[0.8]"
            x-transition:leave-start="opacity-100 scale-100" aria-labelledby="modal-title" aria-modal="true"
            class="fixed z-30 inset-0 overflow-y-auto" role="dialog" style="display: none;">

            <!-- center-->
            <span aria-hidden="true" class="hidden sm:inline-block sm:align-middle sm:h-screen">​</span>
            <!---/center---->

            <!-- popup content-->
            <div @click.away="Refund = false"
                class=" absolute bottom-1/2 translate-y-1/2 right-1/2 translate-x-1/2 rounded-lg bg-slate-100 border border-gray-200 shadow-lg p-5 px-10"
                style="">

                <!--Refun confurmation-->
                <div x-show="!ConfirmRefund" class="">
                    <div class="flex flex-col justify-center mb-5">
                        <div class="text-gray-500 font-bold my-3 text-lg flex items-center justify-center gap-x-3">
                            <svg class="w-5 h-5 shrink-0 fill-gray-400" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512"
                                height="512">
                                <g>
                                    <path
                                        d="M256,512c141.385,0,256-114.615,256-256S397.385,0,256,0S0,114.615,0,256C0.153,397.322,114.678,511.847,256,512z    M234.667,128c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333v170.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V128z M256,384c11.782,0,21.333,9.551,21.333,21.333   s-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333S244.218,384,256,384z">
                                    </path>
                                </g>
                            </svg>
                            Are you shure you want to refund this item ?
                        </div>
                    </div>
                    <div class="flex items-center justify-evenly text-sm font-bold gap-x-2">
                        <div
                            class="group flex items-center rounded-full px-1 py-1.5 bg-slate-100 hover:bg-slate-200 border border-gray-300 hover:border-gray-400 text-gray-500 hover:text-gray-800 transition-all">
                            <button @click="Refund = false"
                                class="h-5 flex items-center justify-between gap-x-1 text-base">
                                <svg fill="currentColor" class="shrink-0 h-5 w-5" viewBox="0 0 24 24" width="512"
                                    height="512">
                                    <path
                                        d="M16,8a1,1,0,0,0-1.414,0L12,10.586,9.414,8A1,1,0,0,0,8,9.414L10.586,12,8,14.586A1,1,0,0,0,9.414,16L12,13.414,14.586,16A1,1,0,0,0,16,14.586L13.414,12,16,9.414A1,1,0,0,0,16,8Z">
                                    </path>
                                    <path
                                        d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z">
                                    </path>
                                </svg>
                                <span class="px-2">Cancel</span>
                            </button>
                        </div>

                        <div
                            class="group flex items-center rounded-full px-1 py-1.5 bg-indigo-500 hover:bg-indigo-600 text-white transition-all">
                            <button @click="Refund = false" wire:click="refund"
                                class="h-5 flex items-center justify-between gap-x-1 text-base">
                                <svg fill="currentColor" class="shrink-0 h-5 w-5" viewBox="0 0 24 24"><path d="M15,7H10.17V5.414A2,2,0,0,0,6.756,4L.876,9.879a3,3,0,0,0,0,4.242L6.756,20a2,2,0,0,0,3.414-1.414V17H16a6.006,6.006,0,0,1,6,6,1,1,0,0,0,2,0V16A9.01,9.01,0,0,0,15,7Z"/></svg>
                                <span class="px-2">Confirm Refund</span>
                            </button>
                        </div>
                    </div>

                </div>
                <!--/Refun confurmation-->

                <!--Refund results-->
                {{-- <div x-show="ConfirmRefund" class="" style="display: none;">
                    <!--Accepted-->
                    <div class="flex flex-col justify-center mb-5">
                        <div class="text-gray-500 font-bold my-3 text-lg flex items-center justify-center gap-x-3">
                            <svg class="w-5 h-5 shrink-0 fill-red-600" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512"
                                height="512">
                                <g>
                                    <path
                                        d="M256,512c141.385,0,256-114.615,256-256S397.385,0,256,0S0,114.615,0,256C0.153,397.322,114.678,511.847,256,512z    M234.667,128c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333v170.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V128z M256,384c11.782,0,21.333,9.551,21.333,21.333   s-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333S244.218,384,256,384z">
                                    </path>
                                </g>
                            </svg>
                            You can't make a refund for this course
                        </div>
                        <p class=" font-medium text-sm text-gray-900 text-center">You can't make a refund for this
                            course because you have open it</p>
                    </div>
                    <!--/Accepted-->
                    <!--Rejected-->
                    <div class="flex flex-col justify-center mb-5">
                        <div class="text-gray-500 font-bold my-3 text-lg flex items-center justify-center gap-x-3">
                            <svg class="w-5 h-5 shrink-0 fill-gray-400" viewBox="0 0 24 24">
                                <path
                                    d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm-.091,15.419c-.387.387-.896.58-1.407.58s-1.025-.195-1.416-.585l-2.782-2.696,1.393-1.437,2.793,2.707,5.809-5.701,1.404,1.425-5.793,5.707Z">
                                </path>
                            </svg>
                            Your request has been sent
                        </div>
                        <p class=" font-medium text-sm text-gray-900 text-center">The total amount will be refunded to
                            the same payment method within 5 - 7 days</p>
                    </div>
                    <!--/Rejected-->
                </div> --}}
                <!--/Refund results-->
            </div>
            <!--/popup content -->
        </div>
    </div>
    <!--/Refund Popup-->
</div>