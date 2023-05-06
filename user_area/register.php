<?php
 include('../includes/connect.php');  
 if(isset($_POST['insert_event'])){
     $event_title = $_POST['name'];
     $desc = $_POST['email'];
     $keywrd = $md5['pwd'];
     $eventType = $md5['conpwd'];
     $Branch = $_POST['jntuno'];

     if($event_title == "" or $desc == "" or $keywrd == "" or $eventType == "" or $Branch == ""  ){
        echo "<script>alert('Fill the form completely ')</script>";
        exit();
     }
     else{

        $insert_events = "insert into `users` (Name,Email,pwd,conpwd,jntuno) values('$event_title','$desc','$keywrd','$eventType','$Branch')";
        $result_query = mysqli_query($con,$insert_events);
        if($result_query){
        echo "<script>alert('Successfully inserted a event details ')</script>";
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
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet"  href="../css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
<div class="py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                         <h5>Registration Form</h5>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method = "POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input type="text" name="pwd" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="conpwd">confirm Password</label>
                                <input type="text" name="conpwd" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jntuno">jntu no</label>
                                <input type="text" name="jntuno" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit"class="btn btn-secondary my-3">Register Now</button>
                            </div>

                            <!-- <h2>Donot have an account ? Click <a href = "login.php">Here</a></h2> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>