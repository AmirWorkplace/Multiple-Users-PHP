<?php

// use LDAP\Result;

include("DB_conn.php"); 

  class Amir{

    public function UsersDataInsert($conn, $data){
      $fname = $data['fname'];
      $lname = $data['lname'];
      $email = $data['email'];
      $password = $data['password'];
      $date = date("l jS \of F Y h:i:s A");

      $query1 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");

      if(mysqli_num_rows($query1) > 0){
        return "$email - This email already exist!";
      }else{
      $ran_id = rand(time(), 100000000);
        
        $insert_query = mysqli_query($conn, "INSERT INTO `users` (`user_unique_id`, `fname`, `lname`, `email`, `password`, `date`) VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$password}', '{$date}')");

        if($insert_query){
          $selected_query = mysqli_query($conn, "SELECT * FROM users WHERE user_unique_id = {$ran_id}");
          if($selected_query){
            header("location: login.php");
          }else{
            return "Something Wrong";
          }
        }
      }

    }



  public function sinIn($conn, $deta)
  {
    $email = $deta['log_email'];
    $pass = $deta['log_password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$pass'");
    if ($query) {
      header("location:template.php");
      $results = mysqli_fetch_assoc($query);
      if ($results) {
        $_SESSION['user_unique_id'] = $results['user_unique_id'];
      }
    }
  }


    public function insertPost($conn, $data){
      $session = $_SESSION['user_unique_id'];
      $post_title = $data['post_title'];
      $post_description = $data['post_description'];

      $query = "INSERT INTO `posts`(`user_unique_id`, `post_title`, `post_content`) VALUES ($session,'$post_title','$post_description')";

      if(mysqli_query($conn, $query)){
        header("location: template.php");
      }
    }


    public function selectedPostData($conn, $id){
    $post_unique_id = $id;
    $query = "SELECT * FROM `posts` WHERE `user_unique_id` = {$post_unique_id}";
      if(mysqli_query($conn, $query)){
        header('location: generate.php');
        $result = mysqli_query($conn, $query);
        return $result;
      }
    }

    public function MoreDetailsDisPost($conn, $my_id)
    {
      $query = "SELECT * FROM `posts`  WHERE `user_unique_id` = {$my_id}";

      if (mysqli_query($conn, $query)) {
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) > 0) {
          return $results;
        } else {
          die('<div class="die_generate" style=" background: #111711; display: flex; align-items: center; justify-content: center; height: 100vh; width: 100%;"><p style=" display: inline-block; padding: 8px 16px; border: 6px solid #0eb57d; font-size: 25px; color: #dc143c; text-align: center; border-radius: 4px; font-weight: 800;">Nothing here! <br> Please Create post and See This post on this Page.</p></div>');
        }
      }
    }

  public function logOut()
  {
    session_destroy();
    session_unset();
    header("location:template.php");
  }



  }
