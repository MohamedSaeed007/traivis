<div>
    <script>
        function Category() {
            return {
                // options: [],
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
    {{-- @dump($spaceDetails,$step) --}}

    @if($business)
        @livewire('single-component.single-business',['business'=>$business])
    @else
        <div class="relative mx-auto max-w-6xl px-4 pt-5">
            <!-- Top Navigation -->
            <div class="sticky top-16 z-10 border-b bg-white py-4 pt-5">
                <!--<div class="mb-1 text-xs font-bold uppercase leading-tight tracking-wide text-gray-500"
                 x-text="`Step: ${step} of 4`">
            </div>-->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="text- flex-1 font-bold capitalize text-gray-500">
                        @if (session('success'))
                            <div class="mb-3 inline-flex w-full items-center rounded-lg bg-green-100 px-6 py-5 text-base text-green-700"
                                 role="alert">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                     data-icon="times-circle" class="mr-2 h-4 w-4 fill-current" role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                          d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                    </path>
                                </svg>
                                {{ session('success') }}
                            </div>
                        @endif
                        <!--Steps Labels-->
                        <div class="flex flex-row items-center gap-x-2">
                            <div class="bg-gray-00 w-auto rounded-full p-2 text-center leading-tight">
                                <svg class="h-5 w-5" fill="currentColor" x="0px" y="0px"
                                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                     xml:space="preserve">
                                <path
                                        d="M448.4,286.4c-16.5,0-32.3,6.4-44.1,17.9l-25.1-12.6c20.5-67.2-17.4-138.3-84.6-158.8c-24.6-7.5-50.9-7.4-75.4,0.4l-14.7-26.6c23.6-25.9,21.8-66-4.1-89.6c-25.9-23.6-66-21.8-89.6,4.1c-23.6,25.9-21.8,66,4.1,89.6c11.7,10.7,27.1,16.6,43,16.6c3.1-0.1,6.1-0.4,9.1-0.9l14.6,26.4c-55.3,41-67.7,118.6-27.9,174.8L91.8,387c-32.8-14.7-71.3,0-85.9,32.8c-14.7,32.8,0,71.3,32.8,85.9c32.8,14.7,71.3,0,85.9-32.8c8.2-18.3,7.5-39.3-1.9-57l60.6-58.2c56.6,41,135.7,28.4,176.7-28.2	l25.4,12.7c-0.4,2.6-0.6,5.1-0.7,7.7c0,35.1,28.5,63.6,63.6,63.6c35.1,0,63.6-28.5,63.6-63.6C512,314.9,483.5,286.4,448.4,286.4z	 M323.1,267.7v15v12.9c0,15.5-12.6,28-28,28h-78.3c-15.5,0-28-12.6-28-28v-12.9v-15v-28c0.1-15.5,12.6-28,28-28h6.2c2.7-13,14.1-22.4,27.4-22.4h11.2c13.3,0.1,24.8,9.4,27.4,22.4h6.1c15.5,0.1,28,12.6,28,28V267.7z"/>
                                    <path
                                            d="M250.4,200.6h11.2c7.1,0,13.4,4.5,15.8,11.2h-42.7C237,205.1,243.3,200.6,250.4,200.6z"/>
                            </svg>
                            </div>
                            <div class="leading-tight">Environment Type</div>
                        </div>

                        <div class="flex flex-row items-center gap-x-2">
                            @if ($step > 2)
                                <div wire:click="PreviousBtn"
                                     class="w-auto cursor-pointer rounded-full bg-gray-200 p-2 text-center leading-tight">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"
                                         width="512" height="512">
                                        <path
                                                d="M13.293,18.586,7.707,13a1,1,0,0,1,0-1.414L13.293,6A1,1,0,0,1,15,6.707V17.879A1,1,0,0,1,13.293,18.586Z"/>
                                    </svg>
                                </div>
                            @endif
                            @if (isset($spaceDetails['space_type']) &&
                                    ($spaceDetails['space_type'] == 'instructor' || $spaceDetails['space_type'] == 'institute'))
                                <div class="bg-gray-00 w-auto rounded-full p-2 text-center leading-tight">
                                    <svg class="h-5 w-5" fill="currentColor" height="512"
                                         viewBox="0 0 24 24" width="512">
                                        <path
                                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"/>
                                    </svg>
                                </div>
                                <div class="leading-tight">{{ $spaceDetails['space_type'] }} Space</div>
                            @endif
                            @if (isset($spaceDetails['space_type']) && $spaceDetails['space_type'] == 'enterprise')
                                <div class="bg-gray-00 w-auto rounded-full p-2 text-center leading-tight">
                                    <svg class="h-5 w-5" fill="currentColor" data-name="Layer 1"
                                         height="512" id="Layer_1" viewBox="0 0 24 24" width="512">
                                        <path
                                                d="m9 0h-4a5 5 0 0 0 -5 5v14a5 5 0 0 0 5 5h9v-19a5 5 0 0 0 -5-5zm-4 19h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm5 12h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm9-2h-3v19h3a5.006 5.006 0 0 0 5-5v-9a5.006 5.006 0 0 0 -5-5zm1 14a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm0-4a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm0-4a1 1 0 1 1 1-1 1 1 0 0 1 -1 1z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="leading-tight">Enterprise Space</div>
                            @endif
                        </div>
                    </div>
                    <!--/ Steps Labels-->

                </div>
            </div>
            <!-- /Top Navigation -->
            {{-- @if ($step == 0)
                <!--Step 1 (Environment Type)-->
                <div>

                    <div class="mb-5">
                        <h3 class="mb-10 text-lg font-medium text-gray-500 text-center">
                            Choose your Environment Type
                        </h3>

                        <div class="grid w-full gap-6 md:grid-cols-2">
                            <button wire:click="chooseSpaceType('instructor')">
                                <div
                                        class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer hover:border-traivis-300 hover:text-traivis-500 hover:bg-traivis-50 peer-checked:border-traivis-300 peer-checked:text-traivis-500 peer-checked:bg-traivis-50   ">
                                    <div class="block">
                                        <div class="flex flex-row items-center justify-between gap-5">
                                            <svg class="w-8 h-8 flex-shrink-0" fill="currentColor" height="512"
                                                 viewBox="0 0 24 24" width="512">
                                                <path
                                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"/>
                                            </svg>
                                            <div class="">
                                                <div class="w-full text-xl font-bold">
                                                    Courses Provider
                                                </div>
                                                <div class="w-full sr-only">
                                                    for Institutions and Instructors
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <svg aria-hidden="true" class="w-6 h-6 ml-3 flex-shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </button>

                            <button wire:click="chooseSpaceType('enterprise')">
                                <div
                                        class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer hover:border-traivis-300 hover:text-traivis-500 hover:bg-traivis-50 peer-checked:border-traivis-300 peer-checked:text-traivis-500 peer-checked:bg-traivis-50   ">
                                    <div class="block">
                                        <div class="flex flex-row items-center justify-between gap-5">
                                            <svg class="w-8 h-8 flex-shrink-0" fill="currentColor" data-name="Layer 1"
                                                 height="512" id="Layer_1" viewBox="0 0 24 24" width="512">
                                                <path
                                                        d="m9 0h-4a5 5 0 0 0 -5 5v14a5 5 0 0 0 5 5h9v-19a5 5 0 0 0 -5-5zm-4 19h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm5 12h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm0-4h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm9-2h-3v19h3a5.006 5.006 0 0 0 5-5v-9a5.006 5.006 0 0 0 -5-5zm1 14a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm0-4a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm0-4a1 1 0 1 1 1-1 1 1 0 0 1 -1 1z">
                                                </path>
                                            </svg>
                                            <div class="">
                                                <div class="w-full text-xl font-bold">
                                                    Enterprise
                                                </div>
                                                <div class="w-full sr-only">
                                                    Good for Small or Large Business
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <svg aria-hidden="true" class="w-6 h-6 ml-3 flex-shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>

                    </div>

                </div>
                <!--/ step-->
            @endif --}}

            <br><br>
            <br><br>

            {{-- @if ($step == 1)

                @if ($spaceDetails['space_type'] == 'instructor' || $spaceDetails['space_type'] == 'institute')

                    <!--providers-->
                    <div>


                        <div class="mb-5">
                            <h3 class="mb-10 text-lg font-medium text-gray-500 text-center">
                                Choose your Courses Provider Space plan
                            </h3>

                            <div class="grid w-full gap-6 md:grid-cols-2 items-start">

                                <!--freelance-->
                                <button wire:click="chooseSpaceType('Confirminstructor')">
                                    <div
                                            class="md:h-96 inline-flex items-start justify-center shadow-lg w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer hover:border-traivis-300 hover:text-traivis-500 hover:bg-traivis-50 peer-checked:border-traivis-300 peer-checked:text-traivis-500 peer-checked:bg-traivis-50   ">
                                        <div class="block group ">
                                            <div class="flex flex-col justify-center gap-5">

                                                <div class="flex flex-row items-center justify-between gap-5">
                                                    <svg class="w-8 h-8 flex-shrink-0" fill="currentColor"
                                                         data-name="Layer 1"
                                                         viewBox="0 0 24 24" width="512" height="512">
                                                        <path
                                                                d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z">
                                                        </path>
                                                    </svg>
                                                    <div class="w-full text-xl text-left font-bold">
                                                        Instructor Space

                                                    </div>
                                                    <svg aria-hidden="true" class="w-6 h-6 ml-auto flex-shrink-0"
                                                         fill="currentColor" viewBox="0 0 20 20"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                              clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div
                                                        class="text-center flex flex-col gap-y-4 text-gray-900 text-[17px] font-semibold mt-5">
                                                    <div class="w-full flex flex-wrap gap-2 justify-center capitalize">
                                                <span class="border border-gray-300 px-2 rounded-full">
                                                    Individual Educators
                                                </span>
                                                        <span class="border border-gray-300 px-2 rounded-full">
                                                    instructors
                                                </span>
                                                        <span class="border border-gray-300 px-2 rounded-full">
                                                    teachers and trainers
                                                </span>
                                                    </div>
                                                    <div class="w-full">
                                                        Free 20 teaser campaign slots
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <!--/freelance-->

                                <!--institute-->
                                <button wire:click="chooseSpaceType('Confirminstitute')">
                                    <div
                                            class="md:h-96 inline-flex items-start justify-center shadow-lg w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer hover:border-traivis-300 hover:text-traivis-500 hover:bg-traivis-50 peer-checked:border-traivis-300 peer-checked:text-traivis-500 peer-checked:bg-traivis-50   ">
                                        <div class="block group ">
                                            <div class="flex flex-col justify-center gap-5">

                                                <div class="flex flex-row items-center justify-between gap-5">
                                                    <svg class="w-8 h-8 flex-shrink-0" fill="currentColor" height="512"
                                                         viewBox="0 0 24 24" width="512" data-name="Layer 1">
                                                        <path
                                                                d="m4.343 11h-4.343a5.006 5.006 0 0 1 5-5h6v-4.364a1.637 1.637 0 0 1 2.33-1.482l3.2 1.5a1 1 0 0 1 0 1.7l-3.53 1.646v1h6a5.006 5.006 0 0 1 5 5h-4.343a3 3 0 0 1 -2.092-.849l-2.736-2.979a4.074 4.074 0 0 0 -5.687.03l-2.678 2.919a3.017 3.017 0 0 1 -2.121.879zm7.657 8a1 1 0 0 0 -1 1v4h2v-4a1 1 0 0 0 -1-1zm7.657-6h4.343v8a3 3 0 0 1 -3 3h-6v-4a3 3 0 0 0 -6 0v4h-6a3 3 0 0 1 -3-3v-8h4.343a4.994 4.994 0 0 0 3.565-1.495l2.678-2.919a2.07 2.07 0 0 1 2.8-.03l2.738 2.979a4.968 4.968 0 0 0 3.533 1.465zm-13.657 8a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm0-4a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm8-4a2 2 0 1 0 -2 2 2 2 0 0 0 2-2zm7 8a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm-1-5h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2z">
                                                        </path>
                                                    </svg>
                                                    <div class="w-full text-xl text-left font-bold">
                                                        Institution Space
                                                    </div>
                                                    <svg aria-hidden="true" class="w-6 h-6 ml-auto flex-shrink-0"
                                                         fill="currentColor" viewBox="0 0 20 20"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                              clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div
                                                        class="text-center flex flex-col gap-y-4 text-gray-900 text-[17px] font-semibold mt-5">
                                                    <div class="w-full flex flex-wrap gap-2 justify-center capitalize">
                                                <span class="border border-gray-300 px-2 rounded-full">
                                                    educational organisations
                                                </span>
                                                        <span class="border border-gray-300 px-2 rounded-full">
                                                    training centres
                                                </span>
                                                        <span class="border border-gray-300 px-2 rounded-full">
                                                    universities
                                                </span>
                                                    </div>
                                                    <div class="w-full">
                                                        Free 20 teaser campaign slots
                                                    </div>
                                                    <div class="w-full">
                                                        receiving tenders and send bidding offers
                                                    </div>
                                                    <div class="w-full">
                                                        create team and assign tasks
                                                    </div>
                                                    <div class="w-full">
                                                        hire instructor instructors on a contract basis
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <!--/institute-->

                            </div>
                        </div>
                    </div>
                    <!--/ providers-->
                @endif
                @if ($spaceDetails['space_type'] == 'enterprise')
                    <!--enterprise-->
                    <div>

                        <div class="mb-5">
                            <h3 class="mb-10 text-lg font-medium text-gray-500 text-center">
                                Choose your Enterprise Space plan
                            </h3>

                            <fieldset>
                                <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-4 sm:gap-x-4">


                                    @foreach ($plans as $key => $plan)
                                        <button wire:click="chooseEnterPrisePlan({{ $plan->id }})"
                                                class="transition-all group hover:-mt-5 hover:bg-traivis-50 hover:border-traivis-200 relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-lg focus:outline-none">
                                            <input class="sr-only peer" name="project-type" type="radio"
                                                   value="large Enterprise">

                                            <span
                                                    class="mx-auto transition-all text-gray-500 text-sm peer-checked:text-gray-800 group-hover:font-semibold group-hover:text-gray-800 text-left capitalize w-full">
                                    <span class="flex flex-col gap-y-4 relative items-center mx-auto h-fit ">
                                        <span class="block text-xl font-bold group-hover:text-2xl transition-all"
                                              id="Large">
                                            {{ $plan->name }}
                                        </span>

                                        @foreach ($features as $key => $feature)
                                            @php
                                                $planFeature =
                                                optional($plan->features()->where('feature_id',$feature->id)->first())->pivot;
                                                // dd($planFeature->charges);
                                            @endphp
                                            @if ($key == 0)
                                                --}}{{-- First Feature --}}{{--
                                                @if ($planFeature->charges != 999999)
                                                    --}}{{-- Limited --}}{{--
                                                    <span class="mt-1 flex items-center">
                                            Up to
                                            <span
                                                    class="mx-1 flex justify-center items-center w-5 h-5 rounded-full text-white bg-green-500 font-bold p-3 {{ $planFeature->charges > 100 ? 'px-4' : '' }}">{{
                                                number_format($planFeature->charges,0) }}</span>
                                            Employees
                                        </span>
                                                @else
                                                    --}}{{-- Unlimited --}}{{--
                                                    <span class="mt-1 flex items-center">
                                            <svg aria-hidden="true" class="mx-auto h-5 w-5 text-green-500 mr-2"
                                                 fill="currentColor" height="512" viewBox="0 0 24 24" width="512"
                                                 data-name="Layer 1">
                                                <path
                                                        d="m18 6c-2.69 0-4.756 1.855-6 3.37-1.244-1.515-3.31-3.37-6-3.37a6 6 0 0 0 0 12c2.69 0 4.756-1.855 6-3.37 1.244 1.515 3.31 3.37 6 3.37a6 6 0 0 0 0-12zm-12 9a3 3 0 0 1 0-6c1.791 0 3.4 1.783 4.239 3-.839 1.217-2.448 3-4.239 3zm12 0c-1.791 0-3.4-1.783-4.239-3 .839-1.217 2.448-3 4.239-3a3 3 0 0 1 0 6z">
                                                </path>
                                            </svg>
                                            Unlimited Employees
                                        </span>
                                                @endif
                                            @else
                                                --}}{{-- Other Features --}}{{--
                                                @if ($feature->consumable)
                                                    --}}{{-- Consumable --}}{{--
                                                    @if ($planFeature)
                                                        --}}{{-- Plan has this feature --}}{{--
                                                        @if ($planFeature->charges != 999999)
                                                            --}}{{-- Limited --}}{{--
                                                            <span class="mt-1 flex w-full justify-between items-center gap-x-2">
                                            {{ $feature->name }}
                                            <span
                                                    class="flex justify-center items-center w-5 h-5 rounded-full text-white bg-traivis-500 p-1">{{
                                                number_format($planFeature->charges,0) }}</span>
                                        </span>
                                                        @else
                                                            --}}{{-- Unlimited --}}{{--
                                                            <span class="mt-1 flex w-full justify-between items-center gap-x-2">
                                            {{ $feature->name }}
                                            <svg aria-hidden="true" class="h-5 w-5 text-green-500" fill="currentColor"
                                                 height="512" viewBox="0 0 24 24" width="512" data-name="Layer 1">
                                                <path
                                                        d="m18 6c-2.69 0-4.756 1.855-6 3.37-1.244-1.515-3.31-3.37-6-3.37a6 6 0 0 0 0 12c2.69 0 4.756-1.855 6-3.37 1.244 1.515 3.31 3.37 6 3.37a6 6 0 0 0 0-12zm-12 9a3 3 0 0 1 0-6c1.791 0 3.4 1.783 4.239 3-.839 1.217-2.448 3-4.239 3zm12 0c-1.791 0-3.4-1.783-4.239-3 .839-1.217 2.448-3 4.239-3a3 3 0 0 1 0 6z">
                                                </path>
                                            </svg>
                                        </span>

                                                        @endif
                                                    @else
                                                        --}}{{-- Plan doesn't have this feature --}}{{--
                                                        <span class="mt-1 flex w-full justify-between items-center gap-x-2">
                                            {{ $feature->name }}
                                            <svg aria-hidden="true" class="rotate-45 h-5 w-5 text-red-600"
                                                 fill="currentColor" height="512" viewBox="0 0 24 24" data-name="Layer 1">
                                                <path
                                                        d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm4 13h-3v3a1 1 0 0 1 -2 0v-3h-3a1 1 0 0 1 0-2h3v-3a1 1 0 0 1 2 0v3h3a1 1 0 0 1 0 2z">
                                                </path>
                                            </svg>
                                        </span>
                                                    @endif
                                                @else
                                                    --}}{{-- Not Consumable --}}{{--
                                                    @if ($planFeature)
                                                        --}}{{-- Plan has this feature --}}{{--
                                                        <span class="mt-1 flex w-full justify-between items-center gap-x-2">
                                            {{ $feature->name }}
                                            <svg aria-hidden="true" class="h-5 w-5 text-green-500" fill="currentColor"
                                                 data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                        d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z"/>
                                            </svg>
                                        </span>
                                                    @else
                                                        --}}{{-- Plan doesn't have this feature --}}{{--
                                                        <span class="mt-1 flex w-full justify-between items-center gap-x-2">
                                            {{ $feature->name }}
                                            <svg aria-hidden="true" class="rotate-45 h-5 w-5 text-red-600"
                                                 fill="currentColor" height="512" viewBox="0 0 24 24" data-name="Layer 1">
                                                <path
                                                        d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm4 13h-3v3a1 1 0 0 1 -2 0v-3h-3a1 1 0 0 1 0-2h3v-3a1 1 0 0 1 2 0v3h3a1 1 0 0 1 0 2z">
                                                </path>
                                            </svg>
                                        </span>
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach

                                        <p class="mt-4 sticky bottom-0 ">
                                            <span class=" text-4xl leading-10 font-black">{{ $plan->price > 0 ?
                                                '$'.$plan->price
                                                : 'Free' }}</span>
                                            @if ($plan->price > 0)
                                                <span class="text-base leading-6 font-medium text-gray-900">/mo</span>
                                            @endif
                                        </p>
                                    </span>
                                </span>

                                            <!--<svg aria-hidden="true" class="h-5 w-5 text-traivis-600 invisible peer-checked:visible" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" fill-rule="evenodd"/></svg>

                                            <span aria-hidden="true"
                                                  class="pointer-events-none absolute -inset-px rounded-lg peer-active:border border-2 peer-checked:border-traivis-500 border-transparent">
                                            </span>-->

                                        </button>
                                    @endforeach

                                </div>
                            </fieldset>


                        </div>

                    </div>
                    <!--/ enterprise-->
                @endif

            @endif --}}

            @if ($step == 2)
                <!--Step 2 (details)-->
                <div class="mx-auto max-w-lg">
                    <!--Image-->
                    <div
                            class="group relative mx-auto mb-8 w-fit flex-col justify-center text-center text-gray-500">
                        <label for="fileInput"
                               class="relative mx-auto flex h-36 w-36 items-center justify-center rounded-full object-cover">
                            @if($avatar && $showPreviewImage)
                                <img class="h-32 w-32 object-contain cursor-pointer rounded-full border-[3px] border-gray-200 bg-cover transition group-hover:border-traivis-500"
                                     src="{{ $avatar->temporaryUrl() }}"/>
                            @else
                                <img class="h-32 w-32 cursor-pointer rounded-full border-[3px] border-gray-200 bg-cover transition group-hover:border-traivis-500"
                                     src="https://www.gravatar.com/avatar/3f3b716479daa91a3998ed9acc9024dd?s=80&d=mp"/>
                            @endif
                            <input class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md"
                                   id="user-photo" type="file" wire:model="avatar">
                        </label>
                        @error('avatar')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <!--/ Image-->
                    <!--Info-->
                    <div class="group relative mb-5">
                        <input wire:model.defer="SpaceName"
                               class="peer mt-1 h-10 w-full rounded-full border-gray-300 text-2xl font-bold transition-colors invalid:text-white focus:border-traivis-400 focus:text-gray-500 sm:truncate"
                               id="SpaceName" required type="text">
                        <label
                                class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 text-2xl font-bold transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                for="SpaceName">
                            Space Name
                        </label>
                        @error('SpaceName')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="group relative mb-5">
                        <input wire:model.defer="SpaceDescription"
                               class="peer mt-1 w-full rounded-lg border-gray-300 transition-colors invalid:text-white focus:border-traivis-400 focus:text-gray-500 sm:truncate"
                               id="SpaceDescription" required type="text">
                        <label
                                class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                for="SpaceDescription">
                            Description
                        </label>
                        @error('SpaceDescription')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="group relative mb-5">
                        <input wire:model.defer="SpaceWebsite"
                               class="peer mt-1 w-full rounded-lg border-gray-300 transition-colors invalid:text-white focus:border-traivis-400 focus:text-gray-500 sm:truncate"
                               id="SpaceWebsite" required type="url">
                        <label
                                class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                for="SpaceWebsite">
                            Website
                        </label>
                        @error('SpaceWebsite')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <!--/ Info-->
                </div>
                <!--/ step-->
            @endif

            @if ($step == 3)
                <!--Step 3 (details)-->
                <div class="mx-auto max-w-lg">
                    <br>
                    <!--Categories-->
                    <div class="group relative mb-5">
                        <div class="relative inline-block w-full" x-data="Category()">
                            <div class="relative flex flex-col items-center">
                                <!--input area-->
                                <div class="group w-full" x-on:click="open">
                                    <div
                                            class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-2 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                                        <div class="flex flex-auto flex-row overflow-x-visible truncate">
                                            <!---->
                                            <!--input-->
                                            <div class="group relative flex-1">
                                                <input id=""
                                                       class="border-0 h-full w-full cursor-pointer appearance-none bg-transparent px-0 py-1 text-gray-800 outline-none"
                                                       placeholder="Categories ">
                                                <div :class="selected.length > 0 ? 'py-2 w-full' : ''"
                                                     class="absolute left-0 top-0 bg-white">
                                                    <template x-for="(option,index) in selected">
                                                    <span class="m-1 rounded-full bg-gray-200 p-1 px-2"
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
                                                    x-show="isOpen() === true" style="display: none;">
                                                <svg class="h-4 w-4 fill-current" version="1.1"
                                                     viewBox="0 0 20 20">
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
                                    <div class="absolute top-14 bg-white z-40 w-[90%] right-1/2 translate-x-1/2 rounded-b-lg max-h-select"
                                         x-on:click.away="close" x-show.transition.origin.top="isOpen()"
                                         style="display: none;">
                                        <div class="flex h-fit w-full flex-col overflow-y-auto">
                                            <ul class="overflow-y-auto h-52 p-3 space-y-3 text-sm text-gray-700"
                                                aria-labelledby="dropdownCheckboxButton">
                                                @foreach ($categories as $category)
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input
                                                                    id="checkbox-item-category-{{ $category->id }}"
                                                                    @click="add('checkbox-item-category-{{ $category->id }}')"
                                                                    data-text="{{ $category->category_name }}"
                                                                    wire:model="course_categories"
                                                                    type="checkbox" value="{{ $category->id }}"
                                                                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500">
                                                            <label for="checkbox-item-7"
                                                                   class="ml-2 text-sm font-medium text-gray-900">{{ $category->category_name }}</label>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                @error('course_categories')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--/ Categories-->
                    <!--Industries-->
                    <div class="group relative mb-5">
                        <div class="relative inline-block w-full" x-data="Category()">
                            <div class="relative flex flex-col items-center">
                                <!--input area-->
                                <div class="group w-full" x-on:click="open">
                                    <div
                                            class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-2 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                                        <div class="flex flex-auto flex-row overflow-x-visible truncate">
                                            <!---->
                                            <!--input-->
                                            <div class="group relative flex-1">
                                                <input id=""
                                                       class="border-0 h-full w-full cursor-pointer appearance-none bg-transparent px-0 py-1 text-gray-800 outline-none"
                                                       placeholder="Industries ">
                                                <div :class="selected.length > 0 ? 'py-2 w-full' : ''"
                                                     class="absolute left-0 top-0 bg-white">
                                                    <template x-for="(option,index) in selected">
                                                    <span class="m-1 rounded-full bg-gray-200 p-1 px-2"
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
                                                    x-show="isOpen() === true" style="display: none;">
                                                <svg class="h-4 w-4 fill-current" version="1.1"
                                                     viewBox="0 0 20 20">
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
                                    <div class="absolute top-14 bg-white z-40 w-[90%] right-1/2 translate-x-1/2 rounded-b-lg max-h-select"
                                         x-on:click.away="close" x-show.transition.origin.top="isOpen()"
                                         style="display: none;">
                                        <div class="flex h-fit w-full flex-col overflow-y-auto">
                                            <ul class="overflow-y-auto h-52 p-3 space-y-3 text-sm text-gray-700"
                                                aria-labelledby="dropdownCheckboxButton">
                                                @foreach ($industries as $industry)
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input
                                                                    id="checkbox-item-industry-{{ $industry->id }}"
                                                                    @click="add('checkbox-item-industry-{{ $industry->id }}')"
                                                                    data-text="{{ $industry->en_name }}"
                                                                    type="checkbox"
                                                                    wire:model="course_industries"
                                                                    value="{{ $industry->id }}"
                                                                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500">
                                                            <label for="checkbox-item-4"
                                                                   class="ml-2 text-sm font-medium text-gray-900">{{ $industry->en_name }}</label>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                @error('course_industries')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--/ Industries-->
                    <!--Languages-->
                    <div class="group relative mb-5">
                        <div class="relative inline-block w-full" x-data="Category()">
                            <div class="relative flex flex-col items-center">
                                <!--input area-->
                                <div class="group w-full" x-on:click="open">
                                    <div
                                            class="mt-1 flex rounded-full border border-gray-300 bg-white py-1 pl-2 pr-2 transition-colors focus-within:border-traivis-500 focus-within:ring-1 focus-within:ring-traivis-500 active:border-traivis-500">
                                        <div class="flex flex-auto flex-row overflow-x-visible truncate">
                                            <!---->
                                            <!--input-->
                                            <div class="group relative flex-1">
                                                <input id=""
                                                       class="border-0 h-full w-full cursor-pointer appearance-none bg-transparent px-0 py-1 text-gray-800 outline-none"
                                                       placeholder="Language ">
                                                <div :class="selected.length > 0 ? 'py-2 w-full' : ''"
                                                     class="absolute left-0 top-0 bg-white">
                                                    <template x-for="(option,index) in selected">
                                                    <span class="m-1 rounded-full bg-gray-200 p-1 px-2"
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
                                                    x-show="isOpen() === true" style="display: none;">
                                                <svg class="h-4 w-4 fill-current" version="1.1"
                                                     viewBox="0 0 20 20">
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
                                    <div class="absolute top-14 bg-white z-40 w-[90%] right-1/2 translate-x-1/2 rounded-b-lg max-h-select"
                                         x-on:click.away="close" x-show.transition.origin.top="isOpen()"
                                         style="display: none;">
                                        <div class="flex h-fit w-full flex-col overflow-y-auto">
                                            <ul class="overflow-y-auto h-52 p-3 space-y-3 text-sm text-gray-700"
                                                aria-labelledby="dropdownCheckboxButton">
                                                @foreach ($languages as $language)
                                                    <li>
                                                        <div class="flex items-center">
                                                            <input
                                                                    id="checkbox-item-language-{{ $language->id }}"
                                                                    @click="add('checkbox-item-language-{{ $language->id }}')"
                                                                    data-text="{{ $language->display_name }}"
                                                                    wire:model="course_languages"
                                                                    type="checkbox"
                                                                    value="{{ $language->id }}"
                                                                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500">
                                                            <label for="checkbox-item-1"
                                                                   class="ml-2 text-sm font-medium text-gray-900">{{ $language->display_name }}</label>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                @error('course_languages')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--/ Languages-->
                    <span style="color: red">{{ $step3_error_msg }}</span>
                </div>
                <!--/ step-->
            @endif

            @if ($step == 4)
                <!--Step 4 (Contacted person)-->
                <div class="mx-auto max-w-lg">
                    <br>
                    <!--Info-->
                    <div class="group relative mb-5">
                        <input wire:model.defer="contact_full_name"
                               class="peer mt-1 w-full rounded-lg border-gray-300 transition-colors invalid:text-white focus:border-traivis-400 focus:text-gray-500 sm:truncate"
                               id="Cname" required type="text">
                        <label
                                class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                for="Cname">
                            Contact Full Name
                        </label>
                        @error('contact_full_name')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="group relative mb-5 flex items-center gap-x-5">
                        <input wire:model.defer="contact_email"
                               class="peer mt-1 w-[228px] rounded-lg border-gray-300 transition-colors invalid:text-white focus:border-traivis-400 focus:text-gray-500 sm:truncate"
                               id="contact_email" required type="Email" name="Email"/>
                        <label
                                class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                for="contact_email">
                            Contact Email
                        </label>

                        <button wire:click="verifyEmail()" value="Verify"
                                class="btn inline-flex h-10 items-center space-x-2 rounded-full bg-traivis-500 hover:bg-traivis-700 px-3.5 py-2 text-sm font-medium leading-4 text-white shadow-sm transition-all focus-within:bg-traivis-700 hover:border-traivis-500 focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                type="button">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" width="512"
                                 height="512">
                                <path
                                        d="M18.581,2.14,12.316.051a1,1,0,0,0-.632,0L5.419,2.14A4.993,4.993,0,0,0,2,6.883V12c0,7.563,9.2,11.74,9.594,11.914a1,1,0,0,0,.812,0C12.8,23.74,22,19.563,22,12V6.883A4.993,4.993,0,0,0,18.581,2.14ZM16.718,9.717l-4.272,4.272a1.873,1.873,0,0,1-1.335.553h-.033a1.872,1.872,0,0,1-1.345-.6l-2.306-2.4A1,1,0,1,1,8.868,10.16L11.112,12.5,15.3,8.3a1,1,0,0,1,1.414,1.414Z"/>
                            </svg>
                            <span class="whitespace-nowrap font-bold">Verify</span>
                        </button>

                    </div>
                    @error('contact_email')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    @if ($sent_email_verification != null)
                        <div class="group relative mb-5">
                            <input wire:model.defer="contact_email_code"
                                   class="peer mt-1 w-[228px] rounded-lg border-gray-300 transition-colors invalid:text-white focus:border-traivis-400 focus:text-gray-500 sm:truncate"
                                   id="contact_email_code" required type="text"
                                   name="contact_email_code"/>
                            <label
                                    class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                    for="contact_email_code">
                                Email Verification Code
                            </label>
                            @error('contact_email_code')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif

                    <div class="group relative mb-5">
                        <input wire:model.defer="contact_phone"
                               class="peer mt-1 w-[228px] rounded-lg border-gray-300 transition-colors invalid:text-white focus:border-traivis-400 focus:text-gray-500 sm:truncate"
                               id="contact_phone" required type="number" name="phone"/>
                        <label
                                class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                for="contact_phone">
                            Contact Phone
                        </label>


                        {{-- <button wire:click="verifyPhone()" value="Verify"
                                class=" ml-auto h-10 btn transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-traivis-500 text-gray-500 bg-white border-gray-400 hover:bg-traivis-500 hover:text-white hover:border-traivis-500 focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                                type="button">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" width="512" height="512">
                                <path
                                        d="M18.581,2.14,12.316.051a1,1,0,0,0-.632,0L5.419,2.14A4.993,4.993,0,0,0,2,6.883V12c0,7.563,9.2,11.74,9.594,11.914a1,1,0,0,0,.812,0C12.8,23.74,22,19.563,22,12V6.883A4.993,4.993,0,0,0,18.581,2.14ZM16.718,9.717l-4.272,4.272a1.873,1.873,0,0,1-1.335.553h-.033a1.872,1.872,0,0,1-1.345-.6l-2.306-2.4A1,1,0,1,1,8.868,10.16L11.112,12.5,15.3,8.3a1,1,0,0,1,1.414,1.414Z"/>
                            </svg>
                            <span class="whitespace-nowrap font-bold">Verify</span>
                        </button> --}}
                    </div>
                    @error('contact_phone')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    {{--@if ($sent_phone_verification != null)
                        <div class="group relative mb-5">
                            <input wire:model.defer="contact_phone_code"
                                   class="peer mt-1 w-[228px] rounded-lg border-gray-300 transition-colors invalid:text-white focus:border-traivis-400 focus:text-gray-500 sm:truncate"
                                   id="contact_phone_code" required type="text"
                                   name="contact_email_code"/>
                            <label
                                    class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                    for="contact_phone_code">
                                Phone Verification Code
                            </label>
                        </div>
                    @endif--}}
                    <!--/ Info-->

{{--                    <span style="color: red">{{ $step4_error_msg }}</span>--}}
                </div>
                <!--/ step-->
            @endif

            @if ($step == 5)
                <!--Thank you Step-->
                <div>
                    <div class="flex items-center justify-center rounded-lg bg-white p-10 shadow">
                        <div>
                            <svg class="mx-auto mb-4 h-20 w-20 text-green-500" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"/>
                            </svg>

                            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800">Space Created</h2>

                            <button
                                    class="mx-auto block w-40 rounded-lg border bg-white px-5 py-2 text-center font-medium text-gray-600 shadow-sm hover:bg-gray-100 focus:outline-none">
                                <a href="{{ route($business_link) }}"> Go to your Space </a>
                            </button>
                        </div>
                    </div>
                </div>
                <!--/ Thank you Step-->
            @endif

            @if ($step >= 2 && $step < 5)
                <!--Next Previous Steps btns-->
                <div class="text-center" style="margin: auto">

                    @if ($step > 2)
                        <button wire:click="PreviousBtn"
                                class="inline-flex items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition hover:border-gray-200 hover:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-1">
                            <span class="whitespace-nowrap font-bold">Previous</span>
                        </button>
                    @endif
                    <button wire:click="ContinueBtn"
                            class="inline-flex items-center space-x-2 rounded-full border border-transparent bg-traivis-500 px-3.5 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                    <span class="whitespace-nowrap font-bold">
                        @if ($step <= 3)
                            Continue
                        @else
                            Finish
                        @endif
                    </span>
                    </button>

                </div>
                <!--/--Next Previous Steps btns-->
            @endif
            <br>
        </div>
    @endif
</div>
