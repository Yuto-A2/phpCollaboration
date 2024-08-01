<?php
ini_set('display_errors', '1');
require('../reusable/env.php');
include('../reusable/functions.php');
include('../reusable/config.php');
$id = $_GET['id'];

$query = "DELETE FROM user WHERE user_id = '$id'" ;
$user = mysqli_query($connect, $query);

if($user){
    header('Location: ../deleteAccount.php');
}else{
    echo "Failed: " . mysqli_error($connect);
}