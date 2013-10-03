<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/giving.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<section class="top">
			<h1>New Credit Card</h1>
		</section>
		<div class="main">
			<section>
				<p class="callout">Enter once, use again.</p>
				<p>Entering your credit card is secure and convenient. Following banking regulations, we securely store your credit card so that you don't have to enter it the next time you give. Of course, we will never charge your card without your permission.</p>
			</section>
			<section>
				<h2>Credit Card</h2>
				<form method="POST">
					<ul>
						<li><input type="text" placeholder="Cardholder Name" /></li>
						<li><input type="text" placeholder="Credit Card Number" /></li>
						<li><input type="text" placeholder="Exp Date" /></li>
						<li><input type="text" placeholder="CVC" /></li>
					</ul>
					<div class="button-group">
						<a class="btn" href="give.php">Cancel</a>
						<button class="btn gold-btn" type="submit">Add Credit Card</button>
					</div>
				</form>
				<p>&nbsp;</p>
				<p>You've given <span class="amount-given">$5,346</span> this year. Thank you for your continued support and obedience to God's Word.</p>
				<p>- Malachi 3:10 -</p>
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