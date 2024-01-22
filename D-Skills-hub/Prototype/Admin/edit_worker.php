<?php
session_start();

include "../connection.php";
$id = $_GET['workerId'];
$query_coder = "select * from workers where workerId='$id'";
$rs_coder = mysqli_query($conn, $query_coder);
$fetch_coder_info = mysqli_fetch_assoc($rs_coder);
if (isset($_POST['update'])) {
	$fullname = $_POST['fname'];
	$username = $_POST['uname'];
	$contact = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$skills = $_POST['skills'];
	$spec = $_POST['spec'];
	$update_coder = "update workers set username='$username', pass='$password',email='$email', phone='$contact', fullname='$fullname', speciality='$spec' , skills='$skills' where coderId='$id'";
	mysqli_query($conn, $update_coder);
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
		<div class="row bg-primary text-white bg-gradient">
			<div class="col-md-12">
				<center>
					<h1>ADMIN PANNEL Skills Hub</h1>
				</center>
			</div>
		</div>
		<div class="row">
			<div id="" class="col-md-2 bg-primary">
				<ul class="nav nav-pills nav-stacked text-white">
					<li class="nav-item py-2"><a href="allworkers.php" class="nav-link text-white">VIEW ALL WORKERS</a></li><br>
					<li class="nav-item py-2"><a href="allclients.php" class="nav-link text-white">VIEW ALL CLIENTS</a></li><br>
					<li class="nav-item py-2"><a href="../Logout.php" class="nav-link text-white">LOGOUT</a></li><br>
				</ul>

			</div>
			<div class="col-md-6">
				<center>
					<h4 class="text-success">UPDATE WORKER PROFILE</h4>
				</center>
				<form method="post">

					<table class="table table-striped" style="height:500px;">
						<tr>
							<td>USERNAME</td>
							<td>
								<input type="text" name="uname" class="form-control" value="<?php echo $fetch_coder_info['username'];  ?>">
							</td>

						</tr>
						<tr>
							<td>PASSWORD</td>
							<td>
								<input type="text" name="pass" class="form-control" value="<?php echo $fetch_coder_info['pass'];  ?> ">
							</td>
						</tr>
						<tr>
							<td>FULL NAME</td>
							<td>
								<input type="text" name="fname" class="form-control" value="<?php echo $fetch_coder_info['fullname'];  ?>">
							</td>
						</tr>
						<tr>
							<td>EMAIL</td>
							<td>
								<input type="text" name="email" class="form-control" value="<?php echo $fetch_coder_info['email'];  ?>">
							</td>
						</tr>
						<tr>
							<td>PHONE NO</td>
							<td>
								<input type="text" name="phone" class="form-control" value="<?php echo $fetch_coder_info['phone'];  ?>">
							</td>
						</tr>
						<tr>
							<td>SPECIALITY</td>
							<td>
								<input type="text" name="spec" class="form-control" value="<?php echo $fetch_coder_info['speciality'];  ?>">
							</td>
						</tr>
						<tr>
							<td>SKILLS</td>
							<td>
								<input type="text" name="skills" class="form-control" value="<?php echo $fetch_coder_info['skills'];  ?>">
							</td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="update" value="UPDATE" class="btn btn-block btn-success" /></td>
						</tr>

					</table>
				</form>
			</div>
			<div class="col-md-2">
				<img src="../Worker/images/<?php echo $fetch_coder_info['image']; ?>" alt="please upload you photo" height="300px" width="300px" />
			</div>
		</div>

</body>

</html>