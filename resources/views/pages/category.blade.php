@extends('layouts.main')

@section('content')
    <div class="content-block">
{{--        @include('.elements.breadcrumbs')--}}
        <div class="content-header">
            <h1>{{$title}}</h1>
        </div>
        <div class="content-intro">
            <p>{{$introtext}}</p>
        </div>
    </div>
    @isset($categories)
        <div class="categories-block">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-4">
                        <a href="/{{$category->slug['urn']}}" class="category-item" style="background-image: url('/images/test-1000x750.png')">
                            <p class="category-name">{{$category['name']}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endisset
    @isset($products)
    <div class="products-block">
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-12">
                    <a href="#" class="product-item" style="background-image: url('/images/test-1000x750.png')">
                        <p class="product-name">{{$product->seoSet['title']}}</p>
                        <p class="product-price">00000 руб</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    @endisset
    <div class="content">
        {!! $content !!}
    </div>
@endsection
