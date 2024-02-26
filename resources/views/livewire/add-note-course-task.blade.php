<div class="w-full">
    <!----- Note----------->

    <!-- popup content-->
    <div
        class="relative my-8 inline-block w-full w-full max-w-3xl transform rounded-lg bg-white p-4 text-left align-middle transition-all">

        <!-- label-->
        <div class="flex items-center justify-center">
            <p
                class="absolute -top-6 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold group-hover:border-traivis-400">
                <svg fill="currentColor" class="mr-3 h-7 w-7" viewBox="0 0 24 24" width="512"
                    height="512">
                    <path
                        d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z">
                    </path>
                    <path
                        d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z">
                    </path>
                </svg>
                Comment
            </p>
        </div>
        <!--/ label-->

        <!---->
        <div class="">
            <div class="h-full w-full">
                <div class="container mx-auto w-full rounded-lg bg-white p-3">

                    <!-- header-->
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img alt="" class="h-10 w-10 rounded-full bg-cover"
                                    src="{{ $business->avatar }}">
                            </div>

                            <div class="ml-4">
                                <a class="whitespace-nowrap font-medium text-gray-900"
                                    href="#">{{ $business->name }}</a>
                            </div>
                        </div>
                    </div>
                    <!--END  header-->

                    <!-- Note fields-->
                    <div class="flex flex-col gap-y-4 pt-5">

                        <div class="group relative">
                            <textarea wire:model.lazy="comment"
                                class="peer mt-1 w-full resize-y rounded-lg border-gray-300 transition-colors focus:border-traivis-400"
                                cols="100" id="area" maxlength="" required rows="4" type="text"></textarea>
                            <label
                                class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                for="area">
                                Comments </label>
                            @error('comment')
                                <span class="bg-red-100 text-red-800">{{ $message }}</span>
                            @enderror

                        </div>

                    </div>
                    <!--END Note fields-->

                    <!--Send-->
                    <div class="mt-5 flex justify-between">
                        <button wire:click="$emit('closeModal')"
                            class="group inline-flex justify-end gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
                            <span>Cancel</span>
                        </button>
                        <button wire:click="addTaskComment()"
                            class="group inline-flex justify-end gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                            type="button">
                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" height="512"
                                viewBox="0 0 24 24" width="512">
                                <path
                                    d="M23.119.882a2.966,2.966,0,0,0-2.8-.8l-16,3.37a4.995,4.995,0,0,0-2.853,8.481L3.184,13.65a1,1,0,0,1,.293.708v3.168a2.965,2.965,0,0,0,.3,1.285l-.008.007.026.026A3,3,0,0,0,5.157,20.2l.026.026.007-.008a2.965,2.965,0,0,0,1.285.3H9.643a1,1,0,0,1,.707.292l1.717,1.717A4.963,4.963,0,0,0,15.587,24a5.049,5.049,0,0,0,1.605-.264,4.933,4.933,0,0,0,3.344-3.986L23.911,3.715A2.975,2.975,0,0,0,23.119.882ZM4.6,12.238,2.881,10.521a2.94,2.94,0,0,1-.722-3.074,2.978,2.978,0,0,1,2.5-2.026L20.5,2.086,5.475,17.113V14.358A2.978,2.978,0,0,0,4.6,12.238Zm13.971,7.17a3,3,0,0,1-5.089,1.712L11.762,19.4a2.978,2.978,0,0,0-2.119-.878H6.888L21.915,3.5Z">
                                </path>
                            </svg>
                            <span>Send</span>
                        </button>
                    </div>
                    <!--/Send-->

                </div>
            </div>
        </div>
        <!---->

    </div>
    <!--END popup content -->

    <!-----/ Note----------->
</div>
