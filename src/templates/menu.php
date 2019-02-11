<?php
/**
 * create: Romann IMOUNGA
 * Date: 10/02/19
 * Time: 01:33
 * But : Menu du site
 */
?>
<Doctype html>
    <head>
        <meta charset="utf-8">
        <title>Fitness-Web</title>
        <link type="text/css" rel="stylesheet" href="../stylesheets/menu_principal.css"/>
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Text|Playfair+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <!-- BOOTSTRAP CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="container-fluid">
                <div class="container menu-header">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 menu-style logo-fitness-web" >
                            <h1><a href="#">Fitness Web</a></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 menu-style liste-nav-header">
                            <ul class="menu-style">
                                <li><a href="#">Concept</a></li>
                                <li><a href="#">Clubs</a></li>
                                <li><a href="#">Activités</a></li>
                                <li><a href="#">Actus</a></li>
                                <li><a href="#">Fitness App</a></li>
                                <li class="liste-nav-header-login"><a href="../../formulaire_contacte.php">S'incrire</a></li>
                                <li class="liste-nav-header-login"><a href="#">Connexion</a></li>
                                <li class="liste-nav-header-login"><a href="#">Postuler</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>
    <!--
        Il existe deux types de container
            - container : qui est a largeur fixe
            - container-fluid : qui prend toute la largeur

        Les différentes types de container dépendent de la taille du viexport :
            - xs < 768px  en général -> phones              prendra toute la largeur
            - sm >= 768px en général -> tablettes           prendra 750px
            - md >= 992px en général -> desktop             prendra 970px
            - lg >= 1200px en général -> large desktop      prendra 1170px
    -->
</Doctype>


