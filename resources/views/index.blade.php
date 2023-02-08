@extends('layouts.main')

@section('test-layout')
<div class="wrapper">
    <div class="head-wrapper">
        <div class="container">
            <div class="row head">
                <header>
                    <div class="col-lg-3">
                        <p class="logo">{{$companyName}}</p>
                    </div>
                    <div class="col-lg-5">
                        <h1 class="head-tagline">{{$companySlogan}}</h1>
                    </div>
                    <div class="col-lg-4">
                        <div class="head-contacts">
                            <p class="head-phone">тел.: {{$phone}}</p>
                            <p class="head-email"><a href="mailto:{{$email}}">{{$email}}</a></p>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
    <div class="main-menu">
        <div class="container">
            <div class="row main-menu-flex">
                <a href="/">Главная</a>
                <a href="#">Каталог</a>
                <a href="#">Статьи</a>
                <a href="#">О компании</a>
                <a href="#">Контакты</a>
            </div>
        </div>
    </div>
    <div class="container main-block-flex">
        <div class="sidebar">
            <ul>
                <li><a href="#">Категория 1</a></li>
                <li><a href="#">Категория 2</a>
                    <ul>
                        <li><a href="#">Подкатегория 1</a></li>
                        <li><a href="#">Подкатегория 2</a></li>
                        <li><a href="#">Подкатегория 3</a>
                            <ul>
                                <li><a href="#">Конечная 1</a></li>
                                <li><a href="#">Конечная 2</a></li>
                                <li><a href="#">Конечная 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Подкатегория 4</a></li>
                    </ul>
                </li>
                <li><a href="#">Категория 3</a></li>
                <li><a href="#">Категория 4</a></li>
                <li><a href="#">Категория 5</a></li>
            </ul>
        </div>
        <div class="content-block">
             <div class="breadcrumbs">
                 <p>Главная / Категория / Категория / Категория</p>
             </div>
            <div class="content-header">
                <h1>Тут заголовок страницы</h1>
            </div>
            <div class="categories-block">
                Категории
            </div>
            <div class="products-block">
                Товары
            </div>
            <div class="content">
                <p>Тут контент</p>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <footer>
                <div class="col-lg-12">
                    <p class="footer-text">{{$companyName}} 2022г. Все материалы сайта защищены авторскими правами.
                        Копирование и использование на других ресурсах запрещено.<br> * Вся информация представленная на
                    сайте носит информационный характер и не является публичной офертой. По вопросам наличия товара и
                    актуальным ценам вы можете обратиться в отдел продаж по номеру {{$phone}} или отправив заявку на почту
                    <a href="mailto:{{$email}}">{{$email}}</a></p>
                </div>
            </footer>
        </div>
    </div>
</div>
@endsection
