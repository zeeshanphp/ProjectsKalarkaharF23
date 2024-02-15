<?php
include 'db.php';
session_start();
$userId = $_SESSION['userId'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$userId'");
$row = mysqli_fetch_array($result);
$message = "";
$error = "";
if (isset($_POST['add_user'])) {
    $fullname = $_POST['fname'];
    $phone = $_POST['uphone'];
    $email = $_POST['uemail'];
    $pass = $_POST['upass'];
    $username = $_POST['uname'];
    $city = $_POST['ucity'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $query = "insert into  users(username,fullname,password,email,phone,city) values('$username','$fullname','$pass','$email','$phone','$city')";
        if (mysqli_query($conn, $query)) {
            $message = "User Registered Successfully<a href='login.php'>Go To Login Page</a>";
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
                USER PROFILE PAGE
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
                    <center>
                        <h4 class="text-success">PROFILE PAGE</h4>
                    </center>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <td><b>Enter FullName</b></td>
                            <td><?php echo $row['fullname']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Enter Email Adress</b></td>
                            <td><?php echo $row['email']; ?></td>

                        </tr>
                        <tr>
                            <td><b>Enter Username</b></td>
                            <td><?php echo $row['username']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Enter Phone</b></td>
                            <td><?php echo $row['phone']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Enter City</b></td>
                            <td><?php echo $row['city']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

        </form>
    </div>
</div>


<?php include 'footer.php' ?>