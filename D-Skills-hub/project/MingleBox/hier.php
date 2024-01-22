<?php
session_start();
include "connection.php";
if(empty($_SESSION['clientId'])){
	header('location:projects.php');
}
if(isset($_POST['sendreq'])){
$client_id=$_SESSION['clientId'];
$coder_id = $_GET['coder_id'];
$price=$_POST['cost'];
$desc=$_POST['desc'];
$query_hiering = "insert into hiering (coderId, userId,remarks, price, description) values('$coder_id','$client_id','Pending','$price','$desc')";
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

		table{
			border:0px;
			 
			 margin-left:500px;
			 height:300px;
			 margin-top:20px;
		}

</style>
</head>

<body>
<!-- header section -->

	  <header id="header">
		<div class="header-content clearfix"> <a class="logo" href="index.html">Skills <span>Hub</span></a>
		  <div class="navigation">
			<?php include 'nav-bar.php' ?>
		  </div>
		</div>
	  </header>
		<div class="row">
		<center><h3>HIER CODER</h3></center>
		<div class="col-lg-4">								
			<form action="" method="post">
				<table class="table table-striped" style="">

			        <tr>
			            <td>PRICE</td>
			            <td>
			                <input type="text" name="cost"  placeholder="Enter Project Cost" class="form-control"> 
			            </td>
			        </tr>
					<tr>
			            <td>DESCRIPTION</td>
			            <td>
			                <textarea rows='7' cols='40' name='desc' placeholder="Enter Project Description And Requirments"></textarea> 
			            </td>
			        </tr>
				    <tr>
			            <td colspan="2" class="form-group"><input type="submit" name="sendreq" value="SEND REQUEST" class="btn btn-primary btn-block"  >
			            </td>									            
			        </tr>
		    	</table>
			</form>				
		</div>
	</div>

</body>
</html>