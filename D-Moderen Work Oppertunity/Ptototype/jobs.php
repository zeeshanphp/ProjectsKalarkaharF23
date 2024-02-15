<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM jobs");
include 'header.php'
?>
<div class="container">
    <?php while ($row = mysqli_fetch_array($result)) {
    ?>
        <div class="row bg-light bg-gradient border border-primary mt-4">
            <div class="col-md-8 px-3 py-3">
                <h4><?php echo $row['jname'] ?></h4>
                <p><?php echo $row['jskills'] ?></p>
            </div>
            <div class="col-md-4">
                <div class="row py-3">
                    <div class="col-md-6">
                        <h4>Rs. <?php echo $row['jsalary'] ?></h4>
                        <a href="apply.php?apply=<?php echo $row['jobId'] ?>" class="btn btn-success bg-gradient">Apply For This Job</a>
                    </div>
                    <div class="col-md-6">
                        <h4> <?php echo $row['jloc'] ?></h4>

                        <a href="view_job.php?view=<?php echo $row['jobId'] ?>" class="btn btn-dark bg-gradient">View Job</a>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php
include 'footer.php'
?>