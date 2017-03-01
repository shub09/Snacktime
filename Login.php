
<?php
include 'connect.php';
session_start();

if($_POST){
$username = $_POST['username'];
$password = $_POST['password'];

if($username!=''&&$password!=''){
	$sql = "SELECT customerusername,customerpassword FROM customer WHERE customerusername ='".$username."' AND customerpassword ='".$password."'";
	echo $sql;
	$result = mysqli_query($connect,$sql);
	$numrows  = mysqli_fetch_array($result);
	$i=0;
	if (sizeof($numrows)>0)	{		
		$_SESSION['username'] = $username;
		header("Location:index.php?msg=Login successful");
		die();
	}else
	{
	header("Location:Login.php?msg=failed");
   // echo "Error in Operation";
    //echo "<br><br><a href='AddCustomer.php'>Try again</a>";
	};
}
}


	
	
	
	//echo "Registration successful";
    //echo "<br><br><a href='index.php'></a>";



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script>
function validate()
{
var uname=document.getElementById("uname").value;
var pass=document.getElementById("pass").value;
if(uname=="")
{
document.getElementById("unameError").innerHTML="*Please Enter User Name";
return false;
}
if(pass=="")
{
document.getElementById("passError").innerHTML="*Please Enter Password";
return false;
}
return true;
}
</script>
</head>
<body>
<div id="templatemo_container">
	<div id="templatemo_header">
    	<div id="site_title"></div>
    </div> <!-- end of header -->
    
   <div id="templatemo_menu">
         <ul>
        	<li class="current"><a href="index.html"><b>Home</b></a></li>
                <li><a href="#"><b>Food Menu</b></a></li>
    		<li><a href="#"><b>Contact us</b></a></li>
    		<li><a href="#"><b>Sign Up</b></a></li>
                <li><a href="#"><b>Feedback</b></a></li>
        </ul>
    </div> <!-- end of menu -->
    
<form  onsubmit="return validate()" method="post" action="Login.php">
   <table bgcolor="gray"  align="center" cellpadding="15" >
        <tr>
            <td>User</td>
            <td>
                <select name="type">
                  <option value="ADMIN">ADMIN</option>
                  <option value="CUSTOMER">CUSTOMER</option>
                </select>
             </td>        
         </tr> 
         <tr>
            <td>Name</td>
            <td>
                  <input type="text" name="username" id="uname">
                  <br>
                  <span id="unameError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>Password</td>
            <td>
                  <input type="password" name="password" id="pass">
                  <br>
                  <span id="passError" style="color:red"></span>
            </td>
         </tr> 
           <tr>
               <td colspan="2">
                           <input type="submit" value="LOGIN">
                         <button><a href="UpdatePassword.php">UPDATE PASSWORD</a></button>
               </td>
           </tr>
     </table>
  </form>     
  <div id="templatemo_footer">
    
    	<a href="#">Home</a> | <a href="#">Tea</a> | <a href="#">Top Dishes</a> | <a href="#">Company</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright © 2024 <a href="#"><strong>Snack Time</strong></a> 
        <!-- Credit: www.templatemo.com --></div> <!-- end of footer -->
 
</div><!-- end of container -->  
</body>
</html>



