<?php
include 'db.php';
session_start();
$id = $_SESSION['memberId'];
$branch = $_SESSION['branchId'];
$result_branch = mysqli_query($conn, "SELECT sname FROM branches WHERE branchId='$branch'");
$row_branch = mysqli_fetch_array($result_branch);
// print_r($row_branch);
// die();
$rec_branch = $row_branch['sname'];
$message = "";
$result = mysqli_query($conn, "SELECT * FROM courier WHERE rbranch='$rec_branch'");
$num_of_parcel_recieved = mysqli_num_rows($result);

include 'header.php';
?>
<div class="row">
    <div class="col-md-2 nav-back text-white">
        <?php include 'nav.php' ?>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-primary bg-gradient mt-2">
                <center>
                    <h4 class="text-white">Couriers Of My Branch</h4>
                </center>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <thead>

                        <tr>
                            <th>Sender</th>
                            <th>Reciever</th>
                            <th>Destination</th>
                            <th>Status</th>
                            <th>Update Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_array($result)) {
                        ?>
                                <tr>
                                    <td style="vertical-align: middle;"><?php echo $row['sname'] ?></td>
                                    <td style="vertical-align: middle;"><?php echo $row['rname'] ?></td>
                                    <td style="vertical-align: middle;"><?php echo $row['rbranch'] ?> </td>
                                    <td style="vertical-align: middle;"><?php echo $row['status'] ?> </td>
                                    <td style="vertical-align: middle;"><a href="update_status.php?status=<?php echo $row['courierId'] ?>" class="btn btn-danger bg-gradient w-100">Update Status</a></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <td colspan="5">
                                <center><b class="text-danger">No Record Found</b></center>
                            </td>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>

</div>
<?php
include 'footer.php';
?>