<?php
session_start();
include_once('./config/DB_conn.php');
include_once('./config/Auth.php');
$Auth_obj = new Amir();

if(isset($_SESSION['user_unique_id'])){
  $id = $_SESSION['user_unique_id'];

  $posts = $Auth_obj->disPlayUserData($conn, $id);
}else{
  echo "Sorry";
}

if(isset($_GET['user_unique_id'])){
  echo $_GET['user_unique_id'];
}else{
  echo "no user id found";
}


?>
<?php  
  while($post = mysqli_fetch_assoc($posts)){
    echo $post['user_unique_id'] . "<br>";
    echo $post['post_title'] . "<br>";
    echo $post['post_content'] . "<br> <br>";
    
  }
?>
<?php  ?>