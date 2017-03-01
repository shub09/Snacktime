<?php
include 'connect.php';


$cname = $_POST['customername'];
$caddr = $_POST['customeraddress'];
$contact = $_POST['contact'];
$cuname = $_POST['uname'];
$cpass = $_POST['password'];

$sql_users = "insert into customer (customername,customeraddress,contact,customerusername,customerpassword) values ('".$cname."','".$caddr."','".$contact."','".$cuname."','".$cpass."');";
//echo "$sql_users" ;
$res_users = mysqli_query($connect, $sql_users);
if($res_users== true)
{

	header("Location:AddCustomer.php?msg=Registration successful");
	die();
	
	//echo "Registration successful";
    //echo "<br><br><a href='index.php'></a>";
}
else
{
	header("Location:AddCustomer.php?msg=failed");
   // echo "Error in Operation";
    //echo "<br><br><a href='AddCustomer.php'>Try again</a>";
};

?>