<?php
include 'db.php';
$message = "";
if (isset($_POST['add_Branch'])) {
    $folder = 'images/';
    $folder = $folder . basename($_FILES['pimage']['name']);
    move_uploaded_file($_FILES['pimage']['tmp_name'], $folder);
    $img = $_FILES['pimage']['name'];
    $sname = $_POST['sname'];
    $scontact = $_POST['sphone'];
    $scity = $_POST['scity'];
    $adress = $_POST['adress'];
    $query = "INSERT INTO  branches(sname,sphone,scity,image,adress) VALUES('$sname' , '$scontact' , '$scity' , '$img' , '$adress')";
    if (mysqli_query($conn, $query)) {
        $message = "Branch Added Successfully <a href='manage_branches.php'> View Branchs </a>";
    }
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
                    <h4 class="text-primary">ADD BRANCH</h4>
                </center>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <table class="table table-borderless mt-3">
                        <tr>
                            <td><b>Branch Name:</b></td>
                            <td><input type="text" class="form-control" name="sname" placeholder="Enter Branch Name" required /></td>
                        </tr>
                        <tr>
                            <td><b>City</b></td>
                            <td><input type="text" class="form-control" name="scity" placeholder="Enter Branch City" required /></td>
                        </tr>
                        <tr>
                            <td><b>Contact</b></td>
                            <td><input type="text" class="form-control" name="sphone" placeholder="Enter Branch Contact" required /></td>
                        </tr>
                        <tr>
                            <td><b>Adress</b></td>
                            <td><input type="text" class="form-control" name="adress" placeholder="Enter Branch Adress" required /></td>
                        </tr>

                        <tr>
                            <td><b>Picture</b></td>
                            <td><input type="file" name="pimage" class="form-control"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" name="add_Branch" class="btn btn-success w-100" value="Add Branch"></td>
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