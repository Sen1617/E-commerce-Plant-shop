<!DOCTYPE html>
<html lang="en">
<head>
<?php
//starting session
session_start();
//setting cookies
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
} else {
	setcookie("username","");
	setcookie("password","");
}
//incrementing visits
$_SESSION['visits']++;
?>

	<meta charset="utf-8">
	<title>Homepage</title>
	<!--<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="jqhomestyle.css?<?php echo time(); ?>">	
	<script type="text/javascript" src="jquery-3.6.0.js"></script>
	<script>
		//for-dropdown
		$(document).ready(function(){
		
			$(".dropdown > a").click(function(){
				$(this).parent().siblings().find('ul').slideUp(500);
				$(this).next('ul').stop(true,false,true).slideToggle(500);
				return false;
			});

			$(".box").hover(function(){
				$(this).find(".content").animate({bottom: "0"});},
				function(){
					$(this).find(".content").animate({bottom: "-2rem"});
			});
			
			//for text animation
			let typed = new Typed(".quoteslog", {
				strings : ["plant big sale special offer","decorate your home now","plant make people happy"],
				typeSpeed : 60,
				backSpeed : 50,
				loop : true
			});	


		});

			//for-image-slider
			function slider(){
				$current=$('.slider img.active');
				if($current.length==0){
					$('.slider img:first-child').addClass('active');
				}
				else{
					$next=$current.removeClass('active').next();
					if($next.length==0){
					$('.slider img:first-child').addClass('active');
					}
					else{
						$next.addClass('active');
					}
				}
			}
			setInterval(slider,2500);
		
</script>
</head>
<body>
	<header>
		<div class="mainbrand">
			<a href="#" class="brandimg"><img src="trans-sidelogo.png" height="35%" width="35%"></a>
			<p class="slogan">Find Your Dream Plants Here.</p>
			<!--<form action="" class="search-bar-container">
			<input type="search" id="search-bar" placeholder="search here...">
			<label for="search-bar" class="fas fa-search"></label>
			</form>-->
        </div>
	
		<div class="wrapper" id="wrapper">
			<div class="menu">
				<ul class="nav-area">
					<li><a href="#">HOME</a></li>
					<li class="dropdown"><a href="#">Categories &nbsp&nbsp<i class="arrow down"></i></a>
						<ul>
							<li class="dropdown indrop"><a href="#">Plant by types &nbsp&nbsp<i class="arrow right"></i></a>			
								<ul>
									<li><a href="#">Succulents</a></li>
									<li><a href="#">Cactus</a></li>
									<li><a href="#">Bonsai</a></li>
									<li><a href="#">Shrubs</a></li>
									<li><a href="#">Orchids</a></li>
									<li><a href="#">Vines & Creepers</a></li>
								</ul>
							</li>
							<li class="dropdown indrop"><a href="#">Plants by Use &nbsp&nbsp<i class="arrow right"></i></a>
								<ul>
									<li><a href="#">Air Purifier</a></li>
									<li><a href="#">Low Maintenance</a></li>
									<li><a href="#">Indoor</a></li>
									<li><a href="#">Office Desk</a></li>
									<li><a href="#">Balcony</a></li>
									<li><a href="#">Hanging</a></li>
									<li><a href="#">Vastu plants</a></li>
								</ul> 
							</li>
						</ul>
					</li>
					<li><a href="consult/consult.php">Consultant</a></li>
					<li><a href="#contactnumber">Contact</a></li>
					<li><a href="./loginform.php">Login</a></li>
					<li><a href="allproducts.php"><i class="fa fa-shopping-cart fa-lg" style="color:white"></i><span class="cartcircle"> 0 </span></a></li>
				</ul>
			</div>
		</div>
	</header>
	<section class="sec-imgslider">
		<div class="slider">
				<img src="slider1.jpg" class="active sli-img">
				<img src="slider2.jpg" class="sli-img">
				<img src="slider3.jpg" class="sli-img">
		</div>
		<div class="animtxt">
			<h3><span class="quoteslog"></span></h3>
			<span class="offerspan">upto <span class="percen">65% off</span></span><br><br>
			<a href="allproducts.php" target="blank" class="shpnow">shop now</a>
		</div>
		<!--<div class="content">
            <span>upto 75% off</span>
            <h3>plant big sale special offer</h3>
            <a href="#" class="btn">shop now</a>
        </div>
            <div class="content">
            <span>upto 45% off</span>
            <h3>plant make people happy</h3>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="content">
            <span>upto 65% off</span>
            <h3>decorate your home now</h3>
            <a href="#" class="btn">shop now</a>
        </div>-->
	</section>

	<br><br><br>
	<!-- category section starts  -->

	<section class="category" id="category">
	<h1 class="heading"> SHOP BY CATEGORY </h1>
	<div class="box-container">
		<div class="box">
			<img src="cat1.jpg" alt="">
			<div class="content">
				<h3>bonsai</h3>
				<a href="allproducts.php" target="blank" class="shpnow">shop now</a>
			</div>
		</div>
		<div class="box">
			<img src="cat2.jpg" alt="">
			<div class="content">
				<h3>plants for house</h3>
				<a href="allproducts.php" target="blank" class="shpnow">shop now</a>
			</div>
		</div>
		<div class="box">
			<img src="cat3.jpg" alt="">
			<div class="content">
				<h3>plants for office</h3>
				<a href="allproducts.php" target="blank" class="shpnow">shop now</a>
			</div>
		</div>
		<div class="box">
			<img src="cat4.jpg" alt="">
			<div class="content">
				<h3>gift plants</h3>
				<a href="allproducts.php" target="blank" class="shpnow">shop now</a>
			</div>
		</div>
	</div>
	</section>
	
	<!-- newarrivals -->
	<br><br>
    
    <section class="product" id="product">

    <h1 class="heading"> NEW ARRIVALS </h1>

    <div class="box-container">
    <div class="pl1">
       <div class="box">
			<span class="discount">-10%</span>
			<img src="products/p1.webp" alt="">
			<h3>Swiss cheese plant</h3>
			<!-- <div class="quantity">
				<span> quantity : </span>
				<input type="number" min="1" max="100" value="1">
			</div> -->
			<div class="price">₹999 <span>₹1150</span></div>
			<a href="allproducts.php" class="shpnow">check now</a>
    </div>

    <div class="box">
        <span class="discount">-25%</span>
        <img src="products/p2.webp" alt="">
        <h3>Anthurium Red Plant</h3>
        <!-- <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div> -->
        <div class="price">$1189 <span>₹1296</span></div>
        <a href="allproducts.php" class="shpnow">check now</a>
    </div>

    <div class="box">
        <span class="discount">-7%</span>
        <img src="products/p3.webp" alt="">
        <h3>Satin pothos Argyraeus</h3>
        <!-- <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div> -->
        <div class="price">₹399 <span>₹499</span></div>
        <a href="allproducts.php" class="shpnow">check now</a>
    </div>
        </div>
    <br><br>
    
    <div class="pl2">
    <div class="box">
        <span class="discount">-4%</span>
        <img src="products/p4.webp" alt="">
        <h3>Spider Plant</h3> 
        <!-- <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div> -->
        <div class="price">₹499<span>₹699</span></div>
        <a href="allproducts.php" class="shpnow">check now</a>
    </div>

    <div class="box">
        <span class="discount">-13%</span>
        <img src="products/p5.webp" alt="">
        <h3>Calathea Prayer Plant</h3>
        <!-- <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div> -->
        <div class="price">₹599 <span>₹699</span></div>
        <a href="allproducts.php" class="shpnow">check now</a>
    </div>

    <div class="box">
        <span class="discount">-20%</span>
        <img src="products/p6.webp" alt="">
        <h3>Oxycardium Brasil</h3>
        <!-- <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div> -->
        <div class="price">₹999 <span>₹1199</span></div>
        <a href="allproducts.php" class="shpnow">check now</a>
    </div>
        </div>
</div>
</section>

	<div class="cookwrapper cookwrapper2">
		<h2>Sessions tracked</h2>
		<div class="cookcontent">
		  <h5>This website use sessions to track your activities for better experience on our website.</h5>
		  <div class="stmsg">
			  <!-- php for session -->
		  <?php
			
			//$_SESSION['email'] = "syedsalahuddin";
			
			$_SESSION['id'] = session_id();
			if (!isset($_SESSION['start_time']))
			{
				$str_time = time();
				$_SESSION['start_time'] = $str_time;
			}
			echo "<b>Welcome User, </b>";
			if(isset($_SESSION['visits'])){
			echo '<br>You have visited here <b>'.$_SESSION['visits'].'</b> times';}
			echo '<br><b>SESSION ID:</b> ' .$_SESSION['id'];
			//echo "<br>Last access Time: " .$_SESSION['start_time'];
			//lastaccesstime
			$unix_timestamp = $_SESSION['start_time'];
			$datetime = new DateTime("@$unix_timestamp");
			// Display GMT datetime
			//echo $datetime->format('d-m-Y H:i:s');
			$date_time_format = $datetime->format('Y-m-d H:i:s');
			$time_zone_from="UTC";
			$time_zone_to='Asia/Kolkata';
			$display_date = new DateTime($date_time_format, new DateTimeZone($time_zone_from));
			// Date time with specific timezone
			$display_date->setTimezone(new DateTimeZone($time_zone_to));
			echo "<br><b>CREATED TIME:</b> " .$display_date->format('d-m-Y H:i:s');
			//echo "<br>start time : ".$_SESSION['start_time'];
			//echo "<br><br>full format: ".date('l jS \of F Y h:i:s A')."<br>";
			date_default_timezone_set('Asia/Kolkata');
			echo "<br><b>LAST ACCESS TIME:</b> " .date(DATE_RFC2822). "<br>";
		?></div>
		  <div class="cookbuttons">
			<button class="item cookbutton2">OK</button>
			<a href="#" class="item">Learn more</a>
		  </div>
		</div>
	</div>

	<div class="cookwrapper cookwrapper1">
		<img class="logoimg" src="translogocook222222.png" alt="cooklogo">
		<div class="cookcontent">
		  <header>Cookies Content</header>
		  <p>This website use cookies to ensure you get the best experience on our website.</p>
		  <div class="cookbuttons">
			<button class="item cookbutton1">I understand</button>
			<a href="#" class="item">Learn more</a>
		  </div>
		</div>
	</div>
	
	<footer id="contactnumber">
	<div class="footer">
		<div class="cont_call">
        	<h3> <strong class="multi contactbor"> Contact us</strong><br>
            (+91) 9687867890/<br>
			<i class="fa fa-whatsapp fa-lg" style="color:white"></i> - (+91) 9687867890
            </h3>
        </div>
        <div class="cont">
        	<h3> <strong class="multi"> MYPAUDHA -</strong> 
			Find Your Dream Plants Here 
            </h3>
		</div>
	</footer>


	<script>
		//for cookie box hide
		const cookieBox1 = document.querySelector(".cookwrapper1"),
   		acceptBtn = cookieBox1.querySelector(".cookbutton1");
     	const cookieBox2 = document.querySelector(".cookwrapper2"),
   		okbtn = cookieBox2.querySelector(".cookbutton2");
		
		acceptBtn.onclick = ()=>{
        cookieBox1.classList.add("hide");}
		
		okbtn.onclick = ()=>{
        cookieBox2.classList.add("hide");}


		stickyElem = document.querySelector(".wrapper");
    	currStickyPos = stickyElem.getBoundingClientRect().top + window.pageYOffset;
    	window.onscroll = function() {
        if(window.pageYOffset > currStickyPos) {
            stickyElem.style.position = "fixed";
            stickyElem.style.top = "0px";
        } else {
            stickyElem.style.position = "relative";
            stickyElem.style.top = "initial";
        }
	    }
		
	</script>
</body>
</html>