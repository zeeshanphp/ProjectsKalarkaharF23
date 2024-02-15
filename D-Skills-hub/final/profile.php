<?php
include 'connection.php';
$id = $_GET['profile'];
$result = mysqli_query($conn, "SELECT * FROM workers WHERE workerId='$id'");
$row = mysqli_fetch_array($result);
include 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <center>
                    <img src="Worker/images/<?php echo $row['image'] ?>" height="150" width="150" class="card-img-top img-circle">
                </center>
                <div class="card-body">
                    <center>
                        <h5><?php echo $row['skills'] ?></h5>
                    </center>
                    <center>
                        <p><?php echo $row['speciality'] ?></p>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <table class="table table-striped" style="height:500px;">
                <tr>
                    <td style="vertical-align: middle;"> <b>USERNAME</b> </td>
                    <td style="vertical-align: middle;">
                        <?php echo $row['username'];  ?>
                    </td>

                </tr>
                <tr>
                    <td style="vertical-align: middle;"> <b>FULL NAME</b> </td>
                    <td style="vertical-align: middle;">
                        <?php echo $row['fullname'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"> <b>EMAIL</b> </td>
                    <td style="vertical-align: middle;">
                        <?php echo $row['email'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"> <b>PHONE NO</b> </td>
                    <td style="vertical-align: middle;">
                        <?php echo $row['phone'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"> <b>SPECIALITY</b></td>
                    <td style="vertical-align: middle;">
                        <?php echo $row['speciality'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"> <b>SKILLS</b></td>
                    <td style="vertical-align: middle;">
                        <?php echo $row['skills'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"> <b>DESCRIPTION</b></td>
                    <td style="vertical-align: middle;">
                        <?php echo $row['Description'];  ?>
                    </td>
                </tr>

            </table>
        </div>
    </div>
</div>

<?php
include 'footer.php'
?>