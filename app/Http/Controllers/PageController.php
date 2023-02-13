<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContentSet;
use App\Models\Image;
use App\Models\Page;
use App\Models\PageType;
use App\Models\ParametrSet;
use App\Models\SeoSet;
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
            'name' => $page->name,
            'title' => $page->title,
            'description' => $page->description,
            'introtext' => $page->introtext,
            'urn' => $page->urn,
            'keywords' => $page->keywords,
            'content' => $page->content,
        ]);

    }

    public function page($slug)
    {

        $page = Page::join('slugs','pages.id','=','slugs.page_id')
            ->join('seo_sets', 'pages.id','=','seo_sets.page_id')
            ->join('content_sets', 'pages.id','=','content_sets.page_id')
            ->join('images', 'pages.id','=','images.page_id')
            ->join('parametr_sets', 'pages.id','=','parametr_sets.page_id')
            ->leftJoin('categories', 'pages.id', '=', 'categories.page_id')
            ->select('*','categories.id as category_id')
            ->where('urn', $slug)
            ->first();

        if($page == null) return abort(404);

        $data = [
            'name' => $page->name,
            'title' => $page->title,
            'description' => $page->description,
            'introtext' => $page->introtext,
            'urn' => $page->urn,
            'keywords' => $page->keywords,
            'content' => $page->content,
            'params' => $page->params,
        ];

        if($page->image){
            $images = json_decode($page->image);
            $data['images'] = (array)$images;
        }

        if($page->category_id){
            return view('pages.category', $data);
        }

        if($page->page_type_id){
            $types = PageType::where('id', $page->page_type_id)->first();
            return view('pages.' . $types->name, $data);
        }

        return view('pages.default', $data);

    }

    public function create()
    {
        $categories = Category::select('*')
            ->join('pages', 'categories.page_id', '=', 'pages.id')
            ->get();

        $pageTypes = PageType::all();

        return view('admin.index', [
            'createNew' => true,
            'categories' => $categories,
            'pageTypes' => $pageTypes,
            'title' => 'Создание страницы'
        ]);
    }

    public function store(Request $request)
    {

        $validationData = $request->validate([
            'name' => ['required','string','max:50'],
            'page_type_id' => 'present',

            'urn' => ['required', 'string', 'unique:slugs,urn'],

            'introtext' => 'present',
            'content' => 'present',

            'title' => ['required','string','max:70'],
            'description' => ['required', 'string', 'max:160'],
            'keywords' => 'present',

            'category' => 'present',
            'parent_id' => 'present',

        ]);

        $validationData['params'] = null;
        $validationData['image'] = null;

        // обработка картинок, обработка параметров
        // если категория, то дополнительно пишем флаг категории

//        if($request->file('images')) {
//
//            $validationData['images'] = ImageController::imageDataProcessing
//            (
//                $request->file('images'),
//                $validationData['slug']
//            );
//
//        }

        try{
            $validationData['page_id'] = Page::create($validationData)->id;
            Slug::create($validationData);
            ContentSet::create($validationData);
            Image::create($validationData);
            ParametrSet::create($validationData);
            SeoSet::create($validationData);
        }
        catch (QueryException $exception){
            return redirect(route('page.create'))->withErrors('Ошибки в форме');
        }
        return redirect(route('admin'));
    }


}
