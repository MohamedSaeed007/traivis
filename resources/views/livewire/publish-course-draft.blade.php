<div class="h-full w-full overflow-y-auto">
    <div class="container mx-auto w-full rounded-lg bg-white p-2">
        <div class="flex h-12 flex-wrap items-center justify-between">
            <span class="w-1/2">When do you want to publish this course?

            </span>

            <span class="flex w-1/3 flex-row items-center justify-around">
                <span class="w-1/2">
                    <button wire:click="createCourseSchedule(true)"
                        class="m-0 m-2 mt-1 w-auto rounded-full bg-traivis-500 p-2 px-6 text-white hover:bg-traivis-700">Now</button>
                </span>
                <div class="group relative ml-[60px] flex cursor-pointer flex-row items-center" x-data>
                    <input type="datetime-local" id="Tdate" x-model="date" required
                        x-ref="schedule_date" wire:model.defer="schedule_date"
                        min="{{ now()->toDateTimeLocalString() }}"
                        wire:change="createCourseSchedule(false)"
                        class="peer z-10 h-9 w-9 cursor-pointer rounded-full border-gray-300 p-2 text-white transition-colors sm:truncate">
                    <label for="Tdate" class="sr-only">add dates</label>
                    <button @click="$refs.schedule_date.showPicker()"
                        class="absolute bottom-0 left-[-81px] z-0 inline-flex h-10 cursor-pointer items-center rounded-full border border-transparent bg-traivis-500 px-3.5 py-2 pr-10 text-sm font-medium leading-4 text-white shadow-sm transition after:bg-traivis-500 hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1 peer-focus-visible:inline-flex">
                        Schedule
                    </button>
                </div>
            </span>

        </div>
        @if ($this->schedule_msg != '')
            <div class="text-center text-traivis-600">{{ $schedule_msg }}</div>
        @endif
        <!--Start Teaser Operations-->
        <div class="px-1 text-gray-700">

            <div class="mt-5 rounded-lg border border-gray-200" x-data="{ open: false }">

                <div @click="open = !open"
                    class="flex cursor-pointer items-center bg-traivis-50 p-4 text-gray-500">
                    <div class="mr-5">
                        <svg class="h-5 w-5" fill="currentColor" height="512" viewBox="0 0 512 512"
                            width="512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z" />
                        </svg>
                    </div>

                    <div class="flex-grow font-bold">
                        Teaser Campaign
                    </div>

                    <div class="ml-5">
                        <svg :class="open ? 'rotate-90' : 'rotate-0'"
                            class="h-5 w-5 rotate-0 transition-transform" fill="currentColor"
                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                            </path>
                        </svg>
                    </div>

                </div>

                <div class="p-0" style="display: none;" x-show="open"
                    x-transition:enter="transition-opacity ease-linear"
                    x-transition:enter-end="opacity-100" x-transition:enter-start="opacity-0"
                    x-transition:leave="transition-opacity ease-linear"
                    x-transition:leave-end="opacity-0" x-transition:leave-start="opacity-100">

                    <!--collapse content-->
                    <div style="height: 550px"
                        class="relative inline-block h-auto w-full transform overflow-y-auto rounded-lg bg-white p-2 text-left align-middle shadow-xl transition-all sm:w-full">
                        <span class="float-right w-[150px] text-lg text-traivis-500"> Slots
                            :<span>{{ $slots }}</span> /<span>20</span></span>
                        <div class="tabs">
                            <ul>
                                <li wire:click="socialPost('original')"
                                    style="font-size: 18px;display: inline;background-color: #eef3f8;border-radius: 20%;cursor: pointer">
                                    Original Draft
                                </li>

                                @foreach ($socials as $social)
                                    <li style="display: inline;cursor: pointer"
                                        wire:click="socialPost('{{ $social->social_name }}')">
                                        <img style="display: inline;cursor: pointer;margin-left: 10px"
                                            width="30" height="30"
                                            src="{{ url("assets/course_publish/$social->social_icon") }}">
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        @if ($new_post)
                            {{--                        Add New Post --}}
                            <div style="margin-top:10px "
                                class="m-auto flex w-full flex-row flex-wrap justify-around border bg-white shadow lg:w-[70%]">
                                <div class="relative w-full">
                                    <span class="absolute top-0 left-5">{{ strlen($txt) }}</span>
                                    <textarea wire:model.defer="teaserOriginalDraft.post_txt" wire:model="txt" :class="media ? '' : 'mb-2'"
                                        placeholder="What’s in your mind..." cols="48" rows="1"
                                        class="mx-5 mt-5 w-3/4 rounded-lg border-gray-300 p-2 py-2 pr-10 pl-3 text-sm font-medium leading-none text-gray-600 placeholder-gray-500 shadow-sm placeholder:pl-2 focus:text-gray-800 focus:outline-none md:w-[90%]"></textarea>

                                </div>

                                <div class="m-3 mt-0 w-full">
                                    <div class="flex flex-row justify-start py-1"
                                        x-data="imageViewer('')">
                                        <div class="mb-2 w-full">
                                            <!-- Show the image -->
                                            <template x-if="imageUrl">
                                                <img @click="$refs.emp_avatar.click()"
                                                    :src="imageUrl" class="w-full object-cover">
                                            </template>

                                            <!-- Show the gray box when image is not available -->
                                            <template x-if="!imageUrl">
                                                <div @click="$refs.emp_avatar.click()"
                                                    class="flex h-[250px] w-full content-center justify-center rounded border-gray-200 bg-gray-100 align-middle">
                                                    <label for="start"
                                                        class="m-auto mx-auto text-center align-middle">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            id="Outline" viewBox="0 0 24 24"
                                                            width="50" height="50"
                                                            class="fill-traivis-500">
                                                            <path
                                                                d="M19.949,5.536,16.465,2.05A6.958,6.958,0,0,0,11.515,0H7A5.006,5.006,0,0,0,2,5V19a5.006,5.006,0,0,0,5,5H17a5.006,5.006,0,0,0,5-5V10.485A6.951,6.951,0,0,0,19.949,5.536ZM18.535,6.95A4.983,4.983,0,0,1,19.316,8H15a1,1,0,0,1-1-1V2.684a5.01,5.01,0,0,1,1.051.78ZM20,19a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V5A3,3,0,0,1,7,2h4.515c.164,0,.323.032.485.047V7a3,3,0,0,0,3,3h4.953c.015.162.047.32.047.485Z" />
                                                        </svg>
                                                    </label>
                                                </div>
                                            </template>
                                            <!-- Image file selector -->
                                            <label for="start" class="mr-0">upload media
                                                image/video/gif</label>
                                            <input wire:model.defer="teaserOriginalDraft.post_media"
                                                x-ref="emp_avatar" x-model="file" class="mt-2 hidden"
                                                type="file" accept="gif/*,video/*,image/*"
                                                @change="fileChosen">

                                        </div>
                                    </div>

                                </div>

                                <div class="m-4 w-1/2 self-center text-center">
                                    <button wire:click="createOriginalDraft"
                                        class="w-auto rounded-full bg-traivis-500 p-2 px-6 text-center text-white hover:bg-traivis-700">
                                        save
                                    </button>
                                </div>
                            </div>

                            {{--                        End Add New Post --}}
                        @endif

                        {{--                        List Posts --}}
                        @forelse($original_drafts as $original_draft)

                            @if (
                                $active_preview == 'original' ||
                                    ($active_preview != 'original' &&
                                        App\Models\TeaserSocialMedia::where('post_id', $original_draft->id)->whereRelation('social', 'social_name', $active_preview)->first()))
                                <div class="my-2 flex w-[100%] flex-wrap justify-start overflow-hidden">

                                    <div
                                        class="lg-6 xl-6 relative m-6 my-2 flex h-auto min-h-[430px] w-[100%] flex-col flex-wrap overflow-x-hidden border bg-white shadow-md lg:w-[90%]">

                                        <div class="h-[60px] w-full overflow-y-auto p-1"
                                            style="overflow-wrap: anywhere;">
                                            @if (!$edit_post_text || ($edit_post_text && $active_post->id != $original_draft->id))
                                                {{ $original_draft->post_txt }}
                                            @endif

                                            @if ($edit_post_text && $active_post->id == $original_draft->id)
                                                <input type="text"
                                                    class="border-1 mt-2 h-10 w-full rounded-full border-traivis-500 bg-transparent placeholder-white drop-shadow-md transition-colors hover:bg-white hover:bg-opacity-50 focus:bg-white focus:text-gray-700 focus:placeholder-gray-700 sm:truncate"
                                                    wire:model="new_post_txt_val"
                                                    wire:change="updatePostTXT">
                                            @endif
                                        </div>

                                        <label
                                            @if ($active_preview == 'original') wire:click="activePost('{{ $original_draft->id }}')" @endif>
                                            @if ($active_preview == 'original')
                                                <input wire:model.defer="post_photo" type="file"
                                                    class="hidden cursor-pointer">
                                            @endif
                                            <img wire:poll.3s="updatePostPhoto"
                                                class="h-[200px] w-full cursor-pointer p-1"
                                                @if ($original_draft->post_media) src="{{ $original_draft->photo }}"
                                                 @else
                                             src="{{ url('assets/course_publish/postimg.jpg') }}" @endif>
                                        </label>

                                        @if ($active_preview == 'facebook')
                                            <img alt=""
                                                src="{{ url('assets/course_publish/facebook_preview.png') }}">
                                        @elseif($active_preview == 'twitter')
                                            <img alt=""
                                                src="{{ url('assets/course_publish/twitter_preview.png') }}">
                                        @elseif($active_preview == 'linkedin')
                                            <img alt=""
                                                src="{{ url('assets/course_publish/linkedin_preview.png') }}">
                                        @elseif($active_preview == 'traivis')
                                            <img alt=""
                                                src="{{ url('assets/course_publish/trav_preview.png') }}">
                                        @elseif($active_preview == 'pinterest')
                                            <img alt=""
                                                src="{{ url('assets/course_publish/pin_preview.png') }}">
                                        @endif
                                        <div class="w-full p-1" style="overflow-wrap: anywhere;"
                                            x-text="curseLink"></div>

                                        <div class="flex w-full flex-wrap overflow-y-auto py-1">
                                            <template>

                                                <template>
                                                    <div class="group relative mt-4 p-1">
                                                        <span
                                                            class="m-[2px] w-[47%] cursor-pointer rounded-full border p-1 text-center hover:bg-gray-200 focus:bg-gray-300 focus:outline-none"
                                                            x-text="date.date"></span>
                                                        <div
                                                            class="pointer-events-none absolute bottom-[-92%%] left-[10%] z-[888888888888] ml-2 w-28 rounded-lg bg-black py-2 px-3 text-center text-xs text-white opacity-0 group-hover:opacity-100">
                                                            Click To Delete
                                                            <svg class="buttom-full absolute left-0 h-2 w-full text-black"
                                                                x="0px" y="0px"
                                                                viewBox="0 0 255 255"
                                                                xml:space="preserve">
                                                                <polygon class="fill-current"
                                                                    points="0,0 127.5,127.5 255,0" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </template>

                                            </template>
                                        </div>

                                        <div class="absolute bottom-0 w-full">

                                            @if ($active_preview == 'original')
                                                Copy To:
                                            @endif
                                            <div class="flex h-auto w-[100%] flex-row justify-center">

                                                <div class="m-2">
                                                    {{--                                           social  Drop down --}}

                                                    @if ($active_preview == 'original')
                                                        @foreach ($socials as $social)
                                                            <img style="display: inline;cursor: pointer"
                                                                width="25" height="20"
                                                                src="{{ url("assets/course_publish/$social->social_icon") }}">
                                                            <input style="border-radius: 100%"
                                                                @if (App\Models\TeaserSocialMedia::where('post_id', $original_draft->id)->where('social_media_id', $social->id)->first()) checked @endif
                                                                wire:click="addSocialPost('{{ $original_draft->id }}','{{ $social->social_name }}')"
                                                                type="checkbox"
                                                                value="{{ $social->social_name }}">
                                                        @endforeach
                                                    @endif

                                                    <div class="relative flex">

                                                        <!-- Selected -->
                                                        <div
                                                            class="relative flex flex-wrap justify-between rounded-3xl border">

                                                            <div class="flex flex-wrap">
                                                                <template
                                                                    x-for="(option,index) in selected;"
                                                                    :key="option.value">
                                                                    <div class="group relative">
                                                                        <p class="m-1 cursor-pointer self-center whitespace-nowrap rounded-3xl bg-white p-2 text-xs hover:bg-red-300"
                                                                            @click="toggle(option)">
                                                                            <img :src="option.text"
                                                                                class="w-5"
                                                                                alt="option.value">
                                                                        <div
                                                                            class="pointer-events-none absolute bottom-full -left-1/2 z-10 ml-2 w-28 rounded-lg bg-black py-2 px-3 text-center text-xs text-white opacity-0 group-hover:opacity-100">
                                                                            Click To Delete
                                                                            <svg class="absolute left-0 top-full h-2 w-full text-black"
                                                                                x="0px"
                                                                                y="0px"
                                                                                viewBox="0 0 255 255"
                                                                                xml:space="preserve">
                                                                                <polygon
                                                                                    class="fill-current"
                                                                                    points="0,0 127.5,127.5 255,0" />
                                                                            </svg>
                                                                        </div>

                                                                        </p>

                                                                    </div>
                                                                </template>
                                                            </div>

                                                        </div>

                                                        <!-- Dropdown -->

                                                    </div>
                                                </div>

                                            </div>
                                            @if ($active_preview != 'original')
                                                Publish Dates:
                                                @php
                                                    $social_media_id =
                                                        App\Models\TeaserSocialMedia::where('post_id', $original_draft->id)
                                                            ->whereRelation('social', 'social_name', $active_preview)
                                                            ->first()->id ?? '';
                                                @endphp

                                                @foreach (App\Models\SocialPostDate::where('social_post_id', $social_media_id)->get() as $social_date)
                                                    <span
                                                        class="pr=0 group inline-block rounded-full bg-white bg-traivis-50 pl-2 text-black hover:bg-traivis-500 hover:text-white">
                                                        {{ $social_date->publish_date }}
                                                        @if ($social_date->status != 'sent')
                                                            <span
                                                                wire:click="deleteSocialDate('{{ $social_date->id }}')"
                                                                class="inline-block h-6 w-6 cursor-pointer rounded-full bg-white px-1 text-center text-sm text-black group-hover:bg-traivis-50">X</span>
                                                    </span>
                                                @else
                                                    <span
                                                        class="group-hover:bg-traivis-50000 inline-block cursor-pointer rounded-full bg-white px-1 text-center text-sm text-black"></span>
                                                    </span>
                                                @endif
                                            @endforeach
                            @endif
                            @if ($this->date_error == 'exist')
                                <div class="text-center text-red-500">The same date cannot be created
                                    For The Same Post</div>
                            @endif
                            <div
                                class="m-1 flex h-[58px] w-[100%] content-center justify-center justify-items-center">

                                <template x-if="filters[selectedsocial.id].name=='Original Draft'">
                                    <div class="relative w-1/3 border border px-2 text-center">
                                        <button
                                            class="m-2 h-auto w-auto cursor-pointer rounded-full bg-white p-2 text-black hover:bg-traivis-500 hover:fill-white hover:text-white"
                                            @click="isOpen = true;"
                                            @keydown.arrow-down.prevent="if(dropdown.length > 0) document.getElementById(elSelect.id+'_'+dropdown[0].index).focus();"
                                            x-model="term" x-ref="input">
                                            <svg id="Layer_1" height="25" viewBox="0 0 24 24"
                                                width="25" xmlns="http://www.w3.org/2000/svg"
                                                data-name="Layer 1">
                                                <path
                                                    d="m18 5.086-5.086-5.086h-7.914a3 3 0 0 0 -3 3v17h16zm-14 12.914v-15a1 1 0 0 1 1-1h7v4h4v12zm18-9v15h-15v-2h13v-15z" />
                                            </svg>
                                        </button>
                                        <div class="absolute top-[57px] left-1 z-10 flex max-h-[80px] min-w-[215px] flex-wrap overflow-y-auto rounded-lg bg-traivis-50 text-center"
                                            x-show="isOpen" @mousedown.away="isOpen = false">

                                            <template x-for="(option,index) in dropdown"
                                                :key="option.value">
                                                <div class="ml-4 cursor-pointer text-center hover:bg-gray-200 focus:bg-gray-300 focus:outline-none"
                                                    :class="(term.length > 0 && !option.text
                                                        .toLowerCase().includes(term
                                                            .toLowerCase())) && 'hidden';"
                                                    x-init="$el.id = elSelect.id + '_' + option.index;
                                                    $el.tabIndex = option.index;" @click="toggle(option)"
                                                    @keydown.enter.prevent="toggle(option);"
                                                    @keydown.arrow-up.prevent="if ($el.previousElementSibling != null) $el.previousElementSibling.focus();"
                                                    @keydown.arrow-down.prevent="if ($el.nextElementSibling != null) $el.nextElementSibling.focus();">

                                                    <p class="p-2">
                                                        <img :src="option.text" class="w-5"
                                                            alt="option.value">

                                                    </p>

                                                </div>
                                            </template>
                                            <div class="m-1 cursor-pointer rounded-full bg-white p-1 hover:bg-traivis-500 focus:bg-traivis-500"
                                                @click="
                                                                                        $refs.copy
                                                                                            selected.map((item ,index) =>{
                                                                                                filters.map((s,n) =>{
                                                                                                    console.log(i ,s.name,item.value)
                                                                                                    if(s.name ==item.value  ){
                                                                                                        console.log(i ,s.name,item.value)
                                                                                                        s.posts[i]=filters[0].posts[i]


                                                                                                    }

                                                                                                })






                                                                                            }) ">
                                                save
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <div x-show="media2"
                                    class="absolute top-[54px] left-1 z-10 ml-1 flex justify-center">
                                    <div class="my-2 hidden w-1/2">
                                        <input x-ref="emp_avatar2"
                                            class="datepicker-input my-2 h-10 w-full rounded-lg border border-gray-300 p-2 pr-10 pl-3 text-sm font-medium leading-none text-gray-600 shadow-sm hover:border-traivis-500 focus:outline-none"
                                            type="datetime-local">
                                    </div>

                                </div>
                                <template x-if="filters[selectedsocial.id].name!='Original Draft'">
                                    <div class="w-1/3 border px-2 text-center">
                                        <button
                                            @click="
                                                                                    $refs.emp_avatar2.focus()

                                                                                    postId=i
                                                                                    media2=true
                                                                                    "
                                            class="rounded-full bg-white p-2 text-black hover:bg-traivis-500 hover:fill-white">
                                            <div
                                                class="group relative flex cursor-pointer flex-row items-center">
                                                <input type="datetime-local" id="Tdate"
                                                    x-model="date" required
                                                    class="peer z-10 h-9 w-9 cursor-pointer rounded-full border-gray-300 p-2 text-white transition-colors sm:truncate">
                                                <label for="Tdate" class="sr-only">add dates</label>
                                                <button
                                                    class="absolute bottom-0 left-0 z-0 inline-flex hidden h-10 cursor-pointer items-center space-x-2 rounded-full border border-transparent bg-traivis-500 px-3.5 py-2 pl-10 text-sm font-medium leading-4 text-white shadow-sm transition after:bg-traivis-500 hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1 peer-focus-visible:inline-flex">

                                                </button>
                                            </div>
                                        </button>
                                    </div>
                                </template>

                                <div class="w-1/3 border text-center" x-data="{ deletedPostId: 0 }">
                                    @if ($active_preview == 'original')
                                        <button
                                            wire:click="deleteOriginalPost('{{ $original_draft->id }}')"
                                            class="m-2 rounded-full bg-white p-2 text-black hover:bg-traivis-500 hover:fill-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                                viewBox="0 0 24 24" width="25" height="25">
                                                <path
                                                    d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                                                <path
                                                    d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                                                <path
                                                    d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                                            </svg>
                                        </button>
                                    @else
                                        <button
                                            wire:click="deleteSocialPost('{{ App\Models\TeaserSocialMedia::where('post_id', $original_draft->id)->whereRelation('social', 'social_name', $active_preview)->first()->id ?? '' }}')"
                                            class="m-2 rounded-full bg-white p-2 text-black hover:bg-traivis-500 hover:fill-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                                viewBox="0 0 24 24" width="25" height="25">
                                                <path
                                                    d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                                                <path
                                                    d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                                                <path
                                                    d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                                            </svg>
                                        </button>
                                    @endif
                                </div>
                                @if (!$edit_post_text || ($edit_post_text && $active_post->id != $original_draft->id))
                                    @if ($active_preview == 'original')
                                        <div class="w-1/3 border text-center">
                                            <button
                                                wire:click="activePost('{{ $original_draft->id }}')"
                                                class="m-2 rounded-full bg-white p-2 text-black hover:bg-traivis-500 hover:fill-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                                    viewBox="0 0 24 24" width="25" height="25">
                                                    <path
                                                        d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z" />
                                                    <path
                                                        d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endif
                                @endif

                                @if ($active_preview != 'original')
                                    <div class="w-1/3 border text-center">

                                        <input type="datetime-local" wire:model="social_publish_date"
                                            wire:change.defer="updateSocialPublishDate('{{ App\Models\TeaserSocialMedia::where('post_id', $original_draft->id)->whereRelation('social', 'social_name', $active_preview)->first()->id }}')"
                                            class="peer z-10 m-2 h-9 w-9 cursor-pointer rounded-full border-gray-300 p-3 p-2 text-white transition-colors sm:truncate">

                                    </div>
                                @endif

                            </div>
                    </div>

                </div>

            </div>
        @else
            {{--                                Post Not Added To This Social Media --}}
            @endif
        @empty
            {{--                            No Posts --}}
            @endforelse
            {{--                        End List Posts --}}

        </div>
        <button wire:click="addNewPostTemplete"
            class="m-2 w-auto rounded-full bg-traivis-500 p-2 px-6 text-white hover:bg-traivis-700">
            Add Post
        </button>
        <!--END collapse content-->
    </div>

</div>
</div>
<!--end Teaser Operations-->

<div class="float-right">
    <button
        class="hover:border-pink-500px-6 m-2 w-auto rounded-full border bg-traivis-50 bg-pink-600 p-2 text-white hover:bg-pink-700">
        Cancel
    </button>
    <button class="m-2 w-auto rounded-full bg-traivis-500 p-2 px-6 text-white hover:bg-traivis-700">Save
    </button>

</div>

</div>
</div>
