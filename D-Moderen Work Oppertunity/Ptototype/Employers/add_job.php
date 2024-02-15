<?php
include 'db.php';
$message = "";
session_start();
if (isset($_POST['add_job'])) {
    $jname = $_POST['jname'];
    $jsalary = $_POST['jsalary'];
    $jskills = $_POST['jskills'];
    $jloc = $_POST['jloc'];
    $jcompany = $_POST['company'];
    $jdesc = $_POST['jdesc'];
    $employerId = $_SESSION['employer'];
    $query = "INSERT INTO  jobs(jname,jloc,jskills,jcompany,jsalary,jdesc,employerId) VALUES ('$jname' , '$jloc' , '$jskills' , '$jcompany' , '$jsalary' , '$jdesc' , '$employerId')";
    if (mysqli_query($conn, $query)) {
        $message = "<b> Job Added Successfully &nbsp &nbsp <a href='view_jobs.php'> View Jobs </a></b>";
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
                    <h4>ADD JOB</h4>
                </center>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <table class="table table-borderless mt-3">
                        <tr>
                            <td><b>Job Name:</b></td>
                            <td><input type="text" class="form-control" name="jname" placeholder="Enter Job Name" required /></td>
                        </tr>
                        <tr>
                            <td><b>Job Skills:</b></td>
                            <td><input type="text" class="form-control" name="jskills" placeholder="Enter Job Skills" required /></td>
                        </tr>
                        <tr>
                            <td><b>Job Location:</b></td>
                            <td><input type="text" class="form-control" name="jloc" placeholder="Enter Job Location" required /></td>
                        </tr>
                        <tr>
                            <td><b>Job Salary:</b></td>
                            <td><input type="text" class="form-control" name="jsalary" placeholder="Enter Job Salary" required /></td>
                        </tr>
                        <tr>
                            <td><b>Company:</b></td>
                            <td>
                                <select name="company" class="form-select">
                                    <?php
                                    $result = mysqli_query($conn, "SELECT * FROM company");
                                    while ($row = mysqli_fetch_array($result)) {  ?>
                                        <option value="<?php echo $row['companyId'] ?>"><?php echo $row['cname'] ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle;"><b>Job Description:</b></td>
                            <td><textarea name="jdesc" class="form-control" id="" cols="30" rows="3"></textarea></td>
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