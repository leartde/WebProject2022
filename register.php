<!DOCTYPE html>
<html>
    <head>
        <title> Register</title>
        <link rel="stylesheet" href="css/register.css">
         </head>
        <body>
            <div id ="header">
                <img src="Images\mortarboard.png">
                <ul>
                    <a href="index.php"> <li  class="other-page"  >Home</li>  </a>
                    <a href ="about.php"> <li class = "other-page"> About Us</li> </a>
                    <a href ="contact.php"> <li class = "other-page"> Contact Us</li> </a>
                    <a href =login.php> <li class = "other-page"> Log In</li> </a>
                </ul>

            </div>

            <div id ="form"> 
            <?php
            include 'model.php';
            $model = new Model();
            $insert = $model->insert();
            ?>
                <form name="signupform" method="post"  id ="form" onsubmit = "return validated()" action="" >
                <fieldset>
                    <legend> Create an account </legend>
                    <input class="input1" id ="emri" name ="emri" type="text" placeholder ="First Name">
                    <p id="firstname_error" class="error"> Error</p>

                    <input class="input1" id = "mbiemri" name ="mbiemri" type="text" placeholder ="Last Name">
                    <p id ="lastname_error" class="error"> Error</p>

                    <input class="input1" id ="email" name ="email" type="email" placeholder ="Email"> 
                    <p id ="email_error" class="error"> Error</p>  

                    <input class="input1" id ="password" name ="password" type="password" placeholder ="Enter a Password"> 
                    <p  id ="pass_error"class="error"> Error</p>  

                    <input class="input1" id ="cPassword" name ="cPassword" type="password" placeholder ="Confirm Password">
                    <p id ="cpass_error" class="error"> Error</p>


                    <label for="checkbox1"> By clicking here, I state that I have read 
                        and understood the terms and conditions.</label>
                    <input name="checkbox1" id="checkbox1" type = "checkbox">
                    <input type="submit" name = "submit" value="Register" class="button" >      
                </fieldset>
                </form>



            </div>
            <script src = "Js/register.js"></script> 
            

            

        </body>
    
</html>


