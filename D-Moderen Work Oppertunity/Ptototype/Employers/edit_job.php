<?php
include 'db.php';
$message = "";
$id = $_GET['edit'];
$result = mysqli_query($conn, "SELECT * FROM jobs WHERE jobId='$id'");
$row = mysqli_fetch_array($result);
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM jobs WHERE jobId='$id'");
    header('location: view_jobs.php');
}
if (isset($_POST['add_job'])) {

    $jname = $_POST['jname'];
    $jsalary = $_POST['jsalary'];
    $jskills = $_POST['jskills'];
    $jloc = $_POST['jloc'];
    $jdesc = $_POST['jdesc'];
    $query = "UPDATE jobs SET jname='$jname',jloc= '$jloc',jskills='$jskills',jsalary='$jsalary',jdesc='$jdesc' WHERE jobId='$id'";
    if (mysqli_query($conn, $query)) {
        $message = "<b> Job Updated Successfully &nbsp &nbsp <a href='view_jobs.php'> View Jobs </a></b>";
    }
}
include 'header.php';
?>
<div class="row mx-0 px-0">
    <div class="col-md-2 bg-primary text-white">
        <?php include 'nav.php' ?>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-color-in">
                <?php if ($message != "") { ?>
                    <div class="alert alert-success"><?php echo $message ?></div>
                <?php } ?>
                <center>
                    <h4>UPDATE JOB DETAILS</h4>
                </center>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <table class="table table-borderless mt-3">
                        <tr>
                            <td><b>Job Name:</b></td>
                            <td><input type="text" class="form-control" name="jname" value="<?php echo $row['jname']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><b>Job Skills:</b></td>
                            <td><input type="text" class="form-control" name="jskills" value="<?php echo $row['jskills']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><b>Job Location:</b></td>
                            <td><input type="text" class="form-control" name="jloc" value="<?php echo $row['jloc']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><b>Job Salary:</b></td>
                            <td><input type="text" class="form-control" name="jsalary" value="<?php echo $row['jsalary']; ?>" required /></td>
                        </tr>

                        <tr>
                            <td style="vertical-align: middle;"><b>Job Description:</b></td>
                            <td><textarea name="jdesc" class="form-control" id="" cols="30" rows="3"><?php echo $row['jdesc']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add_job" class="btn btn-success w-100 bg-gradient" value="Add Job"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>


    </div>
    <div class="col-md-3"></div>
</div>
<?php
include 'footer.php';
?>