<?php
include 'db_connection.php';
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: profil.php");
    exit();
}
$email = $_SESSION['email'];

$car_id = $_POST['car_id'];
$car_year = $_POST['car_year'];
$car_brand = $_POST['car_brand'];
$car_type = $_POST['car_type'];
$car_price = $_POST['car_price'];
$car_pic = $_POST['car_pic'];

$sql = "INSERT INTO garage (car_id, car_year, car_brand, car_type, car_price, car_pic, user_email)
 VALUES ('$car_id', '$car_year', '$car_brand', '$car_type', '$car_price', '$car_pic', '$email')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['success_message'] = " ";
    header("Location: autoink.php");
    exit();   
    
} else {
    echo "Hiba a beszúrás során: " . $conn->error;
}

$conn->close();
?>
