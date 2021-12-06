
$(document).ready(function(){
	$("#login").click(function(event){
	event.preventDefault();
	$.ajax({
			url : "action/login_action.php",
			method: 'POST',
			dataType: 'text',
			data : $("form").serialize(),
			success:function(data){

				$('#login_msg').html(data);
				if (json) {
					window.location.href = 'index.php';
				}
			}
		})
	});
});