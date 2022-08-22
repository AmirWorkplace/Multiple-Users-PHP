<?php
session_start();

if (!isset($_SESSION['user_unique_id'])) {
  header('location: login.php');
}

include_once('./config/DB_conn.php');
include_once('./config/Auth.php');
$Auth_obj = new Amir();
if (isset($_POST['submit_post'])) {
  $Auth_obj->insertPost($conn, $_POST);
}


?>

<?php include_once('./head.php') ?>
<form method="POST">
  <div class="mCon">
    <div class="mCon-m">

      <div class="heading-a">
        <h1>Add Post Page</h1>
      </div>
      <div class="title">
        <div class="post-title">
          <h3>Add Your Post Title:</h3>
          <input type="text" name="post_title" class="form-control title_inp">
        </div>
      </div>
      <div class="post_desc">
        <div class="post_descript">
          <h3>Add your Post Description :</h3>
          <textarea type="text" name="post_description" class="form-control post_inp" cols=" 30" rows="10"></textarea>
        </div>
      </div>
      <div class="submit">
        <input type="submit" name="submit_post" value="Goo!" class="submit_btn">
      </div>

    </div>
  </div>
</form>
</body>

</html>