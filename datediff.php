<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 16-3-2018
 * Time: 15:43
 */
$date1;
$date2;
if(isset($_GET["date1"])){
    global $date1;
    $date1 = date_create($_GET["date1"]);

}
if(isset($_GET["date2"])){
    global $date2;
    $date2 = date_create($_GET["date2"]);

}



?>

<!DOCTYPE html>
<html lang="nl">
<head>
<style>
    div {
        display: inline-block;
        position: fixed;
        padding: 25px;
        border-radius: 25px;
        border:5px solid blue;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 30%;
        height: 25%;
        margin: auto;
        background-color: #f3f3f3;
    }

    input[type="submit"]{
        margin:20px 0 20px 0;
    }
</style>
</head>
<body>
<form action="" method="get">
    <div>

    <h1>Bereken verschil tussen 2 datums</h1>

    Selecteer de eerste datum <input type="date" name="date1" id="date1" required="required"/><br><br>
    Selecteer de tweede datum <input type="date" name="date2" id="date2" required="required"/><br>
    <input type="submit" value="Bereken"/>
    <?php
    if(isset($_GET["date1"])){
        $interval = $date2->diff($date1);
        setlocale(LC_TIME , "nld_NLD");
        echo "<br>Het aantal dagen tussen " . strftime("%d %B %Y" , $date1->getTimestamp()) . " en " . strftime("%d %B %Y" , $date2->getTimestamp()) . " is " . $interval->days;

    }
    ?>
    </div>
</form>
</body>
</html>
