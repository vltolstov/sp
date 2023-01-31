/*

    Обработчик карты

 */

let mapProjects = document.querySelector('.map-flex');

function mapProcessing () {

    let mapObject = document.querySelector('.map-svg');

    if ('contentDocument' in mapObject) {
        let svgDocument = mapObject.contentDocument;
        let city = svgDocument.getElementsByTagName('circle');
        for (let item of city) {
            item.setAttribute("fill", "#fefefe");
        }
        let rf = svgDocument.getElementById('RF');
        rf.setAttribute("fill", "#9a9a9a");
    }

}

function addCityColoring(project) {
    console.log('+');
}

function deleteCityColoring(project) {
    console.log('-');
}


window.addEventListener('load', mapProcessing);
mapProjects.addEventListener('mouseover', function (event) {
    let project = event.target.closest('a');
    if (!project) return;

    addCityColoring(project);
});

mapProjects.addEventListener('mouseout', function (event) {
    let project = event.target.closest('a');
    if (!project) return;

    deleteCityColoring(project);
});
