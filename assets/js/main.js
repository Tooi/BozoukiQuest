 function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);  //need this function to "validate" the email and allow an account to be created
}

$(document).ready(function() {
 
 
 $('#createaccount').click(function(e){  //what happens when you press "create account"
	var username=$('#username').val();
	var email=$('#email').val();
	var pass1=$('#pass1').val();
	var pass2=$('#pass2').val();
	var country=$('#country').val();
	var msg='';
	if (username.length==0)
	{
		msg="Username can't be blank.<br>";
	}
	if(!validateEmail(email))
	{
		msg+="Email address is invalid.<br>";
	}
	
	if (pass1.length<5)
	{
		msg+="Password should be 6 characters or less.<br>";
	}
	
	if (pass1!=pass2)
	{
		msg+="Passwords do not match.<br>";
	}

	if (country.length==0)
	{
		msg+="Please select a country.<br>";
	}
	
	if (msg!='')
	{
		$('#topmsg').show();
		$('#topmsg').html("<div class='fade in'>"+msg+"</div>");
		$('#topmsg').delay(3000).fadeOut('fast');
		return false;
					
	}
	
	$.ajax({
            			url: "saveuser.php",             //it saves the user if all the data is fine
            			type: "POST",
            			data: {
								'username' : username,
								'email' : email,
								'password' : pass1,
								'country' : country,
							  },
						datatype: "text",
						success: function(data){
						console.log(data);
						var result = JSON.parse(data);
						
						if(result['err']=="email")
						{
							$('#topmsg').show();
							$('#topmsg').html("<div class='fade in'>"+result['msg']+"</div>");
							$('#topmsg').delay(3000).fadeOut('fast');
							
						}
						else if(result['err']=="username")
						{
							$('#topmsg').show();
							$('#topmsg').html("<div class='fade in'>"+result['msg']+"</div>");
							$('#topmsg').delay(3000).fadeOut('fast');
							
						}
						else if(result['err']=="no")
						{
							window.location.href="register.php";
							
						}
						
						},
						error: function(data)
						{
							 $('#topmsg').show();
							$('#topmsg').html("<div class='fade in'>Something went wrong...</div>");
							$('#topmsg').delay(3000).fadeOut('fast');
						}
	});
	
 });
 });
 
 		