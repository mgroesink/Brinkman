<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 19-1-2018
 * Time: 11:20
 */

$breedte = 10;
$hoogte = 5;
$lengte = 11;

$oppervlakte = $breedte * $lengte;
$inhoud = $oppervlakte * $hoogte;

echo "De oppervlakte is \t\t\t<em>" . $oppervlakte . "</em>";
echo "<br/>";
echo "De inhoud is \t\t\t\t<em>" .$inhoud . "</em>";