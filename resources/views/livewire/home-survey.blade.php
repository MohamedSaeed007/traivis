<div x-data="{ showModal: @entangle('show'), first: @entangle('show'), seconed: false }">
    <section x-show="showModal" x-transition:enter="ease-out duration-100"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" class="">
        <div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-[999] overflow-y-auto"
            role="dialog">
            <div
                class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">
                <!---over BG---->
                <div aria-hidden="true"
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                </div>
                <!---END over BG---->
                <!-- popup content-->
                <div
                    class="relative my-8 inline-block w-full transform rounded-xl bg-white p-4 text-left align-middle shadow-xl transition-all lg:max-w-3xl">
                    <!--first step-->
                    <div x-show="first" class="modal-content">
                        <div class="mx-auto flex w-full items-center px-6 pb-6">
                            <div class="flex w-[600px] justify-center lg:w-[1200px]">
                                <div class="w-full lg:mt-8 lg:w-[600px]">
                                    <!--Step1 Form-->
                                    <form class="mt-[-2rem]">
                                        <div>
                                            <!--Pic-->
                                            <div class="mx-auto my-10 flex w-[160px] justify-center p-4">
                                                <p class="flex justify-center text-base font-medium text-gray-500 "
                                                    aria-hidden="true"></p>
                                                <!------LG-only--------->
                                                <div class="relative block overflow-hidden rounded-full">
                                                    @if ($avatar)
                                                        <img loading="lazy" class="w-50 h-50 relative rounded-full object-cover"
                                                            src="{{ $avatar->temporaryUrl() }}"
                                                            alt="">
                                                    @else
                                                        <img loading="lazy" class="w-50 h-50 relative rounded-full object-cover"
                                                            src="{{ auth()->user()?->avatar }}"
                                                            alt="">
                                                    @endif
                                                    @error('avatar')
                                                        <span class="text-red-500">{{ $message }}</span>
                                                    @enderror
                                                    <label
                                                        class="absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-75 text-sm font-medium text-white opacity-0 focus-within:opacity-100 hover:opacity-100"
                                                        for="user-photo">
                                                        <span>Change</span>
                                                        <span class="sr-only">user photo</span>
                                                        <input
                                                            class="absolute inset-0 h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0"
                                                            id="user-photo" type="file"
                                                            wire:model="avatar"></label>
                                                </div>
                                                <!-----END-LG-only--------->
                                            </div>
                                            <script>
                                                function Category() {
                                                    return {
                                                        selected: [],
                                                        show: false,
                                                        open() {
                                                            this.show = true
                                                        },
                                                        close() {
                                                            this.show = false
                                                        },
                                                        isOpen() {
                                                            return this.show === true
                                                        },
                                                        add(id) {
                                                            console.log(id);
                                                            let element = document.getElementById(id)
                                                            console.error(element)
                                                            console.error(element.getAttribute('data-text'))
                                                            if (element.checked) {
                                                                if (element.type === 'radio') {
                                                                    this.selected = [];
                                                                }
                                                                this.selected.push(element.getAttribute('data-text'));
                                                                console.log(this.selected);
                                                            } else {
                                                                console.log(this.selected.indexOf(element.getAttribute('data-text')));
                                                                this.selected.splice(this.selected.indexOf(element.getAttribute('data-text'), 1));
                                                            }
                                                        }
                                                    }
                                                }
                                            </script>
                                            <!--/pic-->
                                            <!--Language-->
                                            <div class="my-8">
                                                <div class="relative inline-block w-full"
                                                    x-data="Category()">
                                                    <div class="relative flex flex-col items-center">
                                                        <!--input area-->
                                                        <div class="group w-full" x-on:click="open">
                                                            <div
                                                                class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-4 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                                                                <div
                                                                    class="flex flex-auto flex-row overflow-x-visible truncate">
                                                                    <!---->
                                                                    <!--input-->
                                                                    <div class="group relative flex-1">
                                                                        <input
                                                                            class="h-full w-full cursor-pointer appearance-none border-0 bg-transparent p-1 px-2 text-gray-800 outline-none"
                                                                            placeholder="Language ">
                                                                        <div :class="selected.length > 0 ?
                                                                            'py-2 w-full' : ''"
                                                                            class="absolute left-0 top-0 bg-white">
                                                                            <template
                                                                                x-for="(option,index) in selected">
                                                                                <span
                                                                                    class="m-1 rounded-full bg-gray-200 p-1 px-2"
                                                                                    x-text="option"></span>
                                                                            </template>
                                                                        </div>
                                                                    </div>
                                                                    <!---->
                                                                </div>
                                                                <!--dropdown button-->
                                                                <div
                                                                    class="svelte-1l8159u flex w-8 items-center justify-end border-l border-gray-200 py-1 pl-2 pr-1 text-gray-300">
                                                                    <button
                                                                        class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                                        type="button" x-on:click="open"
                                                                        x-show="isOpen() === true"
                                                                        style="display: none;">
                                                                        <svg class="h-4 w-4 fill-current"
                                                                            version="1.1"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>

                                                                    <button @click="close"
                                                                        class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                                        type="button"
                                                                        x-show="isOpen() === false">
                                                                        <svg class="h-4 w-4 fill-current"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <!--select menu-->
                                                        <div class="w-full px-4">
                                                            <div class="max-h-select absolute right-1/2 top-14 z-40 w-[90%] translate-x-1/2 rounded-b-lg bg-white"
                                                                x-on:click.away="close"
                                                                x-show.transition.origin.top="isOpen()">
                                                                <div
                                                                    class="flex h-fit w-full flex-col overflow-y-auto">
                                                                    <ul class="h-52 space-y-3 overflow-y-auto p-3 text-sm text-gray-700 "
                                                                        aria-labelledby="dropdownCheckboxButton">
                                                                        @foreach ($languages as $language)
                                                                            <li>
                                                                                <div
                                                                                    class="flex items-center">
                                                                                    <input
                                                                                        id="checkbox-item-language-{{ $language->id }}"
                                                                                        @click="add('checkbox-item-language-{{ $language->id }}')"
                                                                                        data-text="{{ $language->display_name }}"
                                                                                        wire:model="selectedLanguages"
                                                                                        type="checkbox"
                                                                                        value="{{ $language->id }}"
                                                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                                                                    <label
                                                                                        for="checkbox-item-1"
                                                                                        class="ml-2 text-sm font-medium text-gray-900 ">{{ $language->display_name }}</label>
                                                                                </div>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---->
                                                        @error('selectedLanguages')
                                                            <span
                                                                class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Language-->
                                            <!--Industry-->
                                            <div class="my-8">
                                                <div class="relative inline-block w-full"
                                                    x-data="Category()">
                                                    <div class="relative flex flex-col items-center">
                                                        <!--input area-->
                                                        <div class="group w-full" x-on:click="open">
                                                            <div
                                                                class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-4 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                                                                <div
                                                                    class="flex flex-auto flex-row overflow-x-visible truncate">
                                                                    <!--input-->
                                                                    <div class="group relative flex-1">
                                                                        <input
                                                                            class="h-full w-full cursor-pointer appearance-none border-0 bg-transparent p-1 px-2 text-gray-800 outline-none"
                                                                            placeholder="Industry ">
                                                                        <div :class="selected.length > 0 ?
                                                                            'py-2 w-full' : ''"
                                                                            class="absolute left-0 top-0 bg-white">
                                                                            <template
                                                                                x-for="(option,index) in selected">
                                                                                <span
                                                                                    class="m-1 rounded-full bg-gray-200 p-1 px-2"
                                                                                    x-text="option"></span>
                                                                            </template>
                                                                        </div>
                                                                    </div>
                                                                    <!---->
                                                                </div>
                                                                <!--dropdown button-->
                                                                <div
                                                                    class="svelte-1l8159u flex w-8 items-center justify-end border-l border-gray-200 py-1 pl-2 pr-1 text-gray-300">
                                                                    <button
                                                                        class="mx h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                                        type="button"
                                                                        x-on:click="open"
                                                                        x-show="isOpen() === true">
                                                                        <svg class="h-4 w-4 fill-current"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                    <button @click="close"
                                                                        class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                                        type="button"
                                                                        x-show="isOpen() === false">
                                                                        <svg class="h-4 w-4 fill-current"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <!--select menu-->
                                                        <div class="w-full px-4">
                                                            <div class="max-h-select absolute right-1/2 top-14 z-40 w-[90%] translate-x-1/2 rounded-b-lg bg-white"
                                                                x-on:click.away="close"
                                                                x-show.transition.origin.top="isOpen()">
                                                                <div
                                                                    class="flex h-fit w-full flex-col overflow-y-auto">
                                                                    <ul class="h-52 space-y-3 overflow-y-auto p-3 text-sm text-gray-700 "
                                                                        aria-labelledby="dropdownCheckboxButton">
                                                                        @foreach ($industries as $industry)
                                                                            <li>
                                                                                <div
                                                                                    class="flex items-center">
                                                                                    <input
                                                                                        id="checkbox-item-industry-{{ $industry->id }}"
                                                                                        @click="add('checkbox-item-industry-{{ $industry->id }}')"
                                                                                        data-text="{{ $industry->en_name }}"
                                                                                        type="checkbox"
                                                                                        wire:model="selectedIndustries"
                                                                                        value="{{ $industry->id }}"
                                                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                                                                    <label
                                                                                        for="checkbox-item-4"
                                                                                        class="ml-2 text-sm font-medium text-gray-900 ">{{ $industry->en_name }}</label>
                                                                                </div>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---->
                                                        @error('selectedIndustries')
                                                            <span
                                                                class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/Industry-->

                                            <!--Delivery Mode-->
                                            <div class="my-8">

                                                <div class="relative inline-block w-full"
                                                    x-data="Category()">
                                                    <div class="relative flex flex-col items-center">

                                                        <!--input area-->
                                                        <div class="group w-full" x-on:click="open">

                                                            <div
                                                                class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-4 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">

                                                                <div
                                                                    class="flex flex-auto flex-row overflow-x-visible truncate">

                                                                    <!--input-->
                                                                    <div class="group relative flex-1">
                                                                        <input
                                                                            class="h-full w-full cursor-pointer appearance-none border-0 bg-transparent p-1 px-2 text-gray-800 outline-none"
                                                                            placeholder="Delivery Mode ">
                                                                        <div :class="selected.length > 0 ?
                                                                            'py-2 w-full' : ''"
                                                                            class="absolute left-0 top-0 bg-white">
                                                                            <template
                                                                                x-for="(option,index) in selected">
                                                                                <span
                                                                                    class="m-1 rounded-full bg-gray-200 p-1 px-2"
                                                                                    x-text="option"></span>
                                                                            </template>
                                                                        </div>
                                                                    </div>
                                                                    <!---->
                                                                </div>

                                                                <!--dropdown button-->
                                                                <div
                                                                    class="svelte-1l8159u flex w-8 items-center justify-end border-l border-gray-200 py-1 pl-2 pr-1 text-gray-300">
                                                                    <button
                                                                        class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                                        type="button"
                                                                        x-on:click="open"
                                                                        x-show="isOpen() === true"
                                                                        style="display: none;">
                                                                        <svg class="h-4 w-4 fill-current"
                                                                            version="1.1"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>

                                                                    <button @click="close"
                                                                        class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                                        type="button"
                                                                        x-show="isOpen() === false">
                                                                        <svg class="h-4 w-4 fill-current"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <!---->

                                                            </div>
                                                        </div>
                                                        <!--select menu-->
                                                        <div class="w-full px-4">
                                                            <div class="max-h-select absolute left-0 top-12 z-40 w-full rounded-b-lg border border-t-0 border-gray-300 bg-white shadow-md"
                                                                x-on:click.away="close"
                                                                x-show.transition.origin.top="isOpen()"
                                                                style="display: none;">
                                                                <div
                                                                    class="flex h-fit w-full flex-col overflow-y-auto">
                                                                    <ul class="space-y-3 p-3 text-sm text-gray-700 "
                                                                        aria-labelledby="dropdownCheckboxButton">
                                                                        @foreach (config('enums.delivery_modes') as $mode)
                                                                            <li>
                                                                                <div
                                                                                    class="flex items-center">
                                                                                    <input
                                                                                        id="checkbox-item-mode-{{ $mode['code'] }}"
                                                                                        @click="add('checkbox-item-mode-{{ $mode['code'] }}')"
                                                                                        data-text="{{ $mode['name'] }}"
                                                                                        wire:model="deliverMode"
                                                                                        name="delivery"
                                                                                        type="radio"
                                                                                        value="{{ $mode['code'] }}"
                                                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                                                                    <label
                                                                                        for="checkbox-item-7"
                                                                                        class="ml-2 text-sm font-medium text-gray-900 ">{{ $mode['name'] }}</label>
                                                                                </div>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---->
                                                        @error('deliverMode')
                                                            <span
                                                                class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/Delivery Mode-->
                                            <!--Categories-->
                                            <div class="my-8">
                                                <div class="relative inline-block w-full"
                                                    x-data="Category()">
                                                    <div class="relative flex flex-col items-center">
                                                        <!--input area-->
                                                        <div class="group w-full" x-on:click="open">
                                                            <div
                                                                class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-4 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                                                                <div
                                                                    class="flex flex-auto flex-row overflow-x-visible truncate">
                                                                    <!--input-->
                                                                    <div class="group relative flex-1">
                                                                        <input
                                                                            class="h-full w-full cursor-pointer appearance-none border-0 bg-transparent p-1 px-2 text-gray-800 outline-none"
                                                                            placeholder="What course topics are you interested in ?">
                                                                        <div :class="selected.length > 0 ?
                                                                            'py-2 w-full' : ''"
                                                                            class="absolute left-0 top-0 bg-white">
                                                                            <template
                                                                                x-for="(option,index) in selected">
                                                                                <span
                                                                                    class="m-1 rounded-full bg-gray-200 p-1 px-2"
                                                                                    x-text="option"></span>
                                                                            </template>
                                                                        </div>
                                                                    </div>
                                                                    <!---->
                                                                </div>
                                                                <!--dropdown button-->
                                                                <div
                                                                    class="svelte-1l8159u flex w-8 items-center justify-end border-l border-gray-200 py-1 pl-2 pr-1 text-gray-300">
                                                                    <button
                                                                        class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                                        type="button"
                                                                        x-on:click="open"
                                                                        x-show="isOpen() === true"
                                                                        style="display: none;">
                                                                        <svg class="h-4 w-4 fill-current"
                                                                            version="1.1"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                    <button @click="close"
                                                                        class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                                                        type="button"
                                                                        x-show="isOpen() === false">
                                                                        <svg class="h-4 w-4 fill-current"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <!--select menu-->
                                                        <div class="w-full px-4">
                                                            <div class="max-h-select absolute right-1/2 top-14 z-40 w-[90%] translate-x-1/2 rounded-b-lg bg-white"
                                                                x-on:click.away="close"
                                                                x-show.transition.origin.top="isOpen()"
                                                                style="display: none;">
                                                                <div
                                                                    class="flex h-fit w-full flex-col overflow-y-auto">
                                                                    <ul class="h-40 space-y-3 overflow-y-auto p-3 text-sm text-gray-700 "
                                                                        aria-labelledby="dropdownCheckboxButton">
                                                                        @foreach ($categories as $category)
                                                                            <li>
                                                                                <div
                                                                                    class="flex items-center">
                                                                                    <input
                                                                                        id="checkbox-item-category-{{ $category->id }}"
                                                                                        @click="add('checkbox-item-category-{{ $category->id }}')"
                                                                                        data-text="{{ $category->category_name }}"
                                                                                        wire:model="selectedCategories"
                                                                                        type="checkbox"
                                                                                        value="{{ $category->id }}"
                                                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                                                                    <label
                                                                                        for="checkbox-item-7"
                                                                                        class="ml-2 text-sm font-medium text-gray-900 ">{{ $category->category_name }}</label>
                                                                                </div>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---->
                                                        @error('selectedCategories')
                                                            <span
                                                                class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <!--/Categories-->

                                            <!--are you Instructor-->
                                            <label for="inst" class="cursor-pointer w-full flex items-center h-12 mt-8 mx-auto justify-center gap-x-3 rounded-full border border-slate-300 bg-slate-100 hover:bg-blue-100 focus-within:bg-blue-100 hover:border-blue-300 focus-within:border-blue-300 transition-all">
                                                <input id="inst" type="checkbox" class="rounded-md">
                                                <p> Are you Instructor ? </p>
                                            </label>
                                            <!--/are you Instructor-->

                                        </div>
                                    </form>
                                    <!--Step1 Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/first step-->
                    <!--popup buttons-->
                    <div class="mx-auto mb-5 flex w-full justify-center p-4">
                        <button wire:click="submit"
                            class="m-4 flex inline-flex items-center justify-center space-x-2 rounded-full border border-transparent bg-traivis-500 px-12 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                            Done
                        </button>
                    </div>
                    <!--/popup buttons-->
                </div>
                <!--END popup content -->
            </div>
        </div>
    </section>
</div>
