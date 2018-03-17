<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 8-3-2018
 * Time: 12:09
 */

include_once ("demo_external_functions.php");
if(isset($_GET["input"])) {
    $antwoord = addFive($_GET["input"]);
    echo "Het antwoord is" . $antwoord;
}
//addFive(1000);
//
//echo "<br>";
//
//getTemp("zondag" , "23:00");




//login("jjaspers01@student.rocvantwente.nl" , "KwikKwek&Kwak!12345");
?>

<form action="" method="get">

    <input type="number" id="input" name="input">

    <input type="submit" value="Bereken">


</form>
