<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Register Admin Account</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" >

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

<?php if(isset($_GET["key"]) && isset($_GET["e"]) && isset($_GET["n"]) ) {?>
<div class="container">
    <div class="jumbotron">
        <h1>Register Your Admin Account</h1>
        <p class="lead">Account Details...</p>
        <p class="lead">Email: <?php echo $_GET["e"]?></p>
        <p class="lead">Name: <?php echo $_GET["n"]?></p>

    </div>








        <form role="form" class="form-inline"  action="accounts.php" method="post">
            <div class="form-group">

                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_GET["e"] ?>" required>
            </div>

            <div class="form-group">

                <input type="hidden" class="form-control" id="fn" name="fn" value = "<?php echo $_GET["n"] ?>"  required>
            </div>
            <div class="form-group">
                <label for="name">Password</label>
                <input type="password" class="form-control" id="pw" name="pw" placeholder="Password" required>
            </div>
            <input type="hidden"   id="key" name="key" value="<?php echo $_GET["key"]; ?>">

            <button class="btn btn-success" type="submit">Register</button>


        </form>
    <?php } else {
        echo("    <h1>Please use the link provided in the email to register.</h1>");
    }
    ?>

</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>