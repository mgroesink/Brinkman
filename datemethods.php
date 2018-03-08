<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 19-1-2018
 * Time: 11:58
 */



$format = '%A %d %B %Y %H:%M:%S';
$geformatteerde_datum = strftime($format);
echo "<br>Geformatteerde datum: $geformatteerde_datum";

setlocale(LC_TIME , "nld_NLD");
$ned = strftime($format);
echo "<br>NL geformatteerde datum: $ned";