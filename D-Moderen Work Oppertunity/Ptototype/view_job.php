<?php
include 'db.php';
$id = $_GET['view'];
$result = mysqli_query($conn, "SELECT * FROM jobs WHERE jobId='$id'");
$row = mysqli_fetch_array($result);
include 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <center>
                    <h4>VIEW JOB DETAILS</h4>
                </center>
            </div>
            <div class="card-body">
                <h2>
                    <?php echo $row['jname'] ?>
                </h2>
                <p>
                    Skils: <?php echo $row['jskills'] ?>
                </p>
                <p class="mb-3">
                    Salary : <?php echo $row['jsalary'] ?>
                </p>
                <p class="mb-3">
                    Location : <?php echo $row['jloc'] ?>
                </p>
                <p class="py-4">
                <h4>Job Description</h4>
                <?php echo $row['jdesc'] ?>
                </p>
            </div>
            <div class="card-footer">
                <a href="https://twitter.com/intent/tweet?url=http://localhost/ProjectsKalarkaharF23/D-Moderen Work Oppertunity/Ptototype/jobs.php=My Job" target="_blank" rel="noopener noreferrer" class="btn btn-primary bg-gradient">
                    Share on Twitter
                </a>

                <a href="apply.php?apply=<?php echo $row['jobId'] ?>" class="btn text-white float-end bg-gradient bg-banner ">Apply For This Job</a>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>