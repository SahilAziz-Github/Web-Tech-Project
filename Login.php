<!DOCTYPE html>
<html>

<body>

<h3  style="text-shadow: 1px 1px blue">Login Page</h3>

<div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">
  <form action="Login.php" method="post">
    <label for="usernamr">User Name:</label>
    <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" id="usernamr" name="usernamr" placeholder="UserName...">

    <label for="pass">Password:</label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="password" id="pass" name="pass" placeholder="Password....">

<?php
if (isset($_POST["submit"]))
 {
 

$cred=array();
$type=array();

$file=fopen("LoginInfo.txt","r") or die("file error");
while($c=fgets($file))
{
  $ar=explode("-",$c);
if (isset($ar[0]) && isset($ar[1]) && isset($ar[2]))
  {


  $cred[$ar[0]]=$ar[1];
  $type[$ar[0]]=$ar[2];
 }
}


$flag=0;
session_start();
foreach($cred as $k=>$v)
{
  if($_POST["usernamr"]==$k && md5($_POST["pass"])==$v)
  {
     global $type;

     if ($type[$k]=="Agency") 
     {
      global $flag;
      global $k;
      $_SESSION["valid"]="yes";
      $_SESSION["uname"]=$k;
      
      $flag=1;
      header("Location:Agency.php");
      break;
     }

     else if ($type[$k]=="Customer") 
     {

      global $flag;
      global $k;
      $_SESSION["valid"]="yes";
      $_SESSION["uname"]=$k;
      
      $flag=1;
      header("Location:Customer.php");
      break;
     }
    
    else if ($type[$k]=="admin") 
     {

      global $flag;
      global $k;
      $_SESSION["valid"]="yes";
      $_SESSION["uname"]=$k;
	  
     
      $flag=1;
      header("Location:Adminhome.php");
      break;
     }

     else{}

     
  }
}
if($flag==0)
{
  echo "<p style='color:red'>Wrong credentials</p>";
}

}
?>


    
  
    <input style="width: 100%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;
    cursor: pointer;" type="submit" value="Submit" name="submit"><br>

   

  </form>

  <a href="Reg.php" title=""  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Registration</a><br><br><br>

</div>

</body>
</html>
