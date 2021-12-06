
$(document).ready(function(){
	//email registration validation when click
$("#signin").click(function(event){
	event.preventDefault();
	$.ajax({
			url : "action/action.php",
			method: 'POST',
			data : $("form").serialize(),
			success:function(data){
				$("#signin_msg").html(data);
			}
		})
	});



});