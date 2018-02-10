<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 7-2-2018
 * Time: 19:40
 */

// Maak een drietal numerieke arrays
$student = ["0123456" , "Jaap" , "Cornelissen" , "Hengelo"];
$workingdays = Array("Maandag" , "Dinsdag" , "Woensdag" , "Donderdag" , "Vrijdag");
$weekend = [];
$weekend[0] = "Zaterdag";
$weekend[1] = "Zondag";

// Laat de code op het scherm zien waarmee de arrays zijn aangemaakt
echo "<code>" . '$student = ["0123456" , "Jaap" , "Cornelissen" , "Hengelo"];' . "</code><br>";
echo "<code>" . '$workingdays = Array("Maandag" , "Dinsdag" , "Woensdag" , "Donderdag" , "Vrijdag");' . "</code><br>";

echo <<<RSK
<code>
\$weekend = [];<br>
\$weekend[0] = "Zaterdag";<br>
\$weekend[1] = "Zondag";<br>
</code>
<br>
RSK;


// Laat de inhoud van de arrays zien
echo "<pre>" , print_r($student , true) , "</pre>";
echo "<pre>" , print_r($workingdays , true) , "</pre>";
echo "<pre>" , print_r($weekend , true) , "</pre>";

// Zoek 3 items op in de array
// Joop bestaat niet en voor de tweede zoekopdracht wordt geen resultaat getoond
echo array_search("Jaap" , $student) . "<br>";
echo array_search("Joop" , $student) . "<br>";
echo array_search("Hengelo" , $student) . "<br>";

// Andere schrijfwijze om een numerieke array aan te maken
$student = Array("0123456" , "Jaap" , "Cornelissen" , "Hengelo");

// Code laten zien
echo "<code>" . '$student = Array("0123456" , "Jaap" , "Cornelissen" , "Hengelo");' . "</code>";


// Inhoud array laten zien
echo "<pre>" , print_r($student , true) , "</pre>";


// Voeg Joop toe aan de array
array_push($student , "Joop");
echo "<pre>" , print_r($student , true) , "</pre>";

// Nu wordt ook voor de tweede zoekopdracht het resultaat getoond
echo array_search("Jaap" , $student) . "<br>";
echo array_search("Joop" , $student) . "<br>";
echo array_search("Hengelo" , $student) . "<br>";


// Maak een associatieve array aan
$docent = Array( 	"Code" => "RSK01",   	"Voornaam" => "Marcel" ,	"Achternaam" => "Roesink" ,
	"Woonplaats" => "Hengelo" ,
	"Leeftijd" => 60);

// Toon de code om de array aan te maken
echo
'$docent = Array( 	"Code" => "RSK01",   	"Voornaam" => "Marcel" ,	"Achternaam" => "Roesink" ,
	"Woonplaats" => "Hengelo" ,
	"Leeftijd" => 60);';

// Laat de inhoud van de array zien
echo "<pre>" , print_r($docent , true) , "</pre>";

// Voeg geslacht toe
array_push($docent , "Man");

// Toon nieuwe inhoud van de array inclusief geslacht
echo "<pre>" , print_r($docent , true) , "</pre>";


// Maak een variabele aan om voornaam, achternaam en leeftijd te laten zien
$doc = $docent["Voornaam"] . " " .	$docent["Achternaam"] .
" is " . $docent["Leeftijd"] .
" jaar oud.<br>";

// Toon de inhoud van de variabele
// Marcel Roesink is 60 jaar oud
echo $doc;

// Maak een numerieke array aan inclusief een array waarin wat cijfers zijn opgeslagen
// Merk op dat de betekenis van de cijfers niet te achterhalen is
// zonder verdere kennis van de opbouw van de array
$student = ["0123456" , "Jaap" , "Cornelissen" , "Hengelo" , [5 , 8 , 5 ,7]];


// Toon de code om de array aan te maken
echo "<code>" . '$student = ["0123456" , "Jaap" , "Cornelissen" , "Hengelo" , [5 , 8 , 5 ,7]];' . "</code>";

// Laat de inhoud van de array zien
echo "<pre>" , print_r($student , true) , "</pre>";


// Dezelfde array maar nu als een associatieve twee-dimensionale array
$student = ["studentnr" => "0123456" , "Voornaam" => "Jaap" ,
    "Achternaam" => "Cornelissen" , "Woonplaats" => "Hengelo" ,
    "Cijfers" => ["Engels" => 5 , "Programmeren" => 8 , "Databases" => 5 , "Nederlands" => 7]];

// Toon weer de code van de array
echo "<code>" . '$student = ["studentnr" => "0123456" , "Voornaam" => "Jaap" , 
    "Achternaam" => "Cornelissen" , "Woonplaats" => "Hengelo" , "Cijfers" =>
    ["Engels" => 5 , "Programmeren" => 8 , "Databases" => 5 , "Nederlands" => 7]];' . "</code>";

// Toon de inhoud van de array
// Merk op dat nu veel duidelijker is welke informatie wordt weergegeven
echo "<pre>" , print_r($student , true) , "</pre>";



