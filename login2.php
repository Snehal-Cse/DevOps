<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: oneagain.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="login2.css">
</head>
<body>
   <script src="signup.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet" href="login2.css">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;400;500;600;700;800;900&family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 

<!--PLUGIN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<!--TOP MENU-->
<!--NAV-->
<nav class="navbar">
    <section class="flex_content">
        <figure class="logo fixed_flex">
            <img src="bird.png.png" alt="logo">
            <figcaption>
                <strong class="title">V4U</strong> 
            </figcaption>
        </figure>
    </section>
    <section class="flex_content nav_content" id="nav_content">
        <a href="oneagain.html" ><b>Home</b></a>
        <a href="plansagain.html" ><b>Plans</b></a>
        <a href="blog.html" class="contact_btn"><b>Blogs</b></a>
        <a href="aboutagain.html" ><b>About us</b></a>
    </section>
    <a href="#contact_me" id="contact_link" class="link">
      <div class="new"><a href="login2.php"><button class="contactme contact"><b>Log In</b></button></a>
        <a href="signup2.php"><button class="contactme contact"><b>Sign Up</b></button></a></a>
        </div>
</nav>

 

<!-- Log in -->
<div class="signup-form">
  <div class="container">
  <?php
        if (isset($_POST["login2"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM user2 WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: oneagain.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>

      
    <div class="header">
      <h1>Lets Fight together!</h1>
    </div>
    <form action="login2.php" method="post">
      <div class="input">
        <i class="fa-solid fa-envelope"></i>
        <input type="email" placeholder="Email" />
      </div>
      <div class="input">
        <i class="fa-solid fa-lock"></i>
        <input type="password" placeholder="Password" />
      </div>
      <input class="signup-btn" type="submit" value="Log In" />
    </form>
   <span class="new"><p>Or Log in with</p></span> 
    <div class="social-icons">
      <i class="fa-brands fa-facebook-f"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-google"></i>
    </div>
    <p class="last">New to V4U? <a href="signup2.php">Sign Up</a></p>
  </div>
</div>

    
    <!-- footer -->
    <footer class="footbar">
        <div class="footer">
        <div class="row">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        
        <div class="row">
        <ul>
        <li><a href="contactagain.html">Contact Us</a></li>
        <li><a href="privacy.html">Privacy Policy</a></li>
        <li><a href="terms.html">Terms & Conditions</a></li>
        <li><a href="aboutagain.html">About Us</a></li>
        </ul>
        </div>
        
        <div class="row">
        INFERNO Copyright © 2023 Inferno - All rights reserved.
        </div>
        </div>
        </footer>
        
        
        </body>
</html>