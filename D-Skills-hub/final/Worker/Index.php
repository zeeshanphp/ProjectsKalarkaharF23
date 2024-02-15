<?php
include "../connection.php";
if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "select * from workers where username='$username' AND pass='$password'";
	$rs = mysqli_query($conn, $query);

	if (mysqli_num_rows($rs) > 0) {

		$row = mysqli_fetch_array($rs);
		session_start();
		$_SESSION['worker_id'] = $row['workerId'];
		header('location:viewInfo.php');
	} else {
		echo "<script> alert('INVALID LOGIN DETAILS');</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Worker Pannel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		body {
			background-image: url('../images/body-bg.jpg');

		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row py-5 mt-5">
			<div class="col-md-3"></div>
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header bg-primary w-100 bg-gradient">
						<center>
							<h4>Skills Hub <br> Skilled Worker Pannel</h4>
						</center>
					</div>
					<div class="card-body">
						<form action="" method="post">

							<table class="table table-borderless">

								<tr>
									<td>Username</td>
									<td>
										<input type="text" name="username" placeholder="Enter Username" class="form-control">
									</td>
								</tr>
								<tr>
									<td>Password</td>
									<td>
										<input type="password" name="password" placeholder="Enter Password" class="form-control">
									</td>
								</tr>
								<tr>
									<td colspan="2"><input type="submit" name="login" value="LOGIN" class="btn btn-info w-100 bg-gradient">
									</td>
								</tr>
								<tr>
									<td colspan="2"><a href="../" class="btn btn-success w-100 bg-gradient">Go To User Page</a>
									</td>
								</tr>

							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>