<?php

if (isset($_GET['sub_page'])) {
    $page = $_GET['sub_page'];
    if ($page == "add_achats") {
        include "achat/add_achats.php";
    } elseif ($page == "list_achats") {
        include "achat/list_achats.php";
    } else {
        include "404_box.php";
    }
} else {
    include "achat/list_product.php";
}
