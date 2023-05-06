<?php
 include('../includes/connect.php');  
 if(isset($_POST['register'])){
     $name = $_POST['name'];
     $jntu = $_POST['jntu'];
     $clg = $_POST['clg'];
     $eventType = $_POST['eventType'];
     $phone = $_POST['phone'];
     $transid= $_POST['transid'];
    

     if($name == "" or $jntu == "" or $clg == "" or $eventType == "" or $phone == "" or $transid == ""  ){
        echo "<script>alert('Fill the form completely ')</script>";
        exit();
     }
     else{

        $insert_events = "insert into `eventregistrations` (Name,JntuNo ,Collegename ,EventName,Mobile,Transactionid) values('$name','$jntu','$clg','$eventType','$phone','$transid')";
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <body class="bg-light">
        <div class="container mt-3">
            <h1 class="text-center">Event User Registration</h1>
            <form action="" method="post" enctype ="multipart/form-data">
                <!-- open Event -->     
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="title" class="form-label">Name</label>
                    <input type="text" name="name" id="title" class="form-control" placeholder="name" autocomplete="off" required>
                </div> <!--close Event-->
                <!-- open Event Description-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="desc" class="form-label">JNTU No</label>
                    <input type="text" name="jntu" id="desc" class="form-control" placeholder="Jntu" autocomplete="off" required>
                </div> <!--close Event Description-->
                <!-- open Event keywords-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="keywrd" class="form-label">College Name</label>
                    <input type="text" name="clg" id="keywrd" class="form-control" placeholder="College Name" autocomplete="off" required>
                </div> <!--close Event keywords-->
                <!-- open Event Type-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <select name="eventType" id="type" class="form-select">
                        <option value="">Select an event</option>
                        <?php
                        $select_query = "select * from `event`";
                        $result_query = mysqli_query($con,$select_query);
                        while($row = mysqli_fetch_assoc($result_query)){
                            $eventname = $row['eventname'];
                            // $eid = $row['eid'];
                            echo "<option value='$eventname'>$eventname</option>";
                        }
                        ?>
                    </select>
                </div> <!--close Event Type-->
                <!-- open Branch-->
                <!--close Branch-->
                <!-- open image1-->
               <!--close image1-->
                <!-- open image2-->
                 <!--close image2-->
                <!-- open Event -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="fee" class="form-label">Mobile Number</label>
                    <input type="text" name="phone" id="fee" class="form-control" placeholder="Mobile Number" autocomplete="off" required>
                </div> <!--close Event-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="fee" class="form-label">Transaction ID</label>
                    <input type="text" name="transid" id="fee" class="form-control" placeholder="Transaction ID" autocomplete="off" required>
                </div>
                <!-- open Event -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name="register" id="event" class="btn btn-info mb-3 px-3" value="register" >
                </div> <!--close Event-->
            </form>
        </div>
    </body>
</body>
</html>
