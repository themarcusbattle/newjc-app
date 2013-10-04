(function($){

	$('.show-login, .show-signup').on('click', function(e){
		e.preventDefault();

		$('#intro').slideUp('slow');
		$('section.dynamic').hide();

		if ( $(this).hasClass('show-login') ) $('#login-view').show();
		else if ( $(this).hasClass('show-signup') ) $('#signup-view').show();
	});

	$('a.add-contribution').on('click', function(e){
		var row = $('.contribution-row:first-child').clone();

		row.find('input,select').val('');

		$('#contributions .total-row').before(row);
	});

	// Remove contribution
	$(document).on('click', '.delete-row', function(e){
	
		if ( $(this).closest('.contribution-row').not(':first-child') ) {
			$(this).closest('.contribution-row').remove();
			update_total();
		}
	});

	$(document).on('keyup', 'input[name="amount[]"]', function(e){
		update_total();
	});

	function update_total() {
		var total = 0;

		$('input[name="amount[]"').each(function(){
			total += $(this).val() * 1;
		});

		$('#total').text('$' + total);
	}

	$('form').on('submit', function(e){
		e.preventDefault();

		var method = $(this).attr('method');
		var action = $(this).attr('action');

		$.ajax({
			type: method,
			url: action,
			data: $(this).serialize()

		}).done(function( response ) {
			
			if ( response.errors ) alert( response.errors[0].msg );
			else {
				mochila.setCookie( 'access_token', response.access_token, 365 );
				location.reload();
			}
		});

	});

	$('.logout').on('click', function(e){

		if ( mochila.deleteCookie('access_token') ) {
			location.reload();
		}
	});

})(jQuery);