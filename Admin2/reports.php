<?php require("../api/access.php") ?>
<!DOCTYPE html>
<html>
<?php require("headerstuff.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Dashboard
        <small>Control panel</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
   <h1 class="center-block text-center">
       Welcome <?php
       echo $_SESSION['fname'];
       ?>
   </h1>
      </div>

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Sales</span>
                        <?php
                        require "../api/api.php";
                       $result = sqlStatment("SELECT Price FROM Orders");
                        $sales =0;
                        $amount = 0;
                        while($row = mysqli_fetch_array($result)) {
                            $sales += $row["Price"];
                            $amount++;
                        }
                        echo " <span class=\"info-box-number\">$".$sales."</span>";
                        echo " <span class=\"info-box-text\">".$amount." <small>Orders</small></span>";
                        ?>


                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="ion ion-social-usd"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Weekly Sales</span>
                            <?php

                            $result = sqlStatment("SELECT Price FROM Orders WHERE datetime > DATE_SUB(CURDATE(), INTERVAL 1 WEEK)");
                            $sales =0;
                            $amount = 0;
                            while($row = mysqli_fetch_array($result)) {
                                $sales += $row["Price"];
                                $amount++;
                            }
                            echo " <span class=\"info-box-number\">$".$sales."</span>";
                            echo " <span class=\"info-box-text\">".$amount." <small>Orders</small></span>";
                            ?>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            <!-- /.col -->

            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>


            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Monthly Sales</span>
                        <?php
                        $result = sqlStatment("SELECT Price FROM Orders WHERE datetime > DATE_SUB(CURDATE(), INTERVAL 1 WEEK)");
                        $sales =0;
                        $amount = 0;
                        while($row = mysqli_fetch_array($result)) {
                            $sales += $row["Price"];
                            $amount++;
                        }
                        echo " <span class=\"info-box-number\">$".$sales."</span>";
                        echo " <span class=\"info-box-text\">".$amount." <small>Orders</small></span>";
                        ?>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion ion-android-done"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Free Drinks</span>
                        <span class="info-box-number">n/a</span>
                        <span class="info-box-text">Coming Soon</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
      <!-- /.row -->
      <!-- Main row -->

          <!-- Custom tabs (Charts with tabs)-->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Year Level Stats</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body yearchart">

                    <canvas id="yearstats" width="600" height="400"></canvas>
                  <!--<canvas id="yearstats" style="height: 200px;"></canvas>-->
                </div>
                <!-- /.box-body -->
            </div>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->

        <div class="box box-primary">
            <div class="box-header">
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                        <i class="fa fa-calendar"></i></button>
                    <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                        <i class="fa fa-minus"></i></button>
                </div>
                <!-- /. tools -->

                <i class="fa fa-map-marker"></i>

                <h3 class="box-title">
                    Milkshake Sales
                </h3>
            </div>
            <div class="box-body">
                <canvas id="prodsales" style="height:250px"></canvas>

                <!--  <div id="saleschart" style="width: 100%; height: 500px;"></div>-->
            </div>
            <!-- /.box-body-->


        </div>

        <div class="box box-primary">
            <div class="box-header">
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                        <i class="fa fa-calendar"></i></button>
                    <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                        <i class="fa fa-minus"></i></button>
                </div>
                <!-- /. tools -->

                <i class="fa fa-map-marker"></i>

                <h3 class="box-title">
                    Hot Drink Sales
                </h3>
            </div>
            <div class="box-body">
                <canvas id="prodsalescof" style="height:250px"></canvas>

                <!--  <div id="saleschart" style="width: 100%; height: 500px;"></div>-->
            </div>
            <!-- /.box-body-->


        </div>
        <!-- /.row -->




          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Recent Orders...</h3>



            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Date and time</th>
                        <th>Product Name</th>


                        <th>Student Name</th>
                        <th>Student Year</th>
                    </tr>
                    </thead>

                    <tbody>


                    <?php


                    $sql="SELECT * FROM Orders ";
                    //echo $sql;
                    $result = sqlStatment($sql);

                    while($row = mysqli_fetch_array($result)) {
                        $adjustedY = $row['Student Year'];
                        if ($adjustedY=="50"){
                            $adjustedY="Teacher";
                        }
                        echo "<tr>";
                        echo "<td>" . $row['datetime'] . "</td>";
                        echo "<td>" . $row['MenuItemName'] . "</td>";

                        echo "<td>" . $row['Student Name'] . "</td>";
                        echo "<td>" . $adjustedY . "</td>";

                        echo "</tr>";
                    }

                    ?>


                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
          </div>
          <!-- /.box -->

          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>


        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->


          <!-- Map box -->

          <!-- /.box -->

          <!-- solid sales graph -->


          <!-- Calendar -->



        <!-- right col -->

      <!-- /.row (main row) -->


    <!-- /.content -->


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.3
    </div>
    <strong>Copyright &copy; 2016 Daniel Johns.</strong> All rights
    reserved.
  </footer


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>
</div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->



<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!--ChartJS-->
<script src="plugins/chartjs/Chart.js"></script>
<!-- Bootstrap WYSIHTML5 -->

<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/pages/dashboard.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
<script>
    $.extend( $.fn.dataTable.defaults, {
        responsive: true
    } );
    $(document).ready(function() {
        $('#example').DataTable( {
            "order": [[ 0, "desc" ]]
        } );
    } );
</script>
<?php
$sql = "SELECT `Student Year`, SUM(Quantity) as qty FROM Orders GROUP BY `Student Year` ORDER BY qty DESC";

$result = sqlStatment($sql);
$y = array();
$y[0] = $y[5]= $y[6]= $y[7]= $y[8]= $y[9]= $y[10]= $y[11]= $y[12]= $y[50] = 0;
while($row = mysqli_fetch_array($result)) {
    $y[$row['Student Year']] = $row['qty'];
}

$sql= "SELECT `MenuItemName`, SUM(Quantity) as qty FROM Orders GROUP BY `MenuItemName` ORDER BY qty DESC";
$result = sqlStatment($sql);
$p = array();

/*-----------------------Milkshakes-----------------------------*/
$p["Lime Milkshake"] =  $p["Vanilla Milkshake"] =  $p["Banana Milkshake"]=
$p["Mars Milkshake"]=  $p["Mocha Milkshake"]=  $p["Chocolate Milkshake"]=
$p["Caramel MShake"]=  $p["Strawb MShake"]
/*------------------------------------------------------------*/
/*-----------------------Normal Coffee's----------------------*/
    = $p["Large Flat White"]
    = $p["Large Cappuccino"]  = $p["Large Moccachino"]  = $p["Large Long Black"]
    = $p["Large Latte"]           = $p["Small Flat White"]  = $p["Small Cappuccino"]  = $p["Small Moccachino"]
    = $p["Small Short Black"]  = $p["Small Latte"]       = $p["L.Hot Chocolate"]   = $p["S.Hot Chocolate"]
    =0;
while($row = mysqli_fetch_array($result)) {
    $p[$row['MenuItemName']] = $row['qty'];
}


?>


<script>

    var ctx = document.getElementById("yearstats");
    var myChart = new Chart(ctx, {
        type: 'pie',
        animation:{
            animateScale:true
            //animateRotate:true
        },
        data: {
            labels: [
                "TempoaryStud/Grad",
                "Year 5",
                "Year 6",
                "Year 7",
                "Year 8",
                "Year 9",
                "Year 10",
                "Year 11",
                "Year 12",
                "Teacher"
            ],
            datasets: [
                {
                    data: [<?php echo
                        $y[0] . "," .
                        $y[5] . "," .
                        $y[6] . "," .
                        $y[7] . "," .
                        $y[8] . "," .
                        $y[9] . "," .
                        $y[10] . "," .
                        $y[11] . "," .
                        $y[12] . "," .
                        $y[50]
                        ?>],
                    backgroundColor: [
                        "#7f8c8d",
                        "#16a085",
                        "#27ae60",
                        "#2980b9",
                        "#8e44ad",
                        "#f39c12",
                        "#c0392b",
                        "#2c3e50",
                        "#d35400",
                        "#bdc3c7"
                    ],
                    hoverBackgroundColor: [
                        "#95a5a6",
                        "#1abc9c",
                        "#2ecc71",
                        "#3498db",
                        "#9b59b6",
                        "#f1c40f",
                        "#e74c3c",
                        "#34495e",
                        "#e67e22",
                        "#ecf0f1"
                    ]
                }]
        },
        options: {
           //responsive: true
        }
    });

    ctx = document.getElementById("prodsales");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Vanilla", "Caramel", "Chocolate", "Banana", "Lime", "Strawberry", "Mocha","Mars"],
            datasets: [
                {
                    label: "Milkshake Sales",
                    backgroundColor: "rgba(255,99,132,0.2)",
                    borderColor: "rgba(255,99,132,1)",
                    borderWidth: 1,
                    hoverBackgroundColor: "rgba(255,99,132,0.4)",
                    hoverBorderColor: "rgba(255,99,132,1)",
                    data: [<?php echo
                          $p["Vanilla Milkshake"]
                        . "," .  $p["Caramel Milkshake"]
                        . "," .  $p["Chocolate Milkshake"]
                        . "," .  $p["Banana Milkshake"]
                        . "," .  $p["Lime Milkshake"]
                        . "," .  $p["Strawb Milkshake"]
                          . "," .  $p["Mocha Milkshake"]
                        . "," .  $p["Mars Milkshake"]?>]
                }
            ]
        }

    });

    ctx = document.getElementById("prodsalescof");
    var myBarChartCof = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["FlatWhite", "Cappuccino", "Mochaccino", "Short/Long Black", "Latte", "Hot Chocolate"],
            datasets: [
                {
                    label: "Large Hot Drink Sales",
                    backgroundColor: "rgba(0, 78, 235, 0.2)",
                    borderColor: "rgba(0, 78, 235, 1)",
                    borderWidth: 1,
                    hoverBackgroundColor: "rgba(0, 10, 194, 0.4)",
                    hoverBorderColor: "rgba(0, 10, 194, 1)",
                    data: [<?php echo
                                 $p["Large Flat White"]
                        . "," .  $p["Large Cappuccino"]
                        . "," .  $p["Large Moccachino"]
                        . "," .  $p["Large Long Black"]
                        . "," .  $p["Large Latte"]
                        . "," .  $p["L.Hot Chocolate"]?>]
                },
                {
                    label: "Small Hot Drink Sales",
                    backgroundColor: "rgba(160, 255, 97, 0.2)",
                    borderColor: "rgba(160, 255, 97, 1)",
                    borderWidth: 1,
                    hoverBackgroundColor: "rgba(97, 255, 110, 0.4)",
                    hoverBorderColor: "rgba(97, 255, 110, 1)",
                    data: [<?php echo
                                 $p["Small Flat White"]
                        . "," .  $p["Small Cappuccino"]
                        . "," .  $p["Small Moccachino"]
                        . "," .  $p["Small Short Black"]
                        . "," .  $p["Small Latte"]
                        . "," .  $p["S.Hot Chocolate"]?>]
                }
            ]
        }

    });





            //responsive: true


</script>


<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/app.min.js"></script>
<script>


    $(document).ready(function() {


        $('body').addClass('loaded');
        $('h1').css('color','#222222');


    });
</script>


</body>
</html>
