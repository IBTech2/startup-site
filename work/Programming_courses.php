<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["FIRSTNAME"])){
    header("Location: index.php");
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>Programming Courses</title>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <img class="img" src="lasu.png" alt="">

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">E-assignment</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="register.php">Register</a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="complain.php">Complain</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="requirement.php">Requirement</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="Programming_courses.php">Programming Course</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Materials
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="100level.php">100 Level</a>
        <a class="dropdown-item" href="200level.php">200 Level</a>
        <a class="dropdown-item" href="300level.php">300 Level</a>
        <a class="dropdown-item" href="400level.php">400 Level</a>
      </div>
    </li>
  </ul>
  <div class="navbar-nav ml-auto">
  <button type="button" onclick="window.location='logout.php'" class="btn btn-light">Sign Out</button>
</div>
</nav>
<div>
    <img class="ab" src="img/slide3.jpg" alt="">

    <p style="font-size:25px;" class="ba">PROGRAMMING COURSES AVAILABLE</p>
    <div class="pr">
    <p>
    To be a full stack developer you can download our tutorial here...kindly click on the download link below 
    Download the zip file and make sure you unzip and go through the tutorial...with this tutorial u can be a good full stack developer 
    </p>
    <ul>
    <li>C++</li>
    <li>C#</li>
    <li>HTML</li>
    <li>CSS</li>
    <li>JAVASCRIPT</li>
    <li>SQL</li>
    <li>PYTHON</li>
    <li>PHP</li>
    <li>BOOTSTRAP</li>
    <li>JAVA</li>
    </ul>
    <P><i><strong>Note: Other Programming tutorial are still available.....<strong></i></P>
    </div>

    <div class="pr">
    <input class="btn btn-secondary" onclick="window.location='Programming_file/W3Schools Offline Latest Version [Cloned by Md Maruf Adnan Sami].rar'" type="button" value="Download">
    </div><br>
    





    </div><!--footer starts from here-->
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<div>
<h5 class="headin5_amrc col_white_amrc pt2">About Lagos State University</h5>
<!-- <img class="img" src="lasu.png" alt=""> -->
</div>
<!--headin5_amrc-->
<p class="mb10">Established in 1983 by the enabling law of Lagos State with the vision of pursuing the advancement of learning and academic excellence. The university has been unrelenting in the pursuit of its mission of becoming a citadel of learning, a community with the trademark of excellence in teaching, research and service to humanity.</p>
<p><i class="fa fa-location-arrow"></i> +234 8024 392 582 </p>
<p><i class="fa fa-phone"></i>  +234 8024 392 582  </p>
<p><i class="fa fa fa-envelope"></i> mailsupport@lasu.edu.ng  </p>


</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://www.lasu.edu.ng">Home</a></li>
<li><a href="http://www.lasu.edu.ng/home/career">Career</a></li>
<li><a href="http://www.lidc.lasu.edu.ng">Check Result</a></li>
<li><a href="http://www.lasu.edu.ng/home/payment">Payment</a></li>
<li><a href="http://www.lasu.edu.ng/home/pg-studies">Postgraduate student</a></li>
<li><a href="http://www.lasu.edu.ng/home/apply/">Undergraduate student</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://www.lasu.edu.ng/home/news">News</a></li>
<li><a href="http://www.lasu.edu.ng/home/events">Events</a></li>
<li><a href="http://www.lasu.edu.ng/home/all-admin">Directorates</a></li>
<li><a href="http://www.lasu.edu.ng/home/staff">Staffs</a></li>
<li><a href="http://www.lasu.edu.ng/home/about">About Us</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>More info on lasu twitter page...<a href="#">https://www.lasuofficial.com</a></p></li>
<li><a href="#"><i class="fab fa-facebook fleft padding-right"></i> </a><p>More info on lasu facebook page...<a href="#">https://www.lasuofficial.com</a></p></li>
<li><a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a><p>More info on lasu instagram page...<a href="#">https://www.lasuofficial.com</a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">

<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @2017 | Designed With by <a href="#">IBTech</a></p><br>

</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     
    
</body>
</html>