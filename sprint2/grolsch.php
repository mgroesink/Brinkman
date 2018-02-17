<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 5-2-2018
 * Time: 19:52
 */

$age = random_int(10 , 30);
if($age >= 18){
    header("Location: http://www.grolsch.nl?newwindow=true");
} else {
    header("Location: https://www.alcoholinfo.nl/publiek?newwindow=true");
}