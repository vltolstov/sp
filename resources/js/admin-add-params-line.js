/*
*
*
* Добавление инпутов для ввода параметров страницы (товара, категории, и т.д.)
*
*
* */

let params = document.querySelector('.params-line');
const addParamsButton = document.querySelector('.add-params-button');

function addImageInput() {
    let index = params.childElementCount / 4 + 1;

    let newParam = document.createElement('input');
    newParam.classList.add('col-lg-5');
    newParam.type = 'text';
    newParam.name = 'param-name-' + index;
    newParam.placeholder = 'Параметр';
    params.appendChild(newParam);

    // вставляет по одному

    newParam = '';
    newParam.classList.add('col-lg-5');
    newParam.type = 'text';
    newParam.name = 'param-value-' + index;
    newParam.placeholder = 'Значение';
    params.appendChild(newParam);
}

addParamsButton.addEventListener('click', addImageInput);


//
// <input class="col-lg-5" type="text" name="param-name-1" placeholder="Параметр" value="{{ old('param-name-1') }}">
//     <input class="col-lg-5" type="text" name="param-value-1" placeholder="Значение" value="{{ old('param-value-1') }}">
//     <input class="col-lg-1" type="checkbox" name="param-active-1" value="{{ old('param-active-1') }}">
//     <input class="col-lg-1" type="checkbox" name="param-hide-1" value="{{ old('param-hide-1') }}">
//     </div>
