<?php include_once('front_includes/header.php');?>

<?php $user = new User(); ?>


<?php 
 if(isset($_POST['submit'])){

  $user->user_email = $_POST['user_email'];
  $user->user_password = $_POST['user_password'];
  $user->user_first_name = $_POST['user_first_name'];
  $user->user_last_name = $_POST['user_last_name'];
  $user->admin = "0";
  $user->user_city;
  $user->user_state;
  $user->user_zip;
  $user->user_email_verified = "0";
  $user->user_registration_date = date("d,m,Y");
  $user->user_verification_code;
  $user->user_ip;
  $user->user_phone;
  $user->user_fax;
  $user->user_country;
  $user->user_address;
  $user->user_address2;
   
  $user->create();
   
   redirect("shop.php");

 };

?>


<div class="container">
<form class="form-horizontal" action='' method="POST">
  <fieldset class="align-center">
    <div id="legend">
      <legend class="">Register</legend>
    </div>

    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="user_email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
        <!--- First Name---->
     <div class="control-group">
       <label class="control-label" for="first_name">First Name</label>
      <div class="controls">
        <input type="text" id="first_name" name="user_first_name" placeholder="" class="input-xlarge">
        <p class="help-block">First Name</p>
      </div>
    </div>
         <!--- Last Name---->
     <div class="control-group">
       <label class="control-label" for="last_name">Last Name</label>
      <div class="controls">
        <input type="text" id="last_name" name="user_last_name" placeholder="" class="input-xlarge">
        <p class="help-block">Last Name</p>
      </div>
    </div>
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="user_password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
<input class="btn btn-primary" type="submit" name ="submit"  class="form-control" value="Submit" ></div>
    </div>
  </fieldset>
</form>    
</div>


<?php include_once("front_includes/footer.php"); ?>