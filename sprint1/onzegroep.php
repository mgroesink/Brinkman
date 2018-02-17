<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
    <?php
    $firstnames = array("wag01" => "Gerard", "rsk01" => "Marcel",
        "lgi01" => "Loni", "rif01" => "Frans", "bwd01" => "Bert", "mjk02" => "Marcel");
    $lastnames = array("wag01" => "Wargers", "rsk01" => "Roesink",
        "lgi01" => "Gojani", "rif01" => "Rikkerink", "bwd01" => "van de Woord", "mjk02" => "Jansink");
    $cities = array("wag01" => "Denekamp", "rsk01" => "Hengelo",
        "lgi01" => "De Lutte", "rif01" => "Enschede", "bwd01" => "Enschede", "mjk02" => "Hengelo");
    $ages = array("wag01" => 50, "rsk01" => 60,
        "lgi01" => 45, "rif01" => 62, "bwd01" => 50, "mjk02" => 50);

    $random = random_int(0, count($firstnames) - 1);


    echo "<b>Voornaam:</b> " . array_values($firstnames)[$random] . "<br>";
    echo "<b>Achternaam:</b> " . array_values($lastnames)[$random] . "<br>";
    echo "<b>Woonplaats:</b> " . array_values($cities)[$random] . "<br>";
    echo "<b>Leeftijd:</b> " . array_values($ages)[$random] . "<br>";
    echo "<br>";
    ?>

    <button>Selecteer</button>
</form>
</body>
</html>