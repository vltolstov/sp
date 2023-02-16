<?php

namespace App\Http\Controllers;

use App\Models\ParametrSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageController extends Controller
{

    public static function imageDataProcessing($images, $name)
    {

        $index = 1;
        $imageArr = [];

        foreach ($images->file() as $key => $value) {
            if (preg_match('/image-[0-9]/', $key)) {
                $image = $images->file($key);
                $fileName = $name . '-' . $index;
                $fileExtension = $image->getClientOriginalExtension();
                $uploadFolder = '/img/' . $name;

                // где-то тут кроп и генерация разрешений
                //200х150, 400х300, 800х600, 1200х960, 2000х1500

                $imageData = [
                    'name' => $fileName . '.' . $fileExtension,
                    'uploadFolder' => $uploadFolder,
                    'fullPath' => $uploadFolder . '/' . $fileName . '.' . $fileExtension
                ];

                $imageArr['image-' . $index] = $imageData['fullPath'];
                Storage::putFileAs($imageData['uploadFolder'], $image, $imageData['name']);
                $index++;
            }
        }

        return json_encode($imageArr);

    }

}
