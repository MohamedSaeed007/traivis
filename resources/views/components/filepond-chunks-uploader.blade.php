<div wire:ignore x-data="{
    init() {
        const pond = window.FilePond.create($refs.input);
        pond.setOptions({
                    imagePreviewMaxFileSize: '500KB',
                    maxParallelUploads: 1,
                    chunkUploads: true,
                    chunkForce: true,
                    server: {
                        url: '/{{config('filepond.route_prefix')}}/api',
                        process: {
                            url: '/process',
                        },
                        load: (source, load, error, progress, abort, headers) => {
                            let myRequest = new Request(source);

                            fetch(myRequest).then(function (response) {
                                response.blob().then(function (myBlob) {
                                    load(myBlob)
                                });
                            });
                        },
                        revert: '/process',
                        restore: '/restore?id=',
                        remove: (source, load, error) => {
                        },
                        patch: '?patch=',
                        fetch: {
                            method: 'HEAD'
                        },
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    },
                    beforeRemoveFile: function (item) {
                        return confirm('Remove \'' + item.file.name + '\'?');
            }
        });
    }
}">
    <fieldset id="fieldset" {{ $attributes }} x-ref="input">
        <input type="file" name="filepond" wire:model="{{ $model }}" required />
    </fieldset>
</div>