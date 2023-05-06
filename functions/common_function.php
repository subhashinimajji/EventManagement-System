<?php
  include('./includes/connect.php');

  function getEvents(){
    global $con;
    $select_query = "select * from `eventdetails` order by rand()";
                $result_query = mysqli_query($con,$select_query);
                while($row = mysqli_fetch_assoc($result_query)){
                  $ev_id = $row["ed_id"];     $ev_b = $row["branch"];
                  $ev_title = $row["title"];   $ev_fee = $row["fees"]; 
                  $ev_desc = $row["description"];  $ev_type = $row["eventtype"]; $ev_img = $row["image1"];
                  echo " <div class='col-md-4 mb-3'><!-- col-md-4-->
                  <div class='card' ><!--card-->
                   <img src='./admin_area/event_images/$ev_img' class='card-img-top' alt='...'>
                   <div class='card-body'>
                       <h5 class='card-title'>$ev_title</h5>
                   <p class='card-text'>$ev_desc</p>
                    <a href='#' class='btn btn-info'>Register</a>
                    <a href='#' class='btn btn-secondary'>Know More</a>
                    </div>
                   </div> <!--card-->
                  </div><!-- col-md-4-->";
                }
                
  }
  function eventTypes(){ 
    global $con;
    $select_event = "select * from `event`";
                  $result_event = mysqli_query($con,$select_event);
                  // $row_data = mysqli_fetch_assoc($result_event);
                  // echo $row_data['eventname'];
                  while($row_data = mysqli_fetch_assoc($result_event)){
                    $eventnme =  $row_data['eventname'];
                    $ind = $row_data['eid'];
                    echo " <li class='nav-item'><a href='index.php?eventname=$eventnme' class='nav-link text-light'>$eventnme</a></li> ";
                  }
  }
?>