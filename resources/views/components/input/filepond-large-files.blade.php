@props([
    'files'=>[],
    'required'=>false,
    'disabled'=>false
])
@php
    if (isset($attributes['accept'])){
        $accept_types = explode(',', $attributes['accept']);
    } else {
        $accept_types =[];
    }
@endphp
<div {{ $attributes->merge(['class' =>  empty($files) ? ($required ?  'border-red-500 hover:border-red-700' :'border-gray-300 hover:border-gray-400') : 'border-green-500 hover:border-green-700' ]) }}>
    <div
            wire:ignore
            class="relative"
            x-data="{
    createFileObject: function(file) {

        return file ? {
            id: file.id,
            fileExtension: file.fileExtension,
            fileSize: file.fileSize,
            fileType: file.fileType,
            filename: file.filename,
            filenameWithoutExtension: file.filenmeWithoutExtension,
            serverId: file.serverId
        } : '';
    },
    isUuid: function(string) {
        return string.match(/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i) !== null
    },
    isValidUrl: function(string) {
        try {
            new URL(string); return true;
        } catch {
            return false;
        }
    }
}"
            x-init="
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginFilePoster,
            FilePondPluginFileValidateSize,
            FilePondPluginFileValidateType,
        );

        FilePond.setOptions({
                    imagePreviewMaxFileSize: '500KB',
                    maxParallelUploads: 1,
                    chunkUploads: true,
                    chunkForce: true,
                    chunkRetryDelays: [500,1000,3000,7000],
                    server: {
                        url: '/{{config('filepond.route_prefix')}}/api',
                        process: {
                            url: '/process',
                        },
                        restore: {
                            method: 'HEAD',
                            url:'/restore?id='
                            },
{{--                        load: (source, load, error, progress, abort, headers) => {--}}
{{--                            let myRequest = new Request(source);--}}

{{--                            fetch(myRequest).then(function (response) {--}}
{{--                                response.blob().then(function (myBlob) {--}}
{{--                                    load(myBlob)--}}
{{--                                });--}}
{{--                            });--}}
{{--                        },--}}
{{--                        revert: '/process',--}}
                        revert: (uniqueFileId, load, error) => {
{{--                             console.log(uniqueFileId);--}}
{{--                             @this.removefile(uniqueFileId);--}}
                            // Should call the load method when done, no parameters required
                            load();
                        },
{{--                        remove: (source, load, error) => {--}}
{{--                                console.log(source);--}}
{{--                                    @this.removefile(createFileObject(file));--}}
{{--                            load();--}}
{{--                        },--}}

                        patch: '?patch=',
                        fetch: {
                            method: 'HEAD'
                            // method: 'GET'
                        },
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    },
                    beforeRemoveFile: function (item) {
                        if (item.serverId===null){
                            return true;
                        }

                        return confirm('Remove \'' + item.file.name + '\'?');
                    },
        });

        let pond = FilePond.create($refs.input,{
            files: @js($files),
            allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
            maxFileSize: '{{ $attributes['maxFileSize'] ?? '500mb'}}',
            {{--                    acceptedFileTypes2: @js($accept_types),--}}
            {{--                    acceptedFileTypes: ['video/mp4'],--}}

        });

        pond.on('processfile', async (error, file) => {
             if (error) {
                 console.log('Error in processfile');
                 return;
              }

              if (isValidUrl(file.serverId) || isUuid(file.serverId)){
                 return;
              }
              //@this.addFile(file);
              //console.log(createFileObject(file));
              let preview_url = await @this.add{{ucfirst($attributes['collection_name']??'')}}File(createFileObject(file));

{{--              file.setMetadata('poster', preview_url);--}}
        });
        pond.on('removefile', (error, file) => {
              if (error) {
                 console.log('Error in processfile');
                 return;
              }

              if (isUuid(file.getMetadata().uuid)){
                 @this.remove{{ucfirst($attributes['collection_name']??'')}}File(file.getMetadata().uuid);
              }
        });
    "
    >
        <x-svg-icons.fi-rr-rotate-right
                wire:loading
                wire:target="removeFile,addFile" class="h-5 w-5 animate-spin absolute top-1 right-1"/>
        <input type="file" x-ref="input" {{ $disabled ? 'disabled' : '' }}>
    </div>
</div>

