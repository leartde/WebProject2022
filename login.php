<?php


$server = "localhost:3307";
$username = "root";
$password = '';
$database = "marveltech";


$data=mysqli_connect($server,$username,$password,$database);




if($data===false){
  die("connection error");
}



if($_SERVER["REQUEST_METHOD"]=="POST"){
  session_start();
  $email=$_POST["Email"];
  $password=$_POST["Password"];

  $sql = "SELECT * FROM users WHERE Email='" . $email . "' AND Password='" . $password . "'";

  $result=mysqli_query($data,$sql);

  $row = mysqli_fetch_array($result);



  if($row["usertype"]=="User"){
    session_start();
    $_SESSION["Email"]=$email;
    $_SESSION["emri"] = $row["Username"];
    $_SESSION["usertype"]=$row["usertype"];

    header("location:index.php");

  }

  if($row["usertype"]=="Admin"){
    session_start();
    $_SESSION["Email"]=$email;
    $_SESSION["emri"] = $row["Username"];
    $_SESSION["usertype"]=$row["usertype"];
    header("location:index.php");
      

}

   if (empty($row)) {
    echo "<script>alert('User does not exist.');
    window.location.href='login.php';</script>";
    
  }

  

}

?>



<!DOCTYPE html>
<html>
    <head>
        <title> Login</title>
        <link rel="stylesheet" href="css/login.css">
        
        
        
    </head>
    <body>
        
        
        
            <div id ="header">
                <img src="Images\mortarboard.png">
                <ul>
                    <a href="index.php"> <li  class="other-page"  >Home</li>  </a>
                    <a href ="about.php"> <li class = "other-page"> About Us</li> </a>
                    <a href ="contact.php"> <li class = "other-page"> Contact Us</li> </a>
                    <a href =login.php> <li class = "current-page"> Log In</li> </a>
                </ul>
            </div>

            <div id ="login">
                <form method="post" name="loginform" onsubmit = "return validated()" >
                <fieldset>
                    <legend> Welcome </legend>
                    <img src="Images\sign-in.png"> <br> <br> <br>
                    <input name="Email" type="email" placeholder="Email">
                    <p id="email_error"> Please fill your email!</p>
                    <input name ="Password" type="password" placeholder="Password">
                    <p id="password_error"> Password must contain at least 6 characters</p>
                    <input type="submit" class="button" value="Login"> </button>
                    <p class ="form-text"> Don't have an account? <a href="register.php"> Sign up! </a> </p>



                </fieldset>
                </form>
                <script src="js/login.js"></script>



            </div>


            
    </body>
</html>