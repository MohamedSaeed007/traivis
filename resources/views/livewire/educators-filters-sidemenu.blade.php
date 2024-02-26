<div>
    {{-- <div
        class="flex w-full mb-5 mt-5  flex-row justify-center items-center  text-sm text-gray-600 font-semibold flex-1 flex-wrap">

        <button wire:click="$set('businessTypeFilter','institute')"
            class="cursor-pointer flex flex-row m-3 justify-between items-center px-1 py-1 rounded-full border border-gray-300 hover:bg-cyan-50 hover:text-cyan-500 hover:border-cyan-500 focus-within:bg-cyan-50 focus-within:text-cyan-500 focus-within:border-cyan-500">
            <span class="flex flex-row  items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-indigo-500" id="Layer_1" data-name="Layer 1"
                    viewBox="0 0 24 24" width="512" height="512">
                    <path
                        d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z">
                    </path>
                </svg>
                <p class="px-2">Institution</p>
            </span>

        </button>
        <button wire:click="$set('businessTypeFilter','instructor')"
            class="cursor-pointer flex justify m-3-between items-center px-1 py-1 rounded-full border border-gray-300 hover:bg-pink-50 hover:text-indigo-500 hover:border-indigo-500 focus-within:bg-pink-50 focus-within:text-indigo-500 focus-within:border-indigo-500">
            <span class="flex flex-row items-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    class="w-5 h-5 mb-1 fill-cyan-500" version="1.1" id="Layer_1" viewBox="0 0 512 512"
                    data-name="Layer 1">
                    <path
                        d="M354.7,175.9h-87.4c-7.4-5.3-15.8-9.2-24.7-11.4v-7.2l65.9-30.8c8.8-5.4,11.5-16.9,6-25.7c-1.5-2.5-3.6-4.5-6-6l-59.7-28  c-15.3-7.1-33.5-0.5-40.6,14.8c-1.9,4.1-2.9,8.5-2.9,13v70.1c-8.9,2.2-17.2,6.1-24.6,11.4H93.4C41.8,176,0.1,217.8,0,269.3V456  c0,30.9,25.1,56,56,56h336.1c30.9,0,56-25.1,56-56V269.3C448,217.8,406.3,176,354.7,175.9z M407.3,250.6H367  c-14.8,0-29.1-5.9-39.6-16.4l-20.9-20.9h48.3C378.4,213.4,399.4,228.3,407.3,250.6z M93.4,213.3h48.3l-20.9,20.9  c-10.5,10.5-24.8,16.4-39.6,16.4H40.8C48.7,228.3,69.7,213.4,93.4,213.3z M242.7,474.7h-37.3v-56c0-10.3,8.4-18.7,18.7-18.7  s18.7,8.4,18.7,18.7V474.7z M392.1,474.7h-112v-56c0-30.9-25.1-56-56-56s-56,25.1-56,56v56H56c-10.3,0-18.7-8.4-18.7-18.7V288h43.7  c24.8,0.1,48.5-9.8,66-27.4l50.6-50.5c14.6-14.6,38.2-14.6,52.8,0l50.6,50.5c17.5,17.6,41.2,27.4,66,27.4h43.7v168  C410.7,466.3,402.4,474.7,392.1,474.7z M130.7,344c0,10.3-8.4,18.7-18.7,18.7H93.4c-10.3,0-18.7-8.4-18.7-18.7s8.4-18.7,18.7-18.7  H112C122.3,325.3,130.7,333.7,130.7,344z M130.7,418.6c0,10.3-8.4,18.7-18.7,18.7H93.4c-10.3,0-18.7-8.4-18.7-18.7  c0-10.3,8.4-18.7,18.7-18.7H112C122.3,400,130.7,408.3,130.7,418.6z M373.4,344c0,10.3-8.4,18.7-18.7,18.7h-18.7  c-10.3,0-18.7-8.4-18.7-18.7s8.4-18.7,18.7-18.7h18.7C365,325.3,373.4,333.7,373.4,344z M373.4,418.6c0,10.3-8.4,18.7-18.7,18.7  h-18.7c-10.3,0-18.7-8.4-18.7-18.7c0-10.3,8.4-18.7,18.7-18.7h18.7C365,400,373.4,408.3,373.4,418.6z M261.4,288  c0,20.6-16.7,37.3-37.3,37.3s-37.3-16.7-37.3-37.3s16.7-37.3,37.3-37.3S261.4,267.3,261.4,288z">
                    </path>
                </svg>
                <p class="px-2"> Freelance</p>
            </span>
        </button>
    </div> --}}

    <div class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900  "
        x-data="Category()" x-init="loadOptions()">
        <input name="values" type="hidden" x-bind:value="selectedValues()" value="">
        <div x-on:click="open"
            class="mr-2 group-focus-within:text-traivis-500 group-hover:text-traivis-500 group-focus:text-traivis-500">
            <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                xml:space="preserve" width="512" height="512">
                <g>
                    <path
                        d="M0,191.808V384c0.071,58.881,47.786,106.596,106.667,106.667h298.667C464.214,490.596,511.93,442.881,512,384V189.44   L0,191.808z">
                    </path>
                    <path
                        d="M405.333,64H266.069c-3.299,0.022-6.56-0.708-9.536-2.133l-67.328-33.792c-8.888-4.426-18.679-6.733-28.608-6.741h-53.931   C47.786,21.404,0.071,69.119,0,128v21.141l509.077-2.368C497.961,98.408,454.959,64.099,405.333,64z">
                    </path>
                </g>
            </svg>
        </div>

        <div class="relative inline-block w-full">
            <div class="relative flex flex-col items-center">

                <!--input area-->
                <div class="group w-full" x-on:click="open">

                    <div
                        class="mt-1 flex rounded-lg border border-gray-300 bg-white px-1 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                        <div class="flex flex-auto flex-row overflow-x-visible truncate">

                            <!---->

                            <!--input-->
                            <div class="group relative flex-1">
                                <input id=""
                                    class="h-full w-full appearance-none border-0 bg-transparent p-1 px-2 text-gray-800 outline-none"
                                    placeholder="Category ">
                            </div>
                            <!---->
                        </div>

                        <!--dropdown button-->
                        <div
                            class="svelte-1l8159u flex w-8 items-center justify-end border-l border-gray-200 py-1 pl-2 pr-1 text-gray-300">
                            <button
                                class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                type="button" x-on:click="open" x-show="isOpen() === true"
                                style="display: none;">
                                <svg class="h-4 w-4 fill-current" version="1.1" viewBox="0 0 20 20">
                                    <path
                                        d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                    </path>
                                </svg>
                            </button>

                            <button @click="close"
                                class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                type="button" x-show="isOpen() === false">
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
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
                    <div class="absolute left-0 top-12 z-40 h-[200px] w-full overflow-y-auto rounded-b-lg border border-t-0 border-gray-300 bg-white shadow-md"
                        x-on:click.away="close" x-show.transition.origin.top="isOpen()"
                        style="display: none;">
                        <div class="flex h-fit w-full flex-col overflow-y-auto">

                            <ul class="space-y-3 p-3 text-sm text-gray-700 "
                                aria-labelledby="dropdownCheckboxButton">
                                @foreach ($categories as $category)
                                    <li>
                                        <div class="flex items-center">
                                            <input id="checkbox-item-1" type="checkbox"
                                                value="{{ $category->id }}"
                                                wire:model="selectedCategories"
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                            <label for="checkbox-item-1"
                                                class="ml-2 text-sm font-medium text-gray-900 ">{{ $category->category_name }}</label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
                <!---->

            </div>
        </div>
    </div>
    <script>
        function Category() {
            return {
                // options: [],

                options: [{
                        value: '1',
                        text: '<div class="flex flex-row space-x-2 items-center">\n' +
                            '<div>Option 1</div></div>',
                        selected: false
                    },
                    {
                        value: '2',
                        text: '<div class="flex flex-row space-x-2 items-center">\n' +
                            '<div>Option 2</div></div>',
                        selected: false
                    },
                    {
                        value: '3',
                        text: '<div class="flex flex-row space-x-2 items-center">\n' +
                            '<div>Option 3</div></div>',
                        selected: false
                    },
                ],


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
                select(index, event) {

                    if (!this.options[index].selected) {

                        this.options[index].selected = true;
                        this.options[index].element = event.target;
                        this.selected.push(index);

                    } else {
                        this.selected.splice(this.selected.lastIndexOf(index), 1);
                        this.options[index].selected = false
                    }
                },
                remove(index, option) {
                    this.options[option].selected = false;
                    this.selected.splice(index, 1);


                },
                loadOptions() {
                    return;
                    const options = document.getElementById('select').options;
                    for (let i = 0; i < options.length; i++) {
                        this.options.push({
                            value: options[i].value,
                            text: options[i].innerText,
                            selected: options[i].getAttribute('selected') != null ? options[i]
                                .getAttribute('selected') : false
                        });
                    }


                },
                selectedValues() {
                    return this.selected.map((option) => {
                        return this.options[option].value;
                    })
                }
            }
        }
    </script>

    <div class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900  "
        x-data="Category()" x-init="loadOptions()">
        <input name="values" type="hidden" x-bind:value="selectedValues()" value="">
        <div x-on:click="open"
            class="mr-2 group-focus-within:text-traivis-500 group-hover:text-traivis-500 group-focus:text-traivis-500">
            <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M32 32C14.3 32 0 46.3 0 64V304v48 80c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V304 152.2c0-18.2-19.4-29.7-35.4-21.1L320 215.4V152.2c0-18.2-19.4-29.7-35.4-21.1L128 215.4V64c0-17.7-14.3-32-32-32H32z">
                </path>
            </svg>
        </div>

        <div class="relative inline-block w-full">
            <div class="relative flex flex-col items-center">

                <!--input area-->
                <div class="group w-full" x-on:click="open">

                    <div
                        class="mt-1 flex rounded-lg border border-gray-300 bg-white px-1 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                        <div class="flex flex-auto flex-row overflow-x-visible truncate">

                            <!---->

                            <!--input-->
                            <div class="group relative flex-1">
                                <input id=""
                                    class="h-full w-full appearance-none border-0 bg-transparent p-1 px-2 text-gray-800 outline-none"
                                    placeholder="Industry ">
                            </div>
                            <!---->
                        </div>

                        <!--dropdown button-->
                        <div
                            class="svelte-1l8159u flex w-8 items-center justify-end border-l border-gray-200 py-1 pl-2 pr-1 text-gray-300">
                            <button
                                class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                type="button" x-on:click="open" x-show="isOpen() === true"
                                style="display: none;">
                                <svg class="h-4 w-4 fill-current" version="1.1" viewBox="0 0 20 20">
                                    <path
                                        d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                    </path>
                                </svg>
                            </button>

                            <button @click="close"
                                class="h-6 w-6 cursor-pointer text-gray-600 outline-none focus:outline-none"
                                type="button" x-show="isOpen() === false">
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
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
                    <div class="absolute left-0 top-12 z-40 h-[200px] w-full overflow-y-auto rounded-b-lg border border-t-0 border-gray-300 bg-white shadow-md"
                        x-on:click.away="close" x-show.transition.origin.top="isOpen()"
                        style="display: none;">
                        <div class="flex h-fit w-full flex-col overflow-y-auto">

                            <ul class="space-y-3 p-3 text-sm text-gray-700 "
                                aria-labelledby="dropdownCheckboxButton">
                                @foreach ($industries as $industry)
                                    <li>
                                        <div class="flex items-center">
                                            <input id="checkbox-item-1" type="checkbox"
                                                value="{{ $industry->id }}"
                                                wire:model="selectedIndustries"
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500  ">
                                            <label for="checkbox-item-1"
                                                class="ml-2 text-sm font-medium text-gray-900 ">{{ $industry->en_name }}</label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
                <!---->

            </div>
        </div>
    </div>
    {{-- <div class="group w-full mb-5  flex flex-row  items-center h-fit mx-auto " x-data="Category()"
        x-init="loadOptions()">
        <input name="values" type="hidden" x-bind:value="selectedValues()" value="">
        <div x-on:click="open"
            class="mr-2 group-focus:text-traivis-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500">
            <svg class="h-5 w-5" fill="currentColor" id="Layer_1" height="512" viewBox="0 0 24 24" width="512"
                xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                <path
                    d="m19 0h-14a5.006 5.006 0 0 0 -5 5v14a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-14a5.006 5.006 0 0 0 -5-5zm-2 10a1 1 0 0 1 -1-1 1 1 0 0 0 -1-1h-2v8h1a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h1v-8h-2a1 1 0 0 0 -1 1 1 1 0 0 1 -2 0 3 3 0 0 1 3-3h6a3 3 0 0 1 3 3 1 1 0 0 1 -1 1z">
                </path>
            </svg>
        </div>

        <div class="inline-block relative w-full ">
            <div class="flex flex-col items-center relative">

                <!--input area-->
                <div class="w-full group" x-on:click="open">

                    <div
                        class="mt-1 px-1 flex border border-gray-300 bg-white rounded-lg focus-within:ring-traivis-500 focus-within:ring-1 focus-within:border-traivis-500 active:border-traivis-500 transition-colors">
                        <div class="flex flex-auto   truncate flex-row overflow-x-visible">



                            <!---->

                            <!--input-->
                            <div class="flex-1 group relative ">
                                <input id=""
                                    class=" bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800 "
                                    placeholder="Language ">
                            </div>
                            <!---->
                        </div>


                        <!--dropdown button-->
                        <div
                            class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center justify-end border-gray-200 svelte-1l8159u">
                            <button class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none"
                                type="button" x-on:click="open" x-show="isOpen() === true" style="display: none;">
                                <svg class="fill-current h-4 w-4" version="1.1" viewBox="0 0 20 20">
                                    <path
                                        d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                    </path>
                                </svg>
                            </button>

                            <button @click="close"
                                class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none"
                                type="button" x-show="isOpen() === false">
                                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
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
                    <div class="absolute shadow-md border border-gray-300 border-t-0 top-12 bg-white z-40 w-full left-0 rounded-b-lg h-[200px] overflow-y-auto"
                        x-on:click.away="close" x-show.transition.origin.top="isOpen()" style="display: none;">
                        <div class="flex flex-col w-full overflow-y-auto h-fit">

                            <ul class="p-3 space-y-3 text-sm text-gray-700 "
                                aria-labelledby="dropdownCheckboxButton">
                                @foreach ($languages as $language)
                                <li>
                                    <div class="flex items-center">
                                        <input id="checkbox-item-1" type="checkbox" value="{{$language->id}}"
                                            wire:model="selectedLanguages"
                                            class="w-4 h-4 text-traivis-600 bg-gray-100 rounded border-gray-300 focus:ring-traivis-500 focus:ring-2">
                                        <label for="checkbox-item-1"
                                            class="ml-2 text-sm font-medium text-gray-900 ">{{$language->display_name}}</label>
                                    </div>
                                </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
                <!---->

            </div>
        </div>
    </div> --}}
    {{-- <div class="group w-full mb-5  flex flex-row  items-center h-fit mx-auto " x-data="Category()"
        x-init="loadOptions()">
        <input name="values" type="hidden" x-bind:value="selectedValues()" value="">
        <div x-on:click="open"
            class="mr-2 group-focus:text-traivis-500 group-hover:text-traivis-500 group-focus-within:text-traivis-500">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                class="w-5 h-5  text-traivis group-hover:text-traivis-700  ">
                <path d="m22 12v-7a5.006 5.006 0 0 0 -5-5h-10a5.006 5.006 0 0 0 -5 5v7z">
                </path>
                <path
                    d="m23 14h-22a1 1 0 0 0 0 2h10v4h-2a3 3 0 0 0 -3 3 1 1 0 0 0 2 0 1 1 0 0 1 1-1h6a1 1 0 0 1 1 1 1 1 0 0 0 2 0 3 3 0 0 0 -3-3h-2v-4h10a1 1 0 0 0 0-2z">
                </path>
            </svg>
        </div>

        <div class="inline-block relative w-full ">
            <div class="flex flex-col items-center relative">

                <!--input area-->
                <div class="w-full group" x-on:click="open">

                    <div
                        class="mt-1 px-1 flex border border-gray-300 bg-white rounded-lg focus-within:ring-traivis-500 focus-within:ring-1 focus-within:border-traivis-500 active:border-traivis-500 transition-colors">
                        <div class="flex flex-auto   truncate flex-row overflow-x-visible">



                            <!---->

                            <!--input-->
                            <div class="flex-1 group relative ">
                                <input id=""
                                    class=" bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800 "
                                    placeholder="Deliver Mode ">
                            </div>
                            <!---->
                        </div>


                        <!--dropdown button-->
                        <div
                            class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center justify-end border-gray-200 svelte-1l8159u">
                            <button class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none"
                                type="button" x-on:click="open" x-show="isOpen() === true" style="display: none;">
                                <svg class="fill-current h-4 w-4" version="1.1" viewBox="0 0 20 20">
                                    <path
                                        d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                    </path>
                                </svg>
                            </button>

                            <button @click="close"
                                class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none"
                                type="button" x-show="isOpen() === false">
                                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
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
                    <div class="absolute shadow-md border border-gray-300 border-t-0 top-12 bg-white z-40 w-full left-0 rounded-b-lg h-[200px] overflow-y-auto"
                        x-on:click.away="close" x-show.transition.origin.top="isOpen()" style="display: none;">
                        <div class="flex flex-col w-full overflow-y-auto h-fit">

                            <ul class="p-3 space-y-3 text-sm text-gray-700 "
                                aria-labelledby="dropdownCheckboxButton">
                                @foreach ($deliveryModes as $key => $deliveryMode)
                                <li>
                                    <div class="flex items-center">
                                        <input id="checkbox-item-1" type="checkbox" value="{{$key}}"
                                            wire:model="selectedDeliveryModes"
                                            class="w-4 h-4 text-traivis-600 bg-gray-100 rounded border-gray-300 focus:ring-traivis-500 focus:ring-2">
                                        <label for="checkbox-item-1"
                                            class="ml-2 text-sm font-medium text-gray-900 ">{{$deliveryMode['name']}}</label>
                                    </div>
                                </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
                <!---->

            </div>
        </div>
    </div> --}}

    <div class="border-t border-gray-200 px-4 py-6 text-center">
        <button type="button" wire:click="resetFilters"
            class="inline-flex items-center rounded-md border border-transparent bg-gray-50 px-4 py-2 text-sm font-medium text-gray-900 shadow-sm transition-colors hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2   ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="-ml-1 mr-2 h-5 w-5">
                <path
                    d="M23.707,22.293l-7.414-7.414,4.345-4.478c.903-.93,1.4-2.155,1.4-3.451,0-2.73-2.221-4.951-4.951-4.951H6.951c-.973,0-1.909,.297-2.712,.825L1.707,.293C1.316-.098,.684-.098,.293,.293S-.098,1.316,.293,1.707L22.293,23.707c.195,.195,.451,.293,.707,.293s.512-.098,.707-.293c.391-.391,.391-1.023,0-1.414Zm-8.707-3.051v3.758c0,.379-.214,.725-.553,.895-.142,.071-.295,.105-.447,.105-.212,0-.423-.068-.6-.2l-4-3c-.252-.188-.4-.485-.4-.8v-3.844L3.362,10.401c-.903-.93-1.4-2.155-1.4-3.451,0-.235,.028-.462,.06-.687l12.978,12.978Z">
                </path>
            </svg>
            Reset Filters
        </button>

    </div>

</div>
