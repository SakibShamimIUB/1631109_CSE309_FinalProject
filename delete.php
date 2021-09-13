<?php

include ('connection.php'); // Using database connection file here

$id = $_GET['id']; // get id through query string

$sql = mysqli_query($conn,"delete from order_table where id = '$id'"); // delete query

if($sql)
{
    mysqli_close($conn); // Close connection
    header("location:dashboard.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>