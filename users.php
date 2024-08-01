<?php
ini_set('display_errors', '1');
include('reusable/env.php');
include('reusable/config.php');
include('reusable/functions.php');

// secure();

//If there is no "user_id", it goes to customer.php
if (!isset($_GET['user_id'])) {
    header('Location: customers.php');
    die();
}

//Checking if email and password are exsist, it goes to the database and hashed password.
if (isset($_POST['email'])) {
    if ($_POST['email'] && $_POST['password']) {
        $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = 'UPDATE user SET
            user_name = "' . mysqli_real_escape_string($connect, $_POST['user_name']) . '",
            email = "' . mysqli_real_escape_string($connect, $_POST['email']) . '",
            password = "' . mysqli_real_escape_string($connect, $hashed_password) . '"
            WHERE user_id = ' . mysqli_real_escape_string($connect, $_GET['user_id']) . '
            LIMIT 1';
        
        //Checking if it is updated, it goes to index.php   
        //Example, http://localhost/phpCorabollation/users.php?user_id=2 
        if (mysqli_query($connect, $query)) {
            set_message('User has been updated');
            header('Location: index.php');
            die();
        } else {
            echo 'Error updating user: ' . mysqli_error($connect);
        }
    }
}

//If there isn't user_id, it goes to index.php 
if (isset($_GET['user_id'])) {
    $query = 'SELECT * FROM user WHERE user_id = ' . mysqli_real_escape_string($connect, $_GET['user_id']) . ' LIMIT 1';
    $result = mysqli_query($connect, $query);
    
    if (!mysqli_num_rows($result)) {
        header('Location: index.php');
        die();
    }
    $record = mysqli_fetch_assoc($result);
}

include('reusable/header.php');
include('reusable/nav.php');
?>

 <h2>Change your information</h2>

 <form class="userInfo" method="post">
    <label for="user_name">User Name:</label>
    <input type="text" name="user_name" id="first" value="<?php echo htmlentities($record['user_name']); ?>">

    <label for="email">Email:</label>
    <input type="text" name="email" id="email" value="<?php echo htmlentities($record['email']); ?>">

    <label for="password">Password:</label>
    <input type="password" name="password" id="pw">

    <br>
    <input type="submit" value="Update">
</form>

<?php
include('reusable/footer.php');
?>
