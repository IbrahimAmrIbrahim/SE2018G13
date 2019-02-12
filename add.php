<?php include_once('database.php');?>
<html>
<head>
     <title></title>
     <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
     <script type="text/javascript" src="bootstrap/jquery.min.js"></script>
</head>
<body>
	<div class="panel panel-default container">
	<div class="panel-heading">
		<h1 style="text-align: center;">Attendance Management System</h1>
	</div>	
	<div class="panel-body">
	<?php
	       if($_SERVER['REQUEST_METHOD']=='POST'){
	       	 $name=$_POST['name'];
	       	 $fname=$_POST['fname'];
	       	 $email=$_POST['email'];
	       	 if($name=="" || $fname==""|| $email==""){
	       	 	echo"<div class='alert alert alert-danger'> Field must not be empty </div>";
	       	 }
	       	 else if (!filter_var($email,FILTER_VALIDATE_EMAIL))
	       	 {
	       	 	echo"<div class='alert alert alert-danger'> Invalid email format !!! </div>";
	       	 }
	       	 else
	       	 {
	       	 $query="insert into student(name,fname,email) values('$name','$fname','$email')";
	       	 $result=$link->query($query);

	       	 if($result)
	       	 {
	       	 	echo"<div class='alert alert alert-success'> DATA inserted successfully </div>";
	       	 }
	       }
	   }
	?>
	<form method="post">
	<a href="#" class="btn btn-primary">View</a>
	<a href="index.php" class="btn btn-primary pull-right">Back</a>	
	<div class="form-label">
		<label for="name">Name:</label>
		<input type="text" name="name" class="form-control">	
	</div>
	<div class="form-label">
		<label for="name">Father Name:</label>
		<input type="text" name="fname" class="form-control">	
	</div>
	<div class="form-label">
		<label for="name">Email:</label>
		<input type="text" name="email" class="form-control">	
	</div>
	<input type="submit" class="btn btn-primary">
	</form>
	</div>
	<div class="panel-footer">
		
	</div>
	</div>
</body>
</html>