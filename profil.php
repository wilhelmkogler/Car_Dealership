<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: bejelentkez.php");
    exit();
}
include("db_connection.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['clear_garage'])) {
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $stmt = $conn->prepare("DELETE FROM `garage` WHERE user_email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWheels - My Account</title>
    <link rel="icon" type="image/x-icon" href="img/autoink/car-check.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/profil.css">


</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="index.php">KWHEELS</a>
            </div>
            <ul class="links">
                <li><a href="autoink.php">Cars for Sale</a></li>
                <li><a href="berles.html">Rent a Car</a></li>
                <li><a href="index.php#whyus">About Us</a></li>
                <li><a href="kapcsolatesfaq.html">Contact</a></li>
            </ul>
            <a href="profil.php" class="action_btn"><i class="fa fa-user"></i> My Account</a>
            <div class="toggle_btn">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="autoink.php">Cars for Sale</a></li>
            <li><a href="berles.html">Rent a Car</a></li>
            <li><a href="index.php#whyus">About Us</a></li>
            <li><a href="kapcsolatesfaq.html">Contact</a></li>
            <li><a href="profil.php" class="action_btn">My Account</a></li>
        </div>

        <div class="container_profil">
            <div class="left">
                <div class="title">
                    <h2>Personal Details</h2>

                </div>
                <div class="userdetails">
                    <?php
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];

                        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                        while ($row = mysqli_fetch_array($query)) {
                            echo '<table>';
                            echo '<tr><th>First Name:</th><td>' . $row['firstName'] . '</td></tr>';
                            echo '<tr><th>Last Name:</th><td>' . $row['lastName'] . '</td></tr>';
                            echo '<tr><th>Email Address:</th><td>' . $row['email'] . '</td></tr>';
                            echo '<tr><th>Password:</th><td>' . str_repeat('*', $row['password_length']) . '</td></tr>';
                            echo '</table>';
                        }
                    }
                    ?>
                </div>

                <div class="logout">
                    <form method="post" action="logout.php" id="logout_form">
                        <button type="button" onclick="confirmLogOut()">Forgot Password</button>
                        <button type="button" onclick="confirmLogOut()">Log Out</button>

                    </form>
                </div>
            </div>

            <div class="right">
                <div class="title">
                    <?php
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];
                        $result = mysqli_query($conn, "SELECT COUNT(DISTINCT car_id) AS count FROM `garage` WHERE garage.user_email='$email'");
                        $row = mysqli_fetch_assoc($result);
                        $count = $row['count'];
                        echo '<h2>Garage (' . $count . ')</h2>';
                    }
                    ?>
                </div>

                <div class="cars">
                    <?php
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];

                        $query = mysqli_query($conn, "SELECT Id, car_id, car_year, car_brand, car_type, car_price, car_pic FROM `garage` WHERE  user_email='$email' GROUP BY car_id ORDER BY car_brand");


                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_array($query)) {

                                echo '<table class="telitabla">';
                                echo '<tr><td colspan="3"><img src="' . $row['car_pic'] . '" alt="Kep"></td></tr>';
                                echo '<tr><th colspan="3">' . $row['car_year'] . ' ' . $row['car_brand'] . ' ' . $row['car_type'] . '</th></tr>';
                                echo '<tr><td colspan="3">' . number_format($row['car_price'], 0, ',', '.') . ' €</td></tr>';

                                echo "<form method='post' action='remove_from_favorites.php'>";
                                echo "<input type='hidden' name='record_id' value='" . $row['car_id'] . "'>";
                                echo '<tr><td colspan="3"><button type="submit" id="trash"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>';
                                echo "</form>";

                                echo '</table>';
                            }
                        } else {

                            echo '<table class="urestabla">';
                            echo '<tr><td>Your garage is empty</td></tr>';
                            echo '</table>';
                        }
                    }
                    ?>
                </div>

                <div class="clear">
                    <form id="clear_garage_form" method="post" action="">
                        <button type="button" onclick="confirmClearGarage()">Clear Garage</button>
                        <input type="hidden" name="clear_garage" value="1">
                    </form>
                </div>


            </div>

        </div>

    </header>


    <div class="scroll-top-wrapper">
        <button class="scroll-top" title="Vissza az oldal tetejére" onclick="scrollToTop()">&#9650;</button>
    </div>



    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Our Company</h4>
                    <ul>
                        <li><a href="autoink.php">Cars for Sale</a></li>
                        <li><a href="berles.html">Rent a Car</a></li>
                        <li><a href="index.php#whyus">About Us</a></li>
                        <li><a href="kapcsolatesfaq.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Car Selection</h4>
                    <ul>
                        <li><a href="index.php#uj">New (Showroom)</a></li>
                        <li><a href="index.php#hasznalt">Used</a></li>
                        <li><a href="index.php#elektromos">Electric</a></li>
                        <li><a href="index.php#hybrid">Hybrid</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="profil.php">My Account</a></li>
                        <li><a href="index.php#calculator_link">Loan Calculator</a></li>
                        <li><a href="index.php#message">Send a Question</a></li>
                        <li><a href="kapcsolatesfaq.html#faq" title="Frequently Asked Questions">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Social Media</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/koglerwilhelm/"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-snapchat"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="rights">
        <h5>KWheels © 2025. All rights reserved.</h5>
    </div>


    <script src="javascript/profil.js"></script>
</body>

</html>