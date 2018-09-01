<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
<meta charset="UTF-8">
<meta name="author" content="Shreyash Pandey">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>attemp2</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.textoverImage
  {
  position:relative;
  width:400px;
  height:300px;
  float:left;
  margin:20px;
  background-size:100%;
  transition:0.5s;
  }
  
  .textoverImage:hover
  {
    background-size:110%;
  }
  .textoverImage:after
  {
    position:absolute;
    top:90%;
    bottom:0;
    left:0;
    right:0;
    white-space:pre-wrap;
    overflow: hidden;
    background-color:url(3.jpg);
    color:#fff;
    padding:0 8px;
    content:attr(data-text);
    transition:0.5s;
  }
  .textoverImage:hover:after
  {
  top:0;
  padding:8px;
  background-color:rgba(0,0,0,.6);
  }
  .textoverImage:first-line{
  color:#fff;
  font-weight:bold;
  font-size:1.5em;
                            }
.icon-bar {
  
  top: 50%;
  left:1280px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
    background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
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
    background-color: #f1f1f1;
    min-width: 60px;
    /*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
    z-index: 1;
}

.dropdown-content a {
    color: black;
    /*padding: 10px 15px;*/
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    opacity:.6;
}
</style>
</head>
<body>
<div style="background-image:url(10.jpg);background-repeat:no-repeat;background-size:100% 82%;">
<header >
<h1 style="color:white;background-color:white;font-size: 120px;position:relative;"><img src="careerlogo1.png" alt="" style="width:280px;height:100px;">      <a href="#" style="color:black;font-family:AR DESTINE;font-size:32px;" >HOME</a>
<div class="dropdown">
  <a class="dropbtn" href="#" style="color:black;font-family:AR DESTINE;font-size:32px;" >Courses Offered</a>
  <div class="dropdown-content" style="width:80px;height:100px;z-index:2;">
    <a href="engineering.html"style="width:180px;height:90px;z-index:2;font-size:23px;font-family:AR DESTINE;">Engineering</a>
    <a href="fullpagetabs.html"style="width:180px;height:90px;z-index:2;font-size:23px;font-family:AR DESTINE;">Medical</a>
    <a href="upsc.html"style="width:180px;height:90px;z-index:2;font-size:23px;font-family:AR DESTINE;">UPSC</a>
    <a href="bank.html"style="width:180px;height:90px;z-index:2;font-size:23px;font-family:AR DESTINE;">SSC</a>
  </div>
</div>&nbsp;&nbsp;&nbsp;<?php  if (isset($_SESSION['username'])) : ?>
  <a href="index.php?logout='1'" style="color: red;"><a href="login.php"><button style="width:auto;padding: 20px 70px;font-size:26px;background-color:black;border-radius:50%;" >Logout</button></a><?php endif ?><a href="register.php"><button style="width:auto;padding: 20px 70px;font-size:26px;background-color:black;border-radius:50%;" >Register</button></a></h1>
</header>
<br/>
<nav>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="profilecard.html">About</a>
  <a href="#">Services</a>
  <a href="layout css.html">Clients</a>
  <a href="#">Contact</a>
</div>
<span style="font-size:64px;cursor:pointer;color:white;" onclick="openNav()">&#9776;</span>
<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	
    <?php endif ?>
</div>
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
<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
<section>
<div class="slideshow-container"style="left:9%;top:-400px;z-index:1;">

<div class="mySlides fade">
  <div class="numbertext" style="color:white;">1 / 3</div>
  <img src="a.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"style="color:white;">2 / 3</div>
  <img src="b.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"style="color:white;">3 / 3</div>
  <img src="c.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>

<div style="text-align:center;top:940px;position:absolute;left:680px;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

</section>
</div>
<hr>
<div style="background-image:url(12.jpg);background-size:100% 100%;text-align:center;position:absolute;top:1060px;">
<h1 align=center style="font-family:AR DESTINE;color:white;">COMING TO OUR MAIN TOPIC</h1>

<div class="textoverImage"
   style="background-image:url(d.jpg)" data-text="Engineering
    is the creative application of science, mathematical methods, and empirical evidence to the innovation, design, construction, operation and maintenance of structures, machines, materials, devices, systems, processes, and organizations. The discipline of engineering encompasses a broad range of more specialized fields of engineering, each with a more specific emphasis on particular areas of applied mathematics, applied science, and types of application.">
     </div>
   
      <div class="textoverImage"
   style="background-image:url(e.jpg)" data-text="Medicine
Medicine is the science and practice of the diagnosis, treatment, and prevention of disease. Medicine encompasses a variety of health care practices evolved to maintain and restore health by the prevention and treatment of illness. Contemporary medicine applies biomedical sciences, biomedical research, genetics, and medical technology to diagnose, treat, and prevent injury and disease">
     </div>
   
      <div class="textoverImage"
   style="background-image:url(f.jpg)" data-text="The Union Public Service Commission 
   (UPSC; Hindi: संघ लोक सेवा आयोग) is India's central recruiting agency. It is responsible for appointments to and examinations for All India services and group A & group B of Central services.[3] While Department of Personnel and Training is the central personnel agency in India. 
   ">
     </div>
   
      <div class="textoverImage"
   style="background-image:url(g.png)" data-text="Staff Selection Commission (SSC) 
   is an organization under Government of India to recruit staff for various posts in the various Ministries and Departments of the Government of India and in Subordinate Offices

This commission is an attached office of the Department of Personnel and Training (DoPT) which consists of Chairman, two Members and a Secretary-cum-Controller of Examinations. His post is equivalent to the level of Additional Secretary to the Government of India.">
     </div>
</div>
</div>
<footer style="background-color:black;color:white;position:relative;top:560px;height:150px;width:100%;">
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

&copy; 2010<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script>, Company.
</footer>
<script>
// Get the modal

var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(even) {
    if (even.target == nav) {
        nav.style.display = "none";
    }
}
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
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
		
</body>
</html>