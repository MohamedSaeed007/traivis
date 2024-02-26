<div x-data="{ open: @entangle('openCart') }">
    <a href="#"
    class="group/x ml-5 inline-block flex-shrink-0 rounded-full bg-white p-1 text-gray-400 transition-colors hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 dark:bg-gray-900"
    @click="open = !open">
    <span class="sr-only">View Cart</span>

    <x-svg-icons.fi-rr-backpack class="h-5 w-5" />
    @if ($cart)
    <span
        class="group-hover/x:bg-traivis-600 absolute top-0 right-0 inline-flex translate-x-1/2 -translate-y-1/2 transform items-center justify-center rounded-full bg-traivis-500 px-2 py-1 text-xs font-bold leading-none text-white">
        {{ count($cart->items) }}</span>
    @endif
</a>
@if($openCart)
<div
@keydown.window.escape.stop="open = false"
@click.outside="open = false"
class="relative flex">
    <div class="relative z-[9999]">
        <div x-show="open" class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" role="dialog"
            aria-modal="true" x-transition:enter="transition-opacity ease-linear" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">

            <div @click="open=false" class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                aria-hidden="true">
            </div>
            <div
                class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full transform pl-10 transition duration-500 ease-in-out sm:duration-700">

                <div class="pointer-events-auto relative w-screen max-w-md duration-500 ease-in-out">


                    <div @click="open=false" class="absolute top-0 left-0 -ml-8 flex pt-4 pr-2 sm:-ml-10 sm:pr-4">
                        <button type="button"
                            class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                            <span class="sr-only">Close panel</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    {{-- <div>
                        <input type="text" wire:model="firstName">
                        <br />
                        <input type="text" wire:model="lastName">
                        Your name is {{ $this->fullName }}
                    </div> --}}
                    <div class="flex h-full flex-col overflow-y-scroll bg-white pt-4 shadow-xl">
                        <div class="h-28 border-b-2 border-gray-200 text-lg font-bold sm:px-6">
                            <h2 class="flex w-full justify-center text-lg text-2xl font-bold text-gray-700"
                                id="slide-over-title">My
                                Selected Courses</h2>
                        </div>

                        <div class="relative mt-6 flex-1 px-4 sm:px-6">
                            <!-- Mobile menu, show/hide based on menu state. -->
                            <nav class="lg:hidden" aria-label="Global" x-show="isMenuOn"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95" false=""
                                style="display: none;">
                                <div class="mx-auto max-w-3xl space-y-1 px-2 pt-2 pb-3 sm:px-4">
                                    <!-- Current: "bg-gray-100 text-gray-900", Default: "hover:bg-gray-50" -->
                                    <a href="#" aria-current="page"
                                        class="block rounded-md bg-gray-100 py-2 px-3 text-base font-medium text-gray-900 transition-colors dark:bg-gray-700">Courses</a>

                                    <a href="#"
                                        class="block rounded-md py-2 px-3 text-base font-medium hover:bg-gray-50">Calendar</a>

                                    <a href="#"
                                        class="block rounded-md py-2 px-3 text-base font-medium hover:bg-gray-50">Teams</a>

                                    <a href="#"
                                        class="block rounded-md py-2 px-3 text-base font-medium hover:bg-gray-50">Directory</a>
                                </div>
                                <div class="border-t border-gray-200 pt-4 pb-3">
                                    <div class="mx-auto flex max-w-3xl items-center px-4 sm:px-6">
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                alt="">
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-base font-medium text-gray-800">Chelsea
                                                Hagon
                                            </div>
                                            <div class="text-sm font-medium text-gray-500">
                                                chelsea.hagon@example.com
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="ml-auto flex-shrink-0 rounded-full bg-white p-1 text-gray-400 transition-colors hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 dark:bg-gray-900">
                                            <span class="sr-only">View notifications</span>
                                            <!-- Heroicon name: outline/bell -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mx-auto mt-3 max-w-3xl space-y-1 px-2 sm:px-4">
                                        <a href="#"
                                            class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Your
                                            Profile</a>

                                        <a href="#"
                                            class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Settings</a>

                                        <a href="#"
                                            class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Sign
                                            out</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="flex h-full flex-col">
                            <div class="w-full overflow-y-auto bg-white">
                                <div class="px-6">
                                    @if ($cart)
                                    @foreach ($cart->items as $item)
                                    <!-- Course Start-->
                                    <div
                                        class="relative mb-8 flex w-full flex-wrap items-center justify-center border-b border-gray-200 border-opacity-40 pb-8">
                                        <div class="relative mb-6 w-full px-4 md:mb-10 md:w-auto lg:mb-0">
                                            <a href="{{ route('course', $item->course->slug) }}">
                                                <img class="w-20" src="{{ $item->course->thumbnail_url }}"
                                                    alt="{{ $item->course->title }}"></a>
                                        </div>
                                        <div class="w-full px-4 md:w-auto">
                                            <a class="mb-2 block flex justify-center text-lg font-bold text-gray-500 hover:text-gray-700"
                                                href="{{ route('course', $item->course->slug) }}">
                                                {{ substr($item->course->title, 0, 15) }}
                                            </a>
                                            <span
                                                class="font-heading mb-3 flex items-center justify-center text-base font-medium text-traivis-500 text-gray-900">
                                                <span class="mr-2 text-sm">$</span>
                                                {{ $item->course->sale_price == 0 ? __('free') :
                                                $item->course->sale_price }}
                                            </span>
                                            @if ($item->course->sale_price == $item->course->final_price)
                                            <span class="text-green-500">Special Discount For you</span>
                                            <span
                                                class="font-heading mb-3 flex items-center justify-center text-base font-medium text-traivis-500 text-gray-900">
                                                <span class="mr-2 text-sm">$</span>
                                                {{ $item->course->final_price == 0 ? __('free') :
                                                $item->course->final_price }}
                                            </span>
                                            @endif
                                            <div class="flex flex-wrap">
                                                <p class="mr-4 text-sm font-medium">
                                                    <span class="font-heading">By: </span>
                                                    <span class="ml-2 text-gray-400">{{
                                                        $item->course->maker->business_name }}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <button wire:click="removeItem({{ $item->id }})"
                                            class="absolute top-0 right-0 text-gray-200 hover:text-gray-300">
                                            <svg width="28" height="28" viewbox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="27" height="27" rx="13.5"
                                                    stroke="currentColor">
                                                </rect>
                                                <line x1="20.495" y1="8.49497" x2="8.49498" y2="20.495"
                                                    stroke="currentColor" stroke-width="1.4">
                                                </line>
                                                <line x1="19.505" y1="20.495" x2="7.50503" y2="8.49498"
                                                    stroke="currentColor" stroke-width="1.4">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="relative mt-auto bg-traivis-500 py-10 px-10 md:px-20">

                            <h2 class="font-heading mb-5 flex justify-center text-2xl font-medium text-white">
                                Totals
                            </h2>
                            <div class="mb-3 flex items-center justify-between">
                                <h4 class="font-heading font-medium text-white text-gray-500">Courses
                                    Price</h4>
                                <span class="font-heading text-xl font-medium text-white">
                                    <span class="text-base">$</span>
                                    <span>{{ optional($cart)->sub_total }}</span>
                                </span>
                            </div>
                            @if ($cart?->discount)
                                <div class="mb-3 flex items-center justify-between">
                                    <h4 class="font-heading font-medium text-white text-gray-500">Discount</h4>
                                    <span class="font-heading text-xl font-medium text-white">
                                        <span class="text-base">- $</span>
                                        <span>{{ $cart->discount }}</span>
                                    </span>
                                </div>
                            @endif
                            {{-- <div class="flex mb-6 justify-between items-center">
                                <h4 class="font-heading font-medium text-white text-gray-500">Tax</h4>
                                <span class="text-xl font-heading font-medium text-white">
                                    <span class="text-base">+</span>
                                    <span>$</span>
                                    <span>10,00</span>
                                </span>
                            </div> --}}

                            <div class="mb-6 border-t border-white pt-2">
                                <div class="w-full border-b pb-7">
                                    <h4 class="font-heading mt-3 mb-1 block font-medium text-white">
                                        Voucher Code
                                        {{-- <label class="text-sm text-gray-500 block">Apply code:</label> --}}
                                    </h4>
                                    <div class="flex w-full justify-end rounded-full border-traivis-500 bg-white">
                                        <input class="w-full rounded-full border-traivis-500 px-5 py-2" type="text"
                                            wire:model="voucher"><a wire:click="applyPromoCode"
                                            class="-ml-4 flex-col items-center justify-center rounded-full border border-gray-300 bg-white px-5 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-200 dark:hover:bg-traivis-400 dark:hover:text-gray-900 dark:focus:ring-traivis-400"
                                            href="#">Apply</a>
                                    </div>
                                    @if ($promoError)
                                        <div class="mb-3 inline-flex w-full items-center rounded-lg bg-red-100 py-5 px-6 text-base text-red-700"
                                            role="alert">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="times-circle" class="mr-2 h-4 w-4 fill-current"
                                                role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                                </path>
                                            </svg>
                                            {{ $promoError }}
                                        </div>
                                        {{-- <p>{{ $promoError }}</p> --}}
                                    @endif
                                    @if ($promoCode)
                                        <div class="mb-3 inline-flex w-full items-center rounded-lg bg-green-100 py-5 px-6 text-base text-green-700"
                                            role="alert">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="times-circle" class="mr-2 h-4 w-4 fill-current"
                                                role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                                </path>
                                            </svg>
                                            Your promo code applied successfully
                                        </div>
                                        {{-- <p>{{ $promoError }}</p> --}}
                                    @endif
                                </div>
                                <div class="flex items-center justify-between pb-4 pt-3">
                                    <h4 class="font-heading font-medium text-white">Total</h4>
                                    <span class="font-heading text-xl font-medium text-white">
                                        <span class="text-base">$</span>
                                        <span>{{ optional($cart)->total }}</span>
                                    </span>
                                </div>
                            </div>
                            <div class="text-center"><a
                                    class="group -mt-3 inline-flex w-32 justify-center rounded-full border border-gray-300 bg-white p-3 py-2 py-4 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-200 dark:hover:bg-traivis-400 dark:hover:text-gray-900 dark:focus:ring-traivis-400"
                                    href="#" wire:click="goToCheckOut()">Checkout</a></div>
                            @if ($checkoutButtonError)
                                <div class="mb-3 inline-flex w-full items-center rounded-lg bg-red-100 py-5 px-6 text-base text-red-700"
                                    role="alert">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="times-circle" class="mr-2 h-4 w-4 fill-current" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                        </path>
                                    </svg>
                                    {{ $checkoutButtonError }}
                                </div>
                                {{-- <p>{{ $checkoutButtonError }}</p> --}}
                            @endif

                        </div>
                    </div>
                    <!-- /End replace -->
                </div>
            </div>

        </div>
    </div>
</div>
@endif
</div>


