<div>

    {{--    @section('styles')--}}
    {{--        <link rel="stylesheet" href="{{ asset(mix('css/filepond.css'), true) }}">--}}
    {{--    @endsection--}}
    <x-input.file-upload text="text here" />

    <input type="file" id="myFiles">

    @if ($errors->any())
        <div class="relative mb-4 rounded border border-red-300 bg-red-200 px-3 py-3 text-red-800">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="h-1 w-full bg-traivis-500"></div>

    @foreach ($uploads as $i => $single_upload)
        <div class="ml-5 mr-5 mt-2 rounded-full bg-traivis-50 pb-2 pl-4 pr-4 pt-2">
            <label class="flow-root">
                <div class="float-left">{{ $single_upload['fileName'] }}</div>
                <div class="float-right">{{ number_format($single_upload['progress'], 2) }}%</div>
            </label>

            <div class="w-full rounded-full bg-gray-200 ">
                <div class="rounded-full bg-traivis-600 p-0.5 text-center text-xs font-medium leading-none text-traivis-100"
                     style="width: {{ number_format($single_upload['progress'], 2) }}%">
                    {{ number_format($single_upload['progress'], 2) }}%
                </div>
            </div>
        </div>
    @endforeach
    <script>
      const filesSelector = document.querySelector("#myFiles");
      let chnkStarts = [];
      let cancelUpload = false;
      filesSelector.addEventListener("change", () => {
        const fileList = [...filesSelector.files];
        const unixTimestamp = Math.floor(Date.now() / 1000);
        fileList.forEach((file, index) => {
            @this.
          set("uploads." + index + ".fileName", file.name);
            @this.
          set("uploads." + index + ".fileTempName", file.name + "." +
            unixTimestamp + ".upload-in-progress");
            @this.
          set("uploads." + index + ".fileSize", file.size);
            @this.
          set("uploads." + index + ".progress", 0);
          chnkStarts[index] = 0;
          livewireUploadChunk(index, file);
        });
      });

      function livewireUploadChunk(index, file) {
        // End of chunk is start + chunkSize OR file size, whichever is greater
        const chunkEnd = Math.min(chnkStarts[index] + @js($chunkSize), file.size);
        const chunk = file.slice(chnkStarts[index], chunkEnd);

          @this.
        upload("uploads." + index + ".fileChunk", chunk, (n) => {
        }, () => {
        }, (e) => {
          if (e.detail.progress == 100) {
            chnkStarts[index] =
              Math.min(chnkStarts[index] + @js($chunkSize), file.size);

            if (chnkStarts[index] < file.size) {
              let _time = Math.floor((Math.random() * 2000) + 1);
              console.log("sleeping ", _time, "before next chunk upload");
              setTimeout(livewireUploadChunk, _time, index, file);
            }
          }
        });
      }
    </script>
    {{--    @dump($uploads) --}}
</div>
