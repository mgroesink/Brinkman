<!DOCTYPE html>
<html>
<head>
    <title>BMI calculator</title>
    <style>
        #bmi {
            font-size:72px;
        }
        img {
            border-radius: 25px;
        }
    </style>
</head>
<body>
<form action="" method="get">
    <h1>Bereken uw BMI</h1>
    <img src="weegschaal-OMG.jpg"/>
    <table>
        <tr>
            <td>Lengte</td><td><input name="length" placeholder="Lengte in cm." type="number" required="required"></td>
        </tr>
        <tr>
            <td>Gewicht</td><td><input name="weight" placeholder="Gewicht in kg." required="required"></td>
        </tr>
    </table>
    <br>
    <input type="submit" name="submit" style="margin:20px"/>
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 17-2-2018
 * Time: 12:34
 */
if(isset($_GET["submit"])) {
    $bmi = $_GET["weight"] / ($_GET["length"] *$_GET["length"]) * 10000;
    if(!isset($_GET["lengte"])) {
        die("Lengte is een verplicht veld.");
    }
    $color = "";
    $result = "";
    if($bmi < 18.5){
        $color = "yellow";
        $result = "Uw gewicht is te laag.";
    } else if ($bmi < 25){
        $color = "green";
        $result = "Uw gewicht is prima.";
    } else if ($bmi < 30){
        $color = "orange";
        $result = "U heeft overgewicht.";
    } else if ($bmi < 40) {
        $color = "red";
        $result = "U heeft ernstig overgewicht.";
    } else {
        $color = "darkred";
        $result = "U heeft ziekelijk overgewicht";
    }
    echo "<span id='bmi' style='color:$color'> Uw BMI is " . number_format($bmi , 1 , "," , ".") . "</span>";
    echo "<br>";
    echo $result;
}
