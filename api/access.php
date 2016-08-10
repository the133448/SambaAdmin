<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: /?e=2&r=" . $_SERVER["PHP_SELF"]);
    exit;
}

?>