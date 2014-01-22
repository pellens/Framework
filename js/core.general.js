$(document).ready(function(){
	equalizeHeight();
});

$(window).resize(function(){
	equalizeHeight();
});


// Alle boxes within a row get the same height
function equalizeHeight()
{
	var boxHeight = 0;

	$(".eq-height").removeAttr("style");

	$(".row").each(function(){

		$(this).find(".eq-height").each(function(){
			var currentBoxHeight = $(this).innerHeight();
			if(currentBoxHeight > boxHeight) boxHeight = currentBoxHeight;
		});

		$(this).find(".eq-height").css({"height":boxHeight+"px"});

	});
}