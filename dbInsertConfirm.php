<!DOCTYPE html>
<html>
<head>
	<title>Login Details</title>
	<style type="text/css">
		a{
			margin-top: 70px;
		}
	</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "php_session";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*else 
{ 
echo "Connected successfully";
}*/
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$sql="INSERT INTO `users`(`First Name`, `Last Name`, `Email`) VALUES ('$fname','$lname','$email')";
$query=mysqli_query($conn,$sql);
if($query)
{
echo "Values inserted successfully";
}
else
{
	echo "values not inserted";
}

?>
<br>
<a href="userDetails.php"><input type="button" class="btn btn-primary" value="details"></a>
</body>
</html>