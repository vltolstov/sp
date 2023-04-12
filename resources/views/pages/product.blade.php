@extends('.layouts.main')

@section('content')
    <div class="content-block">
        @include('.elements.breadcrumbs')
        <div class="content-header">
            <h1>{{$title}}</h1>
        </div>
    </div>
    <div class="row main-info-flex">
        <div class="col-lg-6">
            @if(isset($images))
                @foreach($images as $image)
                    <div class="main-image">
                        <a href="{{$image['1200x960']}}" class="glightbox"><img src="{{$image['400x300']}}" alt="{{$name}}"></a>
                    </div>
                    @break
                @endforeach
            @else
                <div class="main-image">
                    <img src="/images/test-1000x750.png" alt="{{$name}}">
                </div>
            @endif
        </div>
        <div class="col-lg-6 info-column-flex">
            <div class="content-intro">
                <p>{{$introtext}}</p>
            </div>
            <div class="params-wrap">
                @foreach($params as $param)
                    @if($param['hide'] !== true)
                        <div class="row">
                            <div class="param-name col-lg-6">
                                {{$param['name']}}
                            </div>
                            <div class="param-value col-lg-6">
                                {{$param['value']}}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="request-button-wrap">
                <div class="request-button">
                    <a href="#modal-form" class="glightbox-form" data-glightbox="width: auto; height: auto;">Отправить запрос по цене и наличию</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        {!! $content !!}
    </div>
@endsection
