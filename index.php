<?php

    require "Livre.php";
    require "Auteur.php";
    

    $auteur1 = new Auteur("King", "Stephen", "1947-09-21");

    $livre1 = new Livre($auteur1, "Ca",         1138, 1986, 20);
    $livre2 = new Livre($auteur1, "Simetierre",  374, 1983, 15);
    $livre3 = new Livre($auteur1, "Le Fléau",   1138, 1978, 14);
    $livre4 = new Livre($auteur1, "Shining",    1138, 1977, 16);

    echo "<br>";
    echo $auteur1." a ".$auteur1->obtenirAge();
    echo "<br>";
    $auteur1->afficherBibliographie();
?>