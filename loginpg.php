<?php
session_start();
include("db.php");
// initializing variables

$username = "";
$email    = "";
$errors   = array(); 


// connect to the database

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $users_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($con, $users_check_query);
  $users = mysqli_fetch_assoc($result);
  
  if ($users) { // if user exists
    if ($users['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($users['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = $password_1;//encrypt the password before saving in the database

    $query = "INSERT INTO users (username, email, password) 
          VALUES('$username', '$email', '$password')";
    mysqli_query($con, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: finalh.php');
  }
}
?>

<?php  
// errors in signing up
if (count($errors) > 0) : ?>
  <div class="error">
    <?php foreach ($errors as $error) : ?>
      <p><?php echo $error ?></p>
    <?php endforeach ?>
  </div>
<?php  endif ?>

<!DOCTYPE html>

<head>

 <title>Glitzz Events</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel = "icon" href ="D:\IP Project\logo.png"  type = "image/x-icon"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
 <link type="text/css" rel="stylesheet" href="login1.css" >

 <style = text/css>
 body{
	margin:0;
	color:#6a6f8c;
	background-image: url(event.jpg);
	/*font:600 16px/18px 'Open Sans',sans-serif;*/
	
    margin:0;
	height:100%;
	width:100%;
	
 
}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:710px;
	position:relative;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}

 h1{
	 margin-top:0px;
 }
 .sign-in-htm{
	margin top:50px;
}

.sign-up-htm{
	margin top:0px;

}
.login-html h2{
	margin-top:-40px;
}
.login-form .group{
	margin-bottom:18px;
}
 .login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	font-size:25px;
	width:100%;
	color:#fff; /*signinlabel*/
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 25px;
	border-radius:25px;
	background:rgba(219,112,147,.1);/*inputs*/
	cursor:pointer;
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:white; /*labels*/
	font-size:13px;
}
.login-form .group .button{
	background:#C71585; /*signupbutton*/
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

.v1{
	border-left: 1px solid white;
  height: 130px;
  margin-top:-120px;
 margin-bottom:0px;
  margin-left:150px;
  margin-right:0px;
}

#lab1, #lab2, #lab3, #lab4{
	font-size:20px;
}

.hr{
	height:2px;
	margin:60px 0 37px 0;
	background:rgba(255,182,193,.2);
}
.foot-lnk{
	text-align:center;
	font-size:20px;
}




</style>



</head>

<body>

<div class="container">
    
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
	<div class="login-html">
	<form method="post" action="loginpg.php">
		<h2>SIGN UP</h2>
		<div class="login-form">
			<div class="sign-up-htm" method="post" action="loginpg.php">
				<div class="group">
					<label for="user" class="label" id="lab1">Username</label>
					<input id="user" type="text" class="input" name="username" value="<?php echo $username; ?>">
				</div>
				<div class="group">
					<label for="pass" class="label" id="lab2">Email Address</label>
					<input id="email" type="email" class="input" name="email" value="<?php echo $email; ?>">
				</div>
				<div class="group">
					<label for="pass" class="label" id="lab3">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password_1">
				</div>
				<div class="group">
					<label for="pass" class="label" id="lab4">Confirm Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password_2">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Register" name="reg_user">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="para">Already Member?<a href="signin.php">Sign in</a>
				</div>
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
	
	<!--<div class="footer-sm">
	
	<img src="D:\IP Project\facebook.png">
	
	<img src="D:\IP Project\insta.png">
	
	<img src="D:\IP Project\twitter.png">-->
	
	
	</footer>
	
	</div>
	

</body>

 </html>