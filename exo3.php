<?php
    echo("Dans ce programme vous allez saisir un nombre et le programme se chargera de verifier si votre nombre est positif ou négatif et l'affiche?");
    echo("<br>");
    $age = 15;
    if ($age < 0){
        echo($age);
        echo("votre nobre est négatif");

    }
    elseif ($age > 0){
        echo($age);
        echo("votre nobre est positif");
    }
        
    else {
        echo("votre nobre est egale a zero");
    }
?>
