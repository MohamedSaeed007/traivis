<div>
    @push('header_styles')
        <style>

            @media print {
                @page {
                    margin: 0;
                }

                body {
                    -webkit-print-color-adjust: exact;
                }
            }


            .background {
                background-color: rgba(0, 0, 0, 0.1);
                background-image: url('https://res.cloudinary.com/dawdpkt4f/image/upload/v1657112209/Wave_Back-01_1_vottkr.png');
                background-size: cover;
                padding: 64px;
            }

            .content-wrapper {
                background-image: url('https://res.cloudinary.com/dawdpkt4f/image/upload/v1657112209/Wave_Back-01_1_vottkr.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-color: white;
            }

            .title-top {
                font-family: Dancing Script;
                font-size: 80px;
                font-weight: 700;
                line-height: 108px;
                letter-spacing: 0.1px;
                color: #0e47c0;
            }

            .title-bottom {
                font-size: 24px;
                font-weight: 700;
                line-height: 29px;
                letter-spacing: 0.1;
                text-align: left;
            }

            .present {
                font-size: 20px;
                font-weight: 400;
                line-height: 24px;
                letter-spacing: 0.1px;
                text-align: left;
                text-transform: uppercase;
                margin-top: 24px;
            }

            .name {
                Sans;
                font-size: 48px;
                font-weight: 700;
                line-height: 62px;
                letter-spacing: 0.1px;
                margin-top: 24px;
            }

            .divider {
                width: 80%;
                margin-top: 8px;
            }

            .completing {
                margin-top: 16px;
                font-size: 24px;
                font-weight: 400;
                line-height: 29px;
                letter-spacing: 0.1px;
            }

            .course-title {
                margin-top: 16px;
                font-size: 28px;
                font-weight: 600;
                line-height: 34px;
                letter-spacing: 0.1px;
                color: #0e47c0;
                max-width: 678px;
                text-align: center;
            }

            .date-wrapper {
                width: 30%;
                display: flex;
                justify-content: space-between;
                margin-top: 16px;
            }

            .date {
                font-size: 20px;
                font-weight: 400;
                line-height: 24px;
                letter-spacing: 0.1px;
            }

        </style>
    @endpush
    @include('homes.social.layouts.partials.courses.header', [
    'no_result_panel_for_global_search' => true,
    ])

    <div class="flex w-full flex-col px-4 print:px-0">
        <!--head-->
        <div class="sm:flex sm:items-center print:hidden print:invisible">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Certificate</h1>
                <p class="mt-2 text-sm text-gray-700">#{{$certificate->id}} </p>
            </div>
        </div>
        <!--END header-->


        <!--Certificate-->
        <div class="container my-28 h-[100vh] flex items-center justify-center relative mx-auto  print:my-0 ">
            <div class="background relative flex w">


                <!--Content-->
                <div class="content-wrapper flex flex-col items-center justify-center min-h-[355px] w-[80vw] max-w-[1148px] rounded-[20px] overflow-hidden">

                    <!--Logos-->
                    <div class="flex flex-row w-full relative items-center justify-between px-20">
                        <div class="w-36 h-auto bg-cover">
                            <img src="{{asset('traivis.png')}}">
                        </div>

                        <div class="w-36 h-auto bg-cover invisible">
                            <img src="{{asset('ins.jpg')}}">
                        </div>
                    </div>
                    <!---->

                    <!--Certificate Details-->
                    <p class="title-top">Certificate</p>
                    <p class="title-bottom">Of Achievement</p>
                    <p class="present">THIS CERTIFICATE IS PROUDLY PRESENTED TO:</p>
                    <p class="name">{{$user->name}}</p>
                    <hr class="divider">
                    <p class="completing">FOR SUCCESSFULLY COMPLETING THE COURSE</p>
                    <p class="course-title">{{$certificate->course->title}}</p>

                    <div class="date-wrapper">
                        <p class="date">Date:</p>
                        <p class="date">{{$certificateUser->pivot->created_at->format('d')}}</p>
                        <p class="date">/</p>
                        <p class="date">{{$certificateUser->pivot->created_at->format('m')}}</p>
                        <p class="date">/</p>
                        <p class="date">{{$certificateUser->pivot->created_at->format('Y')}}</p>
                    </div>
                    <!--END Certificate Details-->


                    <!--signature-->
                    <div class="flex justify-evenly jutify-items-end w-[80%] mt-[24px] pt-[100px]">
                        <p class="text-xs text-center">
                            Disclaimer: This certificate, issued by a third party for TRAIVIS,
                            (
                            <a class="text-traivis-300"
                               href="{{route('business-profile-social',$this->certificate->course->maker->id)}}">{{$this->certificate->course->maker->business_name}}</a>
                            ) is not equivalent to a formal academic or professional qualification. Its validity may be
                            limited and its recognition may vary. The content and quality of the program are the
                            responsibility of the course provider. TRAIVIS is not liable for any consequences.
                        </p>

                        {{--<div class="flex flex-col justify-center w-[240px] h-[222px]">
                            <div class="h-[140px] text-center flex relative">
                                <img src="">
                            </div>

                            <p class="relative text-[20px] leading-[24px] font-semibold text-center text-[#101828] mt-[8px] flex-grow">
                                Qaris Tajudin</p>
                            <p class="relative text-[18px] font-light leading-[22px] text-center mt-[8px] mb-[16px]">
                                Director of Kelas Bersama</p>
                        </div>--}}

                        {{--<div class="flex flex-col justify-center w-[240px] h-[222px]">
                            <div class="h-[140px] text-center flex relative">
                                <img src="">
                            </div>

                            <p class="relative text-[20px] leading-[24px] font-semibold text-center text-[#101828] mt-[8px] flex-grow ">
                                Qaris Tajudin</p>
                            <p class="relative text-[18px] font-light leading-[22px] text-center mt-[8px] mb-[16px] ">
                                Director of Kelas Bersama</p>
                        </div>--}}
                    </div>
                    <!--END signature-->

                </div>
                <!--END Content-->


                <!--Decoration-->
                <div class="absolute bottom-[96px] left-0 w-[64px] h-[224px] bg-traivis-500"></div>
                <div class="absolute top-[192px] right-0 w-[64px] h-[224px] bg-violet-500"></div>
                <!---->


                <!--print-->
                <div class="fixed right-16 bottom-16 print:hidden">
                    <button onclick="window.print()"
                            class="transition inline-flex items-center px-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm group w-10 h-10 hover:w-fit flex space-x-2 focus:w-fit hover:px-3.5 focus:px-3.5 text-white bg-traivis-500 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                            type="button">
                        <svg class="h-5 w-5" data-name="Layer 1" fill="currentColor" viewBox="0 0 24 24" width="512"
                             height="512">
                            <path d="M19,6V4a4,4,0,0,0-4-4H9A4,4,0,0,0,5,4V6a5.006,5.006,0,0,0-5,5v5a5.006,5.006,0,0,0,5,5,3,3,0,0,0,3,3h8a3,3,0,0,0,3-3,5.006,5.006,0,0,0,5-5V11A5.006,5.006,0,0,0,19,6ZM7,4A2,2,0,0,1,9,2h6a2,2,0,0,1,2,2V6H7ZM17,21a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V17a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Zm5-5a3,3,0,0,1-3,3V17a3,3,0,0,0-3-3H8a3,3,0,0,0-3,3v2a3,3,0,0,1-3-3V11A3,3,0,0,1,5,8H19a3,3,0,0,1,3,3Z"></path>
                            <path d="M18,10H16a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"></path>
                        </svg>
                        <span class="hidden group-hover:block group-focus:block whitespace-nowrap font-bold">Print / Download</span>
                    </button>
                </div>
                <!---->
                <!--Save-->
                {{--<div class="fixed right-28 bottom-16 print:hidden">
                    <button wire:click="saveAsPDF"
                            class="transition inline-flex items-center px-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm group w-10 h-10 hover:w-fit flex space-x-2 focus:w-fit hover:px-3.5 focus:px-3.5 text-white bg-traivis-500 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                            type="button">
                        <svg class="h-5 w-5" data-name="Layer 1" fill="currentColor" viewBox="0 0 24 24" width="512"
                             height="512">
                            <path d="M19,6V4a4,4,0,0,0-4-4H9A4,4,0,0,0,5,4V6a5.006,5.006,0,0,0-5,5v5a5.006,5.006,0,0,0,5,5,3,3,0,0,0,3,3h8a3,3,0,0,0,3-3,5.006,5.006,0,0,0,5-5V11A5.006,5.006,0,0,0,19,6ZM7,4A2,2,0,0,1,9,2h6a2,2,0,0,1,2,2V6H7ZM17,21a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V17a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Zm5-5a3,3,0,0,1-3,3V17a3,3,0,0,0-3-3H8a3,3,0,0,0-3,3v2a3,3,0,0,1-3-3V11A3,3,0,0,1,5,8H19a3,3,0,0,1,3,3Z"></path>
                            <path d="M18,10H16a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"></path>
                        </svg>
                        <span class="hidden group-hover:block group-focus:block whitespace-nowrap font-bold">Save</span>
                    </button>
                </div>--}}
                <!---->


            </div>
        </div>
        <!--END Certificate-->


    </div>
</div>
