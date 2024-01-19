<?php
session_start();

include "../connection.php";
$query_coder = "SELECT * FROM  workers";
$rs_coder = mysqli_query($conn, $query_coder); 
if(isset($_GET['del_workerId'])){
	$id=$_GET['del_workerId'];
	$delete = "delete from workers where coderId='$id'";
	mysqli_query($conn, $delete);
	header('location:allworkers.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Skills Hub</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	</head>
	<body>
    <div class="container-fluid">
	<div class="row bg-primary text-white bg-gradient">
    		<div class="col-md-11 py-3">
			<h4>ADMIN PANNEL Skills Hub</h4>
			</div>
			<div class="col-md-1 py-3">
				<a href="../Logout.php" class="btn btn-danger bg-gradient">Logout</a>
			</div>
	</div>
    	<div class="row">
    		<div id="" class="col-md-2 bg-primary">					
    			<ul class="nav nav-pills nav-stacked text-white">
    				<li class="nav-item py-2"><a href="allworkers.php" class="nav-link text-white">VIEW ALL WORKERS</a></li><br>
    				<li class="nav-item py-2"><a href="allclients.php" class="nav-link text-white">VIEW ALL CLIENTS</a></li><br>
    				<li class="nav-item py-2"><a href="hierings.php" class="nav-link text-white">VIEW ALL HIERING</a></li><br>
					<li class="nav-item py-2"><a href="../Logout.php"  class="nav-link text-white">LOGOUT</a></li><br>
    			</ul>
    		</div>
    		<div class="col-md-10">
				  	<div class="card">
						<div class="card-header py-3"><center> <b> ALL SKILLED WORKERS AVAILABLE</b></center></div>
						<div class="card-body">
						<table class="table table-borderless">					
							<tr>
								<th>USERNAME</th>
								<th>PASSWORD</th>
								<th>EMAIL</th>
								<th>PHONE</th>															
								<th>FULLNAME</th>															
								<th>SPECIALITY</th>															
								<th>SKILLS</th>															
								<th>EDIT</th>															
								<th>DELETE</th>															
							</tr>
							<?php while($fetch_worker_info = mysqli_fetch_assoc($rs_coder)){ ?>
							<tr>
								<td><?php echo $fetch_worker_info['username'];  ?></td>
								<td><?php echo $fetch_worker_info['pass'];  ?></td>
								<td><?php echo $fetch_worker_info['email'];  ?></td>
								<td><?php echo $fetch_worker_info['phone'];  ?></td>								
								<td><?php echo $fetch_worker_info['fullname'];  ?></td>								
								<td><?php echo $fetch_worker_info['speciality'];  ?></td>								
								<td><?php echo $fetch_worker_info['skills'];  ?></td>								
								<td><a href="edit_worker.php?workerId=<?php echo $fetch_worker_info['coderId'];  ?>" class="btn btn-block btn-warning">EDIT</a></td>								
								<td><a href="?del_workerId=<?php echo $fetch_worker_info['coderId'];  ?>" class="btn btn-block btn-danger">DELETE</a></td>								
							</tr>
							<?php }?>
							</table>
		
    	
						</div>
					</div>
			</div>
			
    </div>

  </body>
</html>
