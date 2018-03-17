<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 16-3-2018
 * Time: 14:00
 */

$date1 = new DateTime("1958-01-10");
$date2 = new DateTime();


$interval = $date2->diff($date1);
$years = $interval->y;
$months = $years * 12 + $interval->m;
$days = $interval->days;
$weeks = $days / 7;
$hours = $days * 24 + $interval->h;
$minutes = $hours * 60 + $interval->i;
$seconds = $minutes * 60 + $interval->s;

echo "Ik ben " . $months . " maanden oud.<br>";
echo "Ik ben " . $weeks . " weken oud.<br>";
echo "Ik ben " . $days . " dagen oud.<br>";
echo "Ik ben " . $hours . " uren oud.<br>";
echo "Ik ben " . $minutes  . " minuten oud.<br>";
echo "Ik ben " . $seconds  . " seconden oud.<br>";

