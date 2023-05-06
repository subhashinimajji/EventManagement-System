<?php
$conn = mysqli_connect('localhost','root','','mailer');

session_start();
if(isset($_POST['submit'])){
    $pass = $_POST['event'];
    $select = " SELECT * FROM events ";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
        $select = "Insert into eventdetails (title) values('$pass')";
   
    $result = mysqli_query($conn, $select);
    echo "updated .$pass. sucessfully";
    }
    else {
        $error[]= 'incorrect email or password!';
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <p>Welcome</p>
      <form action="" method="post">
      <select name="event">
         <option value="robowar">robowar</option>
         <option value="race">race</option>
         <option value="fly">fly</option>
      </select>
      <input type="submit" name="submit" value="Add" class="form-btn">
      <a href="logout.php">log out</a>
   </form>
   </div>

</div>

</body>
</html>