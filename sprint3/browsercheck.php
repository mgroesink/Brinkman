<!DOCTYPE html>
<html>
<head>
    <title>Browser check</title>

</head>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 17-2-2018
 * Time: 17:18
 */

//$useragent = $_SERVER["HTTP_USER_AGENT"];
//if(strpos(strtolower($useragent) , "edge") > 0){
//    echo "<div style='width:500px;height:500px;background-color: blue;position:absolute'></div>";
//} elseif(strpos(strtolower($useragent) , "chrome") > 0) {
//    echo "<div style='width:500px;height:500px;background-color: red;position:absolute'></div>";
//} elseif(strpos(strtolower($useragent) , "firefox") > 0) {
//    echo "<div style='width:500px;height:500px;background-color: brown;position:absolute'></div>";
//} else {
//    echo "<div style='width:500px;height:500px;background-color: black;position:absolute'></div>";
//}

function printArray($item , $key){
    echo "key: " .$key . "<br>value: " . $item . "<br><br>";
}

array_walk($_SERVER , "printArray");