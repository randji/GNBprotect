

document.addEventListener('DOMContentLoaded', function() {
    var observer = new IntersectionObserver(function(entries) {
        // Loop over les entrées
        entries.forEach(entry => {
            // Si l'élément est visible
            if (entry.isIntersecting) {
                // Ajoute la classe qui déclenche l'animation
                entry.target.classList.add('animate-surlignage');
                // Optionnel : arrête d'observer l'élément après la première animation
                observer.unobserve(entry.target);
            }
        });
    }, {
        // Utilise 50% de la hauteur de la fenêtre comme seuil pour déclencher l'animation
        rootMargin: '0px 0px -10% 0px'
    });

    // Cible l'élément .surlignage
    var target = document.querySelector('.surlignage');
    if (target) {
        // Commence à observer l'élément
        observer.observe(target);
    }
});


// Fonction pour afficher le pop-up
function showPopup() {
    document.getElementById('successPopup').style.display = 'block';
}

// Fonction pour fermer le pop-up
function closePopup() {
    document.getElementById('successPopup').style.display = 'none';}