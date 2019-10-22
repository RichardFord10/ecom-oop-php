<?php 

class Order extends Db_object
{
  
protected static $db_table  = "orders";
protected static $db_table_fields = array('id','order_user_id','order_amount', 'order_ship_name', 'order_ship_address','order_ship_address2','order_city', 'order_state', 'order_zip', 'order_country', 'order_phone', 'order_fax', 'order_shipping', 'order_email','order_date','order_shipped','order_tracking_number');
  
  public $id;
  public $order_user_id;
  public $order_amount;
  public $order_ship_name;
  public $order_ship_address;
  public $order_ship_address2;
  public $order_city;
  public $order_state;
  public $order_zip;
  public $order_country;
  public $order_phone;
  public $order_fax;
  public $order_shipping;
  public $order_tax;
  public $order_email;
  public $order_date;
  public $order_shipped;
  public $order_tracking_number;
  
  
  
  
  
  
  
  
  public function order_total(){
    
    return $this->order_amount + $this->order_shipping + $this->order_tax;
    
  }// end of order_total method
  
  public function is_order_shipped(){
    
    if($order_shipped = 0){
      
      echo "No";
    }else{
      echo "Yes";
    } 
  }// end of is_order_shipped method

  
}//end of Class Orders











































?>