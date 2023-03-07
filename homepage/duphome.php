<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Homepage</title>
	<!--<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">-->
	<link rel="stylesheet" type="text/css" href="duphomestyle.css">	
<!--	<script type="text/javascript" src="jquery-3.6.0.js"></script>
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
					$(this).find(".content").animate({bottom: "-5.5rem"});
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
		
</script>-->
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
					<li><a href="#">About</a></li>
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
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Consultant</a></li>
					<li><a href="#">Login/register</a></li>
                    <li><img src="carticonimg.png" alt="cartlogo" class="cartlogo"></li>
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
			<a href="#" target="blank" class="shpnow">shop now</a>
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
    <div class="catdivision">
        <h1 class="heading"> SHOP BY CATEGORY </h1>
        <div class="box-container">
            <div class="box">
                <img src="cat1.jpg" alt="">
                <div class="content">
                    <h3>bonsai</h3>
                    <a href="#" target="blank" class="shpnow">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="cat2.jpg" alt="">
                <div class="content">
                    <h3>plants for house</h3>
                    <a href="#" target="blank" class="shpnow">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="cat3.jpg" alt="">
                <div class="content">
                    <h3>plants for office</h3>
                    <a href="#" target="blank" class="shpnow">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="cat4.jpg" alt="">
                <div class="content">
                    <h3>gift plants</h3>
                    <a href="#" target="blank" class="shpnow">shop now</a>
                </div>
            </div>
        </div>
    <div>
	</section>

    <br><br>
    
    <section class="product" id="product">

    <h1 class="heading"> NEW ARRIVALS </h1>

    <div class="box-container">
    <div class="pl1">
       <div class="box">
        <span class="discount">-10%</span>
        <!-- <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div> -->
        <img src="products/p1.webp" alt="">
        <h3>latest plants</h3>
        <!--<div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>-->
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="shpnow">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-25%</span>
        <img src="products/p2.webp" alt="">
        <h3>latest plants</h3>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="shpnow">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-7%</span>
        <img src="products/p3.webp" alt="">
        <h3>latest plants</h3>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="shpnow">add to cart</a>
    </div>
        </div>
    <br><br>
    
    <div class="pl2">
    <div class="box">
        <span class="discount">-4%</span>
        
        <img src="products/p4.webp" alt="">
        <h3>latest plants</h3>
        
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="shpnow">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-13%</span>
        
        <img src="products/p5.webp" alt="">
        <h3>latest plants</h3>
        
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="shpnow">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-20%</span>
        
        <img src="products/p6.webp" alt="">
        <h3>latest plants</h3>
        
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="shpnow">add to cart</a>
    </div>
        </div>

</div>
</section>

	
	
	<script>
		
		
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