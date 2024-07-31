<?php
  require( 'reusable/env.php' );
  include( 'reusable/functions.php' );
  include( 'reusable/config.php' );
  include('reusable/header.php');
  include('reusable/nav.php');
?>

<h2>Customer Management</h2>

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
<h2>Add Customer</h2>
 <!-- application form -->
 <form class="applicationForm" action="inc/addCustomer.php" method="POST">
  <div class="appContainer">
   <label for="user_fname">First Name:</label>
   <input type="text" class="form-control" id="fname" name="user_fname">
   <label for="user_lname">Last Name:</label>
   <input type="text" class="form-control" id="lname" name="user_lname">
  </div>
  <button type="submit" class="btn">Submit</button>
</form>  
 <?php include('reusable/footer.php');
  ?> 

