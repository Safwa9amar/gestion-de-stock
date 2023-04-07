<?php
include 'includes/config.php';
?>
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Purchase Add</h4>
            <h6>Add/Update Purchase</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Supplier Name</label>
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-10">
                                <input class="form-control" list="suppliers" type="text">
                                <datalist id="suppliers">
                                    <option>Select</option>
                                    <option>Supplier</option>
                                </datalist>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                <div class="add-icon">
                                    <a href="javascript:void(0);"><img src="assets/img/icons/plus1.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Purchase Date </label>
                        <div class="input-groupicon">
                            <input type="text" placeholder="DD-MM-YYYY" class="datepicker">
                            <div class="addonset">
                                <img src="assets/img/icons/calendars.svg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Reference No.</label>
                        <input type="text">
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Product Name</label>
                        <div class="input-groupicon">
                            <input autofocus list="datalistOptions" id="search_product" type="text"
                                placeholder="Scan/Search Product by code and select...">
                            <div class="addonset">
                                <img src="assets/img/icons/scanners.svg" alt="img">
                            </div>
                            <datalist id='datalistOptions'>

                            </datalist>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>QTY</th>
                                <th>Purchase Price($) </th>
                                <th>Discount($) </th>
                                <th>Tax %</th>
                                <th>Tax Amount($)</th>
                                <th class="text-end">Unit Cost($)</th>
                                <th class="text-end">Total Cost ($) </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="productimgname">
                                    <a class="product-img">
                                        <img src="assets/img/product/product7.jpg" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Apple Earpods</a>
                                </td>
                                <td>10.00</td>
                                <td>2000.00</td>
                                <td>500.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td class="text-end">2000.00</td>
                                <td class="text-end">2000.00</td>
                                <td>
                                    <a class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="productimgname">
                                    <a class="product-img">
                                        <img src="assets/img/product/product6.jpg" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Macbook Pro</a>
                                </td>
                                <td>15.00</td>
                                <td>6000.00</td>
                                <td>100.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td class="text-end">1000.00</td>
                                <td class="text-end">1000.00</td>
                                <td>
                                    <a class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 float-md-right">
                    <div class="total-order">
                        <ul>
                            <li>
                                <h4>Order Tax</h4>
                                <h5>$ 0.00 (0.00%)</h5>
                            </li>
                            <li>
                                <h4>Discount </h4>
                                <h5>$ 0.00</h5>
                            </li>
                            <li>
                                <h4>Shipping</h4>
                                <h5>$ 0.00</h5>
                            </li>
                            <li class="total">
                                <h4>Grand Total</h4>
                                <h5>$ 0.00</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Order Tax</label>
                        <input type="text">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Discount</label>
                        <input type="text">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Shipping</label>
                        <input type="text">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control">
                            <option>Choose Status</option>
                            <option>Completed</option>
                            <option>Inprogress</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                    <a href="purchaselist.html" class="btn btn-cancel">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jquery -->
<script>
    // fetch api for product search
    document.getElementById('search_product').onkeydown = function () {

        let url = "<?php echo $api . 'products' ?>"
        var search = this.value;
        var outer = document.getElementById('datalistOptions');
        // clear the list
        if (search.length > 0) {
            fetch(url + '&search=' + search)
                .then(response => response.json())
                .then(data => {
                    var html = '';
                    data.forEach(function (item) {
                        html += `<option value="${item.id}"> ${item.name} ${item.SKU} </option> `;
                    });
                    outer.innerHTML = html;
                    this.onchange = function () {
                        data = data.filter(item => item.id == this.value)[0]
                        // create a new tr element
                        var tr = document.createElement('tr');
                        // set the innerHTML of the tr element
                        tr.innerHTML = `
                            <td>
                                <a class="product-img">
                                    <img src="<?php echo $product_upload_dir ?>${data.img}" alt="product">
                                </a>
                                <a href="javascript:void(0);">${data.name}</a>
                            </td>
                            <td>
                                ${data.qty}
                            </td>
                            <td>
                                ${data.price}
                            </td>
                            
                        `
                        // append the tr element to the tbody
                        document.querySelector('.table tbody').appendChild(tr);

                    }
                })
            outer.innerHTML = '';

        }
    }

</script>