<?php
include "../connection.php";
if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	if ($username == 'admin' && $password = 'admin') {
		header('location:allworkers.php');
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ADMIN LOGIN PANNEL</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>
	<div class="container-fluid">
		<div class="row py-5 mt-5">
			<div class="col-md-4"></div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-header bg-primary bg-gradient">
						<center>
							<h4> ADMIN PANNEL <br> Skills Hub</h4>
						</center>
					</div>
					<div class="card-body">
						<form action="" method="post">
							<table class="table table-borderless">
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
									<td colspan="2" class="form-group"><input type="submit" name="login" value="LOGIN" class="btn btn-info bg-gradient w-100">
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