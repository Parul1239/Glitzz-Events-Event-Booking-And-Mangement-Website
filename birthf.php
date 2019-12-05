<!DOCTYPE html>
<head>
 <title>Glitzz Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel = "icon" href ="logo.png"  type = "image/x-icon"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style1.css">
 <style>
 .links ,.link,.link1,.link2{
	margin-top: 0px;

}

.links div , .link div, .link1 div,.link2 div{
	margin:25px;
	width:445px;
	height:455px;
	margin-top:55px;
    	background-color:#f8f8ff;
	float:right;
	 border-radius: 6px;
	display:inline-block;
}

.links div h3 , .link div h3,.link1 div h3,.link2 div h3{
	font-size:32px;
	color:#fff;
	background:rgba(0,0,0,0.4);
	margin-top:290px;
	padding:55px;
	text-align:center;
}

.a{
	background:url("b8.jpg");
	background-size:445px 465px;
	
	}

.b{
	background:url("b5.jpg");
	background-size:445px 455px;
	}

.c{
	background:url("b6.jpg");
	background-size:450px 460px;
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

/*birth*/
.itop{
	padding-top:1px;
}
.itop img{
	width:100%;
	height:530px;
	background:#000;
    	
	filter: alpha(opacity=50);
	
}
.itop p{
	  font-weight: bold;
      	  color: #000000;
	  font-family:Cambria;
	  padding-top:350px;
  	  padding-left:100px;
	  font-style: normal;
	  text-align:left;
	  font-size:55px;
	  opacity:0.9;

}

article h2 {
	margin-top:175px;
	font-style: normal;
    color:#000;
	text-align:center;
	font-size:45px;
	font-family:Avanta Garde;
	font-weight:normal;	
	margin-bottom:5px;
}

.modal3{
   background-color: rgba(0,0,0, .8);
   width:100%;
   height:1000px;
   z-index: 10;
   opacity: 100;
   visibility: hidden;
   top:650px;
   left:970px;
  position:absolute;
  }
  
  .modal3__content{
   width: 50%;
   height: 50%;
   background-color:#fff;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   padding: 2em;
   border-radius: 1em;
   opacity: 0;
   visibility: hidden;
   font-family: Candara

  }
  #modal3:target{
   opacity: 1;
   visibility: hidden;
  }
  #modal3:target .modal3__content{
   opacity: 1;
   visibility: visible;
  }
  .modal3__close{
   color: #000;
   font-size: 2em;
   position: absolute;
   top: .5em;
   right: 1em;
  }
  .modal3__heading{
   color: dodgerblue;
   margin-top:.5em;
   margin-bottom: 1em;
  }
  .modal3__paragraph{
   line-height: 1.5em;
  }
.moda3-open{
 display: inline-block;
}

.modal2{
   background-color: rgba(0,0,0, .8);
   width:100%;
   height:1000px;
   z-index: 10;
   opacity: 100;
   visibility: hidden;
   top:650px;
   left:480px;
  position:absolute;
  }


.button {
  background-color: #DC143C;
  border: none;
  color: white;
  padding: 25px 45px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 28px;
  border-radius: 18px;
  margin: 28px 640px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  width: 140px;
}

.button:hover {
  background-color: #8B008B; 
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
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
      <li><a href="finalh.php">HOME</a></li>
      <li><a href="finalh.php#about-us">ABOUT US</a></li>
      <li><a href="finalh.php#gallery">GALLERY</a></li>
      <li><a href="#">SERVICES</a>
        <ul>
         <li><a href="birthf.php">BIRTHDAY  </a></li>
         <li><a href="wedding.php">WEDDING </a></li>
         <li><a href="events.php">OTHER EVENTS</a></li>
        </ul>
	   </li>
      <li><a href="contact1.php">CONTACT</a></li>
	  <li><?php
                            session_start();
							global $con;
							$cnnt = 0;
							
                            if(!isset($_SESSION['username']))
                            
                            {
                                echo "<a href='finalh.php?in=true'>SIGN IN</a>";
                                if(isset($_GET['in'])){
                                    echo "<script> window.location.assign('signin.php')</script>";
									$cnnt =1;
                                }
                            }
                            else{
                                echo "<a href='finalh.php?out=true'>SIGN OUT</a>";
                               if(isset($_GET['out']))
                                {
                                    echo "<script> window.location.assign('signin.php')</script>";
									$cnnt = 0;
                                    session_unset();
                                }
                            }
                    ?></li>
     </ul>
    </div>
	</header>
	<article class="itop">
	<img src="bg54.jpg">
	    <p></p>

	</article>
	<article>
	<h2>Birthday Events</h2>
	<section class="link">
		<a href="#modal3" class="modal3-open">
	<div class="a">
	 <h3>Adults</h3>
	</div>
	</a>
	<div class="modal3" id="modal3">
    <div class="modal3__content">
      <a href="#a" class="modal3__close">&times;</a>
      <h2 class="modal3__heading">Adults</h2>
      <p class="modal3__paragraph">Birthdays are are one of the most memorable events for us. So make them precious, to be cherished and treasured. And what else than blasting parties can help them turn real great? Especially if the parties are laid with nice themes in sync with the true spirit. While kid's are blessed with themes galore, the adults are often left biting their nails for a theme that rhymes with the celebration of reaching a milestone age. Well, for many of us reaching those milestone ages, say  40, 50, or 75, and beyond.<br>
</p>
 </div>
 </div>

	<a href="#modal2" class="modal2-open">
	<div class="b">
	 <h3>Young Adults</h3>
	</div>
	</a>
	<div class="modal2" id="modal2">
    <div class="modal2__content">
      <a href="#b" class="modal2__close">&times;</a>
      <h2 class="modal2__heading">Young Adults</h2>
      <p class="modal2__paragraph">Main Event can host a celebration you'll never forget. Choose from awesome activities, chef-inspired catering, and full-bar service to make the birthday celebrations epic. Pick a location, give us some details on the size and type of birthday event you'd like, and one of our party planners will be in touch to help make it happen!<br>
</p>
 </div>
 </div>

	<a href="#modal1" class="modal1-open">
	<div class="c">
	 <h3>Kids</h3>
	</div>
	</a>
	<div class="modal1" id="modal1">
    <div class="modal1__content">
      <a href="#c" class="modal1__close">&times;</a>
      <h2 class="modal1__heading">Kids</h2>
      <p class="modal1__paragraph">For every parent, their child’s birthday is a special occasion. They may want to organize a fun, exciting birthday party that is likely to bring a big smile on their child’s face and create lasting memories.We Glitzz Event can host a wonderful theme based birthday party  which your child will cherish!!!<br>
</p>
 </div>
 </div>

	</section>
	</article>
	<?php
							global $con;
							global $cnnt;
                            if(!isset($_SESSION['username']))
                            
                            {
                                echo "<a href='finalh.php?in=true' class='button'>Book</a>";
                                if(isset($_GET['in'])){
                                    echo "<script type='text/javascript'> alert('Please login!!!') </script>";
									echo "<script  type='text/javascript'> window.location.assign('signin.php') </script>";									
                                }
                            }
                            else{
                                echo "<a href='birthdaybook.php?in=true' class='button'>Book</a>";
                               if(isset($_GET['out']))
                                {
                                    echo "<script  type='text/javascript'> window.location.assign('birthdaybook.php')</script>";
                                }
                            }
                    ?>


	<footer id="br1">
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
	  <li><a href="loginpg.php">SIGN IN</a></li>
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
	<a href="#"><img src="D:\IP Project\facebook.png"></a>
	</div>
	<div class="sm">
	<a href="#"><img src="D:\IP Project\insta.png"></a>
	</div>
	<div class="s"><a href="#"><img src="D:\IP Project\twitter.png"></a></div>-->
	</footer>
	</div>
</body>
</html>	
