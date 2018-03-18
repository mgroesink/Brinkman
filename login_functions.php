<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 16-3-2018
 * Time: 18:06
 */

$useraccounts = array (
    array( "username" => "rsk01" , "password" => "12345"),
    array( "username" => "wag01" , "password" => "12345"),
    array( "username" => "rif01" , "password" => "12345"),
    array( "username" => "lgi01" , "password" => "12345"),
    array( "username" => "mjk02" , "password" => "12345")
);

function checkLogin($username , $password){
    global $useraccounts;

    if(isset($_POST["login"])){
        if(isset($_POST["username"])){
            foreach ($useraccounts as $user){
                if($user["username"] == $username && $user["password"] == $password) {
                    if($_POST["rememberme"]){
                        setcookie("rememberme" , true);
                        setcookie("username" , $username);
                    }else {
                        setcookie("username" , "",mktime(0,0,0,1,1,1));
                        setcookie("rememberme" , false,mktime(0,0,0,1,1,1));
                    }
                    return true;
                }
            }

        }
        return false;
    }
}