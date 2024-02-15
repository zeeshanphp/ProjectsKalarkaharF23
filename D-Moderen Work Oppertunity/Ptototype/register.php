<?php

include 'db.php';
$message = "";
$style = "";
if (isset($_POST['add_user'])) {
    $fullname = $_POST['fname'];
    $phone = $_POST['uphone'];
    $email = $_POST['uemail'];
    $pass = $_POST['upass'];
    $username = $_POST['uname'];
    $city = $_POST['ucity'];
    $query = "insert into  customers(username,fullname,password,email,phone,city) values('$username','$fullname','$pass','$email','$phone','$city')";
    if (mysqli_query($conn, $query)) {
        $style = "alert alert-success";
        $message = "Customer Registered Successfully <a href='login.php'>Go To Login Page</a>";
    } else {
        $style = "alert alert-danger";
        $message = "Customer Registeration Failed";
    }
}
include 'header.php'
?>

<div class="container-fluid">
    <center>
        <h1 class="py-2 text-color mx-auto text-gradient"><b>REGISTER CUSTOMERS</b></h1>
    </center>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="POST" enctype="multipart/form-data">
                <?php if ($message != "") { ?>
                    <div class="<?php echo $style ?>"><?php echo $message ?></div>
                <?php } ?>
                <table class="table table-borderless">
                    <tr>
                        <td><b>Enter FullName</b></td>
                        <td><input type="text" class="form-control" name="fname" placeholder="Enter User FullName" required /></td>
                    </tr>
                    <tr>
                        <td><b>Enter Email Adress</b></td>
                        <td><input type="text" class="form-control" name="uemail" placeholder="Enter User Email Adress" required /></td>
                    </tr>
                    <tr>
                        <td><b>Enter Username</b></td>
                        <td><input type="text" class="form-control" name="uname" placeholder="Enter User Username " required /></td>
                    </tr>
                    <tr>
                        <td><b>Enter Password</b></td>
                        <td><input type="password" class="form-control" name="upass" placeholder="Enter Password For User" required /></td>
                    </tr>
                    <tr>
                        <td><b>Enter Phone</b></td>
                        <td><input type="text" class="form-control" name="uphone" placeholder="Enter User Phone Number" required /></td>
                    </tr>
                    <tr>
                        <td><b>Enter City</b></td>
                        <td><input type="text" class="form-control" name="ucity" placeholder="Enter User City" required /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="add_user" class="btn text-white w-100 bg-gradient bg-banner " value="Register As Customer" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer';
?>