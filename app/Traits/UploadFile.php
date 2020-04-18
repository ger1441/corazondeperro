<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait UploadFile
{
    public function upload($inputFile,string $path,string $suffix_name="")
    {
        $auxExtension = $inputFile->extension();
        $auxRand = mt_rand(100000,999999);
        $newNameImage = $suffix_name.$auxRand.".".$auxExtension;
        $inputFile->storeAs($path,$newNameImage);
        return $newNameImage;
    }
}
