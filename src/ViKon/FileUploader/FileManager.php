<?php

namespace ViKon\FileUploader;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileManager
{
    public function upload(UploadedFile $file)
    {
        if ($file->isValid())
        {
            $name = $file->getClientOriginalName();
            $size = $file->getClientSize();
        }
    }

    public function download()
    {
    }

    public function delete()
    {
    }
}