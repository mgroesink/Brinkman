<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 16-3-2018
 * Time: 15:43
 */
include_once("login_functions.php");

if(isset($_COOKIE["username"])){
    $username = $_COOKIE["username"];
} else {
    $username = "";
}
if(isset($_POST["login"])) {


    if (checkLogin($_POST["username"] , $_POST["password"])){
        header("Location: http://theos.in/");
    }
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
            width: 400px;
            height: 200px;
            margin: auto;
            background-color: #f3f3f3;
        }

        input[type="submit"]{
            position:absolute;
            width:40%;
            left:0;
            right:0;
            margin:20px auto 20px auto;
            padding:5px 15px 5px 15px;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <div>

        <h1>Login</h1>

        <table>
            <tr>
                <td>Username</td><td><input type="text" name="username" required="required" value=<?php echo $username ?>></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="password" name="password" required="required"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="checkbox" name="rememberme" <?php if(isset($_COOKIE["remmemberme"])) echo "checked='checked'"?>>Remember me</td>
            </tr>
        </table>

        <input type="submit" value="Login" name="login"/>
        <?php

            if(isset($_POST["rememberme"])){
               setcookie("username" , $_POST["username"] );
            }

        ?>
    </div>
</form>
</body>
</html>
