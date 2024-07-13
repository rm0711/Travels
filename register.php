<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['pass']);
   $cpass = md5($_POST['cpass']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && pass = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, pass, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="Style.css">
  <!-- swiper css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}



.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
   background: #eee;
}

.form-container form{
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;
   text-align: center;
   width: 500px;
}

.form-container form h3{
   font-size: 30px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color:#333;
}

.form-container form input,
.form-container form select{
   width: 100%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
}

.form-container form select option{
   background: #fff;
}

.form-container form .form-btn{
   background: plum;
   color:#8e44ad;
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
}

.form-container form .form-btn:hover{
   background: #8e44ad;
   color:#fff;
}

.form-container form p{
   margin-top: 10px;
   font-size: 20px;
   color:#333;
}

.form-container form p a{
   color:#8e44ad;
}

.form-container form .error-msg{
   margin:10px 0;
   display: block;
   background: #8e44ad;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}
  </style>
</head>
<body>
  <!--Header section starts -->
<section class = header>
  <!-- Insert your logo image here -->
  <a href="user.php" class="logo">
    <img src="Hazira_logo.png" alt="Logo">
  </a>
  <nav class="navbar">
    <a href="Home.php">Home</a> 
    <a class="dropdown-item" href="Service.php">Services</a>
    <a class="dropdown-item" href="Gallery.php">Gallery</a>
    <a href="contact.php">Contact us</a>
    <a href="About.php">About us</a>
    <a href="booking.php">Booking</a>
    <a href="login.php">Login/Register</a>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!--Header section ends-->

<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

<!-- Footer section starts -->

<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>quick links</h3>
    <a href="Home.php"> <i class="fas fa-angle-right"></i> Home</a> 
    <a class="dropdown-item" href="Service.php"> <i class="fas fa-angle-right"></i> Services</a>
    <a class="dropdown-item" href="Gallery.php"> <i class="fas fa-angle-right"></i> Gallery</a>
    <a href="contact.php"> <i class="fas fa-angle-right"></i> Contact us</a>
    <a href="About.php"> <i class="fas fa-angle-right"></i> About us</a>
    <a href="booking.php"> <i class="fas fa-angle-right"></i> Booking</a>
    <a href="login.php"> <i class="fas fa-angle-right"></i> Login/Register</a>
    </div>

    <div class="box">
      <h3>extra links</h3>
    <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
    <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
    <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
    <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
    <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
    </div>

    <div class="box">
      <h3>Contact info</h3>
    <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
    <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
    <a href="#"> <i class="fas fa-envelope"></i> haziravikas@gmail.com </a>
    <a href="#"> <i class="fas fa-map"></i> surat, india - 395009 </a>
    </div>

    <div class="box">
      <h3>Follow us</h3>
    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
    <a href="#"> <i class="fa-brands fa-instagram"></i> instagram </a>
    <a href="#"> <i class="fab fa-linkedin-in"></i> linkedin </a>
    </div>
  </div>

  <div class="credit">created by <span>mr. frankmotor</span> | all right reserved!</div>
</section>

<!-- Footer section ends -->

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>