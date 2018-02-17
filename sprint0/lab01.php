<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 3-2-2018
 * Time: 10:53
 */


$breedte = 10;
$lengte = 11;
$hoogte = 5;

$oppervlakte = $breedte * $lengte;
echo "Containeroppervlakte is:  $oppervlakte";

$volume = $oppervlakte * $hoogte;
echo "<br>Containervolume is:  $volume";
