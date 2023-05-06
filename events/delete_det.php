<?php
 include('../includes/connect.php');  
 if(isset($_POST['delete_event'])){
    //  $event_title = $_POST['eventtitle'];
    //  $desc = $_POST['desc'];
    //  $keywrd = $_POST['keywrd'];
    //  $eventType = $_POST['eventType'];
    //  $Branch = $_POST['Branch'];
    //  $fee = $_POST['fee'];
    //  $st = "true";
    //  $image1 = $_FILES['img1']['name'];
    //  $image2 = $_FILES['img2']['name'];
    
    //  $timage1 = $_FILES['img1']['tmp_name'];
    //  $timage2 = $_FILES['img2']['tmp_name']; 
    $key =  $_POST['attribute'];

     if($event_title == "" or $desc == "" or $keywrd == "" or $eventType == "" or $Branch == "" or $fee == "" or $desc == "" or $image1 == "" or $image2 == "" ){
        echo "<script>alert('Insert the detail for complte deletion ')</script>";
        exit();
     }
     else{
        // move_uploaded_file($timage1 ,"./event_images/$image1");
        // move_uploaded_file($timage2 ,"./event_images/$image2");

        $insert_events = "delete from  `eventdetails` where  event = '$key';
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
            <h1 class="text-center">Insert Event details</h1>
            <form action="" method="post" enctype ="multipart/form-data">
                <!-- open Event -->     
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="title" class="form-label">Event Title</label>
                    <input type="text" name="eventtitle" id="title" class="form-control" placeholder="Enter title of the event" autocomplete="off" required>
                </div> <!--close Event-->
                <!-- open Event Description-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="desc" class="form-label">Event Description</label>
                    <input type="text" name="desc" id="desc" class="form-control" placeholder="Write Description of the event" autocomplete="off" required>
                </div> <!--close Event Description-->
                <!-- open Event keywords-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="keywrd" class="form-label">Event Keywords</label>
                    <input type="text" name="keywrd" id="keywrd" class="form-control" placeholder="Enter keywords  of the event" autocomplete="off" required>
                </div> <!--close Event keywords-->
                <!-- open Event Type-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <select name="eventType" id="type" class="form-select">
                        <option value="">Select a category</option>
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
                <div class="form-outline mb-4 w-50 m-auto">
                    <select name="Branch" id="Branch" class="form-select">
                        <option value="">Select a Branch</option>
                        <option value="Branch1">Branch1</option>
                        <option value="Branch2">Branch2</option>
                        <option value="Branch3">Branch3</option>
                        <option value="Branch4">Branch4</option>
                    </select>
                </div> <!--close Branch-->
                <!-- open image1-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="image1" class="form-label">Image 1</label>
                    <input type="file" name="img1" id="image1" class="form-control"  required>
                </div> <!--close image1-->
                <!-- open image2-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="image2" class="form-label">Image 2</label>
                    <input type="file" name="img2" id="image2" class="form-control"  required>
                </div> <!--close image2-->
                <!-- open Event -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="fee" class="form-label">Event Fees</label>
                    <input type="text" name="fee" id="fee" class="form-control" placeholder="Enterfees for the event" autocomplete="off" required>
                </div> <!--close Event-->
                <!-- open Event -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name="insert_event" id="event" class="btn btn-info mb-3 px-3" value="Insert Event" >
                </div> <!--close Event-->
            </form>
        </div>
    </body>
</body>
</html>
