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
                <h3>Home</h3>
                <hr>
                <?php
                if ($_SESSION['user']['role_code'] == 'ADMIN') {
                    ?>
                    <div class="row">
                        <div class="col-md-8">
                            <div id="container1" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                        </div>
                        <div class="col-md-4">



                        </div>
                    </div>
                    <?php
                } else
                if ($_SESSION['user']['role_code'] == 'MANAGER' || $_SESSION['user']['role_code'] == 'CASHIER') {
                    ?>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ">OPEN Invoice</div>
                                <div class="panel-body">

                                    <?php
                                    $sql = "SELECT count(*) as cnt FROM ld_invoice WHERE branch_id = 2 AND status_code = 'OPEN'";
                                    $resultPost = getData($sql);
                                    if ($resultPost != FALSE) {
                                        while ($row = mysqli_fetch_assoc($resultPost)) {
                                            echo '<h1>' . $row['cnt'] . '</h1>';
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">

                            <h4>Open Test</h4>
                            <table class="table table-striped">

                                <tr>
                                    <td></td>
                                    <td>Report Ready Date</td>
                                </tr>
                                <?php
                                $sqmOpen = "SELECT * FROM ld_invoice WHERE status_code = 'OPEN'";
                                //echo $sqmOpen;
                                $resultPost = getData($sqmOpen);
                                if ($resultPost != FALSE) {
                                    while ($row = mysqli_fetch_assoc($resultPost)) {
                                        ?>
                                        <tr>
                                            <td><i class="fas fa-barcode"></i> <?= $row['BCN'] ?></td>
                                            <td><?= $row['report_ready_date'] ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </table>

                        </div>
                    </div>


                    <?php
                } else
                if ($_SESSION['user']['role_code'] == 'CASHIER') {
                    
                } else
                if ($_SESSION['user']['role_code'] == 'MLT') {
                    ?>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="panel panel-danger">
                                <div class="panel-heading ">OPEN Invoice</div>
                                <div class="panel-body" style="text-align: center">

                                    <?php
                                    $sql = "SELECT count(*) as cnt FROM ld_invoice WHERE branch_id = 2 AND status_code = 'OPEN'";
                                    $resultPost = getData($sql);
                                    if ($resultPost != FALSE) {
                                        while ($row = mysqli_fetch_assoc($resultPost)) {
                                            echo '<h1>' . $row['cnt'] . '</h1>';
                                        }
                                    }
                                    ?>


                                    <h4>Open Test</h4>
                                    <table class="table table-striped">

                                        <tr>
                                            <td></td>
                                            <td>Report Ready Date</td>
                                        </tr>
                                        <?php
                                        $sqmOpen = "SELECT * FROM ld_invoice WHERE status_code = 'OPEN'";
                                        //echo $sqmOpen;
                                        $resultPost = getData($sqmOpen);
                                        if ($resultPost != FALSE) {
                                            while ($row = mysqli_fetch_assoc($resultPost)) {
                                                ?>
                                                <tr>
                                                    <td><i class="fas fa-barcode"></i> <?= $row['BCN'] ?></td>
                                                    <td><?= $row['report_ready_date'] ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </table>

                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <img style="width: 100%"  class="img-thumbnail" src="images/evacuated_blood.jpg" alt=""/>
                        </div>
                    </div>
                    <?php
                }
                ?>






            </div>
        </div>
        <!-- //container -->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>




    <?php
    if ($_SESSION['user']['role_code'] == 'ADMIN') {
        $sql = "SELECT COUNT(*) AS cnt ,lb_branch.branch_name FROM ld_invoice 
INNER JOIN lb_branch ON lb_branch.id = ld_invoice.branch_id
GROUP BY lb_branch.id";
        $resultPost = getData($sql);
        ?>
        <script>
            Highcharts.chart('container1', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Branch Invoice View'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                        name: 'Brands',
                        colorByPoint: true,
                        data: [<?php
    if ($resultPost != FALSE) {
        while ($row = mysqli_fetch_assoc($resultPost)) {
            ?>
                                    {name: '<?= $row['branch_name'] ?>',
                                        y: <?= $row['cnt'] ?>
                                    },
            <?php
        }
    }
    ?>]
                    }]
            });
        </script>
        <?php
    } else
    if ($_SESSION['user']['role_code'] == 'MANAGER') {
        ?>
        <script>
            Highcharts.chart('container1', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Browser market shares in January, 2018'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                        name: 'Brands',
                        colorByPoint: true,
                        data: [{
                                name: 'Chrome',
                                y: 61.41,
                                sliced: true,
                                selected: true
                            }, {
                                name: 'Internet Explorer',
                                y: 11.84
                            }, {
                                name: 'Firefox',
                                y: 10.85
                            }, {
                                name: 'Edge',
                                y: 4.67
                            }, {
                                name: 'Safari',
                                y: 4.18
                            }, {
                                name: 'Sogou Explorer',
                                y: 1.64
                            }, {
                                name: 'Opera',
                                y: 1.6
                            }, {
                                name: 'QQ',
                                y: 1.2
                            }, {
                                name: 'Other',
                                y: 2.61
                            }]
                    }]
            });
        </script>
        <?php
    } else
    if ($_SESSION['user']['role_code'] == 'CASHIER') {
        //  include './_menu_cashier.php';
    } else
    if ($_SESSION['user']['role_code'] == 'MLT') {
        //  include './_menu_MLT.php';
    }
    ?>
</html>