$(document).ready(function() {
 
 $('#login').click(function(e){          //what happens after you click the login button

	var username=$('#username').val();   //checks username and pass
	var password=$('#password').val();
	
	var msg='';
	if (username.length==0)
	{
		msg="Username can't be blank.<br>";
	}
	
	if (password.length<5)
	{
		msg+="Password can't be less than 6 characters.<br>";
	}
	
	
	
	
	if (msg!='')               //sets the message to fade in
	{
		$('#topmsg').show();         
		$('#topmsg').html("<div class='fade in'>"+msg+"</div>");
		$('#topmsg').delay(3000).fadeOut('fast');
		return false;
					
	}
	
	$.ajax({
            			url: "checklogin.php",
            			type: "POST",
            			data: {
								'username' : username,
								'password' : password
							  },
						datatype: "text",
						success: function(data){
						console.log(data);
						var result = JSON.parse(data);
						if(result['user']=="invalid")       //if the username or password doesn't match, it shows V V V
						{
							$('#topmsg').show();
							$('#topmsg').html("<div class='fade in'>Wrong Username or Password.</div>");
							$('#topmsg').delay(3000).fadeOut('fast');
							
						}
						else if(result['user']=="success")
						{
							
							document.location.href="index.php";   //I need it to go back to index after logging in to prevent bugs
							
						}
						
						},
						error: function(data) //if something outside the norm happens i.e. connection fails 
						{
							 $('#topmsg').show();
							$('#topmsg').html("<div class='fade in'>Something went wrong...</div>");
							$('#topmsg').delay(3000).fadeOut('fast');
						}
	});
	
 });
 });
 
 		