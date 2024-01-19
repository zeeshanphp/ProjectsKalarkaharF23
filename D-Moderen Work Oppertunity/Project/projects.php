<?php 
include 'connection.php';
session_start();

	$query = "select * from projects ";
	$rs=mysqli_query($conn,$query);
	

?>

<!doctype html>
<html lang="">

<head>
<title>Skills Hub</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
<style type="text/css">


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
		<center><h3>ALL PROJECTS</h3></center>
		<?php while($row= mysqli_fetch_array($rs)){?>
		<div class="col-lg-3">								
			
				<table class="table table-striped" style="">
					
			        <tr>
			            <td>PROJECT TITLE</td>
			            <td>
			                <?php echo $row['title']; ?>
			            </td>
			        </tr>
			        <tr>
			            <td>SKILS</td>
			            <td>
			                <?php echo $row['skills']; ?> 
			            </td>
			        </tr>
					<tr>
			            <td>CATEGORY</td>
			            <td>
			                <?php echo $row['category']; ?> 
			            </td>
			        </tr>				   
					<tr>
			            <td>DESCRIPTION</td>
			            <td>
			                <?php echo $row['description']; ?> 
			            </td>
			        </tr>
					<tr>
			            <td colspan="2"><a href="bid.php?proId=<?php echo $row['projectId']; ?> " class="btn btn-block btn-warning">BID FOR PROJECT</a></td>
			            
			        </tr>
		    	</table>					
		</div>
		<?php } ?>
	</div>

</body>
</html>