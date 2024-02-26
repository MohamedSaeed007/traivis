<div>
    <div class="flex w-full flex-col px-1  ">

        <!--head-->
        <div>
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">@lang('Biddings &Tenders')</h1>
                    <p class="mt-2 text-sm text-gray-700">Create and publish a tender to receive customise quotes that
                        meet
                        your standards</p>
                </div>
            </div>
        </div>

        <!--END header-->


        <!--content-->
        <div>
            <section class="">
                <div class="container mx-auto">

                    <div class="">


                        <div class="p-4 h-auto">
                            <section class="">
                                <div class="">


                                    <!--table header-->
                                    <div class="flex flex-wrap items-center justify-between -m-2 mb-4">
                                        <div
                                            class="flex flex-row items-center w-full md:w-1/2 p-2  text-gray-600 text-lg">
                                            <span
                                                class=" rounded-full p-4 w-fit h-5 flex justify-center items-center mr-2 bg-gray-400 text-base font-bold text-white">{{ $biddings->count() }}</span>
                                            <p class="font-semibold">@lang('Tenders')</p>
                                        </div>
                                        <div class="w-full md:w-1/2 p-2">
                                            <div class="relative md:max-w-max md:ml-auto">
                                                <svg class="absolute left-3 transform top-1/2 -translate-y-1/2"
                                                    fill="none" height="16" viewbox="0 0 16 16" width="16"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.0467 11.22L12.6667 9.80667C12.3699 9.5245 11.9955 9.33754 11.5916 9.26983C11.1876 9.20211 10.7727 9.25673 10.4001 9.42667L9.80008 8.82667C10.5071 7.88194 10.83 6.70445 10.7038 5.53122C10.5775 4.358 10.0115 3.27615 9.1197 2.50347C8.22787 1.73078 7.07643 1.32464 5.89718 1.36679C4.71794 1.40894 3.59844 1.89626 2.76405 2.73065C1.92967 3.56503 1.44235 4.68453 1.4002 5.86378C1.35805 7.04302 1.76419 8.19446 2.53687 9.08629C3.30956 9.97812 4.3914 10.5441 5.56463 10.6704C6.73786 10.7966 7.91535 10.4737 8.86007 9.76667L9.45341 10.36C9.26347 10.7331 9.1954 11.1564 9.25879 11.5702C9.32218 11.984 9.51383 12.3675 9.80674 12.6667L11.2201 14.08C11.5951 14.4545 12.1034 14.6649 12.6334 14.6649C13.1634 14.6649 13.6717 14.4545 14.0467 14.08C14.2372 13.8937 14.3886 13.6713 14.4919 13.4257C14.5953 13.1802 14.6485 12.9164 14.6485 12.65C14.6485 12.3836 14.5953 12.1198 14.4919 11.8743C14.3886 11.6287 14.2372 11.4063 14.0467 11.22ZM8.39341 8.39333C7.9269 8.85866 7.33294 9.1753 6.68657 9.30323C6.0402 9.43117 5.37041 9.36466 4.76181 9.11212C4.15321 8.85958 3.63312 8.43234 3.26722 7.88436C2.90132 7.33638 2.70603 6.69224 2.70603 6.03333C2.70603 5.37442 2.90132 4.73029 3.26722 4.18231C3.63312 3.63433 4.15321 3.20708 4.76181 2.95454C5.37041 2.702 6.0402 2.6355 6.68657 2.76343C7.33294 2.89137 7.9269 3.208 8.39341 3.67333C8.70383 3.98297 8.95012 4.35081 9.11816 4.75577C9.2862 5.16074 9.3727 5.59488 9.3727 6.03333C9.3727 6.47178 9.2862 6.90592 9.11816 7.31089C8.95012 7.71586 8.70383 8.08369 8.39341 8.39333ZM13.1067 13.1067C13.0448 13.1692 12.971 13.2187 12.8898 13.2526C12.8086 13.2864 12.7214 13.3039 12.6334 13.3039C12.5454 13.3039 12.4583 13.2864 12.377 13.2526C12.2958 13.2187 12.2221 13.1692 12.1601 13.1067L10.7467 11.6933C10.6843 11.6314 10.6347 11.5576 10.6008 11.4764C10.567 11.3951 10.5495 11.308 10.5495 11.22C10.5495 11.132 10.567 11.0449 10.6008 10.9636C10.6347 10.8824 10.6843 10.8086 10.7467 10.7467C10.8087 10.6842 10.8825 10.6346 10.9637 10.6007C11.0449 10.5669 11.1321 10.5495 11.2201 10.5495C11.3081 10.5495 11.3952 10.5669 11.4765 10.6007C11.5577 10.6346 11.6314 10.6842 11.6934 10.7467L13.1067 12.16C13.1692 12.222 13.2188 12.2957 13.2527 12.3769C13.2865 12.4582 13.3039 12.5453 13.3039 12.6333C13.3039 12.7213 13.2865 12.8085 13.2527 12.8897C13.2188 12.971 13.1692 13.0447 13.1067 13.1067Z"
                                                        fill="#BBC3CF"></path>
                                                </svg>
                                                <input
                                                    class="w-full md:w-64 pl-8 pr-4 py-2 text-sm text-coolGray-400 font-medium outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input"
                                                    placeholder="Search" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!--END table header-->


                                    <!--table-->
                                    <div class="">
                                        <div class=" ">
                                            <table class="w-full capitalize text-center">


                                                <!-- table head-->
                                                <thead class="text-center text-sm font-semibold text-gray-500 ">
                                                    <tr
                                                        class="whitespace-nowrap table-row divide-x-8 divide-transparent divide ">

                                                        <th class="px-2 py-3.5 text-left">
                                                            @lang('Tender Name')
                                                        </th>
                                                        <th class="xl:table-cell  px-2 py-3.5   "
                                                            contenteditable="false">
                                                            @lang('Category')
                                                        </th>
                                                        <th class="xl:table-cell  px-2 py-3.5   "
                                                            contenteditable="false">
                                                            @lang('Industry')
                                                        </th>
                                                        <th class="xl:table-cell  px-2 py-3.5   "
                                                            contenteditable="false">
                                                            @lang('Lang')
                                                        </th>
                                                        <th class="lg:table-cell  px-2 py-3.5   "
                                                            contenteditable="false">
                                                            @lang('Trainess')
                                                        </th>

                                                        <th class="lg:table-cell  px-2 py-3.5 " contenteditable="false">
                                                            @lang('Open Date')
                                                        </th>
                                                        <th class="lg:table-cell  px-2 py-3.5 " contenteditable="false">
                                                            @lang('Close Date')
                                                        </th>
                                                        <th class="px-2 py-3.5 " contenteditable="false">
                                                            @lang('Status')
                                                        </th>

                                                        <th class="lg:table-cell   px-2 py-3.5 ">
                                                            @lang('Voucher')
                                                        </th>

                                                        <th class="px-2 py-3.5 " contenteditable="false">
                                                            @lang('Recieved Biddes')
                                                        </th>

                                                        <th class="px-2 py-3.5 " contenteditable="false">
                                                            @lang('Documents')
                                                        </th>

                                                        <th class="px-2 py-3.5 " contenteditable="false">
                                                            @lang('Privacy')
                                                        </th>
                                                        <th class="px-2 py-3.5 " contenteditable="false">
                                                            @lang('Biddings Link')
                                                        </th>

                                                        <th class="px-2 py-3.5">
                                                            @lang('Actions')
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <!--END table head-->


                                                <!--table body-->
                                                <tbody class="">
                                                    {{-- @dd($biddings) --}}
                                                    @forelse ($biddings as $bidding)
                                                        <tr
                                                            class="whitespace-nowrap text-center hover:bg-traivis-50 table-row divide-x-8 divide-transparent divide text-gray-600 hover:text-gray-900">

                                                            <td class="py-2 px-4 text-left">
                                                                <a href="{{ route('enterprise-dashboard-bidding-offer', ['id' => $bidding->id]) }}"
                                                                    class="flex flex-row items-center">
                                                                    <div class="">
                                                                        <div
                                                                            class="flex items-center justify-center w-10 h-10 text-base font-medium text-yellow-600 bg-yellow-200 rounded-md">
                                                                            {{-- Get Frist Character of each word --}}
                                                                            @php
                                                                                $words = explode(' ', $bidding->name);
                                                                                $wordAbbreviation = '';
                                                                                
                                                                                foreach ($words as $w) {
                                                                                    $wordAbbreviation .= mb_substr($w, 0, 1);
                                                                                }
                                                                            @endphp
                                                                            {{ $wordAbbreviation }}

                                                                        </div>
                                                                    </div>
                                                                    <div class="ml-4">
                                                                        <p class="">{{ $bidding->name }}</p>
                                                                    </div>
                                                                </a>
                                                            </td>

                                                            <td class="xl:table-cell  py-2 px-4 ">
                                                                <div class="group relative">
                                                                    <div>
                                                                        Hover To Show
                                                                    </div>

                                                                    <div
                                                                        class="hidden group-hover:inline-block absolute right-0 top-10 z-10">
                                                                        <div
                                                                            class="text-white text-left text-sm bg-gray-700 rounded-lg p-2">
                                                                            @forelse ($bidding->categories as $category)
                                                                                {{ $category->category_name }} <br>
                                                                            @empty
                                                                                <p
                                                                                    class="w-52 text-white text-center mx-auto bg-red-500 rounded">
                                                                                    @lang('No Categories')</p>
                                                                            @endforelse
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td class="xl:table-cell  py-2 px-4 ">
                                                                <div class="group relative">
                                                                    <div>
                                                                        Hover To Show

                                                                    </div>

                                                                    <div
                                                                        class="hidden group-hover:inline-block absolute right-0 top-10 z-10">
                                                                        <div
                                                                            class="text-white text-left text-sm bg-gray-700 rounded-lg p-2">
                                                                            @forelse ($bidding->industries as $industry)
                                                                                {{ $industry->en_name }} <br>

                                                                            @empty
                                                                                <p
                                                                                    class="w-52 text-white text-center mx-auto bg-red-500 rounded">
                                                                                    @lang('No Industries')</p>
                                                                            @endforelse
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>



                                                            <td class="xl:table-cell  py-2 px-4 ">
                                                                {{ $bidding->language->name }}
                                                            </td>

                                                            <td class="lg:table-cell  py-2 px-4">
                                                                {{ $bidding->number_of_employees }}
                                                            </td>

                                                            <td class="lg:table-cell   py-2 px-4">
                                                                {{ $bidding->bidding_start_date }}
                                                            </td>

                                                            <td class="lg:table-cell  py-2 px-4">
                                                                {{ $bidding->bidding_end_date }}

                                                            </td>

                                                            <td class="py-2 px-4 ">
                                                                @if ($bidding->status)
                                                                    <span
                                                                        class="whitespace-nowrap font-bold text-xs text-white border bg-green-500 px-2 rounded-full">
                                                                        @lang('Active')</span>
                                                                @else
                                                                    <span
                                                                        class="whitespace-nowrap font-bold text-xs text-white border bg-red-500 px-2 rounded-full">
                                                                        @lang('Not Active')</span>
                                                                @endif

                                                            </td>

                                                            <td class="lg:table-cell  py-2 px-4">
                                                                @if ($bidding->voucher)
                                                                    {{ $bidding->voucher }}<span
                                                                        class="text-xs font-bold mr-1">$</span>
                                                                @else
                                                                    -
                                                                @endif

                                                            </td>

                                                            <td class="py-2 px-4">
                                                                @if ($bidding->BiddingOffers->count() > 0)
                                                                    <a href="{{ route('enterprise-dashboard-bidding-offer', ['id' => $bidding->id]) }}"
                                                                        class=" relative group">
                                                                        <button
                                                                            class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-full text-gray-700 bg-white hover:bg-traivis-500 hover:text-white hover:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                                                                            type="button">
                                                                            <svg class="mr-2 h-5 w-5 "
                                                                                fill="currentColor" height="512"
                                                                                viewbox="0 0 24 24" width="512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g data-name="01 align center"
                                                                                    id="_01_align_center">
                                                                                    <path
                                                                                        d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                                    </path>
                                                                                </g>
                                                                            </svg>
                                                                            <span>{{ $bidding->BiddingOffers->count() }}</span>
                                                                        </button>
                                                                        <div
                                                                            class="hidden group-hover:inline-block absolute right-0 top-10 z-10">
                                                                            <div
                                                                                class="text-white text-left text-sm bg-gray-700 rounded-lg p-2">
                                                                                Ahmed adel<br>
                                                                                Mohammed Adel <br>
                                                                                Fady Elias <br>
                                                                                Maisara Hammad <br>
                                                                                Ammar Hussein <br>
                                                                                Ismaiel Mahmoud <br>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                @else
                                                                    -
                                                                @endif

                                                            </td>

                                                            <td class="py-2 px-4">
                                                                <form
                                                                    wire:submit.prevent='downloadAsZip({{ $bidding->id }})'>

                                                                    <button type="submit" href="#">
                                                                        <p class="">
                                                                            <svg style="display: inline"
                                                                                fill="currentColor"
                                                                                class="mx-auto d-inline w-5 h-5 mx-1"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                id="Layer_1" data-name="Layer 1"
                                                                                viewBox="0 0 24 24" width="512"
                                                                                height="512">
                                                                                <path
                                                                                    d="M18.348,7.23c-1.311-3.151-4.395-5.23-7.848-5.23C5.813,2,2,5.813,2,10.5c0,.551,.053,1.097,.157,1.633-1.347,1.032-2.157,2.646-2.157,4.367,0,3.032,2.243,5.5,5,5.5h11.5c4.136,0,7.5-3.364,7.5-7.5,0-3.467-2.344-6.437-5.652-7.27Zm-4.934,10.184c-.39,.39-.902,.585-1.414,.585s-1.024-.195-1.414-.585l-3.293-3.293,1.414-1.414,2.293,2.293v-6h2v6l2.293-2.293,1.414,1.414-3.293,3.293Z">
                                                                                </path>
                                                                            </svg>
                                                                        </p>



                                                                    </button>
                                                                </form>


                                                            </td>
                                                            <td class="py-2 px-4">
                                                                {{ $bidding->privacy }}
                                                            </td>
                                                            <td class=" py-2 px-4 ">

                                                                <a href="">
                                                                    <p class=""><svg
                                                                            class="mx-auto w-5 h-5 mx-1 "
                                                                            style="display: inline"
                                                                            fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            id="oo" data-name="Layer 1"
                                                                            viewBox="0 0 24 24" width="512"
                                                                            height="512">
                                                                            <path
                                                                                d="M7.896,16.104c-.586-.585-.586-1.536,0-2.121,.586-.586,1.535-.586,2.121,0,1.326,1.326,3.64,1.327,4.966,0l4.989-4.989c1.369-1.369,1.369-3.597,0-4.966s-3.597-1.369-4.966,0c-.586,.586-1.535,.586-2.121,0-.586-.585-.586-1.536,0-2.121,2.538-2.539,6.67-2.539,9.208,0,2.539,2.539,2.539,6.669,0,9.208l-4.989,4.989c-1.27,1.27-2.937,1.904-4.604,1.904s-3.335-.635-4.604-1.904Zm-1.384,7.893c1.667,0,3.334-.635,4.604-1.904,.586-.585,.586-1.536,0-2.121-.586-.586-1.535-.586-2.121,0-1.37,1.37-3.598,1.369-4.966,0-1.369-1.369-1.369-3.597,0-4.966l4.961-4.961c1.37-1.37,3.598-1.37,4.966,0,.586,.586,1.535,.586,2.121,0,.586-.585,.586-1.536,0-2.121-2.539-2.539-6.669-2.539-9.208,0L1.907,12.885c-2.539,2.539-2.539,6.669,0,9.208,1.27,1.27,2.937,1.904,4.604,1.904Z" />
                                                                        </svg> Link</p>



                                                                </a>
                                                            </td>

                                                            <td class=" py-2 px-4 ">
                                                                @if (auth()->user()->can('bidding_offer_edit'))
                                                                    <div @click="jopen = !jopen">
                                                                        <button wire:click="edit({{ $bidding->id }})">
                                                                            <svg style="display: inline"
                                                                                class="mx-auto w-5 h-5"
                                                                                fill="currentColor"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                id="Outline" viewBox="0 0 24 24"
                                                                                width="512" height="512">
                                                                                <path
                                                                                    d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z">
                                                                                </path>
                                                                                <path
                                                                                    d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z">
                                                                                </path>
                                                                            </svg>
                                                                            Edit
                                                                        </button>

                                                                    </div>
                                                                @endif

                                                            </td>


                                                        </tr>
                                                    @empty
                                                        <p class="col-md-8 text-center mx-auto bg-danger-light">
                                                            @lang('No Biddings')</p>


                                                        <!--row-->

                                                    @endforelse
                                                    <!--END row-->


                                                    <!--row 2-->

                                                    <!--End row 2-->


                                                </tbody>
                                                <!--END table body-->


                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>


                </div>
            </section>







        </div>

        <!--End content-->
        @if (auth()->user()->can('bidding_offer_create'))
            @include('livewire.biddings.bidding-form')
        @endif
       


        <script>
            $('.industries').on('change', function(e) {
                var data = $('.industries').select2("val");
                @this.set('industries', data);
            });

            $('.categories').on('change', function(e) {
                var data = $('.categories').select2("val");
                @this.set('categories', data);
            });

            $('.industriesFilter').on('change', function(e) {
                var data = $('.industriesFilter').select2("val");
                @this.set('industriesFilter', data);
            });

            $('.categoriesFilter').on('change', function(e) {
                var data = $('.categoriesFilter').select2("val");
                @this.set('categoriesFilter', data);
            });



            document.addEventListener('livewire:load', function(event) {

                @this.on('refreshMultiSelect', function() {

                    $(".categories").val("").trigger("change");
                    $(".industries").val("").trigger("change");

                });

                @this.on('markAsSelected', paramters => {
                    $('.categories').select2();
                    $('.categories').val(paramters[0]).trigger("change");
                    $('.industries').select2();
                    $('.industries').val(paramters[1]).trigger("change");

                });

            })
        </script>
        @push('scripts')
            <script>
                $(document).ready(function() {
                    $('.industries').select2({
                        placeholder: "Choose Industries",
                    });

                    $('.categories').select2({
                        placeholder: "Choose Categories",
                    });

                    $('.industriesFilter').select2({
                        placeholder: "Choose Industries",

                    });

                    $('.categoriesFilter').select2({
                        placeholder: "Choose Categories",
                    });
                });
            </script>
        @endpush

    </div>
</div>
