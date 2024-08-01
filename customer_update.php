<!-- This page for updating customers. -->
<!-- Example, http://localhost/phpCorabollation/customer_update.php?customer_id=1 -->
<?php
ini_set('display_errors', '1');
include('reusable/env.php');
include('reusable/config.php');
include('reusable/functions.php');

// secure();

//If there isn't customer_id, it goes to customer.php
if (!isset($_GET['customer_id'])) {
    header('Location: index.php');
    die();
}

//Checking if user_fname exsist, and it goes to the database. 
if (isset($_POST['user_fname'])) {
    if ($_POST['user_fname'] && $_POST['user_lname']) {
        $query = 'UPDATE customer SET
            user_fname = "' . mysqli_real_escape_string($connect, $_POST['user_fname']) . '",
            user_lname = "' . mysqli_real_escape_string($connect, $_POST['user_lname']) . '"
            WHERE customer_id = ' . $_GET['customer_id'] . '
            LIMIT 1';
        mysqli_query($connect, $query);

        set_message('User has been updated');
        header('Location: customers.php');
        die();
    }
}
//Checking if it is updated, and if not, it goes to customers.php 
if (isset($_GET['customer_id'])) {
    $query = 'SELECT * FROM customer WHERE customer_id = ' . $_GET['customer_id'] . ' LIMIT 1';
    $result = mysqli_query($connect, $query);
    
    if (!mysqli_num_rows($result)) {
        header('Location: customers.php');
        die();
    }
    $record = mysqli_fetch_assoc($result);
}

include('reusable/header.php');
include('reusable/nav.php');
?>

<h2>Edit Customer</h2>

<form method="post">
    <label for="user_fname">First:</label>
    <input type="text" name="user_fname" id="first" value="<?php echo htmlentities($record['user_fname']); ?>">

    <label for="user_lname">Last:</label>
    <input type="text" name="user_lname" id="last" value="<?php echo htmlentities($record['user_lname']); ?>">

    <br>
    <input type="submit" value="Edit User">
</form>

<p><a href="customers.php"><i class="fas fa-arrow-circle-left"></i> Return to Customer List</a></p>

<?php
include('reusable/footer.php');
?>


