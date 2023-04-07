<?php
include 'includes/config.php';
if (isset($_GET['deleteRow']) && $is_logged) {
    $id = $_GET['deleteRow'];
    deleteRow('clients', $id);
    echo "<script>window.location.href='?page=achats&sub_page=list_achats'</script>";
}
$all_achats = getAllAchats();
$table_head = '
        <tr>
                <th>Supplier Name</th>
                <th>Reference</th>
                <th>Date</th>
                <th>Status</th>
                <th>Grand_Total</th>
                <th>Paid</th>
                <th>Due</th>
                <th>Payment Status</th>
                <th>Action</th>
        </tr>
    ';
?>

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>PURCHASE LIST</h4>
            <h6>Manage your purchases</h6>
        </div>
        <div class="page-btn">
            <a href="?page=achats&sub_page=add_achats" class="btn btn-added">
                <img src="assets/img/icons/plus.svg" alt="img">Add New Purchases
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card">
            <div class="card-body">
                <?php include 'templates/components/list_table_head.php'; ?>
                <?php
                $num = mysqli_num_rows($all_achats);
                if ($num > 0) {
                    // loop through all_achats
                    while ($achat = mysqli_fetch_assoc($all_achats)) {
                        $achat_id = $achat['id'];
                        $achat_supplier = $achat['Supplier'];
                        $achat_reference = $achat['Reference'];
                        $achat_date = $achat['Date'];
                        $achat_status = $achat['Status'];
                        $achat_grand_total = $achat['Grand_Total'];
                        $achat_paid = $achat['Paid'];
                        $achat_due = $achat['Due'];
                        $achat_payment_status = $achat['Payment_Status'];

                        ?>
                        <tr>

                            <td class="text-bolds">
                                <?php echo $achat_supplier; ?>
                            </td>
                            <td>
                                <?php echo $achat_reference; ?>
                            </td>
                            <td>
                                <?php echo $achat_date; ?>
                            </td>
                            <td>
                                <?php
                                if ($achat_status) {
                                    badge('lightgreen', 'Complété');
                                } else {
                                    badge('lightred', 'En attente');
                                }
                                ?>
                            </td>
                            <td>
                                <?php echo $achat_grand_total; ?>
                            </td>
                            <td>
                                <?php echo $achat_paid; ?>
                            </td>
                            <td>
                                <?php echo $achat_due; ?>
                            </td>
                            <td>
                                <?php
                                if ($achat_payment_status) {
                                    badge('lightgreen', 'Payé');
                                } else {
                                    badge('lightred', 'En attente');
                                }
                                ?>
                            </td>
                            <td>
                                <a class="me-3" href="editpurchase.html">
                                    <img src="assets/img/icons/edit.svg" alt="img">
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src="assets/img/icons/delete.svg" alt="img">
                                </a>
                            </td>
                        </tr>
                    <?php }
                } ?>
                <?php include 'templates/components/list_table_footer.php'; ?>

            </div>
        </div>
    </div>

</div>