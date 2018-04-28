<!--
Author: Anjana
-->
<?php
session_start();
include './model/DB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LAB - Admin</title>
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
                        <ul class="nav navbar-nav navbar-right">

                        </ul>	
                        <div class="clearfix"> </div>	
                    </div>
                </nav>
            </div>
        </div>
        <!-- header -->


        <!-- container -->
        <div class="row" style="padding: 5px;background-image: url('images/p1.jpg')">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="padding-top: 20px">
<br>
                <h2>Staff Login</h2>
<br>
                <?php
                if(isset($_POST['btnLogin'])){
                    
                    $sql = "SELECT * FROM lb_user WHERE empno = '".$_POST['empno']."' AND pword = PASSWORD('".$_POST['pword']."') AND status_code = 'ACTIVE'";
                    //echo $sql;
                    $result = getData($sql);
                    if ($result != FALSE) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          $_SESSION['user'] = $row;
                          header("Location:lab_home.php");
                        }
                    }else{
                        ?> 
                        <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                 <p class="text-danger msg-error">Invalid Username or Password</p> </div>
                      
               <?php
                    }
                }
                ?>
                
                
                <div class="panel panel-primary">
                    <div class="panel-heading">LAB Login</div>
                    <div class="panel-body">


                        <form action="admin.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="empno">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pword">
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
                        </form>

                    </div>
                    <div class="panel-footer"></div>
                   
                </div>
 <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            </div>
            <div class="col-md-4" ></div>
            
        </div>
        <!-- //container -->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>