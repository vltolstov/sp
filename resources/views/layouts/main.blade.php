<!DOCTYPE html>
<html lang="ru">

<head>

    <base href="{{$baseUrl}}">
    <title>{{$title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta property="og:site_name" content="{{$siteName}}">
    <meta property="og:title" content="{{$title}}">
    <meta property="og:description" content="{{$description}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content= "{{$baseUrl}}/{{$urn}}">
    <meta property="og:image" content="{{$baseUrl}}/картинка">
    <meta property="og:image:width" content="1000">
    <meta property="og:image:height" content="750">
    <link rel="image_src" href="{{$baseUrl}}/картинка">

    @vite('resources/css/app.css')

    <link rel="canonical" href="{{$baseUrl}}/{{$urn}}"/>

</head>
<body>

@vite('resources/js/app.js')

</body>
</html>
