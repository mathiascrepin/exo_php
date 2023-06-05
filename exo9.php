<?php
    echo("Dans ce programme vous allez saisir une année et le programme se chargera de dire si cette année est bixessille ou non" );
    echo("<br>");
    $nbr =215;

    if ($nbr % 3 == 0 And $nbr % 5 == 0 ) {
        echo("votre est divisible par 3 et par 5");
    }
    elseif($nbr % 3 == 0 ){
        echo("votre est divisible par 3");
    }
    elseif ($nbr % 5 == 0){
        echo("votre est divisible par 5");
    }
    elseif ($nbr % 3 == 0 Or $nbr % 5 == 0 ) {
        echo("votre est ni divisible par 3 ni par 5");
    }

?>
