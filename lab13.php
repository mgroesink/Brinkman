
<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-2-2018
 * Time: 10:04
 */

$kleuren["oranje"] = "orange";
$kleuren["rood"] = "red";
$kleuren["paars"] = "purple";
$kleuren["groen"] = "green";
$kleuren["blauw"] = "blue";
$kleuren["geel"] = "yellow";
foreach ($kleuren as &$kleur){
    if($kleur == "yellow") $kleur = "black";
    $span = "<span style='color:" .$kleur . "'>";
    echo "<br>$span Deze tekst is $kleur</span>";
}