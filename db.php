<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<!--<meta charset="utf-8">
	<title>ONLINE PLANT STORE</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>-->


	<link rel="stylesheet" href="reg_style.php">
	<!--<link rel="stylesheet" href="C:\Users\Robert Sen\Desktop\3rd semester\style.css">-->
</head>
<body>
<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="registerdata";
//connecting
$con= mysqli_connect($serverName,$userName,$password,$dbName);
if(!$con){
	echo "Failed to connect!";
	exit();
}
else{

	if(isset($_POST['u1name']) && isset($_POST['eid']) && isset($_POST['passwordval'])){
		$uname=$_POST['u1name'];
		$emailid=$_POST['eid'];
		$passval=$_POST['passwordval'];
		/*echo $uname;
		echo $emailid;
		echo $passval;*/

		if(empty($uname) || empty($emailid) || empty($passval)){
			echo "Please enter values first!";
		}
		else{
			
			$sql="INSERT INTO rdetails (name,email,password) VALUES ('".$uname."','".$emailid."','".$passval."')";
			$res=mysqli_query($con,$sql);

			if($res){
				echo "Registered Successful..";
			}
			else{
				echo "Sorry, Something went wrong our side. Please try again later!";
				echo "Error: " . $sql . "<br>" . $con->error;
			}
		}
	}
}

$con->close();
//mysqli_close($con);
//mysqli_connect_errno()
?>
	<div class="bg-img">
		<div class="content">
			<header>Register Form</header>
			<form method="post" action="db.php">
				<div class="field">
					<span ></span>
					<input type="text" class="Uname" placeholder="Name" name="u1name">
				</div>
				<div class="field space">
					<span></span>
					<input type="text" class="mail" placeholder="E-mail id" name="eid">
				</div>
				<div class="field space">
					<span></span>
					<input type="password" class="password" id="password1" required placeholder="Enter Password" name="passwordval">
					<span class="show" id="show1">SHOW</span>
				</div>
				<div class="alrtmsg" id="alertmsg1"></div>

				<div class="field space">
					<span></span>
					<input type="password" class="password" id="password2" required placeholder="Confirm Password">
					<span class="show" id="show2">SHOW</span>
				</div>
				<div class="alrtmsg" id="alertmsg2"></div>
				<div class="check1" > check</div>
				<!--<div class="pass">
					<a href="#">Forget Password?</a>
				</div>-->
				<div class="field space">
					<input class="submit" type="submit" value="REGISTER" name="btn">
				</div>
				<!--<div class="login">Or login with</div>
				<div class="link">
					<div class="facebook">
						<i class="fab fa-facebook-f"><span>Facebook</span></i>
					</div>
					<div class="instagram">
						<i class="fab fa-instagram"><span>Instagram</span></i>
					</div>
				</div>
				<div class="signup">Already have account?
					<a href="loginpage.html">Sign in</a>
				</div>-->
			</form>
			<script type="text/javascript">
				const user_name   = document.querySelector('.Uname');
				const mail_field  = document.querySelector('.mail');
				var pass_field1 = document.getElementById('password1');
				var show_btn1   = document.getElementById('show1');
				var pass_field2 = document.getElementById('password2');
				var show_btn2   = document.getElementById('show2');
				const check_pass  = document.querySelector('.submit');
				var checker =document.querySelector('.check1');


				/*pass_field1.addEventListener('click',function(){
				pass_field1.type="password"; 
				pass_field1.value="" 
				pass_field1.style.color="#222"
				});
				pass_field2.addEventListener('click',function(){
				pass_field2.type="password"; 
				pass_field2.value="" 
				pass_field2.style.color="#222"
				});*/





				checker.addEventListener('click',function(){

					const arr_pass=[pass_field1.value];
					
					validate(arr_pass[0]);

				});



				function validate(passval){
					var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
					if(passval.match(decimal)){ 
						document.getElementById("alertmsg1").innerHTML = "Valid";
						document.getElementById("alertmsg1").style.color="#416442";
					}
					else{
						document.getElementById("alertmsg1").innerHTML = "Not Strong enough";
						document.getElementById("alertmsg1").style.color="#E1306c";
					}
				}




/*
				pass_field1.addEventListener('input',function(){
					var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
					if(pass_field1.value.match(decimal)){ 
						document.getElementById("alertmsg1").innerHTML = "Valid";
						document.getElementById("alertmsg1").style.color="#416442";
					}
					else{
						document.getElementById("alertmsg1").innerHTML = "Not Strong enough";
						document.getElementById("alertmsg1").style.color="#E1306c";
					}
				});



				pass_field2.addEventListener('input',function(){
					if(pass_field2.value.match(pass_field1.value)){
						document.getElementById("alertmsg2").innerHTML = "matched";
						document.getElementById("alertmsg2").style.color="#416442";
					}
					else{
						document.getElementById("alertmsg2").innerHTML = "not matched";
						document.getElementById("alertmsg2").style.color="#E1306c";
					}
				});
*/
				
				show_btn1.addEventListener('click', function(){
				if(pass_field1.type === "password"){
				pass_field1.type = "text";
				show_btn1.style.color = "#3498db";
				show_btn1.textContent="HIDE";
				}
				else{
				pass_field1.type="password";  
				show_btn1.style.color="#222";
				show_btn1.textContent="SHOW";
				}
	 		});

				show_btn2.addEventListener('click', function(){
				if(pass_field2.type === "password"){
				pass_field2.type = "text";
				show_btn2.style.color = "#3498db";
				show_btn2.textContent="HIDE";
				}
				else{
				pass_field2.type="password";  
				show_btn2.style.color="#222";
				show_btn2.textContent="SHOW";
				}
	 		});

			</script>
		</div>
	</div>
</body>
</html>