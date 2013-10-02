<style>
	* { 
		box-sizing: border-box; 
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		margin: 0;
		padding: 0;
	}

	.main {
		width: 100%;
	}

	section {
		display: block;
	}

	h1.logo img {
		max-height: 100px;
	}
</style>

<div class="main">
	<h1></h1>
	<div class="button-group">
		<button>Login</button>
		<button>Signup</button>
	</div>
	<section>
		<h3>Login</h3>
		<form>
			<ul>
				<li><input type="text" placeholder="username" /></li>
				<li><input type="password" placeholder="password" /></li>
				<li><button>Log In</button></li>
			</ul>
		</form>
	</section>
	<section>
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
	<h1 class="logo"><a href="#"><img src="img/newjc-seal.png"/></h1>
</div>