@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
{{-- @can('managing_financials') --}}
<!-- Page Content -->
<div class="flex w-full flex-col px-4 ">

    <!--head-->
    <div class="sm:flex sm:items-center print:hidden">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Invoice</h1>
            <p class="mt-2 text-sm text-gray-700">#{{$transaction->id}}</p>
        </div>
    </div>
    <!--END header-->


    <!--content-->
    <section class="">
        <div class="m-6 mb-32 mx-auto print:m-0">

            <div
                class="relative flex flex-col mx-auto p-10 shadow-2xl lg:w-[929px] md:w-[744px] sm:w-[496px] w-[372px] h-fit print:w-full print:shadow-none print:p-0 print:py-4">

                <div class="text-black font-medium">

                    <!--Invoice Header-->
                    <div class="flex flex-row w-full justify-between items-center pb-8 border-b-2 border-gray-300">

                        <svg class="h-14 w-14 text-traivis-500  flex-shrink-0" fill="currentColor" viewBox="0 0 800 800"
                            style="enable-background:new 0 0 800 800;" xml:space="preserve">
                            <path d="M113.7,510.1c-7.4,3.1-10.8,11.6-7.7,18.8c3.2,7.4,11.7,10.7,19,7.6c7.4-3.1,10.8-11.6,7.7-18.8
                            C129.6,510.4,121.1,507,113.7,510.1z M691.8,170.5c-47-46.7-235.1-101.8-269.4-101.8c-30.7,0-182.4,48-243.8,88.5
                            c-35.5,18.5-59.8,56.1-59.8,97.1c0,0,0,23.8,0,56.3v180.4c8.2-175.9,8.8-225.8,22.6-244.5c0.5-0.6,0.9-1.2,1.5-1.8
                            c0.7-0.8,1.5-1.8,2.2-2.6c0.5-0.6,0.9-1.1,1.4-1.6c0.8-0.9,1.8-1.9,2.6-2.7c0.4-0.4,0.8-0.8,1.2-1.2c1.3-1.3,2.7-2.5,4.1-3.7
                            c0.3-0.2,0.6-0.5,0.8-0.7c1.1-1,2.3-2,3.4-2.9c0.6-0.4,1-0.8,1.6-1.2c0.9-0.7,1.9-1.4,2.9-2.1c0.7-0.5,1.2-0.8,1.9-1.3
                            c0.9-0.7,1.9-1.3,2.8-1.9c0.7-0.4,1.3-0.8,2-1.2c0.9-0.6,2-1.1,3-1.7c0.7-0.4,1.3-0.7,2-1.1c1-0.6,2.1-1.1,3.2-1.7
                            c0.7-0.3,1.2-0.7,1.9-0.9c1.3-0.7,2.7-1.2,4-1.8c0.4-0.2,0.8-0.4,1.2-0.6c1.7-0.7,3.4-1.4,5.2-2c45.6,26.4,128.9,53.9,185.5,66.4
                            v323.5c0,72.1,59.2,130.5,132.1,130.5H585c-32.4,0-120.2-1.6-120.2-130.5V278.7C554.4,259.1,719.5,198,691.8,170.5z M426.1,234
                            c-43.1,0-233.8-55.9-205.5-83.2c31.9-30.8,180.1-73.9,205.5-73.9c25.5,0,176.8,40.1,211.9,73.9C662.9,174.7,469.2,234,426.1,234z
                             M426.8,116.7c-12.3,0-83.6,20.9-99,35.7c-13.6,13.1,78.2,40.2,99,40.2c20.7,0,114-28.6,102.1-40.2
                            C512,136.1,439.2,116.7,426.8,116.7z M627,790H173c-90,0-163-73-163-163V173C10,83,83,10,173,10h454c90,0,163,73,163,163v454
                            C790,717,717,790,627,790z" />
                        </svg>


                        <div class="">
                            <p class="">
                                <span class="text-gray-500 font-bold mr-2"> ID </span>
                                #{{$transaction->id}}
                            </p>
                            <p class="">
                                <span class="text-gray-500 font-bold mr-2"> Date </span>
                                {{$transaction->created_at}}
                            </p>
                        </div>

                    </div>
                    <!--END Invoice Header-->

                    <!--Payer info-->
                    <div class="flex flex-row w-full justify-between items-center pt-4 my-3">
                        @if ($transaction->payerable)
                        <div class=" flex flex-col gap-y-2 ">
                            <p class="text-gray-500 font-bold text-xl flex items-center gap-x-2">
                                <svg class="h-5 w-5 -m-1" fill="currentColor" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path d="M259.5,375.2V136.8c0-11.8,9.6-21.3,21.3-21.3c5.7,0,11.1,2.2,15.1,6.2l119.2,119.2c8.3,8.3,8.3,21.8,0,30.2L295.9,390.3
                                    c-8.3,8.3-21.8,8.3-30.2,0C261.7,386.2,259.5,380.8,259.5,375.2z M320.4,7C191.8,17.3,90.7,124.8,90.7,256s101.1,238.7,229.7,249
                                    c10.8,0.9,20-7.7,20-18.6v0c0-9.7-7.5-17.8-17.2-18.6c-109-8.8-194.8-100-194.8-211.3S214.2,54,323.2,45.2
                                    c9.7-0.8,17.2-8.8,17.2-18.6v-1C340.4,14.8,331.2,6.2,320.4,7z" />
                                </svg>
                                <span class="">Payer</span>
                            </p>
                            <p class="">
                                <span class="text-gray-500 font-bold mr-2"> Name </span>
                                {{$transaction->payerable->name}}
                            </p>
                            @if ($transaction->payerable->company_name)
                            <p class="">
                                <span class="text-gray-500 font-bold mr-2"> Company </span>
                                {{ $transaction->payerable->company_name }}
                            </p>
                            @endif
                            @if ($transaction->payerable->address)
                            <p class="">
                                <span class="text-gray-500 font-bold mr-2"> Address </span>
                                {{$transaction->payerable->address}}
                            </p>
                            @endif
                        </div>
                        @endif
                        @if ($transaction->payeeable)
                        <div class=" flex flex-col gap-y-2 ">
                            <p class="text-gray-500 font-bold text-xl flex items-center gap-x-2">
                                <svg class="h-5 w-5 -m-1" fill="currentColor" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path
                                        d="M90.7,375.2V136.8c0-11.8,9.6-21.3,21.3-21.3c5.7,0,11.1,2.2,15.1,6.2l119.2,119.2c8.3,8.3,8.3,21.8,0,30.2L127.1,390.3
                                    c-8.3,8.3-21.8,8.3-30.2,0C92.9,386.2,90.7,380.8,90.7,375.2z M171.6,25.6v1c0,9.7,7.5,17.8,17.2,18.6
                                    c109,8.8,194.8,100,194.8,211.3S297.8,459,188.8,467.8c-9.7,0.8-17.2,8.8-17.2,18.6v0c0,10.8,9.2,19.4,20,18.6
                                    c128.6-10.2,229.7-117.8,229.7-249S320.2,17.3,191.6,7C180.8,6.2,171.6,14.8,171.6,25.6z" />
                                </svg>
                                <span class="">Payee</span>
                            </p>
                            <p class="">
                                <span class="text-gray-500 font-bold mr-2"> Name </span>
                                {{ $transaction->payeeable->name }}
                            </p>
                            {{-- <p class="">
                                <span class="text-gray-500 font-bold mr-2"> Company </span>
                                {{ $transaction->payeeable->business_name }}
                            </p> --}}
                            {{-- <p class="">
                                <span class="text-gray-500 font-bold mr-2"> Adress </span>
                                {{ $transaction->payeeable->business_name }}
                            </p> --}}
                        </div>
                        @endif
                    </div>
                    <!--END Payer info-->

                    <!--Invoice Details-->
                    <div class="flex flex-row w-full justify-center items-center py-6">
                        <table class="w-full ">

                            <thead class="">
                                <tr class="h-12 text-gray-500 font-bold border-y-2 border-gray-300 text-left">
                                    <th class="w-1/2"> Description </th>
                                    <th class="w-1/2"> Amount </th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($transaction->courses as $course) --}}
                                {{-- @if ($transaction->productable) --}}
                                <tr class="h-10 border-b-2 text-left">
                                    <td class="w-1/2 py-2">
                                        <p class="flex items-start gap-x-4">
                                            <svg class="w-4 h-4 mt-1 text-gray-500 flex-shrink-0" fill="currentColor"
                                                height="512" viewBox="0 0 24 24" data-name="Layer 1">
                                                <path
                                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                            </svg>
                                            <span> {{$transaction->productable ? Str::limit($transaction->productable->title,20) : 'Withdraw'}} </span>
                                        </p>
                                    </td>
                                    <td class="w-1/2 py-2">
                                        <p class=" "> $ {{$transaction->product_price}} </p>
                                    </td>
                                </tr>
                                {{-- @endif --}}
                                {{-- @endforeach --}}
                            </tbody>

                        </table>
                    </div>
                    <!--END Invoice Details-->



                    <!--Total Payment-->
                    <div class="w-1/2 flex flex-row w-full ml-auto items-center py-6">
                        <div class="w-2/3 flex flex-col gap-y-2 whitespace-nowrap truncate">
                            <p class="text-gray-500 font-bold">
                                Subtotal
                            </p>
                            {{-- <p class="">
                                Tax
                            </p> --}}
                            {{-- @if (!$forUser) --}}
                            <p class="">
                                Traivis Fee
                            </p>
                            {{-- @endif --}}
                            @if ($transaction->discount > 0)
                            <p class="">
                                Voucher/Discount
                            </p>
                            @endif
                            <p class="text-gray-500 font-bold mt-4">
                                Total
                            </p>
                            @if (!$forUser)
                            <p class="">
                                Paid
                            </p>
                            <p class="text-gray-500 font-bold text-lg mt-4">
                                Total Due
                            </p>
                            @endif
                        </div>

                        <div class="w-1/3 flex flex-col gap-y-2 whitespace-nowrap truncate">
                            <p class="text-gray-500 font-bold">
                                $ {{ $transaction->product_price }}
                            </p>
                            {{-- <p class="">
                                $ 0
                            </p> --}}
                            {{-- @if (!$forUser) --}}
                            <p class="">
                                $ {{ $transaction->traivis_commission }}
                            </p>
                            {{-- @endif --}}
                            @if ($transaction->discount)
                            <p class="">
                                $ {{ $transaction->discount }}
                            </p>
                            @endif
                            <p class="text-gray-500 font-bold mt-4">
                                $ {{$transaction->final_amount}}
                            </p>
                            @if (!$forUser)
                            <p class="">
                                $ {{$transaction->final_amount - $transaction->hold_balance}}
                            </p>
                            <p class="text-gray-500 font-bold text-lg mt-4">
                                $ {{$transaction->hold_balance}}
                            </p>
                            @endif
                        </div>
                    </div>

                    <!--END Total Payment-->

                    <!--Invoice Footer-->
                    <div class="flex flex-wrap justify-center mt-8 pt-8 border-t-2 border-gray-300">
                        <p class="w-2/3 font-bold text-gray-500 text-center">
                        Thank you for being part of the Traivis Community. Don't hesitate to contact us if you have any questions or concerns.
                        </p>
                    </div>
                    <!--END Invoice Footer-->

                </div>
            </div>

        </div>
    </section>
    <!--End content-->

    <!--print-->
    <div class="fixed right-16 bottom-16 print:hidden">
        <button onclick="window.print()"
            class="transition inline-flex items-center px-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm group w-10 h-10 hover:w-fit flex space-x-2 focus:w-fit hover:px-3.5 focus:px-3.5 text-white bg-traivis-500 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
            type="button">
            <svg class="h-5 w-5" data-name="Layer 1" fill="currentColor" viewBox="0 0 24 24" width="512" height="512">
                <path
                    d="M19,6V4a4,4,0,0,0-4-4H9A4,4,0,0,0,5,4V6a5.006,5.006,0,0,0-5,5v5a5.006,5.006,0,0,0,5,5,3,3,0,0,0,3,3h8a3,3,0,0,0,3-3,5.006,5.006,0,0,0,5-5V11A5.006,5.006,0,0,0,19,6ZM7,4A2,2,0,0,1,9,2h6a2,2,0,0,1,2,2V6H7ZM17,21a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V17a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Zm5-5a3,3,0,0,1-3,3V17a3,3,0,0,0-3-3H8a3,3,0,0,0-3,3v2a3,3,0,0,1-3-3V11A3,3,0,0,1,5,8H19a3,3,0,0,1,3,3Z">
                </path>
                <path d="M18,10H16a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"></path>
            </svg>
            <span class="hidden group-hover:block group-focus:block whitespace-nowrap font-bold">Print</span>
        </button>
    </div>

    <!---->


</div>
<!-- Page Content -->
{{-- @endcan --}}
@endsection