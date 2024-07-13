<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $request = "INSERT INTO `contact_form`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')" or die("querry failed");

    $result= mysqli_query($conn, $request);

    header('location:Home.php');
}
else{
    echo 'something went wrong try again';
}
?>