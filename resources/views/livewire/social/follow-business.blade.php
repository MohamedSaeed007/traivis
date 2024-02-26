
@if($business_id !=auth()->user()->id && ( ($userType=="user") && $urlSegment=="p") ||
 ( ($userType !="user") && $urlSegment=="b" && $business && $business->created_by != auth()->id() )  )

<button type="button" wire:click="follow_business"
class="group/but my-3 inline-flex rounded-full justify-center px-4 py-2 shadow-sm text-sm font-medium border
                           border-gray-300 text-gray-500 bg-white focus:outline-none focus:ring-2 focus:ring-traivis-300
                           group-hover:border-traivis-400 hover:bg-traivis-500 hover:text-white transition-all">

@switch($userType)
    @case('user')
        <x-svg-icons.fi-rr-user-add
            class="-ml-1 mr-2 h-5 w-5 transition-all  group-hover:text-traivis-500 group-hover/but:text-white" />
        <span class="transition-all  group-hover:text-traivis-500 group-hover/but:text-white">{{$connection_status}}</span>
    @break

    @case('instructor')
            <x-svg-icons.fi-rr-instructor-plus
            class="-ml-1 mr-2 h-5 w-5 transition-all  group-hover:text-traivis-500 group-hover/but:text-white" />

            <span class="transition-all  group-hover:text-traivis-500 group-hover/but:text-white">{{$status}}</span>
    @break

    @case('institute')
             <x-svg-icons.fi-rr-institute-plus
            class="-ml-1 mr-2 h-5 w-5 transition-all  group-hover:text-traivis-500 group-hover/but:text-white" />

            <span class="transition-all  group-hover:text-traivis-500 group-hover/but:text-white">{{$status}}</span>
    @break

    @case('enterprise')
            <x-svg-icons.fi-rr-enterprise-plus
            class="-ml-1 mr-2 h-5 w-5 text-gray-400 group-hover:text-white" />

            <span>{{$status}}</span>
    @break
@endswitch

</button>

@endif