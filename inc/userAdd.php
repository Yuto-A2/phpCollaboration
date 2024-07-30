<?php
  include( 'reusable/env.php' );
  include( 'reusable/config.php' );
  include( 'reusable/functions.php' );

  $user_name = $_POST['user_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO user (
              `user_name`, 
              `email`, 
              `password`) 
            VALUES (
              '" . mysqli_real_escape_string($connect, $user_name) . "',
              '" . mysqli_real_escape_string($connect, $password) . "', 
              '$email')";

  $user = mysqli_query($connect, $query);

  if($user){
    set_message('User added successfully!', 'success');
    header('Location: ../index.php');
  }else{
    echo "Failed: " . mysqli_error($connect);
  }