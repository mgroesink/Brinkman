<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 3-2-2018
 * Time: 16:36
 */

$getal1 = random_int(1 , 1000);
$getal2 = random_int(1 , 1000);
?>
<ul style="list-style: none">
<?php
    echo "<li>" . $getal1 . " < " . $getal2 . " = " . (($getal1 < $getal2)?"true":"false") . "</li>";
echo "<li>" . $getal1 . " > " . $getal2 . " = " . (($getal1 > $getal2)?"true":"false" . "</li>");
echo "<li>" . $getal1 . " == " . $getal2 . " = " . (($getal1 == $getal2)?"true":"false" . "</li>");
echo "<li>" . $getal1 . " === " . $getal2 . " = " . (($getal1 === $getal2)?"true":"false" . "</li>");
echo "<li>" . $getal1 . " >= " . $getal2 . " = " . (($getal1 >= $getal2)?"true":"false" . "</li>");
echo "<li>" . $getal1 . " <= " . $getal2 . " = " . (($getal1 <= $getal2)?"true":"false" . "</li>");
echo "<li>" . $getal1 . " != " . $getal2 . " = " . (($getal1 != $getal2)?"true":"false" . "</li>");
?>
</ul>