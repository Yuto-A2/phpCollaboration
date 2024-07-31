<?php
ini_set('display_errors', '1');
 include( '../reusable/config.php' );
 include( '../reusable/functions.php' );
 require( '../reusable/env.php' );

  $fName = $_POST['user_fname'];
  $lName = $_POST['user_lname'];
  
  $query = "INSERT INTO customer (
              `user_fname`, 
              `user_lname`) 
            VALUES (
              '" . mysqli_real_escape_string($connect, $fName) . "',
              '" . mysqli_real_escape_string($connect, $lName) . "')";

  $customer = mysqli_query($connect, $query);

  if($customer){
    set_message('Customer added successfully!', 'success');
    header('Location: ../index.php');
  }else{
    echo "Failed: " . mysqli_error($connect);
  }