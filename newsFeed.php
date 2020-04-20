<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NEWS FEED</title>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/templatemo-style.css" rel="stylesheet">

        <style>
            div.scroll {
                background-color: lightgray;

                height: 1000px;
                overflow: scroll;
            }
            
            #msg {
                white-space: pre;
            }

        </style>
    </head>
    <body class="tm-gray-bg">
        
        <div class="modal fade" id="myModal_c" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Message</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="form-signin">

                        <div class="modal-body">
                            <p></p>
                            <div id="msg"></div>
                        </div>
                        <input type="hidden" id="action">
                        <input type="hidden" id="form">

                    </div>
                </div> <!-- /container -->
                <span   id="txterror">

                </span>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>
        <!-- Header -->
        <div class="tm-header">
            <div class="container">
                <div class="row">
                   <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
                        <!--<a href="index.php" class="tm-site-name">MAS HOLDINGS</a>-->
                        <img  src="img/Mas_Holdings_Logo.png" style="width: 150px; height: 60px;">
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-9">
                        <div class="mobile-menu-icon">
                            <i class="fa fa-bars"></i>
                        </div>
                        <nav class="tm-nav">
                            <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="newsFeed.php" class="active">News Feed</a></li>
                                <li><a href="about.php" >About</a></li>
                                <li><a href="contact.php">CONTACT</a></li>
                                <!--<li><a href="login.php">Login</a></li>-->
                            </ul>
                        </nav>		
                    </div>				
                </div>
            </div>	  	
        </div>

        <!-- Banner -->
        <section class="tm-banner">
            <!-- Flexslider -->
            <div class="flexslider flexslider-banner">
                <ul class="slides">
                    <li>
                        <div class="tm-banner-inner">
                            <h1 class="tm-banner-title">NEWS <span class="tm-yellow-text">FEEDS</span> </h1>
                            <!--<p class="tm-banner-subtitle">For Your Vacations</p>-->
                            <a href="#more" class="tm-banner-link">Learn More</a>	
                        </div>
                        <img src="img/MAS-Holdings-2.jpg" />
                    </li>
                    <li>
                        <div class="tm-banner-inner">
                            <h1 class="tm-banner-title">NEWS <span class="tm-yellow-text">FEEDS</span> </h1>

                            <a href="#more" class="tm-banner-link">Learn More</a>	
                        </div>
                        <img src="img/ff.jpg" />
                    </li>
                    <li>
                        <div class="tm-banner-inner">
                            <h1 class="tm-banner-title">NEWS <span class="tm-yellow-text">FEEDS</span> </h1>

                            <a href="#more" class="tm-banner-link">Learn More</a>	
                        </div>
                        <img src="img/home-bg.jpg" />
                    </li>
                </ul>
            </div>		
        </section>

        <!-- gray bg -->	
        <section class="container tm-home-section-1" id="more">
            <div class="row">
                <!-- slider -->
                <div class="flexslider flexslider-about effect2">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success" style="background-color:gray">




                            <div class="form-group">
                                <div class="row ">
                                    <div  id="commentss" class="col-md-5 main-wrapper " style="border:0px solid red;display:block;height:500px; color: black;">

                                    </div>
                                    <div id="kk" class="col-md-7" style=" color: black;"  >
                                        <img src="img/home-bg2.jpg" width="850px;" height="500px;">
                                    </div>
                                </div>
                            </div>

                        </li>

                    </ul>
                </div>
            </div>


        </section>		

        <!-- white bg -->
        <!--        <section class="tm-white-bg section-padding-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="tm-section-header section-margin-top">
                                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                                <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">What we do</h2></div>
                                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
                            </div>				
                        </div>
                        <div class="row">
                             Testimonial 
                            <div class="col-lg-12">
                                <div class="tm-what-we-do-right">
                                    <div class="tm-about-box-2 margin-bottom-30">
                                        <img src="img/about-2.jpg" alt="image" class="tm-about-box-2-img">
                                        <div class="tm-about-box-2-text">
                                            <h3 class="tm-about-box-2-title">Gravida Nibh Vel Velit Auctor Aliquet Etiam</h3>
                                            <p class="tm-about-box-2-description gray-text">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis.</p>
                                            <p class="tm-about-box-2-footer">Mauris In Erat Justo</p>	
                                        </div>		                
                                    </div>
                                    <div class="tm-about-box-2">
                                        <img src="img/about-3.jpg" alt="image" class="tm-about-box-2-img">
                                        <div class="tm-about-box-2-text">
                                            <h3 class="tm-about-box-2-title">Sed Non Mauris Vitae Erat Con Ruat Nostra</h3>
                                            <p class="tm-about-box-2-description gray-text">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis.</p>
                                            <p class="tm-about-box-2-footer">Sednon Mauris Vitae</p>	
                                        </div>		                
                                    </div>
                                </div>
                                <div class="tm-testimonials-box">
                                    <h3 class="tm-testimonials-title">Testimonials</h3>
                                    <div class="tm-testimonials-content">
                                        <div class="tm-testimonial">
                                            <p>"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum."</p>
                                            <strong class="text-uppercase">John Smith</strong>	
                                        </div>
                                        <div class="tm-testimonial">
                                            <p>"Nisi elit consequat ipsum, nec sagittis sem nibh id elit duis sed odio sit amet nibh."</p>
                                            <strong class="text-uppercase">Lorens</strong>		
                                        </div>
                                        <div class="tm-testimonial">
                                            <p>"Rulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio."<p>
                                                <strong class="text-uppercase">Robert</strong>
                                        </div>                	
                                    </div>
                                </div>	
                            </div>							
                        </div>			
                    </div>
                </section>-->
        <footer class="tm-black-bg">
            <div class="container">
                <div class="row">
                    <p class="tm-copyright-text">

                        | Designed by <a rel="nofollow" href="http://infodatasl.com/" target="_parent">INFODATA COMPUTER SYSTEMS</a></p>
                </div>
            </div>		
        </footer>
        <script src="js/newsFeed.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
        <script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
        <script>
            $(function () {

                // https://css-tricks.com/snippets/jquery/smooth-scrolling/
                $('a[href*=#]:not([href=#])').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
            $(window).load(function () {
                // Flexsliders
                $('.flexslider.flexslider-banner').flexslider({
                    controlNav: false
                });
                $('.flexslider').flexslider({
                    animation: "slide",
                    directionNav: false,
                    slideshow: false
                });
            });
        </script>
    </body>
</html>
<script>getdtl1();</script>