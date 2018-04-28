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
                <h3>Profile</h3>
                <hr>

                <?php
                if (isset($_POST['btnEdit'])) {
                    $_id = $_POST['id'];
                    $old_password = $_POST['old_password'];
                    $new_password = $_POST['new_password'];

                    $sqlSE = "SELECT * FROM lb_user WHERE id = '$_id' AND pword = PASSWORD('$old_password')";
                    $resultPost = getData($sqlSE);
                    if ($resultPost != FALSE) {
                        while ($row = mysqli_fetch_assoc($resultPost)) {
                            $sql = "UPDATE lb_user SET pword = PASSWORD('$new_password')   WHERE id = '$_id' AND pword = PASSWORD('$old_password')";
                            $msg = "Password change successfully";
                            setUpdate($sql, $msg, TRUE);
                        }
                    } else {
                        echo '<div class="alert alert-danger alert-dismissable msg-error">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                Invalid Password </div>';
                    }
                }
                ?>


                <form action="profile.php" method="post">
                    <span class="mando-msg">* fields are mandatory</span>
                    <input type="hidden" name="id" value="<?= $_SESSION['user']['id'] ?>" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" readonly="" value="<?= $_SESSION['user']['frist_name'] ?>" class="form-control" id="exampleInputEmail1" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" readonly="" value="<?= $_SESSION['user']['last_name'] ?>" class="form-control" id="exampleInputEmail1" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Number</label>
                        <input type="text" readonly="" value="<?= $_SESSION['user']['empno'] ?>" class="form-control" id="exampleInputEmail1" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Old Password</label>
                        <input type="password"  name="old_password" class="form-control" id="exampleInputEmail1" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">New Password</label>
                        <input type="password"  id="new_password" name="new_password" class="form-control" id="exampleInputEmail1" placeholder="minimum 6 characters" >

                    </div>

                    <button type="submit" name="btnEdit" class="btn btn-warning" onclick="return validateInput()">Change Password</button>
                </form>

            </div>
        </div>
        <!-- //container -->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>


    <script>
            function validateInput() {
                var pword = $('#new_password').val();
                pword = pword.trim();
                var n = pword.length;
                if (n < 6) {
                    alert('Invalid Password Length');
                    return false;
                } else {
                    return true;
                }
            }
    </script>

</html>