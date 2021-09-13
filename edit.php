<?php

include ('connection.php'); // Using database connection file here

$id = $_GET['id']; // get id through query string


$sql = mysqli_query($conn,"select * from order_table where id='$id'"); // select query

$data = mysqli_fetch_array($sql); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $subscription = $_POST['subscription'];
    $order_date = $_POST['order_date'];
    $order_status = $_POST['order_status'];
	
    $edit = mysqli_query($conn,"update order_table set subscription='$subscription', order_date='$order_date', order_status='$order_status' where id='$id'");
	

    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:dashboard.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<html>  
<head>  
    <title>Food Cataring system</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>  
<body>
<h3>Update Data</h3>

<form method="POST">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Name</th>
				<th scope="col">Contact No.</th>
				<th scope="col">Email Address</th>
				<th scope="col">Subscription Type</th>
				<th scope="col">Order Date</th>
				<th scope="col">Order Status</th>
				<th scope="col">Update</th>
			</tr>
		</thead>
		<tbody>
		    <tr>
				<td><input type="text" name="name" value="<?= $data['name']; ?>" placeholder="Name" disabled></td>
				<td><input type="text" name="contact_no" value="<?= $data['contact_no']; ?>" placeholder="Contact No"disabled></td>
				<td><input type="text" name="email" value="<?= $data['email']; ?>" placeholder="Email Address" disabled></td>
				<td><input type="text" name="subscription" value="<?= $data['subscription']; ?>" placeholder="Subscription Type" Required></td>
				<td><input type="text" name="order_date" value="<?= $data['order_date']; ?>" placeholder="Order Date" Required></td>
				<td><input type="text" name="order_status" value="<?= $data['order_status']; ?>" placeholder="Order Status" Required></td>
				<td><input type="submit" name="update" value="Update"></td>
		    </tr>
	  </tbody>
	</table>
	
	
</form>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>     
</html>  