<div>
    <button
        wire:click="$emitTo('publish-course-teaser-campaign', 'openModal',{{ json_encode(['course_id' => $course_id]) }})"
        class="justify-center mx-auto flex" href="#" type="button">
        <svg class="w-6 h-6" height="512" viewbox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
            <g data-name="01 align center" id="_01_align_center">
                <path
                    d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                </path>
                <path d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                </path>
            </g>
        </svg>
    </button>
</div>