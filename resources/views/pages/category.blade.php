@extends('layouts.main')

@section('content')
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
@endsection
