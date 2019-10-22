<?php

class Productcategory extends Db_object{
  
  protected static $db_table = "productcategories";
  protected static $db_table_fields = array('category_id','category_name');
  
  public $category_id;
  public $category_name;
 
}// end of ProductCategory Class
















































?>