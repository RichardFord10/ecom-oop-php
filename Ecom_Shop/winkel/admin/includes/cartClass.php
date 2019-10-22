<?php
// 'cart item' object
class CartItem extends Db_object{
 
    // database connection and table name
    global $database;
    protected static $db_table;
    protected static $db_table_fields = ('id','product_id','quantity','user_id','created','modified');
 
    // object properties
    public $id;
    public $product_id;
    public $quantity;
    public $user_id;
    public $created;
    public $modified;
 
    // constructor
    public function __construct($db){
        $this->database; = $db;
    }
}