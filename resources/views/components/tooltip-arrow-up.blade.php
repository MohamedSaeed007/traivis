@props(['text'])

<span {{ $attributes->class(['group relative']) }}>
    <span class="pointer-events-none absolute left-1/2 -bottom-8 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 font-normal text-xs text-white opacity-0 transition before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100 scale-50 group-hover:scale-100">
        {{ $text }}
    </span>
    {{ $slot }}
</span>
