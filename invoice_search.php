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
            <div class="col-md-5">
                <h3>BCN Invoice Search</h3>
                <hr>



                <?php
                //echo getBaseUrl();
                if (isset($_POST['btnSearch'])) {

                    $id = '';
                    $bcn = $_POST['bcn'];
                    $sql = "SELECT * FROM ld_invoice WHERE BCN = '$bcn'";

                   // echo $sql;
                    $resultPost = getData($sql);

                    $flag = FALSE;
                    if ($resultPost != FALSE) {
                        while ($row = mysqli_fetch_assoc($resultPost)) {
                            $id = $row['id'];
                            $baseURL = getBaseUrl();
                           // header("Location:invoice_detail.php?id=" . $id);
                            ?>
                            <script>
                        window.location.href = "<?= $baseURL?>invoice_detail.php?id=<?= $id?>";
                            </script>
                            <?php
                        }
                    } else {
                        echo 'No Record Found';
                    }
                }
                ?>



                <br>
                <div class="panel panel-warning">
                    <div class="panel-heading ">BCN</div>
                    <div class="panel-body">
                        <form action="invoice_search.php" method="post">
                            <span class="mando-msg">* fields are mandatory</span>
                            <div class="form-group">
                                <label for="exampleInputEmail1">BCN</label>
                                <input type="text" name="bcn" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <button type="submit" name="btnSearch" class="btn btn-warning">Search</button>
                        </form>
                    </div>
                </div>



            </div>
            <div class="col-md-5">

            </div>
        </div>
        <!-- //container -->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>