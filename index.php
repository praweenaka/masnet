<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/templatemo-style.css" rel="stylesheet">

    </head>
    <body class="tm-gray-bg">


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header alert-info">

                        <h4 class="modal-title " id="myModalLabel">Please Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="form-signin">

                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <input type="text" id="user_name" class="form-control" placeholder="User Name" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <input type="password" id="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <input type="hidden" id="action">
                                <input type="hidden" id="form">

                            </div>
                        </div> <!-- /container -->
                        <span   id="txterror">

                        </span>
                    </div>

                    <div class="modal-footer alert-info">
                        <a style="margin-right: 600px;" onclick="logout();" class="btn btn-primary btn-file">Sign out</a>
                        <button class="btn btn-primary" style="margin-top: -20px; margin-top: -50px;"  onclick="IsValiedData();">Sign in</button>;
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
                        <div class="mobile-menu-icon" >
                            <i class="fa fa-bars"></i>
                        </div>
                        <nav class="tm-nav">
                            <ul>
                                <li><a href="index.php" class="active">HOME</a></li>
                                <li><a href="newsFeed.php">News Feed</a></li>
                                <li><a href="about.php">ABOUT</a></li>
                                <!--<li><a href="contact.php">CONTACT</a></li>-->
                                <!--<li><a href="#" data-toggle="model" data_target="#basicModel">LOGIN</a></li>-->
                                <li> <a href="#" data-toggle="modal" data-target="#myModal">LOGIN</a></li>

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
                        <div   class="tm-banner-inner">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <!--<div class="tm-about-box-1">-->
                                        <!--<a href="#"><img src="img/about-5.jpg" alt="img" class="tm-about-box-1-img"></a>-->
<!--                                        <h3 class="tm-about-box-1-title">Smith <span>( Founder )</span></h3>-->

                                        <div class="col-sm-2">
                                            <a href="security.php" style="margin-right: 10px;" class="tm-banner-link">Security</a>
                                        </div>

                                    <!--</div>-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <!--<div class="tm-about-box-1">-->
                                        <!--<a href="#"><img src="img/about-6.jpg" alt="img" class="tm-about-box-1-img"></a>-->


                                        <div class="col-sm-2">
                                            <a href="transport.php" style="margin-right: 160px;" class="tm-banner-link">Transport</a>
                                        </div>
                                    <!--</div>-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <!--<div class="tm-about-box-1">-->
                                        <!--<a href="#"><img src="img/about-5.jpg" alt="img" class="tm-about-box-1-img"></a>-->

                                        <div class="col-sm-2">
                                            <a href="jenitorial.php" class="tm-banner-link">jenitorial</a>
                                        </div>
                                    <!--</div>-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <!--<div class="tm-about-box-1">-->
                                        <!--<a href="#"><img src="img/about-4.jpg" alt="img" class="tm-about-box-1-img"></a>-->

                                        <div class="col-sm-2">
                                            <a href="canteen.php" class="tm-banner-link">Canteen</a>
                                        </div>
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>

                        <img src="img/MAS-Holdings-2.jpg" alt="Image" />
                    </li>
                    <li>
                        <div   class="tm-banner-inner">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <!--<div class="tm-about-box-1">-->
                                        <!--<a href="#"><img src="img/about-5.jpg" alt="img" class="tm-about-box-1-img"></a>-->
<!--                                        <h3 class="tm-about-box-1-title">Smith <span>( Founder )</span></h3>-->

                                        <div class="col-sm-2">
                                            <a href="security.php" style="margin-right: 10px;" class="tm-banner-link">Security</a>
                                        </div>

                                    <!--</div>-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <!--<div class="tm-about-box-1">-->
                                        <!--<a href="#"><img src="img/about-6.jpg" alt="img" class="tm-about-box-1-img"></a>-->


                                        <div class="col-sm-2">
                                            <a href="transport.php" style="margin-right: 160px;" class="tm-banner-link">Transport</a>
                                        </div>
                                    <!--</div>-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <!--<div class="tm-about-box-1">-->
                                        <!--<a href="#"><img src="img/about-5.jpg" alt="img" class="tm-about-box-1-img"></a>-->

                                        <div class="col-sm-2">
                                            <a href="jenitorial.php" class="tm-banner-link">jenitorial</a>
                                        </div>
                                    <!--</div>-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <!--<div class="tm-about-box-1">-->
                                        <!--<a href="#"><img src="img/about-4.jpg" alt="img" class="tm-about-box-1-img"></a>-->

                                        <div class="col-sm-2">
                                            <a href="canteen.php" class="tm-banner-link">Canteen</a>
                                        </div>
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>

                        <img src="img/MAS-Holdings-1-1.jpg" alt="Image" />
                    </li>

                </ul>
            </div>
        </section>
        <!-- gray bg -->	
        <section class="container tm-home-section-1" id="more">

        </section>		


        <script src="js/user.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
        <script type="text/javascript" src="js/moment.js"></script>							<!-- moment.js -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
        <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <!--
                <script src="js/froogaloop.js"></script>
                <script src="js/jquery.fitvid.js"></script>
        -->
        <script type="text/javascript" src="js/templatemo-script.js"></script>    
        <!--        <script language="javascript">
                    document.onmousedown = disableclick;
                    status = "Right Click Disabled";
                            Function disableclick(e)
                    {
                        if (event.button == 2)
                        {
                            alert(status);
                                    return false;
                        }
                    }
                </script> -->
        <!-- Templatemo Script -->
        <script>
                                                   // HTML document is loaded. DOM is ready.
                                                   $(function () {

                                                       $('#hotelCarTabs a').click(function (e) {
                                                           e.preventDefault()
                                                           $(this).tab('show')
                                                       })

                                                       $('.date').datetimepicker({
                                                           format: 'MM/DD/YYYY'
                                                       });
                                                       $('.date-time').datetimepicker();

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

                                                   // Load Flexslider when everything is loaded.
                                                   $(window).load(function () {

                                                       $('.flexslider').flexslider({
                                                           controlNav: false
                                                       });


                                                   });
        </script>



        <footer class="tm-black-bg">
            <div class="container">
                <div class="row">
                    <p class="tm-copyright-text">

                        | Designed by <a rel="nofollow" href="http://infodatasl.com/" target="_parent">INFODATA COMPUTER SYSTEMS</a></p>
                </div>
            </div>		
        </footer>
    </body>

</html>


