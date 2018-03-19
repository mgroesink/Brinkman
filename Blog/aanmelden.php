<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 18-3-2018
 * Time: 15:19
 */

if (isset($_POST["submit"])) {
    $fotoNaam = basename($_FILES["foto"]["name"]);
    global $uploadsMap;
    function upload()
    {
        global $uploadsMap;
        $uploadsMap = "uploads/";
        $uploadsMap = $uploadsMap . basename($_FILES["foto"]["name"]);

        $fotoType = strtolower(pathinfo($uploadsMap , PATHINFO_EXTENSION));

        // Controleer of foto al bestaat
        if (file_exists($uploadsMap)) {
            echo "Deze foto bestaat al.";
            return false;
        }

        // Valideer foto grootte
        if ($_FILES["foto"]["size"] > 500000) {
            echo "Deze foto is te groot";
            return false;
        }

        // Valideer formaat
        if ($fotoType != "jpg" && $fotoType != "png" && $fotoType != "jpeg" && $fotoType != "gif") {
            echo "Foto moet JPG, JPEG, PNG of GIF zijn";
            return false;
        }
        return true;
    }


    if (upload()) {

        if (move_uploaded_file($_FILES["foto"]["tmp_name"],
            $uploadsMap)) {
            echo "<script>alert('Foto is geüpload.')</script>";

            // Gebruiker opslaan
            $bestand = fopen("gebruikers.txt", "ab");
            if (!$bestand) {
                echo "Kon geen bestand openen";
            }

            $naam = htmlspecialchars($_POST["naam"]);
            $email = htmlspecialchars($_POST["email"]);
            $wachtwoord = htmlspecialchars($_POST["wachtwoord"]);
            $profielFoto = $fotoNaam;

            $profiel =
                $naam . "*" . $email . "*" . $wachtwoord . "*" . $profielFoto . "\n";
            fwrite($bestand, $profiel, strlen($profiel));
            if (fclose($bestand)) {
                echo "Account is aangemaakt<br>";
            } else {
                echo "Bestand kon niet worden afgesloten";
            }
        } else {
            echo "Probleem bij het uploaden. Foto niet geüpload";
        }
    }
}
?>

<a href="aanmelden.html"><input type="button" name="terug" value="Terug"</a>
