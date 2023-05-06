<?php
  include('../includes/connect.php');
  if(isset($_POST['event'])){
       $event_name = $_POST['eventName'];
       //validating 
       $select_query = "select * from `event` where eventname = '$event_name'";
       $result_s = mysqli_query($con,$select_query);
       $number = mysqli_num_rows($result_s);
       if($number > 0){
        echo "<script>alert('Event already present ,check if any spelling mistake')</script>";
       }
       else {
       $insert_query = "insert into `event` (eventname) values('$event_name')";
      $result = mysqli_query($con,$insert_query);
       if($result){
        echo "<script>alert('Event  is updated successfully');</script>";
       } } 
  }
?>

<h2 class="text-center">Insert Event</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-file-invoice"></i></span>
  <input type="text" class="form-control" name="eventName" placeholder="Insert Event" 
  aria-label="Username" aria-describedby="basic-addon1">
  </div>
<div class="input-group w-10 mb-2 m-auto">

  <input type="submit" class="bg-info border-0 p-2 my-3" name="event" value="insertEvent" placeholder="Insert Event" >
  <!-- <button class="bg-info p-2 my-2 border-0">Insert Events </button> -->
</div>

</form>