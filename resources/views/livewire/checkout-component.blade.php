<div x-data={showCard:false,showWallet:false}>
    @if ($cart->items_count > 0 && $cart->sub_total > 0)
    @if (!$plan)
    <div class="container mx-auto">
        <h3 class="font-heading mb-4 mt-5 border-b text-7xl leading-tight">Continue your payment!
        </h3>

        <h5 class="font-heading mb-4 text-5xl leading-tight">You are 1 step away from starting a
            course that may change
            your life for better! Good luck !</h5>
    </div>
    @endif
    <div class="flex justify-center py-5">
        <button x-on:click="showCard = ! showCard;showWallet=false" class="w-25 rounded-full bg-traivis px-5 py-2 text-gray-100">
            Purchase using card
        </button>
        <a href="{{ route('paypal.make.payment') }}" class="w-25 rounded-full bg-traivis px-5 py-2 text-gray-100">
            Purchase using Paypal
        </a>
        <button x-on:click="showWallet = ! showWallet;showCard=false"
            class="w-25 rounded-full bg-traivis px-5 py-2 text-gray-100">
            Purchase using Wallet
        </button>
    </div>
    <div class="-mx-4 -mb-4 flex flex-wrap md:mb-0">
        <div class="mb-4 w-full px-4 md:mb-0 md:w-2/3"></div>
        <!-- Wallet -->
        <section x-show="showWallet" aria-labelledby="payment-heading"
            class="mt-10 flex overflow-y-auto sm:px-6 sm:pt-16 lg:w-2/3 lg:px-8 lg:pb-24 lg:pt-0">
            <h2 id="payment-heading" class="sr-only">Payment and shipping details</h2>
            <div class="w-full px-10">
                <form method="post" action="{{ route('checkout.purchase') }}" class="wallet-form mb-3 mt-3">
                    @csrf
                    <input type="hidden" name="planId" class="plan" value="{{ optional($plan)->id }}">
                    <input type="hidden" name="payment_method" value="3">
                    <p>Your wallet balance : <span>{{ $user->balance }}</span> </p>
                    <div class="flex">
                        <div class="flex-auto">
                            <div id="card-errors" role="alert"></div>
                            @if (session('error'))
                            <div class="mb-3 inline-flex w-full items-center rounded-lg bg-red-100 px-6 py-5 text-base text-red-700"
                                role="alert">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                                    class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                    </path>
                                </svg>
                                {{ session('error') }}
                            </div>
                            @endif
                            @if (session('success'))
                            <div class="mb-3 inline-flex w-full items-center rounded-lg bg-green-100 px-6 py-5 text-base text-green-700"
                                role="alert">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                                    class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                    </path>
                                </svg>
                                {{ session('success') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="flex justify-center py-5">
                        <button type="submit" class="w-25 rounded-full bg-traivis px-5 py-2 text-gray-100">
                            Purchase
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Card -->
        <section x-show="showCard" aria-labelledby="payment-heading"
            class="mt-10 flex overflow-y-auto sm:px-6 sm:pt-16 lg:w-2/3 lg:px-8 lg:pb-24 lg:pt-0">
            <h2 id="payment-heading" class="sr-only">Payment and shipping details</h2>
            <div class="w-full px-10">
                <form method="post" action="{{ route('checkout.purchase') }}" class="card-form mb-3 mt-3">
                    @csrf
                    <input type="hidden" name="planId" class="plan" value="{{ optional($plan)->id }}">
                    <input type="hidden" name="payment_method" value="1">
                    <input type="hidden" name="payment_method_for_stripe" class="payment-method" value="1">
                    {{-- <input class="StripeElement mb-3" name="card_holder_name" placeholder="Card holder name" required> --}}
                    <div class="flex">
                        <div class="flex-auto">
                            <div id="card-element"></div>
                            <div id="card-errors" role="alert"></div>
                            @if (session('error'))
                            <div class="mb-3 inline-flex w-full items-center rounded-lg bg-red-100 px-6 py-5 text-base text-red-700"
                                role="alert">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                                    class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                    </path>
                                </svg>
                                {{ session('error') }}
                            </div>
                            @endif
                            @if (session('success'))
                            <div class="mb-3 inline-flex w-full items-center rounded-lg bg-green-100 px-6 py-5 text-base text-green-700"
                                role="alert">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                                    class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                    </path>
                                </svg>
                                {{ session('success') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="flex justify-center py-5">
                        <button type="submit" class="w-25 rounded-full bg-traivis px-5 py-2 text-gray-100">
                            Purchase
                        </button>
                    </div>
                </form>
            </div>

        </section>
        <div class="mt-10 w-full px-4 lg:w-1/3">
            <div class="-ml-16 mr-28 w-auto rounded-3xl bg-traivis-500 pb-11 pb-2 pt-11">
                <div class="border-b border-opacity-20">
                    <div class="px-10 pb-7">
                        <h3 class="font-heading mb-5 text-3xl font-medium text-white" contenteditable="false">Payment
                            totals</h3>
                        <p class="font-heading flex items-center justify-between font-medium leading-8" href="#">
                            <span class="text-white text-opacity-70" contenteditable="false">Subtotal</span>
                            <span class="flex items-center text-xl text-white">
                                <span class="mr-3 text-base">$</span>
                                @if ($plan)
                                <span>{{ number_format($plan->price, 2) }}</span>
                                @else
                                <span>{{ number_format($cart->sub_total, 2) }}</span>
                                @endif
                            </span>
                        </p>
                        @if ($cart->discount)
                        <p class="font-heading flex items-center justify-between font-medium leading-8" href="#">
                            <span class="text-green-400 text-opacity-70" contenteditable="false">Discount</span>
                            <span class="flex items-center text-xl text-white">
                                <span class="mr-3 text-2xl font-bold text-green-400">-</span>
                                <span class="text-green-400">$</span>
                                <span class="text-green-400">{{ number_format($cart->discount, 2) }}</span>
                            </span>
                        </p>
                        @endif
                    </div>
                </div>
                <div class="mb-7 px-10 pt-5">
                    <div class="border-b border-opacity-30 pb-5">
                        <p class="font-heading flex items-center justify-between font-medium leading-8" href="#">
                            <span class="text-white">Total</span>
                            <span class="flex items-center text-xl text-white">
                                <span class="mr-3 text-base">$</span>
                                @if ($plan)
                                <span>{{ number_format($plan->price, 2) }}</span>
                                @else
                                <span>{{ number_format($cart->total, 2) }}</span>
                                @endif
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        let stripe = Stripe("{{ env('STRIPE_KEY') }}")
                let elements = stripe.elements()
                let style = {
                    base: {
                        color: '#32325d',
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: 'antialiased',
                        fontSize: '16px',
                        '::placeholder': {
                            color: '#aab7c4'
                        }
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a'
                    }
                }
                let card = elements.create('card', {
                    style: style
                })
                card.mount('#card-element')
                let paymentMethod = null
                $('.card-form').on('submit', function(e) {
                    $('button.pay').attr('disabled', true)
                    if (paymentMethod) {
                        return true
                    }
                    stripe.confirmCardSetup(
                        "{{ $intent->client_secret }}", {
                            payment_method: {
                                card: card,
                                billing_details: {
                                    name: $('.card_holder_name').val()
                                }
                            }
                        }
                    ).then(function(result) {
                        if (result.error) {
                            $('#card-errors').text(result.error.message)
                            $('button.pay').removeAttr('disabled')
                        } else {
                            paymentMethod = result.setupIntent.payment_method
                            $('.payment-method').val(paymentMethod)
                            $('.card-form').submit()
                        }
                    })
                    return false
                })
    </script>
    @endpush
    @endif
</div>