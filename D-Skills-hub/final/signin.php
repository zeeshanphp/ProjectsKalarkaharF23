<?php
include 'connection.php';
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "select * from  users where username='$username' AND pass='$password'";
	$result = mysqli_query($conn, $query);
	//echo mysqli_num_rows($result); die();
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result);
		session_start();
		$_SESSION['userId'] = $row['userId'];
		header('location:update_profile.php');
	} else {
		echo "<script> alert('INCORRECT PASSWORD');</script>";
	}
}
?>
<!doctype html>
<html lang="">

<head>
	<title>Skills Hub</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<style type="text/css">
		table {
			border: 0px;
			width: 400px;
			margin-left: 500px;
			height: 300px;
			margin-top: 20px;
		}
	</style>
</head>

<body>
	<!-- header section -->
	<header id="header">
		<div class="header-content clearfix"> <a class="logo" href="home.php">Skills <span>Hub</span></a>
			<div class="navigation">
				<?php include 'nav-bar.php' ?>
			</div>
		</div>
	</header>

	<div class="row">
		<center>
			<h3>LOGIN</h3>
		</center>
		<div class="col-lg-4">

			<form action="" method="post">
				<table class="table table-striped" style="">

					<tr>
						<td>USERNAME</td>
						<td>
							<input type="text" name="username" placeholder="Enter Username" class="form-control">
						</td>
					</tr>
					<tr>
						<td>PASSWORD</td>
						<td>
							<input type="password" name="password" placeholder="Enter Password" class="form-control">
						</td>
					</tr>

					<tr>
						<td colspan="2" class="form-group"><input type="submit" name="login" value="LOGIN" class="btn btn-info" style="height: 40px; width:400px;">
						</td>
					</tr>
					<tr>
						<td colspan="2" class="form-group"><a href="register.php" class="btn btn-warning" style="height: 40px; width:400px;">REGISTER</a>
						</td>
					</tr>
					<tr>
						<td><a href="Admin/" class="text-success">Go To Admin Pannel</a></td>
						<td><a href="Worker/">Go To Worker Pannel</a></td>
					</tr>
				</table>
			</form>
		</div>
	</div>

</body>

</html>