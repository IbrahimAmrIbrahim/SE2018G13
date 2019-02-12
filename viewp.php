<?php include_once('database.php');?>
<!DOCTYPE html>
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
	<a href="#" class="btn btn-primary">View</a>
	<a href="add.php" class="btn btn-primary pull-right">Add</a>
	<form method="post">	
	<table class="table">
		<thead>
			<tr>
				<th>Sr No.</th>
				<th>Name</th>
				<th>Faher name</th> 
				<th>Email</th>
				<th>Attendance</th> 
			</tr>
		</thead>

		           <?php

		                if($_GET['date']){
		                	$date=$_GET['date'];
                           $query="SELECT student.*, date.* FROM date
                           inner join student on date.student_id=student.student_id and date.datee='$date'";
                           $result=$link->query($query);
                           if($result->num_rows>0){
                           	$i=0;
                           	while($val=$result->fetch_assoc()) {
                           		$i++;
                           


		           ?>
		<tr>
			<td> <?php echo $i ;?></td>
			<td> <?php echo $val['name'] ;?></td>
			<td> <?php echo $val['fname'] ;?></td>
			<td> <?php echo $val['email'] ;?></td>
			<td>
				Present<input type="radio" 
				value="Present"
				<?php

				      if($val['value']=='Present')
				        echo "checked";
				?>
				>
				Absent<input type="radio" 
				value="Absent"
				<?php

				      if($val['value']=='Absent')
				        echo "checked";
				?>
				>
			</td>

		</tr>
           
           <?php }}}?>

	</div>
	<div class="panel-footer">
		
	</div>
	</div>
</body>
</html>	