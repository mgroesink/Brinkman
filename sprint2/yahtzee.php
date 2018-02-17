<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 6-2-2018
 * Time: 06:49
 */
$yahtzee = [0,0,0,0,0];
$counter = 0;
$sum = 0;
do {
    $counter++;
    for ($i = 0; $i <= 5; $i++) {
        $yahtzee[$i] = random_int(1, 6);
    }
    $sum += array_sum($yahtzee);
} while($yahtzee[0] != $yahtzee[1] || $yahtzee[0] != $yahtzee[1] ||
$yahtzee[0] != $yahtzee[2] ||  $yahtzee[0] != $yahtzee[3] ||  $yahtzee[0] != $yahtzee[4] );

echo "<div style='margin:20px;border:5px solid green;background-color:lightyellow;width:50%;padding:25px;'>";
echo "Er is ïn " . $counter . " keer een yahtzee gegooid van " . $yahtzee[0] . " en het gemiddelde van alle worpen is " .
    round(($sum / $counter) , 2 . ".");
echo "</div>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        My Yahtzee game
    </title>
</head>
<body>
<form>
<button style="margin:20px;">Gooi opnieuw</button>
</form>
</body>
</html>