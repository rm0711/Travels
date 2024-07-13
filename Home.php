<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="slider.css">
  <!-- swiper css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  *{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

.header .logo img {
  display: block;
  width: 100px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
}

</style>
</head>
<body>
<!-- Header section starts -->


<section class = header>
  <!-- Insert your logo image here -->
  <a href="user.php" class="logo">
    <img src="Hazira_logo.png" alt="Logo">
  </a>
  <!-- <a href="user.php" class="logo"></a> -->
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
<!-- Header section ends -->

<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background:url(n1.jpg) no-repeat "> </div>
      <div class="swiper-slide" style="background:url(n2.jpg) no-repeat"> </div>
      <div class="swiper-slide" style="background:url(n3.jpg) no-repeat"></div>
      <div class="swiper-slide" style="background:url(n4.jpg) no-repeat"></div>
      <div class="swiper-slide" style="background:url(n5.jpg) no-repeat"></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
<!-- Swiper-over-->
<!-- services section starts -->
<section class="services">
  <h1 class="heading-title">Our Services</h1>
  <div class="box-container">
    <a href="Service.php"><div class="box">
      <img src="bus icon1.png" alt="">
      <h3>bus rental Services</h3>
    </div></a>
    <a href="Service.php"><div class="box">
      <img src="bus icon2.png" alt="">
      <h3>Driver And Conductor Provider</h3>
    </div></a>
  </div>
</section>
<!-- services section ends -->

<!-- home about section starts -->
<section class="home-about">
  <div class="image">
    <img src="https://haziravikastravels.com/wp-content/uploads/2023/08/img37-2-scaled.jpg" alt="">
  </div>
  <div class="content">
    <h3>about us</h3>
    <p>We are providing service for transportation of Employees of these organizations and for the school going Children. We provide vehicles with 10 to 56 seats both with and without air condition......</p>
    <a href="About.php" class="btn">read more</a>
  </div>
</section>
<!-- home about section ends -->

<!-- Footer section starts -->

<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>quick links</h3>
    <a href="user.php"> <i class="fas fa-angle-right"></i> Home</a> 
    <a class="dropdown-item" href="Service.php"> <i class="fas fa-angle-right"></i> Services</a>
    <a class="dropdown-item" href="Gallery.php"> <i class="fas fa-angle-right"></i> Gallery</a>
    <a href="contact.php"> <i class="fas fa-angle-right"></i> Contact us</a>
    <a href="About.php"> <i class="fas fa-angle-right"></i> About us</a>
    <a href="booking.php"> <i class="fas fa-angle-right"></i> Booking</a>
    <a href="enquiry.php"> <i class="fas fa-angle-right"></i> Enquiry</a>

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

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script src="script.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
</body>
</html>

<!-- <a class="btn btn-outline-primary dropdown-toggle show" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
         Home
       </a> 
       <ul class="dropdown-menu show" aria-labelledby="dropdownMenuButton">
         <li><a class="dropdown-item" href="#">Services</a></li>
         <li><a class="dropdown-item" href="#">Gallery</a></li>
       </ul> -->