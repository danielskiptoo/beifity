<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/beiFity/util/DatabaseConnection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/beiFity/util/dataaccess.php";

class OrderItems extends DataAccess {

    //class attributes
    var $table_name = "orderitems";
    var $database_fields = array();
    
    
    var $id;
    var $orderno;
    var $price;
    var $productid;
    var $quantity;
    var $timestamp;
    var $status;//pending,delivered

    public function __construct() {
        $db = new DatabaseConnection();
        $this->database_fields = $db->get_table_columns($this->table_name);
    }

    public function selectAllOrderItems() {
        $params = array();
        $sql = "SELECT * FROM " . $this->table_name . " ";
        return $this->do_select($sql, $params);
    }

    function selectOrderItemByOrderNo($orderno) {
        $params = array('s', $orderno);
        $sql = "SELECT * FROM " . $this->table_name . " where orderno=?  limit 1";
        return $this->select_item($sql, $params);
    }

}


