<div>
    <button type="button" wire:click.prevent="likeToParentPost"
        class="group/act inline-flex items-center gap-x-2 rounded-full outline-none ring-0 transition-all hover:text-traivis-500 focus:outline-none focus:ring-0">

        <!-- Heroicon name: solid/thumb-up -->
        @if ($likeCount > 0)
            <svg viewBox="0 0 24 24" aria-hidden="true" class="h-5 w-5 text-traivis-500" fill="currentColor">
                <path
                    d="M22.773,7.721A4.994,4.994,0,0,0,19,6H15.011l.336-2.041A3.037,3.037,0,0,0,9.626,2.122L8,5.417V21H18.3a5.024,5.024,0,0,0,4.951-4.3l.705-5A4.994,4.994,0,0,0,22.773,7.721Z" />
                <path d="M0,11v5a5.006,5.006,0,0,0,5,5H6V6H5A5.006,5.006,0,0,0,0,11Z" />
            </svg>
        @else
            <svg viewbox="0 0 24 24" aria-hidden="true" class="block h-5 w-5 group-hover/act:hidden"
                fill="currentColor">
                <path
                    d="M22.773,7.721A4.994,4.994,0,0,0,19,6H15.011l.336-2.041A3.037,3.037,0,0,0,9.626,2.122L7.712,6H5a5.006,5.006,0,0,0-5,5v5a5.006,5.006,0,0,0,5,5H18.3a5.024,5.024,0,0,0,4.951-4.3l.705-5A5,5,0,0,0,22.773,7.721ZM2,16V11A3,3,0,0,1,5,8H7V19H5A3,3,0,0,1,2,16Zm19.971-4.581-.706,5A3.012,3.012,0,0,1,18.3,19H9V7.734a1,1,0,0,0,.23-.292l2.189-4.435A1.07,1.07,0,0,1,13.141,2.8a1.024,1.024,0,0,1,.233.84l-.528,3.2A1,1,0,0,0,13.833,8H19a3,3,0,0,1,2.971,3.419Z">
                </path>
            </svg>

            <svg viewBox="0 0 24 24" aria-hidden="true" class="hidden h-5 w-5 group-hover/act:block"
                fill="currentColor">
                <path
                    d="M22.773,7.721A4.994,4.994,0,0,0,19,6H15.011l.336-2.041A3.037,3.037,0,0,0,9.626,2.122L8,5.417V21H18.3a5.024,5.024,0,0,0,4.951-4.3l.705-5A4.994,4.994,0,0,0,22.773,7.721Z" />
                <path d="M0,11v5a5.006,5.006,0,0,0,5,5H6V6H5A5.006,5.006,0,0,0,0,11Z" />
            </svg>
        @endif

        <span class="">{{ $likeCount ?? $post->likes_count }}
        </span>
        <span class="sr-only">likes</span>

    </button>

    <button type="button" wire:click.prevent="disLikeToParentPost"
        class="group/act inline-flex items-center gap-x-2 rounded-full outline-none ring-0 transition-all hover:text-traivis-500 focus:outline-none focus:ring-0">

        <!-- Heroicon name: solid/thumb-up -->
        @if ($disLikeCount > 0)
            <svg viewBox="0 0 24 24" aria-hidden="true" class="h-5 w-5 text-traivis-500"
                fill="currentColor">
                <path
                    d="M23.951,12.3l-.705-5A5.024,5.024,0,0,0,18.3,3H8V18.584l1.626,3.3a3.038,3.038,0,0,0,5.721-1.838L15.011,18H19a5,5,0,0,0,4.951-5.7Z" />
                <path d="M0,8v5a5.006,5.006,0,0,0,5,5H6V3H5A5.006,5.006,0,0,0,0,8Z" />
            </svg>
        @else
            <svg viewbox="0 0 24 24" aria-hidden="true" class="block h-5 w-5 group-hover/act:hidden"
                fill="currentColor">
                <path
                    d="M23.951,12.3l-.705-5A5.024,5.024,0,0,0,18.3,3H5A5.006,5.006,0,0,0,0,8v5a5.006,5.006,0,0,0,5,5H7.712l1.914,3.878a3.037,3.037,0,0,0,5.721-1.837L15.011,18H19a5,5,0,0,0,4.951-5.7ZM5,5H7V16H5a3,3,0,0,1-3-3V8A3,3,0,0,1,5,5Zm16.264,9.968A3,3,0,0,1,19,16H13.833a1,1,0,0,0-.987,1.162l.528,3.2a1.024,1.024,0,0,1-.233.84,1.07,1.07,0,0,1-1.722-.212L9.23,16.558A1,1,0,0,0,9,16.266V5h9.3a3.012,3.012,0,0,1,2.97,2.581l.706,5A3,3,0,0,1,21.264,14.968Z">
                </path>
            </svg>

            <svg viewBox="0 0 24 24" aria-hidden="true" class="hidden h-5 w-5 group-hover/act:block"
                fill="currentColor">
                <path
                    d="M23.951,12.3l-.705-5A5.024,5.024,0,0,0,18.3,3H8V18.584l1.626,3.3a3.038,3.038,0,0,0,5.721-1.838L15.011,18H19a5,5,0,0,0,4.951-5.7Z" />
                <path d="M0,8v5a5.006,5.006,0,0,0,5,5H6V3H5A5.006,5.006,0,0,0,0,8Z" />
            </svg>
        @endif

        <span class="">{{ $disLikeCount ?? $post->dis_likes_count }}
        </span>
        <span class="sr-only">dislikes</span>

    </button>
</div>
