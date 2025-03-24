<?php

session_start();

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
    while($row = $result->fetch_assoc()) {

        $priceFormatted = number_format($row['Price'], 0, ',', '.');
        $mileageFormatted = number_format($row['Mileage'], 0, ',', '.');
        $engineFormatted = number_format($row['Engine'], 0, ',', '.');

        echo "<div class='product-container'>";  
            echo "<div class='product-images'>";
                echo "<div class='main-image'>";
                    echo "<p><img src='" . $row["Pic1"] . "' alt='Autó kép' id='largeImage'></p>";
                    

                echo "</div>";
                echo "<div class='thumbnail-images'>";
                echo "<p><img src='" . $row["Pic1"] . "' alt='Autó kép' class='thumbnail'></p>";
                echo "<p><img src='" . $row["Pic2"] . "' alt='Autó kép' class='thumbnail'></p>";
                echo "<p><img src='" . $row["Pic3"] . "' alt='Autó kép' class='thumbnail'></p>";
                echo "<p><img src='" . $row["Pic4"] . "' alt='Autó kép' class='thumbnail'></p>";

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
                    echo '<form method="post" action="add_to_favorites.php">';
                    echo '<input type="hidden" name="car_id" value="' . $row['Id'] . '">';
                    echo '<input type="hidden" name="car_year" value="' . $row['Year'] . '">';
                    echo '<input type="hidden" name="car_brand" value="' . $row['Brand'] . '">';
                    echo '<input type="hidden" name="car_type" value="' . $row['Type'] . '">';
                    echo '<input type="hidden" name="car_price" value="' . $row['Price'] . '">';
                    echo '<input type="hidden" name="car_pic" value="' . $row['Pic1'] . '">';
                    echo '<button type="submit" name="add_to_favorites">Add to Garage</button>';
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












