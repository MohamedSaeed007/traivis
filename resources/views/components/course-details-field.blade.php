@props([
    'title' => null,
    'collapsed' => false,
    'showPen' => false, //Add show-pen attribute
])
<div {{ $attributes->class(['relative mt-5 rounded-lg border border-gray-200 p-5']) }} x-data="{ open: {{ $collapsed ? 'false' : 'true' }} }" {{ $attributes }}
    id="{{ $title ? strtolower($title) . '_section' : str_random() }}">
    <div class="flex cursor-pointer" @click="open = !open">
        <div class="mr-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                <path
                    d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                </path>
            </svg>
        </div>

        <div class="flex-grow font-bold">{{ $title ?? 'Add \'title\' attribute' }}</div>
        <div class="ml-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="h-5 w-5 rotate-0 transition-transform"
                :class="open ? 'rotate-90' : 'rotate-0'">
                <path
                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                </path>
            </svg>
        </div>
    </div>

    <div class="mt-5" x-show="open" x-transition:enter="transition-opacity ease-linear"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" style="display: none;">

        <!--section content-->
        <div class="flex flex-row items-start space-x-2" x-data="{ textareaHeight: 'auto' }">
            @if ($showPen)
                <span class="mt-5 w-6">
                    <svg class="h-3 w-3 drop-shadow-md" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" id="Filled" viewBox="0 0 24 24"
                        width="512" height="512">
                        <path
                            d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z">
                        </path>
                        <path
                            d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z">
                        </path>
                    </svg>
                </span>
            @endif
            {{ $slot }}
        </div>
        <!--END section content-->
    </div>
</div>
