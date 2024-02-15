<?php
session_start();

include 'db.php';
include 'header.php';
$id = $_SESSION['teanant'];
?>
<div class="row">
    <?php
    $query = "SELECT * FROM bookings JOIN rooms ON bookings.roomId=rooms.roomId WHERE bookings.teanantid='$id'";
    $result = mysqli_query($conn, $query);

    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">


                <div class="card-header">
                    <center><b>MY BOOKINGS REQUESTS</b></center>
                </div>
                <table class="table">
                    <div class="card-body">
                        <tr class="table-active">
                            <th>Image</th>
                            <th>Room No</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td> <img src="Owner/images/<?php echo $row['image'] ?>" alt="" height="50" width="50"> </td>
                                <td><?php echo $row['roomno'] ?></td>
                                <td><?php echo $row['type'] ?></td>
                                <td><?php echo $row['order_status'] ?></td>
                            </tr>
                        <?php } ?>
                    </div>
            </div>


            </table>
        </div>
    </div>

</div>

<?php
include 'footer.php'

?>