<?php
    echo("Dans ce programme vous allez saisir un nombre compris entre 1 et 12  et le programme se chargera de d'afficher le nombre de jour que contient le mois correspondant" );
    echo("<br>");
    $nbr = 5;

    switch ($nbr) {
        case 1:
            echo("Il s'agit du mois de Janvier. ce mois contient 31 jours");
            break;
        case 2:
            echo("Il s'agit du mois de Février. ce mois contient 28 jours");
            break;
        case 3:
            echo("Il s'agit du mois de Mars. ce mois contient 31 jours");
            break;
        case 4:
            echo("Il s'agit du mois de Avril. ce mois contient 30 jours");
            break;
        case 5:
            echo("Il s'agit du mois de Mai. ce mois contient 31 jours");
            break;
        case 6:
            echo("Il s'agit du mois de Juin. ce mois contient 30 jours");
            break;
        case 7:
            echo("Il s'agit du mois de Juillet. ce mois contient 31 jours");
            break;
        case 8:
            echo("Il s'agit du mois de Aout. ce mois contient 31 jours");
            break;
        case 9:
            echo("Il s'agit du mois de Septembre. ce mois contient 30 jours");
            break;
        case 10:
            echo("Il s'agit du mois de Octobre. ce mois contient 31 jours");
            break;
        case 11:
            echo("Il s'agit du mois de Novembre. ce mois contient 30 jours");
            break;
        case 12:
            echo("Il s'agit du mois de Décembre. ce mois contient 31 jours");
            break;
        
        default:
           echo("votre nombre n'est pas compris entre 1 et 12");
            break;
    }
?>
