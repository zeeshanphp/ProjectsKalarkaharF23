<?php
include 'db.php';
session_start();
$custId = $_SESSION['uid'];
$result = mysqli_query($conn, "SELECT * FROM customers JOIN profiles ON customers.custId=profiles.profileId WHERE customers.custId='$custId'");
$row = mysqli_fetch_array($result);
include 'header.php';
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="Employers/ProfilePics/<?php echo $row['photo']; ?>" class="card-img-top rounded-circle" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row["skills"] ?> </h5>
                    <p class="card-text">
                        <center><?php echo $row['qual'] ?> </center>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>MY PROFILE</h4>
                </div>
                <div class="card-body">
                    <table class="table table-borderless h-50">
                        <tr>
                            <td>Fullname</td>
                            <td><?php echo $row['fullname'] ?></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><?php echo $row['username'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $row['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td><?php echo $row['phone'] ?></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><?php echo $row['city'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
include 'footer.php';
?>