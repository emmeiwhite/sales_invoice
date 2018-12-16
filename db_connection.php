<?php
  // Connection string 
  $connection = mysqli_connect("localhost", "root", "", "sales_invoice");

  /* check connection */
  if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }

?>