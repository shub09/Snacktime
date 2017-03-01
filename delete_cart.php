<?php
include 'connect.php';
session_start();

	   	 $customerid=$_SESSION['customerid'];
		 $foodid=$_GET['id'];
		if($foodid!=''){
			$sql = "delete from cart where foodid='".$foodid."' and customerid='".$customerid."';";
			//echo $sql;
			$result = mysqli_query($connect,$sql);
			header("Location:CartList.php?msg=deleted successfully");
		}else{
			header("Location:CartList.php?msg=failed");
		}
	
	
?>