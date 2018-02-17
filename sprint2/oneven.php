<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 5-2-2018
 * Time: 19:47
 */

echo "<h1>Oneven getallen tussen 1 en 100</h1>";
for($i = 1 ; $i < 100 ; $i++) {
    if($i % 2 == 0) continue;
    echo $i . "<br>";
}