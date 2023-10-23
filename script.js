// Sélectionnez l'élément image et la lightbox par leur ID
var image = document.getElementById('image-zoom');
var lightbox = document.getElementById('image-lightbox');

// Attachez un gestionnaire d'événement de clic à l'image
image.addEventListener('click', function () {
    lightbox.style.display = 'block'; // Affichez la lightbox
});

// Attachez un gestionnaire d'événement de clic à la lightbox pour la masquer
lightbox.addEventListener('click', function () {
    lightbox.style.display = 'none'; // Masquez la lightbox
});