<div x-data="{
    open: @entangle('openModal'),
    activeTab: @entangle('activeTab'),
    edit: @entangle('edit')
}">
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <div>
        <span x-on:click="open = ! open"
            class="fixed bottom-10 right-10 cursor-pointer rounded-full bg-white text-traivis-500 ring-1 ring-white transition-all hover:scale-110 hover:text-traivis-600  md:right-60 lg:right-1/4">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="h-12 w-12">
                <path
                    d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                </path>
            </svg>
        </span>
    </div>
    @if ($openModal)
        @auth
            @php
                $entity = \App\Classes\Helper::getCurrentEntity();
            @endphp
        @endauth
        <section x-show="open"
            class="fixed bottom-0 left-0 right-0 top-0 z-50 flex h-full w-full items-center overflow-y-auto bg-gray-800 bg-opacity-80 p-4">
            <div x-show="open" @click.outside="open = false" class="m-auto w-full rounded-md bg-white p-3"
                :class="activeTab === 'blog' ? 'md:max-w-4xl' : 'max-w-lg'">
                <!------tabs--------->
                <div class="">
                    <div class="sm:block">
                        <div class="flex justify-center border-b border-gray-200">
                            @can('blog_edit')
                                <nav class="-mb-px flex w-full justify-evenly space-x-8 px-4"
                                    aria-label="Tabs" x-show="edit">
                                    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                                    <span x-show="activeTab === 'note'"
                                        class="group inline-flex cursor-pointer items-center border-b-2 px-1 py-4 text-sm font-medium"
                                        :class="activeTab === 'note' ? 'border-traivis-500 text-traivis-500' :
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                            data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                            height="512" fill="currentColor" class="-ml-0.5 mr-2 h-5 w-5">
                                            <path
                                                d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                                            </path>
                                        </svg>
                                        <span>Editing: Note</span>
                                    </span>
                                    <span x-show="activeTab === 'hint'"
                                        class="group inline-flex cursor-pointer items-center border-b-2 px-1 py-4 text-sm font-medium"
                                        :class="activeTab === 'hint' ? 'border-traivis-500 text-traivis-500' :
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'">
                                        <!-- Heroicon name: solid/users -->
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                            viewbox="0 0 24 24" width="512 " height="512"
                                            fill="currentColor" aria-hidden="true"
                                            class="-ml-0.5 mr-2 h-5 w-5">
                                            <path
                                                d="M20.494,7.968l-9.54-7A5,5,0,0,0,3,5V19a5,5,0,0,0,7.957,4.031l9.54-7a5,5,0,0,0,0-8.064Zm-1.184,6.45-9.54,7A3,3,0,0,1,5,19V5A2.948,2.948,0,0,1,6.641,2.328,3.018,3.018,0,0,1,8.006,2a2.97,2.97,0,0,1,1.764.589l9.54,7a3,3,0,0,1,0,4.836Z">
                                            </path>
                                        </svg>
                                        <span>Editing: Hint</span>
                                    </span>
                                    <span x-show="activeTab === 'blog'"
                                        class="group inline-flex cursor-pointer items-center border-b-2 px-1 py-4 text-sm font-medium"
                                        :class="activeTab === 'blog' ? 'border-traivis-500 text-traivis-500' :
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'">
                                        <!-- Heroicon name: solid/users -->
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                            viewbox="0 0 24 24" width="512" height="512"
                                            fill="currentColor" aria-hidden="true"
                                            class="-ml-0.5 mr-2 h-5 w-5">
                                            <path
                                                d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z">
                                            </path>
                                            <path
                                                d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z">
                                            </path>
                                        </svg>
                                        <span>Editing: Blog</span>
                                    </span>
                                </nav>
                            @endcan
                            <nav class="-mb-px flex w-full justify-evenly space-x-8 px-4"
                                aria-label="Tabs" x-show="!edit">
                                <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                                @can('create_note', \App\Models\Post::class)
                                    <span x-on:click="activeTab = 'note'"
                                        class="group inline-flex cursor-pointer items-center border-b-2 px-1 py-4 text-sm font-medium"
                                        :class="activeTab === 'note' ? 'border-traivis-500 text-traivis-500' :
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                            data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                            height="512" fill="currentColor" class="-ml-0.5 mr-2 h-5 w-5">
                                            <path
                                                d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                                            </path>
                                        </svg>
                                        <span>Note</span>
                                    </span>
                                @endcan
                                @can('create_hint', \App\Models\Post::class)
                                    <span x-on:click="activeTab = 'hint'"
                                        class="group inline-flex cursor-pointer items-center border-b-2 px-1 py-4 text-sm font-medium"
                                        :class="activeTab === 'hint' ? 'border-traivis-500 text-traivis-500' :
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'">
                                        <!-- Heroicon name: solid/users -->
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                            viewbox="0 0 24 24" width="512 " height="512"
                                            fill="currentColor" aria-hidden="true"
                                            class="-ml-0.5 mr-2 h-5 w-5">
                                            <path
                                                d="M20.494,7.968l-9.54-7A5,5,0,0,0,3,5V19a5,5,0,0,0,7.957,4.031l9.54-7a5,5,0,0,0,0-8.064Zm-1.184,6.45-9.54,7A3,3,0,0,1,5,19V5A2.948,2.948,0,0,1,6.641,2.328,3.018,3.018,0,0,1,8.006,2a2.97,2.97,0,0,1,1.764.589l9.54,7a3,3,0,0,1,0,4.836Z">
                                            </path>
                                        </svg>
                                        <span>Hint</span>
                                    </span>
                                @endcan
                                @can('create_blog', \App\Models\Post::class)
                                    <span x-on:click="activeTab = 'blog'"
                                        class="group inline-flex cursor-pointer items-center border-b-2 px-1 py-4 text-sm font-medium"
                                        :class="activeTab === 'blog' ? 'border-traivis-500 text-traivis-500' :
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'">
                                        <!-- Heroicon name: solid/users -->
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                            viewbox="0 0 24 24" width="512" height="512"
                                            fill="currentColor" aria-hidden="true"
                                            class="-ml-0.5 mr-2 h-5 w-5">
                                            <path
                                                d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z">
                                            </path>
                                            <path
                                                d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z">
                                            </path>
                                        </svg>
                                        <span>Blog</span>
                                    </span>
                                @endcan
                            </nav>
                        </div>
                    </div>
                </div>
                <!------END tabs--------->

                <!-- start note -->
                <div x-show="activeTab === 'note'" class="mt-4 flex items-start">
                    <div class="min-w-0 flex-1">
                        <form action="#">
                            <div class="mb-6 rounded-lg border-2 border-b border-traivis-200 p-2 pb-3">
                                <div>
                                    <label for="actAs">Publish as:
                                        <b>{{ $entity->name }}</b></label>
                                </div>
                                {{--
                                                        <select wire:model="actAs"
                                                            class="focus:border-primary-500 focus:ring-primary-500  mb-2 block w-full rounded-lg border-gray-300 text-gray-900 shadow-sm outline-none transition duration-75 focus:ring-1 focus:ring-inset disabled:opacity-70  ">
                                                            <option value="user">{{ auth()->user()->name }}</option>
                                                            @foreach (auth()->user()->businesses as $business)
                                                            <option value="{{ $business->id }}">{{ $business->business_name }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('actAs')
                                                        <p class="text-red-500">{{ $message }}</p>
                                                        @enderror
                            --}}
                                <div x-data="{ count: 0, maxCharacters: {{ $note_limit }} }" x-init="count = 0">
                                    <label for="note">Type a note: (<span
                                            :class="count > maxCharacters ? 'text-red-500' : ''"
                                            x-text="count + '/' + maxCharacters"></span>)</label>
                                    <textarea rows="3" id="note" wire:model.debounce="note"
                                        x-on:input="count = $event.target.value.length"
                                        class="focus:border-primary-500 focus:ring-primary-500  mb-2 block w-full rounded-lg border-gray-300 text-gray-900 shadow-sm outline-none transition duration-75 focus:ring-1 focus:ring-inset disabled:opacity-70  "></textarea>
                                </div>

                                {{--                                <textarea rows="3" id="note" wire:model="note" --}}
                                {{--                                    class="focus:border-primary-500 focus:ring-primary-500  mb-2 block w-full rounded-lg border-gray-300 text-gray-900 shadow-sm outline-none transition duration-75 focus:ring-1 focus:ring-inset disabled:opacity-70  "></textarea> --}}
                                @error('note')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                @if ($note_image)
                                    <div class="mb-3 h-48 overflow-y-auto rounded-md bg-gray-50">
                                        <label for="note">Image:</label>
                                        <img class="mx-auto h-fit w-full object-cover"
                                            src="{{ $note_image->temporaryUrl() }}" alt="">
                                    </div>
                                @endif

                                <!-- note options -->
                                <div class="flex justify-between pt-2">
                                    <div class="flex items-center space-x-5">
                                        <!-- photo button -->
                                        <div class="flow-root">

                                            <x-input.file-upload-icon wire:model="note_image" id="noteImage">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                                    viewbox="0 0 24 24" width="512" height="512"
                                                    class="h-6 w-6" stroke="none" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0ZM5,2H19a3,3,0,0,1,3,3V19a2.951,2.951,0,0,1-.3,1.285l-9.163-9.163a5,5,0,0,0-7.072,0L2,14.586V5A3,3,0,0,1,5,2ZM5,22a3,3,0,0,1-3-3V17.414l4.878-4.878a3,3,0,0,1,4.244,0L20.285,21.7A2.951,2.951,0,0,1,19,22Z">
                                                    </path>
                                                    <path
                                                        d="M16,10.5A3.5,3.5,0,1,0,12.5,7,3.5,3.5,0,0,0,16,10.5Zm0-5A1.5,1.5,0,1,1,14.5,7,1.5,1.5,0,0,1,16,5.5Z">
                                                    </path>
                                                </svg>
                                            </x-input.file-upload-icon>

                                            {{--
                                            <input type="file" class="hidden"
                                                wire:model="note_image" />
                                            <lable
                                                class="-m-2 inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full text-gray-400 hover:text-gray-500">
                                                <!-- Heroicon name: outline/paper-clip -->
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                                    viewbox="0 0 24 24" width="512" height="512"
                                                    class="h-6 w-6" stroke="none" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0ZM5,2H19a3,3,0,0,1,3,3V19a2.951,2.951,0,0,1-.3,1.285l-9.163-9.163a5,5,0,0,0-7.072,0L2,14.586V5A3,3,0,0,1,5,2ZM5,22a3,3,0,0,1-3-3V17.414l4.878-4.878a3,3,0,0,1,4.244,0L20.285,21.7A2.951,2.951,0,0,1,19,22Z">
                                                    </path>
                                                    <path
                                                        d="M16,10.5A3.5,3.5,0,1,0,12.5,7,3.5,3.5,0,0,0,16,10.5Zm0-5A1.5,1.5,0,1,1,14.5,7,1.5,1.5,0,0,1,16,5.5Z">
                                                    </path>
                                                </svg>
                                                <span class="sr-only">Attach a photo</span>
                                            </lable>
--}}
                                        </div>

                                        <!-- Poll button -->
                                        {{-- <div class="flow-root">
                                        <button type="button"
                                            class="-m-2 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                                            <!-- Heroicon name: outline/paper-clip -->
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewbox="0 0 24 24"
                                                width="512" height="512" class="h-6 w-6" stroke="none"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M23,22H3a1,1,0,0,1-1-1V1A1,1,0,0,0,0,1V21a3,3,0,0,0,3,3H23a1,1,0,0,0,0-2Z">
                                                </path>
                                                <path d="M15,20a1,1,0,0,0,1-1V12a1,1,0,0,0-2,0v7A1,1,0,0,0,15,20Z">
                                                </path>
                                                <path d="M7,20a1,1,0,0,0,1-1V12a1,1,0,0,0-2,0v7A1,1,0,0,0,7,20Z">
                                                </path>
                                                <path d="M19,20a1,1,0,0,0,1-1V7a1,1,0,0,0-2,0V19A1,1,0,0,0,19,20Z">
                                                </path>
                                                <path d="M11,20a1,1,0,0,0,1-1V7a1,1,0,0,0-2,0V19A1,1,0,0,0,11,20Z">
                                                </path>
                                            </svg><span class="sr-only">Add Poll</span>
                                        </button>
                                    </div> --}}

                                        <!-- Event button -->
                                        {{-- <div class="flow-root">
                                        <button type="button"
                                            class="-m-2 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                                            <!-- Heroicon name: outline/paper-clip -->
                                            <svg id="Layer_1" height="512" viewbox="0 0 24 24" width="512"
                                                xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" class="h-6 w-6"
                                                stroke="none" fill="currentColor" aria-hidden="true">
                                                <path d="m9 24h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2z"></path>
                                                <path d="m7 20h-6a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2z"></path>
                                                <path d="m5 16h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z"></path>
                                                <path
                                                    d="m13 23.955a1 1 0 0 1 -.089-2 10 10 0 1 0 -10.87-10.865 1 1 0 0 1 -1.992-.18 12 12 0 0 1 23.951 1.09 11.934 11.934 0 0 1 -10.91 11.951c-.03.003-.061.004-.09.004z">
                                                </path>
                                                <path
                                                    d="m12 6a1 1 0 0 0 -1 1v5a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414l-2.707-2.707v-4.586a1 1 0 0 0 -1-1z">
                                                </path>
                                            </svg><span class="sr-only">Tag Event</span>
                                        </button>
                                    </div> --}}

                                        <!-- Location button -->
                                        {{-- <div class="flow-root">
                                        <button type="button"
                                            class="-m-2 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                                            <!-- Heroicon name: outline/paper-clip -->
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewbox="0 0 24 24"
                                                width="512" height="512" class="h-6 w-6" stroke="none"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M12,6a4,4,0,1,0,4,4A4,4,0,0,0,12,6Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,12Z">
                                                </path>
                                                <path
                                                    d="M12,24a5.271,5.271,0,0,1-4.311-2.2c-3.811-5.257-5.744-9.209-5.744-11.747a10.055,10.055,0,0,1,20.11,0c0,2.538-1.933,6.49-5.744,11.747A5.271,5.271,0,0,1,12,24ZM12,2.181a7.883,7.883,0,0,0-7.874,7.874c0,2.01,1.893,5.727,5.329,10.466a3.145,3.145,0,0,0,5.09,0c3.436-4.739,5.329-8.456,5.329-10.466A7.883,7.883,0,0,0,12,2.181Z">
                                                </path>
                                            </svg><span class="sr-only">Tag Location</span>
                                        </button>
                                    </div> --}}

                                    </div>
                                </div>
                                <!-- End note options -->
                                @error('note_image')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror

                            </div>
                        </form>
                    </div>

                </div>
                <!-- END note -->
                <!-- start hint -->
                <div x-show="activeTab === 'hint'" class="mt-4 flex items-start">
                    <div class="mb-5 min-w-0 flex-1">
                        <div class="max-w-xl">
                            <div>
                                <label for="actAs">Publish as:
                                    <b>{{ $entity->name }}</b></label>
                            </div>

                            {{--
                        <select wire:model="actAs"
                                class="focus:border-primary-500 focus:ring-primary-500  mb-2 block w-full rounded-lg border-gray-300 text-gray-900 shadow-sm outline-none transition duration-75 focus:ring-1 focus:ring-inset disabled:opacity-70  ">
                            <option value="user">{{ auth()->user()->name }}</option>
                            @foreach (auth()->user()->businesses as $business)
                                <option value="{{ $business->id }}">{{ $business->business_name }}
                                </option>
                            @endforeach
                        </select>
                            @error('actAs')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        --}}
                            <label for="hintVideo"
                                class="flex h-32 w-full cursor-pointer appearance-none justify-center rounded-md border-2 border-dashed border-gray-300 bg-white px-4 transition hover:border-gray-400 focus:outline-none">
                                <span class="flex items-center space-x-2" id="videoButtonId">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600"
                                        fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg><span class="font-medium text-gray-600">Drop files to Attach,
                                        or
                                        <span class="text-traivis-600 underline">browse</span>
                                    </span>
                                </span>
                            </label>
                            <input id="hintVideo" type="file" class="hidden" wire:model="hint_video">
                            @error('hint_video')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                            @if ($hint_video)
                                <div class="mb-3 rounded-md bg-gray-50">
                                    <label for="note">Video:</label>
                                    <video class="h-64 w-full" width="320" height="240" controls>
                                        <source src="{{ $hint_video->temporaryUrl() }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- END hint -->
                <!-- start blog -->
                <div x-show="activeTab === 'blog'" class="mt-4 flex items-start">
                    <div class="min-w-0 flex-1">
                        <form action="#">
                            <div class="mb-6 rounded-lg border-2 border-b border-traivis-200 p-2 pb-3">
                                <div>
                                    <label for="actAs">Publish as:
                                        <b>{{ $entity->name }}</b></label>
                                </div>

                                {{-- <select wire:model="actAs"
                                    class="focus:border-primary-500 focus:ring-primary-500  mb-2 block w-full rounded-lg border-gray-300 text-gray-900 shadow-sm outline-none transition duration-75 focus:ring-1 focus:ring-inset disabled:opacity-70  ">
                                <option value="user">{{ auth()->user()->name }}</option>
                                @foreach (auth()->user()->businesses as $business)
                                    <option value="{{ $business->id }}">{{ $business->business_name }}
                                    </option>
                                @endforeach
                            </select>
                                @error('actAs')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                --}}
                                <label for="title">Title:</label>
                                <input type="text"
                                    class="focus:border-primary-500 focus:ring-primary-500  mb-2 block w-full rounded-lg border-gray-300 text-gray-900 shadow-sm outline-none transition duration-75 focus:ring-1 focus:ring-inset disabled:opacity-70  "
                                    wire:model.defer="title" placeholder="Title here">
                                @error('title')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                <label for="title">Overview:</label>
                                <textarea type="text"
                                    class="focus:border-primary-500 focus:ring-primary-500  mb-2 block w-full rounded-lg border-gray-300 text-gray-900 shadow-sm outline-none transition duration-75 focus:ring-1 focus:ring-inset disabled:opacity-70  "
                                    wire:model.defer="overview" placeholder="overview here"></textarea>
                                @error('overview')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                <div>
                                    @if ($blog_image)
                                        <div class="mb-3 h-48 overflow-y-auto rounded-md bg-gray-50">
                                            <label for="note">Image:</label>
                                            <img class="mx-auto h-fit w-full object-cover"
                                                src="{{ $blog_image->temporaryUrl() }}" alt="">
                                        </div>
                                    @elseif($post && $post->hasMedia())
                                        <div class="mb-3 h-48 overflow-y-auto rounded-md bg-gray-50">
                                            <label for="note">Image:</label>
                                            <img class="mx-auto h-fit w-full object-cover"
                                                src="{{ $post->getFirstMediaUrl() }}" alt="">
                                        </div>
                                    @endif
                                    <!-- blog options -->
                                    <div class="flex justify-between pt-2">
                                        <div class="flex items-center space-x-5">
                                            <!-- photo button -->
                                            <div class="flow-root">
                                                <x-input.file-upload-icon id="blogImageId" wire:model="blog_image">
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                                        viewbox="0 0 24 24" width="512" height="512"
                                                        class="h-6 w-6" stroke="none" fill="currentColor"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0ZM5,2H19a3,3,0,0,1,3,3V19a2.951,2.951,0,0,1-.3,1.285l-9.163-9.163a5,5,0,0,0-7.072,0L2,14.586V5A3,3,0,0,1,5,2ZM5,22a3,3,0,0,1-3-3V17.414l4.878-4.878a3,3,0,0,1,4.244,0L20.285,21.7A2.951,2.951,0,0,1,19,22Z">
                                                        </path>
                                                        <path
                                                            d="M16,10.5A3.5,3.5,0,1,0,12.5,7,3.5,3.5,0,0,0,16,10.5Zm0-5A1.5,1.5,0,1,1,14.5,7,1.5,1.5,0,0,1,16,5.5Z">
                                                        </path>
                                                    </svg>
                                                </x-input.file-upload-icon>
                                                {{-- <input id="blogImageId" type="file" class="hidden"
                                                        wire:model="blog_image" />
                                                    <label for="blogImageId"
                                                        class="-m-2 inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full text-gray-400 hover:text-gray-500">
                                                        <!-- Heroicon name: outline/paper-clip -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                                            viewbox="0 0 24 24" width="512" height="512"
                                                            class="h-6 w-6" stroke="none" fill="currentColor"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0ZM5,2H19a3,3,0,0,1,3,3V19a2.951,2.951,0,0,1-.3,1.285l-9.163-9.163a5,5,0,0,0-7.072,0L2,14.586V5A3,3,0,0,1,5,2ZM5,22a3,3,0,0,1-3-3V17.414l4.878-4.878a3,3,0,0,1,4.244,0L20.285,21.7A2.951,2.951,0,0,1,19,22Z">
                                                            </path>
                                                            <path
                                                                d="M16,10.5A3.5,3.5,0,1,0,12.5,7,3.5,3.5,0,0,0,16,10.5Zm0-5A1.5,1.5,0,1,1,14.5,7,1.5,1.5,0,0,1,16,5.5Z">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Attach a Photo</span>
                                                    </label> --}}
                                            </div>
                                            <!-- Poll button -->
                                            {{-- <div class="flow-root">
                                                <button type="button"
                                                    class="-m-2 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                                                    <!-- Heroicon name: outline/paper-clip -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewbox="0 0 24 24"
                                                        width="512" height="512" class="h-6 w-6" stroke="none"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M23,22H3a1,1,0,0,1-1-1V1A1,1,0,0,0,0,1V21a3,3,0,0,0,3,3H23a1,1,0,0,0,0-2Z">
                                                        </path>
                                                        <path d="M15,20a1,1,0,0,0,1-1V12a1,1,0,0,0-2,0v7A1,1,0,0,0,15,20Z">
                                                        </path>
                                                        <path d="M7,20a1,1,0,0,0,1-1V12a1,1,0,0,0-2,0v7A1,1,0,0,0,7,20Z"></path>
                                                        <path d="M19,20a1,1,0,0,0,1-1V7a1,1,0,0,0-2,0V19A1,1,0,0,0,19,20Z">
                                                        </path>
                                                        <path d="M11,20a1,1,0,0,0,1-1V7a1,1,0,0,0-2,0V19A1,1,0,0,0,11,20Z">
                                                        </path>
                                                    </svg><span class="sr-only">Add Poll</span>
                                                </button>
                                            </div> --}}
                                            <!-- Event button -->
                                            {{-- <div class="flow-root">
                                                <button type="button"
                                                    class="-m-2 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                                                    <!-- Heroicon name: outline/paper-clip -->
                                                    <svg id="Layer_1" height="512" viewbox="0 0 24 24" width="512"
                                                        xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" class="h-6 w-6"
                                                        stroke="none" fill="currentColor" aria-hidden="true">
                                                        <path d="m9 24h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2z"></path>
                                                        <path d="m7 20h-6a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2z"></path>
                                                        <path d="m5 16h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z"></path>
                                                        <path
                                                            d="m13 23.955a1 1 0 0 1 -.089-2 10 10 0 1 0 -10.87-10.865 1 1 0 0 1 -1.992-.18 12 12 0 0 1 23.951 1.09 11.934 11.934 0 0 1 -10.91 11.951c-.03.003-.061.004-.09.004z">
                                                        </path>
                                                        <path
                                                            d="m12 6a1 1 0 0 0 -1 1v5a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414l-2.707-2.707v-4.586a1 1 0 0 0 -1-1z">
                                                        </path>
                                                    </svg><span class="sr-only">Tag Event</span>
                                                </button>
                                            </div> --}}
                                            <!-- Location button -->
                                            {{-- <div class="flow-root">
                                                <button type="button"
                                                    class="-m-2 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                                                    <!-- Heroicon name: outline/paper-clip -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewbox="0 0 24 24"
                                                        width="512" height="512" class="h-6 w-6" stroke="none"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M12,6a4,4,0,1,0,4,4A4,4,0,0,0,12,6Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,12Z">
                                                        </path>
                                                        <path
                                                            d="M12,24a5.271,5.271,0,0,1-4.311-2.2c-3.811-5.257-5.744-9.209-5.744-11.747a10.055,10.055,0,0,1,20.11,0c0,2.538-1.933,6.49-5.744,11.747A5.271,5.271,0,0,1,12,24ZM12,2.181a7.883,7.883,0,0,0-7.874,7.874c0,2.01,1.893,5.727,5.329,10.466a3.145,3.145,0,0,0,5.09,0c3.436-4.739,5.329-8.456,5.329-10.466A7.883,7.883,0,0,0,12,2.181Z">
                                                        </path>
                                                    </svg><span class="sr-only">Tag Location</span>
                                                </button>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <!-- End blog options -->
                                    @error('blog_image')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div wire:ignore>
                                    <label for="content">Content:</label>
                                    <textarea id="content" class="page_text form-input mt-1 block w-full rounded-md shadow-sm"
                                        wire:model.debounce="body" x-data x-ref="page_text" wire:key="{{ rand() }}"
                                        x-init="tinyMCE.execCommand('mceRemoveEditor', false, 'content');
                                        tinymce.init({
                                            promotion: false,
                                            branding: false,
                                            statusbar: false,
                                            selector: '#content',
                                            height: 300,
                                            plugins: [
                                                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                                                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                                                'insertdatetime', 'media', 'table', 'wordcount',
                                            ],
                                            toolbar: 'insertfile undo redo | styleselect | blocks | ' +
                                                'bold italic backcolor | alignleft aligncenter ' +
                                                'alignright alignjustify | bullist numlist outdent indent | ' +
                                                'link image | removeformat',
                                            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
                                            image_title: true,
                                            automatic_uploads: true,
                                            images_upload_url: '/tinyMCE/upload',
                                            image_class_list: [
                                                { title: 'img-responsive', value: 'img-responsive' },
                                            ],
                                            file_picker_types: 'image',
                                            file_picker_callback: (cb, value, meta) => {
                                                const input = document.createElement('input');
                                                input.setAttribute('type', 'file');
                                                input.setAttribute('accept', 'image/*');

                                                input.addEventListener('change', (e) => {
                                                    const file = e.target.files[0];

                                                    const reader = new FileReader();
                                                    reader.addEventListener('load', () => {
                                                        /*
                                                        Note: Now we need to register the blob in TinyMCEs image blob
                                                        registry. In the next release this part hopefully won't be
                                                        necessary, as we are looking to handle it internally.
                                                        */
                                                        const id = 'blobid' + (new Date()).getTime();
                                                        const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                                                        const base64 = reader.result.split(',')[1];
                                                        const blobInfo = blobCache.create(id, file, base64);
                                                        blobCache.add(blobInfo);

                                                        /* call the callback and populate the Title field with the file name */
                                                        cb(blobInfo.blobUri(), { title: file.name });
                                                    });
                                                    reader.readAsDataURL(file);
                                                });

                                                input.click();
                                            },
                                            setup: function(editor) {
                                                editor.on('init change', function() {
                                                    editor.save();
                                                });
                                                editor.on('change', function(e) {
                                                    @this.set('body', editor.getContent());
                                                });
                                            }
                                        });"></textarea>
                                    @error('body')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- <section>
                                <!-------WYSIWYG-------->
                                <style>
                                    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

                                    .active\:bg-gray-50:active {
                                        --tw-bg-opacity: 1;
                                        background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
                                    }
                                </style>
                                <div class="flex items-center justify-center">
                                    <div class="w-full max-w-6xl mx-auto rounded-xl bg-white text-black" x-data="app()"
                                        x-init="init($refs.wysiwyg)">
                                        <label for="title">Title:</label>
                                        <input type="text"
                                            class="mb-2 text-gray-900 block w-full transition duration-75 rounded-lg shadow-sm outline-none focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70    border-gray-300 "
                                            wire:model.defer="title" placeholder="Title here">
                                        <label for="title">Content:</label>
                                        <div class="border border-gray-200 overflow-hidden rounded-md">
                                            <div class="w-full flex border-b border-gray-200 text-xl text-gray-600">
                                                <button
                                                    class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-bold"></i>
                                                </button>
                                                <button
                                                    class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-italic"></i>
                                                </button>
                                                <button
                                                    class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-underline"></i>
                                                </button>
                                                <button
                                                    class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-paragraph"></i>
                                                </button>
                                                <button
                                                    class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-header-1"></i>
                                                </button>
                                                <button
                                                    class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-header-2"></i>
                                                </button>
                                                <button
                                                    class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-header-3"></i>
                                                </button>
                                                <button
                                                    class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-list-bulleted"></i>
                                                </button>
                                                <button
                                                    class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-list-numbered"></i>
                                                </button>
                                                <button
                                                    class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-align-left"></i>
                                                </button>
                                                <button
                                                    class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-align-center"></i>
                                                </button>
                                                <button
                                                    class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50">
                                                    <i class="mdi mdi-format-align-right"></i>
                                                </button>
                                            </div>
                                            <div class="w-full">
                                                <iframe x-ref="wysiwyg" class="w-full h-96 overflow-y-auto"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function app() {
                                        return {
                                        wysiwyg: null,
                                        init: function(el) {
                                            // Get el
                                            this.wysiwyg = el;
                                        // Add CSS
                                        this.wysiwyg.contentDocument.querySelector('head').innerHTML += `<style>
                                                            *, ::after, ::before {box-sizing: border-box;}
                                                            :root {tab-size: 4;}
                                                            html {line-height: 1.15;text-size-adjust: 100%;}
                                                            body {margin: 0px; padding: 1rem 0.5rem;}
                                                            body {font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";}
                                                            `;
                                        this.wysiwyg.contentDocument.body.innerHTML += `
                                            <p>Hello World!
                                            <p>pure AlpineJS and Tailwind WYSIWYG.
                                            `;
                                            // Make editable
                                            this.wysiwyg.contentDocument.designMode = "on";
                                        },
                                        format: function(cmd, param) {
                                            this.wysiwyg.contentDocument.execCommand(cmd, !1, param||null)
                                        }
                                        }
                                    }
                                </script>
                                <!-------WYSIWYG-------->
                            </section> --}}
                            </div>
                        </form>
                    </div>

                </div>
                <!-- END blog -->

                <!-- Buttons -->
                <div class="-m-2 flex justify-end">
                    @if ($edit)
                        <div class="p-2 md:flex-1">
                            <button @click="confirm('Delete?') && @this.deletePost()"
                                class="shadow-button flex w-full flex-wrap justify-center rounded-full border bg-red-500 px-4 py-2.5 text-base font-medium text-gray-100 hover:bg-red-700">
                                <p><x-svg-icons.fi-rr-rotate-right class="h-5 w-5 animate-spin" wire:loading
                                        wire:target="deletePost" /> Delete</p>
                            </button>
                        </div>
                    @endif
                    <div class="p-2 md:flex-1">
                        <button @click="open = false"
                            class="text-Gray-500 shadow-button flex w-full flex-wrap justify-center rounded-full border bg-white px-4 py-2.5 text-base font-medium hover:bg-slate-200">
                            <p>Cancel</p>
                        </button>
                    </div>
                    {{--
                    <div class="p-2 md:flex-1">
                        <button wire:click="publish(1)"
                            class="lex shadow-button w-full flex-wrap justify-center rounded-full border border-traivis-300 bg-traivis-500 px-4 py-2.5 text-base font-medium text-white hover:bg-traivis-600">
                            <p>Draft</p>
                        </button>
                    </div>
--}}
                    <div class="p-2 md:grow-[2]">
                        <button wire:click="publish()"
                            class="lex shadow-button w-full flex-wrap justify-center rounded-full border border-traivis-300 bg-traivis-500 px-4 py-2.5 text-base font-medium text-white hover:bg-traivis-600">
                            <p>Publish</p>
                        </button>
                    </div>
                </div>
                <!-- END Buttons -->
            </div>
        </section>
    @endif
</div>
