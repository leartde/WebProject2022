<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/about.css">
    <title>Marvel Tech Academy - Online Courses for Free!</title>
</head>
<body>
    <div id ="header">
    
        <img src="Images\mortarboard.png">
        <?php if (isset($_SESSION['emri'])) { ?>
        <h2> Logged in As <span><?php echo $_SESSION["emri"]; ?></span> </h2>
    <?php } ?>


        
        
        


          
        
        
        <ul>
            
            <a href="index.php"> <li  class="other-page"  >Home</li>  </a>
            <a href ="about.php"> <li class = "current-page"> About Us</li> </a>
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

    <div class="content">
    <?php
            include 'model.php';
            $model = new Model();
            $rows = $model->fetchAbout();
            
            ?>
        <div class="section1">
            <h1 >Dive into the <span> Marvel Tech </span> Experience</h1>
            <h2> Reimagine | Redefine | Reify </h2>
        </div>
        <div class="section2">
            <h1> About Marvel Tech</h1>
            <p>Created in 2022 , our website will help you <br>start your
                journey of programming,networking or data analysis.
                 <br>
                 
            </p>
        </div>
        <div class="section3">
            <div class="elements-row">
                <div class="element">
                    <img src = "Images/eye.png">
                    <h3> <?php echo $rows[0]['title'] ?></h3>
                    <p><?php echo $rows[0]['description'] ?></p>
                </div>
                <div class="element">
                    <img src="images/pen.png">
                    <h3><?php echo $rows[1]['title'] ?></h3>
                    <p><?php echo $rows[1]['description'] ?></p>
                </div>
                <div class="element">
                    <img src ="Images/plug.png">
                    <h3><?php echo $rows[2]['title'] ?></h3>
                    <p><?php echo $rows[2]['description'] ?></p>
                </div>
                <div class="element">
                    <img src="Images/star.png">
                    <h3><?php echo $rows[3]['title'] ?></h3>
                    <p><?php echo $rows[3]['description'] ?></p>
                </div>
            </div>
        </div>
        <div class="section4">
            <p class="faq"> FAQ</p>
            <div class="div1"> <p class="question">How much does registration in a course cost ? </p>
                <p class = "answer">You can register on any of our corses - completely for free!</p>
                <p class="question"> How can I contact support ? </p>
                <p class="answer">You can click <a href="Contact.php"> here </a> and fill the form !</p>
            
            </div>
            <div class="div2">
                <p class="question"> Does Marvel Tech Academy collect personal data</p>
                <p class="answer"> No, we do not collect any personal data.</p>
                <p class="question"> How can I get an ad-free experience?</p>
                <p class="answer"> You can get a completely ad-free experience by subscribing with a Premium Membership! </p>
            </div>

        </div>
    </div>
    
</body>
</html>