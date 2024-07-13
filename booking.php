<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link rel="stylesheet" href="Style.css">
  <!-- swiper css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
  *{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
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
<!-- Header section ends -->

<!-- <div class="heading" style="background:url(https://haziravikastravels.com/wp-content/uploads/2023/08/img37-2-scaled.jpg) no-repeat ">
    <h1>Bus Booking</h1>
</div> -->

<!-- booking section starts -->
<section class="contact">
  <h1 class="heading-title">Book your bus!!</h1>

  <form action="booking_form.php" method="post" class="contact-form">
    <div class="flex">
      <div class="inputBox">
        <span>full name :</span>
        <input type="text" required placeholder="enter your name" name="name">
      </div>
      <div class="inputBox">
        <span>email ID :</span>
        <input type="email" required placeholder="enter your email" name="email">
      </div>
      <div class="inputBox">
        <span>Phone no. :</span>
        <input type="number" required placeholder="enter your number" name="phone">
      </div>
      <div class="inputBox">
        <span>Address :</span>
        <input type="text" required placeholder="enter your address" name="address">
      </div>
      <div class="inputBox">
        <!-- <span>Type of bus :</span>
        <br>
        <br> -->
<!--<input type="text" placeholder="enter bus type" name="type"> -->
        <!-- <select name="type" placeholder="Enter Bus Type" type="text">
        <option value="">double</option>
        <option value="">single</option>
        </select> -->
        <span>Type of Bus :</span><br><br>
            <select type="text"  name="bus_type">
                <option value="" selected hidden>(select one)</option>
                <option value="Single Deck Bus">Single Deck Bus</option>
                <option value="Double Decker Bus">Double Decker Bus</option>
                <option value="Traveller">Traveller</option>
            </select>
      </div>
      <div class="inputBox">
        <span>Mode :</span>
        <br>
        <br>
        <!-- <input type="number" placeholder="enter bus seater" name="seater"> -->
        <select type="number"  name="mode" >
          <option value="" selected hidden>(select one)</option>
          <option value="AC">AC</option>
          <option value="Non-AC">Non-AC</option>
        </select>
      </div>
      <div class="inputBox">
        <span>Arrivals :</span>
        <input type="date" name="arrival">
      </div>
      <div class="inputBox">
        <span>Leaving :</span>
        <input type="date" name="leaving">
      </div>
  </div>
  <input type="submit" value="submit" class="btn" name="send">
  </form>
</section>
<!-- booking section ends -->




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
    <a href="enquiry.php"> <i class="fas fa-angle-right"></i> Enquiry</a>
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
<!-- <a class="btn btn-outline-primary dropdown-toggle show" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
         Home
       </a> 
       <ul class="dropdown-menu show" aria-labelledby="dropdownMenuButton">
         <li><a class="dropdown-item" href="#">Services</a></li>
         <li><a class="dropdown-item" href="#">Gallery</a></li>
       </ul> -->