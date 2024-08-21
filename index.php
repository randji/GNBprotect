<?php 
session_start();
?>


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
    <link rel="stylesheet" href="css/mediaqueries/smalldestop.css">
   
    <title>GNB-PROTECT</title>
</head>
<body>
    <header>
        <div class="navbar">
            <img class="logo" src="img/logognb.gif" alt="logo">
            <div class= reseauSociaux>
                <img class="reseau" src="img/facebook_fb_media_social_icon_124262.png" alt="icon facebook">
                <img class="reseau" src="img/twitter.png" alt="icon twitter">
                <img class="reseau" src="img/instagram_f_icon-icons.com_65485.png" alt="icon facebook">
            </div>
            
        </div>
    </header>

    <div class="banniere">
        <img class="imgbanniere" src="img/alarme-generateur-de-brouillard-clavier.webp" alt="image système d'alarme">
    </div>
    <main>
    <div class="title">
        <p class="slogan">GNB-PROTECT </p>
        <p class="slogan1"> votre partenaire de confiance pour l'installation de votre matériel de surveillance</p>
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


    <div class="temoignage">
    <h1 class="titreT">ils nous ont fait confiance</h1>
        <img class="main" src="img/poignee-de-main.png" alt="">
        <div class="listTemoi">
            <ul class="tag-list">
                <div class="inner">
                    <li class="tag">L'artisant du regard</li>
                    <li class="tag">Forum éclairage</li>
                    <li class="tag">Stone kid's</li>
                    <li class="tag">Scm Oximed</li>
                    <li class="tag">L'artisant du regard</li>
                    <li class="tag">Forum éclairage</li>
                    <li class="tag">Stone kid's</li>
                    <li class="tag">Scm Oximed</li>  
                </div>
                <div class="inner2">
                    <li class="tag">Okam santé</li><br>
                    <li class="tag">Boutique onze</li>
                    <li class="tag">Silver store</li>
                    <li class="tag">L2N pharma</li>
                    <li class="tag">Okam santé</li><br>
                    <li class="tag">Boutique onze</li>
                    <li class="tag">Silver store</li>
                    <li class="tag">L2N pharma</li>
                </div>
            </ul>
        </div>
        
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



    
    <form class="form" action="php/process_form.php" method="post">
        <h2>CONTACTEZ-NOUS</h2>
        <div class="surlignage"></div>
        
        <div class="input">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br>
            
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required><br>
            
            <label for="telephone">Téléphone:</label>
            <input type="tel" id="telephone" name="telephone" required><br>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" cols="30" required></textarea><br>
            
            <input class="submit" type="submit" value="Envoyer">
        </div>
    </form>

            <!-- Pop-up de succès -->
        <div id="successPopup">
            <span id="successMessage">Votre message a bien été envoyé.</span> <br>
            <button class="close" onclick="closePopup()">Fermer</button>
        </div>
    </main>
    
    <footer>
        <div class="contTel">
            <img class="logoTel" src="img/smartphone-call.png" alt="logo">
            <a class="tel" href="tel:+33628716282">06 28 71 62 82</a>
        </div>
        <div class="contLogo">
            <img class="logoFooter" src="img/logognb.gif" alt="logo">
        </div>
        <div class="contMail">
            <img class="logoMail" src="img/email.png" alt="logo">
            <a class="mail" href="mailto:gnb.protect@gmail.com">gnb.protect@gmail.com</a>
        </div>
        
    </footer>

    <script>
        <?php if (isset($_SESSION['message_success'])): ?>
            document.getElementById('successPopup').style.display = 'flex';
        <?php unset($_SESSION['message_success']); ?>
        <?php endif; ?>
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>
</body>
</html>