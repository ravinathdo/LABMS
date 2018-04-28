<!--
Author: Anjana
-->
<?php
session_start();
//echo '<tt><pre>' . var_export($response, TRUE) . '</pre></tt>';
/*
if (isset($_SESSION['user'])) {

    if ($_SESSION['user']['role_code'] == 'ADMIN') {
        
    } else {
        header("Location:index.php");
    }
} else {
    header("Location:index.php");
}
*/
include './model/DB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LAB-Test Profile</title>
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


<h3>Test Profile</h3>
                        <hr>


                <div class="row">
                    <div class="col-md-5">
                        <?php
                        if (isset($_POST['btnAdd'])) {

                            $sql = "INSERT INTO lb_test_profile
            (`profile_name`,
             `description`,
             `REF_level_1`,
             `REF_level_2`,
             `container`,
             `result_type`,
             `status_code`,
             `fee`,
             `time_takes_to_test`,
             `short_code`,
             `created_user`)
VALUES ('" . $_POST['profile_name'] . "',
        '" . $_POST['description'] . "',
        '" . $_POST['REF_level_1'] . "',
        '" . $_POST['REF_level_2'] . "',
        '" . $_POST['container'] . "',
        '" . $_POST['result_type'] . "',
        'ACTIVE',
        '" . $_POST['fee'] . "',
        '" . $_POST['time_takes_to_test'] . "',
        '" . $_POST['short_code'] . "',
        '" . $_SESSION['user']['id'] . "')";

                            $msg = "New Test profile created successfully";
                            setData($sql, $msg, TRUE);
                        }
                        ?>


                        <div class="panel panel-warning">
                            <div class="panel-heading">Test Profile Creation</div>
                            <div class="panel-body">
                                <span class="mando-msg">* fields are mandatory</span>
                                <form class="form-horizontal" action="test_profile.php" method="post">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Test Profile <span class="mando-msg">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="profile_name" class="form-control" required="" id="inputEmail3" placeholder="Test Profile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Description</label>
                                        <div class="col-sm-8">
                                            <textarea name="description" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-sm-6">
                                            REF_level_1 <span class="mando-msg">*</span>
                                            <input type="text" name="REF_level_1" required="" class="form-control" id="inputEmail3" placeholder="Test Profile">
                                        </div>
                                        <div class="col-sm-6">
                                            REF_level_2 <span class="mando-msg">*</span>
                                            <input  type="text" name="REF_level_2" required="" class="form-control" id="inputEmail3" placeholder="Test Profile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Container <span class="mando-msg">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="container" class="form-control" required="" id="inputEmail3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Result Type <span class="mando-msg">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="result_type" class="form-control" required="" id="inputEmail3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Fee <span class="mando-msg">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" name="fee" class="form-control" id="inputEmail3" required="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Time Takes</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="time_takes_to_test" class="form-control" id="inputEmail3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Short Code <span class="mando-msg">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="short_code" class="form-control"  required="" id="inputEmail3" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" name="btnAdd" class="btn btn-warning">Create Test Profile</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="panel-footer"></div>
                        </div>



                    </div>
                    <div class="col-md-7">
                        
                        
                        
                        <div class="table-responsive">
                            
                                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Profile</th>
                            <th>REF level_1</th>
                            <th>REF level_2</th>
                            <th>Container</th>
                            <th>Result Type</th>
                            <th>Time Takes</th>
                            <th>Short Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       
                        $sql = " SELECT * FROM lb_test_profile ";
                        $resultx = getData($sql);
                        if ($resultx != FALSE) {
                            while ($row = mysqli_fetch_assoc($resultx)) {
                                ?>

                                <tr>
                                    <td><a href="test_fiels_manage.php?test_id=<?= $row['id']; ?>"> <span class="label label-primary"> <i class="fas fa-vial"></i>  Fields </span></a></td>
                                    <td><?= $row['profile_name']; ?></td>
                                    <td><?= $row['REF_level_1']; ?></td>
                                    <td><?= $row['REF_level_2']; ?></td>
                                    <td><?= $row['container']; ?></td>
                                    <td><?= $row['result_type']; ?></td>
                                    <td><?= $row['status_code']; ?></td>
                                    <td><?= $row['time_takes_to_test']; ?></td>
                                    <td><?= $row['short_code']; ?></td>
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