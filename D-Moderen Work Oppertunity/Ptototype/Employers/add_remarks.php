<?php
include 'db.php';
$message = "";
session_start();
$id = $_GET['appId'];
if (isset($_POST['add_remarks'])) {
    $remarks = $_POST['remarks'];
    $query = "UPDATE job_application SET status='$remarks' WHERE applicationId='$id'";
    if (mysqli_query($conn, $query)) {
        $message = "<b> Remarks Added Successfully &nbsp &nbsp <a href='job_requests.php'> View Application </a></b>";
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
                    <h4>ADD REMARKS</h4>
                </center>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <table class="table table-borderless mt-3">

                        <tr>
                            <td style="vertical-align: middle;"><b>Add Remarks:</b></td>
                            <td><textarea name="remarks" class="form-control" id="" cols="30" rows="3"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add_remarks" class="btn btn-warning w-100 bg-gradient" value="Update Remarks"></td>
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