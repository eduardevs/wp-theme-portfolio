<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduarDevelops</title>
</head>
<body>

<h1>Coucou</h1>
    
</body>
</html> -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Développeur Web Eduardo Pina</title>
    <!-- FONTS -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@700&display=swap" rel="stylesheet">
    <?php wp_head() ?>

    <link rel="stylesheet" href="./assets/styles.css">
    <!-- google captcha -->
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->


</head>

<body>

    <div class="sidebar col-4 d-none d-lg-block">
        <div class="profile d-flex justify-content-center">
            <img src="./img/profile-pic.JPG" alt="" class="img-fluid profile-pic">

        </div>
        <h4 class="text-light mt-3 d-flex justify-content-center">Eduardo Pina</h4>
        <div class="list mt-3">
            <a class="item1" href="#principal">Accueil</a>
            <a class="item2" href="#apropos">À propos</a>
            <a class="item3" href="#competences">Compétences</a>
            <a class="item4" href="#portfolio">Portfolio</a>
            <a class="item5" href="#projets">Projets</a>
            <!-- <a href="">Code Challenges</a> -->
            <a class="item6" href="#blog">Blog</a>
            <a class="item7" href="#contact">Contact</a>
        </div>

    </div>

    <header class="">
        <nav class="navbar navbar-dark bg-perso w-100 d-lg-none position-fixed">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-light" id="navbarNav">
                <ul class="navbar-nav px-3">
                    <li class="nav-item active">
                        <a class="nav-link" href="#principal">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apropos">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#competences">Competences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projets">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- title -->
        <div id="principal" class="container row justify-content-center m-auto">
            <div id='title' class="col-6 col-lg-12">
                <h1 class="title">Eduardo <span class="text-orange">Pina</span></h1>
            </div>
            <div class="typing-container row col-12 mt-n-5">
                <span id="sentence" class="sentence col-12 col-md-6"></span>
                <span id="feature-text" class='text-bold'> </span>
                <span class="input-cursor"></span>
            </div>
        </div>
    </header>