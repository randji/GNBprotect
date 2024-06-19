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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>GNB-PROTECT</title>
</head>
<body>
    <header>
        <div class="navbar">
            <img class="logo" src="img/logognb.gif" alt="logo">
        </div>
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

    <div class="logoMateriel">
        <div class="materielContainer">
        <img class="materiel__image" src="img/aiphone-kit-audio.png" alt="logo aiphone">
        <img class="materiel__image" src="img/ajax-650x468.png" alt="logo ajax">
        <img class="materiel__image" src="img/Dahua-LOGO_black_with_red_D.png" alt="logo dahua">
        <img class="materiel__image" src="img/Legrand-Logo.jpg" alt="logo legrand">
        <img class="materiel__image" src="img/166.png" alt="logo legrand">

        </div>
    </div>

    <div class="detail">
        
        <p>Notre entreprise se distingue par son professionnalisme, sa rapidité d'intervention et la qualité de ses équipements.
        <br>
        <br>
        La sécurité de votre établissement est primordiale. Nos alarmes, à des prix compétitifs, préviennent les vols et les dégradations en protégeant efficacement vos employés, vos viens et votre commerce, tout en vous assurant une tranquillité d'esprit.
        <br>
        
        <button class="contact"> CONTACTEZ NOUS</button>
    </div>

    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/IMG-20240605-WA0008.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/IMG-20240605-WA0010.png" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/IMG-20240605-WA0030.png" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/IMG-20240605-WA0020.png" alt="">
            </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="carouselExampleAutoplaying"   data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>

    <h2>Contactez-nous</h2>
    <form class="form" action="php/process_form.php" method="post">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>
</body>
</html>