<!DOCTYPE html>
<html lang="ru">

<head>

    <base href="{{$baseUrl}}">
    <title>{{$title}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    @vite('resources/css/app.css')

</head>
<body>

@section('registration')
@show

@section('login')
@show

@section('admin-panel')
@show

@vite('resources/js/app.js')

</body>
</html>
