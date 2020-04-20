<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jenitorial</title>

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
    <body>
        <!-- Modal -->
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
                                <li><a href="index.php" class="active">HOME</a></li>
                                <li><a href="about.php">ABOUT</a></li>
                                <li><a href="contact.php" >CONTACT</a></li>
                                <li><a href="login.php">Login</a></li>

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
                            <h1 class="tm-banner-title">TRANS<span class="tm-yellow-text">PORT</span> </h1>
                            <!--<p class="tm-banner-subtitle">For Upcoming Holidays</p>-->

                        </div>
                        <img src="img/transport.jpg" alt="Banner 3" />
                    </li>
                </ul>
            </div>
        </section>


        <!-- gray bg -->

        <section class="container tm-home-section-1" id="more">
            <div class="row">
                <!-- slider -->
                <div class="flexslider effect2 effect2-contact tm-contact-box-1" style="background-color: #a8a8a4">
                    <ul class="slides1">
                        <li>

                            <div class="form-group">
                                <?php
                                include './connectioni.php';
                                $sql = "select * from user_mast where user_name='" . $_SESSION['UserName'] . "' and user_depart='Transport'";
                                $result = mysqli_query($GLOBALS['dbinv'], $sql);

                                while ($row = mysqli_fetch_array($result)) {
                                    echo"<div class=\"row\">";

                                    echo"<div class =\"col-md-6\">";
                                    echo"<label class = \"col-md-12\">Type Your Post</label>";
                                    echo" <div class = \"col-sm-12\">";

                                    echo"<textarea class=\"form-control\" placeholder = \"Type Your Post\" name = \"description\" id = \"description\" rows = \"5\" cols = \"65\"></textarea>";
                                    echo"<input type = \"button\" class = \"form-control\" value = \"POST\" style = \"width: 180px; height:35px; margin-left: 294px;\" onclick = \"submit()\"/>";

                                    echo" </div>";
                                    echo" </div>";

                                    echo" <div class = \"col-md-6\" style = \"height: 210px;\" id = \"filup\">";

                                    echo" <label class = \"col-md-12\" for = \"file-3\">File Box</label>";
                                    echo"  <label class = \"btn btn-default col-md-9\" for = \"file-3\">";
                                    echo" <input class=\"form-control\" id = \"file-3\" name = \"file-3\" multiple = \"true\" type = \"file\" >";
                                    echo"Select Files";

                                    echo"  </label>";
                                    echo" <div class = \"col-sm-12\">";
                                    echo" <label class = \"col-sm-2\"></label>";
                                    echo" <div class = \"form-group\"></div>";
                                    echo"  <a class = \"btn btn-primary\" style = \"margin-left: 300px;\" onclick = \"uploadfile();\" class = \"btn\"/>Upload</a>";
                                    echo" </div>";
                                    echo" </div>";
                                    echo" </div>";
                                }
                                ?>
                                <?php
                                include './connectioni.php';
                                $sql = "select * from user_mast where user_name='" . $_SESSION['UserName'] . "' and (user_depart='Canteen' or user_depart='Jenetorial' or user_depart='Security')";
                                $result = mysqli_query($GLOBALS['dbinv'], $sql);

                                while ($row = mysqli_fetch_array($result)) {
                                   echo"<h1><center><label class = \"col-md-12\" style=\"color:white\">NOTICE</label><center></h1>";
                                }
                                    ?>
                                
                                <div class = "row">
                                    <label class = "col-sm-1"></label>
                                </div>
                                <div class = "row">
                                    <div id = "comments"class = "col-md-6 scroll">

                                    </div>


                                    <div id = "filebox" class = "col-md-6 scroll" >

                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </section>



        <script src = "js/canteen.js"></script>


        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
        <script type="text/javascript" src="js/templatemo-script.js"></script>
        <script>
            /* Google map
             ------------------------------------------------*/


            // DOM is ready
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

                // Flexslider
                $('.flexslider').flexslider({
                    controlNav: false,
                    directionNav: false
                });


            });
        </script>


        <script>getdtl();</script>


        <footer class = "tm-black-bg" >
            <div class = "container">
                <div class = "row">
                    <p class = "tm-copyright-text">

                        | Designed by <a rel = "nofollow" href = "http://infodatasl.com/" target = "_parent">INFODATA COMPUTER SYSTEMS</a></p>

                </div>
            </div>
        </footer>
    </body>
</html>