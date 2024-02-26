<div class="bg:text-traivis-600 bg:border-traivis-500 text-center p10 m-20">
    <p>Payment: #{{$payment->id}}</p>
    <p>Amount: {{$payment->final_amount}}</p>
    <p>Payment Method: Card</p>
    <a class="bg:text-traivis-600 bg:border-traivis-500 text-center" href="{{route('transaction-invoice',$payment->id)}}">
        <button class="text-traivis-600 bg:border-traivis-500">
            Print Invoice
        </button>
    </a>
</div>