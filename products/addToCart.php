<?php
session_start();
$response['message'] = Array();
$webpath = $_SERVER['DOCUMENT_ROOT'] . "/beiFity/";
include_once $webpath . "products/products.php";
$_SESSION['cart']=array();
if(isset($_REQUEST['product_id'])){
    $id=$_REQUEST['product_id'];
    array_push($_SESSION['cart'], $id);
    $_SESSION['counter']=$_SESSION['counter']+1;
    $products=new Products();
    $products=$products->selectProductByID($id);
    $_SESSION['total_cost']=$_SESSION['total_cost']+$products->price;
    $response['message'] = array("counter" => $_SESSION['counter'], "total_cost" => $_SESSION['total_cost']);
    echo $output = json_encode($response);
}
//unset($_SESSION['total_cost']);
