<?php
ini_set('display_errors', '1');
include( 'reusable/env.php' );
include( 'reusable/config.php' );
include( 'reusable/functions.php' );

secure();

include( 'reusable/header.php' );

?>

<ul id="dashboard">
  <li>
    <a href="orders.php">
      Your order
    </a>
  </li>
  <li>
    <a href="#">
      Change password
    </a>
  </li>
  <li>
    <a href="logout.php">
      Logout
    </a>
  </li>
  <li>
    <a href="deleteAccount.php">
      Delete your account
    </a>
  </li>
</ul>

<?php

include( 'reusable/footer.php' );

?>