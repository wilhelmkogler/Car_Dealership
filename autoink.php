<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>KWheels - Cars for Sale</title>
    <link rel="icon" type="image/x-icon" href="img/autoink/car-check.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/autoink.css">


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



        <div class="section_filter">
            <div id="szuro">
                <h1>Cars for Sale</h1>
                <form id="filterForm">

                    <fieldset>
                        <legend>Brand:</legend>
                        <?php
                        include 'db_connection.php';
                        $brandQuery = "SELECT DISTINCT Brand FROM cars ORDER BY Brand ASC";
                        $brandResult = $conn->query($brandQuery);
                        if ($brandResult->num_rows > 0) {
                            while ($row = $brandResult->fetch_assoc()) {
                                echo "<label><input type='checkbox' name='Brand[]' value='" . $row['Brand'] . "'> " . $row['Brand'] . "</label><br>";
                            }
                        }
                        ?>
                    </fieldset>

                    <fieldset>
                        <legend>Fuel Type:</legend>
                        <?php
                        $fuelQuery = "SELECT DISTINCT Fuel FROM cars ORDER BY Fuel ASC";
                        $fuelResult = $conn->query($fuelQuery);
                        if ($fuelResult->num_rows > 0) {
                            while ($row = $fuelResult->fetch_assoc()) {
                                echo "<label><input type='checkbox' name='Fuel[]' value='" . $row['Fuel'] . "'> " . $row['Fuel'] . "</label><br>";
                            }
                        }
                        ?>
                    </fieldset>

                    <fieldset>
                        <legend>Body Type:</legend>
                        <?php
                        $bodyQuery = "SELECT DISTINCT Body FROM cars ORDER BY Body ASC";
                        $bodyResult = $conn->query($bodyQuery);
                        if ($bodyResult->num_rows > 0) {
                            while ($row = $bodyResult->fetch_assoc()) {
                                echo "<label><input type='checkbox' name='Body[]' value='" . $row['Body'] . "'> " . $row['Body'] . "</label><br>";
                            }
                        }
                        ?>
                    </fieldset>

                    <fieldset>
                        <legend>Condition:</legend>
                        <?php
                        $statusQuery = "SELECT DISTINCT Status FROM cars ORDER BY Status ASC";
                        $statusResult = $conn->query($statusQuery);
                        if ($statusResult->num_rows > 0) {
                            while ($row = $statusResult->fetch_assoc()) {
                                echo "<label><input type='checkbox' name='Status[]' value='" . $row['Status'] . "'> " . $row['Status'] . "</label><br>";
                            }
                        }
                        ?>
                    </fieldset>

                    <fieldset>
                        <legend>Horsepower:</legend>
                        <label><input type='checkbox' name='Horsepower[]' value='100-199'> 100-199</label><br>
                        <label><input type='checkbox' name='Horsepower[]' value='200-299'> 200-299</label><br>
                        <label><input type='checkbox' name='Horsepower[]' value='300-399'> 300-399</label><br>
                        <label><input type='checkbox' name='Horsepower[]' value='400-499'> 400-499</label><br>
                        <label><input type='checkbox' name='Horsepower[]' value='500+'> 500+</label><br>
                    </fieldset>
                </form>
            </div>

            <div id="szuroGomb">
                <button type="button" onclick="fetchFilteredCars()">Apply Filter</button>
            </div>
        </div>

        <div id="rendez">
            <p id="carCount"></p>
            <div>
                <select id="sortOptions" onchange="fetchFilteredCars()">
                    <option value="Year_desc">Year: Newest First</option>
                    <option value="Year_asc">Year: Oldest First</option>
                    <option value="Brand_asc">Brand: A-Z</option>
                    <option value="Brand_desc">Brand: Z-A</option>
                    <option value="Mileage_asc">Mileage: Low to High</option>
                    <option value="Mileage_desc">Mileage: High to Low</option>
                    <option value="Price_asc">Price: Low to High</option>
                    <option value="Price_desc">Price: High to Low</option>
                </select>
            </div>
        </div>


    </header>

    <div id="carList">




        <?php



        include 'db_connection.php';


        $sortOption = $_GET['sort'] ?? 'Year_asc';
        $brands = $_GET['Brand'] ?? [];
        $fuels = $_GET['Fuel'] ?? [];
        $bodies = $_GET['Body'] ?? [];
        $status = $_GET['Status'] ?? [];
        $horsepower = $_GET['Horsepower'] ?? [];

        switch ($sortOption) {
            case 'Year_asc':
                $orderBy = "Year ASC";
                break;
            case 'Year_desc':
                $orderBy = "Year DESC";
                break;
            case 'Brand_asc':
                $orderBy = "Brand ASC";
                break;
            case 'Brand_desc':
                $orderBy = "Brand DESC";
                break;
            case 'Mileage_asc':
                $orderBy = "Mileage ASC";
                break;
            case 'Mileage_desc':
                $orderBy = "Mileage DESC";
                break;
            case 'Price_asc':
                $orderBy = "Price ASC";
                break;
            case 'Price_desc':
                $orderBy = "Price DESC";
                break;
            default:
                $orderBy = "Year ASC";
        }

        $sql = "SELECT * FROM cars";
        $conditions = array();

        if (!empty($brands) && !in_array('all', $brands)) {
            $escapedBrands = array();
            foreach ($brands as $brand) {
                $escapedBrands[] = mysqli_real_escape_string($conn, $brand);
            }
            $brandList = implode("','", $escapedBrands);
            $conditions[] = "Brand IN ('$brandList')";
        }

        if (!empty($fuels) && !in_array('all', $fuels)) {
            $escapedFuels = array();
            foreach ($fuels as $fuel) {
                $escapedFuels[] = mysqli_real_escape_string($conn, $fuel);
            }
            $fuelList = implode("','", $escapedFuels);
            $conditions[] = "Fuel IN ('$fuelList')";
        }

        if (!empty($bodies) && !in_array('all', $bodies)) {
            $escapedBodies = array();
            foreach ($bodies as $body) {
                $escapedBodies[] = mysqli_real_escape_string($conn, $body);
            }
            $bodyList = implode("','", $escapedBodies);
            $conditions[] = "Body IN ('$bodyList')";
        }

        if (!empty($status) && !in_array('all', $status)) {
            $escapedStatus = array();
            foreach ($status as $st) {
                $escapedStatus[] = mysqli_real_escape_string($conn, $st);
            }
            $statusList = implode("','", $escapedStatus);
            $conditions[] = "Status IN ('$statusList')";
        }

        if (!empty($horsepower)) {
            $hpConditions = array();
            foreach ($horsepower as $hp) {
                switch ($hp) {
                    case '100-199':
                        $hpConditions[] = "(Horsepower BETWEEN 100 AND 199)";
                        break;
                    case '200-299':
                        $hpConditions[] = "(Horsepower BETWEEN 200 AND 299)";
                        break;
                    case '300-399':
                        $hpConditions[] = "(Horsepower BETWEEN 300 AND 399)";
                        break;
                    case '400-499':
                        $hpConditions[] = "(Horsepower BETWEEN 400 AND 499)";
                        break;
                    case '500+':
                        $hpConditions[] = "(Horsepower >= 500)";
                        break;
                }
            }
            if (count($hpConditions) > 0) {
                $conditions[] = "(" . implode(' OR ', $hpConditions) . ")";
            }
        }

        if (count($conditions) > 0) {
            $sql .= " WHERE " . implode(' AND ', $conditions);
        }

        $sql .= " ORDER BY $orderBy";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $priceFormatted = number_format($row['Price'], 0, ',', '.');
                $mileageFormatted = number_format($row['Mileage'], 0, ',', '.');
                $engineFormatted = number_format($row['Engine'], 0, ',', '.');

                echo "<div class='product-container' id='termek'>";
                echo "<div class='product-images'>";
                echo "<div class='main-image'>";
                echo "<p><img src='" . $row["Pic1"] . "' alt='Autó kép' id='largeImage'></p>";


                echo "</div>";
                echo "<div class='thumbnail-images'>";
                echo "<p><img src='" . $row["Pic1"] . "' onclick='change()' alt='Autó kép' class='thumbnail'></p>";
                echo "<p><img src='" . $row["Pic2"] . "' onclick='change()' alt='Autó kép' class='thumbnail'></p>";
                echo "<p><img src='" . $row["Pic3"] . "' onclick='change()' alt='Autó kép' class='thumbnail'></p>";
                echo "<p><img src='" . $row["Pic4"] . "' onclick='change()' alt='Autó kép' class='thumbnail'></p>";

                echo "</div>";
                echo "</div>";
                echo "<div class='product-details'>";
                echo "<table>";
                echo "<tr>";
                echo "<td colspan='2'>" . $row['Year'] . " " . $row['Brand'] . " " . $row['Type'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Brand: " . $row['Brand'] . "</td>";
                echo "<td>Type: " . $row['Type'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Year: " . $row['Year'] . "</td>";
                echo "<td>Fuel: " . $row['Fuel'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Power: " . $row['Horsepower'] . " Hp</td>";
                echo "<td>Engine: " . $engineFormatted . " cm<sup>3</sup></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Mileage: " . $mileageFormatted . " Km</td>";
                echo "<td>Body: " . $row['Body'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Status: " . $row['Status'] . "</td>";
                echo "<td>Transmission: " . $row['Transmission'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='2'>Price: " . $priceFormatted . " €</td>";
                echo "</tr>";
                echo "</table>";
                echo "<div class='garage'>";
                echo '<form id="add-to-favorites-form-' . $row['Id'] . '">';
                echo '<input type="hidden" name="car_id" value="' . $row['Id'] . '">';
                echo '<input type="hidden" name="car_year" value="' . $row['Year'] . '">';
                echo '<input type="hidden" name="car_brand" value="' . $row['Brand'] . '">';
                echo '<input type="hidden" name="car_type" value="' . $row['Type'] . '">';
                echo '<input type="hidden" name="car_price" value="' . $row['Price'] . '">';
                echo '<input type="hidden" name="car_pic" value="' . $row['Pic1'] . '">';
                echo '<button type="button" onclick="addToFavorites(' . $row['Id'] . ')">Add to Garage</button>';
                echo '</form>';
                echo "</div>";

                echo "</div>";

                echo "</div>";
            }
        } else {
            echo "<h2 id='nincstalalat'>No results found based on the selected filters.</h2>";
        }

        $conn->close();
        ?>





    </div>



    <div class="scroll-top-wrapper">
        <button class="scroll-top" title="Vissza az oldal tetejére" onclick="scrollToTop()">&#9650;</button>
    </div>

    <div class="section_steps">
        <div class="text">
            <h1>Car Buying Process</h1>
            <ul>
                <h2>Selecting a Car:</h2>
                <li>
                    <p>Browse our available cars here.</p>
                </li>
                <li>
                    <p>Use the filtering and sorting options to find the car that best suits your needs.</p>
                </li>
                <li>
                    <p>View detailed information and images of the cars.</p>
                </li>
                <li>
                    <p>Add your favorite cars to your garage so you can find them in your profile later.</p>
                </li>

                <h2>Car Inspection & Test Drive:</h2>
                <li>
                    <p>Visit our dealership to see the car in person.</p>
                </li>
                <li>
                    <p>Take the car for a test drive.</p>
                </li>

                <h2>Financing & Price Negotiation:</h2>
                <li>
                    <p>Discuss the car's price with the salesperson.</p>
                </li>
                <li>
                    <p>Explore financing options, including loans or installment payments.</p>
                </li>
                <li>
                    <p>Use our loan calculator <a href="index.php#calculator_link">here</a>.</p>
                </li>

                <h2>Purchase Agreement & Documentation:</h2>
                <li>
                    <p>Sign the purchase agreement.</p>
                </li>
                <li>
                    <p>Prepare and sign the necessary documents (e.g., vehicle registration, insurance).</p>
                </li>

                <h2>Car Pickup:</h2>
                <li>
                    <p>Complete the final payment.</p>
                </li>
                <li>
                    <p>Receive the car and keys.</p>
                </li>
            </ul>
        </div>
    </div>



    <div class="section_end">
        <div class="text">
            <h1>Thinking About Renting Instead?</h1>
            <h2>Check out our available rental cars by clicking the button below.</h2>
            <a href="berles.html">View Rentals</a>
        </div>
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="javascript/autoink.js"></script>

    <script>
        var messageText = "<?= $_SESSION['success_message'] ?? '';  ?>";
        if (messageText != '') {
            Swal.fire({

                title: "Added to Garage!",
                text: messageText,
                showConfirmButton: false,
                timer: 1000
            });
            <?php unset($_SESSION['success_message']); ?>
        }
    </script>

</body>

</html>