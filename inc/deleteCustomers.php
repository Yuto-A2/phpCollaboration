<?php
ini_set('display_errors', '1');
require('../reusable/env.php');
include('../reusable/functions.php');
include('../reusable/config.php');
$id = $_GET['id'];

$query = "DELETE FROM customer WHERE customer_id = '$id'" ;
$user = mysqli_query($connect, $query);

if($user){
    header('Location: ../customers.php');
}else{
    echo "Failed: " . mysqli_error($connect);
}