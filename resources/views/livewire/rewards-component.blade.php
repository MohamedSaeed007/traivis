
    <div class="flex w-full flex-col px-4 sm:px-6 lg:px-8">

        <!--head-->
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">My Rewards</h1>
                <p class="flex flex-row  items-center mt-2 mb-5  text-sm font-semibold">
                    Total
                    <span class=" rounded-full p-3.5 px-1.5 w-fit h-5 flex justify-center items-center mx-2 bg-gray-400  font-bold text-white">
                        {{$business_rewards->count()}}
                        </span>
                    Rewards
                </p>
            </div>
        </div>
        <!--END header-->


        <!--content-->
        <div>

            <!--Table-->
            <table class="min-w-full">
                <thead class="text-center text-sm font-semibold text-gray-500">
                <tr class="whitespace-nowrap border-b border-gray-300 ">
                    <th class="p-3 ">
                        <p class="sr-only">Reward Name</p>
                    </th>

                    <th class="p-3 ">
                        <p>From</p>
                    </th>

                    <th class="p-3 hidden lg:table-cell">
                        <p>Recieved at</p>
                    </th>

                    <th class="p-3 hidden md:table-cell">
                        <p>Expire at</p>
                    </th>

                    <th class="p-3 ">
                        <p>Status</p>
                    </th>

                    <th class="p-3 ">
                        <p class="sr-only">View</p>
                    </th>
                </tr>
                </thead>

                <tbody class="">

                @forelse($business_rewards as $reward)
                    <!--row 1-->
                    <tr class="whitespace-nowrap text-center hover:bg-traivis-50 table-row text-gray-600 hover:text-gray-900">
                        <td class="p-3 ">
                            <div class="flex items-center justify-start space-x-3">
                                <svg class="w-8 h-8 flex-shrink-0" fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.731-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035C4.643,1.54,1.534,4.584,1.96,7.792c-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.731,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.139,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-16-3c.006-1.308,1.994-1.308,2,0-.006,1.308-1.994,1.308-2,0Zm2.832,6.555c-.308,.463-.933,.581-1.387,.277-.46-.306-.584-.927-.277-1.387l4-6c.306-.459,.926-.585,1.387-.277,.46,.306,.584,.927,.277,1.387l-4,6Zm4.168,.445c-1.308-.006-1.308-1.994,0-2,1.308,.006,1.308,1.994,0,2Z"/></svg>
                                <p class="font-bold text-gray-700 whitespace-pre-wrap text-left">{{$reward->reward_name}}<span class="ml-2 text-traivis-500 ">#4562</span></p>
                            </div>
                        </td>

                        <td class="p-3 ">
                            <a href="#" class="flex items-center justify-center font-bold space-x-2">
                                <img class="w-10 h-10  bg-cover rounded-full" src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="">
                                <span class=" text-traivis-500 ">{{$reward->reward_provider}}</span>
                            </a>
                        </td>

                        <td class="p-3 hidden lg:table-cell">
                            <p>{{$reward->reward_date}}</p>
                        </td>

                        <td class="p-3 hidden md:table-cell">
                            <p>{{$reward->updated_at}}</p>
                        </td>

                        <td class="p-3 ">
                            <x-tooltip-arrow direction="up">
                                <div class="">
                                    <span class="whitespace-nowrap font-bold text-sm text-green-500 border-green-500 border bg-green-100 px-2 rounded-full">
                                       {{$reward->status==1 || ($status_update=='1' && $status_update_id==$reward->id)?'Claimed':'Pending'}}
                                    </span>
                                </div>
                                <x-slot name="text">
                                    Check your email for the
                                    </br> claiming instructions
                                </x-slot>
                            </x-tooltip-arrow>
                        </td>

                        <td class="p-3">
                            <div @click.outside="Topen = false"
                                 @keydown.window.escape.stop="Topen = false"
                                 class="flex justify-center"
                                 x-data="{Topen:false}">

                                <!----- button----------->
                                <button @click="Topen = !Topen"
                                        class="transition inline-flex items-center mx-auto hover:text-gray-900" type="button">
                                    <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" width="512" height="512" ><g id="_01_align_center" data-name="01 align center"><path d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z"></path><path d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"></path></g></svg><span class="sr-only">, Lindsay Walton</span></a>
                                </button>
                                <!-----END button----------->

                                <!-----Start popup window----------->
                                <div class="fixed top-24 left-0 right-0 lg:w-3/5 md:w-4/5 w-4/5 h-fit p-6 pb-0 mx-auto bg-white rounded-2xl shadow-2xl" style="z-index: 99"
                                     x-show="Topen" x-cloak @keydown.window.escape.stop="Topen = false" @click.outside="Topen = false">
                                    <div class="flex flex-col w-full justify-items-center relative text-gray-500">

                                        <!-------popup window------->

                                        <div class="flex items-center space-x-3 text-lg font-bold">
                                            <img class="rounded-full h-12 w-12 bg-cover" src="cover.jpg">
                                            <span class=> {{$reward->reward_provider}}</span>
                                        </div>


                                        <div class="py-5" style="text-align: center;margin: auto">
                                            <p class="whitespace-pre-wrap">
                                                {{$reward->description}}
                                            </p>
                                        </div>
                                        <!-------popup window------->

                                        <!--act buttons-->
                                        <div class="flex flex-row justify-evenly items-center px-3 py-5 space-x-2">
                                            <a href="#" class="px-3 py-1.5 font-bold text-md rounded-full bg-traivis-50 border border-gray-500 text-gray-500 hover:text-traivis-500 hover:bg-traivis-50 hover:border-traivis-500">
                                                Cancel</a>
                                            @if($status_update_id!=$reward->id)
                                            <a  class="px-3 py-1.5 font-bold text-md rounded-full bg-traivis-500 border
                                            border-traivis-500 text-white hover:text-white hover:bg-traivis-600 hover:border-traivis-500 cursor-pointer"
                                             wire:click="claimReward('{{$reward->id}}')">
                                                Claim
                                            </a>
                                            @endif
                                        </div>
                                        <!---->
                                    </div>

                                </div>
                                <div x-show="Topen" x-cloak class="bg-black opacity-50 inset-0 fixed h-screen z-50"  ></div>
                                <!-----END popup window----------->

                            </div>
                        </td>
                    </tr>
                    <!--END Row-->

                @empty
                    <tr>
                        <td colspan="10" style="text-align: center">No Data found.</td>
                    </tr>
                @endforelse



                </tbody>
            </table>
            <!--Table-->

        </div>
        <!--content-->



    </div>


