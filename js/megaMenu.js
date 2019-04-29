jQuery(document).on('click', '.mega-dropdown', function(e) {
  e.stopPropagation()
})

$(document).ready(function() {
	$(".megamenu").on("click", function(e) {
		e.stopPropagation();
	});
});
