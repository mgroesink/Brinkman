<?php
/**
 * Created by PhpStorm.
 * User: Marcel Roesink
 * Date: 9-2-2018
 * Time: 08:53
 */

// Maak een array aan voor drie albums
$playlist = array(
    array("genre" => "pop" , "auteur" => "Rolling Stones" , "titel" => "Black and Blue"),
    array("genre" => "rock" , "auteur" => "Metallica" , "titel" => "Death Magnetic"),
    array("genre" => "pop" , "auteur" => "Coldplay" , "titel" => "Parachutes"),
);

// Functie om elementen uit array weer te geven
function printArray($item , $key) {
    echo "<br>$key" . ": " . "<i>$item</i>";
}


/**
 * @param $item
 * @param $key
 */
function printTracks($item , $key){

    echo "Track " . ($key + 1) . ": " . $item["genre"] . " | " . $item["auteur"] . " | " . $item["titel"];
    echo "<br>";
}


/**
 * @param $genre
 * @param $auteur
 * @param $titel
 */
function voegAlbumToe($genre , $auteur , $titel){

    global $playlist;
    $nieuwItem =array("genre" => $genre , "auteur" => $auteur , "titel" => $titel);
    array_push($playlist , $nieuwItem  );
}
array_walk_recursive($playlist , "printArray");


voegAlbumToe("r&b" , "Beyoncé" , "4");
echo array_walk_recursive($playlist , "printArray");
echo "<br>";
array_walk($playlist , "printTracks");





