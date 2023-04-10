<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
    /**
     * @param Illuminate\Http\UploadedFile
     * @param string $folder
     * @param string $filename
     * @param string $disk
     *
     * @return File
     */
    public function uploadSingle(UploadedFile $uploadedFile, $folder = null, $filename = null, $disk = 'local')
    {
        $name = $filename ?? Str::random(25) . '.' . $uploadedFile->getClientOriginalExtension();
        $options = [
            'visibility' => 'public'
        ];
        $file = Storage::putFileAs($folder, $uploadedFile, $name, $options);
        return $file;
    }
}
