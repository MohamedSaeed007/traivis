<div x-data="{
    openModal: @entangle('openModal'),
}">
    <section x-show="openModal" x-transition:enter="ease-out duration-100"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" class="">
        <div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-[111111111] overflow-y-auto"
            role="dialog">
            <div class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">
                <!---over BG---->
                <div @click="openModal = false" aria-hidden="true"
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                </div>
                <!-- center-->
                <span aria-hidden="true" class="hidden sm:inline-block sm:h-screen sm:align-middle">​</span>
                <!-- popup content-->
                <div
                    class="relative my-8 inline-block w-full max-w-3xl transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">
                    <!-- label-->
                    <div class="flex items-center justify-center">
                        <p
                            class="absolute -top-6 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold group-hover:border-traivis-400">
                            <svg fill="currentColor" class="mr-3 h-8 w-8" height="512" viewBox="0 0 24 24" width="512">
                                <path
                                    d="m12.883 15.216-7.935 7.935a2.9 2.9 0 1 1 -4.1-4.1l7.935-7.935zm4.217-8.316a2.967 2.967 0 0 0 -4.1 0l-2.8 2.8 4.1 4.1 2.8-2.8a2.9 2.9 0 0 0 0-4.1zm-12.237-1.755 1.55.442.442 1.55a1.191 1.191 0 0 0 2.29 0l.442-1.55 1.55-.442a1.191 1.191 0 0 0 0-2.29l-1.55-.442-.442-1.55a1.191 1.191 0 0 0 -2.29 0l-.442 1.55-1.55.442a1.191 1.191 0 0 0 0 2.29zm12 12 1.55.442.442 1.55a1.191 1.191 0 0 0 2.29 0l.442-1.55 1.55-.442a1.191 1.191 0 0 0 0-2.29l-1.55-.442-.442-1.55a1.191 1.191 0 0 0 -2.29 0l-.442 1.55-1.55.442a1.191 1.191 0 0 0 0 2.29zm.893-12.645 1.355.387.389 1.357a1.042 1.042 0 0 0 2 0l.387-1.355 1.357-.389a1.042 1.042 0 0 0 0-2l-1.355-.387-.389-1.357a1.042 1.042 0 0 0 -2 0l-.387 1.355-1.357.389a1.042 1.042 0 0 0 0 2z" />
                            </svg>
                            Review Feedback
                        </p>
                    </div>
                    <!--/ label-->
                    <!---->
                    <div class="">
                        <div class="h-full w-full overflow-y-auto">
                            <div class="container mx-auto w-full rounded-lg bg-white p-3">
                                <!-- header-->
                                <p class="py-3 text-center text-lg font-semibold text-slate-500">
                                    You need to complete the following tasks inorder to publish this course
                                </p>
                                <!--END  header-->
                                <!-- Incompleted Tasks-->
                                <p class="text-center">
                                    {{ $feedback }}
                                </p>
                                <!--END Incompleted Tasks-->
                                <!--Cancel Button-->
                                <div class="mt-5 flex justify-center">
                                    <button
                                        class="inline-flex justify-center gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                        @click="openModal = false">Exit</button>
                                </div>
                                <!--/ Cancel Button-->
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--END popup content -->
            </div>
        </div>
    </section>
</div>