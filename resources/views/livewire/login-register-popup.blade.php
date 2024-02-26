<div>
    @if ($opened)
        <div x-data="{ open: @entangle('opened') }" @keydown.window.escape="open = false" x-show="open"
            class="relative z-50" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true">

            <div x-show="open" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                x-description="Background backdrop, show/hide based on modal state."
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div
                    class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                    <div x-show="open" x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-description="Modal panel, show/hide based on modal state."
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
                        @click.away="open = false">

                        <iframe src="{{ route('login', ['_action' => 'popup']) }}"
                            class="h-[600px] w-full border-0"></iframe>
                    </div>

                </div>
            </div>
        </div>

        <script>
            window.addEventListener('message', (event) => {
                if (event.data === 'loginSuccess') {
                    location.reload();
                }
            });
        </script>
    @endif
</div>
