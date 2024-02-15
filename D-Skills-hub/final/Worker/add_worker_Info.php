<?php
session_start();
if (empty($_SESSION['worker_id'])) {
	header('location:index.php');
}
include "../connection.php";

$id = $_SESSION['worker_id'];
$query_worker = "select * from workers where workerId='$id'";
$rs_worker = mysqli_query($conn, $query_worker);
$fetch_worker_info = mysqli_fetch_assoc($rs_worker);

if (isset($_POST['update'])) {
	$folder = "images/";
	$folder = $folder . basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $folder);
	if (empty($_FILES['image']['name'])) {
		$photo = $fetch_worker_info['image'];
	} else {
		$photo = $_FILES['image']['name'];
	}
	$fullname  = $_POST['fullname'];
	$username  = $_POST['username'];
	$email  = $_POST['email'];
	$pass  = $_POST['pass'];
	$phone  = $_POST['phone'];
	$spec = $_POST['spec'];
	$desc = $_POST['desc'];
	$skills = $_POST['skills'];
	$query = "UPDATE workers SET fullname='$fullname' , username='$username' , email='$email', phone='$phone' , pass='$pass' , image='$photo',speciality='$spec',Description='$desc',skills='$skills' where workerId='$id'";
	mysqli_query($conn, $query);
	header('location: viewinfo.php');
}

?>
<html>

<head>
	<title>Skills Hub</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
	<div class="container-fluid">
		<div class="row bg-primary">
			<div class="col-md-12">
				<center>
					<h3>Skills Hub <br> (Skilled Worker Pannel)</h3>
				</center>
			</div>
		</div>
		<div class="row">
			<div id="" class="col-md-2">
				<?php include 'nav.php' ?>
			</div>
			<div class="col-md-10">
				<form method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-8">

							<table class="table table-striped" style="height:500px;">
								<tr>
									<td>USERNAME</td>
									<td>
										<input type="text" class="form-control" name="username" value="<?php echo $fetch_worker_info['username'];  ?>" required />
									</td>

								</tr>
								<tr>
									<td>PASSWORD</td>
									<td>
										<input type="text" class="form-control" name="pass" value="<?php echo $fetch_worker_info['pass'];  ?>" required />

									</td>
								</tr>
								<tr>
									<td>FULL NAME</td>
									<td>
										<input type="text" class="form-control" name="fullname" value="<?php echo $fetch_worker_info['fullname'];  ?>" required />
									</td>
								</tr>
								<tr>
									<td>EMAIL</td>
									<td>
										<input type="text" class="form-control" name="email" value="<?php echo $fetch_worker_info['email'];  ?>" required />

									</td>
								</tr>
								<tr>
									<td>PHONE NO</td>
									<td>
										<input type="text" class="form-control" name="phone" value="<?php echo $fetch_worker_info['phone'];  ?>" required />

									</td>
								</tr>
								<tr>
									<td>SPECIALITY</td>
									<td>
										<input type="text" class="form-control" name="spec" value="<?php echo $fetch_worker_info['speciality'];  ?>" required />

									</td>
								</tr>
								<tr>
									<td>SKILLS</td>
									<td>
										<input type="text" class="form-control" name="skills" value="<?php echo $fetch_worker_info['skills'];  ?>" required />

									</td>
								</tr>
								<tr>
									<td>DESCRIPTION</td>
									<td>
										<textarea name="desc" class="form-control" rows="3">
									<?php echo $fetch_worker_info['Description'];  ?>

									</textarea>
									</td>
								</tr>

							</table>

						</div>
						<div class="col-md-4">
							<img src="images/<?php echo $fetch_worker_info['image']; ?>" alt="please upload you photo" height="300px" width="300px" />
							<input type="file" name="image" class="form-control my-3">
							<input type="submit" name="update" class="btn btn-primary w-100" value="Add/Update Worker Info">
						</div>
					</div>
				</form>
				<!-- <div class="tab-content">
					<form method="post" enctype="multipart/form-data">
						<table class="table table-striped" style="width:600px; height:500px;">
							<tr>
								<td>IMAGE</td>
								<td>
									<input type="file" name="image" value="BROWSE PHOTO" class="form-control" />
								</td>
							</tr>
							<tr>
								<td>SPECIALITY</td>
								<td>
									<input type="text" name="spec" placeholder="WEB DEVELOPER , GRAPHIC DESIGNER , CONTENT WRITER" class="form-control" />
								</td>
							</tr>
							<tr>
								<td>SKILLS</td>
								<td>
									<input type="text" name="skills" placeholder="HTML , CSS , JS" class="form-control" />
								</td>
							</tr>
							<tr>
								<td>DETAILS</td>
								<td>
									<textarea cols='35' rows='5' class="form-control" name="det"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2"><input type="submit" name="update" value="UPDATE INFO" class="btn btn-success" style="height: 40px; width:400px;">
								</td>
							</tr>
						</table>
					</form>
				</div> -->
			</div>
		</div>
	</div>

</body>

</html>