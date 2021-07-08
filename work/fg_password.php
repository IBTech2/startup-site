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
    <title>Forget Password</title>
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
    <ul class="navbar-nav ml-auto">
      <button type="button" onclick = "window.location='logout.php';" class="btn btn-light">Back</button>
    </ul>
  </div>
</nav> 

<div class="jumbotron text-center">
<h1>FORGET PASSWORD</h1>
  <p>code will sent to your respective E-mail. Kindly visit your registered E-mail.......</p>
</div>

<div class="fg">
<div>
  <label for="Email">Enter Email Address</label>
  <input style="width:50%" class="form-control" type="email" name="" id="" placeholder="Email" required>
  </div><br>

  <div>
       <input style="width:10%" type="submit" class="btn btn-info btn-block" value="Submit"> 
    </div>
</div>

</body>
</html>