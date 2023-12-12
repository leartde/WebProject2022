<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/main.css">
    <title>Marvel Tech Academy - Online Courses for Free!</title>
</head>
<body>
    <div id ="header">
    
        <img src="Images\mortarboard.png">
        <?php if (isset($_SESSION['emri'])) { ?>
        <h2> Logged in As <span><?php echo $_SESSION["emri"]; ?></span> </h2>
    <?php } ?>


        
        
        


          
        
        
        <ul>
            
            <a href="index.php"> <li  class="current-page"  >Home</li>  </a>
            <a href ="about.php"> <li class = "other-page"> About Us</li> </a>
            <a href ="contact.php"> <li class = "other-page"> Contact Us</li> </a>
            
            <?php if (isset($_SESSION["usertype"]) && $_SESSION["usertype"] == "Admin") { ?>
  <a href="dashboard.php"> <li class="other-page"> Dashboard</li> </a>
<?php } ?>
                
            
            <?php if (isset($_SESSION['emri'])) { ?>
            <a href =logout.php> <li class = "other-page"> Log Out</li> </a>
        <?php } else { ?>
            <a href =login.php> <li  class = "other-page login"> Log In</li> </a>
        <?php } ?>
        </ul>
        

    </div>

    <div class = "content">
    <?php
                include 'model.php';
                $model = new Model();
                $rows = $model->fetchCourse(); 
                ?>
        <div class="section1">
            <div class ="categories">
            <p class = "course-text ">COURSE CATEGORIES</p>
            <div class ="category"> 
                <img src ="Images/websites.png">
                <label> <?php echo $rows[0]['Course Category'] ?? 'Unknown course category'; ?></label>
            </div>

            <div class ="category"> 
                <img src ="Images/engineering.png">
                <label> <?php echo $rows[1]['Course Category'] ?? 'Unknown course category'; ?></label>
            </div>

            <div class ="category"> 
                <img src ="Images/dashboard.png">
                <label> <?php echo $rows[2]['Course Category'] ?? 'Unknown course category'; ?></label>
            </div>

            <div class ="category"> 
                <img src ="Images/cyber-security.png">
                <label> <?php echo $rows[3]['Course Category'] ?? 'Unknown course category'; ?></label>
            </div>

            <div class ="category"> 
                <img src ="Images/algorithm.png">
                <label> <?php echo $rows[4]['Course Category'] ?? 'Unknown course category'; ?></label>
            </div>
        </div>

               <div class ="courses">
                
            <p class = "course-text"> COURSES</p>

               <div class = "course"> 
                  <img class="thumbnail" src="Images/webcourse.png">
                  <label class="course-title"><?php echo $rows[0]['Course Name'] ?? 'Unknown course'; ?></label>
                  <img class="icon" src="Images/time.png"> <label class = "course-time"><?php echo $rows[0]['Course Duration']?></label>
                  <label class = "price"><?php echo $rows[0]['Course Price']?> </label>
                 </div>

               <div class = "course"> 
                   <img  class="thumbnail" src ="Images/c++.png">
                   <label class="course-title"><?php echo $rows[1]['Course Name'] ?? 'Unknown course'; ?></label>
                  <img class="icon" src="Images/time.png"> <label class = "course-time"><?php echo $rows[1]['Course Duration']?></label>
                  <label class = "price"><?php echo $rows[1]['Course Price']?> </label>  
            </div>

               <div class = "course">
                  <img class="thumbnail" src ="Images/sql.png">
                  <label class="course-title"><?php echo $rows[2]['Course Name'] ?? 'Unknown course'; ?></label>
                  <img class="icon" src="Images/time.png"> <label class = "course-time"><?php echo $rows[2]['Course Duration']?></label>
                  <label class = "price"><?php echo $rows[2]['Course Price']?> </label>     
            </div>

               <div class = "course">
                   <img class="thumbnail" src ="Images/Networking.png">
                   <label class="course-title"><?php echo $rows[3]['Course Name'] ?? 'Unknown course'; ?></label>
                  <img class="icon" src="Images/time.png"> <label class = "course-time"><?php echo $rows[3]['Course Duration']?></label>
                  <label class = "price"><?php echo $rows[3]['Course Price']?> </label>  
            </div>

            <div class = "course"> 
                <img  class="thumbnail" src ="Images/algo.png">
                <label class="course-title"><?php echo $rows[4]['Course Name'] ?? 'Unknown course'; ?></label>
                  <img class="icon" src="Images/time.png"> <label class = "course-time"><?php echo $rows[4]['Course Duration']?></label>
                  <label class = "price"><?php echo $rows[4]['Course Price']?> </label>
               </div>

               <div class = "course"> 
                <img  class="thumbnail" src ="Images/design.png">
                <label class="course-title"><?php echo $rows[5]['Course Name'] ?? 'Unknown course'; ?></label>
                  <img class="icon" src="Images/time.png"> <label class = "course-time"><?php echo $rows[5]['Course Duration']?></label>
                  <label class = "price"><?php echo $rows[5]['Course Price']?> </label>
               </div>

               <div class = "course"> 
                <img  class="thumbnail" src ="Images/java.png">
                <label class="course-title"><?php echo $rows[6]['Course Name'] ?? 'Unknown course'; ?></label>
                  <img class="icon" src="Images/time.png"> <label class = "course-time"><?php echo $rows[6]['Course Duration']?></label>
                  <label class = "price"><?php echo $rows[6]['Course Price']?> </label>
               </div>

               <div class = "course"> 
                <img  class="thumbnail" src ="Images/python.png">
                <label class="course-title"><?php echo $rows[7]['Course Name'] ?? 'Unknown course'; ?></label>
                  <img class="icon" src="Images/time.png"> <label class = "course-time"><?php echo $rows[7]['Course Duration']?></label>
                  <label class = "price"><?php echo $rows[7]['Course Price']?> </label>
               </div>

               <div class = "course"> 
                <img  class="thumbnail" src ="Images/cyber.png">
                <label class="course-title"><?php echo $rows[8]['Course Name'] ?? 'Unknown course'; ?></label>
                  <img class="icon" src="Images/time.png"> <label class = "course-time"><?php echo $rows[8]['Course Duration']?></label>
                  <label class = "price"><?php echo $rows[8]['Course Price']?> </label>
               </div>

               <div class = "course"> 
                <img  class="thumbnail" src ="Images/algo2.png">
                <label class="course-title"><?php echo $rows[9]['Course Name'] ?? 'Unknown course'; ?></label>
                  <img class="icon" src="Images/time.png"> <label class = "course-time"><?php echo $rows[9]['Course Duration']?></label>
                  <label class = "price"><?php echo $rows[9]['Course Price']?> </label>
               </div>

            </div>

        </div>

        
        <div class ="section2">
            <div class="section2-text">
                <p id ="p1">Why <br> Marvel Tech <br> Academy</p>
                <p id ="p2">Start your programming journey here.
                    Join the millions learning to code with Marvel Tech Academy for free</p>
             
            </div>
            <div class="section2-pros">
                <div class ="pro">
                    <img src ="Images/flex.png"> <label> Flexible schedule and environment</label>
                </div>
                <div class ="pro">
                    <img src ="Images/cost.png"> <label> Lower cost with more choice of course</label>
                </div>

                <div class ="pro">
                    <img src ="Images/work.png"> <label> Work from Anywhere, at any time</label>
                </div>

            </div>
        </div>


        <div class="section3">
            <div class ="section3-content">
            <p class="section3-title"> Instructors</p>
            <div class = "section3-row">
                <div class ="instructor"> 
                    <img src="Images/ins1.png">
                    
                </div>

                <div class ="instructor"> 
                    <img src="Images/ins2.png">
                   
                </div>

                <div class ="instructor"> 
                    <img src="Images/ins3.png">
                    
                </div>

                <div class ="instructor"> 
                    <img src="Images/ins4.png">
                   
                </div>
            </div>

        </div>


    </div>
    </div>
    <div class="footer">
        <div class="footer-content">
            <div>
            <p class = "footer-p1"> Get our latest <br> updates</p>
            <P class ="footer-p2"> Receive important updates, exclusive offers,
                 and insider tips to get the most out of your online business.</P>
                 <input type ="email" placeholder="Email Address..."> 
                 <button type="submit"> Send</button>
                 </div>
                 <div>
                 <img src="images/updates.png">
                 </div>
                
        </div>
    </div> 
</div>
    


<script src = "Js/main.js"></script>
</body>
</html>