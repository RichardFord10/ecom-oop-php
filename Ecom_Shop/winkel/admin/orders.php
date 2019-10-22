<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>
<?php 


$orders = Order::find_all();

foreach ($orders as $order):

?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Order Manager
                            <small></small>
                        </h1>
                       <table class="table">
                         <thead>
                           <td>ID</td>
                           <td>Product Sold Price</td>
                           <td>Order Total</td>
                           <td>Ship Status</td>
                         </thead>
                         <tbody>
                           <td><?php echo $order->id;?></td>
                           <td>$<?php echo $order->order_amount;?></td>
                           <td>$<?php echo $order->order_total();?></td>
                           <td><?php echo $order->is_order_shipped();?></td>
                         </tbody>
                      </table>
                    </div>
                </div>
                <!-- /.row -->
<?php endforeach?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>