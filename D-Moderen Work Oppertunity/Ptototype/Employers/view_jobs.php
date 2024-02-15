<?php
include 'db.php';
$message = "";
session_start();
$empId = $_SESSION['employer'];
$query = "SELECT * FROM jobs WHERE employerId='$empId'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM jobs WHERE jobId='$id'");
    header('location: view_jobs.php');
}
include 'header.php';

?>

<div class="row px-0 mx-0">
    <div class="col-md-2 bg-primary text-white">
        <?php
        include 'nav.php';
        ?>
    </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header text-color-in">
                <center>
                    <h4>VIEW ALL JOBS</h4>
                </center>
            </div>
            <div class="card-body">
                <table class="table table-borderless table-hover">

                    <tr class="table-active bg-gradient">
                        <th style="vertical-align: middle;">Description</th>
                        <th style="vertical-align: middle;">Job Name</th>
                        <th style="vertical-align: middle;">Job Salary</th>
                        <th style="vertical-align: middle;">Job Skills</th>
                        <th style="vertical-align: middle;">Job Location</th>
                        <th style="vertical-align: middle;">Edit</th>
                        <th style="vertical-align: middle;">Delete</th>
                    </tr>
                    <?php if ($count > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <tr>
                                <td style="vertical-align: middle;"><?php echo $row['jdesc'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['jname'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['jsalary'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['jskills'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['jloc'] ?></td>
                                <td style="vertical-align: middle;"><a href="edit_job.php?edit=<?php echo $row['jobId'] ?>" class="btn btn-dark w-100 bg-gradient rounded">EDIT</a></td>
                                <td style="vertical-align: middle;"><a href="?delete=<?php echo $row['jobId'] ?>" class="btn btn-danger w-100 bg-gradient rounded">DELETE</a></td>
                            </tr>
                        <?php
                        }
                    } else { ?>
                        <tr>
                            <td colspan="5" class="text-danger"> <b> No Record Found</b></td>
                        </tr>
                    <?php }

                    ?>
                </table>
            </div>
        </div>

    </div>
</div>
<?php
include 'footer.php';
?>