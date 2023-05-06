<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ADMIN DASHBOARD</title>

   <!-- <link rel="stylesheet" href="../style.css" !important>-->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

 <style>
 
 </style>

</head>

<body style="background-color: black">

        <div class="title" style="background-color: black; color: white;padding: 10px;margin: 10px;">

            <h3 style="text-align: center;">Admin Dashboard</h3>

        </div>
<center>
        <div class="buttons" style="display: inline-table;">
            <center>
            <button style="border: none;border-radius: 8px;width: 200px;"><a href="home.php?insertEvent" class="btn  btn-sm" style="text-decoration:none;font-size:20px">Insert event</a></button><br><br></center>
            <center>
            <button style="border: none;border-radius: 8px;width: 200px;"><a href="insert_det.php" class="btn  btn-sm" style="text-decoration:none;font-size:20px">Insert event details </a></button><br><br></center>
            <center>
            <button style="border: none;border-radius: 8px;width: 200px;"><a href="viewEvents.php" class="btn  btn-sm" style="text-decoration:none;font-size:20px">View Events</a></button><br><br></center>
            <center>
            <button style="border: none;border-radius: 8px;width: 200px;"><a href="viewParticipants.php" class="btn  btn-sm" style="text-decoration:none;font-size:20px">View participants</a></button><br><br></center>
            <center>
            <button style="border: none;border-radius: 8px;width: 200px;"><a href="" class="btn  btn-sm" style="text-decoration:none;font-size:20px">Check Winners</a></button><br><br></center>
            <center>
            <button style="border: none;border-radius: 8px;width: 200px;"><a href="eventedit.php" class="btn  btn-sm" style="text-decoration:none;font-size:20px">Edit event</a></button><br><br></center>
            <center>
            <button style="border: none;border-radius: 8px;width: 200px;"><a href="./user_area/logout.php" class="btn  btn-sm" style="text-decoration:none;font-size:20px" >Logout</a></button><br><br></center>
       
        </div>
    </center>

        <div class="buttons d-flex justify-content-around">
           
            </div>


                <div class="container my-5">
            <?php 

               if(isset($_GET['insertEvent'])){

                include('insert_events.php');

               }

            ?>

        </div>

 

    </div>

</body>

</html>














<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="../style.css" !important>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="event_images/r.jpg" alt="" class="logo">
                    <nav class="navbar navbar-expand-lg ">
                      <ul class="navbar-nav">
                         <li class="nav-item">
                           <a href="#" class="nav-link">Welcome Guest</a>
                          </li>
                        </ul>
                     </nav>
            </div>
        </nav>
        <div class="bg-light">
            <h3 class="text-center p-2">Admin Dashboard</h3>
        </div>
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                 <div class="p-3">
                    <a href="#"><img src="event_images/r.jpg" class="admimg" alt=""></a>
                    <p class="text-light text-center">Admin Name</p>
                 </div>
                 <div class="button text-center">
                    <button class="my-3"><a href="home.php?insertEvent" class="nav-link text-light bg-info my-1">Insert event</a></button>
                    <button><a href="insert_det.php" class="nav-link text-light bg-info my-1">Insert event details </a></button>
                    <button><a href="viewEvents.php" class="nav-link text-light bg-info my-1">View Events</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View participants</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Visualise participants</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Check Winners</a></button>
                    <button><a href="eventedit.php" class="nav-link text-light bg-info my-1">Edit event</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <?php 
               if(isset($_GET['insertEvent'])){
                include('insert_events.php');
               }
            ?>
        </div>

    </div>
</body>
</html> -->