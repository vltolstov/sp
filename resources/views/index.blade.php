@extends('layouts.main')

@section('test-layout')

<div class="head">
    <div class="container">
        <header>
            <div class="head-flex">
                <div class="logo">
                    <img src="/images/logo.png" height="64" alt="logo">
                </div>
                <div class="head-menu">
                    <ul>
                        <li><a href="#">Раздел №1</a></li>
                        <li><a href="#">Раздел №2</a></li>
                        <li><a href="#">Раздел №3</a></li>
                        <li><a href="#">Раздел №4</a></li>
                        <li><a href="#">Рвздел №5</a></li>
                    </ul>
                </div>
                <div class="head-contacts">
                    <div class="contacts-block">
                        <p><a class="main-tel" href="tel:80000000000">8 000 000-00-00</a></p>
                        <p><a class="mobile-tel" href="tel:70000000000">+7 000 000-00-00</a></p>
                        <p><a class="head-mail" href="mailto:email@mail.ma">email@mail.ma</a></p>
                        <p class="head-city">г. Новосибирск</p>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>

<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                слайд
            </div>
        </div>
    </div>
</div>

<div class="offers">
    <div class="container">
        <div class="row offers-wrap offers-wrap-close">
            <div class="col-lg-4">
                <a href="#" class="offer" style="background-image: url('/images/test-1000x750.png')">
                    <p class="offer-title">Длинное название для проверки на несколько строк и много символов</p>
                    <p class="offer-price">0000000 руб.</p>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" class="offer" style="background-image: url('/images/test-1000x750.png')">
                    <p class="offer-title">Длинное название для проверки на несколько строк и много символов</p>
                    <p class="offer-price">0000000 руб.</p>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" class="offer" style="background-image: url('/images/test-1000x750.png')">
                    <p class="offer-title">Длинное название для проверки на несколько строк и много символов</p>
                    <p class="offer-price">0000000 руб.</p>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" class="offer" style="background-image: url('/images/test-1000x750.png')">
                    <p class="offer-title">Длинное название для проверки на несколько строк и много символов</p>
                    <p class="offer-price">0000000 руб.</p>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" class="offer" style="background-image: url('/images/test-1000x750.png')">
                    <p class="offer-title">Длинное название для проверки на несколько строк и много символов</p>
                    <p class="offer-price">0000000 руб.</p>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" class="offer" style="background-image: url('/images/test-1000x750.png')">
                    <p class="offer-title">Длинное название для проверки на несколько строк и много символов</p>
                    <p class="offer-price">0000000 руб.</p>
                </a>
            </div>
            <div class="offers-open-button">
                <a class="offers-link" href="#">Показать еще</a>
            </div>
        </div>
    </div>
</div>

<div class="map">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                карта
            </div>
        </div>
    </div>
</div>

<div class="special-offer">
    <div class="container">
        <div class="row special-offer-wrap">
            <div class="col-lg-12">
                <div class="block-headers">
                    <h3>Заголовок третьего уровня</h3>
                    <p>Подзаголовок - однострочное описание</p>
                </div>
                <div class="row special-offer-flex">
                    <div class="special-offer-info col-lg-4 order-3">
                        <p class="special-offer-name">Заголовок продукта на несколько строк</p>
                        <p class="special-offer-price">000000 руб.<br><span>в наличии</span></p>
                    </div>
                    <div class="special-offer-text col-lg-4 order-2">
                        <p>Повседневная практика показывает, что консультация с широким активом способствует подготовки
                            и реализации дальнейших направлений развития.</p>
                        <p>Идейные соображения высшего порядка, а также
                            постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль
                            в формировании существенных финансовых и административных условий.</p>
                    </div>
                    <div class="special-offer-image col-lg-4 order-1">
                        <img src="/images/test-1000x750.png" alt=" ">
                    </div>
                </div>
                <div class="special-offer-button">
                    <a href="#">Кнопка заказа / запроса информации</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="catalog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                каталог
            </div>
        </div>
    </div>
</div>

<div class="advantages">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                преимущества
            </div>
        </div>
    </div>
</div>

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                новости
            </div>
        </div>
    </div>
</div>

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                о компании
            </div>
        </div>
    </div>
</div>

<div class="consultation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                консультация
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                контакты - подвал
            </div>
        </div>
    </div>
</div>


@endsection
