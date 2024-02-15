<?php
include 'db.php';
session_start();
$userid = $_SESSION['uid'];
$jobId = $_GET['apply'];
$result = mysqli_query($conn, "SELECT * FROM job_application WHERE jobId='$jobId' AND custId='$userid'");
if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('You have already applied for this job'); window.location.href = 'jobs.php';</script>";
}
if (isset($_POST['apply_job'])) {
    $folder = 'Employers/CV/';
    $folder = $folder . basename($_FILES['cresume']['name']);
    move_uploaded_file($_FILES['cresume']['tmp_name'], $folder);
    $resume = $_FILES['cresume']['name'];
    $query = "INSERT INTO  job_application (custId, jobId, resume) VALUES ('$userid' , '$jobId' , '$resume')";
    mysqli_query($conn, $query);
    header('location: myjobs.php');
}
include 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Apply For Job</h4>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>
                                    <b>Upload Resume:</b>
                                </td>
                                <td><input type="file" name="cresume" class="form-control"></td>
                            </tr>

                        </table>
                </div>
                <div class="card-footer">
                    <input type="submit" name="apply_job" class="btn bg-banner text-white bg-gradient float-end" value="Apply For This Job">
                </div>
                </form>

            </div>

        </div>
    </div>
</div>
<?php include 'footer.php' ?>