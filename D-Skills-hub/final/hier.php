<?php
session_start();
include "connection.php";
$userId = $_SESSION['userId'];
$workerId = $_GET['hier'];
if (empty($_SESSION['userId'])) {
	header('location:workers.php');
}
if (isset($_POST['sendreq'])) {
	$hdate = $_POST['hdate'];
	$address = $_POST['adress'];
	$query_hiering = "insert into hiering (workerId, userId,adress, date_work) values('$workerId','$userId','$address','$hdate')";
	mysqli_query($conn, $query_hiering);
	header('location:my_hiering.php');
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
			<h3>HIER WORKER</h3>
		</center>
		<div class="col-lg-4">
			<form action="" method="post">
				<table class="table table-striped" style="">

					<tr>
						<td style="vertical-align: middle;"> <b> Date:</b></td>
						<td>
							<input type="date" name="hdate" class="form-control">
						</td>
					</tr>
					<tr>
						<td style="vertical-align: middle;"> <b> Adress </b></td>
						<td>
							<textarea rows='7' class="form-control" name='adress' placeholder="Enter Your Address"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="form-group"><input type="submit" name="sendreq" value="SEND REQUEST" class="btn btn-primary btn-block">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>

</body>

</html>