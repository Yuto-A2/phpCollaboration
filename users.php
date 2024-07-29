<?php
  include( 'reusable/env.php' );
  include( 'reusable/config.php' );
  include( 'reusable/functions.php' );

  secure();

  include('reusable/header.php');
  include('reusable/nav.php');
?>

<h2>Users</h2>

<?php
$query = 'SELECT * FROM user ';
$result = mysqli_query($connect, $query);
?>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</
    </tr>

<?php while($record = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?php echo $record['first']; ?></td>
        <td><?php echo $record['last']; ?></td>
        <td><?php echo $record['email']; ?></td>
        <td><a href="user_edit.php?id=<?php echo $record['id'];?>">Edit</a></td>
        <td><a href="user.php?delete=<?php echo $record['id'];?>">Delete</a></td>
    </tr>
    <?php endwhile; ?>
</table>

<a href="users_add.php">Add User</a>