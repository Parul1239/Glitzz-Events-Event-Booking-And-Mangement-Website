<?php

$con = mysqli_connect('localhost','root','','project');
// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$cnnt = 0;

include("db.php");
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
   // $password = $password;
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($con, $query);
    if (mysqli_num_rows($results) == 1)		{
		setcookie('username',$username, time()+60*60*7);
        session_start();
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
	 // $user = $_POST['username'];
      header('location: finalh.php');
	  $cnnt =1;
    }
	else {
      array_push($errors, "Wrong username/password combination");
	  $cnnt = 0;
    }
  }
}

?>
<?php  if (count($errors) > 0) : ?>
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

<link rel = "icon" href ="logo.png"  type = "image/x-icon"> 

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
	cursor:pointer;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 25px;
	border-radius:25px;
	background:rgba(219,112,147,.1);/*inputs*/
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

.foot-lnk p{
	font-size:22px;
}

#lab1, #lab2{
	font-size:18px;
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
	<div class="login-html">
		<div class="login-form">
			<form method="post">
			<h2>SIGN IN</h2>
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label" id="lab1">Username</label>
					<input id="user" type="text" class="input" name="username">
				</div>
				<div class="group">
					<label for="pass" class="label" id="lab2">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Login" name="login_user">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<p>
					Not yet a member?<a href="loginpg.php">Sign up</a>
					</p>
				</div>
			</div>

			</form>		
		

		</div>
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