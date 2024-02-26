@extends('homes.social.layouts.base')
@section('htmlClass', 'h-full bg-gray-100')
@section('title', __('Payment Success'))
@section('bodyClass', 'antialiased bg-body text-body font-body')
@section('body')
<div class="">
    @include('homes.social.layouts.partials.courses.header')
    <section>
        <div class="overflow-hidden bg-white pt-12 pb-24">
            <div class="container mx-auto px-4">
                <div class="relative pb-9 text-center">
                    <h2
                        class="xl:text-10xl font-heading text-center text-3xl font-medium leading-normal text-traivis-500">
                        Thanks for being part of TRAIVIS community</h2>
                    <div
                        class="absolute left-1/2 bottom-0 w-screen -translate-x-1/2 transform border-b border-black border-opacity-5">
                    </div>
                </div>
                <div
                    class="mb-8 border-b border-black border-opacity-10 p-8 sm:flex sm:items-center sm:justify-center xl:mb-32 xl:p-10">
                    <img class="mx-auto mb-6 sm:mb-0 sm:ml-0 sm:mr-0"
                        src="uinel-assets/elements/ecommerce-order/accept.svg" alt="">
                    <h3 class="font-heading text-center text-lg font-medium sm:ml-10 md:text-left md:text-xl">
                        Payment
                        completed successfully!</h3>
                </div>
                <div class="md:flex md:flex-wrap">
                    <div {{--
                        class="mb-14 w-full md:mb-0 md:w-6/12 md:pr-7 lg:w-7/12 xl:w-8/12 xl:pr-24 xl:pl-32 2xl:w-9/12"
                        --}} class="mt-10 w-full px-4 lg:w-2/3">
                        <div class="rounded-3xl bg-white">
                            <p class="mb-11 font-medium text-gray-400 sm:pl-7">What you booked:</p>
                            @foreach ($order->transactions as $item)
                            {{-- @dump($item->productable->toArray()) --}}
                            <div class="mb-7 border-b border-black border-opacity-5 pb-7 sm:flex sm:items-center">
                                <a href="{{ route('course', $item->productable->slug) }}">
                                    <img class="mx-auto mb-6 h-16 object-cover sm:mb-0 sm:mr-12 sm:ml-0 sm:pl-7"
                                        src="{{ $item->productable->thumbnail_url }}"
                                        alt="{{ $item->productable->title }}"></a>
                                <div>
                                    <a class="font-heading mb-1 inline-block text-lg font-medium hover:underline"
                                        href="{{ route('course', $item->productable->slug) }}">{{
                                        substr($item->productable->title, 0, 15) }}</a>
                                    <div class="flex flex-wrap">
                                        <p class="mr-4 text-sm font-medium">
                                            <span class="font-heading">by</span>
                                            <span class="ml-2 text-gray-400">{{
                                                optional($item->productable->maker)->business_name }}</span>
                                        </p>
                                        {{-- For Testing --}}
                                        {{-- <p class="mr-4 text-sm font-medium">
                                            <span class="font-heading">Product Price</span>
                                            <span class="ml-2 text-gray-400">{{$item->product_price}}</span>
                                        </p>
                                        <p class="mr-4 text-sm font-medium">
                                            <span class="font-heading">Discount</span>
                                            <span class="ml-2 text-gray-400">{{$item->discount}}</span>
                                        </p>
                                        <p class="mr-4 text-sm font-medium">
                                            <span class="font-heading">Commission</span>
                                            <span class="ml-2 text-gray-400">{{$item->traivis_commission}}</span>
                                        </p>
                                        <p class="mr-4 text-sm font-medium">
                                            <span class="font-heading">Final Amount</span>
                                            <span class="ml-2 text-gray-400">{{$item->final_amount}}</span>
                                        </p> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <p class="font-medium leading-loose text-gray-400 sm:pl-7">Payment method:
                                {{ $order->transactions->first()->payment_method_name }}</p>
                        </div>
                    </div>

                    <div class="mt-10 w-full px-4 lg:w-1/3">
                        <div class="w-auto rounded-3xl bg-traivis-500 pt-11 pb-2 pb-11">
                            <div class="border-b border-opacity-20">
                                <div class="px-10 pb-7">
                                    <h3 class="font-heading mb-5 text-3xl font-medium text-white"
                                        contenteditable="false">Payment totals</h3>
                                    <p class="font-heading flex items-center justify-between font-medium leading-8"
                                        href="#">
                                        <span class="text-white text-opacity-70" contenteditable="false">Course
                                            fee</span>
                                        <span class="flex items-center text-xl text-white">
                                            <span class="mr-3 text-base">$</span>
                                            <span>{{ number_format($order->sub_total, 2) }}</span>
                                        </span>
                                    </p>

                                    @if ($order->discount > 0)
                                    <p class="font-heading flex items-center justify-between font-medium leading-8"
                                        href="#">
                                        <span class="text-green-400 text-opacity-70"
                                            contenteditable="false">Discount</span>
                                        <span class="flex items-center text-xl text-white">
                                            <span class="mr-3 text-2xl font-bold text-green-400">-</span>
                                            <span class="text-green-400">$</span>
                                            <span class="text-green-400">{{ number_format($order->discount, 2) }}</span>
                                        </span>
                                    </p>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-7 px-10 pt-5">
                                <div class="border-b border-opacity-30 pb-5">
                                    <p class="font-heading flex items-center justify-between font-medium leading-8"
                                        href="#">
                                        <span class="text-white">Total</span>
                                        <span class="flex items-center text-xl text-white">
                                            <span class="mr-3 text-base">$</span>
                                            <span>{{ number_format($order->total, 2) }}</span>
                                        </span>
                                    </p>
                                </div>
                                <div class=""><a
                                        class="font-heading mt-10 block rounded-xl bg-white px-5 py-3 text-center font-medium leading-6 tracking-tighter hover:bg-gray-50 focus:ring-2 focus:ring-traivis-500 focus:ring-opacity-50"
                                        target="_blank" href="{{ route('order-invoice', $order) }}">Download invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection