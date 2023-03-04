<?php
include_once('config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	//header('location:user-login.php');
}
}
?>


<!DOCTYPE html>
<html lang="en">

	<!-- <head>
		<title>User Registration</title>
		
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
		
		
		

	</head> -->

    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in - PuneriClickKar</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
return false;
}
return true;
}
</script>
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

	<body class="login">

	<section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Sign up</p>
                    <h2 class="fw-bold">Welcome</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
			<!-- start: REGISTRATION -->
									<div class="row">
										<div class="main-login col-xs-10 col-xs-offset-1 col-sm-offset-2 col-md-offset-4">
											<div class="logo margin-top-30">
											<!-- <a href="../index.php"><h2>HMS | Patient Registration</h2></a> -->
											</div>
											<!-- start: REGISTER BOX -->
											<div class="box-register">
												<form name="registration" id="registration"  method="post" onSubmit="return valid();">
													<fieldset>
														<legend>
															Sign Up
														</legend>
														<p>
															Enter your personal details below:
														</p>
														<div class="form-group">
															<input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" name="address" placeholder="Address" required>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" name="city" placeholder="City" required>
														</div>
														<div class="form-group">
															<label class="block">
																Gender
															</label>
															<div class="clip-radio radio-primary">
																<input type="radio" id="rg-female" name="gender" value="female" >
																<label for="rg-female">
																	Female
																</label>
																<input type="radio" id="rg-male" name="gender" value="male">
																<label for="rg-male">
																	Male
																</label>
															</div>
														</div>
														<p>
															Enter your account details below:
														</p>
														<div class="form-group">
															<span class="input-icon">
																<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
																<i class="fa fa-envelope"></i> </span>
																<span id="user-availability-status1" style="font-size:12px;"></span>
														</div>
														<div class="form-group">
															<span class="input-icon">
																<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
																<i class="fa fa-lock"></i> </span>
														</div>
														<div class="form-group">
															<span class="input-icon">
																<input type="password" class="form-control"  id="password_again" name="password_again" placeholder="Password Again" required>
																<i class="fa fa-lock"></i> </span>
														</div>
														<div class="form-group">
															<div class="checkbox clip-check check-primary">
																<input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
																<label for="agree">
																	I agree
																</label>
															</div>
														</div>
														<div class="form-actions">
															<p>
																Already have an account?
																<a href="user-login.php">
																	Log-in
																</a>
															</p>
															<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
																Submit <i class="fa fa-arrow-circle-right"></i>
															</button>
														</div>
													</fieldset>
												</form>

												<div class="copyright">
													&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> HMS</span>. <span>All rights reserved</span>
												</div>

											</div>

										</div>

					</div>
                </div>
            </div>
        </div>
</section>
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
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
	<!-- end: BODY -->
</html>