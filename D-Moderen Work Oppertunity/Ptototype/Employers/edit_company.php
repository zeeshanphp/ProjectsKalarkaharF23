<?php
include 'db.php';
$message = "";
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM company WHERE companyId='$id'");
    header("location:view_companies.php");
}
$id = $_GET['edit'];
$result = mysqli_query($conn, "SELECT * FROM company WHERE companyId='$id'");
$row = mysqli_fetch_array($result);
if (isset($_POST['add_company'])) {
    $folder = 'images/';
    $folder = $folder . basename($_FILES['cimage']['name']);
    move_uploaded_file($_FILES['cimage']['tmp_name'], $folder);
    if (empty($_FILES['cimage']['name'])) {
        $img = $row['cphoto'];
    } else {
        $img = $_FILES['cimage']['name'];
    }
    $cname = $_POST['cname'];
    $cphone = $_POST['ccontact'];
    $cemail = $_POST['cemail'];
    $query = "UPDATE company SET cname='$cname',ccontact='$cphone' ,cemail='$cemail',cphoto='$img' WHERE companyId='$id'";
    if (mysqli_query($conn, $query)) {
        $message = "<b> Company Record Updated Successfully &nbsp &nbsp <a href='view_companies.php'> View Company </a></b>";
    }
}
include 'header.php';
?>
<div class="row mx-0 px-0">
    <div class="col-md-2 bg-primary text-white">
        <?php include 'nav.php' ?>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-color-in">
                <?php if ($message != "") { ?>
                    <div class="alert alert-success"><?php echo $message ?></div>
                <?php } ?>
                <center>
                    <h4>ADD COMPANY</h4>
                </center>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <table class="table table-borderless mt-3">
                        <tr>
                            <td><b>Company Name:</b></td>
                            <td><input type="text" class="form-control" name="cname" value="<?php echo $row['cname']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><b>Company Contact:</b></td>
                            <td><input type="text" class="form-control" name="ccontact" value="<?php echo $row['ccontact']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><b>Company Email:</b></td>
                            <td><input type="text" class="form-control" name="cemail" value="<?php echo $row['cemail']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><b>Company Logo</b></td>
                            <td><input type="file" name="cimage" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add_company" class="btn btn-warning bg-gradient w-100 bg-gradient" value="Add Company"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>


    </div>
    <div class="col-md-3">
        <img src="images/<?php echo $row['cphoto']; ?>" alt="" height="300" width="300">
    </div>
</div>
<?php
include 'footer.php';
?>