<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>
<?php 


$users = User::find_all();



?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Users
                            <small></small>
                        </h1>
                       <table class="table">
                          
                         <thead>
                           <td>ID</td>
                           <td>Email</td>
                           <td>First Name</td>
                           <td>Last Name</td>
                         </thead>
                         <?php foreach ($users as $user):?>
                         <tbody>
                          
                           <td><?php echo $user->id;?></td>
                           <td><?php echo $user->user_email;?></td>
                           <td><?php echo $user->user_first_name;?></td>
                           <td><?php echo $user->user_last_name;?></td>
                           <?php endforeach?>
                         </tbody>
                      </table>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>