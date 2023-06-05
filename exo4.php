<?php
    echo("Dans ce programme vous allez saisir trois nombres et le programme se chargera de d'afficher le plus grand" );
    echo("<br>");
    $nbr1 = 15;
    $nbr2 = 85;
    $nbr3 = 25;

    
    if ($nbr1 > $nbr2 And $nbr1 > $nbr3 ){
        echo($nbr1);
    }
    elseif ($nbr2 > $nbr1 And $nbr2 > $nbr3){
        echo($nbr2);
    }
        
    else {
        echo($nbr3);
    }
?>
