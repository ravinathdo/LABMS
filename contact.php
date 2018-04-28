<!--

-->
<?php
include './model/DB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LABMS</title>
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
    </head>
    <body>
        <!-- header -->
        <div class="header_w3l">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a  href="index.html">Clinical<span> Lab </span></a></h1>
                    </div>
                    <!-- top-nav -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php include './_menu_prelogin.php'; ?>	

                        <div class="clearfix"> </div>	
                    </div>
                </nav>
            </div>
        </div>
        <!-- header -->
        <!-- banner -->
        <div class="banner_w3ls page_head">

        </div>
        <!-- //banner -->
        <div class="map all_pad">
            <div class="container">
                <h3 class="title agile">View On Map</h3>
                <iframe src="https://www.google.com/maps/embed/v1/place?q=colombo&key=AIzaSyDwgyHdX0Kbu3Vsx_gDEFY5o0EOT8Xe9Xw" style="border:0"></iframe>
             <div class="contact-grids w3layouts">
                    <h3 class="title">Contact Us<span></span></h3>
                    <div class="col-md-4 contact-grid agile text-center animated wow slideInLeft" data-wow-delay=".5s">
                        <div class="contact-grid1 agileits-w3layouts">
                            <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                            <h4>Address</h4>
                        <p>No:201<span>Colombo Sri lanka </span></p>
                        </div>
                    </div>
                    <div class="col-md-4 contact-grid agileits text-center animated wow slideInUp" data-wow-delay=".5s">
                        <div class="contact-grid2 w3">
                            <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                            <h4>Call Us</h4>
                            <p>011-2 230231</p>
                            <p>011- 2 230232</p>
                        </div>
                    </div>
                    <div class="col-md-4 contact-grid w3 text-center animated wow slideInRight" data-wow-delay=".5s">
                        <div class="contact-grid3 w3l">
                            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                            <h4>Email</h4>
                            <p><a href="mailto:info@example.com">info@labms.info</a><span><a href="mailto:info@example.com">info@labms.info</a></span></p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- contact -->
        <div class="contact_w3agile">
            <div class="container">
                <h2 class="title agileits-w3layouts">Get In Touch</h2>
                <div class="strip"></div>
                <ul>
                    <li><a class="fb-icon1" href="#"></a></li>
                    <li><a class="fb-icon2" href="#"></a></li>
                    <li><a class="fb-icon3" href="#"></a></li>
                    <li><a class="fb-icon4" href="#"></a></li>
                    <li><a class="fb-icon5" href="#"></a></li>
                </ul>

                <?php
                if (isset($_POST['btnSend'])) {
                    $sql = "INSERT INTO lb_message
            (`name_user`,
             `email`,
             `message`)
VALUES ('".$_POST['Name']."',
        '".$_POST['Email']."',
        '".$_POST['Message']."');";
                     $msg = "Message has been sent successfully";
                    setData($sql, $msg, TRUE);
                }
                ?>
                <form action="contact.php" method="post">
                    <input type="text" required="" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Name';
                                }">
                                <input type="email" required="" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Email';}">
                    <textarea name="Message"  onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Message';
                                }" required="">Message</textarea>
                    <div class="con-form text-center">
                        <input type="submit" value="Send" name="btnSend">
                    </div>
                </form>
                <p class="agileinfo">&copy; 2018 LABMS . All rights reserved | Design by <a href="#">Anjana</a></p>

            </div>
        </div>
        <!-- smooth scrolling -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>