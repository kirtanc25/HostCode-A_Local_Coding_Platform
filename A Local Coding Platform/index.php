<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <!-- Standard Favicon -->
<!--
    <link rel="icon" href="img/fav/favicon-96x96.png">

     Touch Icons - iOS and Android 2.1+ 
    <link rel="apple-touch-icon" href="img/fav/android-icon-48x48.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fav/android-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png" />
-->
    <link rel="stylesheet" type="text/css" href="css/app.min.css">
    <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link href="../../../use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
    <script src="js/vendor/modernizr.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="se-pre-con"></div>

    <!-- main nav start -->

    <nav class="navbar navbar-expand-lg fixed-top center-brand static-nav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logofinal.png" alt="logo" class="logo-default">
            </a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xenav">
                <i class="fas fa-bars fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse" id="xenav">
                <ul class="navbar-nav" id="container">
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>

                    <li class="nav-item">
                        <?php if(!isset($_SESSION["email"])){
                echo ' <a class="nav-link" href="login.php">Login</a>';} else               echo   '<a class="nav-link" href="dashboard.php?l=1">Logout</a>'; 
                   ?>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#help">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.CONTAINER-->

    </nav>
    <!-- /.navbar -->

    <!--BANNER-->
    <header class="top_banner" id="home">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row h-100">
                <div class="col-md-10 align-self-center offset-md-1">
                    <div class="banner_text align-self-center">
                        <h2>Begin To <b>Code</b></h2>
                        <p></p>
                        <div class="btn-group" id="extra_nav">
                            <a href="sign.php" class="btn">Get Started</a>
                        </div>
                    </div>
                    <!--/.banner_text-->
                </div>
            </div>
        </div>
        <!--/.container-->
    </header>
    <!--/BANNER-->

    <!--ABOUT US-->
    <section class="about_us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_left_txt">
                        <div class="title">
                            <h3>about <b>us</b></h3>
                            <div class="underline"></div>
                            <div class="btn-group">
                                <a href="#" class="btn">our mission</a>
                                <a href="#" class="btn">our vision</a>
                            </div>
                        </div>
                        <!--/.title-->
                        <div class="about_txt">
                            <p>HostCode is a not-for-profit educational initiative by kB, an Indian software company. It is a global programming community that fosters learning and friendly competition, built on top of the world’s largest competitive programming platform. We have also built a large community of problem curators.</p>

                            <p>HostCode was created as a platform to help programmers make it big in the world of algorithms, computer programming and programming contests. We host three featured contests every month and give away prizes and goodies to the winners as encouragement. Apart from this, the platform is open to the entire programming community to host their own contests. Major institutions and organizations across the globe use our platform to host their contests. On an average, 30+ external contests are hosted on our platform every month.</p>
                        </div>
                    </div>
                    <!--/.about_left_txt-->
                </div>
                <div class="col-md-6">
                    <div class="about_right_img">
                        <img src="img/students-working.jpg" width="600" height="475" alt="" />
                    </div>
                    <!--/.about_right_img-->
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/ABOUT US-->

    <!--SERVICES-->
    <section class="services " id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="title">
                        <h5>Our Exclusive Services</h5>
                        <h3>we do offer <b>practices & challenges</b></h3>
                        <div class="underline"></div>
                    </div>
                    <!--/.title-->
                </div>
                <div class="w-100"></div>
                <div class="col-md-4 wow animate fadeInUp">
                    <div class="service_single">
                        <img src="img/icon/do1.png" alt="" />
                        <h4>Practice</h4>
                        <p>Description</p>
                    </div>
                    <!--/.service_single-->
                </div>
                <div class="col-md-4  wow animate fadeInUp" data-wow-delay="0.1s">
                    <div class="service_single">
                        <img src="img/icon/do2.png" alt="" />
                        <h4>Challenge</h4>
                        <p>Description</p>
                    </div>
                    <!--/.service_single-->
                </div>
                <div class="col-md-4  wow animate fadeInUp" data-wow-delay="0.2s">
                    <div class="service_single">
                        <img src="img/icon/do3.png" alt="" />
                        <h4>Debug</h4>
                        <p>Description</p>
                    </div>
                    <!--/.service_single-->
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/SERVICES-->

    <!--BEST FEATUERES-->
    <section class="b_features" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title">
                        <h3>Best Features</h3>
                        <div class="underline"></div>
                        <p>Piusto odio dignissimos ducimus qui blanditiis praesentium voluptatum cati cupiditate non provident, similique sunt in culpa qui.</p>
                    </div>
                    <!--/.title-->
                </div>
                <div class="w-100"></div>
                <div class="col-md-4  wow animate fadeInUp">
                    <div class="single_feature">
                        <div class="feature_icon">
                            <img src="img/icon/feature1.png" class="show_icon" alt="" />
                            <img src="img/icon/feature1hv.png" class="hide_icon" alt="" />
                        </div>
                        <!--/.single_feature-->
                        <div class="feature_txt">
                            <h4>awesome layout</h4>
                            <p>Pain and trouble that are bounto ensue; and equal blame belongs to those who fail in their duty through weakness of.</p>
                        </div>
                        <div class="line1"></div>
                        <div class="line2"></div>
                    </div>
                    <!--/.single_feature-->
                </div>
                <div class="col-md-4  wow animate fadeInUp" data-wow-delay="0.2s">
                    <div class="single_feature">
                        <div class="feature_icon">
                            <img src="img/icon/feature2.png" class="show_icon" alt="" />
                            <img src="img/icon/feature2hv.png" class="hide_icon" alt="" />
                        </div>
                        <!--/.single_feature-->
                        <div class="feature_txt">
                            <h4>creative team</h4>
                            <p>Pain and trouble that are bounto ensue; and equal blame belongs to those who fail in their duty through weakness of.</p>
                        </div>
                        <div class="line1"></div>
                        <div class="line2"></div>
                    </div>
                    <!--/.single_feature-->
                </div>
                <div class="col-md-4  wow animate fadeInUp" data-wow-delay="0.4s">
                    <div class="single_feature">
                        <div class="feature_icon">
                            <img src="img/icon/feature3.png" class="show_icon" alt="" />
                            <img src="img/icon/feature3hv.png" class="hide_icon" alt="" />
                        </div>
                        <!--/.single_feature-->
                        <div class="feature_txt">
                            <h4>quick support</h4>
                            <p>Pain and trouble that are bounto ensue; and equal blame belongs to those who fail in their duty through weakness of.</p>
                        </div>
                        <div class="line1"></div>
                        <div class="line2"></div>
                    </div>
                    <!--/.single_feature-->
                </div>

                <div class="col-md-4  wow animate fadeInUp">
                    <div class="single_feature">
                        <div class="feature_icon">
                            <img src="img/icon/feature4.png" class="show_icon" alt="" />
                            <img src="img/icon/feature4hv.png" class="hide_icon" alt="" />
                        </div>
                        <!--/.single_feature-->
                        <div class="feature_txt">
                            <h4>Regular updates</h4>
                            <p>Pain and trouble that are bounto ensue; and equal blame belongs to those who fail in their duty through weakness of.</p>
                        </div>
                        <div class="line1"></div>
                        <div class="line2"></div>
                    </div>
                    <!--/.single_feature-->
                </div>
                <div class="col-md-4  wow animate fadeInUp" data-wow-delay="0.2s">
                    <div class="single_feature">
                        <div class="feature_icon">
                            <img src="img/icon/feature5.png" class="show_icon" alt="" />
                            <img src="img/icon/feature5hv.png" class="hide_icon" alt="" />
                        </div>
                        <!--/.single_feature-->
                        <div class="feature_txt">
                            <h4>More Challenges</h4>
                            <p>Pain and trouble that are bounto ensue; and equal blame belongs to those who fail in their duty through weakness of.</p>
                        </div>
                        <div class="line1"></div>
                        <div class="line2"></div>
                    </div>
                    <!--/.single_feature-->
                </div>
                <div class="col-md-4  wow animate fadeInUp" data-wow-delay="0.4s">
                    <div class="single_feature">
                        <div class="feature_icon">
                            <img src="img/icon/feature6.png" class="show_icon" alt="" />
                            <img src="img/icon/feature6hv.png" class="hide_icon" alt="" />
                        </div>
                        <!--/.single_feature-->
                        <div class="feature_txt">
                            <h4>organiged team</h4>
                            <p>Pain and trouble that are bounto ensue; and equal blame belongs to those who fail in their duty through weakness of.</p>
                        </div>
                        <div class="line1"></div>
                        <div class="line2"></div>
                    </div>
                    <!--/.single_feature-->
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/BEST FEATUERES-->


    <!--FUN FACT-->
    <section class="fun_fact">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="fun_single wow animate fadeInUp">
                        <img src="img/icon/fun1.png" alt="" />
                        <h3>1k+ Satisfied</h3>
                        <h3>Clients</h3>
                    </div>
                    <!--/.fun_single-->
                </div>
                <div class="col-md-3">
                    <div class="fun_single wow animate fadeInUp" data-wow-delay="0.1s">
                        <img src="img/icon/fun2.png" alt="" />
                        <h3>3k+ Users</h3>
                        <h3>Loved</h3>
                    </div>
                    <!--/.fun_single-->
                </div>
                <div class="col-md-3">
                    <div class="fun_single wow animate fadeInUp" data-wow-delay="0.2s">
                        <img src="img/icon/fun3.png" alt="" />
                        <h3>4k+ Codes</h3>
                        <h3>Completed</h3>
                    </div>
                    <!--/.fun_single-->
                </div>
                <div class="col-md-3">
                    <div class="fun_single wow animate fadeInUp" data-wow-delay="0.3s">
                        <img src="img/icon/like.png" alt="" />
                        <h3>2.5k+</h3>
                        <h3>Likes</h3>
                    </div>
                    <!--/.fun_single-->
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/FUN FACT -->

    <!-- OUR TEAM-->
    <section class="our_team" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title">
                        <h3>our expert team</h3>
                        <div class="underline"></div>
                        <p>Piusto odio dignissimos ducimus qui blanditiis praesentium voluptatum cati cupiditate non provident, similique sunt in culpa qui.</p>
                    </div>
                    <!--/.title-->
                </div>
                <div class="w-100"></div>
                
                <div class="col-md-2 wow animate fadeInUp" data-wow-delay="0.1s">

                </div>
                
                
                <div class="col-md-4 wow animate fadeInUp" data-wow-delay="0.1s">
                    <div class="team_single">
                        <div class="team_image">
                            <img src="img/team1.jpg" width="292" height="360" alt="" />
                        </div>
                        <!--/.team_image-->
                        <div class="team_author">
                            <h2>Kirtan Chavda</h2>
                            <p>UI & UX Designer</p>
                        </div>
                    </div>
                    <!--/.team_single-->
                </div>
                <div class="col-md-4 wow animate fadeInUp" data-wow-delay="0.2s">
                    <div class="team_single">
                        <div class="team_image">
                            <img src="img/team2.jpg" width="292" height="360" alt="" />
                        </div>
                        <!--/.team_image-->
                        <div class="team_author">
                            <h2>Bhishm Daslaniya</h2>
                            <p>Backend Developer</p>
                        </div>
                    </div>
                    <!--/.team_single-->
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!-- /OUR TEAM-->

 <!--CONTACT-->
    <section class="contacts" id="contactus">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title">
                        <h3>contact us</h3>
                        <div class="underline"></div>
                        <p>For any query feel free to contact us!</p>
                    </div>
                    <!--/.title-->
                </div>
                <div class="w-100"></div>
                <div class="col-md-12 shadow">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact_form">
                                <form>
                                    <div class="form-group">
                                        <label for="name1">Name</label>
                                        <input type="text" id="name1" placeholder="Your name here" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="email1">Email</label>
                                        <input type="email" id="email1" placeholder="Your email here" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="message1">Message</label>
                                        <textarea id="message1" placeholder="Your message here" cols="10" rows="3" required></textarea>
                                    </div>
                                    <button type="submit">send</button>
                                </form>
                            </div>
                            <!--/.contact_form-->
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <div class="contact_right_single">
                                <img src="img/icon/contact1.png" alt="" />
                                <p>+91 9601809608</p>
                            </div>
                            <!--/.contact_right_single-->
                            <div class="contact_right_single">
                                <img src="img/icon/contact2.png" alt="" />
                                <p>wproject0001@gmail.com</p>
                            </div>
                            <!--/.contact_right_single-->
                            <div class="contact_right_single">
                                <img src="img/icon/contact3.png" alt="" />
                                <p>CHARUSAT, Changa</p>
                            </div>
                            <!--/.contact_right_single-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/CONTACT-->


    
    <!--FOOTER-->
    <footer class="footers">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copy_right">
                        <p>© 2018 All rights reserved by HostCode</p>
                    </div>
                </div>
                <div class="col-md-6">
<!--
                    <div class="footer_social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
-->
                  <div class="blog__arthur-social">
                        <label style="color: white;"> Follow us on:</label>
                        <a href="#" class="mdc-bg-indigo-500"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="#" class="mdc-bg-cyan-500"><i class="zmdi zmdi-twitter"></i></a>
                        <a href="#" class="mdc-bg-red-400"><i class="zmdi zmdi-google"></i></a>
                        <a href="#" class="mdc-bg-blue-600"><i class="zmdi zmdi-linkedin"></i></a>
                    </div>
  
                </div>
            </div>
        </div>
        <!--/.container-->
    </footer>
    <!--/FOOTER-->

    <a href="#" class="scrollup">up</a>





    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/plugin.js"></script>
    <script src="js/main.js"></script>



</body>

</html>
