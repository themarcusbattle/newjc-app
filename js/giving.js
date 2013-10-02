(function($){

	$('.show-login, .show-signup').on('click', function(){
		
		$('#intro').slideUp('slow');
		$('section.dynamic').hide();

		if ( $(this).hasClass('show-login') ) $('#login-view').show();
		else if ( $(this).hasClass('show-signup') ) $('#signup-view').show();
	});

})(jQuery);