<?php

if (isset($_GET['sub_page'])) {
    $page = $_GET['sub_page'];
    if ($page == "add_product") {
        include "products/add_product.php";
    }
     elseif ($page == "list_product") {
        include "products/list_product.php";
    } 
     elseif ($page == "list_categories") {
        include "products/list_categories.php";
    } 
     elseif ($page == "add_category") {
        include "products/add_category.php";
    } 
     elseif ($page == "list_marques") {
        include "products/list_marques.php";
    } 
     elseif ($page == "add_marques") {
        include "products/add_marques.php";
    } 
    else {
        include "404_box.php";
    }
} else {
    include "products/list_product.php";
}