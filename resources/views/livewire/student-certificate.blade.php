<div>
    <!-- Certificates Content -->
    <div class="px-6 relative text-gray-500">
        <!-- header -->
        <div class="sticky top-0 z-10 bg-white w-full py-4 gap-y-3 flex flex-1 items-center justify-between flex-wrap">
            <!--Name-->
            <div class="flex flex-row gap-x-8  lg:w-auto w-full items-center gap-y-3 md:justify-between justify-center">
                <!--Name-->
                <div class="">
                    <p class="bg-white text-2xl flex items-center gap-x-3 whitespace-nowrap truncate">
                        <svg fill="currentColor" class="h-6 w-6 shrink-0" viewBox="0 0 24 24">
                            <path
                                d="m12 16a8 8 0 1 1 8-8 8.009 8.009 0 0 1 -8 8zm0 2a9.938 9.938 0 0 1 -6-2.019v5.519a2.5 2.5 0 0 0 4.062 1.952l1.626-1.3a.5.5 0 0 1 .624 0l1.626 1.3a2.5 2.5 0 0 0 4.062-1.952v-5.519a9.94 9.94 0 0 1 -6 2.019z">
                            </path>
                        </svg>
                        <span class="font-bold text-justify ">Certificates </span>
                    </p>
                </div>
                <!--/Name-->
            </div>
            <!--/Name-->
        </div>
        <!-- /header -->
        <!--Content-->
        <div class="flex flex-col gap-y-10 mt-5 container mx-auto">
            <!--Certificates-->
            <div class="w-full flex">
                <ul class="w-full grid grid-cols-4 gap-6">
                    @if ($certificateUser)
                        <li wire:click="goToCertificate()"
                            class="w-full h-fit lg:col-span-1 md:col-span-2 col-span-4 bg-slate-50 hover:bg-traivis-50 rounded-lg border border-slate-200 hover:border-traivis-300 hover:scale-105 group/c relative transition-all cursor-pointer">
                            <!--Image-->
                            <img alt="certificate" class="rounded-t-lg bg-cover object-cover w-full h-32"
                                src="{{ asset('certificate-placeholder.png') }}">
                            <!--/Image-->
                            <!--info-->
                            <div class="flex flex-col my-2">
                                <!--Date-->
                                <p class="text-center">Date
                                    <span>{{ $certificateUser->created_at->format('d/m/Y') }}</span>
                                </p>
                                <!--/Date-->
                                <!--Name-->
                                <p class="text-lg font-bold text-center ">
                                    {{ Str::limit($course->title, 20) }}
                                </p>
                                <!--/Name-->
                            </div>
                            <!--/info-->
                        </li>
                    @endif
                    @if ($certificateUser->hasMedia())
                        <li wire:click="downloadCustomCertificate()"
                            class="w-full h-fit lg:col-span-1 md:col-span-2 col-span-4 bg-slate-50 hover:bg-traivis-50 rounded-lg border border-slate-200 hover:border-traivis-300 hover:scale-105 group/c relative transition-all cursor-pointer">
                            <!--Image-->
                            <img alt="certificate" class="rounded-t-lg bg-cover object-cover w-full h-32"
                                src="{{ asset('certificate-placeholder.png') }}">
                            <!--/Image-->
                            <!--info-->
                            <div class="flex flex-col my-2">
                                <!--Date-->
                                <p class="text-center">Date
                                    <span>{{ $certificateUser->getFirstMedia()->created_at->format('d/m/Y') }}</span>
                                </p>
                                <!--/Date-->
                                <!--Name-->
                                <p class="text-lg font-bold text-center ">
                                    {{ Str::limit($course->title, 20) }}
                                </p>
                                <!--/Name-->
                            </div>
                            <!--/info-->
                        </li>
                    @endif
                </ul>
            </div>
            <!--/Certificates-->
            <!--End devider-->
            <div class="h-screen">
                <p x-show="Start" class="text-center" style="display: none;">End of Content
                </p>
            </div>
            <!--/End devider-->
        </div>
        <!--/Content-->
    </div>
    <!-- END Certificates Content -->
</div>
