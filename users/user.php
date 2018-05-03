<?php
$webpath =  $_SERVER['DOCUMENT_ROOT']."/beiFity/";
include_once $webpath."util/DatabaseConnection.php";
include_once $webpath."util/passwordutil.php";
include_once $webpath."util/util.php";
include_once $webpath."util/dataaccess.php";
class User extends DataAccess{
    
    //class attributes
    var $table_name = "users";
    var $database_fields = array();
    
    var $id;
    var $fname;
    var $lname;
    var $password;
    var $email;
    var $location;
    var $phone;
    
    
    
    public function  __construct() {
        $db = new DatabaseConnection();
        $this->table_name = "users";
        $this->database_fields = $db->get_table_columns($this->table_name);
    }
    
    public function check_if_user_exist($email){
        $sql = "SELECT count(*) as count FROM ".$this->table_name." where email=? ";
        $params = array( 's',$email );
        if ( $this->get_count($sql,$params) > 0 ){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function selectUserByPhone($phone){
        $params = array( 's',$phone);
        $sql = "SELECT * FROM ".$this->table_name." where phone=? limit 1";
        return $this->select_item($sql,$params);
        
    }            
    public function selectAllUsers(){
        $params = array();
        $sql = "SELECT * FROM ".$this->table_name." ";
        return $this->do_select($sql,$params);
    }
    function selectUserByEmail($email){
        $params = array( 's',$email);
        $sql = "SELECT * FROM users where email=?  limit 1";
        return $this->select_item($sql,$params);
    }
    
    function selectUserByUserName($name){
        $params = array( 's',$name);
        $sql = "SELECT * FROM users where username=?  limit 1";
        return $this->select_item($sql,$params);
    }
    
    function selectUserByID($id){
        $params = array( 's',$id);
        $sql = "SELECT * FROM users where id=?  limit 1";
        return $this->select_item($sql,$params);
    }
    
    function authenticateUser($email,$password){
        $passwordUtil = new PasswordUtil();
        $user = new User();
        $logged = FALSE;
        
        $params = array( 's',$email);
        $sql = "SELECT password FROM users where email =?  limit 1";
        $user = $user->select_item($sql,$params);
        $logged = $passwordUtil->checkHash($user->password,$password);
        
        return $logged;
    }

}