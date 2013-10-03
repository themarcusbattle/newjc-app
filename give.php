<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/giving.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<div class="main">
		<h1><a href="/newjc-app">New Jerusalem Cathedral eGive</a></h1>
		<section>
			<p class="callout">Hi, <?php echo isset($_POST['first_name']) ? $_POST['first_name'] : 'Member' ?></p>
		</section>
		<section>
			<h2>Contributions</h2>
			<form method="POST">
				<table id="contributions">
					<thead>
					    <tr>
					    	<th></ht>
					      	<th></th>
					      	<th>Amount</th>
					    </tr>
				  	</thead>
					<tr class="contribution-row">
						<td>
							<a class="delete-row">[Delete]</a>
						</td>
						<td>
							<select>
								<option>--</option>
								<option>Offering</option>
								<option>Tithes</option>
								<option>Gym Campaign</option>
							</select>
						</td>
						<td>
							<input type="text" name="amount[]" placeholder="$100" />
						</td>
					</tr>
					<tr class="total-row">
						<td></td>
						<td>Total</td>
						<td id="total">$0</td>
					</tr>
					<tr>
						<td colspan="3"><a class="add-contribution">Add new contribution</a></td>
					</tr>
				</table>
				<p>&nbsp;</p>
				<h2>Pay With</h2>
				<div class="button-group stacked">
					<button class="btn" type="submit">Give with VISA 5017</button>
					<button class="btn blank-btn">Add New Credit Card</button>
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