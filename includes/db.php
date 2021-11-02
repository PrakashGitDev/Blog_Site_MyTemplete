<?php
session_start();
$db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_name = 'techblog';
  $db_port = 8889;

   $db = mysqli_connect($db_host,$db_user,$db_password,$db_name);

  if (!$db = mysqli_connect($db_host,$db_user,$db_password,$db_name)) {
  	die("failed to connect");
  }
?>