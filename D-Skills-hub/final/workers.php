<?php
include "connection.php";
session_start();
$query = "select *from workers";
$result = mysqli_query($conn, $query);

include 'header.php'

?>


<?php while ($row = mysqli_fetch_array($result)) { ?>
	<div class="col-md-2 " style="margin-top:10px;height:300px; ">
		<div class="col-12">
			<div class="company_profile_info">
				<div class="company-up-info">
					<center><img src="Worker/images/<?php echo $row['image'] ?>" class="img-circle" height="150px" width="105px"></center>
					<center>
						<h5> <?php echo $row['fullname']; ?> </h5>
					</center>
					<center>
						<p> <?php echo $row['speciality']; ?> </p>
					</center>
					<tr>
						<td colspan="2"><a href="hier.php?hier=<?php echo $row['workerId'] ?>" title="" class="btn btn-primary btn-block">Hire</a></td>
					</tr>
					<tr>
						<td colspan="2"><a href="profile.php?profile=<?php echo $row['workerId'] ?>" title="" class="btn btn-primary btn-block">View Profile</a></td>
					</tr>
				</div>
			</div><!--company_profile_info end-->
		</div>

	</div>
<?php } ?>

<?php
include 'footer.php'
?>