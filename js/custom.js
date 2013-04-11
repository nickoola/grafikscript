jQuery(function($){
	$(document).ready(function(){

		$('body').addClass('js');

		$('a[href=#toplink]').click(function(){
			$('html, body').animate({scrollTop:0}, 200);
			return false;
		});

		$('#commentform').submit(function(e) {
			var $urlField = $(this).children('#url');
			if($urlField.val() == 'Website') {
				$urlField.val('')
			}
		});

	});
});