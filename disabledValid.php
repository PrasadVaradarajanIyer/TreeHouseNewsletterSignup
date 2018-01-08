<html>
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
     <input type="submit" class="btn btn-primary" value="submit">
      </div>
     	<div class="col-sm-1"></div>

     	<br><br>
      	<div class="row">
     <div class="col-sm-1"></div>
     <div class="col-sm-10">
     <a href="enabledValid.php"><input type="button" class="btn btn-primary" value="Enable validation">
      </div>
     	<div class="col-sm-1"></div>

      </div>
  	</form>
  	</div>
  </body>
</form>
