<?php
include 'db.php';
$courierId = "";
if (isset($_POST['track_shipment'])) {
    $semail = $_POST['email'];
    $sphone = $_POST['phone'];
    $query = "select * from courier where semail='$semail' AND sphone='$sphone'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $fetch_details = mysqli_fetch_array($result);
        $courierId = $fetch_details['courierId'];
    }
}
include 'header.php'
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5 mb-4">
                <div class="card-header" style="background-color: rgb(242 30 38/1);">
                    <center>
                        <h2 class="text-white">Shipment Details</h2>
                    </center>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Courier Status</th>
                            <th>Date</th>
                        </tr>
                        <?php
                        $result_courier = mysqli_query($conn, "SELECT * FROM track_courier WHERE courierId='$courierId'");
                        if (mysqli_num_rows($result_courier) > 0) {
                            while ($fetch_courier = mysqli_fetch_array($result_courier)) {
                        ?>
                                <tr>
                                    <td><?php echo $fetch_courier['current_status']; ?></td>
                                    <td><?php echo $fetch_courier['date_on']; ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="2">
                                    <center>
                                        <h4>No Record Found</h4>
                                    </center>
                                </td>
                            </tr>
                        <?php }

                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
<?php
include 'footer.php'
?>