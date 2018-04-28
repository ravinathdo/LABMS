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
                <?php include './_menu_admin.php'; ?>
            </div>
            <div class="col-md-10">

                <h3>Explorer Branch</h3>
                <hr>



                <?php
                if (isset($_GET['status'])) {
                    
                    $status_code = 'ACTIVE';
                    switch ($_GET['status']) {
                        case "ACTIVE":
$status_code = 'DEACTIVE';
                            break;
                        case "DEACTIVE":
$status_code = 'ACTIVE';

                            break;
                        default:
                            break;
                    }
                    $sql = "UPDATE lb_branch SET status_code = '$status_code' WHERE id = '".$_GET['branch_id']."' ";
                   // echo $sql;    
                    setUpdate($sql, "Status Updated", TRUE);
                    
                    }
                ?>



                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Branch Name</th>
                            <th>Address</th>
                            <th>Telephone</th>
                            <th>Manage Users</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = " SELECT * FROM lb_branch ";
                        $resultx = getData($sql);
                        if ($resultx != FALSE) {
                            while ($row = mysqli_fetch_assoc($resultx)) {
                                ?>

                                <tr>
                                    <td><?= $row['branch_name']; ?></td>
                                    <td><?= $row['address']; ?></td>
                                    <td><?= $row['telephone']; ?></td>
                                    <td><a href="branch_users.php?branch_id=<?= $row['id']; ?>"> <span class="label label-primary"> <i class="fas fa-users"></i>  Manage Users </span></a></td>
                                    <td>[<?= $row['status_code']; ?>]<a href="branch_explorer.php?branch_id=<?= $row['id']; ?>&status=<?= $row['status_code']; ?>"> Status Change</a></td>
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


    <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
    </script>

</html>