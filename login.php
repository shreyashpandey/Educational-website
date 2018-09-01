<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Shreyash Pandey">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>attemp2</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style2.css">
<style>
.sidenav {
    height: 100%;
    width: 50px;
    position:fixed;
    z-index: 4;
    top:1350px;
    left: 15px;;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    display:block;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.dropbtn {
   /* padding: 16px;*/
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
   /* background-color: #f1f1f1;*/
    min-width: 60px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
border:5px;
border-color:white;
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: #000}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    opacity:.6;
}
</style>
</head>
<body style="background-image:url(3.jpg);background-repeat:no-repeat;background-size:100% 70%;">
<header >
<h1 style="color:white;background-color:white;font-size: 120px;position:relative;"><img src="careerlogo1.png" alt="" style="width:280px;height:100px;">      <a href="homepage.html;" style="color:black;font-family:AR DESTINE;font-size:32px;" >HOME</a>
<div class="dropdown">
  <a class="dropbtn" href="#" style="color:black;font-family:AR DESTINE;font-size:32px;" >Courses Offered</a>
  <div class="dropdown-content" style="width:300px;height:480px;z-index:2;background-color:gray;">
    <a href="engineering.html"style="width:180px;height:90px;z-index:2;font-size:23px;font-family:AR DESTINE;">Engineering</a>
    <a href="fullpagetabs.html"style="width:180px;height:90px;z-index:2;font-size:23px;font-family:AR DESTINE;">Medical</a>
    <a href="upsc.html"style="width:180px;height:90px;z-index:2;font-size:23px;font-family:AR DESTINE;">UPSC</a>
    <a href="bank.html"style="width:180px;height:90px;z-index:2;font-size:23px;font-family:AR DESTINE;">SSC</a>
    <a href="s.html"style="width:180px;height:90px;z-index:2;font-size:23px;font-family:AR DESTINE;">Upcoming Courses</a>
  </div>
</div>&nbsp;&nbsp;&nbsp;
<a href="login.php"><button style="width:auto;padding: 20px 70px;font-size:26px;background-color:black;border-radius:50%;" >Login</button></a><a href="register.php"><button style="width:auto;padding: 20px 70px;font-size:26px;background-color:black;border-radius:50%;" >Register</button></a></h1>
</header>
<br/>
<nav>
<div id="mySidenav" class="sidenav" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
  <div id="id01" class="modal" >
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form class="modal-content animate" style="display:block;" action="login.php" method="post">
  	<?php include('errors.php'); ?>
<div class="imgcontainer">
      <img src="25.jpg" alt="Avatar" class="avatar">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
      <p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
    </div>
  </form>
</div>
</nav>
<br/>
<aside>
<div style="background-color:black;width:18%;height:400px;overflow:scroll;overflow-x:hidden;position:static;z-index:1;">
<h4 align="center"style="color:white;">Message
</h4>
<h4 align="center"style="color:white;">We want to give
</h4>
<br>
<hr>
<p style="color:white;">After class 12 th students are quite confused.So we are providing them a medium through which they can select which course to choose among the subjects we have shown.We are also providing up with the free links through students can learn a lot about their courses in which they want to proceed.</p>
</div>
</aside>
<section>
<div class="slideshow-container"style="left:9%;top:-400px;z-index:-1;">

<div class="mySlides fade">
  <div class="numbertext" style="color:white;">1 / 3</div>
  <img src="4.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"style="color:white;">2 / 3</div>
  <img src="5.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"style="color:white;">3 / 3</div>
  <img src="6.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<!--<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>-->
</section>
<footer style="background-color:black;color:white;position:relative;top:-260px;height:150px;width:100%;">
<img  src="careerlogo1.png" alt="career desk" style="position:absolute;left:30px;top:10px;width:70px;height:35px;" >
<table style="left:120px;top:45px;position:absolute;">
  <tr>
    <th>Courses Offered</th>
    <th>Upcoming Courses</th> 
    <th>Others</th>
  </tr>
  <tr>
    <td>Engineering</td>
    <td>Front End Programming</td>
    <td>About</td>
  </tr>
  <tr>
    <td>Medical Science</td>
    <td>Back-End Programming</td>
    <td>Services</td>
  </tr>
  <tr>
    <td>UPSC</td>
    <td>C,C++,Java,Python</td>
    <td>Clients</td>
  </tr>
  <tr>
  <td>SSC</td>
  </tr>
</table>

<div style="position:absolute;top:130px;left:770px;">&copy; 2010<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script>, Company.</div>
</footer>
<script>
// Get the modal

var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    //var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
   /* for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }*/
    slides[slideIndex-1].style.display = "block";  
    //dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>