<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Consult Form</title>
	<link rel="stylesheet" type="text/css" href="mailstyle.css">
</head>
<body>
	<?php
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$msg=$_POST['msg'];

			$to='syedsalahuddin@pec.edu';
			$subject='Mail from website, someone needs consultant.';
			$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
			$headers="From: ".$email;	

			if(mail($to, $subject, $message, $headers)){
				echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			}
			else{
				echo "Something went wrong!";
			}
		}
	?>

	<div class="main">
		<div class="info">NEED A CONSULTANT!<br><h6>Send us a mail, we will help you with an expert</h6></div>
		<form action="mailmsg.php" method="post" name="form" class="form-box">
			<label for="name">Name</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
			<label for="email">Email ID</label><br>
			<input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
			<label for="phone">Phone</label><br>
			<input type="tel" name="phone" class="inp" placeholder="Enter Your Phone" required><br>
			<label for="message">Message</label><br>
			<textarea name="msg" class="msg-box" placeholder="Enter Your Message Here..." required></textarea><br>
			<input type="submit" name="submit" value="Send" class="sub-btn">
		</form>
	</div>
</body>
</html>