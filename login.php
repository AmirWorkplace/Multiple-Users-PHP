<?php
session_start();

if (isset($_SESSION['user_unique_id'])) {
  header('location: template.php');
}

include( './config/DB_conn.php');
include('./config/Auth.php');
$Auth_obj = new Amir();

if (isset($_POST['submit_login'])) {
  $msg = $Auth_obj->sinIn($conn, $_POST);
}
?>
<?Php include_once('./head.php') ?>

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
  <div class="wrapper wrapper--w790">
    <div class="card card-5" ">
      <div class=" card-heading">
      <h2 class="title">Event Registration Form</h2>
    </div>
    <div class="card-body">
      <form method="POST">

        <div class="form-row">
          <div class="name">Email</div>
          <div class="value">
            <div class="input-group">
              <input class="input--style-5" type="email" name="log_email">
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="name">Password</div>
          <div class="value">
            <div class="input-group">
              <input class="input--style-5" type="password" name="log_password">
            </div>
          </div>
        </div>

        <div>
          <input type="submit" value="Log In" name="submit_login" class="btn btn--radius-2 btn--red">
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->