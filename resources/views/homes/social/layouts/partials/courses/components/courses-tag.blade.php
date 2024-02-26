<div class="mt-2 sm:mt-0 sm:ml-4">
    <div class="-m-1 flex flex-wrap items-center">
                <span class="m-1 inline-flex rounded-full border items-center py-1.5 pl-3 pr-2 text-sm font-medium transition-colors {{$class??''}}">
                  <span>{{__($text??'')}}</span>
                  <button type="button" wire:click="removeItemFrom{{$filterName}}Filters({{$item->id}})"
                          class="flex-shrink-0 ml-1 h-4 w-4 p-1 rounded-full inline-flex transition-colors {{$class??''}}">
                    <span class="sr-only">{{__('Remove filter for')}} {{__($text??'')}}</span>
                    <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                      <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7"></path>
                    </svg>
                  </button>
                </span>
    </div>
</div>