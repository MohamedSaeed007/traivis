@props([
    'placeholder' => NULL,
    'options' => NULL,
    'model' => NULL,
])
<div wire:model="{{ $model }}" style="width: 100%">
    <div x-data="{ value: @entangle($attributes->wire('model')) }"
         x-init="$($refs.input).select2(); $($refs.input).trigger('change'); $($refs.input).on('change', () => { $dispatch('input', $($refs.input).val()) });
                    $watch('value', value => { $($refs.input).val(value).trigger('change'); });">
        <div wire:ignore>
            <select x-ref="input" x-bind:value="value" style="width: 100%" multiple="multiple">
                @if ($placeholder)
                    <option disabled value="">{{ $placeholder }}</option>
                @endif
                {{ $slot }}
            </select>
        </div>
    </div>
</div>
