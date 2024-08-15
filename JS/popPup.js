// Fonction pour afficher le pop-up
function showPopup() {
    document.getElementById('successPopup').style.display = 'block';
}

// Fonction pour fermer le pop-up
function closePopup() {
    document.getElementById('successPopup').style.display = 'none';
}

// Vérifiez si le message de succès est défini et affichez le pop-up
if (window.location.search.includes('success=true')) {
    showPopup();
}
