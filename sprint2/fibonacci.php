<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 6-2-2018
 * Time: 07:10
 */

$fibo = new SplFixedArray(20);
$fibo[0] = 1;
$fibo[1] = 2;
for($i = 2 ; $i < 20 ; $i++){
    $fibo[$i] = $fibo[$i - 2] + $fibo[$i - 1];
}

echo "<h1>De eerste 20 fibonacci getallen</h1>";
echo "<br>";
echo "<ol>";
foreach ($fibo as $fibonumber){
    echo "<li>" . $fibonumber;
}
echo "</ol>";