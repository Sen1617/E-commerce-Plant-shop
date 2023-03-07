<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="mypaudhadb";
	//connecting
	$con= mysqli_connect($serverName,$userName,$password,$dbName);
    //to count no. of rows
    $querycount="SELECT * FROM cartdetails";
    $result=mysqli_query($con,$querycount);
    $rowcount=mysqli_num_rows($result);
    echo $rowcount; 
	$con->close();
?>
