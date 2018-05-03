<?php
include_once $_SERVER['DOCUMENT_ROOT']."/beiFity/util/DatabaseConnection.php";
include_once $_SERVER['DOCUMENT_ROOT']."/beiFity/util/dataaccess.php";
class ProductSubCategories extends DataAccess{
    
    //class attributes
    var $table_name = "psubcategory";
    var $database_fields = array();
    
    var $id;
    var $parent;
    var $name;

        
    public function  __construct() {
        $db = new DatabaseConnection();
        $this->database_fields = $db->get_table_columns($this->table_name);
    }
    
    public function selectAllSubCategories(){
        $params = array();
        $sql = "SELECT * FROM ".$this->table_name." ";
        return $this->do_select($sql,$params);
        
    }
    
    function selectSubCategoryByID($id){
        $params = array( 'i',$id);
        $sql = "SELECT * FROM ".$this->table_name." where id=?  limit 1";
        return $this->select_item($sql,$params);
    }
    function selectSubCategoryByParentID($id){
        $params = array( 'i',$id);
        $sql = "SELECT * FROM ".$this->table_name." where parent=?";
        return $this->select_item($sql,$params);
    }

}