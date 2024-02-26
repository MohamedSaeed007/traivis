<div class="w-full">
    {{-- @json($filters) --}}

    <div class="flex items-center justify-center bg-white px-8 py-3 transition-colors ">
        <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">

            @include('homes.social.layouts.partials.courses.components.courses-tag', [
                'text' => 'Category 1',
                'link' => '',
                'class' =>
                    'bg-red-100 text-red-800  border-gray-200 ',
            ])
            @include('homes.social.layouts.partials.courses.components.courses-tag', [
                'text' => 'Category 2',
                'link' => '',
                'class' =>
                    'bg-red-100 text-red-800  border-gray-200 ',
            ])
            @include('homes.social.layouts.partials.courses.components.courses-tag', [
                'text' => 'Topic 1',
                'link' => '',
                'class' =>
                    'bg-yellow-100 text-yellow-800',
            ])
            @include('homes.social.layouts.partials.courses.components.courses-tag', [
                'text' => 'Topic 2',
                'link' => '',
                'class' =>
                    'bg-yellow-100 text-yellow-800',
            ])

            @include('homes.social.layouts.partials.courses.components.courses-sort')
            {{-- @include('homes.social.layouts.partials.courses.components.courses-sort') --}}

            <!-- This example requires Tailwind CSS v2.0+ -->
            {{-- <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-100 transition-colors text-gray-800 "> Badge </span> --}}
            {{-- <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-red-100 transition-colors text-red-800"> Badge </span> --}}
            {{-- <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-yellow-100 transition-colors text-yellow-800"> Badge </span> --}}
            {{-- <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 transition-colors text-green-800"> Badge </span> --}}
            {{-- <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-traivis-100 transition-colors text-traivis-800"> Badge </span> --}}
            {{-- <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 transition-colors text-indigo-800"> Badge </span> --}}
            {{-- <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-purple-100 transition-colors text-purple-800"> Badge </span> --}}
            {{-- <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 transition-colors text-pink-800"> Badge </span> --}}
        </div>
    </div>

    <nav class="items-center justify-between border-t border-gray-200 bg-white px-4 py-3 transition-colors  sm:px-6"
        aria-label="Pagination">
        {{ $courses->links() }}
    </nav>
    <ul role="list"
        class="m-6 mb-32 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @forelse($courses as $course)
            <x-courses.card :course="$course" class="">

                <x-slot name="courseIcon">
                    <x-svg-icons.fi-brands-python class="h-6 w-6" />
                </x-slot>

            </x-courses.card>

        @empty
            <li>No courses are found</li>
        @endforelse
    </ul>
    <nav class="items-center justify-between border-t border-gray-200 bg-white px-4 py-3 transition-colors  sm:px-6"
        aria-label="Pagination">

        {{ $courses->links() }}
    </nav>
    <!--add course-->
    @livewire('add-button')
    <!--END add course-->
</div>
