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
		<h1 style="text-align: center;">Students Attendance</h1>
	</div>	
	<div class="panel-body">
	<a href="view.php" class="btn btn-primary">View</a>
	<a href="add.php" class="btn btn-primary pull-right">Add</a>
	<form method="post">	
	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Father name</th>
				<th>Email</th>
				<th>Attendance</th>
			</tr>
		</thead>
		<tbody>
		<?php
		        $query="select * from student";
		        $result=$link->query($query);
		        while($show=$result->fetch_assoc()) 
		        {
		?>
			<tr>
				<td><?php echo $show['name']; ?></td>
				<td><?php echo $show['fname']; ?></td>
				<td><?php echo $show['email']; ?></td>
				<td>
					Present<input required type="radio" name="attendance[<?php echo $show['student_id']; ?>]" value="Present">Absent<input required type="radio" name="attendance[<?php echo $show['student_id']; ?>]" value="Absent" type="text">
				</td>
			</tr>
			<?php } ?>
			</tbody>
		<?php
                     if($_SERVER['REQUEST_METHOD']=='POST'){
                     	$att=$_POST['attendance'];
                     	$date=date('d-m-y');
                     	$query="select distinct datee from date";
                     	$result=$link->query($query);
                     	$b=false;
                     	if($result->num_rows>0){
                     	while ( $check=$result->fetch_assoc()) {
                     		if($date==$check['datee']){
                     			echo"<div class='alert alert alert-danger'> Attendance already taken today !!</div>";
                     			$b=true;
                     		}
                     		
                     	}
                     }
                     	if(!$b){

                     		    foreach ($att as $key => $value) {
                     		    	if($value=="Present"){
                     		    		$query="insert into date(value,student_id,datee) values('Present',$key,'$date')";
                     		    		$insertResult=$link->query($query);


                     		    	}
                     		    	else
                     		    	{
                     		    		$query="insert into date(value,student_id,datee) values('Absent',$key,'$date')";
                     		    		$insertResult=$link->query($query);

                     		    	}
                     		    }
                     		    if($insertResult)
                     		    {
                     		    	echo"<div class='alert alert alert-success'> Attendance taken successfully !!</div>";
                     		    }
                     	}
                      }
                     

		?>
	</table>
	<input  class="btn btn-primary" type="submit" value="Take Attendance">
		</form>
	</div>
	<div class="panel-footer">
		
	</div>
	</div>
</body>
</html>	
  