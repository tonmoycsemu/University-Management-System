<?php
include('admin/dbconnect.php');
session_start();

if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != 1) {
    header('Location: index.php');
    exit();
}

// logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Unipix University</title>

        <!-- Styles -->
        <link rel="icon" href="assets/img/fav.svg"/> 
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/style.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

   </head>
    <body>
        <div class="row nav-row trans-menu scroll-nav">
            <div class="container nav-container">
				<div class="top-navbar">
					<div class = "pull-right">
						<div class="top-nav-social pull-left">
							<a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
						</div>

						<!--<div class="top-navbar-search pull-right">
							<i class="fa fa-search"></i>
							<input type = "text" placeholder = "Search"/>
						</div>-->
					</div>
					<div class = "clearfix"></div>
				</div> 
				<div class = "clearfix"></div>
                <nav id="pNavbar" class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pNavbarCollapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="login_index.php"><img src="assets/img/logo__white.svg" alt="logo" class="img-fluid"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="pNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li><a href="login_index.php"><i class="fa fa-home"></i>HOME</a></li>
							<li><a href="about_me.php"><i class="fa fa-info-circle"></i>ABOUT ME</a></li>
							
							<li><a href="login_result.php"><i class="fa fa-bar-chart"></i>MY RESULTS</a></li>
							<li>
                                <a href="login_notice.php"><i class="fa fa-exclamation"></i>Notice</a>
                            </li>
							<li>
                                <a href="login_header.php?logout=1"><i class="fa fa-sign-in"></i>LOGOUT</a>
                            </li>
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>