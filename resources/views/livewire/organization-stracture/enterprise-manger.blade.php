<div class="w-full" x-data="{ stuOpen: false }"
x-init="$wire.on('closeModal', () => {stuOpen= false})">

    <section x-on:closeModal="stuOpen = false" class="grid gap-4 grid-cols-2  sm:grid-cols-2 md:grid-cols-4">
        @forelse ($items as $item)
        <div wire:click="edit({{ $item->user->id }})" @click="stuOpen = !stuOpen"
            class="group relative flex flex-col h-fit cursor-pointer p-2 pb-0 hover:shadow-xl border-t-2 border-b-2 border-gray-300 hover:bg-traivis-50 bg-white rounded-lg hover:border-traivis-400 transition-all">
            <div class="text-center capitalize text-gray-500">

                <!--Card Header-->
                <div class="flex items-center   text-sm font-semibold py-1 px-2">
                   
                </div>
                <!--Card Header-->

                <!--User Avatar-->
                <img class="w-16 h-16 my-3 mx-auto rounded-full object-cover border border-transparent group-hover:border-gray-300 transition-all"
                    src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                    alt="employee" loading="lazy">
                <!---->

                <!--User Name-->
                <a href="#"
                    class="my-2 text-lg w-full flex justify-center  transition-colors font-semibold text-gray-900">
                    {{ $item->user->name ?? 'Employee Name' }}
                </a>
                <!---->
                <p>
                    {{ $item->user?->roles?->first()?->name ?? 'no role' }}
                </p>
                


                

            </div>
        </div>
        @empty
            
        @endforelse

    </section>





    <!--add Employee button-->
    <div @click="stuOpen = !stuOpen" class="fixed group bottom-10 right-10 transition-all ease-in-out duration-500 z-20"
        :class="stuOpen ? 'opacity-0 mr 96' : 'opacity-100 mr-0'">

        <button 
            class="items-center flex flex-col text-traivis-500 ring-0 p-2 transition-colors group-hover:text-gray-500 ">
            <svg class="h-12 w-12 rounded-lg" fill="currentColor" x="0px" y="0px" viewBox="0 0 512 512"
                style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512">
                <path
                    d="M256,169.515c17.944,0,32.491-14.547,32.491-32.491S273.944,104.533,256,104.533s-32.491,14.547-32.491,32.491  S238.056,169.515,256,169.515z" />
                <path
                    d="M426.667,0.016H85.333C37.894,0.391-0.284,39.104,0,86.544V346.17c-0.284,47.443,37.891,86.162,85.333,86.549h62.357  l79.957,68.267c15.838,14.474,40.039,14.686,56.128,0.491l82.027-68.779h60.864c47.442-0.387,85.617-39.106,85.333-86.549V86.544  C512.284,39.104,474.106,0.391,426.667,0.016z M256,64.912c98.453,2.603,98.432,148.843,0,151.467  C157.547,213.754,157.568,67.578,256,64.912z M346.645,367.12c-11.416,2.913-23.032-3.981-25.945-15.397  c-0.013-0.052-0.026-0.103-0.039-0.155c-10.919-35.717-48.726-55.82-84.443-44.901c-21.5,6.573-38.328,23.401-44.901,44.901  c-2.981,11.405-14.643,18.234-26.048,15.253c-11.405-2.981-18.234-14.643-15.253-26.048l0,0  c16.496-58.539,77.324-92.622,135.863-76.126c36.895,10.397,65.729,39.231,76.126,76.126  C364.975,352.281,358.123,364.034,346.645,367.12z" />
            </svg>
            <span class="font-bold">+ Employee</span>
        </button>

    </div>
    <!--END add Employee button-->



    <!----- View Card Popup----------->
    <section x-cloak x-show="stuOpen" class="z-[999]" x-transition:enter="ease-out duration-100"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

        <div class="fixed z-30 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <!---over BG---->
                <div @click="stuOpen = false
                                addNew=false" aria-hidden="true"
                    class=" fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                </div>
                <!-- center-->
                <span aria-hidden="true" class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                <!---END over BG---->


                <!-- popup content-->
                <div @click.outside="stuOpen = false"
                    class="relative inline-block bg-white rounded-lg p-4 text-left shadow-xl transform transition-all my-8 align-middle w-full sm:w-2/3 ">
                    <div>
                        <div class="flex flex-col container px-6 mx-auto rounded-lg bg-white w-full">
                            <h3>Employee</h3>
                            <form wire:submit.prevent="create">
                                <div class="space-y-3 pl-3">
                                    
                                    <div
                                        class="flex px-2 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                        <label class="columns-3">Empolyee Name</label>
                                        <select wire:model='user'
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block  p-2.5  ">
                                            <option value="">
                                                @lang('Choose A Position')
                                            </option>
                                            @foreach ($items as $item)
                                                <option value="{{ $item->user->id }}">
                                                    {{ $item->user->name }} :   {{ $item->user->email }}
                                                </option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                    <div
                                        class="flex px-2 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                        <label class="columns-3">Position</label>
                                        <select wire:model='selectedRole'
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block  p-2.5  ">
                                            <option value="">
                                                @lang('Choose A Position')
                                            </option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role }}">
                                                    {{ $role }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class=" mx-auto text-red-700 flex-wrap">
                                        @error('selectedRole')
                                            <p class="text-sm lg:text-base">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button
                                        class="px-4 py-2 font-semibold text-sm bg-cyan-500 text-white rounded-full shadow-sm">Save
                                    </button>
                                    <button type="button" @click="stuOpen = false"
                                        class="px-4 py-2 font-semibold text-sm bg-red-500 text-white rounded-full shadow-sm">cancel
                                    </button>
                                </div>
                            </form>



                        </div>

                    </div>
                </div>
                <!--END popup content -->

            </div>
        </div>
    </section>
    <!-----END View Card Popup----------->
</div>
@section('page-js')
@endsection
@section('page-css')
@endsection
