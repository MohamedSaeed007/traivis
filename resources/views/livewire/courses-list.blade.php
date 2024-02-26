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
        </div>
    </div>

    <nav class="items-center justify-between border-gray-200 bg-white px-4 py-3 transition-colors sm:px-6"
        aria-label="Pagination">

        {{ $courses->links() }}
    </nav>
    <ul role="list"
        class="m-6 mb-32 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

        @can('create', \App\Models\Course::class)
            <!--Create Course-->
            <a href="{{ route('instructor-dashboard-courseDetails', null) }}"
                class="col-span-1 flex cursor-pointer flex-col items-center justify-center rounded-lg border-b-2 border-t border-gray-200 bg-white text-center text-slate-500 shadow transition-all hover:scale-[1.02] hover:border-traivis-300 hover:bg-slate-50 hover:text-traivis-500">
                <p class="text-6xl font-bold">+</p>
                <p class="">Create Course</p>
            </a>
            <!--Create Course-->
        @endcan

        @forelse($courses as $course)
            <x-courses.card :course="$course">
                <x-slot name="courseIcon">
                    <x-svg-icons.fi-brands-python class="h-6 w-6" />
                </x-slot>
            </x-courses.card>
        @empty
            <li>No courses are found</li>
        @endforelse
    </ul>
    <nav class="items-center justify-between border-gray-200 bg-white px-4 py-3 transition-colors sm:px-6"
        aria-label="Pagination">
        {{ $courses->links() }}
    </nav>
</div>
