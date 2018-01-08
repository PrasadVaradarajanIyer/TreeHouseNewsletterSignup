<!DOCTYPE html>
<html>

<style>

input[type=button] {
    width: 25%;
    background-color: #000000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 50px 20px;
    cursor: pointer;
}

input[type=button]:hover {
    background-color: #5A5353;
}
</style>

<head>
	<title>Login Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","php_session");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query="SELECT * FROM users ORDER BY LastUpdatedOn DESC";
$result = mysqli_query($con,$query);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email Address</th>
<th>Last Updated On</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['First Name'] . "</td>";
echo "<td>" . $row['Last Name'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['LastUpdatedOn'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


<a href="enabledValid.php"><input type="button" value="Back to Registration page">