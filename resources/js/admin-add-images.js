/*
*
*
* Добавление инпутов для загрузки нескольких картинок
*
*
* */

const images = document.querySelector('.images');
const addImagesButton = document.querySelector('.add-images-button');

function addImageInput() {
    let index = images.childElementCount + 1;
    let newImage = document.createElement('input');
    newImage.type = 'file';
    newImage.name = 'image-' + index;
    images.appendChild(newImage);
}

addImagesButton.addEventListener('click', addImageInput);
