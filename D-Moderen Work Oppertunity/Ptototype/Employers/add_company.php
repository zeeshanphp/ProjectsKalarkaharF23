<?php
include 'db.php';
$message = "";
if (isset($_POST['add_company'])) {
    $folder = 'images/';
    $folder = $folder . basename($_FILES['cimage']['name']);
    move_uploaded_file($_FILES['cimage']['tmp_name'], $folder);
    $img = $_FILES['cimage']['name'];
    $cname = $_POST['cname'];
    $cphone = $_POST['ccontact'];
    $cemail = $_POST['cemail'];
    $query = "INSERT INTO  company(cname,ccontact,cemail,cphoto) VALUES('$cname' , '$cphone' , '$cemail' , '$img')";
    if (mysqli_query($conn, $query)) {
        $message = "<b> Company Added Successfully &nbsp &nbsp <a href='view_companies.php'> View Company </a></b>";
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
                            <td><input type="text" class="form-control" name="cname" placeholder="Enter Company Name" required /></td>
                        </tr>
                        <tr>
                            <td><b>Company Contact:</b></td>
                            <td><input type="text" class="form-control" name="ccontact" placeholder="Enter Company Contact" required /></td>
                        </tr>
                        <tr>
                            <td><b>Company Email:</b></td>
                            <td><input type="text" class="form-control" name="cemail" placeholder="Enter Company Email" required /></td>
                        </tr>
                        <tr>
                            <td><b>Company Logo</b></td>
                            <td><input type="file" name="cimage" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add_company" class="btn btn-success w-100 bg-gradient" value="Add Company"></td>
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