@isset($currentPage)

    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{route('page.store')}}" enctype="multipart/form-data" method="POST" name="create">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <h2 class="admin-h2">Редактирование</h2>
            </div>
            <div class="col-lg-3">
                <button type="submit" class="admin-button">Сохранить</button>
            </div>
        </div>

        <div class="admin-edit">

            @method('PUT')
            <div class="admin-form">
                <label>Название</label>
                <div class="bord">
                    <input type="text" name="name" placeholder="Название" value="{{ $currentPage->name }}" maxlength="50">
                    <input type="hidden" name="slug" placeholder="URI" value="{{$slug}}">
                </div>
                <label>Тип страницы</label>
                <div class="bord">
                    <select name="page_type_id">
                        @foreach($pageTypes as $type)
                            <option value="{{ $type->id }}" @if($currentPage->page_type_id == $type->id) selected @endif>{{$type->type_lexicon}}</option>
                        @endforeach
                    </select>
                </div>
                <label>Является категорией</label>
                <div class="bord">
                    <select name="category">
                        @if($isCategory)
                            <option value="0">Нет</option>
                            <option value="1">Да</option>
                        @else
                            <option value="1">Да</option>
                            <option value="0">Нет</option>
                        @endif
                    </select>
                </div>
            </div>
        </div>
    </form>

@endisset
