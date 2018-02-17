<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Yahtzee game</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 4-2-2018
 * Time: 12:47
 */

$yahtzee = [0, 0, 0, 0, 0];

$yahtzee[0] = random_int(1, 6);
$yahtzee[1] = random_int(1, 6);
$yahtzee[2] = random_int(1, 6);
$yahtzee[3] = random_int(1, 6);
$yahtzee[4] = random_int(1, 6);
$sum = array_sum($yahtzee);
?>
<form>
    <h1>Resultaat</h1>
    <ul>
        <?php
        echo "<li>Steen 1: $yahtzee[0]</li>";
        echo "<li>Steen 2: $yahtzee[1]</li>";
        echo "<li>Steen 3: $yahtzee[2]</li>";
        echo "<li>Steen 4: $yahtzee[3]</li>";
        echo "<li>Steen 5: $yahtzee[4]</li>";
        ?>
    </ul>

    <br>

    <h4>Het totaal van de 5 stenen is <?= $sum;?></h4>
    <button>Gooi</button>
</form>
</body>
</html>