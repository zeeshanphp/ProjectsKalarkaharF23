<?php
include 'db.php';
$message = "";

$result = mysqli_query($conn, "SELECT * FROM job_application ja 
                                JOIN jobs j 
                                ON ja.jobId=j.jobId 
                                JOIN customers c
                                ON ja.custId=c.custId");
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
                    <h4>VIEW ALL JOBS REQUESTS</h4>
                </center>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr class="table-active">
                        <th>Seeker Name</th>
                        <th>Seeker Contact</th>
                        <th>Job Name</th>
                        <th>Job Location</th>
                        <th>View CV</th>
                        <th>Remarks </th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['fullname'] ?></td>
                            <td><?php echo $row['phone'] ?></td>
                            <td><?php echo $row['jname'] ?></td>
                            <td><?php echo $row['jloc'] ?></td>
                            <td> <a href="Employers/CV/<?php echo $row['resume'] ?>">Download CV</a> </td>
                            <td><?php echo $row['status'] ?> </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>

    </div>
</div>
<?php
include 'footer.php';
?>