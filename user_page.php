<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
   body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.content {
    text-align: center;
    color: #333;
}

h3 {
    font-size: 1.2em;
    margin-bottom: 10px;
}

h1 {
    color: #3498db;
    margin-bottom: 20px;
}

span {
    font-weight: bold;
}

p {
    color: #555;
    margin-bottom: 20px;
    line-height: 1.5;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 5px;
    text-decoration: none;
    color: #fff;
    background-color: #8e44ad;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #27ae60;
}

</style>
</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="login.php" class="btn">login</a>
      <a href="register.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
      <a href="homeguest.php" class="btn">Home</a>
      <a href="contact.php" class="btn">Contact us</a>
      <a href="booking.php" class="btn">Booking</a>
      
   </div>

</div>

</body>
</html>