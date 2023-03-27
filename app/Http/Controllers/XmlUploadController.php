<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class XmlUploadController extends Controller
{

    public function index()
    {
        $productsList = self::prepare();
        $goods = Page::all();
        $ids = [];

        foreach ($goods as $good) {
            if($good->parametrSet->params != null){
                $cid = json_decode($good->parametrSet->params);
                $ids[] = $cid[0]->value;
            }
        }

        foreach ($productsList as $product) {
            if(in_array($product['product_id'], $ids)){
                self::update($product);
            } else {
                self::add($product);
            }
        }
    }

    public function prepare()
    {
        $file = Storage::path('/xml/products.xml');
        $xml = simplexml_load_file($file);
        $products = [];

        foreach ($xml->Elements->Element as $key => $item) {

            $productId = 'ID' . (string)$item['Kod'];
            $productName = (string)$item['Name'];
            $categoryId = 'ID' . (string)$item['KodGroup'];
            $productUnit = (string)$item['Ed'];

            $minimumQuantityString = (string)$item['Artikul'];
            preg_match('/\d+/', $minimumQuantityString, $arrayOfQuantity);
            $minimumQuantity = array_pop($arrayOfQuantity);
            if (empty($minimumQuantity)) {
                $minimumQuantity = 1;
            }

            $prices = [
                'xs' => (float)$item->Prices->El_Price[0]['Price'],
                's' => (float)$item->Prices->El_Price[1]['Price'],
                'm' => (float)$item->Prices->El_Price[2]['Price'],
                'l' => (float)$item->Prices->El_Price[3]['Price'],
            ];

            if (empty($prices)) {
                $products[$productId]['prices'] = [
                    'xs' => 0,
                    's' => 0,
                    'm' => 0,
                    'l' => 0,
                ];
            }

            $url = Str::slug($productName, '-');

            $products[$productId] = array(
                'product_id' => $productId,
                'name' => str_replace('"', '', $productName),
                'category_id' => $categoryId,
                'product_unit' => $productUnit,
                'minimum_quantity' => $minimumQuantity,
                'url' => $url . '-' . $productId,
                'prices' => $prices,
            );
        }

        return $this->products = $products;

    }

    public function add($product)
    {
        //добавить
    }

    public function update($product)
    {
        //обновить
    }
}
