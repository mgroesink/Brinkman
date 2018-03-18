<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 11-3-2018
 * Time: 09:42
 */
//$user = array(
//    "naam" => "Marcel",
//    "email" => "mroesink@rocvantwente.nl",
//    "wachtwoord" => "",
//    "foto" => "marcel.jpg"
//);
//
//$encoded = json_encode($user);
//echo "<br>userArray: <br>";
//var_dump($user, true);
//$userJsonString = json_encode($user);
//echo "<br>userJsonStringLiteral: <br>" . $userJsonString;

$boekenJasonLiteral = '[
    {"titel" : "Stoner" , "auteur" : "John Williams" , "genre" : "fictie" , "prijs" : 19.99},
    {"titel" : "De Cirkel" , "auteur" : "Dave Eggers" , "genre" : "fictie" , "prijs" : 22.50},
    {"titel" : "Rayela" , "auteur" : "Julio Cortazar" , "genre" : "fictie" , "prijs" : 25.50}
    ]';
echo $boekenJasonLiteral;
$boeken = json_decode($boekenJasonLiteral , true);
echo "<br> boeken: " . count($boeken) . "<br>";
$counter = 1;
foreach ($boeken as $boek){
    echo "<br><br>Boek " . $counter;
    echo "<br>Titel: ". $boek["titel"];
    echo "<br>Auteur: ". $boek["auteur"];
    echo "<br>Genre: ". $boek["genre"];
    echo "<br>Prijs: ". $boek["prijs"];
    $counter++;
}

echo "<br> Opgave 65: " . count($boeken) . "<br>";
$boekenObj = json_decode($boekenJasonLiteral);
foreach ($boekenObj as $boek){
    echo "<br>Titel: ". $boek->titel;
    echo "<br>Auteur: ". $boek->auteur;
    echo "<br>Genre: ". $boek->genre;
    echo "<br>Prijs: ". $boek->prijs;

}