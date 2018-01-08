<!DOCTYPE html>
<html>
<head>
	<title>Login Details</title>
<style>

.modal {
    display: block;
    position: fixed;
    z-index: 1;
    padding-top: 50px;
    left: 0;
    top: 0;
    width: 100%;  
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}


.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}


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
</head>
<body>
<div id="myModal" class="modal">
	<div class="modal-content">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "php_session";

$conn = mysqli_connect($servername, $username, $password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
<a href="userDetails.php"><input type="button" value="Display user details"></a>
</div>
</div>


</body>
</html>