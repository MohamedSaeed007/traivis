<div class="w-full">
    <!----- New Task popup----------->
    <div class="flex items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

        <!-- popup content-->
        <div
            class="relative my-8 inline-block w-full w-full transform rounded-lg bg-white p-4 text-left align-middle transition-all">

            <!-- label-->
            <div class="flex items-center justify-center">
                <p
                    class="absolute -top-6 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold group-hover:border-traivis-400">
                    <svg fill="currentColor" class="mr-3 h-8" height="512" viewBox="0 0 24 24"
                        width="512">
                        <path d="m10 23a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1z"></path>
                        <path d="m1 20h6a1 1 0 0 0 0-2h-6a1 1 0 0 0 0 2z"></path>
                        <path d="m1 16h4a1 1 0 0 0 0-2h-4a1 1 0 0 0 0 2z"></path>
                        <path
                            d="m12 0a12 12 0 0 0 -12 12c0 .061.008.12.009.181a2.966 2.966 0 0 1 .991-.181h4a2.99 2.99 0 0 1 2.78 4.116 2.975 2.975 0 0 1 2 4 2.949 2.949 0 0 1 2.039 3.875c.061 0 .12.009.181.009a12 12 0 0 0 0-24zm3.707 15.707a1 1 0 0 1 -1.414 0l-3-3a1 1 0 0 1 -.293-.707v-5a1 1 0 0 1 2 0v4.586l2.707 2.707a1 1 0 0 1 0 1.414z">
                        </path>
                    </svg>
                    New Task
                </p>
            </div>
            <!--/ label-->

            <!---->
            <div class="">
                <div class="h-full w-full overflow-y-auto">
                    <div class="container mx-auto w-full rounded-lg bg-white p-3">

                        <!-- header-->
                        <!--                                <div class="flex flex-row items-center justify-between">-->
                        <div class="flex flex-col gap-y-4 pt-5">
                            <!--                                        <div class="flex-shrink-0">-->
                            <!--                                            <img alt=""-->
                            <!--                                                 class="h-10 w-10 rounded-full bg-cover"-->
                            <!--                                                 src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">-->
                            <!--                                        </div>-->

                            <!--                                        <div class="ml-4">-->
                            <!--                                            <a class="whitespace-nowrap font-medium text-gray-900"-->
                            <!--                                               href="#">Lindsay Walton</a>-->
                            <div class="group relative">
                                <select wire:model.lazy="task.instructor_id"
                                    class="peer mt-1 w-full rounded-lg border-gray-300 transition-colors focus:border-traivis-400 sm:truncate">
                                    <option readonly selected value="">Please Select Assigned
                                        Freelancer</option>
                                    @foreach ($freelancers as $freelancer)
                                        <option value="{{ $freelancer->id }}">
                                            {{ $freelancer->business_name }}</option>
                                    @endforeach
                                </select>
                                @error('task.instructor_id')
                                    <span class="bg-red-100 text-red-800">{{ $message }}</span>
                                @enderror

                            </div>

                        </div>
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--END  header-->

                        <!-- New Task fields-->
                        <div class="flex flex-col gap-y-4 pt-5">

                            <!--Name -->
                            <div class="group relative">
                                <!--                                        <input wire:model="task.task_name" class="peer mt-1 w-full rounded-lg border-gray-300 transition-colors focus:border-traivis-400 sm:truncate" id="textN" required-->
                                <!--                                               type="text">-->
                                <select wire:model.lazy="task.task_name"
                                    class="peer mt-1 w-full rounded-lg border-gray-300 transition-colors focus:border-traivis-400 sm:truncate">
                                    <option readonly selected value="">Please Select Task Type
                                    </option>
                                    @foreach ($taskTypes as $type)
                                        <option value="{{ $type['value'] }}">{{ $type['value'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <label
                                    class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                    for="textN">
                                    Task Name</label>
                                @error('task.task_name')
                                    <span class="bg-red-100 text-red-800">{{ $message }}</span>
                                @enderror

                            </div>
                            <!--/ Name -->

                            <!--Task Description-->
                            <div class="group relative">
                                <textarea
                                    class="peer mt-1 w-full resize-y rounded-lg border-gray-300 transition-colors focus:border-traivis-400"
                                    cols="100" id="TsskDesc" maxlength="" required rows="4" type="text"
                                    wire:model.lazy="task.task_desc"></textarea>
                                <label
                                    class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                    for="TsskDesc">
                                    Task Description </label>
                                @error('task.task_desc')
                                    <span class="bg-red-100 text-red-800">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--Task Description-->

                            <!--Target Date-->
                            <div class="group relative">
                                <input wire:model.lazy="task.target_date"
                                    class="peer mt-1 h-10 w-full rounded-lg border-gray-300 text-white transition-colors valid:text-gray-500 focus-within:text-gray-500 focus:border-traivis-400 sm:truncate"
                                    id="Date" required type="date">
                                <label
                                    class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                    for="Date">
                                    Target Date</label>
                                @error('task.target_date')
                                    <span class="bg-red-100 text-red-800">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--/Target Date-->
                        </div>
                        <!--END New Task fields-->

                        <!--Send-->
                        <div class="mt-5 flex justify-between">
                            <button wire:click="$emit('closeModal')"
                                class="group inline-flex justify-end gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500">
                                <span>Cancel</span>
                            </button>
                            <button wire:click="AddTask"
                                class="group inline-flex justify-end gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500"
                                type="button">
                                <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                    height="512" viewBox="0 0 24 24" width="512">
                                    <path d="m9 24h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2z"></path>
                                    <path d="m7 20h-6a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2z"></path>
                                    <path d="m5 16h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z"></path>
                                    <path
                                        d="m13 23.955a1 1 0 0 1 -.089-2 10 10 0 1 0 -10.87-10.865 1 1 0 0 1 -1.992-.18 12 12 0 0 1 23.951 1.09 11.934 11.934 0 0 1 -10.91 11.951c-.03.003-.061.004-.09.004z">
                                    </path>
                                    <path
                                        d="m12 6a1 1 0 0 0 -1 1v5a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414l-2.707-2.707v-4.586a1 1 0 0 0 -1-1z">
                                    </path>
                                </svg>
                                <span>Create </span>
                            </button>
                        </div>
                        <!--/Send-->

                    </div>
                </div>
            </div>
            <!---->

        </div>
        <!--END popup content -->

    </div>

    <!-----/ New Task popup----------->
</div>
