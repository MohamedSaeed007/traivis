<div class="w-full">

    <form wire:submit.prevent="addSection" style="margin: 20px">

        <input style="margin-bottom: 20px"
            class="mt-2 h-10 w-full rounded-full border-0 bg-transparent text-2xl font-bold placeholder-white drop-shadow-md transition-colors hover:bg-white hover:bg-opacity-50 focus:bg-white focus:text-gray-700 focus:placeholder-gray-700 sm:truncate sm:text-3xl"
            placeholder="Section Name ..." wire:model.debounce="section.section_name">
        <br>

        <button style="display: inline;color: white;background-color: #0a6aa1" type="submit"
            class="inline-flex items-center space-x-2 rounded-full border border-transparent border-gray-400 bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">

            <span style="text-align: center;margin: auto">Add Section</span>
        </button>
        <span
            style="display: inline;cursor: pointer;height: 10px !important;color: white;background-color: #993e3e"
            class="inline-flex items-center rounded-full border border-transparent border-gray-400 bg-white px-3.5 py-2 focus:ring-red-500 focus:ring-offset-1"
            wire:click="$emit('closeModal')" value="Close"> Cancel </span>
    </form>

</div>
