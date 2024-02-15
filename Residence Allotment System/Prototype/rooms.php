<?php
session_start();
include 'db.php';
include 'header.php';
?>
<div class="row">
    <?php
    $query = "SELECT * FROM rooms";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result)) {
    ?>
        <div class="col-md-3">
            <div class="card">
                <img src="Owner/images/<?php echo $row['image'] ?>" class="card-img-top" alt="..." height="200px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['type'] ?></h5>
                    <p class="card-text">
                        <b>Room No :</b> <?php echo $row['roomno'] ?>
                    </p>
                    <p class="card-text">
                        <b>Room Fare :</b> <?php echo $row['rent'] ?>
                    </p>
                </div>

                <div class="card-body">
                    <?php
                    if ($row['status'] == "Available") { ?>
                        <a href="booking.php?roomId=<?php echo $row['roomId']; ?>" class="btn btn-success bg-gradient w-100 rounded">Request Booking</a>
                    <?php } else { ?>
                        <span class="badge bg-danger w-100"><?php echo $row['status'] ?></span>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php
include 'footer.php'

?>