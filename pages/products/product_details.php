<?php
// query to get the product details
include 'includes/config.php';
$id = $_GET['id'];
$product = getProduct($id);
$category = getCategory($product['category']);
$brand = getBrand($product['brand']);


?>

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Product Details</h4>
            <h6>Full details of a product</h6>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="bar-code-view">
                        <img src="assets/img/barcode1.png" alt="barcode">
                        <a class="printimg">
                            <img src="assets/img/icons/printer.svg" alt="print">
                        </a>
                    </div>
                    <div class="productdetails">
                        <ul class="product-bar">
                            <li>
                                <h4>Produit</h4>
                                <h6><?php echo $product['name'] ?></h6>
                            </li>
                            <li>
                                <h4>Catégorie</h4>
                                <h6><?php echo $category['name'] ?></h6>
                            </li>

                            <li>
                                <h4>Marque</h4>
                                <h6><?php echo $brand['name'] ?></h6>
                            </li>
                            <li>
                                <h4>Unité</h4>
                                <h6><?php echo $product['unit'] ?></h6>

                            </li>
                            <li>
                                <h4>SKU</h4>
                                <h6><?php echo $product['SKU'] ?></h6>
                            </li>

                            <li>
                                <h4>Quantité</h4>
                                <h6><?php echo $product['qty'] ?></h6>
                            </li>

                            <li>
                                <h4>Prix</h4>
                                <h6><?php echo $product['price'] ?></h6>
                            </li>
                            <li>
                                <h4>Statu</h4>
                                <h6><?php echo $product['status'] ?></h6>
                            </li>
                            <li>
                                <h4>Description</h4>
                                <h6><?php echo $product['description'] ?></h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="slider-product">
                        <img src="<?php echo $product_upload_dir . $product['img'] ?>" alt="img">
                        <h4><?php echo $product['name']?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>