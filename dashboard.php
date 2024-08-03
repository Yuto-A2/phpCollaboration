<?php
ini_set('display_errors', '1');
include( 'reusable/env.php' );
include( 'reusable/config.php' );
include( 'reusable/functions.php' );

secure();

?>

<?php include('reusable/header.php'); ?>
<h2 class="dashboard">Welcome to Computer Part</h2>
<ul id="dashboard">
  <li>
    <a href="customers.php">
      Customer Add
    </a>
  </li>
  <li>
    <a href="logout.php">
      Logout
    </a>
  </li>
  <li>
    <a href="deleteAccount.php">
      Delete accounts
    </a>
  </li>
</ul>

<?php

include( 'reusable/footer.php' );

?>