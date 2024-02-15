<?php
include 'db.php';
$message = "";
if (isset($_POST['add_member'])) {
    $fullname = $_POST['fname'];
    $phone = $_POST['uphone'];
    $email = $_POST['uemail'];
    $pass = $_POST['upass'];
    $username = $_POST['uname'];
    $city = $_POST['ucity'];
    $memberId =  $_GET['branch'];
    $query = "insert into  members(username,fullname,password,email,phone,city,branch) values('$username','$fullname','$pass','$email','$phone','$city' , '$memberId')";
    mysqli_query($conn, $query);
    $message = "Member Added Successfully<a href='list_members.php'>View Members</a>";
    // header("location:manage_member.php");
}
include 'header.php';
?>
<div class="row mx-0 px-0">
    <div class="col-md-2 bg-dark bg-gradient text-white">
        <?php include 'nav.php' ?>
    </div>
    <div class="col-md-6 mt-4">
        <div class="card">
            <div class="card-header">
                <?php if ($message != "") { ?>
                    <div class="alert alert-success"><?php echo $message ?></div>
                <?php } ?>
                <center>
                    <h4 class="text-primary">ADD MEMBER</h4>
                </center>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <table class="table table-borderless">
                        <tr>
                            <td><b>Enter FullName</b></td>
                            <td><input type="text" class="form-control" name="fname" placeholder="Enter Member FullName" required /></td>
                        </tr>
                        <tr>
                            <td><b>Enter Email Adress</b></td>
                            <td><input type="text" class="form-control" name="uemail" placeholder="Enter Member Email Adress" required /></td>
                        </tr>
                        <tr>
                            <td><b>Enter username</b></td>
                            <td><input type="text" class="form-control" name="uname" placeholder="Enter Member Membername " required /></td>
                        </tr>
                        <tr>
                            <td><b>Enter Password</b></td>
                            <td><input type="password" class="form-control" name="upass" placeholder="Enter Password For Member" required /></td>
                        </tr>
                        <tr>
                            <td><b>Enter Phone</b></td>
                            <td><input type="text" class="form-control" name="uphone" placeholder="Enter Member Phone Number" required /></td>
                        </tr>
                        <tr>
                            <td><b>Enter City</b></td>
                            <td><input type="text" class="form-control" name="ucity" placeholder="Enter Member City" required /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add_member" class="btn btn-primary bg-gradient w-100" value="Register As Member" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>


    </div>
    <div class="col-md-3"></div>
</div>
<?php
include 'footer.php';
?>