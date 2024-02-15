<?php
include 'db.php';
session_start();
$message = "";

$userId = $_SESSION['uid'];
if (isset($_POST['update_profile'])) {
    $folder = 'Employers/ProfilePics/';
    $folder = $folder . basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'], $folder);
    $img = $_FILES['photo']['name'];
    $skills = $_POST['skills'];
    $qual = $_POST['qual'];
    $query = "INSERT INTO profiles (skills,qual,photo,customerId) VALUES('$skills' , '$qual' , '$img' , '$userId')";
    if (mysqli_query($conn, $query)) {
        $message = "Profile  Updated Successfully!";
    }
}


include 'header.php';

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if ($message != "") { ?>
                <div class="alert alert-success"><?php echo $message ?></div>
            <?php } ?>
            <center>
                <h4 class="text-primary">UPDATE YOUR PROFILE</h4>
            </center>
            <form method="post" enctype="multipart/form-data">
                <table class="table table-borderless">
                    <tr>
                        <td>Enter Your Skills</td>
                        <td><input type="text" class="form-control" name="skills" placeholder="" required /></td>
                    </tr>
                    <tr>
                        <td>Enter Your Qualification</td>
                        <td><input type="text" class="form-control" name="qual" placeholder="" required /></td>
                    </tr>
                    <tr>
                        <td>Upload Your Photo</td>
                        <td><input type="file" name="photo" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="update_profile" class="btn bg-banner text-white bg-gradient" value="Update Profile"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php'
?>