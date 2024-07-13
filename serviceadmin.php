<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
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

  /* .clients{
   background-color: var(--light-bg);
}

.clients .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:2rem;
}

.clients .box-container .box{
   background-color: var(--white);
   text-align: center;
   border-radius: .5rem;
   box-shadow: var(--box-shadow);
   padding:2rem;
}

.clients .box-container .box img{
   height: 10rem;
   width: 10rem; */
   /* border-radius: 50%; */
/* }

.clients .box-container .box p{
   padding:2rem 0;
   line-height: 2;
   font-size: 1.5rem;
   color:var(--light-color);
   margin-bottom: 0;
}

.clients .box-container .box .stars{
   padding:.5rem 1.5rem;
   border-radius: .5rem;
   background-color: var(--light-bg);
   margin-bottom: 2rem;
   display: inline-block;
}

.clients .box-container .box .stars i{
   font-size: 1.5rem;
   color:var(--blue);
}

.clients .box-container .box h3{
   font-size: 2rem;
   color:var(--black);
}

.clients .box-container .box span{
   color:var(--light-color);
   font-size: 1.5rem;
} */
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
    <a href="homeadmin.php">Home</a> 
    <a class="dropdown-item" href="serviceadmin.php">Services</a>
    <a class="dropdown-item" href="galleryadmin.php">Gallery</a>
    <a href="product2.php">Contact us</a>
    <a href="aboutadmin.php">About us</a>
    <a href="product1.php">Booking</a>
    <a href="product3.php">Register</a>
    <a href="login.php">Logout</a>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- Header section ends -->

<!-- <div class="heading" style="background:url(bus.jpeg) no-repeat ">
    <h1>Services</h1>
</div> -->

<!-- Services section starts -->

<section class="service">
<h1 class="heading-title">Services</h1>
<div class="slogo">
   <img src="bus icon1.png" alt="">
   <h1>BUS RENTAL SERVICES</h1>
   <p>Discover convenience and comfort with our exceptional bus rental services. Whether it's a family reunion, school excursion, or corporate event, we offer a versatile fleet of buses available for rent. Our professional drivers and well-maintained vehicles ensure a safe and enjoyable journey for your group. From minibusses to full-sized coaches, we have the perfect option to suit your needs. Experience hassle-free travel and reliable service with us as your trusted bus rental provider. Your destination awaits - let us take you there in style.</p>   
</div>

<div class="slogo">
   <img src="bus icon2.png" alt="">
   <h1>DRIVER AND CONDUCTORS PROVIDER</h1>
   <p>Experience seamless transportation solutions with our skilled bus drivers and conductors available for rent. Whether you need a reliable driver for a school trip, a corporate event, or a special occasion, our professionals are here to ensure a smooth journey. With a focus on safety, punctuality, and customer satisfaction, our team is dedicated to providing top-notch service. Sit back and relax as our experienced drivers navigate the roads while our courteous conductors assist your passengers. Make your travel experience memorable and stress-free with our dependable bus driver and conductor rental services.</p>   
</div>

</section>

<!-- Services section ends -->

<!-- client section starts  -->

<section class="clients">
<h1 class="heading-title">Our Clients</h1>
<div class="box-container container">

   <div class="box">
      <img src="https://seeklogo.com/images/S/shell-logo-25F8B6686F-seeklogo.com.png" alt="">
      
      <h3>Shell</h3>
      <!-- <span>POST</span> -->
   </div>

   <div class="box">
      <img src="https://globalprimenews.com/wp-content/uploads/2022/03/image.png" alt="">
      
      <h3>Vedanta</h3>
      <!-- <span>POST</span> -->
   </div>

   <div class="box">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Adani_2012_logo.png/1200px-Adani_2012_logo.png" alt="">
      
      <h3>Adani</h3>
      <!-- <span>POST</span> -->
   </div>

   <div class="box">
      <img src="https://ibentos.com/public/assets/images/ibentos/logo-images/108-2.png" alt="">
      
      <h3>AM/NS</h3>
      <!-- <span>POST</span> -->
   </div>

   <div class="box">
      <img src="https://www.gia.edu/img/GIA_Logo.png" alt="">
      
      <h3>GIA</h3>
      <!-- <span>POST</span> -->
   </div>

   <div class="box">
      <img src="https://dwglogo.com/wp-content/uploads/2017/01/Larsen-Toubro-logo-01-768x529.png" alt="">
      
      <h3>LARSEN & TAUBRO</h3>
      <!-- <span>POST</span> -->
   </div>

</div>
</section>

<!-- client section ends -->



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