<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageType;
use App\Models\Slug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function index()
    {

        $page = Page::join('seo_sets', 'pages.id','=','seo_sets.page_id')
            ->join('content_sets', 'pages.id','=','content_sets.page_id')
            ->join('images', 'pages.id','=','images.page_id')
            ->join('parametr_sets', 'pages.id','=','parametr_sets.page_id')
            ->select('*')
            ->first();

        return view('index', [
            'title' => $page->title,
        ]);

    }

    public function page($slug)
    {

        $page = Page::join('slugs','pages.id','=','slugs.page_id')
            ->join('seo_sets', 'pages.id','=','seo_sets.page_id')
            ->join('content_sets', 'pages.id','=','content_sets.page_id')
            ->join('images', 'pages.id','=','images.page_id')
            ->join('parametr_sets', 'pages.id','=','parametr_sets.page_id')
            ->join('categories', 'pages.id', '=', 'categories.page_id')
            ->select('*','categories.id as category_id')
            ->where('urn', $slug)
            ->first();

        if($page == null) return abort(404);

        return view('pages.test', [
            'title' => $page->title,
        ]);

    }

}
