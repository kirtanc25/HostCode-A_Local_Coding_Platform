<?php

session_start();
if(!isset($_SESSION["email"]))
{
  header("Location:login.php");
}
if(isset($_GET["l"]) && $_GET["l"]=="1")
{
    unset($_SESSION["email"]);
    header("location:edit.php");
}
$email=$_SESSION["email"];
$con = mysqli_connect("localhost","root","","reg");
$r=mysqli_query($con,"select name from user where email='$email' ");
    if (mysqli_num_rows($r)==1){
    $uname=mysqli_fetch_array($r)[0];
    //$pass=mysqli_fetch_array($r)[1];
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Profile | HostCode</title>
    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="css/app.min.css">
    <!--    style-->
    <style>
        .btn {
            background-color: transparent;
            border-color: rgba(48, 115, 222, 0.81);
            border-radius: 290px;
            border-width: 1.5px;
            color: white;
            margin: 25px;
            display: inline-block;
            padding: 10px 30px;
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
        
        .bt{
            background-color: transparent;
            border-color: rgba(48, 115, 222, 0.81);
            border-radius: 290px;
            border-width: 1.5px;
            color: white;
            display: inline-block;
            padding: 05px 25px;
            font-weight: 300;
            text-decoration: none;
            transition: background-color 0.2s, border 0.2s, color 0.2s;
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
                <a class="navbar-brand" href="index.php">
         <img src="img/logofinal.png" alt="logo" class="logo-default">
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
                        <div class="user__name"><?php echo $uname ?></div>
                        <div class="user__email"><?php echo $email ?></div>
                    </div>
                </div>

                <div class="dropdown-menu" style="top: 60px; left: 2px;">
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
            <div class="content__inner">
                <header class="content__title">
                    <h1 style="font-size: 150%">Profile</h1>
                </header>

                <div class="card">
                    <div class="card-body">
                        <form action="#" method="post">
                            <center>
                                <div class="profile__img  col-sm-2">
                                    <img src="img/profile-pics/2.jpg" alt="">
                                    <a href="#" class="zmdi zmdi-camera profile__img__edit"></a>
                                </div>
                            </center>
                            <br>
                            <hr style="width: 50%;">
                            <div class="row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label><b>Email Address </b></label>
                                        <input type="text" class="form-control" placeholder="<?php echo $email ?>" readonly>
<!--                                        <input type="text" name="email" value="<?php echo("$r[email]") ?>" class="form-control">-->
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Password</b></label>
                                        <input type="password" class="form-control" placeholder="********"  title="Password" maxlength="10" readonly>
<!--                                        <input type="text" name="password" value="<?php echo("$r[pass]") ?>" class="form-control">-->
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label><b>Username </b></label>
                                        <input type="text" class="form-control" placeholder="<?php echo $uname ?>" readonly>
<!--                                        <input type="text" name="username" value="<?php echo("$r[uname]") ?>" class="form-control">-->
                                        
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Change Password </b></label> <br>
                                         <button class="bt btn-full" data-toggle="popover" data-trigger="hover" data-content="Click to change password!">Edit Password</button>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                </div>

                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label><b>Number of Submissions</b></label>
                                         <input type="text" class="form-control" placeholder="36" readonly>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                </div>
                                <br>
                                <div class="col-sm-5">
                                </div>
                               
                                <div class="col-sm-7">

                                    <button class="btn btn-full" data-toggle="popover" data-trigger="hover" data-content="Click to update content!">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <footer class="footer hidden-xs-down">
                    <p>© HostCode. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="index.php">Home</a>
                        <a class="nav-link" href="#">Support</a>

                    </ul>
                </footer>
            </div>
        </section>
    </main>

    <!--
    <div class="col-sm-3">
    </div>

    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label><b>Address <span style="color: red">*</span>  </b></label>
            <textarea class="form-control textarea-autosize" placeholder="i.e. 2343, Society, Road, City - Pin Code" required></textarea>
            <i class="form-group__bar"></i>
        </div>
    </div>
-->

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
