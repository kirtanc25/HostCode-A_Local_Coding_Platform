<?php

session_start();
if(!isset($_SESSION['email']))
{header('Location:../../../login.php');}

if(isset($_GET["l"]) && $_GET["l"]=="1")
{
    unset($_SESSION["email"]);
    header("location:../../index.php");
}

$email=$_SESSION["email"];
$con = mysqli_connect("localhost","root","","reg");
$r=mysqli_query($con,"select name from user where email='$email' ");
    if (mysqli_num_rows($r)==1){
    $uname=mysqli_fetch_array($r)[0];
    }

$_SESSION['pid']=$_GET['id']; 

$t = $_SESSION['pid'];

        mysqli_select_db($con,"reg");
		$q=mysqli_query($con,"select * from archieve where id=$t");
        $qq=mysqli_fetch_row($q);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?php echo $qq[1] ?></title>
    <!-- Vendor styles -->
    <link rel="stylesheet" href="../../../vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../../vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="../../../vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="../../../vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="../../../css/app.min.css">
    <!--    style-->
    <style>
        .btn{
            background-color:transparent;
            border-color: rgba(48, 115, 222, 0.81);
            border-radius: 250px;
            color: white;
            display: inline-block;
            padding: 06px 30px;
            font-weight: 300;
            text-decoration: none;
            transition: background-color 0.2s, border 0.2s, color 0.2s;
        }
        

        .btn-full:link,
        .btn-full:visited {
            color: rgba(250, 250, 250, 0.59);
            border: 2px solid rgba(48, 115, 222, 0.81);
        }

        .btn-full:hover,
        .btn-full:active {
            background-color: rgba(48, 115, 222, 0.67);
        }

    </style>
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
                <a class="navbar-brand" href="../../../index.php">
         <img src="../../../img/logofinal.png" alt="logo" class="logo-default">
         </a>
            </div>
            <ul class="top-nav">

                <!--                    -->
                <li class="dropdown">
                        <a href="../../../user/newide1.php">Code, Compile & Run </a>
                </li>
                <li class="dropdown">
                        <a href="../begin.php">Problems</a>
                </li>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">Compete</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">


                        <div class="listview listview--hover">
                            <a href="#" class="listview__item">
                                    All Contests
                                </a>
                            <a href="#" class="listview__item">
                                    Contest 1
                                </a>
                            <a href="#" class="listview__item">
                                    Contest 2
                                </a>
                            <a href="#" class="listview__item">
                                    Contest 3
                                </a>

                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">Discuss</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">


                        <div class="listview listview--hover">
                            <a href="#" class="listview__item">
                                    Forums
                                </a>
                            <a href="#" class="listview__item">
                                    Blog
                                </a>
                            <a href="#" class="listview__item">
                                    Facebook
                                </a>
                            <a href="#" class="listview__item">
                                    Github
                                </a>

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



                <!--                    -->

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
                    <img class="user__img" src="../../../img/profile-pics/2.jpg" alt="">
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
                    <a class="dropdown-item" href="../../../profile.php">View Profile</a>
                    <a class="dropdown-item" href="b1.php?l=1">Logout</a>
                </div>
            </div>
        </header>


        <div class="themes">
            <div class="scrollbar-inner">
                <a href="#" class="themes__item" data-sa-value="2"><img src="../../../img/bg/1.jpg" alt=""></a>
                <a href="#" class="themes__item active" data-sa-value="1"><img src="../../../img/bg/2.jpg" alt=""></a>
                <a href="#" class="themes__item" data-sa-value="3"><img src="../../../img/bg/3.jpg" alt=""></a>

            </div>
        </div>

        <section class="content content--full">

            <header class="content__title">
                <center>
                    <h1><?php echo $qq[1]?></h1>
                </center>
            </header>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Definition</h4>

                    <p>
                        <?php 
                            echo $qq[2];
                        ?>
                    </p>
                    


                    <div align="center">
<!--                        <button type="submit" name="Submit" class="btn btn-full"><b>Submit </b></button>-->
                        
                        <form action="../../../user/newide.php"><input type="hidden" name="id" value="<?php  echo $qq[0]; ?>">
                        <input type="submit" value="Submit" id="submit" title="Click to Submit!" class="btn btn-full">
                        </form>

                        
                        
                    </div>
                </div>
            </div>







            <footer class="footer hidden-xs-down">
                <p>© HostCode. All rights reserved.</p>

                <ul class="nav footer__nav">
                    <a class="nav-link" href="../../../index.php">Home</a>
                    <a class="nav-link" href="#">Support</a>

                </ul>
            </footer>
        </section>
    </main>



    <!-- Javascript -->
    <!-- Vendors -->
    <script src="../../../vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../../../vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../../vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../../../vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

    <!-- App functions and actions -->
    <script src="../../../js/app.min.js"></script>
</body>

</html>
