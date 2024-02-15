<?php
include 'db.php';
$message = "";
$query = "SELECT * FROM jobs";
$result = mysqli_query($conn, $query);
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
                    <h4>ALL JOBS ON OUR PLATFORM</h4>
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
                        <th style="vertical-align: middle;">Delete</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td style="vertical-align: middle;"><?php echo $row['jdesc'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $row['jname'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $row['jsalary'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $row['jskills'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $row['jloc'] ?></td>
                            <td style="vertical-align: middle;"><a href="?delete=<?php echo $row['jobId'] ?>" class="btn btn-danger w-100 bg-gradient rounded">DELETE</a></td>
                        </tr>
                    <?php
                    } ?>
                </table>
            </div>
        </div>

    </div>
</div>
<?php
include 'footer.php';
?>