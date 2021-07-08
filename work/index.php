<?php
$error = false;

session_start();
include_once('config.php');


if (isset($_POST['submit']))
{
$username = $_POST['FIRSTNAME'];
$matricno = $_POST['MATRIC_NO'];

if(!is_numeric($username) || strlen($username) != 9){
    $matricnoErr= "Fill the Matricno correctly";
    $error = true;
  }
  if ($error ==false){

$query= " SELECT * FROM registration_form WHERE FIRSTNAME = '$matricno' AND MATRIC_NO = '$username' ";
            

           
            $process = mysqli_query($conn, $query);

           if($process)
           {
                
                $found = mysqli_num_rows($process);

                if($found > 0)
                { 
                    while ($rows = mysqli_fetch_array($process))
                    {
                                 $email = $rows['EMAIL'];
                                 $gender = $rows['GENDER'];

                                 $_SESSION['FIRSTNAME'] = $username;
                                 $_SESSION['EMAIL'] = $email;
                                 $_SESSION['MATRIC_NO'] = $matricno;
                                



                                header("Location: home.php");
                    }
                }
                else{
                    echo "<h6 style=color:red;background-color:#ffe6e6;padding:15px;text-align:center;> INVALID USER OR PASSWORD!</h6>";
                }

           }

           else
           {
               echo "Error retieving data" . mysqli_error($con);
           }
        }
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
    <title>Index</title>
</head>
<body>
    <center>
    <div>
    <h1>LAGOS STATE UNIVERSITY</h1>
    <h3>COMPUTER SCIENCE LIBRARY</h3>
</div>


        <div >
            <img class="avater" src="lasu.png" alt="">
        </div>
    <form action="" method="post">
        <div class = "form-group ml" style = "width:30%"> <input class="form-control" type="text" maxlength="9" name="FIRSTNAME" id="" placeholder="Matric No">   
            <?php if (!empty($matricnoErr)): ?> 
                <div class="alert alert-danger alert-dismissible fade show"><?php echo $matricnoErr?></div>
                <?php endif?>
        </div>

        <div class = "form-group ml" style = "width:30%">   <input class="form-control" type="password" name="MATRIC_NO" id="" placeholder="Password"> 
        
        </div>
        <input style="width:20%" type="submit" class="btn btn-info" value="LOG IN"  name="submit">
    
        <div class="a">
            <a class="link" href="register.php">Create Account</a>
            <a class="lin" href="fg_password.php">Forget Password</a>
        </div>
        
    </form>
    </center>

    
</body>
</html>