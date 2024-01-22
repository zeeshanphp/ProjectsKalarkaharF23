<?php
include 'db.php';
session_start();
$userId = $_SESSION['userId'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$userId'");
$row = mysqli_fetch_array($result);
$message = "";
$error = "";
if (isset($_POST['update_profile'])) {
    $fullname = $_POST['fname'];
    $phone = $_POST['uphone'];
    $email = $_POST['uemail'];
    $username = $_POST['uname'];
    $city = $_POST['ucity'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $query = "UPDATE users SET username='$username',fullname='$fullname',email='$email',phone='$phone',city='$city' WHERE user_id='$userId'";
        if (mysqli_query($conn, $query)) {
            $message = "Profile Updated Successfully";
        }
    } else {
        $error =  "Invalid email. Please enter a valid email address.";
    }
}
include 'header.php'

?>
<div class="row">
    <div class="col-md-12 bg-info py-3">
        <center>
            <h4 class="text-white">
                REGISTER
            </h4>
        </center>
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form method="POST" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                    <?php if ($message != "") { ?>
                        <div class="alert alert-success"><?php echo $message ?></div>
                    <?php } ?>
                    <h2>UPDATE PROFILE</h2>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <td><b>Enter FullName</b></td>
                            <td><input type="text" class="form-control" name="fname" value="<?php echo $row['fullname']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><b>Enter Email Adress</b></td>
                            <td>
                                <input type="email" class="form-control" name="uemail" value="<?php echo $row['email']; ?>" required />
                                <div class="text-danger"> <b> <?php echo $error ?> </b> </div>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Enter Username</b></td>
                            <td><input type="text" class="form-control" name="uname" value="<?php echo $row['username']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><b>Enter Phone</b></td>
                            <td><input type="text" class="form-control" name="uphone" value="<?php echo $row['phone']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><b>Enter City</b></td>
                            <td><input type="text" class="form-control" name="ucity" value="<?php echo $row['city']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="update_profile" class="cust-btn-in btn btn-block" value="Update Profile" /></td>
                        </tr>
                    </table>
                </div>
            </div>

        </form>
    </div>
</div>


<?php include 'footer.php' ?>