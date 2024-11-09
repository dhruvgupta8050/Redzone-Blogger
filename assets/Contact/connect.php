<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
  
    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $des = $_POST['des'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `email`, `phone`, `des`) VALUES ('$name','$email','$phone','$des');";    // echo $sql;
// Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
          if($insert == true){
        echo "Thank You For Your Feedback";
        }
  
    // Close the database connection
    $con->close();
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body onload="myFunction()">
    <div id="loading-screen">
                <div id="loading">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            <b>Welcome to Redzone Blogger Any Help you need then contact us we all are ready for you.</b>
          </p>
 
          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p><a href="https://www.google.com/maps/place/Pul+Pehlad+Pur,+New+Delhi/@28.4977981,77.2840586,15z/data=!3m1!4b1!4m5!3m4!1s0x390ce6d6cfd1084d:0xb73606f5b4e78e9b!8m2!3d28.4993959!4d77.2918391">Amir ilaka gupta farm<br>Pul Prahlad Pur<br>New Delhi 110044</a></p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p><a href="mailto:thevlogerboys611@gmail.com">thevlogerboys611@gmail.com</a></p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>
               <a href="tel:8851445021">+91-8851445021</a>
              </p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/Redzone-vlogger-103157041219293/">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://t.me/BETKINGOF1XAND4RA">
                <i class="fab fa-telegram"></i>
              </a>
              <a href="https://www.instagram.com/redzonevlogger/">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.youtube.com/channel/UC2eaZElVPvzjpbYG5SgCjbg">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
          <form action="connect.php" method="post">
           <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone"  class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="des" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" name="ok" class="btn" />
          </form>
   </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>
