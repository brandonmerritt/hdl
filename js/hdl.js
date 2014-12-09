$( document ).ready(function() {
	$('#mobile-nav a').click(
		function() {
			$('#mobile-nav ul').hide();
			$(this).next('ul').toggle();
		}
	);
});