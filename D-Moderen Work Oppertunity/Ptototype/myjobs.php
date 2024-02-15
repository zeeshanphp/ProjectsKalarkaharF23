<?php
include 'db.php';
session_start();
$userid = $_SESSION['uid'];
$result = mysqli_query($conn, "SELECT * FROM job_application ja JOIN jobs j ON ja.jobId=j.jobId WHERE ja.custId='$userid'");
include 'header.php'
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center>
                <h4>ALL JOB APPLICATIONS</h4>
            </center>
            <table class="table">
                <tr class="table-active">
                    <td>Job Name</td>
                    <td>Job Location</td>
                    <td>Job Salary</td>
                    <td>Job Skills</td>
                    <td>Status </td>
                </tr>
                <?php while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['jname'] ?></td>
                        <td><?php echo $row['jloc'] ?></td>
                        <td><?php echo $row['jsalary'] ?></td>
                        <td><?php echo $row['jskills'] ?></td>
                        <td><?php echo $row['status'] ?> </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>


</div>
<?php
include 'footer.php'
?>