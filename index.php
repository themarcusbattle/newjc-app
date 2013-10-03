<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/giving.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<div class="main">
		<h1>New Jerusalem Cathedral eGive</h1>
		<section>
			<div class="button-group">
				<a class="btn red-btn show-login">Login</a>
				<a class="btn gold-btn show-signup">Signup</a>
			</div>
			<div id="intro">
				<p class="callout">Here is the great message that will encourage people to give. Concise and motivating.</p>
				<p>Here are more finite details of what this page and program are about. For more information visit newjc.org/give</p>
			</div>
		</section>
		<section id="login-view" class="dynamic">
			<p class="callout">Login to give</p>
			<p>Or view your previous contributions</p>
			<form action="give.php" method="POST">
				<ul>
					<li><input type="text" placeholder="username" /></li>
					<li><input type="password" placeholder="password" /></li>
					<li class="button-group"><button class="btn">Log In</button></li>
				</ul>
			</form>
		</section>
		<section id="signup-view" class="dynamic">
			<p class="callout">Create an account to give</p>
			<p>We promise not to sell/give your information to third parties.</p>
			<form action="give.php" method="POST">
				<ul>
					<li><input type="text" name="username" placeholder="username" /></li>
					<li><input type="text" name="first_name" placeholder="First Name" /></li>
					<li><input type="text" name="last_name" placeholder="Last Name" /></li>
					<li><input type="text" name="email" placeholder="Email" /></li>
					<li><input type="password" name="password" placeholder="Password" /></li>
					<li><input type="password" name="confirm_password" placeholder="Confirm Password" /></li>
					<li><input type="text" name="birthday" placeholder="Birthday" /></li>
					<li class="button-group"><button class="btn">Sign Up</button></li>
				</ul>
			</form>
			<p class="disclaimer">NOTE: You must be 13yrs or older to use this system</p>
		</section>
		<section class="footer">
			<h1 class="logo"><a href="#"><img src="img/newjc-seal.png"/></a></h1>
			<p>&copy 2013. New Jeruslaem Cahtedral. All Rights Reserved.</p>
		</section>
	</div>

	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="js/giving.js"></script>
</body>
</html>