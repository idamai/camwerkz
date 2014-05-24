$(document).ready(function(){
	$("#form1").on("submit",function(event){
		event.preventDefault();
		var name = $("#name").val();
		var email = $("#email").val();
		var message = $("#message").val();
		$.ajax({
           type: "POST",
           url: document.URL+"formsubmit.php",
           data: $("#form1").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });
	});
	$("#form2").on("submit",function(event){
		event.preventDefault();
		var name = $("#name2").val();
		var email = $("#email2").val();
		var message = $("#message2").val();
		$.ajax({
           type: "POST",
           url: document.URL+"formsubmit.php",
           data: $("#form2").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });
	});
});
