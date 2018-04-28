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


<h3>New Invoice</h3>
                        <hr>

                <div class="row">
                    <div class="col-md-4">

                        <form action="cartAdd.php?patient_id=<?= $_GET['patient_id'] ?>" method="post">
                            <span class="mando-msg">* fields are mandatory</span>
                            <div class="form-group">
                                <input type="hidden" name="patient_id" value="<?= $_GET['patient_id'] ?>" />
                                <label for="exampleInputEmail1"><span class="mando-msg">*</span>Test Profile</label>
                                <select class="form-control"  name="profile_id">
                                    <option value="" >--select test profile--</option>
                                    <?php
                                    $sql = "SELECT * FROM lb_test_profile";
                                    $resultx = getData($sql);
                                    if ($resultx != FALSE) {
                                        while ($row = mysqli_fetch_assoc($resultx)) {
                                            ?> <option value="<?= $row['id']; ?>|<?= $row['profile_name']; ?>|<?= $row['fee']; ?>"><?php echo $row['profile_name']; ?></option> <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1"><span class="mando-msg">*</span>Test Center</label>
                                <select class="form-control"  name="center_id" required="">
                                    <option value="" >--select test center--</option>
                                    <?php
                                    $sql = "SELECT * FROM lb_center WHERE status_code = 'ACTIVE'";
                                    $resulty = getData($sql);
                                    if ($resulty != FALSE) {
                                        while ($row = mysqli_fetch_assoc($resulty)) {
                                            ?> <option value="<?= $row['id']; ?>|<?= $row['center_name']; ?>"><?php echo $row['center_name']; ?></option> <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>


                            

                            <button type="submit" name="btnAdd" class="btn btn-primary">Add Invoice</button>
                        </form>         


                    </div>
                    <div class="col-md-8">


                        <a href="cartEmplty.php?patient_id=<?= $_GET['patient_id'] ?>">Clear Test Profile List</a>
                        <hr>
                        <?php
                        if (!isset($_SESSION['cart_items'])) {
                            echo 'No Cart item found';
                        } else {
                            ?>
                        <table width="100%" border="1" cellspacing="0" cellpadding="0" >
                                <tr>
                                    <td><strong>Name</strong></td>
                                    <td><strong>Price</strong></td>
                                    <td><strong>Center</strong></td>
                                    <td>&nbsp;</td>
                                </tr>

                                <?php
                                $itemArray = $_SESSION['cart_items'];
                                $itemArraylength = count($itemArray);

                                for ($x = 0; $x < $itemArraylength; $x++) {
                                    ?>
                                    <tr>
                                        <td><?php echo $itemArray[$x]["name"]; ?></td>
                                        <td><?php echo $itemArray[$x]["price"]; ?></td>
                                        <td><?php echo $itemArray[$x]["centername"]; ?></td>
                                        <td><a href="cartItemRemove.php?id=<?php echo $x; ?>&patient_id=<?= $_GET['patient_id'] ?>">remove</a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Subtotal</td>
                                    <td><?php
                                        echo $_SESSION['total_price'];
                                        ?></td>
                                </tr>

                            </table>
                            <br>
                            <form action="manager_create_invoice.php" method="post">
                                <input type="hidden" name="patient_id" value="<?= $_GET['patient_id'] ?>"/>
                                Report Ready Date : <input required="" type="date" name="report_ready_date" />
                                <button type="submit" name="btnFinish" class="btn btn-warning">Finish</button>
                            </form>
                            <?php
                        }
                        ?>
                        <hr>



                    </div>
                </div>   


            </div>
        </div>
        <!-- //container -->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>