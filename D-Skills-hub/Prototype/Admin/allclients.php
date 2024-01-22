<?php
session_start();

include "../connection.php";
$query_client = "SELECT * FROM  users";
$rs_client = mysqli_query($conn, $query_client);
if (isset($_GET['del_clientId'])) {
	$id = $_GET['del_clientId'];
	$delete = "delete from users where userId='$id'";
	mysqli_query($conn, $delete);
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
			<div class="col-md-11 py-3">
				<h4>ADMIN PANNEL Skills Hub</h4>
			</div>
			<div class="col-md-1 py-3">
				<a href="../Logout.php" class="btn btn-danger bg-gradient">Logout</a>
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
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">
						<center> <b> ALL AVAILABLE USERS </b></center>
					</div>
					<div class="card-body">
						<table class="table table-striped">
							<tr>
								<th>FULLNAME</th>
								<th>USERNAME</th>
								<th>PASSWORD</th>
								<th>EMAIL</th>
								<th>PHONE</th>
								<th>EDIT</th>
								<th>DELETE</th>
							</tr>
							<?php while ($fetch_client_info = mysqli_fetch_assoc($rs_client)) { ?>
								<tr>
									<td><?php echo $fetch_client_info['fullname'];  ?></td>
									<td><?php echo $fetch_client_info['username'];  ?></td>
									<td><?php echo $fetch_client_info['pass'];  ?></td>
									<td><?php echo $fetch_client_info['email'];  ?></td>
									<td><?php echo $fetch_client_info['phone'];  ?></td>
									<td><a href="edit_client.php?clientId=<?php echo $fetch_client_info['userId'];  ?>" class="btn btn-block btn-warning">EDIT</a></td>
									<td><a href="?del_clientId=<?php echo $fetch_client_info['userId'];  ?>" class="btn btn-block btn-danger">DELETE</a></td>
								</tr>
							<?php } ?>
						</table>

					</div>
				</div>

			</div>

		</div>

</body>

</html>