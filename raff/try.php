<?php
session_start();
include('./config/DB_conn.php');
include('./config/Auth.php');
$Auth_obj = new Amir();

if (isset($_SESSION['user_unique_id'])) {
  echo $_SESSION['user_unique_id'];
}else{
  echo "No ID founded!";
}
?>