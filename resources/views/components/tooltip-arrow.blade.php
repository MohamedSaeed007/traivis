@props(['direction'=>'down'])

@php
    $tooltipCommonClass = "font-normal pointer-events-none absolute whitespace-nowrap rounded bg-black px-2 py-1 text-xs text-white opacity-0 transition group-hover/tip:opacity-100 scale-50 group-hover/tip:scale-100 z-50 ";
@endphp
@switch($direction)
    @case('up')
        @php
            $tooltipClass=$tooltipCommonClass."-bottom-8 left-1/2 -translate-x-1/2 before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-['']";
        @endphp

        @break
    @case('left')
        @php
            $tooltipClass=$tooltipCommonClass."left-10 top-1/2 -translate-y-1/2 before:absolute before:-left-2 before:top-1/2 before:-translate-y-1/2 before:border-4 before:border-transparent before:border-r-black before:content-['']";
        @endphp

        @break
    @case('right')
        @php
            $tooltipClass=$tooltipCommonClass."right-10 top-1/2 -translate-y-1/2 before:absolute before:-right-2 before:top-1/2 before:-translate-y-1/2 before:border-4 before:border-transparent before:border-l-black before:content-['']";
        @endphp

        @break
    @default
        @php
            //down
            $tooltipClass=$tooltipCommonClass."-top-8 left-1/2 -translate-x-1/2 before:absolute before:left-1/2 before:top-full before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-['']";
        @endphp
@endswitch

<span {{ $attributes->class(['group/tip relative']) }}>
      <span class="{{$tooltipClass}}">
        {{ $text }}
      </span>
      {{ $slot }}
</span>
