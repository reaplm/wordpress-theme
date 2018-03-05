function contactWidgetAjax(form){
	$.ajax({
		type: "post",
		url: $("#contact-form").attr("action"),
		data: $("#contact-form").serializeArray(),
		dataType: "json",
		success: function(data){
			alert(data);
		},
		error: function(data){
			alert(data);
		}
	});
}
function scrollTo(div){
	$('html,body').animate({
		scrollTop: $('#'+div).offset().top
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
		
		//Contact form submit
		var validator = $("#contact-form").validate({
			errorLabelContainer: ".error-div",
			rules:{
				name: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				subject:{
					required: true
				}
			},
			messages:{
				name: {
					required: "Your name is required"
				},
				email: {
					required: "Your email is required",
					email: "Email is invalid"
				},
				subject:{
					required: "Please include subject"
				}
			},
			submitHandler: function(form){
				form.submit();
			}
		});
		/*if(validator.form()){
			contactWidgetAjax();
			return false;
		}*/
		
		$("#contactWidgetSubmit").on("click", function(){
			//e.preventDefault();
		});
	}
);