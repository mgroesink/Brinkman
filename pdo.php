<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type"
          content="text/html"
          charset="UTF-8"
</head>
<body>
<?php
    echo "<br>---- Opgave 96: Drivers: ";
    print_r(PDO::getAvailableDrivers());

    echo "<br>---- Opgave 97: Verbinding maken";
    $dbhost = "localhost";
    $dbname = "sakila";
    $user="root";
    $pass="";
    try{
        $database = new PDO("mysql:host=$dbhost;dbname=$dbname",$user , $pass);
        $database->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        echo "<br>--- Verbinding gemaakt";
    } catch (PDOException $e){
        echo $e->getMessage();
        echo "<br>Verbinding NIET gemaakt";
        }

    echo "<br>---- Opgave 102: Klanten selecteren";
    $query = "SELECT * FROM Customer WHERE email LIKE :firstname";
    $customers = $database->prepare($query);
    try{
        $customers->execute(array(":firstname" => "%donna%"));
        $customers->setFetchMode(PDO::FETCH_ASSOC);
        foreach($customers as $customer){
            echo "<br>" . strtolower($customer["email"]);
        }
    } catch (PDOException $e) {
        echo "<script>alert('Geen albums gevonden.');</script>";
    }


?>
</body>
</html>