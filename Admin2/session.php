<?php

if(!isset($_POST["login-pass"])){
    header("Location: /");
}
require ("../api/api.php");

if (login($_POST["login-name"], $_POST["login-pass"])) {
    session_start();
    $_SESSION["username"] = $_POST["login-name"];
    $u = $_POST["login-name"];
   $Fname = sqlStatment("SELECT fname FROM  users WHERE  username = '$u'") ->fetch_assoc()['fname'];
    $_SESSION["fname"] = $Fname;
    date_default_timezone_set("Australia/Brisbane");

    $publish_date =date("Y-m-d H:i:s");

    sqlStatment("INSERT INTO `logins` VALUES (null, '".$publish_date."', '".$Fname."')");
    if(isset($_POST["r"])) {
        header("Location: " . $_POST["r"] );
        exit;
    }
    else{
        header("Location: reports");
        exit;
    }
} else {

header("Location: /?e=1");
}


?>