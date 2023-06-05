<?php
    echo("Dans ce programme vous allez saisir une année et le programme se chargera de dire si cette année est bixessille ou non" );
    echo("<br>");
    $annee =215;

    if ($annee % 4 == 0 ) {
        echo("votre année est bixessille");
    }
    elseif($annee % 100 == 0){
        echo("Il s'agit d'une année normal");
    }
    else{
        echo("entrez une année correcte");
    }
        

?>
