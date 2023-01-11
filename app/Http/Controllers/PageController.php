<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index () {

        $index = Page::find(1);

        return view('index', [

        ]);

    }

}
