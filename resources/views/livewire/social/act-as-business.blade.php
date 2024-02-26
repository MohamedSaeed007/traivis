<div>
    @if ($homeDisplay)
        <div class="pt-5">
            <div class="space-y-1">
                <a href="#"
                    class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-800 transition-colors hover:bg-traivis-100 ">
                    <!-- Heroicon name: outline/fire -->
                    <x-svg-icons.fi-rr-briefcase
                        class="-ml-1 mr-3 h-6 w-6 flex-shrink-0 text-gray-800 group-hover:text-gray-500 " />
                    <span class="truncate text-base font-bold text-gray-500">My Business</span>
                </a>
            </div>

            <div class="mt-3 space-y-2" aria-labelledby="communities-headline">
                @foreach ($businesses as $business)
                    <a href="#" wire:click.prevent="go({{ $business->id }})"
                        class="group flex items-center rounded-md px-2 py-1 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900  ">

                        <div class="flex-shrink-0">
                            <img class="mr-4 h-5 w-5 rounded-full"
                                src="{{$business->avatar}}"
                                alt="">
                        </div>

                        <div class="relative">
                            <!-- Online Status Dot -->
                            <div class="absolute -right-0 bottom-0 h-4 w-4 rounded-full border-4 border-white bg-green-400 sm:invisible md:visible"
                                title="User is online">
                            </div>
                        </div>

                        <span class="truncate"> {{ $business->business_name }} </span>
                    </a>
                @endforeach
            </div>

        </div>
    @else
        @if ($user instanceof \App\Models\User && count($user->businesses) > 0)
            @if ($isBusiness)
                <div class="my-2 p-2 text-center rounded-lg hover:bg-traivis-50">
                    <div class="font-bold">{{ $business->business_name }}</div>
                    <div class="text-xs capitalize"><a
                            href="{{ route($business->business_type . '-dashboard') }}">{{ $business->business_type }}</a>
                    </div>
                    <pre class="text-sm">#{{ $business->business_number }}</pre>
                </div>
                <button wire:click="go"
                    class="flex w-full flex-col items-center rounded-lg bg-traivis-500 hover:bg-traivis-600 px-4 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-traivis-300"
                    type="button">
                    <div class="flex-grow text-left">Back to
                        <span>{{ $user->name }}</span>
                    </div>
                    <svg class="h-6 w-6 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" wire:loading>
                        <circle class="opacity-25" cx="12" cy="12" r="10"
                            stroke="currentColor" stroke-width="4">
                        </circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                </button>
            @else
                <div class="my-2 p-2 text-center rounded-lg hover:bg-traivis-50">
                    <div class="font-bold">{{ auth()->user()->name }}</div>
                </div>
                <div x-data="{ open: false }" class="mb-2 mt-2 w-52" @closeActAs="open=false">
                    <button @click="open=!open" data-dropdown-toggle="dropdownRadioHelper"
                        class="inline-flex w-full items-center rounded-lg bg-traivis-500 hover:bg-traivis-600 px-4 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-traivis-300"
                        type="button"><span class="flex-grow text-left">Act as...
                        </span>
                        <svg class="ml-2 h-4 w-4" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownRadioHelper" x-show="open"
                        class="divide-y divide-gray-100 rounded bg-white shadow"
                        data-popper-reference-hidden="" data-popper-escaped=""
                        data-popper-placement="bottom" style="">
                        <ul class="space-y-1 p-3 text-sm text-sm text-gray-700 "
                            aria-labelledby="dropdownRadioHelperButton">

                            @foreach ($user->businesses as $business)
                                <li class="mt-3">
                                    <label
                                        class="flex cursor-pointer gap-3 font-medium text-gray-900 "
                                        wire:loading.class.remove=" cursor-pointer">
                                        <input wire:loading.class="hidden" name="business_id"
                                            type="radio" wire:click="go({{ $business->id }})"
                                            value="{{ $business->id }}"
                                            class="h-4 w-4 border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">

                                        <svg class="h-4 w-4 animate-spin"
                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" wire:loading>
                                            <circle class="opacity-25" cx="12" cy="12"
                                                r="10" stroke="currentColor" stroke-width="4">
                                            </circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                            </path>
                                        </svg>
                                        <img class="h-5 w-5 rounded-full object-cover"
                                            src="https://static.shuffle.dev/uploads/files/a7/a75aae7cc1f68e982bbb89459fbc656be1c07728/cambridge-logo-png-600x400-q85.png"
                                            alt="">
                                        {{ $business->business_name }}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        @endif
    @endif
</div>
