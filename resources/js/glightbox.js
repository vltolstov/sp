import glightbox from "glightbox/src/js/glightbox";

const lightbox = glightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true
});

const lightboxForm = glightbox({
    selector: '.glightbox-form',
    touchNavigation: true,
    loop: false,
    autoplayVideos: false
});
