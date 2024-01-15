<?php
session_start();

include "../connection.php";
$id=$_GET['workerId'];
$query_coder = "select * from workers where coderId='$id'";
$rs_coder = mysqli_query($conn, $query_coder); 
$fetch_coder_info = mysqli_fetch_assoc($rs_coder);
if(isset($_POST['update'])){
		$fullname=$_POST['fname'];
	$username=$_POST['uname'];
	$contact=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$skills=$_POST['skills'];
	$spec=$_POST['spec'];
	$update_coder="update workers set username='$username', pass='$password',email='$email', phone='$contact', fullname='$fullname', speciality='$spec' , skills='$skills' where coderId='$id'";
	mysqli_query($conn,$update_coder);
	header('location:allworkers.php');
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
    		<div class="col-md-6">
				  		<form method="post">		
						<table class="table table-striped" style="height:500px;">					
							<tr>
								<td>USERNAME</td>
								<td>
									<input type="text" name="uname" value="<?php echo $fetch_coder_info['username'];  ?>">
								</td>
								
							</tr>
							<tr>
								<td>PASSWORD</td>
								<td>
									<input type="text" name="pass" value="<?php echo $fetch_coder_info['pass'];  ?> ">
								</td>
							</tr>
							<tr>
								<td>FULL NAME</td>
								<td>
									<input type="text" name="fname" value="<?php echo $fetch_coder_info['fullname'];  ?>">
								</td>
							</tr>
							 <tr>
								<td>EMAIL</td>
								<td>
									<input type="text" name="email" value="<?php echo $fetch_coder_info['email'];  ?>">
								</td>
							</tr>
							 <tr>
								<td>PHONE NO</td>
								<td>
									<input type="text" name="phone" value="<?php echo $fetch_coder_info['phone'];  ?>">
								</td>
							</tr>   		
							 <tr>
								<td>SPECIALITY</td>
								<td>
									<input type="text" name="spec" value="<?php echo $fetch_coder_info['speciality'];  ?>">
								</td>
							</tr> 
							 <tr>
								<td>SKILLS</td>
								<td>
									<input type="text" name="skills" value="<?php echo $fetch_coder_info['skills'];  ?>">
								</td>
							</tr> 
							<tr>
								<td colspan="2"><input type="submit" name="update" value="UPDATE" class="btn btn-block btn-success" /></td>
							</tr>	
													
							</table>
						</form>
    	</div>
			<div class="col-md-2">
				<img src="..Coder/images/<?php echo $fetch_coder_info['image'];?>" alt="please upload you photo" height="300px" width="300px" />  
			</div>
    </div>

  </body>
</html>
