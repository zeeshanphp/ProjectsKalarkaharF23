<?php
include 'db.php';
$message = "";
$id = $_GET['edit'];
$result = mysqli_query($conn, "SELECT * FROM branches WHERE branchId='$id'");
$row = mysqli_fetch_array($result);
if (isset($_POST['update_branch'])) {
    $folder = 'images/';
    $folder = $folder . basename($_FILES['pimage']['name']);
    move_uploaded_file($_FILES['pimage']['tmp_name'], $folder);
    if (!$_FILES['pimage']['name']) {
        $img = $row['image'];
    } else {
        $img = $_FILES['pimage']['name'];
    }
    $sname = $_POST['sname'];
    $scontact = $_POST['sphone'];
    $scity = $_POST['scity'];
    $query = "UPDATE stations SET sname='$sname',sphone='$scontact',scity='$scity',image='$img' WHERE stationId='$id'";
    if (mysqli_query($conn, $query)) {
        $message = "Station Updated Successfully <a href='manage_stations.php'> View Stations </a>";
    }
}
include 'header.php';
?>
<div class="row mx-0 px-0">
    <div class="col-md-2 bg-dark bg-gradient text-white">
        <?php include 'nav.php' ?>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <?php if ($message != "") { ?>
                    <div class="alert alert-success"><?php echo $message ?></div>
                <?php } ?>
                <center>
                    <h4 class="text-warning">UPDATE BRANCH</h4>
                </center>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <table class="table table-borderless mt-3">
                        <tr>
                            <td><b>Branch Name:</b></td>
                            <td><input type="text" class="form-control" name="sname" value="<?php echo $row['sname']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><b>City</b></td>
                            <td><input type="text" class="form-control" name="scity" value="<?php echo $row['scity']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><b>Contact</b></td>
                            <td><input type="text" class="form-control" name="sphone" value="<?php echo $row['sphone']; ?>" required /></td>
                        </tr>

                        <tr>
                            <td><b>Adress</b></td>
                            <td><input type="text" class="form-control" name="sphone" value="<?php echo $row['adress']; ?>" required /></td>
                        </tr>

                        <tr>
                            <td><b>Picture</b></td>
                            <td><input type="file" name="pimage" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="update_branch" class="btn btn-warning bg-gradient rounded w-100" value="Update Branch"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>


    </div>
    <div class="col-md-3 py-5">
        <img src="images/<?php echo $row['image'] ?>" height="200" width="200" alt="">
    </div>
</div>
<?php
include 'footer.php';
?>