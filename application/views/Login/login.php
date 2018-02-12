<!DOCTYPE html>
<html>
<head>
	<title>Faculty | Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/materialize/css/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="assets/materialize/css/custom.css" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="assets/materialize/css/particles.css">

</head>
<body>
	
			<center>
				<section class="cover-register">
					<div class="logo-login animated fadeInUp">
						<img class="responsive-img logo-login-img" src="/images/logocc.png">
					</div>

					<div class="container">
			          <div class="card card-for-login animated fadeInUp">
			                <form action="<?php echo base_url('Login/login_acct'); ?>" method="post">
			                      <h6 class="h5-login">LOGIN ACCOUNT FOR FACULTY</h6>
			                         <div class="input-field">
			                           <input id="username" type="text"  name="username" placeholder="Enter your username" required="">
			                         </div>
			                          <div class="input-field">
			                           <input id="password" type="password"  name="password" placeholder="Enter your password" required="">
			                         </div>
			                    <button type="submit" class="center btn-large blue lighten-1 btn-custom-login">Let me in</button> 
			                </form>
			                 <h6 class="h5-login-account">Need an account? <a href="<?php echo base_url('Register'); ?>" style="font-weight: 600; color: #00acc1;">REGISTER HERE</a></h6>
			          </div>
			        </div>
				</section>

			</center>
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/materialize/js/particles.js"></script>
    <script type="text/javascript" src="assets/materialize/js/app.js"></script>
    <script type="text/javascript">
    	particlesJS.load('particles-js', 'assets/materialize/js/particles.json', function() {

		console.log('callback - particles.js config loaded');
		});
    </script>

</body>
</html>