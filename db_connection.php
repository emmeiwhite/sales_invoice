<?php
  // Connection string 
  $connection = $mysqli_connect('localhost','root','','sales_invoice');

  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

?>