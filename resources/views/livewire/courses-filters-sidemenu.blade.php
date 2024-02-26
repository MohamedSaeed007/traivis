<div>
    {{-- <form class="mt-4 border-gray-200" x-ref="categoriesForm" --}} {{-- action="{{ route('courses') }}"
        method="get" --}} {{-->--}}
        <div class="border-gray-200 px-4 py-6 group" id="courseCategories" {{-- x-data="{open:false}">--}}
            {{-- x-data="courseCategories()">--}}
            x-data="{open:{{\Route::currentRouteName()=='courses'?'true':'false'}}}">
            <h3 class="-mx-2 -my-3 flow-root">
                <x-side-menu-button text="Categories">
                    <x-svg-icons.fi-sr-folder
                        class="w-5 h-5 mr-2 text-traivis group-hover:text-traivis-700  " />
                </x-side-menu-button>
            </h3>
            <!-- Filter section, show/hide based on section state. -->
            <div class="pt-6" x-show="open" x-cloak x-collapse>
                <div class="space-y-4">
                    {{-- @foreach($categories as $category)--}}

                    {{-- <div class="flex items-center">--}}
                        {{-- <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" --}} {{--
                            class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">--}}
                        {{-- <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">--}}
                            {{-- @dump($category->toArray()) </label>--}}
                        {{-- </div>--}}

                    {{-- @endforeach--}}



                    @foreach ($categories as $category)
                    {{-- {{ $category->category_name }}--}}
                    {{-- <optgroup label="{{ $category->category_name }}">--}}
                        @if ($category->sub_categories->count())
                        @foreach ($category->sub_categories as $sub_category)
                        {{-- <option value="{{ $sub_category->id }}" --}} {{-- {{ selected($sub_category->id,
                            $old_cat_id) }}>--}}
                            {{-- {{ $sub_category->category_name }}</option>--}}
                        <div class="flex items-center">
                            <label class="ml-3 min-w-0 flex-1 text-gray-500">

                                <input wire:model="selectedCategory" {{-- @change="$refs.categoriesForm.submit()" --}}
                                    {{-- @click="test()" --}} {{-- @click="{--}}
                                            {{--                                                                $el.checked=!$el.checked;--}}
                                            {{--                                                                $refs.categoriesForm.submit();--}}
                                            {{--                                                                }" --}}
                                    name="category" value="{{ $sub_category->id }}" type="radio" {{--
                                    @if(request()->category==$sub_category->id)--}}
                                {{-- checked--}}
                                {{-- @endif--}}
                                class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">
                                {{ $sub_category->category_name }}
                            </label>
                        </div>
                        @endforeach
                        @endif
                        {{--
                    </optgroup>--}}
                    @endforeach



                    {{-- <div class="flex items-center">--}}
                        {{-- <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox" --}} {{--
                            checked--}} {{--
                            class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">--}}
                        {{-- <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500">--}}
                            {{-- Blue </label>--}}
                        {{-- </div>--}}

                    {{-- <div class="flex items-center">--}}
                        {{-- <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox" --}} {{--
                            class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">--}}
                        {{-- <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500">--}}
                            {{-- Brown </label>--}}
                        {{-- </div>--}}

                    {{-- <div class="flex items-center">--}}
                        {{-- <input id="filter-mobile-color-4" name="color[]" value="green" type="checkbox" --}} {{--
                            class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">--}}
                        {{-- <label for="filter-mobile-color-4" class="ml-3 min-w-0 flex-1 text-gray-500">--}}
                            {{-- Green </label>--}}
                        {{-- </div>--}}

                    {{-- <div class="flex items-center">--}}
                        {{-- <input id="filter-mobile-color-5" name="color[]" value="purple" type="checkbox" --}} {{--
                            class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">--}}
                        {{-- <label for="filter-mobile-color-5" class="ml-3 min-w-0 flex-1 text-gray-500">--}}
                            {{-- Purple </label>--}}
                        {{-- </div>--}}

                </div>
            </div>
        </div>

        <div class="border-t border-gray-200 px-4 py-6 group" id="courseTopics"
            x-data="{open: @entangle('showTopics')}">
            {{-- x-data="{open:false}">--}}
            <h3 class="-mx-2 -my-3 flow-root">
                <x-side-menu-button text="Topics">
                    <x-svg-icons.fi-sr-folder-tree
                        class="w-5 h-5 mr-2 text-traivis group-hover:text-traivis-700  " />
                </x-side-menu-button>
            </h3>
            <!-- Filter section, show/hide based on section state. -->
            <div class="pt-6" x-show="open" x-cloak x-collapse>
                <div class="space-y-4">


                    {{-- <select name="topic" id="course_topic" class="form-control select2 w100">--}}
                        {{-- <option value="">{{ __t('select_topic') }}</option>--}}

                        {{-- @foreach ($topics as $topic)--}}
                        {{-- <option value="{{ $topic->id }}" --}} {{-- {{ selected($topic->id, $old_topic_id) }}>--}}
                            {{-- {{ $topic->category_name }}--}}
                            {{-- </option>--}}
                        {{-- @endforeach--}}
                        {{-- </select>--}}

                    @foreach ($topics as $topic)
                    <div class="flex items-center">
                        <label class="ml-3 min-w-0 flex-1 text-gray-500">
                            <input value="{{ $topic->id }}" wire:model="selectedTopic" name="topic" type="radio"
                                class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">
                            {{ $topic->category_name }} </label>
                    </div>
                    @endforeach

                    {{-- <div class="flex items-center">--}}
                        {{-- <input id="filter-mobile-category-1" name="category[]" value="sale" --}} {{--
                            type="checkbox" --}} {{--
                            class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">--}}
                        {{-- <label for="filter-mobile-category-1" class="ml-3 min-w-0 flex-1 text-gray-500">--}}
                            {{-- Sale </label>--}}
                        {{-- </div>--}}

                    {{-- <div class="flex items-center">--}}
                        {{-- <input id="filter-mobile-category-2" name="category[]" value="travel" --}} {{--
                            type="checkbox" checked--}} {{--
                            class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">--}}
                        {{-- <label for="filter-mobile-category-2" class="ml-3 min-w-0 flex-1 text-gray-500">--}}
                            {{-- Travel </label>--}}
                        {{-- </div>--}}

                    {{-- <div class="flex items-center">--}}
                        {{-- <input id="filter-mobile-category-3" name="category[]" value="organization" --}} {{--
                            type="checkbox" --}} {{--
                            class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">--}}
                        {{-- <label for="filter-mobile-category-3" class="ml-3 min-w-0 flex-1 text-gray-500">--}}
                            {{-- Organization </label>--}}
                        {{-- </div>--}}

                    {{-- <div class="flex items-center">--}}
                        {{-- <input id="filter-mobile-category-4" name="category[]" value="accessories" --}} {{--
                            type="checkbox" --}} {{--
                            class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">--}}
                        {{-- <label for="filter-mobile-category-4" class="ml-3 min-w-0 flex-1 text-gray-500">--}}
                            {{-- Accessories </label>--}}
                        {{-- </div>--}}

                </div>
            </div>
        </div>

        <div class="border-t border-gray-200 px-4 py-6 group" id="courseDeliveryMode"
            x-data="{open: @entangle('showDeliveryModes')}">
            {{-- x-data="{open:false}">--}}
            <h3 class="-mx-2 -my-3 flow-root">
                <x-side-menu-button text="Delivery Mode">
                    <x-svg-icons.fi-sr-presentation
                        class="w-5 h-5 mr-2 text-traivis group-hover:text-traivis-700  " />
                </x-side-menu-button>
            </h3>
            <!-- Filter section, show/hide based on section state. -->
            <div class="pt-6" x-show="open" x-cloak x-collapse>
                <div class="space-y-4 mb-2">
                    @foreach($deliveryModes as $deliveryModeID=>$deliveryMode)
                    <div class="flex items-center">
                        <label class="ml-3 min-w-0 flex-1 text-gray-500">
                            <input wire:model="levelSection" value="{{$deliveryModeID}}" type="checkbox"
                                class="ml-2 h-4 w-4 border-gray-300 rounded text-traivis-600 focus:ring-traivis-500">
                            {{__($deliveryMode['name'])}} </label>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="border-t border-gray-200 px-4 py-6 text-center">

            {{-- <button type="button" --}} {{--
                class="inline-flex items-center px-3 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
                {{--
                <!-- Heroicon name: solid/mail -->--}}
                {{-- <svg class="-ml-0.5 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" --}} {{-- aria-hidden="true">--}}
                    {{--
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />--}}
                    {{--
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />--}}
                    {{--
                </svg>--}}
                {{-- Button text--}}
                {{--
            </button>--}}

            <button type="button" wire:click="resetFilters"
                class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-900 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500    transition-colors">
                <x-svg-icons.fi-sr-filter-slash class="-ml-1 mr-2 h-5 w-5" /> {{__('Reset Filters')}}
            </button>

            {{-- <button type="button" wire:click="resetFilters" --}} {{--
                class="rounded hover:bg-gray-50 text-gray-900 hover:text-gray-700 p-2">--}}
                {{-- </button>--}}

        </div>
        {{--
    </form>--}}
</div>