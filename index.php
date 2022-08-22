<?php
session_start();
if (isset($_SESSION['user_unique_id'])) {
  header('location: template.php');
}
include('./config/DB_conn.php');
include('./config/Auth.php');
$Auth_obj = new Amir();
$msg = "Please Create an Accounts !";
if (isset($_POST['submit'])) {

  $msg = $Auth_obj->UsersDataInsert($conn, $_POST);
}
?>
<?Php include_once('./head.php') ?>

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
  <div class="wrapper wrapper--w790">
    <div class="card card-5">
      <div class="card-heading">
        <h2 class="title">Event Registration Form</h2>
      </div>
      <div class="card-body">
        <form method="POST">
          <p class="mb-4 btn btn-warning form-control color-primkary"><?Php echo $msg; ?></p>

          <div class="form-row m-b-55">
            <div class="name">Name</div>
            <div class="value">
              <div class="row row-space">
                <div class="col-6">
                  <div class="input-group-desc">
                    <input class="input--style-5" type="text" name="fname">
                    <label class="label--desc">first name</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group-desc">
                    <input class="input--style-5" type="text" name="lname">
                    <label class="label--desc">last name</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Email</div>
            <div class="value">
              <div class="input-group">
                <input class="input--style-5" type="email" name="email">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Password</div>
            <div class="value">
              <div class="input-group">
                <input class="input--style-5" type="password" name="password">
              </div>
            </div>
          </div>

          <div class="form-row p-t-20">
            <label class="label label--block">Are you an existing customer?</label>
            <div class="p-t-15">
              <label class="radio-container m-r-55">Yes
                <input type="radio" checked="checked" name="exist">
                <span class="checkmark"></span>
              </label>
              <label class="radio-container">No
                <input type="radio" name="exist">
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
          <div>
            <input type="submit" value="Register" name="submit" class="btn btn--radius-2 btn--red">
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