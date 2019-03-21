<?php
/**
 * Created by PhpStorm.
 * User: tangu
 * Date: 21-03-19
 * Time: 10:15
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Aux Bonnes Boucheries Brabançonnes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/myCss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../JS/myJs.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="../IMG/logo.png" alt="logo aux bonnes boucheries brabançonnes"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left">
                    <li><a class="active" href="#">Acceuil</a></li>
                    <li><a class="lien" href="#">Qui sommes nous ?</a></li>
                    <li><a class="lien" href="#">Produits</a></li>
                    <li><a class="lien" href="#">Contact</a></li>
                    <li><a class="lien" href="#">Informations pratiques</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="lien" href="#"><div id="logoPanier"><img src="../IMG/logoCaddy.png"></div> Pannier</a></li>
                    <li><a class="lien" href="#">Compte</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <br>
        <div class="carousel-inner" role="listbox" id="imageSlide">
            <div class="item active">
                <img src="../IMG/carpacio.jpg" alt="carpacio de boeuf sur une assiette">
                <div class="carousel-caption">
                    <button type="button" class="btn btn-default">A propos de nous</button>
                </div>
            </div><!--END ACTIVE-->
            <div class="item">
                <img src="../IMG/steak.jpg" alt="steak de boeuf sur une planche tenu par un homme">
                <div class="carousel-caption">
                    <button type="button" class="btn btn-default">A propos de nous</button>
                </div>
            </div>
            <div class="item">
                <img src="../IMG/americain.jpg" alt="steak haché dans un récipient en verre">
                <div class="carousel-caption">
                    <button type="button" class="btn btn-default">A propos de nous</button>
                </div>
            </div>
        </div>
        <br>
    </div> <!--END SLIDER-->
    <div id="carouselButtons">
        <button id="playButton" type="button" class="btn btn-default btn-xs">
            <span class="glyphicon glyphicon-play"></span>
        </button>
        <button id="pauseButton" type="button" class="btn btn-default btn-xs">
            <span class="glyphicon glyphicon-pause"></span>
        </button>
    </div>
    <footer class="page-footer text-center" id="footer">
         © 2019 Copyright: Tanguy Alexandre
    </footer>
</body>
</html>
