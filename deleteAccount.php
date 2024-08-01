<!-- This page for deleting users. -->
<?php
ini_set('display_errors', '1');
require('reusable/env.php');
include('reusable/functions.php');
include('reusable/config.php');
include('reusable/header.php');
include('reusable/nav.php');
?>

<h2>Delete your Account</h2>

<?php
$query = 'SELECT * FROM user';
$users = mysqli_query($connect, $query);

if ($users) {
    while ($user = mysqli_fetch_assoc($users)) {
        echo '<p>' . htmlspecialchars($user['user_name']) . '</p>';
        echo '<p>' . htmlspecialchars($user['email']) . '</p>';
        echo '<form action="inc/deleteusers.php" method="GET">';
        echo '<input type="hidden" name="id" value="' . htmlspecialchars($user['user_id']) . '">';
        echo '<button type="submit" class="btn">Delete</button>';
        echo '</form>';
    }
} else {
    echo 'No users found.';
}
?>

<?php
include('reusable/footer.php');
?>
