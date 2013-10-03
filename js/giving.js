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

})(jQuery);