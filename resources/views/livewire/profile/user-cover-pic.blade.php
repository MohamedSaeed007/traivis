<div class="relative">
    @if (get_class($user) == 'App\Models\User' && auth()->id() == $user->id)
        <div class="absolute top-1 -right-1">
            <button type="button"
                class="inline-flex items-center space-x-2 rounded-full rounded-r-none border border-transparent bg-traivis-500 px-3.5 py-2 pr-5 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                <label class="whitespace-nowrap font-bold">Cover pic
                    <input wire:model="cover_pic" class="hidden" type="file" x-cloak>
                </label>
            </button>

        </div>
        <p
            class="absolute left-0 top-1 flex max-w-xl items-center rounded-r-full bg-gray-500 px-4 py-1 text-white ring-1 ring-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="mr-2 flex h-5 w-5">
                <path
                    d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z">
                </path>
            </svg>
            Personal Profile

        </p>
    @endif
    <img class="h-32 w-full object-cover lg:h-48"
        src="{{ $user->cover_pic ?? 'https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80' }}"
        alt="">
</div>
