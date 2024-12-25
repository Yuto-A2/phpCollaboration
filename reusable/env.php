<?php 
// $connect = mysqli_connect('localhost', 'ss585196_1234567', '12345678', 'ss585196_computerpart');
//       if(!$connect){
//         die("Connection Failed: " . mysqli_connect_error());
//       }

$connect = mysqli_connect('localhost', 'root', 'root', 'collaboration_site');
      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }