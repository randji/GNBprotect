function showElements() {
    var elements = document.querySelectorAll('.videosurv, .secu, .install');
    var windowHeight = window.innerHeight;

    elements.forEach(function(element, index) {
        var rect = element.getBoundingClientRect();
        if (rect.top < windowHeight) {
            var delay = index * 0.2;

            if (index % 2 === 0) {
                element.style.animation = `slideInFromLeft 1s ${delay}s forwards`;
            } else {
                element.style.animation = `slideInFromRight 1s ${delay}s forwards`;
            }
        }
    });
}

// Appeler la fonction au défilement
// window.addEventListener('scroll', showElements);

// Appeler la fonction au chargement de la page
document.addEventListener('DOMContentLoaded', showElements);