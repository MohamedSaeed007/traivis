<div class="relative w-full">
    <div
        class="sticky top-[72px] z-20 flex items-center justify-center bg-white px-8 py-3 transition-colors">
        <div
            class="flex max-w-6xl flex-col items-center justify-evenly gap-x-4 gap-y-2 gap-y-2 gap-y-4 sm:flex-row">
            @if ($filteredCategories)
                @foreach ($filteredCategories as $item)
                    @include(
                        'homes.social.layouts.partials.educators.components.educators-tag',
                        [
                            'text' => $item->category_name,
                            'link' => '',
                            'filterName' => 'Categories',
                            'class' =>
                                'truncate bg-sky-100 text-sky-700 border-sky-400',
                        ]
                    )
                @endforeach
            @endif
            @if ($filteredIndustries)
                @foreach ($filteredIndustries as $item)
                    @include(
                        'homes.social.layouts.partials.educators.components.educators-tag',
                        [
                            'text' => $item->en_name,
                            'link' => '',
                            'filterName' => 'Industries',
                            'class' =>
                                'truncate bg-violet-100 text-violet-700 border-violet-400',
                        ]
                    )
                @endforeach
            @endif
            @include('homes.social.layouts.partials.educators.components.educators-sort')
            {{-- @include('homes.social.layouts.partials.courses.components.courses-sort') --}}
            <!-- This example requires Tailwind CSS v2.0+ -->
            {{-- <span
                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-100 transition-colors text-gray-800">
                Badge </span> --}}
            {{-- <span
                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-red-100 transition-colors text-red-800">
                Badge </span> --}}
            {{-- <span
                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-yellow-100 transition-colors text-yellow-800">
                Badge </span> --}}
            {{-- <span
                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 transition-colors text-green-800">
                Badge </span> --}}
            {{-- <span
                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-traivis-100 transition-colors text-traivis-800">
                Badge </span> --}}
            {{-- <span
                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-traivis-100 transition-colors text-traivis-800">
                Badge </span> --}}
            {{-- <span
                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-purple-100 transition-colors text-purple-800">
                Badge </span> --}}
            {{-- <span
                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 transition-colors text-pink-800">
                Badge </span> --}}
        </div>
    </div>

    <nav class="items-center justify-between border-gray-200 bg-white px-4 py-3 transition-colors sm:px-6"
        aria-label="Pagination">

        {{ $businesses->links() }}
    </nav>
    <ul role="list"
        class="m-6 mb-32 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

        @can('create', \App\Models\Business::class)
            <!--Create Course-->
            <a href="#"
                class="shadow-dashboard col-span-1 mx-2 mt-5 flex cursor-pointer flex-col items-center justify-center rounded-lg border-b-2 border-t bg-white text-center text-slate-500 transition-all hover:scale-[1.02] hover:border-traivis-500 hover:bg-slate-50 hover:text-traivis-500">
                <p class="text-6xl font-bold">+</p>
                <p class="">Create Space</p>
            </a>
            <!--Create Course-->
        @endcan

        @foreach ($businesses as $business)
            <li
                class="shadow-dashboard group mx-2 mt-5 items-center rounded-lg border-b-2 border-t bg-white pt-3 text-center transition-all hover:scale-[1.02] hover:border-traivis-500 hover:bg-slate-50">
                <div
                    class="mb-[50px] flex items-center justify-between px-3 py-2 text-xs font-bold text-gray-400 transition-colors group-hover:text-traivis-500">
                    <!-- Heroicon name: outline/fire -->
                    @if ($business->business_type == 'instructor')
                        <div class="flex flex-row items-center justify-start">
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-traivis-500"
                                    id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                    height="512">
                                    <path
                                        d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z" />
                                </svg>
                            </span>
                            <span
                                class="bg-{{ auth()->user()->businesses->contains($business->id)? 'green': 'gray' }}-500 ml-2 rounded-full p-1 px-2 text-white">{{ auth()->user()->businesses->contains($business->id)? 'My space': 'Freelancer' }}</span>
                        </div>
                    @else
                        <div class="flex flex-row items-center justify-start">
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="h-5 w-5 fill-cyan-500" version="1.1" id="Layer_1"
                                    x="0px" y="0px" viewBox="0 0 512 512"
                                    fill="currentColor" data-name="Layer 1">
                                    <path
                                        d="M354.7,175.9h-87.4c-7.4-5.3-15.8-9.2-24.7-11.4v-7.2l65.9-30.8c8.8-5.4,11.5-16.9,6-25.7c-1.5-2.5-3.6-4.5-6-6l-59.7-28  c-15.3-7.1-33.5-0.5-40.6,14.8c-1.9,4.1-2.9,8.5-2.9,13v70.1c-8.9,2.2-17.2,6.1-24.6,11.4H93.4C41.8,176,0.1,217.8,0,269.3V456  c0,30.9,25.1,56,56,56h336.1c30.9,0,56-25.1,56-56V269.3C448,217.8,406.3,176,354.7,175.9z M407.3,250.6H367  c-14.8,0-29.1-5.9-39.6-16.4l-20.9-20.9h48.3C378.4,213.4,399.4,228.3,407.3,250.6z M93.4,213.3h48.3l-20.9,20.9  c-10.5,10.5-24.8,16.4-39.6,16.4H40.8C48.7,228.3,69.7,213.4,93.4,213.3z M242.7,474.7h-37.3v-56c0-10.3,8.4-18.7,18.7-18.7  s18.7,8.4,18.7,18.7V474.7z M392.1,474.7h-112v-56c0-30.9-25.1-56-56-56s-56,25.1-56,56v56H56c-10.3,0-18.7-8.4-18.7-18.7V288h43.7  c24.8,0.1,48.5-9.8,66-27.4l50.6-50.5c14.6-14.6,38.2-14.6,52.8,0l50.6,50.5c17.5,17.6,41.2,27.4,66,27.4h43.7v168  C410.7,466.3,402.4,474.7,392.1,474.7z M130.7,344c0,10.3-8.4,18.7-18.7,18.7H93.4c-10.3,0-18.7-8.4-18.7-18.7s8.4-18.7,18.7-18.7  H112C122.3,325.3,130.7,333.7,130.7,344z M130.7,418.6c0,10.3-8.4,18.7-18.7,18.7H93.4c-10.3,0-18.7-8.4-18.7-18.7  c0-10.3,8.4-18.7,18.7-18.7H112C122.3,400,130.7,408.3,130.7,418.6z M373.4,344c0,10.3-8.4,18.7-18.7,18.7h-18.7  c-10.3,0-18.7-8.4-18.7-18.7s8.4-18.7,18.7-18.7h18.7C365,325.3,373.4,333.7,373.4,344z M373.4,418.6c0,10.3-8.4,18.7-18.7,18.7  h-18.7c-10.3,0-18.7-8.4-18.7-18.7c0-10.3,8.4-18.7,18.7-18.7h18.7C365,400,373.4,408.3,373.4,418.6z M261.4,288  c0,20.6-16.7,37.3-37.3,37.3s-37.3-16.7-37.3-37.3s16.7-37.3,37.3-37.3S261.4,267.3,261.4,288z">
                                    </path>
                                </svg>
                            </span>
                            <span
                                class="ml-2 rounded-full bg-cyan-500 p-1 px-2 text-white">Institution</span>
                        </div>
                    @endif

                    <x-tooltip-arrow direction="down">
                        <button
                            class="mx-1 inline-flex items-center rounded-full border border-gray-300 bg-gray-100 px-2 py-0.5 text-sm text-gray-500">
                            <svg class="mr-2 h-3 w-3" fill="currentColor" viewBox="0 0 24 24"
                                xml:space="preserve">
                                <path
                                    d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                </path>
                            </svg>
                            {{ $business->getFinalRatingValue() }}
                        </button>
                        <x-slot name="text">
                            <p class="itrms-center flex justify-center gap-x-2">
                                <span>{{ $business->getReviewsCount() }}</span>
                                Reviews
                            </p>
                            <div class="flex justify-center gap-1 whitespace-nowrap drop-shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    xml:space="preserve" fill="currentColor"
                                    class="{{ $business->getFinalRatingValue() >= 1 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    xml:space="preserve" fill="currentColor"
                                    class="{{ $business->getFinalRatingValue() >= 2 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    xml:space="preserve" fill="currentColor"
                                    class="{{ $business->getFinalRatingValue() >= 3 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    xml:space="preserve" fill="currentColor"
                                    class="{{ $business->getFinalRatingValue() >= 4 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    xml:space="preserve" fill="currentColor"
                                    class="{{ $business->getFinalRatingValue() >= 5 ? 'text-yellow-500' : 'text-white' }} w-4">
                                    <path
                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                                <div class="ml-2 font-bold">{{ $business->getFinalRatingValue() }} / 5
                                </div>
                            </div>
                        </x-slot>
                    </x-tooltip-arrow>
                </div>

                <div
                    class="-mt-7 mb-[10px] flex flex-col items-center justify-center border-b border-gray-100 px-4">
                    <img class="mb-4 h-20 w-20 rounded-full object-cover" src="{{ $business->avatar }}"
                        alt="">
                    <div class="flex min-w-0 flex-1 flex-row items-center justify-center">
                        <a href="{{ route('business-profile-social', $business->id) }}">
                            <h1 class="mr-2 truncate font-bold text-gray-500">
                                {{ $business->business_name }}</h1>
                        </a>
                        @if ($business->is_verified)
                            <svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                class="my-auto h-5 text-traivis-500 transition-colors"
                                version="1.1" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"
                                    class=""></path>
                            </svg>
                        @endif
                    </div>
                    @if (auth()->user()->businesses->contains($business->id))
                        <div class="flex items-center justify-evenly gap-x-3">

                            <!--Dashboard button-->
                            <button type="button" wire:click="goToDashboard({{ $business->id }})"
                                class="group/but my-3 inline-flex justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 shadow-sm transition-all hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-300 group-hover:border-traivis-400">
                                <!-- Heroicon name: solid/mail -->
                                <svg version="1.1" id="Layer_1" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve" fill="currentColor"
                                    class="-ml-1 mr-2 h-5 w-5 transition-all group-hover/but:text-white">
                                    <path
                                        d="M224.4,231.4c111-2.9,111-165.4,0-168.3C113.5,66,113.5,228.5,224.4,231.4z M224.4,100.5c61.5,1.1,61.4,92.4,0,93.5  C163,192.9,163,101.6,224.4,100.5z M415.3,271.9c-21.4-17.8-49.4-25.2-76.7-20.2l-71.5,13c-17.1,3.1-31.9,11.9-42.7,24.1  c-10.8-12.3-25.6-21-42.7-24.1l-71.5-13c-27.3-4.9-55.3,2.4-76.6,20.2S0,315.9,0,343.7v52.2c0,45.2,32.3,83.9,76.8,92l117.5,21.4  c20,3.6,40.2,3.6,60.2,0l117.6-21.4c44.5-8.1,76.8-46.8,76.8-92v-52.2C448.9,315.9,436.6,289.7,415.3,271.9L415.3,271.9z   M205.7,473.3c-1.6-0.2-3.1-0.5-4.7-0.8L83.5,451.1c-26.7-4.9-46.1-28.1-46.1-55.2v-52.2c0-16.7,7.4-32.4,20.2-43.1  c12.8-10.7,29.7-15.1,46-12.1l71.5,13c17.8,3.2,30.7,18.7,30.7,36.8V473.3z M411.5,395.9c0,27.1-19.4,50.4-46.1,55.2l-117.6,21.4  c-1.6,0.3-3.1,0.5-4.7,0.8v-135c0-18.1,12.9-33.6,30.7-36.8l71.5-13c16.4-3,33.2,1.4,46,12.1c12.8,10.7,20.1,26.4,20.1,43.1V395.9  L411.5,395.9z">
                                    </path>
                                    <path
                                        d="M491,63.8h-42.1V21.7c0-11.6-9.4-21-21-21c-11.6,0-21,9.4-21,21v42.1h-42.1c-11.6,0-21,9.4-21,21s9.4,21,21,21h42.1V148  c0,11.6,9.4,21,21,21c11.6,0,21-9.4,21-21v-42.1H491c11.6,0,21-9.4,21-21S502.6,63.8,491,63.8z">
                                    </path>
                                </svg>
                                <span class="transition-all group-hover/but:text-white">
                                    Dashboard
                                </span>
                            </button>
                            <!--/Dashboard button-->

                            <!--Profile button-->
                            <button type="button" wire:click="goToProfile({{ $business->id }})"
                                class="group/but my-3 inline-flex justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 shadow-sm transition-all hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-300 group-hover:border-traivis-400">
                                <!-- Heroicon name: solid/mail -->
                                <svg version="1.1" id="Layer_1" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve" fill="currentColor"
                                    class="-ml-1 mr-2 h-5 w-5 transition-all group-hover/but:text-white">
                                    <path
                                        d="M224.4,231.4c111-2.9,111-165.4,0-168.3C113.5,66,113.5,228.5,224.4,231.4z M224.4,100.5c61.5,1.1,61.4,92.4,0,93.5  C163,192.9,163,101.6,224.4,100.5z M415.3,271.9c-21.4-17.8-49.4-25.2-76.7-20.2l-71.5,13c-17.1,3.1-31.9,11.9-42.7,24.1  c-10.8-12.3-25.6-21-42.7-24.1l-71.5-13c-27.3-4.9-55.3,2.4-76.6,20.2S0,315.9,0,343.7v52.2c0,45.2,32.3,83.9,76.8,92l117.5,21.4  c20,3.6,40.2,3.6,60.2,0l117.6-21.4c44.5-8.1,76.8-46.8,76.8-92v-52.2C448.9,315.9,436.6,289.7,415.3,271.9L415.3,271.9z   M205.7,473.3c-1.6-0.2-3.1-0.5-4.7-0.8L83.5,451.1c-26.7-4.9-46.1-28.1-46.1-55.2v-52.2c0-16.7,7.4-32.4,20.2-43.1  c12.8-10.7,29.7-15.1,46-12.1l71.5,13c17.8,3.2,30.7,18.7,30.7,36.8V473.3z M411.5,395.9c0,27.1-19.4,50.4-46.1,55.2l-117.6,21.4  c-1.6,0.3-3.1,0.5-4.7,0.8v-135c0-18.1,12.9-33.6,30.7-36.8l71.5-13c16.4-3,33.2,1.4,46,12.1c12.8,10.7,20.1,26.4,20.1,43.1V395.9  L411.5,395.9z">
                                    </path>
                                    <path
                                        d="M491,63.8h-42.1V21.7c0-11.6-9.4-21-21-21c-11.6,0-21,9.4-21,21v42.1h-42.1c-11.6,0-21,9.4-21,21s9.4,21,21,21h42.1V148  c0,11.6,9.4,21,21,21c11.6,0,21-9.4,21-21v-42.1H491c11.6,0,21-9.4,21-21S502.6,63.8,491,63.8z">
                                    </path>
                                </svg>
                                <span class="transition-all group-hover/but:text-white">
                                    Profile
                                </span>
                            </button>
                            <!--/Profile button-->

                        </div>
                    @else
                        <!--follow button-->
                        <button type="button"
                            @if ($business->followers()->where('user_id', auth()->user()->id)->first()) wire:click="unFollow({{ $business->id }})"
                                @else
                                    wire:click="follow({{ $business->id }})" @endif
                            class="group/but my-3 inline-flex justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 shadow-sm transition-all hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-300 group-hover:border-traivis-400">
                            <!-- Heroicon name: solid/mail -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve"
                                fill="currentColor"
                                class="-ml-1 mr-2 h-5 w-5 transition-all group-hover/but:text-white">
                                <path
                                    d="M224.4,231.4c111-2.9,111-165.4,0-168.3C113.5,66,113.5,228.5,224.4,231.4z M224.4,100.5c61.5,1.1,61.4,92.4,0,93.5  C163,192.9,163,101.6,224.4,100.5z M415.3,271.9c-21.4-17.8-49.4-25.2-76.7-20.2l-71.5,13c-17.1,3.1-31.9,11.9-42.7,24.1  c-10.8-12.3-25.6-21-42.7-24.1l-71.5-13c-27.3-4.9-55.3,2.4-76.6,20.2S0,315.9,0,343.7v52.2c0,45.2,32.3,83.9,76.8,92l117.5,21.4  c20,3.6,40.2,3.6,60.2,0l117.6-21.4c44.5-8.1,76.8-46.8,76.8-92v-52.2C448.9,315.9,436.6,289.7,415.3,271.9L415.3,271.9z   M205.7,473.3c-1.6-0.2-3.1-0.5-4.7-0.8L83.5,451.1c-26.7-4.9-46.1-28.1-46.1-55.2v-52.2c0-16.7,7.4-32.4,20.2-43.1  c12.8-10.7,29.7-15.1,46-12.1l71.5,13c17.8,3.2,30.7,18.7,30.7,36.8V473.3z M411.5,395.9c0,27.1-19.4,50.4-46.1,55.2l-117.6,21.4  c-1.6,0.3-3.1,0.5-4.7,0.8v-135c0-18.1,12.9-33.6,30.7-36.8l71.5-13c16.4-3,33.2,1.4,46,12.1c12.8,10.7,20.1,26.4,20.1,43.1V395.9  L411.5,395.9z">
                                </path>
                                <path
                                    d="M491,63.8h-42.1V21.7c0-11.6-9.4-21-21-21c-11.6,0-21,9.4-21,21v42.1h-42.1c-11.6,0-21,9.4-21,21s9.4,21,21,21h42.1V148  c0,11.6,9.4,21,21,21c11.6,0,21-9.4,21-21v-42.1H491c11.6,0,21-9.4,21-21S502.6,63.8,491,63.8z">
                                </path>
                            </svg>
                            <span class="transition-all group-hover/but:text-white">
                                {{ $business->followers()->where('user_id', auth()->user()->id)->first()? 'Unfollow': 'Follow' }}
                            </span>
                        </button>
                        <!--/follow button-->
                    @endif
                </div>

                <div class="flex items-center justify-between bg-gray-50 group-hover:bg-traivis-100">

                    <div class="w-full md:w-1/2">

                        <div
                            class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-traivis-500">
                            <p class="mx-auto mb-1 flex flex-row items-center text-sm">

                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                    data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                    height="512" fill="currentColor" aria-hidden="true"
                                    class="mr-2 h-3 w-3">
                                    <path
                                        d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                                    </path>
                                </svg>
                                <span>{{ $business->posts->count() }} </span>
                            </p>
                        </div>

                    </div>
                    <div class="w-full md:w-1/2">

                        <div
                            class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-traivis-500">
                            <p class="mx-auto mb-1 flex flex-row items-center text-sm">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                    id="Capa_1" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve" width="512" height="512"
                                    fill="currentColor" aria-hidden="true" class="mr-2 h-3 w-3">
                                    <g>
                                        <circle cx="256" cy="128" r="128"></circle>
                                        <path
                                            d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z">
                                        </path>
                                    </g>
                                </svg>
                                <span>{{ $business->followers->count() }} </span>
                            </p>
                        </div>

                    </div>
                </div>

            </li>
        @endforeach
    </ul>
    <nav class="items-center justify-between border-gray-200 bg-white px-4 py-3 transition-colors sm:px-6"
        aria-label="Pagination">
        {{ $businesses->links() }}
    </nav>
</div>
