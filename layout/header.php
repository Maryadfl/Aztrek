<?php
require_once __DIR__ . "/../functions.php";
require_once  __DIR__."/../model/database.php";
$user = getCurrentUser();
$countries = getAllEntities("country");
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Aztrek | <?= $title; ?></title>
    <meta name="description" content="<?= $description; ?>">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/styles.css ">
</head>

<body>


<header class="header-top ">

    <div class="top-bar">

        <div class="container">


            <a class="burger" href="#sidr-main">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>

            <div class="header-logo">
                <a href="index.php" title="Accueil"><img src="./images/LogoAztrektimbre_logo gris.png" alt="Logo"></a>
            </div>

            <div class="nav-total">

                <div class="header-logo-lg">
                    <a href="index.php" title="Accueil"><img src="./images/LogoAztrektimbre_logo gris.png"
                                                             alt="Logo"></a>
                </div>

                <nav class="nav-header">
                    <ul>

                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Blog</a></li>


                    </ul>
                </nav>

                <?php getMenu() ?>


            </div>

        </div>
    </div>

    <div class="container">
        <div class="home-infos">
            <h1>AZTREK</h1>
            <p>Un nouveau monde a chaque pas</p>

        </div>
        <!-- <a href="#filtre"><img class="scrolldown" src="./images/scroll.png" alt="scrolldown"></a> -->

    </div>

    </div>
    <div class="social-nav">
        <a href="#" class="facebook"><img src="./images/iconfacebook.png" alt=""></a>
        <a href="#" class="instagram"><img src="./images/picto_instagram.png" alt=""></a>
        <a href="#" class="youtube"><img src="./images/iconyoutube.png" alt=""></a>


    </div>
</header>
