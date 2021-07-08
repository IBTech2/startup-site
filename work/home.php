<?php



// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["FIRSTNAME"])){
    header("Location: index.php");
    
}

echo "WELCOME". " " .$matricno =    $_SESSION['MATRIC_NO'] . " " .$username = $_SESSION['FIRSTNAME'];





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
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>Home</title>
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
</div>
<h1 class="ba">WELCOME</h1>

<div>
<h1 class="text1"><strong>ABOUT COMPUTER SCIENCE</h1></strong><hr>
 <p class="dep">The Department of Computer Science offers BSc Degree in Computer Science to qualified candidates 
who have spent a minimum of 4 years [i.e eight(8) semesters] and have passed a minimum of 144 units.
 This will also require that the student has participated in all academic and non-academic requirements of the Department.</p>

<p class="dep"> The award of degree also requires that students maintain a minimum of 70% attendance in each semester, 
attend all practical sessions and must have participated in the two-phased Industrial Training which requires the student to work in any
IT-related office to acquire more experience beyond the school's academic routines.</p>
</div>

<div>
            <h1 class="text1"><strong> COMPUTER LAB RULES & REGULATIONS</h1></strong><hr>
                <p class="text2"><b>Note: All Lagos State Computer Science must put on their PURPLE & BLACK [MONDAY, TUESDAY & THURSDAY]</b></p>
                <p class="text">1. Computer games are prohibited.</p>
                <p class="text">2. Viewing pornography via sites, via internal email, external email, documents, Internet sites or through any other form on WIT computers is strictly prohibited.</p>
                <p class="text">3. Eating and drinking in computer rooms are prohibited.</p>
                <p class="text">4. Don’t leave rubbish lying around the rooms – use the bins provided.  If for some reason, the bin is removed, please bring any discarded papers, bottles, etc, with you.  It’s much nicer to work in a clean room than a dirty one!</p>
                <p class="text">5. No user shall, take or omit to take any actions which damages, restricts, jeopardises, impairs or undermines the performance, usability or accessibility of the computing facilities, the communications network, systems programs or other stored information/data.</p>
                <p class="text">6. Any behaviour that interferes with the work of other students and staff is prohibited -this includes the use of personal stereos, radios or any behaviour that leads to excessive levels of noise.  It also includes the use of the computing facilities in any way which may cause offence to others.</p>
                <p class="text">7. Users are required to take all reasonable precautions to maintain the integrity of passwords and any other security mechanisms.  It is the responsibility of users to maintain the security of their own passwords.  Do not give your passwords to any other user or allow any user to use your account.</p>
                <p class="text">8. You must inform the supervising lecturer and/or computer services staff of any problems that arise whilst using computer equipment.</p>
            
        </div class="container"><hr>


        <h1 class="con">COMPUTER SCIENCE 2020 INAUGURAL LECTURE</h1>
        <div class="photo_home">
            <img class="img-fluid" src="img/photo1.jpeg" alt="">
            <img class="img-fluid" src="img/photo2.jpg" alt="">
            <img class="img-fluid" src="img/phone3.jpg" alt="">
        </div>
        <div class="photo_home">
            <img class="img-fluid" src="img/photo5.jpg" alt="">
            <img class="img-fluid" src="img/photo6.jpg" alt="">
            <img class="img-fluid" src="img/photo7.jpg" alt="">
        </div>
    </div>




<!--footer starts from here-->
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
<p class="text-center">Copyright @2017 | Designed With by <a href="#">IBTech</a></p>

</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
</body>
</html>