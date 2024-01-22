<?php
include 'connection.php';
if (isset($_POST['register'])) {
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$contact = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user_type = $_POST['user_type'];
	//echo $user_type; die();
	if ($user_type == "USER") {
		$query = "insert into users (username,pass,email,phone,fullname)values('$username','$password' , '$email','$contact' ,'$fullname') ";
		mysqli_query($conn, $query);
		header('location:signin.php');
	} elseif ($user_type == "SKILLED WORKER") {
		$query_coder = "insert into workers (username,pass,email,phone,fullname)values('$username','$password' , '$email','$contact'  ,'$fullname') ";
		mysqli_query($conn, $query_coder);
		header('location:coder/index.php');
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
			<h3>REGISTERATION FORM</h3>
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
						<td>CONFIRM PASSWORD</td>
						<td>
							<input type="password" name="password1" placeholder="Confirm Password" class="form-control">
						</td>
					</tr>
					<tr>
						<td>FULL NAME</td>
						<td>
							<input type="text" name="fullname" placeholder="Enter Fullname" class="form-control">
						</td>
					</tr>
					<tr>
						<td>EMAIL</td>
						<td>
							<input type="text" name="email" placeholder="Enter Email Address" class="form-control">
						</td>
					</tr>
					<tr>
						<td>PHONE NO</td>
						<td>
							<input type="text" name="phone" placeholder="Enter Phone Number" class="form-control">
						</td>
					</tr>
					<tr>
						<td>USER TYPE</td>
						<td>
							<select name="user_type" class="form-control">
								<option>----SELECT USER TYPE ------</option>
								<option>SKILLED WORKER</option>
								<option>USER</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="form-group"><input type="submit" name="register" value="SIGN UP" class="btn btn-info" style="height: 40px; width:400px;">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>

</body>

</html>