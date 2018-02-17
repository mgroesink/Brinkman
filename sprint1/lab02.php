<!DOCTYPE html>
<html>
<head>
    <title>Lab 02</title>
</head>
<body>
<h3>php lab 02</h3>
<?php
$naam = "Marcel";
$nederlands = "8.5";
$engels = "7.7";
$rekenen = "6.7";
$programmeren = "8.5";
$databases = "9.4";

$gemiddeld1 = (
        floatval($nederlands) +
        floatval($engels) +
        floatval($engels) +
        floatval($rekenen) +
        floatval($programmeren) +
        floatval($databases)) / 6;

$naam2 = "Loni";
$nederlands2 = "8.9";
$engels2 = "8.7";
$rekenen2 = "9.7";
$programmeren2 = "9.5";
$databases2 = "9.2";

$gemiddeld1 = round($gemiddeld1, 2);
$gemiddeld2 = (
        floatval($nederlands2) +
        floatval($engels2) +
        floatval($engels2) +
        floatval($rekenen2) +
        floatval($programmeren2) +
        floatval($databases2)) / 6;
$gemiddeld2 = round($gemiddeld2, 2);

$ggemiddeld = round(($gemiddeld1 + $gemiddeld2) / 2, 1);


echo("<table border='1'> 
<caption>
<strong>Rapport</strong>
</caption>
<thead>
<tr><th>Naam</th><th>Nederlands</th><th>Engels
</th><th>Rekenen</th><th>Programmeren</th><th>Databases</th><th>Gemiddeld</th></tr>
</thead>
<tbody>
<tr>
<td>$naam</td> 
<td>$nederlands</td>
<td>$engels</td>
<td>$rekenen</td>
<td>$programmeren</td>
<td>$databases</td>
<td>$gemiddeld1</td>
</tr>
    
<tr>
<td>$naam2</td> 
<td>$nederlands2</td>
<td>$engels2</td>
<td>$rekenen2</td>
<td>$programmeren2</td>
<td>$databases2</td>
<td>$gemiddeld2</td>
</tr>


<tfoot>
<tr><td colspan='6'>Groep gemiddeld</td><td>$ggemiddeld</td></tr></tfoot></table>");


?>
</body>
</html>
