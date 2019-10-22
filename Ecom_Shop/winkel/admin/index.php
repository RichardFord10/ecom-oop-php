<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>
       
<div id ="dashboard-content" class="row">
      <div class="col-lg-12">
        <h1  class="page-header" id="dashboard">
          Dashboard
        </h1>
<div class="row">


  <div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-photo fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge"><?php echo Order::count_all();?> </div>
            <div>Orders</div>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer">
          <span class="pull-left">Total Orders</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>


  <div class="col-lg-3 col-md-6">
    <div class="panel panel-yellow">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge"><?php echo User::count_all();?></div>

            <div>Users</div>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer">
          <span class="pull-left">Total Users</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="panel panel-red">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-support fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge"><?php echo Product::count_all();?></div>
            <div>Products</div>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer">
          <span class="pull-left">Total Comments</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>

                        </div> <!--First Row-->
  <?php include("includes/footer.php"); ?>