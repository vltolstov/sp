<ul>
@foreach($pages as $page)

    <li><a href="/admin/page/{{$page->id}}/edit">{{$page->name}}</a></li>

@endforeach
</ul>
