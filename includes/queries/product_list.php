<?php
include 'includes/database.php';

// query to get all products
$query = "SELECT * FROM products";
$all_products = mysqli_query($connection, $query);
if (!$all_products) {
    die("Database query failed.");
}

?>
