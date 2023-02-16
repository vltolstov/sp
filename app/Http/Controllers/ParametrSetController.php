<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParametrSetController extends Controller
{

    public static function ParametrDataProcessing($request)
    {

        $arrData = [];
        $paramObject = [];

        $data = $request->input();

        var_dump($data);

        foreach ($data as $key => $value) {
            if (preg_match('/param-name-[0-9]/', $key)) {
                $paramObject['name'] = $value;
                $arrData[] = $paramObject;
            }
        }

        //тут дописать наполнение массива параметров остальными данными

        var_dump($arrData);
        die;

        return null;
    }

}
