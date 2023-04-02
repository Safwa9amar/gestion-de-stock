<?php
// include database connection
// include_once '../db_conn.php';

// query to get all products

$query = "SELECT * FROM products";
$all_products = mysqli_query($connection, $query);
if (!$all_products) {
    die("Database query failed.");
}

// else {
//     // get number of rows returned
//     $num = mysqli_num_rows($result);
//     if ($num > 0) {
//         // loop through all rows
//         while ($row = mysqli_fetch_assoc($result)) {
//             // extract row
//             // this will make $row['firstname'] to
//             // just $firstname only
//             extract($row);
//             // creating new table row per record
//             echo "<tr>";
//             echo "<td>{$id}</td>";
//             echo "<td>{$name}</td>";
//             echo "<td>{$description}</td>";
//             echo "<td>{$price}</td>";
//             echo "<td>";
//             // we will use this links on next part of this post
//             echo "<a href='update_product.php?id={$id}' class='btn btn-default left-margin'>Edit</a>";
//             echo "<a delete-id='{$id}' class='btn btn-default delete-object'>Delete</a>";
//             echo "</td>";
//             echo "</tr>";
//         }
//     } else {
//         // if no records found
//         echo "<tr><td colspan='5'>No records found.</td></tr>";
//     }
// }
?>
