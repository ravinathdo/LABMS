<!--
Author: Anjana
-->
<?php
session_start();
//echo '<tt><pre>' . var_export($_SESSION['user'], TRUE) . '</pre></tt>';
//
//if(isset($_SESSION['user'])){
//    
//    if($_SESSION['user']['role_code'] == 'ADMIN'){
//    }else{
//        header("Location:index.php");
//    }
//}else{
//    header("Location:index.php");
//}
include './model/DB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LAB-Home</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Clinical Lab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- //js -->


        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <script src="js/responsiveslides.min.js"></script>
        <script type="text/javascript" src="js/numscroller-1.0.js"></script>
        <script defer src="js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

        <script src="js/highcharts.js"></script>
        <script src="js/exporting.js"></script>
        <script src="js/export-data.js"></script>

    </head>



    <body>
        <!-- header -->
        <div class="header_w3l">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <?php include './_labms.php'; ?>
                    </div>
                    <!-- top-nav -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php include './_top.php'; ?>
                        <div class="clearfix"> </div>	
                    </div>
                </nav>
            </div>
        </div>
        <!-- header -->


        <!-- container -->
        <div class="row" style="padding: 5px">
            <div class="col-md-2">
                <?php include './_menu.php'; ?>

            </div>
            <div class="col-md-10">
                <h3>Invoice Report</h3>
                <hr>
                <form class="form-inline" action="report_invoice.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputName2">From Date</label>
                        <input type="date" required=""  name="from_date" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">To Date</label>
                        <input type="date" required=""  name="to_date" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <button type="submit" name="btnReport" class="btn btn-primary">View Report</button>
                </form>



                <br>
                <div id="printMe">

                    <?php
                    if (isset($_POST['btnReport'])) {
                        $from_date = $_POST['from_date'];
                        $to_date = $_POST['to_date'];

                        $sql = "";
                        //echo $sql;

                        if ($_SESSION['user']['role_code'] == 'ADMIN') {
                            $sql = "SELECT * FROM ld_invoice WHERE DATE(invoice_datetime) >= '$from_date' AND DATE(invoice_datetime) <= '$to_date'";
                        } else
                        if ($_SESSION['user']['role_code'] == 'MANAGER') {
                            $sql = "SELECT * FROM ld_invoice WHERE DATE(invoice_datetime) >= '$from_date' AND DATE(invoice_datetime) <= '$to_date' AND branch_id = '" . $_SESSION['user']['branch_id'] . "'";
                        } else
                        if ($_SESSION['user']['role_code'] == 'CASHIER') {
                            $sql = "SELECT * FROM ld_invoice WHERE DATE(invoice_datetime) >= '$from_date' AND DATE(invoice_datetime) <= '$to_date' AND branch_id = '" . $_SESSION['user']['branch_id'] . "'";
                        } else
                        if ($_SESSION['user']['role_code'] == 'MLT') {
                            $sql = "SELECT * FROM ld_invoice WHERE DATE(invoice_datetime) >= '$from_date' AND DATE(invoice_datetime) <= '$to_date' AND branch_id = '" . $_SESSION['user']['branch_id'] . "'";
                        }


                        $resultPost = getData($sql);
                        ?>
                        <center>
                            <h3>Invoice Report</h3>
                            <h4><?= $from_date ?> to <?= $to_date ?></h4>
                            <br>

                        </center>
                        <table class="table table-bordered">
                            <tr style="font-weight: bold">
                                <td>BCN</td>
                                <td>Invoice Date</td>
                                <td>Amount</td>
                                <td>Status</td>
                            </tr>
                            <?php
                            $total = 0;
                            if ($resultPost != FALSE) {
                                while ($row = mysqli_fetch_assoc($resultPost)) {
                                    ?>
                                    <tr>
                                        <td><?= $row['BCN'] ?></td>
                                        <td><?= $row['invoice_datetime'] ?></td>
                                        <td><?php
                        echo $row['total_amount'];
                        $total = $total + $row['total_amount'];
                                    ?></td>
                                        <td><?= $row['status_code'] ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                        </table>

                        <?php
                        echo '<h2>Total :' . $total . '</h2>';
                    }
                    ?>

                </div>
                <a href="#" onclick="PrintElem('printMe')">Print</a>


            </div>
        </div>
        <!-- //container -->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>


    <script type="text/javascript">
            function PrintElem(elem)
            {
                var mywindow = window.open('', 'PRINT', 'height=400,width=600');

                mywindow.document.write('<html><head><title>' + document.title + '</title>');
                mywindow.document.write('</head><body >');
                mywindow.document.write('<h1>' + document.title + '</h1>');
                mywindow.document.write(document.getElementById(elem).innerHTML);
                mywindow.document.write('</body></html>');

                mywindow.document.close(); // necessary for IE >= 10
                mywindow.focus(); // necessary for IE >= 10*/

                mywindow.print();
                mywindow.close();

                return true;
            }
    </script>



</html>