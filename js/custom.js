$(document).ready(function(){

	//$(".menu").bind("click",function(){
//
	//	$(".holder").toggleClass("open");
	//	$(".menulist").toggleClass("open");
//
	//});

	var jPM = $.jPanelMenu({
	    menu: '.menulist',
	    trigger: '.menu'
	});
	jPM.on();

});