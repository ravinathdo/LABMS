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
        <title>LAB-Test Fields</title>
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

        <!--data table -->
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
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
                <?php
                if ($_SESSION['user']['role_code'] == 'ADMIN') {
                    include './_menu_admin.php';
                } else
                if ($_SESSION['user']['role_code'] == 'MANAGER') {
                    include './_menu_manager.php';
                } else
                if ($_SESSION['user']['role_code'] == 'CASHIER') {
                    include './_menu_cashier.php';
                } else
                if ($_SESSION['user']['role_code'] == 'MLT') {
                    include './_menu_MLT.php';
                }
                ?>

            </div>
            <div class="col-md-10">

<h3>Test Fields Manage</h3>
                        <hr>
                <?php
                $test_profile_id = $_GET['test_id'];

                $sqlGET = "SELECT * FROM lb_test_profile WHERE id = $test_profile_id";
                $resultx = getData($sqlGET);

                if ($resultx != FALSE) {
                    while ($row = mysqli_fetch_assoc($resultx)) {
                        ?>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Profile Name</td>
                                        <td><?= $row['profile_name'] ?></td>
                                        <td>Description</td>
                                        <td><?= $row['description'] ?></td>
                                        <td>REF_level_1</td>
                                        <td><?= $row['REF_level_1'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>REF_level_2</td>
                                        <td><?= $row['REF_level_2'] ?></td>
                                        <td>Container</td>
                                        <td><?= $row['container'] ?></td>
                                        <td>Result Type</td>
                                        <td><?= $row['result_type'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Fee</td>
                                        <td><?= $row['fee'] ?></td>
                                        <td>Time Takes</td>
                                        <td><?= $row['time_takes_to_test'] ?></td>
                                        <td>Short Code</td>
                                        <td><?= $row['short_code'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>




                <div class="row">
                    <div class="col-md-5">



                        <?php
                        if (isset($_POST['btnAdd'])) {

                            $sql = "INSERT INTO lb_test_feild
            (`test_profile_id`,
             `field_name`,
             `normal_results`,
             `special_results`,
             `low_value`,
             `high_value`,
             `unit`)
VALUES ('" . $_POST['test_profile_id'] . "',
        '" . $_POST['field_name'] . "',
        '" . $_POST['normal_results'] . "',
        '" . $_POST['special_results'] . "',
        '" . $_POST['low_value'] . "',
        '" . $_POST['high_value'] . "',
        '" . $_POST['unit'] . "')";

                            $msg = "New field created successfully";
                            setData($sql, $msg, TRUE);
                        }
                        ?>



                        <div class="panel panel-warning">
                            <div class="panel-heading">Test Profile Field</div>
                            <div class="panel-body">
                                <span class="mando-msg">* fields are mandatory</span>

                                <form class="form-horizontal" method="post" action="test_fiels_manage.php?test_id=<?= $test_profile_id ?>">
                                    <div class="form-group">
                                        <input type="hidden" name="test_profile_id" value="<?= $test_profile_id ?>" />
                                        <label for="inputEmail3" class="col-sm-4 control-label">Field Name <span class="mando-msg">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="field_name" required="" class="form-control" id="inputEmail3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Normal Results <span class="mando-msg">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="normal_results" required="" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Special Results <span class="mando-msg">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="special_results" required="" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Low Value <span class="mando-msg">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="low_value" required="" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">High Value <span class="mando-msg">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="high_value" required="" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Unit <span class="mando-msg">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="unit" required="" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" name="btnAdd" class="btn btn-warning">Add Field</button>
                                        </div>
                                    </div>
                                </form>  

                            </div>
                            <div class="panel-footer"></div>
                        </div> 


                    </div>
                    <div class="col-md-7">




                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Field Name</th>
                                    <th>Normal Results</th>
                                    <th>Special Results</th>
                                    <th>Low Value</th>
                                    <th>High Value</th>
                                    <th>Unit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = " SELECT * FROM lb_test_feild WHERE test_profile_id = $test_profile_id ";
                                $result = getData($sql);
                                if ($result != FALSE) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                        <tr>
                                            <td><i class="fas fa-vial"></i></td>
                                            <td><?= $row['field_name']; ?></td>
                                            <td><?= $row['normal_results']; ?></td>
                                            <td><?= $row['special_results']; ?></td>
                                            <td><?= $row['low_value']; ?></td>
                                            <td><?= $row['high_value']; ?></td>
                                            <td><?= $row['unit']; ?></td>
                                        </tr>
        <?php
    }
}
?>
                            </tbody>
                        </table>




                    </div>
                </div>


            </div>
        </div>
        <!-- //container -->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>


    <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
    </script>


</html>