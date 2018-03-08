<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 8-3-2018
 * Time: 12:10
 */

$temps = array(
    "maandag" => array("08:00" => 5.7, "12:00" => 7.5, "23:00" => 4.8)
, "dinsdag" => array("08:00" => 4.7, "12:00" => 6.5, "23:00" => 5.8)
, "woensdag" => array("08:00" => 7.7, "12:00" => 9.5, "23:00" => 7.8)
, "donderdag" => array("08:00" => 10.7, "12:00" => 12.5, "23:00" => 4.8)
, "vrijdag" => array("08:00" => 9.7, "12:00" => 10.5, "23:00" => 8.8)
, "zaterdag" => array("08:00" => 8.7, "12:00" => 9.5, "23:00" => 6.8)
, "zondag" => array("08:00" => 11.7, "12:00" => 13.5, "23:00" => 12.8)
);

$users = array(
    "lvanderwel01@student.rocvantwente.nl" => array("password" => "PieterTjePuk!12345", "firstname" => "Laurence", "lastname" => "van der Wel"),
    "lstaal01@student.rocvantwente.nl" => array("password" => "DonaldDuck!12345", "firstname" => "Luuc", "lastname" => "Staal"),
    "yjaspers01@student.rocvantwente.nl" => array("password" => "KwikKwek&Kwak!12345", "firstname" => "Yari", "lastname" => "Jaspers")
);

function getTemp($day, $time)
{
    global $temps;
    $temp = $temps[$day][$time];
    echo "De temperatuur op " . $day . " om " . $time . " uur was " . $temp . " graden Celsius";
}

function addFive($x)
{

    $total = $x + 5;
    echo "The new value is: " . $total;
}

function login($username, $password)
{
    global $users;
    $userexists = array_key_exists($username, $users);
    if ($userexists) {
        if ($users[$username]["password"] == $password) {
            echo "Welkom op mijn website";
            return;
        }

    }

    echo "Inloggen mislukt";

}

