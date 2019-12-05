<?php

$con = mysqli_connect('localhost','root','','project');

if(isset($_POST['book4']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO contact(name,email,message) values('$name','$email','$message')";
$result = mysqli_query($con,$query);
}
else{
	echo " ";
}
?>





<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  padding: 0;
  
}

#contact {
  width: 100%;
  height: 100vh;
  background-color: #111;
  overflow: hidden;
  padding-bottom: 140px;
}

.section-header {
  text-align: center;
  margin: 0 auto;
  padding-top: 37px;
  margin-bottom: 50px;
  font: 300 55px 'Oswald', sans-serif;
  letter-spacing: 3px;
  color: #fff;
  margin-bottom: 25px;
}

.contact-wrapper {
  margin: 0 auto;
  padding-top: 15px;
  position: relative;
  max-width: 800px;
}

/* Begin Left Contact Page */
.form-horizontal {
  float: left;
 margin-top: -18px;
  max-width: 400px;
  font-family: 'Lato';
  font-weight: 400px;
 padding-top: -10px;
}

.form-group, textarea{
padding:15px 0px;
}

.form-control{
  max-width: 400px;
  padding-top:10px;
  padding-bottom:10px;
  padding-left: 20px;
  padding:15px 43px;
  border-radius:20px;
  background-color: #111;
  font-size: 20px;
  color: #fff;
  letter-spacing: 1px;
}

.send-button {
 border-radius:20px;
  margin-top: 27px;
  height: 45px;
  width: 338px;
  overflow: hidden;
  transition: all .2s ease-in-out;
}

.fa-paper-plane{
margin-top:3px;
 height:30px;
 font-size:28px;
}
.btn1{
	background-color:#e8b923;	
	margin-left:50px;
  	color: white;
  	padding: 12px 50px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 25px;
	margin-top:-90px;
	cursor:pointer;
	border-radius:14px;
}

.button {
  width: 330px;
  height: 40px;
  transition: all .2s ease-in-out;
}

.send-text {
  display: block;
  margin-top: 10px;
  font: 500 30px 'Lato', sans-serif;
  letter-spacing: 2px;
}

.button:hover {
  transform: translate3d(0px, -38px, 0px);
}

/* Begin Right Contact Page */
.direct-contact-container {
  max-width: 400px;
  float: right;
  margin-top: -5px;
}

/* Location, Phone, Email Section */
.contact-list {
  list-style-type: none;
  margin-left: -30px;
  padding-right: 20px;
}

.list-item {
  line-height: 4;
  color: #aaa;
}

.contact-text {
  font: 300 19px 'Lato', sans-serif;
  letter-spacing: 1.9px;
  color: #bbb;
}

.place {
  margin-left: 62px;
}

.phone {
  margin-left: 56px;
}

.gmail {
  margin-left: 53px;
}

.contact-text a {
  color: #bbb;
  text-decoration: none;
  transition-duration: 0.2s;
}

.contact-text a:hover {
  color: #fff;
  text-decoration: none;
}

.fa-facebook{
 margin-top:14px;
}

.fa-twitter{
 margin-top:14px;
}

.fa-instagram{
 margin-top:14px;
}

.fa-linkedin{
 margin-top:14px;
}
/* Social Media Icons */
.social-media-list {
  position: relative;
  font-size: 2.3rem;
  text-align: center;
  width: 100%;
}

.social-media-list li a {
  color: #fff;
}

.social-media-list li {
  position: relative; 
  top: 0;
  left: -40px;
  display: inline-block;
  height: 70px;
  width: 70px;
  margin: 15px auto;
  line-height: 70px;
  border-radius: 50%;
  color: #fff;
  background-color: rgb(27,27,27);
  cursor: pointer; 
  transition: all .2s ease-in-out;
}

.social-media-list li:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 70px;
  height: 70px;
  line-height: 70px;
  padding-top:0px;
  border-radius: 50%;
  opacity: 0;
  box-shadow: 0 0 0 1px #fff;
  transition: all .2s ease-in-out;
}

.social-media-list li:hover {
  background-color: #fff; 
}

.social-media-list li:hover:after {
  opacity: 1;  
  transform: scale(1.12);
  transition-timing-function: cubic-bezier(0.37,0.74,0.15,1.65);
}

.social-media-list li:hover a {
  color: #111;
}

.copyright {
  font: 200 18px 'Oswald', sans-serif;
  color: #555;
  letter-spacing: 1px;
  text-align: center;
 padding-top:10px;
}

hr {
  border-color: rgba(255,255,255,.8); ;
}

/* Begin Media Queries*/
@media screen and (max-width: 760px) {
    #contact {
        height: 1000px;
    }
  .section-header {
    font-size: 65px;
  }
  .direct-contact-container, .form-horizontal {
    float: none;
    margin: 10px auto;
  }  
  .direct-contact-container {
    margin-top: 60px;
    max-width: 300px;
  }    
  .social-media-list li {
    height: 60px;
    width: 60px;
    line-height: 60px;
  }
  .social-media-list li:after {
    width: 60px;
    height: 60px;
    line-height: 60px;
  }
}

@media screen and (max-width: 569px) {
  #contact {
    height: 1200px;
    }
  .section-header{
    font-size: 50px;
  }
  .direct-contact-container, .form-wrapper {
    float: none;
    margin: 0 auto;
  }  
  .form-control, textarea {
    max-width: 340px;
    margin: 0 auto;
  }
  
  .name, .email, textarea {
    width: 280px;
  } 
  .direct-contact-container {
    margin-top: 60px;
    max-width: 280px;
  }  
  .social-media-list {
    left: 0;
  }
  .social-media-list li {
    height: 55px;
    width: 55px;
    line-height: 55px;
    font-size: 2rem;
  }
  .social-media-list li:after {
    width: 55px;
    height: 55px;
    line-height: 55px;
  }
  
}

@media screen and (max-width: 410px) {
  .send-button {
    width: 99%;
  }
}
</style>
</head>

<body>
<section id="contact">
  
  <h1 class="section-header">CONTACT US</h1>
  <form action="/project/finalh.php">
  <input type="submit" class="btn1" value="HOME" name="home1">
  </form>
   <!--button type="submit" name="book5">HOME</button-->
  <div class="contact-wrapper">
    
      <!---------------- 

      CONTACT PAGE LEFT 
    
      -----------------> 
    
    <form class="form-horizontal" role="form" method="post" action="contact1.php">
       
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="">
        </div>
      </div>

      <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"></textarea>
      
      <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND" name='book4'>
        <div class="button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>
      
      </button>
      
    </form>
    
      <!---------------- 

      CONTACT PAGE RIGHT 
    
      -----------------> 
    
      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Glitzz Events Ltd | Mumbai</span></i></li>
          
          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">glitzzevents@gmail.com</a></span></i></li>
          
        </ul>

        <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </li>
        </ul>
        <hr>

        <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>

      </div>
    
  </div>
  
</section>  
</body>
</html>
  
  