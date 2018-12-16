<?php
  include("db_connection.php");
  // echo '<h1>SOMETHING Started WORKED</h1>';
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Sales Invoice | Imran Rafiq Rather</title>
  </head>
  <body>

  <section class="container-fluid">
    <header class="header-section">

        <?php
          if(isset($_GET["create"])){
          ?>
            <!-- Create a form  -->

            
          <?php
          }else{
        ?>

        <h1 align="center">INVOICE LIST</h1>

      <div align="right">
        <a href="sales_invoice.php?create=1" class="btn btn-primary btn-lg">Create Invoice</a>
      </div>
    </header>
    
    <main>
      <table id="dataTable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Invoice Number </th>  
              <th>Invoice Date</th>  
              <th>Receiver Name</th>  
              <th>Invoice Total</th>  
              <th>PDF</th>  
              <th>EDIT</th>  
              <th>DELETE</th>  
            </tr>
          </thead>

          <?php
              // Prepare Query Statement
  $query = "SELECT * FROM orders ORDER BY order_id DESC";

  // Execute Query Statement and get our result set
 if ($result = mysqli_query($connection, $query)) {
    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
       echo '
        <tr>
          <td>'.$row["order_no"].'</td>
          <td>'.$row["order_date"].'</td>
          <td>'.$row["order_receiver_name"].'</td>
          <td>'.$row["order_total_after_tax"].'</td>
          <td> <a href="./print_invoice.php?pdf=1&id='.$row["order_id"].'">PDF</a></td>
           <td> <a href="./invoice.php?pdf=1&id='.$row["order_id"].'"><span class="glyphicon glyphicon-edit"></span></a></td>
        </tr>
       ';
    }

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */
  mysqli_close($connection);
          ?>
    
      </table>

      <?php
          // Closing our else part in case Create button is not clicked

      }
      ?>
    </main>

    
  </section>

      
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
