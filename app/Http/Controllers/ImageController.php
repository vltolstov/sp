<?php

namespace App\Http\Controllers;

use App\Models\ParametrSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class ImageController extends Controller
{

    public static function imageDataProcessing($images, $name)
    {

        $index = 1;
        $imageObj = [];
        $imageArr = [];

        if($images->input('upload-images')){
            foreach ($images->input('upload-images') as $item) {
                $imageArr['image-' . $index] = $item;
                $index++;
            }
        }


        if($images->file()) {
            foreach ($images->file() as $key => $value) {
                if (preg_match('/image-[0-9]/', $key)) {
                    $image = $images->file($key);
                    $fileName = $image->getClientOriginalName();
                    $fileName = substr($fileName, 0, strrpos($fileName, '.'));
                    $fileName = Str::slug($fileName);

                    $fileExtension = $image->getClientOriginalExtension();
                    $uploadFolder = '/img/' . $name;

                    $imageData = [
                        'name' => $fileName . '.' . $fileExtension,
                        'uploadFolder' => $uploadFolder,
                        'fullPath' => $uploadFolder . '/' . $fileName . '.' . $fileExtension
                    ];

                    $imageObj['main'] = $imageData['fullPath'];
                    Storage::putFileAs($imageData['uploadFolder'], $image, $imageData['name']);



                    // вначале массив с нужными расширениями 200х150, 400х300, 800х600, 1200х960, 2000х1500
                    // затем перебрать

                    $resizeImage = Image::make($image)->resize(200,null, function ($constraint){$constraint->aspectRatio();});
                    $imageObj['200x150'] = $uploadFolder . '/' . $fileName . '-200-150.jpg';
                    Storage::put( $uploadFolder . '/' . $fileName . '-200-150.jpg', $resizeImage->encode('jpg'));

                    $imageArr['image-' . $index] = $imageObj;
                    $index++;
                }
            }
        }

        return json_encode($imageArr);

    }

}
