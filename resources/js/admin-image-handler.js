/*
*
*
* Добавление инпутов для загрузки нескольких картинок
*
*
* */

const images = document.querySelector('.images');
const addImagesButton = document.querySelector('.add-images-button');
let lastIndex = 1;

function addImage() {
    lastIndex++;

    let index = images.childElementCount + 1;
    let imageBlock = document.createElement('div');
    imageBlock.classList.add('bord');
    imageBlock.classList.add('image-' + lastIndex);

    let imageDelButton = document.createElement('div');
    imageDelButton.classList.add('del-button');
    imageDelButton.innerHTML = '<span class="icon-exit"></span>';

    let newImageInput = document.createElement('input');
    newImageInput.type = 'file';
    newImageInput.name = 'image-' + lastIndex;

    imageBlock.appendChild(imageDelButton);
    imageBlock.appendChild(newImageInput);
    images.appendChild(imageBlock);
}

function delImage(event) {
    let target = event.target;

    if (target.tagName === 'SPAN') {
        target.parentNode.parentNode.remove();
    }

}

addImagesButton.addEventListener('click', addImage);
images.addEventListener('click', delImage);
