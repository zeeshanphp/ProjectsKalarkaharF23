<?php
session_start();
if(empty($_SESSION['coder_id'])){
	header('location:index.php');
	
}
include "../connection.php";
$id = $_SESSION['coder_id'];
if(isset($_POST['update'])){
$folder = "images/";
$folder = $folder.basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$folder);
//echo $_FILES['image']['name'];
$photo=$_FILES['image']['name'];
$spec = $_POST['spec'];
$desc= $_POST['det'];
$skills=$_POST['skills'];
$update_coder_query = "update workers set image='$photo',speciality='$spec',Description='$desc',skills='$skills' where coderId='$id'";
mysqli_query($conn, $update_coder_query );
}

?>
<html>
	<head>
		<title>Skills Hub</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
    <div class="container-fluid">
	<div class="row">
    		<div class="col-md-12">
					<center><h1>CODER PANNEL Skills Hub</h1></center>
			</div>
			</div>
    	<div class="row">
    		<div id="" class="col-md-2">					
    			<ul class="nav nav-pills nav-stacked">
    				<li><a href="viewInfo.php">VIEW INFO</a></li><br>
    				<li class="active"><a href="addcoderInfo.php">ADD INFO</a></li><br>
    				<li><a href="requests.php">MANAGE REQUESTS</a></li><br>
    				<li><a href="allreq.php">ALL REQUESTS</a></li><br>
					<li><a href="../Logout.php">LOGOUT</a></li><br>
    			</ul>
    			</ul>
    		</div>
    		<div class="col-md-8">
    				<div class="tab-content">
    					<form method="post"  enctype="multipart/form-data">
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
									<input type="text" name="skills" placeholder="HTML , CSS , JS" class="form-control"/> 
								</td>
							</tr>
							 <tr>
								<td>DETAILS</td>
								<td>
									<textarea cols='35' rows='5' class="form-control" name="det"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2"><input type="submit" name="update" value="UPDATE INFO" class="btn btn-success" style="height: 40px; width:400px;" >
								</td>									            
							</tr>	
						</table>
					</form>
    				</div>
    		</div>
    	</div>
    </div>

  </body>
</html>
