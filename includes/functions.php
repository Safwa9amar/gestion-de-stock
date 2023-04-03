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


function uploadImg($img,$img_destination)
{
    $img_name = $img['name'];
    $img_tmp_name = $img['tmp_name'];
    $img_size = $img['size'];
    $img_error = $img['error'];
    $img_type = $img['type'];

    $img_ext = explode('.', $img_name);
    $img_actual_ext = strtolower(end($img_ext));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($img_actual_ext, $allowed)) {
        // check if file type is allowed
        if ($img_error === 0) {
            if ($img_size < 1000000) {
                $img_new_name = uniqid('') . "." . $img_actual_ext;
                $new_img_destination = $img_destination . $img_new_name;
                move_uploaded_file($img_tmp_name, $new_img_destination);
                return $img_new_name;
            } else {
                // echo "Your file is too big!";
                echo 1;
            }
        } else {
            // echo "There was an error uploading your file!";
            echo 2;
        }
    } else {
        // echo "You cannot upload files of this type!";
        echo 3;
    }
}