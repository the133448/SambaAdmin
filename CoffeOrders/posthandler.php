<?php

require "../api/api.php";
$usr_auth = "q";
$pwd_auth = "nada";


$usr = $_SERVER["PHP_AUTH_USER"];
$pwd = $_SERVER["PHP_AUTH_PW"];

if ($usr !== $usr_auth || $pwd !== $pwd_auth) {
    die("Authentication FAILED.");
}


//$data .= "USER:" . $usr . " PWD:" . $pwd . "\r\n";
//$data .= "CT:" . $contentType . " LEN:" . $contentLength . "\r\n";

$inputJSON = file_get_contents('php://input');
$input = json_decode( $inputJSON, TRUE ); //convert JSON into array

$Ticket= $input["TicketId"];

$orderID = $input["Id"];
$menu = $input["MenuItemName"];
$price = $input["Price"];
$quantity = $input["Quantity"];
$studentID = $input["Student ID"];
$StudYr = $input["Student Year"];
$StudName = $input["Student Name"];
$StudEmail = $input["Student Email"];
$points = $input["Points"];


   $menu = str_replace("MShake", "Milkshake", $menu);
$milkshake= false;
if (strpos($menu, 'Milkshake') !== false) {
    $milkshake=true;
}

date_default_timezone_set("Australia/Brisbane");

$publish_date =date("Y-m-d H:i:s");
/*$sql = 'INSERT INTO Orders '" . $item . "', '" . $price . "'
 (`Ticket`, `Id`, `MenuItemName`, `Price`, `Quantity`, `Student UID`, `Student Year`, `Student Name`, `Student Email`)
  VALUES ("'.$Ticket.'", "'.$orderID.'", "'.$menu.'", "'.$price.'", "'.$quantity.'", "'.$studentID.'", "'.$StudYr.'", "'.$StudName.'", "'.$StudEmail.'");';*/

if($milkshake){
    $sql = "INSERT INTO Orders VALUES ('" . $orderID . "',
'" . $publish_date . "' , '" . $Ticket . "', '" . $menu . "', '" . $price . "',
 '" . $quantity . "' , '" . $studentID . "', '" . $StudYr . "',
 '" . $StudName . "', '" . $StudEmail . "',0)";
} else {
    $sql = "INSERT INTO Orders VALUES ('" . $orderID . "',
'" . $publish_date . "' , '" . $Ticket . "', '" . $menu . "', '" . $price . "',
 '" . $quantity . "' , '" . $studentID . "', '" . $StudYr . "',
 '" . $StudName . "', '" . $StudEmail . "',1)";
}
$result = sqlStatment($sql);
//$sql = "REPLACE INTO Points (points, uid) VALUES ('". $points."' ,'". $StudName. "'); INSERT INTO `rkeys` (`key`) VALUES ('12345');";
$psql = "REPLACE INTO Points (points, uid, name) VALUES ('". $points."' ,'". $studentID. "' , '" .$StudName . "')";
$presult = sqlStatment($psql);
if (!$result) {
    echo "fail";
    die('Could not enter data. Check Error_Log for details');
} else {
    echo "SUCCESS";
}



return "";
?>