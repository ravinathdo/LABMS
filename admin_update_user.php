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
                <h3>Update User</h3>
                <hr>
                
                
                <?php 
                if(isset($_POST['btnUpdate'])){
                    $sqlUpdate = "UPDATE lb_user SET frist_name = '".$_POST['frist_name']."',"
                            . "last_name='".$_POST['last_name']."',nic = '".$_POST['nic']."',"
                            . "role_code='".$_POST['role_code']."',telephone ='".$_POST['telephone']."',"
                            . "status_code='".$_POST['status_code']."' WHERE id = '".$_POST['id']."'";
                    $msg = "User profile updated";
                    setUpdate($sqlUpdate, $msg, TRUE);
                }
                
                if(isset($_POST['btnRestPass'])){
                    $sqlUpdate = "UPDATE lb_user SET pword = PASSWORD('".$_POST['empno']."') WHERE id = '".$_POST['id']."'";
                    $msg = "User Password rest success";
                    setUpdate($sqlUpdate, $msg, TRUE);   
                }
                ?>
                
                
                
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM lb_user WHERE id = '$id'";

                    $resultPost = getData($sql);
                    if ($resultPost != FALSE) {
                        while ($row = mysqli_fetch_assoc($resultPost)) {
                            ?>
                <form action="admin_update_user.php?id=<?= $_GET['id']?>" method="post">
                                <span class="mando-msg">* fields are mandatory</span>
                                <input type="hidden" name="id" value="<?= $id?>" />
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" value="<?= $row['frist_name'] ?>" required="" name="frist_name" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Last Name</label>
                                    <input type="text" value="<?= $row['last_name'] ?>" required="" name="last_name" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">NIC</label>
                                    <input type="text" value="<?= $row['nic'] ?>" required="" name="nic" class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Telephone</label>
                                    <input type="number" value="<?= $row['telephone'] ?>"  name="telephone" class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="form-group">
                                    Employee Number  <input type="text" value="<?= $row['empno'] ?>" name="empno" readonly="" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>

                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">User Role</label>
                                <select name="role_code" class="form-control">
                                        <option value="MANAGER" <?php if ($row['role_code'] == 'MANAGER') { ?>  selected="" <?php } ?> >MANAGER</option>
                                        <option value="CASHIER" <?php if ($row['role_code'] == 'CASHIER') { ?>  selected="" <?php } ?>>CASHIER</option>
                                        <option value="MLT" <?php if ($row['role_code'] == 'MLT') { ?>  selected="" <?php } ?>>MLT</option>
                                    </select>
                                </div>
                                

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Status</label>
                                    <select name="status_code" class="form-control">
                                        <option value="ACTIVE" <?php if ($row['status_code'] == 'ACTIVE') { ?>  selected="" <?php } ?> >ACTIVE</option>
                                        <option value="DEACTIVE" <?php if ($row['status_code'] == 'DEACTIVE') { ?>  selected="" <?php } ?>>DEACTIVE</option>
                                    </select>
                                </div>



                                <button type="submit" name="btnUpdate" class="btn btn-primary">Update</button>
                                <button type="submit" name="btnRestPass" class="btn btn-warning">Reset Password</button>
                            </form>
                            <?php
                        }
                    }
                }
                ?>

            </div>
        </div>
        <!-- //container -->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>





</html>