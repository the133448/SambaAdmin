<?php

if(isset($_POST["id"])){
    require("../api/api.php");
if (checkkey($_POST["key"])) {
    register($_POST["id"],$_POST["pw"], $_POST["fn"]);
    auth($_POST["id"]);

    header("location: /?e=4");
    exit;
    }
   header("location: /?e=3");
    exit;
}

header("location: /reports");
exit;
?>