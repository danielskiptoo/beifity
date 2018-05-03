<?php
include_once $_SERVER['DOCUMENT_ROOT']."/beiFity/util/DatabaseConnection.php";
include_once $_SERVER['DOCUMENT_ROOT']."/beiFity/util/dataaccess.php";
class ProductCategories extends DataAccess{
    
    //class attributes
    var $table_name = "pcategories";
    var $database_fields = array();
    
    var $id;
    var $categoryname;


    
    public function  __construct() {
        $db = new DatabaseConnection();
        $this->database_fields = $db->get_table_columns($this->table_name);
    }
    
    public function selectAllCategories(){
        $params = array();
        $sql = "SELECT * FROM ".$this->table_name." ";
        return $this->do_select($sql,$params);
        
    }
    
    function selectCategoryByID($id){
        $params = array( 's',$id);
        $sql = "SELECT * FROM ".$this->table_name." where id=?  limit 1";
        return $this->select_item($sql,$params);
    }

}