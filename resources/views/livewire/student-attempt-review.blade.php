<div x-data="{stuQuiz:@entangle('showPopup')}">
    <section x-show="stuQuiz" class="z-[99]" x-transition:enter="ease-out duration-100"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" style="display: none;">
        <div aria-labelledby="modal-title" aria-modal="true" class="fixed z-30 inset-0 overflow-y-auto" role="dialog">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <!---over BG---->
                <div @click="stuQuiz = false" aria-hidden="true"
                     class=" fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                </div>
                <!---END over BG---->
                <!-- popup content-->
                <div class="relative inline-block bg-white rounded-lg p-4 py-0 text-left shadow-xl transform transition-all my-8 align-middle w-full sm:w-2/3">
                    <div class="container p-6 pb-0 mx-auto bg-white">
                        <!--------- Quiz Content ----------->
                        <div class="text-gray-500">
                            <!-- header -->
                            <div class="sticky top-0 z-10 bg-white w-full py-4 gap-y-3 flex flex-1 items-center justify-between flex-wrap">
                                <!--info-->
                                <div class="flex flex-row gap-x-8  lg:w-auto w-full items-center gap-y-3 md:justify-between justify-center">
                                    <!--Name-->
                                    <div class="">
                                        <p class="bg-white text-2xl flex items-center gap-x-3 whitespace-nowrap truncate">
                                            <svg fill="currentColor" class="h-6 w-6 shrink-0" viewBox="0 0 24 24">
                                                <path d="M12.836,.028C9.361-.202,5.961,1.066,3.509,3.521,1.057,5.977-.211,9.378,.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.096,.454,12.836,.028Zm-.933,18.972c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5,.672,1.5,1.5-.672,1.5-1.5,1.5Zm1.928-6.512c-.521,.287-.928,.951-.928,1.512,0,.553-.448,1-1,1s-1-.447-1-1c0-1.285,.807-2.627,1.963-3.264,.763-.42,1.157-1.254,1.004-2.125-.138-.786-.81-1.458-1.596-1.596-.605-.107-1.196,.049-1.657,.435-.454,.382-.714,.94-.714,1.532,0,.553-.448,1-1,1s-1-.447-1-1c0-1.185,.521-2.301,1.428-3.063,.908-.762,2.107-1.078,3.289-.874,1.613,.283,2.938,1.607,3.221,3.221,.298,1.699-.509,3.396-2.009,4.223Z"></path>
                                            </svg>
                                            <span class="font-bold text-justify ">{{$attempt?->quiz->title}}</span>
                                        </p>
                                    </div>
                                    <!--/Name-->
                                    <!--info-->
                                    <div class="hidden sm:block">
                                        <div class="flex flex-row items-center justify-between gap-x-5 bg-white font-semibold">
                                            <!--Attempts-->
                                            {{--<div class="group relative flex gap-x-2 items-center whitespace-nowrap w-fit justify-center">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="m23 11a1 1 0 0 0 -1 1 10.034 10.034 0 1 1 -2.9-7.021.862.862 0 0 1 -.1.021h-3a1 1 0 0 0 0 2h3a3 3 0 0 0 3-3v-3a1 1 0 0 0 -2 0v2.065a11.994 11.994 0 1 0 4 8.935 1 1 0 0 0 -1-1z"></path>
                                                    <path d="m12 6a1 1 0 0 0 -1 1v5a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414l-2.707-2.707v-4.586a1 1 0 0 0 -1-1z"></path>
                                                </svg>
                                                <p class="">2<span class=""> / </span>5</p>
                                                <span class="z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                Attempts
                                            </span>
                                            </div>--}}
                                            <!--/Attempts-->
                                            <!--Duration-->
                                            <div class="group relative flex gap-x-2 items-center whitespace-nowrap w-fit justify-center">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm4,13h-4c-.552,0-1-.447-1-1V6c0-.553,.448-1,1-1s1,.447,1,1v5h3c.553,0,1,.447,1,1s-.447,1-1,1Z"></path>
                                                </svg>
                                                <p class="">{{$attempt?->quiz->options['time_limit']}}<span
                                                            class="text-xs"> Min</span></p>
                                                <span class="z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                Duration
                                            </span>
                                            </div>
                                            <!--/Duration-->
                                            <!--Pass Points-->
                                            <div class="group relative flex gap-x-2 items-center whitespace-nowrap w-fit justify-center">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="m18,12c-3.314,0-6,2.686-6,6s2.686,6,6,6,6-2.686,6-6-2.686-6-6-6Zm3.192,6.202l-2.213,2.124c-.452.446-1.052.671-1.653.671s-1.203-.225-1.663-.674l-1.132-1.109c-.395-.387-.4-1.02-.014-1.414.386-.396,1.019-.401,1.414-.014l1.131,1.108c.144.142.379.139.522-.002l2.223-2.134c.397-.382,1.031-.371,1.414.029.382.398.369,1.031-.029,1.414Zm-11.192-.202c0-2.39,1.048-4.534,2.709-6h-7.709c-.553,0-1-.447-1-1s.447-1,1-1h8c.553,0,1,.447,1,1,0,.024-.001.048-.003.072,1.177-.682,2.544-1.072,4.003-1.072v-5c0-2.757-2.243-5-5-5H5C2.243,0,0,2.243,0,5v14c0,2.757,2.243,5,5,5h7.709c-1.661-1.466-2.709-3.61-2.709-6ZM5,5h8c.553,0,1,.447,1,1s-.447,1-1,1H5c-.553,0-1-.447-1-1s.447-1,1-1Zm2,12h-2c-.553,0-1-.447-1-1s.447-1,1-1h2c.553,0,1,.447,1,1s-.447,1-1,1Z"></path>
                                                </svg>
                                                <p class="">{{$attempt?->quiz->options['passing_score']}}<span
                                                            class="text-xs"> Ps</span></p>
                                                <span class="z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                Pass Points
                                            </span>
                                            </div>
                                            <!--/Pass Points-->
                                            <!--Total Points-->
                                            <div class="group relative flex gap-x-2 items-center whitespace-nowrap w-fit justify-center">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="m14 7v-6.54a6.977 6.977 0 0 1 2.465 1.59l3.484 3.486a6.954 6.954 0 0 1 1.591 2.464h-6.54a1 1 0 0 1 -1-1zm8 3.485v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515c.163 0 .324.013.485.024v6.976a3 3 0 0 0 3 3h6.976c.011.161.024.322.024.485zm-5.276 3.826a1 1 0 0 0 -1.413-.035l-3.6 3.431a1 1 0 0 1 -1.456-.04l-1.589-1.414a1 1 0 0 0 -1.332 1.494l1.544 1.374a3 3 0 0 0 4.226.017l3.585-3.414a1 1 0 0 0 .035-1.413z"></path>
                                                </svg>
                                                <p class="">{{ $attempt?->quiz->questions->sum('score') }}<span
                                                            class="text-xs"> Ps</span></p>
                                                <span class="z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                Total Points
                                            </span>
                                            </div>
                                            <!--/Total Points-->
                                        </div>
                                    </div>
                                    <!--/info-->
                                </div>
                                <!--/info-->
                            </div>
                            <!-- /header -->
                            <!--Content-->
                            <div x-data="{QSubmit:false}"
                                 class="flex flex-col gap-y-10 mt-5 container mx-auto">
                                <!-- Questions content-->
                                <div class="mt-10 w-full flex flex-col">
                                    <!--Questions label-->
                                    <p class="text-center font-bold text-lg py-4 mb-8 text-slate-500">Please Correct the
                                        following questions</p>
                                    <!--/Questions label-->
                                    <!--Questions-->
                                    <div class="w-full flex flex-col gap-y-8">
                                        @if($attempt)
                                            @foreach($attempt->answers as $key => $answer)
                                                <!--Q2 - Text-Choices-->
                                                <div x-data="{
                                                openQ:false,
                                                Type:'{{$answer->question->type}}',
                                                Status:@entangle('statuses.'.$answer->id),
                                                Corrected:{{ is_null($statuses[$answer->id]) ? 0 : 1}},
                                                AddComment:{{ $answer->comment ? 0 : 1}}, Comment:{{ $answer->comment ? 1 : 0}},
                                                Commenting:false, commentText:@entangle('comments.'.$answer->id),
                                                Score:@entangle('scores.'.$answer->id)}">
                                                    <div class="relative w-full p-5 border rounded-lg flex flex-col justify-between max-w-4xl mx-auto group/q transition-all"
                                                         :class="[(Status==null ? 'border-yellow-500' : ''), (Status==1 ? 'border-green-600' : ''),(Status==0 ? 'border-red-500':'')]">
                                                        <!--Q Description-->
                                                        <p class="absolute -top-2.5 left-3  px-3 bg-white rounded-full text-sm font-semibold hover:scale-105 transition-all">
                                                            {{ $answer->question->type =='opened' ? 'Type your Answer' : 'Choose the correct Answer' }}</p>
                                                        <!--/Q Description-->
                                                        <!--Q header-->
                                                        <button @click="openQ = !openQ"
                                                                class="flex flex-row items-center justify-between">
                                                            <!--The Question-->
                                                            <p class="bg-white font-bold flex items-center gap-x-3">
                                                                <span :class="[(Status==0 ? 'bg-red-500' : ''),(Status==1 ? 'bg-green-600' : ''),(Status==null ? 'bg-yellow-500' : '')]"
                                                                      class="h-7 w-7 transition-all flex items-center justify-center border border-transparent rounded-full shadow-sm text-white animate-[bounce_0.7s_ease-in-out_1]">
                                                                    {{ $key +1 }}
                                                                </span>
                                                                <span class="font-semibold text-lg">{{ $answer->question->title }}</span>
                                                            </p>
                                                            <!--The Question-->
                                                            <!--Q icons-->
                                                            <span class="flex items-center gap-x-3">
                                                                <svg x-show="Status==null"
                                                                     class="w-5 h-5 text-yellow-500" fill="currentColor"
                                                                     viewBox="0 0 24 24"><path
                                                                            d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z"></path>
                                                                </svg>
                                                                <svg x-show="Comment && Type==='closed'"
                                                                     class="h-5 w-5 text-slate-400" fill="currentColor"
                                                                     viewBox="0 0 24 24"><path
                                                                            d="m12.836.029c-3.474-.235-6.875,1.036-9.328,3.492S-.211,9.378.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.862,19.096.454,12.836.029Zm-5.836,13.471c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Zm5,0c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Zm5,0c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Z"></path>
                                                                </svg>
                                                                <p x-show="Corrected && Type==='opened'"
                                                                   :class="Status ? 'bg-green-600' : 'bg-red-500'"
                                                                   class="whitespace-nowrap text-sm font-bold px-2 rounded-full text-white bg-slate-400">
                                                                    <span>{{number_format($scores[$answer->id],1)}}</span> / 10</p>
                                                                <svg x-show="Status==0"
                                                                     class="w-5 h-5 text-red-500" fill="currentColor"
                                                                     viewBox="0 0 24 24"><path
                                                                            d="M12.836,.028C9.356-.207,5.961,1.067,3.509,3.521,1.057,5.977-.211,9.378,.029,12.854c.441,6.354,6.053,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.097,.454,12.836,.028Zm2.871,14.265c.391,.391,.391,1.023,0,1.414-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293l-2.293-2.293-2.293,2.293c-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.293-2.293-2.293-2.293c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.293,2.293,2.293-2.293c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414l-2.293,2.293,2.293,2.293Z"></path>
                                                                </svg>
                                                                <svg x-show="Status==1"
                                                                     class="w-5 h-5 text-green-600" fill="currentColor"
                                                                     viewBox="0 0 24 24"><path
                                                                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z"></path>
                                                                </svg>
                                                            </span>
                                                            <!--/Q icons-->
                                                        </button>
                                                        <!--/Q header-->
                                                        <!--Q Content-->
                                                        <div x-show="openQ">
                                                            <div x-show="Type==='closed'" class="flex flex-col mt-10">
                                                                <!--Answer Box-->
                                                                <div class="w-full flex flex-col gap-3">
                                                                    <!--Correct Answer-->
                                                                    <div class="flex flex-col justify-center gap-y-3">
                                                                        <!--the answer-->
                                                                        <div class="flex flex-col justify-center w-full ">
                                                                            <label class="block cursor-pointer select-none rounded-xl p-2 text-center bg-traivis-50 hover:bg-slate-100 font-bold transition-all">
                                                                                <div class="flex flex-row items-center gap-x-3">
                                                                                    <p class="px-3 mx-auto text-center text-base">
                                                                                        {{$answer->answer}}</p>
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                        <!--/the answer-->
                                                                        <!--Trainer Comment-->
                                                                        <div x-show="Comment"
                                                                             class="flex flex-col justify-center w-full group relative">
                                                                            <label class="block cursor-pointer select-none rounded-xl p-2 text-center bg-slate-50 hover:bg-slate-100 font-bold transition-all">
                                                                                <div class="flex flex-row items-center gap-x-3">
                                                                                    <p x-text="commentText"
                                                                                       class="px-3 mx-auto text-center text-base">
                                                                                        Your Comment</p>
                                                                                </div>
                                                                            </label>
                                                                            <!--Edit-->
                                                                            <div @click="Commenting = true, Comment = false"
                                                                                 :class="QSubmit ? 'hidden invisible' : ''"
                                                                                 class="absolute left-0 top-0 inset-0 pt-2 rounded-xl bg-traivis-500 text-center cursor-pointer opacity-0 group-hover:opacity-100 transition-all">
                                                                                <p class="mx-auto font-bold text-white">
                                                                                    Edit
                                                                                    Comment</p>
                                                                            </div>
                                                                            <!--/Edit-->
                                                                        </div>
                                                                        <!--/Trainer Comment-->
                                                                    </div>
                                                                    <!--/Correct Answer-->
                                                                    <!--Add Comment Button-->
                                                                    <div x-show="AddComment"
                                                                         class="w-full flex justify-center mt-3">
                                                                        <button @click="Commenting = true, AddComment = false"
                                                                                :class="QSubmit ? 'hidden' : ''"
                                                                                class="peer transition hover:scale-110 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm gap-x-2 justify-center text-white bg-traivis-500 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                                                                                type="button">
                                                                            <svg fill="currentColor" class="h-5 w-5"
                                                                                 viewBox="0 0 24 24">
                                                                                <path d="m12.836.029c-3.474-.235-6.875,1.036-9.328,3.492S-.211,9.378.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.862,19.096.454,12.836.029Zm-5.836,13.471c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Zm5,0c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Zm5,0c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Z"></path>
                                                                            </svg>
                                                                            <span class="whitespace-nowrap font-bold">Add Comment</span>
                                                                        </button>
                                                                    </div>
                                                                    <!--/Add Comment Button-->
                                                                    <!--Trainer Commenting area-->
                                                                    <div x-show="Commenting"
                                                                         :class="QSubmit ? 'hidden' : ''"
                                                                         class="flex flex-col justify-center gap-3"
                                                                         style="display: none;">
                                                                        <!--text Answer-->
                                                                        <div>
                                                                      <textarea x-model="commentText"
                                                                                class="peer rounded-md w-full"></textarea>
                                                                        </div>
                                                                        <!--/text Answer-->
                                                                        <!--Save Comment-->
                                                                        <div class="w-full flex justify-center mt-3">
                                                                            <button @click="Comment = true, Commenting = false"
                                                                                    wire:click="correct('{{$answer->id}}')"
                                                                                    :class="QSubmit ? 'hidden' : ''"
                                                                                    class="peer transition hover:scale-110 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm gap-x-2 justify-center text-white bg-traivis-500 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                                                                                    type="button">
                                                                                <svg fill="currentColor" class="h-5 w-5"
                                                                                     viewBox="0 0 24 24">
                                                                                    <path d="m12.836.029c-3.474-.235-6.875,1.036-9.328,3.492S-.211,9.378.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.862,19.096.454,12.836.029Zm-5.836,13.471c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Zm5,0c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Zm5,0c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Z"></path>
                                                                                </svg>
                                                                                <span class="whitespace-nowrap font-bold">Save Comment</span>
                                                                            </button>
                                                                        </div>
                                                                        <!--/Save Comment-->
                                                                    </div>
                                                                    <!--/Trainer Commenting area-->
                                                                </div>
                                                                <!--/Answer Box-->
                                                            </div>
                                                            <div x-show="Type==='opened'"
                                                                 class="flex flex-col mt-10 gap-y-3">
                                                                <!--Student Answer-->
                                                                <div class="flex flex-col justify-center gap-y-3">
                                                                    <!--Pending label-->
                                                                    <div x-show="!Corrected"
                                                                         class="bg-white font-semibold flex items-center gap-x-3 justify-center w-full text-center mx-auto">
                                                                        <svg class="w-5 h-5 text-yellow-500"
                                                                             fill="currentColor" viewBox="0 0 24 24">
                                                                            <path d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z"></path>
                                                                        </svg>
                                                                        <span class="">Answer is pending on your review</span>
                                                                    </div>
                                                                    <!--/Pending label-->
                                                                    <!--Pending answer-->
                                                                    <div class="flex flex-col justify-center w-full ">
                                                                        <label class="block cursor-pointer select-none rounded-xl p-2 text-center bg-traivis-50 hover:bg-slate-100 font-bold transition-all">
                                                                            <div class="flex flex-row items-center gap-x-3">
                                                                                <p class="px-3 mx-auto text-center text-base">
                                                                                    {{$answer->answer}}
                                                                                </p>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                    <!--/Pending answer-->
                                                                </div>
                                                                <!--/Student Answer-->
                                                                <!--Corrected-->
                                                                <div x-show="Corrected"
                                                                     class="w-full flex flex-col gap-3">
                                                                    <!--Trainer answer-->
                                                                    <div x-show="Comment"
                                                                         class="flex flex-col justify-center w-full group relative">
                                                                        <label class="block cursor-pointer select-none rounded-xl p-2 text-center bg-slate-50 hover:bg-slate-100 font-bold transition-all">
                                                                            <div class="flex flex-row items-center gap-x-3">
                                                                                <p x-text="commentText"
                                                                                   class="px-3 mx-auto text-center text-base">
                                                                                    Your Comment</p>
                                                                            </div>
                                                                        </label>
                                                                        <!--Edit-->
                                                                        <div @click="Corrected = false"
                                                                             :class="QSubmit ? 'hidden invisible' : ''"
                                                                             class="absolute left-0 top-0 inset-0 pt-2 rounded-xl bg-traivis-500 text-center cursor-pointer opacity-0 group-hover:opacity-100 transition-all">
                                                                            <p class="mx-auto font-bold text-white">
                                                                                Edit
                                                                            </p>
                                                                        </div>
                                                                        <!--/Edit-->
                                                                    </div>
                                                                    <!--/Trainer answer-->

                                                                    <!--Edit Button-->
                                                                    <!--<div class="w-full flex justify-center mt-10">
                                                                        <button @click="Answer = true, Corrected = false" :class="QSubmit ? 'hidden' : ''"
                                                                                class="peer transition hover:scale-110 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm gap-x-2 justify-center text-white bg-traivis-500 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500" type="button" >
                                                                            <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24"><path d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z"/><path d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z"/></svg>
                                                                            <span class="whitespace-nowrap font-bold">Edit</span>
                                                                        </button>
                                                                    </div>-->
                                                                    <!--/Edit Button-->

                                                                </div>
                                                                <!--/Corrected-->
                                                                <!--Correcting-->
                                                                <div x-show="!Corrected"
                                                                     class="flex flex-col justify-center gap-3 rounded-lg border border-slate-300 hover:bg-slate-50 focus-within:bg-slate-50 hover:border-slate-400 focus-within:border-slate-400 px-5 transition-all">
                                                                    <!--Score-->
                                                                    <div class="flex flex-wrap w-full py-5 justify-evenly">
                                                                        <div class="flex items-center ">
                                                                            <input x-model="Status"
                                                                                   id="Wrong" value="0"
                                                                                   name="Correcting"
                                                                                   type="radio"
                                                                                   class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 focus:ring-2  ">
                                                                            <label for="Wrong"
                                                                                   class="ml-2 text-sm font-medium text-gray-900 ">Wrong</label>
                                                                        </div>
                                                                        <div class="flex items-center ">
                                                                            <input x-model="Status"
                                                                                   id="Correct" value="1"
                                                                                   name="Correcting"
                                                                                   type="radio"
                                                                                   class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2  ">
                                                                            <label for="Correct"
                                                                                   class="ml-2 text-sm font-medium text-gray-900 ">Right</label>
                                                                        </div>
                                                                        <div class="relative group">
                                                                            <input x-model="Score" id="Score"
                                                                                   required=""
                                                                                   type="number" max="10" min="0"
                                                                                   class="pr-0 h-10 w-[120px] rounded-lg mt-1 sm:truncate border-gray-300 focus:border-traivis-400 transition-colors peer">
                                                                            <label for="Score"
                                                                                   class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center group-focus-within:text-xs peer-valid:text-xs group-focus-within:top-2 peer-valid:top-2 group-focus-within:-translate-y-full peer-valid:-translate-y-full peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                                                                                Score</label>
                                                                            <p class="absolute right-5 top-3">/ 10</p>
                                                                        </div>
                                                                    </div>
                                                                    <!--/Score-->
                                                                    <!--Correct text-->
                                                                    <div>
                                                                    <textarea x-model="commentText" id="15"
                                                                              class=" rounded-md w-full border-slate-300 ring-0 focus:ring-0 focus:border-green-600"></textarea>
                                                                    </div>
                                                                    <!--/Correct text-->
                                                                    <!--Save Button-->
                                                                    <div class="w-full flex justify-center my-3">
                                                                        <button @click="Corrected = true"
                                                                                wire:click="correct('{{$answer->id}}')"
                                                                                :class="QSubmit ? 'hidden' : ''"
                                                                                class="peer transition hover:scale-110 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm gap-x-2 justify-center text-white bg-traivis-500 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                                                                                type="button">
                                                                            <svg fill="currentColor" class="h-5 w-5"
                                                                                 x="0px"
                                                                                 y="0px" viewBox="0 0 465.822 465.822"
                                                                                 style="enable-background:new 0 0 465.822 465.822;"
                                                                                 xml:space="preserve"><g>
                                                                                    <path d="M5.988,289.981l88.875,88.875c24.992,24.984,65.504,24.984,90.496,0l274.475-274.475c8.185-8.475,7.95-21.98-0.525-30.165   c-8.267-7.985-21.374-7.985-29.641,0L155.194,348.691c-8.331,8.328-21.835,8.328-30.165,0l-88.875-88.875   c-8.475-8.185-21.98-7.95-30.165,0.525C-1.996,268.608-1.996,281.714,5.988,289.981L5.988,289.981z"></path>
                                                                                </g>
                                                                            </svg>
                                                                            <span class="whitespace-nowrap font-bold">Save</span>
                                                                        </button>
                                                                    </div>
                                                                    <!--/Save Button-->
                                                                </div>
                                                                <!--/Correcting-->
                                                            </div>
                                                        </div>
                                                        <!--/Q Content-->
                                                    </div>
                                                </div>
                                                <!--/Q2 - Text-Choices-->
                                            @endforeach
                                        @endif
                                    </div>
                                    <!--/Questions-->
                                </div>
                                <!--/ Questions content-->
                                <!--End devider-->
                                <div class="h-screen">
                                    <p class="text-center">End of Content</p>
                                </div>
                                <!--/End devider-->
                            </div>
                            <!--/Content-->
                        </div>
                        <!--END Quiz Content -->
                    </div>
                </div>
                <!--END popup content -->
            </div>
        </div>
    </section>
</div>
