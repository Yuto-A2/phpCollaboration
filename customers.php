<?php
  include( 'reusable/env.php' );
  include( 'reusable/config.php' );
  include( 'reusable/functions.php' );

  include('reusable/header.php');
  include('reusable/nav.php');
?>

<h2>Users</h2>

<?php
$query = 'SELECT * FROM customer ';
$customers = mysqli_query($connect, $query);
?>
<?php
   foreach($customers as $customer){
    echo 
'<p>' . $customer['user_fname'] . ' ' . $customer['user_lname'] . '</p>';
   }
 ?>

 <?php include('reusable/footer.php');
  ?> 

