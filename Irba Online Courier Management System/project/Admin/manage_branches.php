<?php
include 'db.php';
$message = "";


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM branches WHERE branchId='$id'");
    header('location: manage_branches.php');
}


$query = "SELECT * FROM branches";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
include 'header.php';

?>

<div class="row">
    <div class="col-md-2 bg-dark bg-gradient text-white">

        <?php
        include 'nav.php';
        ?>
    </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <center>
                    <h4>MANAGE BRANCHES</h4>
                </center>
            </div>
            <div class="card-body">
                <table class="table">

                    <tr class="table-active">
                        <th>Image</th>
                        <th>Branch Name</th>
                        <th>Branch Contact</th>
                        <th>Branch City</th>
                        <th>Branch Adress</th>
                        <th>Add Member</th>
                        <th>Edit Branch</th>
                        <th>Delete Branch</th>

                    </tr>
                    <?php if ($count > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>

                            <tr>
                                <td style="vertical-align: middle;"><img src="images/<?php echo $row['image'] ?>" height="70" width="70"></td>
                                <td style="vertical-align: middle;"><?php echo $row['sname'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['sphone'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['scity'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['adress'] ?></td>
                                <td style="vertical-align: middle;"> <a href="add_member.php?branch=<?php echo $row['branchId'] ?>" class="btn btn-success bg-gradient rounded">Add Member</a> </td>
                                <td style="vertical-align: middle;"> <a href="edit_branch.php?edit=<?php echo $row['branchId'] ?>" class="btn btn-success bg-gradient rounded">Edit</a> </td>
                                <td style="vertical-align: middle;"> <a href="?delete=<?php echo $row['branchId'] ?>" class="btn btn-danger bg-gradient rounded">Delete</a> </td>

                            </tr>
                        <?php
                        }
                    } else { ?>
                        <tr>
                            <td colspan="5" class="text-danger"> <b> No Record Found</b></td>
                        </tr>
                    <?php }

                    ?>
                </table>
            </div>
        </div>

    </div>
</div>
<?php
include 'footer.php';
?>