<!DOCTYPE html>
<head>
 <title>Glitzz Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel = "icon" href ="logo.png"  type = "image/x-icon"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="final.css">
 <link rel="stylesheet" href="galpop.css">
<style>
/*button*/
button{
	padding:10px;
	border: none;
	background:#000;
	font-size:30px;
	color:gray;
	position: absolute;
	top:12%;
	cursor:pointer;
	margin-top:0px;
}
.next{
	border-radius: 10px 0px 0px 10px;
	margin-left:1225px;
}

.pre{
	border-radius: 0px 10px 10px 0px;
}

.pre:hover, .next:hover {
  background-color: rgba(105,105,105,0.65);
  color: black;
}

.button1{
	     background-color: #800080;
         border: none;
         color: white;
         text-align: center;
         text-decoration: none;
         display: inline-block;
		 padding: 20px 34px;
		 border-radius:6px;
         cursor: pointer;
	font-size:27px;
	margin-left:640px;
}
p{
	font-size:30px;
	margin-left:60px;
}

article h2 {
	margin-top:40px;
	font-style: normal;
       	color:#000;
	text-align:center;
	font-size:45px;
	font-family:Avanta Garde;
	font-weight:normal;	
	margin-bottom:5px;
}

article h3 {
	margin-top:580px;
	font-style: normal;
       	color:#000;
	text-align:center;
	font-size:45px;
	font-family:Avanta Garde;
	font-weight:normal;	
}

.links ,.link,.link1,.link2{
	margin-top: 0px;

}

.links div , .link div, .link1 div,.link2 div{
	margin:25px;
	width:455px;
	height:455px;
	margin-top:55px;
    	background-color:#f8f8ff;
	float:right;
	 border-radius: 6px;
	display:inline-block;
}

.links div h3 , .link di4 h3,.link1 div h3,.link2 div h3{
	font-size:32px;
	color:#fff;
	background:rgba(0,0,0,0.4);
	margin-top:285px;
	padding:55px;
	text-align:center;
}

.cp-text
{
 font-size: 18px;
 float: left;
 color: rgb(255,255,255);
 text-shadow: 0 1px rgba(255, 255, 255, 0.1);
 opacity: 0.6;
 margin-left:-710px;
 margin-top: 80px;
 
}

/*gallery*/
.no-touch{
	width:1500px;

}
.wrap {
      overflow: hidden;
      margin:31px;
      margin-left:60px;
   
    }
    .box {
      margin-top:20px;
      float: left;
      position: relative;
      padding-bottom: 20%;
      height: 10px;
      width: 350px;
    }


</style>
</head>
<body>
  <div class="container">
   <header>
    <div class="menubar">
	 <div class="logo">
	 <a href="finalh.php"><img src="logo.png"></a>
	 </div>
     <ul>
      <li><a href="#">HOME</a></li>		
      <li><a href="#about-us">ABOUT US</a></li>
      <li><a href="#gallery">GALLERY</a></li>
      <li><a href="#events">SERVICES</a>
        <ul>
         <li><a href="birthf.php">BIRTHDAY  </a></li>
         <li><a href="wedding.php">WEDDING </a>
          
	     </li>
         <li><a href="events.php">OTHER EVENTS</a></li>
        </ul>
	   </li>
      <li><a href="contact1.php">CONTACT</a></li>
	  <li>
	  <?php
                          session_start();
							global $con;
							$cnnt = 0;
							
                            if(!isset($_SESSION['username']))
                            
                            {
								
                                echo "<a href='finalh.php?in=true'>SIGN IN</a>";
                                if(isset($_GET['in'])){
                                    echo "<script> window.location.assign('signin.php')</script>";	
                                }
                            }
                            else{
								
                                echo "<a href='finalh.php?out=true'>SIGN OUT</a>";
                               if(isset($_GET['out']))
                                {
                                    echo "<script> window.location.assign('signin.php')</script>";
                                    session_unset();
                                }

                            }
                    ?>
	  
	  
	  </li>
     </ul>
    </div>
	
	<section>
	<div id="slider">
	 <div id="box">
	  <img src="bg2.jpg">
	 </div>
	 
	 	 <!--buttons-->
	 <button class="pre" onclick="preImg()"><</button>		 
    </div>
	

	<script type="text/javascript">
	var slider_image = document.getElementById('box');
	
	var image = ['e12','bg42','bg3','bg2','bg1'];
	
	var i = image.length;
	
	function nextImg(){
	 if(i<image.length)
	 {
	  i= i+1;
	 }
	 else
	 {
	  i= 1;
	 }
	 
	 slider_image.innerHTML="<img src="+image[i-1]+".jpg>";
	}
	
	function preImg(){
	 if(i<image.length+1 && i>1)
	 {
	  i= i-1;
	 }
	 else
	 {
	  i= image.length;
	 }
	 
	 slider_image.innerHTML="<img src="+image[i-1]+".jpg>";
	}
	
	</script>
	</header>
    <article>
    <section class="about">
     <a name="about-us"></a>
	 <h1>ABOUT US</h1>
	<p><b>Taking the idea from concept to reality requires a unique combination: creativity,
a desire for excellence and immaculate organizational skills.</b><br><br>
The success of Glitzz Events is a result of the team working tirelessly to ensure that every component of the event unravels exactly as planned. A factor that unites each member of the team is a ‘passion for experience’ - a steadfast commitment to ensuring that every event is an experience, a memory that will stay in the mind of those present long after they have left the venue. Glitzz Events was founded in 2012; with a combined experience of 100+ years in the field, the founding team noticed that there was a clear gap in the industry for a professional and reliable innovation-driven event management company.
	</p>
	</section>
	</article>
	<article>
	<a name="events"></a>
	<h2>OUR SERVICES</h2>
	<section class="links">
	<a href="events.php">
	<div class="concerts">
	 <h3>OTHER EVENTS</h3>
	</div>
	</a>
	<section class="links">
	<a href="wedding.php">
	<div class="wedding">
	 <h3>WEDDING</h3>
	</div>
	</a>
	<a href="birthf.php">
	<div class="birthday">
	 <h3>BIRTHDAY</h3>
	</div>
	</a>
	</section>
	</article>
	
	<article>
	<a name="gallery"></a>
	<h3>GALLERY</h3>
	<section class="no-touch">
  	<div class="wrap">
    	
	<div class="box">
      	<div class="boxInner">
        	<img src="gal1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor"/>
        <div class="titleBox">Birthday Event 1</div>
      </div>
    </div>
    
    <div class="box">
      <div class="boxInner">
        <img src="gal2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor" />
        <div class="titleBox">Birthday Event 2</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="gal3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor" />
        <div class="titleBox">Wedding Event 1</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="gal4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor"/>
        <div class="titleBox">Wedding Event 2</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="o2.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor"/>
        <div class="titleBox">Wedding Event 2</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="gal6.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor"/>
        <div class="titleBox">Music Concert 1</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="gal7.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor"/>
        <div class="titleBox">Music Concert 2</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="gal9.png" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor"/>
        <div class="titleBox">Corporate Conference 1</div>
      </div>
    </div>
	<div class="box">
      <div class="boxInner">
        <img src="e1.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor" />
        <div class="titleBox">Event 1</div>
      </div>
    </div>
	<div class="box">
      <div class="boxInner">
        <img src="e5.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor"/>
        <div class="titleBox">Event 2</div>
      </div>
    </div>
	<div class="box">
      <div class="boxInner">
        <img src="e3.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor"/>
        <div class="titleBox">Event 3</div>
      </div>
    </div>
	<div class="box">
      <div class="boxInner">
        <img src="e2.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor"/>
        <div class="titleBox">Event 4</div>
      </div>
    </div>
  </div>

<div id="myModal" class="modal">
  	<span class="close cursor" onclick="closeModal()">&times;</span>
  	<div class="modal-content">
	
	<div class="mySlides" style="display: none;">
      	<div class="numbertext">1 / 12</div>
      	<img src="gal1.jpg" style="width:100%">
    	</div>

	<div class="mySlides" style="display: none;">
      	<div class="numbertext">2 / 12</div>
     	 <img src="gal2.jpg" style="width:100%">
   	 </div>

    	<div class="mySlides" style="display: block;">
      	<div class="numbertext">3 / 12</div>
     	 <img src="gal3.jpg" style="width:100%">
   	 </div>
    
   	 <div class="mySlides" style="display: none;">
      	<div class="numbertext">4 / 12</div>
      	<img src="gal4.jpg" style="width:100%">
    	</div>

	<div class="mySlides" style="display: block;">
      	<div class="numbertext">5 / 12</div>
      	<img src="o2.jpg" style="width:100%">
    	</div>

	<div class="mySlides" style="display: none;">
      	<div class="numbertext">6 / 12</div>
      	<img src="gal6.jpg" style="width:100%">
    	</div>

	<div class="mySlides" style="display: block;"> 
      	<div class="numbertext">7 / 12</div>
      	<img src="gal7.jpg" style="width:100%">
    	</div>

	<div class="mySlides" style="display: none;">
      	<div class="numbertext">8 / 12</div>
      	<img src="gal9.png" style="width:100%">
    	</div>

	<div class="mySlides" style="display: none;">
      	<div class="numbertext">9 / 12</div>
      	<img src="e1.jpg" style="width:100%">
    	</div>

	<div class="mySlides" style="display: none;">
      	<div class="numbertext">10 / 12</div>
      	<img src="e5.jpg" style="width:100%">
    	</div>

	<div class="mySlides" style="display: none;">
      	<div class="numbertext">11 / 12</div>
      	<img src="e3.jpg" style="width:100%">
    	</div>

	<div class="mySlides" style="display: none;">
      	<div class="numbertext">12 / 12</div>
      	<img src="e2.jpg" style="width:100%">
    	</div>

	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    	<a class="next" onclick="plusSlides(1)">&#10095;</a>

	<div class="caption-container">
  	<p id="caption"></p>
   	 </div>

	<div class="column">
    	  <img class="demo cursor" src="gal1.jpg" style="width:100%" 	onclick="currentSlide(1)" alt="Birthday Event 1">
   	 </div>

	<div class="column">
    	  <img class="demo cursor" src="gal2.jpg" style="width:100%" 	onclick="currentSlide(2)" alt="Birthday Event 2">
   	 </div>

<div class="column">
    	  <img class="demo cursor" src="gal3.jpg" style="width:100%" 	onclick="currentSlide(3)" alt="Wedding Event 1">
   	 </div>

	<div class="column">
    	  <img class="demo cursor" src="gal4.jpg" style="width:100%" 	onclick="currentSlide(4)" alt="Wedding Event 2">
   	 </div>

<div class="column">
    	  <img class="demo cursor" src="o2.jpg" style="width:100%" 	onclick="currentSlide(5)" alt="Wedding Event 2">
   	 </div>

	<div class="column">
    	  <img class="demo cursor" src="gal6.jpg" style="width:100%" 	onclick="currentSlide(6)" alt="Music Concert 1">
   	 </div>

<div class="column">
    	  <img class="demo cursor" src="gal7.jpg" style="width:100%" 	onclick="currentSlide(7)" alt="Music Concert 2">
   	 </div>

	<div class="column">
    	  <img class="demo cursor" src="gal9.jpg" style="width:100%" 	onclick="currentSlide(8)" alt="Corporate Conference 1">
   	 </div>

<div class="column">
    	  <img class="demo cursor" src="e1.jpg" style="width:100%" 	onclick="currentSlide(9)" alt="Event 1">
   	 </div>

	<div class="column">
    	  <img class="demo cursor" src="e5.jpg" style="width:100%" 	onclick="currentSlide(10)" alt="Event 2">
   	 </div>

<div class="column">
    	  <img class="demo cursor" src="e3.jpg" style="width:100%" 	onclick="currentSlide(11)" alt="Event 3">
   	 </div>

	<div class="column">
    	  <img class="demo cursor" src="e2.jpg" style="width:100%" 	onclick="currentSlide(12)" alt="Event 4">
   	 </div>


	</div>
	</div>


</section>
	</article>

	<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
 <p>Check Your Booking History Here:</p
 <!--a href="bookhistory.php" class="button1"></a-->	
	<!--button class="b1" type="submit" name="bk1" onclick="window.location.href='bookhistory.php'">Booking History</button-->
	<?php
							global $con;
							global $cnnt;
                            if(!isset($_SESSION['username']))
                            
                            {
                                echo "<a href='finalh.php?in=true' class='button1'>Booking History</a>";
                                if(isset($_GET['in'])){
                                    echo "<script type='text/javascript'> alert('Please login!!!') </script>";
									echo "<script  type='text/javascript'> window.location.assign('signin.php') </script>";									
                                }
                            }
                            else{
                                echo "<a href='bookhistory.php?in=true' class='button1'>Booking History</a>";
                               if(isset($_GET['out']))
                                {
                                    echo "<script  type='text/javascript'> window.location.assign('bookhistory.php')</script>";
                                }
                            }
                    ?>

	
	<footer>
	<h5>Glitzz Events</h5>
	<div class="flogo">
	<img src="logo.png">
	</div>
    <div class='v1'></div>
	<div class="add">
	<h6>Glitzz events ltd<br>Link road<br>Mumbai</h6>
	</div>
	<div class='v2'></div>
	<div class="cont">
	<h6>Contact Us<br>Email: glitzzevents@gmail.com<br>Mob no:(212) 555-2368</h6>
    </div>
	<ul class="foot">
      <li><a href="finalh.php">HOME</a></li>
      <li><a href="finalh.php#events">SERVICES</a></li>
	  <li><a href="contact1.php">CONTACT</a></li>
	  <li><a href="signin.php">SIGN IN</a></li>
	</ul>
	<div class="fw">
		<h6>Follow Us</h6>
	</div>
	<a href="#" class="fa fa-facebook"></a>
    	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-instagram"></a>
	<div class="cp-text">
    	© Copyright 2019 Glitzz Events. All rights reserved.
	</div>
	<!--<div class="footer-sm">
	<img src="D:\IP Project\facebook.png">
	<img src="D:\IP Project\insta.png">
	<img src="D:\IP Project\twitter.png">-->
	
	</footer>
	</div>
	
 </body>
 </html>