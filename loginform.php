<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>ONLINE PLANT STORE</title>
	<link rel="stylesheet" href="loginstyle.php">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <?php
    
    ?>
	<div class="bg-img">
		<div class="content">
			<header>LOGIN FORM</header>
			<form action="homepage\homepaggephp.php" method="post">
				<div class="field">
					<span class="fa fa-user"></span>
					<input type="text" class="mail input-field" name="username" placeholder="Email or Phone" >
				</div>
				<div class="field space">
					<span class="fa fa-lock"></span>
					<input type="password" class="password input-field" name="password" required placeholder="Password"> 
					<span class="show">SHOW</span>
				</div>
				<div class="pass">
					<a href="#">Forget Password?</a>
				</div>
				<div><p><input type="checkbox" name="remember" /> Remember me</p></div>
				<div class="field">
					<input class="submit" type="submit" value="LOGIN" >
				</div>
				<div class="login">Or login with</div>
				<div class="link">
					<div class="facebook">
						<i class="fab fa-facebook-f"><span>Facebook</span></i>
					</div>
					<div class="instagram">
						<i class="fab fa-instagram"><span>Instagram</span></i>
					</div>
				</div>
				<div class="signup">Don't have account?
					<a href="reg_form.php">Sign up Now</a>
				</div>
			</form>
		</div>
	</div>
	<script>
		const mail_field = document.querySelector('.mail');
		const pass_field = document.querySelector('.password');
		const show_btn   = document.querySelector('.show');
		const check_pass = document.querySelector('.submit');

		pass_field.addEventListener('click',function(){
				pass_field.type="password"; 
				pass_field.value="" 
				pass_field.style.color="#222"
		});
		mail_field.addEventListener('click',function(){
			if(mail_field.value!="syed@gmail.com"){
				mail_field.value=""
				mail_field.style.color="#222"
			}
			else{
				mail_field.style.color="#222"
			}
		});
		show_btn.addEventListener('click', function(){
			if(pass_field.type === "password"){
				pass_field.type = "text";
				show_btn.style.color = "#3498db";
				show_btn.textContent="HIDE";
			}
			else{
				pass_field.type="password";  
				show_btn.style.color="#222";
				show_btn.textContent="SHOW";
			}
		});
		check_pass.addEventListener('click',function(){
			if(pass_field.value!="love@plant"){
				pass_field.value="Please Enter valid password!";
				pass_field.type = "text";
				pass_field.style.color="#E1306c";
			}
			if(mail_field.value!="syed@gmail.com"){
				mail_field.value="Please Enter vaild mail id!";
				mail_field.style.color="#E1306c";
			}
			if(pass_field.value==="love@plant" && mail_field.value==="syed@gmail.com"){
				window.alert("Welcome syed");
			}
		});
	</script>
</body>
</html>