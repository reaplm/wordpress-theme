function scrollTo(div){
	$('html,body').animate({
		scrollTop: $('#'+div).offset().top-100
	},'slow');
}
window.onload = function() {
	 
}
/**
 * 
 */
 function InitMenuItems(){
	 //Header Menu li items
	 $('.navbar-nav li').addClass('nav-item');
	 $('.navbar-nav li a').addClass('nav-link');
 }
$(document).ready(
	function(){
		InitMenuItems();
		
	}
);