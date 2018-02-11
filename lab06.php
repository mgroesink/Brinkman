<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 11-2-2018
 * Time: 10:44
 */

$brief = "
Beste <b><<abonnee>></abonnee></b>,<br><br>
U heeft het laatste nummer van ons magazine ontvangen.<br>
Omdat we u heel graag als abonnee willen houden, bieden we u een 
aantrekkelijke en exclusive korting: <br>
U betaalt <b><<korting>></b> in plaats van 65 euro.<br><br>
<i>Profiteer nu van deze aanbieding!</i><br><br>

Met vriendelijke groet,<br>
Sam Simons<br>
Hoofdredacteur<br>
";

$abonnees = array(
    array("Harrie van Breukelen" , 50),
    array("Connie van Breukhoven" , 50),
    array("Marcel Roesink" , 40),
);

function printLetters($item , $key){
    global $brief;
    $temp =  str_replace("<<abonnee>>" , $item[0] , $brief);
    echo str_replace("<<korting>>" , $item[1] , $temp);
    echo "<br>";
    echo str_pad("=" , 75,"=" , STR_PAD_RIGHT);
    echo "<br><br>";
}

array_walk($abonnees , "printLetters");