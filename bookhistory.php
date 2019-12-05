
<!DOCTYPE html>

<head>


 <title>Glitzz Events</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel = "icon" href ="logo.png"  type = "image/x-icon"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
 <link type="text/css" rel="stylesheet" href="book2.css" >
 <style type="text/css">

  #my_table {
    top: 15px;
	width:90%;
	height:200px;
	margin-left:60px;
	margin-right:18px;
    margin-top:50px; 
	font-size:20px;
	text-align:center;
	vertical-align:center;
	overflow-x:auto;
  }
tr:hover {background-color: #f5f5f5;}
th {
  background-color: #f4c2c2;
  color: black;
}
h4{
	font-size:35px;
    margin-left:565px;
    margin-top:100px;
}
b{
	font-size:30px;
	margin-left:60px;
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
<h4>Your Previous Booking</h4>
    	  <?php
		  
$con=mysqli_connect("localhost","root","","project");
//session_start();
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 

if(isset($_SESSION['username']))
{
	$user_check=$_SESSION['username'];
	$sql="SELECT * FROM birthdaybook where username1 = '$user_check' ";
if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  echo "<b> Birthday Booking </b>";
echo "<table id=\"my_table\" border='1'>
<tr>
<th>Id</th>
<th>Party Type</th>
<th>Party Date</th>
<th>Party Loc</th>
<th>Cake</th>
<th>Guests</th>
<th>Food Course</th>
<th>Food Choice</th>
<th>Name</th>
<th>UserName</th>
<th>Email Id</th>
<th>Contact</th>
</tr>";
//echo "$result";

  while ($row=mysqli_fetch_array($result))
    {
    echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['partytype'] . "</td>";
echo "<td>" . $row['partydate'] . "</td>";
echo "<td>" . $row['partyloc'] . "</td>";
echo "<td>" . $row['cake'] . "</td>";
echo "<td>" . $row['guests'] . "</td>";
echo "<td>" . $row['foodcourse'] . "</td>";
echo "<td>" . $row['foodchoice'] . "</td>";
echo "<td>" . $row['bname'] . "</td>";
echo "<td>" . $row['username1'] . "</td>";
echo "<td>" . $row['emailid1'] . "</td>";
echo "<td>" . $row['contact1'] . "</td>";
echo "</tr>";

    }
	echo "</table>";
  // Free result set
 mysqli_free_result($result);
}
  
  
  $sql1="SELECT * FROM wedbook where username2 = '$user_check' ";
 
 if ($result1=mysqli_query($con,$sql1))
  {
 
  echo "<br><br><b> Wedding Booking </b>";
echo "<table id=\"my_table\" border='1'>
<tr>
<th>Id</th>
<th>Event Type</th>
<th>Date From</th>
<th>Till Date</th>
<th>Budget</th>
<th>Functions</th>
<th>Number of Guests</th>
<th>Desired Location</th>
<th>Hall Size</th>
<th>Decoration Theme</th>
<th>Food Type</th>
<th>Name</th>
<th>UserName</th>
<th>Email Id</th>
<th>Contact</th>
</tr>";

while($row1 = mysqli_fetch_assoc($result1))
{
echo "<tr>";
echo "<td>" . $row1['id'] . "</td>";
echo "<td>" . $row1['eventtype'] . "</td>";
echo "<td>" . $row1['datefrom'] . "</td>";
echo "<td>" . $row1['tilldate'] . "</td>";
echo "<td>" . $row1['budget2'] . "</td>";
echo "<td>" . $row1['functions'] . "</td>";
echo "<td>" . $row1['guests'] . "</td>";
echo "<td>" . $row1['location'] . "</td>";
echo "<td>" . $row1['hallsize'] . "</td>";
echo "<td>" . $row1['theme'] . "</td>";
echo "<td>" . $row1['foodtype'] . "</td>";
echo "<td>" . $row1['wname'] . "</td>";
echo "<td>" . $row1['username2'] . "</td>";
echo "<td>" . $row1['emailid2'] . "</td>";
echo "<td>" . $row1['contact2'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_free_result($result1);
}
 
$sql2="SELECT * FROM eventbook2 where username3 = '$user_check' ";
 
if ($result2=mysqli_query($con,$sql2))
  {
	echo "<br><br><b> Event Booking </b>";
echo "<table id=\"my_table\" border='1'>
<tr>
<th>Id</th>
<th>Event Type</th>
<th>Event Date</th>
<th>Budget</th>
<th>Event Venue</th>
<th>Number of Guests</th>
<th>Decoration Theme</th>
<th>Food Type</th>
<th>Name</th>
<th>UserName</th>
<th>Email Id</th>
<th>Contact</th>
</tr>";

while($row2 = mysqli_fetch_assoc($result2))
{
echo "<tr>";
echo "<td>" . $row2['id'] . "</td>";
echo "<td>" . $row2['eventtype'] . "</td>";
echo "<td>" . $row2['eventdate'] . "</td>";
echo "<td>" . $row2['budget1'] . "</td>";
echo "<td>" . $row2['eventvenue'] . "</td>";
echo "<td>" . $row2['guests3'] . "</td>";
echo "<td>" . $row2['theme1'] . "</td>";
echo "<td>" . $row2['foodtype'] . "</td>";
echo "<td>" . $row2['ename'] . "</td>";
echo "<td>" . $row2['username3'] . "</td>";
echo "<td>" . $row2['emailid3'] . "</td>";
echo "<td>" . $row2['contact3'] . "</td>";
echo "</tr>";
}
echo "</table>";
 mysqli_free_result($result2);
}}
echo "<br><br><br><br>";
mysqli_close($con);
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