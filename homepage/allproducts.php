<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.27/jquery.autocomplete.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="allproducts.css?<?php echo time(); ?>">
</head>
<body>
<div class="cartstick"></div>
<header class="bannerimg">
    <div class="content">
        <nav>
            <div class="navigation" id="navigation">
                <div class="end-menu">
                    <ul class="menu">
                        <li><a href="homepaggephp.php">Home</a></li>
                        <li><a href="#product">products</a></li>
                        <li><a href="consult/consult.php">consult</a></li>
                        <li><a href="mycart.php" class="cartbox"><i class="fa fa-shopping-cart fa-lg" style="color:white"></i><span class="cartcircle" id="cartcircle"> 0 </span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="searchbar">
        <form>
            <legend>WHAT ARE YOU LOOKING FOR?</legend>
                <div class="inner-form">
                    <div class="input-field">
                        <input class="textbar" id="choices" type="text" placeholder="Type to search...">
                        <a href="#product" class="btn-search" type="button"><i class="fa fa-search fa-3x" style="color:rgb(117, 117, 117);"></i></a>
                    </div>
                </div>
                <div class="suggestion-wrap">
                    <span class="newplants"><a class="probtn" href="#product">New Arrivals</a></span>
                    <span class="succ"><a class="probtn" href="#product">succulents</a></span>
                    <span class="bonsai"><a class="probtn" href="#product">Bonsai</a></span>
                    <span class="indoor"><a class="probtn" href="#product">Air Purifier Indoor</a></span>
                </div>
        </form>
        </div>
    </div>
</header>

<!-- products block -->
   
    <section class="product" id="product"></section>

    <!-- invisible form -->
<form class="formsub" id="formsub" action="allproducts.php" method="post">
    <input type="text" name="product" id="pro_name">
    <input type="text" name="quantity" id="pro_quantity">
    <input type="text" name="price" id="pro_price">
    <input type="text" name="image" id="pro_image">
    <input type="submit" id="pro_submit">
</form>
<!-- footer -->
<div class="bottimg"><img src="proimages/bottombanner.png" alt="bannerlast"></div>
<footer class="bottborder"><div></div></footer>

<script>
    stickyElem = document.querySelector(".cartbox");
    stickyshape = document.querySelector(".cartstick");
    currStickyPos = stickyElem.getBoundingClientRect().top + window.pageYOffset;
    window.onscroll = function() {
       if(window.pageYOffset > currStickyPos) {
           stickyElem.style.position = "fixed";
           stickyElem.style.top = "32px";
           stickyElem.style.left = "95%";
           stickyshape.style.visibility="visible";
       } else {
           stickyElem.style.position = "relative";
           stickyElem.style.top = "initial";
           stickyElem.style.left = "initial";
           stickyshape.style.visibility="hidden";
       }
	}
</script>
<script>
    window.addEventListener('load', updatecart);
    function updatecart() {
        // Instantiate an xhr object
        var xhr = new XMLHttpRequest();
        // What to do when response is ready
        xhr.onreadystatechange = () => {
            if(xhr.readyState === 4) {
                if(xhr.status === 200) {
                    document.getElementById("cartcircle").innerHTML = xhr.responseText;
                } else {
                    console.log('Error Code: ' + xhr.status);
                    console.log('Error Message: ' + xhr.statusText);
                }
            }
        }
        xhr.open('GET', 'cartnumber.php');
        // Send the request
        xhr.send();
    }
</script>
<script>
    var pname=document.getElementById("pro_name");
    var pquantity=document.getElementById("pro_quantity");
    var pprice=document.getElementById("pro_price");
    var pfile=document.getElementById("pro_image");
    let form=document.getElementById("formsub");
    var pstr,pquan;
        $(document).ready(function(){
            function settingvals(){
                $(".box > a").click(function(){
                pname.value=$(this).parent().find('h3').text();
                //pstr for price string
                pstr=$(this).parent().find('div.price').clone().children().remove().end().text();
                //pquan for price quantity
                pquan=$(this).parent().find('div.quantity input.quan').val();
                pquantity.value=pquan+" X "+pstr.substring(1);
                pprice.value=pstr.substring(1)*pquan;
                pfile.value=$(this).parent().find('img').attr('src');
                form.submit();
            });
            }
            //newarrival
            $(".newplants").click(function(){$('#product').load("filters/newarrival.php",settingvals);});
            //function(responseTxt, statusTxt, jqXHR){
                //if(statusTxt == "success"){
                //    alert("new arrivals loaded successfully!");
                //    }
                //if(statusTxt == "error"){
                //    alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
                //    }
                //});
            //});

            //succulents
            $(".succ").click(function(){$('#product').load("filters/succulents.php",settingvals);});
            //function(responseTxt, statusTxt, jqXHR){
            //    if(statusTxt == "success"){
              //      alert("succulents loaded successfully!");
                //    }
                //if(statusTxt == "error"){
                    //alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
                    //}
                //});
            //});

            //bonsai
            $(".bonsai").click(function(){$('#product').load("filters/Bonsai.php",settingvals);});
            /*function(responseTxt, statusTxt, jqXHR){
                if(statusTxt == "success"){
                    alert("Bonsai loaded successfully!");
                    }
                if(statusTxt == "error"){
                    alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
                    }
                });
            });*/

            //indoor
            $(".indoor").click(function(){$('#product').load("filters/indoor.php",settingvals);});
            /*function(responseTxt, statusTxt, jqXHR){
                if(statusTxt == "success"){
                    alert("Air purifier loaded successfully!");
                    }
                if(statusTxt == "error"){
                    alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
                    }
                });
            });*/

            //search desk
            $(".btn-search").click(function(){
                var searchtxt=document.getElementById("choices");
              if(searchtxt.value=="Desk"){
                $('#product').load("filters/desk.php",settingvals);
             }
            });
                /*function(responseTxt, statusTxt, jqXHR){
                if(statusTxt == "success"){
                    alert("desk founded successfully!");
                    }
                if(statusTxt == "error"){
                    alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
                    }
                });
            }
            });*/
            //suggestions
            var arrayReturn=[];
            $.ajax({
                url:"suggestions.txt",
                async:true,
                dataType:'json',
                success: function (data){
                    for(var i=0,len=data.length;i<len;i++){
                        var id= (data[i].id).toString();
                        arrayReturn.push({'value':data[i].text,'data':id});
                    }
                    console.log(arrayReturn);
                    loadsuggestions(arrayReturn);
                }
            });
            function loadsuggestions(options){
                $('#choices').autocomplete({
                    lookup: options
                });
            }
            
        });
    </script>
</body>
<!-- php for saving cart data -->
<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="mypaudhadb";
	//connecting
	$con= mysqli_connect($serverName,$userName,$password,$dbName);
	if(!$con){
		echo "Failed to connect!";
		exit();
	}
	else{
        if(isset($_POST['product']) && isset($_POST['quantity']) && isset($_POST['price']) && isset($_POST['image'])){
        $pname=$_POST['product'];
        $pquantity=$_POST['quantity'];
        $pprice=$_POST['price'];
        $pimg=$_POST['image'];

        //checking already exists
        $select = "SELECT * FROM cartdetails WHERE proname = '".$pname."'";
        $check=mysqli_query($con,$select);

        if(mysqli_num_rows($check)) {
            //if already exist there check and update quantity
            $qselect = "SELECT * FROM cartdetails WHERE proname = '".$pname."' AND proquantity = '".$pquantity."'";
            $qcheck=mysqli_query($con,$qselect);
            if(mysqli_num_rows($qcheck)){
                echo '<script>alert("Already you have added this to cart-with same quantity")</script>';
            }
            else{
                $quanselect = "UPDATE cartdetails SET proquantity='".$pquantity."',proprice='".$pprice."' WHERE proname = '".$pname."'";
                $quancheck = mysqli_query($con,$quanselect);
                echo '<script>alert("Cart Updated")</script>';
            }    
        }
        else{
        //insert values into table
		$sql="INSERT INTO cartdetails (proname,proquantity,proprice,proimage) VALUES ('".$pname."','".$pquantity."','".$pprice."','".$pimg."')";
		$res=mysqli_query($con,$sql);
		if($res){
            echo '<script>alert("Added to cart..<br>")</script>';
		}
	    else{
            echo '<script>alert("Sorry, Something went wrong our side. Please try again later!")</script>';
            exit();
		}           
      }
    }

	}
	$con->close();
?>

</html>
