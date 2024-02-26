@extends('homes.social.layouts.base')
@section('title', __('Educators'))
@section('body')
<div class="min-h-screen">
    @include('homes.social.layouts.partials.courses.header')
    <div class="transition-colors ">
        <div class="mx-auto flex">
            @include('homes.social.layouts.partials.educators.side-menu',[
    'pageName' => 'Educators'
])
            <main class="mx-auto lg:col-span-9 xl:col-span-10 container">
                <!-- Your content -->
                <livewire:educators-list />
                {{--<button aria-label="{{__('Resume Course')}}"
                    class="fixed bottom-0 right-0 p-2 mx-10 my-10 text-gray-100 bg-traivis rounded-full px-5">
                    {{__('Resume Course')}}
                </button>--}}
            </main>
        </div>
    </div>
</div>
@endsection
