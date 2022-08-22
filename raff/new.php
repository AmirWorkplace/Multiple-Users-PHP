
<?php
session_start();
include('./config/DB_conn.php');
include('./config/Auth.php');
$Auth_obj = new Amir();

if (isset($_POST['new'])) {
  // $msg = $Auth_obj->new($conn, $_POST);
}
?>

<form action="#" method="$_POST">
  <label for="email">E-mail:</label><br>
  <input type="email" name="uemail"><br>
  <label for="password">Password:</label><br>
  <input type="password" name="upass"><br>
  <br>
  <input type="submit" name="new">
</form>