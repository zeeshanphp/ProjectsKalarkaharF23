<?php 
include 'connection.php';
session_start();
$client_id=$_SESSION['clientId'];
	$query = "SELECT * FROM hiering JOIN workers on hiering.coderId= workers.coderId WHERE hiering.userId='$client_id' ";
	$rs=mysqli_query($conn,$query);
	

?>

<!doctype html>
<html lang="">

<head>
<title>Skills Hub</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
<style type="text/css">


</style>
</head>

<body>
<!-- header section -->
	  <header id="header">
		<div class="header-content clearfix"> <a class="logo" href="index.html">Skills <span>Hub</span></a>
		  <div class="navigation">
			<?php include 'nav-bar.php' ?>
		  </div>
		</div>
	  </header>
		<div class="row">
		<center><h3>MY HIERING</h3></center>
		
									
			
				<table class="table table-striped" style="margin-left:15px;">
					
			        <tr>
			            <th>CODER NAME</th>
						<th>EMAIL</th>
						<th>PHONE</th>
						<th>SKILS</th>
						<th>SPECIALITY</th>
						<th>COST</th>
						<th>REMARKS</th>
			            
			        </tr>
					<?php while($row= mysqli_fetch_array($rs)){?>
			        <tr>
			            
			            <td>
			                <?php echo $row['fullname']; ?> 
			            </td><td>
			                <?php echo $row['email']; ?> 
			            </td><td>
			                <?php echo $row['phone']; ?> 
			            </td><td>
			                <?php echo $row['speciality']; ?> 
			            </td><td>
			                <?php echo $row['skills']; ?> 
			            </td>
						<td>
			                Rs.<?php echo $row['price']; ?> 
			            </td>
						<td>
			                <?php echo $row['remarks']; ?> 
			            </td>
			        </tr>
					<?php } ?>
		    	</table>					
		
		
	</div>

</body>
</html>