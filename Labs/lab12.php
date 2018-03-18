<!DOCTYPE html>
<html lang="nl">
<head>
    <title>do-while-lus</title>
</head>
<body>
<h3>Voorbeeld van de do-while-lus</h3>
<?php
echo "<br>Reken het saldo uit zolang saldo lager dan 2000 is";
$saldo = 1000;
$rente = .1;
$maand = 1;
echo "<br>Beginsaldo is: $saldo";
echo "<br>START...";
while ($saldo < 2000) {
    if($maand == 2){
        echo "<br>Februari telt niet mee";
        $maand++;
        continue;
    }
    if($saldo > 2000){
        echo "Maximale saldo van 2000 is bereikt";
        break;
    }
    if($maand == 6 && $saldo < 1000){
        echo "Je saldo is te laag";
        return;
    }
    $saldo = $saldo +  ($saldo * $rente);
    //$saldo = sprintf("%0.2f" , $saldo);
    echo "<br>Maand: $maand je saldo is: $saldo";
    $maand++;
}
echo "<br>FINISH";
?>
</body>
</html>
