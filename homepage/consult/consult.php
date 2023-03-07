<!DOCTYPE html>
<html lang="en">
<head>
    <title>Consultant</title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="consultstyle.css?<?php echo time(); ?>">
</head>
<body>
<?php
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$msg=$_POST['msg'];
			$output='';
			$to='syedsalahuddin@pec.edu';
			$subject='Mail from website, someone needs consultant.';
			$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
			$headers="From: ".$email;
			if(mail($to, $subject, $message, $headers))
			{
				$output.='<h5>Sent Successfully! Thank you "'.$name.'", We will contact you shortly!</h5>';
			}
			else{
				$output.='<h5>Something went wrong!</h5>';
			}
		}		
	?>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="consult.php" method="post">
        <img src="image(2).png" alt="plant">
        <h3>NEED A CONSULTANT!<span>Send us a mail, we will help you with our experts</span></h3><br>
		<input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
		<input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
		<input type="tel" name="phone" class="inp" placeholder="Enter Your Phone" required><br>
		<textarea name="msg" class="msg-box" placeholder="Enter Your Message Here..." required></textarea><br>
		<input type="submit" name="submit" value="Send" class="sub-btn"><br><br>
        <?php
			if(isset($output)){
            echo $output;
			}
        ?>
    </form>
    
</body>
</html>