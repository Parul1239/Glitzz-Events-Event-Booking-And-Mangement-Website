<?php

$con = mysqli_connect('localhost','root','','project');

if(isset($_POST['book1']))
{
$partytype = $_POST['partytype'];
$partydate = $_POST['partydate'];
$budget = $_POST['budget'];
$partyloc = $_POST['partyloc'];
$cake = $_POST['cake'];
$guests = $_POST['guests'];
$foodcourse = $_POST['foodcourse'];
$foodchoice = $_POST['foodchoice'];
$bname = $_POST['bname'];
$username1 = $_POST['username1'];
$emailid1 = $_POST['emailid1'];
$contact1 = $_POST['contact1'];

$query = "INSERT INTO birthdaybook(partytype,partydate,budget,partyloc,cake,guests,foodcourse,foodchoice,bname,username1,emailid1,contact1) values('$partytype','$partydate','$budget','$partyloc','$cake','$guests','$foodcourse','$foodchoice','$bname','$username1','$emailid1','$contact1')";
$result = mysqli_query($con,$query);
if ($result)
{
	echo "<script type='text/javascript'>alert('Your event has been successfully booked!!!')</script>";
}
else
{
	echo "<script type='text/javascript'>alert('Connection Failed!!')</script>";
}}
else
{
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
	
 .login-wrap{
	 margin-top:30px;
 }

  
  </style>
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
		<form method="post" action="birthdaybook.php">
		<img src="bk2.jpg" alt="Wedding Event">
		<div class="head">
		<h1>Birthday Party Event Booking</h1>
		<hr>
		<h2>Party According To</h2>
		<select id="select" name="partytype">
  		<option value="Kids below 6">Kids below 6</option>
 		 <option value="6-12">6-12</option>
  		<option value="12-17">12-17</option>
  		<option value="18-40">Adults Above 18-40</option>
		<option value="Adults Above 40">Adults Above 40</option>
		</select>

		<label for="partydate">Party Date</label>
		<input type="date" name="partydate" id="partydate">
		
		<h2>Your Budget</h2>
		<select id="select" name="budget">
  		<option value="10000-20000">10000-20000</option>
 		 <option value="20000-30000">20000-30000</option>
  		<option value="30000-40000">30000-40000</option>
  		<option value="40000-50000">40000-50000</option>
		<option value="Above 50000">Above 50000</option>
		</select>
		
		<h2>Your Party Location</h2>
		<select id="select" name="partyloc">
  		<option value="Restaurant">Restaurant</option>
 		 <option value="Pool">Pool</option>
  		<option value="Disco Bar">Disco Bar</option>
  		<option value="Home">Home</option>
		<option value="Others">Others</option>
		</select>
		<h2>Your Cake</h2>
		<select id="select" name="cake">
  		<option value="Chocolate">Chocolate</option>
 		 <option value="Pineapple">Pineapple</option>
  		<option value="Strawberry">Strawberry</option>
  		<option value="Black Current">Black Current</option>
		<option value="My Dream Cake">My Dream Cake</option>
		</select>	
		<br><br>
		<input type="text" id="name" name="guests" placeholder="Number of Guests">
		<h2>Food Course</h2>
		<select id="select" name="foodcourse">
  		<option value="3 Course Meal">3 Course Meal</option>
 		 <option value="5 Course Meal">5 Course Meal</option>
  		<option value="7 Course Meal">7 Course Meal</option>
		</select>	
		<h2>Food Choice</h2>
		<select id="select" name="foodchoice">
  		<option value="Indian">Indian</option>
 		 <option value="Continental">Continental</option>
  		<option value="Chinese">Chinese</option>
		<option value="Italian">Italian</option>
		</select><br><br><br>
		<hr>
		<h2>Contact Details</h2>
		<label for="name">Name</label>
 		 <input type="text" id="name" name="bname">
  		<label for="username">UserName</label>
 		 <input type="text" id="username" name="username1">
		<label for="email-id">Email ID</label>
 		 <input type="email" id="email-id" name="emailid1">
		<label for="contact">Contact Number</label>
 		 <input type="text" id="contact" name="contact1">
		<br><br><br>
		<div class='karthi'>
		<button type="submit" name="book1">Book Event Now!!!</button>
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