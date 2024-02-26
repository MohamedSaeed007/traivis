<div>
    @section('title', 'Register')
    <div class="bg-white ">
        <div class="flex justify-center">
            <!--Left Side-->
            <div class="hidden h-screen bg-cover lg:block lg:w-2/3"
                style="background-image: url({{ asset('assets/images/auth-bg.jpg') }})">
                <div class="flex h-full items-center bg-gray-900 bg-opacity-40 px-20">
                    <div>
                        <h2 class="text-5xl font-bold text-white">Welcome to Traivis</h2>
                        <div class="max-w-md">
                            <p class="mt-3 max-w-xl text-gray-100"> Access 1000s of courses and industry
                                experts and
                                explore their metaverse</p>
                            <p class="mt-3 max-w-xl text-gray-100"> Discover the power of social
                                e-learning</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Left Side-->
            <!--Register Form-->
            <div x-data x-init="xInit()"
                class="mx-auto h-auto w-full flex-col items-center justify-center overflow-y-auto px-12 pb-5 text-gray-500 lg:w-1/3 lg:px-6">
                <!--Pic-->
                <div class="mt-10 h-60 w-full text-center">
                    <div class="flex justify-center">
                        <div>
                            <svg class="h-[10rem] w-60 text-traivis-500" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                                x="0px" y="0px" width="1127.498px" height="367.189px"
                                viewBox="0 0 1127.498 367.189"
                                enable-background="new 0 0 1127.498 367.189" xml:space="preserve">
                                <path
                                    d="M322.682,194.189c-4.639,0-8.398,3.753-8.398,8.385c0,4.631,3.761,8.384,8.398,8.384c4.641,0,8.399-3.753,8.399-8.384  S327.32,194.189,322.682,194.189z M370.058,244.564c9.951-11.172,16.02-25.864,16.02-41.989c0-34.947-28.383-63.277-63.396-63.277  c-33.663,0-61.184,26.193-63.254,59.271h-0.14v102.525h0.061c0.815,21.751,12.632,40.682,30.05,51.438v-49.298  c-0.202-1.485-0.315-3.002-0.315-4.543c0-18.521,15.042-33.537,33.599-33.537c18.558,0,33.601,15.017,33.601,33.537  c0,1.557-0.115,3.082-0.32,4.582v49.273c18.07-11.148,30.116-31.095,30.116-53.855c0-13.604-4.322-26.188-11.646-36.502  c-5.229-3.724-10.545-7.5-10.545-10.58c0-0.281,0.061-0.567,0.146-0.855c-0.045-0.039-0.088-0.081-0.136-0.12  c0.085-0.07,0.16-0.146,0.242-0.218C364.881,248.559,367.219,246.594,370.058,244.564z M322.682,236.109  c-18.557,0-33.599-15.015-33.599-33.537c0-18.521,15.042-33.536,33.599-33.536c18.558,0,33.601,15.015,33.601,33.536  C356.28,221.095,341.237,236.109,322.682,236.109z M178.515,43.571c-6.263,0-42.594,10.619-50.423,18.204  c-6.918,6.704,39.854,20.479,50.423,20.479c10.567,0,58.076-14.58,51.988-20.479C221.892,53.431,184.777,43.571,178.515,43.571z   M19.023,243.908c-3.766,1.577-5.526,5.882-3.934,9.612c1.594,3.73,5.938,5.478,9.704,3.897c3.765-1.579,5.526-5.883,3.933-9.614  C27.132,244.075,22.788,242.329,19.023,243.908z M197.956,290.658V126.041c45.575-10.042,129.771-41.207,115.652-55.216  c-23.982-23.797-119.91-51.917-137.353-51.917c-15.677,0-92.993,24.467-124.31,45.125c-18.081,9.442-30.484,28.575-30.484,49.472  c0,0,0,12.123,0,28.704v91.976c4.169-89.688,4.466-115.127,11.558-124.679c0.244-0.305,0.489-0.608,0.739-0.908  c0.372-0.444,0.753-0.88,1.139-1.313c0.244-0.273,0.484-0.549,0.733-0.816c0.439-0.473,0.892-0.933,1.348-1.39  c0.211-0.211,0.415-0.43,0.629-0.638c0.673-0.652,1.361-1.291,2.067-1.909c0.133-0.117,0.273-0.226,0.407-0.341  c0.583-0.501,1.174-0.995,1.779-1.472c0.268-0.212,0.544-0.413,0.817-0.62c0.484-0.368,0.972-0.732,1.469-1.086  c0.311-0.22,0.627-0.433,0.943-0.646c0.478-0.324,0.958-0.644,1.447-0.952c0.331-0.209,0.664-0.415,0.999-0.618  c0.495-0.299,0.997-0.59,1.502-0.875c0.335-0.188,0.669-0.378,1.009-0.561c0.539-0.288,1.085-0.563,1.634-0.835  c0.316-0.155,0.628-0.317,0.948-0.469c0.672-0.316,1.354-0.615,2.042-0.906c0.205-0.087,0.406-0.183,0.612-0.267  c0.875-0.358,1.763-0.694,2.66-1.01c23.257,13.429,65.748,27.479,94.564,33.846v164.938c0,36.743,30.145,66.531,67.332,66.531  h39.376C242.667,357.186,197.956,356.375,197.956,290.658z M73.447,60.898C89.7,45.205,165.139,23.233,178.141,23.233  c13.003,0,90.066,20.402,107.945,37.665c12.642,12.207-86.002,42.374-107.945,42.374C156.2,103.272,59.081,74.77,73.447,60.898z   M912.023,150.461c-3.728,0-6.745,2.985-6.745,6.671c0,3.684,3.02,6.671,6.745,6.671c3.727,0,6.744-2.987,6.744-6.671  C918.77,153.447,915.75,150.461,912.023,150.461z M525.705,139.54h-50.054c-27.079,0-49.032,21.72-49.032,48.514v118.858  c0-0.347,0.021-0.687,0.029-1.027c0.604,21.084,14.798,38.801,34.227,44.869v-92.356h80.109v92.188  c19.168-6.216,33.123-23.798,33.724-44.696c0.009,0.342,0.029,0.68,0.029,1.022V188.053  C574.736,161.26,552.785,139.54,525.705,139.54z M540.983,230.503h-80.109v-39.112c0-12.5,10.241-22.633,22.874-22.633h34.36  c12.633,0,22.875,10.133,22.875,22.633V230.503z M912.044,139.54c-10.05,0-18.196,8.005-18.196,17.881  c0,5.438-0.213,175.008-0.213,179.278c0,9.712,8.174,17.515,18.409,17.515c10.237,0,18.371-7.526,18.371-18.631  c0-3.983-0.173-173.188-0.173-178.162C930.242,147.545,922.095,139.54,912.044,139.54z M912.025,169.341  c-6.699,0-12.134-5.337-12.134-11.921c0-6.583,5.435-11.92,12.134-11.92c6.698,0,12.131,5.337,12.131,11.92  C924.156,164.004,918.726,169.341,912.025,169.341z M976.626,199.037c-10.892,30.062,5.879,43.729,17.123,49.479  c6.452,3.26,17.305,7.391,32.558,12.391c19.009,6.169,31.735,11.691,38.189,16.578c6.688,5.004,10.031,12.041,10.031,21.115  c0,8.611-3.463,15.998-10.385,22.164c-0.194,0.174-0.41,0.322-0.608,0.49c15.105-1.449,25.929-9.262,25.248-24.398  c-0.538-11.971-4.284-21.521-12.849-28.619c-8.918-7.33-23.404-14.019-43.469-20.067c-15.371-4.771-26.34-9.017-32.91-12.739  c-6.569-3.604-12.085-8.958-16.542-16.055C979.253,213.426,977.128,206.645,976.626,199.037z M1063.692,139.54h-45.354  c-27.079,0-49.031,21.72-49.031,48.514v27.896c0-26.793,21.952-48.515,49.031-48.515h45.354c27.079,0,47.806,21.72,47.806,48.515  v-27.896C1111.498,161.26,1090.771,139.54,1063.692,139.54z M1014.164,173.827c1.519-0.997,3.152-1.855,4.84-2.652  c-9.757,0.594-21.584,4.624-27.277,10.256c-4.9,4.852-13.629,21.513,7.654,37.943c7.057,5.332,22.114,11.81,45.229,19.371  c15.368,5.004,26.457,9.715,33.263,14.135c6.688,4.306,12.318,10.122,16.895,17.451c4.341,7.215,6.514,15.476,6.514,24.779  c0,0.982-0.025,1.938-0.066,2.875c17.238-36.211-5.158-51.742-15.598-57.496c-6.923-3.723-19.066-8.551-36.43-14.483  c-18.652-6.397-31.148-11.924-37.483-16.579c-6.104-4.302-9.151-10.179-9.151-17.625  C1002.549,184.82,1006.421,178.83,1014.164,173.827z M1062.466,325.13h-44.128c-27.079,0-49.031-21.7-49.031-48.469v27.869  c0,26.77,21.952,48.47,49.031,48.47h44.128c27.08,0,49.032-21.7,49.032-48.47v-27.869  C1111.498,303.43,1089.546,325.13,1062.466,325.13z M632.133,139.54c-10.05,0-18.197,8.005-18.197,17.881  c0,5.438-0.213,175.008-0.213,179.278c0,9.712,8.177,17.515,18.41,17.515c10.235,0,18.37-7.526,18.37-18.631  c0-3.983-0.173-173.188-0.173-178.162C650.33,147.545,642.183,139.54,632.133,139.54z M632.113,169.341  c-6.7,0-12.131-5.337-12.131-11.921c0-6.583,5.431-11.92,12.131-11.92c6.701,0,12.132,5.337,12.132,11.92  C644.245,164.004,638.814,169.341,632.113,169.341z M632.112,150.461c-3.729,0-6.747,2.985-6.747,6.671  c0,3.684,3.021,6.671,6.747,6.671c3.726,0,6.745-2.987,6.745-6.671C638.857,153.447,635.838,150.461,632.112,150.461z   M820.068,141.868c-0.086,35.086-0.313,118.688-0.313,125.863c0,11.235-27.361,48.961-47.391,48.961  c-20.028,0-47.981-37.78-47.981-48.961c0-6.664-0.188-92.224-0.257-125.882c-19.758,6.261-34.064,24.575-34.064,46.203v90.576  c0,18.538,44.976,74.371,81.392,74.371c36.415,0,82.626-55.126,82.626-74.371v-90.576  C854.079,166.445,839.798,148.146,820.068,141.868z M322.682,290.307c-4.639,0-8.398,3.754-8.398,8.385  c0,4.632,3.761,8.386,8.398,8.386c4.641,0,8.399-3.754,8.399-8.386C331.081,294.061,327.32,290.307,322.682,290.307z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <!--/Pic-->
                <!--Form-->
                <form wire:submit.prevent="register()">
                    @csrf
                    <div class="group relative">
                        <input
                            class="{{ $errors->has('name') ? 'border-red-500 focus-within:border-red-500 active:border-red-500' : 'border-gray-300 focus-within:border-traivis-500 active:border-traivis-500' }} text-l peer mt-1 h-10 w-full rounded-full border bg-white px-2 py-1 font-bold outline-none transition-colors focus-within:ring-1 focus-within:ring-traivis-500 sm:truncate"
                            id="Hero" required="" type="text" wire:model.defer="name">
                        <label
                            class="text-l absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 font-bold transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                            for="Hero">
                            Full name</label>
                        @error('name')
                            <span class="text-red-500">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group relative mt-5">
                        <input
                            class="{{ $errors->has('email') ? 'border-red-500 focus-within:border-red-500 active:border-red-500' : 'border-gray-300 focus-within:border-traivis-500 active:border-traivis-500' }} text-l peer mt-1 h-10 w-full rounded-full border bg-white px-2 py-1 font-bold outline-none transition-colors focus-within:ring-1 focus-within:ring-traivis-500 sm:truncate"
                            id="email" required="" type="text" wire:model.defer="email">
                        <label
                            class="text-l absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 font-bold transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                            for="email">
                            Email address</label>
                        @error('email')
                            <span class="text-red-500">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="gap-x- mt-5 flex">
                        <select wire:model.defer="dial_code"
                            class="text-l {{-- px-2 --}} {{-- pr-0 --}} peer mt-1 h-10 rounded-full rounded-r-none border border-gray-300 bg-white py-1 font-bold outline-none transition-colors transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500 sm:truncate">
                            @foreach ($countries as $country)
                                <option value="{{ $country['dial_code'] }}">{{ $country['dial_code'] }}
                                </option>
                            @endforeach
                        </select>
                        <div class="group relative w-full">
                            <input wire:model.defer="phone"
                                class="{{ $errors->has('phone') ? 'border-red-500 focus-within:border-red-500 active:border-red-500' : 'border-gray-300 focus-within:border-traivis-500 active:border-traivis-500' }} text-l peer mt-1 h-10 w-full rounded-full rounded-full rounded-l-none border border-gray-300 bg-white px-2 px-4 py-1 pr-0 font-bold outline-none transition-colors transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500 sm:truncate"
                                id="PhoneNum" required="" type="number">
                            <label
                                class="text-l absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 font-bold transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                for="PhoneNum">
                                Phone number</label>
                        </div>
                        @error('phone')
                            <span class="text-red-500">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group relative mt-5">
                        <input
                            class="{{ $errors->has('birth_date') ? 'border-red-500 focus-within:border-red-500 active:border-red-500' : 'border-gray-300 focus-within:border-traivis-500 active:border-traivis-500' }} text-l peer mt-1 h-10 w-full rounded-full border bg-white px-2 py-1 font-bold outline-none transition-colors focus-within:ring-1 focus-within:ring-traivis-500 sm:truncate"
                            id="Birth" required="" type="date" wire:model.defer="birth_date">
                        <label
                            class="text-l absolute left-2 top-4 flex h-2 transform items-center bg-white px-2 py-3 pr-7 font-bold transition-all group-focus-within:top-4 group-focus-within:-translate-y-full group-focus-within:pr-2 group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-4 peer-valid:-translate-y-full peer-valid:pr-2 peer-valid:text-xs peer-valid:font-medium peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                            for="Birth">
                            Birth date</label>
                        @error('birth_date')
                            <span class="text-red-500">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @if ($timezone)
                        <div class="group relative mt-5">
                            <select wire:model.defer="timezone"
                                class="text-l peer mt-1 h-10 w-full rounded-full border border-gray-300 bg-white px-2 py-1 font-bold outline-none transition-colors focus-within:ring-1 focus-within:ring-traivis-500 sm:truncate">
                                @foreach ($timezones as $timezoneValue => $timezoneName)
                                    <option value="{{ $timezoneValue }}"
                                        @if ($timezoneValue == $timezone) class="font-bold" @endif>
                                        {{ $timezoneName }}</option>
                                @endforeach
                            </select>
                            <label
                                class="text-l absolute left-2 top-4 flex h-2 transform items-center bg-white px-2 py-3 pr-7 font-bold transition-all group-focus-within:top-4 group-focus-within:-translate-y-full group-focus-within:pr-2 group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-4 peer-valid:-translate-y-full peer-valid:pr-2 peer-valid:text-xs peer-valid:font-medium peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                for="timezone">
                                Timezone</label>
                            @error('timezone')
                                <span class="text-red-500">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @endif
                    <div class="group relative mt-5">
                        <input
                            class="{{ $errors->has('password') ? 'border-red-500 focus-within:border-red-500 active:border-red-500' : 'border-gray-300 focus-within:border-traivis-500 active:border-traivis-500' }} text-l peer mt-1 h-10 w-full rounded-full border bg-white px-2 py-1 font-bold outline-none transition-colors focus-within:ring-1 focus-within:ring-traivis-500 sm:truncate"
                            id="Password" required="" type="password" wire:model.defer="password">
                        <label
                            class="text-l absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 font-bold transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                            for="Password">
                            Password</label>
                        @error('password')
                            <span class="text-red-500">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group relative mt-5">
                        <input
                            class="{{ $errors->has('password_confirmation') ? 'border-red-500 focus-within:border-red-500 active:border-red-500' : 'border-gray-300 focus-within:border-traivis-500 active:border-traivis-500' }} text-l peer mt-1 h-10 w-full rounded-full border bg-white px-2 py-1 font-bold outline-none transition-colors focus-within:ring-1 focus-within:ring-traivis-500 sm:truncate"
                            id="confirm-Password" required="" type="password"
                            wire:model.defer="password_confirmation">
                        <label
                            class="text-l absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 font-bold transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                            for="confirm-Password">
                            Confirm password</label>
                        @error('password_confirmation')
                            <span class="text-red-500">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-6" x-data="{ show: @entangle('verifyPopUp') }">
                        <!-- Main modal -->
                        <section x-show="show"
                            class="fixed bottom-0 left-0 right-0 top-0 z-50 flex h-full w-full items-center overflow-y-auto bg-gray-800 bg-opacity-80 p-4"
                            style="display: none;">
                            <div x-show="show" @click.outside="open = false"
                                class="m-auto w-full rounded-md bg-white p-3 md:max-w-4xl">
                                <!-- Modal content -->
                                <div @click.away="show = false"
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    class="relative rounded-lg bg-white shadow ">
                                    <!-- Modal header -->
                                    <!-- component -->
                                    <div
                                        class="relative flex flex-col justify-center overflow-hidden py-6">
                                        <div
                                            class="relative mx-auto w-full max-w-lg rounded-2xl bg-white px-6 pb-9 pt-10">
                                            <div
                                                class="mx-auto flex w-full max-w-md flex-col space-y-16">
                                                <div
                                                    class="flex flex-col items-center justify-center space-y-2 text-center">
                                                    <div class="text-3xl font-semibold">
                                                        <p>Email Verification</p>
                                                    </div>
                                                    <div
                                                        class="flex flex-row text-sm font-medium text-gray-400">
                                                        <p>We have sent a code to your email
                                                            {{ $email }}</p>
                                                    </div>
                                                </div>

                                                <div>
                                                    <form action="" method="post">
                                                        <div class="flex flex-col space-y-16">
                                                            <div
                                                                class="mx-auto flex w-full max-w-xs flex-row items-center justify-between">
                                                                <div class="h-16 w-16">
                                                                    <input wire:model.defer="otp.0"
                                                                        class="flex h-full w-full flex-col items-center justify-center rounded-xl border border-gray-200 bg-white px-5 text-center text-lg outline-none ring-traivis-500 focus:bg-gray-50 focus:ring-1"
                                                                        type="text" name=""
                                                                        id="">
                                                                </div>
                                                                <div class="h-16 w-16">
                                                                    <input wire:model.defer="otp.1"
                                                                        class="flex h-full w-full flex-col items-center justify-center rounded-xl border border-gray-200 bg-white px-5 text-center text-lg outline-none ring-traivis-500 focus:bg-gray-50 focus:ring-1"
                                                                        type="text" name=""
                                                                        id="">
                                                                </div>
                                                                <div class="h-16 w-16">
                                                                    <input wire:model.defer="otp.2"
                                                                        class="flex h-full w-full flex-col items-center justify-center rounded-xl border border-gray-200 bg-white px-5 text-center text-lg outline-none ring-traivis-500 focus:bg-gray-50 focus:ring-1"
                                                                        type="text" name=""
                                                                        id="">
                                                                </div>
                                                                <div class="h-16 w-16">
                                                                    <input wire:model.defer="otp.3"
                                                                        class="flex h-full w-full flex-col items-center justify-center rounded-xl border border-gray-200 bg-white px-5 text-center text-lg outline-none ring-traivis-500 focus:bg-gray-50 focus:ring-1"
                                                                        type="text" name=""
                                                                        id="">
                                                                </div>
                                                            </div>
                                                            <p class="text-center text-red-500">
                                                                {{ $otpError }}</p>

                                                            <div
                                                                class="flex flex-col items-center space-y-5">
                                                                <div>
                                                                    <button
                                                                        class="flex inline-flex items-center justify-center space-x-2 rounded-full border border-transparent bg-traivis-500 px-3.5 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                                                                        <a href="#"
                                                                            wire:click="verify">Verify
                                                                            Account</a>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="flex flex-row items-center justify-center space-x-1 text-center text-sm font-medium text-gray-500">
                                                                    <p>Didn't recieve code?</p> <a
                                                                        wire:click="resend"
                                                                        class="flex flex-row items-center text-traivis-600"
                                                                        href="#"
                                                                        rel="noopener noreferrer">Resend</a>
                                                                </div>
                                                                <p class="text-green-500">
                                                                    {{ $otpResended }}</p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div>
                            <div class="mt-6">
                                <button type="submit"
                                    class="inline-flex w-full items-center justify-center space-x-2 rounded-full border border-transparent bg-traivis-500 px-3.5 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                                    Submit <x-svg-icons.fi-rr-rotate-right wire:loading
                                        target="register"
                                        class="ml-2 inline-block h-4 w-4 animate-spin" />
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="mt-6 grid grid-cols-3 items-center text-gray-500"> --}}
                    {{--                        <hr class="border-gray-500"> --}}
                    {{--                        <p class="text-center text-sm"> OR </p> --}}
                    {{--                        <hr class="border-gray-500"> --}}
                    {{--                    </div> --}}
                    {{--                    <div class="flex justify-between items-center "> --}}
                    {{--                        <button class="bg-white border py-2 w-[45%] rounded-full mt-3 flex justify-center items-center text-sm hover:scale-105 duration-300 text-[#002D74]"> --}}
                    {{--                            <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="16" --}}
                    {{--                                 height="16"> --}}
                    {{--                                <path fill="#FFC107" --}}
                    {{--                                      d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path> --}}
                    {{--                                <path fill="#FF3D00" --}}
                    {{--                                      d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path> --}}
                    {{--                                <path fill="#4CAF50" --}}
                    {{--                                      d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path> --}}
                    {{--                                <path fill="#1976D2" --}}
                    {{--                                      d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path> --}}
                    {{--                            </svg> --}}
                    {{--                            Login with Google --}}
                    {{--                        </button> --}}

                    {{--                        <button class="bg-white border py-2  w-[45%]  rounded-full mt-3 flex justify-center items-center text-sm hover:scale-105 duration-300 text-[#002D74]"> --}}
                    {{--                            <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" --}}
                    {{--                                 fill="currentColor" --}}
                    {{--                                 viewBox="0 0 16 16"> --}}
                    {{--                                <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"></path> --}}
                    {{--                                <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"></path> --}}
                    {{--                            </svg> --}}
                    {{--                            Login with Apple --}}
                    {{--                        </button> --}}

                    {{--                    </div> --}}
                    <p class="mt-6 text-center text-sm text-gray-400">Do you have an account? <a
                            href="{{ URL::to('/login') }}"
                            class="text-traivis-500 hover:underline focus:underline focus:outline-none">Login</a>
                    </p>
                </form>
                <!--/Form-->
            </div>
            <!--/Register Form-->
        </div>
    </div>
    <script>
        function xInit() {
            @this.updateTimezone(Intl.DateTimeFormat().resolvedOptions().timeZone);
        }
    </script>
</div>
