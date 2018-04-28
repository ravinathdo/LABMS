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
            <div class="col-md-3">
                <h3>Manage Centers</h3>
                        <hr>

                <?php
                if (isset($_POST['btnAdd'])) {

                    $sql = "INSERT INTO lb_center
            (`center_name`,
             `center_address`,
             `telephone`,
             `email`,
             `status_code`,
             `remarks`)
VALUES ('" . $_POST['center_name'] . "',
        '" . $_POST['center_address'] . "',
        '" . $_POST['telephone'] . "',
        '" . $_POST['email'] . "',
        '" . $_POST['status_code'] . "',
        '" . $_POST['remarks'] . "');";

                    $msg = "New Center Created";
                    setData($sql, $msg, TRUE);
                };
                ?>

                <div class="panel panel-primary">
                    <div class="panel-heading ">Center Creation</div>
                    <div class="panel-body">
                        <form action="center_manage.php" method="post">
                            <span class="mando-msg">* fields are mandatory</span>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><span class="mando-msg">*</span>Center Name</label>
                                <input type="text" required="" class="form-control" name="center_name" id="exampleInputEmail1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><span class="mando-msg">*</span>Address</label>
                                <textarea name="center_address" required="" class="form-control"> </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Telephone</label>
                                <input type="text" class="form-control" name="telephone" id="exampleInputEmail1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Remark</label>
                                <textarea name="remarks" class="form-control"> </textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Status</label>
                                <select name="status_code" class="form-control">
                                    <option value="ACTIVE">ACTIVE</option>
                                    <option value="DEACTIVE">DEACTIVE</option>
                                </select>
                            </div>
                            <button type="submit" name="btnAdd" class="btn btn-primary">Add Center</button>
                        </form>
                    </div>
                </div>





            </div>
            <div class="col-md-7">

                <?php
                if (isset($_GET['status_code'])) {

                    $status_code = $_GET['status_code'];
                    $id = $_GET['id'];
                    $status_code_new = "";
                    switch ($status_code) {
                        case "ACTIVE":
                            $status_code_new = "DEACTIVE";
                            break;
                        case "DEACTIVE":
                            $status_code_new = "ACTIVE";
                            break;
                        default:
                            break;
                    }
                    
                      $sqlUpdate = "UPDATE lb_center SET status_code = '$status_code_new' WHERE id = '$id'";
                      $msg = "Status Updated Successfully";
                      setUpdate($sqlUpdate, $msg, TRUE);
                }
              
                ?>


                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Center ID</th>
                            <th>Center Name</th>
                            <th>Address</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Join Date</th>
                            <th>Remark</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
<?php
$sql = " SELECT * FROM lb_center ";
$resultx = getData($sql);
if ($resultx != FALSE) {
    while ($row = mysqli_fetch_assoc($resultx)) {
        ?>

                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['center_name']; ?></td>
                                    <td><?= $row['center_address']; ?></td>
                                    <td><?= $row['telephone']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['joined_date']; ?></td>
                                    <td><?= $row['remarks']; ?></td>
                                    <td><a href="center_manage.php?id=<?= $row['id']; ?>&status_code=<?= $row['status_code']; ?>"> <?= $row['status_code']; ?>  </a></td>
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

    <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
    </script>
</html>