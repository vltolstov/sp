/*

    Обработчик карты
    // id - поменять на массив данных или координаты???
    //

 */

let mapProjects = document.querySelector('.map-flex');
let id = 0;
let svgDocument = '';

function mapProcessing () {

    let mapObject = document.querySelector('.map-svg');

    if ('contentDocument' in mapObject) {
        svgDocument = mapObject.contentDocument;
        let city = svgDocument.getElementsByTagName('circle');
        for (let item of city) {
            item.setAttribute("fill", "#fefefe");
        }
        let rf = svgDocument.getElementById('RF');
        rf.setAttribute("fill", "#9a9a9a");
    }

}

function addCityColoring(cityName) {
    let city = svgDocument.getElementById(cityName);
    city.setAttribute("fill", "#e63c24");
    console.log('рисуем линию' + ' ' + id);
}

window.addEventListener('load', mapProcessing);

mapProjects.addEventListener('mouseover', function (event) {
    let project = event.target;
    if (!project) return;

    id = project.getAttribute('data-id');
    if(id == null) return;

    let cityName = project.getAttribute('data-city');
    if(!cityName) return;

    addCityColoring(cityName);
});

mapProjects.addEventListener('mouseout', function (event) {z
    let city = svgDocument.getElementsByTagName('circle');
    for (let item of city) {
        item.setAttribute("fill", "#fefefe");
    }
});
