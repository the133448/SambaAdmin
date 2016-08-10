<?php { ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BGSCoffee | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">  <!-- Ionicons -->
    <link href="dist/css/loader.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

    <link href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->





</head>
<body class="hold-transition skin-red sidebar-mini">
<div id="demo-content">



    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <div id="content">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>B</b>GS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>COFFEE</b>admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">




                    <!-- User Account: style can be found in dropdown.less -->

                    <li>

                        <a href="logout.php" class="btn btn-danger"><?php
                            echo $_SESSION['fname'];
                            ?>  || Sign out</a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">

                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="dist/img/person.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php
                            echo $_SESSION['fname'];
                            ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">

                    <li class="active">
                        <a href="reports.php">
                            <i class="fa fa-edit"></i> <span>Home/Reports</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                    </li>

                    <li class="header">
                        Manage Functions.
                    </li>

                    <li>
                        <a href="prices.php">
                            <i class="fa fa-edit"></i> <span>Change Product Prices</span>
                        </a>
                    </li>




                    <li>
                        <a href="staff.php">
                            <i class="fa fa-edit"></i> <span>Change Staff</span>

                        </a>
                    </li>

                    <li >
                        <a href="teachers.php">
                            <i class="fa fa-edit "></i> <span>Change Teachers</span>

                        </a>
                    </li>


                    <li class="header">
                        Public View
                    </li>
                    <li>
                        <a href="../index.html">
                            <i class="fa fa-edit "></i> <span>Goto Main Site</span>

                        </a>
                    </li>

                </ul>


        </section>
        <!-- /.sidebar -->
    </aside>

    <?php } ?>