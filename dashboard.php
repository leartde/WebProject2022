


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel = "stylesheet" href="css/dashboard.css">
    <title>MarvelTech | Dashboard</title>
 
    

 
    
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="">
        <a href="index.php" class="home"><h1 class="Header">  Marvel Tech Academy </a> | Dashboard </h1> 
          <hr style="height: 2px;background-color: black; margin-bottom: 3%;border: 0;">
        </div>
      </div>
      <div class="buttons">
      <a href="register.php" class="btn">Add New User</a>
      <!-- <a href="index.php" class="btn">Home</a> -->
      <a href="contact-dashboard.php" class="btn">Contact Dashboard</a>
      </div>
      <div class="row">
        <div class="inside">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include 'model.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['Username']; ?></td>
                
                <td>
                  <a <?php echo $row['Email'];?> > <?php echo $row['Email'];?></a>
                </td>
                <td>
                  <a href="delete.php?ID=<?php echo $row['ID']; ?>" class="delete">Delete</a>
                  
                </td>
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