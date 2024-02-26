<x-dynamic-component :component="$getFieldWrapperView()" :id="$getId()" :label="$getLabel()"
    :label-sr-only="$isLabelHidden()" :helper-text="$getHelperText()" :hint="$getHint()" :hint-action="$getHintAction()"
    :hint-color="$getHintColor()" :hint-icon="$getHintIcon()" :required="$isRequired()" :state-path="$getStatePath()">
    <div>
        {{-- @dd($getState()) --}}
        @foreach ($getState() as $key => $feature)
        <div class="space-y-2">
            <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                <label class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                    for="mountedTableActionData.features.record-2.charges">
                    <span class="text-sm font-medium leading-4 text-gray-700 ">
                        {{ $feature['name'] }} Charges
                        <sup class="font-medium text-danger-700">*</sup>
                    </span>
                </label>
            </div>
            <div class="filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group">
                <div class="flex-1">
                    <input x-data="{}" wire:model.defer="mountedTableActionData.features.{{ $key }}.charges" type="number"
                        dusk="filament.forms.mountedTableActionData.features.{{ $key }}.charges"
                        id="mountedTableActionData.features.{{ $key }}.charges" inputmode="decimal" step="any" required=""
                        class="block w-full transition duration-75 rounded-lg shadow-sm outline-none focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70    border-gray-300 "
                        x-bind:class="{
            'border-gray-300': ! ('mountedTableActionData.features.{{ $key }}.charges' in $wire.__instance.serverMemo.errors),
            'dark:border-gray-600': ! ('mountedTableActionData.features.{{ $key }}.charges' in $wire.__instance.serverMemo.errors) &amp;&amp; true,
            'border-danger-600 ring-danger-600': ('mountedTableActionData.features.{{ $key }}.charges' in $wire.__instance.serverMemo.errors),
            'dark:border-danger-400': ('mountedTableActionData.features.{{ $key }}.charges' in $wire.__instance.serverMemo.errors) &amp;&amp; true,
        }">
                </div>



            </div>


        </div>
        @endforeach
    </div>
</x-dynamic-component>