<div>
    <div
        class="block my-1 items-center justify-center space-x-1 rtl:space-x-reverse min-h-6 px-2 py-0.5 text-sm font-medium tracking-tight rounded-xl whitespace-nowrap text-gray-700 bg-gray-500/10">
        <a href="{{ route('impersonate',$getRecord()->id) }}">
            {{ $getState() }}
        </a>
    </div>
</div>