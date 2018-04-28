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
                <?php include './_menu_admin.php'; ?>
            </div>
            <div class="col-md-10">
<h3>Create Branch Users</h3>
                        <hr>
                <div class="row">
                    <div class="col-md-6">


                        <?php
                        if (isset($_POST['btnAdd'])) {
                            
                            $branch_id = $_POST['branch_id'];
                            
                            $sql = "INSERT INTO lb_user
            (`frist_name`,
             `last_name`,
             `nic`,
             `empno`,
             `pword`,
             `role_code`,
             `telephone`,
             `created_user`,
             `branch_id`)
VALUES ('".$_POST['frist_name']."',
        '".$_POST['last_name']."',
        '".$_POST['nic']."',
        '".$_POST['empno']."',
        PASSWORD('".$_POST['password']."'),
        '".$_POST['role_code']."',
        '".$_POST['telephone']."',
        '".$_SESSION['user']['id']."',
        '".$_POST['branch_id']."')";
                            
                           $msg = "New user created successfully";
                           //echo $sql;
                        setData($sql, $msg, TRUE);    
                        }
                        
                     
                        
                        ?>


                        <div class="panel panel-primary">
                            <div class="panel-heading ">User Creation</div>
                            <div class="panel-body">
                                
                                
                                <?php 
                                if(isset($_GET['branch_id'])){
                                    $branch_id = $_GET['branch_id'];
                                }
                                ?>

                                <form class="form-horizontal" action="branch_users.php" method="post">
                                    <span class="mando-msg">* fields are mandatory</span>
                                    <input type="hidden" name="branch_id" value="<?php echo $branch_id;?>" />
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">User Role <span class="mando-msg">*</span></label>
                                        <div class="col-sm-9">
                                            <select name="role_code" required="" class="form-control" >
                                                <option value="">--Select user role--</option>
                                                <option value="MANAGER">MANAGER</option>
                                                <option value="CASHIER">CASHIER</option>
                                                <option value="MLT">MLT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">First Name <span class="mando-msg">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="frist_name" class="form-control" id="inputEmail3" required="" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="last_name" class="form-control" id="inputEmail3" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">NIC <span class="mando-msg">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nic" required="" class="form-control" id="inputEmail3" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">Employee Number <span class="mando-msg">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="empno" required="" class="form-control" id="inputEmail3" placeholder="This will be the username" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">Password <span class="mando-msg">*</span></label>
                                        <div class="col-sm-9">
                                             <input type="password" class="form-control" id="password" placeholder="password"
                                   name="password">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">Re-type Password</label>
                                        <div class="col-sm-9">
                                            <input  class="form-control"  name="password_confirm" required="required" type="password" id="password_confirm" oninput="check(this)" placeholder="minimum 6 characters" >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">Telephone</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="telephone" class="form-control" id="inputEmail3" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button onclick="return validateInput()" type="submit" name="btnAdd" class="btn btn-primary">Add User</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            
                       
                        
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>User Role</th>
                                    <th>NIC</th>
                                    <th>Employee No</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = " SELECT * FROM lb_user WHERE branch_id = $branch_id";
                                $resultx = getData($sql);
                                if ($resultx != FALSE) {
                                    while ($row = mysqli_fetch_assoc($resultx)) {
                                        ?>

                                        <tr>
                                            <td><?= $row['frist_name']; ?> <?= $row['last_name']; ?></td>
                                            <td><?= $row['role_code']; ?></td>
                                            <td><?= $row['nic']; ?></td>
                                            <td><?= $row['empno']; ?></td>
                                            <td><a href="admin_update_user.php?id=<?= $row['id']; ?>">Update</a></td>
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
    
    
    <script language='javascript' type='text/javascript'>
                            function check(input) {
                                if (input.value != document.getElementById('password').value) {
                                    input.setCustomValidity('Password Must be Matching.');
                                } else {
                                    // input is valid -- reset the error message
                                    input.setCustomValidity('');
                                }
                            }
                        </script>
    
    <script type="text/javascript">
                            $(document).ready(function () {
                                $('#example').DataTable();
                            });
                        </script>
                        
                        
                        <script>
            function validateInput() {
                var pword = $('#password_confirm').val();
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