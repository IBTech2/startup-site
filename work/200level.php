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
    <title>200Level-Courses</title>
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

    <p style="font-size:25px;" class="ba">200 LEVEL MATERIALS & PAST QUESTIONS</p>


    <div class="ta">
    <p style="font-size:20px;" class="p_head"><strong>200 LEVEL, HAMMATTAN AVAILABLE MATERIALS</strong> </p>
    <table class="table-bordered">
        <tr>
            <th>CODE</th>
            <th>TITLE</th>
        </tr>
        <tr>
            <th>CSC 205</th>
            <th>Operating System</th>
        </tr>
        <tr>
            <th>CSC 213</th>
            <th>Algorithm Development and Application</th>
        </tr>
        <tr>
            <th>CSC 217</th>
            <th>Fundamentals of Digital Electronics</th>
        </tr>
        <tr>
            <th>CSC 221</th>
            <th>Fundamental of Digital Eletronics</th>
        </tr>
        <tr>
            <th>CSC 223</th>
            <th>Introduction to Information Processing Methods</th>
        </tr>
        <tr>
            <th>CSC 215</th>
            <th>Software Practice I</th>
        </tr>
        <tr>
            <th>MAT 251</th>
            <th>Mathematical Method</th>
        </tr>
        <tr>
            <th>GNS 201</th>
            <th>Lagos and its Environment</th>
        </tr>
    </table>
    </div> 
    <hr>
    <div class="material">
           <div class="pdf">
            <!-- <embed src="200Level file/operating_system1.pdf" type=""> -->
            <p><b>download CSC 205 Material</b></p>
            <a class="btn btn-primary" href="200Level file/operating_system1.pdf">download</a>
        </div>
        <div class="pdf">
            <!-- <embed src="200Level file/design_and_analysis_of_algorithms_tutorial (1).zip" type=""> -->
             <p><b>download Csc 213 Material </b></p>
             <a class="btn btn-primary" href="200Level file/design_and_analysis_of_algorithms_tutorial.zip">download</a>
         </div>
         <div class="pdf">
            <!-- <embed src="200Level file/Digital electronic.zip" type=""> -->
             <p><b>download Csc 221 Material</b></p> 
             <a class="btn btn-primary" href="200Level file/Digital electronic.zip">download</a>
        </div>
        <div class="pdf">
            <!-- <embed src="/100Level file/PHY 111.pdf" type=""> -->
                <p><b>download PHY 101 Material </b></p>
                <a class="btn btn-primary" href="/100Level file/mat101.pdf">download</a>
        </div>
        
    </div>
    <hr>
    <div class="material">
           <div class="pdf">
            <!-- <embed src="/200Level file/Introduction to Information Processing Methods.pdf" type=""> -->
            <p><b>download CSC 223 Material</b></p>
            <a class="btn btn-primary" href="200Level file/Introduction to Information Processing Methods.pdf">download</a>
        </div>
        <div class="pdf">
            <!-- <embed src="200Level file/vbasic.pdf" type=""> -->
             <p><b>download Csc 215 Material </b></p>
             <a class="btn btn-primary" href="200Level file/vbasic.pdf">download</a>
         </div>
         <div class="pdf">
            <!-- <embed src="200Level file/Mat251.pdf" type=""> -->
             <p><b>download Csc 251 Material</b></p> 
             <a class="btn btn-primary" href="200Level file/Mat251.pdf">download</a>
        </div>
        <div class="pdf">
            <!-- <embed src="200Level file/GNS201_fac_tand_figure.pdf" type=""> -->
                <p><b>download GNS 201 Material</b> </p>
                <a class="btn btn-primary" href="200Level file/GNS201_fac_tand_figure.pdf">download</a>
        </div>
        
    </div>
    <hr>
    <h4 class="ba">AVAILABLE PASS QUESTIONS FOR EACH COURSES AND ANSWERS</h4>
    

    <div class="ta">
    <p style="font-size:25px;" class="p_head"><strong>200 LEVEL, RAIN AVAILABLE MATERIALS</strong> </p>
    <table class="table-bordered">
        <tr>
            <th>CODE</th>
            <th>TITLE</th>
        </tr>
        <tr>
            <th>CSC 204</th>
            <th>Introduction to Discrete Matematics</th>
        </tr>
        <tr>
            <th>CSC 208</th>
            <th>Introduction to Computer Hardware Laboratroy</th>
        </tr>
        <tr>
            <th>CSC 212</th>
            <th>Computer Architecture</th>
        </tr>
        <tr>
            <th>CSC 214</th>
            <th>Database Management System I</th>
        </tr>
        <tr>
            <th>CSC 222</th>
            <th>Assembly language Programming</th>
        </tr>
        <tr>
            <th>CSC 226</th>
            <th>Object Oriented Programming (C++)</th>
        </tr>
        <tr>
            <th>ENT 202</th>
            <th>Enterpreneurship Studies I</th>
        </tr>
    </table>
    </div> 




    



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