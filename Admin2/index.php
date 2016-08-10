<?php
session_start();
if (isset($_SESSION["username"])){
    header("Location: reports.php");
    exit;
}

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="dist/css/loader.css" rel="stylesheet">
    <link href="dist/css/loading.css" rel="stylesheet">



    <style>
        * {
            box-sizing: border-box;
        }

        *:focus {
            outline: none;
        }
        body {
            font-family: Arial;
            background-color: #3498DB;
            padding: 50px;
        }
        .login {
            margin: 20px auto;
            width: 300px;
        }
        .login-screen {
            background-color: #FFF;
            padding: 20px;
            border-radius: 5px
        }

        .app-title {
            text-align: center;
            color: #777;
        }

        .login-form {
            text-align: center;
        }
        .control-group {
            margin-bottom: 10px;
        }

        input {
            text-align: center;
            background-color: #ECF0F1;
            border: 2px solid transparent;
            border-radius: 3px;
            font-size: 16px;
            font-weight: 200;
            padding: 10px 0;
            width: 250px;
            transition: border .5s;
        }

        input:focus {
            border: 2px solid #3498DB;
            box-shadow: none;
        }

        .btn {
            border: 2px solid transparent;
            background: #3498DB;
            color: #ffffff;
            font-size: 16px;
            line-height: 25px;
            padding: 10px 0;
            text-decoration: none;
            text-shadow: none;
            border-radius: 3px;
            box-shadow: none;
            transition: 0.25s;
            display: block;
            width: 250px;
            margin: 0 auto;
        }

        .btn:hover {
            background-color: #2980B9;
        }

        .login-link {
            font-size: 12px;
            color: #444;
            display: block;
            margin-top: 12px;
        }

        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
            opacity: 1;
            transition: opacity 0.6s;
            margin-bottom: 15px;
        }

        .alert.success {background-color: #4CAF50;}
        .alert.info {background-color: #2196F3;}
        .alert.warning {background-color: #ff9800;}

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }

        @media screen and (max-width: 430px) {


            body { font-size: 11px; }

            button, input, select, textarea { font-size: 11px; }



            .login { width: 100%; }

            .login-field { width: 100%; }

            .btn { width: 100%; }

        }

    </style>




</head>



<body>
<div id="demo-content">



    <div id="loader-wrapper">
      <!--  <div id="loader"></div>-->
        <strong class="loading">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </strong>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <div id="content">
        <div class="login">
            <div class="login-screen">
                <div class="app-title">
                    <h1>Login</h1>
                </div>


                <?php /*if (isset($_GET["e"])) {
            if($_GET["e"]="nf") { */?><!--

        <div class="alert warning">
            <span class="closebtn">&times;</span>
            <strong>Error!</strong>That username/password does not exist.
        </div>
        <?php /*}
        else if($_GET["e"]="den") { */?>
            <div class="alert alert">
                <span class="closebtn">&times;</span>
                <strong>Access Denied!</strong>You must be signed in to access that page.
            </div>

        <?php /*}
            else{ */?>
                <div class="alert alert">
                    <span class="closebtn">&times;</span>
                    <strong>Error !</strong>An Error has occurred.
                </div>
        --><?php /*}} */?>

                <?php if (isset($_GET["e"])) {

                    if($_GET["e"]== "1") {
                        echo "
        <div class=\"alert warning\">
            <span class=\"closebtn\">&times;</span>
            <strong>Error!</strong><br>That username/password does not exist.
        </div>";
                    }
                    else if($_GET["e"]=="2") {
                        echo "<div class=\"alert alert\">
                <span class=\"closebtn\">&times;</span>
                <strong>Access Denied!</strong><br>You must be signed in to access that page.
            </div>";
                    }

                    else if($_GET["e"]=="3") {
                        echo "<div class=\"alert alert\">
                <span class=\"closebtn\">&times;</span>
                <strong>Key not found!</strong><br>Someone has already used that link to register or the link was invalid.
            </div>";
                    }

                    else if($_GET["e"]=="4") {
                        echo "<div class=\"alert success\">
                <span class=\"closebtn\">&times;</span>
                <strong>Success!</strong><br>Your account has been created, sign in below.
            </div>";
                    }
                    else {
                        echo "<div class=\"alert alert\">
                    <span class=\"closebtn\">&times;</span>
                    <strong>Error !</strong><br>An unknown error has occurred.
                </div>";
                    }
                }


                ?>




                <form role="form"  action="session.php" method="post">

                    <div class="control-group ">
                        <input type="text" class="login-field" value="" placeholder="username" id="login-name" name="login-name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>

                    <div class="control-group">
                        <input type="password" class="login-field" value="" placeholder="password" id="login-pass" name="login-pass">
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    <?php if(isset($_GET["r"])) { ?>
                        <input type="hidden" value="<?php $_GET["r"]?>" name="r" id="r" >
                    <?php }?>
                    <button type="submit" class="btn btn-primary btn-large btn-block">Login</button>

                </form>

            </div>
        </div>
    </div>
</div>
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script>
    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }

    $(document).ready(function() {


        $('body').addClass('loaded');
        $('h1').css('color','#222222');


    });
</script>

</body>






</html>
