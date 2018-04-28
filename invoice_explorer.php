<!--
Author: Anjana
-->
<?php
session_start();
//echo '<tt><pre>' . var_export($response, TRUE) . '</pre></tt>';
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
    </head>



    <body>
        <!-- header -->
        <div class="header_w3l">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                                               <?php include './_labms.php';?>

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
                <h3>Invoice Explorer</h3>
                <hr>
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>BCN</th>
                            <th>Patient Name</th>
                            <th>NIC</th>
                            <th>Branch</th>
                            <th>Status</th>
                            <th>Ready Date</th>
                            <th>Result</th>
                            <th>Explorer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = " ";


                        if ($_SESSION['user']['role_code'] == 'ADMIN') {
                            $sql = " SELECT ld_invoice.*,lb_patient.frist_name,lb_patient.last_name,lb_patient.nic,lb_branch.branch_name FROM ld_invoice 
INNER JOIN lb_patient ON lb_patient.id = ld_invoice.patient_id
INNER JOIN lb_branch ON lb_branch.id = ld_invoice.branch_id  ";
                        } else
                        if ($_SESSION['user']['role_code'] == 'MANAGER') {

                            $sql = " SELECT ld_invoice.*,lb_patient.frist_name,lb_patient.last_name,lb_patient.nic,lb_branch.branch_name FROM ld_invoice 
INNER JOIN lb_patient ON lb_patient.id = ld_invoice.patient_id
INNER JOIN lb_branch ON lb_branch.id = ld_invoice.branch_id 
WHERE ld_invoice.branch_id = '" . $_SESSION['user']['branch_id'] . "'";
                        } else
                        if ($_SESSION['user']['role_code'] == 'CASHIER') {
                            $sql = " SELECT ld_invoice.*,lb_patient.frist_name,lb_patient.last_name,lb_patient.nic,lb_branch.branch_name FROM ld_invoice 
INNER JOIN lb_patient ON lb_patient.id = ld_invoice.patient_id
INNER JOIN lb_branch ON lb_branch.id = ld_invoice.branch_id 
WHERE ld_invoice.branch_id = '" . $_SESSION['user']['branch_id'] . "'";
                        } else
                        if ($_SESSION['user']['role_code'] == 'MLT') {
                            $sql = " SELECT ld_invoice.*,lb_patient.frist_name,lb_patient.last_name,lb_patient.nic,lb_branch.branch_name FROM ld_invoice 
INNER JOIN lb_patient ON lb_patient.id = ld_invoice.patient_id
INNER JOIN lb_branch ON lb_branch.id = ld_invoice.branch_id 
WHERE ld_invoice.branch_id = '" . $_SESSION['user']['branch_id'] . "'";
                        } else
                        if ($_SESSION['user']['role_code'] == 'PATIENT') {
                            $sql = " SELECT ld_invoice.*,lb_patient.frist_name,lb_patient.last_name,lb_patient.nic,lb_branch.branch_name FROM ld_invoice 
INNER JOIN lb_patient ON lb_patient.id = ld_invoice.patient_id
INNER JOIN lb_branch ON lb_branch.id = ld_invoice.branch_id 
WHERE ld_invoice.patient_id = '" . $_SESSION['user']['id'] . "'";
                        }

                        $resultx = getData($sql);
                        if ($resultx != FALSE) {
                            while ($row = mysqli_fetch_assoc($resultx)) {
                                ?>
                                <tr>
                                    <td><?= $row['BCN']; ?></td>
                                    <td><?= $row['frist_name']; ?> <?= $row['last_name']; ?></td>
                                    <td><?= $row['nic']; ?></td>
                                    <td><?= $row['branch_name']; ?></td>
                                    <td><?= $row['status_code']; ?></td>
                                    <td><?= $row['report_ready_date']; ?></td>
                                    <td><?php if ($_SESSION['user']['role_code'] == 'MLT') {
                                    ?> <a href="test_detail_result.php?id=<?= $row['id']; ?>">Result</a>
                                            <?php }
                                        ?>
                                    </td>
                                    <td><a href="invoice_detail.php?id=<?= $row['id']; ?>">Explorer</a></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>


            </div>
        </div>
        <!-- //container -->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>

    <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
    </script>
</html>