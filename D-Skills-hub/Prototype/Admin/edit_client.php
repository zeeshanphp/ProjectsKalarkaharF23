<?php
session_start();

include "../connection.php";
$id = $_GET['clientId'];
$query_client = "select * from users where userId='$id'";
$rs_client = mysqli_query($conn, $query_client);
$fetch_client_info = mysqli_fetch_assoc($rs_client);
if (isset($_POST['update'])) {
	$fullname = $_POST['fname'];
	$username = $_POST['uname'];
	$contact = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$update_client = "update users set username='$username', pass='$password',email='$email', phone='$contact', fullname='$fullname' where userId='$id'";
	mysqli_query($conn, $update_client);
	header('location:allclients.php');
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
				<form method="post">
					<table class="table table-striped" style="height:500px;">
						<tr>
							<td>USERNAME</td>
							<td>
								<input type="text" name="uname" value="<?php echo $fetch_client_info['username'];  ?>">
							</td>

						</tr>
						<tr>
							<td>PASSWORD</td>
							<td>
								<input type="text" name="pass" value="<?php echo $fetch_client_info['pass'];  ?> ">
							</td>
						</tr>
						<tr>
							<td>FULL NAME</td>
							<td>
								<input type="text" name="fname" value="<?php echo $fetch_client_info['fullname'];  ?>">
							</td>
						</tr>
						<tr>
							<td>EMAIL</td>
							<td>
								<input type="text" name="email" value="<?php echo $fetch_client_info['email'];  ?>">
							</td>
						</tr>
						<tr>
							<td>PHONE NO</td>
							<td>
								<input type="text" name="phone" value="<?php echo $fetch_client_info['phone'];  ?>">
							</td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="update" value="UPDATE" class="btn btn-block btn-success" /></td>
						</tr>

					</table>
				</form>
			</div>

		</div>

</body>

</html>