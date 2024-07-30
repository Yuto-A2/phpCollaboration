<?php
  include('reusable/env.php');
  include('reusable/config.php');
  include('reusable/functions.php');

  // Check if form is submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert query for user table
    $query = "INSERT INTO user (
                `user_name`, 
                `email`,
                `password`) 
              VALUES (
                '" . mysqli_real_escape_string($connect, $name) . "',
                '" . mysqli_real_escape_string($connect, $email) . "', 
                '" . mysqli_real_escape_string($connect, $password) . "')";

    // Execute the query
    $user = mysqli_query($connect, $query);

    if ($user) {
      set_message('Added successfully!');
      header('Location: ../add_user.php');
      exit();
    } else {
      echo "Failed: " . mysqli_error($connect);
    }
  }
?>
