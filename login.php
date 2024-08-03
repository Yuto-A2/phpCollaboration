<?php
  include( 'reusable/env.php' );
  include( 'reusable/config.php' );
  include( 'reusable/functions.php' );
?>
<?php
if( isset( $_POST['email'] ) )
{
  
  $query = 'SELECT * FROM user WHERE email = "' . mysqli_real_escape_string($connect, $_POST['email']) . '" AND password = "' . md5(mysqli_real_escape_string($connect, $_POST['password'])) . '" LIMIT 1';

  $result = mysqli_query( $connect, $query );
  
  if( mysqli_num_rows( $result ) )
  {
    
    $record = mysqli_fetch_assoc( $result );
    
    $_SESSION['user_id'] = $record['user_id'];
    $_SESSION['email'] = $record['email'];
    
    header( 'Location: dashboard.php' );
    die();
    
  }
  else
  {
    
    set_message( 'Incorrect email and/or password' );
    
    header( 'Location: index.php' );
    die();
    
  } 
  
}?>
 <?php include('reusable/header.php'); ?>
 <?php include('reusable/nav.php'); ?>
 <h2 class="loginForm">Login</h2>
<!-- Login page -->
<form class="applicationForm" action="login.php" method="POST">
        <p>
            <label for="email">Email: </label>
            <input type="email" name="email" autocomplete="email">
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="password" name="password" autocomplete="current-password">
        </p>
        <p>
            <input class="btn" type="submit" value="Login">
        </p>
    </form>