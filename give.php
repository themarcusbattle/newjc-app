<?php
	if ( !isset($_COOKIE['access_token']) ) header('Location: index.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link href="css/giving.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<section class="top">
			<h1>eGive</h1>
		</section>
		<div class="main">
			<section>
				<p class="callout">Hi, <?php echo isset($_COOKIE['first_name']) ? $_COOKIE['first_name'] : 'Member' ?></p>
				<p>Your giving goes towards our mission of resolving homelesness in Guilford County and Greater North Carolina.</p>
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
								<select name="contribution_types">
									<option>--</option>
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
					<div class="button-group">
						<a class="btn" href="add-credit-card.php">Add New Credit Card</a>
						<button class="btn gold-btn" type="submit">Give with VISA 5017</button>
					</div>
				</form>
				<p>&nbsp;</p>
				<p>You've given <span class="amount-given">$0</span> this year. Thank you for your continued support and obedience to God's Word.</p>
				<p>- Malachi 3:10 -</p>
			</section>
			<section class="footer">
				<?php if ( isset($_COOKIE['access_token']) ): ?>
					<div class="button-group">
						<a class="btn blank-btn logout">Logout</a>
					</div>
				<?php endif; ?>
				<h1 class="logo"><a href="#"><img src="img/newjc-seal.png"/></a></h1>
				<p>&copy 2013. New Jeruslaem Cahtedral. All Rights Reserved.</p>
			</section>
		</div>

		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		
		<script src="js/mochila.js"></script>
		<script src="js/giving.js"></script>
	</body>
</html>

<script>
 	if ( mochila.getCookie('access_token') ) {
		
		$.ajax({
			type: 'GET',
			url: 'http://marcusbattle.com/api/payments/contributions.json',
			data: null
		}).done(function( response ) {

			if ( response.count ) {

				$(response.contribution_types).each(function(){
					$('select[name="contribution_types"]').append('<option>' + this + '</option>');
				});
			}
		});

		$.ajax({
			type: 'GET',
			url: 'http://marcusbattle.com/api/payments.json',
			data: null
		}).done(function( response ) {

			var total = 0;

			if ( response.count ) {

				$(response.payments).each(function(){
					total += this.amount * 1;
				});
			}
			
			$('.amount-given').text('$' + total);
		});

	}
</script>