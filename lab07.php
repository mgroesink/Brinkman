<!DOCTYPE html> <html lang="nl"> <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Mijn Muziek</title>
    <style>
        body {
            padding:20px;
        }
    </style>
</head>
<body>
<!--Shoppingcart begint hier-->
<table border=0 cellpadding=0 cellspacing=0 width=100%>
    <form name="order"
          action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <tr> <td>
                <img src="images/evora.jpg" width="100px" alt="X" />
            </td> </tr>
        <tr>
            <td>
                Cesaria Evora "Em Um Concerto" Tracks:10 Prijs: 9.99 </td>
        </tr> <tr>
            <td>
                <input type="hidden" name="albumcode[0]" value="001" />
                <input type="hidden" name="artiest[0]" value="Cesaria Evora " />
                <input type="hidden" name="titel[0]" value="Em Um Concerto" />
                <input type="hidden" name="tracks[0]" value="10" />
                <input type="hidden" name="prijs[0]" value="9.99" />
                <input type="hidden" name="genre[0]" value="World" />
                Aantal: <input type="text" size=2 maxlength=3 name="aantal[0]" value="0" style="background-color:#f8ce6c" />
                <hr />
            </td>
        </tr>

        <tr> <td>
                <img src="images/juanes.jpg" width="100px" alt="X" />
            </td> </tr>
        <tr>
            <td>
                Juanes "Juanes title" Tracks:10 Prijs: 19.99 </td>
        </tr> <tr>
            <td>
                <input type="hidden" name="albumcode[1]" value="002" />
                <input type="hidden" name="artiest[1]" value="Juanes " />
                <input type="hidden" name="titel[1]" value="Juanes title" />
                <input type="hidden" name="tracks[1]" value="8" />
                <input type="hidden" name="prijs[1]" value="19.99" />
                <input type="hidden" name="genre[1]" value="World" />
                Aantal: <input type="text" size=2 maxlength=3 name="aantal[1]" value="0" style="background-color:#f8ce6c" />
                <hr />
            </td>
        </tr>

        <tr>
            <td>Korting:<br />
                <input type="checkbox" name="student" value="15" />Student 15%<br />
                <input type="checkbox" name="senior" value="10" />Senior 10%<br />
                <input type="checkbox" name="klant" value="5" />Klant 5%<br />
                <hr />
            </td>
        </tr> <tr>
            <td>
                <input type="submit" width="300px" name="Bestellen"
                       value=" Bestellen " />
                <hr />
            </td>
        </tr>
    </form>
</table>
<!--Shoppingcart eindigt hier--> </body>
</html>
<?php

function printArray($item , $key){
    echo "Aantal " . ($key + 1) . ": " . $item . "<br>";
}
if(isset($_POST["Bestellen"])) {
    if(isset($_POST["aantal"])){
        array_walk($_POST["aantal"] , "printArray");
        //echo "Aantal: " . $_POST["aantal"][0] . "<br>";
        $korting = 0;
        if(isset($_POST["student"])){
            $korting += 15;
        }
        if(isset($_POST["klant"])) {
            $korting += 5;
        }
        if(isset($_POST["senior"])) {
            $korting += 10;
        }
        echo "Korting is: " . $korting . " procent<br>";
    }
}
?>