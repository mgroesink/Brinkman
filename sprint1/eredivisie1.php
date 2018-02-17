<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 5-2-2018
 * Time: 17:44
 */

$eredivisie = array
(
    array(15 , "FC Twente" , "Enschede" , 21 , 4 , 4 , 13 , "fctwente.png"),
    array(12 , "Heracles" , "Almelo" , 21 , 6 , 6 , 9 , "heracles.png")
);

echo "<h1>Stand eredivie per " . date('j-n-Y')  ."</h1>";
echo "<table style='border:1px solid black;border-collapse: collapse'>";
echo "<tr>";
echo "<th>Positie</th>";
echo "<th>Logo</th>";
echo "<th>Club</th>";
echo "<th>Stad</th>";
echo "<th>Gespeeld</th>";
echo "<th>Gewonnen</th>";
echo "<th>Gelijk</th>";
echo "<th>Verloren</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . $eredivisie[1][0] . "</td>";
echo "<td><img src='images/" . $eredivisie[1][7] . "'</td>";
echo "<td>" . $eredivisie[1][1] . "</td>";
echo "<td>" . $eredivisie[1][2] . "</td>";
echo "<td>" . $eredivisie[1][3] . "</td>";
echo "<td>" . $eredivisie[1][4] . "</td>";
echo "<td>" . $eredivisie[1][5] . "</td>";
echo "<td>" . $eredivisie[1][6] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . $eredivisie[0][0] . "</td>";
echo "<td><img src='images/" . $eredivisie[0][7] . "'</td>";
echo "<td>" . $eredivisie[0][1] . "</td>";
echo "<td>" . $eredivisie[0][2] . "</td>";
echo "<td>" . $eredivisie[0][3] . "</td>";
echo "<td>" . $eredivisie[0][4] . "</td>";
echo "<td>" . $eredivisie[0][5] . "</td>";
echo "<td>" . $eredivisie[0][6] . "</td>";
echo "</tr>";


echo "</table>";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <style>
        td , th {
            padding: 2px;
            border:1px solid blue;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>

</body>
</html>



