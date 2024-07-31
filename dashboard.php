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
    <a href="projects.php">
      Manage Projects
    </a>
  </li>
  <li>
    <a href="users.php">
      Manage Users
    </a>
  </li>
  <li>
    <a href="logout.php">
      Logout
    </a>
  </li>
</ul>

<?php

include( 'reusable/footer.php' );

?>