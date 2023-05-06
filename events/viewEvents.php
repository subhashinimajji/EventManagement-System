<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      include('../includes/connect.php'); 
      //execute the SQL query and return records
      $result = mysqli_query($con ,"SELECT ed_id,title,description,date FROM eventdetails ");
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>E_id</th>
          <th>Event</th>
          <th>description</th>
          <th>date</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ))
          {
        ?>
              <td><?php  echo $row['ed_id'];?></td>
              <td> <?php  echo $row['title']; ?></td>
              <td><?php  echo $row['description'];?></td>
              <td><?php  echo $row['date'];?></td>
            </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
    </body>
    </html>

    <!-- {$row\['ed_id'\]} -->