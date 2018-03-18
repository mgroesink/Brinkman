<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-2-2018
 * Time: 17:15
 */

$boeken = array(
    array("titel" => "Stoner" , "auteur" => "John Williams" , "genre" => "fictie" , "prijs"=> 19.99),
    array("titel" => "De cirkel" , "auteur" => "Dave Eggers" , "genre" => "fictie" , "prijs"=> 22.50),
    array("titel" => "Rayuela" , "auteur" => "Julio Cortazar" , "genre" => "fictie" , "prijs"=> 25.50),
);

function prijsLijst($item , $key){
    global $boeken;
    echo "prijs: € " . number_format( $item["prijs"] , 2 , "," , ".") . "<br>";
}

array_walk($boeken , "prijsLijst");