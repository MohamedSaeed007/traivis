<div
        wire:ignore
        x-data
        x-init="
        window.FilePond.setOptions({
            allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
            server: {
                process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)
                },
                revert: (filename, load) => {
                    @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
                },
            },
        });
        window.FilePond.create($refs.input);
    "
>
    <input type="file" x-ref="input">
</div>
@once
    @push('header_styles')
        <link rel="stylesheet" href="{{ asset(mix('css/filepond.css'), true) }}">
    @endpush
@endonce
