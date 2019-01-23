<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["email"]))
{
  header("Location:login.php");
}
if(isset($_GET["l"]) && $_GET["l"]=="1")
{
    unset($_SESSION["email"]);
    
    header("location:index.php");
}
$email=$_SESSION["email"];
$con = mysqli_connect("localhost","root","","reg");
$r=mysqli_query($con,"select name from user where email='$email' ");

    if (mysqli_num_rows($r)==1){
   
   $uname=mysqli_fetch_array($r)[0];
    }
    else{
    	$uname='';
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Dashboard </title>
    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="css/app.min.css">
</head>

<body data-sa-theme="1">
    <main class="main">
        <div class="page-loader">
            <div class="page-loader__spinner">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>

        <header class="header">
            <div class="logo hidden-sm-down">
                <a class="navbar-brand"
                   href="index.php">
                <img src="img/logofinal.png" class="logo-default">
                </a>
            </div>

           
            <ul class="top-nav">  
                <li class="dropdown">
                        <a href="user/newide1.php">Code, Compile & Run </a>
                </li>
                <li class="dropdown">
                        <a href="Levels/Beginner/begin.php">Problems</a>
                </li>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">Compete</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="listview listview--hover">
                            <a href="#" class="dropdown-item">Contest        </a>
                            <a href="#" class="dropdown-item">Contest       </a>
                            <a href="#" class="dropdown-item">Contest    </a>
                            <a href="#" class="dropdown-item">Contest     </a>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">Discuss</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">


                        <div class="listview listview--hover">
                            <a href="#" class="dropdown-item">Forum   </a>
                            <a href="#" class="dropdown-item">Blog       </a>
                        </div>
                    </div>
                </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown">Languages</a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="dropdown-header">% Completed</div>

                            <div class="listview listview--hover">
                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">C</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">C++</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Java</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>                    
                    
                
                
                <li class="dropdown hidden-xs-down">
                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                        <a href="#" class="dropdown-item">Settings</a>
                    </div>
                </li>

                <li class="hidden-xs-down">
                    <a href="#" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i class="zmdi zmdi-palette"></i></a>
                </li>
            </ul>

            <div class="user">
                <div class="user__info" data-toggle="dropdown">
                    <img class="user__img" src="img/profile-pics/2.jpg" alt="">
                    <div>
                        <div class="user__name">
                            <?php echo $uname; ?>
                        </div>
                        <div class="user__email">
                            <?php echo $email; ?>
                        </div>
                    </div>
                </div>

                <div class="dropdown-menu" style="margin-top:67px;position:relative !important;top: 60px !important; left: 8px !important; ">
                    <a class="dropdown-item" href="profile.php">View Profile</a>
                    <a class="dropdown-item" href="dashboard.php?l=1">Logout</a>
                </div>
            </div>
        </header>


        <div class="themes">
            <div class="scrollbar-inner">
                <a href="#" class="themes__item" data-sa-value="2"><img src="img/bg/1.jpg" alt=""></a>
                <a href="#" class="themes__item active" data-sa-value="1"><img src="img/bg/2.jpg" alt=""></a>
                <a href="#" class="themes__item" data-sa-value="3"><img src="img/bg/3.jpg" alt=""></a>

            </div>
        </div>

        <section class="content content--full">

<!--
            <header class="content__title">
                <h1>Dashboard</h1>
                
            </header>
-->
<!--            start    -->
            <div class="card">
                <div class="card-body">
                    <!--
                            <h4 class="card-title">With controls</h4>
                            <h6 class="card-subtitle">Adding in the previous and next controls:</h6>
-->

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="img/carousel/c-1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img src="img/carousel/c-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="img/carousel/c-3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="tab-container">
                        <ul class="nav nav-tabs nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#offers" role="tab">Offers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Challenge</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#challenge" role="tab">Coding</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active fade show" id="home" role="tabpanel">
                                <p>Nothing to say....
                                LOL!!!</p>
                            </div>
                            <div class="tab-pane fade" id="offers" role="tabpanel">
                                <p>No Offers available yet...
                                
                                Thank You!</p>
                            </div>
                            <div class="tab-pane fade" id="messages" role="tabpanel">
                                <p>Available Soon...</p>
                            </div>
                            <div class="tab-pane fade" id="challenge" role="tabpanel">
                                <p>Coming Soon...
                                
                                
                                
                                
                                Stay Tuned...
                                Thank you for your passions!</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="footer hidden-xs-down">
                <p>© HostCode. All rights reserved.</p>

                <ul class="nav footer__nav">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="#">Support</a>

                </ul>
            </footer>

        </section>
    </main>

    <!-- Javascript -->
    <!-- Vendors -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

    <!-- App functions and actions -->
    <script src="js/app.min.js"></script>
    </body>

</html>
