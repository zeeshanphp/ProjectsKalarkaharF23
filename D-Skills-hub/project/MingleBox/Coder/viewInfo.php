<?php
session_start();
if(empty($_SESSION['coder_id'])){
	header('location:index.php');
	
}
include "../connection.php";
$id=$_SESSION['coder_id'];
$query_coder = "select * from workers where coderId='$id'";
$rs_coder = mysqli_query($conn, $query_coder); 
$fetch_coder_info = mysqli_fetch_assoc($rs_coder);
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
    				<li class="active"><a href="addcoderInfo.php">ADD INFO</a></li><br>
    				<li ><a href="requests.php">MANAGE REQUESTS</a></li><br>
    				<li class=""><a href="allreq.php">ALL REQUESTS</a></li><br>
					<li><a href="../Logout.php">LOGOUT</a></li><br>
    			</ul>

    		</div>
    		<div class="col-md-6">
				  				
						<table class="table table-striped" style="height:500px;">					
							<tr>
								<td>USERNAME</td>
								<td>
									<?php echo $fetch_coder_info['username'];  ?>
								</td>
								
							</tr>
							<tr>
								<td>PASSWORD</td>
								<td>
									<?php echo $fetch_coder_info['pass'];  ?> 
								</td>
							</tr>
							<tr>
								<td>FULL NAME</td>
								<td>
									<?php echo $fetch_coder_info['fullname'];  ?>
								</td>
							</tr>
							 <tr>
								<td>EMAIL</td>
								<td>
									<?php echo $fetch_coder_info['email'];  ?>
								</td>
							</tr>
							 <tr>
								<td>PHONE NO</td>
								<td>
									<?php echo $fetch_coder_info['phone'];  ?>
								</td>
							</tr>   		
							 <tr>
								<td>SPECIALITY</td>
								<td>
									<?php echo $fetch_coder_info['speciality'];  ?>
								</td>
							</tr> 
							 <tr>
								<td>SKILLS</td>
								<td>
									<?php echo $fetch_coder_info['skills'];  ?>
								</td>
							</tr> 
							 <tr>
								<td>DESCRIPTION</td>
								<td>
									<?php echo $fetch_coder_info['Description'];  ?>
								</td>
							</tr> 			
													
							</table>
		
    	</div>
			<div class="col-md-2">
				<img src="images/<?php echo $fetch_coder_info['image'];?>" class="img-circle" alt="please upload you photo" height="200px" width="200px" />  
			</div>
    </div>

  </body>
</html>
