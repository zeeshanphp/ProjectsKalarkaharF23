<?php
session_start();
include "../connection.php";
$query_coder = "SELECT * FROM hiering JOIN users ON hiering.userId=users.userId ";
$rs_coder = mysqli_query($conn, $query_coder); 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Skills Hub</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
    <div class="container-fluid">
	<div class="row">
    		<div class="col-md-12">
					<center><h1>ADMIN PANNEL Skills Hub</h1></center>
			</div>
	</div>
    	<div class="row">
    		<div id="" class="col-md-2">					
    			<ul class="nav nav-pills nav-stacked">
    				<li><a href="allworkers.php">VIEW ALL workers</a></li><br>
    				<li><a href="allclients.php">VIEW ALL CLIENTS</a></li><br>
    				<li><a href="hierings.php">VIEW ALL HIERING</a></li><br>
					<li><a href="../Logout.php">LOGOUT</a></li><br>
    			</ul>
    		</div>
    		<div class="col-md-8">
				  				
						<table class="table table-striped">					
							<tr>
								<th>REQUESTED BY</th>
								<th>DESCRIPTION</th>
								<th>PRICE</th>
								<th>REMARKS</th>															
							</tr>
							<?php while($fetch_coder_info = mysqli_fetch_assoc($rs_coder)){ ?>
							<tr>
								<td><?php echo $fetch_coder_info['fullname'];  ?></td>
								<td><?php echo $fetch_coder_info['description'];  ?></td>
								<td><?php echo $fetch_coder_info['price'];  ?></td>
								<td><?php echo $fetch_coder_info['remarks'];  ?></td>								
							</tr>
							<?php }?>
							</table>
		
    	</div>
			
    </div>

  </body>
</html>
