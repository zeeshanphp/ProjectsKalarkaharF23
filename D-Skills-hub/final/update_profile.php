<?php
include 'connection.php';
session_start();
$user = $_SESSION['userId'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE userId='$user'");
$row = mysqli_fetch_array($result);
if (isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $contact = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "UPDATE users SET username='$username',pass='$password' ,email='$email',phone='$contact',fullname='$fullname' WHERE userId='$user'";
    mysqli_query($conn, $query);
    header('location:update_profile.php');
}

?>

<!doctype html>
<html lang="">

<head>
    <title>Skills Hub</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <style type="text/css">
        table {
            border: 0px;
            width: 400px;
            margin-left: 500px;
            height: 300px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- header section -->
    <header id="header">
        <div class="header-content clearfix"> <a class="logo" href="home.php">Skills <span>Hub</span></a>
            <div class="navigation">
                <?php include 'nav-bar.php' ?>
            </div>
        </div>
    </header>
    <div class="row">
        <center>
            <h3>UPDATE PROFILE FORM</h3>
        </center>
        <div class="col-lg-4">
            <form action="" method="post">
                <table class="table table-striped">

                    <tr>
                        <td>USERNAME</td>
                        <td>
                            <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td>
                            <input type="text" name="password" value="<?php echo $row['pass']; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>FULL NAME</td>
                        <td>
                            <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>EMAIL</td>
                        <td>
                            <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>PHONE NO</td>
                        <td>
                            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="form-group"><input type="submit" name="update" value="UPDATE PROFILE" class="btn btn-info" style="height: 40px; width:400px;">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

</html>