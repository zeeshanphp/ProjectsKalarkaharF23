<?php
session_start();
include "../connection.php";
$id=$_SESSION['coder_id'];
if(empty($_SESSION['coder_id'])){
	header('location:index.php');
	
}
$query_coder = "SELECT * FROM hiering JOIN users ON hiering.userId=users.userId WHERE hiering.coderId='$id' and hiering.remarks='PENDING'";
$rs_coder = mysqli_query($conn, $query_coder); 
if(isset($_GET['accept'])){
	$id=$_GET['accept'];
	$update_accept="update hiering set remarks='ACCEPTED' where hierId='$id'";
	mysqli_query($conn, $update_accept);
	header('location:requests.php');
}
if(isset($_GET['reject'])){
	$id=$_GET['reject'];
	$update_reject="update hiering set remarks='REJECTED' where hierId='$id'";
	mysqli_query($conn, $update_reject);
	header('location:requests.php');
}
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
					<center><h1>CODER PANNEL Skills Hub</h1></center>
			</div>
	</div>
    	<div class="row">
    		<div id="" class="col-md-2">					
    			<ul class="nav nav-pills nav-stacked">
    				<li><a href="viewInfo.php">VIEW INFO</a></li><br>
    				<li><a href="addcoderInfo.php">ADD INFO</a></li><br>
    				<li class="active"><a href="requests.php">MANAGE REQUESTS</a></li><br>
    				<li><a href="allreq.php">ALL REQUESTS</a></li><br>
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
								<th>ACCEPT</th>															
								<th>REJECT</th>															
							</tr>
							<?php while($fetch_coder_info = mysqli_fetch_assoc($rs_coder)){ ?>
							<tr>
								<td><?php echo $fetch_coder_info['fullname'];  ?></td>
								<td><?php echo $fetch_coder_info['description'];  ?></td>
								<td><?php echo $fetch_coder_info['price'];  ?></td>
								<td><?php echo $fetch_coder_info['remarks'];  ?></td>								
								<td><a href="?accept=<?php echo $fetch_coder_info['hierId'];  ?>" class="btn btn-warning btn-block">ACCEPT</a></td>
								<td><a href="?reject=<?php echo $fetch_coder_info['hierId'];  ?>" class="btn btn-danger btn-block">REJECT</a></td>
							</tr>
							<?php }?>
							</table>
		
    	</div>
			
    </div>

  </body>
</html>
