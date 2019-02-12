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
				<th>Date</th>
				<th>View</th> 
			</tr>
		</thead>

		           <?php
                           $query="select distinct datee from date";
                           $result=$link->query($query);
                           if($result->num_rows>0){
                           	$i=0;
                           	while($val=$result->fetch_assoc()) {
                           		$i++;
                           


		           ?>
		<tr>
			<td> <?php echo $i ;?></td>
			<td> <?php echo $val['datee'] ;?></td>
			<td> <a href="viewp.php?date=<?php echo $val['datee']?>" class="btn btn-primary"> View</td>	
		</tr>
           
           <?php }}?>

	</div>
	<div class="panel-footer">
		
	</div>
	</div>
</body>
</html>	
  