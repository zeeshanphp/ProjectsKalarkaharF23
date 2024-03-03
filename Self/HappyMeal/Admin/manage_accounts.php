<?php
include 'db.php';
$message = "";

if (isset($_GET['active'])) {
    $id = $_GET['active'];
    mysqli_query($conn, "UPDATE users SET active='1' WHERE user_id='$id'");
    header('location: manage_users.php');
}

if (isset($_GET['deactive'])) {
    $id = $_GET['deactive'];
    mysqli_query($conn, "UPDATE users SET active='0' WHERE user_id='$id'");
    header('location: manage_accounts.php');
}



$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
include 'header.php';

?>

<div class="row">
    <div class="col-md-2 bg-dark text-white">
        <?php
        include 'nav.php';
        ?>
    </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <center>
                    <h4>MANAGE USERS</h4>
                </center>
            </div>
            <div class="card-body">
                <table class="table table-borderless">

                    <tr>
                        <th>Fullname</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Active</th>

                    </tr>
                    <?php if ($count > 0) {
                        while ($row = mysqli_fetch_array($result)) {                    ?>

                            <tr>
                                <td><?php echo $row['fullname'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['city'] ?></td>
                                <?php
                                if ($row['active'] == "0") {
                                ?>
                                    <td>
                                        <p>User is in-active <br> <b> <a href="?active=<?php echo $row['user_id'] ?>" class="btn btn-primary">Click to Activate User</a> </b></p>
                                    </td>
                                <?php } else {
                                ?>
                                    <td>
                                        <p>User is active <br> <b> <a href="?deactive=<?php echo $row['user_id'] ?>" class="btn btn-danger">Click to In-Activate User</a> </b></p>
                                    </td>
                                <?php }
                                ?>

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