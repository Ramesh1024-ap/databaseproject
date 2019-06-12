<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
<title>Patient Details</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="jumbotron" style="background:url('images/1.jpg');background-size:cover;height:300px;"></div>
<div class="container-fluid">
<div class="card">
	<div class="card" style="background-color:#3498DB;color:#ffffff;">
	<div class="row">
	<div class="col-md-1">
	<a href="adminpanel.php" class="btn btn-light"> Go_Back</a>
	</div>
	<div class="col-md-3"><h3>PATIENT DETAILS</h3></div>
	<div class="col-md-8">
	<form class="form-group" action="func.php" method="post">
	<div class="row">
	<div class="col-md-10"><input type="text" name="search" class="form-control"></div>
	<div class="col-md-2"><input type="submit" name="patient_search" class="btn btn-light" value="serach"> </div></div>
	
	</form>
	</div>
	</div></div>
<div class="card-body"></div>
<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email-Id</th>
	  <th scope="col">contact</th>
	  <th scope="col">Doccapp</th>
    </tr>
  </thead>
  <tbody>
    <?php get_patient(); ?>
    
  </tbody>
</table>





</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>