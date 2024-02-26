<div>
    <!--Dash Main Grid-->
    <div class="w-full mx-auto flex">
        <!-- Dash Content -->
        <div class="ml-[80px] mt-[70px] w-full " x-data="{open:@entangle('open')}" x-show="open">

            <section x-transition:enter="ease-out duration-100"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

                <div aria-labelledby="modal-title" aria-modal="true" class="fixed z-[999] inset-0 overflow-y-auto"
                    role="dialog">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                        <!---over BG---->
                        <div @click="open = false" aria-hidden="true"
                            class=" fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity ">
                        </div>
                        <!-- center-->
                        <span aria-hidden="true" class="hidden sm:inline-block sm:align-middle sm:h-screen">​</span>
                        <!---END over BG---->


                        <!-- popup content-->
                        <div
                            class="relative inline-block overflow-y-hidden bg-white rounded-lg p-4 text-left shadow-xl transform transition-all my-8 align-middle w-full max-w-3xl sm:w-2/3">
                            @if ($transaction)
                            <!---->
                            <div class="overflow-y-hidden">
                                <div class="w-full h-full flex flex-row ">
                                    <div class=" w-[35%] container p-3  rounded-lg bg-white ">


                                        <!-- header-->
                                        <div class=" flex flex-row items-center justify-between border-b">
                                            <div class="flex items-center pb-2">
                                                <div class="flex-shrink-0">
                                                    <img alt="" class="h-10 w-10 rounded-full bg-cover"
                                                        src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                                </div>

                                                <div class="ml-4">
                                                    <a class="whitespace-nowrap font-medium font-bold text-gray-900"
                                                        href="#">{{ $transaction->payerable->name }}</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <a type="button"
                                                class=" bg-white transition-colors  text-gray-600  hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-traivis-500">
                                                <!-- Heroicon name: outline/users -->
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                    xml:space="preserve" fill="currentColor"
                                                    class="mr-3 flex-shrink-0 h-6 w-6 text-traivis group-hover:text-traivis-700">
                                                    <path
                                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                    </path>
                                                </svg>


                                                <span class="flex-1 font-medium text-gray-900">
                                                    {{ substr($course->title,0,20) }}
                                                </span>
                                                <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->

                                            </a>
                                        </div>
                                        <div class="mt-4">
                                            <div type="button"
                                                class=" bg-white transition-colors  text-gray-600  hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-traivis-500">

                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor"
                                                    class="mr-3 flex-shrink-0 h-6 w-6 text-traivis group-hover:text-traivis-700">
                                                    <path
                                                        d="m22 12v-7a5.006 5.006 0 0 0 -5-5h-10a5.006 5.006 0 0 0 -5 5v7z">
                                                    </path>
                                                    <path
                                                        d="m23 14h-22a1 1 0 0 0 0 2h10v4h-2a3 3 0 0 0 -3 3 1 1 0 0 0 2 0 1 1 0 0 1 1-1h6a1 1 0 0 1 1 1 1 1 0 0 0 2 0 3 3 0 0 0 -3-3h-2v-4h10a1 1 0 0 0 0-2z">
                                                    </path>
                                                </svg>


                                                <span class="flex-1 ">
                                                    {{ $courseType }}
                                                </span>
                                                <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->

                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div type="button"
                                                class=" bg-white transition-colors  text-gray-600  hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-traivis-500">


                                                <span><svg
                                                        class="mr-3 flex-shrink-0 h-6 w-6 text-traivis group-hover:text-traivis-700 "
                                                        fill="currentColor" id="Layer_1" height="512"
                                                        viewBox="0 0 24 24" width="512"
                                                        xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                                        <path
                                                            d="m17 0a1 1 0 0 0 -1 1c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a3.979 3.979 0 0 0 1.514 3.109l3.572 7.972a3.233 3.233 0 0 0 2.953 1.919 2.982 2.982 0 0 0 2.72-4.2l-2.2-4.8h2.441c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0v-18a1 1 0 0 0 -1-1zm-8.063 20.619a.983.983 0 0 1 -.898 1.381 1.232 1.232 0 0 1 -1.126-.734l-2.808-6.266h2.254zm7.063-6.019a7.723 7.723 0 0 0 -5-1.6h-7a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h7a7.723 7.723 0 0 0 5-1.595zm7.9.852a1 1 0 0 1 -1.342.448l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 .448 1.337zm-3.79-9a1 1 0 0 1 .448-1.342l2-1a1 1 0 1 1 .894 1.79l-2 1a1 1 0 0 1 -1.342-.448zm-.11 3.548a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1 -1-1z">
                                                        </path>
                                                    </svg></span>


                                                <span class=" ">Marketing Features </span>

                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h2 class="text-3xl font-bold">${{ $transaction->product_price }}</h2>
                                        </div>
                                        <div class="mt-4">
                                            <button type="button"
                                                class=" bg-white transition-colors  text-gray-600  hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-traivis-500">




                                                <span class="flex-1 "> <span class=""> Recieved On :</span>
                                                    {{ $transaction->created_at }} </span>
                                                <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->





                                            </button>
                                        </div>
                                        <!--END  header-->



                                    </div>
                                    <div class="w-[2%] border-l border-indigo-500"></div>
                                    <div class="w-[65%] mt-6">
                                        <div class="font-bold">Student Transaction Details</div>
                                        <div class="flex flex-row items-center">
                                            <hr class="w-3/4">
                                            <span class="w-1/4"><button
                                                    class="bg-traivis-500 p-1 px-3 rounded-full text-white">success</button></span>

                                        </div>

                                        <div class="flex flex-row justify-between items-start ">
                                            <ul class="max-w-md w-3/4 space-y-3 text-gray-500 mt-4  ">
                                                <li>
                                                    Transaction Id :
                                                </li>
                                                <li>
                                                    Payment Ammount :
                                                </li>
                                                <li>
                                                    Traivis Fees :
                                                </li>
                                                <li>
                                                    Discount :
                                                </li>
                                                <li class="font-bold" style="margin-top: 25px !important;">
                                                    Net Amount :
                                                </li>
                                                <li>
                                                    Payment Method :
                                                </li>
                                            </ul>
                                            <ul class="w-1/4 space-y-3 text-gray-500 mt-4   ">
                                                <li>{{ $transaction->transaction_num }}</li>
                                                <li>${{ $transaction->product_price }}</li>
                                                @if ($transaction->traivis_commission)
                                                <li>-${{ $transaction->traivis_commission }}</li>
                                                @endif
                                                @if ($transaction->discount)
                                                <li>-${{ $transaction->discount }}</li>
                                                @endif
                                                <li>
                                                    <hr>
                                                </li>
                                                <li class="font-bold">${{ $transaction->final_amount }}</li>
                                                <li>Card</li>
                                            </ul>
                                        </div>
                                        <div class="mt-8 font-bold">Instructor Payments </div>
                                        <div class="flex flex-row items-center">


                                            <hr class="w-3/4">
                                            <span class="w-1/4"><button
                                                    class="bg-yellow-500 p-1 px-3 rounded-full font-bold text-white">On-hold
                                                    <span class="text-sm">({{ $holdPercentage
                                                        }}%)</span></button></span>

                                        </div>
                                        <div class="flex flex-row justify-between items-start ">
                                            <ul class="max-w-md w-3/4 space-y-3 text-gray-500 mt-4  ">
                                                <li style="margin-bottom: 40px !important;">
                                                    Released Payments
                                                </li>
                                                <li class="list-none">

                                                </li>
                                                <li>
                                                    On-hold :

                                                </li>

                                            </ul>
                                            <ul class="w-1/4 space-y-3 text-gray-500 mt-4   ">
                                                <li>${{ $transaction->balance }}</li>
                                                <li
                                                    style="margin-top: 5px !important; margin-bottom: 25px !important; font-size: 12px;">
                                                    {{ $transaction->created_at }}</li>
                                                <li>${{ $transaction->hold_balance }}</li>



                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!---->
                            @endif
                        </div>
                        <!--END popup content -->

                    </div>
                </div>
            </section>
        </div>
        <!-- Dash Content -->
    </div>
    <!--End Dash Main Grid-->
</div>