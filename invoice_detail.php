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
include './model/InvoiceModel.php';
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

        <!--barcode-->
        <script type="text/javascript" src="js/JsBarcode.all.min.js"></script>


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


            <div class="col-md-10" >
                <div id="printMe">  

                    <?php
                    //get invoice and test details
                    $invoiceNo = $_GET['id'];
                    $invoice = getInvoice($invoiceNo);
                    echo '<br>';
                    if ($invoice != FALSE) {
                        while ($row = mysqli_fetch_assoc($invoice)) {
                            ?>

                            <center>
                                <h3>LABMS - Test Invoice</h3>
                            </center>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <svg class="barcode"
                                         jsbarcode-format="ean13"
                                         jsbarcode-value="<?= $row['BCN'] ?>"
                                         jsbarcode-textmargin="0"
                                         jsbarcode-fontoptions="bold">
                                    </svg>
                                </div>
                                <div class="col-md-8">

                                    <table>
                                        <tr>
                                            <td><?= $row['branch_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= $row['address'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= $row['branch_telephone'] ?></td>
                                        </tr>
                                    </table><p>Invoice Date <?= $row['invoice_datetime'] ?></p>
<br>
                                    <b>Patient Information</b>
                                    <table>
                                        <tr>
                                            <td><?= $row['frist_name'] ?> <?= $row['last_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= $row['nic'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= $row['telephone'] ?></td>
                                        </tr>
                                    </table>
                                     Invoice Status: <?= $row['status_code'] ?>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <b>Test Information</b>
                                    <?php
                                    //get test by invoice number
                                    $sqlTest = "SELECT lb_invoice_test.*,lb_test_profile.profile_name,lb_center.center_name FROM lb_invoice_test
INNER JOIN lb_test_profile ON lb_test_profile.id = lb_invoice_test.test_id
INNER JOIN lb_center ON lb_center.id = lb_invoice_test.center_id
WHERE lb_invoice_test.invoice_id = '" . $row['id'] . "'";
                                    ?>
                                    <table width="100%" class="table">
                                        <tr>
                                            <th>Test Profile</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Center</th>
                                            <th>Result Value</th>
                                            <th>Remark</th>
                                        </tr>
                                        <?php
                                        $invoiceData = getData($sqlTest);
                                        if ($invoiceData != FALSE) {
                                            while ($rowx = mysqli_fetch_assoc($invoiceData)) {
                                                ?>
                                                <tr>
                                                    <td><?= $rowx['profile_name'] ?></td>
                                                    <td><?= $rowx['amount'] ?></td>
                                                    <td><?= $rowx['status_code'] ?></td>
                                                    <td><?= $rowx['center_name'] ?></td>
                                                    <td><?= $rowx['result_value'] ?></td>
                                                    <td><?= $rowx['results_remark'] ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </table>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Total Amount : <?= $row['total_amount'] ?></h3>
                                    <p>Report Ready Date <?= $row['report_ready_date'] ?></p> 
                                </div>

                            </div>
                            <?php
                        }
                    }
                    ?>

                </div>
                <a href="#" onclick="PrintElem('printMe')">Print</a>
            </div>





        </div>
        <!-- //container -->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>




    <script type="text/javascript">
            $(document).ready(function () {
                JsBarcode(".barcode").init();
            });
    </script>
    <script type="text/javascript">
        function PrintElem(elem)
        {
            var mywindow = window.open('', 'PRINT', 'height=400,width=600');

            mywindow.document.write('<html><head><title>' + document.title + '</title>');
            mywindow.document.write('</head><body >');
            mywindow.document.write('<h1>' + document.title + '</h1>');
            mywindow.document.write(document.getElementById(elem).innerHTML);
            mywindow.document.write('</body></html>');

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/

            mywindow.print();
            mywindow.close();

            return true;
        }
    </script>


</html>