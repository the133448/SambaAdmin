<?php

function sqlStatment($statment){
     $con = mysqli_connect('localhost','db_user','db_pass','db_name');//REPLACED INF    //$con = mysqli_connect('localhost','root','','coffee_test');

    $result = mysqli_query($con, $statment);

$data = "================================================================\r\n\r\n";
    $data .= $statment;
$data .= "================================================================\r\n\r\n";
  
   file_put_contents("sql.txt", $data, FILE_APPEND);

    if (!$result) {
        die('Could not enter data: ' . mysql_error());
    }

    return $result;
}

function validate($safe){

    $safe = htmlspecialchars($safe);
    $safe = strip_tags($safe);
    $safe = stripcslashes($safe);

    return $safe;

}

function login($username, $password) {
    $password = hash("sha256", $password);
    return sqlStatment("select count(*) from users where username = '$username' and password = '$password' and auth = 1")->fetch_assoc()["count(*)"] > 0;
}
function register($username, $password, $fname) {
    $password = hash("sha256", $password);
    sqlStatment("insert into users (username, password, fname) values ('$username', '$password','$fname')");
}

function auth($username){
    sqlStatment(" UPDATE  users SET auth = 1  WHERE  username = '$username'");
}
function checkkey($key){
    if (sqlStatment("SELECT count(*) FROM rkeys WHERE `key` = '$key'")->fetch_assoc()["count(*)"] > 0){
        sqlStatment("DELETE FROM rkeys WHERE `key` = '$key' ");
        return true;
    };
    return false;
}
?>

