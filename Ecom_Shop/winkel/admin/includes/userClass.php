<?php 

class User extends Db_object{
  
  
  protected static $db_table = "users";
  protected static $db_table_fields = array('user_email','user_password','admin','user_first_name','user_last_name','user_city','user_state','user_zip','user_email_verified','user_registration_date','user_verification_code','user_ip','user_phone','user_fax','user_country','user_address','user_address2');
  
  public $id;
  public $user_email;
  public $user_password;
  public $admin;
  public $user_first_name;
  public $user_last_name;
  public $user_city;
  public $user_state;
  public $user_zip;
  public $user_email_verified;
  public $user_registration_date;
  public $user_verification_code;
  public $user_ip;
  public $user_phone;
  public $user_fax;
  public $user_country;
  public $user_address;
  public $user_address2;

  
  
  
   public static function verify_user($user_email, $user_password) {
   global $database;
   
   $user_email = $database->escape_string($user_email);
   $user_password = $database->escape_string($user_password);
   
   $sql = "SELECT * FROM " . static::$db_table . " WHERE ";
   $sql .= "user_email = '{$user_email}' ";
   $sql .= "AND user_password = '{$user_password}' ";
   $sql .= "LIMIT 1";
   
   
   $the_result_array = static::find_by_query($sql);
   return !empty($the_result_array) ? array_shift($the_result_array) : false;
   
  
   
 }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
} // end of user Class










































?>