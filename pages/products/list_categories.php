<?php
include 'includes/config.php';
if (isset($_GET['deleteRow']) && $is_logged) {
    $id = $_GET['deleteRow'];
    deleteRow('products', $id);
    echo "<script>window.location.href='?page=produits&sub_page=list_product'</script>";
}
$all_categories = getAllCategories();
$table_head = '
    <tr>
        <th>Category name</th>
        <th>Category Code</th>
        <th>Description</th>
        <th>Created By</th>
        <th>Action</th>
    </tr>
    ';
?>
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Product Category list</h4>
            <h6>View/Search product Category</h6>
        </div>
        <div class="page-btn">
            <a href="addcategory.html" class="btn btn-added">
                <img src="assets/img/icons/plus.svg" class="me-1" alt="img">Add Category
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card">
            <div class="card-body">
                <?php include 'templates/components/list_table_head.php'; ?>
                <?php
                $num = mysqli_num_rows($all_categories);
                if ($num > 0) {
                    // loop through all rows
                    
                    
                    ?>
                    <tr>
                        <td>
                            <label class="checkboxs">
                                <input type="checkbox">
                                <span class="checkmarks"></span>
                            </label>
                        </td>
                        <td class="productimgname">
                            <a href="javascript:void(0);" class="product-img">
                                <img src="assets/img/product/noimage.png" alt="product">
                            </a>
                            <a href="javascript:void(0);">Computers</a>
                        </td>
                        <td>CT001</td>
                        <td>Computers Description</td>
                        <td>Admin</td>
                        <td>
                            <a class="me-3" href="editcategory.html">
                                <img src="assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                <img src="assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                <?php include 'templates/components/list_table_footer.php'; ?>

            </div>
        </div>


    </div>
</div>

</div>