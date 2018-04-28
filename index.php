<!DOCTYPE html>
<html>
    <head>
        <title>LABMS</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <!--animate-->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
        <!-- start-smoth-scrolling -->
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
                        <?php include './_labms.php'; ?>
                    </div>
                    <!-- top-nav -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php  include './_menu_prelogin.php'; ?>	
                        <div class="clearfix"> </div>	
                    </div>
                </nav>
            </div>
        </div>
        <!-- header -->
        <!-- banner -->
        <div class="banner_w3ls w3layouts">
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider3").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });
                });
            </script>
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="banner-info w3">
                            <div class="banner-text w3l">
                                <h3>WE CARE<span>ABOUT OUR PATIENTS</span></h3>
                                <p>The classical equipment includes tools such as Bunsen burners and microscopes as well as specialty equipment such as operant conditioning chambers, spectrophotometers and calorimeters. Chemical laboratories </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info w3ls">
                            <div class="banner-text agileits">
                                <h3>WE ARE FOCUSSED YOU<span>ROUND THE CLOCK</span></h3>
                                <p>The classical equipment includes tools such as Bunsen burners and microscopes as well as specialty equipment such as operant conditioning chambers, spectrophotometers and calorimeters. Chemical laboratories </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info agileinfo">
                            <div class="banner-text wthree">
                                <h3>HELPING YOU<span>LIVE YOUR HEALTHY LIFE</span></h3>
                                <p>The classical equipment includes tools such as Bunsen burners and microscopes as well as specialty equipment such as operant conditioning chambers, spectrophotometers and calorimeters. Chemical laboratories </p>

                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //banner -->
        <!-- banner-bottom -->
        <div class="bottom_wthree">
            <div class="col-md-6 bottom-left w3-agileits">	
                <figure class="cube-1">
                    <div class="btm-hov">
                        <div class="btm-wid">
                            <div class="thumbs">
                                <span class="rotate">
                                    <a href="#" class="btn">LabMS</a>
                                </span>
                            </div>
                            <div class="fill_fig">
                                <span class="fill"></span>
                                <span class="fill"></span>
                                <span class="fill"></span>
                                <span class="fill"></span>
                            </div>
                        </div>
                    </div>
                </figure>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 bottom-right agileits-w3layouts">
                <div class="btm-right-grid agile">
                    <h2>Providing Appropriate Health Care For Adult, Seniors and Children</h2>
                    <p>The best laboratory service for all </p>
                </div>	
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //banner-bottom -->
        <!-- services -->
        <div class="services_agile">
            <div class="container">
                <h3 class="title">Our Best Services</h3>
                <div class="services_right w3-agile">
                    <div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <span><img src="images/icon1.png" alt=" "/></span>
                        <h4>Testing</h4>
                        <div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p5.jpg" alt=" "/></a></div>
<!--                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                            sed quia consequuntur magni dolores eos qui</p>-->
                    </div>
                    <div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <span><img src="images/icon2.png" alt=" "/></span>
                        <h4>Treatment</h4>
                        <div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p6.jpg" alt=" "/></a></div>
<!--                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                            sed quia consequuntur magni dolores eos qui</p>-->
                    </div>
                    <div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <span><img src="images/icon3.png" alt=" "/></span>
                        <h4>Accurate</h4>
                        <div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p7.jpg" alt=" "/></a></div>
<!--                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                            sed quia consequuntur magni dolores eos qui</p>-->
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //services -->

        <!-- care -->
        <div class="care_agileitsx">
            <div class="container">
                  <h3 class="title">Offering the full spectrum of new treatments</h3>
                    <table  border="1" cellspacing="0" cellpadding="0"  class="table table-striped" >
                      <tr>
                        <td width="37"><p align="center"><strong>Test-ID</strong></p></td>
                        <td width="216"><p align="center"><strong>BLOOD TEST NAME</strong></p></td>
                        <td width="270"><p align="center"><strong>PURPOSE</strong></p></td>
                        <td width="198"><p align="center"><strong>PREREQUESTIEST</strong></p></td>
                        <td width="157"><p align="center"><strong>SAMPEL COLLECTING POINT</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 01</strong></p></td>
                        <td width="216" valign="top"><p><strong>FULL    BLOOD COUNT  (FBC)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Infection    / Blood Disorders </strong></p></td>
                        <td width="198" valign="top"><p><strong>  Anytime </strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37"><p><strong>TEST-ID 02</strong></p></td>
                        <td width="216"><p><strong>C    – REACTIVE PROTEIN  (CRP)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Infection    / Inflammatory Condition /Acute Body Reaction</strong></p></td>
                        <td width="198"><p><strong>  Anytime</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 03</strong></p></td>
                        <td width="216" valign="top"><p><strong>FASTING    BLOOD SUGAR  (FBS) </strong></p></td>
                        <td width="270" valign="top"><p><strong>Diabetes</strong></p></td>
                        <td width="198" valign="top"><p><strong> Fasting to 10 or 12 hours</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 04</strong></p></td>
                        <td width="216" valign="top"><p><strong>ERYTHROCYTE    SEDIMENTATION RATE (ESR)</strong></p></td>
                        <td width="270"><p><strong>Inflammatory    condition / Carcinomas</strong></p></td>
                        <td width="198"><p><strong> Anytime</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 05</strong></p></td>
                        <td width="216" valign="top"><p><strong>SERUM    GLUTAMIC-OXALOACETIC TRANSAMINASE (SGOT) / (AST)</strong><br>
                          <strong>SERUM    GLUTAMIC-PYRUVIC TRANSAMINASE (SGPT) / (ALT)</strong></p></td>
                        <td width="270"><p><strong>                                                                            Liver Involvement </strong></p></td>
                        <td width="198"><p><strong> Anytime</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 06</strong></p></td>
                        <td width="216" valign="top"><p><strong>THYROID    STIMULATING HORMO (TSH)</strong></p></td>
                        <td width="270"><p><strong>Thyroid    Conditions </strong></p></td>
                        <td width="198"><p><strong> Anytime</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37"><p><strong>TEST-ID 07</strong></p></td>
                        <td width="216"><p><strong>SERUM    ELECTROLYTES (SE)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Renal    Involvement and any electrolytes imbalance</strong></p></td>
                        <td width="198"><p><strong> Anytime</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 08</strong></p></td>
                        <td width="216" valign="top"><p><strong>GLYCATED    HAEMOGLOBIN (HbA1c)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Diabetes    management of 3 months period</strong></p></td>
                        <td width="198"><p><strong> Anytime </strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37"><p><strong>TEST-ID 09</strong></p></td>
                        <td width="216"><p><strong>DENGUE    ANTIGENT (NS1)      </strong></p></td>
                        <td width="270"><p><strong>Recent    or Previous Dengue   infection</strong></p></td>
                        <td width="198" valign="top"><p><strong> Fever of 1 – 3 days</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37"><p><strong>TEST-ID 10</strong></p></td>
                        <td width="216"><p><strong>DENGUE    ANTIBODY</strong></p></td>
                        <td width="270"><p><strong>Recent    or previous Dengue infection</strong></p></td>
                        <td width="198"><p><strong> After 5 days of fever</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37"><p><strong>TEST-ID 11</strong></p></td>
                        <td width="216"><p><strong>BLOOD    CULTURE</strong></p></td>
                        <td width="270"><p><strong>Septicemia    in blood</strong></p></td>
                        <td width="198"><p><strong> Anytime</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37"><p><strong>TEST-ID 12</strong></p></td>
                        <td width="216"><p><strong>SERUM    CREATINE (S.CRE) AND BLOOD UREA (BU)</strong></p></td>
                        <td width="270"><p><strong>Kidney    Failure </strong></p></td>
                        <td width="198"><p><strong> Anytime</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37"><p><strong>TEST-ID 13</strong></p></td>
                        <td width="216"><p><strong>SERUM    β HCG (S β HCG)</strong></p></td>
                        <td width="270" valign="top"><p><strong> To check active pregnancy / Ectopic    pregnancy</strong></p></td>
                        <td width="198"><p><strong> Anytime</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 14</strong></p></td>
                        <td width="216" valign="top"><p><strong>BLOOD    PICTURE  </strong></p></td>
                        <td width="270" valign="top"><p><strong>Anemia    / Leukemia Diagnosis</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37"><p><strong>TEST-ID 15</strong></p></td>
                        <td width="216" valign="top"><p><strong>CALCIUM    (Ca2+) AND POSPHATE (Po43-)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Born    Involvement / Kidney Involvement</strong></p></td>
                        <td width="198"><p><strong> Anytime</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 16</strong></p></td>
                        <td width="216" valign="top"><p><strong>LIPID    PROFILE</strong></p></td>
                        <td width="270" valign="top"><p><strong>Cholesterol</strong></p></td>
                        <td width="198" valign="top"><p><strong> Fasting to 10 hours</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37"><p><strong>TEST-ID 17</strong></p></td>
                        <td width="216"><p><strong>SERUM    BILIRUBIN (SBR)</strong></p></td>
                        <td width="270"><p><strong>Check    to bilirubin levels</strong></p></td>
                        <td width="198" valign="top"><p><strong> Neonatal Jaundice  Conditions</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37"><p><strong>TEST-ID 18</strong></p></td>
                        <td width="216"><p><strong>MYCOPLASMA    (IgM) (IgG)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Detection    of mycoplasma Pneumonia infection</strong></p></td>
                        <td width="198"><p><strong> Anytime</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37"><p><strong>TEST-ID 19</strong></p></td>
                        <td width="216" valign="top"><p><strong>CLOTTING    PROFILE (PT/INR/APTT/BT/CT)   CLOTTING    TIME (CT) BLEEDING TIME (BT)</strong></p></td>
                        <td width="270"><p><strong>Coagulation    problem detection </strong></p></td>
                        <td width="198"><p><strong> Anytime</strong></p></td>
                        <td width="157"><p><strong>                                     Venous    Blood               (BT) - Ear Piers </strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 20</strong></p></td>
                        <td width="216" valign="top"><p><strong>HUMAN    IMMUNODEFICIENCY VIRUS (HIV)</strong></p></td>
                        <td width="270"><p><strong>Detection    of AIDs</strong></p></td>
                        <td width="198"><p><strong>Anytime</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 21</strong></p></td>
                        <td width="216" valign="top"><p><strong>VENEREAL    DISEASE RESEARCH LABORATORY TEST (VDRL)</strong></p></td>
                        <td width="270" valign="top"><p><strong>To    detection Syphilis</strong></p></td>
                        <td width="198" valign="top"><p><strong>Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 22</strong></p></td>
                        <td width="216" valign="top"><p><strong>HEPATITIS    B SURFACE ANTIGEN (HbSAg)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Detection    of hepatitis B</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 23</strong></p></td>
                        <td width="216" valign="top"><p><strong>CANCER    ANTIGEN 125 (CA125)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Ovarian    and Bowel cancers</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 24</strong></p></td>
                        <td width="216" valign="top"><p><strong>FILARIA    ANTIBODY TEST</strong></p></td>
                        <td width="270" valign="top"><p><strong>Detection    of filarial </strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 25</strong></p></td>
                        <td width="216" valign="top"><p><strong>MONOSPOST</strong></p></td>
                        <td width="270" valign="top"><p><strong>Diagnosis    of infectious mononucleosis</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 26</strong></p></td>
                        <td width="216" valign="top"><p><strong>TROPANIN    – I                                 TROPANIN – T </strong></p></td>
                        <td width="270" valign="top"><p><strong>Detection    of myocardial infection </strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 27</strong></p></td>
                        <td width="216" valign="top"><p><strong>HIGH    PERFOMANCE LIUID CHROMATOGRAPHY (HPLC)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Detection    of Thalassemia </strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 28</strong></p></td>
                        <td width="216" valign="top"><p><strong>POST    PRANDIAL BLOOD SUGAR (PPBS)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Diagnosis    Diabetes ( GDM / DM )</strong></p></td>
                        <td width="198" valign="top"><p><strong> After 2 hours of main meal </strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 29</strong></p></td>
                        <td width="216" valign="top"><p><strong>KLEIHOUER</strong></p></td>
                        <td width="270" valign="top"><p><strong>Fetomaternal    Transfusion</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime </strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 30</strong></p></td>
                        <td width="216" valign="top"><p><strong>IRON    PROFILE</strong></p></td>
                        <td width="270" valign="top"><p><strong>Detection    of Anemia and Iron content</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 31</strong></p></td>
                        <td width="216" valign="top"><p><strong>PROSPATE-SPECIFIC    ANTIGEN (PSA)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Prostate    Problem</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 32</strong></p></td>
                        <td width="216" valign="top"><p><strong>BRAIN    NATRIURETIC PEPTIDE (BNP)</strong></p></td>
                        <td width="270" valign="top"><p><strong>Heart    Failure</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 33</strong></p></td>
                        <td width="216" valign="top"><p><strong>LUPUS    BLOOD TEST</strong></p></td>
                        <td width="270" valign="top"><p><strong>Diagnosis    of recurrent miscarriges</strong></p></td>
                        <td width="198" valign="top"><p><strong>&nbsp;</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 34</strong></p></td>
                        <td width="216" valign="top"><p><strong>KARIYOTIPINY</strong></p></td>
                        <td width="270" valign="top"><p><strong>Diagnosis    of genetic disorders</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 35</strong></p></td>
                        <td width="216" valign="top"><p><strong>ANTI    NEUCLEAR ANTIBODY</strong></p></td>
                        <td width="270" valign="top"><p><strong>SLE    (Systemic Lupus Erythematosus)</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 36</strong></p></td>
                        <td width="216" valign="top"><p><strong>ALFA    FETO PROTINE</strong></p></td>
                        <td width="270" valign="top"><p><strong>Liver    malignancies</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 37</strong></p></td>
                        <td width="216" valign="top"><p><strong>FACTOR    VIII</strong></p></td>
                        <td width="270" valign="top"><p><strong>Detection    of factor VIII deficiency / Hemophilia disorders</strong></p></td>
                        <td width="198" valign="top"><p><strong> Anytime</strong></p></td>
                        <td width="157" valign="top"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                      <tr>
                        <td width="37" valign="top"><p><strong>TEST-ID 38</strong></p></td>
                        <td width="216" valign="top"><p><strong>FSH                                                PORALACTIN                                  PROGESTRONE</strong><br>
                          <strong>LH</strong></p></td>
                        <td width="270"><p><strong>Detection    of sub fertility / PCOS screening hormones levels</strong></p></td>
                        <td width="198" valign="top"><p><strong>TEST-ID;</strong></p></td>
                        <td width="157"><p><strong>Venous    Blood</strong></p></td>
                      </tr>
                  </table>
            </div>
        </div>
        <!-- //care -->
        <div class="features_w3 agileits">
            <div class="container">
                <h3 class="title">Our Features</h3>
                <div class="fea_grids w3ls">
                    <div class="col-md-6 fea_grid1">
                        <div class="col-sm-4 fea_left text-center w3ls">
                            <div class="ih-item circle effect1">
                                <a href="#">
                                    <div class="spinner"></div>
                                    <div class="img"><img src="images/icon1.png" alt="img"></div>
                                    <div class="info">
                                        <div class="info-back">

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-8 fea_right agileinfo">
                            <h4>Clinical Pathology</h4>
<!--                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                aut odit aut fugit, sed quia consequuntur magni dolores eos qui</p>-->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 fea_grid2">
                        <div class="col-sm-8 fea_right fea_two w3-agileits">
                            <h4>Flow Cytometry</h4>
<!--                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                aut odit aut fugit, sed quia consequuntur magni dolores eos qui</p>-->
                        </div>
                        <div class="col-sm-4 fea_left fea_one text-center w3layouts">
                            <div class="ih-item circle effect1">
                                <a href="#">
                                    <div class="spinner"></div>
                                    <div class="img"><img src="images/icon2.png" alt="img"></div>
                                    <div class="info">
                                        <div class="info-back">

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 fea_grid1 fea_bor w3-agileits">
                        <div class="col-sm-4 fea_left text-center">
                            <div class="ih-item circle effect1">
                                <a href="#">
                                    <div class="spinner"></div>
                                    <div class="img"><img src="images/icon3.png" alt="img"></div>
                                    <div class="info">
                                        <div class="info-back">

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-8 fea_right agileits-w3layouts">
                            <h4>Haematology</h4>
<!--                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                aut odit aut fugit, sed quia consequuntur magni dolores eos qui</p>-->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 fea_grid2 fea_bor w3">
                        <div class="col-sm-8 fea_right fea_one w3l">
                            <h4>Microbiology</h4>
<!--                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                aut odit aut fugit, sed quia consequuntur magni dolores eos qui</p>-->
                        </div>
                        <div class="col-sm-4 fea_left fea_two text-center w3-agileits">
                            <div class="ih-item circle effect1">
                                <a href="#">
                                    <div class="spinner"></div>
                                    <div class="img"><img src="images/icon4.png" alt="img"></div>
                                    <div class="info">
                                        <div class="info-back">

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="contact_w3agile">
            <div class="container">
                <h2 class="title w3">Get In Touch</h2>
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