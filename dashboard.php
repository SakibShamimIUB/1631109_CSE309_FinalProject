<?php
if(isset($_POST['logout'])) {
    // Initialize the session
	session_start();
	 
	// Unset all of the session variables
	$_SESSION = array();
	 
	// Destroy the session.
	session_destroy();
	 
	// Redirect to login page
	header("location: admin.php");
	exit;
}
include('connection.php');
$sql = "SELECT * FROM order_table";

  
?>

<html>  
<head>  
    <title>Food Cataring system</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>  
<body>
	<form action="" method="post">
	    <input type="hidden" name="logout" value="true" />
	    <button>Logout</button>
	</form>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Name</th>
	      <th scope="col">Contact No.</th>
	      <th scope="col">Email Address</th>
	      <th scope="col">Subscription Type</th>
	      <th scope="col">Order Date</th>
	      <th scope="col">Order Status</th>
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php
		if ($result = $conn -> query($sql)) {
			while ($data = mysqli_fetch_array($result)) {
			?>
		    <tr>
		      	<th scope="row">1</th>
				<td><?= $data['name']; ?></td>
				<td><?= $data['contact_no']; ?></td>
				<td><?= $data['email']; ?></td>
				<td><?= $data['subscription']; ?></td>
				<td><?= $data['order_date']; ?></td>
				<td><?= $data['order_status']; ?></td>
				<td><a href="edit.php?id=<?= $data['id']; ?>">Edit</a></td>
				<td><a href="delete.php?id=<?= $data['id']; ?>">Delete</a></td>
		    </tr>
	    <?php
			}
		}
		?>
	  </tbody>
	</table>
	<?php
$result -> free_result();
$conn->close();
	?>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>     
</html>  