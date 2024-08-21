
document.addEventListener('DOMContentLoaded', function() {
    var observer = new IntersectionObserver(function(entries) {
        // Loop over les entrées
        entries.forEach(entry => {
            // Si l'élément est visible
            if (entry.isIntersecting) {
                // Ajoute la classe qui déclenche l'animation
                entry.target.classList.add('animevideosurv', 'animeSecu', 'animeInstall');
                // Optionnel : arrête d'observer l'élément après la première animation
                observer.unobserve(entry.target);
            }
        });
    }, {
        // Utilise 50% de la hauteur de la fenêtre comme seuil pour déclencher l'animation
        rootMargin: '0px 0px -10% 0px'
    });

    // Cible l'élément .surlignage
    var target = document.querySelectorAll('.videosurv, .secu, .install');
    target.forEach(target => {
        // Commence à observer chaque élément
        observer.observe(target);
    });


     // Ajoute des écouteurs d'événements pour détecter la fin des animations
     var videosurv = document.querySelector('.videosurv');
    var secu = document.querySelector('.secu');
     var install = document.querySelector('.install');
     var barre = document.querySelectorAll('.barre');
 
     if (videosurv && secu && install && barre.length > 0) {
        
        videosurv.addEventListener('animationend', function() {
            secu.classList.add('animeSecu');
        });

        secu.addEventListener('animationend', function() {
            install.classList.add('animeInstall');
        });
        install.addEventListener('animationend', function() {
            barre.forEach(function(barre) {
                barre.classList.add('animeBarre');
            });
        });
    }
});



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

    
    document.querySelectorAll('.marquee').forEach(marquee => {
        marquee.addEventListener('mouseover', () => {
            marquee.style.animationPlayState = 'paused';
        });
        marquee.addEventListener('mouseout', () => {
            marquee.style.animationPlayState = 'running';
        });
    });