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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Work Oppertunity</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container-fluid bg-banner">
        <div class="row">
            <div class="col-md-4 py-3">
                <img src="images/logo.jpg" alt="" height="80px" width="180px">
            </div>
            <div class="col-md-8 float-end py-3">
                <form action="search.php" method="post">
                    <table class="table table-borderless">
                        <tr>
                            <td style="height: 50px;"><input type="text" class="form-control" name="" placeholder="Search Jobs , Keywords , Companies" required style="height: 50px;" /></td>
                            <td style="height: 50px;"><input type="text" class="form-control" name="" placeholder="Enter Location Or Remote" required style="height: 50px;" /></td>
                            <td>
                                <button type="submit" name="" class="btn btn-signup w-100" style="height: 50px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg> </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>
    </div>
    <?php include 'nav.php' ?>
    <div class="container-fluid">
        <center>
            <h1 class="py-5 text-color mx-auto text-gradient"><b>REGISTER CUSTOMERS</b></h1>
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
</body>

</html>