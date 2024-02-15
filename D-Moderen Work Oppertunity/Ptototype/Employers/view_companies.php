<?php
include 'db.php';
$message = "";

if (isset($_GET['assign']) && isset($_GET['room'])) {
    $id = $_GET['assign'];
    $room = $_GET['room'];
    mysqli_query($conn, "UPDATE bookings SET order_status='Room Assigned' WHERE bookingId='$id'");
    mysqli_query($conn, "UPDATE rooms SET status='Room is booked' WHERE roomId='$room'");

    header('location: manage_bookings.php');
}

$query = "SELECT * FROM company";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
include 'header.php';

?>

<div class="row px-0 mx-0">
    <div class="col-md-2 bg-primary text-white">
        <?php
        include 'nav.php';
        ?>
    </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header text-color-in">
                <center>
                    <h4>VIEW ALL COMPANIES</h4>
                </center>
            </div>
            <div class="card-body">
                <table class="table table-borderless table-hover">

                    <tr class="table-active bg-gradient">
                        <th style="vertical-align: middle;">Image</th>
                        <th style="vertical-align: middle;">Company Name</th>
                        <th style="vertical-align: middle;">Company Phone</th>
                        <th style="vertical-align: middle;">Company Email</th>
                        <th style="vertical-align: middle;">Edit</th>
                        <th style="vertical-align: middle;">Delete</th>
                    </tr>
                    <?php if ($count > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>

                            <tr>
                                <td><img src="images/<?php echo $row['cphoto'] ?>" height="70" width="70"></td>
                                <td style="vertical-align: middle;"><?php echo $row['cname'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['ccontact'] ?></td>
                                <td style="vertical-align: middle;"><?php echo $row['cemail'] ?></td>
                                <td><a href="edit_company.php?edit=<?php echo $row['companyId'] ?>" class="btn btn-dark w-100 bg-gradient rounded">EDIT</a></td>
                                <td><a href="?delete=<?php echo $row['companyId'] ?>" class="btn btn-danger w-100 bg-gradient rounded">DELETE</a></td>
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