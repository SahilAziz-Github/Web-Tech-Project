
<html>
<head>

</head>

<body>

	<script type="text/javascript">
		
		function regvalidation()
		{
			var namev = document.registration.name.value;
			var unamev = document.registration.uname.value;
			var emailv = document.registration.email.value;
			var atposition = emailv.indexOf("@");
			var dotposition = emailv.lastIndexOf(".");
			var numv=document.registration.number.value;
			var passv=document.registration.pass.value;
			var cpassv=document.registration.cpass.value;

			if(namev==" " || unamev==" "  || emailv==" "  || numv==" "  || passv==" "  || cpassv==" " )
			{
				alert("Please Fill Up the Fields!");
				return false;
			}


			else if (namev==null || namev==""){  
            document.getElementById("validName").innerHTML="**Name can not be empty"; 
            //document.getElementById("validName").innerHTML.style.color="Red";
            //return("no_name");

            return false; } 

            else if (unamev==null || unamev==""){  
            document.getElementById("validUserName").innerHTML="**User name can not be empty"; 
            return false; }
			
			else if(atposition<1 || dotposition<atposition+2 || (emailv.charAt(emailv.length-4)!='.'))
			{
				document.getElementById("validEmail").innerHTML="**Invalid email address";
				return false;
			}
			else if (isNaN(numv) || numv.length!=11 || numv.charAt(0)!=0 || numv.charAt(1)!=1){  
            document.getElementById("validNum").innerHTML="**Invalid number";  
            return false;  
             }
            else if (passv.length<8 || passv.search(/[0-9]/)==-1 || passv.search(/[a-z]/)==-1 || passv.search(/[A-Z]/)==-1 || passv.search(/[!\@\#\$\%\^\&\(\)\_\+\.\,\:\;]/)==-1 ){  
            document.getElementById("validPass").innerHTML="**Invalid password";  
            return false;  
             } 
             else if(cpassv!=passv)
			{
				document.getElementById("validCpass").innerHTML="**Password did not match";
				return false;
		}
			


			/*if(emailv.indexOf("@")<=0)
			{
				document.getElementById("validEmail").innerHTML="**Invalid email address";
				return false;
			}

            if((emailv.charAt(emailv.length-4)!='.') && (emailv.charAt(emailv.length-3)!='.') )
			{
				document.getElementById('validEmail').innerHTML = " **Invalid email address";
				return false;

			}*/
			
		}
	</script>
<form name = "registration" method="POST" action="../php/regCheck.php" >
<fieldset>
<legend><b> Sign Up </b></legend>
Name <br>
<input type="text" name="name" /> 
<span id="validName">  </span><br>
User Name <br>
<input type="text" name="uname" /> 
<span id="validUserName">  </span><br>
Email <br>
<input type="text" name="email" value=" " /> 
<span id="validEmail">  </span> <br>
Contact Number <br>
<input type="text" name="number" />
<span id="validNum">  </span> <br>
Password <br>
<input type="Password" name="pass" size = "8" maxlength="8" /> 
<span id="validPass">  </span> <br>
Confirm Password <br>
<input type="Password" name="cpass" size = "8" maxlength="8" /> 
<span id="validCpass">  </span> <br>
<hr>
<input type="submit" name="submit" value="Sign Up" onclick ="return regvalidation()"/>
<a href="../views/login.php"> Sign in </a> 


</fieldset>
</form>
</body>
</html>