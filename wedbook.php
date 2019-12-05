<?php

$con = mysqli_connect('localhost','root','','project');

if(isset($_POST['book2']))
{
$eventtype = $_POST['eventtype'];
$datefrom = $_POST['datefrom'];
$tilldate = $_POST['tilldate'];
$budget2 = $_POST['budget2'];
//$functions = $_POST['functions'];
$guests = $_POST['guests'];
$location = $_POST['location'];
$hallsize = $_POST['hallsize'];
$theme = $_POST['theme'];
//$foodtype = $_POST['tech'];
$wname = $_POST['wname'];
$username2 = $_POST['username2'];
$emailid2 = $_POST['emailid2'];
$contact2 = $_POST['contact2'];
$checkbox1=$_POST['techno'];  
$chk=""; 
 
$checkbox2=$_POST['tech'];
$ch="";
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
foreach($checkbox2 as $chk2)  
   {  
      $ch .= $chk2.",";  
   }  
   
$query = "INSERT INTO wedbook(eventtype,datefrom,tilldate,budget2,functions,guests,location,hallsize,theme,foodtype,wname,username2,emailid2,contact2) values('$eventtype','$datefrom','$tilldate','$budget2','$chk','$guests','$location','$hallsize','$theme','$ch','$wname','$username2','$emailid2','$contact2')";
$result = mysqli_query($con,$query);
if ($result)
{
	echo "<script type='text/javascript'>alert('Your event has been successfully booked!!!')</script>";
}
else
{
	echo "<script type='text/javascript'>alert('Connection Failed!!')</script>";
}}

else{
	echo " ";
}
?>






<!DOCTYPE html>

<head>

 <title>Glitzz Events</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel = "icon" href ="logo.png"  type = "image/x-icon"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
 <link type="text/css" rel="stylesheet" href="book2.css" >
 <style>
 
.karthi button{
	font-size: 22px;
 background-color: #DC143C;
  border: none;
  color: white;
  padding: 25px 45px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 16px;
  margin: 28px 115px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  width: 300px;
}

.karthi button:hover {
  background-color: #8B008B; 
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.cp-text
{
 font-size: 18px;
 float: left;
 color: rgb(255,255,255);
 text-shadow: 0 1px rgba(255, 255, 255, 0.1);
 opacity: 0.6;
 margin-left:-710px;
 margin-top: 70px;
 
}

</style>



</head>

<body>

<div class="container1">
    
 <header>
   
 <div class="menubar">

 <div class="logo">

	 <a href="finalh.php">
	<img src="logo.png">
	</a>
	 
	</div>
   
	 <ul>
      
	<li><a href="finalh.php">HOME</a></li>
      
	<li><a href="finalh.php#about-us">ABOUT US</a></li>
      
	<li><a href="finalh.php#gallery">GALLERY</a></li>
     
	 <li><a href="finalh.php#events">SERVICES</a>
        
	<ul>
         
	<li><a href="birthf.php">BIRTHDAY  </a></li>
        
	 <li><a href="wedding.php">WEDDING </a>
    
	     
	</li>
         
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


<div class="login-wrap">
	<div class="login-form">
	    <form method="post" action="wedbook.php">
		<img src="bg2.jpg" alt="Wedding Event">
		<div class="head">
		<h1>Wedding Event Booking</h1>
		<hr>
		<h2>Event Type</h2>
		<select id="select" name="eventtype">
  		<option value="Destination Wedding">Destination Wedding</option>
 		 <option value="Traditional Wedding">Traditional Wedding</option>
  		<option value="Wedding Anniversary">Wedding Anniversary</option>
		</select>

		<label for="datefrom">Date From</label>
		<input type="date" name="datefrom" id="datefrom">

		<label for="tilldate">Till Date</label>
		<input type="date" name="tilldate" id="tilldate">
		
		<h2>Your Budget</h2>
		<select id="select" name="budget2">
  		<option value="2-3 Lakhs">2-3 Lakhs</option>
 		 <option value="3-4 Lakhs">3-4 Lakhs</option>
  		<option value="4-5 Lakhs">4-5 Lakhs</option>
  		<option value="5-6 Lakhs">5-6 Lakhs</option>
		<option value="Above 6 Lakhs">Above 6 Lakhs</option>
		</select>

		<h2>Functions</h2>
		<label class="container" name="chk">Wedding
	  	<input type="checkbox" value="Wedding" name="techno[]">
  		<span class="checkmark"></span>
		</label>

		<label class="container" name="chk">Ring Ceremony
  		<input type="checkbox" value="Ring Ceremony" name="techno[]">
  		<span class="checkmark"></span>
		</label>

		<label class="container" name="chk">Mehendi	
 		 <input type="checkbox" value="Mehendi" name="techno[]">
  		<span class="checkmark"></span>
		</label>

		<label class="container" name="chk">Cocktail Party
 		 <input type="checkbox" value="Coctail Party" name="techno[]">
 		 <span class="checkmark"></span>
		</label>

		<label class="container" name="chk">All of the Above
 		 <input type="checkbox" value="All of the Above" name="techno[]">
 		 <span class="checkmark"></span>
		</label>

		<h2>Number of Guests</h2>
		<select id="select" name="guests">
  		<option value="1">Choose an option</option>
 		 <option value="Upto 100">Upto 100</option>
  		<option value="100-200">100-200</option>
  		<option value="200-300">200-300</option>
		<option value="300-400">300-400</option>
		<option value="500+">500+</option>
		</select>

		<h2>Hall Specification</h2>
		<p>Give every specification regarding hall.</p>
		<h3>Desired Location</h3>
		<select id="select" name="location">
  		<option value="Down Floor">Down Floor</option>
 		 <option value="Up Floor">Up Floor</option>
		<option value="Full Hall">Full Hall</option>
		</select>
		<h3>Hall Size</h3>
		<select id="select" name="hallsize">
  		<option value="100 meters">100 meters</option>
 		 <option value="200 meters">200 meters</option>
		<option value="300 meters">300 meters</option>
		<option value="Larger Size">Larger Size</option>
		</select>

		<h2>Catering/Decoration</h2>
		<p>Give deatils about catering and decoration.</p>
		<h3>Decoration Theme</h3>
		  <select id="select" name="theme">
  		<option value="Pearl (Basic)">Pearl (Basic)</option>
 		 <option value="Ruby (Sound Effects)">Ruby (Sound Effects)</option>
		<option value="Platinum (Sound and Lightning Effects)">Platinum (Sound and Lightning Effects)</option>
		<option value="My Theme">My Theme</option>
		</select>
		<h3>Food Type</h3>
		<label class="container" name="ch">Indian
	  	<input type="checkbox" value="Indian" name="tech[]">
  		<span class="checkmark"></span>
		</label>

		<label class="container" name="ch">Chinese
  		<input type="checkbox" value="Chinese" name="tech[]">
  		<span class="checkmark"></span>
		</label>

		<label class="container" name="ch">Thai	
 		 <input type="checkbox" value="Thai" name="tech[]">
  		<span class="checkmark"></span>
		</label>

		<label class="container" name="ch">Italian
 		 <input type="checkbox" value="Italian" name="tech[]">
 		 <span class="checkmark"></span>
		</label>

		<label class="container" name="ch">All of the Above
 		 <input type="checkbox" value="All of the Above" name="tech[]">
 		 <span class="checkmark"></span>
		</label>
		<br>
		<hr>
		<h2>Contact Details</h2>
		<label for="name">Name</label>
 		 <input type="text" id="name" name="wname">
  		<label for="username">UserName</label>
 		 <input type="text" id="username" name="username2">
		<label for="email-id">Email ID</label>
 		 <input type="email" id="email-id" name="emailid2">
		<label for="contact">Contact Number</label>
 		 <input type="text" id="contact" name="contact2">
		<br><br><br>
		<div class='karthi'>
		<button type="submit" name="book2">Book Event Now!!!</button>
		<br><br><br>
		</div>
		
		
	</div>	
	</form>
		
	</div>
</div>
	



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
	  
	<li><a href="D:\IP Project\loginpg.php">SIGN IN</a></li>
	
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
	
	
	</footer>
	
	</div>
	

</body>

 </html>