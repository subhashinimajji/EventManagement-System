<?php      
     include('../includes/connect.php');   
     if(isset($_POST['login_data'])){
    $username = $_POST['Email'];  
    $password = $_POST['Password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from `organisers` where Email = '$username' and pwd = '$password'";  
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);            
        if($count == 1){  
            // echo "<h1><center> Login successful </center></h1>";  
            // header('location:./index.php');
            session_start();
            $_SESSION['mail'] = $mail;
                header('location:../admin_area/home.php');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
      }   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "stylesheet" href = "../css/login.css">
    <title>Document</title>  
</head>
<body>
<br><br><br><br><br><br>
    <div class="container">
        <h2 align="center">LOGIN </h2>
    <form action="" method="post" enctype ="multipart/form-data">
  <div class="form-group">
    <label for="Email">Email address</label>
    <input type="email" class="form-control" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" name="Password" placeholder="Password">
  </div>
  <div class="forn-group">
  <button type="submit" name="login_data" class="btn btn-secondary">Submit</button>
  <a href="password-reset.php" class="float-end">Forget Password ?</a>
  </div>
</form>

<!-- <h5>
  Did not recieve your Verification Email?
  <a href="resend-email-verfication.php" >Resend </a>
</h5> -->
    </div>
    
</body>
</html>