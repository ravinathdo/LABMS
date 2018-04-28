<!--

-->
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
        <script type="text/javascript" src="js/numscroller-1.0.js"></script>
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
        <div class="about all_pad">
            <div class="container">
                <h3 class="title">About</h3>
                <div class="services-grids w3layouts">
                    <div class="col-md-6 ser-right-page">
                        <div class="port-2 effect-3">
                            <div class="image-box w3">
                                <img src="images/lab_net_2.jpg" alt=" "/>
                            </div>
                            <div class="text-desc">
                                <h4>LabMS</h4>
                                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ser-left-page">
                        <div class="services-grid w3l">
                            <div class="services-left w3ls">
                                <p>01</p>
                            </div>
                            <div class="services-right agileits">
                                <h4>Best Care</h4>
<!--                                <p>Sed ut perspiciatis unde omnis iste natus error sit 
                                    voluptatem accusantium doloremque laudantium, totam rem 
                                    aperiam, eaque ipsa quae ab illo </p>-->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="services-grid agileinfo">
                            <div class="services-left wthree">
                                <p>02</p>
                            </div>
                            <div class="services-right w3-agileits">
                                <h4>Accurate Result</h4>
<!--                                <p>Sed ut perspiciatis unde omnis iste natus error sit 
                                    voluptatem accusantium doloremque laudantium, totam rem 
                                    aperiam, eaque ipsa quae ab illo </p>-->
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="about_bot">
            <div class="container">
                <div class="col-md-8 abt-top-right">
                    <div class="col-sm-6 capabil-grid wow fadeInDown animated animated text-center" data-wow-delay="0.4s">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='570' data-delay='.5' data-increment="1">570</div>
                        <h4>Patients</h4>	
<!--                        <p>Sed ut perspiciatis unde omnis iste natus error sit 
                            voluptatem accusantium </p>-->
                    </div>
                    <div class="col-sm-6 capabil-grid wow fadeInDown animated animated text-center" data-wow-delay="0.4s">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='340' data-delay='.5' data-increment="1">340</div>
                        <h4>Test Profiles</h4>	
<!--                        <p></p>-->
                    </div>
                    <div class="col-sm-6 capabil-grid wow fadeInDown animated animated text-center" data-wow-delay="0.4s">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='490' data-delay='.5' data-increment="1">490</div>
                        <h4>Test Centers</h4>	
                       <p></p>
                    </div>
                    <div class="col-sm-6 capabil-grid wow fadeInDown animated animated text-center" data-wow-delay="0.4s">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='250' data-delay='.5' data-increment="1">250</div>
                        <h4>Branches</h4>	
                        <p> </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 abt-top agileits-w3layouts">
                    <img src="images/aaa.png" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="team all_pad">
            <div class="container">
                <h3 class="title">Team</h3>
                <div class="team-grids">

                    <div class="col-md-3 team-grid agile">
                        <div class="team-img">
                            <div class="view second-effect">
                                <img src="images/3.jpg" alt="" class="img-responsive" />
                                <div class="mask">
                                    <p>Ophthalmologist</p>
                                    <ul>
                                        <li><a class="fb-icon1" href="#"></a></li>
                                        <li><a class="fb-icon2" href="#"></a></li>
                                        <li><a class="fb-icon3" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4>Federica</h4>
                    </div>
                    <div class="col-md-3 team-grid agile">
                        <div class="team-img">
                            <div class="view second-effect">
                                <img src="images/4.jpg" alt="" class="img-responsive" />
                                <div class="mask w3-agile">
                                    <p>Neurologist</p>
                                    <ul>
                                        <li><a class="fb-icon1" href="#"></a></li>
                                        <li><a class="fb-icon2" href="#"></a></li>
                                        <li><a class="fb-icon3" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4>Victoria</h4>
                    </div>
                    <div class="col-md-3 team-grid">
                        <div class="team-img agile">
                            <div class="view second-effect">
                                <img src="images/2.jpg" alt="" class="img-responsive" />
                                <div class="mask w3-agile">
                                    <p>Cardiologist</p>
                                    <ul>
                                        <li><a class="fb-icon1" href="#"></a></li>
                                        <li><a class="fb-icon2" href="#"></a></li>
                                        <li><a class="fb-icon3" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4>John Doe</h4>
                    </div>
                    <div class="col-md-3 team-grid">
                        <div class="team-img">
                            <div class="view second-effect">
                                <img src="images/4.jpg" alt="" class="img-responsive" />
                                <div class="mask agileits-w3layouts">
                                    <p>Dermatologist</p>
                                    <ul>
                                        <li><a class="fb-icon1" href="#"></a></li>
                                        <li><a class="fb-icon2" href="#"></a></li>
                                        <li><a class="fb-icon3" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4>Laura</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- contact -->
        <div class="contact_w3agile">
            <div class="container">
                <h2 class="title">Get In Touch</h2>
                <div class="strip"></div>
                <ul>
                    <li><a class="fb-icon1" href="#"></a></li>
                    <li><a class="fb-icon2" href="#"></a></li>
                    <li><a class="fb-icon3" href="#"></a></li>
                    <li><a class="fb-icon4" href="#"></a></li>
                    <li><a class="fb-icon5" href="#"></a></li>
                </ul>

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