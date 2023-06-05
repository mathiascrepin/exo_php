<?php
    echo("Dans ce programme vous allez saisir un nombre compris entre 1 et 7  et le programme se chargera de d'afficher le jour de la semaine correspondant" );
    echo("<br>");
    $nbr = 5;


    
    if ($nbr == 1){
        echo("Nous somme au Lundi");
    }
    elseif ($nbr == 2){
        echo("Nous somme au Mardi");
    }
    elseif ($nbr == 3){
        echo("Nous somme au Mercredi");
    }
    elseif ($nbr == 4){
        echo("Nous somme au Jeudi");
    }
    elseif ($nbr == 5){
        echo("Nous somme au Vendredi");
    }
    elseif ($nbr == 6){
        echo("Nous somme au samedi");
    }
    elseif ($nbr == 7){
        echo("Nous somme au Dimanche");
    }
    else{
        echo("votre nombre n'est pas compris entre 1 et 7");
    }
?>
