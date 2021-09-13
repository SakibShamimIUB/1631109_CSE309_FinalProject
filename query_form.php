<?php
include('connection.php');
// Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $contact_no = $_REQUEST['contact_no'];
        $email =  $_REQUEST['email'];
        $subscription = $_REQUEST['subscription'];
        $order_date = $_REQUEST['order_date'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO order_table (`name`, `contact_no`, `email`, `subscription`, `order_date`)  VALUES ('$name', 
            '$contact_no','$email','$subscription','$order_date')";
          
        if(mysqli_query($conn, $sql)){
          ?>
            <h3>Data stored in a database successfully.</h3>
  
            <p>Name: <?= $name; ?></p>
            <p>Contact Number: <?= $contact_no; ?></p>
            <p>Email: <?= $email; ?></p>
            <p>Subscription: <?= $subscription; ?></p>
            <p>Order Date: <?= $order_date; ?></p>
            <?php
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
    ?>