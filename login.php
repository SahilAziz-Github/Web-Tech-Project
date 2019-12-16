
<html>
<head>

</head>

<body>

	<script type="text/javascript">
		
		function loginvalidation()
		{
			
			var emailv = document.login.email.value;
			var passv=document.login.pass.value;
			if(emailv==" "  || passv==" " )
			{
				alert("Please Fill Up the Fields!");
				return false;
			}


			else if (emailv==null || emailv==""){  
            document.getElementById("validEmail").innerHTML="**Email can not be empty"; 
            //document.getElementById("validName").innerHTML.style.color="Red";
            //return("no_name");

            return false; } 

            else if (passv==null || passv==""){  
            document.getElementById("validPass").innerHTML="**Password can not be empty"; 
            return false; }
			
			
			
		}
	</script>
<form name = "login" method="POST" action="../php/loginCheck.php" >
<fieldset>
<legend><b> Sign In </b></legend>
Email <br>
<input type="text" name="email" value=" " /> 
<span id="validEmail">  </span> <br>
Password <br>
<input type="Password" name="pass" size = "8" maxlength="8" /> 
<span id="validPass">  </span> <br>
<hr>
<input type="submit" name="submit" value="Sign In" onclick ="return loginvalidation()"/>
<a href="../views/registration.php"> Sign Up </a> 


</fieldset>
</form>
</body>
</html>