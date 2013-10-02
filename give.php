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
			<p class="callout">Hello, <?php echo isset($_POST['first_name']) ? $_POST['first_name'] : 'Member' ?></p>
		</section>
		<section>
			<form method="POST">
				<table id="contributions">
					<thead>
					    <tr>
					    	<th></ht>
					      	<th>Contribution</th>
					      	<th>Total</th>
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
							<input type="text" name="total" placeholder="$100" />
						</td>
					</tr>
					<tr class="total-row">
						<td></td>
						<td>Total</td>
						<td id="total">$0</td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2"><a class="add-contribution">Add new contribution</a></td>
					</tr>
				</table>
				<p>&nbsp;</p>
				<h2>Pay With</h2>
				<ul>
					<li>
						<select>
							<option>Cash</option>
							<option>Debit/Credit</option>
							<option>Cash + Debit/Credit</option>
						</select>
					</li>
				</li>
			</form>
			<p>You've given $5,346 this year. Thank you for your continued support and obedience to God's Word</p>
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