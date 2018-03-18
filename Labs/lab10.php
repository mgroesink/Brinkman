<?php
include_once("externefunctions.php");
$albums = array(
    array("code" => "001", "artiest" => "Cesaria Evora",
        "titel" => "Em Um Concerto", "tracks" => 10, "prijs" => 9.99 ,
        "cover" => "evora.jpg"),
    array("code" => "002", "artiest" => "Manu Chao",
        "titel" => "Clandestino", "tracks" => 12, "prijs" => 9.95 ,
        "cover" => "manuchao.jpg")
)
?>
    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Mijn Muziek</title>
        <style>
            body {
                padding: 20px;
            }
        </style>
    </head>
    <body>
    <!--Shoppingcart begint hier-->
    <table border=0 cellpadding=0 cellspacing=0 width=100%>
        <form name="order"
              action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <?php
            for($i = 0 ; $i < count($albums) ; $i++){
                echo "<tr>";
                echo "<td>";
                echo "<img width='150' src='images/" . $albums[$i]["cover"] . "'";
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>";
                echo $albums[$i]["artiest"] .
                    $albums[$i]["titel"] . " Tracks: " .
                    $albums[$i]["tracks"] . " Prijs: " .
                    $albums[$i]["prijs"];
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>";
                echo "Aantal: " . "<input type=\"text\" size=2 maxlength=3 name=\"aantal[$i]\" value=\"0\"
                                   style=\"background-color:#f8ce6c\"";
                echo "</td>";
                echo "</tr>";
            }
            ?>

            <tr>
                <td>
                    <img src="images/evora.jpg" width="100px" alt="X"/>
                </td>
            </tr>
            <tr>
                <td>
                    Cesaria Evora "Em Um Concerto" Tracks:10 Prijs: € 10.00
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="albumcode[0]" value="001"/>
                    <input type="hidden" name="artiest[0]" value="Cesaria Evora "/>
                    <input type="hidden" name="titel[0]" value="Em Um Concerto"/>
                    <input type="hidden" name="tracks[0]" value="10"/>
                    <input type="hidden" name="prijs[0]" value="10"/>
                    <input type="hidden" name="genre[0]" value="World"/>
                    Aantal: <input type="text" size=2 maxlength=3 name="aantal[0]" value="0"
                                   style="background-color:#f8ce6c"/>
                    <hr/>
                </td>
            </tr>

            <tr>
                <td>
                    <img src="images/juanes.jpg" width="100px" alt="X"/>
                </td>
            </tr>
            <tr>
                <td>
                    Juanes "Juanes title" Tracks:10 Prijs: € 25.00
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="albumcode[1]" value="002"/>
                    <input type="hidden" name="artiest[1]" value="Juanes "/>
                    <input type="hidden" name="titel[1]" value="Juanes title"/>
                    <input type="hidden" name="tracks[1]" value="8"/>
                    <input type="hidden" name="prijs[1]" value="25"/>
                    <input type="hidden" name="genre[1]" value="World"/>
                    Aantal: <input type="text" size=2 maxlength=3 name="aantal[1]" value="0"
                                   style="background-color:#f8ce6c"/>
                    <hr/>
                </td>
            </tr>

            <tr>
                <td>Korting:<br/>
                    <input type="checkbox" name="student" value="15"/>Student 15%<br/>
                    <input type="checkbox" name="senior" value="10"/>Senior 10%<br/>
                    <input type="checkbox" name="klant" value="5"/>Klant 5%<br/>
                    <hr/>
                </td>
            </tr>

            <tr>
                <td>Selecteer betaalwijze
                    <select name="betaalwijze">
                        <option value="visa">Visa</option>
                        <option value="mastercard">Mastercard</option>
                        <option value="paypal">PayPal</option>
                        <option value="ideal">Ideal</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" width="300px" name="Bestellen"
                           value=" Bestellen "/>
                    <hr/>
                </td>
            </tr>
        </form>
    </table>
    <!--Shoppingcart eindigt hier--> </body>
    </html>
<?php
if (isset($_POST["Bestellen"])) {
    if (isset($_POST["aantal"][0])) {
        if (!bestelRules($_POST["genre"][0], $_POST["aantal"][0])) {
            echo "Ongeldig aantal";
            return;
        }
        echo "Aantal: " . array_sum($_POST["aantal"]) . "<br>";
        $korting = 0;
        if (isset($_POST["student"])) {
            $korting += 15;
        }
        if (isset($_POST["klant"])) {
            $korting += 5;
        }
        if (isset($_POST["senior"])) {
            $korting += 10;
        }
        echo "Korting is: " . $korting . " procent<br>";
        $totaal = 0;
        for ($i = 0; $i < count($_POST["aantal"]); $i++) {
            $totaal += $_POST["aantal"][$i] * $_POST["prijs"][$i];
        }
        if (isset($_POST["betaalwijze"])) {
            echo "U heeft ervoor gekozen om met " . $_POST["betaalwijze"] . " te betalen.<br>";
        }

        $servicekosten = servicekosten($_POST["betaalwijze"]);
        echo "Servicekosten: € " . number_format($servicekosten, 2, ",", ".") . "<br><br>";

        $totaal = ($totaal * (100 - $korting)) / 100 + $servicekosten;
        echo "<h3>Totaal te betalen: € " .
            number_format($totaal, 2, ",", ".") . "</h3><br>";
    }

}
?>