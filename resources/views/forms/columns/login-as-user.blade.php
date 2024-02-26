<div>
    @if ($getRecord())
        @php
            $whereWas = request()->fullUrl();
            $debug_info = json_decode($getState()['debug_info']);
            $redirectToUrl = $debug_info?->routeUrl;
            $class_name = 'App\\Models\\' . data_get($debug_info, 'payload.0');
            $class_name = class_exists($class_name) ? $class_name : null;
            $class_id = data_get($debug_info, 'payload.1');
            //        $class_name = 'App\Models\Course';
            //        $class_id = 1;
            if ($class_name && $class_id) {
                $the_class = $class_name::find($class_id);
                if ($the_class) {
                    switch ($class_name) {
                        case \App\Models\Post::class:
                            $redirectToUrl = route('post.show', $the_class->id);
                            break;
                        case \App\Models\Course::class:
                            $redirectToUrl = route('course', $the_class->slug);
                            break;
                    }
                }
            }
        @endphp

        @if ($redirectToUrl)
            <div
                class="min-h-6 my-1 block items-center justify-center space-x-1 whitespace-nowrap rounded-xl bg-gray-500/10 px-2 py-0.5 text-sm font-medium tracking-tight text-gray-700 rtl:space-x-reverse">
                <a
                    href="{{ route('impersonate', [$getRecord()->user_id, 0, base64_encode($redirectToUrl), base64_encode($whereWas)]) }}">
                    Go to where the issue has been reported.
                </a>
            </div>
        @endif
    @endif

</div>
