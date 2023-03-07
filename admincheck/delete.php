<?php  
	$connect = mysqli_connect("localhost", "root", "", "registerdata");
	$sql = "DELETE FROM rdetails WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>