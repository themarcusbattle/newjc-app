<style>
	* { 
		box-sizing: border-box; 
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		margin: 0;
		padding: 0;
		font-size: 16px;
		font-weight: 200;
		font-family: Helvetica Nue, Arial;
	}

	.main {
		max-width: 900px;
		margin: 0 auto;
		padding: 15px;
	}

	section {
		display: block; }

	h1 {
		font-size: 24px;
		margin: 10px 0 20px 0;
		text-align: center; }

	h1.logo {
		text-align: center; }

	h1.logo img {
		max-height: 100px; }

	.button-group {
		display: -webkit-flex;
  		display: flex;
  		margin-bottom: 10px; }

	.button-group a.btn {
		border-radius: 0;
		background: #cc3333;
		border: 0;
		color: white;
		flex: 1;
		margin-right: 10px;
		line-height: 60px;
		text-align: center;
		text-decoration: none;
		border-radius: 2px;
		cursor: pointer; }

	.button-group a.btn.gold-btn {
		background: #cc9933; }

	.button-group a.btn:last-child {
		margin-right: 0; }
	
	p { 
		text-align: center;
		margin-bottom: 15px;
		line-height: 20px; }

	p.important {
		font-size: 20px;
		padding: 30px 15px;
		margin-bottom: none;
		line-height: inherit;
		font-weight: 400;
		color: #666;
		font-size: 42px; }

	.dynamic {
		display: none; }

	.footer {
		border-top: 1px solid #DDD;
		margin-top: 80px; }

	.footer p {
		font-size: 10px; }

	@media (max-width: 480px) { 

	}


</style>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
	<div class="main">
		<h1>New Jerusalem Cathedral eGive</h1>
		<section>
			<div class="button-group">
				<a class="btn show-login">Login</a>
				<a class="btn gold-btn show-signup">Signup</a>
			</div>
			<p class="important">Here is the great message that will encourage people to give. Concise and motivating.</p>
			<p>Here are more finite details of what this page and program are about. For more information visit newjc.org/give</p>
		</section>
		<section class="dynamic">
			<h3>Login</h3>
			<form>
				<ul>
					<li><input type="text" placeholder="username" /></li>
					<li><input type="password" placeholder="password" /></li>
					<li><button>Log In</button></li>
				</ul>
			</form>
		</section>
		<section class="dynamic">
			<h3>Signup</h3>
			<form>
				<ul>
					<li><input type="text" placeholder="username" /></li>
					<li><input type="text" placeholder="First Name" /></li>
					<li><input type="text" placeholder="Last Name" /></li>
					<li><input type="password" placeholder="Password" /></li>
					<li><input type="password" placeholder="Confirm Password" /></li>
					<li><input type="date" placeholder="birthday" /></li>
					<li><button>Sign Up</button></li>
				</ul>
			</form>
		</section>
		<section class="footer">
			<h1 class="logo"><a href="#"><img src="img/newjc-seal.png"/></a></h1>
			<p>&copy 2013. New Jeruslaem Cahtedral. All Rights Reserved.</p>
		</section>
	</div>
</body>
</html>