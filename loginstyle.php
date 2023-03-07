<?php
	header('Content-type:text/css; charset:UTF-8');
?>

@import url('https://fonts.googleapis.com/css?family=Montserrat')
body{
	overflow-y: hidden;
}
.bg-img{
	background-image: url('fullsizebg.jpg');
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
	height: 97vh;
}
.bg-img:after{
	position: absolute;
	content: '';
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	background: rgba(0,0,0,0.05);
}
.content{
	position: absolute;
	top: 50%;
	left: 25%;
	border-radius: 35px;
	transform: translate(-50%,-50%);
	text-align: center;
	z-index: 999;
	width: 370px;
	text-align: center;
	padding: 60px 32px;
	background: rgba(255,255,255,0);
	box-shadow: -1px 4px 28px 5px rgba(0,0,0,0.75);
}
.content header{
	color: #416442;
	font-size: 30px;
	font-weight: 600;
	margin: 0 0 35px 0;
	font-family: 'Montserrat',sans-sherif;
} 
.field{
	position: relative;
	border-radius: 30px;
	height: 45px;
	width: 100%;
	display: flex;
	background: rgba(255,255,255,0.94);
}
.field span{
	color: #222;
	width: 40px;
	line-height: 45px;
}
.field input{
	height: 100%;
	width: 100%;
	background: transparent;
	border: none;
	outline: none;
	color: #222;
	font-size: 16px;
	font-family: 'Poppins',sans-sherif;
}
.show{
	position: absolute;
	right: 13px;
	font-size: 13px;
	font-weight: 700;
	color: #222;
	cursor: pointer;
	display: none;
	font-family: 'Montserrat',sans-sherif;
}
.password:valid~.show{
	display:block;
}

.space{
	margin-top: 16px;

}

.pass{
	text-align: left;
	margin: 10px 0;
}
.pass a{
	color: #416442;
	font-family: 'Poppins',sans-sherif;
	text-decoration: none;
}
.pass:hover a{
	text-decoration: underline;
}
.alrtmsg{
	text-align: left;
	font-size: 12px;
	font-weight: 200;
	margin: 8px 30px;
}
input[type="submit"]{
	background: #3498db;
	border: 1px solid #2691d9;
	color: white;
	font-size: 18px;
	letter-spacing: 1px;
	font-weight: 600;
	cursor: pointer;
	font-family: 'Montserrat',sans-sherif;
}

input[type="submit"]:hover{
	background: #2691d9;
}
.login{
	color: #416442;
	margin:20px 0;
	font-family: 'Poppins',sans-sherif;	
}
.link{
	display: flex;
	cursor: pointer;
	color: white;
	margin: 0 0 20px 0;
}
.facebook, .instagram{
	width: 100%;
	height: 42px;
	line-height: 45px;
	margin-top: 10px;
	margin-left: 10px;
}
.facebook{
	margin-left: 0px;
	background: #4267B2;
	border: 1px solid #3e61a8;
}
.instagram{
	background: #E1306c;
	border: 1px solid #df2060;
}
.link i{
	font-size: 17px;
}
.link span{
	font-size: 16px;
	margin-left: 8px;
	letter-spacing: 1px;
	font-weight: 500;
	font-family: 'Poppins',sans-sherif;
}
.singup{
	color: white;
	font-size: 15px;
	font-family: 'Poppins',sans-sherif;
}
.singup a{
	color: #3498db;
	text-decoration: none;
}
.singup a:hover{
	text-decoration: none;
}
