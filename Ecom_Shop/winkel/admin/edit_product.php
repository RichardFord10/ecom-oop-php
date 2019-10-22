<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<?php 

if(empty($_GET['id'])){
  
  redirect("products.php");
  
} else {
  
$product = Product:: find_by_id($_GET['id']);
}

 if(isset($_POST['update'])){

   
   

   $product->product_sku = $_POST['product_sku'];
   $product->product_name = $_POST['product_name'];
   $product->product_price = $_POST['product_price'];
   $product->product_weight = $_POST['product_weight'];
   $product->product_cart_desc = $_POST['product_cart_desc'];
   
   $product->product_short_desc = $_POST['product_short_desc'];
   $product->product_long_desc = $_POST['product_long_desc'];
   
 
   $product->product_image = $_FILES['product_image'];
   
   $product->product_category_id = $_POST['product_category_id'];
   $product->product_update_date = $_POST['product_update_date'];
   $product->product_stock = $_POST['product_stock'];
   
   $product->product_live = $_POST['product_live'];
   $product->product_unlimited = $_POST['product_unlimited'];
   $product->product_location = $_POST['product_location'];
   
   $product->set_file($_FILES['product_image']);
   $product->upload_photo();

  $product->update();
   
   redirect("/products.php");
  
};


?>

<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">

        <h1 class="page-header"> Add Product </h1>
        


        <form action="" enctype="multipart/form-data" method="post">
          
          <input class="btn btn-primary" type="submit" name ="update" value="Update" id="addproductbutton" class="form-control" >

          <table class="table">

            <thead>

              <th>SKU</th>
              <th>Name</th>
              <th>Price</th>
              <th>Weight</th>
              <th>Cart Description</th>
            </thead>
            <br>
            <tbody>
              <tr>
                <td><input class="form-control" type="text" name="product_sku" value="<?php echo $product->product_sku;?>"></td>
                <td><input class="form-control" type="text" name="product_name" value="<?php echo $product->product_name;?>"></td>
                <td><input class="form-control" type="number" step="0.01"  value="<?php echo $product->product_price;?>" name="product_price"></td>
                <td><input class="form-control" type="number" step="0.1" name="product_weight" value="<?php echo $product->product_weight;?>"></td>
                <td><input class="form-control" type="text" max="55" name="product_cart_desc" value="<?php echo $product->product_cart_desc;?>"></td>
              </tr>
              <thead>

                <th>Short Description</th>
                <th>Category</th>
                <th>Date Added</th>
                <th>Quantity</th>
                <th>Live</th>
              </thead>

              <td><input class="form-control" type="text" name="product_short_desc" value="<?php echo $product->product_short_desc;?>"></td>
              <td><select class="form-control browser-default custom select" name="product_category_id" size="1">
                  <option value="1">Running</option>
                  <option value="2">Walking</option>
                  <option value="3">Hiking</option>
                  <option value="4">Track/Trail</option>
                  <option value="5">Short Sleeve</option>
                  <option value="6">Long Sleeve</option>
                </select>
              <td><input class="form-control" type="text" value="<?php echo date('Y-m-d H:i:s');?>" name ="product_update_date"readonly></input></td>
              <td><input class="form-control" type="number" step="1" name="product_stock" value="<?php echo $product->product_stock;?>"></td>
                 </td>
                 <td><select class="form-control browser-default custom-select" name="product_live">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
              
                </select>
              </td>


              <thead>
               
                <th>Unlimited</th>
                <th>Location</th>
                <th colspan="3" text-center>Product Description</th>
              </thead>

              <td><select class="form-control browser-default custom-select" name="product_unlimited">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
              
                </select>
              </td>
           
              <td><input class="form-control" type="text" name="product_location" value="<?php echo $product->product_location;?>"> </td>
          
              <td colspan="3"><textarea class="form-control" name="product_long_desc" value="<?php echo $product->product_long_desc;?>" rows="3"></textarea></td>
             
            </tbody>

          </table>


      </div>

      <b>Image</b>

      <input type="file" name="product_image">
    </div>
    <!-- /.row -->
    </form>
  </div>





  <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>