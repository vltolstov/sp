@isset($currentPage)

    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{route('page.update', $currentPage->id)}}" enctype="multipart/form-data" method="POST" name="create">
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
                    <input type="hidden" name="urn" value="{{$slug}}">
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
                <label>Категория | Подкатегория</label>
                <div class="bord">
                    <select name="parent_id">
                        <option value="0">Без категории</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($currentPage->parent_id == $category->id) selected @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <label>Изображение</label>
                <div class="add-images-button">(Добавить еще изображения)</div>
                @if(isset($images))
                    <div class="images">
                        @foreach($images as $image)
                            <div class="bord">
                                <div class="del-button"><span class="icon-exit"></span></div>
                                <img src="{{$image}}" width="150px">
                                <input type="hidden" name="upload-images[]" value="{{$image}}">
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="images">
                        <div class="bord">
                            <div class="del-button"><span class="icon-exit"></span></div>
                            <input type="file" name="image-1">
                        </div>
                    </div>
                @endif

                <label>Заголовок</label>
                <div class="bord">
                    <input type="text" name="title" placeholder="Заголовок" value="{{ $seoSet->title }}" maxlength="70">
                </div>
                <label>Описание</label>
                <div class="bord">
                    <input type="text" name="description" placeholder="Описание" value="{{ $seoSet->description }}" maxlength="160">
                </div>
                <label>Ключевые слова</label>
                <div class="bord">
                    <input type="text" name="keywords" placeholder="Ключевые слова" value="{{ $seoSet->keywords }}">
                </div>
                <label>Интро</label>
                <div class="bord">
                    <input type="text" name="introtext" placeholder="Интро" value="{{ $contentSet->introtext }}">
                </div>

                параметры

                <label>Контент</label>
                <div class="cke-editor">
                    <textarea name="content" placeholder="Контент" id="ckeditor">
                        {{ $contentSet->content }}
                    </textarea>
                </div>
            </div>
        </div>
    </form>

@endisset
