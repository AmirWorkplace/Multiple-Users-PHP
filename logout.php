<?php 
session_start();
include_once('./config/DB_conn.php');
include_once('./config/Auth.php');
$Auth_obj = new Amir();

// if(isset($seesion)){
//   $Auth_obj->logOut($conn);
// } ?action=logout

if(isset($_GET['action'])){
  if($_GET['action'] == 'logout'){
    $Auth_obj->logOut($conn);
  }
}





?>