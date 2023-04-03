<div class="content">
  <div class="page-header">
    <div class="page-title">
      <h4>Product Add</h4>
      <h6>Create new product</h6>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="" method="post" class="row" enctype="multipart/form-data">
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="form-group">
            <label>Product Name</label>
            <input name="name" type="text" />
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category">
              <?php
              $all_categories = getAllCategories();
              while ($category = mysqli_fetch_assoc($all_categories)) {
                echo "<option value='" . $category['id'] . "'>" . $category['name'] . "</option>";
              }
              ?>
            </select>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
          <div class="form-group">
            <label>Brand</label>
            <select class="form-control" name="brand">
              <?php
              $all_brands = getAllBrands();
              while ($brand = mysqli_fetch_assoc($all_brands)) {
                echo "<option value='" . $brand['id'] . "'>" . $brand['name'] . "</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="form-group">
            <label>Unit</label>
            <select class="form-control" name="unit">
              <option>Choose Unit</option>
              <option>Unit</option>
            </select>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="form-group">
            <label>SKU</label>
            <input type="text" name="sku" />
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
          <div class="form-group">
            <label>Quantity</label>
            <input type="text" name="qty" />
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
          </div>
        </div>


        <div class="col-lg-3 col-sm-6 col-12">
          <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" />
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="form-group">
            <label> Status</label>
            <select class="form-control" name="status">
              <option>Closed</option>
              <option>Open</option>
            </select>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <label> Product Image</label>
            <div class="image-upload">
              <input type="file" name="img" />
              <div class="image-uploads">
                <img src="assets/img/icons/upload.svg" alt="img" />
                <h4>Drag and drop a file to upload</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <?php
          include 'includes/database.php';
          include 'includes/config.php';
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // insert data into database
            $name = htmlspecialchars($_POST['name']);
            $category = htmlspecialchars($_POST['category']);
            $brand = htmlspecialchars($_POST['brand']);
            $unit = htmlspecialchars($_POST['unit']);
            $sku = htmlspecialchars($_POST['sku']);
            $qty = htmlspecialchars($_POST['qty']);
            $description = htmlspecialchars($_POST['description']);
            $price = htmlspecialchars($_POST['price']);
            $status = htmlspecialchars($_POST['status']);
            
            $imgUploaded = uploadImg($_FILES['img'], $product_upload_dir);
            $sql = "INSERT INTO products (name, category, brand, unit, SKU, qty, description, price, status, img) VALUES ('$name', '$category', '$brand', '$unit', '$sku', '$qty', '$description', '$price', '$status', '$imgUploaded')";
            
            switch ($imgUploaded) {
              case 1:
                alert("veuillez réessayer ! la taille de l'image est trop grande", "danger");
                break;
              case 2:
                alert("veuillez réessayer ! le fichier n'a pas été téléchargé", "danger");
                break;
              case 3:
                alert("veuillez réessayer ! le fichier n'est pas une image", "danger");
                break;
              default:
                $result = mysqli_query($connection, $sql);
                if ($result) {
                  alert("Produit ajouté avec succès", "success");
                } else {
                  alert("Echec d'ajout du produit", "danger");
                }
                break;
            }
          }
          ?>
          <button class="btn btn-submit me-2">Submit</button>
          <a href="?page=produits&sub_page=list_product" class="btn btn-cancel">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- jquery -->
<!-- <script src="assets/js/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $(".btn-submit").click(function () {
      var name = $("input[name=name]").val();
      var category = $("select[name=category]").val();
      var brand = $("select[name=brand]").val();
      var unit = $("select[name=unit]").val();
      var sku = $("input[name=sku]").val();
      var qty = $("input[name=qty]").val();
      var description = $("textarea[name=description]").val();
      var price = $("input[name=price]").val();
      var status = $("select[name=status]").val();
      var img = $("input[name=img]").val();
      $.ajax({
        url: "pages/products/add_product.php",
        type: "POST",
        data: {
          name: name,
          category: category,
          brand: brand,
          unit: unit,
          sku: sku,
          qty: qty,
          description: description,
          price: price,
          status: status,
          img: img,
        },
        success: function (data) {
          console.log(data);
        },
      });
    });
  });
</script> -->