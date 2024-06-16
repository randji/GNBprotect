<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>GNB-PROTECT</title>
</head>
<body>
    <header>
        <p class="entreprise">GNB-PROTECT</p>
    </header>

    <div class="banniere">
        <img class="imgbanniere" src="img/alarme-generateur-de-brouillard-clavier.webp" alt="image système d'alarme">
    </div>
    <main>
    <div class="title">
        <p class="slogan">GNB-PROTECT </p>
        <p class="slogan1"> votre partenaire de confiance pour l'installation de matériel de surveillance</p>
    </div>

    <div class="descript">
        <div class="wordkey">
            <div class="videosurv">
            <div class="barre"></div>
            <img class="iconeCam" src="img/iconeCamera.png" alt="iconeCamera">
            <p>VIDEOSURVEILLANCE</p>
            </div>
            <div class="secu">
            <div class="barre"></div>
                <img class="unlock" src="img/unlock.png" alt="cadenas">
                <p>SECURITE</p>
            </div>
            <div class="install">
            <div class="barre"></div>
                <img class="iconInstal" src="img/instal.png" alt="installation">
                <p>INSTALLATION</p>
            </div>
            
        </div>          
        <img class="camera1" src="img/camera1.png" alt="">
    </div>
    <div class="detail">
        
        <p>Notre entreprise se distingue par son professionnalisme, sa rapidité d'intervention et la qualité de ses équipements.
        <br>
        <br>
        La sécurité de votre établissement est une priorité. Les alarmes jouent un rôle essentiel dans la prévention des vols et des dégradations, en vous offrant une protection dissuasive pour la sécurité de vos employés, de vos biens, de votre commerce et la tranquillité d’esprit.
        
        <button class="contact"> CONTACTEZ NOUS</button>
    </div>

    <div class="gallery">
        <p>gallery</p>
    </div>

    <h2>Contactez-nous</h2>
    <form class="form" action="process_form.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="prenom">Prénom:</label><br>
        <input type="text" id="prenom" name="prenom" required><br>
        
        <label for="telephone">Téléphone:</label>
        <input type="tel" id="telephone" name="telephone" required><br>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" cols="40" required></textarea><br>
        
        <input type="submit" value="Envoyer">


    </form>
    </main>
    
    <footer>
        <p class="footertitle">gnp-protect</p>
        
    </footer>
    
</body>
</html>