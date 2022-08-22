<?php
session_start();

if (!isset($_SESSION['user_unique_id'])) {
  header('location: login.php');
}

include('./config/DB_conn.php');
include('./config/Auth.php');
$Auth_obj = new Amir();


if (isset($_GET['action'])) {
  if ($_GET['action'] == $_SESSION['user_unique_id']) {
    $user_id = $_SESSION['user_unique_id'];
    $posts = $Auth_obj->MoreDetailsDisPost($conn, $user_id);
  } else {
    die('No User Unique founded!');
  }
} else {
  die('No User Unique founded!');
}

?>
<?php include_once("./head.php") ?>
<div class="mtitile">
  <p>Generate Page:</p>
</div>

<div class="contaner_gen">
  <div class="contaner_gen2">
    <?php
    while ($row = mysqli_fetch_assoc($posts)) {
    ?>
      <div class="gen_container">
        <div class="gen_id">
          <p> <span class="sp1"><?php echo $row['post_id']; ?></span> Your Id : <span class="sp2"> <?php echo $row['user_unique_id']; ?></span> </p>
        </div>
        <div class="gen_title">
          <h3>Your Post Title :</h3>
          <h4><?php echo $row['post_title']; ?></h4>
        </div>
        <div class="gen_description">
          <h3>Your Post Description :</h3>
          <p><textarea id="gen_description_textaria" cols="30" rows="10">
            <?php echo $row['post_content']; ?>
          </textarea></p>
        </div>
      </div>
    <?php  }
    ?>
  </div>
</div>
<?php  ?>
<?php ?>
<?php ?>
