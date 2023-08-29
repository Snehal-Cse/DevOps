
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="signup2.css">
</head>
<body>
   <script src="signup.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet" href="signup2.css">
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
<!-- sign up -->


<div class="signup-form">
  <div class="container">
    
  <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once "database.php"; // Make sure the database connection is included correctly

    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = [];

    if (empty($fullName) || empty($email) || empty($password) || empty($passwordRepeat)) {
        $errors[] = "All fields are required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is not valid";
    }
    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }
    if ($password !== $passwordRepeat) {
        $errors[] = "Password does not match";
    }

    $sql = "SELECT * FROM user2 WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $errors[] = "Email already exists!";
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        $sql = "INSERT INTO user2 (full_name, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "<div class='alert alert-success'>You are registered successfully.</div>";
        } else {
            echo "<div class='alert alert-danger'>Something went wrong</div>";
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>

<!-- The rest of your HTML code remains unchanged -->
        <div class="header">
      <h1>Create an Account</h1>
      <p>Get started for free!</p>
    </div>
    <form action="signup2.php" method="post">
      <div class="input">
        <span class="user"><i class="fa-solid fa-user"></i></span>
        <input type="text"  name="fullname" placeholder="Full Name:" />
      </div>
      <div class="input">
        <i class="fa-solid fa-envelope"></i>
        <input type="email"  name="email" placeholder="Email:" />
      </div>
      <div class="input">
        <i class="fa-solid fa-lock"></i>
        <input type="password"  name="password" placeholder="Password:" />
      </div>
      <div class="input">
        <i class="fa-solid fa-lock"></i>
        <input type="password"  name="repeat_password" placeholder="Repeat Password:" />
      </div>
      <!-- <div class="input"> -->
        <!-- <div class="dropdown">

          <select name="designation" id="designation">
            <option value="User">User</option>
          <option value="Doctor">Doctor</option>
        </select> 
        </div> -->
      <!-- </div> -->
      <input class="signup-btn" type="submit" value="SIGN UP" />
    </form>
   <span class="new"><p>Or sign up with</p></span> 
    <div class="social-icons">
      <i class="fa-brands fa-facebook-f"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-google"></i>
    </div>
    <p class="last">Already have an account? <a href="login2.php">Sign in</a></p>
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