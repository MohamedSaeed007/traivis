@extends('homes.social.layouts.base')
@section('htmlClass', '')
@section('title', $title)

@section('bodyClass', 'antialiased bg-body text-body font-body')
@section('body')
    <div class="min-h-screen bg-white transition-colors ">

        @include('homes.social.layouts.partials.courses.header', [
            'no_result_panel_for_global_search' => true,
        ])

        <div class="flex w-full">

            <div x-data="{ SMopen: true }"  class="sticky top-20 h-[100vh] flex-shrink-0 transition-all bg-white z-50 border-r border-slate-300">

                @livewire('profile.profile-side-bar',['user'=>$user])
            </div>

            <div class="w-full flex flex-col">

                @include('homes.social.layouts.partials.profile.user.header')

                <div class="relative mx-auto flex justify-between w-full">



                    <div class="mb-4 w-full px-4 lg:px-20 md:mb-0 mx-auto">
                        <div class="flex w-full justify-center">
                            <section class="flex w-full p-1 py-4 ">
                                <div class="container mx-auto w-full flex-col">
                                    <!--Influencer-->
                                    @livewire('influencer-offers')
                                    <!--/Influencer-->
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
@endsection
