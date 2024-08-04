<!-- This page for deleting users. -->
<?php
ini_set('display_errors', '1');
require('reusable/env.php');
include('reusable/functions.php');
include('reusable/config.php');
include('reusable/header.php');
include('reusable/nav.php');
?>

<h2>Delete your Customer</h2>

<?php
$query = 'SELECT * FROM customer';
$customers = mysqli_query($connect, $query);

if ($customers) {
    while ($customer = mysqli_fetch_assoc($customers)) {
        echo '<p>' . htmlspecialchars($customer['user_fname']) . ' ' . htmlspecialchars($customer['user_lname']) . '</p>';
        echo '<form action="inc/deleteCustomers.php" method="GET">';
        echo '<input type="hidden" name="id" value="' . htmlspecialchars($customer['customer_id']) . '">';
        echo '<button class="deleteCustomer" type="submit" class="btn">Delete</button>';
        echo '</form>';
    }
} else {
    echo 'No users found.';
}
?>

<?php
include('reusable/footer.php');
?>
