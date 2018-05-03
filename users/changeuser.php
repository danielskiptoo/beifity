<?php

session_start();
$webpath = $_SERVER['DOCUMENT_ROOT'] . "/beiFity/";
include_once $webpath . "util/DatabaseConnection.php";
include_once $webpath . "user/user.php";
include_once $webpath . "util/util.php";
include_once $webpath . "util/passwordutil.php";

$util = new util();
$managePassword = new PasswordUtil();
$output = "";
$errMsg = "";
$test = true;
$inserted = FALSE;
$test_post = $_SERVER["REQUEST_METHOD"] == "GET";

if ($test_post) {
    
    if ($_REQUEST['action'] == "user_sign_up") {
        

        $user = new user();
        $response['fields'] = Array();
        $response['message'] = Array();

        $user->name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
        $user->phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : "";
        $user->email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
        $user->location = isset($_REQUEST['location']) ? $_REQUEST['location'] : "";
        $user->password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
        $user->gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : "";
        $user->type = isset($_REQUEST['type']) ? $_REQUEST['type'] : "";
        $user->location = isset($_REQUEST['location']) ? $_REQUEST['location'] : "";
        $user->dob = isset($_REQUEST['dob']) ? $_REQUEST['dob'] : "";
        

        if (empty($user->name)) {
            array_push($response['fields'], array("error" => "Name  is required", "field" => "name"));
            $test = FALSE;
        } else {
            $user->name = $util->test_input($user->name);
        }
        
        if (empty($user->password)) {
            array_push($response['fields'], array("error" => "Password is not valid", "field" => "password"));
            $test = FALSE;
        } else {
            $user->password = $util->test_input($user->password);
        }
        
        if (empty($user->phone)) {
            array_push($response['fields'], array("error" => "Mobile Phone  is required", "field" => "phone"));
            $test = FALSE;
        } else {
            $user->phone = $util->test_input($user->phone);
        }
        
        if (empty($user->type)) {
            array_push($response['fields'], array("error" => "Mobile Phone  is required", "field" => "phone"));
            $test = FALSE;
        } else {
            $user->type = $util->test_input($user->type);
        }
        
        if (empty($user->email)) {
            array_push($response['fields'], array("error" => "Email field is required", "field" => "email"));
            $test = FALSE;
        } else if (!filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
            array_push($response['fields'], array("error" => "Email value is not correct", "field" => "email"));
            $test = FALSE;
        } else {
            $user->email = $util->test_input($user->email);
        }

        if ($user->check_if_user_exist($user->email)) {

            $test = FALSE;
            array_push($response['fields'], array("error" => "Email already exists in the system", "field" => "email"));
            $errMsg = "Email already exists in the system.";
        } else if ($test) {

            $user->status = 1;
            $user->password =  $managePassword->hashPassword($user->password);

            $inserted = $user->create();

            if ($inserted) {
                $user = $user->selectUserByEmail($user->email);
                $test = true;
                $errMsg = "Account  for User " . $user->name . " has been created";
            } else {

                $errMsg = "Account  was not created .Please contact the system  administrator for further guidelines ";
                $test = FALSE;
            }
        } else {

            $errMsg = "Please correct indicated fields below to complete registration.";
            $test = FALSE;
        }

         array("msg" => $errMsg, "status" => $test,"userid" => $user->id);
        $output = json_encode(array("msg" => $errMsg, "status" => $test,"userid" => $user->id));
    } else if ($_REQUEST['action'] == "user_sign_in") {

        $user = new user();
        $response['fields'] = Array();
        $response['message'] = Array();

        $user->email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
        $user->password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";

        if (empty($user->password)) {
            array_push($response['fields'], array("error" => "Password is not valid", "field" => "password"));
            $test = FALSE;
        } else {
            $user->password = $util->test_input($user->password);
        }
        
        if (empty($user->email)) {
            array_push($response['fields'], array("error" => "Email field is required", "field" => "email"));
            $test = FALSE;
        } else if (!filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
            array_push($response['fields'], array("error" => "Email value is not correct", "field" => "email"));
            $test = FALSE;
        } else {
            $user->email = $util->test_input($user->email);
        }

        if ($test) {

            
            $logged = $user->authenticateUser($user->email, $user->password);
            if ($logged) {

                $test = true;
                $errMsg = "success";
                $user = $user->selectUserByEmail($user->email);
            } else {

                $errMsg = "fail ";
                $test = FALSE;
            }
        } else {

            $errMsg = "Please correct indicated fields below to complete registration.";
            $test = FALSE;
        }

        //$response['message'] = array("msg" => $errMsg, "status" => $test, "name" => $user->name, "description" => "", "id" => $user->id, "email" => $user->email);
        $output = json_encode(array("msg" => $errMsg, "status" => $test, "name" => $user->name, "description" => "", "id" => $user->id, "email" => $user->email, 
        "usertype" => $user->type, "clinic" => $user->clinic, "location" => $user->location, "regno" => $user->regno, "specialization" => $user->speccialization, 
        "subspeccialization" => $user->subspeccialization, "phone" => $user->phone));
    } else if ($_REQUEST['action'] == "update_user") {
        

        $user = new user();
        $response['fields'] = Array();
        $response['message'] = Array();

        $user->regno = $util->test_input($_REQUEST['regno']);;
        $user->specialization = $util->test_input($_REQUEST['specialization']);;
        $user->subspecialization = $util->test_input($_REQUEST['subspecialization']);;
        $user->clinic = $util->test_input($_REQUEST['clinic']);;
        $user->physicaladdress = isset($_REQUEST['physicaladdress']) ? $_REQUEST['physicaladdress'] : NULL;
        $user->id = $util->test_input($_REQUEST['userid']);
        $user->longitude = isset($_REQUEST['longitude']) ? $_REQUEST['longitude'] : NULL;
        $user->latitude = isset($_REQUEST['latitude']) ? $_REQUEST['latitude'] : NULL;
        
        
        if (true) {


            $inserted = $user->update();

            if ($inserted) {

                $test = true;
                $errMsg = "Account  for User " . $user->name . " has been updated";
            } else {

                $errMsg = "Account  was not created .Please contact the system  administrator for further guidelines ";
                $test = FALSE;
            }
        } else {

            $errMsg = "Please correct indicated fields below to complete registration.";
            $test = FALSE;
        }

        $output = json_encode( array("msg" => $errMsg, "status" => $test));
    } else if ($_REQUEST['action'] == "update_user_info") {
        

        $user = new user();
        $response['fields'] = Array();
        $response['message'] = Array();
        
        $user->name = $util->test_input($_REQUEST['name']);
        $user->phone = $util->test_input($_REQUEST['phone']);
        $user->location = $util->test_input($_REQUEST['location']);
        $user->gender = $util->test_input($_REQUEST['gender']);
        $user->type = $util->test_input($_REQUEST['type']);
        $user->id = $util->test_input($_REQUEST['userid']);
        
        if (true) {
            
            $inserted = $user->update();

            if ($inserted) {

                $test = true;
                $errMsg = "Account  for User " . $user->name . " has been updated";
            } else {

                $errMsg = "Account  was not created .Please contact the system  administrator for further guidelines ";
                $test = FALSE;
            }
        } else {

            $errMsg = "Please correct indicated fields below to complete registration.";
            $test = FALSE;
        }
        
        $output = json_encode(array("msg" => $errMsg, "status" => $test,"name" => $user->name, "description" => "", "id" => $user->id,  
        "usertype" => $user->type, "clinic" => $user->clinic, "location" => $user->location, "phone" => $user->phone));
    } else {
        $output = "uuuuu2";
    }

} else {
    $output = "uuuuu1";
}


    echo $output;
?>

