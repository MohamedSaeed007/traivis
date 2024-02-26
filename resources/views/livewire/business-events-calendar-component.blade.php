<div>
    <div class="w-full">
        {{--    @dump($initialDate) --}}
        {{--    @dump($eventsList) --}}
        {{--        @dump($currentView) --}}
        {{--    @dump($info) --}}
        <div>
            @if ($openEvent)
                <div x-data="{
                    open: @entangle('openEvent')
                }" @keydown.window.escape="open = false" x-show="open"
                    class="relative z-10" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true">

                    <div x-show="open" x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                    </div>

                    <div class="fixed inset-0 z-10 overflow-y-auto">
                        <div
                            class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                            <div x-show="open" x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                class="relative transform overflow-hidden rounded-xl bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6"
                                @click.away="open = false">
                                <form wire:submit.prevent="eventSave">
                                    <div class="sm:flex sm:items-start">

                                        <div class="mt-3 flex-1 text-center sm:mt-0 sm:text-left">

                                            <h3 class="mb-5 flex items-center gap-x-3 text-lg font-bold leading-6 text-gray-500"
                                                id="modal-title">

                                                <div
                                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-slate-100 sm:mx-0 sm:h-10 sm:w-10">

                                                    @if ($readonlyEvent)
                                                        <x-svg-icons.fi-rr-calendar
                                                            class="h-6 w-6 text-traivis-500" />
                                                    @elseif (isset($selectedEvent['id']))
                                                        <x-svg-icons.fi-rr-calendar-pen
                                                            class="h-6 w-6 text-traivis-500" />
                                                    @else
                                                        <x-svg-icons.fi-rr-calendar-plus
                                                            class="h-6 w-6 text-traivis-500" />
                                                    @endif

                                                    {{--                                <x-svg-icons.fi-rr-calendar-minus class="h-6 w-6 text-red-600" /> --}}
                                                    {{--                                <x-svg-icons.fi-rr-calendar-plus class="h-6 w-6 text-red-600" /> --}}
                                                </div>

                                                @if ($readonlyEvent)
                                                    View
                                                @elseif (isset($selectedEvent['id']))
                                                    Edit
                                                @else
                                                    Add
                                                @endif
                                                {{ $selectedEvent['type'] }} event

                                                <x-svg-icons.fi-rr-rotate-right wire:loading
                                                    target="eventEdit,eventCancel,eventDelete"
                                                    class="ml-2 inline-block h-5 w-5 animate-spin text-traivis" />
                                            </h3>
                                            <div class="mt-2 grid grid-cols-4 gap-4">

                                                {{--                                                <div class="col-span-4"> --}}
                                                {{--                                                    @dump($selectedEvent) --}}
                                                {{--                                                </div> --}}

                                                {{--
                                    <div class="col-span-4">
                                        @if ($errors->any())
                                            @dump($errors->getBags())
                                        @endif
                                    </div>
                                                <div class="col-span-4">
                                                    {{ now()->toDateTimeString() }}
                                                </div>
--}}

                                                <div class="col-span-4">
                                                    <label for="eventName"
                                                        class="block text-sm font-medium text-gray-700">Name</label>
                                                    <div class="relative mt-1 rounded-md shadow-sm">
                                                        <input type="text" id="eventName"
                                                            wire:model.defer="selectedEvent.name"
                                                            placeholder="{{ ucfirst($selectedEvent['type']) }} event"
                                                            {{ $readonlyEvent ? 'readonly disabled' : '' }}
                                                            class="@if ($errors->has('selectedEvent.name')) border-red-300 pr-10 text-red-900 placeholder-red-300 focus:border-red-500 focus:ring-red-500
                                                @else  border-gray-300 focus:border-traivis-500 focus:ring-traivis-500 @endif block w-full rounded-md focus:outline-none sm:text-sm">
                                                        @error('selectedEvent.name')
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <x-svg-icons.fi-sr-exclamation
                                                                    class="h-5 w-5 text-red-500" />
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    @error('selectedEvent.name')
                                                        <p class="mt-2 text-sm text-red-600"
                                                            id="email-error">
                                                            {{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-4">
                                                    <label for="eventDate"
                                                        class="block text-sm font-medium text-gray-700">Date</label>
                                                    <div class="relative mt-1 rounded-md shadow-sm">
                                                        <input type="date" id="eventDate"
                                                            wire:model.defer="selectedEvent.date"
                                                            {{ $readonlyEvent ? 'readonly disabled' : '' }}
                                                            class="@if ($errors->has('selectedEvent.date')) border-red-300 pr-10 text-red-900 placeholder-red-300 focus:border-red-500 focus:ring-red-500
                                                @else  border-gray-300 focus:border-traivis-500 focus:ring-traivis-500 @endif block w-full rounded-md focus:outline-none sm:text-sm">
                                                        @error('selectedEvent.date')
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <x-svg-icons.fi-sr-exclamation
                                                                    class="h-5 w-5 text-red-500" />
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    @error('selectedEvent.date')
                                                        <p class="mt-2 text-sm text-red-600"
                                                            id="email-error">
                                                            {{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="eventTimeFrom"
                                                        class="block text-sm font-medium text-gray-700">From</label>
                                                    <div class="relative mt-1 rounded-md shadow-sm">
                                                        <input type="time" id="eventTimeFrom"
                                                            wire:model.defer="selectedEvent.startTime"
                                                            {{ $readonlyEvent ? 'readonly disabled' : '' }}
                                                            class="@if ($errors->has('selectedEvent.startTime')) border-red-300 pr-10 text-red-900 placeholder-red-300 focus:border-red-500 focus:ring-red-500
                                                @else  border-gray-300 focus:border-traivis-500 focus:ring-traivis-500 @endif block w-full rounded-md focus:outline-none sm:text-sm">
                                                        @error('selectedEvent.startTime')
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <x-svg-icons.fi-sr-exclamation
                                                                    class="h-5 w-5 text-red-500" />
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    @error('selectedEvent.startTime')
                                                        <p class="mt-2 text-sm text-red-600"
                                                            id="email-error">
                                                            {{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="eventTimeTo"
                                                        class="block text-sm font-medium text-gray-700">To</label>
                                                    <div class="relative mt-1 rounded-md shadow-sm">
                                                        <input type="time" id="eventTimeTo"
                                                            wire:model.defer="selectedEvent.endTime"
                                                            {{ $readonlyEvent ? 'readonly disabled' : '' }}
                                                            class="@if ($errors->has('selectedEvent.endTime')) border-red-300 pr-10 text-red-900 placeholder-red-300 focus:border-red-500 focus:ring-red-500
                                                @else  border-gray-300 focus:border-traivis-500 focus:ring-traivis-500 @endif block w-full rounded-md focus:outline-none sm:text-sm">
                                                        @error('selectedEvent.endTime')
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <x-svg-icons.fi-sr-exclamation
                                                                    class="h-5 w-5 text-red-500" />
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    @error('selectedEvent.endTime')
                                                        <p class="mt-2 text-sm text-red-600"
                                                            id="email-error">
                                                            {{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-span-4">
                                                    <label for="eventDescription"
                                                        class="block text-sm font-medium text-gray-700">Description</label>
                                                    <div class="relative mt-1 rounded-md shadow-sm">
                                                        <textarea type="text" id="eventDescription" wire:model.defer="selectedEvent.description"
                                                            {{ $readonlyEvent ? 'readonly disabled' : '' }}
                                                            class="@if ($errors->has('selectedEvent.description')) border-red-300 pr-10 text-red-900 placeholder-red-300 focus:border-red-500 focus:ring-red-500
                                                @else  border-gray-300 focus:border-traivis-500 focus:ring-traivis-500 @endif block w-full rounded-md focus:outline-none sm:text-sm">
                                                </textarea>
                                                        @error('selectedEvent.description')
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <x-svg-icons.fi-sr-exclamation
                                                                    class="h-5 w-5 text-red-500" />
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    @error('selectedEvent.description')
                                                        <p class="mt-2 text-sm text-red-600"
                                                            id="email-error">
                                                            {{ $message }}</p>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-5 justify-between sm:mt-4 sm:flex sm:flex-row-reverse">
                                        @if ($readonlyEvent)
                                            <div class="sm:flex sm:flex-row-reverse">
                                                <button type="button"
                                                    class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto sm:text-sm"
                                                    @click="open = false">
                                                    Close
                                                </button>
                                            </div>
                                        @else
                                            <div class="gap-x-3 sm:flex sm:flex-row-reverse">

                                                <button type="submit"
                                                    class="inline-flex w-full justify-center rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-base font-bold text-white shadow-sm hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 sm:w-auto sm:text-sm">
                                                    Save
                                                </button>

                                                <button type="button"
                                                    class="mt-3 inline-flex w-full justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-base font-bold text-gray-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 sm:mt-0 sm:w-auto sm:text-sm"
                                                    @click="open = false">
                                                    Cancel
                                                </button>

                                            </div>
                                            @if (isset($selectedEvent['id']))
                                                <button type="button"
                                                    @click.stop="confirm('Are you sure you want to delete the \'{{ $selectedEvent['type'] }}\' event \'{{ $selectedEvent['name'] }}\'?') && @this.eventDelete('{{ $selectedEvent['id'] }}')"
                                                    class="inline-flex w-full justify-center rounded-full border border-transparent bg-red-600 px-4 py-2 text-base font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:w-auto sm:text-sm">Delete</button>
                                            @endif
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            @endif
        </div>

        <div class="container mx-auto mt-10">
            <div class="flex flex-col gap-x-8 px-6 lg:flex-row lg:px-3" id="fullCalendar">

                <div class="mb-10 flex flex-auto flex-col overflow-hidden">

                    <!-- Start The Calendar -->
                    <div wire:ignore id='calendar'></div>
                    <!-- END The Calendar -->

                    <!-- Start Small (Upcoming Events) -->
                    <div class="my-5 block flex flex-col lg:hidden">
                        <div class="px-5 font-bold text-gray-500">Upcoming Events
                            <h2 class="py-1 text-sm font-medium text-gray-700">Schedule for
                                <time datetime="2022-01-21">
                                    {{ now()->toFormattedDayDateString() }}
                                </time>
                            </h2>
                        </div>

                        <div class="flex items-center justify-start rounded-xl text-sm shadow-sm">
                            <section class="w-full">

                                @foreach ($upcomingEvents as $upcomingEvent)
                                    <!-- Start Events lost-->
                                    <ol class="mt-4 w-full space-y-1 text-sm leading-6 text-gray-500">
                                        <li
                                            class="group m-2 flex w-full cursor-pointer items-center justify-start space-x-4 rounded-xl px-5 py-2 focus-within:bg-indigo-200 hover:bg-indigo-50 hover:shadow-lg">

                                            <!-- Event circle Colour -->

                                            @switch($upcomingEvent->event_type)
                                                @case('course')
                                                    {{-- <div class="mr-2 h-3 w-3 rounded-full bg-blue-500">
                                                    </div> --}}
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-traivis-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24" width="512"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 1">
                                                            <path
                                                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                @break

                                                @case('ad')
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-red-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                @break

                                                @case('meeting')
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-indigo-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24" width="512" height="512">
                                                            <path
                                                                d="M8.7,18H3c-1.493,0-3-1.134-3-3.666V9.294A9.418,9.418,0,0,1,8.349.023a9,9,0,0,1,9.628,9.628A9.419,9.419,0,0,1,8.7,18ZM20,9.08h-.012c0,.237,0,.474-.012.712C19.59,15.2,14.647,19.778,9.084,19.981l0,.015A8,8,0,0,0,16,24h5a3,3,0,0,0,3-3V16A8,8,0,0,0,20,9.08Z" />
                                                        </svg>
                                                    </div>
                                                @break

                                                @case('campaign')
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-yellow-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                @break

                                                @case('blog')
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-pink-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M18,19v4.7a4.968,4.968,0,0,0,1.879-1.164l2.656-2.658A4.954,4.954,0,0,0,23.7,18H19A1,1,0,0,0,18,19Z" />
                                                            <path
                                                                d="M7.172,13.828A4,4,0,0,0,6,16.657V18H7.343a4,4,0,0,0,2.829-1.172L21.5,5.5a2.121,2.121,0,0,0-3-3Z" />
                                                            <path
                                                                d="M24,4.952a4.087,4.087,0,0,1-1.08,1.962L11.586,18.243A5.961,5.961,0,0,1,7.343,20H6a2,2,0,0,1-2-2V16.657a5.957,5.957,0,0,1,1.758-4.242L17.086,1.086A4.078,4.078,0,0,1,19.037,0c-.013,0-.024,0-.037,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16V19a3,3,0,0,1,3-3h5V5C24,4.984,24,4.969,24,4.952Z" />
                                                        </svg>
                                                    </div>
                                                @break

                                                @case('other')
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-green-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M24,7v1H0v-1C0,4.239,2.239,2,5,2h1V1c0-.552,.448-1,1-1h0c.552,0,1,.448,1,1v1h8V1c0-.552,.448-1,1-1h0c.552,0,1,.448,1,1v1h1c2.761,0,5,2.239,5,5Zm0,10c0,3.86-3.141,7-7,7s-7-3.14-7-7,3.141-7,7-7,7,3.14,7,7Zm-5,.586l-1-1v-1.586c0-.552-.448-1-1-1h0c-.552,0-1,.448-1,1v2c0,.265,.105,.52,.293,.707l1.293,1.293c.39,.39,1.024,.39,1.414,0h0c.39-.39,.39-1.024,0-1.414Zm-11-.586c0-2.829,1.308-5.35,3.349-7H0v9c0,2.761,2.239,5,5,5h6.349c-2.041-1.65-3.349-4.171-3.349-7Z" />
                                                        </svg>
                                                    </div>
                                                @break
                                            @endswitch

                                            @if (self::show_business)
                                                <img loading="lazy" alt=""
                                                    class="h-10 w-10 flex-none rounded-full"
                                                    src="{{ $upcomingEvent->business->avatar }}">
                                            @endif
                                            <div class="flex-auto">
                                                @if (self::show_business)
                                                    <p class="text-gray-900">
                                                        {{ $upcomingEvent->business->business_name }}
                                                    </p>
                                                @endif
                                                <p>{{ $upcomingEvent->name }}</p>
                                                <p class="mt-0.5">
                                                    <time
                                                        datetime="{{ $upcomingEvent->start_date->toIso8601String() }}">
                                                        {{ $upcomingEvent->start_date->format('h:i a') }}
                                                    </time>
                                                    @if ($upcomingEvent->end_date)
                                                        :
                                                        <time datetime="2022-01-21T14:30">
                                                            {{ $upcomingEvent->end_date->format('h:i a') }}
                                                        </time>
                                                    @endif
                                                </p>
                                            </div>
                                            <div
                                                class="relative opacity-0 focus-within:opacity-100 group-hover:opacity-100">
                                                <div>
                                                    <button aria-expanded="false" aria-haspopup="true"
                                                        class="-m-2 flex items-center rounded-full p-1.5 text-gray-500 hover:text-gray-600"
                                                        id="menu-0-button" type="button">
                                                        <span class="sr-only">Open
                                                            options</span>
                                                        <!-- Heroicon name: outline/dots-vertical -->
                                                        <svg aria-hidden="true" class="h-6 w-6"
                                                            fill="none" stroke="currentColor"
                                                            viewbox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                stroke-width="2"></path>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <!--
                                                            Dropdown menu, show/hide based on menu state.

                                                            Entering: "transition ease-out duration-100"
                                                              From: "transform opacity-0 scale-95"
                                                              To: "transform opacity-100 scale-100"
                                                            Leaving: "transition ease-in duration-75"
                                                              From: "transform opacity-100 scale-100"
                                                              To: "transform opacity-0 scale-95"
                                                          -->
                                                <!--                                                    <div aria-labelledby="menu-0-button"-->
                                                <!--                                                         aria-orientation="vertical"-->
                                                <!--                                                         class="absolute right-0 z-10 mt-2 w-36 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"-->
                                                <!--                                                         role="menu" tabindex="-1">-->
                                                <!--                                                        <div class="py-1" role="none">-->
                                                <!--                                                            <a class="block px-4 py-2 text-sm text-gray-700"-->
                                                <!--                                                               href="#" id="menu-0-item-0"-->
                                                <!--                                                               role="menuitem"-->
                                                <!--                                                               tabindex="-1">Edit</a>-->
                                                <!--                                                            <a class="block px-4 py-2 text-sm text-gray-700"-->
                                                <!--                                                               href="#" id="menu-0-item-1"-->
                                                <!--                                                               role="menuitem"-->
                                                <!--                                                               tabindex="-1">Cancel</a>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </li>
                                    </ol>
                                    <!-- End Events lost-->
                                @endforeach

                            </section>
                        </div>

                    </div>
                    <!-- END Small (Upcoming Events) -->

                </div>

                <div class="order-first w-full flex-none pb-10 lg:w-1/4">

                    <div id="external-events" class="mb-4">
                        <p class="flex h-16 items-center pb-3 text-gray-500">
                            <strong>Draggable events</strong>
                            <x-svg-icons.fi-rr-rotate-right wire:loading
                                class="ml-2 inline-block h-5 w-5 animate-spin text-traivis" />
                        </p>

                        <!-- Start Draggable list -->
                        <div class="flex w-full flex-row justify-between gap-x-3 lg:flex-col">
                            @foreach ($eventTypes as $eventType => $eventTypeDate)
                                <div class='traivis-draggable-event {{-- fc-h-event fc-daygrid-event fc-daygrid-block-event --}} bg-{{ $eventTypeDate['color'] }}-100 hover:bg-{{ $eventTypeDate['color'] }}-200 group relative mb-3 flex w-20 cursor-pointer flex-col items-center gap-x-5 gap-y-1 rounded-xl p-2 text-sm text-gray-800 hover:shadow-sm active:scale-105 active:shadow-lg lg:w-full lg:flex-row lg:p-5'
                                    data-type="{{ $eventType }}"
                                    data-color='{{ $eventTypeDate['color'] }}'>

                                    @switch($eventType)
                                        @case('course')
                                            <svg class="-0 h-6 w-6 shrink fill-traivis-500" viewBox="0 0 24 24"
                                                width="512" xmlns="http://www.w3.org/2000/svg"
                                                data-name="Layer 1">
                                                <path
                                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                </path>
                                            </svg>
                                        @break

                                        @case('ad')
                                            <svg class="-0 h-6 w-6 shrink fill-red-500" viewBox="0 0 24 24">
                                                <path
                                                    d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z">
                                                </path>
                                            </svg>
                                        @break

                                        @case('meeting')
                                            <svg class="-0 h-6 w-6 shrink fill-indigo-500" viewBox="0 0 24 24"
                                                width="512" height="512">
                                                <path
                                                    d="M8.7,18H3c-1.493,0-3-1.134-3-3.666V9.294A9.418,9.418,0,0,1,8.349.023a9,9,0,0,1,9.628,9.628A9.419,9.419,0,0,1,8.7,18ZM20,9.08h-.012c0,.237,0,.474-.012.712C19.59,15.2,14.647,19.778,9.084,19.981l0,.015A8,8,0,0,0,16,24h5a3,3,0,0,0,3-3V16A8,8,0,0,0,20,9.08Z" />
                                            </svg>
                                        @break

                                        @case('campaign')
                                            <svg class="-0 h-6 w-6 shrink fill-yellow-500" viewBox="0 0 24 24">
                                                <path
                                                    d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z">
                                                </path>
                                            </svg>
                                        @break

                                        @case('blog')
                                            <svg class="-0 h-6 w-6 shrink fill-pink-500" viewBox="0 0 24 24">
                                                <path
                                                    d="M18,19v4.7a4.968,4.968,0,0,0,1.879-1.164l2.656-2.658A4.954,4.954,0,0,0,23.7,18H19A1,1,0,0,0,18,19Z" />
                                                <path
                                                    d="M7.172,13.828A4,4,0,0,0,6,16.657V18H7.343a4,4,0,0,0,2.829-1.172L21.5,5.5a2.121,2.121,0,0,0-3-3Z" />
                                                <path
                                                    d="M24,4.952a4.087,4.087,0,0,1-1.08,1.962L11.586,18.243A5.961,5.961,0,0,1,7.343,20H6a2,2,0,0,1-2-2V16.657a5.957,5.957,0,0,1,1.758-4.242L17.086,1.086A4.078,4.078,0,0,1,19.037,0c-.013,0-.024,0-.037,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16V19a3,3,0,0,1,3-3h5V5C24,4.984,24,4.969,24,4.952Z" />
                                            </svg>
                                        @break

                                        @case('other')
                                            <svg class="-0 h-6 w-6 shrink fill-green-500" viewBox="0 0 24 24">
                                                <path
                                                    d="M24,7v1H0v-1C0,4.239,2.239,2,5,2h1V1c0-.552,.448-1,1-1h0c.552,0,1,.448,1,1v1h8V1c0-.552,.448-1,1-1h0c.552,0,1,.448,1,1v1h1c2.761,0,5,2.239,5,5Zm0,10c0,3.86-3.141,7-7,7s-7-3.14-7-7,3.141-7,7-7,7,3.14,7,7Zm-5,.586l-1-1v-1.586c0-.552-.448-1-1-1h0c-.552,0-1,.448-1,1v2c0,.265,.105,.52,.293,.707l1.293,1.293c.39,.39,1.024,.39,1.414,0h0c.39-.39,.39-1.024,0-1.414Zm-11-.586c0-2.829,1.308-5.35,3.349-7H0v9c0,2.761,2.239,5,5,5h6.349c-2.041-1.65-3.349-4.171-3.349-7Z" />
                                            </svg>
                                        @break
                                    @endswitch

                                    <p
                                        class="absolute -top-3 right-1/2 block translate-x-1/2 scale-50 rounded-lg bg-black px-2 text-white opacity-0 transition-all group-hover:scale-100 group-hover:opacity-100 lg:hidden">
                                        {{ $eventTypeDate['name'] }}</p>

                                    <div
                                        class='fc-event-main text-{{ $eventTypeDate['color'] }}-600 text-base font-bold'>
                                        {{ $eventTypeDate['name'] }}</div>
                                </div>
                            @endforeach
                        </div>
                        <!-- END Draggable list -->

                    </div>

                    <!-- Start Upccoming Events-->
                    <div class="my-5 flex hidden flex-col lg:block">

                        <div class="px-5 font-bold text-gray-500">Upcoming Events
                            <h2 class="py-1 text-sm font-medium text-gray-700">Schedule for
                                <time datetime="2022-01-21">
                                    {{ now()->toFormattedDayDateString() }} <span class="italic"
                                        title="Your timezone">({{ $timezone }})</span>
                                </time>
                            </h2>
                        </div>

                        <div class="flex items-center justify-start rounded-xl text-sm shadow-sm">
                            <section class="w-full">

                                @foreach ($upcomingEvents as $upcomingEvent)
                                    <!-- Start Events lost-->
                                    <ol class="mt-4 w-full space-y-1 text-sm leading-6 text-gray-500">
                                        <li
                                            class="group m-2 flex w-full cursor-pointer items-center justify-start space-x-4 rounded-xl px-5 py-2 focus-within:bg-indigo-200 hover:bg-indigo-50 hover:shadow-lg">

                                            <!-- Event circle Colour -->

                                            @switch($upcomingEvent->event_type)
                                                @case('course')
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-traivis-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24" width="512"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 1">
                                                            <path
                                                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                @break

                                                @case('ad')
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-red-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                @break

                                                @case('meeting')
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-indigo-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24" width="512" height="512">
                                                            <path
                                                                d="M8.7,18H3c-1.493,0-3-1.134-3-3.666V9.294A9.418,9.418,0,0,1,8.349.023a9,9,0,0,1,9.628,9.628A9.419,9.419,0,0,1,8.7,18ZM20,9.08h-.012c0,.237,0,.474-.012.712C19.59,15.2,14.647,19.778,9.084,19.981l0,.015A8,8,0,0,0,16,24h5a3,3,0,0,0,3-3V16A8,8,0,0,0,20,9.08Z" />
                                                        </svg>
                                                    </div>
                                                @break

                                                @case('campaign')
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-yellow-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                @break

                                                @case('blog')
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-pink-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M18,19v4.7a4.968,4.968,0,0,0,1.879-1.164l2.656-2.658A4.954,4.954,0,0,0,23.7,18H19A1,1,0,0,0,18,19Z" />
                                                            <path
                                                                d="M7.172,13.828A4,4,0,0,0,6,16.657V18H7.343a4,4,0,0,0,2.829-1.172L21.5,5.5a2.121,2.121,0,0,0-3-3Z" />
                                                            <path
                                                                d="M24,4.952a4.087,4.087,0,0,1-1.08,1.962L11.586,18.243A5.961,5.961,0,0,1,7.343,20H6a2,2,0,0,1-2-2V16.657a5.957,5.957,0,0,1,1.758-4.242L17.086,1.086A4.078,4.078,0,0,1,19.037,0c-.013,0-.024,0-.037,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16V19a3,3,0,0,1,3-3h5V5C24,4.984,24,4.969,24,4.952Z" />
                                                        </svg>
                                                    </div>
                                                @break

                                                @case('other')
                                                    <div
                                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-green-500 p-2">
                                                        <svg class="h-4 w-4 shrink-0 fill-white"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M24,7v1H0v-1C0,4.239,2.239,2,5,2h1V1c0-.552,.448-1,1-1h0c.552,0,1,.448,1,1v1h8V1c0-.552,.448-1,1-1h0c.552,0,1,.448,1,1v1h1c2.761,0,5,2.239,5,5Zm0,10c0,3.86-3.141,7-7,7s-7-3.14-7-7,3.141-7,7-7,7,3.14,7,7Zm-5,.586l-1-1v-1.586c0-.552-.448-1-1-1h0c-.552,0-1,.448-1,1v2c0,.265,.105,.52,.293,.707l1.293,1.293c.39,.39,1.024,.39,1.414,0h0c.39-.39,.39-1.024,0-1.414Zm-11-.586c0-2.829,1.308-5.35,3.349-7H0v9c0,2.761,2.239,5,5,5h6.349c-2.041-1.65-3.349-4.171-3.349-7Z" />
                                                        </svg>
                                                    </div>
                                                @break
                                            @endswitch

                                            @if (self::show_business)
                                                <img loading="lazy" alt=""
                                                    class="h-10 w-10 flex-none rounded-full"
                                                    src="{{ $upcomingEvent->business->avatar }}">
                                            @endif
                                            <div class="flex-auto">
                                                @if (self::show_business)
                                                    <p class="text-gray-900">
                                                        {{ $upcomingEvent->business->business_name }}
                                                    </p>
                                                @endif
                                                <p>{{ $upcomingEvent->name }}</p>
                                                <p class="mt-0.5">
                                                    <time
                                                        datetime="{{ $upcomingEvent->start_date->toIso8601String() }}">
                                                        {{ $upcomingEvent->start_date->format('h:i a') }}
                                                    </time>
                                                    @if ($upcomingEvent->end_date)
                                                        :
                                                        <time datetime="2022-01-21T14:30">
                                                            {{ $upcomingEvent->end_date->format('h:i a') }}
                                                        </time>
                                                    @endif
                                                </p>
                                            </div>
                                            <div
                                                class="relative opacity-0 focus-within:opacity-100 group-hover:opacity-100">
                                                <div>
                                                    <button aria-expanded="false" aria-haspopup="true"
                                                        class="-m-2 flex items-center rounded-full p-1.5 text-gray-500 hover:text-gray-600"
                                                        id="menu-0-button" type="button">
                                                        <span class="sr-only">Open
                                                            options</span>
                                                        <!-- Heroicon name: outline/dots-vertical -->
                                                        <svg aria-hidden="true" class="h-6 w-6"
                                                            fill="none" stroke="currentColor"
                                                            viewbox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                stroke-width="2"></path>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <!--
Dropdown menu, show/hide based on menu state.

Entering: "transition ease-out duration-100"
From: "transform opacity-0 scale-95"
To: "transform opacity-100 scale-100"
Leaving: "transition ease-in duration-75"
From: "transform opacity-100 scale-100"
To: "transform opacity-0 scale-95"
-->
                                                <!--                                                    <div aria-labelledby="menu-0-button"-->
                                                <!--                                                         aria-orientation="vertical"-->
                                                <!--                                                         class="absolute right-0 z-10 mt-2 w-36 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"-->
                                                <!--                                                         role="menu" tabindex="-1">-->
                                                <!--                                                        <div class="py-1" role="none">-->
                                                <!--                                                            <a class="block px-4 py-2 text-sm text-gray-700"-->
                                                <!--                                                               href="#" id="menu-0-item-0"-->
                                                <!--                                                               role="menuitem"-->
                                                <!--                                                               tabindex="-1">Edit</a>-->
                                                <!--                                                            <a class="block px-4 py-2 text-sm text-gray-700"-->
                                                <!--                                                               href="#" id="menu-0-item-1"-->
                                                <!--                                                               role="menuitem"-->
                                                <!--                                                               tabindex="-1">Cancel</a>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </li>
                                    </ol>
                                    <!-- End Events lost-->
                                @endforeach

                            </section>
                        </div>

                    </div>
                    <!-- END Upccoming Events-->

                </div>

            </div>
        </div>

        <script src='https://fastly.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let Calendar = FullCalendar.Calendar;
                let Draggable = FullCalendar.Draggable;

                let containerEl = document.getElementById("external-events");

                new Draggable(containerEl, {
                    itemSelector: ".traivis-draggable-event",
                    eventData: function(eventEl) {
                        function rgbToHex(rgb) {
                            const hex = rgb.match(/\d+/g);
                            return "#" + ((1 << 24) | (hex[0] << 16) | (hex[1] << 8) |
                                hex[2]).toString(16).slice(1);
                        }

                        let computedStyle = window.getComputedStyle(eventEl);
                        // let textColor = rgbToHex(computedStyle.color);
                        // let backgroundColor = rgbToHex(computedStyle.backgroundColor);

                        let textColor = computedStyle.color;
                        let backgroundColor = computedStyle.backgroundColor;

                        return {
                            title: eventEl.innerText + ' event',
                            textColor: rgbToHex(textColor),
                            borderColor: rgbToHex(backgroundColor),
                            backgroundColor: rgbToHex(backgroundColor),
                            extendedProps: {
                                type: eventEl.dataset.type,
                            },
                        };
                    }
                });

                let calendarEl = document.getElementById("calendar");

                let calendar = new Calendar(calendarEl, {
                    headerToolbar: {
                        left: "prev,today,next",
                        center: "title",
                        right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek"
                    },
                    views: {
                        dayGridMonth: { // name of view
                            eventTimeFormat: { // like '14:30:00'
                                hour: 'numeric',
                                minute: '2-digit',
                                omitZeroMinute: true,
                                meridiem: 'short'
                            }
                        }
                    },
                    allDaySlot: false,
                    // timeZone: 'local',
                    timeZone: '{{ $timezone }}',
                    nowIndicator: true,
                    initialView: '{{ $currentView }}',
                    initialDate: '{{ $initialDate }}',
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar
                    // drop: function(info) {
                    //     // is the "remove after drop" checkbox checked?
                    // },
                    {{-- events: @json($eventsList), --}}
                    events: function(info, successCallback, failureCallback) {
                        return @this.events(info);
                    },
                    datesSet: info => @this.datesSet(info),
                    eventClick: info => @this.eventClick(info.event),
                    eventReceive: info => @this.eventReceive(info.event),
                    eventDrop: info => @this.eventDrop(info.event),
                    eventResize: info => @this.eventResize(info.event),

                    loading: function(isLoading) {
                        if (!isLoading) {
                            // Reset custom events
                            this.getEvents().forEach(function(e) {
                                console.log(e);
                                if (e.source === null) {
                                    e.remove();
                                }
                            });
                        }
                    }

                });
                /*
                            calendar.addEventSource(() => {
                                // console.error(calendar);
                                console.clear();
                                console.error(calendar.view.activeStart);
                                console.error(calendar.view.activeEnd);
                                console.error(calendar.view.currentStart);
                                console.error(calendar.view.currentEnd);
                                {{-- return @this.events(calendar.view.currentStart, calendar.view.currentEnd); --}}
                            });
                */
                // calendar.addEventSource([{
                //     title: 'event1',
                //     start: '2023-09-01'
                // }, {
                //     title: 'event2',
                //     start: '2023-09-05',
                //     end: '2023-09-07'
                // }, {
                //     title: 'event3',
                //     start: '2023-09-09T12:30:00',
                // }]);
                calendar.render();
                @this.on(`refreshCalendar`, () => {
                    calendar.refetchEvents()
                });
            });
        </script>
        <style>
            .fc-toolbar-title {
                font-weight: bold;
                color: grey;
                font-size: 1.3em !important;
            }

            .fc * {
                color: grey;
            }

            .fc-icon-chevron-right,
            .fc-icon-chevron-left {
                color: white !important;
            }

            .fc-icon-chevron-right:active,
            .fc-icon-chevron-left:active {
                color: gray !important;
            }

            .fc-daygrid-day:hover {
                background-color: #ebebeb75;
                transition: 0.5s;
            }

            .fc-timegrid-slot:hover {
                background-color: #ebebeb75;
                transition: 0.5s;
            }

            #fullCalendar .fc .fc-button-primary {
                box-shadow: none;
            }

            .fc .fc-button-primary:not(:disabled).fc-button-active,
            .fc .fc-button-primary:not(:disabled):active {
                background-color: white !important;
                color: gray !important;
                border: 1px solid #80808087 !important;
                font-weight: bold;
            }

            .fc .fc-daygrid-day.fc-day-today,
            .fc .fc-timegrid-col.fc-day-today {
                background-color: rgb(59 130 246 / 8%);
                border: 2px double rgba(59, 130, 246, 0.52);
            }

            .fc .fc-daygrid-day {
                /*overflow: auto;*/
            }
        </style>
    </div>

</div>
