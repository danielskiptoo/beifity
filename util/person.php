<?php
class person{
    var $fname;
    var $lname;
    var $othername;
    var $email;
    var $country;
    var $city;
    var $location;
    var $postaladdress;
    var $tel;
    
    function __construct() {
        $this->fname = "";
        $this->lname = "";
        $this->othername = "";
        $this->email = "";
        $this->country = "";
        $this->city = "";
        $this->location = "";
        $this->postaladdress = "";
        $this->tel = "";
    }
    
    
    function set_FirstName($fname) {
        $this->fname = $fname;
    }
    
    function get_FirstName() {
        return $this->fname;
    }
    
    
    function set_LastName($lname) {
        $this->lname = $lname;
    }
    
    function get_LastName() {
        return $this->lname;
    }
    
    function set_OtherName($othername) {
        $this->othername = $othername;
    }
    
    function get_OtherName() {
        return $this->othername;
    }
    
    function set_Email($email) {
        $this->email = $email;
    }
    
    function get_Email() {
        return $this->email;
    }
    
    function set_Country($country) {
        $this->country = $country;
    }
    
    function get_Country() {
        return $this->country;
    }
    
    function set_City($city) {
        $this->city = $city;
    }
    
    function get_City() {
        return $this->city;
    }
    
    function set_Location($location) {
        $this->location = $location;
    }
    
    function get_Location() {
        return $this->location;
    }
    
    function set_Postaladdress($postaladdress) {
        $this->postaladdress = $postaladdress;
    }
    
    function get_Postaladdress() {
        return $this->postaladdress;
    }
    
    function set_Tel($tel) {
        $this->tel = $tel;
    }
    
    function get_Tel() {
        return $this->tel;
    }
}
?>

