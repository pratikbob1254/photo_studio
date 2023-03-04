<?php
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['submit']))
{
$puname=$_POST['username'];	
$ppwd=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM users WHERE email='$puname' and password='$ppwd'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$pid=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
// For stroing log if user login successfull
$log=mysqli_query($con,"insert into userlog(uid,username,userip,status) values('$pid','$puname','$uip','$status')");
header("location:dashboard.php");
}
else
{
// For stroing log if user login unsuccessfull
$_SESSION['login']=$_POST['username'];	
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($con,"insert into userlog(username,userip,status) values('$puname','$uip','$status')");
$_SESSION['errmsg']="Invalid username or password";

header("location:user-login.php");
}
}
?>


<!-- <!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30"> -->
				<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in - PuneriClickKar</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
   <!-- Start: Navbar Centered Links -->
   <nav class="navbar navbar-dark navbar-expand-md sticky-top py-3" id="mainNav">
    <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a
            class="navbar-brand d-flex align-items-center" href="/"><span
                class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><svg
                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                    viewBox="0 0 16 16" class="bi bi-bezier">
                    <path fill-rule="evenodd"
                        d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                    </path>
                    <path
                        d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                    </path>
                </svg></span><span>PuneriClickKar</span></a>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="index.html">
                        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/hjbsbdhw.json" trigger="loop-on-hover" delay="2000"
                            style="width:50px;height:50px">
                        </lord-icon>
                    </a></li>
                <li class="nav-item"><a class="nav-link" href="services.html">
                        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                        <lord-icon 
                            src="https://cdn.lordicon.com/mxddzdmt.json" 
                            trigger="loop-on-hover" delay="2000"
                            style="width:50px;height:50px">
                        </lord-icon>
                    </a></li>
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="pricing.html">
                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/qmcsqnle.json"
                        trigger="boomerang"
                        style="width:50px;height:50px">
                    </lord-icon></a></li>
                <li class="nav-item"><a class="nav-link" href="product.html">
                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/qfbuijil.json"
                            trigger="boomerang"
                            style="width:50px;height:50px">
                        </lord-icon></a></li>
                <li class="nav-item"><a class="nav-link" href="shopping-cart.html">
                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                           <lord-icon
                                src="https://cdn.lordicon.com/cllunfud.json"
                                trigger="boomerang"
                                style="width:50px;height:50px">
                            </lord-icon></a></li>
                <li class="nav-item"><a class="nav-link" href="team.html">
                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/dqxvvqzi.json"
                            trigger="boomerang"
                            colors="outline:#121331,primary:#ffc738,secondary:#4bb3fd"
                            state="morph-group"
                            style="width:50px;height:50px">
                        </lord-icon>
                </a></li>
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="contacts.html">
                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/flvisirw.json"
                            trigger="boomerang"
                            style="width:50px;height:50px">
                        </lord-icon></a>
                <li class="nav-item"></li><a class="nav-link" href="testimonials.html">
                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json" trigger="loop-on-hover" delay="2000"
                        colors="primary:#3a3347,secondary:#ffc738,tertiary:#f9c9c0,quaternary:#ebe6ef"
                        state="hover-2" style="width:50px;height:50px">
                    </lord-icon>
            </ul><a class="btn btn-primary shadow" role="button" href="signup.html">
                <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                <lord-icon src="https://cdn.lordicon.com/ajkxzzfb.json" trigger="loop-on-hover" delay="2000"
                    colors="primary:#ffc738,secondary:#e4e4e4" state="hover-nodding" style="width:50px;height:50px">
                </lord-icon>
            </a>
        </div>
    </div>
</nav><!-- End: Navbar Centered Links -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Login</p>
                    <h2 class="fw-bold">Welcome back</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form method="post">
				<a href="../index.php"><h2> Faculty Login</h2></a>
				</div>

				<div class="box-login">
					<form class="form-login" method="post">
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
							<!-- <p>
								Please enter your name and password to log in.<br />
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p> -->
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									 </span><a href="forgot-password.php">
									Forgot Password ?
								</a>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account">
								Don't have an account yet?
								<a href="registration.php">
									Create an account
								</a>
							</div>
						</fieldset>
					</form>

					<!-- <div class="copyright">
						</span><span class="text-bold text-uppercase"> Anandi Hospital Management</span>.
					</div> -->
			
				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	<!-- end: BODY -->
</html>