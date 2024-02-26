@props(['message', 'arrowSide' => 'left'])
{{--    {{ $attributes->class(['pointer-events-none absolute left-1/2 top-10 z-50 -translate-x-1/2 whitespace-nowrap rounded bg-red-200 px-2 py-1 text-xs font-normal text-red-800 opacity-100 transition-all before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-red-200 before:content-[\'\']']) }}> --}}
{{--<span
    @if ($arrowSide == 'right') {{ $attributes->class(["pointer-events-none absolute -bottom-7 right-10 z-50 translate-x-10 whitespace-nowrap rounded bg-red-200 px-2 py-1 text-xs font-normal text-red-800 opacity-100 transition-all before:absolute before:-top-2 before:right-10 before:translate-x-5 before:border-4 before:border-transparent before:border-b-red-200 before:content-['']"]) }}
            @else
        {{ $attributes->class(["pointer-events-none absolute -bottom-7 left-10 z-50 -translate-x-10 whitespace-nowrap rounded bg-red-200 px-2 py-1 text-xs font-normal text-red-800 opacity-100 transition-all before:absolute before:-top-2 before:left-10 before:-translate-x-5 before:border-4 before:border-transparent before:border-b-red-200 before:content-['']"]) }} @endif>
    {{ $message }} </span>--}}

<p class="text-sm font-medium text-red-700 flex items-start gap-x-2 pb-3 pt-1">
    <svg class="w-3 h-3 fill-red-500 shrink-0 my-1" viewBox="0 0 24 24"><path d="m21.5 14.119-3.483-2.119 3.483-2.119a3.181 3.181 0 1 0 -3.362-5.4l-3.138 2.009v-3.49a3 3 0 0 0 -6 0v3.588l-3.138-2.107a3.181 3.181 0 0 0 -3.362 5.4l3.483 2.119-3.483 2.119a3.181 3.181 0 0 0 3.362 5.4l3.138-2.038v3.519a3 3 0 0 0 6 0v-3.58l3.138 2.1a3.181 3.181 0 0 0 3.362-5.4z"/></svg>
    <span class="">{{$message}}</span>
</p>