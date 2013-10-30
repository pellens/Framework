$(document).ready(function(){

	

});

// Alle boxes within a row get the same height
function Equalize_Height()
{
	var boxHeight = 0;

	$(".eq-height").each(function(){

		var currentBoxHeight = $(this).height();
		if(currentBoxHeight > boxHeight) boxHeight = currentBoxHeight;

	});
}