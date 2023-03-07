<?php
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "hai ".$_POST["username"]. " your login  Successfull";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}
?>
<p><a href="cookies1.php"> Go to Login Page </a> </p>