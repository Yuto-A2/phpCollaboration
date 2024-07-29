<?php 
$connect = mysqli_connect('localhost', 'root', 'root', 'collaboration_site');
      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }

