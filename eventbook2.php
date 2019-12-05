<?php

$con = mysqli_connect('localhost','root','','project');

if(isset($_POST['book3']))
{
$eventtype = $_POST['eventtype'];
$eventdate = $_POST['eventdate'];
$budget1 = $_POST['budget1'];
//$tilldate = $_POST['tilldate'];
//$functions = $_POST['functions'];
$eventvenue = $_POST['eventvenue'];
$guests3 = $_POST['guests3'];
//$location = $_POST['location'];
//$hallsize = $_POST['hallsize'];
$theme1 = $_POST['theme1'];
//$foodtype = $_POST['tech'];
$ename = $_POST['ename'];
$username3 = $_POST['username3'];
$emailid3 = $_POST['emailid3'];
$contact3 = $_POST['contact3'];
$checkbox3=$_POST['tec'];  
$ch1 =""; 
 
foreach($checkbox3 as $chk3)  
   {  
      $ch1 .= $chk3.",";  
   }  
   
$query = "INSERT INTO eventbook2(eventtype,eventdate,budget1,eventvenue,guests3,theme1,foodtype,ename,username3,emailid3,contact3) values('$eventtype','$eventdate','$budget1','$eventvenue','$guests3','$theme1','$ch1','$ename','$username3','$emailid3','$contact3')";
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

footer{
	margin-top:100px;
	height:338px;
	background-color:#000;
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
	    <form method="post" action="eventbook2.php">
		<img src="bk3.jpg" alt="Wedding Event">
		<div class="head">
		<h1>Corporate Events, Concerts And Award Nights Event Booking</h1>
		<hr>
		<h2>Event Type</h2>
		<select id="select" name="eventtype">
  		<option value="Corporate Events">Corporate Events</option>
 		 <option value="Concerts">Concerts</option>
  		<option value="Award Nights">Award Nights</option>
		</select>
		<label for="eventdate">Event Date</label>
		<input type="date" name="eventdate" id="eventdate">
		
		<h2>Your Budget</h2>
		<select id="select" name="budget1">
  		<option value="10000-20000">10000-20000</option>
 		 <option value="20000-30000">20000-30000</option>
  		<option value="30000-40000">30000-40000</option>
  		<option value="40000-50000">40000-50000</option>
		<option value="Above 50000">Above 50000</option>
		</select>

		<h2>Event Venue</h2>
		<select id="select" name="eventvenue">
  		<option value="University Campus">University Campus</option>
 		 <option value="Hotels">Hotels</option>
  		<option value="Independent Halls">Independent Halls</option>
		<option value="Concert Hall">Concert Hall</option>
		<option value="Stadium">Stadium</option>
		</select>

		<h2>Number of Guests</h2>
		<select id="select" name="guests3">
  		<option value="Choose an option">Choose an option</option>
 		 <option value="Upto 100">Upto 100</option>
  		<option value="100-200">100-200</option>
		<option value="200-300">200-300</option>
		<option value="300-400">300-400</option>
		<option value="400+">400+</option>
		</select>
	
		<h2>Catering/Decoration</h2>
		<p>Give deatils about catering and decoration.</p>
		<h3>Decoration Theme</h3>
		  <select id="select" name="theme1">
  		<option value="Pearl (Basic)">Pearl (Basic)</option>
 		 <option value="Golden Theme">Golden Theme</option>
		<option value="Platinum">Platinum (Sound and Lightning Effects)</option>
		<option value="My Theme">My Theme</option>
		<option value="Classic Theme">Classic Theme</option>	
		<option value="Business Meeting">Business Meeting (No Theme) </option>
		</select>
		<h3>Food Type</h3>
		<label class="container" name"ch1">Indian
	  	<input type="checkbox" value="Indian" name="tec[]">
  		<span class="checkmark"></span>
		</label>

		<label class="container" name"ch1">Chinese
  		<input type="checkbox"value="Chinese" name="tec[]">
  		<span class="checkmark"></span>
		</label>

		<label class="container" name"ch1">Thai	
 		 <input type="checkbox" value="Thai" name="tec[]">
  		<span class="checkmark"></span>
		</label>

		<label class="container" name"ch1">Italian
 		 <input type="checkbox" value="Italian" name="tec[]">
 		 <span class="checkmark"></span>
		</label>

		<label class="container" name"ch1">All of the Above
 		 <input type="checkbox" value="All of the Above" name="tec[]">
 		 <span class="checkmark"></span>
		</label>
		<br>
		<hr>
		<h2>Contact Details</h2>
		<label for="name">Name</label>
 		 <input type="text" id="name" name="ename">
  		<label for="username">UserName</label>
 		 <input type="text" id="username" name="username3">
		<label for="email-id">Email ID</label>
 		 <input type="email" id="email-id" name="emailid3">
		<label for="contact">Contact Number</label>
 		 <input type="text" id="contact" name="contact3">
		<br><br><br>
		<div class='karthi'>
		<button type="submit" name="book3">Book Event Now!!!</button>
		</div>
		</div>
		<br><br><br>
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
	
	<!--<div class="footer-sm">
	
	<img src="D:\IP Project\facebook.png">
	
	<img src="D:\IP Project\insta.png">
	
	<img src="D:\IP Project\twitter.png">-->
	
	
	</footer>
	
	</div>
	

</body>

 </html>