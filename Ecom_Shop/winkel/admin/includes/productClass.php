<?php

class Product extends Db_object{
  
  protected static $db_table = "products";
  protected static $db_table_fields = array('product_sku','product_name', 'product_price', 'product_weight', 'product_cart_desc','product_short_desc','product_long_desc','product_image','product_category_id','product_update_date','product_stock','product_live','product_unlimited','product_location');
  
  protected $id;
  public $product_sku;
  public $product_name;
  public $product_price;
  public $product_weight;
  public $product_cart_desc;
  public $product_short_desc;
  public $product_long_desc;
  public $product_image;
  public $product_category_id;
  public $product_update_date;
  public $product_stock;
  public $product_live;
  public $product_unlimited;
  public $product_location;

  public $upload_directory = "/images";
  public $image_placeholder = "http://placehold.it/50x50&text=image";
  
   public function set_file($file){
    
    if(empty($file) || !$file || !is_array($file)) {
      
      $this->errors[] = "There was no file uploaded here";
      return false;
      
    }elseif($file['error'] !=0) {
      
      $this->errors[] = $this->upload_errors_array[$file['error']];
      return false;
      
    }else{
      
    $this->product_image = basename($file['name']);
    $this->tmp_path = $file['tmp_name'];
    $this->type = $file['type'];
    $this->size = $file['size'];
    
      
    }
    
  }// end of set file
  
  
    public function upload_photo() {
      if(!empty($this->errors)) {
        return false;
      }
      
      if(empty($this->product_image) || empty($this->tmp_path)){
        $this->errors[] = "the file was not available";
        return false; 
      }
      
      $target_path = $this->upload_directory . DS . $this->product_image;
      
      if(file_exists($target_path)) {
        $this->errors[] = "The file {$this->product_image} already exists";
        return false;
        
      }
      
      if(move_uploaded_file($this->tmp_path, $target_path)) {
       
          unset($this->tmp_path);
          return true;
          
      
        
      }else{
        
        $this->errors[] = "Something is wrong";
      return false;
      
     }
   }
    
    
 
  
  
  
  public function image_path_and_placeholder(){
    
    return empty($this->product_image) ? $this->image_placeholder : $this->upload_directory.DS.$this->product_image;
    
    
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
}// end of Product Class
















































?>