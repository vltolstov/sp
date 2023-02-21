<div class="admin-main-menu">
    <p class="admin-menu-header">Основное меню</p>
    <ul>
        @foreach($menuPages as $page)
            <li><a href="/admin/page/{{$page->id}}/edit">{{$page->name}}</a></li>
        @endforeach
    </ul>
</div>

<div class="admin-sub-menu">
    <p class="admin-menu-header">Подменю</p>
    @isset($pages)
        <ul>
            @foreach($pages as $page)
                <li><a href="/admin/page/{{$page->id}}/edit">{{$page->name}}</a></li>
            @endforeach
        </ul>
    @endisset
</div>
