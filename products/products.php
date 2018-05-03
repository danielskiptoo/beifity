<?php
include_once $_SERVER['DOCUMENT_ROOT']."/beiFity/util/DatabaseConnection.php";
include_once $_SERVER['DOCUMENT_ROOT']."/beiFity/util/dataaccess.php";
class Products extends DataAccess{
    
    //class attributes
    var $table_name = "products";
    var $database_fields = array();
    
    var $id;
    var $productname;
    var $description;
    var $marketPrice;
    var $price;
    var $tradename;
    var $manufacturer;
    var $category;
    var $photo_1;
    var $photo_2;
    var $photo_3;
    var $photo_4;
    var $photo_5;
    var $timestamp;


    
    public function  __construct() {
        $db = new DatabaseConnection();
        $this->database_fields = $db->get_table_columns($this->table_name);
    }
    
    public function selectAllProducts(){
        $params = array();
        $sql = "SELECT * FROM ".$this->table_name." ORDER BY timestamp DESC ";
        return $this->do_select($sql,$params);
        
    }
    
    function selectProductByID($id){
        $params = array( 'i',$id);
        $sql = "SELECT * FROM ".$this->table_name." where id=?  limit 1";
        return $this->select_item($sql,$params);
    }
    function selectProductByCategory($category){
        $params = array( 's',$category);
        $sql = "SELECT * FROM ".$this->table_name." where category=?";
        return $this->select_item($sql,$params);
    }

}