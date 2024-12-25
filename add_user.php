<!-- This page for adding users. -->
<?php
  ini_set('display_errors', '1');
  include('reusable/env.php');
  include('reusable/config.php');
  include('reusable/functions.php');
?>
 <?php 
 //SELECT user's information.
      $query = 'SELECT * FROM user';
      $users = mysqli_query($connect, $query);
  ?>
<?php include('reusable/header.php'); ?>
<?php include('reusable/nav.php'); ?>
<h2 class="loginUser">User Add Page</h2>
<!-- User Adding -->
<form class="applicationForm" action="inc/userAdd.php" method="POST">
  <div class="container1">
   <label for="user_name" emptyName>Name:<span class="emptyName"></span></label>
   <input type="text" class="form-control" id="name" name="user_name">
  </div>
  <div class="container2">
   <label for="email">Email:<span class="emptymail"></span></label>
   <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="container3">
   <label for="password">Password:<span class="emptyPw"></span></label>
   <input type="password" class="form-control" id="pw" name="password">
  </div>
  <div class="container3">
   <label for="confirmPw">Confirm Password:<span class="emptyConfirmPw"></span></label>
   <input type="password" class="form-control" id="confirmPw" name="confirmPw">
  </div>
  <button type="submit" class="btn">Sign Up</button>
</form>  
<?php include('reusable/footer.php'); ?>

