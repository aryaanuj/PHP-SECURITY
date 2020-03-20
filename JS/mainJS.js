// signup form

$(document).ready(function()
{
	$("#con_password").keyup(function(){
		if($("#password").val()==$(this).val())
		{
			$("#cnf-msg").html("<p class='text-success'>Password Matched</p>");
		}
		else
		{
			$("#cnf-msg").html("<p class='text-danger'>Password Not Matched</p>");
		}
	});
});