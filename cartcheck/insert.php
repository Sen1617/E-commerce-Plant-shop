<?php  
$connect = mysqli_connect("localhost", "root", "", "registerdata");
$sql = "INSERT INTO rdetails(name, email,password) VALUES('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["pass"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>