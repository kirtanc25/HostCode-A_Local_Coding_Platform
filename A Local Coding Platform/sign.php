<?php

session_start();

if(isset($_SESSION["email"]))
{
  header("Location:dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="css/app.min.css">
    <style>
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        #already{
            display: none;
        }
    </style>
</head>

<body data-sa-theme="1">
    <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
    </div>

    
    <div id="particles-js"></div>
    <nav class="navbar navbar-expand-lg fixed-top center-brand static-nav">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logofinal.png" alt="logo" class="logo-default">
            </a>
            </div>
        <!--/.CONTAINER-->

    </nav>
    <div class="login">
        <!-- Login -->
        <div class="login__block" id="l-login">
            <div class="login__block__header">
                <i class="zmdi zmdi-account-circle"></i> Hi there! Please Sign in

                <div class="actions actions--inverse login__block__actions">
                    <div class="dropdown">
                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register" href="#">Create an account</a>
                            <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password" href="#">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
        <form action="lgn.php" method="post">
            <div class="login__block__body">
                <div class="form-group">
                    <input type="text" class="form-control text-center" placeholder="Email Address" name="email">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control text-center" placeholder="Password" name="pwd">
                </div>

<!--                <input type="submit"  class="btn btn--icon login__block__btn" value="Login">-->
<!--                    <a href="dashboard.php" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-long-arrow-right"></i></a>-->
                <input type="submit"  class="btn btn--icon login__block__btn " value="go">
            </div>
            
            </form>
        </div>
        

        <!-- Register -->
        <div class="login__block active" id="l-register">
            <div class="login__block__header">
                <i class="zmdi zmdi-account-circle"></i> Create an account

                <div class="actions actions--inverse login__block__actions">
                    <div class="dropdown">
                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login" href="#">Already have an account?</a>
                            <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password" href="#">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
<form action="signup.php" method="post">
    <div class="login__block__body">
                <p class="mb-5">NOTE: All fields are mandatory</p>
                <div class="form-group">
                    <input type="text" class="form-control text-center" placeholder="Username" name="uname" required>
                </div>

                <div class="form-group form-group--centered">
                    <input type="text" class="form-control text-center" placeholder="Email Address" name="email" required>
                </div>

                <div class="form-group form-group--centered">
                    <input type="password" class="form-control text-center" placeholder="Password" name="pwd" required>
                </div>

                
                <input type="submit"  class="btn btn--icon login__block__btn" value="add">
<!--        <a href="login.php" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-plus"></i></a>-->
    <div id="already">Email is already exist!Please try another one...</div>        
    </div>
            </form>
        </div>

        <!-- Forgot Password -->
        <div class="login__block" id="l-forget-password">
            <div class="login__block__header">
                <i class="zmdi zmdi-account-circle"></i> Forgot Password?

                <div class="actions actions--inverse login__block__actions">
                    <div class="dropdown">
                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login" href="#">Already have an account?</a>
                            <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register" href="#">Create an account</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="login__block__body">
                <p class="mb-5">Please enter the email address
                    <hr>We'll send you a link to a page where you will be able to reset your password. Be sure to check your junk or spam folder if you don't receive our email soon.
                    <hr>
                </p>
        

                <div class="form-group">
                    <input type="text" class="form-control text-center" placeholder="Email Address">
                </div>

                <a href="#" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-check"></i></a>
            </div>
        </div>


    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/plugin.js"></script>
    <script src="js/main.js"></script>

    <!-- Javascript -->
    <!-- Vendors -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- App functions and actions -->
    <script src="js/app.min.js"></script>
  <?php  
  if(isset($_GET['q']))
{
?>

<script>
//alert("email already used..");
    var r=document.getElementById("already");
r.style.display='block';
</script>
<?php  }

?>

    </body>
</html>