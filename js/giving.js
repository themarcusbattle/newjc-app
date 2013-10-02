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

		$('#contributions .contribution-row:first-child').after(row);
	});

	$('.delete-row').on('click', function(e){
		console.log(  $(this) );
		if ( $(this).closest('.contribution-row').not(':first-child') ) {
			alert('right here');
			$(this).closest('.contribution-row').remove();
		}
	});

	$('input[name="total"').on('keyup', function(e){

		var total = 0;

		$('input[name="total"').each(function(){
			total += $(this).val() * 1;
		});

		$('#total').text('$' + total);
	});

})(jQuery);