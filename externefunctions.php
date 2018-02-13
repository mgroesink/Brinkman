<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 11-2-2018
 * Time: 17:48
 */

function servicekosten($betaalwijze)
{
    $servicekosten = 0;
    switch (strtolower($betaalwijze)) {
        case "visa":
            $servicekosten = 10;
            break;
        case "mastercard":
            $servicekosten = 12;
            break;
        case "paypal":
            $servicekosten = 14;
            break;
        case "ideal":
            $servicekosten = 16;
            break;

    }
    return $servicekosten;
}

function bestelRules($genre, $aantal)
{
    $rules = array(
        "klassiek" => array("min" => 3, "max" => 7),
        "latin" => array("min" => 1, "max" => 5),
        "world" => array("min" => 2, "max" => 5),
        "rock" => array("min" => 3, "max" => 7),
        "r&b" => array("min" => 4, "max" => 7),
        "pop" => array("min" => 5, "max" => 7),
    );
    return $aantal >= $rules[strtolower($genre)]["min"] &&
        $aantal <= $rules[strtolower($genre)]["max"];
}

function overzicht($albums, $korting, $servicekosten)
{
    $totaal = 0;
    echo "<table>";
    echo "<tr>";
    echo "<td style='background: yellow;font-weight: bold'>";
    echo "Genre";
    echo "</td>";
    echo "<td style='background: yellow;font-weight: bold'>";
    echo "Artiest";
    echo "</td>";
    echo "<td style='background: yellow;font-weight: bold'>";
    echo "Titel";
    echo "</td>";
    echo "<td style='background: yellow;font-weight: bold'>";
    echo "Aantal";
    echo "</td>";
    echo "<td style='background: yellow;font-weight: bold'>";
    echo "Prijs";
    echo "</td>";
    echo "<td style='background: yellow;font-weight: bold'>";
    echo "Bedrag";
    echo "</td>";
    echo "<tr>";

    for ($i = 0; $i < count($albums); $i++) {
        echo "<tr>";
        echo "<td>" . $albums[$i]["genre"] . "</td>";
        echo "<td>" . $albums[$i]["artiest"] . "</td>";
        echo "<td>" . $albums[$i]["titel"] . "</td>";
        echo "<td>" . $_POST["aantal"][$i] . "</td>";
        echo "<td>" . number_format($albums[$i]["prijs"],2
                ,",",".") . "</td>";
        echo "<td align='right'>" . number_format($albums[$i]["prijs"]
                * $_POST["aantal"][$i],2,"," , ".") . "</td>";
        echo "</tr>";
        $totaal += ($albums[$i]["prijs"]
            * $_POST["aantal"][$i]);
    }
    echo "<tr>";
    echo "<td colspan=5>Totaal</td>";
    echo "<td align='right'>" . number_format($totaal , 2 , "," , ".") . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td colspan=5>Korting</td>";
    echo "<td align='right'>" . number_format($totaal * ($korting / 100),2,"," , ".")
        . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td colspan=5>Servicekosten</td>";
    echo "<td align='right'>" . number_format($servicekosten,2,"," , ".") . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td colspan=5>Te betalen</td>";
    echo "<td align='right'>" .
        number_format($totaal - ($totaal * ($korting / 100)) + $servicekosten , 2 ,
    "," , ".") . "</td>";
    echo "</tr>";
    echo "</table>";
}