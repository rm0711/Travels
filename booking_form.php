<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $bus_type = $_POST['bus_type'];
    $mode = $_POST['mode'];
    $arrival = $_POST['arrival'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO `booking_form`( `name`, `email`, `mobileno`, `address`, `bus_type`, `mode`, `arrival`, `leaving`) VALUES ('$name','$email','$phone','$address','$bus_type','$mode','$arrival','$leaving')" or die("querry failed");

    $result= mysqli_query($conn, $request);

    header('location:Home.php');
}
else{
    echo 'something went wrong try agabus_in';
}
?>

