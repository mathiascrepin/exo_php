<?php
    echo("Quel est votre age?");
    echo("<br>");
    $age = 15;
    if ($age < 18){
        echo("vous etes mineur");

    }
    elseif ($age > 18){
        echo("vous etes majeur");
    }
        
    else {
        echo("vous n'existez pas");
    }
?>
