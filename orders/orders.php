<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/beiFity/util/DatabaseConnection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/beiFity/util/dataaccess.php";

class Orders extends DataAccess {

    //class attributes
    var $table_name = "orders";
    var $database_fields = array();
    
    
    var $id;
    var $orderno;
    var $userid;
    var $amount;
    var $fname;
    var $lname;
    var $street;
    var $address;
    var $town;
    var $zip;
    var $email;
    var $phone;
    var $shipping;//delivery or personal picking
    var $timestamp;
    var $status;

    public function __construct() {
        $db = new DatabaseConnection();
        $this->database_fields = $db->get_table_columns($this->table_name);
    }

    public function selectAllOrders() {
        $params = array();
        $sql = "SELECT * FROM " . $this->table_name . " ";
        return $this->do_select($sql, $params);
    }

    function selectOrderByID($id) {
        $params = array('s', $id);
        $sql = "SELECT * FROM " . $this->table_name . " where id=?  limit 1";
        return $this->select_item($sql, $params);
    }
    function selectOrderByUserID($userid) {
        $params = array('s', $userid);
        $sql = "SELECT * FROM " . $this->table_name . " where userid=?  limit 1";
        return $this->select_item($sql, $params);
    }

    function getNextOrderNumber() {
        $params = array('s', $id);
        $sql = "SELECT orderno FROM " . $this->table_name . " order by id DESC  limit 1";
        $order = $this->select_item($sql, $params);
        if ($order->orderno == 0 || empty($order->orderno)) {
            $order->orderno = 1000000;
        } else {
            $order->orderno += $order->orderno + 1;
            return $order->orderno;
        }
    }

}
