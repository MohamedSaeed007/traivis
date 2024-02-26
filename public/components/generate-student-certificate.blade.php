<div x-data="{ Certs: 'Grad', CustomGrad: false, TraivisGrad: false }">
    <p class="mb-3 font-bold">
        Certificate
    </p>
    <div class="flex flex-col justify-center gap-y-5">
        {{-- <div class="text-center text-lg font-semibold"> The student graduated
            <span class="font-bold text-green-600">{{ $attendance_ratio * 100 }}%</span>
        </div> --}}
        @if ($student->certificates->where('course_id',$course->id))
            <div class="font-bold text-green-600">
                Traivis certificate submitted and will provide the student.</div>
            @if ($customCertificateSubmitted)
                <div class="font-bold text-green-600">
                    Your certificate submitted and will provide the student.</div>
            @else
                <div class="text-center text-lg font-semibold">
                    If you need to add customize certificate ?
                </div>
                <div class="mx-auto flex flex-col justify-center gap-y-5">
                    <p class="text-center text-lg font-semibold">
                        Please upload your certificate here </p>
                    <div class="flex items-center justify-evenly">
                        {{-- <button @click="CustomGrad = true, Certs = false" type="button"
                        class="inline-flex h-8 w-fit items-center justify-center rounded-full border border-transparent bg-blue-500 px-5 py-2 font-bold text-white shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Yes
                    </button> --}}
                        <input type="file" wire:model="custom_certificate">
                    </div>
                </div>
            @endif
        @else
            <button @click="TraivisGrad = true" x-show="TraivisGrad == false" type="button"
                class="mx-auto inline-flex h-8 w-fit items-center justify-center rounded-full border border-transparent bg-blue-500 px-5 py-2 font-bold text-white shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Graduate
            </button>
            <div x-show="TraivisGrad == true" class="mx-auto flex flex-col justify-center gap-y-5">
                <p class="text-center text-lg font-semibold">
                    are you sure that you checked all attendance
                    <br> rate , quizzes and assignments and
                    <br> want to graduate student ?
                </p>
                <div class="flex items-center justify-evenly">
                    <button @click="TraivisGrad = false" type="button"
                        class="inline-flex h-8 w-fit items-center justify-center rounded-full border border-transparent bg-slate-100 px-5 py-2 font-bold text-slate-500 shadow-sm hover:bg-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        No
                    </button>
                    <button wire:click="graduate" type="button"
                        class="inline-flex h-8 w-fit items-center justify-center rounded-full border border-transparent bg-blue-500 px-5 py-2 font-bold text-white shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Yes
                    </button>
                </div>
            </div>
        @endif
        {{-- <div x-show="Certs === 'Traivis'" class="mx-auto flex flex-col justify-center gap-y-5">
            <p class="text-center text-lg font-semibold">
                Do you want to add your customize certificate? </p>
            <div class="flex items-center justify-evenly">
                <button @click="Certs = 'NoCert'" type="button"
                    class="inline-flex h-8 w-fit items-center justify-center rounded-full border border-transparent bg-slate-100 px-5 py-2 font-bold text-slate-500 shadow-sm hover:bg-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    No
                </button>
                <button @click="Certs = 'Custom'" type="button"
                    class="inline-flex h-8 w-fit items-center justify-center rounded-full border border-transparent bg-blue-500 px-5 py-2 font-bold text-white shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Yes
                </button>
            </div>
        </div> --}}
        {{-- <div x-show="Certs === 'Custom'" class="mx-auto flex flex-col justify-center gap-y-5">
            <p class="text-center text-lg font-semibold">
                Please upload your certificate here </p>
            <div class="flex items-center justify-evenly">
                <button @click="CustomGrad = true, Certs = false" type="button"
                    class="inline-flex h-8 w-fit items-center justify-center rounded-full border border-transparent bg-blue-500 px-5 py-2 font-bold text-white shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Yes
                </button>
            </div>
        </div> --}}
        {{-- <div x-show="TraivisGrad" class="font-bold text-green-600">
            Traivis certificate submitted and will provide the student.</div>
        <div x-show="CustomGrad" class="font-bold text-green-600">
            Your certificate submitted and will provide the student.</div> --}}
    </div>
</div>
