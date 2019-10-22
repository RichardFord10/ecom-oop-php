<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>
<?php 


$products = Product::find_all();



?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Products
                           
                        </h1>
                       <table class="table">
                          
                         <thead>
                           <td>ID</td>
                           <td>SKU</td>
                           <td>Name</td>
                           <td>Price</td>
                           <td>Image</td>
                           <td>Description</td>
                           <td>Quantity</td>
                           <td>Action</td>
                         </thead>
                         <?php foreach ($products as $product):?>
                         <tbody>
                          
                           <td><?php echo $product->id;?></td>
                           <td><?php echo $product->product_sku;?></td>
                           <td><?php echo $product->product_name;?></td>
                           <td><?php echo $product->product_price;?></td>
                           <td><img src='<?php echo $product->image_path_and_placeholder();?>'></td>
                           <td><?php echo $product->product_cart_desc;?></td>
                           <td><?php echo $product->product_stock;?> </td>
                           <td>
                             <div class="actions_link">
                            <a href="delete_product.php?id=<?php echo $product->id;?>">

                              Delete</a>
                            <a href="edit_product.php?id=<?php echo $product->id;?>">Edit</a>
                            <a href="">View</a>
                  
                          
                           </td>
                           <?php endforeach?>
                         </tbody>
                      </table>
                    </div>
                </div>
                <!-- /.row -->
              <a href="add_product.php"><button type="button" class="btn btn-primary">Add Product</button></a>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>