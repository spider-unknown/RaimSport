<?php
/**
 * Created by PhpStorm.
 * User: air
 * Date: 10.12.2019
 * Time: 12:18
 */

namespace App\Services\impl;


use App\Services\FileService;
use App\Utils\StaticConstants;
use FFMpeg\Coordinate\TimeCode;
use FFMpeg\FFMpeg;
use FFMpeg\FFProbe;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
//use FFMpeg\FFMpeg;
//use FFMpeg\FFProbe;
//use FFMpeg\Coordinate\TimeCode;

class FileServiceImpl implements FileService
{
    public function store(UploadedFile $image, string $path): string
    {
        $image_path = time() . ((string)Str::uuid()) . 'img.' .$image->getClientOriginalExtension();
        $imageFullPath = $image->move($path, $image_path);
        return $imageFullPath;
    }

    public function remove(string $path)
    {
        if ($path != StaticConstants::DEFAULT_IMAGE && $path != StaticConstants::DEFAULT_IMAGE_MAIN) {
            if (file_exists($path) && !is_dir($path)) {
                return unlink($path);
            }
        }

        return false;
    }

    public function updateWithRemoveOrStore(UploadedFile $image, string $path, string $oldFilePath = null): string
    {
        if ($oldFilePath && $oldFilePath != StaticConstants::DEFAULT_IMAGE &&
            $oldFilePath != StaticConstants::DEFAULT_IMAGE_MAIN) {
            $this->remove($oldFilePath);
        }
        return $this->store($image, $path);
    }



}
