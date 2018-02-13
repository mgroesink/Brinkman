<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-2-2018
 * Time: 10:20
 */
$GLOBALS["url"] = "www.rocvantwente.nl";
global $email;
$email = "mroesink@rocvantwente.nl";

define("BIJDRAGE" , 0.10);
function doneren($bedrag){
    static $pot;
    static $hoogste = 0;
    $melding = "GIRO 555";
    echo "<br>URL: " . $GLOBALS["url"];
    echo "<br>Bedrag: " . $bedrag;
    global $email;
    echo "<br>E-mail: " . $email;
    $bijdrage = $bedrag * BIJDRAGE;
    $donatie = $bedrag + $bijdrage;
    $pot += $donatie;
    if($donatie > $hoogste) $hoogste = $donatie;
    echo "<br>Inclusief bijdrage: $donatie";
    echo "<br><span style='background-color: yellow'>
        Totaal bedrag in pot: $pot</span><br>";
    echo "<br><span style='background-color: lightblue'>
        Hoogste donatie tot nu toe: $hoogste</span><br>";}

doneren(100);
doneren(200);
doneren(300);