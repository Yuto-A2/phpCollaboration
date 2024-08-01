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