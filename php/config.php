<?php
  $hostname = "sql6.freemysqlhosting.net";
  $username = "sql6582085";
  $password = "LNKSERrRXp";
  $dbname = "sql6582085";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
