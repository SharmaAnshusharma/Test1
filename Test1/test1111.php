<?php
include('dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test 1</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-primary text-center">Passbook</h1>
		<hr>
		<form method="post">
			<input type="text" class="form-control" placeholder="Description" name="description" required><br>
			 <input type="number" class="form-control" placeholder="Amount" name="amount" required><br>
			 <input type="submit" name="Submit" value="Save" class="btn btn-outline-primary col-sm-12">
		</form>
	</div>
<body>
<?php
if(isset($_POST['Submit']))
{
	extract($_POST);
	$query = mysqli_query($con,"INSERT INTO `passbook` (`Description`,`Amount`) VALUES ('$description','$amount')");
		
		
		 $query = mysqli_query($con,"INSERT INTO `passbook` (`Description`,`Amount`) VALUES ('$description','$amount')");
		if($query == true)
		{
			echo "<script>alert('Inserted Successfully');</script>";
		}
		else
		{
			echo "<script>alert('Something Went Wrong');</script>";
		}
}

?>