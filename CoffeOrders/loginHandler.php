<?php

require "../api/api.php";
$usr_auth = "username";
$pwd_auth = "password";


$usr = $_SERVER["PHP_AUTH_USER"];
$pwd = $_SERVER["PHP_AUTH_PW"];

if ($usr !== $usr_auth || $pwd !== $pwd_auth) {
    die("Authentication FAILED.");
}



$inputJSON = file_get_contents('php://input');
$input = json_decode( $inputJSON, TRUE );

$user= $input["user"];
$role= $input["role"];
$type= $input["type"];
$sql = "INSERT INTO `logins` VALUES('"$user"')"
$result = sqlStatment($sql);


if (!$result) {
    echo "fail";
    die('Could not enter data. Check Error_Log for details');
} else {
    echo "SUCCESS";
}



return "";
?>
