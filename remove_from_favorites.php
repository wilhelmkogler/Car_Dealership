<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: bejelentkez.php");
    exit();
}
include("db_connection.php");

if (isset($_POST['record_id'])) {
    $record_id = $_POST['record_id'];
    $email = $_SESSION['email'];

    $delete_query = "DELETE FROM `garage` WHERE car_id='$record_id' AND user_email='$email'";
    mysqli_query($conn, $delete_query);

    header("Location: profil.php");
    exit();
}
?>
