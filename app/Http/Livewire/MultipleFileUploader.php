<?php

namespace App\Http\Livewire;

use App\Models\Assignment;
use App\Models\Model;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\TemporaryUploadedFile;
use Illuminate\Support\Facades\Storage;
use Log;

class MultipleFileUploader extends Component
{
    use WithFileUploads;

    /** @var Assignment $model */
    public $model;
    public $uploads = [];
    //    public $chunkSize = 5_000_000; // 5MB
    public $chunkSize = 5_242_880; // 5MB

    public function updatedUploads($value, $key)
    {
        [$index, $attribute] = explode('.', $key);
        if ($attribute == 'fileChunk') {
            $fileDetails = $this->uploads[intval($index)];

            // Temp File
            $fileTempName = $fileDetails['fileTempName'];
            $tempPath = Storage::path('/livewire-tmp/' . $fileTempName);
            // Final File
            $fileName = $fileDetails['fileName'];
            $finalPath = Storage::path('/livewire-tmp/' . $fileName);

            // Chunk File
            /** @var TemporaryUploadedFile $fileChunk */
            $fileChunk = $fileDetails['fileChunk'];

            $chunkName = $fileChunk->getFileName();
            $chunkPath = Storage::path('/livewire-tmp/' . $chunkName);

            $chunk = fopen($chunkPath, 'rb');
            $buff = fread($chunk, $this->chunkSize);
            fclose($chunk);

            // Merge Together
            $final = fopen($tempPath, 'ab');
            fwrite($final, $buff);
            fclose($final);
            unlink($chunkPath);

            // Progress
            $curSize = Storage::size('/livewire-tmp/' . $fileTempName);
            $this->uploads[$index]['progress'] = ($curSize / $fileDetails['fileSize']) * 100;
            if ($this->uploads[$index]['progress'] == 100) {
                //                rename($tempPath, $finalPath);
                $this->uploads[$index]['fileRef'] = TemporaryUploadedFile::createFromLivewire(
                    '/' . $fileDetails['fileTempName']
                );
                $this->model->addMedia($tempPath)->toMediaCollection('resources');
                $this->emitUp('upload-done');
            }
        }
    }

    public function render()
    {
        return view('livewire.multiple-file-uploader');
    }
}
