<?php
include 'db.php';

include 'header.php';
?>

<div class="container-fluid">
    <center>
        <h1 class="py-5 text-color mx-auto text-gradient"><b>SEARCH JOBS</b></h1>
    </center>
    <?php
    if (isset($_POST['nsearch'])) {
        $find = $_POST['jname'];
        $location = $_POST['location'];
        $query = "select * from jobs where jname LIKE '%$find%' OR jloc = '$location'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($result)) {
    ?>
            <div class="row bg-light bg-gradient border border-primary mt-4">
                <div class="col-md-8 px-3 py-3">
                    <h4><?php echo $row['jname'] ?></h4>
                    <p><?php echo $row['jskills'] ?></p>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Rs. <?php echo $row['jsalary'] ?></h4>
                            <a href="apply.php?apply=<?php echo $row['jobId'] ?>" class="btn btn-success bg-gradient">Apply For This Job</a>
                        </div>
                        <div class="col-md-6 py-4">
                            <a href="view_job.php?view=<?php echo $row['jobId'] ?>" class="btn btn-dark bg-gradient">View Job</a>

                        </div>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
</div>
<?php
include 'footer.php';
?>