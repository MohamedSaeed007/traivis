<!-- This example requires Tailwind CSS v2.0+ -->
<!-- Enabled: "bg-gray-600", Not Enabled: "bg-gray-200" -->
<button
        type="button"
        {{--        @click="darkMode = !darkMode"--}}
        @click="$store.darkMode.toggle()"
        :class="$store.darkMode.on?'bg-gray-600':'bg-gray-200'"
        class="relative inline-flex flex-shrink-0 h-7 w-12 border-2 border-transparent rounded-full cursor-pointer ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500"
        role="switch" aria-checked="false">
    <span class="sr-only">Use setting</span>
    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
    <span
            :class="$store.darkMode.on?'translate-x-5':'translate-x-0'"
            class="pointer-events-none relative inline-block h-6 w-6 rounded-full bg-white transition-colors dark:bg-gray-900 shadow transform ring-0 transition ease-in-out duration-200">
    <!-- Enabled: "opacity-0 ease-out duration-100", Not Enabled: "opacity-100 ease-in duration-200" -->
    <span
            :class="$store.darkMode.on?'opacity-0 ease-out duration-100':'opacity-100 ease-in duration-200'"
            class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity"
            aria-hidden="true">
<svg class="h-4 w-4 text-gray-400 hover:stroke-red-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"
     stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
        </svg>
    </span>
        <!-- Enabled: "opacity-100 ease-in duration-200", Not Enabled: "opacity-0 ease-out duration-100" -->
    <span
            :class="$store.darkMode.on?'opacity-100 ease-in duration-200':'opacity-0 ease-out duration-100'"
            class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity"
            aria-hidden="true">
            <svg class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
            </svg>
    </span>
  </span>
{{--    @push('scripts')--}}
{{--        <script>--}}
{{--            document.addEventListener('alpine:init', () => {--}}
{{--                Alpine.store('darkMode', {--}}
{{--                    // init() {--}}
{{--                    //     this.on = window.matchMedia('(prefers-color-scheme: dark)').matches--}}
{{--                    // },--}}

{{--                    on: Alpine.$persist(true).as('darkMode'),--}}

{{--                    toggle() {--}}
{{--                        this.on = ! this.on--}}
{{--                    }--}}
{{--                })--}}
{{--            })--}}
{{--        </script>--}}
{{--    @endpush--}}
</button>
