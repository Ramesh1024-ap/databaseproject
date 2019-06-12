<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




</head>
<body>
<div class="jumbotron" style="background:url('images/1.jpg');background-size:cover;height:300px;"></div>
<div class="container-fluid">
<div container class=row">
<div class="col-md-2">
        <div class="list-group">
           <a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color=#3498DB"> Tablets</a>
           <a href="" class="list-group-item">Tablet Details</a>
           <a href="" class="list-group-item">Add new Tablet</a>
           <a href="" class="list-group-item">Amount</a>
   
        </div>
		<hr>
		<div class="list-group">
           <a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color=#3498DB"> Patient</a>
           <a href="patient.php" class="list-group-item">Patient Details</a>
           <a href="" class="list-group-item">Remove patient</a>
   
        </div>
    </div>
	<div class="col-md-8">
	<div class="card">
	<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
	<h3>Book an appointment</h3>
	</div>
	<div class="card-body">
	<form class="form-group" action="func.php" method="post">
	<label> First Name: </label>
	<input type="text" name="fname" class="form-control"><br>
	<label> Last Name: </label>
	<input type="text" name="lname" class="form-control"><br>
	<label> Email Id: </label>
	<input type="text" name="email" class="form-control"><br>
	<label> Contact: </label>
	<input type="text" name="contact" class="form-control" name="docapp">
	<label> docapp: </label>
   <select class= "form-control" name="docapp">
   <option value="Dr sharma from 6 to 8 pm">Dr sharma from 6 to 8 pm</option>
    <option value="Dr shetty from 8 to 10 pm">Dr shetty from 8 to 10 pm</option>
	</select><br>
	
	<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">
	</form>
	
</div>
</div>
</div>
	<div class="col-md-1"></div>
	
	</div>
</div>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>