<?php
function getBrand($brand_id)
{
    include 'includes/database.php';
    $query = "SELECT name FROM brands WHERE id = '$brand_id'";
    $brand = mysqli_fetch_assoc(mysqli_query($connection, $query));
    return $brand;
}

// get all brands
function getAllBrands()
{
    include 'includes/database.php';
    $query = "SELECT * FROM brands";
    $brands = mysqli_query($connection, $query);
    return $brands;
}

// get all categories
function getAllCategories()
{
    include 'includes/database.php';
    $query = "SELECT * FROM categories";
    $categories = mysqli_query($connection, $query);
    return $categories;
}

function getCategory($category_id)
{
    include 'includes/database.php';
    $query = "SELECT name FROM categories WHERE id = '$category_id'";
    $category = mysqli_fetch_assoc(mysqli_query($connection, $query));
    return $category;
}

// get product by id
function getProduct($id)
{
    include 'includes/database.php';
    $query = "SELECT * FROM products WHERE id = '$id'";
    $product = mysqli_fetch_assoc(mysqli_query($connection, $query));
    return $product;
}
// get category by id
function getCategoryById($id)
{
    include 'includes/database.php';
    $query = "SELECT * FROM categories WHERE id = '$id'";
    $category = mysqli_fetch_assoc(mysqli_query($connection, $query));
    return $category;
}
// function that deletes a row from a table
function deleteRow($table, $id)
{
    include 'includes/database.php';
    $query = "DELETE FROM $table WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    return $result;
}

// edit row
function editRow($table, array $data, $id)
{
    include 'includes/database.php';
    $query = "UPDATE $table SET ";
    foreach ($data as $key => $value) {
        $query .= "$key = '$value', ";
    }
    $query = substr($query, 0, -2);
    $query .= " WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    return $result;
}

// add row
function addRow($table, array $data)
{
    include 'includes/database.php';
    $query = "INSERT INTO $table (";
    foreach ($data as $key => $value) {
        $query .= "$key, ";
    }
    $query = substr($query, 0, -2);
    $query .= ") VALUES (";
    foreach ($data as $key => $value) {
        $query .= "'$value', ";
    }
    $query = substr($query, 0, -2);
    $query .= ")";
    $result = mysqli_query($connection, $query);
    return $result;
}

function uploadImg($img, $img_destination)
{
    $img_name = $img['name'];
    $img_tmp_name = $img['tmp_name'];
    $img_size = $img['size'];
    $img_error = $img['error'];
    $img_type = $img['type'];

    $img_ext = explode('.', $img_name);
    $img_actual_ext = strtolower(end($img_ext));

    $allowed = array('jpg', 'jpeg', 'png');
    // check if file is not empty
    if (!empty($img_name)) {

        if (in_array($img_actual_ext, $allowed)) {
            // check if file type is allowed
            if ($img_error === 0) {
                if ($img_size < 1000000) {
                    $img_new_name = uniqid('') . "." . $img_actual_ext;
                    $new_img_destination = $img_destination . $img_new_name;
                    move_uploaded_file($img_tmp_name, $new_img_destination);
                    // unlink old image using tornary operator
                    
                    return $img_new_name;
                } else {
                    // echo "Your file is too big!";
                    return 1;
                }
            } else {
                // echo "There was an error uploading your file!";
                return 2;
            }
        } else {
            // echo "You cannot upload files of this type!";
            return 3;
        }
    } else {
        // echo "Please select a file!";
        return 4;
    }
}