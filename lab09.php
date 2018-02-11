<h4>Reiskosten berekenen</h4>
<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 11-2-2018
 * Time: 16:35
 */
function reiskosten($vertrek, $bestemming)
{
    $reiskosten = array();
    $reiskosten[1] = array();
    $reiskosten[2] = array();
    $reiskosten[3] = array();
    $reiskosten[4] = array();
    $reiskosten[1][1] = 0;
    $reiskosten[1][2] = 30;
    $reiskosten[1][3] = 60;
    $reiskosten[1][4] = 90;
    $reiskosten[2][1] = 30;
    $reiskosten[2][2] = 0;
    $reiskosten[2][3] = 40;
    $reiskosten[2][4] = 20;
    $reiskosten[3][1] = 60;
    $reiskosten[3][2] = 40;
    $reiskosten[3][3] = 0;
    $reiskosten[3][4] = 10;
    $reiskosten[4][1] = 90;
    $reiskosten[4][2] = 20;
    $reiskosten[4][3] = 10;
    $reiskosten[4][4] = 0;
    return ($reiskosten[$vertrek][$bestemming]);
}

function setSelected($selected){

}

?>

<form action="" method="post">
    Vertrek
    <select name="vertrek">
        <option value="1" <?php if (isset($_POST["vertrek"]) && $_POST["vertrek"]=="1") echo "selected";?> >Amsterdam</option>
        <option value="2" <?php if (isset($_POST["vertrek"]) && $_POST["vertrek"]=="2") echo "selected";?>>Utrecht</option>
        <option value="3" <?php if (isset($_POST["vertrek"]) && $_POST["vertrek"]=="3") echo "selected";?>>Den Haag</option>
        <option value="4" <?php if (isset($_POST["vertrek"]) && $_POST["vertrek"]=="4") echo "selected";?>>Rotterdam</option>
    </select>
    Bestemming
    <select name="bestemming">
        <option value="1" <?php if (isset($_POST["bestemming"]) && $_POST["bestemming"]=="1") echo "selected";?> >Amsterdam</option>
        <option value="2" <?php if (isset($_POST["bestemming"]) && $_POST["bestemming"]=="2") echo "selected";?>>Utrecht</option>
        <option value="3" <?php if (isset($_POST["bestemming"]) && $_POST["bestemming"]=="3") echo "selected";?>>Den Haag</option>
        <option value="4" <?php if (isset($_POST["bestemming"]) && $_POST["bestemming"]=="4") echo "selected";?>>Rotterdam</option>
    </select>
    <br>
    <br>
    <input type="submit">
</form>

<hr>

<?php
if(isset($_POST["vertrek"])) {

    $vertrek = 1;
    $bestemming = 1;
    switch ($_POST["vertrek"]) {
        case "ams":
            $vertrek = 1;
            break;
        case "utr":
            $vertrek = 2;
            break;
        case "dh":
            $vertrek = 3;
            break;
        case "rtd":
            $vertrek = 4;
            break;
    }
    switch ($_POST["bestemming"]) {
        case "ams":
            $bestemming = 1;
            break;
        case "utr":
            $bestemming = 2;
            break;
        case "dh":
            $bestemming = 3;
            break;
        case "rtd":
            $bestemming = 4;
            break;
    }
    echo "De berekende reiskosten zijn € " . reiskosten($_POST["vertrek"]
            , $_POST["bestemming"]);
}
?>

