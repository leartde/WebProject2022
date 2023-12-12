<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marvel Achademy - Contact Dashboard</title>
  <link rel = "stylesheet" href="css/contact-dashboard.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <h1 class="header"> Marvel Tech Academy | Contact Dashboard</h1>
      <hr>
      <div class="buttons">
        <a href="Contact.php" class="btn" id="btn1">Send a new message</a>
        <a href="dashboard.php" class="btn" id="btn2">Main Dashboard</a>
        </div>
      <div class="contact-table">
      
        <table class="table">
          <thead>
          <tr>
          <th> Message ID</th>
          <th> Name</th>
          <th> Email</th>
          <th> Subject</th>
          <th> Message</th>
        </tr>
        </thead>
        <tbody>
          <?php
          include 'model.php';
          $model = new Model();
          $rows = $model->fetchContact();
          $i = 1;
          if(!empty($rows)){
            foreach($rows as $row){
          
          ?>
          <tr>
          <td><?php echo $i++ ?> </td>
          <td><?php echo $row['Name']; ?> </td>
          <td> <?php echo$row['Email']; ?> </td>
          <td> <?php echo$row['Subject']; ?> </td>
          <td> <?php echo$row['Message']; ?> </td>
            </tr>
            <?php
            }
          }else{
            echo "no data";

          }
          ?>

        </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>