<?php  
	$connect = mysqli_connect("localhost", "root", "", "mypaudhadb");
	$sql = "DELETE FROM cartdetails WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>