<!DOCTYPE html>
<html>
<head>
	<title>Faculty | Register</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/materialize/css/animate.css">
    <link type="text/css" rel="stylesheet" href="/assets/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="/assets/materialize/css/custom.css" media="screen,projection">

</head>
<body>
	<center>
		<section class="cover-register">
			<div class="logo-register animated fadeInUp">
				<img class="responsive-img logo-login-img" src="/images/logocc.png">
			</div>

			<div class="container">
	          <div class="card card-for-register animated fadeInUp">
	                <form action="<?php echo base_url('Login/register'); ?>" method="post">
	                      <h6 class="h5-login">FILLOUT ALL THE FIELDS FOR FACULTY</h6>
	                      	<div class="row row-field">
	                      		<div class="col l6 s12">
			                         <div class="input-field">
			                           <input type="text"  name="firstname" placeholder="First Name" required="">
			                         </div>
			                     </div>
			                     <div class="col l6 s12">
			                         <div class="input-field">
			                           <input type="text"  name="lastname" placeholder="Last Name" required="">
			                         </div>
			                     </div>
			                 </div>
	                         <div class="input-field">
	                           <input type="email"  name="email" placeholder="Email Address" required="">
	                         </div>
	                         <div class="input-field">
	                           <input type="text"  name="username" placeholder="Username" required="">
	                         </div>
	                          <div class="input-field">
	                           <input type="password"  name="password" placeholder="Password" required="">
	                         </div>
	                         <div class="input-field">
	                           <input type="password"  name="confirm_password" placeholder="Confirm password" required="">
	                         </div>
	                    <button type="submit" class="center btn-large blue lighten-1 btn-custom-login">Register me</button> 
	                </form>
	          </div>
	        </div>

			
		</section>
	</center>


	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/assets/materialize/js/materialize.min.js"></script>
</body>
</html>