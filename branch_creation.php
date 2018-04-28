<!--
Author: Anjana
-->
<?php
session_start();
//echo '<tt><pre>' . var_export($response, TRUE) . '</pre></tt>';
if (isset($_SESSION['user'])) {

    if ($_SESSION['user']['role_code'] == 'ADMIN') {
        
    } else {
        header("Location:index.php");
    }
} else {
    header("Location:index.php");
}
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
                <?php include './_menu_admin.php'; ?>
            </div>
            <div class="col-md-10">
<h3>Create Branch</h3>
                        <hr>
                <div class="row">
                    <div class="col-md-8">
                        

                        <?php
                        if (isset($_POST['btnAdd'])) {
                            $sql = "INSERT INTO lb_branch
            (`branch_name`,
             `address`,
             `telephone`,
             `created_user`)
VALUES ('" . $_POST['branch_name'] . "',
        '" . $_POST['address'] . "',
        '" . $_POST['telephone'] . "',
        '" . $_SESSION['user']['id'] . "');";

                            $msg = "New branch created successfully";
                            setData($sql, $msg, TRUE);
                        }
                        ?>


                        <div class="panel panel-warning">
                            <div class="panel-heading ">Branch Creation</div>
                            <div class="panel-body">
                                
                                   <form class="form-horizontal" action="branch_creation.php" method="post">
                            <span class="mando-msg">* fields are mandatory</span>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Branch Name <span class="mando-msg">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" required="" name="branch_name" class="form-control" id="inputEmail3" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Address <span class="mando-msg">*</span></label>
                                <div class="col-sm-9">
                                    <textarea name="address" required=""  class="form-control" > </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Telephone</label>
                                <div class="col-sm-9">
                                    <input type="number" name="telephone" class="form-control" id="inputEmail3" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" name="btnAdd" class="btn btn-warning">Add Branch</button>
                                </div>
                            </div>
                        </form>
                                
                            </div>
                        </div>

                     

                    </div>
                    <div class="col-md-4"></div>
                </div>

            </div>
        </div>
        <!-- //container -->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>