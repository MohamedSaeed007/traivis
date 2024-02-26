<div>
    <!--Questions area-->
    <div class="grid grid-cols-1 gap-2 md:grid-cols-4" wire:loading.class="animate-pulse"
        wire:target="moveQuestionUp,moveQuestionDown,deleteQuestion">
        @foreach ($quiz->questions()->get() as $index => $questionQ)
        <div wire:click="openQuestion({{ $index }})" wire:target="openQuestion({{ $index }})"
            wire:loading.class="opacity-50"
            class="group relative flex h-32 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-gray-300 p-2 transition hover:border-traivis-500 hover:bg-traivis-50">
            <div class="truncate">{{ $questionQ->title }}</div>
            <div class="mt-2 w-full truncate text-center text-sm">choose the correct
                answer
                please ?
            </div>
            @if (!$underReviewMode)
            <div class="absolute -right-0.5 -top-0.5">
                <button type="button"
                    @click.stop="confirm('Are you sure you want to remove the question?') && @this.deleteQuestion({{ $index }})"
                    class="hidden items-center rounded-bl-lg rounded-tr-lg border border-transparent bg-traivis-500 p-1 text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1 group-hover:inline-flex">
                    <svg fill="currentColor" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" id="Outline"
                        viewBox="0 0 24 24" width="512" height="512">
                        <path
                            d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                        <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                        <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                    </svg>
                </button>
            </div>
            @if (!$questionQ->isFirstInOrder())
            <div class="absolute bottom-1 left-0.5 hidden hover:text-traivis-500 group-hover:block"
                title="Move to before" wire:click.stop="moveQuestionUp({{ $index }})">
                <x-svg-icons.fi-rr-angle-left class="h-5 w-5" />
            </div>
            @endif
            @if (!$questionQ->isLastInOrder())
            <div class="absolute bottom-1 right-0.5 hidden hover:text-traivis-500 group-hover:block"
                title="Move to after" wire:click.stop="moveQuestionDown({{ $index }})">
                <x-svg-icons.fi-rr-angle-right class="h-5 w-5" />
            </div>
            @endif
            @endif
        </div>
        @endforeach

        {{--
        <div class="group relative flex h-32 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-gray-300 p-2 transition hover:border-traivis-500 hover:bg-traivis-50"
            wire:click="openQuestion(0)">
            <div class="">Question 1</div>
            <div class="mt-2 w-full truncate text-center text-sm">choose the correct answer
                please ?</div>
            <div class="absolute -right-0.5 -top-0.5">
                <button type="button"
                    class="hidden items-center rounded-bl-lg rounded-tr-lg border border-transparent bg-traivis-500 p-1 text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1 group-hover:inline-flex">
                    <svg fill="currentColor" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" id="Outline"
                        viewBox="0 0 24 24" width="512" height="512">
                        <path
                            d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                        <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                        <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="group relative flex h-32 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-gray-300 p-2 transition hover:border-traivis-500 hover:bg-traivis-50"
            wire:click="openQuestion(1)">
            <div class="">Question 2</div>
            <div class="mt-2 w-full truncate text-center text-sm">choose the correct answer
                please ?</div>
            <div class="absolute -right-0.5 -top-0.5">
                <button type="button"
                    class="hidden items-center rounded-bl-lg rounded-tr-lg border border-transparent bg-traivis-500 p-1 text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1 group-hover:inline-flex">
                    <svg fill="currentColor" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" id="Outline"
                        viewBox="0 0 24 24" width="512" height="512">
                        <path
                            d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                        <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                        <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="group relative flex h-32 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-gray-300 p-2 transition hover:border-traivis-500 hover:bg-traivis-50"
            wire:click="openQuestion(2)">
            <div class="">Question 3</div>
            <div class="mt-2 w-full truncate text-center text-sm">choose the correct answer
                please ?</div>
            <div class="absolute -right-0.5 -top-0.5">
                <button type="button"
                    class="hidden items-center rounded-bl-lg rounded-tr-lg border border-transparent bg-traivis-500 p-1 text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1 group-hover:inline-flex">
                    <svg fill="currentColor" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" id="Outline"
                        viewBox="0 0 24 24" width="512" height="512">
                        <path
                            d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                        <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                        <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="group relative flex h-32 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-gray-300 p-2 transition hover:border-traivis-500 hover:bg-traivis-50"
            wire:click="openQuestion(3)">
            <div class="">Question 4</div>
            <div class="mt-2 w-full truncate text-center text-sm">choose the correct answer
                please ?</div>
            <div class="absolute -right-0.5 -top-0.5">
                <button type="button"
                    class="hidden items-center rounded-bl-lg rounded-tr-lg border border-transparent bg-traivis-500 p-1 text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1 group-hover:inline-flex">
                    <svg fill="currentColor" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" id="Outline"
                        viewBox="0 0 24 24" width="512" height="512">
                        <path
                            d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                        <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                        <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                    </svg>
                </button>
            </div>
        </div>
        --}}
        <!--Add Question-->
        <div x-data="{
                        qOpen: @entangle('questionModalOpen')
                    }" @keydown.window.escape.stop="qOpen = false" id="qOpen" {{-- @click.outside="qOpen = false" --}}
            class="flex justify-center">
            @if (!$underReviewMode)
            <!----- button----------->
            <button wire:click="newQuestion" type="button"
                class="relative flex inline-flex h-32 w-full cursor-pointer items-center justify-center rounded-lg border-2 border-dashed border-gray-300 px-2 transition focus-within:text-white hover:border-traivis-500 hover:border-white hover:bg-traivis-500 hover:bg-traivis-500 hover:text-white hover:text-white focus:bg-traivis-500 focus:outline-none">
                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true" wire:target="newQuestion" wire:loading.class="animate-spin">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
                <span>Question</span>
            </button>
            <!-----END button----------->
            @endif
            <!-----Start Question window----------->
            <section x-cloak x-show="qOpen" x-transition:enter="ease-out duration-100"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

                <div class="fixed inset-0 z-30 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                    aria-modal="true">
                    <div class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

                        <!---over BG---->
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
                            {{--@click="qOpen = false" --}}>
                        </div>
                        <!-- center-->
                        <span class="hidden sm:inline-block sm:h-screen sm:align-middle"
                            aria-hidden="true">&#8203;</span>
                        <!---END over BG---->

                        @if($question)
                        <!-- Question Box -->
                        <div
                            class="relative my-8 inline-block w-full transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">
                            <!--question row-->
                            @if ($question['type'] == '')
                            <div class="flex h-96 flex-row items-center justify-center space-x-2">
                                <span class="inline-flex rounded-md shadow-sm">
                                    <button type="button" wire:click="$set('question.type', 'closed')"
                                        class="relative inline-flex w-36 items-center justify-center rounded-l-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:border-traivis-500 focus:outline-none focus:ring-1 focus:ring-traivis-500">
                                        <!-- Heroicon name: mini/bookmark -->
                                        <svg fill="currentColor" class="-ml-1 mr-2 h-5 w-5 text-gray-400" height="512"
                                            viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m4 22a2.982 2.982 0 0 1 -2.122-.879l-1.544-1.374a1 1 0 0 1 1.332-1.494l1.585 1.414a1 1 0 0 0 1.456.04l3.6-3.431a1 1 0 1 1 1.378 1.448l-3.585 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2zm-19-7a2.982 2.982 0 0 1 -2.122-.879l-1.585-1.585a1 1 0 0 1 1.414-1.414l1.586 1.585a1.023 1.023 0 0 0 1.414 0l3.6-3.431a1 1 0 1 1 1.382 1.448l-3.589 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2zm-19-7a2.982 2.982 0 0 1 -2.122-.879l-1.544-1.374a1 1 0 0 1 1.332-1.494l1.585 1.414a1 1 0 0 0 1.456.04l3.604-3.431a1 1 0 0 1 1.378 1.448l-3.589 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2z">
                                            </path>
                                        </svg>
                                        Choices
                                    </button>
                                    <button type="button" wire:click="$set('question.type', 'opened')"
                                        class="relative -ml-px inline-flex w-36 items-center justify-center rounded-r-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:border-traivis-500 focus:outline-none focus:ring-1 focus:ring-traivis-500">
                                        <svg fill="currentColor" class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M11.107,14.447a1,1,0,1,0,1.789-.894l-5.5-11a1,1,0,0,0-1.789,0l-5.5,11a1,1,0,1,0,1.789.894L3.619,11H9.383ZM4.619,9,6.5,5.236,8.383,9Z">
                                            </path>
                                            <path
                                                d="M23.707,11.293a1,1,0,0,0-1.414,0L13,20.586,8.707,16.293a1,1,0,1,0-1.414,1.414l5,5a1,1,0,0,0,1.414,0l10-10A1,1,0,0,0,23.707,11.293Z">
                                            </path>
                                        </svg>
                                        Open ended
                                    </button>
                                </span>
                            </div>
                            @else
                            {{-- @dump($questionOptions) --}}
                            {{-- @dump($questionImage, $questionOldImage) --}}

                            {{--
                            @if ($errors->any())
                            @dump($errors->getBags())
                            <div class="bg-red-800 text-red-100">
                                <ul>
                                    @foreach ($errors->all() as $key => $error)
                                    <li> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            --}}

                            <div class="flex flex-row items-start space-x-2">
                                <!--Question title-->
                                <div class="w-3/4 flex-col">
                                    <div class="group relative font-bold">
                                        <input type="text" id="qTitle" required wire:model.debounce="question.title"
                                            class="peer mt-1 h-10 w-full rounded-full border-gray-300 transition-colors focus:border-traivis-400 sm:truncate">
                                        <label for="qTitle"
                                            class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                                            Question </label>
                                        @error('question.title')
                                        <x-tooltip-arrow-up-validation-error :message="$message" />
                                        @enderror
                                    </div>
                                </div>
                                <!--END Question title-->

                                <!--Question setting -->
                                <div class="w-1/4 flex-col mt-1">

                                    <!----Question type drops----------->
                                    <span
                                        class="relative flex h-10 w-full cursor-default items-center rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-1 focus:ring-traivis-500 sm:text-sm">
                                        @switch($question['type'])
                                        @case('closed')
                                        <svg fill="currentColor" class="-ml-1 mr-2 h-5 w-5 text-gray-400" height="512"
                                            viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m4 22a2.982 2.982 0 0 1 -2.122-.879l-1.544-1.374a1 1 0 0 1 1.332-1.494l1.585 1.414a1 1 0 0 0 1.456.04l3.6-3.431a1 1 0 1 1 1.378 1.448l-3.585 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2zm-19-7a2.982 2.982 0 0 1 -2.122-.879l-1.585-1.585a1 1 0 0 1 1.414-1.414l1.586 1.585a1.023 1.023 0 0 0 1.414 0l3.6-3.431a1 1 0 1 1 1.382 1.448l-3.589 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2zm-19-7a2.982 2.982 0 0 1 -2.122-.879l-1.544-1.374a1 1 0 0 1 1.332-1.494l1.585 1.414a1 1 0 0 0 1.456.04l3.604-3.431a1 1 0 0 1 1.378 1.448l-3.589 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2z">
                                            </path>
                                        </svg>
                                        Choices
                                        @break

                                        @case('opened')
                                        <svg fill="currentColor" class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M11.107,14.447a1,1,0,1,0,1.789-.894l-5.5-11a1,1,0,0,0-1.789,0l-5.5,11a1,1,0,1,0,1.789.894L3.619,11H9.383ZM4.619,9,6.5,5.236,8.383,9Z">
                                            </path>
                                            <path
                                                d="M23.707,11.293a1,1,0,0,0-1.414,0L13,20.586,8.707,16.293a1,1,0,1,0-1.414,1.414l5,5a1,1,0,0,0,1.414,0l10-10A1,1,0,0,0,23.707,11.293Z">
                                            </path>
                                        </svg>
                                        Open ended
                                        @break
                                        @endswitch
                                    </span>
                                    {{--
                                    <select wire:model="question.type" @if ($question->id) disabled readonly @endif
                                        class="relative h-10 w-full cursor-default rounded-md border border-gray-300
                                        bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-traivis-500
                                        focus:outline-none focus:ring-1 focus:ring-traivis-500 sm:text-sm">
                                        <option value="closed">Multi choice</option>
                                        <option value="opened">Open ended</option>
                                    </select>
                                    --}}
                                    @error('question.type')
                                    <x-tooltip-arrow-up-validation-error :message="$message" />
                                    @enderror
                                    {{-- <div x-data="{ qtOpen: false }" id="qtOpen"
                                        @keydown.window.escape.stop="qtOpen = false" @click.outside="qtOpen = false"
                                        class="relative inline-block w-full text-center">

                                        <div class="relative mt-1 w-full">

                                            <!----drop button----->
                                            <button @click="qtOpen = !qtOpen" type="button"
                                                class="relative h-10 w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-1 focus:ring-traivis-500 sm:text-sm"
                                                aria-haspopup="listbox" aria-expanded="true"
                                                aria-labelledby="listbox-label">

                                                <span class="flex items-center">
                                                    <svg fill="currentColor" class="h-3 w-3"
                                                        xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                        data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                                        height="512">
                                                        <path
                                                            d="M12.836,.028C9.361-.202,5.961,1.066,3.509,3.521,1.057,5.977-.211,9.378,.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.096,.454,12.836,.028Zm-.933,18.972c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5,.672,1.5,1.5-.672,1.5-1.5,1.5Zm1.928-6.512c-.521,.287-.928,.951-.928,1.512,0,.553-.448,1-1,1s-1-.447-1-1c0-1.285,.807-2.627,1.963-3.264,.763-.42,1.157-1.254,1.004-2.125-.138-.786-.81-1.458-1.596-1.596-.605-.107-1.196,.049-1.657,.435-.454,.382-.714,.94-.714,1.532,0,.553-.448,1-1,1s-1-.447-1-1c0-1.185,.521-2.301,1.428-3.063,.908-.762,2.107-1.078,3.289-.874,1.613,.283,2.938,1.607,3.221,3.221,.298,1.699-.509,3.396-2.009,4.223Z" />
                                                    </svg>
                                                    <span class="ml-3 block truncate">
                                                        Question Type</span>
                                                </span>
                                                <!--selector icon-->
                                                <span
                                                    class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                                    <svg class="h-5 w-5 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </button>
                                            <!----END drop button----->

                                            <!--drop menu-->
                                            <ul x-cloak x-show="qtOpen"
                                                x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-start="transform opacity-0 scale-50"
                                                x-transition:enter-end="transform opacity-100 scale-100"
                                                x-transition:leave="transition ease-in duration-75"
                                                x-transition:leave-start="transform opacity-100 scale-100"
                                                x-transition:leave-end="transform opacity-0 scale-50"
                                                class="absolute z-20 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                                                tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                                aria-activedescendant="listbox-option-3">

                                                <!--drop option... -->
                                                <li class="group relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900 hover:bg-traivis-600 hover:text-white"
                                                    id="listbox-option-1" role="option">
                                                    <div class="flex items-center">
                                                        <svg fill="currentColor" class="h-3 w-3"
                                                            xmlns="http://www.w3.org/2000/svg" id="Filled"
                                                            viewBox="0 0 24 24" width="512" height="512">
                                                            <path
                                                                d="M11.107,14.447a1,1,0,1,0,1.789-.894l-5.5-11a1,1,0,0,0-1.789,0l-5.5,11a1,1,0,1,0,1.789.894L3.619,11H9.383ZM4.619,9,6.5,5.236,8.383,9Z" />
                                                            <path
                                                                d="M23.707,11.293a1,1,0,0,0-1.414,0L13,20.586,8.707,16.293a1,1,0,1,0-1.414,1.414l5,5a1,1,0,0,0,1.414,0l10-10A1,1,0,0,0,23.707,11.293Z" />
                                                        </svg>
                                                        <span
                                                            class="ml-3 block truncate font-normal focus:font-semibold">
                                                            Default </span>
                                                    </div>

                                                    <!--for selected-->
                                                    <span
                                                        class="absolute inset-y-0 right-0 flex items-center pr-4 text-traivis-600 group-hover:text-white">
                                                        <svg class="h-5 w-5" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <!-- end drop option... -->

                                                <!--drop option... -->
                                                <li class="group relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900 hover:bg-traivis-600 hover:text-white"
                                                    id="listbox-option-0" role="option">
                                                    <div class="flex items-center">
                                                        <svg fill="currentColor" class="h-3 w-3" id="Layer_1"
                                                            height="512" viewBox="0 0 24 24" width="512"
                                                            xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                                            <path
                                                                d="m4 22a2.982 2.982 0 0 1 -2.122-.879l-1.544-1.374a1 1 0 0 1 1.332-1.494l1.585 1.414a1 1 0 0 0 1.456.04l3.6-3.431a1 1 0 1 1 1.378 1.448l-3.585 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2zm-19-7a2.982 2.982 0 0 1 -2.122-.879l-1.585-1.585a1 1 0 0 1 1.414-1.414l1.586 1.585a1.023 1.023 0 0 0 1.414 0l3.6-3.431a1 1 0 1 1 1.382 1.448l-3.589 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2zm-19-7a2.982 2.982 0 0 1 -2.122-.879l-1.544-1.374a1 1 0 0 1 1.332-1.494l1.585 1.414a1 1 0 0 0 1.456.04l3.604-3.431a1 1 0 0 1 1.378 1.448l-3.589 3.414a2.964 2.964 0 0 1 -2.1.862zm19-1h-10a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2z" />
                                                        </svg>
                                                        <span
                                                            class="ml-3 block truncate font-normal focus:font-semibold">
                                                            Choices </span>
                                                    </div>
                                                </li>
                                                <!-- end drop option... -->

                                            </ul>
                                            <!--END drop menu-->

                                        </div>
                                    </div> --}}
                                    <!----END Question type drops------------>
                                </div>
                                <!--END Question setting -->

                            </div>
                            <!--end question content-->

                            <!-- upload-->
                            <div class="flex">



                                <!--Upload Form-->
                                <label class="group relative mt-2 flex h-64 w-full cursor-pointer appearance-none justify-center rounded-md border-2 border-dashed border-gray-300 bg-white px-4 transition hover:border-gray-400 focus:outline-none">

                                    <span class="pointer-events-none flex items-center justify-center gap-x-2 h-fit mt-28 z-10 rounded-md p-3 font-bold text-gray-500 bg-opacity-80 transition-all ansition @if (($questionImage && $questionImage->isPreviewable()) || $questionOldImage) bg-white group-hover:bg-opacity-90 @endif">
                                        <x-svg-icons.fi-rr-rotate-right wire:loading wire:target="questionImage" class="h-6 w-6 animate-spin text-gray-600" />

                                        <svg class="h-6 w-6  text-current" wire:loading.remove wire:target="questionImage" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                        </svg>

                                        <span class="text-current">
                                            Drop files to Attach, or
                                            <span class="text-traivis-600 underline">browse</span>
                                        </span>
                                    </span>

                                    <input type="file" wire:model="questionImage" class="hidden" accept="image/png,image/jpeg">

                                    <!--Uploaded Image-->
                                    @if (($questionImage && $questionImage->isPreviewable()) || $questionOldImage)
                                        <div class="absolute -right-0.5 -top-0.5 z-20">
                                            <button type="button" wire:click="deleteQuestionImage" class="hidden items-center rounded-bl-lg rounded-tr-lg border border-transparent bg-traivis-500 p-1 text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1 group-hover:inline-flex">
                                                <svg fill="currentColor" class="h-5 w-5" id="Outline" viewBox="0 0 24 24">
                                                    <path d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                                                    <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                                                    <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="absolute justify-center inset-0 z-0">

                                            @if ($questionImage)
                                                @if ($questionImage->isPreviewable())
                                                    <img class="h-64 rounded-md w-full opacity-100 hover:opacity-75 object-cover transition-all" src="{{ $questionImage->temporaryUrl() }}" alt="Question image">
                                                @endif

                                            @elseif($questionOldImage)
                                                <img class="h-64 w-auto" src="{{ $questionOldImage }}" alt="Question image">
                                            @endif
                                        </div>
                                    @endif
                                    <!--END Uploaded Image-->

                                </label>
                                <!--END Upload Form-->

                            </div>

                            @error('questionImage')
                            <x-tooltip-arrow-up-validation-error :message="$message" />
                            @enderror
                            <!--END upload-->

                            <!--choices content-->
                            @if ($question['type'] == 'closed')
                            <!--choices head-->
                            <div class="mb-2 mt-5">
                                <p class="bg-b text-sm text-gray-500">
                                    Question Choices
                                </p>
                            </div>
                            <!--END choices head-->
                            {{-- @dump($questionOptions) --}}
                            <div wire:loading.class="opacity-50" wire:target="question.type">
                                @foreach ($questionOptions as $index => $question_closed_option)
                                <div class="mb-3 flex flex-row items-center justify-items-center space-x-2"
                                    wire:key="qo-{{ $index }}" wire:loading.class="opacity-50"
                                    wire:target="questionOptions.{{ $index }}.d_pref">
                                    <div>
                                        {{ $index + 1 }}.
                                    </div>

                                    @if ($loop->count > 1)
                                    <!--remove Choice-->
                                    <div class="w-fit">
                                        <button type="button" wire:click="removeOption({{ $index }})"
                                            class="mt-1 inline-flex items-center rounded-full border border-transparent bg-traivis-50 p-1 text-red-500 shadow-sm hover:bg-red-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                            <!-- Heroicon name: solid/plus-sm -->
                                            <svg class="h-5 w-5 rotate-45" wire:loading.class="animate-spin"
                                                wire:target="removeOption({{ $index }})"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                    @endif
                                    <!--END remove Choice-->
                                    @if (in_array($question_closed_option['d_pref'], ['text', 'both']))
                                    <!--choice text-->
                                    <div class="flex w-3/5 flex-col">
                                        <div class="group relative">
                                            <input type="text" id="qOption-{{ $index }}"
                                                wire:model.defer="questionOptions.{{ $index }}.title"
                                                wire:key="questionOptions.{{ $index }}.title"
                                                class="peer mt-1 h-10 w-full rounded-lg border-gray-300 transition-colors focus:border-traivis-400 sm:truncate">
                                            <label for="qOption-{{ $index }}"
                                                class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                                                option </label>
                                        </div>
                                        @error('questionOptions.' . $index .
                                        '.title')
                                        <x-tooltip-arrow-up-validation-error :message="$message" />
                                        @enderror
                                    </div>
                                    <!--END choice text-->
                                    @endif
                                    @if (in_array($question_closed_option['d_pref'], ['image', 'both']))
                                    <!--choice image-->
                                    <div class="flex w-3/5 flex-col">
                                        <x-input.file-upload accept="image/png,image/jpeg"
                                            wire:model="questionOptions.{{ $index }}.image"
                                            id="questionOptions.{{ $index }}.image">
                                            <span
                                                class="flex h-12 w-32 items-center justify-center overflow-hidden rounded bg-gray-100">
                                                @if ($question_closed_option['image'])
                                                @if ($question_closed_option['image']->isPreviewable())
                                                <img src="{{ $question_closed_option['image']->temporaryUrl() }}"
                                                    alt="Option image">
                                                @endif
                                                @elseif(isset($question_closed_option['old_image']))
                                                <img src="{{ $question_closed_option['old_image'] }}"
                                                    alt="Option image">
                                                @else
                                                Image preview
                                                @endif
                                            </span>

                                        </x-input.file-upload>
                                        @error('questionOptions.' . $index .
                                        '.image')
                                        <x-tooltip-arrow-up-validation-error :message="$message" />
                                        @enderror

                                    </div>
                                    <!--END choice image-->
                                    @endif
                                    <!----choice setting menu----->
                                    <div class="flex max-w-lg flex-col">

                                        <div class="relative inline-block text-center">

                                            <div class="relative mt-1" wire:key="drop-button-div-{{ $index }}">
                                                <!----drop button----->
                                                <select wire:key="drop-button-select-{{ $index }}"
                                                    class="relative h-10 cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-traivis-500 focus:outline-none focus:ring-1 focus:ring-traivis-500 sm:text-sm"
                                                    wire:model="questionOptions.{{ $index }}.d_pref">
                                                    <option value="text">Text
                                                    </option>
                                                    <option value="image">Image
                                                    </option>
                                                    <option value="both">Both
                                                    </option>
                                                </select>

                                                <!----END drop button----->
                                            </div>
                                        </div>
                                    </div>
                                    <!----END choice setting menu------------>

                                    <!--correct answer-->
                                    <div class="flex-col whitespace-nowrap">
                                        <div class="group mt-1">
                                            <label for="correct-{{ $index }}" class="truncate px-2">Correct!
                                            </label>
                                            <input type="checkbox" wire:key="correct-{{ $index }}"
                                                wire:model.defer="questionOptions.{{ $index }}.is_correct"
                                                class="h-5 w-5 rounded-md border-gray-300 transition-colors focus:border-traivis-400">
                                        </div>
                                    </div>
                                    <!--END correct answer-->

                                    <!--add Choice-->
                                    <div class="flex w-1/5 flex-col items-end" wire:key="add-div-{{ $index }}">
                                        @if ($loop->last && count($questionOptions) < $maxOptions) <button type="button"
                                            wire:key="add-{{ $index }}" wire:click.stop="addOption"
                                            class="mt-1 inline-flex items-center rounded-full border border-transparent bg-traivis-600 bg-opacity-80 p-1.5 text-white shadow-sm hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2">
                                            <svg class="h-5 w-5" wire:loading.class="animate-spin"
                                                wire:target="addOption" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            </button>
                                            @endif
                                    </div>
                                    <!--END add Choice-->

                                </div>
                                @endforeach
                            </div>
                            @endif
                            <!--END choices content-->

                            @foreach ($errors->get('questionOptions') as $message)
                            <x-tooltip-arrow-up-validation-error :message="$message" />
                            @endforeach

                            <!-- Box buttons -->
                            <div class="flex-warp mt-5 flex justify-between space-x-5 sm:mt-6">
                                <button type="button" @click="qOpen = false"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-gray-200 px-4 py-2 text-base font-medium text-black shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 sm:text-sm">
                                    Cancel
                                </button>

                                <button type="button" wire:click.stop="updateQuestion"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-traivis-500 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 sm:text-sm">
                                    <x-svg-icons.fi-rr-rotate-right wire:loading wire:target="updateQuestion"
                                        class="mr-2 h-5 w-5 animate-spin" />
                                    Save
                                </button>
                            </div>
                            <!--END Box buttons -->
                            @endif
                        </div>
                        <!--END Question Box -->
                        @endif
                    </div>
                </div>
            </section>
            <!-----END Question window----------->
        </div>
        <!--END Add Question-->
    </div>
    <!--END Questions-->
</div>