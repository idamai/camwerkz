$(document).ready(function(){
	$("#testimonial1").hide();
	$("#readMore1").click(function() {
		$("#testimonial1").show();
		$("#readMore1").css('display', 'none');
		return false;
	});
	$("#testimonial3").hide();
	$("#readMore3").click(function() {
		$("#testimonial3").show();
		$("#readMore3").css('display', 'none');
		return false;
	});
});