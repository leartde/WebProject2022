<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/contact.css">
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
            <a href ="about.php"> <li class = "other-page"> About Us</li> </a>
            <a href ="contact.php"> <li class = "current-page"> Contact Us</li> </a>
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
            $insertContact = $model->insertContact();
            $rows = $model->fetchContactInfo();
            
            ?>
        <div class = "section1">
            <div class ="section1-text">
            <h3 class ="section1-heading">Get in touch</H3>
            <p class = "section1-label"> Address</p>
            <p> <?php echo $rows[0]['Address'] ?>
            </p>
            <p class = "section1-label"> Phone: <span> <?php echo $rows[0]['Phone'] ?> </span></p>
            <p class = "section1-label"> Website: <span > <?php echo $rows[0]['Website'] ?> </span></p>
            <p class = "section1-label"> Email: <span > <?php echo $rows[0]['Email'] ?> </span></p>
            
            </div>
            
        

        <div class ="map">
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3315.551124458778!2d-118.1863723!3d33.798088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd33e10563a5af%3A0x87cbeced5b9f4e6d!2s2251%20Linden%20Ave%2C%20Long%20Beach%2C%20CA%2090806%2C%20Shtetet%20e%20Bashkuara%20t%C3%AB%20Amerik%C3%ABs!5e0!3m2!1ssq!2s!4v1672001879851!5m2!1ssq!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>

        <div class = "section2">
            <div class ="contact-form">
            
                <form method="post" name="contact-form" onsubmit = "return validated()">
                <fieldset>
                    <h3 class ="form-heading"> Drop us a line!</h3>
                <label> Your Name(required) </label>
                <input name="contact_name" type="text">
                <p id ="name_error" class="error"> error</p>

                <label> Your Email(required) </label>
                <input name="contact_email" type="email">
                <p  id ="email_error" class="error"> error</p>

                <label> Subject </label>
                <input name="contact_subject" type="text">


                <label> Your Message</label>
                <textarea class ="message" name="contact_message" type="text"> </textarea>
                <input type="submit" name="submit" value="Send" class = "button"> </button>
                    
                </fieldset>
                </form>
                <script src="js/contact.js"></script>
        </div>
    </div>

    
</body>
</html>