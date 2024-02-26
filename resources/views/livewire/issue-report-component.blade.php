<div>
    <!--Report an issue-->
    <div x-data="{ open: @entangle('opened') }">
        <!--Report Button-->
        <div class="fixed bottom-5 left-6 z-50 rounded-full bg-white p-2">
            <x-tooltip-arrow direction="left">
                <button @click.stop="open = true"
                    class="rounded-full text-blue-500 outline-offset-8 outline-blue-400 ring-0 transition-colors hover:text-blue-600 focus:outline md:right-60 lg:right-1/4">
                    <svg fill="currentColor" stroke="" class="h-6 w-6" viewBox="0 0 24 24">
                        <path
                            d="M12.836,.028C9.364-.204,5.96,1.066,3.509,3.521,1.057,5.977-.211,9.378,.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.096,.454,12.836,.028Zm-.836,18.972c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5,.672,1.5,1.5-.672,1.5-1.5,1.5Zm1-6c0,.553-.448,1-1,1s-1-.447-1-1V5c0-.553,.448-1,1-1s1,.447,1,1V13Z" />
                    </svg>
                </button>
                <x-slot name="text">
                    Report an issue!
                </x-slot>
            </x-tooltip-arrow>
        </div>
        <!--/Report Button-->

        <!--Report popup-->
        <section x-cloak x-show="open" x-transition:enter="ease-out duration-100"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

            <div aria-labelledby="modal-title" aria-modal="true"
                class="fixed inset-0 z-[999] overflow-y-auto" role="dialog">
                <div
                    class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

                    <!---over BG---->
                    <div @click.stop="open = false" aria-hidden="true"
                        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                    </div>
                    <!-- center-->
                    <span aria-hidden="true"
                        class="hidden sm:inline-block sm:h-screen sm:align-middle">&#8203;</span>
                    <!---END over BG---->

                    <!-- popup content-->
                    <div
                        class="relative my-8 inline-block w-full max-w-3xl transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">

                        <!---->
                        <div class="">
                            <div class="h-full w-full overflow-y-auto">
                                <div
                                    class="container mx-auto flex w-full flex-col gap-y-4 rounded-lg bg-white p-3">

                                    <!-- header-->
                                    <p class="py-3 text-center text-lg font-semibold text-slate-500">
                                        Are you facing any issues with
                                        <span
                                            class="mx-1 cursor-pointer rounded-full border border-slate-300 bg-slate-100 px-2 font-bold focus:border-0">
                                            {{ $route_info['elementName'] }}</span>
                                        ?
                                    </p>
                                    <!--END  header-->
                                    <!-- report text-->
                                    <div>
                                        <textarea
                                            class="w-full rounded-lg border border-slate-300 bg-white bg-opacity-50 text-base text-gray-700 placeholder-gray-700 transition-all hover:bg-opacity-75 focus:bg-opacity-100"
                                            placeholder="Please describe the issue..." rows="2" required=""
                                            wire:model.defer="description"></textarea>
                                    </div>
                                    @error('description')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                    <!--END report text-->

                                    <!--Report Button-->
                                    <div class="flex w-full items-center justify-evenly">

                                        <button wire:click="sendIssueReport" type="button"
                                            class="inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-blue-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                                            <svg fill="currentColor" class="h-5 w-5" x="0px"
                                                y="0px" viewBox="0 0 512.308 512.308"
                                                style="enable-background:new 0 0 512.308 512.308;"
                                                xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M505.878,36.682L110.763,431.69c8.542,4.163,17.911,6.351,27.413,6.4h67.669c5.661-0.015,11.092,2.236,15.083,6.251   l36.672,36.651c19.887,20.024,46.936,31.295,75.157,31.317c11.652-0.011,23.224-1.921,34.261-5.653   c38.05-12.475,65.726-45.46,71.403-85.099l72.085-342.4C513.948,64.89,512.311,49.871,505.878,36.682z" />
                                                    <path
                                                        d="M433.771,1.652L92.203,73.61C33.841,81.628-6.971,135.44,1.047,193.802c3.167,23.048,13.782,44.43,30.228,60.885   l36.651,36.651c4.006,4.005,6.255,9.439,6.251,15.104v67.669c0.049,9.502,2.237,18.872,6.4,27.413L475.627,6.41   C462.645,0.03,447.853-1.651,433.771,1.652z" />
                                                </g>
                                            </svg>
                                            <span class="whitespace-nowrap font-bold">Send report</span>
                                        </button>

                                    </div>
                                    <!--/ Report Button-->

                                </div>
                            </div>
                        </div>
                        <!---->

                    </div>
                    <!--END popup content -->

                </div>
            </div>
        </section>
        <!--/Report popup-->
    </div>
    <!--/Report an issue-->
</div>
