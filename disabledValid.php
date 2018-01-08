<html>
<style>

b { 
    font-weight: bold;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 25%;
    /*background-color: #4CAF50;*/
    background-color: #000000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 50px 20px;
    cursor: pointer;
}

input[type=submit]:hover {
    /*background-color: #45a049;*/
    background-color: #5A5353;
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

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 0px;
}
</style>
<head>
  <title>Homepage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>  
<form name="myform"  method="post" action="dbInsertConfirm.php" onsubmit="return validateemail();">  


  	<div class="container-fluid">
  	<marquee><h1><i><b>Registration Form</b></i></h1></marquee>
  	<br><br>     
<div class="row">
     <div class="col-sm-1"></div>
     <div class="col-sm-10">
     First Name : <input type="text" name="fname">
      </div>
     	<div class="col-sm-1"></div>
     </div>
       	<br><br>
  		<div class="row">
     <div class="col-sm-1"></div>
     <div class="col-sm-10">
     Last Name : <input type="text" name="lname">
      </div>
     	<div class="col-sm-1"></div>

      </div>
      <br><br>
	<div class="row">
     <div class="col-sm-1"></div>
     <div class="col-sm-10">
     Email :   <input type="text" name="email">
      </div>
     	<div class="col-sm-1"></div>

      </div>
      <br><br>
      	<div class="row">
     <div class="col-sm-1"></div>
     <div class="col-sm-10">
     <input type="submit" value="Submit">
      </div>
     	<div class="col-sm-1"></div>
     </div>
     	<br><br>
      	<div class="row">
     <div class="col-sm-1"></div>
     <div class="col-sm-10">
     <a href="enabledValid.php"><input type="button" value="Enable validation">
      </div>
     	<div class="col-sm-1"></div>

      </div>
  	</form>
  	</div>
  </body>
</form>
