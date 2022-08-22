<?php

//set DataBase Connection :

  $dbHost = "localhost";
  $dbUser = "root";
  $dbName = "userdataprivate";
  $dbPasWord = "";
  
  $conn = mysqli_connect($dbHost, $dbUser, $dbPasWord, $dbName);

  if(!$conn){
  echo "Database connection error" . mysqli_connect_error();
  }
  
  
  
  
  
  // else{
  //   echo "You are Connected in DataBase"  . "<br>";
  // }

// echo  . "<br>";









?>