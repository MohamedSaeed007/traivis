<!--add course-->

<div class="fixed bottom-16 right-16 z-10 rounded-full bg-white p-2">
    <div class="sr-only">
        New Course !
    </div>
    @if (\Request::routeIs('instructor-dashboard*'))
        <a href="{{ route('instructor-dashboard-courseDetails', null) }}"
            class="text-traivis-500 transition-colors hover:text-gray-500  md:right-60 lg:right-1/4">
            <svg fill="currentColor" stroke="" class="h-12 w-12" id="Layer_1" height="512"
                viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                <path
                    d="m14 7v-6.54a6.977 6.977 0 0 1 2.465 1.59l3.484 3.486a6.954 6.954 0 0 1 1.591 2.464h-6.54a1 1 0 0 1 -1-1zm8 3.485v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515c.163 0 .324.013.485.024v6.976a3 3 0 0 0 3 3h6.976c.011.161.024.322.024.485zm-6 6.515a1 1 0 0 0 -1-1h-2v-2a1 1 0 0 0 -2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 1-1z" />
            </svg>
        </a>
    @else
        <a href="{{ route('institute-dashboard-courseDetails', null) }}"
            class="text-traivis-500 ring-1 ring-white transition-colors hover:text-gray-500  md:right-60 lg:right-1/4">
            <svg fill="currentColor" stroke="" class="h-12 w-12" id="Layer_1" height="512"
                viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"
                data-name="Layer 1">
                <path
                    d="m14 7v-6.54a6.977 6.977 0 0 1 2.465 1.59l3.484 3.486a6.954 6.954 0 0 1 1.591 2.464h-6.54a1 1 0 0 1 -1-1zm8 3.485v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515c.163 0 .324.013.485.024v6.976a3 3 0 0 0 3 3h6.976c.011.161.024.322.024.485zm-6 6.515a1 1 0 0 0 -1-1h-2v-2a1 1 0 0 0 -2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 1-1z" />
            </svg>
        </a>
    @endif
</div>
<!--END add course-->
