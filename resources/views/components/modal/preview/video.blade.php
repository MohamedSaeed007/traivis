<div {{ $attributes }}>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div x-data="{ vidModal : false, vidModalImgSrc : '', vidModalImgDesc : '' }"
    x-init="xInitVideoModal()"
        @vid-modal.window="vidModal = true; vidModalImgSrc = $event.detail.vidModalImgSrc; vidModalImgDesc = $event.detail.vidModalImgDesc;"
        id="vidModal" @keydown.window.escape="vidModal=false">
        <div x-cloak {{-- x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90" --}} x-show="vidModal"
            @click.outside="vidModalImgSrc = ''" @click.stop="vidModal=false"
            class="p-2 fixed w-full h-full inset-0 z-50 overflow-hidden flex justify-center items-center bg-black">
            <div class="w-full h-full">
                <div class="z-50">
                    <button @click="vidModal = false"
                        class="absolute right-0.5 top-0.5 pt-2 pr-2 outline-none focus:outline-none">
                        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </button>
                </div>
                <template x-if="vidModal">
                    {{-- <iframe allowfullscreen class="w-full h-full maspect-video" :src="vidModalImgSrc"
                        frameborder="0" allow="autoplay; encrypted-media"></iframe> --}}
                    <video id="my-video-player" class="video-js w-full h-full maspect-video" controls preload="true"
                        muted="true" autoplay="true">
                        <source :src="vidModalImgSrc" type="video/mp4">
                    </video>
                </template>
            </div>
        </div>
    </div>
<script>
    function xInitVideoModal(){
        console.log('modal here');
    }
</script>
</div>