<!--
Author: Anjana
-->
<?php
session_start();
//echo '<tt><pre>' . var_export($response, TRUE) . '</pre></tt>';

//if (isset($_SESSION['user'])) {
//
//    if ($_SESSION['user']['role_code'] == 'MANAGER') {
//        
//    } else {
//        header("Location:index.php");
//    }
//} else {
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
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="profile.php">Profile <i class="fas fa-user"></i></a></li>
                            <li><a href="logout.php">Logout <i class="fas fa-arrow-circle-right"></i></a>  </li>
                        </ul>	
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


                <?php
                if (isset($_POST['btnAdd'])) {

                    $sql = "INSERT INTO lb_patient
            (`frist_name`,
             `last_name`,
             `nic`,
             `date_of_birth`,
             `telephone`,
             `email`,
             `address`,
             `pword`,
             `status_code`,
             `branch_id`)
VALUES ('" . $_POST['first_name'] . "',
        '" . $_POST['last_name'] . "',
        '" . $_POST['nic'] . "',
        '" . $_POST['date_of_birth'] . "',
        '" . $_POST['telephone'] . "',
        '" . $_POST['email'] . "',
        '" . $_POST['address'] . "',
        PASSWORD('" . $_POST['nic'] . "'),
        'ACTIVE',
        '" . $_SESSION['user']['branch_id'] . "');";

                    $msg = "New Patient Created Successfully";
                    setData($sql, $msg, TRUE);
                }
                ?>


                <div class="panel panel-primary">
                    <div class="panel-heading">Patient Registration</div>
                    <div class="panel-body">
                        <span class="mando-msg">* fields are mandatory</span>
                        <form action="manager_patient_registration.php" method="post">
                            <table class="table table-bordered" >
                                <tr>
                                    <td><span class="mando-msg">*</span> First Name</td>
                                    <td><input type="text" name="first_name" required="" /></td>
                                    <td><span class="mando-msg">*</span>  Last Name</td>
                                    <td><input type="text" name="last_name"  required=""/></td>
                                </tr>
                                <tr>
                                    <td><span class="mando-msg">*</span>  NIC</td>
                                    <td><input type="text" name="nic" required=""/></td>
                                    <td>Date of Birth</td>
                                    <td><input type="date" name="date_of_birth" /></td>
                                </tr>
                                <tr>
                                    <td>Telephone</td>
                                    <td><input type="number" name="telephone" /></td>
                                    <td>Email</td>
                                    <td><input type="email" name="email" /></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><textarea name="address"></textarea>
                                    </td>
                                    <td></td>
                                    <td> <button type="submit" name="btnAdd" class="btn btn-primary">Add Patient</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="panel-footer">The login username and password will be the NIC </div>
                </div>


                <div class="row">
                    <div class="col-md-12">



                        <table id="example" class="display" cellspacing="0" width="100%" style="font-size: small">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>NIC</th>
                                    <th>Date Of Birth</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Created Branch</th>
                                    <th>Created Date</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
$sql = " SELECT lb_patient.*,lb_branch.branch_name FROM lb_patient 
INNER JOIN lb_branch ON
lb_patient.branch_id = lb_branch.id ";
$resultx = getData($sql);
if ($resultx != FALSE) {
    while ($row = mysqli_fetch_assoc($resultx)) {
        ?>

                                        <tr>
                                            <td><?= $row['frist_name']; ?></td>
                                            <td><?= $row['last_name']; ?></td>
                                            <td><?= $row['nic']; ?></td>
                                            <td><?= $row['date_of_birth']; ?></td>
                                            <td><?= $row['telephone']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['address']; ?></td>
                                            <td><?= $row['branch_name']; ?></td>
                                            <td><?= $row['registered_date']; ?></td>
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