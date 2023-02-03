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

        let cities = svgDocument.getElementsByTagName('circle');
        for (let city of cities) {
            city.setAttribute("fill", "#fefefe");
        }

        let rf = svgDocument.getElementById('RF');
        rf.setAttribute("fill", "#9a9a9a");

        let polygons = svgDocument.getElementsByTagName('polygon');
        for(let polygon of polygons) {
            polygon.setAttribute('visibility', 'hidden');
        }

        let texts = svgDocument.getElementsByTagName('text');
        for(let text of texts) {
            text.setAttribute('visibility', 'hidden');
        }

    }

}

function addGeoHighlight(cityName, x, y) {
    let cities = svgDocument.getElementsByTagName('circle');
    for (let item of cities) {
        item.setAttribute("fill", "#fefefe");
    }

    let city = svgDocument.getElementById(cityName);
    city.setAttribute("fill", "#e63c24");

    let polygon = svgDocument.getElementById(city + '-poly');
    let text = svgDocument.getElementById(city + '-text');

    //polygon.setAttribute('fill', '#FFF');
    //text.setAttribute('color', '#000');

    console.log('рисуем линию' + ' ' + id + ' ' + x + ' ' + y);
    let line = svgDocument.getElementById('line');
    line.setAttribute('stroke', '#FFF');
    line.setAttribute("stroke-width", 2);
    line.setAttribute("x1", city.getAttribute('cx'));
    line.setAttribute("y1", city.getAttribute('cy'));
    line.setAttribute("x2", x);
    line.setAttribute("y2", y);
}

window.addEventListener('load', mapProcessing);

mapProjects.addEventListener('mouseover', function (event) {
    let project = event.target;
    if (!project) return;

    id = project.getAttribute('data-id');
    if(id == null) return;

    let cityName = project.getAttribute('data-city');
    if(!cityName) return;

    setTimeout(() => {
        let x = project.offsetLeft + project.offsetWidth / 2;
        let y = project.offsetTop - project.offsetHeight - 60;

        addGeoHighlight(cityName, x, y);
    }, 300);

});

