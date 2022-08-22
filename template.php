<?php
session_start();

include_once('./config/DB_conn.php');
include_once('./config/Auth.php');
$Auth_obj = new Amir();

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'logout') {
    $Auth_obj->logOut($conn);
  }
}

if (isset($_GET['action'])) {
  $user_id = $_GET['action'];
  $posts = $Auth_obj->selectedPostData($conn, $user_id);
}


?>

<?Php include_once('./head.php') ?>

<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar" role="banner">

  <div class="container">
    <div class="row align-items-center">

      <div class="col-11 col-xl-2">
        <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">Brand</a></h1>
      </div>
      <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">

          <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
            <li class="active"><a href="#"><span>Home</span></a></li>
            <li class="has-children">
              <a href="#"><span>Syed Amir</span></a>
              <ul class="dropdown arrow-top">
                <li><a href="test.php?users=
                <?php
                if (isset($_SESSION['user_unique_id'])) {
                  echo $_SESSION['user_unique_id'];
                } else {
                  echo 'No Youser ID founded!';
                }
                ?>">Test</a></li>
                <li><a href="#">Just Try</a></li>
                <li><a href="#">Trials</a></li>
                <?php if (!isset($_SESSION['user_unique_id'])) { ?>
                  <li class="has-children">
                    <a href="#">AboutAmir</a>
                    <ul class="dropdown">
                      <li><a href="https://www.facebook.com/syedamir0">Facebook</a></li>
                      <li><a href="https://github.com/AmirWorkplace">GitHub</a></a></li>
                      <li><a href="https://www.linkedin.com/in/mohammad-amir-727370242/">Linked In</a></li>
                      <li><a href="https://twitter.com/Mohamma70369813">Twitter</a></li>
                    </ul>
                  </li>
                <?php } ?>
              </ul>
            </li>
            <?php
            if (isset($_SESSION['user_unique_id'])) { ?>
              <li><a href="./post.php"><span>Post</span></a></li>
              <li><a href="generate.php?action=<?php echo $_SESSION['user_unique_id']; ?>"><span>Generate</span></a></li>
            <?php } ?>
            <?php
            if (isset($_SESSION['user_unique_id'])) { ?>
              <li><a href="?action=logout"><span>Log Out</span></a></li>
            <?php } else { ?>
              <li><a href="./login.php"><span>Log In</span></a></li>
              <li><a href="./index.php"><span>Sign Up</span></a></li>
            <?php } ?>
          </ul>
        </nav>
      </div>


      <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    </div>

  </div>
  </div>

</header>

<div class="hero" style="background-image: url('images/hero_1.jpg');"></div>

<?php echo $_SESSION['users_unique_id'];
?>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/main.js"></script>
</body>

</html>