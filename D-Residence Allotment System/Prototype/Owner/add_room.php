<?php
include 'db.php';
$message = "";
if (isset($_POST['add_room'])) {
    $folder = 'images/';
    $folder = $folder . basename($_FILES['rimage']['name']);
    move_uploaded_file($_FILES['rimage']['tmp_name'], $folder);
    $img = $_FILES['rimage']['name'];
    $room = $_POST['rno'];
    $rent = $_POST['rrent'];
    $type = $_POST['type'];
    $query = "INSERT INTO  rooms(roomno,rent,type,image,status) VALUES('$room' , '$rent' , '$type' , '$img' , 'Available')";
    if (mysqli_query($conn, $query)) {
        $message = "<b> Room/Flat Added Successfully &nbsp &nbsp <a href='view_rooms.php'> View Room Details </a></b>";
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
                    <h4>ADD ROOM/FLAT</h4>
                </center>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <table class="table table-borderless mt-3">
                        <tr>
                            <td><b>Room/Flat No:</b></td>
                            <td><input type="text" class="form-control" name="rno" placeholder="Enter Room No" required /></td>
                        </tr>
                        <tr>
                            <td><b>Rent</b></td>
                            <td><input type="text" class="form-control" name="rrent" placeholder="Enter Room Rent" required /></td>
                        </tr>
                        <tr>
                            <td><b>Type</b></td>
                            <td>
                                <select name="type" id="" class="form-select">
                                    <option value="">---Select Type--</option>
                                    <option value="Room">Room</option>
                                    <option value="Flat">Flat</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><b>Picture</b></td>
                            <td><input type="file" name="rimage" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add_room" class="btn btn-success w-100 bg-gradient" value="Add Room/Flat"></td>
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